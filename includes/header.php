<?php
require_once('genremanager.php');
require_once('view.php');

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Sounds Store</title>

	<link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.6.0/pure-min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
  <link rel="stylesheet" href="..assets/styles.css">
</head>
<body>
	

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand nav-title" href="#">Sounds Store</a>
    </div>

<?php
    $aGenres = GenreManager::getGenres();

    echo View::renderNav($aGenres);
?>
    <!-- <ul class="nav navbar-nav">
      <li class="active"><a href="#">Home</a></li>
      <li><a href="#">Rock</a></li>
      <li><a href="#">Pop</a></li>
      <li><a href="#">Hip Hop</a></li>
      <li><a href="#">Folk</a></li> 
    </ul> -->
    <ul class="nav navbar-nav navbar-right">
      <li><a href="#">My Details</a></li>
      <li><a href="#">My Orders</a></li> 
      <li><a href="#">Shopping Cart</a></li> 
      <li><a href="signup.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
      <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
    </ul>
  </div>
</nav>