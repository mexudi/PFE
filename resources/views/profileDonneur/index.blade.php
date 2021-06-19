<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">


  <title>Profile</title>
 

  <!-- Favicons -->


  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="profileDonneur/assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="profileDonneur/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="profileDonneur/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="profileDonneur/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="profileDonneur/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="profileDonneur/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="profileDonneur/assets/css/style.css" rel="stylesheet">
  <script src="https://code.iconify.design/1/1.0.7/iconify.min.js"></script>
  <script src="https://kit.fontawesome.com/8ef90da84f.js" crossorigin="anonymous"></script>
</head>

<body>

  
  <!-- ======= Mobile nav toggle button ======= -->
  <i class="bi bi-list mobile-nav-toggle  "></i>

  <!-- ======= Header ======= -->
  <header id="header1">
    <div class="d-flex flex-column">

      <div class="profile">
      
          <img src="profileDonneur/assets/img/prf.png" alt="" class="img-fluid rounded-circle">
      
        <h1 class="text-light"><a href="index.html">{{$user->profile->prenom}} {{$user->profile->nom}}</a></h1>   
      </div>

      <nav id="navbar" class="nav-menu navbar">
        <ul>
           
        <li><a href="/" class="nav-link scrollto"><i class="bx bx-home"></i> <span>Accueil</span></a></li>
          <li><a href="#about" class="nav-link scrollto"><i class="bx bx-user"></i> <span>Profile medical</span></a></li>
          <li><a href="#resume" class="nav-link scrollto"><i class="bx bx-file-blank"></i> <span>Bilan</span></a></li>
          <li><a href="#services" class="nav-link scrollto"><i class="bx bx-server"></i> <span>Historique</span></a></li>
          <li><a href="#parametre" class="nav-link scrollto"><span class="iconify i" data-icon="bytesize:settings" data-inline="false"></span></i> <span>Paramètre</span></a></li>
          
          <li>  <a  href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                                      document.getElementById('logout-form').submit();">
                                      <i class=" bx bx-log-out "></i>
                        {{ __('Se Déconnecter') }}
                    </a></li>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>

          
          
        </ul>
      </nav><!-- .nav-menu -->
    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex flex-column justify-content-center align-items-center">
    <div class="hero-container" data-aos="fade-in">
      <h1>{{$user->profile->prenom}} {{$user->profile->nom}}</h1>
      <p>Je suis <span class="typed" data-typed-items=" Maroccain, Jeune, Donneur"></span></p>
    </div>
  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= About Section ======= -->
   <!-- End About Section -->

   <section id="about" class="about">
    <div class="container">

      <div class="section-title">
        <h2>Profile Donneur</h2>
      </div>

      <div class="row">
   
        <div class="col-lg-8 pt-4 pt-lg-0 content" >
          <div class="container-fluid ">
            <div class=" mb-5 d-flex justify-content-between">
              <h3>Information personnel :</h3>
              <!-- Button trigger modal Add -->
            
            </div>
          </div>

           
         
          <div class="row">
            <div class="col-lg-6">
              <ul>
                <li><i class="bi bi-chevron-right"></i> <strong>Nom et Prenom:</strong> <span>{{$user->profile->prenom}} {{$user->profile->nom}}</span></li>
                <li><i class="bi bi-chevron-right"></i> <strong>CIN:</strong> <span>{{$user->profile->cin}}</span></li>
                <li><i class="bi bi-chevron-right"></i> <strong>Date de naissance:</strong> <span></span></li>
               
               
              </ul>
            </div>
            <div class="col-lg-6">
              <ul>
                <li><i class="bi bi-chevron-right"></i> <strong>Tel</strong> <span>{{$user->profile->tel}}</span></li>
                <li><i class="bi bi-chevron-right"></i> <strong>Ville:</strong> <span>{{$user->profile->ville}}</span></li>
              </ul>
            </div>
            <div class="mb-3">
            
            </div>
             <!-- Modal Edit -->
             <div class="modal fade" id="EditModel" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Information personnel</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body">
                  <form method="POST" action="{{ url('/profile/1/update') }}">
                 
                    <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annuler</button>
                    <button type="submit" class="btn btn-primary">Enregistrer</button>
                  </div>
                  </div>
                  
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="row">
        
        <div class="col-lg-8 pt-4 pt-lg-0 content" data-aos="fade-left">
          <h3>Information medical :</h3>
          <div class="row">
            <div class="col-lg-6">
              <ul>
                <li><i class="bi bi-chevron-right"></i> <strong>Type de sang:</strong> <span>{{$user->profile->type_sang}}</span></li>
                <li><i class="bi bi-chevron-right"></i> <strong>Maladies:</strong> <span></span></li>
                <div>
                  <li style="padding-left: 25px;"><i class="fas fa-plus-circle"></i> <strong>Les maladies genetiques de sang:</strong><br> <span></span></li>
                  <li style="padding-left: 25px;"><i class="fas fa-plus-circle"></i> <strong>Les maladies genetiques de sang:</strong><br> <span></span></li>
                  <li style="padding-left: 25px;"><i class="fas fa-plus-circle"></i> <strong>Les maladies genetiques de sang:</strong><br> <span></span></li>
                </div>
              </ul>
              <!-- Button trigger modal -->
              <div style="padding-left: 25px;">
                <button type="button" class="btn " data-bs-toggle="modal" data-bs-target="#exampleModal" style="background-color: #DC2626; color:white; font-weight: 600;">
                  Ajouter
                </button>
              </div>

             
            </div>
          
          </div>
           
        </div>
      </div>
      
    </div>
    <!-- Modal Ajouter des maladies-->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                    <select class="form-select" aria-label="Default select example">
                      <option selected>-----</option>
                      <option value="1">Les maladies genetiques de sang</option>
                      <option value="2">Anémie sévere</option>
                      
                    </select>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                      <button type="button" class="btn " style="background-color: #DC2626; color:white;">Save changes</button>
                    </div>
                  </div>
                </div>
              </div>
  </section><!-- End About Section -->

   

    
    <!-- ======= Resume Section ======= -->
    <section id="resume" class="resume">
      <div class="container">

        <div class="section-title">
          <h2>Bilan médical</h2>
        
        </div>

        <div class="card text-center">
  <div class="card-header"></div>
  <div class="card-body">
    <h5 class="card-title">Bilan sanguin</h5>
    <p class="card-text">
      Vous pouvez voir votre bilan sanguin (cliquer sur voir) et de le telecharger(cliquer sur telecharger).
    </p>
    <a href="#" class="btn btn-primary">VOIR</a>
    <a href="#" class="btn" style="background-color: #DC2626; color:white;">TELECHARGER</a>
  </div>
  <div class="card-footer text-muted"></div>
