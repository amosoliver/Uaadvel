<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\SelectController;

class FormController extends Controller
{
    public function __construct(SelectController $selectController)
    {
        $this->selectController = $selectController;
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

    }
    public function edit() {

    }

    public function update() {

    }
}
