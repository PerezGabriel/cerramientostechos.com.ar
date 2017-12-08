<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<?php if (!$_GET) { ?>
<link rel="stylesheet" type="text/css" href="CSS/estilos.css"/>
<?php } else { ?>
<link rel="stylesheet" type="text/css" href="CSS/estilos_b.css"/>
<link rel="stylesheet" type="text/css" href="js/fancybox/jquery.fancybox-1.3.4.css" media="screen" />
<?php } ?>
<script type="text/javascript" src="js/jquery-1.4.3.min.js"></script>
<script type="text/javascript" src="js/jquery.cycle.min.js"></script>
<script type="text/javascript" src="js/script.js"></script>
<script type="text/javascript" src="js/fancybox/jquery.mousewheel-3.0.4.pack.js"></script>
<script type="text/javascript" src="js/fancybox/jquery.fancybox-1.3.4.pack.js"></script>
<script type="text/javascript" src="js/formulario.js"></script>
<script type="text/javascript" src="js/jQuery_mousewheel_plugin.js"></script>
<script language="JavaScript">
    $(document).ready(function(){
		 var i=0;
		 var j=0;		 
		$("#contenido").mousewheel(function(objEvent, intDelta){
			if (intDelta > 0){
				i++;
				if (i%2==0){
					scrollArriba();
				}				
			}else if (intDelta < 0){
						j++;
						if (j%2==0){
							scrollAbajo().stop(true,true);
						}
			}
		});
		var Num = parseInt(document.getElementById("num-reg-pgn").getAttribute("value"));
		var Max = parseInt(document.getElementById("max-reg-pgn").getAttribute("value"));
		
		if (Num >= Max){
			$("div#flecha-abajo").removeClass("flecha-abajo-ico-act").addClass("flecha-abajo-ico-no-act").css("cursor","default");
		}
	});
	
	function scrollAbajo()
	{	
	/*  Funcion para que cuando se apriete el boton anime el ul "prueba" para que se mueve para arriba y pareciera un scroll
		ademas, habilita o deshabilita las felchas para bajar o subir dependiendo de la cantidad de imagenes que hay en total
		y la cantidad que se pueden visualizar por pantalla */
		var Num = parseInt(document.getElementById("num-reg-pgn").getAttribute("value"));
		var Max = parseInt(document.getElementById("max-reg-pgn").getAttribute("value"));
		var Pix = parseFloat(document.getElementById("pixels").getAttribute("value"));
		if (Num < Max){
			$("div#flecha-arriba").removeClass("flecha-arriba-ico-no-act").addClass("flecha-arriba-ico-act").css("cursor","pointer")
			Pix -= 345;
			var Pix2 = Pix - 30;
			document.getElementById("pixels").setAttribute("value", Pix.toString());
			Top =  Pix+"px";
			Top2 =  Pix2+"px";			
			$(document).ready(function(){
				$("#prueba").animate({ top: Top2 } ).animate({ top: Top},"fast");						
			});
			Num += 21;
			document.getElementById("num-reg-pgn").setAttribute("value", Num.toString());
			if (Num > Max) {
				$("div#flecha-abajo").removeClass("flecha-abajo-ico-act").addClass("flecha-abajo-ico-no-act").css("cursor","default");//cambiarHover("div#flecha-abajo"); 
			}
		}			
	}
	
	function scrollArriba()
	{	
		/* 	Funcion para que cuando se apriete el boton anime el ul "prueba" para que se mueve para abajo y pareciera un scroll
	   	  	ademas, habilita o deshabilita las felchas para bajar o subir dependiendo de la cantidad de imagenes que hay en total
		  	y la cantidad que se pueden visualizar por pantalla */
		var Num = parseInt(document.getElementById("num-reg-pgn").getAttribute("value"));
		var Max = parseInt(document.getElementById("max-reg-pgn").getAttribute("value"));
		var Pix = parseFloat(document.getElementById("pixels").getAttribute("value"));
		if (Num > 21 ){
			$("div#flecha-abajo").removeClass("flecha-abajo-ico-no-act").addClass("flecha-abajo-ico-act").css("cursor","pointer");
			Pix += 345;
			var Pix2 = Pix + 30;
			Num -= 21;
			document.getElementById("num-reg-pgn").setAttribute("value", Num.toString());
			document.getElementById("pixels").setAttribute("value", Pix.toString());
			Top =  Pix+"px";
			Top2 = Pix2+"px";
			$(document).ready(function(){
				$("#prueba").animate({ top: Top2 } ).animate({ top: Top},"fast");
	     		//animar para que suba;				
			});
			if (Num == "21"){
				$("div#flecha-arriba").removeClass("flecha-arriba-ico-act").addClass("flecha-arriba-ico-no-act").css("cursor","default");
			}
		}
			
	}
					
	$(document).ready(function(){
		$("a[rel=grupo_imag]").fancybox({
				'transitionIn'		: 'elastic',
				'transitionOut'		: 'elastic',
				'opacity'			: true,
				'overlayShow'		: true,
				'titlePosition' 	: 'over',
				'titleFormat'		: function(title, currentArray, currentIndex, currentOpts) {
					return '<span id="fancybox-title-over">Image ' + (currentIndex + 1) + ' / ' + currentArray.length + (title.length ? ' &nbsp; ' + title : '') + '</span>';
				}
			});
	});
	
	

</script>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php echo "Taller Americano"; ?></title>
</head>
<body>
	<div id="div-contenedor">
    	<div id="cabecera">
        	<a href="index.php"><img src="images/logo.png" alt="Logo" id="logotipo" /></a>
            <img src="images/telefonos.png" alt="Nuestros Telefonos" id="telefonos" />
            <?php require("menu.php"); ?>                   
        </div>