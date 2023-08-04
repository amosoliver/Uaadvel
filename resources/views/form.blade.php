@extends('default')
@section('main')
    <div class="container border mt-5 ">
        <div class="box mt-2">
            <div class="box-header">
                <div class="box-title">
                    <h1>Formulario</h1>
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

        <div class="box-body">

            <div class="form-group">
                {{ Form::label('nome', 'Nome', ['class' => 'control-label col-md-3 col-lg-2']) }} <br>
                {{ Form::text('nome', null, ['class' => 'form-control']) }}
            </div>

        </div>
        <div class="box-footer mb-2 text-end">
            <br>
            <button type="submit" class="btn btn-primary btn-submit ">ADICIONAR</button>
        </div>
        {{ Form::close() }}
    </div>
@endsection
