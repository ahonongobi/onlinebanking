<?php  include "head2.php"; ?>
    <!-- end of header area -->
   
    <section class="loan-calculator-page section-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-3 single-nav">
                    <h3>lening huis
                     <span>@ 2%</span>
                    </h3>
                </div>
                <div class="col-md-3 single-nav">
                    <h3> Persoonlijke lening 
                        <span>@ 2%</span>
                    </h3>
                </div>
                <div class="col-md-3 single-nav">
                    <h3> Motorfiets lening
                        <span>@ 2%</span>
                    </h3>
                </div>
                <div class="col-md-3 single-nav">
                    <h3>studielening
                        <span>@ 2%</span>
                    </h3>
                </div>
            </div>
            <div class="row">
                <div class="col-md-8 loan-slider-box">
                    <div class="single-loan-slider">
                        <h4>Lening bedrag</h4>
                        <div id="pricipal-slide"></div>
                        <div>
                            <span>$</span>
                            <h6 id="pricipal"></h6>
                        </div>
                    </div>
                    <div class="single-loan-slider">
                        <h4>Duur (in maanden) </h4>
                        <div id="totalyear-slide"></div>
                        <div>
                            <h6 id="totalyear"></h6>
                            <span>Durr</span>
                        </div>
                    </div>
                    <div class="single-loan-slider">
                        <h4>Rentevoet</h4>
                        <div id="intrest-slide"></div>
                        <div>
                            <h6 id="intrest"></h6>
                            <span>%</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 text-center loan-emi">
                    <div class="total-calculation">
                        <div class="single-total">
                            <h5>Loan EMI</h5>
                            <h2 class="emi-price" id="emi">0</h2>
                        </div>
                        <div class="single-total">
                            <h5>Totaal te betalen rente</h5>
                            <h2 id="tbl_emi">0</h2>
                        </div>
                        <div class="single-total">
                            <h5>Totale betaling
<br>(Hoofdsom + rente)</h5>
                            <h2 id="tbl_la">0</h2>
                        </div>
                        <a   href="demande-de-pret.php" class="btn applybtn btn-default btn-sm">Nu lenen</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- start footer area -->
 <?php  include "footer.php"; ?>