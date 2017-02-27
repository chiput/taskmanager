<?php
namespace App\Controller;
use Slim\Http\Request;
use Slim\Http\Response;
use App\Controller\Controller;
use App\Model\Comment;
class CommentController extends Controller
{
	public function __invoke(Request $request, Response $response, Array $args)
	{
		$data['comments'] = Comment::where('card_id', $args['id'])->orderBy('id', 'DESC')->get();
		$data['title'] = "Comment List";
		return $this->renderer->render($response, 'comment', $data);
	}

	public function create_comment(Request $request, Response $response, Array $args)
	{
		$data = [];
		
		if(null != $this->session->getFlash('postComment')) {
			$data['comments'] = (object)$this->session->getFlash('postComment');
		}
		if(isset($args['id']))
			$data['comment'] = Comment::find($args['id']);
		$data['title'] = "Form Comment";
		return $this->renderer->render($response, 'comment-form', $data);
	}

	public function save(Request $request, Response $response, Array $args)
	{
		$postData = $request->getParsedBody();
		$comment = new comment();
        $comment->id = $postData['id'];
        $comment->card_id = $postData['idcard'];
        $comment->user_id = $postData['iduser'];
        $comment->comment = $postData['comment'];
        $comment->save();
        return $response->withRedirect('/board');
	}
	
	public function delete(Request $request, Response $response, Array $args)
	{
		$comment = Comment::find($args['id']);
		$comment->delete();
		$this->session->setFlash('success', 'comment Terhapus');
		return $response->withRedirect($this->router->pathFor('tampil-comment'));
	}
}