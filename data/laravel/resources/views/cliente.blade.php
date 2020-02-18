<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Clientes</title>
<link rel="stylesheet" type="text/css" href="{{ asset('css/view.css') }}" media="all">
<script type="text/javascript" src="{{ asset('js/view.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/calendar.js') }}"></script>
</head>
<body id="main_body" >
    <img id="top" src="{{ asset('images/top.png') }}" alt="">
	<div id="form_container">
	
		<h1><a>Clientes</a></h1>
		<form id="form_98145" class="appnitro"  method="post" action="/crear">
		@csrf
					<div class="form_description">
			<h2>Clientes</h2>
			<p>Insertar Clientes</p>
		</div>						
			<ul >
			
					<li id="li_1" >
		<label class="description" for="element_1">Nombre(*) </label>
		<div>
			<input id="element_1" name="nombre" class="element text medium" type="text" maxlength="255" value=""/> 
		</div> 
		</li>		<li id="li_2" >
		<label class="description" for="element_2">1º Apellido(*) </label>
		<div>
			<input id="element_2" name="apellido1" class="element text medium" type="text" maxlength="255" value=""/> 
		</div> 
		</li>		<li id="li_3" >
		<label class="description" for="element_3">2º Apellido </label>
		<div>
			<input id="element_3" name="apellido2" class="element text medium" type="text" maxlength="255" value=""/> 
		</div> 
		</li>		<li id="li_4" >
		<label class="description" for="element_4">DNI(*) </label>
		<div>
			<input id="element_4" name="dni" class="element text medium" type="text" maxlength="255" value=""/> 
		</div>
		</li>
		<li id="li_5" >
		<label class="description" for="element_5">Direccion(*) </label>
		<div>
			<input id="element_5" name="dire" class="element text medium" type="text" maxlength="255" value=""/> 
		</div> 
		</li>
			
					<li class="buttons">
			    <input type="hidden" name="form_id" value="98145" />
			    
				<input id="saveForm" class="button_text" type="submit" name="submit" value="Insertar" />
		</li>
			</ul>
		</form>	
		<div id="footer">
			
		</div>
	</div>
	<img id="bottom" src="{{ asset('images/bottom.png') }}" alt="">
	</body>
</html>