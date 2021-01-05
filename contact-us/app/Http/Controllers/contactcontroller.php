<?php

namespace App\Http\Controllers;
use App\Models\Contact;

use Illuminate\Http\Request;
use PhpParser\Node\Expr\AssignOp\Concat;

class contactcontroller extends Controller
{
public function index()
{
    $contacts = Contact::all();
    return view('index', compact('contacts'));
}
public function contact()
{
    return view('contact');

}
public function store(Request $request)
{
    $data = $request->validate(['firstname'=>'required','lastname'=>'required','emali'=>'required']);

$contact = new Contact ;
$contact->Fname = $request->firstname;
$contact->Lname = $request->lastname;
$contact->email = $request->email;
$contact->save();
return redirect('/');

}
public function destroy($id)
{
    $contact = Contact::find($id);
    $contact->delete();
    return redirect('/');
}


public function update(Request $request, $id  )
{
 $contact= Contact::find($id);
$contact->Fname = $request->firstname;
$contact->Lname = $request->lastname;
$contact->email = $request->email;
$contact->save();

    return redirect('/');
}


public function edit($id)
{$contact= Contact::find($id);

    return view('edit' , compact('contact'));


}
}
