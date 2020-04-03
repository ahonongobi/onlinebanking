<?php  include "head2.php"; ?>
    <!-- end of header area -->
  
    <!-- end of page header -->
    <section class="section-padding contact-us-padding">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-12 col-lg-10">
                    <form action="" method="post">
                        <div class="row list-input">
                            <div class="col-md-6 mr0">
                                <div class="single-get-touch">
                                    <input type="text" name="lamount" placeholder="BEDRAG VAN DE LENING (€) *" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="single-get-touch">
                                    <select name="porpuse_of_loan" required>
                                        <option value="Choose Purpose">TYPE LENING *</option>
                                        <option value="Affaires">bedrijf</option>
                                        <option value="Achat de voiture">Auto Kopen</option>
                                        <option value="Vacances">Vakantie</option>
                                        <option value="Achat de maison">Een huis kopen</option>
                                        <option value="Investments">Investering</option>
                                        <option value="Prêt sur salaire">Betaaldaglening</option>
                                        <option value="Mariage ">Huwelijk </option>
                                        <option value="Autre">Anders</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6 mr0">
                                <div class="single-get-touch">
                                    <input type="text" name="fname" placeholder="
                                  voornaam" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="single-get-touch">
                                    <input type="text" name="lname" placeholder="Achternaam" required>
                                </div>
                            </div>
                            <div class="col-md-6 mr0">
                                <div class="single-get-touch">
                                    <input type="email" name="email" placeholder="Email" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="single-get-touch">
                                    <input type="text" name="phone" placeholder="Telefoon" required>
                                </div>
                            </div>
                           
                           
                           
                            <div class="col-md-6">
                                <div class="single-get-touch">
                                    <input type="text" name="country" placeholder="Land" required>
                                </div>
                            </div>
                            <div class="col-md-6 mr0">
                                <div class="single-get-touch">
                                    <input type="text" name="city" placeholder="Stad  *" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="single-get-touch">
                                    <input type="text" name="street" placeholder="STREET *" required>
                                </div>
                            </div>
                            <div class="col-md-6 mr0">
                                <div class="single-get-touch">
                                    <input type="text" name="house_number" placeholder="NAAM VAN HET HUIS / NUMMER *" required>
                                </div>
                            </div>
                           
                            
                            <div class="col-md-6">
                                <div class="single-get-touch">
                                    <select name="employment_status" required>
                                        <option value="Choose Here">Status</option>
                                        <option value="Temps plein employé ">Fulltime medewerker</option>
                                        <option value="Employé à temps partiel ">Parttime medewerker </option>
                                        <option value="Travailleur indépendant ">Onafhankelijke werknemer </option>
                                        <option value="Employé temporairement ">Uitzendkracht</option>
                                        <option value="Étudiant ">Student </option>
                                        <option value="Pension">Pension</option>
                                        
                                        <option value="Sans emploi ">Werkloos </option>
                                    </select>
                                </div>
                            </div>
                           
                            
                            <div class="col-md-6">
                                <div class="single-get-touch">
                                    <input type="text" name="month_income" placeholder="Maandelijks inkomen (€) *" required>
                                </div>
                            </div> <br>
                            <div class="col-md-12">
                                <div class="single-get-check">
                                    <label class="radiobox"> Man
                                        <input type="radio" checked="checked" name="gender" value="Homme">
                                        <span class="checkmark"></span>
                                    </label>
                                    <label class="radiobox">Vrouw
                                        <input type="radio" name="gender" value="Femme">
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="single-get-touch">
                                    <button type="submit" name="submit" class="btn btn-default btn-sm">bevestigen</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- start footer area -->
 <?php  include "footer.php"; ?>