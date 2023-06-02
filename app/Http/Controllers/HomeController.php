<?php

namespace App\Http\Controllers;
use App\Mail\AppointmentMail;

use App\Mail\AppointmentConfirmation;
use Illuminate\Support\Facades\Mail;
use App\Models\Blog;
use App\Models\Comment;
use App\Models\Diyetisyen;
use App\Models\Form;
use App\Models\Randevu;
use App\Models\Slider;
use App\Models\Tarif;
use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{

    public function new(){
     
        return view('admins.diyetisyen
        ');
    }
    public function gonderi()
    {


        $attributes = request()->validate([
            'ad' => 'required',
            'ünvan' => 'required',
            'üniversite' => 'required',
            'şehir' => 'required',
            'diller' => 'required',
            'bilgi' => 'required',
            'thumbnail' => 'required|image',
        ]);
        $thumbnail = request()->file('thumbnail'); // Resim dosyasını alın
        $fileName = $thumbnail->getClientOriginalName(); // Orijinal dosya adını alın
        $thumbnail->storeAs('public/images', $fileName); // Resmi public/images klasörüne kaydedin




        Diyetisyen::create([
            'ad' => $attributes['ad'],
            'ünvan' =>  $attributes['ünvan'],
            'üniversite' => $attributes['üniversite'],
            'şehir' =>  $attributes['şehir'],
            'diller' => $attributes['diller'],
            'bilgi' => $attributes['bilgi'],
            'thumbnail' => $fileName,

        ]);

        return redirect('/admin');
    }
    public function randevus(){
        $randevu=Randevu::all();
        return view('admins.randevu')->with(['randevu'=>$randevu]);
    }

    public function deletts(Randevu $category){

        $category->delete();
        return redirect('/admin');
    }
         public function admin(){


            return view('admins.dashboard');
         }
    public function index(){
        $diyetisyen=Diyetisyen::all();
        $tarif=Tarif::all();
        $slider=Slider::all();
        return view('admin.index')->with(['diyetisyen' => $diyetisyen, 'tarif' => $tarif,'slider'=>$slider]);
      

    }
    public function home()
    {
        $sliders=Slider::all();
        return view('index')->with('sliders',$sliders);
    }


    public function iletisim()
    {

        return view('posts.iletisim');
    }


    public function tarif()
    {
        $tarif = Tarif::all();
        return view('posts.tarif')->with(['tarif' => $tarif]);
    }

    public function tarifler($id)
    {
        $others = Blog::inRandomOrder()->take(4)->get();
 
        $blog = Tarif::where('id', $id)->first();
        $comment=Comment::where('blog_id', $blog->id)->get();

         return view('posts.blog')->with(['others' => $others, 'blog' => $blog, 'comment'=>$comment]);
    }


    public function diyetisyenler()
    {
        $post = Diyetisyen::all();
        return view('posts.diyetisyenler')->with('post', $post);
    }

    public function diyetisyen($id)
    {

        $diyetisyen = Diyetisyen::where('id', $id)->latest()->get();

        return view('posts.diyetisyen')->with('diyetisyen', $diyetisyen);
    }


    public function yazı()
    {

        return view('posts.yazı');
    }
    public function karatay()
    {
        return view('karatay');
    }
 
    

    
    public function blogs()
    {
        $post = Diyetisyen::all();
        $blog = Blog::all();
        return view('posts.blogs')->with(['blog' => $blog, 'post' => $post]);
    }

    public function blog($id)
    {
        $others = Blog::inRandomOrder()->take(4)->get();
 
        $blog = Blog::where('id', $id)->first();
        $comment=Comment::where('blog_id', $blog->id)->get();

         return view('posts.blog')->with(['others' => $others, 'blog' => $blog, 'comment'=>$comment]);
    }


   


    public function form()
    {
        return view('posts.form');
    }


    public function store(Request $request)
    {
        $attributes = request()->validate([
            'ad' => 'required|max:255',
            'email' => 'required|email:255|max:255',
            'telefon' => 'required|max:255|min:3',
            'konu' => 'required|max:255|min:7',
            'mesajınız' => 'required|max:255|min:7',

       
             
        ]);

   

        Form::create($attributes);
     
        return redirect('/');
        
    }


    public function randevu($id)
    {
        $user = Diyetisyen::where('id', $id)->first();
        return view('randevu', [
            'user' => $user

        ]);    }

 public function talep(Request $request){
    $attributes = request()->validate([
        'ad' => 'required|max:255',
        'telefon' => 'required|max:255|min:3',
        'tarih' => 'required|max:255|max:255',
        'doktor' => 'required|max:255|min:3',
        'konu' => 'required|max:255|min:3',

    ]);
    
    Randevu::create($attributes);
    return redirect('blogs');

}
      
    public function slider(){
        $slider=Slider::all();
        return view('admins.basic-table')->with(['slider' => $slider]);

    }    
    public function post(){
        $post=Blog::all();
        return view('admins.blank')->with(['post' => $post]);

    }   
    public function diyetisyens(){
        $post=Diyetisyen::all();
        return view('admins.index')->with(['post' => $post]);

    }    
 

}
