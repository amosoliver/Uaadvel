@extends('default')
@section('main')
<div class="container border mt-5 mb-3">
    <div class="box mt-2">
        <div class="box-header">
            <div class="box-title">
                <h1>Formulário Uaadvel</h1>
            </div>
        </div>
    </div>

    {{ Form::open([
        'class' => 'form-horizontal',
        'method' => 'POST',
        'route' => 'form.store',
        'enctype' => 'multipart/form-data',
    ]) }}

    <div class="box col-md-12">
        <div class="box-body">

            <div class="form-group">
                {{ Form::label('nome', 'Nome', ['class' => 'control-label col-md-3 col-lg-2']) }}
                <div class="col-md-9 col-lg-10">
                    {{ Form::text('nome', null, ['class' => 'form-control']) }}
                </div>
            </div>

            <div class="form-group">
                {{ Form::label('idade', 'Selecione sua idade:', ['class' => 'control-label col-md-3 col-lg-2']) }}
                <div class="col-md-9 col-lg-10">
                    {{ Form::select('idade', ['Selecione a idade'] + $idade, null, ['class' => 'form-control', 'id' => 'idade']) }}
                </div>
            </div>

            <div class="form-group">
                {{ Form::label('setor', 'Setor', ['class' => 'control-label col-md-3 col-lg-2']) }}
                <div class="col-md-9 col-lg-10">
                    {{ Form::select('setor', ['Selecione um setor'] + $setor, null, ['class' => 'form-control', 'id' => 'setor']) }}
                </div>
            </div>

            <div class="form-group">
                {{ Form::label('numero', 'Número de celular', ['class' => 'control-label col-md-3 col-lg-2']) }}
                <div class="col-md-9 col-lg-10">
                    {{ Form::text('numero', null, ['class' => 'form-control telefone']) }}
                </div>
            </div>

            <div class="form-group">
                {{ Form::label('ano_escolar', 'Ano escolar', ['class' => 'control-label col-md-3 col-lg-2']) }}
                <div class="col-md-9 col-lg-10">
                    {{ Form::select('ano_escolar', ['Selecione um ano'] + $anoEscolar, null, ['class' => 'form-control', 'id' => 'ano']) }}
                </div>
            </div>

            <div class="container border mt-3 mb-3">
                <div class="box">
                    <div class="box-header">
                        <div class="box-title mt-2">
                            <h3>Queremos te conhecer mais um pouquinho</h3>
                        </div>
                    </div>
                    <div class="box-body">

                        <div class="form-group">
                            {{ Form::label('lideranca', 'O que você espera da liderança da UAADVEL ?', ['class' => 'control-label col-md-3 col-lg-2']) }}
                            <div class="col-md-9 col-lg-10">
                                {{ Form::text('lideranca', null, ['class' => 'form-control']) }}
                            </div>
                        </div>

                        <div class="form-group">
                            {{ Form::label('ministerio', 'Qual ministério você exerce na igreja?', ['class' => 'control-label col-md-3 col-lg-2']) }}
                            <div class="col-md-9 col-lg-10">
                                {{ Form::select('ministerio', $ministerio, null, ['class' => 'form-control', 'id' => 'ministerio']) }}
                            </div>
                        </div>

                        <div class="form-group">
                                {{ Form::label('profissao', 'Em qual profissão você quer seguir? (Descreva)', ['class' => 'control-label col-md-3 col-lg-2']) }}
                            <div class="col-md-9 col-lg-10">
                                {{ Form::text('profissao', null, ['class' => 'form-control']) }}
                            </div>
                        </div>

                        <div class="form-group">
                            {{ Form::label('oportunidade', 'Você gostaria de ter oportunidade nos cultos da UAADVEL?', ['class' => 'control-label col-md-3 col-lg-2']) }}
                            <div class="col-md-9 col-lg-10">
                            {{ Form::select('oportunidade', $oportunidade, null, ['class' => 'form-control', 'id' => 'ministerio']) }}
                            </div>
                        </div>

                            {{ Form::label('oportunidade_descrita', 'Se a resposta for SIM Qual seria? (descreva)', ['class' => 'control-label col-md-3 col-lg-2']) }}
                            <div class="col-md-9 col-lg-10">
                                {{ Form::text('oportunidade_descrita', null, ['class' => 'form-control']) }}
                            </div>
                        </div>

                        <div class="form-group">
                        <div class="row">
                            {{ Form::label('programacao', 'Você participou das últimas programações que tivemos?', ['class' => 'control-label col-md-3 col-lg-2']) }}
                            </div>
                            <div class="col-md-9 col-lg-10">
                                {{ Form::select('programacao', $programacao, null, ['class' => 'form-control', 'id' => 'programacao']) }}
                            </div>
                        </div>

                        <div class="form-group">
                            {{ Form::label('redes', 'Você já nos segue nas redes sociais?', ['class' => 'control-label col-md-3 col-lg-2']) }}
                            <div class="col-md-9 col-lg-10">
                                {{ Form::select('redes',$redes, null, ['class' => 'form-control c', 'id' => 'redes']) }}
                            </div>
                        </div>

                    </div>
                </div>
            </div>

        </div>

        <div class="box-footer mb-2 text-end">
            <br>
            {{ Form::button('ADICIONAR', ['type' => 'submit', 'class' => 'btn btn-primary btn-submit']) }}
        </div>
    </div>

    {{ Form::close() }}
</div>
@endsection
