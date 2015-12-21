<html>
    <head>
        <meta charset="utf-8" />
		<link rel="stylesheet" href="style (1).css" />
        <title>compte</title>
    </head>
    <body>
	<BODY BACKGROUND=" images/pagedemarage.gif" height=2000 ></BODY>
        <form action="page1.php" method="post">
		<br></br>
		<br></br>
		<center><p>formulaire pour l'enfant</p>
		    <p> Nom d'enfant: <input type="text" name="nomenfant"></p>
			<p>date de naissance  <input type="text" name="datenaissance" /> </p>
			<p>sexe de l'enfant <input type="text" name="sexe" /></p>
			<p>formulaire pour le parent</p>
			<p>nom de père: <input type="text" name="nompere" /></p>
			<p>Nom de mère: <input type="text" name=" nommere" /></p>
			<p>adresse <input type="text" name="adresse" /></p>
			<p> adresse éléctronique: <input type="text" name="email" /></p>
			<p>numéro téléphone <input type="text" name="telephone" /></p>
			<p>paiement : <input type="submit" value="paiement" /></p>
            </p>
			<center><input type="submit" name="valider" value="valider"/></center>
        </form>
		<?php
        if (isset ($_POST['valider'])){
            //On récupère les valeurs entrées par l'utilisateur :
            $nomenfant=$_POST['nomenfant'];
            $datenaissance=$_POST['datenaissance'];
            $sexe=$_POST['sexe'];
			$pere=$_POST['nompere'];
		     $mere=$_POST['nommere'];
			$adresse=$_POST['adresse'];
			$email=$_POST['email'];
			$telephone=$_POST['telephone'];
            
            //On se connecte
            connectMaBase();
 
            //On prépare la commande sql d'insertion
            $sql = 'INSERT INTO enfant VALUES("'.$nomenfant.'","'.$datenaissance.'","'.$sexe.'","'.$pere.'","'.$mere.'","'.$adresse.'",
			"'.$email.'","'.$telephone.'")'; 
              mysqli_query ($sql) or die ('Erreur SQL !'.$sql.'<br />'.mysql_error());
            /*on lance la commande (mysql_query) et au cas où, 
            on rédige un petit message d'erreur si la requête ne passe pas (or die) 
            (Message qui intègrera les causes d'erreur sql)*/
           
        }
        ?>
         </body>
</html>