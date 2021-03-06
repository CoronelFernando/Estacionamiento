@extends('layouts.layout')

@section('content')

<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Layout</h1>
</div>
<div class="row">
    <div class="col-xl-12">
        <div class="card shadow mb-4">
            <div class="card-body">
                <div id="container"></div>
            </div>
        </div>
    </div>
</div>

<!--<form>
  <div id="wrapper">
    <div id="content-wrapper">
        <div class="container-fluid">
            <ol class="breadcrumb">
              <li class="breadcrumb-item">
                <a href="#">Dashboard</a>
              </li>
              <li class="breadcrumb-item active">Map</li>
            </ol>
            <hr>
              <div class="row">
                <div class="col-8">
                  <div id="contenedor" class="contenedor"></div>
                </div>
                <div class=" col-sm-4">
                  <div id="donutchart"></div>                                                 
                </div>
              </div>
          </div>
        </div>
      </div>        
    </div>
  </form>-->
  <!--modal Reservacion-->
  
  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <h4 id="titleModal" class="modal-title">Apartado</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>          
        </div>
        <div class="modal-body">
          <form>
          	<div class="form-group">
            	<label>Usuario:</label>
            	<input class="form-control" id="txtUsuario" name="txtUsuario" readonly>                
          	</div>
            <div class="form-group">
              <label>No. Cajon:</label>
              <input class="form-control" id="txtCajon" name="txtCajon" readonly>
           </div>
           <div class="form-group">
              <label>Hora de Reservación:</label>
              <input type="time" class="form-control" id="txthora" name="txthora">
           </div>
            <div class="form-group">
              <label>Tiempo Reservado:</label>
              <!--<input class="form-control" id="txtTiempo" name="txtTiempo">-->
                  <select id="txtTiempo" class="form-control" name="txtTiempo">
                    <!--<option selected="true" disabled="disabled">Seleccione Tiempo</option>
                    <option value="1">1 hora</option>
                    <option value="2">3 horas</option>
                    <option value="3">5 horas</option>-->
                  </select>
            </div>
          </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-success" data-dismiss="modal" id="btnConfirmar" onclick="GuardarReservado()">Confirmar</button>
        <button type="button" class="btn btn-primary" data-dismiss="modal" id="btnCerrar" onclick="LimpiarModal()">Cerrar</button>
      </div>
    </div>
  </div>
</div>

<script type="text/javascript" src="{{url('/js/global/principal.js')}}"></script>
<script type="text/javascript" src="{{url('/croquis/js/herramientas.js')}}"></script>
<script type="text/javascript" src="{{url('/croquis/js/mapas.js')}}"></script>
@endsection