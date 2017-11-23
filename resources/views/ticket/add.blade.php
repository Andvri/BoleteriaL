@extends('layouts.app')
@section('content')
<div class="container">
<form class="form" method="post" action="/aTicket/create">
 {{ csrf_field() }}
 @if($errors->any())
            Existen Errores
  @endif
 <input type="hidden" value="{{ Auth::user()->id}}" name="user_id"/>
   <div class="form-group">
    <label for="exampleInputEmail1">Serial</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="serial" placeholder="Ingrese Serial">
  </div>

  <div class="form-group">
    <label class="mr-sm-2" for="inlineFormCustomSelect">Evento</label>
    <select name="event_id" class="custom-select mb-2 mr-sm-2 mb-sm-0" id="inlineFormCustomSelect">
   
      @foreach($events as $event)
          <option value="{{$event->id}}">{{ $event->name }} {{ $event->date }}</option>
      @endforeach
    </select>
  </div>
  <div class="form-group">
    <label class="mr-sm-2" for="inlineFormCustomSelect">Localizacion</label>
    <select name="location" class="custom-select mb-2 mr-sm-2 mb-sm-0" id="inlineFormCustomSelect">
   
          <option value="Vip">Vip</option>
          <option value="Platinium">Platinium</option>
          <option value="Alto">Alto</option>
          <option value="Medio">Medio</option>

    </select>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>
@endsection