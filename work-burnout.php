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
    echo $key . " " . $value . "<br />";
    $results += $value;
}
echo $results;


}



?>

<div class="container-md">
    <div class="row">
        <div class="col-md-6 offset-md-4">
            <div class="card card-body">


                <form   id="form-burnout" class="container form-horizontal"
                        enctype="multipart/form-data" accept-charset="UTF-8"
                        action="" method="post">
                    <fieldset>


                        <h4>Καμμένος από τη δουλειά;</h4>
                        <div class="form-group">
                            <label for="question01" class="control-label">0. </label>
                            <div>
                                <div class="input-group">

                                    <div class="btn-group btn-group-toggle" data-toggle="buttons">
                                        <label class="btn btn-secondary ">
                                            <input type="radio" name="question01" value="1" autocomplete="off"> Ποτέ
                                        </label>
                                        <label class="btn btn-secondary">
                                            <input type="radio" name="question01" value="2" autocomplete="off"> Σπάνια
                                        </label>
                                        <label class="btn btn-secondary">
                                            <input type="radio" name="question01" value="3" autocomplete="off"> Μερικές φορές
                                        </label>
                                        <label class="btn btn-secondary">
                                            <input type="radio" name="question01" value="4" autocomplete="off"> Συχνά
                                        </label>
                                        <label class="btn btn-secondary">
                                            <input type="radio" name="question01" value="5" autocomplete="off"> Πάντα
                                        </label>                                                                                                                        
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="question02" class="control-label">0. </label>
                            <div>
                                <div class="input-group">

                                    <div class="btn-group btn-group-toggle" data-toggle="buttons">
                                        <label class="btn btn-secondary ">
                                            <input type="radio" name="question02" value="1" autocomplete="off"> Ποτέ
                                        </label>
                                        <label class="btn btn-secondary">
                                            <input type="radio" name="question02" value="2" autocomplete="off"> Σπάνια
                                        </label>
                                        <label class="btn btn-secondary">
                                            <input type="radio" name="question02" value="3" autocomplete="off"> Μερικές φορές
                                        </label>
                                        <label class="btn btn-secondary">
                                            <input type="radio" name="question02" value="4" autocomplete="off"> Συχνά
                                        </label>
                                        <label class="btn btn-secondary">
                                            <input type="radio" name="question02" value="5" autocomplete="off"> Πάντα
                                        </label>                                                                                                                        
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="form-group">
                            <label for="question03" class="control-label">0. </label>
                            <div>
                                <div class="input-group">

                                    <div class="btn-group btn-group-toggle" data-toggle="buttons">
                                        <label class="btn btn-secondary ">
                                            <input type="radio" name="question03" value="1" autocomplete="off"> Ποτέ
                                        </label>
                                        <label class="btn btn-secondary">
                                            <input type="radio" name="question03" value="2" autocomplete="off"> Σπάνια
                                        </label>
                                        <label class="btn btn-secondary">
                                            <input type="radio" name="question03" value="3" autocomplete="off"> Μερικές φορές
                                        </label>
                                        <label class="btn btn-secondary">
                                            <input type="radio" name="question03" value="4" autocomplete="off"> Συχνά
                                        </label>
                                        <label class="btn btn-secondary">
                                            <input type="radio" name="question03" value="5" autocomplete="off"> Πάντα
                                        </label>                                                                                                                        
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="form-group">
                            <label for="question04" class="control-label">0. </label>
                            <div>
                                <div class="input-group">

                                    <div class="btn-group btn-group-toggle" data-toggle="buttons">
                                        <label class="btn btn-secondary ">
                                            <input type="radio" name="question04" value="1" autocomplete="off"> Ποτέ
                                        </label>
                                        <label class="btn btn-secondary">
                                            <input type="radio" name="question04" value="2" autocomplete="off"> Σπάνια
                                        </label>
                                        <label class="btn btn-secondary">
                                            <input type="radio" name="question04" value="3" autocomplete="off"> Μερικές φορές
                                        </label>
                                        <label class="btn btn-secondary">
                                            <input type="radio" name="question04" value="4" autocomplete="off"> Συχνά
                                        </label>
                                        <label class="btn btn-secondary">
                                            <input type="radio" name="question04" value="5" autocomplete="off"> Πάντα
                                        </label>                                                                                                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                        

                        <!-- Button -->
                        <div class="form-group">
                            <label class="control-label"></label>
                            <div>
                                <button type="submit" id="submitForm" name="submitForm" class="btn btn-primary btn-lg btn-block" >Show me the results!</button>
                            </div>
                        </div>

                    </fieldset>
                </form>


            </div>
        </div>
    </div>
</div>


<?php
include 'assets/templates/footer.html';
?>




    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.0/dist/jquery.validate.min.js"></script>
    <script type="text/javascript">
		$.validator.setDefaults( {
			// submitHandler: function () {
			// 	alert( "submitted!" );
			// }
		} );
		$( document ).ready( function () {
			$( "#form-burnout" ).validate( {
				rules: {
                    // 'question01': "required",

                    // 'submitForm': "required",
				},
				messages: {
                    // 'student-email': "Please enter a valid email address",
				},
				errorElement: "em",
				errorPlacement: function ( error, element ) {
					// Add the `invalid-feedback` class to the error element
					error.addClass( "invalid-feedback" );

					if ( element.prop( "type" ) === "checkbox" ) {
						error.insertAfter( element.next( "label" ) );
					} else {
						error.insertAfter( element );
					}
				},
				highlight: function ( element, errorClass, validClass ) {
					$( element ).addClass( "is-invalid" ).removeClass( "is-valid" );
				},
				unhighlight: function (element, errorClass, validClass) {
					$( element ).addClass( "is-valid" ).removeClass( "is-invalid" );
				}
			} );

		} );
	</script>


</body>


</html>