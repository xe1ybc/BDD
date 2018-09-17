var http = require("http");


var manejador = function(solicitud, repuesta){



	console.log("recibimos una nueva peticion ");
	repuesta.end("hola mundo");

}


var servidor = http.createServer(manejador);
servidor.listen(8080)