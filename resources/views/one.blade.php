@extends('layouts.app')

@section('content')
    <div>Preview</div>

    <button onclick="history.back()">Go Back</button>
    <div class="container">


        <div class="info">
            <h1>About client</h1>
            <h4>{{$person->name}} </h4>
            <h4>{{$person->phone}} </h4>
            <h4>{{$person->email}} </h4>

        </div>
        <div class="property">
            <h1>About clients Property</h1>
           <p>Property Name :{{$property->pName}}</p>
           <p>Cadastral Number :{{$property->cN}}</p>
           <p>Property Size : {{$property->ares}} ha</p>

        </div>

    </div>

@endsection


