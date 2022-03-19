<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
  <meta name="generator" content="Jekyll v3.8.5">
  <title>Gamify</title>

  <link rel="canonical" href="https://getbootstrap.com/docs/4.3/examples/dashboard/">

  <!-- Bootstrap core CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">


  <style>
    .bd-placeholder-img {
      font-size: 1.125rem;
      text-anchor: middle;
      -webkit-user-select: none;
      -moz-user-select: none;
      -ms-user-select: none;
      user-select: none;
    }

    @media (min-width: 768px) {
      .bd-placeholder-img-lg {
        font-size: 3.5rem;
      }
    }
  </style>
  <!-- Custom styles for this template -->
  <link href="../CSS/dashboard.css" rel="stylesheet">


  <?php
    require_once "../HTML/config.php";
    
    if($_SERVER['REQUEST_METHOD'] == "POST"){
      //$id = $_SESSION['user'];
      $sql1 = "SELECT prog FROM login";
      $result = $conn->query($sql1);
      $row = $result->fetch_assoc();
      $prog = $row["prog"];
      if($prog==0)
      {
        //echo'<script>alert("IT IS 0");</script>';
        header('Location: ../HTML/Lesson01.php');
      }
      elseif($prog==1)
      {
        //echo'<script>alert("IT IS 1");</script>';
        header('Location: ../HTML/Lesson02.php');
      }
      elseif($prog==2)
      {
        //echo'<script>alert("IT IS 1");</script>';
        header('Location: ../HTML/Lesson03.php');
      }
      elseif($prog==3)
      {
        //echo'<script>alert("IT IS 1");</script>';
        header('Location: ../HTML/Lesson04.php');
      }
      elseif($prog==4)
      {
        //echo'<script>alert("IT IS 1");</script>';
        header('Location: ../HTML/home.php');
      }
    }
  ?>
</head>

