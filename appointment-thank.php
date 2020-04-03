<?php  include "head.php"; ?>
    <!-- end of header area -->
    <div class="page-header">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h2>Apply Now</h2>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Apply Now</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- end of page header -->
    <section class="section-padding contact-us-padding">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-12 col-lg-10">
                    <form action="applynow.php" method="post">
                        <div class="row list-input">
                            <div class="col-md-6 mr0">
                                <div class="single-get-touch">
                                    <input type="text" name="lamount" placeholder="LOAN AMOUNT (£) *">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="single-get-touch">
                                    <select name="porpuse_of_loan">
                                        <option value="Choose Purpose">PURPOSE OF LOAN *</option>
                                        <option value="Business">Business</option>
                                        <option value="Car Purchase">Car Purchase</option>
                                        <option value="Holiday">Holiday</option>
                                        <option value="Home Purchase">Home Purchase</option>
                                        <option value="Investments">Investments</option>
                                        <option value="Payday Loan">Payday Loan</option>
                                        <option value="Wedding ">Wedding </option>
                                        <option value="Other">Other</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6 mr0">
                                <div class="single-get-touch">
                                    <input type="text" name="fname" placeholder="First Name">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="single-get-touch">
                                    <input type="text" name="lname" placeholder="Last Name">
                                </div>
                            </div>
                            <div class="col-md-6 mr0">
                                <div class="single-get-touch">
                                    <input type="email" name="email" placeholder="Email">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="single-get-touch">
                                    <input type="text" name="phone" placeholder="Phone">
                                </div>
                            </div>
                            <div class="col-md-6 mr0">
                                <div class="single-get-touch">
                                    <input type="text" name="date_of_birth" placeholder="Date of Birth *">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="single-get-touch">
                                    <select name="martial_state">
                                        <option value="Choose here">MARITAL STATUS *</option>
                                        <option value="Married">Married</option>
                                        <option value="Single">Single</option>
                                        <option value="Co-habiting">Co-habiting</option>
                                        <option value="Separated">Separated</option>
                                        <option value="Divorced">Divorced</option>
                                        <option value="Civil Union">Civil Union</option>
                                        <option value="Widowed">Widowed</option>
                                        <option value="Partner">Partner</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6 mr0">
                                <div class="single-get-touch">
                                    <select name="number_of_dependants">
                                        <option value="NUMBER OF DEPENDANTS *">NUMBER OF DEPENDANTS *</option>
                                        <option value="0 Dependants">0 Dependants</option>
                                        <option value="1 Dependants">1 Dependants</option>
                                        <option value="2 Dependants">2 Dependants</option>
                                        <option value="3 Dependants">3 Dependants</option>
                                        <option value="4 Dependants">4 Dependants</option>
                                        <option value="5+ Dependants">5+ Dependants</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="single-get-touch">
                                    <input type="text" name="country" placeholder="Country">
                                </div>
                            </div>
                            <div class="col-md-6 mr0">
                                <div class="single-get-touch">
                                    <input type="text" name="city" placeholder="TOWN/CITY *">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="single-get-touch">
                                    <input type="text" name="street" placeholder="STREET *">
                                </div>
                            </div>
                            <div class="col-md-6 mr0">
                                <div class="single-get-touch">
                                    <input type="text" name="house_number" placeholder="HOUSE NAME/NUMBER *">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="single-get-touch">
                                    <input type="text" name="house_status" placeholder="HOMEOWNER STATUS *">
                                </div>
                            </div>
                            <div class="col-md-6 mr0">
                                <div class="single-get-touch">
                                    <input type="text" name="time_address" placeholder="TIME AT ADDRESS *">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="single-get-touch">
                                    <select name="employment_status">
                                        <option value="Choose Here">Choose Here</option>
                                        <option value="Full Time Employed ">Full Time Employed </option>
                                        <option value="Part Time Employed ">Part Time Employed </option>
                                        <option value="Self Employed ">Self Employed </option>
                                        <option value="Temporarily  Employed ">Temporarily Employed </option>
                                        <option value="Student ">Student </option>
                                        <option value="Pension">Pension</option>
                                        <option value="Disability">Disability</option>
                                        <option value="Unemployed ">Unemployed </option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6 mr0">
                                <div class="single-get-touch">
                                    <input type="text" name="employment_industry" placeholder="EMPLOYMENT INDUSTRY *">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="single-get-touch">
                                    <input type="text" name="employer_name" placeholder="EMPLOYER NAME *">
                                </div>
                            </div>
                            <div class="col-md-6 mr0">
                                <div class="single-get-touch">
                                    <input type="text" name="employer_work_phone" placeholder="WORK PHONE NUMBER *">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="single-get-touch">
                                    <input type="text" name="month_income" placeholder="MONTHLY INCOME (£) *">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="single-get-check">
                                    <label class="radiobox"> Male
                                        <input type="radio" checked="checked" name="gender">
                                        <span class="checkmark"></span>
                                    </label>
                                    <label class="radiobox">Fmale
                                        <input type="radio" name="gender">
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="single-get-touch">
                                    <button type="submit" name="submit" class="btn btn-default btn-sm">Apply Now</button>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="single-get-touch">
                                    <p>Your Appointment Latter Has Been Sent</p>
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