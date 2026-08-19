<!DOCTYPE html>
<html>
<?php
session_start();
if (!isset($_SESSION['user_username'])){
  header("Location: " . "../index.php?error=Log in please before accessing main page");
	exit;
}
?>
<head lang="en">
    <meta charset="utf-8">
    <meta name="author" content="Apostolos Kalamaras">
    <meta name="viewport" content="width=device-width,initial-scale=1.0"/>
    <title>
     Κοφαρμ Υγεία & Ευεξία  
    </title>
    <link rel="icon" type="image/x-icon" href="../images/tab-logo.jpg"/>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Manrope"/>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Sofia"/>
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined" rel="stylesheet" />
    <link rel="stylesheet" href="../styles/farmaStyle.css" media="screen and (min-width:601px)" />
    <link rel="stylesheet" href="../styles/farmamobile.css" media="screen and (max-width:600px)"  />
    
</head>
<body>

<header>
  <nav class="container1">
    <div class="hover-menu">
      <span class="material-symbols-outlined">Lists</span>ΚΑΤΗΓΟΡΙΕΣ
      <div class="hovr-mnu-content">
        <a href="#">ΓΙΑ ΤΟΝ ΑΝΔΡΑ</a>
        <a href="#">ΓΙΑ ΤΗΝ ΓΥΝΑΙΚΑ</a>
        <a href="#">ΓΙΑ ΤΟ ΠΑΙΔΙ</a>
        <a href="#">ΓΙΑ ΤΗΝ ΜΑΜΑ</a>
        <a href="#">ΕΠΟΧΙΑΚΑ</a>
        <a href="#">ΔΟΝΤΙΑ</a>
        <a href="#">PET</a>
      </div>
    </div>
    <ul>
      <a href="#"><li>ΒΙΤΑΜΙΝΕΣ</li></a>
      <a href="#"><li>ΑΔΥΝΑΤΙΣΜΑ</li></a>
      <a href="#"><li>ΠΕΡΙΠΟΙΗΣΗ ΠΡΟΣΩΠΟΥ</li></a>
      <a href="#"><li>ΑΝΤΗΛΙΑΚΑ</li></a>
      <a href="#"><li>ΣΥΜΠΛΗΡΩΜΑΤΑ</li></a>
      <a href="#"><li>ΠΕΡΙΠΟΙΗΣΗ ΣΩΜΑΤΟΣ</li></a>
    </ul>
  </nav>
    
    <div id="container2">
        <img id="logo" src="../images/koffalogo.png" title="ΚοΦαρμ Υγεία και Ευεξία" alt="ΚοΦαρμ Υγεία και Ευεξία">
        <div class="containerSerch">
          <input type="search" name="searchBar" class="searchBar" placeholder="Aναζήτηση...">
          <button type="menu" class="searchButton"><span class="material-symbols-outlined">search</span></button>
          <a href="#"><img src="../images/ac1.png" alt="Ο Λογαριασμός Μου" title="Ο Λογαριασμός Μου"></a>
          <a href="#"><img src="../images/shop1.png" alt="To Kαλάθι Μου" title="Το Καλάθι Μου"></a>
          <?php 
          if (isset($_SESSION['user_first']) && isset($_SESSION['user_last'])){
                    echo "<p> Welcome " . $_SESSION['user_first'] . " " . $_SESSION['user_last'] . "</p>";
          }
          ?>
        </div>
    </div>
    <div id="container3">
      <p>24310-74968 Δευ 08:00-14:00 - Παρ 08:00-14:00 |</p>
      <p>| <img src="../images/tr1.png" width="5%" alt="Κατ οίκον παραδοση" title="Κατ οίκον παραδοση"> Κατ οίκον παραδοση Με ένα τηλεφώνημα | </p>
      <a href="../LogOut.php"><span class="material-symbols-outlined">cancel</span>Log Out</a>
      <script src="../javascript/jsmod.js"></script>
  </div>
  <div class="mobileMenu">
    <span class="material-symbols-outlined">Lists</span>MENU
      <div class="hovr-mobile-content">
        <a href="#">ΓΙΑ ΤΟΝ ΑΝΔΡΑ</a>
        <a href="#">ΓΙΑ ΤΗΝ ΓΥΝΑΙΚΑ</a>
        <a href="#">ΓΙΑ ΤΟ ΠΑΙΔΙ</a>
        <a href="#">ΓΙΑ ΤΗΝ ΜΑΜΑ</a>
        <a href="#">ΕΠΟΧΙΑΚΑ</a>
        <a href="#">ΔΟΝΤΙΑ</a>
        <a href="#">PET</a>
        <a href="#">ΒΙΤΑΜΙΝΕΣ</a>
        <a href="#">ΑΔΥΝΑΤΙΣΜΑ</a>
        <a href="#">ΠΕΡΙΠΟΙΗΣΗ ΠΡΟΣΩΠΟΥ</a>
        <a href="#">ΑΝΤHΛΙΑΚΑ</a>
        <a href="#">ΣΥΜΠΛΗΡΩΜΑΤΑ</a>
        <a href="#">ΠΕΡΙΠΟΙΗΣΗ ΣΩΜΑΤΟΣ</a>
      </div>
  </div>
