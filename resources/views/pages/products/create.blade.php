
@extends('master')
@section('Dashboard')
<div id="page-content">
<div class="boxed">
   
        <div id="page-content">
       
                @if(isset($product))
                    <form class="form-horizontal" method="POST" action="{{ route('postUpdateProduct',['id' => $product->id]) }}">
                @else
                    <form class="form-horizontal" method="POST" action="{{ route('postProduct') }}">
                @endif
                @csrf
                <div class="panel-body">
                    <div class="form-group">
                        <label class="col-sm-3 control-label" for="demo-is-inputnormal" >Nombre *</label>
                        <div class="col-sm-6">
                            @if(isset($product))
                                <input type="text" value="{{$product->name}}" class="form-control" id="name" name="name" required>
                            @else
                                <input type="text"  class="form-control" id="name" name="name" required>
                            @endif
                        </div>
                        
                    </div>
                    
                    <div class="form-group">
                        <label for="demo-is-inputnormal" class="col-sm-3 control-label">Descripcion *</label>
                        <div class="col-sm-6">
                            @if(isset($product))
                                <input type="text" value="{{$product->description}}" class="form-control" id="description" name="description" required>
                            @else
                                <input type="text"  class="form-control" id="description" name="description" required>
                            @endif
                            
                        </div>
                        
                    </div>
                    <div class="form-group">
                        <label for="demo-is-inputnormal" class="col-sm-3 control-label">Precio *</label>
                        <div class="col-sm-6">
                            @if(isset($product))
                                <input type="number" value="{{$product->price}}" step="any"  class="form-control" id="price" name ="price" required>
                            @else
                                <input type="number" step="any"  class="form-control" id="price" name ="price" required>
                            @endif
                        </div>
                        
                    </div>
                    <div class="form-group">
                        <label for="demo-is-inputnormal" class="col-sm-3 control-label">Imagen *</label>
                        <div class="col-sm-6">
                            <input type="file"   class="form-control" id="image" name ="image"  accept="image/*" required>
                        </div>
                        
                    </div>
                  </div>
                   
                <div class="panel-footer">
                    <div class="row">
                        <div class="col-sm-9 col-sm-offset-3">
                            <button class="btn btn-success btn-rounded" type="submit"><i class='ion-filing'></i> Guardar</button>
                            <button class="btn btn-dark btn-rounded" type="reset"><i class='ion-reply'></i> Limpiar</button>
                        </div>
                        
                    </div>
                    
                </div>
                        
                
            </form>
        </div>
        </div>   
</div>
</div>	
@endsection