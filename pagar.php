<?php
session_start();
include 'head.php';
if (isset($_REQUEST['pagar']))
{
  $matri=$_REQUEST['matricula'];
  $fecha= $_REQUEST['fecha_hora'];
  foreach($_SESSION['multas'] as $clave=>$vector){
    if(($vector['matricula']==$matri)&&($vector['fecha_hora']==$fecha)){
      $radar=$_SESSION['multas'][$clave]['radar'];
      $vel=$_SESSION['multas'][$clave]['velocidad'];
      $cuantia=$_SESSION['multas'][$clave]['cuantia'];
      unset($_SESSION['multas'][$clave]);
      $_SESSION['multas'][]=array('matricula'=>$matri,'radar'=>$radar, 'limite' => 30,'velocidad' => $vel,'cuantia'=>$cuantia,'fecha_hora' => $fecha,'pagada'=> 'SI');
    }
  }
  var_dump($_SESSION['multas']);
}

echo' 
Introduce los datos de la Multa a Pagar <mark>(1.5 Puntos)<br><br>
                         
<div   class="postcontent"><form action="" method="post">
<table align="center" class="content-layout">
  
  
  <tr>
  <td align="right">
  <strong>Matricula :</strong></td><td>
  <div align="left">
        <input type="text" name="matricula" size="10"/>
  </div>
  </td>
  </tr>
  <tr>
    <td align="right"><strong>Fecha y Hora :</strong></td>
     <td>
        <input  type="datetime-local" name="fecha_hora" size="20" required />
     </td>
  </tr>
  
 <tr>
  <td colspan="2">
    <div align="center">
       <input name="pagar" type="submit"  value="Pagar Multa"/>
    </div>
  </td>
</tr>
</table>
</form>
</div>';              
include 'pie.php';
