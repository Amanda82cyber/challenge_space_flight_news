@extends('layouts.template')
@section('title', 'Articles')

@section('content')
		<div class="px-5 py-4">
				<div class="row row-cols-1 row-cols-md-3 row-cols-lg-4 g-4">
						@foreach ($articles as $article)
								<div class="col">
										<div class="card h-100 border border-info">
												<img src="{{ $article->imageUrl }}" class="card-img-top" alt="article-{{ $article->id }}">
												<div class="card-body">
														<h5 class="card-title">{{ $article->title }}</h5>
														<h6 class="card-subtitle mb-2 text-muted">{{ $article->newsSite }}</h6>
														<p class="card-text">{{ $article->summary }}</p>
														<p class="text-muted m-0">
																<span class="fw-bold">Publicado: </span> {{ $article->formatted_published_at }}
														</p>
														<p class="text-muted">
																<span class="fw-bold">Atualizado: </span> {{ $article->formatted_updated }}
														</p>
												</div>
												<div class="card-footer border-top border-info">
														<div class="row justify-content-center align-items-center">
																<div class="col-4 text-center">
																		<span class="badge rounded-pill text-bg-info text-white fw-bold">
																				<i class="fas fa-eye"></i> Ver mais
																		</span>
																</div>
																<div class="col-4 text-center">
																		<span class="badge rounded-pill text-bg-success">
																				<i class="fas fa-pencil"></i> Editar
																		</span>
																</div>
																<div class="col-4 text-center">
																		<span class="badge rounded-pill text-bg-danger">
																				<i class="fas fa-trash"></i> Excluir
																		</span>
																</div>
														</div>
												</div>
										</div>
								</div>
						@endforeach
				</div>

				<div class="mt-4 div-pagination">{{ $articles->links() }}</div>
		</div>
@endsection
