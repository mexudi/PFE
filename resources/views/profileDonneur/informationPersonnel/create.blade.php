
<form method="POST" action="{{ url('/profile/store') }}">
				@csrf
		            <div class="row mb-3">
					    <label for="nom"  class="col-sm-2 col-form-label">{{__('Nom')}}</label>
					    <div class="col-sm-10">
					      <input type="text" value="{{old('nom',$profile->nom ?? null)}}" class="form-control" id="nom" name="nom" placeholder="EX: Soufiane Lamchoudi">
						  @error('nom') <span class="text-danger">{{ $message }}</span> @enderror
						</div>
				  	</div>

                      <div class="row mb-3">
					    <label for="prenom" class="col-sm-2 col-form-label">{{__('prenom')}}</label>
					    <div class="col-sm-10">
					      <input type="text" value="{{old('prenom',$profile->prenom ?? null)}}" class="form-control" id="prenom" name="prenom" placeholder="EX: mexudi@mexudi.com">
						  @error('prenom') <span class="text-danger">{{ $message }}</span> @enderror
						</div>
				  	</div>
				  	<div class="row mb-3">
					    <label for="cin" class="col-sm-2 col-form-label">{{__('cin')}}</label>
					    <div class="col-sm-10">
					      <input type="text" value="{{old('cin',$profile->cin ?? null)}}" class="form-control" id="cin" name="cin" placeholder="EX: mexudi@mexudi.com">
						  @error('cin') <span class="text-danger">{{ $message }}</span> @enderror
						</div>
				  	</div>
				  	<div class="row mb-3">
					    <label for="tel" class="col-sm-2 col-form-label">{{__('Tel')}}</label>
					    <div class="col-sm-10">
					      <input type="text" value="{{old('tel',$profile->tel ?? null)}}" class="form-control" id="tel" name="tel" placeholder="EX: +2126XXXXXXXX">
						  @error('tel') <span class="text-danger">{{ $message }}</span> @enderror
						</div>
				  	</div>
				  	
					
				  	<div class="row mb-3">
					    <label for="dtn" class="col-sm-2 col-form-label">Date of Birth</label>
					    <div class="col-sm-10">
					      <input type="date" class="form-control" name="dtn" id="dtn" value="{{old('dtn',$profile->dtn ?? null)}}">
					    </div>
				  	</div>
                      
                    <div class="col-6 mb-3">
                        <label for="ville" class="form-label">Ville</label>
                            <select class="form-control col-2" name="ville" id="ville">
                            <option value="tetouan">Tetouan</option>
                            <option value="tanger">Tanger</option>
                            <option value="houciema">Houciema</option>
                        </select>
                    </div>
				  
				  	<button type="submit" class="btn confirm">Confirm</button>
					<a href="{{ url('/profile/create')}}">
                		<button type="button" class="btn btn-outline-danger cancel">Cancel</button>
           			 </a>
				  	
		        </form>