@extends('master')
@section('Dashboard')

<div class="boxed">
   
        <div id="page-content">
        <div class="panel">
            <div class="panel-heading">
                <div class="panel-control">
                    <a href="{{route('createProduct')}}">
                        <button  class="btn btn-success btn-icon btn-circle"><i class="ion-plus icon-lg"></i></button>
                    </a>
                    <a href="{{route('updateProduct',['id'=>$product->id])}}">	
																					
                        <button class="btn btn-success btn-icon btn-circle"><i class="ion-edit icon-lg"></i></button>
                    </a>
                </div>
                <h3 class="panel-title">Producto</h3>
            </div>
              
                <form class="form-horizontal" >
                    <div class="panel-body">
                            @csrf
                            <div  align ="center" class="form-group">
                                <div  class="col-sm-6">
                                    <img class="img-circle img-border" width="120" height="120" src="{{$product->image}}"/>
                                </div>
                            </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label" for="demo-is-inputnormal" >Nombre</label>
                            <div class="col-sm-6">
                                <label class="col-sm-6 control-label"> {{$product->name}}</label>
                            </div>
                            
                        </div>
                        <div class="form-group">
                            <label for="demo-is-inputnormal" class="col-sm-3 control-label">Descripcion</label>
                            <div class="col-sm-6">
                                <label class="col-sm-6 control-label"> {{$product->description}}</label>
                            </div>
                            
                        </div>
                        <div class="form-group">
                                <label for="demo-is-inputnormal" class="col-sm-3 control-label">Precio</label>
                                <div class="col-sm-6">
                                        <label class="col-sm-6 control-label"> {{$product->price}}</label>
                                </div>
                                
                            </div>
                        

                   </div>
                            
            </form>
        </div>
        </div>   
</div>	

@endsection