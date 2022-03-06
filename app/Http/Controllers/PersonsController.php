<?php

namespace App\Http\Controllers;

use App\Models\Persons;
use App\Models\Property;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class PersonsController extends Controller
{
   public function saveData(Request $request)
   {
       $this->validate(request(), [
           'name' => 'required',
           'phone' => 'required',
           'email' => 'required|email|email',

       ]);
       $person =new Persons();
       $person->name=$request->name;
       $person->phone=$request->phone;
       $person->email=$request->email;
       $person->created_at= Carbon::now();
       $person->save();

       $property = new Property();
       $property->persons_id = $person->id;
       $property->pName=$request->pName;
       $property->cN=$request->cN;
       $property->ares=$request->ares;
       $property->created_at= Carbon::now();
       $property->save();


       return redirect('/')->with('message','Person Saved in db');
   }
   public function showOne($id)
   {
       $person = Persons::find( $id);
       $property = Property::find($id);


       return view('one', compact('person','property'));
   }


   public function show()
   {
       $persons = DB::table('persons')->get();

       return view('/main',compact('persons'));
   }
    public function delete($id)
    {
        $data = Persons::find($id);

        $data->delete();

        return redirect('/')->with('message', 'Success Deleted!');
    }
}
