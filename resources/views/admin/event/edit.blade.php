@extends('layouts.master')
@section('content')



     

      <div class="mt-3 card">
    <div class="card-body">
        <form method="POST" action="{{ url('/admin/event/'.$event->id.'/update') }}">
            @csrf
            @method('PUT')
            @include('admin.event.form')
     
      </div>
     
    </div>
 





@endsection