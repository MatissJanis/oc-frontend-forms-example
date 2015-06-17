<?php namespace Mja\Forms\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class CreateEntriesTable extends Migration
{

    public function up()
    {
        Schema::create('mja_forms_entries', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('title');
            $table->string('slogan')->nullable();
            $table->text('body');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('mja_forms_entries');
    }

}
