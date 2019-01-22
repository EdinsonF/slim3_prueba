<?php

namespace App\Controller;

use App\Models\Crud;

class CrudController extends Controller
{
    public function index($request, $response, $args)
    {
	    return $this->view->render($response, 'index.twig');


    }

    public function show($request, $response, $args)
    {

    }

    public function store($request, $response, $args)
    {
      var_dump("hola");
      //echo '{"wine": ' . json_encode($request) . '}';

    }

    public function update($request, $response, $args)
    {

    }
}
