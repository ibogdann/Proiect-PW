<?php   
session_start();



?>
<html>
<head>
<title>MasinaMea</title>
<link rel="stylesheet" type="text/css" href="CSS/acasa.css">

</head>

<body>
<?php
$_SESSION["username"] = "";
	 
function loginresult(){
    define('DB_SERVER', 'localhost');
    define('DB_USERNAME', 'root');
    define('DB_PASSWORD', '');
    define('DB_DATABASE', 'users');
    //$db = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);
    $myusername = $_POST['login_user'];
	$mypassword = $_POST['login_password'];
	$_SESSION["user"]=$myusername;
	$_SESSION["pw"]=$mypassword;
	
      
    //$sql = "SELECT id FROM users WHERE user = '$myusername' and password = '$mypassword'";
    //$result = mysqli_query($db,$sql);
    //$row = mysqli_fetch_array($result,MYSQLI_ASSOC);
    //$active = $row['active'];
    //$count = mysqli_num_rows($result);  
    // If result matched $myusername and $mypassword, table row must be 1 row
    //if($count == 1) {
    //   session_register("myusername");
    //   $_SESSION["username"] = $myusername;
    //}
	header("location: contulMeu.php");	
}

if (isset($_GET['loggingIn'])) {
    loginresult();
  }

?>

<div id="topbar">
    <ul>
		<li><a href="#">Despre noi</a></li>
		<li><a href="contulMeu.php">Contul meu</a></li>
        <li class="current"><a href="acasa.php">Acasa</a></li>
    </ul>
</div>
<div id="imagine">
	<img src="Resources/acasa.jpg" alt="Imagine pagina acasa" style="width:100%;height:100%;">
</div>
<div id="actions">
	<div id="formular">
		<font size="6"><b>Formular de cautare</b></font>
		<form id="form1" action="#">
            <table class="search_form" style="width:100%; border:solid;">
              <tr>
                <td class="label">Marca:</td>
                <td width="34%"><label>
                    <select name="select" id="select" class="select_field" >
                      <option>lista modele</option>
                    </select>
                  </label></td>
				  <td class="label">Model:</td>
                <td><label>
                    <select name="select2" id="select2" class="select_field">
                      <option selected="selected">Buy</option>
                      <option>Rent</option>
                    </select>
                  </label></td>
                
              </tr>
			  <tr>
                <td class="label">Motorizare:</td>
                <td><label>
                    <select name="select2" id="select2" class="select_field">
                      <option selected="selected">Buy</option>
                      <option>1.2</option>
                    </select>
                  </label></td>
                <td class="label">Combustibil:</td>
                <td><label>
                    <select name="select2" id="select2" class="select_field">
					  <option style="display:none"></option>
                      <option>Benzina</option>
                      <option>Diesel</option>
                    </select>
                  </label></td>
              </tr>
              <tr>
                <td width="14%" class="label">Pret minim</td>
                <td width="42%"><input type="text" name="textfield4" id="textfield4" class="text" /></td>
                <td class="label">Pret maxim</td>
                <td><input type="text" name="textfield2" id="textfield2" class="text" /></td>
              </tr>
              
              
              <tr>
                <td class="label">&nbsp;</td>
                <td>&nbsp;</td>
                <td colspan="2" class="label"><label>
                    <input type="image" src="images/searchbtn.gif" alt="search" name="button2" id="button2" value="Submit" />
                  </label></td>
              </tr>
			  <tr>
                <td width="10%" class="label">Address</td>
                <td colspan="3"><label>
                    <input type="text" name="textfield" id="textfield" class="text longfield" />
                  </label></td>
              </tr>
			  <tr>
                <td class="label">&nbsp;</td>
                <td colspan="3">Example : City, State</td>
              </tr>
            </table>
          </form>
	</div>
	
	<div id="user">

	<?php if($_SESSION["username"]==""){
		echo'
		<div id="login">
			<font size="5"><b>Log In</b></font>
			<form action="#">
            <div class="formblock">
              <label><b>Username:</b></label>
              <input name="login_user" type="text" class="box" />
            </div>
            <div class="formblock">
              <label id="id1"><b>Password: </b></label>
              <input id="login_password" name="login_password" type="password" class="box"/>
            </div>
            <div class="formblock">
              <input type="image" src="Resources/login.jpg" name="Login_button" id="Login_button" value="Login" />
			  <a href="acasa.php?loggingIn=true">Apasa</a>
            </div>
			</form>
		</div>
		<div id="create">
			<font size="5"><b>Create new account</b></font>
			<form action="#">
            <div class="formblock">
              <label><b>Username:</b></label>
              <input name="create_user" type="text" class="textfields" />
            </div>
            <div class="formblock">
              <label><b>Password:</b></label>
              <input name="create_password" type="password" class="textfields"/>
            </div>
			<div class="formblock">
              <label><b>Repeat Password:</b></label>
              <input name="create_repeat_password" type="password" class="textfields"/>
            </div>
			<div class="formblock">
              <label><b>Email:</b></label>
              <input name="create_email" type="text" class="textfields"/>
            </div>
            <div class="formblock">
              <input type="image" src="Resources/login.jpg" name="button" id="button" value="Submit" />
            </div>
			</form>
	</div>';}
	else
	{
		echo '
		<div class="formblock">
              <label><b>Bravo ba</b></label>
              <input name="logged_in" type="text" class="textfields"/>
            </div>';
	}
	?>
	
		
		
	</div>
  
  
</div>

  
  

<?php
//session_unset(); 
//session_destroy();
?>
</body>
</html>
