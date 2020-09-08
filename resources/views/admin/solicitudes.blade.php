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
                                    <button type="button" class="btn btn-success btn-filter" data-target="pagado">Confirmados</button>
                                    <button type="button" class="btn btn-warning btn-filter" data-target="pendiente">Pendientes</button>
                                    <button type="button" class="btn btn-default btn-filter" data-target="all">Todos</button>
                                </div>
                            </div>
                            <div class="table-container">
                                <table class="table table-filter">
                                    <tbody>
                                        <tr data-status="pagado">
                                            <td>
                                                <div class="ckbox">
                                                    <input type="checkbox" id="checkbox1">
                                                    <label for="checkbox1"></label>
                                                </div>
                                            </td>
                                            <td>
                                                <a href="javascript:;" class="star">
                                                    <i class="glyphicon glyphicon-star"></i>
                                                </a>
                                            </td>
                                            <td>
                                                <div class="media">
                                                    <a href="#" class="pull-left">
                                                        <img src="https://s3.amazonaws.com/uifaces/faces/twitter/fffabs/128.jpg" class="media-photo">
                                                    </a>
                                                    <div class="media-body">
                                                        <span class="media-meta pull-right">Febrero 13, 2016</span>
                                                        <h4 class="title">
                                                            Lorem Impsum
                                                            <span class="pull-right pagado">(Pagado)</span>
                                                        </h4>
                                                        <p class="summary">Ut enim ad minim veniam, quis nostrud exercitation...</p>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr data-status="pendiente">
                                            <td>
                                                <div class="ckbox">
                                                    <input type="checkbox" id="checkbox3">
                                                    <label for="checkbox3"></label>
                                                </div>
                                            </td>
                                            <td>
                                                <a href="javascript:;" class="star">
                                                    <i class="glyphicon glyphicon-star"></i>
                                                </a>
                                            </td>
                                            <td>
                                                <div class="media">
                                                    <a href="#" class="pull-left">
                                                        <img src="https://s3.amazonaws.com/uifaces/faces/twitter/fffabs/128.jpg" class="media-photo">
                                                    </a>
                                                    <div class="media-body">
                                                        <span class="media-meta pull-right">Febrero 13, 2016</span>
                                                        <h4 class="title">
                                                            Lorem Impsum
                                                            <span class="pull-right pendiente">(Pendiente)</span>
                                                        </h4>
                                                        <p class="summary">Ut enim ad minim veniam, quis nostrud exercitation...</p>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr data-status="cancelado">
                                            <td>
                                                <div class="ckbox">
                                                    <input type="checkbox" id="checkbox2">
                                                    <label for="checkbox2"></label>
                                                </div>
                                            </td>
                                            <td>
                                                <a href="javascript:;" class="star">
                                                    <i class="glyphicon glyphicon-star"></i>
                                                </a>
                                            </td>
                                            <td>
                                                <div class="media">
                                                    <a href="#" class="pull-left">
                                                        <img src="https://s3.amazonaws.com/uifaces/faces/twitter/fffabs/128.jpg" class="media-photo">
                                                    </a>
                                                    <div class="media-body">
                                                        <span class="media-meta pull-right">Febrero 13, 2016</span>
                                                        <h4 class="title">
                                                            Lorem Impsum
                                                            <span class="pull-right cancelado">(Cancelado)</span>
                                                        </h4>
                                                        <p class="summary">Ut enim ad minim veniam, quis nostrud exercitation...</p>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr data-status="pagado" class="selected">
                                            <td>
                                                <div class="ckbox">
                                                    <input type="checkbox" id="checkbox4" checked>
                                                    <label for="checkbox4"></label>
                                                </div>
                                            </td>
                                            <td>
                                                <a href="javascript:;" class="star star-checked">
                                                    <i class="glyphicon glyphicon-star"></i>
                                                </a>
                                            </td>
                                            <td>
                                                <div class="media">
                                                    <a href="#" class="pull-left">
                                                        <img src="https://s3.amazonaws.com/uifaces/faces/twitter/fffabs/128.jpg" class="media-photo">
                                                    </a>
                                                    <div class="media-body">
                                                        <span class="media-meta pull-right">Febrero 13, 2016</span>
                                                        <h4 class="title">
                                                            Lorem Impsum
                                                            <span class="pull-right pagado">(Pagado)</span>
                                                        </h4>
                                                        <p class="summary">Ut enim ad minim veniam, quis nostrud exercitation...</p>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr data-status="pendiente">
                                            <td>
                                                <div class="ckbox">
                                                    <input type="checkbox" id="checkbox5">
                                                    <label for="checkbox5"></label>
                                                </div>
                                            </td>
                                            <td>
                                                <a href="javascript:;" class="star">
                                                    <i class="glyphicon glyphicon-star"></i>
                                                </a>
                                            </td>
                                            <td>
                                                <div class="media">
                                                    <a href="#" class="pull-left">
                                                        <img src="https://s3.amazonaws.com/uifaces/faces/twitter/fffabs/128.jpg" class="media-photo">
                                                    </a>
                                                    <div class="media-body">
                                                        <span class="media-meta pull-right">Febrero 13, 2016</span>
                                                        <h4 class="title">
                                                            Lorem Impsum
                                                            <span class="pull-right pendiente">(Pendiente)</span>
                                                        </h4>
                                                        <p class="summary">Ut enim ad minim veniam, quis nostrud exercitation...</p>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
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
      <!-- nuevo -->
</div>


@endsection 
