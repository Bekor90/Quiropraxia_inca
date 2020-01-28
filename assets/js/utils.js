$(document).ready(function(){
  var isEnable = false;
  var isActiveDiag = false;
  var isActiveDesc = false;
    $("#menu-toggle").click(function(e) {
      e.preventDefault();
      $("#wrapper").toggleClass("toggled");      
    });
    $("#registrar").click(function(e) {
      e.preventDefault();
      if(isEnable){
        isEnable = false;
        $("#consultar").removeAttr('disabled');
      }else{
        isEnable = true;
        $("#consultar").attr('disabled','disabled');
	$("#alert").hide();	      
      }
    });

    $("#consultar").click(function(e) {
      e.preventDefault();
      if(isEnable){
        isEnable = false;
        $("#registrar").removeAttr('disabled');
        $("#lbfiltro").css({'display': ''});
        $("#filtro").css({'display': ''});
        $("#btfiltro").css({'display': ''});
        $("#btlimpiar").css({'display': ''});
        $("#information").css({'display': 'none'});
        $("#filtro").val(" ");

      }else{
        isEnable = true;
        $("#registrar").attr('disabled','disabled');
	      $("#alert").hide();
      }
    });

    $("#btlimpiar").click(function(e) {
      e.preventDefault();
      $("#filtro").val(" ");
      $("#information").css({'display': 'none'});
    
    });

    $("#btfiltro").click(function(){

      var input_valor = $("#filtro").val();     
			$.ajax({			
				url:'https://quiropraxia.herokuapp.com/buscar/paciente',
        type: 'POST',
        data: {
          filtro: input_valor
        },
				success:function(data){

          var datj= JSON.parse(data);

         	if(!datj){                   
            alert("El usuario no se ha encontrado!");                   
					}
					else{

            $("#information").css({'display': ''});
            $("#lbfiltro").css({'display': 'none'});
            $("#filtro").css({'display': 'none'});
            $("#btfiltro").css({'display': 'none'});
            $("#btlimpiar").css({'display': 'none'});          
  
            $("#infnombre").text(datj[0]['nombre']);
            $("#infapellidos").text(datj[0]['apellidos']);
            $("#infcedula").text(datj[0]['cedula']);
            $("#infedad").text(datj[0]['edad']);
            $("#infgenero").text(datj[0]['genero']);
            $("#infeps").text(datj[0]['eps']);
            $("#infocupa").text(datj[0]['ocupacion']);
            $("#infescolaridad").text(datj[0]['escolaridad']);
            $("#infciudad").text(datj[0]['ciudad']);
            $("#infmunicipio").text(datj[0]['municipio']);
            $("#infbarrio").text(datj[0]['barrio']);
            $("#infdireccion").text(datj[0]['direccion']);
            $("#inftelefono").text(datj[0]['telefono']);
            $("#infpeso").text(datj[0]['peso']);
            $("#infestatura").text(datj[0]['estatura']);
            $("#infmedicamento").text(datj[0]['medicamento']);
            $("#infecnaci").text(datj[0]['fecha_nac']);
            $("#infeccontrol").text(datj[0]['fecha_control']); 
            $("#txtdiagnostico").text(datj[0]['diagnostico']);
            $("#txtdescripcion").text(datj[0]['descripcion']);
            $("#filtro").val('');                

					}
				},error: function() {
          console.log("Por favor verifique los datos de búsqueda");
        }
			});
    });

    $("#btdiagnostico").click(function(e) {
      e.preventDefault();     

     if(isActiveDiag){
      $("#textdiagnostico").css({'display': 'none'});
      $("#textdescripcion").css({'display': 'none'});
      isActiveDiag = false;
     }else{
      $("#textdiagnostico").css({'display': ''});
      $("#textdescripcion").css({'display': 'none'});
      isActiveDiag = true;
     }
    
    });


    $("#btdescripcion").click(function(e) {
      e.preventDefault();
      if(isActiveDiag){
        $("#textdescripcion").css({'display': 'none'});
        $("#textdiagnostico").css({'display': 'none'});
        isActiveDiag = false;
      }else{
        $("#textdescripcion").css({'display': ''});
        $("#textdiagnostico").css({'display': 'none'});
        isActiveDiag = true;
      }
    
    });

  
});


