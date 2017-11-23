@extends('layouts.app')
@section('title')
    Bienvenido 
    @guest
     al Sistema registro de Boletos
    @else
     {{Auth::user()->name}}  al Sistema registro de Boletos y Eventos
    @endguest
@endsection
@section('content')
<div class="container">
    @guest
        <div class="content">
        <div class="title m-b-md">
            Ingresa al sistema para registrar boletos
        </div>
        <div class="links">
            <a class="btn btn-success" href="/register"> No tienes cuenta?. Registrate</a>
        </div>
        </div>
    @else
<div id="accordion" role="tablist" aria-multiselectable="true">
  <div class="card">
    <div class="card-header" role="tab" id="headingOne">
      <h5 class="mb-0">
        <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
          Tickets
        </a>
      </h5>
    </div>

    <div id="collapseOne" class="collapse show" role="tabpanel" aria-labelledby="headingOne">
      <div class="card-block">
        @if (count(Auth::user()->tickets) > 0)
            <table class="table">
            <thead class="thead-default">
                <tr>
                    <th>#</th>
                    <th>Nombre del Evento</th>
                    <th>Serial</th>
                    <th>Editar</th>
                    <th>Eliminar</th>
                    <th>Ver</th>
                </tr>
            </thead>
            <tbody>
            @foreach(Auth::user()->tickets as $ticket)
                <tr>
                    <th scope="row">{{$ticket->id}}</th>
                    <td>{{$ticket->event->name}}</td>
                    <td>{{$ticket->serial}}</td>
                    <td><a href="/eTicket/{{$ticket->id}}"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> </a></td>
                    <td><a href="/dTicket/{{$ticket->id}}"><i class="fa fa-trash" aria-hidden="true"></i> </a></td>
                    <td><a href="/vTicket/{{$ticket->id}}"><i class="fa fa-expand" aria-hidden="true"></i></a></td> 
                </tr>
            @endforeach
        </tbody>
        </table>
        @else
           <h2>Ud no tiene Tickets Registrados</h2>
        @endif
                      
      
      </div>
    </div>
  </div>
 @if(Auth::user()->access == "Administrador")
     <div class="card">
    <div class="card-header" role="tab" id="headingOne">
      <h5 class="mb-0">
         <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
          Todos los Tickets
        </a>
      </h5>
    </div>

        <div id="collapseThree" class="collapse" role="tabpanel" aria-labelledby="headingThree">
      <div class="card-block">
    @if (count($tickets) > 0)
        <table class="table">
            <thead class="thead-default">
                <tr>
                    <th>#</th>
                    <th>Nombre del Evento</th>
                    <th>Serial</th>
                    <th>Editar</th>
                    <th>Eliminar</th>
                    <th>Ver</th>
                </tr>
            </thead>
            <tbody>
            @foreach($tickets as $ticket)
                <tr>
                    <th scope="row">{{$ticket->id}}</th>
                    <td>{{$ticket->event->name}}</td>
                    <td>{{$ticket->serial}}</td>
                    <td><a href="/eTicket/{{$ticket->id}}"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> </a></td>
                    <td><a href="/dTicket/{{$ticket->id}}"><i class="fa fa-trash" aria-hidden="true"></i> </a></td>
                    <td><a href="/vTicket/{{$ticket->id}}"><i class="fa fa-expand" aria-hidden="true"></i></a></td> 
                </tr>
            @endforeach
        </tbody>
        </table>
        @else
           <h2>No existen Tickets Registrado</h2>
        @endif        
      
      </div>
    </div>
  </div>
    <div class="card">
        <div class="card-header" role="tab" id="headingTwo">
            <h5 class="mb-0">
            <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                Eventos
            </a>
            </h5>
        </div>

        <div id="collapseTwo" class="collapse" role="tabpanel" aria-labelledby="headingTwo">
            <div class="card-block">
             @if (count($events) > 0)
                    <table class="table">
                        <thead class="thead-default">
                            <tr>
                                <th>#</th>
                                <th>Nombre del Evento</th>
                                <th>Fecha</th>
                                <th>Editar</th>
                                <th>Eliminar</th>
                                <th>Ver</th>
                            </tr>
                        </thead>
                        <tbody>

                        @foreach($events as $event)
                         <tr>
                                <th scope="row">{{$event->id}}</th>
                                <td>{{$event->name}}</td>
                                <td>{{$event->date}}</td>
                                <td><a href="/eEvent/{{$event->id}}"> <i class="fa fa-pencil-square-o" aria-hidden="true"></i> </a></td>
                                <td><a href="/dEvent/{{$event->id}}"><i class="fa fa-trash" aria-hidden="true"></i> </a></td>
                                <td><a href="/vEvent/{{$event->id}}"><i class="fa fa-expand" aria-hidden="true"></i></a></td>              
                        </tr>
                        @endforeach
                    </tbody>
                    </table>
                @else
                    <h2>No existen Eventos Registrado</h2>
                @endif    
            </div>
        </div>
    </div>
     @endif
  </div>
</div>
    @endguest
</div>
@endsection