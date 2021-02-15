@extends('master')
@section('Dashboard')

<div class="boxed">
   
        <div id="page-content">
        <div class="panel">
            <div class="panel-heading">
                
                <h3 class="panel-title">Mensajes de Usuarios</h3>
            </div>
              
            <div class="panel-body">
                <div class="form-group">
                    <div class="boxed" >

                        <div id="page-content">
                            
                                  
                        <!-- Basic Data Tables -->
                        <!--===================================================-->
                            
                            <div class= 'table-responsive'>
                                
                                <div class="panel-body ">
                                    <form action="" method="get">
                                        <input type="text" name="busqueda" >
                                        <button type="submit"><i class="ion-search"></i></button>
                                    </form>
                                    <br>
                                    
                                    <div class="text-center">
                                        @if (isset($_GET["busqueda"]))
                                            {{$message->appends(['busqueda' => $_GET["busqueda"] ])->links()  }}
                                        @else
                                            {{$message->links()  }}
                                        @endif
                                    
                                        
                                        </div>
                                    <table id="" class="table table-striped table-bordered whiteSpace" cellspacing="0" width="100%">
                                        <thead>
                                            <tr>
                                                <th class="row">nombre</th>
                                                <th class="row">correo</th>
                                                <th class="row">mensage</th>
                                           
                                            </tr>
                                        </thead>
                                        <tbody>
                                        
                                            @foreach ($message as $item)
                                            <tr>
                                                    <td>{{ $item->name }}</td>
                                                    <td>{{ $item->email }}</td>
                                                    <td>{{ $item->message }}</td>
                                                   
                                                    
                                            </tr>
                                            @endforeach
                                            
                                        </tbody>
                                        
                                    </table>
                                    <div class="text-center">
                                    @if (isset($_GET["busqueda"]))
                                        {{$message->appends(['busqueda' => $_GET["busqueda"] ])->links()  }}
                                    @else
                                        {{$message->links()  }}
                                    @endif
                                
                                    
                                    </div>
                                </div>
                                </div>
                            </div>
                        
                    </div>
                </div>
              

                <!-- Draggable Events -->
                <!-- ============================================ -->
               
                <!-- ============================================ -->


            </div>
        </div>
        </div>   
</div>	

@endsection