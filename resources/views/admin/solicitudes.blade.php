@extends('admin/administracion')

@section('title', 'Solicitudes')
@section('content')

<div class="container py-3">
        <h2 class="my-4"> Solicitudes</h2>
        @if (session()->has('message'))
            <div class="alert alert-{{ session('typealert') }}">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                {!! session('message') !!}
            </div>
        @endif

      <!-- nuevo -->
      
        <div class="row">
            <section class="content">
                <div class="col-md-12 col-md-offset-2">
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <div class="pull-right">
                                <div class="btn-group">
                                    <ul class="nav nav-tabs">
                                        <li class="active">
                                            <a class="btn btn-warning btn-filter" data-toggle="tab" href="#Pendientes">Pendientes</a>
                                        </li>
                                        <li>
                                            <a class="btn btn-success btn-filter"  data-toggle="tab" href="#Confirmados">Confirmados</a>
                                        </li>
                                        <li>
                                            <a class="btn btn-default btn-filter" data-toggle="tab" href="#Todas">Todas</a>
                                        </li>
                                      </ul>
                                </div>
                            </div>
                            <div class="tab-content">
                                <div id="Pendientes" class="tab-pane fade in active">
                                    <table class="table table-filter">
                                        <tbody>
                                            @foreach ($prestadores as $prestador)
                                                @if ($prestador->habilitado == 0)
                                                    <tr data-status="pagado">
                                                        <td>
                                                            <div class="media" data-toggle="collapse" data-target="#{{$prestador->name}}Pendientes">
                                                                <a href="#" class="pull-left">
                                                                    <img src="https://s3.amazonaws.com/uifaces/faces/twitter/fffabs/128.jpg" class="media-photo">
                                                                </a>
                                                                <div class="media-body">
                                                                    <span class="media-meta pull-right">{{date('d-m-Y H:i:s', strtotime($prestador->created_at))}}</span>
                                                                    <h4 class="title">
                                                                        {{$prestador->name}} {{$prestador->lastname}}
                                                                        <span class="pull-right pendiente">(Pendiente)</span>
                                                                    </h4>
                                                                    <p class="summary">{{$prestador->descripcion}}</p>
                                                                </div>
                                                            </div>
                                                            <div id="{{$prestador->name}}Pendientes" class="collapse">
                                                                <p class="summary">{{$prestador->descripcion}}</p>
                                                                <div class="btn-group">
                                                                    <button type="button" onclick="solicitud({{$prestador->id}}, true)" class="btn btn-success ">Aceptar</button>
                                                                    <button type="button" onclick="solicitud({{$prestador->id}}, false)" class="btn btn-warning ">Negar</button>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td class="centrar">
                                                            <a class="icon-action" href="#" data-toggle="tooltip" data-placement="top" title="Habilitar"><i class="fas fa-plus-circle"></i></a>
                                                        </td>
                                                    </tr>
                                                @endif
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                                <div id="Confirmados" class="tab-pane fade">
                                    <table class="table table-filter">
                                        <tbody>
                                            @foreach ($prestadores as $prestador)
                                                @if ($prestador->habilitado == 1)
                                                    <tr data-status="pagado">
                                                        <td>
                                                            <div class="media" data-toggle="collapse" data-target="#{{$prestador->name}}Confirmados">
                                                                <a href="#" class="pull-left">
                                                                    <img src="https://s3.amazonaws.com/uifaces/faces/twitter/fffabs/128.jpg" class="media-photo">
                                                                </a>
                                                                <div class="media-body">
                                                                    <span class="media-meta pull-right">{{date('d-m-Y H:i:s', strtotime($prestador->created_at))}}</span>
                                                                    <h4 class="title">
                                                                        {{$prestador->name}} {{$prestador->lastname}}
                                                                        <span class="pull-right pagado">(Confirmado)</span>
                                                                    </h4>
                                                                <p class="summary">{{$prestador->descripcion}}</p>
                                                                </div>
                                                            </div>
                                                            <div id="{{$prestador->name}}Confirmados" class="collapse">
                                                                <p class="summary">{{$prestador->descripcion}}</p>
                                                            </div>
                                                        </td>
                                                        <td class="centrar">
                                                            <a class="icon-action" href="#" data-toggle="tooltip" data-placement="top" title="Habilitar"><i class="fas fa-plus-circle"></i></a>
                                                        </td>
                                                    </tr>
                                                @endif
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                                <div id="Todas" class="tab-pane fade">
                                    <table class="table table-filter">
                                        <tbody>
                                            @foreach ($prestadores as $prestador)
                                                <tr data-status="pagado">
                                                    <td>
                                                        <div class="media" data-toggle="collapse" data-target="#{{$prestador->name}}">
                                                            <a href="#" class="pull-left">
                                                                <img src="https://s3.amazonaws.com/uifaces/faces/twitter/fffabs/128.jpg" class="media-photo">
                                                            </a>
                                                            <div class="media-body">
                                                                <span class="media-meta pull-right">{{date('d-m-Y H:i:s', strtotime($prestador->created_at))}}</span>
                                                                <h4 class="title">
                                                                    {{$prestador->name}} {{$prestador->lastname}}
                                                                    <span class="pull-right {{$prestador->habilitado? 'pagado' : 'pendiente'}}">({{$prestador->habilitado?'Confirmado':'Pendiente'}})</span>
                                                                </h4>
                                                            <p class="summary">{{$prestador->descripcion}}</p>
                                                            </div>
                                                        </div>
                                                        <div id="{{$prestador->name}}" class="collapse">
                                                            <p class="summary">{{$prestador->descripcion}}</p>
                                                            @if (!$prestador->habilitado)
                                                            <div class="btn-group">
                                                                <button type="button" onclick="solicitud({{$prestador->id}}, true)" class="btn btn-success ">Aceptar</button>
                                                                <button type="button" onclick="solicitud({{$prestador->id}}, false)" class="btn btn-warning ">Negar</button>
                                                            </div>
                                                            @endif
                                                        </div>
                                                    </td>
                                                    <td class="centrar">
                                                        <a class="icon-action" href="#" data-toggle="tooltip" data-placement="top" title="Habilitar"><i class="fas fa-plus-circle"></i></a>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="content-footer">
                        <p>
                            Page © - 2016 <br>
                            Powered By <a href="https://www.facebook.com/tavo.qiqe.lucero" target="_blank">TavoQiqe</a>
                        </p>
                    </div>
                </div>
            </section>
        </div>
        <script>
            function solicitud(id, aceptada) {
                aceptada?
                    window.location = "solicitudAceptada?id="+ id
                :
                    window.location = "solicitudNegada?id="+ id;
            }
        </script>
      <!-- nuevo -->
</div>


@endsection 