</div>

      </div>
    </section><!-- End Resume Section -->

  

    <!-- ======= Services Section ======= -->
    <section id="services" class="services">
      <div class="container">

        <div class="section-title">
          <h2>Historique</h2>
         
        </div>

        <table class="table">
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">Nom et Prenom</th>
              <th scope="col">Date</th>
              <th scope="col">Location</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <th scope="row">1</th>
              <td>Admin</td>
              <td>10/10/2020</td>
              <td>av. Abdelkhalek Torres, Hôpital civil Saniat R'mel 93000 Tétouan, Maroc</td>
            </tr>
            <tr>
              <th scope="row">2</th>
              <td>Admin</td>
              <td>14/02/2021</td>
              <td>av. Abdelkhalek Torres, Hôpital civil Saniat R'mel 93000 Tétouan, Maroc</td>
            </tr>
            <tr>
              <th scope="row">3</th>
              <td>Admin</td>
              <td>11/06/2021</td>
              <td>av. Abdelkhalek Torres, Hôpital civil Saniat R'mel 93000 Tétouan, Maroc</td>
            </tr>
          </tbody>
        </table>
  

  
  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="profileDonneur/assets/vendor/aos/aos.js"></script>
  <script src="profileDonneur/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="profileDonneur/assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="profileDonneur/assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="profileDonneur/assets/vendor/php-email-form/validate.js"></script>
  <script src="profileDonneur/assets/vendor/purecounter/purecounter.js"></script>
  <script src="profileDonneur/assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="profileDonneur/assets/vendor/typed.js/typed.min.js"></script>
  <script src="profileDonneur/assets/vendor/waypoints/noframework.waypoints.js"></script>

  <!-- Template Main JS File -->
  <script src="profileDonneur/assets/js/main.js"></script>

</body>

</html>