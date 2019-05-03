<?php
    $txtCantidad = "";
    if(isset($_GET["cantidad"])){
        $txtCantidad = $_GET["cantidad"];
    }else{
        $txtCantidad = "";
    }
?>
<html>
    <head>
        <title>..:: Su Carnet - Su Nombre - Su Apellido - Uso de Arreglos en PHP::..</title>
        <meta http-equiv="content-type" content="text/html; charset=utf-8">
        <link rel="stylesheet" href="css/estilos.css" type="text/css" />
        <script type="text/javascript" src="js/funciones.js"></script>
    </head>
    <body>
        <table align="center" style="border:0px;">
            <tr>
                <td colspan="2" class="tema">uso de arreglos y estructuras c&iacute;clicas </td>
            </tr>
            <tr><td colspan="2">&nbsp;</td></tr>
            <tr>
                <td colspan="2">
                <!-- Area de Trabajo -->
                <table id="areaTrabajo">
                    <tr>
                        <td class="texto" colspan="2">
                        <b>&raquo; Paso 1 - Cantidad de Ventas a Procesar</b>
                        <br />
                        </td>
                    </tr>
                    <tr>
                        <td class="texto" width="50px">&nbsp;</td>
                        <td class="texto">
                            <form method=get name="frm1">
                            Cantidad:
                                <input type="text" id="txtCantidad" name="txtCantidad" value="<?php echo $txtCantidad; ?>" class="caja" style="width:50px;" Maxlength="2" onkeypress="return soloNumeros(event)" />
                                <input type="button" name="btnEnviar" value="Continuar &raquo;" class="caja" onclick="continuarPaso2();" />
                            </form>
                        </td>
                    </tr>
                    <?php
                        if(isset($_GET["paso"])){
                                 //Mostrar la cantidad de estudiantes a procesar
                                 echo "
                                     <tr>
                                        <td class=\"texto\" colspan=\"2\">
                                            <b>&raquo; Paso 2 - Introduzca la cantidad de Ventas</b><br />
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class=\"texto\" width=\"50px\">&nbsp;</td>
                                        <td class=\"texto\">
                                        <br />
                                        <form method=\"post\" action=\"procesar.php\" name=\"frm2\">
                                        <table style='border:0px;text-align:left;'>
                                        <tr class=\"tema\">
                                          <td align='center' width='50px'>No.</td>
                                          <td align='center' width='120px'>Monto</td>
                                          <td align='center' width='375px'>Vendedor</td>
                                          <td align='center' width='400px'>departamento</td>
                                          
                                        </tr>";
                                    for($a=0;$a<=($txtCantidad-1);$a++){
                                      $monto = "";
                                      $vendedor = "";
                                      echo "
                                      <tr>
                                          <td align='center'>".($a+1) ."</td>
                                          <td align='center'>
                                            <input type=text name=\"txtMonto[]\" value=\"$monto\" class=\"caja\" style=\"width:120px;\" MaxLength='8' onkeypress=\"return soloDecimales(event)\">
                                          </td>
                                          <td align='center'>
                                            <input type=text name=\"txtVendedor[]\" value=\"$vendedor\" class=\"caja\" style=\"width:375px;\">
                                          </td>
                                      </tr>"
                                           <td align='center'>"
                                            <input type=text name=\"txtdepartamento[]\" value=\"$departamento\" class=\"caja\" style=\"width:400px;\">
                                          </td>
                                      </tr>"
                                    }
                                    echo "
                                    <tr>
                                        <td colspan='3'>&nbsp;</td>
                                    </tr>
                                    <tr>
                                        <td colspan='3' align='center'>
                                            <input type='submit' value='Procesar' class='caja'>
                                            <input type='button' value='Limpiar y Realizar otro Calculo' class='caja' onclick=\"location.replace('$_SERVER[PHP_SELF]');\" style='width:230px;'>
                                        </td>
                                    </tr>
                                    </table>
                                    </form>
                                </td>
                            </tr>";
                            //Fin
                        }
                      ?>
                </table>
                <!-- Fin -->
                </td>
            </tr>
            <tr>
                <td colspan="2">&nbsp;</td>
            </tr>
            <tr>
                <td colspan="2" align="right" style="font-size:9pt;font-weight:bold;border-top:solid 1px gray;">
                    Desarrollado por Su Carnet - Su Nombre Su Apellido<br />
                    <?php
                        echo date("Y");
                    ?>
                </td>
            </tr>
        </table>
    </body>
</html>