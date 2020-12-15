<?php

/**
*
* Controller do site.
*
* @author Code Universe
*
**/
class SocialController extends Controller
{

	public function index()
	{	


		$this->setLayout('site/shared/layout.php');
		$this->view('site/social/index.php');

	}

}