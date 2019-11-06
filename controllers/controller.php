<?php

class MvcController{

    #LLAMADA A LA PLANTILLA
	#-------------------------------------

	public function pagina(){   include "views/template.php"; }

    #ENLACES
	#-------------------------------------

	public function enlacesPaginasController(){
		(isset( $_GET['action'])) ? $enlaces = $_GET['action'] : $enlaces = "inicio";
		$respuesta = Paginas::enlacesPaginasModel($enlaces);
        include "include/inicio.php";
	}
}
