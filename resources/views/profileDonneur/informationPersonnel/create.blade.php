<link href="/css/info.css" rel="stylesheet">
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

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>


  <link href="css/error.css" rel="stylesheet">
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
<body>

<div id="infos" >
@if(session()->has('status'))
  <div class="alert alert-success" role="alert" style="width: 30%;">
    {{session()->get('status')}}
  </div>
@endif
<div class="section-title">
	<p>Completer les informations de profile</p>
</div>

	<div class="container  d-flex justify-content-center">
		<div class="mt-3 card  p-3 w-50" style="box-shadow: 0 2px 4px 0 rgba(0,0,0,.2);  background: rgba(0,0,0,0.3);">
		    <div class="card-body">
			<form method="POST" action="{{ url('/profile/store') }}">
				@csrf
		            <div class="row mb-3">
					    <label for="nom"  class="col-sm-4 col-form-label">{{__('Nom')}}</label>
					    <div class="col-sm-6">
						<input type="text" value="{{old('nom',$profile->nom ?? null)}}" class="form-control" id="nom" name="nom">
						  @error('nom') <span class="text-danger">{{ $message }}</span> @enderror</div>
				  	</div>
				  	<div class="row mb-3">
					    <label for="prenom" class="col-sm-4 col-form-label">{{__('Prenom')}}</label>
					    <div class="col-sm-6">
					      <input type="text" value="{{old('prenom',$profile->prenom ?? null)}}" class="form-control" id="prenom" name="prenom" >
						  @error('prenom') <span class="text-danger">{{ $message }}</span> @enderror
						</div>
					</div>
					<div class="row mb-3">
					    <label for="cin" class="col-sm-4 col-form-label">{{__('CIN')}}</label>
					    <div class="col-sm-6">
					      <input type="text" value="{{old('cin',$profile->cin ?? null)}}" class="form-control" id="cin" name="cin" >
						  @error('cin') <span class="text-danger">{{ $message }}</span> @enderror
						</div>
				  	</div>
					  <fieldset class="row mb-3">
					    <legend class="col-form-label col-sm-4 pt-0">{{__('Sex')}}</legend>
					    <div class="col-sm-6">
					      <div class="form-check">
					        <input class="form-check-input"  type="radio" name="sex" id="female" value="female" checked>
					        <label class="form-check-label" for="female">
					          {{__('Female')}}
					        </label>
					      </div>
					      <div class="form-check">
					        <input class="form-check-input"  type="radio" name="sex" id="male" value="male">
					        <label class="form-check-label" for="male">
					          {{__('Male')}}
					        </label>
					      </div>
					    </div>
					</fieldset>
					<div class="row mb-3">
					    <label for="ddn" class="col-sm-4 col-form-label">Date de Naissance</label>
					    <div class="col-sm-6">
					      <input type="date" class="form-control" name="ddn" id="ddn" value="{{old('ddn',$profile->ddn ?? null)}}">
					    </div>
				  	</div>
				  	<div class="row mb-3">
					    <label for="tel" class="col-sm-4 col-form-label">{{__('Telephone')}}</label>
					    <div class="col-sm-6">
					      <input type="text" value="{{old('tel',$profile->tel ?? null)}}" class="form-control" id="tel" name="tel" placeholder="EX: +2126XXXXXXXX">
						  @error('tel') <span class="text-danger">{{ $message }}</span> @enderror
						</div>
				  	</div>
				  	
				
				  	
				  	<div class=" row  mb-3">
                        <label for="ville" class="col-sm-4 col-form-label">Ville</label>
						<div  class="col-sm-4">
							<select class="form-control" name="ville" id="ville">
								<option value="tetouan">Tetouan</option>
								<option value="tanger">Tanger</option>
								<option value="houciema">Houciema</option>
							</select>
						</div>
                    </div>
					<div class="mt-5">
						<button type="submit" class="btn confirm">Enregistrer</button>
						<button type="submit" class="btn confirm">Annuler</button>
					</div>
				  	
		        </form>
		    </div>
		</div>
	</div>
</div>

</body>