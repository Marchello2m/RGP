
@extends('layouts.app')

@section('content')

    <form action="addPerson" method="POST">
        @csrf
        <div class="container2" style="overflow-x:auto;">
            <h1>info about person </h1>

            <div>
                <label for="name" class="form-label">Name</label>
                <input type="text" class="form-control" name="name">
            </div>

            <div>
                <label for="phone" class="form-label">phone</label>
                <input type="text" class="form-control" name="phone">
            </div>

            <div>
                <label for="email" class="form-label">email</label>
                <input type="email" class="form-control" name="email">
            </div>

            <h1>Property </h1>
            <div>
                <label for="pName" class="form-label">Property Name</label>
                <input type="text" class="form-control" name="pName">
            </div>
            <div>
                <label for="cN" class="form-label">Cadastra Number</label>
                <input type="text" class="form-control" name="cN">
            </div>
            <div>
                <label for="ares" class="form-label">Cik liels</label>
                <input type="text" class="form-control" name="ares">
            </div>
            <div class="col-12">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
    </form>
@endsection



