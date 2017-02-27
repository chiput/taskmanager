<?php

namespace App\Controller;

use Slim\Http\Request;
use Slim\Http\Response;
use App\Controller\Controller;
use App\Model\User;

class UserController extends Controller
{
	public function __invoke(Request $request, Response $response, Array $args)
	{
		$data['users'] = User::all();
		$data['title'] = "Lihat User";

		return $this->renderer->render($response, 'user', $data);
	}

	public function form(Request $request, Response $response, Array $args)
	{
		$data = [];
		
		if(null != $this->session->getFlash('postData')) {
			$data['users'] = (object)$this->session->getFlash('postData');
		}

		if(isset($args['id']))
			$data['user'] = User::find($args['id']);


		$data['title'] = "Form User";

		return $this->renderer->render($response, 'user-form', $data);
	}

	public function save(Request $request, Response $response, Array $args)
	{
		$postData = $request->getParsedBody();

		 // insert
        if ($postData['id'] == '') {
        	$this->session->setFlash('success', 'User Tersimpan');
            $user = new User();
        } else {
        // update
        	$this->session->setFlash('success', 'User Terbaharui');
            $user = user::find($postData['id']);
        }

        $user->username = $postData['username'];
        $user->password = md5($postData['password']);
        $user->role = $postData['role'];

        $user->save();

        return $response->withRedirect($this->router->pathFor('tampil-user'));

	}

	public function delete(Request $request, Response $response, Array $args)
	{
		$user = User::find($args['id']);
		$user->delete();
		$this->session->setFlash('success', 'User Terhapus');
		return $response->withRedirect($this->router->pathFor('tampil-user'));
	}

	public function login(Request $request, Response $response, Array $args)
	{
		$data = [];
		
		if(null != $this->session->getFlash('postData')) {
			$data['users'] = (object)$this->session->getFlash('postData');
		}

		$data['title'] = "Login User";

		return $this->renderer->render($response, 'login', $data);

	}

	public function checkuser(Request $request, Response $response, Array $args)
	{
		$postData = $request->getParsedBody();
		$data['title'] = "Login System";
		$username = $postData['username'];
        $password = md5($postData['password']);
		$user = User::where([['username', '=', $username], ['password', '=', $password]])->get();
		$num = $user->count();

		$encode = json_encode($user);
		$users = json_decode($encode, true);

		if($num>0){		
			$_SESSION['uname'] = $users['0']['username'];
			$_SESSION['id'] = $users['0']['id'];
			$_SESSION['status'] = 'userLogin';

			if($users['0']['role']==1){
				$_SESSION['role'] = 'Administrator';
			} else {
				$_SESSION['role'] = 'User';
			}	

			return $response->withRedirect($this->router->pathFor('tampil-board'));

		} else {
			$this->session->setFlash('gagal', 'username atau password salah');
			return $response->withRedirect($this->router->pathFor('login'));

		}

	}

	public function logout(Request $request, Response $response, Array $args)
	{
		session_destroy();
		return $response->withRedirect($this->router->pathFor('login'));
	}
}