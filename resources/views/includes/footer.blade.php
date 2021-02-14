      <script src="{{URL('js/jquery.min.js')}}"></script>
      <script src="{{URL('js/bootstrap.js')}}"></script>
      <script src="{{URL('js/nifty.js')}}"></script>
      <script src="{{URL('js/demo/nifty-demo.js')}}"></script>
      <script src="{{URL('plugins/datatables/media/js/jquery.dataTables.js')}}"></script>
      <script src="{{URL('plugins/datatables/media/js/dataTables.bootstrap.js')}}"></script>
      <script src="{{URL('plugins/datatables/extensions/Responsive/js/dataTables.responsive.min.js')}}"></script>

      <!--FooTable [ OPTIONAL ]-->
      <link href="{{URL('plugins/fooTable/css/footable.core.css')}}" rel="stylesheet">
      <!--FooTable [ OPTIONAL ]-->
      <script src="{{URL('plugins/fooTable/dist/footable.all.min.js')}}"></script>
      <script src="{{URL('plugins/fooTable/js/footable.js')}}"></script>
      <script src="{{URL('js/demo/sweetalert.min.js')}}"></script>
      <!--Full Calendar [ OPTIONAL ]-->
      <script src="{{URL('plugins/fullcalendar/lib/moment.min.js')}}"></script>
      <script src="{{URL('plugins/fullcalendar/lib/jquery-ui.custom.min.js')}}"></script>
      <script src="{{URL('plugins/fullcalendar/fullcalendar.min.js')}}"></script>

      <!--DataTables Sample [ SAMPLE ]-->
      <script src="{{URL('js/demo/tables-datatables.js')}}"></script>
      <script src="{{URL('js/demo/tables-footable.js')}}"></script>
      <script src="{{URL('js/demo/ui-buttons.js')}}"></script>

      <!--Full Calendar [ SAMPLE ]-->
      <script src="{{URL('js/demo/misc-fullcalendar.js')}}"></script>
     
      <script>
          function formatNumber (inputNum) {
            var cif = 3, dec = 2;   
          // Lo convertimos en texto
          inputNum = inputNum.toString()
          // separamos en un array los valores antes y después del punto
          inputNum = inputNum.split('.')
          // evaluamos si existen decimales
          if (!inputNum[1]) {
            inputNum[1] = '00'
          }
          let separados
          // se calcula la longitud de la cadena
          if (inputNum[0].length > cif) {
            let uno = inputNum[0].length % cif
            if (uno === 0) {
              separados = []
            } else {
              separados = [inputNum[0].substring(0, uno)]
            }
            let posiciones = parseInt(inputNum[0].length / cif)
            for (let i = 0; i < posiciones; i++) {
              let pos = ((i * cif) + uno)
              separados.push(inputNum[0].substring(pos, (pos + 3)))
            }
          } else {
            separados = [inputNum[0]]
          }
          var numFinal= separados.join(',')+ '.' + inputNum[1];

          return numFinal;
        }; 
        window.onbeforeunload=function(){
        var link_url=window.location.pathname;
        var path=link_url.split("/");
        if((path[3]!='payroll'&&path[4]!='show')&&path[3]!='templates')
          $(".loader").fadeIn("slow");
        }
        // $(document).on('submit','form',function(){
        //   $(".loader").fadeIn("slow");
        // })
      </script>
    
     