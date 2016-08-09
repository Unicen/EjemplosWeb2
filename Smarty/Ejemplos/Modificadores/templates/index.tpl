{include file="header.tpl" title=foo}

 <div class="container">
  <h1>Datos Personales</h1>
  <strong>Nombre:</strong> <p>{$Nombre}</p>
  <strong>Nombre (Mayusculas):</strong> <p>{$Nombre|capitalize:true}</p>
  <strong>Nombre (LowerCase):</strong> <p>{$Nombre|upper}</p>
  <strong>Nombre: (UpperCase)</strong> <p>{$Nombre|lower}</p>
  <strong>Sueldo: </strong> <p>{$Sueldo}</p>
  <strong>Sueldo (SinDecimales): </strong> <p>{$Sueldo|string_format:"%d"}</p>
  <strong>Sueldo (Con 2 Decimales): </strong> <p>{$Sueldo|string_format:"%.2f"}</p>
  <strong>Overview: </strong> <p>{$Overview}</p>
  <strong>Overview ww30: </strong> <p>{$Overview|wordwrap:30:"<br />\n"}</p>
  <strong>Overview ww60: </strong> <p>{$Overview|wordwrap:60:"<br />\n"}</p>
</div>

{include file="footer.tpl"}




