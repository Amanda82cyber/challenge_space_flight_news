@extends('layouts.template')
@section('title', 'Create/Update Article')

@section('content')
		<div class="card w-md-75 mx-3 mx-md-auto my-4 border border-info">
				<div class="card-body">
						<h3 class="card-title">
								<span class="text-info"><i class="fas fa-file-medical"></i></span>
								Create/Update Article
						</h3>
						<div class="card-text">
								<form class="row" name="formArticle" onsubmit="submitForm(event, {{ $article->id ?? '' }})">
										@csrf
										<div class="col-12 mb-2">
												<label for="title" class="form-label mb-0 ms-1 asteriskRed">
														Title
												</label>
												<input type="text" class="form-control" id="title" name="title" required maxlength="400"
														value="{{ $article->title ?? '' }}" />
										</div>
										<div class="col-12 col-md-6 mb-2">
												<label for="newsSite" class="form-label mb-0 ms-1 asteriskRed">
														News Site
												</label>
												<input type="text" class="form-control" id="newsSite" name="newsSite" required maxlength="240"
														value="{{ $article->newsSite ?? '' }}" />
										</div>
										<div class="col-12 col-md-6 mb-2">
												<label for="url" class="form-label mb-0 ms-1 asteriskRed">
														Url
												</label>
												<input type="url" class="form-control" id="url" name="url" required maxlength="400"
														value="{{ $article->url ?? '' }}" />
										</div>
										<div class="col-12 col-md-6 mb-2">
												<label for="imageUrl" class="form-label mb-0 ms-1 asteriskRed">
														Image Url
												</label>
												<input type="url" class="form-control" id="imageUrl" name="imageUrl" required maxlength="400"
														value="{{ $article->imageUrl ?? '' }}" />
										</div>
										<div class="col-12 col-md-6 mb-2">
												<label for="publishedAt" class="form-label mb-0 ms-1 asteriskRed">
														Published
												</label>
												<input type="datetime-local" class="form-control" id="publishedAt" name="publishedAt" required
														value="{{ $article->publishedAt ?? '' }}" />
										</div>
										<div class="col-12 mb-2">
												<label for="summary" class="form-label mb-0 ms-1">
														Summary
												</label>
												<textarea class="form-control" id="summary" name="summary">{!! $article->summary ?? '' !!}</textarea>
										</div>
										<div class="col-12 col-md-10">
												<div class="form-check form-switch">
														<input class="form-check-input mt-2" type="checkbox" role="switch" id="featured" name="featured"
																value="1" {{ isset($article->featured) ? ($article->featured ? 'checked' : '') : '' }} />
														<label class="form-check-label mt-2" for="featured">Featured?</label>
												</div>
										</div>
										<div class="col-12 col-md-2">
												<div class="d-grid">
														<button type="submit" class="btn btn-info btn-sm pt-2">Save</button>
												</div>
										</div>
								</form>
						</div>
				</div>
		</div>
@endsection

@push('js')
		<script>
				function submitForm(event, id) {
						event.preventDefault();

						var form = event.target.name;

						$.ajax({
								url: '/articles/' + id,
								method: id == '' ? 'post' : 'put',
								data: $(`form[name='${form}']`).serialize(),
								success: function() {
										$(`form[name='${form}'] input, form[name='${form}'] textarea`).val('');
										Swal.fire({
												icon: 'success',
												title: 'Article saved successfully!',
												showConfirmButton: false,
												timer: 1500
										})
								},
						})
				}
		</script>
@endpush
