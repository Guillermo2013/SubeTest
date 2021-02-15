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
                                            
                                        </a>
                                    </div>
                                    <div id="profile-nav" class="collapse list-group bg-trans">
                                       
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
                                                    <strong>Productos</strong>
                                                </span>
                                                <i class="arrow"></i>
                                            </a>
                            
                                            <!--Submenu-->
                                            <ul class="collapse">
                                                        <li><a href="{{route('createProduct')}}">Crear Productos</a></li>
                                            </ul>
                                        </li>
                                    <li>
						                <a href="{{route('messageIndex')}}">
						                    <i class="ion-person-stalker"></i>
						                    <span class="menu-title">
												<strong>Mensajes</strong>
											</span>
											<i class="arrow"></i>
						                </a>
						
						                <!--Submenu-->
						            </li>
                                </ul>
						
						            <!--Menu list item-->
						            
						
                             
                            </div>
                        </div>
                    </div>
                    <!--================================-->
                    <!--End menu-->

                </div>
            </nav>