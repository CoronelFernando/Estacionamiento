@extends('layouts.layout')

@section('content')

<form>
  <div id="wrapper">
    <div id="content-wrapper">
        <div class="container-fluid">
            <ol class="breadcrumb">
              <li class="breadcrumb-item">
                <a href="#">Dashboard</a>
              </li>
              <li class="breadcrumb-item active">Stadistics</li>
            </ol>
          <div class="card mb-3">
            <div class="card-header">
              Stadistics
            </div>
            <div class="card-body">
              <div id="contenedor" class="contenedor">
                                                   
              </div>
            </div>
            <div class="card-footer small text-muted">Update yesterday at 11:59 PM</div>
          </div>
        </div>
      </div>        
    </div>
  </form>
  <!--modal Reservacion-->
  
  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Modal Header</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>          
        </div>
        <div class="modal-body">
          <form>
          	<div class="form-group">
            	<label>Usuario:</label>
            	<input class="form-control">                
          	</div>
            <div class="form-group">
              <label>No. Cajon:</label>
              <input class="form-control">
           </div>
            <div class="form-group">
              <label>Tiempo:</label>
              <input class="form-control">                
            </div>
          </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
@endsection

