<?php
include("compnents/header.php");
?>
<?php
$nameError = $emailError = $msgError = '';
$name = $email = $msg = '';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["name"])) {
    $nameError = "Tumhara koi name bhi he yeah nhi ";
  } else {
    $name = htmlspecialchars($_POST["name"]);
  }

  if (empty($_POST["email"])) {
    $emailError = "Email bhi bata do ";
  } else {
    $email = htmlspecialchars($_POST["email"]);
  }

  if (empty($_POST["msg"])) {
    $msgError = "bolo yaha pr keya bolna he ";
  } else {
    $msg = htmlspecialchars($_POST["msg"]);
  }

  if (!$nameError && !$emailError && !$msgError) {
    // Redirect to mail file with GET method
    header("Location: contactsendmail.php?name=$name&email=$email&msg=$msg");
    exit();

  }
}
?>




 <!-- ye section contactus me jaeyga   -->
 <section>

<div class="container"  data-aos="zoom-in" data-aos-duration="1000">
  <div class="row justify-content-center">
    <div class="col-md-6 col-lg-5 col-xl-4"><img src="assets/img/illustrations/callback.png" alt="..." />
      <h5 class="text-danger">REQUEST A CALLBACK</h5>
      <h2>We will contact in the shortest time.</h2>
      <p class="text-muted">Monday to Friday, 9am-5pm.</p>
    </div>
    <div class="col-md-6 col-lg-5 col-xl-4">
    <form class="row" action="" method="POST">
  <div class="mb-3">
    <label class="form-label visually-hidden" for="inputName">Name</label>
    <input class="form-control form-quriar-control" name="name" id="inputName" type="text" placeholder="Name" value="<?= htmlspecialchars($name ?? '') ?>" />
    <small class="text-danger"><?= $nameError ?></small>
  </div>

  <div class="mb-3">
    <label class="form-label visually-hidden" for="inputEmail">Another label</label>
    <input class="form-control form-quriar-control" id="inputEmail" name="email" type="email" placeholder="Email" value="<?= htmlspecialchars($email ?? '') ?>" />
    <small class="text-danger"><?= $emailError ?></small>
  </div>

  <div class="mb-5">
    <label class="form-label visually-hidden" for="validationTextarea">Message</label>
    <textarea class="form-control form-quriar-control border-400" name="msg" id="validationTextarea" placeholder="Message" style="height: 150px"><?= htmlspecialchars($msg ?? '') ?></textarea>
    <small class="text-danger"><?= $msgError ?></small>
  </div>

  <div class="d-grid">
    <button class="btn btn-primary" type="submit" name="sendmsg">Send Message<i class="fas fa-paper-plane ms-2"></i></button>
  </div>
</form>


   
    </div>
  </div>
</div>
<!-- end of .container-->

</section>
<!-- ye section contactus me jaeyga   -->


<!-- findus wala yaha se start he   -->
<section id="findUs"  data-aos="zoom-in" data-aos-duration="1000">

<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-8 col-lg-5 mb-6 text-center">
      <h5 class="text-danger">FIND US</h5>
      <h2>Access us easily</h2>
    </div>
    <div class="col-12">
      <div class="card card-span rounded-2 mb-3">
        <div class="row">

          <div class="col-md-6 col-lg-7 d-flex"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3620.0170064238896!2d67.07182317583607!3d24.863268745144197!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3eb33ea3db108f41%3A0x42acc4507358b160!2sAptech%20Learning%2C%20Shahrah%20e%20Faisal%20Center!5e0!3m2!1sen!2s!4v1745242672947!5m2!1sen!2s" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe></div>


          <div class="col-md-6 col-lg-5 d-flex flex-center">
            <div class="card-body">
              <h5>Contact with us</h5>
              <p class="text-700 my-4"> <i class="fas fa-map-marker-alt text-warning me-3"></i><span>Aptech SFC</span></p>
              <p><i class="fas fa-phone-alt text-warning me-3"></i><span class="text-700">Monday - Friday: 10 am - 10pm<br/><span class="ps-4">Sunday: 11 am - 9pm  </span></span></p>
              <p><i class="fas fa-envelope text-warning me-3"> </i><a class="text-700" href="https://mail.google.com/mail/?view=cm&fs=1&to=thecoders333@gmail.com"  target="_blank"> quickdrop@gmail.com</a></p>
              <ul class="list-unstyled list-inline mt-5">
                <li class="list-inline-item"><a class="text-decoration-none" href="#!"><i class="fab fa-facebook-square fs-2"></i></a></li>
                <li class="list-inline-item"><a class="text-decoration-none" href="#!"><i class="fab fa-instagram-square fs-2"></i></a></li>
                <li class="list-inline-item"><a class="text-decoration-none" href="#!"><i class="fab fa-twitter-square fs-2"></i></a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <div class="text-center">
      <a class="btn btn-primary px-5 text-light" href="tel:03123456789">
<i class="fas fa-phone-alt me-2"></i>Call us to delivery 03123456789
</a>

      </div>
    </div>
  </div>
</div>
<!-- end of .container-->

</section>
<!-- findus wala yaha pr close   -->











<?php
include("compnents/footer.php");
?>







<!-- <form class="row">
        <div class="mb-3">
          <label class="form-label visually-hidden" for="inputName">Name</label>
          <input class="form-control form-quriar-control" id="inputName" type="text" placeholder="Name" />
        </div>
        <div class="mb-3">
          <label class="form-label visually-hidden" for="inputEmail">Another label</label>
          <input class="form-control form-quriar-control" id="inputEmail" type="email" placeholder="Email" />
        </div>
        <div class="mb-5">
          <label class="form-label visually-hidden" for="validationTextarea">Message</label>
          <textarea class="form-control form-quriar-control is-invalid border-400" id="validationTextarea" placeholder="Message" style="height: 150px" required="required"></textarea>
        </div>
        <div class="d-grid">
          <button class="btn btn-primary" type="submit">Send Message<i class="fas fa-paper-plane ms-2"></i></button>
        </div>
      </form> -->