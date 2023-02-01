@extends('layouts.template')
@section('title', 'New Article')

@section('content')
		<div class="card w-md-75 mx-3 mx-md-auto my-4 border border-info">
				<div class="card-body">
						<h3 class="card-title">
								<span class="text-info"><i class="fas fa-plus"></i></span>
								Save Article
						</h3>
						<div class="card-text">
								<form class="row" name="formNewArticle" onsubmit="submitForm()">
										<div class="col-12 mb-2">
												<label for="title" class="form-label mb-0 ms-1 asteriskRed">
														Título
												</label>
												<input type="text" class="form-control" id="title" name="title" required maxlength="400" />
										</div>
										<div class="col-12 col-md-6 mb-2">
												<label for="newsSite" class="form-label mb-0 ms-1 asteriskRed">
														Site de Notícias
												</label>
												<input type="text" class="form-control" id="newsSite" name="newsSite" required maxlength="240" />
										</div>
										<div class="col-12 col-md-6 mb-2">
												<label for="url" class="form-label mb-0 ms-1 asteriskRed">
														Url
												</label>
												<input type="text" class="form-control" id="url" name="url" required maxlength="400" />
										</div>
										<div class="col-12 col-md-6 mb-2">
												<label for="imageUrl" class="form-label mb-0 ms-1 asteriskRed">
														Url da Imagem
												</label>
												<input type="text" class="form-control" id="imageUrl" name="imageUrl" required maxlength="400" />
										</div>
								</form>
						</div>
				</div>
		</div>
@endsection
