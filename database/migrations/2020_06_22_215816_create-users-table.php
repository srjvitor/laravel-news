<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    public function up(){
        Schema::create('users', function (Blueprint $table){
            $table->id();
            $table->string('email', 30);
            $table->string('password', 10);
						$table->string('name', 30);
						$table->timestamps();
        });
    }
    public function down(){
        Schema::dropIfExists('users');
    }
}