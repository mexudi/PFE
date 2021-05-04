@extends('layouts.master')
@section('content')



<div class="mt-3 card">
    <div class="card-body">
        <form method="POST" action="{{ url('/admin/event/store') }}">
            @csrf
            @include('admin.event.form')
            
            <button type="submit" class="btn btn-primary">Enregistrer</button>
        </form>
    </div>
</div>



@endsection