<?php

namespace App\Http\Controllers;

use App\Model\ArticleModel;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
	public function index()
	{
		$articles = ArticleModel::orderBy('id', 'desc')->paginate(8);

		return view('pages.article')->with('articles', $articles);
	}
}
