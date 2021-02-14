@extends('master')
@section('Dashboard')
 <!--Page content-->
                <!--===================================================-->
                <div id="page-content">
                    
					
					<div class="row">
					    <div class="col-md-4 col-lg-3">
					        <div class="panel">
					            <div class="panel-heading">
					                <h3 class="panel-title">Empresas</h3>
					            </div>
					            <div class="panel-body">
					                <div class="form-group">
					                  
					                </div>
					               <a href="{{route('createCompanies')}}"><button class="btn btn-block btn-purple">Nueva empresa</button></a> 
					                <hr>
					
					                <!-- Draggable Events -->
					                <!-- ============================================ -->
					                <p class="text-semibold">Nominas recientes</p>
					                <div id="demo-external-events">
					                    <div class="fc-event fc-list" data-class="warning">Nomina quincenal</div>
					                    <div class="fc-event fc-list" data-class="success">Nomina mensual</div>
					                    <div class="fc-event fc-list" data-class="mint">Nomina por hora</div>
					                    <div class="fc-event fc-list" data-class="purple">Nomina de ajuste</div>               
					                    
					                </div>
					                <!-- ============================================ -->
					
					
					            </div>
					        </div>
					    </div>
					    <div class="col-md-8 col-lg-9">
					        <div class="panel">
					            <div class="panel-heading">
					                <h3 class="panel-title">Calendario</h3>
					            </div>
					            <div class="panel-body">
					
					                <!-- Calendar placeholder-->
					                <!-- ============================================ -->
					                <div id='demo-calendar'></div>
					                <!-- ============================================ -->
					
					            </div>
					        </div>
					    </div>
					</div>
					
                </div>
                <!--===================================================-->
                <!--End page content-->
@endsection