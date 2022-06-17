<?php namespace Max\Firm\Updates;

use Schema;
use October\Rain\Database\Schema\Blueprint;
use October\Rain\Database\Updates\Migration;

class CreateFirmsTable extends Migration
{
    public function up()
    {
        Schema::create('max_firm_firms', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string("name");
            $table->string("description");
            $table->string("location");
            $table->string("email");
            $table->integer("phone");
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('max_firm_firms');
    }
}
