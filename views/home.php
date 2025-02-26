<?php
session_start();

$isLoggedIn = isset($_SESSION['username']);


?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>English Focused School - Home</title>
  <!-- Bootstrap CSS from CDN -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- Custom CSS -->
  <style>
    /* Ensure carousel images fill the container */
    .carousel-item {
      height: 500px;
    }
    .carousel-item img {
      object-fit: cover;
      height: 100%;
      width: 100%;
    }
    /* Scroll to top button styling */
    #scrollTopBtn {
      position: fixed;
      bottom: 20px;
      right: 20px;
      display: none;
      z-index: 99;
    }
  </style>
</head>
<body>
  <!-- Navigation Bar -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top">
    <div class="container">
      <a class="navbar-brand" href="#">Focused School</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
              aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item">
            <a class="nav-link active" href="#">Home</a>
          </li>
          <!-- Dropdown for About Us -->
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="aboutDropdown" role="button" data-bs-toggle="dropdown"
               aria-expanded="false">
              About Us
            </a>
            <ul class="dropdown-menu" aria-labelledby="aboutDropdown">
              <li><a class="dropdown-item" href="#mission">Our Mission</a></li>
              <li><a class="dropdown-item" href="#history">History</a></li>
            </ul>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#admissions">Admissions</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#contact">Contact</a>
          </li>
          <!-- Modal Trigger -->
          <?php if (isset($_SESSION['username'])): ?>
          <li class="nav-item">
            <span class="nav-link">Welcome, <?php echo htmlspecialchars($_SESSION['username']); ?>!</span>
            </li>
            <li class="nav-item">
                <form action="">
                    <a class="nav-link" href="../controller/logout.php">Logout</a>
                </form>
            </li>
          <?php else: ?>
            <li class="nav-item">
                <a class="nav-link" href="#" data-bs-toggle="modal" data-bs-target="#signupModal">Sign Up</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="login.php">Login</a>
            </li>
        <?php endif; ?>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Hero Carousel -->
  <div id="heroCarousel" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
      <!-- First Slide -->
      <div class="carousel-item active">
      <img src="https://smkn4bdg.sch.id/uploads/2024-07-05-16-13-10-mekanisme-daftar-ulang-ppdb-tahap-2.png" alt="School Campus" class="object-fit-contain">
      <div class="carousel-caption d-none d-md-block">
          <h5>Welcome to English Focused School</h5>
          <p>Where excellence meets language learning.</p>
        </div>
      </div>
      <!-- Second Slide -->
      <div class="carousel-item">
        <img src="https://smkn4bdg.sch.id/uploads/2024-06-24-09-51-03-ppdb-smkn-4-bandung-tahap-2.jpg"  alt="Classroom" class="object-fit-cover">
        <div class="carousel-caption d-none d-md-block">
          <h5>Innovative Learning</h5>
          <p>Dynamic classrooms and state-of-the-art facilities.</p>
        </div>
      </div>
      <!-- Third Slide -->
      <div class="carousel-item">
        <img src="https://smkn4bdg.sch.id/uploads/2023-08-09-13-43-13-tracer-study-untuk-lulusan-2022.png" class="object-fit-contain" alt="Library">
        <div class="carousel-caption d-none d-md-block">
          <h5>Rich Cultural Experience</h5>
          <p>Embracing diverse cultures and language traditions.</p>
        </div>
      </div>
    </div>
    <!-- Carousel Controls -->
    <button class="carousel-control-prev" type="button" data-bs-target="#heroCarousel" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#heroCarousel" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>

  <!-- Main Content -->
  <div class="container my-5">
    <!-- About Section -->
    <section id="about">
      <h2 class="mb-4">About Our School</h2>
      <p>Our school is dedicated to providing an immersive English language education alongside a rich cultural curriculum. We foster an environment of academic excellence and personal growth.</p>
      <button id="readMoreBtn" class="btn btn-primary">Read More</button>
      <div id="moreContent" style="display: none; margin-top: 20px;">
        <p>Established in 1990, our institution has been a cornerstone of community education, blending traditional methods with modern teaching practices. Our experienced educators are committed to nurturing each student's unique talents and potential.</p>
      </div>
    </section>
    
    <!-- Admissions Section -->
    <section id="admissions" class="mt-5">
      <h2 class="mb-4">Admissions</h2>
      <p>We welcome prospective students to join our thriving academic community. For more details about the admission process, deadlines, and requirements, please visit our Admissions page.</p>
      <a href="#" class="btn btn-success">Learn More</a>
    </section>
    
    <!-- Latest News Section -->
    <section id="news" class="mt-5">
      <h2 class="mb-4">Latest News</h2>
      <div class="row">
        <div class="col-md-4">
          <div class="card mb-3">
            <img src="https://smkn4bdg.sch.id/uploads/2023-09-05-15-18-25-pelaksanaan-sertifikasi-internasional-kemampuan-bahasa-inggris-toeic-2023-di-smkn-4-bandung.jpg" class="card-img-top" alt="Annual Day">
            <div class="card-body">
              <h5 class="card-title">School Annual Day</h5>
              <p class="card-text">Join us for our annual celebration of academic and extracurricular achievements.</p>
              <a href="#" class="btn btn-primary">Read More</a>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card mb-3">
            <img src="https://smkn4bdg.sch.id/uploads/2023-09-05-15-18-25-pelaksanaan-sertifikasi-internasional-kemampuan-bahasa-inggris-toeic-2023-di-smkn-4-bandung.jpg" class="card-img-top" alt="Guest Lecture">
            <div class="card-body">
              <h5 class="card-title">Guest Lecture Series</h5>
              <p class="card-text">Engaging sessions with experts to broaden our perspectives on education.</p>
              <a href="#" class="btn btn-primary">Read More</a>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card mb-3">
            <img src="https://smkn4bdg.sch.id/uploads/2023-09-05-15-18-25-pelaksanaan-sertifikasi-internasional-kemampuan-bahasa-inggris-toeic-2023-di-smkn-4-bandung.jpg" class="card-img-top" alt="Library Opening">
            <div class="card-body">
              <h5 class="card-title">New Library Opening</h5>
              <p class="card-text">Discover our newly inaugurated library with modern facilities and extensive resources.</p>
              <a href="#" class="btn btn-primary">Read More</a>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>

  <!-- Scroll to Top Button -->
  <button id="scrollTopBtn" class="btn btn-secondary">Top</button>

  <!-- Signup Modal -->
  <div class="modal fade" id="signupModal" tabindex="-1" aria-labelledby="signupModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="signupModalLabel">Sign Up</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form>
            <div class="mb-3">
              <label for="name" class="form-label">Name</label>
              <input type="text" class="form-control" id="name" placeholder="Enter your name">
            </div>
            <div class="mb-3">
              <label for="email" class="form-label">Email address</label>
              <input type="email" class="form-control" id="email" placeholder="name@example.com">
            </div>
            <div class="mb-3">
              <label for="course" class="form-label">Course of Interest</label>
              <select class="form-select" id="course">
                <option selected>Choose...</option>
                <option value="english">English Language</option>
                <option value="literature">Literature</option>
                <option value="culture">Cultural Studies</option>
              </select>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
        </div>
      </div>
    </div>
  </div>

  <!-- Footer -->
  <footer class="bg-dark text-white py-4">
    <div class="container">
      <div class="row">
        <!-- Contact Info -->
        <div class="col-md-4">
          <h5>Contact Us</h5>
          <p>123 Main Street<br>City, Country</p>
          <p>Email: info@englishfocusedschool.com</p>
        </div>
        <!-- Quick Links -->
        <div class="col-md-4">
          <h5>Quick Links</h5>
          <ul class="list-unstyled">
            <li><a href="#" class="text-white">About Us</a></li>
            <li><a href="#" class="text-white">Admissions</a></li>
            <li><a href="#" class="text-white">Events</a></li>
            <li><a href="#" class="text-white">News</a></li>
          </ul>
        </div>
        <!-- Social Media -->
        <div class="col-md-4">
          <h5>Follow Us</h5>
          <a href="#" class="text-white me-2">Facebook</a>
          <a href="#" class="text-white me-2">Twitter</a>
          <a href="#" class="text-white">Instagram</a>
        </div>
      </div>
      <div class="text-center mt-3">
        <p>&copy; <?php echo date("Y"); ?> English Focused School. All rights reserved.</p>
      </div>
    </div>
  </footer>

  <!-- Bootstrap JS Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
  <!-- Custom JavaScript -->
  <script>
    // Toggle Read More content in About section
    document.getElementById('readMoreBtn').addEventListener('click', function() {
      var moreContent = document.getElementById('moreContent');
      if (moreContent.style.display === "none") {
        moreContent.style.display = "block";
        this.textContent = "Read Less";
      } else {
        moreContent.style.display = "none";
        this.textContent = "Read More";
      }
    });

    // Show Scroll to Top button on scroll
    var scrollTopBtn = document.getElementById('scrollTopBtn');
    window.onscroll = function() {
      if (document.body.scrollTop > 200 || document.documentElement.scrollTop > 200) {
        scrollTopBtn.style.display = "block";
      } else {
        scrollTopBtn.style.display = "none";
      }
    };

    // Smooth scroll to top
    scrollTopBtn.addEventListener('click', function() {
      window.scrollTo({top: 0, behavior: 'smooth'});
    });
  </script>
</body>
</html>
