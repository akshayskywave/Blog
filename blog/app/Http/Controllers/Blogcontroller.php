<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\models\Blogmodel;


class Blogcontroller extends Controller
{
    public function index()
    {
        $url = url('/blog');
        $title = "Registration form";
        return view('blogfront',compact('url','title'));
    }

    public function store(Request $request)
    {
       
        // dd($request->all());
        

        $blogvar = new Blogmodel();
        $blogvar->name = $request['name'];
        $blogvar->username = $request['username'];
        $blogvar->Bio = $request['bio'];
        $blogvar->phone = $request['phone'];
        $blogvar->City = $request['city'];
        $blogvar->email = $request['email'];
        $blogvar->State = $request['state'];
        $blogvar->Country = $request['Country'];
        $blogvar->Gender = $request['Gender'];
        $blogvar->save();

        return redirect('/blog/view');

    }

    public function view(Request $request)
    {
        $search = $request['search']??"";
        if ($search != ""){
            $blogv = Blogmodel::where('Name',"like","%$search%")->orwhere('email',"like","%$search%")->get();
        }else{
            $blogv = Blogmodel::all();
        }   
        return view('blog-view', compact('blogv','search'));
    }

    public function delete($id)
    {
        Blogmodel::find($id)->delete();
        return redirect()->back();
        
    }

    public function edit($id)
    {
        
        $blogv= Blogmodel::find($id);
        if(is_null($blogv)){
            //not found
            return redirect('/blog/view');
        }else{
            //found
            $title = "Update form";
            $url = url('/blog/update')."/".$id;
            $data = compact('blogv','url','title');
            return view('blogfront')->with($data);
        }
    }

    public function update ($id, Request $request)
    {
        // dd($request->all());

        $blogvar = Blogmodel::find($id);
        $blogvar->name = $request['name'];
        $blogvar->username = $request['username'];
        $blogvar->Bio = $request['bio'];
        $blogvar->phone = $request['phone'];
        $blogvar->City = $request['city'];
        $blogvar->email = $request['email'];
        $blogvar->State = $request['state'];
        $blogvar->Country = $request['Country'];
        $blogvar->Gender = $request['Gender'];
        $blogvar->save();

        return redirect('/blog/view');
    }

};
