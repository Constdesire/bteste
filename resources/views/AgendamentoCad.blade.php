<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastre Agendamento</title>
    <link rel="stylesheet" href="css/mdb.min.css" />
    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <style>
        body {
            background-color: #FFEAD5;
        }

        .carousel {
            max-width: 2000px;
            margin: 0 auto;
        }

        .navbar-logo {
            height: 60px;
            max-height: 60px;
        }

        section {
            width: 100%;
            min-height: calc(100vh - (110vw / -12));
        }

        section:not(:last-child) * {
            margin-top: 0;
        }

        section:last-child {
            position: relative;
            margin-top: 0;
            padding-top: 0;
            min-height: 100vh;
            z-index: -1;
        }

        section:nth-child(1) {
            background-color: #A36A4F;
            color: #FFEAD5;
        }

        section:nth-child(2) {
            background-color: #FFEAD5;
            color: #A36A4F;
        }

        section:nth-child(3) {
            background-color: #A36A4F;
            color: #FFEAD5;
        }

        section:nth-child(4) {
            background-color: #FFEAD5;
        }

        h1,
        p {
            font-family: 'Roboto', sans-serif;
        }
    </style>
</head>

<body>
    <div class="flex items-center justify-center p-12">
        <div class="max-w-6xl w-full bg-white shadow-md rounded-lg flex">
            <!-- Image Section -->
            <div class="w-1/2 hidden lg:block">
                <img src="img/salaoB.jpg" alt="Side Image" class="w-full h-full object-cover rounded-l-lg">
            </div>
            <div class="w-full lg:w-1/2 p-6">
                <h1 class="text-3xl font-semibold mb-6 text-black text-center">Agende Horário!!!</h1>
                <p class="my-4 text-center">Agendamento de Atendimento para o Beleza em Fios!</p>
                <form method="POST" action="/adicionaAA">
                    @csrf
                    <div class="mb-4">
                        <label for="Servico" class="block text-gray-700 text-sm font-bold mb-2">Serviço</label>
                        <select class="appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="Servico">
                            <option selected>Escolher...</option>
                            <option value="Cabeleireiro">Cabeleireiro</option>
                            <option value="Manicure">Manicure</option>
                            <option value="Tratamento de Pele">Tratamento de Pele</option>
                            <option value="Massagem">Massagem</option>
                        </select>
                    </div>
                    <div class="mb-4">
                        <label for="DataServico" class="block text-gray-700 text-sm font-bold mb-2">Data do Serviço</label>
                        <input type="date" class="appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="DataServico">
                    </div>
                    <div class="mb-4">
                        <label for="Horario" class="block text-gray-700 text-sm font-bold mb-2">Horário</label>
                        <input type="time" class="appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="Horario">
                    </div>
                    <div class="mb-4">
                        <label for="IdCliente" class="block text-gray-700 text-sm font-bold mb-2">Id do Cliente</label>
                        <input type="text" class="appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="IdCliente">
                    </div>
                    <div class="mb-4">
                        <label for="IdFunc" class="block text-gray-700 text-sm font-bold mb-2">Id do Funcionário</label>
                        <input type="text" class="appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="IdFunc">
                    </div>
                    <br>
                    <br>
                    <button type="submit" class="w-full bg-black text-white p-2 rounded-md hover:bg-gray-800 focus:outline-none focus:bg-black focus:ring-2 focus:ring-offset-2 focus:ring-gray-900 transition-colors duration-300">Cadastrar</button>
                </form>
            </div>
        </div>
    </div>
    <div class="flex justify-center">
        <div class="overflow-x-auto w-full lg:w-5/6">
            <table class="min-w-full divide-y divide-gray-200">
                <thead class="bg-black">
                    <tr>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium uppercase tracking-wider text-white">Id</th>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium uppercase tracking-wider text-white">Servico</th>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium uppercase tracking-wider text-white">Data Servico</th>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium uppercase tracking-wider text-white">Horário</th>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium uppercase tracking-wider text-white">Id Cliente</th>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium uppercase tracking-wider text-white">Id Funcionário</th>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium uppercase tracking-wider text-white"></th>
                    </tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-200">
                    @if (count($agendamentoCA) > 0)
                        @foreach ($agendamentoCA as $agen)
                            <tr>
                                <td class="px-6 py-4 whitespace-nowrap">{{ $agen->id }}</td>
                                <td class="px-6 py-4 whitespace-nowrap">{{ $agen->Servico }}</td>
                                <td class="px-6 py-4 whitespace-nowrap">{{ $agen->DataServico }}</td>
                                <td class="px-6 py-4 whitespace-nowrap">{{ $agen->Horario }}</td>
                                <td class="px-6 py-4 whitespace-nowrap">{{ $agen->IdCliente }}</td>
                                <td class="px-6 py-4 whitespace-nowrap">{{ $agen->IdFunc }}</td>
                                <td>
                                    <a href="/editarAA/{{ $agen->id }}" class="text-indigo-600 hover:text-indigo-900">Editar</a>
                                    <a href="/excluirAA/{{ $agen->id }}" class="text-indigo-600 hover:text-red-900">Excluir</a>
                                </td>
                            </tr>
                        @endforeach
                    @else
                        <tr>
                            <td colspan="6" class="px-6 py-4 whitespace-nowrap text-center">Sem registros!</td>
                        </tr>
                    @endif
                </tbody>
            </table>
        </div>
    </div>
    <br><br><br><br>
</body>

</html>
