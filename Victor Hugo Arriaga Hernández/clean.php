<!DOCTYPE html PUBLIC "_//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmins="http//www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1"/>
  <title>Listado 6-9.html.Ejemplo de m&eacute;todo click()</title>
  </head>
  <body>
  <script type="text/javascript">
  fuction click1()
  {
  checkbox1.focus();
  checkbox1.click();
  }
  fuction click2()
  {
  checkbox2.focus();
  checkbox2.click();
  }
  </script>
  <p>
  <input type="checkbox" id="checkbox1" value="checkbox1"/>
  <button onclick="click1();">Activar primer checkbox</button>
  <input type="checkbox" id="checkbox2" value="checkbox2"/>
  <button onclick="click1();">Activar segundo checkbox</button>
  </p>
  </body></html>