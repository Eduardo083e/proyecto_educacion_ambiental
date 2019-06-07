@extends('layout.layout')
@section('content')
    <h1 class="bg-primary text-white text-center">Registrarce</h1>
    <a href="{{url("registros")}}">Agregar</a>
    <div class="row">
        <div class="col">
            <table class="table">
                <thead>
                <th>Id Personas</th>
                <th>Nombre</th>
                <th>Apellido Paterno</th>
                <th>Apellido Materno</th>
                <th> Sexo</th>
                <th> Institucion</th>
                </thead>
                <tbody>
                @foreach($personas as $persona)
                    <tr>
                        <td>{{$persona->id_usuario}}</td>
                        <td>{{$persona->nombre_user}}</td>
                        <td>{{$persona->ap_user}}</td>
                        <td>{{$persona->am_user}}</td>
                        <td>{{isset($persona->getNacionalidad[0])?$persona->getNacionalidad[0]->nom_na:""}}</td>
                        <td><a href="{{route("registros.edit",$persona->id_persona)}}">Modificar</a></td>

                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
<th> Sexo</th>
@endsection