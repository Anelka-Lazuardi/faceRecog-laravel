<?php

namespace App\Http\Controllers;

use App\PersonImages;
use App\Persons;
use Illuminate\Http\Request;

class PersonImagesController extends Controller
{
    public function index(Request $request)
    {
        $user = Persons::find($request->personID);
        $file = $request->file('image');
        $imageUser = $user->images;
        $check = false;
        foreach ($imageUser as $i) {
            if ($i->image == '1.jpg') {
                $check = true;
            }
        }
        if ($check == false) {
            $name = '1.jpg';
        } else {
            $name = '2.jpg';
        }
        $upload = 'images/' . $user->nama;
        $file->move($upload, $name);
        $post = $request->all();


        $post['image'] = $name;
        PersonImages::create($post);
        session()->flash('message', "New Image Added");
        return redirect()->to('person');
    }
}
