<html>
	<head>
		<title>RoD</title>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<script src="javascript/login.js"></script>
		
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.css">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap-theme.min.css">

		<link rel="stylesheet" href="style/login.css" type="text/css">
	</head>
	<body>
		<div id="logo">
			<div onclick="this.className = 'flip-container';">
				<div class="flipper">
					<div class="front"><img src="resources/logo/logoF.png" style="width:368px;height:430px"></div>
					<div class="back" style="background-image: url(resources/logo/logoB.png);background-size: 368px 430px;">
						
						<form style="padding: 80px;">
							<br>
							<input type="text" placeholder="Username"><br>
							<input type="password" name="txtPassword" placeholder="Password" onkeypress="capLock(event)" />
							<div id="capslockAlert" style="visibility:hidden"><span class="label label-danger">Capslock is ON !!</span></div> 

							<button>Enter</button>
							<a href="main.html">Preview</a>
						</form>	
					</div>
				</div>
			</div>
		</div>

		<div id="footer">
			<ul id="footerList">
				<li><a href="#">Sobre</a></li>
				<li><a href="#">Contactos</a></li>
			</ul>
		</div>
	</body>
</html>