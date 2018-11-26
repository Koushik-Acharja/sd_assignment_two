<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Form;

class FormController extends Controller
{
    /*
    public function test()
    {
        $image = Form::latest()->first();
        return view('test');
    }
    */
    public function create()
    {
        //$image = Form::latest()->first();
        $image = Form::all();
        return view('create', compact('image'));
        //return view('create');
    }

    public function store(Request $request)

    {

        $this->validate($request, [

                'filename' => 'required',
                'filename.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048'

        ]);
       
        /*
        if($request->hasfile('filename'))
         {

            foreach($request->file('filename') as $image)
            {
                $name=$image->getClientOriginalName();
                $image->move(public_path().'/images/', $name);  
                $data[] = $name;  
            }
         }

         $form= new Form();
         $form->filename=json_encode($data);
         
        
        $form->save();

        */
         if($request->hasfile('filename'))
		{

			foreach($request->file('filename') as $image)
			{
			$form= new Form();

			$name=time().$image->getClientOriginalName();
			$image->move(public_path().'/images/', $name);
			$data = $name;
			$form->filename=$data;
			$form->save();
			}

		}

        return back()->with('success', 'Your images has been successfully');
    }
}
