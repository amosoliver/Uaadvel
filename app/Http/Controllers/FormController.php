<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Form;
use App\Http\Controllers\SelectController;

class FormController extends Controller
{
    public function __construct(SelectController $selectController, Form $form)
    {
        $this->selectController = $selectController;
        $this->form = $form;
    }
    public function index() {

    }
    public function create()
    {
        $v['setor'] = $this->selectController->setor();
        $v['idade'] = $this->selectController->idade();
        $v['oportunidade'] = $this->selectController->oportunidade();
        $v['ministerio'] = $this->selectController->ministerio();
        $v['anoEscolar'] = $this->selectController->anoEscolar();
        $v['redes'] = $this->selectController->redes();
        $v['programacao'] = $this->selectController->programacao();

        return response()->view('form', $v);
    }
    public function store() {
        try {
            $form = new Form();

            $form->nome= $request->input('nome');
            $form->idade = $this->getBase64Image($request->file('idade'));
            $form->setor = $request->input('setor');
            $form->telefone = $request->input('numero');
            $form->ano_escolar = $request->input('ano_escolar');
            $form->sobre_lideranca = $request->input('liderança');
            $form->ministerio_exerce = $request->input('ministerio_exerce');
            $form->ministerio_indentifica = $request->input('ministerio_indentifica');
            $form->oportunidade_culto = $request->input('oportunidade_culto');
            $form->$oportunidade_descrita = request->input('oportunidade_descrita');
            $form->participacao_programacoes = $request->input('participacap');
            $form->segue_redes_sociais= $request->input('ds_form');

            if ($form->save()) {
                return redirect()->route('form.create')->with('success', 'form registrada com sucesso!');
            }
        } catch (\Exception $ex) {
            return redirect()->back()->with('error', 'Ocorreu um erro ao cadastrar a form: ' . $ex->getMessage());
        }

        return redirect()->back()->with('error', 'Ocorreu um erro ao cadastrar a form.');
    }
    public function edit() {

    }

    public function update() {

    }
}
