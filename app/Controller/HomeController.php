<?php

namespace App\Controller;

class HomeController extends Controller
{
	public function index($request, $response)
	{
		  $datos = array("index" => "! Hello WORLD",
											"edin"=> "figueroa");
	    return $this->view->render($response, 'layout.twig',$datos);
	}

	/**
	 * la funcion se encarga de listar los datos de prueba
	 * @param $request
	 * @param $response
	 * @return void
	 */
	public function getListProdcut($request, $response)
	{

	    // return $response->withStatus(200)->->;
	}

	/**
	 * @param
	 * @return
	 */
	public function saveProuct($request, $response)
	{

	}
	/**
	 * @param
	 * @return
	 */
	public function update($request, $response)
	{

	}
	/**
	 * @param
	 * @return
	 */
	public function delete($request, $response)
	{

	}
}
