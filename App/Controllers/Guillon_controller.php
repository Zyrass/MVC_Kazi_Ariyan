<?php 

/**
 * Guillon = Controller enfant de Dcontroller
 */
class Guillon extends Dcontroller {
	
	public function __construct( )
	{
		// parent::__construct( );
	}

	public function eleanore($param) {
		echo  "Éléanore from method \n" . $param;
	}
	
}
