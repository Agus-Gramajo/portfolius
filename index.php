<?php require('session.php'); ?>

<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Portfolio de proveedores interactivo</title>

  <!-- Bootstrap Core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom Fonts -->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">
  <link href="vendor/simple-line-icons/css/simple-line-icons.css" rel="stylesheet">

  <!-- Custom CSS -->
  <link href="css/stylish-portfolio.min.css" rel="stylesheet">

</head>

<body id="page-top">

  <!-- Navigation -->
  <a class="menu-toggle rounded" href="#">
    <i class="fas fa-bars"></i>
  </a>
  <nav id="sidebar-wrapper">
    <ul class="sidebar-nav">
      <li class="sidebar-brand">
        <a class="js-scroll-trigger" href="#" data-toggle="modal" data-target="#loginModal">Iniciar sesión</a>
      </li>
      <li class="sidebar-nav-item">
        <a class="js-scroll-trigger" href="#page-top">Home</a>
      </li>
      <li class="sidebar-nav-item">
        <a class="js-scroll-trigger" href="#about">About</a>
      </li>
      <li class="sidebar-nav-item">
        <a class="js-scroll-trigger" href="#services">Servicios</a>
      </li>
      <li class="sidebar-nav-item">
        <a class="js-scroll-trigger" href="#portfolio">Portfolio</a>
      </li>
      <li class="sidebar-nav-item">
        <a class="js-scroll-trigger" href="#" data-toggle="modal" data-target="#addProjectModal">Subí tu proyecto</a>
      </li>

      <li class="sidebar-nav-item">
        <a class="js-scroll-trigger" href="#contact">Contacto</a>
      </li>
    </ul>
  </nav>

  <!-- Header -->
  <header class="masthead d-flex">
    <div class="container text-center my-auto">
      <h1 class="mb-1">Portfolius</h1>
      <h3 class="mb-5">
        <em>Todos los proveedores IT en un solo lugar</em>
      </h3>
      <a class="btn btn-primary btn-xl js-scroll-trigger" href="#about">Saber mas</a>
    </div>
    <div class="overlay"></div>
  </header>

  <!-- About -->
  <section class="content-section bg-light" id="about">
    <div class="container text-center">
      <div class="row">
        <div class="col-lg-10 mx-auto">
          <h2>Portfolio de proveedores IT</h2>
          <p class="lead mb-5">Encontrá todos los proveedores IT en un solo sitio. Podés ver sus trabajos y contactarlos.</p>
          <a class="btn btn-dark btn-xl js-scroll-trigger" href="#services">¿Qué ofrecemos?</a>
        </div>
      </div>
    </div>
  </section>

  <!-- Services -->
  <section class="content-section bg-primary text-white text-center" id="services">
    <div class="container">
      <div class="content-section-heading">
        <h3 class="text-secondary mb-0">Servicios</h3>
        <h2 class="mb-5">¿Qué ofrecemos?</h2>
      </div>
      <div class="row">
        <div class="col-lg-3 col-md-6 mb-5 mb-lg-0">
          <span class="service-icon rounded-circle mx-auto mb-3">
            <i class="icon-screen-smartphone"></i>
          </span>
          <h4>
            <strong>Responsive</strong>
          </h4>
          <p class="text-faded mb-0">Looks great on any screen size!</p>
        </div>
        <div class="col-lg-3 col-md-6 mb-5 mb-lg-0">
          <span class="service-icon rounded-circle mx-auto mb-3">
            <i class="icon-pencil"></i>
          </span>
          <h4>
            <strong>Redesigned</strong>
          </h4>
          <p class="text-faded mb-0">Freshly redesigned for Bootstrap 4.</p>
        </div>
        <div class="col-lg-3 col-md-6 mb-5 mb-md-0">
          <span class="service-icon rounded-circle mx-auto mb-3">
            <i class="icon-like"></i>
          </span>
          <h4>
            <strong>Favorited</strong>
          </h4>
          <p class="text-faded mb-0">Millions of users
            <i class="fas fa-heart"></i>
            Start Bootstrap!
          </p>
        </div>
        <div class="col-lg-3 col-md-6">
          <span class="service-icon rounded-circle mx-auto mb-3">
            <i class="icon-mustache"></i>
          </span>
          <h4>
            <strong>Question</strong>
          </h4>
          <p class="text-faded mb-0">I mustache you a question...</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Callout -->
  <section class="callout">
    <div class="container text-center">
      <h2 class="mx-auto mb-5">Welcome to
        <em>your</em>
        next website!
      </h2>
      <a class="btn btn-primary btn-xl" href="https://startbootstrap.com/theme/stylish-portfolio/">Download Now!</a>
    </div>
  </section>

  <!-- Portfolio -->
  <section class="content-section" id="portfolio">
    <div class="container">
      <div class="content-section-heading text-center">
        <h3 class="text-secondary mb-0">Portfolio</h3>
        <h2 class="mb-5">Recent Projects</h2>
      </div>
      <div class="row no-gutters">
        <div class="col-lg-6">
          <a class="portfolio-item" href="#!">
            <div class="caption">
              <div class="caption-content">
                <div class="h2">Stationary</div>
                <p class="mb-0">A yellow pencil with envelopes on a clean, blue backdrop!</p>
              </div>
            </div>
            <img class="img-fluid" src="img/portfolio-1.jpg" alt="">
          </a>
        </div>
        <div class="col-lg-6">
          <a class="portfolio-item" href="#!">
            <div class="caption">
              <div class="caption-content">
                <div class="h2">Ice Cream</div>
                <p class="mb-0">A dark blue background with a colored pencil, a clip, and a tiny ice cream cone!</p>
              </div>
            </div>
            <img class="img-fluid" src="img/portfolio-2.jpg" alt="">
          </a>
        </div>
        <div class="col-lg-6">
          <a class="portfolio-item" href="#!">
            <div class="caption">
              <div class="caption-content">
                <div class="h2">Strawberries</div>
                <p class="mb-0">Strawberries are such a tasty snack, especially with a little sugar on top!</p>
              </div>
            </div>
            <img class="img-fluid" src="img/portfolio-3.jpg" alt="">
          </a>
        </div>
        <div class="col-lg-6">
          <a class="portfolio-item" href="#!">
            <div class="caption">
              <div class="caption-content">
                <div class="h2">Workspace</div>
                <p class="mb-0">A yellow workspace with some scissors, pencils, and other objects.</p>
              </div>
            </div>
            <img class="img-fluid" src="img/portfolio-4.jpg" alt="">
          </a>
        </div>
        <div class="col-lg-6">
          <a class="portfolio-item" href="#!">
            <div class="caption">
              <div class="caption-content">
                <div class="h2">Strawberries</div>
                <p class="mb-0">Strawberries are such a tasty snack, especially with a little sugar on top!</p>
              </div>
            </div>
            <img class="img-fluid" src="img/portfolio-3.jpg" alt="">
          </a>
        </div>
        <div class="col-lg-6">
          <a class="portfolio-item" href="#!">
            <div class="caption">
              <div class="caption-content">
                <div class="h2">Workspace</div>
                <p class="mb-0">A yellow workspace with some scissors, pencils, and other objects.</p>
              </div>
            </div>
            <img class="img-fluid" src="img/portfolio-4.jpg" alt="">
          </a>
        </div>

      </div>
    </div>
  </section>

  <!-- Call to Action -->
  <section class="content-section bg-primary text-white">
    <div class="container text-center">
      <h2 class="mb-4">The buttons below are impossible to resist...</h2>
      <a href="#!" class="btn btn-xl btn-light mr-4">Click Me!</a>
      <a href="#!" class="btn btn-xl btn-dark">Look at Me!</a>
    </div>
  </section>

  <!-- Map -->
  <div id="contact" class="map">
    <iframe src="https://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=Twitter,+Inc.,+Market+Street,+San+Francisco,+CA&amp;aq=0&amp;oq=twitter&amp;sll=28.659344,-81.187888&amp;sspn=0.128789,0.264187&amp;ie=UTF8&amp;hq=Twitter,+Inc.,+Market+Street,+San+Francisco,+CA&amp;t=m&amp;z=15&amp;iwloc=A&amp;output=embed"></iframe>
    <br />
    <small>
      <a href="https://maps.google.com/maps?f=q&amp;source=embed&amp;hl=en&amp;geocode=&amp;q=Twitter,+Inc.,+Market+Street,+San+Francisco,+CA&amp;aq=0&amp;oq=twitter&amp;sll=28.659344,-81.187888&amp;sspn=0.128789,0.264187&amp;ie=UTF8&amp;hq=Twitter,+Inc.,+Market+Street,+San+Francisco,+CA&amp;t=m&amp;z=15&amp;iwloc=A"></a>
    </small>
  </div>

  <!-- Footer -->
  <footer class="footer text-center">
    <div class="container">
      <ul class="list-inline mb-5">
        <li class="list-inline-item">
          <a class="social-link rounded-circle text-white mr-3" href="#!">
            <i class="icon-social-facebook"></i>
          </a>
        </li>
        <li class="list-inline-item">
          <a class="social-link rounded-circle text-white mr-3" href="#!">
            <i class="icon-social-twitter"></i>
          </a>
        </li>
        <li class="list-inline-item">
          <a class="social-link rounded-circle text-white" href="#!">
            <i class="icon-social-github"></i>
          </a>
        </li>
      </ul>
      <p class="text-muted small mb-0">Copyright &copy; Your Website 2020</p>
    </div>
  </footer>

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded js-scroll-trigger" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!--Log in modal-->
  <div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header border-bottom-0">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">
          <div class="form-title text-center">
            <h4>Login</h4>
          </div>
          <div class="d-flex flex-column text-center">
            <form>
              <div class="form-group">
                <input type="email" class="form-control" id="email1" placeholder="Your email address...">
              </div>
              <div class="form-group">
                <input type="password" class="form-control" id="password1" placeholder="Your password...">
              </div>
              <div class="my-4">
                <button type="button" class="col-2  btn btn-info btn-round">Login</button>
              </div>
            </form>

            <div class="text-center text-muted delimiter">or use a social network
            </div>
            <div class="d-flex justify-content-center social-buttons">
              <button type="button" class=" badge-pill m-1 btn btn-secondary btn-round" data-toggle="tooltip" data-placement="top" title="Twitter">
                <i class="fab fa-twitter"></i>
              </button>
              <button type="button" class="badge-pill m-1 btn btn-secondary btn-round" data-toggle="tooltip" data-placement="top" title="Facebook">
                <i class="fab fa-facebook"></i>
              </button>
              <button type="button" class=" badge-pill m-1 btn btn-secondary btn-round" data-toggle="tooltip" data-placement="top" title="Linkedin">
                <i class="fab fa-linkedin"></i>
              </button>
            </div>
          </div>
        </div>
        <div class="modal-footer d-flex justify-content-center">
          <div class="signup-section">Not a member yet? <a href="#a" class="text-info"> Sign Up</a>.</div>
        </div>
      </div>
    </div>
  </div>

  <!--Add project form-->
  <div class="modal fade" id="addProjectModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header border-bottom-0">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">
          <div class="form-title text-center">
            <h4>Subí tu proyecto</h4>
          </div>
          <div class="d-flex flex-column text-center">
            <form>
              <div class="form-group">
                <input type="email" class="form-control" id="email2" placeholder="Your email address...">
              </div>
              <div class="form-group">
                <input type="name" class="form-control" id="name1" placeholder="Your name...">
              </div>
              <div>
                <input type="file" name="file" id="submitImg1" accept="image/jpeg,image/jpg,.pdf">
              </div>
              <div>
                <textarea id="projectInfo" name="projectInfo" rows="4" placeholder="Contanos sobre tu proyecto...">
              </div>

              <div class="my-4">
                <button type="button" class="col-2  btn btn-info btn-round">Cargar</button>
              </div>
            </form>
          </div>
        </div>
        <div class="modal-footer d-flex justify-content-center">
          <div class="signup-section">Not a member yet? <a href="#a" class="text-info"> Sign Up</a>.</div>
        </div>
      </div>
    </div>
  </div>

  


  
  
  <script>
    $(document).ready(function() {
      $('#loginModal').modal('show');
      $(function() {
        $('[data-toggle="tooltip"]').tooltip()
      })
    });
  </script>

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Plugin JavaScript -->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for this template -->
  <script src="js/stylish-portfolio.min.js"></script>

</body>

</html>