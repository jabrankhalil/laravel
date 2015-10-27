<?php

namespace App\Http\Controllers;



use Illuminate\Http\Request;

use App\Http\Requests\CreateArticalRequest;
use App\Http\Controllers\Controller;
use App\ArticalModel;
use Illuminate\Contracts\Validation\Validator;
class ArticalController extends Controller
{
    //
    public function index()
    {
        $articals=ArticalModel::latest()->get();
        return view('artical.show',compact('articals'));
    }
    public  function create()
    {
        return view('artical.create');
    }
   /*public function store(CreateArticalRequest $request)
    {


        //$val= new Request();
        $art=new ArticalModel();
        $art->title=$request->get('title');
        $art->body=$request->get('body');

        $art->save();

        return redirect('articals');
     }*/
    public function store(Request $request )
    {


        $this->validate($request,['title'=>'required','body'=>'required']);
        $art=new ArticalModel();
        $art->title=$request->get('title');
        $art->body=$request->get('body');

        $art->save();

        return redirect('test');
    }
}
