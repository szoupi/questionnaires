<?php
// custom style is there too
include 'assets/templates/header.html';
?>


<!-- NAVIGATION -->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="/">Home
  </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">

  </div>
</nav>

<!-- CONTENT -->
<div class="container-md">
    <div class="row">
        <div class="col-md-6 col-lg-6 col-xl-4 offset-md-4">
			
			<h1>Εργασιακό κάψιμο - burnout (τεστ)</h1>
			<small class="text-muted">BURN-OUT /ˈb3ːrnaʊt/US:/ˈbɝnˌaʊt/ ,(bûrn′out′):<br />Αναλώνομαι προοδευτικά εκ των ένδον μέχρι του σημείου της απανθράκωσης</small>
			<br /><br />
			<div class="lead">
				<p>Ξυπνάς το πρωί και δεν θέλεις να πας στην εργασία σου;<br />
				Μήπως η δουλειά σου δεν σε γεμίζει πλέον;<br />
				Αισθάνεσαι σωματικά και ψυχικά εξάντλημένος;<br />
				<strong>Ίσως να είσαι καμμένος εργασιακά (burnout).</strong> </p>
				<p>Κάνε το παρακάτω τεστ (λιγότερο από 1 λεπτό) και μάθε πόσο καμμένος είσαι!</p>
			</div>
			<br /><br />
			<h2>ΤΙ ΕΙΝΑΙ ΤΟ BURNOUT</h2>
			<p>Με τον όρο Επαγγελματική Εξουθένωση (<a href="https://en.wikipedia.org/wiki/Occupational_burnout" target="_blank" rel="noopener">Occupational Burnout</a>) περιγράφεται ένα σύνολο συμπτωμάτων σωματικής και ψυχικής εξάντλησης που οφείλονται στις συνθήκες εργασίας, στο γνωστό εργασιακό στρες. Το burnout δεν έχει να κάνει με το πόσες ώρες εργάζεται κάποιος, αλλά αλλά με το βαθμό ικανοποίησης από την εργασία του. Το burnout είναι το αποτέλεσμα του συνδυασμού υψηλής προσπάθειας με χαμηλά αποτελέσματα κάτω από ιδιαίτερα πιεστικές συνθήκες εργασίας.</p>
			<p>&nbsp;</p>
			<h2>ΠΟΙΟΥΣ ΑΦΟΡΑ</h2>
			<p>Αν και θεωρείται ότι η Επαγγελματική Εξουθένωση αφορά κυρίως εργαζόμενους που έρχονται σε επαφή με άλλους ανθρώπους, δυνητικά μπορεί να αφορά οποιοδήποτε εργαζόμενο. Πρώτοι στη λίστα θεωρούνται οι γιατροί και νοσόκόμοι και ακολουθούν στελέχη και υπάλληλοι εταιρειών, οι ελεγκτές εναέριας κυκλοφορίας, δημοσιαγράφοι και διαφημιστές και γενικά άνθρωποι φιλότιμοι, εργατικοί και φιλόδοξοι που εργάζονται σε περιβάλλον ανταγωνιστικό ή έντονα φορτισμένο.</p>
			<p>&nbsp;</p>
			<h2>ΣΥΜΠΤΩΜΑΤΑ</h2>
			<p>Ανορεξία, αϋπνίες, πονοκέφαλος, αυχενικό σύνδρομο, υπερένταση, εκνευρισμός, άγχος, κακή διάθεση, ανησυχία, ενοχικότητα, αθυμία, απόσπαση προσοχής, κυκλοθυμικότητα είναι ορισμένες από τις σωματικές και ψυχολογικές ενδείξεις ότι ενδέχεται να υποφέρεις από το σύνδρομο της Επαγγελματικής Εξουθένωσης.</p>
			<p>&nbsp;</p>
			<h2>ΠΩΣ ΑΝΤΙΜΕΤΩΠΙΖΕΤΑΙ ΤΟ BURNOUT</h2>
			<p>Αν και η απάντηση εξειδικεύεται και αφορά το κάθε άτομο ξεχωριστά, σε γένικές γραμμές απαιτείται:</p>
			<ul>
			<li>να αναγνωρίσεις τις αιτίες που σου προκαλούν επαγγελματικό άγχος</li>
			<li>να αλλάξεις τις συνθήκες εργασίας που συμβάλλουν στο επαγγελματικό σου άγχος</li>
			<li>να ξεκουράζεσαι καθημερινά σωματικά και ψυχικά</li>
			</ul>			
			<br /><br />
			
			
			
			<!-- 	TEST		 -->
            <div class="card card-body">


                <div class="alert <?php echo $class; ?>">
                    <h3 class="alert-heading" ><?php echo $heading; ?></h3>
                    <hr>
                </div>
                
                <p>
					Απάντησε στις παρακάτω ερωτήσεις και δες τα αποτελέσματα για να διαπιστώσεις σε ποιο βαθμό είσαι επηρεασμένος από το σύνδρομο της Εργασιακής Εξουθένωσης (burnout)
				</p>
				
                <form   id="form-burnout" class="container form-horizontal"
                        enctype="multipart/form-data" accept-charset="UTF-8"
                        action="burnout-results.php" method="post">
                    <fieldset>

                        <div class="form-group">
                            <label for="question01" class="control-label">1. Αισθάνομαι ότι δεν με κατανοούν ούτε με εκτιμούν οι συνάδελφοι και οι συνεργάτες μου</label>
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
                            <label for="question02" class="control-label">2. Νιώθω ότι κάνω λιγότερες προσπάθειες από όσο θα έπρεπε</label>
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
                            <label for="question03" class="control-label">3. Κάνω αρνητικές σκέψεις για τη δουλειά μου</label>
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
                            <label for="question04" class="control-label">4. Νιώθω ότι βρίσκομαι στο λάθος μέρος ή ότι κάνω λάθος δουλειά</label>
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
                        
                        <div class="form-group">
                            <label for="question05" class="control-label">5. Αισθάνομαι πως δεν έχω χρόνο να κάνω πράγματα που βελτιώνουν την ποιότητα της εργασίας μου</label>
                            <div>
                                <div class="input-group">

                                    <div class="btn-group btn-group-toggle" data-toggle="buttons">
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

                                    <div class="btn-group btn-group-toggle" data-toggle="buttons">
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

                                    <div class="btn-group btn-group-toggle" data-toggle="buttons">
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

                                    <div class="btn-group btn-group-toggle" data-toggle="buttons">
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

                                    <div class="btn-group btn-group-toggle" data-toggle="buttons">
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

                                    <div class="btn-group btn-group-toggle" data-toggle="buttons">
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

                                    <div class="btn-group btn-group-toggle" data-toggle="buttons">
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

                                    <div class="btn-group btn-group-toggle" data-toggle="buttons">
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

                                    <div class="btn-group btn-group-toggle" data-toggle="buttons">
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

                                    <div class="btn-group btn-group-toggle" data-toggle="buttons">
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

                                    <div class="btn-group btn-group-toggle" data-toggle="buttons">
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