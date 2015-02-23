<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Dashboard Backend - Collegeradio Leeuwarden</title>
	
	{{ HTML::style('media/vendor/bootstrap/css/bootstrap.min.css') }}
	{{ HTML::style('media/css/dashboard.css') }}


</head>
<body>
<div class="container">
	<div class="row">
		<div class="col-md-3">
			<div class="left-dashboard"> <!-- Begin left-dashboard -->
				<div class="row">
					<div class="col-md-12">
						{{ HTML::image('media/images/logo.png', $alt="Collegeradio-leeuwarden logo", $attributes = array('class' => 'img-responsive', 'style' => 'padding:40px;')) }}
						<div class="category">
							<h2 class="category-title">
								Pages 
							</h2>
							<div class="category-content">
								<ul class="category-list">
									<li class="category-list-item">view pages</li>
									<li class="category-list-item">add page</li>
									<li class="category-list-item">edit page</li>
								</ul>
							</div>
						</div>
						<div class="category">
							<h2 class="category-title">
								ITEMS 
							</h2>
							<div class="category-content">
								<ul class="category-list">
									<li class="category-list-item">view items</li>
									<li class="category-list-item">add item</li>
									<li class="category-list-item">edit item</li>
								</ul>
							</div>
						</div>
						<div class="category">
							<h2 class="category-title">
								Users 
							</h2>
							<div class="category-content">
								<ul class="category-list">
									<li class="category-list-item">view users</li>
									<li class="category-list-item">add user</li>
									<li class="category-list-item">edit user</li>
								</ul>
							</div>
						</div>
						<div class="category">
							<h2 class="category-title">Media</h2>
							<div class="category-content">
								<ul class="category-list">
									<li class="category-list-item">view all media</li>
									<li class="category-list-item">add media</li>
									<li class="category-list-item">edit media</li>
								</ul>
							</div>
						</div>
						<p class="cms-footer-title">Collegeradio Leeuwarden CMS</p>
					</div> <!-- col -->
				</div>	<!-- row -->	
			</div> <!-- end left-dashbord -->
		</div> <!-- end col-md-3 -->

		<div class="top-bar"> <!-- Topbar -->
				<div class="top-bar-breadcrumb">
					<div class="row">
						<div class="col-md-3">
							<p>DASHBOARD | COLLEGE RADIO LEEUWARDEN</p>
						</div>
						<div class="col-md-6">
							<p>
								{{ $Welkom }}
							</p>
						</div>
						<div class="col-md-2">
							<a class="btn btn-login" href="{{ URL::to('logout') }}" role="button">Log uit</a>
						</div>
					</div>
				</div>
			</div> <!-- End topbar -->
		<div class="col-md-12 content-container">	<!-- Begin content -->
			<div class="container">
				<div class="row">
					<div class="col-md-12">
							@yield('content')
					</div>
				</div>
			</div>
		</div>
	</div>
</div>



</body>
</html>