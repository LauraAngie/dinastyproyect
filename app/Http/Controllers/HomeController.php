<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Servicios;
use Illuminate\Support\Facades\DB;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
       /*  $posts = Post::all();
        $categories = Category::all();
         return view('posts',[
           'posts'=>$posts,
           'categories'=>$categories
        ]); */
        // $category=Category::find(4);
        // dd($category->posts);
        //  return view('home');
         return view('posts');
    }
    public function formulario()
    {
        $servicios = Servicios::all();
        return view('formulario',['servicios'=>$servicios]);
    }
/*     public function id($numLib){
       
       
        $posts = DB::select("SELECT * FROM posts WHERE id=?",[$numLib]);
        $categories = DB::select("SELECT cat.* FROM categories cat, posts pos WHERE cat.id=pos.category_id&&pos.id=?",[$numLib]);
        $array = json_decode(json_encode($posts));
        $autor = DB::select("SELECT * FROM posts WHERE autor =?", [$array[0]->autor]);
        return view('post',['posts'=>$posts,'category'=>$categories, 'autor'=>$autor]);

    } */
    public function search(Request $request){
     /*    $nombre = $request->get('buscarPor');
        dd($nombre); */
        // return view('posts');
    }
   public function postuserPdf(){
       return 'exportar usuarios';
   }
}
