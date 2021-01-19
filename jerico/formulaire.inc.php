<link rel="stylesheet" href="enregistre.css">
<title>minifacbookcity.com</title>
<div class="yes">
  <div class="topp">
  <form action= "<?php echo $_SERVER['PHP_SELF'];?>" method="post"
enctype="application/x-www-form-urlencoded",>
      <h2 class="titre">inscription</h2>
      <p>Premon</p>
      <input type="text" id="prenom" name="prenom" placeholder="Enter votre prenom" required>

      <p>Mon</p>
      <input type="text" id="nom" name="nom" placeholder="Enter votre nom" required >

      <p>Adresse E-mail</p>
      <input type="text" id="email" name="email" placeholder="Enter votre email" required >

      <p>Mot de passe</p>
      <input type="password" id="password" name="password" placeholder="Enter votre mot de passe" required >

      <p>Age</p>
      <input type="number" id="age" name="age" placeholder="0" required> <br>

      <p>Vous êtes </p>
      <label for="sexe">sexe:</label>
      <select name="sexe" id="sexe">
        <option value="homme">Homme</option>
        <option value="femme">Femme</option>
        <option value="bisexe">aucun</option>
      </select><br><br>

      <script src="https://www.google.com/recaptcha/api.js" async defer></script>

      <div class="g-recaptcha" data-sitekey="6Lc9sBYaAAAAAC8OzNNlanUvF2ipzKMtABnQut1V"></div>
      <br/>
      
      <input type="submit" value="Enregister">
      <input type="reset" value="Effacer">
      <a href="acceuil.php">Passer à la page </a>
    </form>

    <?php
include("connect.php");
$idcom=connexpdo('nimifacebookcity','myparam');
if(!empty($_POST['prenom'])&& !empty($_POST['email'])&& !empty($_POST['password']))
{
$id_user="\N";
$prenom=$idcom->quote($_POST['prenom']); 
$nom=$idcom->quote($_POST['nom']);
$mail=$idcom->quote($_POST['email']);
$password=$idcom->quote($_POST['password']);  
$age=$idcom->quote($_POST['age']);
$sexe=$idcom->quote($_POST['sexe']); 


// Requête SQL
$requete="INSERT INTO utilisater
VALUES($id_user,$prenom,$nom,$mail,$password,$age,$sexe)"; // pas de guillemets si on applique la méthode quote aux variables

$nblignes=$idcom->exec($requete); 
if($nblignes!=1) 
{
$mess_erreur=$idcom->errorInfo();
echo "Insertion impossible, code", $idcom->errorCode(),$mess_erreur[2];
echo "<script type=\"text/javascript\">
alert('Erreur : ".$idcom->errorCode()."')</script>";
}
else
{
echo "<script type=\"text/javascript\">
alert('Vous êtes enregistré. Votre numéro de client est :
". $idcom->lastInsertId()."')</script>"; 
$idcom=null;
}
}
else {echo "<h3>Formulaire à compléter !</h3>";}
?>

  </div>
  <div class="top">
    <img src="https://i.pinimg.com/originals/c7/59/1b/c7591b7d85af2009123a679496a5146d.png" alt="les combi", width="100%", height="40%">
    <p>Connectez-vous et retrouvez-vous ami(e)s où vous soyer !! <br>Profitez du plus grand temps entre ami et frère; et en Famille  </p>
    <img src="https://cdn.1min30.com/wp-content/uploads/2014/09/shutterstock_211297813-1.jpg" alt="les combi", width="100%", height="40%">

  </div>
</div> 