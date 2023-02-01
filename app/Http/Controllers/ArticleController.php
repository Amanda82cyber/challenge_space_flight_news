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

		return view('pages.default')->with([
			'title' => 'Article',
			'contents' => $article,
			'component' => $request->get('flg') == 'view' ? 'components.article' : 'pages.form-article',
		]);
	}
}
