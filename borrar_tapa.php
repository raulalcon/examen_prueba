<?php

include 'head.php';
session_start();
if(isset($_REQUEST['insertar']))
{
  $codigo_tapa=$_REQUEST['codigo'];
  unset($_SESSION['tapas'][$codigo_tapa]);
  
}  

 print' 
            <strong>INTRODUCE EL CODIGO DE LA TAPA A  PARA BORRAR <BR><BR></strong>
                                     
        <div   class="postcontent">
         <form action="" method="post">
            <table align="center" class="content-layout">
              
              
              <tr>
                <td align="right">Codigo de la Tapa :</td><td>
             
                    <input type="text" name="codigo" size="10"/>
                </td>
              </tr>
              
              
              <tr>
                <td colspan="2" >
                    <input name="borrar" type="submit"  value="Borrar Tapa"/>
                </td>
             </tr>
        </table>
    </form>
        </div>';
 include 'pie.php';