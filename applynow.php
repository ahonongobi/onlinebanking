<meta charset="utf-8">

<?php


 if(isset($_POST['submit']))
                  {
  require 'phpmailer/PHPMailerAutoload.php';
    $lamount = $_POST['lamount'];
    $porpuse_of_loan = $_POST['porpuse_of_loan'];
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
   // $date_of_birth = $_POST['date_of_birth'];
    //$martial_state = $_POST['martial_state'];
    //$number_of_dependants = $_POST['number_of_dependants'];
    $country = $_POST['country'];
    $city = $_POST['city'];
    $street = $_POST['street'];
    $house_number = $_POST['house_number'];
    //$house_status = $_POST['house_status'];
    //$time_address = $_POST['time_address'];
    $employment_status = $_POST['employment_status'];
    //$employment_industry = $_POST['employment_industry'];
    //$employer_name = $_POST['employer_name'];
    //$employer_work_phone = $_POST['employer_work_phone'];
    $month_income = $_POST['month_income'];
    $gender = $_POST['gender'];
    $submit = $_POST['submit'];
    $message = 'Montant : ' . $lamount . "\r\n <br>";
    $message .= 'Type du pret : ' . $porpuse_of_loan . "\r\n <br>";
    $message .= 'Prénoms : ' . $fname . "\r\n <br>";
    $message .= 'Nom : ' . $lname . "\r\n <br> ";
    $message .= 'Email  : ' . $email . "\r\n <br>";
    $message .= 'Téléphone : ' . $phone . "\r\n <br>";
    //$message .= 'Date Of Birth : ' . $date_of_birth . "\r\n";
    //$message .= 'Martial Status : ' . $martial_state . "\r\n";
    //$message .= 'Number Of Dependants : ' . $number_of_dependants . "\r\n";
    $message .= 'Pays : ' . $country . "\r\n <br>";
    $message .= 'Ville : ' . $city . "\r\n <br>";
    $message .= 'Rue : ' . $street . "\r\n <br>";
    $message .= 'Maison numero : ' . $house_number . "\r\n <br>";
   // $message .= 'House Status : ' . $house_status . "\r\n";
    //$message .= 'Employment Industry : ' . $employment_industry . "\r\n";
    //$message .= 'Employer Name : ' . $employer_name . "\r\n";
    //$message .= 'Employer Work Phone : ' . $employer_work_phone . "\r\n";
    $message .= 'Salaire : ' . $month_income . "\r\n <br>";
    $message .= 'Sexe : ' . $gender . "\r\n <br>";
    // reciever mail address

    $subject = 'Demande de pret de '.$fname;




   $mail = new PHPMailer;

                    $mail->isSMTP();

                    $mail->Host = 'smtp.gmail.com';

                    $mail->Port = 587;

                    $mail->SMTPSecure = 'tls';

                    $mail->SMTPAuth = true;

                    $mail->Username = "portables9494@gmail.com";

                    $mail->Password = "JE@dois@94@94";


                    $mail->setFrom($email, $fname);

                    $mail->addReplyTo($email, $fname);

                    $mail->addAddress("gglewis94@gmail.com");

                    $mail->Subject = $subject;

                    $mail->msgHTML($message);

                    if (!$mail->send()) {
                       $error = "Erreur : " . $mail->ErrorInfo;
                        ?><script>alert('<?php echo $error ?>');</script><?php
                    } 
                    else {
                       echo '<script>alert("Votre demande a été pris en compte! Nous vous contacterons sous peu!");</script>';
                    $mail->clearAddresses();
                     $mail->addAddress("gboyou94@gmail.com");
                     $mail->send();


                    }




  
    }
?>