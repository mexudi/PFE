
<form method="POST" action="{{ url('/store') }}">
				@csrf
		            <div class="row mb-3">
					    <label for="nom"  class="col-sm-2 col-form-label">{{__('Nom')}}</label>
					    <div class="col-sm-10">
					      <input type="text"  class="form-control" id="nom" name="nom" placeholder="EX: Aloui">
						  @error('nom') <span class="text-danger">{{ $message }}</span> @enderror
						</div>
				  	</div>

                      <div class="row mb-3">
					    <label for="prenom" class="col-sm-2 col-form-label">{{__('Prenom')}}</label>
					    <div class="col-sm-10">
					      <input type="text"  class="form-control" id="prenom" name="prenom" placeholder="EX: Mohamed">
						  @error('prenom') <span class="text-danger">{{ $message }}</span> @enderror
						</div>
				  	</div>

				  	<div class="row mb-3">
					    <label for="cin" class="col-sm-2 col-form-label">{{__('CIN')}}</label>
					    <div class="col-sm-10">
					      <input type="text" class="form-control" id="cin" name="cin" placeholder="EX: L12345">
						  @error('cin') <span class="text-danger">{{ $message }}</span> @enderror
						</div>
				  	</div>
				  	<div class="row mb-3">
					    <label for="tel" class="col-sm-2 col-form-label">{{__('Tel')}}</label>
					    <div class="col-sm-10">
					      <input type="text" class="form-control" id="tel" name="tel" placeholder="EX: +212XXXXXXXXX">
						  @error('tel') <span class="text-danger">{{ $message }}</span> @enderror
						</div>
				  	</div>
				  	
					
				  	<div class="row mb-3">
					    <label for="date" class="col-sm-2 col-form-label">Date </label>
					    <div class="col-sm-10">
					      <input type="date" class="form-control" name="date" id="date" >
					    </div>
				  	</div>
                      
                    
				  
            <button type="submit" class="btn btn-danger " style="width: 100px; margin-left: 185px;">Confirmer</button>
					
				  	
		        </form>