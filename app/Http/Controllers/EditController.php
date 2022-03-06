<?php

namespace App\Http\Controllers;

use App\Models\Persons;
use App\Models\Property;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

class EditController extends Controller
{
   public function edit(Request $request)
   {
       $person = Persons::find($request->id);
       $person->name = $request->input('name');
       $person->phone = $request->input('phone');
       $person->email = $request->input('email');
       $person->updated_at = Carbon::now();
       $person->save();

       if (!isset($property)) {
           $property = new Property();
           $property->persons_id =$person->id;
           $property->save();
       }
       $property= Property::find($request->id);
       $property->persons_id=$person->id;
       $property->pName=$request->input('pName');
       $property->cN=$request->input('cN');
       $property->ares=$request->input('ares');
       $property->updated_at = Carbon::now();
       $property->save();

       return redirect('/')->with('message', 'Update success!');
   }
    public function showEdit($id)
    {
        $person = Persons::find($id);
        $property = Property::find($id);

        return view('edit', compact('person','property'));

    }
}
