<?php
// custom style is there too
include '../assets/templates/header-eng.html';
?>

<div class="jumbotron jumbotron-fluid">
  <div class="container">
    <h1 class="display-4">Occupational burnout</h1>
    			<small class="text-muted">BURN-OUT /ˈb3ːrnaʊt/US:/ˈbɝnˌaʊt/ ,(bûrn′out′):<br />Gradually burn from within to the point of carbonization</small>


    <hr class="my-4">    
    <p class="lead">Is it time to change your work environment?;</p>
      <p class="lead">
    <a class="btn btn-primary btn-lg" href="#questionnaire" role="button">Take the test</a>
  </p>
  </div>
</div>

<!-- CONTENT -->
<main role="main" class="container ">
    <div class="row p-1 m-1">
        <div class="col-md-8 offset-md-2">
			

			<br /><br />
			<div class="lead">
            <p class="text-center"> <i class="glyphicon glyphicon-fire"></i></p>
				<ul>
                    <li>You wake up in the morning and don't want to go to work?</li>
                    <li>Doesn't your job fill you up anymore?</li>
                    <li>Do you feel that something is wrong with your stomach?</li>
                    <li>Do you always think about work even when eating with your family?</li>
                    <li>Have you become tired and angry?</li>
                    <li>Do you feel physically and mentally exhausted?</li>
                    ...<br />
                    <strong>You may be burnout!</strong> 
                </ul>
                
                <p>Take following test (less than 1 minute) and find out your burnout level!</p>
                <p style="text-align:center"><i class="glyphicon glyphicon-arrow-down"></i></p>
			</div>
			<br /><br />
            <hr>
			<h2>WHAT IS BURNOUT</h2>
			<p><a href="https://en.wikipedia.org/wiki/Occupational_burnout" target="_blank" rel="noopener">Occupational Burnout</a> describes a set of symptoms of physical and mental exhaustion due to working conditions, known as work stress. Burnout is not about how many hours a person works, but about how satisfied they are with their job. Burnout is the result of a combination of high effort and low performance under extremely stressful working conditions.</p>
			<p>&nbsp;</p>
			<h2>SHOW MAY CONCERN</h2>
			<p>Although burnout is perceived to primarily concern employees who come into contact with other people, it can potentially affect any employee. First on the list are doctors and nurses, followed by company executives and employees, air traffic controllers, journalists and advertisers and generally friendly, hard working and ambitious people working in a competitive or highly charged environment.</p>
			<p>&nbsp;</p>
			<h2>SYMPTOMS</h2>
			<p>Anorexia, insomnia, headache, cervical syndrome, hypertension, irritability, anxiety, bad mood, anxiety, guilt, irritability, distraction, mood swings are some of the physical and psychological signs that you may be suffering from anxiety disorder.</p>
			<p>&nbsp;</p>
			<h2>HOW TO TREAT BURNOUT</h2>
			<p>Although the answer is specific to each individual, in general terms:</p>
			<ul>
                <li> identify the causes of your occupational stress</li>
                <li> change the working conditions that contribute to your occupational stress</li>
                <li>to rest daily physically and mentally</li>
			</ul>			
			<br /><br />
			
			
			
			<!-- 	TEST		 -->
            <div class="card card-body" id="questionnaire">



                
                <h2 class="display-4">BURNOUT TEST</h2>
                <p>
					<strong>Answer the following questions and see the results to find out to what extent you are affected by occupational burnout syndrome</strong>
				</p>
				
                <form   id="form-burnout" class="container form-horizontal"
                        enctype="multipart/form-data" accept-charset="UTF-8"
                        action="burnout-results.php" method="post">
                    <fieldset>

                        <div class="form-group">
                            <label for="question01" class="control-label">1. I feel that my colleagues and coworkers do not understand or appreciate me</label>
                            <div>
                                <div class="input-group">

                                    <div class="btn-group-vertical btn-group-toggle" data-toggle="buttons">
                                        <label class="btn btn-secondary ">
                                            <input type="radio" name="question01" value="1" autocomplete="off"> Never
                                        </label>
                                        <label class="btn btn-secondary">
                                            <input type="radio" name="question01" value="2" autocomplete="off"> Rarely
                                        </label>
                                        <label class="btn btn-secondary">
                                            <input type="radio" name="question01" value="3" autocomplete="off"> Sometimes
                                        </label>
                                        <label class="btn btn-secondary">
                                            <input type="radio" name="question01" value="4" autocomplete="off"> Often
                                        </label>
                                        <label class="btn btn-secondary">
                                            <input type="radio" name="question01" value="5" autocomplete="off"> Always
                                        </label>                                                                                                                        
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="question02" class="control-label">2. I feel that I make less effort than I should have</label>
                            <div>
                                <div class="input-group">

                                    <div class="btn-group-vertical btn-group-toggle" data-toggle="buttons">
                                        <label class="btn btn-secondary ">
                                            <input type="radio" name="question02" value="1" autocomplete="off"> Never
                                        </label>
                                        <label class="btn btn-secondary">
                                            <input type="radio" name="question02" value="2" autocomplete="off"> Rarely
                                        </label>
                                        <label class="btn btn-secondary">
                                            <input type="radio" name="question02" value="3" autocomplete="off"> Sometimes
                                        </label>
                                        <label class="btn btn-secondary">
                                            <input type="radio" name="question02" value="4" autocomplete="off"> Often
                                        </label>
                                        <label class="btn btn-secondary">
                                            <input type="radio" name="question02" value="5" autocomplete="off"> Always
                                        </label>                                                                                                                        
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="form-group">
                            <label for="question03" class="control-label">3. I have negative thoughts about my job</label>
                            <div>
                                <div class="input-group">

                                    <div class="btn-group-vertical btn-group-toggle" data-toggle="buttons">
                                        <label class="btn btn-secondary ">
                                            <input type="radio" name="question03" value="1" autocomplete="off"> Never
                                        </label>
                                        <label class="btn btn-secondary">
                                            <input type="radio" name="question03" value="2" autocomplete="off"> Rarely
                                        </label>
                                        <label class="btn btn-secondary">
                                            <input type="radio" name="question03" value="3" autocomplete="off"> Sometimes
                                        </label>
                                        <label class="btn btn-secondary">
                                            <input type="radio" name="question03" value="4" autocomplete="off"> Often
                                        </label>
                                        <label class="btn btn-secondary">
                                            <input type="radio" name="question03" value="5" autocomplete="off"> Always
                                        </label>                                                                                                                        
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="form-group">
                            <label for="question04" class="control-label">4. I feel like I'm in the wrong place or doing the wrong job</label>
                            <div>
                                <div class="input-group">

                                    <div class="btn-group-vertical btn-group-toggle" data-toggle="buttons">
                                        <label class="btn btn-secondary ">
                                            <input type="radio" name="question04" value="1" autocomplete="off"> Never
                                        </label>
                                        <label class="btn btn-secondary">
                                            <input type="radio" name="question04" value="2" autocomplete="off"> Rarely
                                        </label>
                                        <label class="btn btn-secondary">
                                            <input type="radio" name="question04" value="3" autocomplete="off"> Sometimes
                                        </label>
                                        <label class="btn btn-secondary">
                                            <input type="radio" name="question04" value="4" autocomplete="off"> Often
                                        </label>
                                        <label class="btn btn-secondary">
                                            <input type="radio" name="question04" value="5" autocomplete="off"> Always
                                        </label>                                                                                                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <label for="question05" class="control-label">5. I feel like I don't have time to do things that improve the quality of my work</label>
                            <div>
                                <div class="input-group">

                                    <div class="btn-group-vertical btn-group-toggle" data-toggle="buttons">
                                        <label class="btn btn-secondary ">
                                            <input type="radio" name="question05" value="1" autocomplete="off"> Never
                                        </label>
                                        <label class="btn btn-secondary">
                                            <input type="radio" name="question05" value="2" autocomplete="off"> Rarely
                                        </label>
                                        <label class="btn btn-secondary">
                                            <input type="radio" name="question05" value="3" autocomplete="off"> Sometimes
                                        </label>
                                        <label class="btn btn-secondary">
                                            <input type="radio" name="question05" value="4" autocomplete="off"> Often
                                        </label>
                                        <label class="btn btn-secondary">
                                            <input type="radio" name="question05" value="5" autocomplete="off"> Always
                                        </label>                                                                                                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <label for="question06" class="control-label">6. I get easily annoyed by colleagues, coworkers or small problems</label>
                            <div>
                                <div class="input-group">

                                    <div class="btn-group-vertical btn-group-toggle" data-toggle="buttons">
                                        <label class="btn btn-secondary ">
                                            <input type="radio" name="question06" value="1" autocomplete="off"> Never
                                        </label>
                                        <label class="btn btn-secondary">
                                            <input type="radio" name="question06" value="2" autocomplete="off"> Rarely
                                        </label>
                                        <label class="btn btn-secondary">
                                            <input type="radio" name="question06" value="3" autocomplete="off"> Sometimes
                                        </label>
                                        <label class="btn btn-secondary">
                                            <input type="radio" name="question06" value="4" autocomplete="off"> Often
                                        </label>
                                        <label class="btn btn-secondary">
                                            <input type="radio" name="question06" value="5" autocomplete="off"> Always
                                        </label>                                                                                                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <label for="question07" class="control-label">7. I feel like I am losing my rhythm and my physical or emotional energy</label>
                            <div>
                                <div class="input-group">

                                    <div class="btn-group-vertical btn-group-toggle" data-toggle="buttons">
                                        <label class="btn btn-secondary ">
                                            <input type="radio" name="question07" value="1" autocomplete="off"> Never
                                        </label>
                                        <label class="btn btn-secondary">
                                            <input type="radio" name="question07" value="2" autocomplete="off"> Rarely
                                        </label>
                                        <label class="btn btn-secondary">
                                            <input type="radio" name="question07" value="3" autocomplete="off"> Sometimes
                                        </label>
                                        <label class="btn btn-secondary">
                                            <input type="radio" name="question07" value="4" autocomplete="off"> Often
                                        </label>
                                        <label class="btn btn-secondary">
                                            <input type="radio" name="question07" value="5" autocomplete="off"> Always
                                        </label>                                                                                                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <label for="question08" class="control-label">8. I feel like I don't have anyone to talk to</label>
                            <div>
                                <div class="input-group">

                                    <div class="btn-group-vertical btn-group-toggle" data-toggle="buttons">
                                        <label class="btn btn-secondary ">
                                            <input type="radio" name="question08" value="1" autocomplete="off"> Never
                                        </label>
                                        <label class="btn btn-secondary">
                                            <input type="radio" name="question08" value="2" autocomplete="off"> Rarely
                                        </label>
                                        <label class="btn btn-secondary">
                                            <input type="radio" name="question08" value="3" autocomplete="off"> Sometimes
                                        </label>
                                        <label class="btn btn-secondary">
                                            <input type="radio" name="question08" value="4" autocomplete="off"> Often
                                        </label>
                                        <label class="btn btn-secondary">
                                            <input type="radio" name="question08" value="5" autocomplete="off"> Always
                                        </label>                                                                                                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <label for="question09" class="control-label">9. I think some things at work annoy me</label>
                            <div>
                                <div class="input-group">

                                    <div class="btn-group-vertical btn-group-toggle" data-toggle="buttons">
                                        <label class="btn btn-secondary ">
                                            <input type="radio" name="question09" value="1" autocomplete="off"> Never
                                        </label>
                                        <label class="btn btn-secondary">
                                            <input type="radio" name="question09" value="2" autocomplete="off"> Rarely
                                        </label>
                                        <label class="btn btn-secondary">
                                            <input type="radio" name="question09" value="3" autocomplete="off"> Sometimes
                                        </label>
                                        <label class="btn btn-secondary">
                                            <input type="radio" name="question09" value="4" autocomplete="off"> Often
                                        </label>
                                        <label class="btn btn-secondary">
                                            <input type="radio" name="question09" value="5" autocomplete="off"> Always
                                        </label>                                                                                                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <label for="question10" class="control-label">10. I feel that bureaucracy and organizational problems prevent me from working efficiently</label>
                            <div>
                                <div class="input-group">

                                    <div class="btn-group-vertical btn-group-toggle" data-toggle="buttons">
                                        <label class="btn btn-secondary ">
                                            <input type="radio" name="question10" value="1" autocomplete="off"> Never
                                        </label>
                                        <label class="btn btn-secondary">
                                            <input type="radio" name="question10" value="2" autocomplete="off"> Rarely
                                        </label>
                                        <label class="btn btn-secondary">
                                            <input type="radio" name="question10" value="3" autocomplete="off"> Sometimes
                                        </label>
                                        <label class="btn btn-secondary">
                                            <input type="radio" name="question10" value="4" autocomplete="off"> Often
                                        </label>
                                        <label class="btn btn-secondary">
                                            <input type="radio" name="question10" value="5" autocomplete="off"> Always
                                        </label>                                                                                                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <label for="question11" class="control-label">11. I feel that the demands of work go beyond the limits of my stamina</label>
                            <div>
                                <div class="input-group">

                                    <div class="btn-group-vertical btn-group-toggle" data-toggle="buttons">
                                        <label class="btn btn-secondary ">
                                            <input type="radio" name="question11" value="1" autocomplete="off"> Never
                                        </label>
                                        <label class="btn btn-secondary">
                                            <input type="radio" name="question11" value="2" autocomplete="off"> Rarely
                                        </label>
                                        <label class="btn btn-secondary">
                                            <input type="radio" name="question11" value="3" autocomplete="off"> Sometimes
                                        </label>
                                        <label class="btn btn-secondary">
                                            <input type="radio" name="question11" value="4" autocomplete="off"> Often
                                        </label>
                                        <label class="btn btn-secondary">
                                            <input type="radio" name="question11" value="5" autocomplete="off"> Always
                                        </label>                                                                                                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <label for="question12" class="control-label">12. I feel that my job doesn't offer me what I want</label>
                            <div>
                                <div class="input-group">

                                    <div class="btn-group-vertical btn-group-toggle" data-toggle="buttons">
                                        <label class="btn btn-secondary ">
                                            <input type="radio" name="question12" value="1" autocomplete="off"> Never
                                        </label>
                                        <label class="btn btn-secondary">
                                            <input type="radio" name="question12" value="2" autocomplete="off"> Rarely
                                        </label>
                                        <label class="btn btn-secondary">
                                            <input type="radio" name="question12" value="3" autocomplete="off"> Sometimes
                                        </label>
                                        <label class="btn btn-secondary">
                                            <input type="radio" name="question12" value="4" autocomplete="off"> Often
                                        </label>
                                        <label class="btn btn-secondary">
                                            <input type="radio" name="question12" value="5" autocomplete="off"> Always
                                        </label>                                                                                                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <label for="question13" class="control-label">13. I feel the urge to succeed</label>
                            <div>
                                <div class="input-group">

                                    <div class="btn-group-vertical btn-group-toggle" data-toggle="buttons">
                                        <label class="btn btn-secondary ">
                                            <input type="radio" name="question13" value="1" autocomplete="off"> Never
                                        </label>
                                        <label class="btn btn-secondary">
                                            <input type="radio" name="question13" value="2" autocomplete="off"> Rarely
                                        </label>
                                        <label class="btn btn-secondary">
                                            <input type="radio" name="question13" value="3" autocomplete="off"> Sometimes
                                        </label>
                                        <label class="btn btn-secondary">
                                            <input type="radio" name="question13" value="4" autocomplete="off"> Often
                                        </label>
                                        <label class="btn btn-secondary">
                                            <input type="radio" name="question13" value="5" autocomplete="off"> Always
                                        </label>                                                                                                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <label for="question14" class="control-label">14. I feel that I am tough and less patient with others than I deserve</label>
                            <div>
                                <div class="input-group">

                                    <div class="btn-group-vertical btn-group-toggle" data-toggle="buttons">
                                        <label class="btn btn-secondary ">
                                            <input type="radio" name="question14" value="1" autocomplete="off"> Never
                                        </label>
                                        <label class="btn btn-secondary">
                                            <input type="radio" name="question14" value="2" autocomplete="off"> Rarely
                                        </label>
                                        <label class="btn btn-secondary">
                                            <input type="radio" name="question14" value="3" autocomplete="off"> Sometimes
                                        </label>
                                        <label class="btn btn-secondary">
                                            <input type="radio" name="question14" value="4" autocomplete="off"> Often
                                        </label>
                                        <label class="btn btn-secondary">
                                            <input type="radio" name="question14" value="5" autocomplete="off"> Always
                                        </label>                                                                                                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <label for="question15" class="control-label">15. I feel like I don't have the time needed to plan my work</label>
                            <div>
                                <div class="input-group">

                                    <div class="btn-group-vertical btn-group-toggle" data-toggle="buttons">
                                        <label class="btn btn-secondary ">
                                            <input type="radio" name="question15" value="1" autocomplete="off"> Never
                                        </label>
                                        <label class="btn btn-secondary">
                                            <input type="radio" name="question15" value="2" autocomplete="off"> Rarely
                                        </label>
                                        <label class="btn btn-secondary">
                                            <input type="radio" name="question15" value="3" autocomplete="off"> Sometimes
                                        </label>
                                        <label class="btn btn-secondary">
                                            <input type="radio" name="question15" value="4" autocomplete="off"> Often
                                        </label>
                                        <label class="btn btn-secondary">
                                            <input type="radio" name="question15" value="5" autocomplete="off"> Always
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
	
