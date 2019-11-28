<?php

include_once(ROOT.'/models/Comments.php');

class CommentsController
{

	public function actionIndex()
	{
		require_once(ROOT.'/views/comments/index.php');
		return 1;
	}

	public function actionGetComments()
	{
		$commObj = new Comments();
		$res = $commObj->getComments();
		return $res;
	}

	public function actionPostComment()
	{
		$name = $_POST["name"];
		$comment = $_POST["comment"];
		if (strlen($name) > substr_count($name,' ') && strlen($comment) > substr_count($comment,' ')) {
			$newObj = new Comments();
			$newObj->postComment($name, $comment);
		}
		$this->actionIndex();
		return 1;
	}

}