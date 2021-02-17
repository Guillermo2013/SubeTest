<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Catalogo</title>
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <!-- Fonts -->
        <link href="{{URL('css/bootstrap.css')}}" rel="stylesheet">
        <link href="{{URL('plugins/ionicons/css/ionicons.min.css')}}" rel="stylesheet">
        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/nifty.min.css" rel="stylesheet">
        <link href="css/demo/nifty-demo-icons.min.css" rel="stylesheet">
        <link href="css/demo/nifty-demo.min.css" rel="stylesheet">
        <link href="plugins/magic-check/css/magic-check.min.css" rel="stylesheet">
        <script src="js/jquery.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/nifty.min.js"></script>
        <script src="js/demo/bg-images.js"></script>
        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
            .img {
            border-radius: 5px;
            cursor: pointer;
            transition: 0.3s;
            }
            .img:hover {opacity: 0.7;}
            .button-container{
            display:inline-block;
            position:relative;
            }

            .button-container a{
            position: absolute;
            bottom:3em;
            right:2.5em;
            border-radius:1.5em;
            text-transform:uppercase;
            padding:1em 1.5em;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref ">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

        </div>
        <div class="content">
            
            <div>
                <h3>Productos </h3>
                <div class="text-center">
                    <form action="" method="get" align ="right" style = 'padding-right:4cm'>
                        <input type="text" name="busqueda" >
                        <button type="submit"><i class="ion-search"></i></button>
                    </form>
                    @if (isset($_GET["busqueda"]))
                        {{$products->appends(['busqueda' => $_GET["busqueda"] ])->links()  }}
                    @else
                        {{$products->links()  }}
                    @endif
                </div> 
                <div >
                    <table style="width:100%">
                        @php $count = 0; @endphp
                            @foreach ($products as $item)
                            @if($count == 0 || $count == 3 || $count == 6  || $count == 9)
                                <tr>
                            @endif
                                <td>
                                    <div >
                                        <div class="button-container">
                                            <img width="150" height="150" src="{{$item->image}}" alt="">
                                            <a><button class="btn btn-warning" data-image ="{{$item->image}}" data-name ="{{$item->name}}" data-description ="{{$item->description}}" data-price ="{{$item->price}}" data-toggle="modal" data-target="#myModal">ver</button></a>
                                        </div>
                                        <p><strong>{{$item->name}}</strong></p>
                                        <p><strong>Precio:{{$item->price}}</strong></p>
                                    </div>
                                </td>
                            @if($count ==  2|| $count == 5 || $count == 8  || $count == 9)
                                </tr>
                            @endif
                            @php $count++; @endphp
                        @endforeach
                    </table>    
                
                </div>
                
                <div class="text-center">
                    @if (isset($_GET["busqueda"]))
                        {{$products->appends(['busqueda' => $_GET["busqueda"] ])->links()  }}
                    @else
                        {{$products->links()  }}
                    @endif
                </div> 
            </div> 
        </div>
        
    <div class="modal modal-danger fade"  id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog modal-default" role="document">
            <div class="modal-content" >
            
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title text-center" id="myModalLabel">Producto</h4>
                </div>
                <div id='productBody'>
                
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="sendMailModal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" id="closeModal" class="close" data-dismiss="modal" aria-label="Close">
                </button>
            </div>
            <form class="form-horizontal" method="POST" >
                <div class="modal-body">
                    @csrf
                    <div class="panel-body">
                        <div class="form-group">
                            <label for="demo-is-inputnormal" class="col-sm-4 control-label">Nombre *</label>
                            <div class="col-sm-6">
                                <input type="text"  class="form-control" id="name" name ="name" autocomplete="off" required/>
                            </div>
                            
                        </div>
                        <div class="form-group">
                            <label for="demo-is-inputnormal" class="col-sm-4 control-label">Correo *</label>
                            <div class="col-sm-6">
                              <input type="email"  class="form-control" id="email" name ="email" autocomplete="off"  required />
                            </div>
                            
                        </div>
                        <div class="form-group ">
                            <label for="demo-is-inputnormal" class="col-sm-4 control-label">Mensaje *</label>
                          
                                <div class="col-sm-12">
                                    <textarea  class="form-control" id="text_mail" name="text_mail" ></textarea>
                                </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" id='cancelMail' data-dismiss="modal">Cancelar</button>
                    <button type="submit" class="btn btn-primary" id="sendMail">Enviar</button>
                </div>
            </form>
          </div>
        </div>
      </div>
    
    
    <script src="{{asset('js/app.js')}}"></script>

    <script>
    $('#myModal').on('show.bs.modal', function (event) {

            var button = $(event.relatedTarget)
            
            var image= button.data("image");
            var price= button.data("price");
            var description= button.data("description");
            var name= button.data("name");
            var modal =$(this);
            var html="";
            html+= '<div">'
                html+= '<table>'
                    html+= '<tbody>'
                        html+= '<tr>'
                        html+= '<td>'
                        html+= '<img width="300" height="300" src="'+image+'" alt=""></div>';
                        html+= '</td>'
                        html+= '<td>'
                        html+= '<p >Nombre:'+name+'</p>';
                        html+= '<p >Descripcion:'+description+'</p>';
                        html+= '<p >Precio:'+price+'</p>';
                        html+= '</td>'
                        html+= '<tr>'
                    html+= '  </tbody>'
                html+= '</table>'
            html+='</div>';
            
            
            document.getElementById('productBody').innerHTML = html ;
            
        });

        $("#myModal").on('hidden.bs.modal', function () {
            location.reload(true);
        });
        
        $('#sendMail').click(function(e){

            var massage= $('#text_mail').val();
            var data ={
                "email":        $('#email').val(),
                "message":      massage,
                "name":         $('#name').val(),
                "_token":       $('meta[name="csrf-token"]').attr('content')

            };
            let emailRegex = /^[-\w.%+]{1,64}@(?:[A-Z0-9-]{1,63}\.){1,125}[A-Z]{2,63}$/i;
   
            e.preventDefault();
            if(data.email == "" || data.message == "" || data.name == "" ){
            
                swal({
                    icon: 'error',
                    title: 'Oops...',
                    text: 'Verifique los valores ingresados esten todos!',
                })
            }else if(!emailRegex.test(data.email)){
                swal({
                    icon: 'error',
                    title: 'Oops...',
                    text: 'Ingrese un correo valido!',
                })
            
            }else
                $.ajax({
                    url : "{{route('sendMessage')}}",
                    method: 'POST',
                    data: data,
                    success: function(response)
                    {
                        swal(
                            {
                                title: 'Correo!',
                                text: 'Correo enviado.',
                                type: 'success',
                                confirmButtonClass: 'btn btn-success',
                                cancelButtonClass: 'btn btn-danger m-l-10',
                                timer: 3000
                            }
                            
                        ).then(() => {
                                location.reload(true);
                            });
                    },

                    error: function(error)
                    {
                        swal(
                            {
                                title: 'Oops!',
                                text: 'Error al enviar correo.',
                                type: 'warning',
                                showCancelButton: false,
                                confirmButtonClass: 'btn btn-success',
                                cancelButtonClass: 'btn btn-danger m-l-10',
                                timer: 3000
                            }
                            
                        ).then(() => {
                                location.reload(true);
                            })
                    }
                }); 
    })
    </script>   
    <div class="footer" align ="right">
        <button class="btn btn-success" data-toggle="modal"   data-target="#sendMailModal">
            <i class="ion-android-send"></i>
        </button>
    </div>         
</html>





