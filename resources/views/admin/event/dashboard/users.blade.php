<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin 2 - Tables</title>
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


  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>
    <!-- Custom fonts for this template -->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

    <!-- Custom styles for this page -->
    <link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
    


</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-danger sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{url('/')}}">
                
                <div class="sidebar-brand-text mx-3">Blood App Admin</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="index.html">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
             
            </div>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
                    aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fas fa-fw fa-cog"></i>
                    <span>Donnateurs</span>
                </a>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item"href="{{url('admin/users')}}">Les Utilisateurs</a>
                        <a class="collapse-item" href="buttons.html">Les profiles</a>
                        <a class="collapse-item" href="cards.html">Une Donnation</a>
                    </div>
                </div>
            </li>

            <!-- Nav Item - Utilities Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities"
                    aria-expanded="true" aria-controls="collapseUtilities">
                    <i class="fas fa-fw fa-wrench"></i>
                    <span>Stock</span>
                </a>
                <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                       
                        <a class="collapse-item" href="{{url('/admin/dashboard/s')}}">Les statistiques de stock</a>
                        
                    </div>
                </div>
            </li>

           

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

           

        </ul>
        <!-- End of Sidebar -->

         <!-- Begin Page Content -->
         <div class="container-fluid">

                <!-- Page Heading -->
                

                <!-- DataTales Example -->
                @if(session()->has('status'))
  <div class="alert alert-success" role="alert">
    {{session()->get('status')}}
  </div> 
@endif
                <div class="card shadow mt-4 mb-4">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Action</th>
                                        
                                        
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($users as $user)
                                        <tr>
                                            <td>{{$user->id}}</td>
                                            <td>{{$user->name}}</td>
                                            <td>{{$user->email}}</td>
                                            <td>
                                                <!-- Button trigger modal -->
                                                <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                                Creer Profil {{$user->id}}
                                                </button>
                                                <form method="POST" action="{{ url('admin/profil/store') }}">
                                                        @csrf
                                                <!-- Modal -->
                                                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalLabel">{{$user->id}}</h5>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">


                                                              <div class="row mb-3">
                                                                <label for="user_id"  class="col-sm-4 col-form-label">{{__('User ID')}}</label>
                                                                <div class="col-sm-6">
                                                                <input type="text" value="{{old('user_id',$profile->user_id ?? null)}}" class="form-control" id="user_id" name="user_id">
                                                                @error('user_id') <span class="text-danger">{{ $message }}</span> @enderror</div>
                                                            </div>
                                                    
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
                                                            <div class="row mb-3">
                                                                <label for="type_sang" class="col-sm-4 col-form-label">{{__('Type de sang')}}</label>
                                                                <div class="col-sm-6">
                                                                <input type="text" value="{{old('type_sang',$profile->type_sang ?? null)}}" class="form-control" id="type_sang" name="type_sang" >
                                                                @error('type_sang') <span class="text-danger">{{ $message }}</span> @enderror
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
                                                                <label for="dtn" class="col-sm-4 col-form-label">Date de Naissance</label>
                                                                <div class="col-sm-6">
                                                                <input type="date" class="form-control" name="dtn" id="dtn" value="{{old('dtn',$profile->dtn ?? null)}}">
                                                                @error('dtn') <span class="text-danger">{{ $message }}</span> @enderror
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
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fermer</button>
                                                                <button type="submit" class="btn btn-danger">Enregistrer</button>
                                                            </div>
                                                         








                                                    </div>
                                                    
                                                    </div>
                                                </div>
                                                </div>
                                                </form> 
                                            </td>
                                            
                                        </tr>
                                    @endforeach 
                            </table>
                        </div>
                    </div>
                </div>

            </div>
                <!-- /.container-fluid -->

        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/datatables-demo.js"></script>

</body>
</html>