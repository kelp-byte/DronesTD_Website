<!-- #region HTML-->
<!doctype html>
<html id="html" lang="de" class=dn>

<head>
  <link rel="icon" href="img/icon.png">
  <meta charset="utf-8">
  <link rel="stylesheet" href="../stylesheet.css">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://kit.fontawesome.com/ae32d225a7.js" crossorigin="anonymous"></script>
  <title>Profil</title>
</head>

<body>

  <h1>
    <b>Drones TD</b>
  </h1>





  <p>Dronenspaß für den Single- und Multiplayer!</p>

  <br>
  <hr>



  <div class="navbar">
    <a href="../index.html" style="background-color: #222222;"><i class="fa
          fa-home" aria-hidden="true"></i> &nbsp; Home</a>
  </div>
  <br>

<!-- #endregion -->
<!-- #region PHP-->
    <?php

    session_start();

    header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
    header("Cache-Control: post-check=0, pre-check=0", false);
    header("Pragma: no-cache");

    /*
    $encryption = $_COOKIE["user"];
    $decryption_iv = '1234567891011121';
    // Entschlüsselungsschlüssel
    $decryption_key = "aylEwhyjpK2j21Ih1L";
    $ciphering = "AES-128-CTR";
    $decryption=openssl_decrypt ($encryption, $ciphering, $decryption_key, $options, $decryption_iv);
    */

    if ($_SESSION["loggedin"] == 0) {

      die("Sie sind nicht angemeldet. <br> <br>
  <a href='https://www.dronestd.de/down/sign-in.php'>-><b>Startseite</b></a></p>");

    }



echo "<h1> Profil </h1> <img src='http://www.dronesClient.DronesTD.de/"; 
echo $_SESSION["username"];
echo ".png' style='float:right;width:250px;height:250px;> '";



  
echo "
<br> 
Nutzername: <code>" . $_SESSION["username"] . " </code>
<br> 
Email: <code>" . $_SESSION["email"] . "</code>
<br> 
<br>
<h2> Hier werden bald die Statistiken angezeigt!</h2>
";
?>
 
<br>
<br>
<br>
<br>
<br>
<br>
<br>




<div id = rechts style="float:right;">
  
  <form action="upload.php" method="post" enctype="multipart/form-data">
  Profilbild auswählen: (unter 1000KB) <br>
  Nur PNG!!!
  <input type="file" name="fileToUpload" id="fileToUpload">
  <input type="submit" value="Upload Image" name="submit">
  </form>
  </div>

  
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>

    <form action='log_out.php' method='post'>
      <br>
      <label>
        <input type='checkbox' name='check' required>
        Wirklich abmelden?
      </label>
      &emsp;
      <button><p style="color: red">Abmelden</button>
    </form>


    <form action='deleteAcc.php' method='post'>
      <br>
      <label>
        <input type='checkbox' name='check' required>
        Wirklich irreversibel löschen?
      </label>
      &emsp;
      <button><p style="color: red">Löschen</button>
    </form>

    <br>
   

<!--<div id = rechts style="float:right;">
  <h1> Noch nicht benutzen! </h1>
  <form action="upload.php" method="post" enctype="multipart/form-data">
  Profilbild auswählen: (unter 500KB)
  <input type="file" name="fileToUpload" id="fileToUpload">
  <input type="submit" value="Upload Image" name="submit">
  </form>
  </div>
  -->




  </body>

</html>