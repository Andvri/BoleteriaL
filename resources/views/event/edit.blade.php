@extends('layouts.app')
@section('content')
@if(isset($element))
<div class="container">
    <form class="form" method="post"  action="/eEvent/{{$element->id}}">
        {{ csrf_field() }}
            @if($errors->any())
            Existen Errores
            @endif
        <div class="form-group">
            <label for="exampleInputEmail1">Nombre del Evento</label>
            <input type="text" placeholder="Ej: Salon del Manga" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value={{$element->name}} name="name" placeholder="Enter email" value={{$element->email}}>
        </div>

        <div class="form-group">
            <label for="exampleInputPassword1">Fecha</label>
            <input name="date" type="date"  value={{$element->date}} class="form-control" id="exampleInputPassword1" placeholder="Ej: 2017-05-06">
        </div>

        <div class="form-group">
            <label for="exampleInputEmail1">Vip</label>
            <input type="number" min="0" placeholder="" value={{$element->vip}} class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="vip" placeholder="">
            <label for="exampleInputEmail1">Platinium</label>
            <input type="number" min="0" placeholder="" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="platinium" value={{$element->platinium}} placeholder="">
            <label for="exampleInputEmail1">Medios</label>
            <input type="number" min="0" placeholder="" class="form-control" value={{$element->medios}} id="exampleInputEmail1" aria-describedby="emailHelp" name="medios" placeholder="">
        
            <label for="exampleInputEmail1">Altos</label>
            <input type="number" min="0" placeholder="" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="altos" value={{$element->altos}} placeholder="">
        </div>  



    <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
@endif
@endsection