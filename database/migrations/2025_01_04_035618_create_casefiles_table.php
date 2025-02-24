<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('casefiles', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('number');
            $table->text('summary');
            $table->longText('description');
            $table->unsignedBigInteger('user_id'); // Create the user_id column
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('casefiles');
    }
};
