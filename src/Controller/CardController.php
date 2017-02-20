<?php
namespace App\Controller;
use Slim\Http\Request;
use Slim\Http\Response;
use App\Controller\Controller;
use App\Model\Card;
class CardController extends Controller
{
	public function __invoke(Request $request, Response $response, Array $args)
	{
		$data['cards'] = Card::where('list', $args['id'])->get();
		$data['title'] = "Task Manager";
		return $this->renderer->render($response, 'card', $data);
	}

	public function create_card(Request $request, Response $response, Array $args)
	{
		$data = [];
		
		if(null != $this->session->getFlash('postCard')) {
			$data['cards'] = (object)$this->session->getFlash('postCard');
		}
		if(isset($args['id']))
			$data['card'] = Card::find($args['id']);
		$data['title'] = "Form Card";
		return $this->renderer->render($response, 'card-form', $data);
	}

	public function save(Request $request, Response $response, Array $args)
	{
		$postData = $request->getParsedBody();
		 // insert
        if ($postData['id'] == '') {
        	$this->session->setFlash('success', 'Card Berhasil Dibuat');
            $card = new card();
        } else {
        // update
        	$this->session->setFlash('success', 'Card Berhasil Diperbaharui');
            $card = Card::find($postData['id']);
        }
        $card->id = $postData['id'];
        $card->list = $postData['idlist'];
        $card->cardname = ($postData['cardname']);
        $card->save();
        return $response->withRedirect('/board/list/'.$postData['board']);
	}
	
	public function delete(Request $request, Response $response, Array $args)
	{
		$card = Card::find($args['id']);
		$card->delete();
		$this->session->setFlash('success', 'card Terhapus');
		return $response->withRedirect($this->router->pathFor('tampil-card'));
	}
}