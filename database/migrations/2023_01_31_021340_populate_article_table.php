<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;

class PopulateArticleTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		$articles = Http::get('https://api.spaceflightnewsapi.net/v3/articles');
		$articlesJson = $articles->json();

		foreach ($articlesJson as $article) {
			DB::table('article')->insert([
				'id' => $article['id'],
				'title' => $article['title'],
				'url' => $article['url'],
				'imageUrl' => $article['imageUrl'],
				'newsSite' => $article['newsSite'],
				'summary' => $article['summary'],
				'publishedAt' => $article['publishedAt'],
				'updatedAt' => $article['updatedAt'],
				'featured' => $article['featured'],
				'created_at' => now(),
			]);
		}
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		DB::table('article')->truncate();
	}
}
