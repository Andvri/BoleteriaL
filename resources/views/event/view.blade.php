@extends('layouts.app')
@section('content')
<div class="container">
 <table class="table">
    <thead class="thead-default">
        <tr>
            <th>#</th>
            <th>Nombre del Evento</th>
            <th>Fecha</th>
            <th>Altos</th>
            <th>Medios</th>
            <th>Vip</th>
            <th>Platinium</th>
            <th>Editar</th>
            <th>Eliminar</th>
      
        </tr>
    </thead>
    <tbody>
    <tr>
        <th scope="row">{{$event->id}}</th>
        <td>{{$event->name}}</td>
        <td>{{$event->date}}</td>
        <td>{{$event->altos}}</td>
        <td>{{$event->medios}}</td>
        <td>{{$event->vip}}</td>
        <td>{{$event->platinium}}</td>
        <td><a href="/eEvent/{{$event->id}}"> <i class="fa fa-pencil-square-o" aria-hidden="true"></i> </a></td>
        <td><a href="/dEvent/{{$event->id}}"><i class="fa fa-trash" aria-hidden="true"></i> </a></td>
            
    </tr>
    </tbody>
</table>
<h2>Tickets Registrados para este evento</h2>
@if(count($event->tickets) > 0)
<table class="table">
            <thead class="thead-default">
                <tr>
                    <th>#</th>
                    <th>Serial</th>
                    <th>Localizacion</th>
  
                    <th>Editar</th>
                    <th>Eliminar</th>
                    <th>Ver</th>
                </tr>
            </thead>
            <tbody>
            @foreach($event->tickets as $ticket)
                <tr>
                    <th scope="row">{{$ticket->id}}</th>
                    <td>{{$ticket->serial}}</td>
                    <td>{{$ticket->location}}</td>
             
                    <td><a href="/eTicket/{{$ticket->id}}"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> </a></td>
                    <td><a href="/dTicket/{{$ticket->id}}"><i class="fa fa-trash" aria-hidden="true"></i> </a></td>
                    <td><a href="/vTicket/{{$ticket->id}}"><i class="fa fa-expand" aria-hidden="true"></i></a></td> 
                </tr>
            @endforeach
        </tbody>
        </table>
        
        @else
           <h3>No existen tickets registrados para este evento</h3>
        @endif
                  
</div>                            
@endsection