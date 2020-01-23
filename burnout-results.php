<?php
// custom style is there too
include 'assets/templates/header.html';
?>





<?php
    if (isset($_POST["submitForm"]) && !is_null($_POST["submitForm"])) {

        $results = "";
        foreach ($_POST as $key => $value) {
            // echo $key . " " . $value . "<br />";
            $results += $value;
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
            $content = "Ουπς! Διατρέχεις κίνδυνο να πάθεις burnout! Πρέπει να παρεις μέτρα όσο είναι καιρός ακόμα.
";

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

<hr>
                
        </div>
    </div>
</main>


<?php
include 'assets/templates/footer.html';
?>


 


</body>


</html>