</header>
<main>
<section class="container4">
  <form method="post" autocomplete="on" action="../sql/formhandling.php">
  <fieldset class="newsletter">
    <legend>Join our newsletter!!!</legend>
    <input type="text" placeholder="Oνομα" name="first" required>
    <input type="text"placeholder="Επιθετο*(Απαραιτητο)" name="last" required>
    <input type="tel" placeholder="Τηλέφωνο" name="phone" required>
    <input type="text" placeholder="Διεύθυνση" name="address" required>
    <input type="email" placeholder="Εmail*(Απαραιτητο)" name="email" required>
    <input type="number" placeholder="Ηλικία" name="age" required>
    <button type="submit" name="submit" title="submit" id="newsbutton" > Καταχώρηση</button>
  </fieldset>
  </form>
  <section id="materialMobile">
    Black Friday Sales!!!
    <hr>
    <ul>
      <li>
        Forte Pharma 13,99&#8364
        <button type="submit" onclick="alert('Add the code Forte30 for a discount')">Στο Καλάθι</button>
      </li>
      <li>
        Anaplasis Skin Creme 12,99&#8364
        <button type="submit">Στο Καλάθι</button>
      </li>
      <li>
        Cellulite Creme 10,99&#8364
        <button type="submit">Στο Καλάθι</button>
      </li>
      <li>
        Eyebrow Lift 14,99&#8364
        <button type="submit">Στο Καλάθι</button>
      </li>
      <li>
        Guam regenerative mud 9,99&#8364
        <button type="submit">Στο Καλάθι</button>
      </li>
      <li>
        Korres Echinachea 7,99&#8364
        <button type="submit">Στο Καλάθι</button>
      </li>
    </ul>
  </section>
  <section class="material">
    <h1 id="salestitle">Black Friday Sales!!!</h1>
    <figure>
      <img src="../images/forte.jpg" alt="Forte Pharma" title="Forte Pharma">
      <figcaption>Forte Pharma 13,99&#8364</figcaption>
      <button type="submit" onclick="alert('Add the code Forte30 for a discount')" >Στο Καλάθι</button>
    </figure>
    <figure>
      <img src="../images/anaplasis1.jpg" alt="Anaplasis Skin Creme" title="Anaplasis Skin Creme">
      <figcaption>Anaplasis Skin Creme 12,99&#8364</figcaption>
      <button type="submit">Στο Καλάθι</button>
    </figure>
    <figure>
      <img src="../images/anaplasis2.jpg" alt="Anaplasis Cellulite" title="Anaplasis Cellulite">
      <figcaption>Cellulite Creme 10,99&#8364</figcaption>
      <button type="submit">Στο Καλάθι</button>
    </figure>
    <figure>
      <img src="../images/anaplasis3.jpg" alt="Anaplasis Eye Lift" title="Anaplasis Eye Lift">
      <figcaption>Eyebrow Lift 14,99&#8364</figcaption>
      <button type="submit">Στο Καλάθι</button>
    </figure>
    <figure>
      <img src="../images/Guam.jpg" alt="Guam Mud" title="Guam Mud">
      <figcaption>Guam regenerative mud 9,99&#8364</figcaption>
      <button type="submit">Στο Καλάθι</button>
    </figure>
    <figure>
      <img src="../images/korres.jpg" alt="Korres Echinachea" title="Korres Echinachea">
      <figcaption>Korres Echinachea 7,99&#8364</figcaption>
      <button type="submit">Στο Καλάθι</button>
    </figure>
  </section>
