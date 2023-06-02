<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Mail\ExampleMail;
use Illuminate\Support\Facades\Mail;

Route::get('/', [HomeController::class, 'home']);


Route::get('/mail-test', function(){
    $mail = new ExampleMail();
    Mail::to('goncaertan19@gmail.com')->send($mail);
});

Route::get('blogs', [HomeController::class, 'blogs']);

Route::get('blogs/{id}', [HomeController::class, 'blog']);

Route::get('son', [HomeController::class, 'son']);

Route::get('iletisim', [HomeController::class, 'iletisim']);

Route::get('tarif', [HomeController::class, 'tarif']);
Route::get('tarifler/{id}', [HomeController::class, 'tarifler']);

Route::get('karatay', [HomeController::class, 'karatay']);

Route::get('diyetisyenler', [HomeController::class, 'diyetisyenler']);
Route::get('diyetisyen/{id}', [HomeController::class, 'diyetisyen']);

Route::get('/form', [HomeController::class, 'form']);
Route::post('form', [HomeController::class, 'store']);

Route::get('register', [AdminController::class, 'register']);
Route::post('kayıt', [AdminController::class, 'kayıt']);

Route::get('login', [AdminController::class, 'login']);
Route::post('giris', [AdminController::class, 'giris']);
Route::post('logout', [AdminController::class, 'destroy']);

Route::get('index', [HomeController::class, 'index']);

Route::get('admin/slider/{slider}/edit', [AdminController::class, 'edit']); //slider yönlendirme
Route::patch('admin/update/{category}', [AdminController::class, 'update']); // slider güncelleme


Route::delete('admin/update/diyetisyen/{category}', [AdminController::class, 'deletes']); //diyetisyen silme
Route::delete('admin/update/slider/{category}', [AdminController::class, 'delet']);//slider  silme

Route::delete('admin/update/tarif/{category}', [AdminController::class, 'deletess']);

Route::get('admin/news', [AdminController::class, 'diyet']); 
Route::post('admin/admin/new/blog', [AdminController::class, 'tarif']); //yeni gönderi


Route::post('comment/new/{id}', [AdminController::class, 'comment']); //yorum
Route::get('comment', [CommentController::class, 'comments']); //yorum

Route::get('diyetisyen/randevu/{slider}/yeni', [HomeController::class, 'randevu']);
Route::post('diyetisyen/randevu/{slider}/yeni/randevu/talep', [HomeController::class, 'talep']);

Route::get('/admin', [HomeController::class, 'admin']);
Route::get('/slider', [HomeController::class, 'slider']);

Route::get('/post', [HomeController::class, 'post']);

Route::get('admin/blog/{slider}/edit', [AdminController::class, 'edits']);  //blog yönledirme
Route::delete('admin/update/post/{category}', [AdminController::class, 'delett']);        //blog silme
Route::patch('admin/update/post/{category}', [AdminController::class, 'updates']); // blog güncelleme

Route::get('/diyetisyens', [HomeController::class, 'diyetisyens']);
Route::get('admin/diyetisyen/{slider}/edit', [AdminController::class, 'editss']);
Route::patch('admin/update/diyetisyen/{category}', [AdminController::class, 'updatess']); // slider güncelleme
Route::delete('admin/update/diyetisyen/{category}', [AdminController::class, 'delettt']);

Route::get('/randevus', [HomeController::class, 'randevus']);
Route::delete('admin/update/randevu/{category}', [HomeController::class, 'deletts']);

Route::get('/new', [HomeController::class, 'new']); //diyetisyen sayfasına yönlendirme
Route::post('admin/new/diyetisyen', [HomeController::class, 'gonderi']); //Yeni diyetisyen

Route::get('/sliders', [AdminController::class, 'sliders']);
Route::post('admin/new', [AdminController::class, 'add']);


Route::get('/tarifs',[AdminController::class,'tarifs']);
Route::get('/tarifler',[AdminController::class,'ekle']);

Route::post('/admin/new/tarif',[AdminController::class,'tarifler']);
Route::get('admin/tarif/{slider}/edit', [AdminController::class, 'editsss']);
Route::patch('admin/update/tarif/{category}', [AdminController::class, 'updatesss']); 
Route::delete('admin/update/tarif/{category}', [AdminController::class,'delets']);