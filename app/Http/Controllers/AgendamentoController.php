<?php

namespace App\Http\Controllers;
use App\Models\Agendamento;

use Illuminate\Http\Request;

class AgendamentoController extends Controller
{
    public function AgendamentoCad(Request $req)
    {
        $agendamentoCA = Agendamento::all();
        return view('AgendamentoCad')->with("agendamentoCA", $agendamentoCA);
    }

    public function adicionarA(Request $req)
    {
        $agendamentoCA = new Agendamento;
        $agendamentoCA->Servico = $req->Servico;
        $agendamentoCA->DataServico = $req->DataServico;
        $agendamentoCA->Horario = $req->Horario;
        $agendamentoCA->IdCliente = $req->IdCliente;
        $agendamentoCA->IdFunc = $req->IdFunc;
        $agendamentoCA->save();
        return redirect()->back();
    }

    public function editarA(Request $req)
    {
        $agendamentoCA = Agendamento::find($req->id);
        return view('AgendamentoEdit')->with("agendamentoCA", $agendamentoCA);
    }

    public function atualizarA(Request $req)
    {
        $agendamentoCA = Agendamento::find($req->id);
        $agendamentoCA->update([
            "Servico" => $req->Servico,
            "DataServico" => $req->DataServico,
            "Horario" => $req->Horario,
            "IdCliente" => $req->IdCliente,
            "IdFunc" => $req->IdFunc
        ]);
        return redirect('/AC');
    }

    public function excluirA(Request $req)
    {
        $agendamentoCA = Agendamento::find($req->id);
        $agendamentoCA->delete();
        return redirect()->back();
    }
}