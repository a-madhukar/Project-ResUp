<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>ResUP</title>
	<link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>
<body>

	<div class="container">
		<!-- Static navbar -->
		<nav class="navbar navbar-default">
			<div class="container-fluid">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="/">Project ResUp</a>
				</div>
				<div id="navbar" class="navbar-collapse collapse">
					<ul class="nav navbar-nav">
						<li><a href="#basic-info">Basic Info</a></li>
						<li><a href="#res-summary">Summary</a></li>
						<li><a href="#res-experience">Experience</a></li>
						<li><a href="#res-projects">Projects</a></li>
						<li><a href="#res-education">Education</a></li>
						<li><a href="#res-skills">Skills</a></li>
						<li><a href="#">Finish Up</a></li>
					</ul>
					<!-- <ul class="nav navbar-nav navbar-right">
						
					</ul> -->
				</div><!--/.nav-collapse -->
			</div><!--/.container-fluid -->
		</nav>


		<div class="container-fluid" id="app-content">
			@yield('content')
		</div>

	</div>


	<!--Templates-->
	@include('templates') 

	<!-- JQuery -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.0/jquery.js"></script>
	<!-- bootstrap -->
	<script src="{{asset('js/bootstrap/bootstrap.js')}}"></script>
	<!-- VueJS -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/vue/1.0.16/vue.js"></script>
	<!--Custom Vue-->
	<script src="{{asset('js/all.js')}}"></script> 


</body>
</html>