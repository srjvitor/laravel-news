<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRatingsTable extends Migration
{
    public function up(){
        Schema::create('ratings', function (Blueprint $table) {
            $table->id();
						$table->integer('note');
						$table->foreignId('notice_id')->constrained('notices')->onDelete('cascade');
						$table->foreignId('user_id')->constrained('users')->onDelete('cascade');						
						$table->timestamps();
        });
		}		
		public function down(){
        Schema::dropIfExists('ratings');
    }
}
