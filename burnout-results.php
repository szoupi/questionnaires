<?php
// custom style is there too
include 'assets/templates/header.html';
?>





<?php
    if (isset($_POST["submitForm"]) && !is_null($_POST["submitForm"])) {

        $results = 0;
        foreach ($_POST as $key => $value) {
            if (str_starts_with( $key, 'question' )){

                // echo $key . " " . $value . "<br />";
                $results += $value;
            }
        }
        // echo $results;


        if ($results <= 18) {
            $class = "success";
            $header =  "ΤΕΛΕΙΑ!";
            $content = "Όλα καλά! Συνέχισε να απολαμβάνεις την εργασία σου!";

        } elseif ($results >= 19 && $results <= 32 ) {
            $class = "info";
            $header = "ΣΤΑ ΠΡΩΤΑ ΒΗΜΑΤΑ...";
            $content = "Χμ.. Υπάρχουν κάποιες ενδείξεις ότι βρίσκεσαι στο αρχικό στάδιο της  Επαγγελματικής Εξουθένωσης (burnout). Είσαι στην αρχή ακόμα αλλα μην το πάρεις αψήφιστα";

        } elseif ($results >= 33 && $results <= 49 ) {
            $class = "primary";
            $header = "ΠΡΟΣΕΧΕ!";
            $content = "Διατρέχεις κίνδυνο να πάθεις burnout! Πρέπει να παρεις μέτρα όσο είναι καιρός ακόμα.";

        } elseif ($results >= 50 && $results <= 59 ) {
            $class = "warning";
            $header = "ΜΕ ΤΟ ΕΝΑ ΠΟΔΙ...";
            $content = "Έχεις μπει με το ένα πόδι στα όρια της επαγγελματικής εξουθένωσης. Ο κίνδυνος να πάθεις burnout είναι υψηλός! Πρέπει επειγόντως να αλλάξεις πορεία.";

        } elseif ($results >= 60) {
            $class = "danger";
            $header = "ΤΟ ΤΕΡΜΑΤΙΣΕΣ…";
            $content = "Τα πράγματα είναι πολύ σοβαρά. Είσαι και με τα δύο πόδια μέσα στα όρια της επαγγελματικής εξουθένωσης.  Το επίπεδο του άγχους σου είναι πάνω από το συνηθισμένο. Έχεις πάθει burnout! Πρέπει επειγόντως να αλλάξεις συνθήκες εργασίας και τρόπο ζωής.";
        }
        
    }

?>



<main role="main" class="container ">
    <div class="row p-1 m-1">
        <div class="col-md-8 offset-md-2">
            
            <h1>Εργασιακό κάψιμο - burnout (τεστ)</h1>
            <small class="text-muted">BURN-OUT /ˈb3ːrnaʊt/US:/ˈbɝnˌaʊt/ ,(bûrn′out′):<br />Αναλώνομαι προοδευτικά εκ των ένδον μέχρι του σημείου της απανθράκωσης</small>
            <br /><br />


            <div class="card text-white bg-<?php echo $class; ?> mb-3" style="max-width: 22rem;">
                <div class="card-header"><?php echo $header; ?></div>
                <div class="card-body">
                    <h5 class="card-title">
                        Η Βαθμολογία σου είναι: <span style="font-size:1.6rem;"> <strong> <?php echo $results; ?>/75</strong></span>
                    </h5>
                    <p class="card-text"><?php echo $content; ?></p>
                </div>
            </div>        

			<p> 
                <div class="alert alert-info">
                    <h3 class="alert-heading" >ΣΗΜΕΙΩΣΗ</h3>
                    <hr>
                    <p>Το παραπάνω τεστ είναι ένα ανεπίσημο εργαλείο μέτρησης του εργασιακού στρες και της κατάστασης burnout. Δεν έχει απόλυτη επιστημονική επικύρωση και δεν φιλοδοξεί να αντικαταστήσει αντίστοιχα εργαλεία. Ως εκ τούτου, τα αποτελέσματα του τεστ θα πρέπει να λαμβάνονται υπόψιν σύμφωνα με τους κανόνες της κοινής λογικής.</p>
                </div>
            </p>   
              
            <div>
                <figure class="wp-block-uagb-image__figure">
                    <a class="" href="https://onlyincorfu.com/discover-paradise-the-ultimate-guide-to-the-best-corfu-beaches/" target="_blank" rel="noreferrer noopener">
                        <img decoding="async" srcset="https://szoupi.com/wp-content/uploads/2024/01/corfu-palaiokastritsa-view-768w.webp" alt="" class="uag-image-717" width="400" height="200" title="" loading="lazy">
                    </a>
                </figure>
            </div>
         
        </div>
    </div>
</main>


<?php
include 'assets/templates/footer.html';
?>


 


</body>


</html>