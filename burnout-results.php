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
            $class = "alert-success";
            $heading =  "ΚΑΝΕΝΑ ΣΗΜΑΔΙ ";
            $content = "xxx";

        } elseif ($results >= 19 && $results <= 32 ) {
            $class = "alert-info";
            $heading = "ΙΣΩΣ ΣΟΒΑΡΟΙ ΠΑΡΑΓΟΝΤΕΣ";
            $content = "xxx";

        } elseif ($results >= 33 && $results <= 49 ) {
            $class = "alert-primary";
            $heading = "ΠΡΙΝ ΤΟ BURNOUT";
            $content = "xxx";

        } elseif ($results >= 50 && $results <= 59 ) {
            $class = "alert-warning";
            $heading = "ΣΟΒΑΡΟΣ ΚΙΝΔΥΝΟΣ BURNOUT";
            $content = "xxx";

        } elseif ($results >= 60) {
            $class = "alert-danger";
            $heading = "BURNOUT";
            $content = "xxx";
        }
        
    }

?>



<div class="container ">
    <div class="row p-1 m-1">
        <div class="col-md-8 offset-md-2">
			
			<h1>Εργασιακό κάψιμο - burnout (τεστ)</h1>
			<small class="text-muted">BURN-OUT /ˈb3ːrnaʊt/US:/ˈbɝnˌaʊt/ ,(bûrn′out′):<br />Αναλώνομαι προοδευτικά εκ των ένδον μέχρι του σημείου της απανθράκωσης</small>
			<br /><br />
			
			<div class="alert <?php echo $class; ?>">
				<h4>
					Η Βαθμολογία σου είναι: <?php echo $results; ?>/75
				</h4>
                <h3 class="alert-heading" ><?php echo $heading; ?></h3>
                <p><?php echo $content; ?></p>
			</div>
                
        </div>
    </div>
</div>


<?php
include 'assets/templates/footer.html';
?>


 


</body>


</html>