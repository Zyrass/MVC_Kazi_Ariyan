<?php include "inc/header.php"; ?>

<?php  
	
	// Inclusion classe Main
	include_once "system/libs/Main_class.php"; 
	include_once "system/libs/Dcontroller_class.php"; 

	$url = $_GET['url'];
	$url = rtrim($url, '/');
	$url = explode( '/', $url);

	include 'App/Controllers/' . $url[0] . '_controller.php';
	
	echo '<pre>';
	var_dump($url);
	echo '</pre>';

	$ctrl = new $url[0]();
	echo "<br>";
	$ctrl->eleanore($url[2]);
	echo "<br>";
	$url[1];
	$ctrl->$url[1] ($url[2]);

/*


	$controller = new $url[0]();
	$controller->alain() ."\n";

	echo '<pre>';
	var_dump($url);
	echo '</pre>';

	echo $url[1]; // OK 
	echo $controller->$url[1](); // ERROR : Array to string conversion....


	echo $controller = $url[0] . "\n";
	echo $method = $url[1] . "\n";
	echo $paramettre = $url[2] . "\n";


	echo '<pre>';
	print_r($url);
	echo '</pre>';

	*/
	?>

<?php include 'inc/footer.php' ?>