<?php
// custom style is there too
include 'assets/templates/header.html';
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
					<strong>Απάντησε στις παρακάτω ερωτήσεις και δες τα αποτελέσματα για να διαπιστώσεις σε ποιο βαθμό είσαι επηρεασμένος από το σύνδρομο της Εργασιακής Εξουθένωσης (burnout)</strong>
				</p>
				
                <form   id="form-burnout" class="container form-horizontal"
                        enctype="multipart/form-data" accept-charset="UTF-8"
                        action="burnout-results.php" method="post">
                    <fieldset>

                        <div class="form-group">
                            <label for="question01" class="control-label">1. Αισθάνομαι ότι δεν με κατανοούν ούτε με εκτιμούν οι συνάδελφοι και οι συνεργάτες μου</label>
                            <div>
                                <div class="input-group">

                                    <div class="btn-group-vertical btn-group-toggle" data-toggle="buttons">
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
                            <label for="question02" class="control-label">2. Νιώθω ότι κάνω λιγότερες προσπάθειες από όσο θα έπρεπε</label>
                            <div>
                                <div class="input-group">

                                    <div class="btn-group-vertical btn-group-toggle" data-toggle="buttons">
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
                            <label for="question03" class="control-label">3. Κάνω αρνητικές σκέψεις για τη δουλειά μου</label>
                            <div>
                                <div class="input-group">

                                    <div class="btn-group-vertical btn-group-toggle" data-toggle="buttons">
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
                            <label for="question04" class="control-label">4. Νιώθω ότι βρίσκομαι στο λάθος μέρος ή ότι κάνω λάθος δουλειά</label>
                            <div>
                                <div class="input-group">

                                    <div class="btn-group-vertical btn-group-toggle" data-toggle="buttons">
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
                        
                        <div class="form-group">
                            <label for="question05" class="control-label">5. Αισθάνομαι πως δεν έχω χρόνο να κάνω πράγματα που βελτιώνουν την ποιότητα της εργασίας μου</label>
                            <div>
                                <div class="input-group">

                                    <div class="btn-group-vertical btn-group-toggle" data-toggle="buttons">
                                        <label class="btn btn-secondary ">
                                            <input type="radio" name="question05" value="1" autocomplete="off"> Ποτέ
                                        </label>
                                        <label class="btn btn-secondary">
                                            <input type="radio" name="question05" value="2" autocomplete="off"> Σπάνια
                                        </label>
                                        <label class="btn btn-secondary">
                                            <input type="radio" name="question05" value="3" autocomplete="off"> Μερικές φορές
                                        </label>
                                        <label class="btn btn-secondary">
                                            <input type="radio" name="question05" value="4" autocomplete="off"> Συχνά
                                        </label>
                                        <label class="btn btn-secondary">
                                            <input type="radio" name="question05" value="5" autocomplete="off"> Πάντα
                                        </label>                                                                                                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <label for="question06" class="control-label">6. Εκνευρίζομαι εύκολα από τους συναδέλφους, τους συνεργάτες ή από μικρά προβλήματα</label>
                            <div>
                                <div class="input-group">

                                    <div class="btn-group-vertical btn-group-toggle" data-toggle="buttons">
                                        <label class="btn btn-secondary ">
                                            <input type="radio" name="question06" value="1" autocomplete="off"> Ποτέ
                                        </label>
                                        <label class="btn btn-secondary">
                                            <input type="radio" name="question06" value="2" autocomplete="off"> Σπάνια
                                        </label>
                                        <label class="btn btn-secondary">
                                            <input type="radio" name="question06" value="3" autocomplete="off"> Μερικές φορές
                                        </label>
                                        <label class="btn btn-secondary">
                                            <input type="radio" name="question06" value="4" autocomplete="off"> Συχνά
                                        </label>
                                        <label class="btn btn-secondary">
                                            <input type="radio" name="question06" value="5" autocomplete="off"> Πάντα
                                        </label>                                                                                                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <label for="question07" class="control-label">7. Νιώθω να χάνω το ρυθμό και τη σωματική ή συναισθηματική μου ενέργεια</label>
                            <div>
                                <div class="input-group">

                                    <div class="btn-group-vertical btn-group-toggle" data-toggle="buttons">
                                        <label class="btn btn-secondary ">
                                            <input type="radio" name="question07" value="1" autocomplete="off"> Ποτέ
                                        </label>
                                        <label class="btn btn-secondary">
                                            <input type="radio" name="question07" value="2" autocomplete="off"> Σπάνια
                                        </label>
                                        <label class="btn btn-secondary">
                                            <input type="radio" name="question07" value="3" autocomplete="off"> Μερικές φορές
                                        </label>
                                        <label class="btn btn-secondary">
                                            <input type="radio" name="question07" value="4" autocomplete="off"> Συχνά
                                        </label>
                                        <label class="btn btn-secondary">
                                            <input type="radio" name="question07" value="5" autocomplete="off"> Πάντα
                                        </label>                                                                                                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <label for="question08" class="control-label">8. Νιώθω ότι δεν έχω κάποιον να μιλήσω</label>
                            <div>
                                <div class="input-group">

                                    <div class="btn-group-vertical btn-group-toggle" data-toggle="buttons">
                                        <label class="btn btn-secondary ">
                                            <input type="radio" name="question08" value="1" autocomplete="off"> Ποτέ
                                        </label>
                                        <label class="btn btn-secondary">
                                            <input type="radio" name="question08" value="2" autocomplete="off"> Σπάνια
                                        </label>
                                        <label class="btn btn-secondary">
                                            <input type="radio" name="question08" value="3" autocomplete="off"> Μερικές φορές
                                        </label>
                                        <label class="btn btn-secondary">
                                            <input type="radio" name="question08" value="4" autocomplete="off"> Συχνά
                                        </label>
                                        <label class="btn btn-secondary">
                                            <input type="radio" name="question08" value="5" autocomplete="off"> Πάντα
                                        </label>                                                                                                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <label for="question09" class="control-label">9. Πιστεύω ότι κάποια πράγματα στη δουλειά με εκνευρίζουν</label>
                            <div>
                                <div class="input-group">

                                    <div class="btn-group-vertical btn-group-toggle" data-toggle="buttons">
                                        <label class="btn btn-secondary ">
                                            <input type="radio" name="question09" value="1" autocomplete="off"> Ποτέ
                                        </label>
                                        <label class="btn btn-secondary">
                                            <input type="radio" name="question09" value="2" autocomplete="off"> Σπάνια
                                        </label>
                                        <label class="btn btn-secondary">
                                            <input type="radio" name="question09" value="3" autocomplete="off"> Μερικές φορές
                                        </label>
                                        <label class="btn btn-secondary">
                                            <input type="radio" name="question09" value="4" autocomplete="off"> Συχνά
                                        </label>
                                        <label class="btn btn-secondary">
                                            <input type="radio" name="question09" value="5" autocomplete="off"> Πάντα
                                        </label>                                                                                                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <label for="question10" class="control-label">10. Αισθάνομαι πως η γραφειοκρατία της δουλειάς και οργανωτικά προβλήματα με εμποδίζουν να εργαστώ αποδοτικά</label>
                            <div>
                                <div class="input-group">

                                    <div class="btn-group-vertical btn-group-toggle" data-toggle="buttons">
                                        <label class="btn btn-secondary ">
                                            <input type="radio" name="question10" value="1" autocomplete="off"> Ποτέ
                                        </label>
                                        <label class="btn btn-secondary">
                                            <input type="radio" name="question10" value="2" autocomplete="off"> Σπάνια
                                        </label>
                                        <label class="btn btn-secondary">
                                            <input type="radio" name="question10" value="3" autocomplete="off"> Μερικές φορές
                                        </label>
                                        <label class="btn btn-secondary">
                                            <input type="radio" name="question10" value="4" autocomplete="off"> Συχνά
                                        </label>
                                        <label class="btn btn-secondary">
                                            <input type="radio" name="question10" value="5" autocomplete="off"> Πάντα
                                        </label>                                                                                                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <label for="question11" class="control-label">11. Νιώθω ότι οι απαιτήσεις στη δουλειά ξεπερνούν τα όρια της αντοχής μου</label>
                            <div>
                                <div class="input-group">

                                    <div class="btn-group-vertical btn-group-toggle" data-toggle="buttons">
                                        <label class="btn btn-secondary ">
                                            <input type="radio" name="question11" value="1" autocomplete="off"> Ποτέ
                                        </label>
                                        <label class="btn btn-secondary">
                                            <input type="radio" name="question11" value="2" autocomplete="off"> Σπάνια
                                        </label>
                                        <label class="btn btn-secondary">
                                            <input type="radio" name="question11" value="3" autocomplete="off"> Μερικές φορές
                                        </label>
                                        <label class="btn btn-secondary">
                                            <input type="radio" name="question11" value="4" autocomplete="off"> Συχνά
                                        </label>
                                        <label class="btn btn-secondary">
                                            <input type="radio" name="question11" value="5" autocomplete="off"> Πάντα
                                        </label>                                                                                                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <label for="question12" class="control-label">12. Αισθάνομαι ότι η δουλειά μου δεν μου προσφέρει αυτό που θα ήθελα</label>
                            <div>
                                <div class="input-group">

                                    <div class="btn-group-vertical btn-group-toggle" data-toggle="buttons">
                                        <label class="btn btn-secondary ">
                                            <input type="radio" name="question12" value="1" autocomplete="off"> Ποτέ
                                        </label>
                                        <label class="btn btn-secondary">
                                            <input type="radio" name="question12" value="2" autocomplete="off"> Σπάνια
                                        </label>
                                        <label class="btn btn-secondary">
                                            <input type="radio" name="question12" value="3" autocomplete="off"> Μερικές φορές
                                        </label>
                                        <label class="btn btn-secondary">
                                            <input type="radio" name="question12" value="4" autocomplete="off"> Συχνά
                                        </label>
                                        <label class="btn btn-secondary">
                                            <input type="radio" name="question12" value="5" autocomplete="off"> Πάντα
                                        </label>                                                                                                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <label for="question13" class="control-label">13. Νιώθω να με πιέζει η ανάγκη να επιτύχω</label>
                            <div>
                                <div class="input-group">

                                    <div class="btn-group-vertical btn-group-toggle" data-toggle="buttons">
                                        <label class="btn btn-secondary ">
                                            <input type="radio" name="question13" value="1" autocomplete="off"> Ποτέ
                                        </label>
                                        <label class="btn btn-secondary">
                                            <input type="radio" name="question13" value="2" autocomplete="off"> Σπάνια
                                        </label>
                                        <label class="btn btn-secondary">
                                            <input type="radio" name="question13" value="3" autocomplete="off"> Μερικές φορές
                                        </label>
                                        <label class="btn btn-secondary">
                                            <input type="radio" name="question13" value="4" autocomplete="off"> Συχνά
                                        </label>
                                        <label class="btn btn-secondary">
                                            <input type="radio" name="question13" value="5" autocomplete="off"> Πάντα
                                        </label>                                                                                                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <label for="question14" class="control-label">14. Αισθάνομαι ότι είμαι σκληρός και λιγότερο υπομονετικός στους άλλους από όσο τους αξίζει</label>
                            <div>
                                <div class="input-group">

                                    <div class="btn-group-vertical btn-group-toggle" data-toggle="buttons">
                                        <label class="btn btn-secondary ">
                                            <input type="radio" name="question14" value="1" autocomplete="off"> Ποτέ
                                        </label>
                                        <label class="btn btn-secondary">
                                            <input type="radio" name="question14" value="2" autocomplete="off"> Σπάνια
                                        </label>
                                        <label class="btn btn-secondary">
                                            <input type="radio" name="question14" value="3" autocomplete="off"> Μερικές φορές
                                        </label>
                                        <label class="btn btn-secondary">
                                            <input type="radio" name="question14" value="4" autocomplete="off"> Συχνά
                                        </label>
                                        <label class="btn btn-secondary">
                                            <input type="radio" name="question14" value="5" autocomplete="off"> Πάντα
                                        </label>                                                                                                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <label for="question15" class="control-label">15. Αισθάνομαι πως δεν έχω τον απαιτούμενο χρόνο για να προγραμματίζω τη δουλειά μου</label>
                            <div>
                                <div class="input-group">

                                    <div class="btn-group-vertical btn-group-toggle" data-toggle="buttons">
                                        <label class="btn btn-secondary ">
                                            <input type="radio" name="question15" value="1" autocomplete="off"> Ποτέ
                                        </label>
                                        <label class="btn btn-secondary">
                                            <input type="radio" name="question15" value="2" autocomplete="off"> Σπάνια
                                        </label>
                                        <label class="btn btn-secondary">
                                            <input type="radio" name="question15" value="3" autocomplete="off"> Μερικές φορές
                                        </label>
                                        <label class="btn btn-secondary">
                                            <input type="radio" name="question15" value="4" autocomplete="off"> Συχνά
                                        </label>
                                        <label class="btn btn-secondary">
                                            <input type="radio" name="question15" value="5" autocomplete="off"> Πάντα
                                        </label>                                                                                                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                        

                        <!-- Button -->
                        <div class="form-group">
                            <label class="control-label"></label>
                            <div>
                                <button type="submit" id="submitForm" name="submitForm" class="btn btn-primary btn-lg btn-block" >Δείξε μου τα αποτελέσματα!</button>
                            </div>
                        </div>

                    </fieldset>
                </form>

            </div>
	
