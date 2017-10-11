<?php
session_start();
?>
<html>
<head>
<link rel="stylesheet" type="text/css" href="CSS/contulMeu.css">
<script src="JS/scripts.js" type="text/javascript"></script>
</head>

<body>

<div id="topbar">
    <ul>
		<li><a href="#">Despre noi</a></li>
		<li><a href="#">Contul meu</a></li>
        <li class="current"><a href="acasa.php">Acasa</a></li>
    </ul>
</div>
<div>
<label>Username</label>
<?php
echo "Username is  :" . $_SESSION["username"]. ":  about that.<br>";
echo "user  :" . $_SESSION["user"]. ":  about that.<br>";
echo "pw  :" . $_SESSION["pw"]. ":  about that.<br>";


?>

</body>
</html>