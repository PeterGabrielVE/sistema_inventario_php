var x,y;
x = $(document);
y = $(window);
x.ready(inicializarEventos);

function inicializarEventos{
	preLoadInit();
	login();
}

function login(){
	$('#form-login').submit(function(event){

		event.preventDefault();
		var folio = $("#itFolio").val();
		var password = $("#itPassword").val();

		if(folio == ""){
			$("#campo1").addClass("has-error");
      		$("#mensaje1").fadeIn();
      		return false;
		}else{
			$("#campo1").removeClass("has-error");
			$("#mensaje1").fadeOut();

			if(password ==""){
				$("#campo2").addClass("has-error");
				$("#mensaje2").fadeIn();
				return false;
			}else{
				$("#campo2").removeClass("hass-error");
				$("#mensaje2").fadeOut();
				$("#mensaje").html("");
				var datos ="action=login&" + $("#form-login").serialize();
				$.post("../controllers/usersController.php",datos,function(data){
					$("#mensaje").html(data);
          			$('#mensaje').fadeIn();
				});
			}// else password
		}//else folio
	});
}