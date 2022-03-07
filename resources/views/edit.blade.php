@extends('layouts.app')

@section('content')
    <div>Edit page</div>

    <form action="" method="POST" class="text-center">
        @csrf


        <h3>Persons id-{{$person->id}}</h3>
        <h1>About Client</h1>
        <div class="pt-5">
            Client Name:
            <input type="text" name="name" value=" {{$person->name}}" required> <br> <br>
            Client Phone:
            <input type="text" name="phone" value=" {{$person->phone}}" required> <br> <br>
            Client Email:
            <input type="text" name="email" value=" {{$person->email}}" required> <br> <br>
            <a class="pop" ONCLICK="Property()">Properties</a> <br> <br>
            <div ID="property" STYLE="display:none">
                <h1>Properties</h1>

                @if(empty($property) )
                    Property Name:
                    <input type="text" name="pName" value=" {{!empty($property->pName)}}" > <br> <br>
                    Property Cadastrial Number:
                    <input type="text" name="cN" value=" {{!empty($property->cN)}}" > <br> <br>
                    Property Sizes in:
                    <input type="text" name="ares" value=" {{!empty($property->ares)}}" > ha
                    <br> <br>
                @else
                    Property Name:
                    <input type="text" name="pName" value=" {{$property->pName}}" > <br> <br>
                    Property Cadastrial Number:
                    <input type="text" name="cN" value=" {{$property->cN}}" > <br> <br>
                    Property Sizes in:
                    <input type="text" name="ares" value=" {{$property->ares}}" > ha   <br> <br>
                @endif
            </div>
            <a class="pop" ONCLICK="Parcels()">Parcels</a> <br> <br>
            <div ID="parcels" STYLE="display:none">
                <h1>Parcels</h1>

                @if(empty($parcels) )
                   Parcel Cadastrial Number:
                    <input type="text" name="PCN" value=" {{!empty($parcels->PCN)}}" > <br> <br>
                    Parcel size:
                    <input type="text" name="pAres" value=" {{!empty($parcels->pAres)}}" > <br> <br>
                    Parcel Value:
                    <input type="text" name="value" value=" {{!empty($parcels->value)}}" > EUR
                    <br> <br>
                @else
                    Parcel Cadastrial Number:
                    <input type="text" name="PCN" value=" {{$parcels->PCN}}" > <br> <br>
                    Parcel size:
                    <input type="text" name="pAres" value=" {{$parcels->pAres}}" > <br> <br>
                    Parcel Value:
                    <input type="text" name="value" value=" {{$parcels->value}}" > EUR
                @endif
            </div>

            </div>
            <button type="submit">Update</button>
           <button><a href="/one/{{$person->id}}">Preview</a></button>
            <button onclick="history.back()">Go Back</button>

    </form>

@endsection

<script>
    function Property() {
        let x = document.getElementById('property');
        if (x.style.display == 'none') {
            x.style.display = 'block';
        } else {
            x.style.display = 'none';
        }
    }
    function Parcels() {
        let x = document.getElementById('parcels');
        if (x.style.display == 'none') {
            x.style.display = 'block';
        } else {
            x.style.display = 'none';
        }
    }


</script>