<br />
<br />
<br />
            <h2>SCORE EXPLANATION</h2>
            <p>
                <div class="card">
                    <div class="card-header">
                        PERFECT
                    </div>
                    <div class="card-body">
                        <h5 class="card-title"> 15-18 points</h5>
                        <p class="card-text"> All good! Keep enjoying your work!</p>
                    </div>
                </div>
            </p>

            <p>
            <div class="card">
                    <div class="card-header">
                        IN THE FIRST STEPS...
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">19-32 points</h5>
                        <p class="card-text">Hmm .. There are some indications that you are in the early stages of burnout. You're in the beginning yet don't take it light-heartedly"</p>
                    </div>
                </div>
            </p>

            <p>
                <div class="card">
                    <div class="card-header">
                        BE CAREFUL!
                    </div>
                    <div class="card-body">
                        <h5 class="card-title"> 33-49 points</h5>
                        <p class="card-text">You run the risk of getting burnout! You have to take action while it is still time.</p>
                    </div>
                </div>
            </p>
            
            <p>
                <div class="card">
                    <div class="card-header">
                        ONE FOOT INTO...
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">50-59 points</h5>
                        <p class="card-text">You're one foot into burnout zone. The risk of getting burnout is high! You must urgently change your course.</p>
                    </div>
                </div>
            </p>
            <p>
                <div class="card">
                    <div class="card-header">
                        YOU ARE BURNOUT…
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">60-75 points</h5>
                        <p class="card-text">Things are very serious. You have crossed the verge of burnout. Your level of anxiety is higher than usual. You are burnout! You must urgently change your working conditions and lifestyle.</p>
                    </div>
                </div>
            </p>
			<p> 
                <div class="alert alert-info">
                    <h3 class="alert-heading" >NOTE</h3>
                    <hr>
                    <p>The above test is an informal tool for measuring work stress and burnout level. It does not have complete scientific validation and does not aspire to replace corresponding tools. Therefore, the results of the test should be taken into account in accordance with the rules of common sense.</p>
                </div>
            </p>
        </div>
    </div>
</main>


<?php
include '../assets/templates/footer.html';
?>




    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.0/dist/jquery.validate.min.js"></script>
    <script type="text/javascript">
        $.validator.setDefaults( {
            // submitHandler: function () {
            //  alert( "submitted!" );
            // }
        } );
        $( document ).ready( function () {
            $( "#form-burnout" ).validate( {
                rules: {
                    'question01': "required",
					'question02': "required",
					'question03': "required",
					'question04': "required",
					'question05': "required",
					'question06': "required",
					'question07': "required",
					'question08': "required",
					'question09': "required",
					'question10': "required",
					'question11': "required",
					'question12': "required",
					'question13': "required",
					'question14': "required",
					'question15': "required"

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