<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">


  <title>PFE</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,600,600i,700,700i" rel="stylesheet">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
  <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Ninestars - v4.1.0
  * Template URL: https://bootstrapmade.com/ninestars-free-bootstrap-3-theme-for-creative/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center">
    <div class="container d-flex align-items-center justify-content-between">

      <div class="logo">
        <h1 class="text-light"><a href="index.html"><span>Blood App</span></a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
      </div>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="#hero">Accueil</a></li>
          <li><a class="nav-link scrollto" href="#services">Services</a></li>
          <li><a class="nav-link scrollto" href="#about">A propos</a></li>
          <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
          @guest
            @if (Route::has('login'))
              <li><a class="getstarted scrollto" href="{{url('/login')}}">Sign in  </a></li>
            @endif
            @if (Route::has('register'))
              <li><a class="getstarted scrollto" href="{{url('/register')}}">Sign up</a></li>
            @endif
            @else
              <li class="nav-item dropdown">
                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                    {{ Auth::user()->name }}
                </a>

                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="{{url('/profil')}}" style="color: black;">Profil</a>
                    <a class="dropdown-item" href="{{url('/user/profile')}}" style="color: black;">Paramétre</a>
                    <a class="dropdown-item" href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                                      document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </div>
              </li>
          @endguest
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">

    <div class="container">
      <div class="row gy-4">
        <div class="col-lg-6 order-2 order-lg-1 d-flex flex-column justify-content-center">
          <h1>Anybody can give blood with smart donnation</h1>
          <h2>quand vous faites un don de sang , votre sang circule dans l'érection d'une autre<br> personne.</h2>
          <div>
            <a href="#" class="btn-get-started scrollto" data-bs-toggle="modal" data-bs-target="#exampleModal">Rendez vous</a>

            <!-- la popup de rendez-vous -->
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog">
                   <div class="modal-content">
                       <div class="modal-header">
                             <h5 class="modal-title" id="exampleModalLabel">Prendre un rendez-vous</h5>
                                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">

               <div class="mb-3">
                <label for="name" class="form-label">Nom</label>
                <input  type="text" class="form-control" name="name" id="name" placeholder="Entrer votre nom ">
                 @error('name') <span class="text-danger">{{ $message }}</span> @enderror
                 </div>

                  <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input  type="text" class="form-control" name="place" id="place" placeholder="Entrer votre email">
                @error('email') <span class="text-danger">{{ $message }}</span> @enderror
                  </div>



                <div class="mb-3">
              <label for="date" class="form-label">Date</label>
              <input value="{{old('date',$event->date ?? null)}}" type="date" class="form-control" name="date" id="date">
              @error('date') <span class="text-danger">{{ $message }}</span> @enderror
              </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fermer</button>
        <button type="button" class="btn btn-primary">Enregistrer</button>
      </div>
    </div>
  </div>
</div>

        <!--  Fin de la popup de rendez-vous -->
          </div>
        </div>
        <div class="col-lg-6 order-1 order-lg-2 hero-img">
          <img src="assets/img/blood.png" class="img-fluid animated" alt="">
        </div>
      </div>
    </div>

  </section><!-- End Hero -->

  <main id="main">

   <!-- ======= About Section ======= -->
   <section id="about" class="about">
      <div class="container">
      <div class="section-title">
        <p data-aos="fade-up">Prochain événement</p>
      </div>
        <div class="row justify-content-between">
          <div class="col-lg-5 d-flex align-items-center justify-content-center about-img">
            <img src="assets/img/blood2.png" class="img-fluid" alt="" data-aos="zoom-in">
          </div>
          <div class="col-lg-6 pt-5 pt-lg-0 mt-4" data-aos="fade-up" data-aos-delay="100">
            
            <div class="card mb-3" style="width: 500px;">
              <div class="row no-gutters">
                <div class="col-12">
                  <div class="card-body">
                    <h5 class="card-title" style="font-weight: 700;">{{$event->name}} </h5>
                    <p class="card-text" style="font-size: 18px;"><i class="fas fa-map-marker-alt" style="color: red; font-size:15px;"></i>  <small> {{$event->place}} </small></p>
                    <p class="card-text" style="font-size: 18px;"><i class="fas fa-calendar-alt" style="color: red; font-size:15px;"></i><small class="text-muted"> {{$event->date}} </small></p>
                    <p class="card-text" style="font-size: 18px;"><small class="text-muted"> {{$event->description}} <div class="text-info"> Pour plus des infos : +212XXXXXXXXX</div></small></p>
                    <!-- Button trigger modal -->
                    <button type="button" class="btn " data-bs-toggle="modal" data-bs-target="#exampleModal" style="background-color: #eb1e4b; color:#fff; float:right; margin-bottom:8px;">
                      Participer
                    </button>

                    
                  </div>
                </div>
              </div>
            </div>
           
            
          </div>
          <!-- Modal -->
          <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                  @include('admin.event.home.participate')
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                  <button type="button" class="btn btn-primary">Save changes</button>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>
    </section><!-- End About Section -->

















  
