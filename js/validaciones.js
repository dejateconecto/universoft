function limpiarForm(){
	document.getElementById("contacto_frm").reset();
}
function validarForm(){
	var verificar = true;
	var expRegNombre = /^[a-zA-ZÑñÁáÉéÍíÓóÚúÜü\s]+$/;
	var expRegEmail = /^[\w-\.]+@([\w-]+\.)+[\w-]{2,4}$/;
	var formulario = document.getElementById("contacto_frm");
	var nombre = document.getElementById("nombre");
	var apellidoP = document.getElementById("app");
	var apellidoM = document.getElementById("apm");
	var telefono = document.getElementById("tel");
	var email = document.getElementById("email");
	var comentarios = document.getElementById("comentarios");
	if(!nombre.value){
		alert("El campo 'Nombre' es requerido.");
		nombre.focus();
		verificar = false;
	}
	else if(!expRegNombre.exec(nombre.value)){
		alert("El campo 'Nombre' solo acepta letras y espacios en blanco.");
		nombre.focus();
		verificar = false;
	}
	else if(!apellidoP.value){
		alert("El campo 'Apellido Paterno' es requerido.");
		apellidoP.focus();
		verificar = false;
	}
	else if(!expRegNombre.exec(apellidoP.value)){
		alert("El campo 'Apellido Paterno' solo acepta letras y espacios en blanco.");
		apellidoP.focus();
		verificar = false;
	}
	else if(!apellidoM.value){
		alert("El campo 'Apellido Materno' es requerido.");
		apellidoM.focus();
		verificar = false;
	}
	else if(!expRegNombre.exec(apellidoM.value)){
		alert("El campo 'Apellido Materno' solo acepta letras y espacios en blanco.");
		apellidoM.focus();
		verificar = false;
	}
	else if(!telefono.value){
		alert("El campo 'Teléfono' es requerido.");
		telefono.focus();
		verificar = false;
	}
	else if(isNaN(telefono.value)){
		alert("El campo 'Teléfono' solo acepta numeros.");
		telefono.focus();
		verificar = false;
	}
	else if(!email.value){
		alert("El campo 'Correo electrónico' es requerido.");
		email.focus();
		verificar = false;
	}
	else if(!expRegEmail.exec(email.value)){
		alert("El campo 'Correo electrónico' debe tener la estructura 'user@server.com'.");
		email.focus();
		verificar = false;
	}
	else if(!comentarios.value){
		alert("El campo '¿Cómo podemos ayudarte? es requerido.");
		comentarios.focus();
		verificar = false;
	}
	else if (comentarios.value.length > 500){
		alert("El campo '¿Cómo podemos ayudarte?' solo acepta 500 caracteres.");
		comentarios.focus();
		verificar = false;
	}
	if(verificar){
		document.contacto_frm.submit();
	}
}

window.onload = function(){
	var botonEnviar, botonLimpiar;
	botonLimpiar = document.getElementById("limpiar");
	botonLimpiar.onclick = limpiarForm;

	botonEnviar = document.contacto_frm.enviar_btn;
	botonEnviar.onclick = validarForm;
}
