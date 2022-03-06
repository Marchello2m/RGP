@extends('layouts.app')

@section('content')
    <form action="/" method="GET">
       <h1>Client Data</h1>
        <div class="container2" style="overflow-x:auto;">
        <table class="table">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Phone</th>
                <th scope="col">Email</th>
            </tr>
            </thead>
            <tbody>
            @foreach($persons as $person)
            <tr>

                <th scope="row">{{$person->id}}</th>
                <td>{{$person->name}}</td>
                <td>{{$person->phone}}</td>
                <td>{{$person->email}}</td>
                <td><a href="/delete/{{$person->id}}">Delete</a></td>
                <td><a href="/edit/{{$person->id}}">Edit</a></td>
                <td> <a href="/one/{{$person->id}}">Preview</a></td>
            </tr>
            @endforeach
            </tbody>
        </table>

        </div>
    </form>
@endsection



