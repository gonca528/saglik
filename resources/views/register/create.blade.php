@extends('components.layout')
  <section class="px-6 py-8">
    <main class="max-w-lg mx-auto mt-10 bg-gray-100 border border-gray-200 p-6 rounded-xl">
      <h1 style="margin-top: 70px; margin-right:80px;" class= "text-center font-bold text-xl"> Kayıt Ol</h1>
      <div class="container">

      <form method="POST" action="kayıt" class="mt-10">

       @csrf    <!--blade template kullanılarak oluşturulan formlarda kullanılır kulllanmazsak hata alıyoruz. -->
       <div class="form-group">
        <div class="row">
          <div class="col-md-12 ">
            <label class="block mb-2 uppercase font-bold text-xs text-gray-700" for="name">
              Name
            </label>
            <input 
          class="form-control" type="text" name="name" id="name" required>
            @error('name')
            <p class="text-red-500 text-xs mt-1">
              {{ $message }}
            </p>
            @enderror
        </div>

        </div>
        <div class="row">
          <div class="col-md-12 ">
            <label class="block mb-2 uppercase font-bold text-xs text-gray-700" for="username">
              Username
            </label>
  
            <input class="form-control " type="text" name="username" id="username" required>
            @error('username')
            <p class="text-red-500 text-xs mt-1">
              {{ $message }}
            </p>
            @enderror
          </div>
        </div>

        <div class="row">
          <div class="col-md-12 ">
            <label class="block mb-2 uppercase font-bold text-xs text-gray-700" for="email">
              Email
            </label>
  
            <input class="form-control " type="text" name="email" id="email" required>
            @error('email')
            <p class="text-red-500 text-xs mt-1">
              {{ $message }}
            </p>
            @enderror
          </div>
        </div>
    

        <div class="row">
          <div class="col-md-12 ">
            <label class="block mb-2 uppercase font-bold text-xs text-gray-700" for="password">
              Şifre
            </label>
  
            <input class="form-control " type="password" name="password" id="password" required>
            @error('password')
            <p class="text-red-500 text-xs mt-1">
              {{ $message }}
            </p>
            @enderror
          </div>
        </div>
       

        <div class="row">
          <div  class="col-md-12 mt-3  ">
         
  
            <button  type="submit" class="bg-dark-500 text-black rounded py-2 px-4 hover:bg-blue-500"> Kayıt Ol </button>
            @error('email')
            <p class="text-red-500 text-xs mt-1">
              {{ $message }}
            </p>
            @enderror
          </div>
        </div>

        <ul>

          @foreach($errors->all() as $error)
          <li class="text-red-500 text-xs mt-1"> {{ $error }} </li>
          @endforeach
        </ul>
      </form>
</div>
    </main>
  </section>
