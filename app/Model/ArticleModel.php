<?php

namespace App\Model;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ArticleModel extends Model
{
	use SoftDeletes;

	protected $table = 'article';

	public $fillable = [
		'title',
		'url',
		'imageUrl',
		'newsSite',
		'summary',
		'publishedAt',
		'updatedAt',
		'featured',
	];

	protected $dates = ['deleted_at'];
	protected $appends = ['formatted_published_at', 'formatted_updated'];

	public function getFormattedPublishedAtAttribute()
	{
		return empty($this->attributes['publishedAt']) ? '' : Carbon::parse($this->attributes['publishedAt'])->format('d/m/Y H:i');
	}

	public function getFormattedUpdatedAttribute()
	{
		return empty($this->attributes['updatedAt']) ? '' : Carbon::parse($this->attributes['updatedAt'])->format('d/m/Y H:i');
	}
}
