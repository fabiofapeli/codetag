<?php
use \Illuminate\Database\Schema\Blueprint;

class CreateCodTagsTable
{

    public function up(){
        Schema::create('codepress_tags',function(Blueprint $table){
            $table->increments('id');
            $table->string('name');
            $table->timestamps();
        });
    }

    public function down(){
        Schema::drop('codepress_tags');
    }

}