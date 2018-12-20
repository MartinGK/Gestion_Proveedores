
function sumar(cod,cuit,precio) {
	document.getElementById("pedido_"+cod+"_"+cuit).value = parseInt(document.getElementById("pedido_"+cod+"_"+cuit).value) + 1;
	document.getElementById("cantidad_"+cod+"_"+cuit).innerHTML = document.getElementById("pedido_"+cod+"_"+cuit).value;
	document.getElementById("precio_cant_"+cod+"_"+cuit).innerHTML = "$" + (parseInt(precio) * parseInt(document.getElementById("pedido_"+cod+"_"+cuit).value) );
}
function restar(cod,cuit,precio) {
	if(parseInt(document.getElementById("pedido_"+cod+"_"+cuit).value) == 0) return;
	document.getElementById("pedido_"+cod+"_"+cuit).value = parseInt(document.getElementById("pedido_"+cod+"_"+cuit).value) - 1;
	document.getElementById("cantidad_"+cod+"_"+cuit).innerHTML = document.getElementById("pedido_"+cod+"_"+cuit).value;
	document.getElementById("precio_cant_"+cod+"_"+cuit).innerHTML = "$" + (parseInt(precio) * parseInt(document.getElementById("pedido_"+cod+"_"+cuit).value) );
}

//PARA BORRAR LOS PEDIDOS PODRIA HACER UN DELETE AL PEDIDO_$CUIT_$cod