<div class="px-5 py-4">
		<div class="row row-cols-1 row-cols-md-3 row-cols-lg-4 g-4">
				@foreach ($contents as $content)
						<div class="col">
								<div class="card h-100 border border-info">
										<img src="{{ $content->imageUrl }}" class="card-img-top" alt="article-{{ $content->id }}">
										<div class="card-body">
												<h5 class="card-title">
														@if ($content->featured)
																<span class="text-warning" title="Destaque"><i class="fas fa-star"></i></span>
														@endif
														{{ $content->title }}
												</h5>
												<h6 class="card-subtitle mb-2 text-muted">{{ $content->newsSite }}</h6>
												<p class="card-text">{{ $content->summary }}</p>
												<p class="text-muted m-0">
														<span class="fw-bold">Publicado: </span> {{ $content->formatted_published_at }}
												</p>
												<p class="text-muted">
														<span class="fw-bold">Atualizado: </span> {{ $content->formatted_updated }}
												</p>
												<p class="m-0">
														<a href="{{ $content->url }}" class="link-info fw-bold" target="_blank">
																Matéria Completa <i class="fas fa-external-link"></i>
														</a>
												</p>
										</div>
										<div class="card-footer border-top border-info">
												<div class="row justify-content-center align-items-center">
														<div class="col-4 text-center">
																<a href="/articles/{{ $content->id }}?flg=view"
																		class="badge rounded-pill text-bg-info text-white fw-bold text-decoration-none">
																		<i class="fas fa-eye"></i> Ver mais
																</a>
														</div>
														<div class="col-4 text-center">
																<span class="badge rounded-pill text-bg-success cursor-pointer">
																		<i class="fas fa-pencil"></i> Editar
																</span>
														</div>
														<div class="col-4 text-center">
																<span class="badge rounded-pill text-bg-danger cursor-pointer">
																		<i class="fas fa-trash"></i> Excluir
																</span>
														</div>
												</div>
										</div>
								</div>
						</div>
				@endforeach
		</div>

		<div class="mt-4 div-pagination">{{ $contents->links() }}</div>
</div>
