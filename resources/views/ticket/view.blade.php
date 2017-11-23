@extends('layouts.app')
@section('content')
<div class="container">
<table class="table">
            <thead class="thead-default">
                <tr>
                    
                    <th>Nombre Evento</th>
                    <th>Fecha</th>
                    <th>Altos</th>
                    <th>Medios</th>
                    <th>Vip</th>
                    <th>Platinium</th>
                    <th>#</th>
                    <th>Serial</th>
                    <th>Localizacion</th>
                    <th>Editar</th>
                    <th>Eliminar</th>
                    <th>Ver</th>
                </tr>
            </thead>
            <tbody>
         
                <tr>
                    
                    <td>{{$ticket->event->name}}</td>
                    <td>{{$ticket->event->date}}</td>
                    <td>{{$ticket->event->altos}}</td>
                    <td>{{$ticket->event->medios}}</td>
                    <td>{{$ticket->event->vip}}</td>
                    <td>{{$ticket->event->platinium}}</td>
                    <th scope="row">{{$ticket->id}}</th>
                    <td>{{$ticket->serial}}</td>
                    <td>{{$ticket->location}}</td>
             
                    <td><a href="/eTicket/{{$ticket->id}}"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> </a></td>
                    <td><a href="/dTicket/{{$ticket->id}}"><i class="fa fa-trash" aria-hidden="true"></i> </a></td>
                    <td><a href="/vTicket/{{$ticket->id}}"><i class="fa fa-expand" aria-hidden="true"></i></a></td> 
                </tr>
        </tbody>
        </table>
</div>
@endsection