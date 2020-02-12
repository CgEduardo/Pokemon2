@extends('layouts.app')

@section('title', 'Trainers')

@section('content')
    
        <div class='row'>
        @foreach($trainer as $trainer)
            <div class='col-sm'>
                <div class="card text-center" style="width: 18rem; margin:20px; margin-top:70px;" >
                <img style="height:100px; width:100px; background-color:#EFEFEF;" class="card-img-top rounded-circle mx-auto d-block" src="images/{{$trainer->avatar}}" alt="">
                    <div class="card-body">
                        <h5 class="card-title">{{$trainer->name}}</h5>
                    <p class="card-text">{{$trainer->descripcion}}</p>
                        <a href="/trainer/{{$trainer->id}}" class="btn btn-primary">Ver mas</a>
                    </div>
                </div>
            </div>
        @endforeach 
        </div>
   
@endsection