<br />
<br />
<br />
            <h2>ΕΠΕΞΗΓΗΣΗ ΒΑΘΜΟΛΟΓΙΑΣ</h2>
            <p>
                <div class="card">
                    <div class="card-header">
                        ΤΕΛΕΙΑ
                    </div>
                    <div class="card-body">
                        <h5 class="card-title"> 15-18 βαθμοί</h5>
                        <p class="card-text">Όλα καλά! Συνέχισε να απολαμβάνεις την εργασία σου!</p>
                    </div>
                </div>
            </p>

            <p>
            <div class="card">
                    <div class="card-header">
                        ΣΤΑ ΠΡΩΤΑ ΒΗΜΑΤΑ...
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">19-32 βαθμοί</h5>
                        <p class="card-text">Χμ.. Υπάρχουν κάποιες ενδείξεις ότι βρίσκεσαι στο αρχικό στάδιο της  Επαγγελματικής Εξουθένωσης (burnout). Είσαι στην αρχή ακόμα αλλα μην το πάρεις αψήφιστα"</p>
                    </div>
                </div>
            </p>

            <p>
                <div class="card">
                    <div class="card-header">
                        ΠΡΟΣΕΧΕ!
                    </div>
                    <div class="card-body">
                        <h5 class="card-title"> 33-49 βαθμοί</h5>
                        <p class="card-text">Διατρέχεις κίνδυνο να πάθεις burnout! Πρέπει να παρεις μέτρα όσο είναι καιρός ακόμα.</p>
                    </div>
                </div>
            </p>
            
            <p>
                <div class="card">
                    <div class="card-header">
                        ΜΕ ΤΟ ΕΝΑ ΠΟΔΙ...
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">50-59 βαθμοί</h5>
                        <p class="card-text">Έχεις μπει με το ένα πόδι στα όρια της επαγγελματικής εξουθένωσης. Ο κίνδυνος να πάθεις burnout είναι υψηλός! Πρέπει επειγόντως να αλλάξεις πορεία.</p>
                    </div>
                </div>
            </p>
            <p>
                <div class="card">
                    <div class="card-header">
                        ΤΟ ΤΕΡΜΑΤΙΣΕΣ…
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">60-75 βαθμοί</h5>
                        <p class="card-text">Τα πράγματα είναι πολύ σοβαρά. Είσαι και με τα δύο πόδια μέσα στα όρια της επαγγελματικής εξουθένωσης.  Το επίπεδο του άγχους σου είναι πάνω από το συνηθισμένο. Έχεις πάθει burnout! Πρέπει επειγόντως να αλλάξεις συνθήκες εργασίας και τρόπο ζωής.</p>
                    </div>
                </div>
            </p>
			<p> 
                <div class="alert alert-info">
                    <h3 class="alert-heading" >ΣΗΜΕΙΩΣΗ</h3>
                    <hr>
                    <p>Το παραπάνω τεστ είναι ένα ανεπίσημο εργαλείο μέτρησης του εργασιακού στρες και της κατάστασης burnout. Δεν έχει απόλυτη επιστημονική επικύρωση και δεν φιλοδοξεί να αντικαταστήσει αντίστοιχα εργαλεία. Ως εκ τούτου, τα αποτελέσματα του τεστ θα πρέπει να λαμβάνονται υπόψιν σύμφωνα με τους κανόνες της κοινής λογικής.</p>
                </div>
            </p>
        </div>
    </div>
</main>


<?php
include 'assets/templates/footer.html';
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