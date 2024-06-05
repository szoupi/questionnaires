<?php
// custom style is there too
include '../assets/templates/header-eng.html';
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
            $header =  "PERFECT!";
            $content = "All good! Keep enjoying your work!";

        } elseif ($results >= 19 && $results <= 32 ) {
            $class = "info";
            $header = "IN THE FIRST STEPS...";
            $content = "Hmm .. There are some indications that you are in the early stages of burnout. You're in the beginning yet don't take it light-heartedly";

        } elseif ($results >= 33 && $results <= 49 ) {
            $class = "primary";
            $header = "BE CAREFUL!";
            $content = "You run the risk of getting burnout! You have to take action while it is still time.";

        } elseif ($results >= 50 && $results <= 59 ) {
            $class = "warning";
            $header = "ONE FOOT INTO...";
            $content = "You're one foot into burnout zone. The risk of getting burnout is high! You must urgently change your course.";

        } elseif ($results >= 60) {
            $class = "danger";
            $header = "YOU ARE BURNOUT…";
            $content = "Things are very serious. You have crossed the verge of burnout. Your level of anxiety is higher than usual. You are burnout! You must urgently change your working conditions and lifestyle.";
        }
        
    }

?>



<main role="main" class="container ">
    <div class="row p-1 m-1">
        <div class="col-md-8 offset-md-2">
            
            <h1>Occupational burnout - quick test</h1>
            <small class="text-muted">BURN-OUT /ˈb3ːrnaʊt/US:/ˈbɝnˌaʊt/ ,(bûrn′out′):<br />Gradually burn from within to the point of carbonization</small>
            <br /><br />


            <div class="card text-white bg-<?php echo $class; ?> mb-3" style="max-width: 22rem;">
                <div class="card-header"><?php echo $header; ?></div>
                <div class="card-body">
                    <h5 class="card-title">
                        Your score is: <span style="font-size:1.6rem;"> <strong> <?php echo $results; ?>/75</strong></span>
                    </h5>
                    <p class="card-text"><?php echo $content; ?></p>
                </div>
            </div>     
                
            <p> 
                <div class="alert alert-info">
                    <h3 class="alert-heading" >NOTE</h3>
                    <hr>
                    <p>The above test is an informal tool for measuring work stress and burnout level. It does not have complete scientific validation and does not aspire to replace corresponding tools. Therefore, the results of the test should be taken into account in accordance with the rules of common sense.</p>
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
include '../assets/templates/footer.html';
?>


 


</body>


</html>