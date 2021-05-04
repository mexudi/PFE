@extends('layouts.master')

@section('content')
{{$b}}
<div class="mt-3">
<h2>LISTE DES EVENEMENTS :</h2>
<a href="{{url('/admin/event/create')}}" type="button" class="mb-2 btn btn-info float-end ">Créer un évenement</a>    
</div>


@if(session()->has('status'))
  <div class="alert alert-success" role="alert">
    {{session()->get('status')}}
  </div> 
@endif

<table class="table table-bordered">
    <thead>
    
      <tr >
        <th scope="col">#</th>
        <th scope="col" style="text-align:center width:3%" >Nom</th>
        <th scope="col" style="text-align:center width:3%" >Location</th>
        <th scope="col" style="text-align:center width:3%" >Date</th>
        <th scope="col" style="text-align:center width:3%" >Description</th>
        <th scope="col" style="text-align:center width:3%" >Action</th>
      </tr>
    </thead>
    @foreach($events as $e)
    <tr>
        <th scope="row">{{$e->id}}</th>
        <td>{{$e->name}}</td>
        <td>{{$e->place}}</td>
        <td>{{$e->date}}</td>
        <td>{{$e->description}}</td>
     
        <td>
            <div class="btn-group" role="group" aria-label="Basic example">
              <a href="{{url('/admin/event/'.$e->id.'/edit')}}" type="button" class="btn btn-success ">Modifier</a>
                <form method='POST'  action="{{ url('/admin/event/'.$e->id) }}">
                   @csrf
                   @method('DELETE')
                    <button   type="submit" class="btn btn-danger ">Delete</button>
                 </form>
            </div>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
  
@endsection