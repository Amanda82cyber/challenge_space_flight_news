<?php

namespace App\Http\Controllers;

use App\Model\ArticleModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;

class ArticleController extends Controller
{
	public function index()
	{
		$articles = ArticleModel::orderBy('id', 'desc')->paginate(8);

		return view('pages.default')->with([
			'title' => 'Articles',
			'contents' => $articles,
			'component' => 'components.articles',
		]);
	}

	public function details(Request $request, $id)
	{
		$article = ArticleModel::find($id);

		if ($request->get('flg') == 'view') {
			if (!$article) {
				return response('There is no article with this id!', 412);
			}

			return view('pages.default')->with([
				'title' => 'Article',
				'contents' => $article,
				'component' => 'components.article',
			]);
		} else {
			return view('pages.form-article')->with('article', $article);
		}
	}

	public function save(Request $request, $id = null)
	{
		if (!empty($id)) {
			$article = ArticleModel::find($id);

			if (!$article) {
				return response('There is no article with this id!', 412);
			}

			$request['updatedAt'] = now();
		} else {
			$article = new ArticleModel();
		}

		if (!$request->get('featured')) {
			$request['featured'] = 0;
		}

		$article->fill($request->all())->save();

		return response('Article saved successfully!', 200);
	}

	public function delete($id)
	{
		$article = ArticleModel::find($id);

		if ($article) {
			$article->delete();
		} else {
			return response('There is no article with this id!', 412);
		}

		return response('Article deleted successfully!', 200);
	}

	public function testCronNewArticles()
	{
		$articles = Http::get('https://api.spaceflightnewsapi.net/v3/articles');
		$newArticles = $articles->json();
		$insertArticle = [];

		foreach ($newArticles as $new) {
			$alreadyArticle = ArticleModel::where('api_id', $new['id'])->first();

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

				$insertArticle[] = $new;
			}
		}

		return ($insertArticle ? $insertArticle : 'Não há novos artigos!');
	}
}
