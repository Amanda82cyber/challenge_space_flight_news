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
												@if ($content->summary)
														<p class="card-text">{{ $content->summary }}</p>
												@endif
												<p class="text-muted m-0">
														<span class="fw-bold">Published: </span> {{ $content->formatted_published_at }}
												</p>
												@if ($content->formatted_updated)
														<p class="text-muted">
																<span class="fw-bold">Updated: </span> {{ $content->formatted_updated }}
														</p>
												@endif
												<p class="m-0">
														<a href="{{ $content->url }}" class="link-info fw-bold" target="_blank">
																Full Article <i class="fas fa-external-link"></i>
														</a>
												</p>
										</div>
										<div class="card-footer border-top border-info">
												<div class="row justify-content-center align-items-center">
														<div class="col-4 text-center">
																<a href="/articles/{{ $content->id }}?flg=view"
																		class="badge rounded-pill text-bg-info text-white fw-bold text-decoration-none">
																		<i class="fas fa-eye"></i> See More
																</a>
														</div>
														<div class="col-4 text-center">
																<a href="/articles/{{ $content->id }}"
																		class="badge rounded-pill text-bg-success text-white fw-bold text-decoration-none">
																		<i class="fas fa-pencil"></i> Edit
																</a>
														</div>
														<div class="col-4 text-center">
																<span class="badge rounded-pill text-bg-danger cursor-pointer"
																		onclick="deleteArticle({{ $content->id }})">
																		<i class="fas fa-trash"></i> Delete
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

@push('js')
		<script>
				function deleteArticle(id) {
						Swal.fire({
								title: 'You really want to cancel this item?',
								icon: 'warning',
								showCancelButton: true,
								confirmButtonText: 'Delete!'
						}).then((result) => {
								if (result.isConfirmed) {
										$.ajax({
												url: '/articles/' + id,
												method: 'delete',
												success: function(response, textStatus, xhr) {
														Swal.fire({
																icon: 'success',
																title: response,
																showConfirmButton: false,
																timer: 1500
														});
												}
										});
								}
						})
				}
		</script>
@endpush
