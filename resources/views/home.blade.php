@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('Seja Bem Vindo(a), você esta logado!!') }}
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container mt-5">
        <h1 class="title">Painel de Administração</h1>
        <div class="button-container">
            <a href="FC" class="button">
                <img src="https://img.icons8.com/ios-filled/50/000000/conference-call.png" alt="Icone Funcionário">
                Gerenciar Funcionários
            </a>
            <a href="ClienteCad" class="button">
                <img src="https://img.icons8.com/ios-filled/50/000000/user-group-man-man.png" alt="Icone Cliente">
                Gerenciar Clientes
            </a>
 
            <!-----
            <a href="AC" class="button">
                <img src="https://img.icons8.com/ios-filled/50/000000/user-group-man-man.png" alt="Icone Cliente">
                Gerenciar Agendamentos
            </a>
            -->

        </div>
    </div>
@endsection
