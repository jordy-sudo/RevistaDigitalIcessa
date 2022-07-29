<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ImageUpload;
use App\Models\Post;
use App\Http\Requests\PostRequest;
class ImageUploadController extends Controller
{
    //creacion de ruta par almacenar la imagen
    public function fileCreate()
    {
        return view('home');
    }
    
public function fileStore(Request $request)
{
    
    $post=Post::create([
        'user_id'=> auth()->user()->id
    ]+ $request->all());

   

    //image
    //dd($request);
    if($request->file('file')){
        $post->image = $request->file('file')->store('posts','public');
        $post->image_name = $request->file('file')->getClientOriginalName();
        $post->validate();
        $post->save();  
    }

    //retornar
    return back()->with('status','Creado con exito');
}
   
}
