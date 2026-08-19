
document.addEventListener("DOMContentLoaded", function() {//Τοποθετούμε τον κώδικα μας μέσα σε έναν extra event Listener με το DOMContentLoaded βεβαιωνόμαστε ότι η επιθυμητή λειτουργικότητα θα ενεργοποιείται αφού έχει φορτωθεί κανονικά όλη η σελίδα
    var container3 = document.getElementById("container3");//ώστε να βεβαιωνόμαστε ότι η επιθυμητή λειτουργικότητα θα ενεργοποιείται αφού έχει φορτωθεί κανονικά όλη η σελίδα
    container3.addEventListener("mouseover", function(){//όταν βρεθεί το ποντίκι επάνω στο στοιχείο αλλάζει το χρώμα
        container3.style.backgroundColor="red";
    });
    container3.addEventListener("mouseleave", function(){//επανέρχεται όταν το ποντίκι φεύγει
        container3.style.backgroundColor="rgba(238, 159, 12, 0.767)";
    });
});