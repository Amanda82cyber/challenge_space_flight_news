<?php

namespace App\Console\Jobs;

use App\Model\ArticleModel;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;

class CronNewArticles
{
  public static function run()
  {
    $articles = Http::get('https://api.spaceflightnewsapi.net/v3/articles');
    $newArticles = $articles->json();

    foreach ($newArticles as $new) {
      $alreadyArticle = ArticleModel::where('api_id', $new['id'])->withTrashed()->first();

      if (!$alreadyArticle) {
        DB::table('article')->insert([
          'api_id' => $new['id'],
          'title' => $new['title'],
          'url' => $new['url'],
          'imageUrl' => $new['imageUrl'],
          'newsSite' => $new['newsSite'],
          'summary' => $new['summary'],
          'publishedAt' => $new['publishedAt'],
          'updatedAt' => $new['updatedAt'],
          'featured' => $new['featured'],
          'created_at' => now(),
        ]);
      }
    }
  }
}
