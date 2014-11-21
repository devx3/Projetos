<!DOCTYPE HTML>
<html>

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<title>Teste SMTP</title>
	<style>
		
		#wrap {
			min-height: 500px;
		}

		sidebar {
			float: left;
			border-right: 1px solid #CCC;
			padding: 10px;
		}
		article {
			width: 82%;
			margin-left: 3em;
			float: left;
		}

		footer {
			background: #DDD;
			padding: 2em;
			text-align: center;
			clear: both;
		}
	</style>
</head>
<body>
	
	<section id="wrap">
		<header>
			<h1>Testando SMTP</h1>
		</header>
		
		<sidebar>
			<nav>
				<h3>Menu</h3>
				<dl>
					<dt><a href="#">Config ( Coming Soon )</a></dt>
					<dd><a href="#">SMTP</a></dd>
				</dl>
			</nav>
		</sidebar>

		<article>
			<form action="send.php">
				<fieldset>
				<legend><h3>Testando Envio SMTP</h3></legend>
					<button type="submit" value="submitando">Enviar</button>
				</fieldset>
			</form>
		</article>
	</section>
	<footer>
		<p>Copyright 2014 DevXIII</p>
	</footer>
</body>

</html>