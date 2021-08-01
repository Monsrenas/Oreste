<style type="text/css">
	.eval{
			width: 98%;
			background: #539FD3;
			padding: 2px;
			margin-bottom: 2px;
			color: #033B62;
	}
	.nombre {
			 margin-left: 2px;
			 font-size: .7em;
			 font-weight: bold;
	}

	.fecha{
			font-size: .6em;
			margin-left: 10px;
	}

	.desde {
			 font-size: .6em;
			 font-weight: bold;	
	}
	.coment {
		display: block;
		font-size: .6em;
		margin-left: 5px;
	}

	.strella { float: right; color: white; }
	.coment:hover { color: black; }
</style>

<div style="max-height: 24em; overflow: scroll;">
	<?php
	include_once("funciones.php");
	$star= "\u{272F}"; 
	 $json=Lista('testimonios/testimonial_list.json');
	 $json=array_reverse($json);
		foreach ($json as $data) { 
		 echo "<div class='eval'>";	
			echo "<span class='nombre'>".$data['nombre']."</span>";
			echo "<span class='fecha'>".$data['fecha']."</span>";
			echo "<span class='desde'>, ".$data['local']."</span>";
			echo "<span class='strella'>".str_pad("",$data['puntos']*3,$star)."</span>";
			echo "<span class='coment'>".$data['testimonio']."</span>";

	    echo "</div>";
		}
	?>
</div>
