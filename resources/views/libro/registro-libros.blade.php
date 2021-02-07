@extends('layout.master')
    @section('content')
    
    <br>
    <div  align="center">
        <font size=4 face="Comic Sans MS,arial,verdana"><h2>Registro de Libros</h2></font>
    </div>
    <br>
    <form action="{{route('registroLib')}}" method="POST">
    @csrf

        <label for="nombre">ISBN </label>
            <div class="input-group mb-3">
                <input type="text" class="form-control" id='ISBM' name='ISBM' placeholder="ISBM" aria-label="Username" aria-describedby="basic-addon1" required>
            </div>

        <label for="nombre">Titulo de Libro </label>
            <div class="input-group mb-3">
                <input type="text" class="form-control" id='titulo' name='titulo' placeholder="Titulo de Libro" aria-label="Username" aria-describedby="basic-addon1" required>
            </div>

        <label for="nombre">Precio </label>
            <div class="input-group mb-3">
                <input type="number" class="form-control" id='precio' name='precio' placeholder="$" aria-label="Username" aria-describedby="basic-addon1" required>
            </div>

        <label for="nombre">Editorial </label>
            <div class="input-group mb-3">
                <select class="form-select" aria-label="Default select example" name="editorial">
                    @foreach($editorial as $c)
                        <option value="{{$c->id}}">{{$c->nombre}}</option>
                    @endforeach
                </select> 
            </div>

        <br>

        <button type="submit" class="btn btn-primary">Registrar</button>

        <button type="reset" class="btn btn-danger">Borrar</button>
        
        <a href="{{route('principal')}}" class="btn btn-success" >Volver</a>
        
    </form>
    <br><br>
 @stop