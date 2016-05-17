<?php
try
{
  $bdd = new PDO('mysql:host=localhost;dbname=test_alternance;','root','lenytiana', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
}
catch(Exception $e)
{
  die('Erreur : ' .$e->getMessage());
}

?>
<!DOCTYPE html>
<html>
  <head lang="fr_FR">

    <title> test alternance </title>
    <!-- feuille de style pour écran ( ordinateur, tablettes ) -->
    <link rel="stylesheet" href="styles_bigscreen.css" media="screen and (min-device-width : 480px) and (max-device-width : 1624px)"/>
    <!-- feuille de style pour écran ( portable )-->
    <link rel="stylesheet" href="styles_smallscreen.css" media="screen and (min-device-width : 320px) and (max-device-width : 480px)"/>

    <script type="text/javascript">
    /** Fonction basculant la visibilité d'un élément dom
    * @parameter anId string l'identificateur de la cible à montrer, cacher
    */
    function toggle(anId)
    {
      node = document.getElementById(anId).style;
      if (node.display=='block')
      {
      // Contenu caché, le montrer
      node.display='none';
      // node.style.height = "58vh";
      }
      else
      {
      // Contenu visible, le cacher
      node.display='block';
      // node.style.height = "0";			// Optionnel libérer l'espace
      }
    }
    </script>


  </head>
  <body>

    <header>
      <h1> Profil Browser </h1>
    </header>

    <section id="box">

      <article id="minibox">

    <!-- Ligne 1 -->
        <a href="#" onclick="toggle('descrip1')">
          <div class="lignes">
            <div class="nom">
              <?php

              $requete = $bdd->query('SELECT first_name, last_name FROM profiles WHERE id=1');

              $donnees = $requete -> execute();
              while($donnees =$requete->fetch())
              {
                echo '<p id="nom">' . $donnees['first_name'] . ' ' . $donnees['last_name'] . '</p>';
              }

              ?>
            </div>

          </div>
        </a>

          </div>

        <div id="descrip1">


            <div class="photo">

              <?php

              $requete = $bdd->query('SELECT image FROM profiles WHERE id=1');

              $donnees = $requete -> execute();
              while($donnees =$requete->fetch())
              {
                echo '<img src="'.$donnees['image'].' " title="Photo" alt="Photo" />';
              }

              ?>


            </div>
            <p id="texte">

              <?php

              $requete = $bdd->query('SELECT description FROM profiles WHERE id=1');

              $donnees = $requete -> execute();
              while($donnees =$requete->fetch())
              {
                echo '<p>' . $donnees['description'] . '</p>';
              }

              ?>
            </p>

        </div>

    <!-- Ligne 2 -->
        <a href="#" onclick="toggle('descrip2')"><div class="lignes">
            <div class="nom">
              <?php

              $requete = $bdd->query('SELECT first_name, last_name FROM profiles WHERE id=2');

              $donnees = $requete -> execute();
              while($donnees =$requete->fetch())
              {
                echo '<p id="nom">' . $donnees['first_name'] . ' ' . $donnees['last_name'] . '</p>';
              }

              ?>
            </div>

        </div></a>

        <div id="descrip2">
            <div class="photo">
              <?php

              $requete = $bdd->query('SELECT image FROM profiles WHERE id=2');

              $donnees = $requete -> execute();
              while($donnees =$requete->fetch())
              {
                echo '<img src="'.$donnees['image'].' " title="Photo" alt="Photo" />';
              }

              ?>
            </div>
            <p id="texte">
              <?php

              $requete = $bdd->query('SELECT description FROM profiles WHERE id=2');

              $donnees = $requete -> execute();
              while($donnees =$requete->fetch())
              {
                echo '<p>' . $donnees['description'] . '</p>';
              }

              ?>
            </p>
        </div>

    <!-- Ligne 3 -->
        <a href="#" onclick="toggle('descrip3')"><div class="lignes">
            <div class="nom">
              <?php

              $requete = $bdd->query('SELECT first_name, last_name FROM profiles WHERE id=3');

              $donnees = $requete -> execute();
              while($donnees =$requete->fetch())
              {
                echo '<p id="nom">' . $donnees['first_name'] . ' ' . $donnees['last_name'] . '</p>';
              }

              ?>
            </div>

        </div></a>

        <div id="descrip3">
            <div class="photo">
              <?php

              $requete = $bdd->query('SELECT image FROM profiles WHERE id=3');

              $donnees = $requete -> execute();
              while($donnees =$requete->fetch())
              {
                echo '<img src="'.$donnees['image'].' " title="Photo" alt="Photo" />';
              }

              ?>
            </div>
            <p id="texte">
              <?php

              $requete = $bdd->query('SELECT description FROM profiles WHERE id=3');

              $donnees = $requete -> execute();
              while($donnees =$requete->fetch())
              {
                echo '<p>' . $donnees['description'] . '</p>';
              }

              ?>
            </p>
        </div>

     <!-- Ligne 4 -->
         <a href="#" onclick="toggle('descrip4')"><div class="lignes">
             <div class="nom">
               <?php

               $requete = $bdd->query('SELECT first_name, last_name FROM profiles WHERE id=4');

               $donnees = $requete -> execute();
               while($donnees =$requete->fetch())
               {
                 echo '<p id="nom">' . $donnees['first_name'] . ' ' . $donnees['last_name'] . '</p>';
               }

               ?>
             </div>

         </div></a>

        <div id="descrip4">
            <div class="photo">
              <?php

              $requete = $bdd->query('SELECT image FROM profiles WHERE id=4');

              $donnees = $requete -> execute();
              while($donnees =$requete->fetch())
              {
                echo '<img src="'.$donnees['image'].' " title="Photo" alt="Photo" />';
              }

              ?>
            </div>
            <p id="texte">
              <?php

              $requete = $bdd->query('SELECT description FROM profiles WHERE id=4');

              $donnees = $requete -> execute();
              while($donnees =$requete->fetch())
              {
                echo '<p>' . $donnees['description'] . '</p>';
              }

              ?>
            </p>
        </div>

      <!-- Ligne 5 -->
        <a href="#" onclick="toggle('descrip5')"><div class="lignes">
            <div class="nom">
              <?php

              $requete = $bdd->query('SELECT first_name, last_name FROM profiles WHERE id=5');

              $donnees = $requete -> execute();
              while($donnees =$requete->fetch())
              {
                echo '<p id="nom">' . $donnees['first_name'] . ' ' . $donnees['last_name'] . '</p>';
              }

              ?>
            </div>

        </div></a>

        <div id="descrip5">
            <div class="photo">
              <?php

              $requete = $bdd->query('SELECT image FROM profiles WHERE id=5');

              $donnees = $requete -> execute();
              while($donnees =$requete->fetch())
              {
                echo '<img src="'.$donnees['image'].' " title="Photo" alt="Photo" />';
              }

              ?>
            </div>
            <p id="texte">
              <?php

              $requete = $bdd->query('SELECT description FROM profiles WHERE id=5');

              $donnees = $requete -> execute();
              while($donnees =$requete->fetch())
              {
                echo '<p>' . $donnees['description'] . '</p>';
              }

              ?>
            </p>
        </div>

      <!-- Ligne 6 -->
        <a href="#" onclick="toggle('descrip6')"><div class="lignes">
            <div class="nom">
              <?php

              $requete = $bdd->query('SELECT first_name, last_name FROM profiles WHERE id=6');

              $donnees = $requete -> execute();
              while($donnees =$requete->fetch())
              {
                echo '<p id="nom">' . $donnees['first_name'] . ' ' . $donnees['last_name'] . '</p>';
              }

              ?>
            </div>

        </div></a>

        <div id="descrip6">
            <div class="photo">
              <?php

              $requete = $bdd->query('SELECT image FROM profiles WHERE id=6');

              $donnees = $requete -> execute();
              while($donnees =$requete->fetch())
              {
                echo '<img src="'.$donnees['image'].' " title="Photo" alt="Photo" />';
              }

              ?>
            </div>
            <p id="texte">
              <?php

              $requete = $bdd->query('SELECT description FROM profiles WHERE id=6');

              $donnees = $requete -> execute();
              while($donnees =$requete->fetch())
              {
                echo '<p>' . $donnees['description'] . '</p>';
              }

              ?>
            </p>
        </div>

      <!-- Ligne 7 -->
        <a href="#" onclick="toggle('descrip7')"><div class="lignes">
            <div class="nom">
              <?php

              $requete = $bdd->query('SELECT first_name, last_name FROM profiles WHERE id=7');

              $donnees = $requete -> execute();
              while($donnees =$requete->fetch())
              {
                echo '<p id="nom">' . $donnees['first_name'] . ' ' . $donnees['last_name'] . '</p>';
              }

              ?>
            </div>

        </div></a>

        <div id="descrip7">
            <div class="photo">
              <?php

              $requete = $bdd->query('SELECT image FROM profiles WHERE id=7');

              $donnees = $requete -> execute();
              while($donnees =$requete->fetch())
              {
                echo '<img src="'.$donnees['image'].' " title="Photo" alt="Photo" />';
              }

              ?>
            </div>
            <p id="texte">
              <?php

              $requete = $bdd->query('SELECT description FROM profiles WHERE id=7');

              $donnees = $requete -> execute();
              while($donnees =$requete->fetch())
              {
                echo '<p>' . $donnees['description'] . '</p>';
              }

              ?>
            </p>
        </div>

      <!-- Ligne 8 -->
        <a href="#" onclick="toggle('descrip8')"><div class="lignes">
            <div class="nom">
              <?php

              $requete = $bdd->query('SELECT first_name, last_name FROM profiles WHERE id=8');

              $donnees = $requete -> execute();
              while($donnees =$requete->fetch())
              {
                echo '<p id="nom">' . $donnees['first_name'] . ' ' . $donnees['last_name'] . '</p>';
              }

              ?>
            </div>

        </div></a>

        <div id="descrip8">
            <div class="photo">
              <?php

              $requete = $bdd->query('SELECT image FROM profiles WHERE id=8');

              $donnees = $requete -> execute();
              while($donnees =$requete->fetch())
              {
                echo '<img src="'.$donnees['image'].' " title="Photo" alt="Photo" />';
              }

              ?>
            </div>
            <p id="texte">
              <?php

              $requete = $bdd->query('SELECT description FROM profiles WHERE id=8');

              $donnees = $requete -> execute();
              while($donnees =$requete->fetch())
              {
                echo '<p>' . $donnees['description'] . '</p>';
              }

              ?>
            </p>
        </div>

      <!-- Ligne 9 -->
        <a href="#" onclick="toggle('descrip9')"><div class="lignes">
            <div class="nom">
              <?php

              $requete = $bdd->query('SELECT first_name, last_name FROM profiles WHERE id=9');

              $donnees = $requete -> execute();
              while($donnees =$requete->fetch())
              {
                echo '<p id="nom">' . $donnees['first_name'] . ' ' . $donnees['last_name'] . '</p>';
              }

              ?>
            </div>

        </div></a>

        <div id="descrip9">

             <div class="photo">
               <?php

               $requete = $bdd->query('SELECT image FROM profiles WHERE id=9');

               $donnees = $requete -> execute();
               while($donnees =$requete->fetch())
               {
                 echo '<img src="'.$donnees['image'].' " title="Photo" alt="Photo" />';
               }

               ?>
             </div>
             <p id="texte">
               <?php

               $requete = $bdd->query('SELECT description FROM profiles WHERE id=9');

               $donnees = $requete -> execute();
               while($donnees =$requete->fetch())
               {
                 echo '<p>' . $donnees['description'] . '</p>';
               }

               ?>
             </p>

        </div>

      <!-- Ligne 10 -->
        <a href="#" onclick="toggle('descrip10')"><div class="lignes">
            <div class="nom">
              <?php

              $requete = $bdd->query('SELECT first_name, last_name FROM profiles WHERE id=10');

              $donnees = $requete -> execute();
              while($donnees =$requete->fetch())
              {
                echo '<p id="nom">' . $donnees['first_name'] . ' ' . $donnees['last_name'] . '</p>';
              }

              ?>
            </div>

        </div></a>

        <div id="descrip10">
             <div class="photo">
               <?php

               $requete = $bdd->query('SELECT image FROM profiles WHERE id=10');

               $donnees = $requete -> execute();
               while($donnees =$requete->fetch())
               {
                 echo '<img src="'.$donnees['image'].' " title="Photo" alt="Photo" />';
               }

               ?>
             </div>
             <p id="texte">
               <?php

               $requete = $bdd->query('SELECT description FROM profiles WHERE id=10');

               $donnees = $requete -> execute();
               while($donnees =$requete->fetch())
               {
                 echo '<p>' . $donnees['description'] . '</p>';
               }

               ?>
             </p>
        </div>


      </article>

    </section>


</html>
