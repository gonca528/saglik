<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Comment;
use App\Models\Diyetisyen;
use App\Models\Slider;
use App\Models\Tarif;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class AdminController extends Controller
{


    public function add()
    {


        $attributes = request()->validate([
            'title' => 'required',
            'excerpt' => 'required',
          
            'thumbnail' => 'required|image',
        ]);


        $thumbnail = request()->file('thumbnail'); // Resim dosyasını alın
        $fileName = $thumbnail->getClientOriginalName(); // Orijinal dosya adını alın
        $thumbnail->storeAs('public/images', $fileName); // Resmi public/images klasörüne kaydedin

        $attributes['thumbnail']->storeAs('/images', request()->file('thumbnail')->store(), '');
        Slider::create([
            'title' => $attributes['title'],
            'excerpt' => $attributes['excerpt'],
            'thumbnail' => $fileName,
        ]);

        return redirect('/admin');
    }


    public function sliders()
    {

        return view('admins.slider', []);
    }
    public function tarif()
    {


        $attributes = request()->validate([
            'baslık' => 'required',
            'body' => 'required',
            'excerpt' => 'required',
            'thumbnail' => 'required|image',
        ]);

        
        $thumbnail = request()->file('thumbnail'); // Resim dosyasını alın
        $fileName = $thumbnail->getClientOriginalName(); // Orijinal dosya adını alın
        $thumbnail->storeAs('public/images', $fileName); // Resmi public/images klasörüne kaydedin

        Blog::create([
            'baslık' =>$attributes['baslık'],
            'body' => $attributes['body'],
            'excerpt' => $attributes['excerpt'],
            'thumbnail' => $fileName,
        ]);

        return redirect('/admin');
    }

    public function edit($id)
    {
        $user = Slider::where('id', $id)->first();
        return view('admin.edit', [
            'user' => $user

        ]);
    }
    public function editss($id)
    {
        $user = Diyetisyen::where('id', $id)->first();
        return view('diyetisyen.edit', [
            'user' => $user

        ]);
    }


    public function edits($id)
    {
        $user = Blog::where('id', $id)->first();
        return view('admins.edit', [
            'user' => $user

        ]);
    }


    public function update(Slider $category)
    {
        if (request()->thumbnail) {
            if (file_exists("images/$category->thumbnail")) {
                unlink("images/$category->thumbnail");  //resim mevcut ise klasördeki dosya siliniyor
            }
        }


        $attributes = request()->validate([
            'title' => 'required',
            'excerpt' => 'required',
            'thumbnail' => 'nullable|image',

        ]);


        if (request()->hasFile('thumbnail')) {
            $thumbnail = request()->file('thumbnail');
            $fileName = $thumbnail->getClientOriginalName();
            $thumbnail->storeAs('public/images', $fileName);
            $attributes['thumbnail'] = $fileName; // Orijinal dosya adını kaydet
        }

        $category->update($attributes);
        return redirect('/admin');
    }





    public function deletes(Diyetisyen $category)
    {

        $category->delete();
        return redirect('/admin');
    }
    public function delet(Slider $category)
    {

        $category->delete();
        return redirect('/admin');
    }
    public function delett(Blog $category)
    {

        $category->delete();
        return redirect('/admin');
    }
    public function delettt(Diyetisyen $category)
    {

        $category->delete();
        return redirect('/admin');
    }
    public function deletess(Tarif $category)
    {

        $category->delete();
        return redirect('/admin');
    }
    public function destroy()
    {

        auth()->logout();
        return redirect('/');
    }
    public function register()
    {
        return view('register.create');
    }

    public function kayıt()
    {
        $attributes = request()->validate([
            'name' => 'required|max:255',
            'username' => 'required|max:255|min:3',
            'email' => 'required|email:255|max:255',
            'password' => 'required|max:255|min:7'
        ]);

        $user = User::create($attributes);
        if ($user->is_admin) {
            auth()->login($user);
            return redirect('/');
        } else {
            return redirect('/login')->with('error', 'Sadece adminler sisteme girebilir!');
        }
    }
    public function login()
    {
        return view('login.create');
    }
    public function giris(Request $request)
    {
        $attributes = request()->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        if (auth()->attempt($attributes)) {
            $request->session()->regenerate();

            return redirect('/admin');
        }

        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ])->onlyInput('email');
    }


    public function diyet()
    {
        return view('admins.blog');
    }



    public function comment($id)
    {
        $attributes = request()->validate([
            'isim' => 'required|max:255',
            'baslik' => 'required|max:255'
        ]) + ['blog_id' => $id];
        Comment::create($attributes);

        return back();
    }


    public function updates(Blog $category)
    {


        $attributes = request()->validate([
            'baslık' => 'required',
            'body' => 'required',
            'excerpt' => 'required',
            'thumbnail' => 'nullable|image',


        ]);
        if (request()->hasFile('thumbnail')) {
            $thumbnail = request()->file('thumbnail');
            $fileName = $thumbnail->getClientOriginalName();
            $thumbnail->storeAs('public/images', $fileName);
            $attributes['thumbnail'] = $fileName; // Orijinal dosya adını kaydet
        }

        $category->update($attributes);
        return redirect('/admin');
    }

    public function diedit($id)
    {
        $user = Diyetisyen::where('id', $id)->first();
        return view('admin.edit', [
            'user' => $user

        ]);
    }

    public function updatess(Diyetisyen $category)
    {
        if (request()->thumbnail) {
            if (file_exists("images/$category->thumbnail")) {
                unlink("images/$category->thumbnail");  //resim mevcut ise klasördeki dosya siliniyor
            }
        }

        $attributes = request()->validate([
            'ad' => 'required',
            'ünvan' => 'required',
            'üniversite' => 'required',
            'şehir' => 'required',
            'diller' => 'required',
            'bilgi' => 'required',
            'thumbnail' => 'nullable|image',
        ]);


        if (request()->hasFile('thumbnail')) {
            $thumbnail = request()->file('thumbnail');
            $fileName = $thumbnail->getClientOriginalName();
            $thumbnail->storeAs('public/images', $fileName);
            $attributes['thumbnail'] = $fileName; // Orijinal dosya adını kaydet
        }


        $category->update($attributes);
        return redirect('/admin');
    }

    public function tarifs(){
        $slider=Tarif::all();
        return view('admins.tarif')->with(['slider' => $slider]);

    }    

    public function ekle()
    {
        return view('tarif.index');
    }

    public function tarifler()
    {


        $attributes = request()->validate([
            'baslık' => 'required',
            'body' => 'required',

            'title' => 'required',
          
            'thumbnail' => 'required|image',
        ]);


        $thumbnail = request()->file('thumbnail'); // Resim dosyasını alın
        $fileName = $thumbnail->getClientOriginalName(); // Orijinal dosya adını alın
        $thumbnail->storeAs('public/images', $fileName); // Resmi public/images klasörüne kaydedin

        $attributes['thumbnail']->storeAs('/images', request()->file('thumbnail')->store(), '');
        Tarif::create([
            'baslık' => $attributes['baslık'],
            'body' => $attributes['body'],
            'title' => $attributes['title'],
            'thumbnail' => $fileName,
        ]);

        return redirect('/admin');
    }

    public function editsss($id)
    {
        $user = Tarif::where('id', $id)->first();
        return view('tarif.edit', [
            'user' => $user

        ]);
    }
    
    public function updatesss(Tarif $category)
    {
        if (request()->thumbnail) {
            if (file_exists("images/$category->thumbnail")) {
                unlink("images/$category->thumbnail");  //resim mevcut ise klasördeki dosya siliniyor
            }
        }


        $attributes = request()->validate([
            'baslık' => 'required',
            'body' => 'required',
            'title' => 'required',
            'thumbnail' => 'nullable|image',

        ]);


        if (request()->hasFile('thumbnail')) {
            $thumbnail = request()->file('thumbnail');
            $fileName = $thumbnail->getClientOriginalName();
            $thumbnail->storeAs('public/images', $fileName);
            $attributes['thumbnail'] = $fileName; // Orijinal dosya adını kaydet
        }

        $category->update($attributes);
        return redirect('/admin');
    }
    
    public function delets(Tarif $category)
    {

        $category->delete();
        return redirect('/admin');
    }


}
