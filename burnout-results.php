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
            $header =  "ΚΑΝΕΝΑ ΣΗΜΑΔΙ ";
            $content = "xxx";

        } elseif ($results >= 19 && $results <= 32 ) {
            $class = "info";
            $header = "ΙΣΩΣ ΣΟΒΑΡΟΙ ΠΑΡΑΓΟΝΤΕΣ";
            $content = "xxx";

        } elseif ($results >= 33 && $results <= 49 ) {
            $class = "primary";
            $header = "ΠΡΙΝ ΤΟ BURNOUT";
            $content = "xxx";

        } elseif ($results >= 50 && $results <= 59 ) {
            $class = "warning";
            $header = "ΣΟΒΑΡΟΣ ΚΙΝΔΥΝΟΣ BURNOUT";
            $content = "xxx";

        } elseif ($results >= 60) {
            $class = "danger";
            $header = "BURNOUT";
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


                <div class="card text-white bg-<?php echo $class; ?> mb-3" style="max-width: 22rem;">
                    <div class="card-header"><?php echo $header; ?></div>
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $results; ?>/75</h5>
                        <p class="card-text"><?php echo $content; ?></p>
                    </div>
                </div>        


			
			<div class="alert <?php echo $class; ?>">
				<h4>
					Η Βαθμολογία σου είναι: <?php echo $results; ?>/75
				</h4>
                <h3 class="alert-heading" ><?php echo $header; ?></h3>
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