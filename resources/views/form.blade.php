@extends('default')
@section('main')
    <div class="container border mt-5 mb-3 ">
        <div class="box mt-2">
            <div class="box-header">
                <div class="box-title">
                    <h1>Formulário Uaadvel</h1>
                </div>
                <br>
            </div>
        </div>
        {{ Form::open([
            'class' => 'form-horizontal',
            'method' => 'POST',
            'route' => 'form.store',
            'enctype' => 'multipart/form-data',
        ]) }}
        <div class="box">
            <div class="box-body">

                <div class="form-group">
                    {{ Form::label('nome', 'Nome', ['class' => 'control-label col-md-3 col-lg-2']) }} <br>
                    {{ Form::text('nome', null, ['class' => 'form-control']) }}
                </div>
                <div class="form-group">
                    {{ Form::label('idade', 'Selecione sua idade:') }}
                    {{ Form::select('idade',['Selecione a idade', $idade], null, ['class' => 'form-control', 'id' => 'idade']) }}
                </div>
                <div class="form-group">
                    {{ Form::label('setor', 'Setor', ['class' => 'control-label col-md-3 col-lg-2']) }} <br>
                    {{ Form::select('setor', ['Selecione um setor',$setor], null, ['class' => 'form-control', 'id' => 'setor']) }}
                </div>
                <div class="form-group">
                    {{ Form::label('numero', 'Número de celular', ['class' => 'control-label col-md-3 col-lg-2']) }}
                    <br>
                    {{ Form::text('numero', null, ['class' => 'form-control telefone']) }}
                </div>
                <div class="form-group">
                    {{ Form::label('ano_escolar', 'Ano escolar', ['class' => 'control-label col-md-3 col-lg-2']) }} <br>
                    {{ Form::select('ano_escolar',['Selecione um ano', $anoEscolar], null, ['class' => 'form-control', 'id' => 'ano']) }}
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
                            {{ Form::label('lideranca', 'O que você espera da liderança da UAADVEL ?', ['class' => 'control-label col-md-3 col-lg-2']) }}<br>
                            {{ Form::text('lideranca', null, ['class' => 'form-control']) }}
                        </div>
                        <div class="form-group">
                            {{ Form::label('nome', 'Qual ministério você exerce na igreja?
                            (opções: louvor, professor da EBD, mídia, regente, pregador, outros...)', ['class' => 'control-label col-md-3 col-lg-2']) }} <br>
                            {{ Form::select('ministerio',['Selecione um ministério', $ministerio], null, ['class' => 'form-control', 'id' => 'ministerio']) }}
                        </div>
                        <div class="form-group">
                            {{ Form::label('nome', 'Nome', ['class' => 'control-label col-md-3 col-lg-2']) }} <br>
                            {{ Form::text('nome', null, ['class' => 'form-control']) }}
                        </div>
                        <div class="form-group">
                            {{ Form::label('profissao', 'Em qual profissão você quer seguir? (Descreva)', ['class' => 'control-label col-md-3 col-lg-2']) }}
                            <br>
                            {{ Form::text('profissao', null, ['class' => 'form-control']) }}
                        </div>
                        <div class="form-group">
                            {{ Form::label('nome', 'Nome', ['class' => 'control-label col-md-3 col-lg-2']) }} <br>
                            {{ Form::text('nome', null, ['class' => 'form-control']) }}
                        </div>
                        <div class="form-group">
                            {{ Form::label('nome', 'Nome', ['class' => 'control-label col-md-3 col-lg-2']) }} <br>
                            {{ Form::text('nome', null, ['class' => 'form-control']) }}
                        </div>
                        <div class="form-group">
                            {{ Form::label('nome', 'Nome', ['class' => 'control-label col-md-3 col-lg-2']) }} <br>
                            {{ Form::text('nome', null, ['class' => 'form-control']) }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="box-footer mb-2 text-end">
            <br>
            <button type="submit" class="btn btn-primary btn-submit ">ADICIONAR</button>
        </div>
        {{ Form::close() }}
    </div>
@endsection
