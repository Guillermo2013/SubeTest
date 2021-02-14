<?php use App\Models\Rol_Has_Actions;?>
<?php $permits = array();?>
@if (isset($rol))
	<?php $permits = Rol_Has_Actions::where("id_rol",$rol)->get(); ?>
@endif
<nav id="mainnav-container">
                <div id="mainnav">

                    <!--Menu-->
                    <!--================================-->
                    <div id="mainnav-menu-wrap">
                        <div class="nano">
                            <div class="nano-content">

                                <!--Profile Widget-->
                                <!--================================-->
                                <div id="mainnav-profile" class="mainnav-profile">
                                    <div class="profile-wrap">
                                        <div class="pad-btm">
                                            
                                            <img class="img-circle img-sm img-border" src="{{URL('/img/profile-photos/1.png')}}" alt="Profile Picture">
                                        </div>
                                        <a href="#profile-nav" class="box-block" data-toggle="collapse" aria-expanded="false">
                                            <span class="pull-right dropdown-toggle">
                                                <i class="dropdown-caret"></i>
                                            </span>
                                            <p class="mnp-name">{{ Auth::user()->name }}</p>
                                            <span class="mnp-desc">{{ Auth::user()->email }}</span>
                                        </a>
                                    </div>
                                    <div id="profile-nav" class="collapse list-group bg-trans">
                                        <a href="{{route('updateUsers',['id'=>Auth::user()->id])}}" class="list-group-item">
                                            <i class="demo-pli-male icon-lg icon-fw"></i> Ver prefil
                                        </a>
                                        <a href="{{route('settingsUsers',['id' => Auth::user()->id])}}" class="list-group-item">
                                            <i class="demo-pli-gear icon-lg icon-fw"></i> Ajustes
                                        </a>
                                        <a href="#" class="list-group-item">
                                            <i class="demo-pli-information icon-lg icon-fw"></i> Ayuda
                                        </a>
                                        <a class="list-group-item" href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                                        document.getElementById('logout-form').submit();">
                                            {{ __('Cerrar Sesion') }}
                                        </a>
                                    </div>
                                </div>


                                <!--Shortcut buttons-->
                                <!--================================-->

                                <ul id="mainnav-menu" class="list-group" >
						
						            <!--Category name-->
						            <li class="list-header">Navegacion</li>
						
                                    <li class="active-link">
						                <a href="{{ route('home')}}">
						                    <i class="demo-psi-home"></i>
						                    <span class="menu-title">
												<strong>Inicio</strong>
											</span>
						                </a>
                                    </li>
                                    <li>
                                            <a href="#">
                                                <i class="ion-briefcase"></i>
                                                <span class="menu-title">
                                                    <strong>Empresas</strong>
                                                </span>
                                                <i class="arrow"></i>
                                            </a>
                            
                                            <!--Submenu-->
                                            <ul class="collapse">
                                                @foreach ($permits as $permit)
										            @if($permit->id_actions == 2)
            						                    <li><a href="{{route('createCompanies')}}">Crear Empresas</a></li>
                                                    @endif
                                                @endforeach
                                                @foreach ($permits as $permit)
										            @if($permit->id_actions == 1)
            						                    <li><a href="{{route('companies')}}">Buscar Empresa</a></li>
                                                    @endif
                                                @endforeach
                                            </ul>
                                        </li>
                                    <li>
						                <a href="#">
						                    <i class="ion-person-stalker"></i>
						                    <span class="menu-title">
												<strong>Empleados</strong>
											</span>
											<i class="arrow"></i>
						                </a>
						
						                <!--Submenu-->
						                <ul class="collapse" >
                                            @foreach ($permits as $permit)
										        @if($permit->id_actions == 8)
                                                    <li><a href="{{route('createEmployee')}}">Crear Empleado</a></li>
                                                @endif
                                            @endforeach
                                            @foreach ($permits as $permit)
										        @if($permit->id_actions == 7)
                                                    <li><a href="{{route('employee')}}">Buscar Empleado</a></li>
                                                @endif
                                            @endforeach	
						                </ul>
                                    </li>
                                    
                                    <li>
						                <a href="#">
						                    <i class="ion-scissors"></i>
						                    <span class="menu-title">
												<strong>Deducciones</strong>
											</span>
                                            <i class="arrow"></i>
											
						                </a>
						
						                <!--Submenu-->
                                        <ul class="collapse">
                                            @foreach ($permits as $permit)
										        @if($permit->id_actions == 19)
                                                <li><a href="{{route('createDeductions')}}">Crear Deducion</a></li>
                                                @endif
                                            @endforeach
                                            @foreach ($permits as $permit)
										        @if($permit->id_actions == 18)
                                                    <li><a href="{{route ('deductions')}}">Buscar Deducion</a></li>
                                                @endif
                                            @endforeach   
                                            </ul>
						    
						            </li>
                                    <li>
						                <a href="{{route ('bonus')}}">
						                    <i class="ion-cash"></i>
						                    <span class="menu-title">
												<strong>Bonificaciones</strong>
											</span>
											<i class="arrow"></i>
                                        </a>
                                        <!--Submenu-->
                                        <ul class="collapse">
                                            @foreach ($permits as $permit)
										        @if($permit->id_actions == 15)
                                                <li><a href="{{route('createBonus')}}">Crear Bonificacion</a></li>
                                                @endif
                                            @endforeach
                                            @foreach ($permits as $permit)
										        @if($permit->id_actions == 14)
                                                <li><a href="{{route ('bonus')}}">Buscar Bonificacion</a></li>
                                                @endif
                                            @endforeach        
                                            </ul>

                                        </li>

                                  

                                     <li>
						                <a href="">
						                    <i class="demo-psi-receipt-4"></i>
						                    <span class="menu-title">
												<strong>Nominas</strong>
											</span>
                                            <i class="arrow"></i>
											
						                </a>
						
						                <ul class="collapse">
                                            @foreach ($permits as $permit)
										        @if($permit->id_actions == 23)
                                                    <li><a href="{{route('payroll')}}">Crear Nomina</a></li>
                                                @endif
                                            @endforeach
                                            @foreach ($permits as $permit)
										        @if($permit->id_actions == 22)
                                                    <li><a href="{{ route('payrollSaved') }}">Buscar Nomina</a></li>
											    @endif
                                            @endforeach	
						                </ul>
						    
						            </li>
                                    
                                    @if( $rol == 1 )
                                    <li>
						                <a href="#">
						                    <i class="ion-person"></i>
						                    <span class="menu-title">
												<strong>Usuarios</strong>
											</span>
											<i class="arrow"></i>
						                </a>
						
						                <!--Submenu-->
						                <ul class="collapse">
                                            @foreach ($permits as $permit)
										        @if($permit->id_actions == 28)
                                                    <li><a href="{{ route('createUsers') }}">Crear Usuario</a></li>
                                                @endif
                                            @endforeach	
                                            @foreach ($permits as $permit)
										        @if($permit->id_actions == 27)
                                            
                                                    <li><a href="{{ route('users') }}">Buscar Usuario</a></li>
                                                @endif
                                            @endforeach	
						                </ul>
						            </li>
                                    
                                    @endif
                                    <li>
                                            <a href="#">
                                                <i class="demo-psi-split-vertical-2"></i>
                                                <span class="menu-title">
                                                    <strong>Roles</strong>
                                                </span>
                                                <i class="arrow"></i>
                                            </a>
                            
                                            <!--Submenu-->
                                            <ul class="collapse">
                                                @foreach ($permits as $permit)
										            @if($permit->id_actions == 32)
                                                        <li><a href="{{ route('createRols') }}">Crear Roles</a></li>
                                                    @endif
                                                @endforeach
                                                @foreach ($permits as $permit)
										            @if($permit->id_actions == 31)
                                                        <li><a href="{{ route('rols') }}">Buscar Roles</a></li>
                                                    @endif
                                                @endforeach 
                                            </ul>
                                        </li>
                                    <!--Menu list item-->
                                    
                                    <li>
                                    <a href="{{ route('settingsGeneral') }}">
                                                <i class="ion-gear-b"></i>
                                                <span class="menu-title">
                                                    <strong>Ajustes</strong>
                                                </span>
                                            </a>
                                            {{-- <ul class="collapse">
                                                @foreach ($permits as $permit)
										            @if($permit->id_actions == 35)
                                                        <li><a href="{{route('settingsCompanies') }}">Empresas</a></li>
                                                    @endif
                                                @endforeach
                                                @foreach ($permits as $permit)
										            @if($permit->id_actions == 52)
                                                        <li><a href="{{route('settingsEdit')}}">Generales</a></li>
                                                    @endif
                                                @endforeach
                                                @foreach ($permits as $permit)
										            @if($permit->id_actions == 54)
                                                        <li><a href="{{route('settingsBossEdit')}}">Patronales</a></li>
                                                    @endif
                                                @endforeach
                                                @foreach ($permits as $permit)
										            @if($permit->id_actions == 52)
                                                        <li><a href="{{route('settingsRecord')}}">Historico</a></li>
                                                    @endif
                                                @endforeach  
                                            </ul> --}}
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="ion-monitor"></i>
                                                <span class="menu-title">
                                                    <strong>LOGS</strong>
                                                </span>
                                                <i class="arrow"></i>
                                            </a>
                                            <ul class="collapse">
                                                @foreach ($permits as $permit)
										            @if($permit->id_actions == 56)
                                                        <li><a href="{{route('logsRecord')}}">LOGS</a></li>
                                                    @endif
                                                @endforeach 
                                            </ul>
                                        </li>
                                        <li>
                                                <a href="#">
                                                    <i class="ion-folder"></i>
                                                    <span class="menu-title">
                                                        <strong>Plantillas</strong>
                                                    </span>
                                                    <i class="arrow"></i>
                                                </a>
                                                <ul class="collapse">
                                                    @foreach ($permits as $permit)
                                                        @if($permit->id_actions == 58)
                                                            <li><a href="{{route('templates')}}">Plantillas</a></li>
                                                        @endif
                                                    @endforeach 
                                                </ul>
                                            </li>
						
						
						            <!--Menu list item-->
						            
						
                             
                            </div>
                        </div>
                    </div>
                    <!--================================-->
                    <!--End menu-->

                </div>
            </nav>