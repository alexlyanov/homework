<?php

class ResumeController
{

	public function actionIndex()
	{
		require_once(ROOT.'/views/resume/index.php');
		return 1;
	}

}