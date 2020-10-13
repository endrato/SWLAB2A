function validate(){
	var validado = true;
	$(":input").each(function(){
		var input = $(this);
		if(input.val()!=""){
			if(input.attr("id")=="correo"){
				validado = validateCorreo(input.val());
				if(!validado){
					alert("El correo no es valido");
				}
			}else if(input.attr("id")=="Pregunta"){
                if(input.val().length<10){
					validado=false;
                    alert("La pregunta  es muy corta");
                }
			}else if(input.attr("id")=="complejidad"){
				var escrito = /^([1-3])$/;
				if(!escrito.test(input.val())){
					validado=false;
					alert("tienes que introducir un numero del 1 al 3");
				}
			}
		}else{
			validado=false;
			alert("Hay que rellenar el hueco de: "+ input.attr("name"));
		}
		
	});
	return validado;
}

function validateCorreo(correo){
	var validado = false;
    var correoAluValido = /^[a-zA-Z]+(([0-9]{3})+@ikasle\.ehu\.(eus|es))$/;
    var correoProfValido = /^[a-zA-Z]+(\.[a-zA-Z]+@ehu\.(eus|es)|@ehu\.(eus|es))$/;
    
    if(correoAluValido.test(correo)){
        validado = true;
    }
    else if(correoProfValido.test(correo)){
        validado = true;
    }
    return validado;
}

$(document).ready(function(){
    $('#enviar').click(function(){
        return validate();
    });
});