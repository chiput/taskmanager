<?php

namespace App\Controller;

use Slim\Http\Request;
use Slim\Http\Response;
use App\Controller\Controller;
use App\Model\Board;

class BoardController extends Controller
{
	public function __invoke(Request $request, Response $response, Array $args)
	{
		$data['boards'] = Board::all();
		$data['title'] = "Task Manager";

		return $this->renderer->render($response, 'board', $data);
	}

	public function form(Request $request, Response $response, Array $args)
	{
		$data = [];
		
		if(null != $this->session->getFlash('postBoard')) {
			$data['boards'] = (object)$this->session->getFlash('postBoard');
		}

		if(isset($args['id']))
			$data['board'] = Board::find($args['id']);


		$data['title'] = "Form Board";

		return $this->renderer->render($response, 'board-form', $data);
	}

	public function save(Request $request, Response $response, Array $args)
	{
		$postData = $request->getParsedBody();

		 // insert
        if ($postData['pk'] == '') {

        	$this->session->setFlash('success', 'Board Berhasil Dibuat');
            $board = new Board();
       		$board->boardname = ($postData['boardname']);
        } else {
        // update
        	$board = Board::find($postData['pk']);
	        $board->boardname = ($postData['value']);
        }

        $board->save();

        return $response->withRedirect($this->router->pathFor('tampil-board'));

	}

	public function delete(Request $request, Response $response, Array $args)
	{
		$board = Board::find($args['id']);
		$board->delete();
		$this->session->setFlash('success', 'Board Terhapus');
		return $response->withRedirect($this->router->pathFor('tampil-board'));
	}
}