<!-- ======= Services Section ======= -->
<section id="services" class="services section-bg" >
  <div class="container" data-aos="fade-up">

    <div class="section-title">
      <h2>Services</h2>
      <p>découvrir les services que nous offrons</p>
    </div>

    <div class="row" >
      <div class="col-md-6 col-lg-3 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
        <div class="icon-box">
          <div class="icon"><i class="bx bx-tachometer"></i></div>
          <h4 class="title"><a href=""> Prendre un rendez-vous</a></h4>
          <p class="description">  la donnation de sang n'as jamais été facile comme aujourd'hui prendre 
            un rendez vous dés maintemant!</p>
        </div> 
      </div>

      <div class="col-md-6 col-lg-3 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="200">
        <div class="icon-box">
          <div class="icon"><i class="bx bx-file"></i></div>
          <h4 class="title"><a href=""></a>avoir votre billan sanguin</h4>
          <p class="description"> vous avez donnez de sang? génial! prennez votre billan sanguin et
             connaissez plus sur votre état sanitaire  </p>  
             
        </div>
      </div>
      
      <div class="col-md-6 col-lg-3 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="300">
        <div class="icon-box">
          <div class="icon"><i class="bx bxl-dribbble"></i></div>
          <h4 class="title"><a href="">Magni Dolores</a></h4>
          <p class="description">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt
            mollit anim</p>
        </div>
      </div>  
      

      <div class="col-md-6 col-lg-3 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="400">
        <div class="icon-box">
          <div class="icon"><i class="bx bx-world"></i></div>
          <h4 class="title"><a href=""> </a>Inviter tes amis!</h4>
          <p class="description">inviter votres amis à s'inscrire et donner de sang 
            et gagner des coupons! pleines de surprises
            </p>
        </div>
      </div>

    </div>

  </div>
