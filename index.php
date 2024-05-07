<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>WEBDEV - ACTIVITY</title>
    <link href="https://cdn.lineicons.com/4.0/lineicons.css" rel="stylesheet" />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ"
      crossorigin="anonymous"
    />
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
      crossorigin="anonymous"
    ></script>
    <link rel="stylesheet" href="stylehome.css" />
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
                          src="logoimage.png"
                          class="img-fluid logoheader-img"
                          alt="Logo"
                        />
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-4">
                  <div class="grid-item">
                    <div class="username-container d-flex align-items-center">
                      <img
                        src="idpicusername.jpg"
                        class="username-icon"
                        alt="Username Icon"
                      />
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-6 text-end">
            <a href="indexlog.html" class="btn logout-button">Logout</a>
          </div>
        </div>
      </div>
    </header>

    <div class="wrapper">
      <aside id="sidebar">
        <ul class="sidebar-nav">
          <li class="sidebar-item">
            <a href="#" class="sidebar-link active" id="dashboard-link">
              <div class="sidebar-content">
                <i class="lni dashboard-style"></i>
                <span class="sidebar-text">Dashboard</span>
              </div>
            </a>
          </li>
          <li class="sidebar-item">
            <a
              href="#"
              class="sidebar-link collapsed has-dropdown"
              data-bs-toggle="collapse"
              data-bs-target="#auth"
              aria-expanded="false"
              aria-controls="auth"
            >
              <div class="profile-icon">
                <i class="lni profile-style"></i>
                <span class="sidebar-text">Profile</span>
                <i class="lni lni-chevron-down icon-dropdown"></i>
              </div>
            </a>
            <ul
              id="auth"
              class="sidebar-dropdown list-unstyled collapse"
              data-bs-parent="#sidebar"
            >
              <li class="sidebar-item">
                <a href="#" class="sidebar-link">View Profile</a>
              </li>
              <li class="sidebar-item">
                <a href="#" class="sidebar-link">Update Profile</a>
              </li>
            </ul>
          </li>
        </ul>


      </aside>
      <footer class="ftr-con">        <div class="sidebar-footer ">
        <i class="lni lni-at"></i>
        <p>© 2024. All rights reserved.</p>
      </div></footer>
    </div>
    <script src="home.js"></script>
  </body>
</html>
