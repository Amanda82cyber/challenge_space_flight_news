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
						@if ($contents->summary)
								<p>{{ $contents->summary }}</p>
						@endif
						@if ($contents->formatted_updated)
								<p class="text-muted">
										<span class="fw-bold">Updated:</span> {{ $contents->formatted_updated }}
								</p>
						@endif
						<p class="m-0">
								<a href="{{ $contents->url }}" class="link-info fw-bold" target="_blank">
										Full Article <i class="fas fa-external-link"></i>
								</a>
						</p>
				</div>
		</div>
</div>
