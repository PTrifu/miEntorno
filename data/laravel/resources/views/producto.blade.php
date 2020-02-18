<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Producto</title>
<link rel="stylesheet" type="text/css" href="{{ asset('css/view.css') }}" media="all">
<script type="text/javascript" src="{{ asset('js/view.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/calendar.js') }}"></script>
</head>
<body id="main_body" >
	
	<img id="top" src="{{ asset('images/top.png') }}" alt="">
	<div id="form_container">
	
		<h1><a>Producto</a></h1>
		<form id="form_98145" class="appnitro"  method="post" action="/formbuilder/view.php">
					<div class="form_description">
			<h2>Producto</h2>
			<p>Insetar Producto</p>
		</div>						
			<ul >
			
					<li id="li_1" >
		<label class="description" for="element_1">Descripcion del Producto </label>
		<div>
			<input id="element_1" name="element_1" class="element text medium" type="text" maxlength="255" value=""/> 
		</div> 
		</li>		<li id="li_3" >
		<label class="description" for="element_3">Fecha Creacion </label>
		<span>
			<input id="element_3_1" name="element_3_1" class="element text" size="2" maxlength="2" value="" type="text"> /
			<label for="element_3_1">DD</label>
		</span>
		<span>
			<input id="element_3_2" name="element_3_2" class="element text" size="2" maxlength="2" value="" type="text"> /
			<label for="element_3_2">MM</label>
		</span>
		<span>
	 		<input id="element_3_3" name="element_3_3" class="element text" size="4" maxlength="4" value="" type="text">
			<label for="element_3_3">YYYY</label>
		</span>
	
		<span id="calendar_3">
			<img id="cal_img_3" class="datepicker" src="{{ asset('images/calendar.gif') }}" alt="Pick a date.">	
		</span>
		<script type="text/javascript">
			Calendar.setup({
			inputField	 : "element_3_3",
			baseField    : "element_3",
			displayArea  : "calendar_3",
			button		 : "cal_img_3",
			ifFormat	 : "%B %e, %Y",
			onSelect	 : selectEuropeDate
			});
		</script>
		 
		</li>		<li id="li_2" >
		<label class="description" for="element_2">Precio </label>
		<span class="symbol">&#8364;</span>
		<span>
			<input id="element_2_1" name="element_2_1" class="element text currency" size="9" value="" type="text" /> .		
			<label for="element_2_1">Euros</label>
		</span>
		<span>
			<input id="element_2_2" name="element_2_2" class="element text" size="2" maxlength="2" value="" type="text" />
			<label for="element_2_2">Cents</label>
		</span>
		 
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