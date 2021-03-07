<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminLTE 3 | Registration Page (v2)</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../plugins/fontawesome-free/css/all.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="../plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../dist/css/adminlte.min.css">
</head>

<body class="hold-transition register-page">
  <div class="register-box">
    <div class="card card-outline card-primary">
      <div class="card-header text-center">
        <a href="../index.php" class="h1"><b>Admin</b>LTE</a>
        <?php
        if (isset($_SESSION['error'])) {
          echo <<<ERROR
    <div class="alert alert-danger alert-dismissible">
      $_SESSION[error]
    </div>
ERROR;
          unset($_SESSION['error']);
        }

        ?>
      </div>
      <div class="card-body">
        <p class="login-box-msg">Utwórz nowe konto</p>

        <form action="../scripts/register.php" method="post">
        <!-- <form action="./x.php" method="post"> -->
          <div class="input-group mb-3">
            <input type="text" class="form-control" placeholder="Imię" name="name">
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-user"></span>
              </div>
            </div>
          </div>
          <div class="col-sm-6">
            <div class="form-group">
              <div class="form-check">
                <input class="form-check-input" type="radio" name="gender" value="w">
                <label class="form-check-label">Kobieta</label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="gender" value="m">
                <label class="form-check-label">Mężczyzna</label>
              </div>
            </div>
          </div>
          <div class="input-group mb-3">
            <input type="text" class="form-control" placeholder="Nazwisko" name="surname">
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-user"></span>
              </div>
            </div>
          </div>
          <div class="input-group mb-3">
            <input type="email" class="form-control" placeholder="Email" name="email1">
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-envelope"></span>
              </div>
            </div>
          </div>
          <div class="input-group mb-3">
            <input type="email" class="form-control" placeholder="Powtórz Email" name="email2">
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-envelope"></span>
              </div>
            </div>
          </div>
          <div class="input-group mb-3">
            <input type="password" class="form-control" placeholder="Hasło" name="pass1">
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-lock"></span>
              </div>
            </div>
          </div>
          <div class="input-group mb-3">
            <input type="password" class="form-control" placeholder="Powtórz hasło" name="pass2">
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-lock"></span>
              </div>
            </div>
          </div>
          <div class="input-group mb-3">
            <input type="date" class="form-control" name="birthday">
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-calendar"></span>
              </div>
            </div>
          </div>
          <div class="input-group mb-3">
            <select name="city" class="form-control">

              <?php
              require_once '../scripts/connect.php';
              $sql = "SELECT * FROM cities";
              $stmt = $connect->prepare($sql);
              $stmt->execute();
              $result = $stmt->get_result();
              while ($city = $result->fetch_assoc()) {
                if ($city['city'] == 'Poznań') {
                  echo <<<CITY
        <option selected value="$city[id]">$city[city]</option>
CITY;
                } else {
                  echo <<<CITY
    <option value="$city[id]"> $city[city]</option>
CITY;
                }
              }

              ?>
            </select>
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-city"></span>
              </div>
            </div>
          </div>

          <div class="input-group mb-3">
            <select name="nationality" class="form-control">

              <?php
              //require_once '../scripts/connect.php';
              $sql = "SELECT * FROM countries";
              $stmt = $connect->prepare($sql);
              $stmt->execute();
              $result = $stmt->get_result();
              while ($nationality = $result->fetch_assoc()) {
                echo <<<CITY
    <option value="$nationality[id]"> $nationality[country]</option>
CITY;
              }
              

              ?>
            </select>
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-flag"></span>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-8">
              <div class="icheck-primary">
                <input type="checkbox" id="agreeTerms" name="terms" value="agree">
                <label for="agreeTerms">
                  I agree to the <a href="#">terms</a>
                </label>
              </div>
            </div>
            <!-- /.col -->
            <div class="col-4">
              <button type="submit" class="btn btn-primary btn-block">Rejestruj</button>
            </div>
            <!-- /.col -->
          </div>

          <?php
          $_SESSION['marketing'] = array();
          $sql = "SELECT * FROM `marketing`";
          $stmt = $connect->prepare($sql);
          $stmt->execute();
          $result = $stmt->get_result();
          
          while ($agreement = $result->fetch_assoc()) {
            if ($agreement['active'] == 1) {
              array_push($_SESSION['marketing'], $agreement['id']);
              echo <<<AGREEMENT
              <div class="form-group">
                <div class="custom-control custom-switch custom-switch-off-danger custom-switch-on-success">
                  <input type="checkbox" class="custom-control-input" id="$agreement[marketing_name]" name="marketing$agreement[id]">
                  <label class="custom-control-label" for="$agreement[marketing_name]">$agreement[marketing_name]</label>
                </div>
              </div>
AGREEMENT;
            }

          }
          
          $connect->close();

          ?>

        </form>

        <div class="social-auth-links text-center">
          <a href="#" class="btn btn-block btn-primary">
            <i class="fab fa-facebook mr-2"></i>
            Zarejestruj się korzystając z Facebook
          </a>
          <a href="#" class="btn btn-block btn-danger">
            <i class="fab fa-google-plus mr-2"></i>
            Zarejestruj się korzystając z Google+
          </a>
        </div>

        <a href="../" class="text-center">Mam już konto</a>
      </div>
      <!-- /.form-box -->
    </div><!-- /.card -->
  </div>
  <!-- /.register-box -->

  <!-- jQuery -->
  <script src="../plugins/jquery/jquery.min.js"></script>
  <!-- Bootstrap 4 -->
  <script src="../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- AdminLTE App -->
  <script src="../dist/js/adminlte.min.js"></script>
</body>

</html>