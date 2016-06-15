<?php
 require_once('connection.php');

class Product{

	public $iId;
	public $sAlbumName;
	public $sDescription;
	public $fPrice;
	public $sPhoto;
	public $iGenreId;
	public $iYear;
	public $sArtistName;

	public function __construct(){
		$this->iId = 0;
		$this->sAlbumName = '';
		$this->sDescription = '';
		$this->fPrice = 0;
		$this->sPhoto = '';
		$this->iGenreId = 0;
		$this->iYear = 0;
		$this->sArtistName = '';

	}

	public function load($iId){
		
		$oConnection = new Connection();
		
		$sSQL = 'SELECT id, album_name, description, price, photo, genre_id, year, artist_name
		FROM products
		WHERE id =' . $iId;

		$oResultSet = $oConnection->query($sSQL);

		$aRow = $oConnection->fetch($oResultSet);

		$this->iId = $aRow['id'];
		$this->sAlbumName = $aRow['album_name'];
		$this->sDescription = $aRow['description'];
		$this->fPrice = $aRow['price'];
		$this->sPhoto = $aRow['photo'];
		$this->iGenreId = $aRow['genre_id'];
		$this->iYear = $aRow['year'];
		$this->sArtistName = $aRow['artist_name'];
	}


}

// $oProduct = new Product();
// $oProduct->load(3);

// echo '<pre>';
// print_r($oProduct);
// echo '</pre>';



?>