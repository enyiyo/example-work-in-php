<html> 
 <head>
      <title>Ejemplo de métodos HTTP en PHP 7</title>
 </head> 
 
 <body>
 
  <?php
 
   if($_POST)
   {
     echo "El formulario se ejecutó con éxito.<br><br>";
 
     echo "<pre>";
     print_r($_POST);
     echo "</pre >";
   }
 
 ?>
 
  <form action="" method="post">
 
     <p>
       Dime cuál es tu nombre: <input type="text" name="nombre">
     </p>
 
      <p>
       Dime cómo se llama tu ciudad: <input type="text" name="ciudad">
     </p>
 
      <p>
       ¿En qué año naciste?: 
          <select name="anoNacimiento">
           <option value="null">Selecciona un año</option>
           <?php
           $anos = 1900;
         while ($anos < 2000)
            {
         ?>
          <option value="<?=$anos;?>"><?=$anos;?></option>
          <?php
           $anos++;
            }
         ?>
          </select>
     </p>
 
      <p>
       <input type="submit" value="Validar">
     </p>
 
    </form>
 
 </body> 
  </html>
  