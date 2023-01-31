<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateArticleTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('article', function (Blueprint $table) {
			$table->id();
			$table->string('title', 400)->nullable();
			$table->string('url', 400)->nullable();
			$table->string('imageUrl', 400)->nullable();
			$table->string('newsSite', 240)->nullable();
			$table->text('summary')->nullable();
			$table->string('publishedAt', 240)->nullable();
			$table->string('updatedAt', 240)->nullable();
			$table->boolean('featured')->nullable();
			$table->timestamps();
			$table->softDeletes();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::dropIfExists('article');
	}
}
