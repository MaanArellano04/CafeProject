<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" />
  <script src="https://kit.fontawesome.com/1cad54f882.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="stylereg.css" />

  <title>WEBDEV - ACTIVITY</title>
</head>

<body>
  
  <div class="container d-flex justify-content-center align-items-center min-vh-100">
    <div class="row box-border bg-white shadow box-area">
      <div class="col-md-12 right-box">
        <div class="row align-items-center">
          <div class="register-text mb-4">
            <h2 class="title-register">REGISTER HERE!</h2>
          </div>
        </div>
        <form action="" method="post"><!----php file for registration here----->
          <div class="row">
            <div class="col-md-4 mb-3">
              <input type="text" class="form-control form-control-lg fs-6 info-input lastname" placeholder="Last Name" onfocus="this.placeholder=''" onblur="this.placeholder='Last Name'" name="last_name" required />
            </div>
            <div class="col-md-4 mb-3">
              <input type="text" class="form-control form-control-lg fs-6 info-input firstname" placeholder="First Name" onfocus="this.placeholder=''" onblur="this.placeholder='First Name'" name="first_name" required/>
            </div>
            <div class="col-md-4 mb-3">
              <input type="text" class="form-control form-control-lg fs-6 info-input middlename" placeholder="Middle Name" onfocus="this.placeholder=''" onblur="this.placeholder='Middle Name'" name="middle_name"required />
            </div>
          </div>

          <div class="row align-items-center">
            <div class="col-md-4 mb-3">
              <input type="date" class="form-control form-control-lg fs-6 info-input birthdate" placeholder="Birthdate" onfocus="this.placeholder=''" onblur="this.placeholder='Birthdate'" name="birthdate" required/>
            </div>
            <div class="col-md-4 mb-3">
              <select class="form-select form-select-lg fs-6 info-input gender" onfocus="this.placeholder=''" onblur="this.placeholder='Gender'" name="gender"required>
                <option selected>Gender</option>

                <option value="male">Male</option>
                <option value="female">Female</option>
                <option value="other">Other</option>
              </select>
            </div>
          </div>

          <div class="input-group mb-3">
            <input type="text" class="form-control form-control-lg fs-6 info-input username" placeholder="Username" onfocus="this.placeholder=''" onblur="this.placeholder='Username'" name="username"required />
          </div>

          <div class="input-group mb-3">
            <input type="password" class="form-control form-control-lg fs-6 info-input password" placeholder="Password" onfocus="this.placeholder=''" onblur="this.placeholder='Password'" name="password"required />
          </div>

          <div class="input-group mb-3">
            <input type="password" class="form-control form-control-lg fs-6 info-input confirm-password" placeholder="Confirm Password" onfocus="this.placeholder=''" onblur="this.placeholder='Confirm Password'" name="con_password" />
          </div>

          <div class="d-grid gap-2">
            <input type="submit" href="indexlog.php" class="btn btn-login btn-lg reg-btn" role="button" name="submit">

            <a href="indexlog.php" class="btn log-button">Already Have an Account? Login</a>
        </form>
      </div>
    </div>
  </div>
  </div>

  <script src="script.js"></script>
</body>

</html>