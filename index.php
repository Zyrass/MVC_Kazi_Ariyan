<?php include "inc/header.php"; ?>
<?php  
	// Inclusion classe Main
	include_once "system/libs/Main_class.php"; 
	include_once "system/libs/Dcontroller_class.php"; 

	$url = $_GET['url'];
	$url = rtrim($url, '/');
	$url = explode( '/', $url);

	include 'App/Controllers/' . $url[0] . '_controller.php';

	echo "<h2>Notation Color</h2>";
	echo "<ul>";
		echo "<li class='debug'>Debug Code (var_dump or print_r)</li>";
		echo "<li class='info'>information for debug</li>";
		echo "<li class='success'>result success</li>";
		echo "<li class='error'>result error</li>";
	echo "</ul>"; 
	
	echo '<h2>var_dump($URL)</h2>';
	echo '<pre>';
	var_dump($url);
	echo '</pre>';
	
	$ctrl = new $url[0]();

	echo '<h2>var_dump($_SERVER["REQUEST_URI"])</h2>'; 
	echo '<pre>';
		var_dump($_SERVER['REQUEST_URI']);
	echo '</pre>';
	echo 'my URL : <span class="info"><strong>/MVC_Kazi_Ariyan/?url=Zyrass/Kazi/Ariyan</strong></span><br />';

	echo '<h2>Show $url[indice]</h2>';
	// Success
	echo "Controller : <span class='success'>" . $url[0] . "</span> <== <span class='info'>Indice 0</span><br />"; 
	// Success
	echo "Method : <span class='success'>" . $url[1] . "</span> <== <span class='info'>Indice 1</span><br />"; 
	// Success
	echo "Parameter : <span class='success'>"  . $url[2]  . "</span> <== <span class='info'>Indice 2</span>";
	
	echo "<h3>Test URL with Method and Parameter </h3> ";
	echo '<span class="success">' . $ctrl->kazi($url[2]) . '</span> <== <span class="info">$ctrl->kazi($url[2]); </span>';
	echo "<br /><p class='info'>kazi is my method so it's normaly $url[1] and if speak of method, i add parenthes with the parameter \"Ariyan\" but i have a message Error Fatal ...</p>";
	echo'<p class="info">So i understand, $ctrl->kazi($url[2]) it\'s the same as $ctrl->$url[1]($url[2]); ? if answer is true where\'s my error ? <br />This code me return an error : <span class="error">$ctrl->$url[1]($url[2]);</span></p>';

	$ctrl->$url[1]($url[2]); // ERROR FATAL !!
	?>
<?php include 'inc/footer.php' ?>