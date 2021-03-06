@extends('layouts.layout')
@section('content')
<div class="d-sm-flex aling-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
</div>
<div class="row">
  <!--card-->
  <div class="col-xl-6 col-md-6 mb-4">
    <div class="card border-left-warning shadow h-100 py-2">
      <div class="card-body">
        <div class="row no-gutters aling-items-center">
          <div class="col mr-2">
            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Users</div>
            <div class="h5 mb-0 font-weight-bold text-gray-800">1,000</div>
          </div>
          <div class="col-auto">
            <i class="fas fa-users fa-2x text-gray-300"></i>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="col-xl-6 col-md-6 mb-4">
    <div class="card border-left-info shadow h-100 py-2">
      <div class="card-body">
        <div class="row no-gutters align-items-center">
          <div class="col mr-2">
            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Capacity</div>
            <div id="lblCapacity" class="h5 mb-0 font-weight-bold text-gray-800">0%</div>
          </div>
          <div class="col-auto">
            <i class="fas fa-car fa-2x text-gray-300"></i>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!--graficas-->
  <div class="col-xl-4 col-lg-7">
    <div class="card shadow mb-4">
      <div class="card-body">
        <h6 class="m-0 font-weight-bold text-primary">Parking Status</h6>
        <div id="donutchart"></div>
      </div>
    </div>
  </div>

  <div class="col-xl-8 col-lg-7">
    <div class="card shadow mb-4">
      <div class="card-body">
        <h6 class="m-0 font-weight-bold text-primary">Parking Status 
          <label for="cmbFiltros">Filter by</label>
          <select name="cmbFiltros" id="cmbFiltros">
            <option value="1">In real time</option>
            <option value="2">By hour</option>
          </select>
        </h6>
        <div id="chart_div"></div>
      </div>
    </div>
  </div>
</div>
<script type="text/javascript" src="{{url('https://www.gstatic.com/charts/loader.js')}}"></script>     
<script type="text/javascript" src="{{url('/googleChats/chart.js')}}"></script>
<script type="text/javascript" src="{{url('/googleChats/donutChart.js')}}"></script>
        
@endsection