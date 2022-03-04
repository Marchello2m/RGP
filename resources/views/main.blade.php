@extends('layouts.app')

@section('content')
    <form action="/" method="GET">
       <h1>Pēc tam outputos</h1>
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

                <th scope="row">1</th>
                <td>{{$person->name}}</td>
                <td>{{$person->phone}}</td>
                <td>{{$person->email}}</td>
            <td> <button>Delete</button></td>
            <td> <button>Edit</button></td>
            </tr>
            @endforeach
            </tbody>
        </table>


    </form>
@endsection



