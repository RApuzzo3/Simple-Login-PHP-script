<?php require("redirect-login.php");?>
	<head>
		<title>Test</title>
		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
		
		<!-- Optional theme -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">
				
		<!-- Latest compiled and minified JavaScript -->
		<script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>			
	</head>
	<body>
		<nav class="navbar navbar-inverse navbar-fixed-top">
			<div class="container">
				<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="#">Test Login</a>
				</div>
				<div id="navbar" class="collapse navbar-collapse">		
				<ul class="nav navbar-nav">
					<li><a href="index.php">Home</a></li>
					<li class="active"><a href="test.php">Test</a></li>
					<li><a href="?logout=Logout">Logout</a></li>
				</ul>
				</div><!--/.nav-collapse -->
			</div>
		</nav>

		<div class="container">
	
			<div class="col-lg-10" style="padding: 40px 15px;text-align: center;">		
				<h1>Test Page</h1>
				<p class="lead">
					<a href="index.php">Next ></a>
				</p>
			</div>
	
		</div><!-- /.container -->		
		
	</body>
	</html>