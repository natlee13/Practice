<?php 

class View{

	static public function renderNav($aGenres){
		$sHTML = '<ul class="nav navbar-nav">
				 <li class="active"><a href="homepage.php">Home</a></li>';

		for($i=0; $i<count($aGenres); $i++){

			$oGenre = $aGenres[$i];

			$sHTML .= '<li><a href="main.php?pageid='.$oGenre->iId.'">'.$oGenre->sGenreName.'</a></li>';
    	}

    	$sHTML .= '</ul>';

	return $sHTML;
	}

	static public function renderGenre($oGenre){

		$sHTML = '<div class="jumbotron">
     		 <div class=" text-center container">
        		<h3>'.$oGenre->sGenreName.'</h3>
        		<h4>Browse our selection</h4>
        		<p></p>
    			</div>
    			</div>

    			<div class="container">';
      	
      $aProducts = $oGenre->aProducts;

    	for($i=0; $i<count($aProducts); $i++){
        
        $oProduct = $aProducts[$i];
      	
        $sHTML .= '<div class="row">
                    <div class="col-md-4">
                      <img src="assets/images/album_covers/small/'.$oProduct->sPhoto.' "alt="">
                      <h2>'.$oProduct->sAlbumName.'</h2>
                      <h3>'.$oProduct->sArtistName.'</h3>
                      <h4>'.$oProduct->iYear.'</h4>
                      <p>'.$oProduct->sDescription.'</p>
                      <p><a class="btn btn-default" href="#" role="button">Add to Cart &raquo;</a></p>
                    </div>
                  </div>
                 <hr>';
      }

      return $sHTML;
      
    // $sHTML .=  '</div>

    //   <hr>';
      
	}

static public function renderAllProducts($aGenres){

  $sHTML = '<div class="jumbotron">
         <div class=" text-center container">
            <h3>Welcome to Sounds Store</h3>
            <h4>Browse our selection</h4>
            <p></p>
          </div>
          </div>

          <div class="container">';

  for($i=0;$i<count($aGenres);$i++){
    
    $oGenre = $aGenres[$i];
    $aProducts = $oGenre->aProducts;

    for($j=0; $j<count($aProducts);$j++){
      
      $oProduct = $aProducts[$j];

    $sHTML .= '<div class="row">
                    <div class="col-md-4">
                      <img src="assets/images/album_covers/small/'.$oProduct->sPhoto.' "alt="">
                      <h2>'.$oProduct->sAlbumName.'</h2>
                      <h3>'.$oProduct->sArtistName.'</h3>
                      <h4>'.$oProduct->iYear.'</h4>
                      <p>'.$oProduct->sDescription.'</p>
                      <p><a class="btn btn-default" href="#" role="button">Add to Cart &raquo;</a></p>
                    </div>';
                  }

    $sHTML .= '</div>';
                
    }

    $sHTML .= '</div>';
    return $sHTML;
    }


}


  // <div class="container">
      //      <h3>Our favourites this month</h3>
        // </div>
?>