<?php

/**
*
* Controller do site.
*
* @author Code Universe
*
**/
class EsportesController extends Controller
{

	public function index()
	{	


		$this->setLayout('site/shared/layout.php');
		$this->view('site/esportes/index.php');

	}

}