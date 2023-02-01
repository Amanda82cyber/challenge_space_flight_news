<div class="card w-md-50 mx-3 mx-md-auto my-4 border border-info">
		<img src="{{ $contents->imageUrl }}" class="card-img-top" alt="article-{{ $contents->id }}">
		<div class="card-body">
				<h3 class="card-title">
						@if ($contents->featured)
								<span class="text-warning" title="Destaque"><i class="fas fa-star"></i></span>
						@endif
						{{ $contents->title }}
				</h3>
				<h6 class="card-subtitle mb-2 text-muted">
						{{ $contents->newsSite }} - {{ $contents->formatted_published_at }}
				</h6>
				<div class="card-text">
						<p>{{ $contents->summary }}</p>
						<p class="text-muted">
								<span class="fw-bold">Atualizado:</span> {{ $contents->formatted_updated }}
						</p>
						<p class="m-0">
								<a href="{{ $contents->url }}" class="link-info fw-bold" target="_blank">
										Matéria Completa <i class="fas fa-external-link"></i>
								</a>
						</p>
				</div>
		</div>
</div>
