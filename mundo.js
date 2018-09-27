var http = require("http");
var manejador = fuction(solicitud, respuesta){
	console.log("Recibimos una nueva peticion");
	respuesta.end("Hola Mundo")
};
var servidor = http.createServer(manejador);
servidor.listen(8080);
