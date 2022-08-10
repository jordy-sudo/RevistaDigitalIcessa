<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\User;
use Auth;

class InvitadosController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        
        
            $idu= Auth::id(); //obtener ID
            //dd($usuario = Post::find($idu));
    
            //dd(Post::where('user_id','===',$user_id)->paginate(10));
            return view('invitados',[
                'invitados' => Post::where('user_id', $idu)->paginate(6)
            ]);
        
    }
    public function gallery(){
        $idu= Auth::id(); //obtener ID

        return view('gallery',[
            'invitados' => Post::where('user_id', $idu)
        ]);
    }
    public function indexMaster(){
        $idu= Auth::id(); //obtener ID
        //dd($usuario = Post::find($idu));

        //dd(Post::where('user_id','===',$user_id)->paginate(10));
        return view('invitados-mater',[
            'invitados' => Post::where('user_id', $idu)->paginate(1)
        ]);
    }
}
