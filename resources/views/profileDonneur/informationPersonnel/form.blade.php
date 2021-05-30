<div class="mb-3">
    <label for="nom" class="form-label">Nom</label>
    <input value="{{old('nom',$profile->nom ?? null)}}" type="text" class="form-control" nom="nom" id="nom" placeholder="Entrer votre nom">
    @error('nom') <span class="text-danger">{{ $message }}</span> @enderror
</div>


<div class="mb-3">
    <label for="prenom" class="form-label">Prénom</label>
    <input value="{{old('prenom',$profile->prenom ?? null)}}" type="text" class="form-control" name="prenom" id="prenom" placeholder="Entrer votre prénom">
    @error('prenom') <span class="text-danger">{{ $message }}</span> @enderror
</div>

<div class="mb-3">
    <label for="cin" class="form-label">CIN</label>
    <input value="{{old('cin',$profile->cin ?? null)}}" type="text" class="form-control" nom="cin" id="cin" placeholder="Entrer votre CIN">
    @error('cin') <span class="text-danger">{{ $message }}</span> @enderror
</div>

<div class="mb-3">
    <label for="dtn" class="form-label">Date de naissance</label>
    <input value="{{old('dtn',$profile->dtn ?? null)}}" type="date" class="form-control" name="dtn" id="dtn">
    @error('dtn') <span class="text-danger">{{ $message }}</span> @enderror
</div>

<div class="mb-3">
    <label for="tel" class="form-label">Tel</label>
    <input value="{{old('tel',$profile->tel ?? null)}}" type="text" class="form-control" name="tel" id="tel" placeholder="Entrer votre Tel">
    @error('tel') <span class="text-danger">{{ $message }}</span> @enderror
</div>

<div class="col-6 mb-3">
    <label for="ville" class="form-label">Ville</label>
        <select name="ville" id="ville" class="form-control">
        <option value="tetouan">Tetouan</option>
        <option value="tanger">Tanger</option>
        <option value="houciema">Houciema</option>
    </select>
</div>