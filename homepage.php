<?php 
require_once('includes/header.php');
require_once('includes/view.php');

$aGenres = GenreManager::getGenres();
echo View::renderAllProducts($aGenres);

require_once('includes/footer.php');
 ?>