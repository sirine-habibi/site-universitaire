<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>formation</title>
    <link href="layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">
    <link href="layout/styles/formation.css" rel="stylesheet" type="text/css" media="all">
    <style>
       
        .formations {
  margin: 2rem auto;
  border: 1px solid rgba(32, 33, 36, 0.1);
  padding: 2rem;
}
.formations .container {
  margin: 1.8rem auto;
  background: #2021241a;
  padding: 1.5rem;
}
.formations hr {
  margin-bottom: 0.8rem;
  border: 1px solid #111;
}

.filter-section {
  display: flex;
  justify-content: center;
  margin-bottom: 20px;
}

.filter-btn {
  background-color: #ddd;
  border: none;
  padding: 10px 20px;
  margin-right: 10px;
  cursor: pointer;
}

.filter-btn.active {
  background-color: #555;
  color: #fff;
}



.item {
  width: 100%;
  background-color: #f2f2f2;
  border: 1px solid #ddd;
  padding: 20px;
  margin-bottom: 20px;
  text-align: center;
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
    <div class="bgded overlay padtop" style="background-image:url('images/demo/info.jpg');">

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

        <div id="pageintro" class="hoc clear">

            <h3 class="heading">Nos Informations</h3>
        </div>
    </div>
    <main>
    <section class="formations" id="formations">
      <div class="container gray-bg">
        <div class="filter-section">
          <button class="filter-btn active" data-filter="lcs">LCS</button>
          <button class="filter-btn" data-filter="lce">LCE</button>
          <button class="filter-btn" data-filter="siw">SIW</button>
          <button class="filter-btn" data-filter="asri">ASRI</button>
          <button class="filter-btn" data-filter="awi">AWI</button>
          <button class="filter-btn" data-filter="nticdia">NTICDIA</button>
        </div>
        <hr>
        <div class="content-section">
          <div class="item lcs">
            <h4>LCS</h4>
            <p>Cette Licence Intitulé "Computer Science" Comprend Deux Spécialités :</p>

            <a href="http://parcours-lmd.salima.tn/listeueetab.php?parc=UUkDTl9wB2ZdbFAqDjJWZVRyXGI=&etab=Wj9Waw05" target="_blank">Génie Logiciel Et Système D'Information : GL</a>
            <br>
            <a href="http://parcours-lmd.salima.tn/listeueetab.php?parc=VU1ZFAwjUTBXZlIoAT1RYgguDTI=&etab=BGEEOVxo" target="_blank">Informatique et Multimédia : IM</a>
          </div>
          <div class="item lce" style="display: none">
            <h4>LCE</h4>
            <p>Licence en Computer Engineering</p>
            <p>Cette Licence Contient une seule Spécialité : </p>
            <a href="http://parcours-lmd.salima.tn/listeueetab.php?parc=AxtSH11yBGVVZFErVGhQYAQiCzQ=&etab=UDUEOQw4" target="u_blank">Ingénierie des réseaux et systèmes</a>
          </div>
          <div class="item siw" style="display: none">
            <h4>SIW</h4>
            <p>Mastère de Recherche en Systèmes d'Informations et Web</p>
            <a href="http://www.isikef.rnu.tn/upload/1570693820.pdf" target="u_blank">Plan d'études du Mastère de recherche en systèmes d'informations et web</a>
          </div>
          <div class="item asri" style="display: none">
            <h4>ASRI</h4>
            <p>Mastère Professionnel en Administration et Sécurité des Réseaux Informatiques</p>
            <a href="http://www.isikef.rnu.tn/upload/1570097568.pdf" target="u_blank">Pour plus de détails sur le parcours - ASRI</a>
          </div>
          <div class="item awi" style="display: none">
            <h4>AWI</h4>
            <p>Mastère Professionnel en Application Web Intelligente</p>
          </div>
          <div class="item nticdia" style="display: none">
            <h4>NTICDIA</h4>
            <p>Mastère Co-Construite en Nouvelles Technologies de l’Information et de la Communication dédiées à l'Innovation de l'Agriculture</p>
            <a href="http://www.isikef.rnu.tn/upload/1570097573.pdf" target="u_blank"> Pour plus de détails sur le Parcours - NTICDIA </a>
          </div>
        </div>
      </div>
    </section>
    </main>
    

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
  <script>
    const filterBtns = document.querySelectorAll('.filter-btn');
    const items = document.querySelectorAll('.item');

    filterBtns.forEach(btn => {
      btn.addEventListener('click', () => {
        // Set all buttons to inactive
        filterBtns.forEach(btn => {
          btn.classList.remove('active');
        });

        // Set clicked button to active
        btn.classList.add('active');

        // Filter items based on button data-filter value
        const filterValue = btn.dataset.filter;
        items.forEach(item => {
          if (item.classList.contains(filterValue)) {
            item.style.display = 'block';
          } else {
            item.style.display = 'none';
          }
        });
      });
    });
  </script>
</body>

</html>