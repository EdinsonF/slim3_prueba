<?php
namespace App\Models;

use \Illuminate\Database\Eloquent\Model;

class Crud extends Model
{
    protected $table = 'producto';
    public $timestamps = false;
    protected $fillable = ['name','price', 'description', 'image'];
}
