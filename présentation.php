<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>présentation</title>
  <link href="layout/styles/présentation.css" rel="stylesheet" type="text/css" media="all">
  <link href="layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">
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
  

    <header id="header" class="hoc clear">
      <div id="logo" class="fl_left">


        <img src="images/demo/backgrounds/kef.png" alt="logo isi">


      </div>
      <nav id="mainav" class="fl_right">
        <div id="mainavd" class="fl-right">
          <ul>
            <li>
              <a class="drop" href="#">L'INSTITUT</a>
              <ul>
                <div id="mainavid">
                  <li>
                    <a class="active" href="formation.php">Formations</a>


                  </li>
                </div>
                <div class="for">
                 
                  <li>
                    <a class="caret" href="présentation.php">Présentation</a>

                  </li>
                </div>
              </ul>
            </li>
            <li>
              <a class="drop" href="#">VIE ESTUDIANTINE</a>
              <ul>


                <li>
                  <a class="liste" href="clubs.php">Liste des clubs </a>

                </li>


              </ul>
            <li>
              <a class="drop" href="4c.php">4C</a>

            </li>
          
            <li>
              <a class="drop" href="evenement.php">Calendreir</a>
            </li>
            <li>
               <a class="drop" href="forum.php">Forum de Discussion</a>
            </li>

          </ul>


        </div>

      </nav>
    </header>

   
  
  <h4>Présentation :</h4>
  <p  id="pre">
    L’Institut  Supérieur d’Informatique du Kef a été crée selon le décret n°06-1587 du 6 juin 2006 portant création d’établissements  d’enseignement supérieur et de recherche.
    <br>    
    En effet, l’ISIKef est l’une des établissements universitaires de l’université de Jendouba.
    <br>    
    <br>      
    Responsables :
    <br>
    <br>     
        
    Directeur : Mr. Hayouni Mohamed
    Secrétaire général : Mr. KHAMMASSI AISSA
    <br>    
    Cordonnées :
    <br>
    <br>     
        
    Adresse : 5 rue Salah Ayache 7100 Le Kef
    Téléphone : 78 201 056    Fax : 78 200 237
    Site web : www.isikef.rnu.tn
  </p>
  <div class="bgded overlay">

<div class="wrapper row4">
  <footer id="footer" class="hoc clear">

    <div class="group btmspace-50">


      <div class="one_quarter">
        <?php 
        if(isset($_POST['submit_form'])){
          $name = $_POST['name'];
          $email = $_POST['email'];
          $msg = $_POST['msg'];
          $phone = $_POST['phone'];
          $FromName = "sirine habibi";
          $FromEmail = "habibi02sirine@gmail.com";
          $ReplyTo = $email;
          $toemail = "isikef@gmail.com";
          $subject = "Isi Kef";
          $message = 'Name:-'.$name.'<br>Email :-' .$email.'<br>Phone No:-' .$phone.'<br> Message:-' .$msg;
          $headers = "MINE-Version: 1.0\n";
              $headers .= "Content-type:text/html; charset-iso-8859-1\n";
              $headers .= "From: ".$FromName."<".$FromEmail.">\n";
              $headers .= "Reply-To:".$ReplyTo."\n";
              $headers .= "X-Sender: <".$FromEmail.">\n";
              $headers .= "X-Mailer: PHP\n";
              $headers .= "X-Priority: 1\n";
              $headers .= "Return-Path: <".$FromEmail.">\n";
              if (mail($toemail,$subject,$message,$headers,'f'.$FromEmail)){
                    $hide-1;
                    echo "Merci ton message est envoyer nous repondat la plutot possible .";
        
              }else{
                    echo "Votre message n'est envoyé réesayer une autre fois .";
              }
              if(!isset($hide)){

              }


        }
          
          
        ?>

        <h6 class="heading">CONTACTER NOUS:</h6>

        <form action="https://formspree.io/f/{form_id}" method="post">
          <fieldset>

            <input class="btmspace-15" type="text" value="" placeholder="Nom" name="name">
            <input class="btmspace-15" type="text" value="" placeholder="Email" name="email">
            <input class="btmspace-15" type="text" value="" placeholder="téléphone" name="phone">
            <textarea rows="10"  cols="30" name="msg" placeholder="votre message" class="btmspace-15" ></textarea>
            <button class="btn"  type="submit" name="submit_form" value="submit">Submit</button>
          </fieldset>
        </form>
        
      </div>


    </div>

    <hr class="btmspace-50">

  

  </footer>
</div>

<div class="wrapper row5">
  <div id="copyright" class="hoc clear">

    <p class="fl_left">Copyright &copy; 2023 - All Rights Reserved </p>


  </div>
</div>

</div>
  


</body>

</html>