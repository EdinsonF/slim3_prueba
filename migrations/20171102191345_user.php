<?php
use Phpmig\Migration\Migration;
use Illuminate\Database\Capsule\Manager as Capsule;
use App\Models\User as Users;
class User extends Migration
{
    /**
     * Do the migration
     */
    public function up()
    {

        Capsule::schema()->create('producto', function($table)
        {
            $table->increments('id');
            $table->string('name');
            $table->string('price');
            $table->string('description');
            $table->string('image');
            $table->timestamps();
        });
    }
    /**
     * Undo the migration
     */
    public function down()
    {
        Capsule::schema()->drop('producto');
    }
}
