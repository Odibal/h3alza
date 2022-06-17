<?php namespace Max\Intern\Updates;

use Schema;
use October\Rain\Database\Schema\Blueprint;
use October\Rain\Database\Updates\Migration;

class CreateInternsTable extends Migration
{
    public function up()
    {
        Schema::create('max_intern_interns', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string("first_name");
            $table->string("last_name");
            $table->string("description");
            $table->string("email");
            $table->integer("phone");
            $table->string("linkedIn");
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('max_intern_interns');
    }
}
