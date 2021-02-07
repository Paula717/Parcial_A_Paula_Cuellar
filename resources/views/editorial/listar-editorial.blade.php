@extends('layout.master')
    @section('content')

    <br>
    <h2><font color="black"><center>📋 Listado de Editorial 📋</center></font></h2>

    <br>
    <table class="table" border="3">
        <thead>
            <tr bgcolor="Turquoise">
                <th scope="col">#</th>
                <th scope="col">Nombre</th>
                <th scope="col">Dirección</th>
                <th scope="col">Ciudad</th>
                <th scope="col">Telefono</th>
            </tr>
        </thead>
        <tbody>
            @foreach($editorial as $edi )
                <tr bgcolor="LightCyan">
                    <td>{{$edi->id}}</td>
                    <td>{{$edi->nombre}}</td>
                    <td>{{$edi->direccion}}</td>
                    <td>{{$edi->ciudad}}</td>
                    <td>{{$edi->telefono}}</td>
                </tr>
            @endforeach 
        </tbody>
    </table> 
@stop