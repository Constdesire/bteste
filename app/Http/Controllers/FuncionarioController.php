<?php

namespace App\Http\Controllers;
use App\Models\Funcionarios;

use Illuminate\Http\Request;

class FuncionarioController extends Controller
{
    public function FuncionarioCad(Request $req){
        $funcionariosC = Funcionarios::all();
        return view('FuncionarioCad')->with("funcionariosC", $funcionariosC);
    }

    public function AdicionarFunc(Request $req){
        $funcionarioC = new Funcionarios;
        $funcionarioC->NomeFunc = $req->NomeFunc;
        $funcionarioC->DataNascFunc = $req->DataNascFunc;
        $funcionarioC->CPFfunc = $req->CPFfunc;
        $funcionarioC->TelefoneFunc = $req->TelefoneFunc;
        $funcionarioC->EnderecoFunc = $req->EnderecoFunc;
        $funcionarioC->RGFunc = $req->RGFunc;
        $funcionarioC->CEPFunc = $req->CEPFunc;
        $funcionarioC->EmailFunc = $req->EmailFunc;
        $funcionarioC->save();
        return redirect()->back();
    }

    public function  editarFunc($id){
        $funcionarioC = Funcionarios::find($id);
        return view('FuncionarioEdit')->with("funcionarioC", $funcionarioC);
    }
    
    public function atualizarFunc(Request $req){
        $funcionarioC = Funcionarios::find($req->id);
        $funcionarioC->update([
            "NomeFunc" => $req->NomeFunc,
            "DataNascFunc" => $req->DataNascFunc,
            "CPFfunc" => $req->CPFfunc,
            "TelefoneFunc" => $req->TelefoneFunc,
            "EnderecoFunc" => $req->EnderecoFunc,
            "RGFunc" => $req->RGFunc,
            "CEPFunc" => $req->CEPFunc,
            "EmailFunc" => $req->EmailFunc
        ]);
        return redirect('/FC');
    }

    public function excluirFunc(Request $req){
        $funcionarioC = Funcionarios::find($req->id);
        $funcionarioC->delete();
        return redirect()->back();
    }
}