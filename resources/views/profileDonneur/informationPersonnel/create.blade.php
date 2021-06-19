<link href="/css/info.css" rel="stylesheet">
<body>
@extends('layouts.nav')
@section('content')

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
					</div>
				  	
		        </form>
		    </div>
		</div>
	</div>
</div>
@endsection('content')
</body>