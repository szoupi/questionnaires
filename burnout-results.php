<?php
// custom style is there too
include 'assets/templates/header.html';
?>



<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="/">Home
  </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">

  </div>
</nav>


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

        } elseif ($results >= 19 && $results <= 32 ) {
            $class = "alert-info";
            $heading = "ΙΣΩΣ ΣΟΒΑΡΟΙ ΠΑΡΑΓΟΝΤΕΣ";

        } elseif ($results >= 33 && $results <= 49 ) {
            $class = "alert-primary";
            $heading = "ΠΡΙΝ ΤΟ BURNOUT";

        } elseif ($results >= 50 && $results <= 59 ) {
            $class = "alert-warning";
            $heading = "ΣΟΒΑΡΟΣ ΚΙΝΔΥΝΟΣ BURNOUT";

        } elseif ($results >= 60) {
            $class = "alert-danger";
            $heading = "BURNOUT";
        }
        
    }

?>



<div class="container-md">
    <div class="row">
        <div class="col-md-6 col-lg-6 col-xl-4 offset-md-4">
			
			<h1>Εργασιακό κάψιμο - burnout (τεστ)</h1>
			<small class="text-muted">BURN-OUT /ˈb3ːrnaʊt/US:/ˈbɝnˌaʊt/ ,(bûrn′out′):<br />Αναλώνομαι προοδευτικά εκ των ένδον μέχρι του σημείου της απανθράκωσης</small>
			<br /><br />
			
			<div class="alert <?php echo $class; ?>">
				<h4>
					Βαθμολογία: <?php echo $results; ?>/75
				</h4>
				<h3 class="alert-heading" ><?php echo $heading; ?></h3>
				<hr>
			</div>
                
        </div>
    </div>
</div>


<?php
include 'assets/templates/footer.html';
?>


 


</body>


</html>