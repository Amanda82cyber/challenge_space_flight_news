<?php

namespace App\Http\Controllers;

use App\Model\ArticleModel;
use Illuminate\Http\Request;

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
			return view('pages.default')->with([
				'title' => 'Article',
				'contents' => $article,
				'component' => 'components.article',
			]);
		} else {
			return view('pages.form-article')->with('article', $article);
		}
	}

	public function save(Request $request, $id)
	{
		if (!empty($id)) {
			$article = ArticleModel::find($id);
			$request['updatedAt'] = now();
		} else {
			$article = new ArticleModel();
		}

		if (!$request->get('featured')) {
			$request['featured'] = 0;
		}

		$article->fill($request->all())->save();

		return;
	}

	public function delete($id)
	{
		$article = ArticleModel::find($id);
		$article->fill(['deleted_at' => now()])->save();

		return response('Article deleted successfully!', 200);
	}
}