</section><!-- End Services Section -->
    

  <!-- End Portfolio Section -->

    <!-- ======= F.A.Q Section ======= -->
    <section id="faq" class="faq section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>F.A.Q</h2>
          <p>
            Questions fréquemment posées</p>
        </div>

        <ul class="faq-list" data-aos="fade-up" data-aos-delay="100">

          <li>
            <div data-bs-toggle="collapse" class="collapsed question" href="#faq1">Quel âge pour le don du sang? <i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
            <div id="faq1" class="collapse" data-bs-parent=".faq-list">
              <p>
                En pratique. Toute personne âgée de 18 à 70 ans, qui pèse plus de 50 kg et qui est reconnue apte suite à l'entretien prédon, peut donner son sang. Après 60 ans, le premier don est soumis à l'appréciation d'un médecin de l'EFS.
              </p>
            </div>
          </li>

          <li>
            <div data-bs-toggle="collapse" href="#faq2" class="collapsed question">Pourquoi attendre 4 mois pour donner son sang ?<i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
            <div id="faq2" class="collapse" data-bs-parent=".faq-list">
              <p>
                Suite à un accident d'exposition au sang (piercing, oreilles percées, tatouages, acupuncture…), il faut attendre 4 mois. Les personnes ayant séjourné dans un pays où sévit le paludisme, la maladie de Chagas, l'infection par le West Nile virus ou le Chikungunya doivent attendre entre 3 semaines et 4 mois.
              </p>
            </div>
          </li>

          <li>
            <div data-bs-toggle="collapse" href="#faq3" class="collapsed question">Comment se Sent-on après un don de sang ? <i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
            <div id="faq3" class="collapse" data-bs-parent=".faq-list">
              <p>
                Après le prélèvement, certains donneurs peuvent être pris d'une envie de vomir, ressentir une gêne au niveau de l'estomac ou avoir des vertiges.
              </p>
            </div>
          </li>

          <li>
            <div data-bs-toggle="collapse" href="#faq4" class="collapsed question">Est-ce que donner son sang est bon pour la santé ? <i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
            <div id="faq4" class="collapse" data-bs-parent=".faq-list">
              <p>
                Donner son sang peut réduire aussi le risque de développer certains cancers. En effet, le don contribue à réduire les réserves de fer (c'est pourquoi les anémiques ne peuvent pas donner) et réduit ainsi la quantité de dommages causés par les radicaux libres dans le corps.
            </div>
          </li>

          <li>
            <div data-bs-toggle="collapse" href="#faq5" class="collapsed question">Quelle quantité de sang est prélevé lors d'un don ? <i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
            <div id="faq5" class="collapse" data-bs-parent=".faq-list">
              <p>
                Le volume de sang prélevé par don est compris entre 400 ml et 500 ml. Il est inférieur ou égal à 13 % du volume sanguin estimé à partir du poids et de la taille du donneur. Une tolérance est possible sur décision médicale. La durée du prélèvement de sang total est de dix minutes.
              </p>
            </div>
          </li>

          <li>
            <div data-bs-toggle="collapse" href="#faq6" class="collapsed question">Puis-je donner mon sang si je prends des médicaments ? <i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
            <div id="faq6" class="collapse" data-bs-parent=".faq-list">
              <p>
                En cas de prise d'aspirines ou d'anti-inflammatoires (Nurofen, Ibuprofen, Perdofemina…), vous pouvez donner du sang, mais pas des plaquettes. En cas de prise d'antibiotiques, vous devez attendre 1 semaine après la fin du traitement ou plus longtemps selon la maladie. Attention !
              </p>
            </div>
          </li>

        </ul>

      </div>
    </section><!-- End F.A.Q Section -->
    <!-- ======= Contact Us Section ======= -->
    <section id="contact" class="contact">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>
            Contactez-nous</h2>
          <p>Contactez-nous pour commencer</p>
        </div>

        <div class="row">

          <div class="col-lg-5 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
            <div class="info">
              <div class="address">
                <i class="bi bi-geo-alt"></i>
                <h4>Location:</h4>
                <p>Avenue Abdelkhalek Torres, Tetouan -  93000</p>
              </div>

              <div class="email">
                <i class="bi bi-envelope"></i>
                <h4>Email:</h4>
                <p>info@example.com</p>
              </div>

              <div class="phone">
                <i class="bi bi-phone"></i>
                <h4>Call:</h4>
                <p>05359-98750</p>
              </div>

              <iframe src="https://maps.google.com/maps?q=hospital%20saniat%20dermal&t=&z=17&ie=UTF8&iwloc=&output=embed" frameborder="0" style="border:0; width: 100%; height: 290px;" allowfullscreen></iframe>
            </div>

          </div>

          <div class="col-lg-7 mt-5 mt-lg-0 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="200">
            <form action="forms/contact.php" method="post" role="form" class="php-email-form">
              <div class="row">
                <div class="form-group col-md-6">
                  <label for="name">Votre Nom</label>
                  <input type="text" name="name" class="form-control" id="name" placeholder="Votre Nom" required>
                </div>
                <div class="form-group col-md-6 mt-3 mt-md-0">
                  <label for="name">Votre Emal </label>
                  <input type="email" class="form-control" name="email" id="email" placeholder="Votre Emal " required>
                </div>
              </div>
              <div class="form-group mt-3">
                <label for="name">Sujet</label>
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Sujet" required>
              </div>
              <div class="form-group mt-3">
                <label for="name">Message</label>
                <textarea class="form-control" name="message" rows="10" required></textarea>
              </div>
              <div class="my-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
              </div>
              <div class="text-center"><button type="submit">Send Message</button></div>
            </form>
          </div>

        </div>

      </div>
    </section><!-- End Contact Us Section -->
   

    

   
  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">

   

    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-contact">
            <h3>Centre De Transfusion TETOUAN </h3>
           
            <p>
              Avenue Abdelkhalek Torres,  <br>
              Tetouan - 93000 <br>
              Maroc <br><br>
              <strong>Phone:</strong> 05359-98750<br>
              <strong>Email:</strong> tetouan.transfusion@gmail.com<br>
            </p>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Liens utiles</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Services</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">A propos</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Contact</a></li>
              
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Notre services</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Rendez vous</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">bilan sanguin </a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Historique de donation</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Prochain événement</a></li>
              
              
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Notre réseaux sociaux</h4>
            <p>suivez notre réseaux sociaux pour savoir plus d'informations sur notre centre.</p>
            <div class="social-links mt-3">
              <a href="https://www.facebook.com/crtstetouan" class="facebook"><i class="bx bxl-facebook"></i></a>
              <a href="https://www.instagram.com/explore/locations/1027028953/centre-regional-de-transfusion-sanguine-de-tetouan/" class="instagram"><i class="bx bxl-instagram"></i></a>
              <a href="https://twitter.com/CentreCnts" class="twitter"><i class="bx bxl-twitter"></i></a>
              <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
              <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
            </div>
          </div>

        </div>
      </div>
    </div>

    <div class="container-fluid py-4   bg-info" >
      <div class="copyright ustify-content-center"  style = "text-align: center;">
             &copy; Copyright <strong><span>Blood App</span></strong>. All Rights Reserved
      
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/ninestars-free-bootstrap-3-theme-for-creative/ -->
        
      </div>
    </div>
  </footer><!-- End Footer -->
  





  

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="{{ mix('js/app.js') }}" defer></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>