<?php

class Paginas{

	public function enlacesPaginasModel($enlaces){


		if($enlaces == "inicio"){

			$module =  "include/".$enlaces.".php";

        }else{
            $module =  "include/inicio.php";
        }
		return $module;

	}

}

?>
