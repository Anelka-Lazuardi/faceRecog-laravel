<?php

namespace App\Http\Controllers;

use App\Persons;
use Illuminate\Http\Request;

class PersonsController extends Controller
{
    //

    public function index()
    {

        return view('index');
    }

    public function person()
    {
        $persons = Persons::all();
        return view('person', compact('persons'));
    }

    public function create()
    {
        return view('create');
    }

    public function save(Request $request)
    {
        $post = $request->all();
        Persons::create($post);
        session()->flash('message', "New Person Added");
        return redirect()->to('person');
    }

    public function newImage(Persons $persons)
    {
        $person = $persons;
        return view('newImage', compact('person'));
    }

    public function listImage(Persons $persons)
    {
        $person = $persons;
        return view('listImage', compact('person'));
    }

    public function getPerson()
    {
        $data = [];
        $person = Persons::all();
        foreach ($person as $p) {
            array_push($data, $p->nama);
        }

        return json_encode($data);
    }
}
