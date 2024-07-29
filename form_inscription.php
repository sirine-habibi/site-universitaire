<?php
//session_start();
include("connexion.php");

$username = "root";
$password = "";
$hostname = "localhost";
$message = "";
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
// connection string with database
$dbhandle = mysqli_connect($hostname, $username, $password);
// connect with database
$selected = mysqli_select_db($dbhandle, "projet_bd");
// Vérifier si le formulaire est soumis 
if ( isset( $_POST['submit'] ) ) {
/* récupérer les données du formulaire en utilisant 
la valeur des attributs name comme clé 
*/
$nom = $_POST['nom']; 
$prenom = $_POST['prenom'];
$mail = $_POST['mail']; 
$mdp = $_POST['mdp'];

//$hash = md5($mdp);
// définition de la requete + execution de la requete
$result = mysqli_query($dbhandle, "INSERT INTO `users` (nom,prenom,mail,mdp)VALUES ('$nom', '$prenom', '$mail', '$mdp');");
if($result ){
  $message="Inscription effectuer avec succes!!";
}else{
  $message="Echec lors de l'inscription!";
}
}
 

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Inscription</title>
  <link href="layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">
  <link href="inscription.css" rel="stylesheet" type="text/css">
  <style>
    form input[type="text"],
form input[type="password"]
 {
  width: 800px; /* Modifier la taille des champs en fonction de vos besoins */
  padding: 10px;
  font-size: 16px;
}
form input[type="submit"],
form input[type="reset"]{
  width: 300px; /* Modifier la taille des champs en fonction de vos besoins */
  padding: 10px;
  font-size: 16px;
}
input{
  display:inline-block;
}
label{
  width:10rem;
}

  </style>
    

</head>

<body>


  <div class="wrapper row0">
    <div>
      <div id="topbar1">
        <img src="images/demo/t.png" alt="logo tunisie">


      </div>
      <div id="topbar2">
        <p class="drp">
          République Tunisienne
          </br>
          Ministère de l'Enseignement Supérieur et de Recherche Scientifique
          </br>
          Université de Jendouba

        </p>
      </div>
    </div>

    <div id="topbar" class="hoc clear">
      <div class="fl_left">
        <ul class="nospace">


        </ul>
      </div>
      <div class="fl_right">
        <ul class="nospace">


          <li><a href="form_inscription.php">S'inscrire</a></li>
          <li><a href="authentification.php">Login</a></li>
         

          <li><a href="index.php"><i class="fas fa-home"></i></a></li>

          <li><a href="#" title="Login"><i class="fas fa-sign-in-alt"></i></a></li>
          <li><a href="#" title="Login"><i class="fas fa-sign-out-alt"></i></a></li>
          <li><a href="#" title="Sign Up"><i class="fas fa-edit"></i></a></li>
          <li id="searchform">
            <div>
              <form action="#" method="post">
                <fieldset>
                  <legend>Quick Search:</legend>
                  <input type="text" placeholder="Enter search term&hellip;">
                  <button type="submit"><i class="fas fa-search"></i></button>
                </fieldset>
              </form>
            </div>
          </li>
        </ul>
      </div>

    </div>
  </div>

  <br><br>
  <?php
     if($message !=='')
      {
        echo '<h2 style="color:green;">'.$message.'</h2>';
     }
  ?>
  <div align="center">
    <form action="" method="post" onsubmit="return validateForm()">



      <label>Prénom :</label>
      <input type="text" name="prenom" id="prenom" placeholder="prénom" class="btmspace-15" required>

      <div id="name-erreur" style="color:red"></div>


      <br>
      <br>

      <label>Nom :</label>
      <input type="text" name="nom" id="nom" placeholder="nom" class="btmspace-15" required>
      <div id="lastname-erreur" style="color:red"></div>

      <br>
      <br>
      <label>E-mail :</label>
      <input type="text" name="mail" id="mail" placeholder="mail" class="btmspace-15" required>
      <div id="mail-erreur" style="color:red"></div>
      <br>
      <br>
      <label>Mot de Passe :</label>
      <input type="password" name="mdp" id="mdp" placeholder="mot de passe" class="btmspace-15" required>
      <div id="mdp-erreur" style="color:red"></div>
      <br>
      <br>
      <input type="submit" class="btn" name="submit" value="submit">

      <input type="reset" class="btn" value="Annuler">
    </form>
  </div>

  <script>
    function validateForm() {
      //Vérifie que tous les champs sont remplis
      const name = document.getElementById("nom").value;
      const lastname = document.getElementById("prenom").value;

      const mail = document.getElementById("mail").value;
      const password = document.getElementById("mdp").value;

      // Obtient les éléments d'affichage des messages d'erreur
      const nameError = document.getElementById("name-erreur");
      const lastnameError = document.getElementById("lastname-erreur");

      const mailError = document.getElementById("mail-erreur");
      const passwordError = document.getElementById("mdp-erreur");

      if(password.length !== 8){
        alert("Password must be cin");
        return false;
      }else if(mail.split("@")[1] !== "isikef.u-jendouba.tn"){
        alert("Email must contain isikef.u-jendouba.tn");
        return false;
      }else {
        return true;
      }
    }




      
  </script>
</body>

</html>