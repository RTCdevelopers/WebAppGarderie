<html><head>
<meta charset="utf_8" />
</head>
<body>
<?php  $con=mysqli_connect("localhost","root","","garderie")or die("Error");?>
<form action="BD.php" method="POST">
<p>
Nom de père : <input  name ="NomP" type="text" />
</p>
<p>
numéro de carte d'identité: <input  name ="Numero" type="INT" />
</p>
<p>
Nom d'enfant: <input  name ="Nom" type="TEXT" />
</p>
<p>
Montant à payer: <input  name ="Montant" type="INT" />
</p><p>
<input type="submit" name="envoyer" value="envoyer" /></p>
</form>

</body>
</html>
<?php 
 if (isset($_POST['envoyer'])){
$NomP=$_POST["NomP"];
$Numero=$_POST["Numero"];
$Nom=$_POST["Nom"];
$Montant=$_POST["Montant"];
 
$sql="INSERT INTO table(,,,)VALUES('$NomP','$Numero','$Nom', '$Montant')";
mysqli_query($con,$sql)or die ('Erreur SQL !'.$sql.'<br />'.mysql_error());
mysqli_close($con);
}
?>