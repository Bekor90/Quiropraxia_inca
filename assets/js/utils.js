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

    $("#btfiltro").click(function(e){
      e.preventDefault();
			$.ajax({
				// cargamos url a nuestro contralador y método indicado
				url:'<?php echo base_url();?>/buscar/paciente',
				type: 'POST',
				success:function(data){
					if(data){
						alert(data)
					}
					else{
						alert("error")
					}
				}
			});
		});

});


