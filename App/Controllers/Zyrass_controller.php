<?php 

/**
 * Zyrass = Controller enfant de Dcontroller
 */
class Zyrass extends Dcontroller {
	
	public function __construct( )
	{
		// parent::__construct( );
	}

	public function kazi($param) {
		echo  "<span class='success'>Kazi from method " . $param . '</span>';
	}
	
}
