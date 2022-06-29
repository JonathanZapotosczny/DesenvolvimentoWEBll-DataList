<!-- Herda o layout padrão definido no template "main" -->
@extends('templates.main', ['titulo' => "Veterinários", 'rota' => "veterinarios.create"])
<!-- Preenche o conteúdo da seção "titulo" -->
@section('titulo') Veterinários @endsection
<!-- Preenche o conteúdo da seção "conteudo" -->
@section('conteudo')

    <div class="row">
        <div class="col">
            
            <!-- Utiliza o componente "datalist" criado -->
            <x-datalistVet
                :header="['ID', 'NOME', 'CRMV', 'ESPECIALIDADE', 'AÇÕES']" 
                :data="$dados"
                :hide="[true, false, true, false, true]" 
            />

        </div>
    </div>
@endsection