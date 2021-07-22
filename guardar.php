<?php
$fi=fopen("archivo.txt","a")
or die("problemas al crear archivo");

fwrite($fi,$_POST['nombre'].",");
//fwrite($fi,"\n");
fwrite($fi,$_POST['asunto'].",");
//fwrite($fi,"\n");
fwrite($fi,$_POST['mensaje'].",");
//fwrite($fi,"\n");
fwrite($fi,"-----------------------\n\n");
fclose($fi);
echo "Datos guardados";
?>