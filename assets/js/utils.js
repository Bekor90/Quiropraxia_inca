$(document).ready(function(){
	var isEnable = false;
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
      }else{
        isEnable = true;
        $("#registrar").attr('disabled','disabled');
	      $("#alert").hide();
      }
    });

    $("#btfiltro").click(function(){

      var input_valor = $("#filtro").val();
			$.ajax({			
				url:'http://localhost/Quiropraxia_inca/buscar/paciente',
        type: 'POST',
        data: {filtro: input_valor },
				success:function(data){
					if(data){           
            console.log(data);
            
           /* $(".section-modal .profile").click(function() {
              $(".overlay").addClass("is-active");             
            });*/
					}
					else{
						alert("error")
					}
				}
			});
		});

});


