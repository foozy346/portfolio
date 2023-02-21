<?php

require_once "vendor/autoload.php";
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

$mail= new PHPMailer(true);

$mail->isSMTP();
$mail->SMTPAuth = true;
$mail->Host = 'smtp-relay.sendinblue.com';
$mail->Port = 587;
$mail->Username = "fawzy346@gmail.com";
$mail->Password = "xsmtpsib-cc5fa9406d513fd1e6b1ab4d2b9cc7f1aa6db0a5ae56069d888b5f2488cf537d-pQk1Z7jPAHLaJqDr";
$mail->addAddress("fawzy346@gmail.com");

$is_ok=0;

if (count($_POST) > 0) {
  try{
    $name=$_POST['fullname'];
    $em=$_POST['email'];
    $ph=$_POST['phone'];
    $sub=$_POST['Subject'];
    $msg=$_POST['Message'];

    $mail->setFrom($em, $name);
    $mail->Subject = $sub;
    $mail->Body = "Phoen Number : \t".$ph."\n". $msg;

    $mail->send();
    $is_ok=1;
  }
  catch(Exception $e){
    $is_ok=2;
  }

  $_POST = array();
}
?>

<div class="container" style="padding: 1rem; margin-top: 4rem; border-radius: 10px 30px 30px; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.2); ">
  <?php
  switch ($is_ok){
    case 0 :
      break;
    case 1:
      echo '<div class="alert alert-success" role="alert">
        The Email Has Been Send Successfully! Thank You for Contacting with me.
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
      </div>';
      break;
    case 2:
      echo '<div class="alert alert-danger" role="alert">
        THE EMAIL WAS NOT SENT! there might be some problem.
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
      </div>';
      break;
    default:
      break;
  }
  ?>
    <center><h1 class="text-divider" style="padding: 10px;"><span>Contact ME</span></h1></center>
    <form method="post">
        <div class="form-group row">
            <label for="inputName" class="col-sm-2 col-form-label">Name</label>
            <div class="col-sm-10">
                <input type="text" name="fullname" class="form-control" id="inputName" placeholder="Your Name" required>
            </div>
        </div>
        <div class="form-group row">
            <label for="inputEmail" class="col-sm-2 col-form-label">Email</label>
            <div class="col-sm-10">
            <input type="email" name="email" class="form-control" id="inputEmail" placeholder="Your Email">
            </div>
        </div>
        <div class="form-group row">
            <label for="inputPhone" class="col-sm-2 col-form-label">Phone</label>
            <div class="col-sm-10">
            <input type="text" name="phone" class="form-control" id="inputPhone" placeholder="Phone Number">
            </div>
        </div>
        <div class="form-group row">
            <label for="inputSubject" class="col-sm-2 col-form-label">Subject</label>
            <div class="col-sm-10">
            <input  name="Subject" class="form-control" id="inputSubject" placeholder="Email Subject">
            </div>
        </div>
        <div class="form-group row">
            <label for="inputMessage" class="col-sm-2 col-form-label">Message</label>
            <div class="col-sm-10">
                <textarea class="form-control" name="Message" id="inputMessage" rows="4" placeholder="Your Message"></textarea>
            </div>
        </div>
        <br>
        <div class="form-group" >
            <center><button type="submit"  class="btn btn-primary">Submit & Send &nbsp;&nbsp;<i class="fa-solid fa-paper-plane"></i></button></center>
        </div>
    </form>
</div>

<br><br>
<footer class="text-center text-white" style="background-color: #E9ECEF ;">
  <div class="container pt-4">
    <section class="mb-4">
      <a
        class="btn btn-link btn-floating btn-lg text-dark m-1"
        href="https://www.linkedin.com/in/fawzy-nissem-719082195/"
        role="button"
        data-mdb-ripple-color="dark"
        ><i class="fab fa-linkedin"></i
      ></a>
      <a
        class="btn btn-link btn-floating btn-lg text-dark m-1"
        href="https://github.com/foozy346"
        role="button"
        data-mdb-ripple-color="dark"
        ><i class="fab fa-github"></i
      ></a>
      <a
        class="btn btn-link btn-floating btn-lg text-dark m-1"
        href="index.php?tab=5"
        role="button"
        data-mdb-ripple-color="dark"
        ><i class="fa-sharp fa-solid fa-envelope"></i>
      </a>
      <a
        class="btn btn-link btn-floating btn-lg text-dark m-1"
        href="https://wa.me/201018174206"
        role="button"
        data-mdb-ripple-color="dark">
        <i class="fa-brands fa-whatsapp"></i>
      </a>
      <a
        class="btn btn-link btn-floating btn-lg text-dark m-1"
        href="https://t.me/+201018174206"
        role="button"
        data-mdb-ripple-color="dark">
        <i class="fa-brands fa-telegram"></i>
      </a>
    </section>
  </div>

  <div class="text-center text-dark p-3" style="background-color:#bec1c5 ;">
      © 2023 Copyright:
      <a class="text-dark" href="https://fawzy.great-site.net/">fawzy.great-site.net</a>
  </div>
</footer>
    