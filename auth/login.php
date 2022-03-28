<!DOCTYPE html>
<html lang="en-US" dir="ltr">

<head>
  <?php include($_SERVER["DOCUMENT_ROOT"] . '/all_things_anime/navigation/head.html') ?>
  <?php
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $_SESSION['login_user'] = true;
    header("location: ../dashboard.php");
  } else {
    $error = "Your Login Name or Password is invalid";
    echo ($error);
  }
  ?>
</head>

<body class="bg-dark-30" data-spy="scroll" data-target=".onpage-navigation" data-offset="60">
  <main>
    <div class="page-loader">
      <div class="loader">Loading...</div>
    </div>
    <?php include($_SERVER["DOCUMENT_ROOT"] . '/all_things_anime/navigation/navbar.php') ?>
    <div class="main">
      <section class="module bg-dark-30 login-section" data-background="../assets/images/loginImg.png">
        <div class="container">
          <div class="row">
            <div class="col-sm-6 col-sm-offset-3">
            </div>
          </div>
        </div>
      </section>
      <section class="module-extra-small bg-dark">
        <div class="container">
          <div class="row">
            <div class="col-sm-6 col-md-8 col-lg-9">
              <div class="callout-text font-alt">
                <h4 style="margin-top: 0px;">Don't have an account?</h4>
                <p style="margin-bottom: 0px;">Click sign up and join the community today!</p>
              </div>
            </div>
            <div class="col-sm-6 col-md-4 col-lg-3">
              <div class="callout-btn-box">
                <a class="btn btn-border-w btn-circle" href="register.php">Sign Up!</a>
              </div>
            </div>
          </div>
        </div>
      </section>
      <section class="module">
        <div class="container">
          <div class="row">
            <div class="col-sm-5 col-sm-offset-1 mb-sm-40">
              <h4 class="font-alt">Login</h4>
              <hr class="divider-w mb-10">
              <form class="form" method="POST">
                <div class="form-group">
                  <input class="form-control" id="username" type="text" name="username" placeholder="Username" />
                </div>
                <div class="form-group">
                  <input class="form-control" id="password" type="password" name="password" placeholder="Password" />
                </div>
                <div class="form-group">
                  <button type="submit" class="btn btn-round btn-b">Login</button>
                </div>
                <div class="form-group"><a href="#">Forgot Password?</a></div>
              </form>
            </div>
          </div>
        </div>
      </section>
    </div>
    <div class="scroll-up"><a href="#totop"><i class="fa fa-angle-double-up"></i></a></div>
  </main>
  <?php include($_SERVER["DOCUMENT_ROOT"] . '/all_things_anime/navigation/scripts.html') ?>
</body>
<?php include($_SERVER["DOCUMENT_ROOT"] . '/all_things_anime/navigation/footer.html') ?>

</html>