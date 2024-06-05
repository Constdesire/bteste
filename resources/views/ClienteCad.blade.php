<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <title>Cadastre Cliente</title>
    <style>
        body {
            background-color: #A36A4F;
        }
        .header-site {
            background-image: url('img/cad.png');
            background-position: center top;
            background-repeat: no-repeat;
            background-size: cover;
            background-attachment: fixed;
            color: #2f302f;
            padding: 12% 10%;
            box-sizing: border-box;
        }
        @media (max-width: 768px) {
            .header-site {
                padding: 20% 5%;
            }
        }
        @media (max-width: 480px) {
            .header-site {
                padding: 25% 3%;
            }
        }
    </style>
</head>
<body>
<!--<section class="header-site"></section>-->

<div class="flex items-center justify-center p-12">
    <div class="max-w-6xl w-full bg-white shadow-md rounded-lg flex">
        <!-- Image Section -->
        <div class="w-1/2 hidden lg:block">
            <img src="img/salaoB.jpg" alt="Side Image" class="w-full h-full object-cover rounded-l-lg">
        </div>
        <!-- Form Section -->
        <div class="w-full lg:w-1/2 p-6">
            <h1 class="text-3xl font-semibold mb-6 text-black text-center">Cadastre-se!!!</h1>
            <p class="my-4 text-center">Faça seu cadastro para se tornar um cliente do Beleza em fios!</p>
            <form method="POST" action="/adicionaCliente">
            @csrf
           <div class="form-group mb-2">
                <label for="formGroupExampleInput2">Nome</label>
                    <input type="text" class="form-control" name="Nome" >
           </div>
           <div class="form-group mb-2">
                <label for="formGroupExampleInput2" >Data de Nascimento</label>
                    <input type="date" class="form-control" name="DataNasc" placeholder="" >
           </div>
           <div class="form-group mb-2">
                <label for="formGroupExampleInput2">CPF</label>
                    <input type="text" class="form-control" name="CPF" placeholder="">
           </div>
           <div class="form-group mb-2">
                <label for="formGroupExampleInput2">Telefone</label>
                    <input type="text" class="form-control" name="Telefone" >
           </div>
           <div class="form-group mb-2">
                <label for="formGroupExampleInput2">Endereço</label>
                    <input type="text" class="form-control" name="Endereco" placeholder="">
           </div>
           <div class="form-group mb-2">
                <label for="formGroupExampleInput2">CEP</label>
                    <input type="text" class="form-control" name="CEP" placeholder="">
           </div>
           <div class="form-group mb-2">
                <label for="formGroupExampleInput2">Email</label>
                    <input type="text" class="form-control" name="Email" placeholder="">
           </div>
          
           <button type="submit" class="w-full bg-black text-white p-2 rounded-md hover:bg-gray-800 focus:outline-none focus:bg-black focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-900 transition-colors duration-300">Cadastrar</button> 
      </form>
        </div>
    </div>
</div>

<div class="flex justify-center">
    <div class="overflow-auto">
        <table class="min-w-full divide-y divide-gray-200">
            <thead class="bg-black">
                <tr>
                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-white uppercase tracking-wider">Id</th>
                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-white uppercase tracking-wider">Nome</th>
                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-white uppercase tracking-wider">Data de Nascimento</th>
                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-white uppercase tracking-wider">CPF</th>
                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-white uppercase tracking-wider">Endereco</th>
                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-white uppercase tracking-wider">Telefone</th>
                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-white uppercase tracking-wider">CEP</th>
                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-white uppercase tracking-wider">Email</th>
                    <th scope="col" class="px-6 py-3"></th>
                </tr>
            </thead>
            <tbody class="bg-white divide-y divide-gray-200">
                @if (count($cliente) > 0)
                    @foreach ($cliente as $cont)
                        <tr>
                            <td class="px-6 py-4 whitespace-nowrap">{{ $cont->id }}</td>
                            <td class="px-6 py-4 whitespace-nowrap">{{ $cont->Nome }}</td>
                            <td class="px-6 py-4 whitespace-nowrap">{{ $cont->DataNasc }}</td>
                            <td class="px-6 py-4 whitespace-nowrap">{{ $cont->CPF }}</td>
                            <td class="px-6 py-4 whitespace-nowrap">{{ $cont->Telefone }}</td>
                            <td class="px-6 py-4 whitespace-nowrap">{{ $cont->Endereco }}</td>
                            <td class="px-6 py-4 whitespace-nowrap">{{ $cont->CEP }}</td>
                            <td class="px-6 py-4 whitespace-nowrap">{{ $cont->Email }}</td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <a href="/editarCL/{{ $cont->id }}" class="text-indigo-600 hover:text-indigo-900">Editar</a>
                                <a href="/excluirCL/{{ $cont->id }}" class="ml-4 text-red-600 hover:text-red-900">Excluir</a>
                            </td>
                        </tr>
                    @endforeach
                @else
                    <tr>
                        <td colspan="9" class="px-6 py-4 text-center">Sem registros!</td>
                    </tr>
                @endif
            </tbody>
        </table>
    </div>
</div>
<br><br><br><br>

<script>
    document.getElementById('navbar-burger').addEventListener('click', function () {
        document.getElementById('navbar-menu').classList.toggle('hidden');
    });

    document.getElementById('navbar-close').addEventListener('click', function () {
        document.getElementById('navbar-menu').classList.toggle('hidden');
    });
</script>
</body>
</html>