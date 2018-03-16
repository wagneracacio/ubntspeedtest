<!DOCTYPE html>
<html class="no-js" lang="">
	<head>
		<script src="//ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js" type="text/javascript"></script>
		<link rel="stylesheet" type="text/css" href="css/loading.css">
		<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
		<link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.indigo-pink.min.css">
		<script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>
	</head>
	<body>
	<center>
		<script src="js/load.js"></script>
		<form id="conection" action="model/start.php" method="post">
			<div class="mdl-textfield mdl-js-textfield">
				<input class="mdl-textfield__input" type="text" name="ip" id="ip">
				<label class="mdl-textfield__label" for="ip">IP de Cliente...</label>
		    </div>
			<div class="mdl-layout-spacer"></div>
			<div class="mdl-textfield mdl-js-textfield">
				<input class="mdl-textfield__input" type="text" name="user" id="user">
				<label class="mdl-textfield__label" for="user">Usuario...</label>
		    </div>
			<div class="mdl-layout-spacer"></div>
			<div class="mdl-textfield mdl-js-textfield">
				<input class="mdl-textfield__input" type="password" name="pass" id="pass">
				<label class="mdl-textfield__label" for="pass">Senha...</label>
		    </div>
			<div class="mdl-layout-spacer"></div>
			<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
				<input class="mdl-textfield__input" pattern="-?[0-9]*(\.[0-9]+)?" type="number" max="9" name="duration" id="duration" value="5">
				<label class="mdl-textfield__label" for="duration">Duracao...</label>
				<span class="mdl-textfield__error">Input is not a number!</span>
		    </div>
			<div class="mdl-layout-spacer"></div>
			<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
				<select class="mdl-textfield__input" id="protocol" name="protocol">
					<option value="https">https</option>
					<option value="http">http</option>
				</select>
				<label class="mdl-textfield__label" for="octane">Protocolo...</label>
			</div>
			<div class="mdl-layout-spacer"></div>
			<input class="mdl-button mdl-js-button mdl-button--raised" type="submit" onclick="load()">
		</form>
		<div id="loader" class="loader" style="display: none;"></div>
	</center>
	</body>
</html>


