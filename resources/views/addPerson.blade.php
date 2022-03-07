
@extends('layouts.app')

@section('content')

    <form action="addPerson" method="POST">
        @csrf
        <div class="container" style="overflow-x:auto;">
            <h1>ADD info about person </h1>

            <div>
                <label for="name" class="form-label">Name</label>
                <input type="text" class="form-control" name="name"required>
            </div>

            <div>
                <label for="phone" class="form-label">phone</label>
                <input type="text" class="form-control" name="phone"required>
            </div>

            <div>
                <label for="email" class="form-label">email</label>
                <input type="email" class="form-control" name="email" required>
            </div>

            <h1>Property </h1>
            <div >
                <label for="pName" class="form-label">Property Name</label>
                <input type="text" class="form-control" name="pName" required>
            </div>
            <div>
                <label for="cN" class="form-label">Cadastral  Number</label>
                <input type="number" class="form-control" name="cN" required>
            </div>
            <div>
                <label for="ares" class="form-label">How Big/ha</label>
                <input type="number" class="form-control" name="ares" required>
            </div>
            <div class="property_div">
            </div>
         ADD More Properties: <span class="fa fa-plus add"></span>


            <div class="col-12">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
    </form>

    <script>
        $(document).ready(function () {
            let i = 1;
            $('.add').on('click', function () {
                let field = '<br> ' + i + ' <div>Property Name:  <input type="text" class="form-control" name="pName">  ' +
                    'Property Cadastral numbber:  <input type="number" class="form-control" name="cN">' +
                    'How big:  <input type="number" class="form-control" name="ares">'
                   ;
                $('.property_div').append(field);
                i = i + 1;
            })
        })
    </script>
@endsection



