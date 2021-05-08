@extends('layouts.master')

@section('content')

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
              <a  type="button" class="btn btn-success "  data-bs-toggle="modal" data-bs-target="#exampleModal">Modifier</a>
                <!-- Modal -->

                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                      <div class="modal-dialog">
                      <div class="modal-content">
                      <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalLabel">Modifer l'évenement</h5>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                      </div>
                      <div class="modal-body">
                      <form method='POST' action="{{url('/admin/event/'.$e->id.'/update')}}">
                      @csrf
                      @method('PUT')
                      @include('admin.event.form')
                      <button type="submit" class="btn btn-primary">Mettre à jour</button>
                      </form>
                      </div>
                      </div>
                      </div>
                      </div>

     
              <!--end model-->
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