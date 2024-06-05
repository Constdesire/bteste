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
            <p class="my-4 text-center">Faça login ao Beleza em fios!</p>
            <form method="POST" action="{{ route('login') }}" class="space-y-4">
                @csrf

                <div>
                    <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                    <input id="email" type="email" class="mt-1 p-2 w-full border rounded-md focus:border-gray-200 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-300 transition-colors duration-300" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                    @error('email')
                        <span class="text-red-500 text-sm" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div>
                    <label for="password" class="block text-sm font-medium text-gray-700">Password</label>
                    <input id="password" type="password" class="mt-1 p-2 w-full border rounded-md focus:border-gray-200 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-300 transition-colors duration-300" name="password" required autocomplete="current-password">
                    @error('password')
                        <span class="text-red-500 text-sm" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div>
                    <button type="submit" class="w-full bg-black text-white p-2 rounded-md hover:bg-gray-800 focus:outline-none focus:bg-black focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-900 transition-colors duration-300">Logar</button>
                </div>

                @if (Route::has('password.request'))
                    <div class="text-sm text-gray-600 text-center">
                        <a href="{{ route('password.request') }}" class="text-black hover:text-gray-800">Esqueceu sua senha?</a>
                    </div>
                @endif
            </form>
            <div class="mt-4 text-sm text-gray-600 text-center">
                <p>Caso não possua cadastro <a href="{{ route('register') }}" class="text-black hover:text-gray-800">Cadastre-se</a></p>
            </div>
        </div>
    </div>
</div>


@endsection
 