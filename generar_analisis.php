<?php
session_start();
include 'head.php';
echo'Analisis de las Multas por Radares <mark>(1.5 Puntos)<br><br>
<table>
  <thead>
    <tr>
      <th>Radar 1</th>
      <th>Radar 2</th>
      <th>Radar 3</th>
      <th>Radar 4</th>
    </tr>
  </thead>';
  $contador1=0;
  $contador2=0;
  $contador3=0;
  $contador4=0;
  foreach($_SESSION['multas'] as $clave=>$valor)
  {
    if($valor['radar']==1)
    {$contador1++;}
    if($valor['radar']==2)
    {$contador2++;}
    if($valor['radar']==3)
    {$contador3++;}
    if($valor['radar']==4)
    {$contador4++;}
  }
      echo '<tr>
        <td>'.$contador1.' </td>
        <td>'.$contador2.' </td>
        <td>'.$contador3.' </td>
        <td>'.$contador4.' </td>
                    
      </tr>';

 echo '</table>';
include 'pie.php';

