<?php

namespace App\Controller;

use App\Models\Crud;

class CrudController extends Controller
{
    public function index($request, $response, $args)
    {

      /* Aca mostrar de una vez la lista de los productos por medion del CRUD */

      $products = Crud::all();

	    return $this->view->render($response, 'index.twig', ['products' => $products ] );
    }

    public function show($request, $response, $args)
    {

    }

    public function store($request, $response, $args)
    {
      $body=$request->getParsedBody();

      $create = Crud::create([

           'name' => $body['producto'],

           'price' => $body['precio'],

           'description' => $body['descripcion']

       ]);
       var_dump("Registrado");

       $products = Crud::all();

 	    return $this->view->render($response, 'index.twig', ['products' => $products ] );

       //$this->index(null,null,null);
       //$body=$request->getParsedBody();
      //
      // //dd($body['producto']);
      // $nombre=$body['producto'];
      // $precio=$body['precio'];
      // $descripcion=$body['descripcion'];
      // echo"PRODUCTO: $nombre, PRECIO: $precio, DESCRIPCION: $descripcion";
       // redireccionar de nuevoa  la vista o ver si se hara con el json o no se ! XD

    }

    public function update($request, $response, $args)
    {

    }
}
