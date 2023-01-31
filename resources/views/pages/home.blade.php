@extends('layouts.template')
@section('title', 'Home')

@section('content')
		<div class="card w-50 mx-auto mt-4 border border-info">
				<div class="card-body">
						<h3 class="card-title">
								Back-end Challenge 2021
								<span class="text-info"><i class="fas fa-medal"></i></span>
						</h3>
						<h6 class="card-subtitle mb-2 text-muted">Space Flight News</h6>
						<div class="card-text">
								Os passos obrigatórios deste desafio eram:
								<ul class="list-group list-group-flush list-group-numbered">
										<li class="list-group-item pb-0">
												Desenvolver as seguintes rotas:
												<ul class="list-group list-group-flush">
														<li class="list-group-item pb-0">
																[GET]/: Retornar um Status: 200 e uma Mensagem "Back-end Challenge 2021 🏅 - Space Flight News"
														</li>
														<li class="list-group-item pb-0">
																[GET]/articles/: Listar todos os artigos da base de dados, utilizar o sistema de paginação para não
																sobrecarregar a REQUEST
														</li>
														<li class="list-group-item pb-0">
																[GET]/articles/{id}: Obter a informação somente de um artigo
														</li>
														<li class="list-group-item pb-0">
																[POST]/articles/: Adicionar um novo artigo
														</li>
														<li class="list-group-item pb-0">
																[PUT]/articles/{id}: Atualizar um artigo baseado no id
														</li>
														<li class="list-group-item pb-0">
																[DELETE]/articles/{id}: Remover um artigo baseado no id
														</li>
												</ul>
										</li>
										<li class="list-group-item pb-0">
												Desenvolver um script para alimentar o banco de dados com todos os artigos da
												<a href="https://api.spaceflightnewsapi.net/v3/documentation#/" target="_blank">Space Flight News API</a>
										</li>
										<li class="list-group-item pb-0">
												Desenvolver uma CRON para ser executada diariamente às 9h e armazenar no banco de dados os novos artigos da
												API
										</li>
								</ul>
						</div>
				</div>
		</div>
@endsection
