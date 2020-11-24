@extends('admin/administracion')
@section('title', 'Inicio')
@section('content')
<section class="py-3 mb-5">
	<div class="container">
        <h2 class="my-4"> Administración</h2>
        <div class="row mb-3">
            <div class="col-xl-3 col-lg-6">
              <div class="card card-inverse card-success">
                <div class="card-block bg-success">
                  <div class="rotate">
                    <i class="fa fa-user fa-5x"></i>
                  </div>
                  <h6 class="text-uppercase">Usuarios</h6>
                  <h1 class="">134</h1>
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-lg-6">
              <div class="card card-inverse card-orange">
                <div class="card-block card-orange">
                  <div class="rotate">
                    <i class="fas fa-tools fa-4x"></i>
                  </div>
                  <h6 class="text-uppercase">Prestadores</h6>
                  <h1 class="">87</h1>
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-lg-6">
              <div class="card card-inverse card-info">
                <div class="card-block bg-info">
                  <div class="rotate">
                    <i class="fas fa-hard-hat fa-5x"></i>
                  </div>
                  <h6 class="text-uppercase">Oficios</h6>
                  <h1 class="">40</h1>
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-lg-6">
              <div class="card card-inverse card-warning">
                <div class="card-block bg-warning">
                  <div class="rotate">
                    <i class="fas fa-map-marked-alt fa-5x"></i>
                  </div>
                  <h6 class="text-uppercase">Localidades</h6>
                  <h1 class="">36</h1>
                </div>
              </div>
            </div>
          </div>
          <!--/row-->
    </div>
</section>

@endsection