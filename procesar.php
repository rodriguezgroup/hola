 <?php
if ($_POST){
    if (isset ($_POST["txtMonto"])){
        echo "<table align= 'center'width='500px'>
        <tr>
            <td colspan='3'><h1>Resultado</h1></td>
        </tr>
        <tr>
        <td>#</td>
        <td>vendedor</td>
        <td>Monto</td>
        </tr>";
        $i=0;
        $posicion=0;
        $montoTotal=0;
        
        /////////////
        
        foreach($_POST["txtMonto"] as $monto) {
            if($monto!=""){
                $i++;
                $vendedor= $_POST["txtVendedor"][$posicion];
                $montoTotal+= $monto;
                echo "<tr>
                <td>$i</td>
                <td>$vendedor</td>
                <td>$". number_format($monto,2) ."</td>
                </tr>";
            }
            $posicion++;
        }
        
        echo "<tr>
            <td colaspan='2'>MONTO&nbsp;TOTAL</td>
                <td>$". number_format($montoTotal,2)."</td>                
                </tr>
                <tr>
                <td colspan='3' align= 'center'>
                <br><br><a href='index.php'>[nuevo C&aacute;lculo]</a>
                </td>
                </tr>
                <table>";
                
                
    }
}
?>