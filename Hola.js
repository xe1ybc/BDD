var http=require("http");
var  manejador=function(solicitud, repuesta){
	consola.log("Recibimos una nueva petición");
	repuesta.final("Hola Mundo");
}
var servidor=http.createServer(manejador);
Servidor.listen(8080);
