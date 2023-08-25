@extends('default')
@section('main')
    <div class="">
        <div class="box mt-2">
            <div class="box-header">
                <div class="box-title">
                    <h1>Formulário Uaadvel</h1>
                </div>
            </div>
        </div>

        <div class="box">
            <div class="box-body">
                <table class="table table-bordered tabled-condensed table-striped table-hover">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th width="200">Nome</th>
                        <th>Idade</th>
                        <th >Setor</th>
                        <th width="138">Telefone</th>
                        <th>Ano Escolar</th>
                        <th>Sobre a liderança</th>
                        <th width="250">Exerce algum ministério</th>
                        <th width="250">Identifica com que ministério?</th>
                        <th>Oportunidade no culto</th>
                        <th>Tipo de oportunidade</th>
                        <th>Profissão</th>
                        <th>Participação nas programações</th>
                        <th>Já segue nas redes sociais?</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($form as $form)
                        <tr>
                            <td>{{$loop->iteration}}</td>
                            <td>{{$form->nome}}</td>
                            <td>{{$form->idade}}</td>
                            <td>{{$form->setor}}</td>
                            <td>{{$form->telefone}}</td>
                            <td>{{$form->ano_escolar}}</td>
                            <td>{{$form->sobre_lideranca}}</td>
                            <td>{{$form->ministerio_exerce}}</td>
                            <td>{{$form->ministerio_identifica}}</td>
                            <td>{{$form->oportunidade_culto}}</td>
                            <td>{{$form->oportunidade_descrita}}</td>
                            <td>{{$form->profissao}}</td>
                            <td>{{$form->participacao_programacoes}}</td>
                            <td>{{$form->segue_redes_sociais}}</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
@endsection
