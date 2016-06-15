<?php 
require_once('includes/header.php'); 
require_once('includes/form.php');
require_once('includes/user.php');

$oForm = new Form();

$oForm->open();

$oForm->makeTextInput('First Name','first_name');
$oForm->makeTextInput('Last Name','last_name');
$oForm->makeTextInput('Email','email');
$oForm->makeTextInput('Address','address');
$oForm->makeTextInput('Telephone','telephone');
$oForm->makeTextInput('User Name','username');
$oForm->makeTextInput('Password','password');
$oForm->makeTextInput('Confirm Password', 'password_confirm');
$oForm->makeSubmit('Register', 'submit');

$oForm->close();
?>

<div class="jumbotron">
    <div class=" text-center container">
        <h3>Sign Up</h3>
        <h4>Enter your details below</h4>
        <p></p>
    </div>
</div>

<?php 

echo $oForm->sHTML;

require_once('includes/footer.php');
?>

<!-- <form action = "" method = "POST" class="form-horizontal">
    <div class="form-group">
        <label for="first_name" class="col-sm-2 control-label">First Name</label>
        <div class="col-xs-4">
            <input type="text" id="first_name" name="first_name" class="form-control" >
        </div>
    </div>
   
   <div class="form-group">
    <label for="lastname" class="col-sm-2 control-label">Last Name</label>
    <div class="col-xs-4">
      <input type="text" id="lastname" name="lastname" class="form-control" >
    </div>
  </div>
  
  <div class="form-group">
    <label for="email" class="col-sm-2 control-label">Email</label>
    <div class="col-xs-4">
      <input type="text" class="form-control" name = "email" id="email">
    </div>
  </div>

  <div class="form-group">
    <label for="address" class="col-sm-2 control-label">Address</label>
    <div class="col-xs-4">
      <input type="text" class="form-control" name = "address" id="address">
    </div>
  </div>

    <div class="form-group">
    <label for="telephone" class="col-sm-2 control-label">Telephone</label>
    <div class="col-xs-4">
      <input type="text" class="form-control" name = "telephone" id="telephone">
    </div>
  </div>

    <div class="form-group">
    <label for="username" class="col-sm-2 control-label">Username</label>
    <div class="col-xs-4">
      <input type="text" class="form-control" name = "username" id="username">
    </div>
  </div>
  
  <div class="form-group">
    <label for="password" class="col-sm-2 control-label">Password</label>
    <div class="col-xs-4">
      <input type="password" class="form-control" id="password" name="password">
    </div>
  </div>
  
   <div class="form-group">
    <label for="passwordconfirm" class="col-sm-2 control-label">Confirm Password</label>
    <div class="col-xs-4">
      <input type="passwordconfirm" class="form-control" id="passwordconfirm" name="passwordconfirm">
    </div>
  </div> -->

<!--   <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <div class="checkbox">
        <label>
          <input type="checkbox"> I accept the terms and conditions.
        </label>
      </div>
    </div>
  </div> -->
  
  <!-- <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" class="btn btn-default">Sign in</button>
    </div>
  </div> -->
<!-- </form> -->