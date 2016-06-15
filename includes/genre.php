<?php 

require_once('connection.php');
require_once('products.php');

class Genre{

	public $iId;
	public $sGenreName;
	public $sGenreDescription;
	public $aProducts;

	public function __construct() {
		$this->iId = 0;
		$this->sGenreName = '';
		$this->sGenreDescription = '';
		$this->aProducts = [];
	}

	public function load($iId){

		$oConnection = new Connection();

		$sSQL = 'SELECT id, genre_name, genre_description 
				FROM genres
				WHERE id = ' .$iId;

		$oResultSet = $oConnection->query($sSQL);

		$aRow = $oConnection->fetch($oResultSet);

		$this->iId = $aRow['id'];
		$this->sGenreName = $aRow['genre_name'];
		$this->sGenreDescription = $aRow['genre_description'];

		

		$sSQL = 'SELECT id FROM products WHERE genre_id = '.$iId;

		$oResultSet = $oConnection->query($sSQL);

		while($aRow = $oConnection->fetch($oResultSet)){
			$iProductId = $aRow['id'];

			$oProduct = new Product();
			$oProduct->load($iProductId);
			$this->aProducts[] = $oProduct;
		}
	}
}

// $oGenre = new Genre();
// $oGenre->load(4);

// echo '<pre>';
// print_r($oGenre);
// echo '</pre>';

?>
