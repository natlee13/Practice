<?php 

require_once('connection.php');

class User{

	public $iId;
	public $sUserName;
	public $sPassword;
	public $sFirstName;
	public $sLastName;
	public $sAddress;
	public $sTelephone;
	public $sEmail;
	public $sAdmin;

	public function __construct(){
		$this->iId = 0;
		$this->sUserName = '';
		$this->sPassword = '';
		$this->sFirstName = '';
		$this->sLastName = '';
		$this->sAddress = '';
		$this->sTelephone = '';
		$this->sAdmin = '';
	}

	public function load($iId){

		$oConnection = new Connection();
		
		$sSQL = 'SELECT id, username, password, first_name, last_name, address, telephone, admin
		 FROM users WHERE id =' .$iId;

		$oResultSet = $oConnection->query($sSQL);

		$aRow = $oConnection->fetch($oResultSet);

		$this->iId = $aRow['id'];
		$this->sUserName = $aRow['username'];
		$this->sPassword = $aRow['password'];
		$this->sFirstName = $aRow['first_name'];
		$this->sLastName = $aRow['last_name'];
		$this->sAddress = $aRow['address'];
		$this->sTelephone = $aRow['telephone'];
		$this->sAdmin = $aRow['admin'];
		
	}


	public function save(){
		
		$oConnection = new Connection();

		if($this->iId == 0){
			$sSQL = "INSERT INTO users (username, password, first_name, last_name, address, telephone, admin) 
					VALUES ('".$this->sUserName."', '".$this->sPassword."', '".$this->sFirstName."','".$this->sLastName."', '".$this->sAddress."', '".$this->sTelephone."', '".$this->sAdmin."')";
			
		
			$bSuccess = $oConnection->query($sSQL);

			if($bSuccess == true){
				$this->iId = $oConnection->getInsertId();
			}
		// }else{

		// 	$sSQL = "UPDATE subjects 
		// 	SET subject_name = '".$this->sSubjectName."', position = '".$this->iPosition."', 
		// 		visible = '".$this->iVisible."' 
		// 		WHERE id = ".$this->iId;

		// 	$oConnection->query($sSQL);
		}
	}
	
}

 //$oUser = new User();
// $oUser->load(5);

// $oUser->sUserName = 'Joe.Bloggs';
// $oUser->sPassword = 'password';
// $oUser->sFirstName = 'Joe';
// $oUser->sLastName = 'Blogs';

//  $oUser->save();

// echo '<pre>';
// print_r($oUser);
// echo '</pre>';

 ?>