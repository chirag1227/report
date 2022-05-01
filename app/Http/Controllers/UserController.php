<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\projectform;

class UserController extends Controller
{
    //
    function submitReport(Request $request)
    {
        $request->validate([
            "file"=>"required|mimes:pdf"
        ]);

        $user=new projectform;
        $user->Members=$request->members;
        $user->Topic=$request->topic;
        $user->Title=$request->title;
        $file=$request->file('file');
        $user->url=$request->url;
        if($request->hasfile('file'))
        {
            $extension=$file->getClientOriginalExtension();
            $filename=time().'.'.$extension;
            $file->move('upload/', $filename);
            $user->word=$filename;
        }
        if($user->save())
        {
            return redirect('/list');
        }


    }

    function list()
    {
        $data=projectform::all();
        return view('list',['datas'=>$data]);
    }
}
