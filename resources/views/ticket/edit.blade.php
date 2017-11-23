@extends('layouts.app')
@section('content')
@if(isset($element))
<div class="container">
<form class="form" method="post" action="/eTicket/{{$element->id}}">
 {{ csrf_field() }}
 @if($errors->any())
            Existen Errores
  @endif
 <input type="hidden" value="{{ Auth::user()->id}}" name="user_id"/>
   <div class="form-group">
    <label for="exampleInputEmail1">Serial</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="serial" placeholder="Ingrese Serial" value={{$element->serial}}>
  </div>

  <div class="form-group">
    <label class="mr-sm-2" for="inlineFormCustomSelect">Evento</label>
    <select name="event_id" class="custom-select mb-2 mr-sm-2 mb-sm-0" id="inlineFormCustomSelect">
   
      @foreach($events as $event)
          @if($event->id == $element->event->id)
            <option value="{{$event->id}}" selected>{{ $event->name }} {{ $event->date }}</option>
          @else
            <option value="{{$event->id}}"> {{ $event->name }} {{ $event->date }} </option>
          @endif
      @endforeach
    </select>
  </div>
  <div class="form-group">
    <label class="mr-sm-2" for="inlineFormCustomSelect">Localizacion</label>
    <select name="location" class="custom-select mb-2 mr-sm-2 mb-sm-0" id="inlineFormCustomSelect">
          @if($element->location == "Vip")
          <option value="Vip" selected >Vip</option>
          @else 
            <option value="Vip"  >Vip</option>
          @endif
          @if($element->location == "Platinium")
          <option value="Platinium" selected >Platinium</option>
          @else 
            <option value="Platinium"  >Platinium</option>
          @endif
          @if($element->location == "Alto")
          <option value="Alto" selected >Alto</option>
          @else 
            <option value="Alto"  >Alto</option>
          @endif
          @if($element->location == "Medio")
          <option value="Medio" selected >Medio</option>
          @else 
            <option value="Medio"  >Medio</option>
          @endif
       
    </select>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>
@endif
@endsection