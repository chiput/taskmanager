<?php

namespace App\Controller;

use Slim\Http\Request;
use Slim\Http\Response;
use App\Controller\Controller;
use App\Model\Checklist;

class ChecklistController extends Controller
{
	public function __invoke(Request $request, Response $response, Array $args)
	{
		$data['checklists'] = Checklist::where('card_id', $args['id'])->orderBy('id', 'DESC')->get();

		return $this->renderer->render($response, 'checklist', $data);
	}

	public function save(Request $request, Response $response, Array $args)
	{
		$postData = $request->getParsedBody();

		 // insert
		if ($postData['pk'] == '') {
	    	$this->session->setFlash('success', 'Checklist Berhasil Dibuat');
	        $checklist = new Checklist();
	   		$checklist->checklistname = $postData['checklistname'];
	   		$checklist->card_id = $postData['cardid'];
   		} else {
   			$this->session->setFlash('success', 'List Berhasil Diperbaharui');
            $checklist = Checklist::find($postData['pk']);
	        $checklist->checklistname = ($postData['value']);
   		}
        $checklist->save();
	}
}