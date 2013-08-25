<!DOCTYPE html>

<!-- paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither/ -->
<!--[if IE 8]>    <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<head>
  <meta charset="utf-8" />

  <!-- Set the viewport width to device width for mobile -->
  <meta name="viewport" content="width=device-width" />

  <title>Marketing Brief</title>

  <!-- Favicon -->
  <link rel="shortcut icon" href="public/img/favicon.ico" type="image/ico">
  
  <!-- Included CSS Files (Compressed) -->
  <link rel="stylesheet" href="public/foundation/stylesheets/foundation.min.css">
  <link rel="stylesheet" href="public/foundation/stylesheets/app.css">

  <script src="public/foundation/javascripts/modernizr.foundation.js"></script>

  <!-- Include App CSS -->
  <link rel="stylesheet" href="public/app/main.css">

</head>
	<body ng-app='moheera'>


		<nav>
			<div id='box' class='blue'></div>
		</nav>

		<div class='row'>
			<div class='ten columns centered'>
				<a href="/mb"><img src="public/img/logo.png" style='margin : 10px 2px;'></a>
			</div>
		</div>

		<div class='row'>
			<div class='ten columns centered theBG'>

	  			<div ng-view='appView'></div>

			</div>
		</div>



	  
	  <!-- Included JS Files (Compressed) -->
	  <script src="public/foundation/javascripts/jquery.js"></script>
	  <script src="public/foundation/javascripts/foundation.min.js"></script>
	  
	  <!-- Initialize JS Plugins -->
	  <script src="public/foundation/javascripts/app.js"></script>

	  <!-- Angularjs -->
	  <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.0.7/angular.min.js"></script>

	  <!-- Include App JS -->
	  <script src="public/app/main.js"></script>

	</body>
</html>
