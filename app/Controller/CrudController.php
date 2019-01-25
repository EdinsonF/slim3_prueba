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
      $body=$request->getParsedBody();

      $create = Crud::create([

           'nombre' => $body['producto'],

           'precio' => $body['precio'],

           'descriccion' => $body['descripcion'],

       ]);
       var_dump("Registrado");
       //$body=$request->getParsedBody();
      //
      // //dd($body['producto']);
      // $nombre=$body['producto'];
      // $precio=$body['precio'];
      // $descripcion=$body['descripcion'];
      // echo"PRODUCTO: $nombre, PRECIO: $precio, DESCRIPCION: $descripcion";


    }

    public function update($request, $response, $args)
    {

    }
}
