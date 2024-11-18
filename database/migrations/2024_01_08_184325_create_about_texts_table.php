<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
	public function up()
	{
	   Schema::create('about_texts', function (Blueprint $table) {
		   $table->id();
		   $table->string('section_title');
		   $table->text('section_content');
		   $table->timestamps();
	   });
	}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('about_texts');
    }
};
