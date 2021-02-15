@extends('master')
@section('Dashboard')
 <!--Page content-->
                <!--===================================================-->
                <div id="page-content">
                    
					
					<div class="row">
					    <div class="col-md-12 col-lg-12">
					        <div class="panel">
					            <div class="panel-heading">
					                <div class="panel-control">
										<a href="{{route('createProduct')}}">
											<button  class="btn btn-success btn-icon btn-circle"><i class="ion-plus icon-lg"></i></button>
										</a>
									</div>
									<h3 class="panel-title">Productos</h3>
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
																{{$products->appends(['busqueda' => $_GET["busqueda"] ])->links()  }}
															@else
																{{$products->links()  }}
															@endif
														
															
															</div>
														<table id="" class="table table-striped table-bordered whiteSpace" cellspacing="0" width="100%">
															<thead>
																<tr>
																	<th class="row"></th>
																	<th class="row">nombre</th>
																	<th class="row">precio</th>
																	<th class="row">descripcion</th>
																	<th class="row"></th>
																</tr>
															</thead>
															<tbody>
															
																@foreach ($products as $item)
																<tr>
																		<td> <img class="img-circle img-sm img-border" src="{{$item->image}}"/></td>
																		<td>{{ $item->name }}</td>
																		<td>{{ $item->price }}</td>
																		<td>{{ $item->description }}</td>
																		<td>
																				<a href="{{route('showProduct',['id'=>$item->id])}}">	
																						<button class="btn btn-warning btn-icon btn-circle"><i class="ion-eye icon-lg"></i></button>
																				</a> 
																				<a href="{{route('updateProduct',['id'=>$item->id])}}">	
																					
																						<button class="btn btn-success btn-icon btn-circle"><i class="ion-edit icon-lg"></i></button>
																				</a>
										
																		</td>
																		
																</tr>
																@endforeach
																
															</tbody>
															
														</table>
														<div class="text-center">
														@if (isset($_GET["busqueda"]))
															{{$products->appends(['busqueda' => $_GET["busqueda"] ])->links()  }}
														@else
															{{$products->links()  }}
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
					
                </div>
                <!--===================================================-->
                <!--End page content-->
@endsection