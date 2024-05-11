<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css"
      integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="stylelog.css" />
    <title>WEBDEV - ACTIVITY</title>
  </head>
  <body>

    <header class="container-fluid py-3 fixed-top">

      <div class="container">
        <div class="row align-items-center">
          <div
            class="col-md-6 d-flex justify-content-center align-items-center"
          >
            <div class="top-box">
              <div class="row">
                <div class="col-4">
                  <div class="grid-item">
                    <div class="featured-image mb-3">
                      <div class="logoheader-container">
                        <img
                          src="logoito.png"
                          class="img-fluid logoheader-img"
                          alt="Logo"
                        />
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-6 text-end">
            <a href="indexlog.php" class="btn log-button">Login</a>
            <a href="indexreg.php" class="btn register-button">Register</a>
          </div>
        </div>
      </div>
    </header>

    <div
      class="container d-flex justify-content-center align-items-center min-vh-100"
    >

      <div class="row border rounded-4 p-3 bg-white shadow box-area">

        <div
          class="col-md-6 d-flex justify-content-center align-items-center flex-column left-box p-0"
        >
          <div class="featured-image mb-3">
            <img
              src="juancafe.png"
              class="img-fluid"
              style="width: 230px"
            />
          </div>
        </div>
      
        <div class="col-md-6 right-box">
          <div class="row align-items-center">
            <div class="header-text mb-4">
              <h2 class="title-h2">WELCOME GUEST!</h2>
            </div>
          </div>
          <form action="">
          <div class="input-group mb-3">
            <input
              type="email"
              class="form-control form-control-lg bg-light fs-6 custom-input"
              placeholder="Email address" name ="email" required
            />
          </div>
          <div class="input-group mb-1">
            <input
              type="password"
              class="form-control form-control-lg bg-light fs-6 custom-input"
              placeholder="Password" name="password" required
            />
          </div>
          <div class="input-group mb-5 d-flex justify-content-between check-box">
            <div class="form-check">
              <input
                type="checkbox"
                class="form-check-input"
                id="formCheck"
              />
              <label for="formCheck" class="form-check-label text-secondary"
                ><small>Remember Me</small></label
              >
            </div>
          </div>
          <div class="input-group mb-3 custom-input-group text-center">
            <input type="submit" class="btn btn-lg fs-6 login-button" name="login" value="Login">
          </div>   
          </form>       
          </div>
        </div>
      </div>
    </div>

    <script src="script.js"></script>
  </body>
</html>
