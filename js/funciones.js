  function soloNumeros(e) {
        tecla = (document.all) ? e.keyCode : e.which;
        if (tecla==8) return true;
        patron =/\d/;
        te = String.fromCharCode(tecla);
        return patron.test(te);
    }

    var nav4 = window.Event ? true : false;
    function soloDecimales(evt){
      // NOTE: Backspace = 8, Enter = 13, '0' = 48, '9' = 57, '.' = 46
      var key = nav4 ? evt.which : evt.keyCode;
      return (key <= 13 || (key >= 48 && key <= 57) || key == 46);
    }

    function continuarPaso2()
    {
        if(document.frm1.txtCantidad.value==''){
            alert('Introduzca la cantidad de ventas a procesar');
            document.frm1.txtCantidad.focus();
            return false;
        }else{
            location.replace('index.php?paso=2&&cantidad='+document.frm1.txtCantidad.value);
        }
    }