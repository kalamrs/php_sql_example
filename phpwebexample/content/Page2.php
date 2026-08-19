<!DOCTYPE html>
<html>
  <?php
  session_start();
  if (!isset($_SESSION['user_username'])){
    header("Location: " . "../index.php?error=Log in please before accessing main page and secondary pages");
    exit;
  }
  ?>
<head lang="en">
    <meta charset="utf-8">
    <title>
     Κοφαρμ Φόρμα Επικοινωνίας 
    </title>
    <link rel="icon" type="image/x-icon" href="../images/tab-logo.jpg"/>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Manrope"/>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Sofia"/>
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined" rel="stylesheet" />
    <link rel="stylesheet" href="style2.css"/>
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
      <p>24310-74968 Δευ 08:00-14:00 - Παρ 08:00-14:00</p>
      <p><img src="../images/tr1.png" width="5%" alt="Κατ οίκον παραδοση" title="Κατ οίκον παραδοση"> Κατ οίκον παραδοση Με ένα τηλεφώνημα</p>
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
<main id="container6">
    <form id="formaEpikoinwnias" autocomplete="on" method="post" action="">
        <h1>Είμαστε εδώ για εσάς, Επικονωνήστε μαζι μας</h1>
        <label for="name">*Ονομα:</label>
        <input type="text" id="name" name="name" value="" placeholder="Oνομα" required>
        <label for="lastname">*Επίθετο:</label>
        <input type="text" id="lastname" name="lastname" value="" placeholder="Επιθετο" required>
        <label for="phone">*Τηλέφωνο:</label>
        <input type="tel" id="phone" name="phone" value="" placeholder="Τηλέφωνο" required>
        <label for="address">*Διεύθυνση:</label>
        <input type="text" id="address" name="address" value="" placeholder="Διεύθυνση" required>
        <label for="email">*Email:</label>
        <input type="email" id="email" name="email" value="" placeholder="Εmail" required>
        <label for="age">*Ηλικία:</label>
        <input type="number" id="age" name="age" value="" placeholder="Ηλικία" required>
        <label for="thema">*Θέμα:</label>
        <input type="text" id="thema" name="thema" value="" placeholder="Θέμα" required>
        <label for="mhnuma">*Μήνυμα:</label>
        <input type="text" id="mhnuma" name="mhnuma" value="" placeholder="Μήνυμα" required>
        <p id="checkcontainer">
        <input type="checkbox" name="check" value="" id="check" required>
        <label id="labelcheck" for="check">Δέχομαι τους όρους <a href="#">Διαχείρισης Απορρήτου</a> </label>
        </p>
        <button type="submit" name="submit" value="submit" id="newsbutton"> Υποβολή</button>
    </form>
    <table id="pinakasEfhmerias">
        <tr>
          <th colspan="3">Εφημερίες Συλλόγου 16-22/12/2024 </th>
        </tr>
        <tr>
            <th>Ημερομηνία</th>
            <th>Φαρμακείο</th>
            <th>Διεύθυνση</th>
        </tr>
        <tr>
          <td>Δευ 16 Δεκ 2024</td>
          <td>-</td>
          <td>-</td>
        </tr>
        <tr>
            <td>Τρί 17 Δεκ 2024</td>
            <td>Κόφφα Αλεξάνδρα, Καράμαλη Σοφία, KoPharm</td>
            <td>Καλαμάτα 9, 24310-74968</td>
        </tr>
        <tr>
          <td>Τετ 18 Δεκ 2024</td>
          <td>-</td>
          <td>-</td>
        </tr>
        <tr>
            <td>Πεμ 19 Δεκ 2024</td>
            <td>Κολτσινάκου Περπεριμ, Pharmacy123</td>
            <td>Γαύρου 7, 24310-76554</td>
        </tr>
        <tr>
          <td>Παρ 20 Δεκ 2024</td>
          <td>Κοντός Νικόλαος, Pharmacy Megastore</td>
          <td>Ασκληπιού 6, 2431-98787</td>
        </tr>
        <tr>
          <td>Σαβ 21 Δεκ 2024</td>
          <td>-</td>
          <td>-</td>
        </tr>
        <tr>
          <td>Κυρ 22 Δεκ 2024</td>
          <td>Κόφφα Αλεξάνδρα, Καράμαλη Σοφία, KoPharm</td>
          <td>Καλαμάτα 9, 24310-74968</td>
        </tr>
    </table>
    <a href="#logo" id="HomeBtn">^</a>
    <a href="HomePage.php" target="_blank" id="MainHomeBtn"><span class="material-symbols-outlined">Home</span></a>
    <form method="post" enctype="multipart/form-data" action="../uploadFile.php">
      <fieldset class="fileHandling">
        <legend>Στείλτε μας την Ηλεκτρονική Συνταγή σας, Παραλάβετε το Φάρμακο σας!!!</legend>
        <input type="file" name="targetFile"/>
        <button type="submit" name="submit" id="fileButton">Upload File</button>
      </fieldset>
    </form>
    <script src="../javascript/jsalert.js"></script>
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