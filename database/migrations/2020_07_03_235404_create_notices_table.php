<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNoticesTable extends Migration
{
    public function up(){
        Schema::create('notices', function (Blueprint $table) {
            $table->id();
            $table->string('text', 1000);
						$table->integer('category');
						$table->foreignId('user_id')->constrained('users')->onDelete('cascade');						
						$table->timestamps();
        });
    }
    public function down(){
        Schema::dropIfExists('notices');
    }
}
