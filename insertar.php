<?php
session_start();

if (isset($_REQUEST['insertar']))
{
  $matricula=$_REQUEST['matricula'];
  $radar=$_REQUEST['identificador'];
  $vel=$_REQUEST['velocidad'];
  $fecha=$_REQUEST['fecha_hora'];
  $cuantia=rand(101,600);
  if($radar=1){
$_SESSION['multas'][]=array('matricula'=>$matricula,'radar'=>$radar, 'limite' => 30,'velocidad' => $vel,'cuantia'=>$cuantia,'fecha_hora' => $fecha,'pagada'=> 'NO');
}
elseif($radar=2){
  $_SESSION['multas'][]=array('matricula'=>$matricula,'radar'=>$radar, 'limite' => 50,'velocidad' => $vel,'cuantia'=>$cuantia,'fecha_hora' => $fecha,'pagada'=> 'NO');
}
elseif($radar=3){
  $_SESSION['multas'][]=array('matricula'=>$matricula,'radar'=>$radar, 'limite' => 90,'velocidad' => $vel,'cuantia'=>$cuantia,'fecha_hora' => $fecha,'pagada'=> 'NO');
}
elseif($radar=4){
  $_SESSION['multas'][]=array('matricula'=>$matricula,'radar'=>$radar, 'limite' => 1000,'velocidad' => $vel,'cuantia'=>$cuantia,'fecha_hora' => $fecha,'pagada'=> 'NO');
}
}
include 'head.php';
echo'Introduce los siguientes datos de la Multa<mark>(2 Puntos)<br><br>
                                     
              <div   class="postcontent">
              <form action="insertar.php" method="post">
                    <table align="center" class="content-layout">
                    <tr>
                      <td align="right"><strong>Matricula:</strong></td>
                      <td>
                        <input type="text" name="matricula" size="10" required/>
                      </td>
                     </tr>
                    <tr>
                        <td align="right"><strong>Selecciona el Radar :</strong></td>
                        <td>
                          <div align="left">
                                <select name="identificador">
                                  <option value="1">Radar 1</option>
                                  <option value="2">Radar 2</option>
                                  <option value="3">Radar 3</option>
                                  <option value="4">Radar 4</option>
                                 
                                </select>
                           </div>
                          </td>
                    </tr>
                    
                     <tr>
                      <td align="right"><strong>Velocidad:</strong></td>
                      <td>
                        <input type="number" name="velocidad" size="5" required />
                      </td>
                     </tr>
                     
                     <tr>
                      <td align="right"><strong>Fecha y Hora :</strong></td>
                      <td>
                        <input  type="datetime-local" name="fecha_hora" size="20" />
                      </td>
                     </tr>
                     
                    
                    
                    
                    <tr>
                        <td colspan="2">
                          <div align="center"><strong>
                            <input name="insertar" type="submit" id="insertar" value="Insertar"/>
                            </strong>
                          </div>
                        </td>
                    </tr>
                    </table>
        </form>';


include 'pie.php';