<body>
  <nav id="navbar" class="navbar navbar-dark fixed-top bg-dark flex-md-nowrap p-0 shadow">
    <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="#">School Board</a>
    <input class="form-control form-control-dark w-100" type="text" placeholder="Search" aria-label="Search">
    <ul class="navbar-nav px-3">
      <li class="nav-item text-nowrap">
        <a class="nav-link" href="#">Sign out</a>
      </li>
    </ul>
  </nav>

  <div class="container-fluid">
    <div class="row">
      <nav class="col-md-2 d-none d-md-block sidebar">
        <div class="sidebar-sticky">
          <ul class="nav flex-column">
            <li class="nav-item">
              <img class="rocketship" src="../Images/rocketship.svg" alt="">
              <a class="nav-link logo-text" href="#">STEM COURSES</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" href="#">
                <!-- <span data-feather="home"></span> -->
                Home <span class="sr-only">(current)</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">
                <!-- <span data-feather="file"></span> -->
                Progress and Statistics
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="../HTML/home.html">
                <!-- <span data-feather="file"></span> -->
                Go Back
              </a>
            </li>
            <!-- <li class="nav-item">
            <a class="nav-link" href="#">
               <span data-feather="shopping-cart"></span> 
              Progress
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
               <span data-feather="users"></span> 
              Statistics
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
               <span data-feather="bar-chart-2"></span> 
              Settings
            </a>
          </li> -->
          </ul>

          <!-- <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
          <span>Saved reports</span>
          <a class="d-flex align-items-center text-muted" href="#">
            <span data-feather="plus-circle"></span>
          </a>
        </h6>
        <ul class="nav flex-column mb-2">
          <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="file-text"></span>
              Current month
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="file-text"></span>
              Last quarter
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="file-text"></span>
              Social engagement
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="file-text"></span>
              Year-end sale
            </a>
          </li>
        </ul> -->
        </div>
      </nav>

      <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
        <!-- removed bottom border class here -->
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3">
          <h1 class="student-name h2"><span><img class="student-avatar" src="../Images/cat.svg" alt="cat avatar">Hi
              Student!</h1></span>
          <div class="btn-toolbar mb-2 mb-md-0">
            <div class="btn-group mr-2">
              <button type="button" class="btn btn-sm"><span><img class="notification-icons"
                    src="../Images/paper-plane.svg" alt="paper plane SVG"></span>2</button>
              <button type="button" class="btn btn-sm"><span><img class="notification-icons" src="../Images/diamond.svg"
                    alt="diamond SVG"></span>160</button>
            </div>
            <button type="button" class="btn btn-sm dropdown-toggle">
              Student Acct.
            </button>
          </div>
        </div>

        <div class="student-content">
          <div class="daily-plan">
            <h4>Daily Plan</h4>
            <div class="math student-content-tiles card-text">
              <h5>Math</h5>
              <p>1023 Solutions</p>
              <a href="#"><button type="button" name="button" class="daily-plan-btn math-btn">Start</button></a>
            </div>
            <div class="reading student-content-tiles card-text">
              <h5>Reading</h5>
              <p>879 Words</p>
              <a href="#"><button type="button" name="button" class="daily-plan-btn reading-btn">Start</button></a>
            </div>
            <div class="science student-content-tiles card-text">
              <h5>HTML</h5>
              <p>Next: CSS</p>
              <a href="#"><button type="button" name="button" class="daily-plan-btn science-btn">Start</button></a>
            </div>
          </div>
          <div class="achievements">
            <h4>Achievements</h4>
            <div class="achievements-card student-content-tiles">
              <ul>
                <li><img class="award-icons" src="../Images/lotus-flower.svg" alt="lotus flower SVG"></li>
                <li><img class="award-icons" src="../Images/fire.svg" alt="fire SVG"></li>
                <li><img class="award-icons" src="../Images/stars.svg" alt="stars SVG"></li>
                <li><img class="award-icons" src="../Images/laptop.svg" alt="laptop SVG"></li>
                <li><img class="award-icons" src="../Images/worldwide.svg" alt="planet Earth SVG"></li>
                <li><img class="award-icons" src="../Images/sunny.svg" alt="sun SVG"></li>
              </ul>
            </div>
          </div>
          <div class="lessons">
            <h4>Lessons</h4>
            <div class="lessons-card  student-content-tiles card-text">
              <h5>STEM Training</h5>
              <p>Next: Coding Basics</p>
              <div class="box-progress-wrapper">
                <p class="box-progress-header">Progress</p>
                <div class="box-progress-bar">
                  <span class="box-progress" style="width: 20%; background-color: #df3670"></span>
                </div>
                <p class="box-progress-percentage">20%</p>
              </div>
              <form action="" method="POST">
              <a href="#"><button type="submit" name="button" class="daily-plan-btn lessons-btn">Continue</button></a></form>
            </div>
          </div>
          <div class="statistics">
            <h4>Statistics</h4>
            <div class="statistics-card student-content-tiles">
              <div class="">
                <canvas id="bar-chart" width="255" height="182"></canvas>
              </div>
            </div>
          </div>
        </div>
      </main>
    </div>
  </div>
  <footer>
    <div>Icons made by <a href="https://www.flaticon.com/authors/freepik" title="Freepik">Freepik</a> from <a
        href="https://www.flaticon.com/" title="Flaticon">www.flaticon.com</a></div>
    <div>Icons made by <a href="https://www.flaticon.com/authors/smashicons" title="Smashicons">Smashicons</a> from <a
        href="https://www.flaticon.com/" title="Flaticon">www.flaticon.com</a></div>
    <div>Icons made by <a href="https://www.flaticon.com/authors/freepik" title="Freepik">Freepik</a> from <a
        href="https://www.flaticon.com/" title="Flaticon">www.flaticon.com</a></div>
    <div>Icons made by <a href="https://www.flaticon.com/authors/freepik" title="Freepik">Freepik</a> from <a
        href="https://www.flaticon.com/" title="Flaticon">www.flaticon.com</a></div>
    <div>Icons made by <a href="https://www.flaticon.com/authors/freepik" title="Freepik">Freepik</a> from <a
        href="https://www.flaticon.com/" title="Flaticon">www.flaticon.com</a></div>
    <div>Icons made by <a href="https://www.flaticon.com/authors/freepik" title="Freepik">Freepik</a> from <a
        href="https://www.flaticon.com/" title="Flaticon">www.flaticon.com</a></div>
    <div>Icons made by <a href="https://www.flaticon.com/authors/srip" title="srip">srip</a> from <a
        href="https://www.flaticon.com/" title="Flaticon">www.flaticon.com</a></div>
    <div>Icons made by <a href="https://www.flaticon.com/authors/freepik" title="Freepik">Freepik</a> from <a
        href="https://www.flaticon.com/" title="Flaticon">www.flaticon.com</a></div>
    <div>Icons made by <a href="https://www.flaticon.com/authors/turkkub" title="turkkub">turkkub</a> from <a
        href="https://www.flaticon.com/" title="Flaticon">www.flaticon.com</a></div>
    <div>Icons made by <a href="https://www.flaticon.com/authors/freepik" title="Freepik">Freepik</a> from <a
        href="https://www.flaticon.com/" title="Flaticon">www.flaticon.com</a></div>
    <div>Icons made by <a href="https://www.flaticon.com/authors/freepik" title="Freepik">Freepik</a> from <a
        href="https://www.flaticon.com/" title="Flaticon">www.flaticon.com</a></div>
    <div>Icons made by <a href="https://www.flaticon.com/authors/freepik" title="Freepik">Freepik</a> from <a
        href="https://www.flaticon.com/" title="Flaticon">www.flaticon.com</a></div>
    <div>Icons made by <a href="https://www.flaticon.com/authors/freepik" title="Freepik">Freepik</a> from <a
        href="https://www.flaticon.com/" title="Flaticon">www.flaticon.com</a></div>
    <div>Icons made by <a href="https://www.flaticon.com/authors/freepik" title="Freepik">Freepik</a> from <a
        href="https://www.flaticon.com/" title="Flaticon">www.flaticon.com</a></div>
  </footer>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
    integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
    crossorigin="anonymous"></script>
  <script>window.jQuery || document.write('<script src="/docs/4.3/assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
  <script src="/docs/4.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-xrRywqdh3PHs8keKZN+8zzc5TX0GRTLCcmivcbNJWm2rs5C8PRhcEn3czEjhAO9o"
    crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/feather-icons/4.9.0/feather.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.3/Chart.min.js"></script>
  <script src="../JavaScript/dashboard.js"></script>
</body>

</html>