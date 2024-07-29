<?php
include("connexion.php");
   //connexion avec le serveur (APACHE)
   $username = "root";
   $password = "";
   $hostname = "localhost";
   // activer le rapport d'erreur
   mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
   // connection string with database
   $dbhandle = mysqli_connect($hostname, $username, $password);
   // connect with table
   $selected = mysqli_select_db($dbhandle, "projet_bd");
   //$_SERVER['REQUEST_METHOD'] est utilisé pour connaître la méthode de requête (par exemple GET, POST, PUT, etc.) utilisée pour accéder à la page.
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // Vérifiez si le mail d'utilisateur et le password sont définis
            if (isset($_POST['mail']) && isset($_POST['password'])) {
             // Escape special characters in username and password to prevent SQL injection attacks
               $username = mysqli_real_escape_string($dbhandle, $_POST['mail']);
               $password = mysqli_real_escape_string($dbhandle, $_POST['password']);
                // Query the database to check if the user exists
                $sql = "SELECT * FROM users WHERE mail='$username' AND mdp='$password'";
                $result = mysqli_query($dbhandle, $sql);
                // If the query returns one row, then the user exists and we can start a session
                 if (mysqli_num_rows($result) == 1) {
                     $row = mysqli_fetch_assoc($result);
                     session_start();
                     $_SESSION['id'] = $row['id'];
                     $_SESSION['nom'] = $row['nom'];
                     $_SESSION['prenom'] = $row['prenom'];
                     $_SESSION['mail'] = $username;
                     $_SESSION['password'] = $password;
                     header('Location: espace_etudiant.php');
                     
                     exit;
                   } else {
                   // If the query returns zero rows, then the user doesn't exist or the password is wrong
                          echo "Invalid username or password.";
                    }
                }
    }
    //$dbhandle->close();
?>
<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
       <title>Authentification</title>
       <link href="layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">
       <link href="inscription.css" rel="stylesheet" type="text/css">
       <style>
    form input[type="email"],
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
     <div align="center" style="margin-top: 50px;">
     <form name="connexion" method="post" onsubmit="return test()" >
           <label > Mail:</label>
           <input type="email" name="mail" placeholder="SVP entrez votre Mail ! !" required/>
           <br>
           <br>
           <label > Mot de Passe : </label>
           <input type="password" name="password" placeholder="SVP entrez votre mot de passe ! !"required/>
           <br>
           <br>
            <input type="submit" class="btn" value="Se Connecter">
            <!--<input type="button" value="Se Connecter" onclick="test()">-->
            <input type="reset"  class="btn" value="Annuler">
        </form>

     </div>
        <script>
           function test() {
               var login = connexion.mail.value;
               var pwd = connexion.password.value;
               var a = "@";

               if (login.length === 0 || pwd.length === 0) {
                  alert("Vérifier votre login et votre de mot de passe");
                  return false;
                }
                else {
                    if (pwd.length < 8 || pwd.length > 8) {
                        alert("Votre mot de passe doit avoir une longueur égale à 8 caractères");
                        return false;
                    }
                    if (login.substring(login.indexOf(a)) != '@isikef.u-jendouba.tn') {
                        alert("Votre de mot de passe doit avoir une adresse gmail");
                        return false;
                    } 
                }
            }
</script>
</body>
</html>