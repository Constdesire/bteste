@extends('layouts.app')

@section('content')
<div class="flex h-screen">
  <!-- Left Pane -->
  <div class="hidden lg:flex items-center justify-center flex-1 bg-white text-black">
    <div class="max-w-md text-center">
      <img src="img/logo.png" width="1000" height="1000" alt="...">
    </div>
  </div>
  <!-- Right Pane -->
  <div class="w-full bg-brown-200 lg:w-1/2 flex items-center justify-center">
    <div class="max-w-md w-full p-6">
      <h1 class="text-3xl font-semibold mb-6 text-black text-center">Bem vindo(a)!!!</h1>
      <p class="my-4 text-center">Registre-se ao Beleza em fios!</p>
      <form method="POST" action="{{ route('register') }}" class="space-y-4">
        @csrf
        <!-- Name Input -->
        <div>
          <label for="name" class="block text-sm font-medium text-gray-700">Nome</label>
          <input id="name" type="text" name="name" value="{{ old('name') }}" class="mt-1 p-2 w-full border rounded-md focus:border-gray-200 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-300 transition-colors duration-300">
          @error('name')
          <span class="text-red-500 text-sm">{{ $message }}</span>
          @enderror
        </div>
        <!-- Email Input -->
        <div>
          <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
          <input id="email" type="email" name="email" value="{{ old('email') }}" class="mt-1 p-2 w-full border rounded-md focus:border-gray-200 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-300 transition-colors duration-300">
          @error('email')
          <span class="text-red-500 text-sm">{{ $message }}</span>
          @enderror
        </div>
        <!-- Password Input -->
        <div>
          <label for="password" class="block text-sm font-medium text-gray-700">Senha</label>
          <input id="password" type="password" name="password" class="mt-1 p-2 w-full border rounded-md focus:border-gray-200 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-300 transition-colors duration-300">
          @error('password')
          <span class="text-red-500 text-sm">{{ $message }}</span>
          @enderror
        </div>
        <!-- Confirm Password Input -->
        <div>
          <label for="password_confirmation" class="block text-sm font-medium text-gray-700">Confirmar Senha</label>
          <input id="password_confirmation" type="password" name="password_confirmation" class="mt-1 p-2 w-full border rounded-md focus:border-gray-200 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-300 transition-colors duration-300">
        </div>
        <!-- Register Button -->
        <div>
          <button type="submit" class="w-full bg-black text-white p-2 rounded-md hover:bg-gray-800 focus:outline-none focus:bg-black focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-900 transition-colors duration-300">Registrar</button>
        </div>
      </form>
    </div>
  </div>
</div>

@endsection
