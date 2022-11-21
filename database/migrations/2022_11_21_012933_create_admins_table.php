<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('admins', function (Blueprint $table) {
            // Primary Key
            $table->id();
            // Own Fields
            $table->string('name');
            $table->string('type');
            $table->integer('vendor_id');// (type==vendor)? $id : 0
            $table->string('mobile');
            $table->string('email')->unique();
            $table->string('password');
            $table->string('image');
            $table->tinyInteger('status');
            // Timestamps from creation
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        // Drop the Table if Already Exists in Database
        Schema::dropIfExists('admins');
    }
};
