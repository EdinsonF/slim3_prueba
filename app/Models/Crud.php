<?php
namespace App\Models;

use \Illuminate\Database\Eloquent\Model;
use DB;

class Crud extends Model
{
    protected $table = 'producto';
    public $timestamps = true;
    protected $fillable = ['name','price', 'description', 'image'];


    public static function CargarProductos(){

    	return DB::table('productos')->select('producto.*')->get();


    }
}
