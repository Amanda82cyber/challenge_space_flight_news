<nav class="navbar navbar-expand-lg bg-light border-bottom border-info pb-1">
		<div class="container-fluid">
				<a class="navbar-brand" href="#">
						<img src="/img/logo/SNAPI_logo.png" alt="Logo" width="30" height="30"
								class="d-inline-block align-text-center" />
						Challenge Space Flight News
				</a>

				<button class="navbar-toggler border-info" type="button" data-bs-toggle="collapse" data-bs-target="#navbarHeaderNav"
						aria-controls="navbarNav" aria-expanded="false">
						<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbarHeaderNav">
						<ul class="navbar-nav">
								<li class="nav-item">
										<a class="nav-link {{ Request::segment(1) == 'article' ? '' : 'active' }}" href="/">
												<i class="fas fa-home"></i> Home
										</a>
								</li>
								<li class="nav-item">
										<a class="nav-link {{ Request::segment(1) == 'article' ? 'active' : '' }}" href="/article">
												<i class="fas fa-file-alt"></i> Articles
										</a>
								</li>
						</ul>
				</div>
		</div>
</nav>
