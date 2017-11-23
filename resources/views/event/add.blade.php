@extends('layouts.app')
@section('content')
<div class="container">
    <form class="form" method="post"  action=  @if(isset($element)) "/eEvent" @else  "/aEvent/create" @endif>
        {{ csrf_field() }}
            @if($errors->any())
            Existen Errores
            @endif
        <div class="form-group{{ $errors->has('name') ? ' has-danger' : '' }}">
            <label for="exampleInputEmail1">Nombre del Evento</label>
            <input type="text" placeholder="Ej: Salon del Manga" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="name" placeholder="Enter email">
            @if ($errors->has('name'))
                <span class="help-block">
                    <strong>{{ $errors->first('name') }}</strong>
                </span>
            @endif
        </div>

        <div class="form-group{{ $errors->has('date') ? ' has-danger' : '' }}">
            <label for="exampleInputPassword1">Fecha</label>
            <input name="date" type="date" class="form-control" id="exampleInputPassword1" placeholder="Ej: 2017-05-06">
            @if ($errors->has('date'))
                <span class="help-block">
                    <strong>{{ $errors->first('date') }}</strong>
                </span>
            @endif
        </div>

        <div class="form-group{{ $errors->has('vip') ? ' has-danger' : '' }}">
            <label for="exampleInputEmail1">Vip</label>
            <input type="number" min="0" placeholder="" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="vip" placeholder="">
            @if ($errors->has('vip'))
                <span class="help-block">
                    <strong>{{ $errors->first('vip') }}</strong>
                </span>
            @endif      
        </div>  
        <div class="form-group{{ $errors->has('platinium') ? ' has-danger' : '' }}">
            <label for="exampleInputEmail1">Platinium</label>
            <input type="number" min="0" placeholder="" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="platinium" placeholder="">
            @if ($errors->has('platinium'))
                <span class="help-block">
                    <strong>{{ $errors->first('platinium') }}</strong>
                </span>
            @endif       
        </div>  
        <div class="form-group{{ $errors->has('medios') ? ' has-danger' : '' }}">
            <label for="exampleInputEmail1">Medios</label>
            <input type="number" min="0" placeholder="" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="medios" placeholder="">
            @if ($errors->has('medios'))
                <span class="help-block">
                    <strong>{{ $errors->first('medios') }}</strong>
                </span>
            @endif       
        </div>  
        <div class="form-group{{ $errors->has('altos') ? ' has-danger' : '' }}">
            <label for="exampleInputEmail1">Altos</label>
            <input type="number" min="0" placeholder="" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="altos" placeholder="">
            @if ($errors->has('altos'))
                <span class="help-block">
                    <strong>{{ $errors->first('altos') }}</strong>
                </span>
            @endif
        </div>  



    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
    <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
@endsection