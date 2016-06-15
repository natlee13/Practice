<?php 
  require_once('includes/header.php');
  require_once('includes/view.php');
  require_once('includes/products.php');

$iCurrentGenreId = 4;

 // check if we have pageid in querystring 
 if(isset($_GET['genreid']) == true){ //if a pageid exists, get it
   $iCurrentGenreId = $_GET['genreid'];
 }

 $oGenre = new Genre(); //make a new page

 $oGenre->load($iCurrentGenreId); //request to load page with the number of the current page id. 
// print_r( $oGenre);
echo View::renderGenre($oGenre); 
?>

 <!--    <div class="jumbotron">
      <div class=" text-center container">
        <h3>Welcome to Sounds Store</h3>
        <h4>Browse our selection</h4>
        <p></p>
      </div>
    </div>

  <div class="container">
    <h3>Our favourites this month</h3>
  </div>
    <div class="container">
      <!-- Example row of columns -->
      <!-- <div class="row">
        <div class="col-md-4">
        <img src="assets/images/album_covers/small/incubus.jpg" alt="">
          <h2>Morning View</h2>
          <h3>Incubus</h3>
          <h4>2002</h4>
          <p>1989 is the fifth studio album by American singer-songwriter Taylor Swift. It was released on October 27, 2014, through Big Machine Records.</p>
          <p><a class="btn btn-default" href="#" role="button">Add to Cart &raquo;</a></p>
        </div>
      <div class="col-md-4">
      <img src="assets/images/album_covers/small/metallica.jpg" alt="">
          <h2>Black</h2>
          <h3>Metallica</h3>
          <h4>2015</h4>
          <p>Bush is the thirteenth studio album by American West Coast hip hop recording artist Snoop Dogg. It was released on May 12, 2015, with the record labels; Doggystyle Records, i Am Other and Columbia Records.</p>
          <p><a class="btn btn-default" href="#" role="button">Add to Cart &raquo;</a></p>
        </div>
      <div class="col-md-4">
      <img src="assets/images/album_covers/small/mumford.jpg" alt="">
          <h2>Sigh No More</h2>
          <h3>Mumford and Sons</h3>
          <h4>2009</h4>
          <p>Sigh No More is the debut studio album by London-based rock quartet Mumford & Sons. It was released on 2 October 2009 in the UK, and on 16 February 2010 in the United States and Canada.</p>
          <p><a class="btn btn-default" href="#" role="button">Add to Cart &raquo;</a></p>
        </div>
      </div>

      <hr> -->
<?php
  require_once('includes/footer.php');
?>
      