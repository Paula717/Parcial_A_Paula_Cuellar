@extends('layout.master')
    @section('content')

    <br>
    <h2><font color="black"><center>🗒 Listado de Libros 🗒 </center></font></h2>

    <br>
    <table class="table" border="3" >
    
        <thead >
            <tr bgcolor="Turquoise">
                <th scope="col">#</th>
                <th scope="col">ISBN</th>
                <th scope="col">Titulo</th>
                <th scope="col">Editorial</th>
                <th scope="col">Precio</th>

                <th scope="col">Descuento</th>
                <th scope="col">Opciones</th>
            </tr>
        </thead>

        <tbody>
            @foreach($libro as $p )
                <tr bgcolor="LightCyan">
                    <td>{{$p->id}}</td>
                    <td>{{$p->ISBN}}</td>
                    <td>{{$p->titulo}}</td>
                    
                    @foreach($editorial as $edi)
                        @if($p->editorial_fk == $edi->id)
                            <td>{{$edi->nombre}}</td>
                        @endif
                    @endforeach 

                    <td>{{$p->precio}}</td>

                    <td>{{$p->precio*0.1}}</td>
                    
                    <td><a href="{{route('form_actualiza_libro', $p->id)}}" class="btn btn-success"> Editar </a></td>
                </tr>
            @endforeach 
        </tbody>
    </table> 

@stop