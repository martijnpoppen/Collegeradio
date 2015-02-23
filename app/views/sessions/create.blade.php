<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Login bij Dashboard</title>


        {{ HTML::script('media/vendor/jquery/jquery-v1.11.1.min.js') }}

        {{ HTML::style('media/vendor/bootstrap/css/bootstrap.min.css') }}
        {{ HTML::style('media/css/style.css') }}

        {{ HTML::script('media/vendor/bootstrap/js/bootstrap.min.js') }}


</head>
<body class="login">
	<div class="container">
		<div class="row">
			<div class="col-xl-12">
				<a href="/">
					<center style="margin-top:15px;">
                            {{ HTML::image('media/images/logo.png', $alt="Collegeradio-leeuwarden logo", $attributes = array('class' => 'img-responsive')) }}
                    </center>
                </a>
				<h1>Login Formulier</h1>

				{{ Form::open(array('route' => 'sessions.store')) }}
					<ul class="login-form">
						<li>
							{{ Form::label('email', 'Email') }}
							{{ Form::text('email') }}
						</li>

						<li>
							{{ Form::label('password','Password') }}
							{{ Form::password('password') }}
						</li>
						<li>
							{{ Form::submit('login', $attributes = array('class' => 'btn btn-login') ) }}
						</li>
						
					</ul>
				{{ Form::close() }}

			</div>
		</div>
	</div>
</body>
</html>