</section>
<section class="container5Mobile">
  <h1>Βρες Τα Αγαπημένα σου Brands</h1>
  <figure>
    <a href="#"><img src="../images/vichy.png" alt="Vichy" title="Vichy"></a>
  </figure>
  <figure>
    <a href="#"><img src="../images/apivita.png" alt="Apivita" title="Apivita"></a>
  </figure>
  <figure>
    <a href="#"><img src="../images/pampers.jpg" alt="Pampers" title="Pampers" id="pampers"></a>
  </figure>
  <figure>
    <a href="#"><img src="../images/korres.png" alt="Korres" title="Korres" id="korres"></a>
  </figure>
  <a class="brandbtnMobile" href="#">Δες Ολα τα Brands</a>
</section>
<section class="container5">
  <h1>Βρες Τα Αγαπημένα σου Brands</h1>
  <figure id="Vichy">
    <a href="#"><img src="../images/vichy.png" alt="Vichy" title="Vichy"></a>
    <figcaption>Vichy</figcaption>
  </figure>
  <figure>
    <a href="#"><img src="../images/apivita.png" alt="Apivita" title="Apivita"></a>
    <figcaption>Apivita</figcaption>
  </figure>
  <figure>
    <a href="#"><img src="../images/pampers.jpg" alt="Pampers" title="Pampers"></a>
    <figcaption>Pampers</figcaption>
  </figure>
  <figure>
    <a href="#"><img src="../images/korres.png" alt="Korres" title="Korres"></a>
    <figcaption>Korres</figcaption>
  </figure>
  <a class="brandbtn" href="#">Δες Ολα τα Brands</a>
  <script src="../javascript/jsalerts.js"></script>
</section>
<a href="#logo" id="HomeBtn">^</a>
</main>
<footer id="footerMobile">
  <section>
    <img src="../images/koffalogo-removebg-preview.png" alt="Pharmacy Logo" title="Pharmacy Logo">
  </section>
  <section>
    <h2>Eπικοινωνία</h2>
    <p>Καλαμάτα 9, Τρίκαλα 42100</p>
    <p>KoPharm@hotmail.com</p>
    <p>24310-74968</p>
    <a href="Page2.php" target="_self"><p>Φόρμα Ενδιαφέροντος</p></a>
  </section>
  <section>
    <h2>Πληροφορίες</h2>
    <a href=#><p>Τρόποι Πληρωμής</p></a>
    <a href=#><p>Τρόποι Αποστολής</p></a>
    <a href=#><p>Συχνές Ερωτήσεις</p></a>
    <a href=#><p>Πολιτική Επιστροφών</p></a>
  </section>
  <p>
    <em>Copyright &copy; 2024 Η Ένωση Φαρμακοποιών Τρικάλων</em>
  </p>
</footer>
<footer>
  <section>
    <img src="../images/koffalogo-removebg-preview.png" alt="Pharmacy Logo" title="Pharmacy Logo">
  </section>
  <section>
    <h2>Eπικοινωνία</h2>
    <p>Καλαμάτα 9, Τρίκαλα 42100</p>
    <p>KoPharm@hotmail.com</p>
    <p>24310-74968</p>
    <a href="Page2.php" target="_self"><p>Φόρμα Ενδιαφέροντος</p></a>
  </section>
  <section>
    <h2>Πληροφορίες</h2>
    <a href=#><p>Τρόποι Πληρωμής</p></a>
    <a href=#><p>Τρόποι Αποστολής</p></a>
    <a href=#><p>Συχνές Ερωτήσεις</p></a>
    <a href=#><p>Πολιτική Επιστροφών</p></a>
  </section>
  <p>
    <em>Copyright &copy; 2024 Η Ένωση Φαρμακοποιών Τρικάλων</em>
  </p>
</footer>
</body>
</html>