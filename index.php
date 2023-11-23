<!DOCTYPE html>
<html>

<head>
  <title>
    Anarchy Admin
  </title>
  <link rel="stylesheet" href="assets/css/bootstrap.min.css">
  <script src="assets/js/jquery-3.5.1.min.js" type="text/javascript"></script>
  <style>
    body {
      background: url("https://storage.googleapis.com/anarchy-game-anarchy_1141183825/static/images/body_bg.webp") no-repeat center center fixed;
      -webkit-background-size: cover;
      -moz-background-size: cover;
      -o-background-size: cover;
      background-size: cover;
    }

    @media only screen and (min-width: 240px) and (max-width: 767px) {
      body {
        /* background-image: none; */
      }
    }
  </style>
</head>

<body>
  <div class="container">
    <!-- <img src="assets/Login_Background.jpg" class=" w-100 fixed-top" style="z-index: -1;"> -->
    <div class="row mt-5 pt-5">
      <div class="col-md-3">.</div>
      <div class="col-md-6 mt-5 pt-5">
        <div>
          <h2 class="text-center text-light">ANARCHY ADMIN</h2>
          <div class="card" style="width:100%">
            <div class="card-header">Login</div>
            <div class="card-body">
              <form method="POST" action="Login_Behind.php">
                <div class="p-1">
                  <div>Email</div>
                  <div><input type="email" name="usernametbx" required class="form-control"></div>
                </div>
                <div class="p-1">
                  <div>Password</div>
                  <div><input type="password" name="passwordtbx" required class="form-control"></div>
                </div>
                <div class="p-1">
                  <div class="d-flex">
                    <input type="submit" name="IDSubmit" style="width:100%" value="Login" class="form-control bg-dark text-white">
                    <!-- <a href="Guest.php" style="width:250px" class="form-control bg-success text-white text-center">Sign In As Guest</a> -->
                  </div>
                  <div class="text-center text-danger"><label id="wrongpasswordlbl">Wrong Username Or Password</label></div>
                </div>
              </form>

            </div>
          </div>
        </div>
      </div>
      <div class="col-md-3">.</div>
    </div>

  </div>
  <?php
  echo "<script>document.getElementById('wrongpasswordlbl').style.display = 'none';</script>";
  if (isset($_GET["Error"])) {
    echo "<script>document.getElementById('wrongpasswordlbl').style.display = 'block';</script>";
  }
  ?>
</body>

</html>