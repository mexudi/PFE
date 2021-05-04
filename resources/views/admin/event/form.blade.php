<div class="mb-3">
    <label for="name" class="form-label">Nom</label>
    <input value="{{old('name',$event->name ?? null)}}" type="text" class="form-control" name="name" id="name" placeholder="Entrer le nom d'évenement">
    @error('name') <span class="text-danger">{{ $message }}</span> @enderror
</div>


<div class="mb-3">
    <label for="place" class="form-label">Location</label>
    <input value="{{old('place',$event->place ?? null)}}" type="text" class="form-control" name="place" id="place" placeholder="Entrer la location d'évenement">
    @error('place') <span class="text-danger">{{ $message }}</span> @enderror
</div>


<div class="mb-3">
    <label for="date" class="form-label">Date</label>
    <input value="{{old('date',$event->date ?? null)}}" type="date" class="form-control" name="date" id="date">
    @error('date') <span class="text-danger">{{ $message }}</span> @enderror
</div>

<div class="mb-3">
    <label for="description" class="form-label">Description</label>
    <textarea type="text" class="form-control" name="description" id="description"  value="{{old('description',$event->description ?? null)}}" placeholder="Entrer une description d'évenement"></textarea>
    
    @error('description') <span class="text-danger">{{ $message }}</span> @enderror
</div>