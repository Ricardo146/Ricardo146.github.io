<?php
session_start();
include('conexion/config.php');
if (isset($_SESSION['emailUser']) != "") {
    $nameUser      = $_SESSION['nameUser'];
    $emailUser     = $_SESSION['emailUser'];
    $email         = $_SESSION['emailUser'];}
?>

<!DOCTYPE html>
<html>

<head>

    <meta charset="UTF-8">

    <style>
		
        a{
    text-decoration:none;
    color:white;
}
        .usuario{

            background-color: #E0E0E0;
            border-radius: 10px;

        }

        .atras{
            background-color: #F7F7F7;

        }

        .ancho{
           width:60%;
        }

        .menu{
           width:20%;
        }
     
        .fondo{
            background-color: #CCCCCC;
            color: #ffff;
            text-align: center;
        }

        .imagen{
            height: 90px;
        }

        .personal{
            height: 40px;
            padding: 5%;
        }

        .dropbtn {
            background-color: #232323;
            color: white;
            padding: 16px;
            font-size: 16px;
            border: none;
            cursor: pointer;
            width: 300px;
            text-align: left;
        }

        .dropdown:hover .dropbtn {
        background-color: #484848;
        }

      .presente{
        width:250px;
        height:260px;
      } 

      .gallery {
        width: 350px;
        top: 130px;
        margin: auto;
        }


        .gallery img {
        width: 100%;
        height: auto;
        }

        .desc {
        padding: 15px;
        text-align: center;
        }

</style>

</head>

<body>

    <table width="100%" height="1500px">

        <tr style="height:90px">

            <td align="center"> <a href="Inicio_ceo.php"><img src="huawei.png"  alt="Logo de huawei" class="imagen"/></a> </td>
            <td rowspan="13" class="atras" style="width:3%"> </td>
            <td colspan="2" class="ancho">  </td>
            <td class="usuario"> 
                <a href="perfil_usuario.php" target="_parent">
                <img src="usu.png" alt="usuario" class="personal"/>
                 <!-- adddddd -->
    <span><a href="salirSesion.php?email=<?php echo $email; ?>" style="color: #333; font-weight: bold;">Salir</a></span>

                 </a>
            
            </td>
            

        </tr>

        <tr style="height: 45px">

            <td width="10%" class="menu"> 
                
                <div class="dropdown">
                    <button class="dropbtn"><a href="#ref1" > Ficheros de proveedores y clientes</a></button>
                  </div>
            
            
            </td>
           
            <td colspan="3" class="fondo"> <font size="5"> PRODUCCIÓN Y VENTAS </font> </td>
            
            
        </tr>

        
        <tr style="height: 45px">

            <td width="10%" class="menu"> 
                
                <div class="dropdown">
                    <button class="dropbtn"><a href="#ref2" > Contratación de suministros </a> </button>
                    <div class="dropdown-content">
                    </div>
                  </div>
            
            </td>
           
            <td colspan="3">  </td>
            

        </tr>

        <tr style="height: 45px">

            <td width="10%" class="menu"> 
                
                <div class="dropdown">
                    <button class="dropbtn"> <a href="#ref3" > Pedidos </a></button>
                    <div class="dropdown-content">
                    </div>
                  </div>
            
            </td>
           
            <td colspan="3" class="atras"> </td>
            

        </tr>

        
        <tr  style="height: 45px">

            <td width="10%" class="menu"> 
                
                <div class="dropdown">
                    <button class="dropbtn"><a href="#ref4" > Pedidos </a></button>
                    <div class="dropdown-content">
                    </div>
                  </div>
            
            </td>
            
            <td colspan="3" rowspan="9"> 

            



            <!-- fffffffffff -->
      
<!-- *****************************seccion1******** -->
               
<h4><a name="ref1"> .</a> Fichero de proveedores y clientes</h4>
                
                <table  border width="80%" height="120px" align="center">
    
                <tr >
    <td>ID</td>
    <td>Nombre</td>
    <td>Producto</td>
        </tr>
      <tr>
        <td>100</td>
        <td>Valentim Tecnologia</td>
        <td>Proveedor de materiales de circuitos</td>
      </tr>
    
        
    
        <table  border width="80%" height="120px" align="center">
    
        <tr style="height:40px">
    
    <td>ID</td>
    <td>Cliente</td>
    <td>Dirección</td>
    </tr>
    <tr>
      <td>101</td>
      <td>María García</td>
      <td>AV. INDEPENDENCIA NO. 241</td>
    </tr>
    
      
    </table>
    
    <div  style="height:40px" ></div>
    <!-- *****************************seccion2******** -->
    
    <h4><a name="ref2"> .</a>Contrataciones de suministros</h4>
    <table  border width="80%" height="120px" align="center">
    
    <tr>
    
    <td>ID</td>
    <td>Fecha</td>
    <td>Descripción</td>
    </tr>
    <tr>
      <td>102</td>
      <td>25-01-2020</td>
      <td>Huawei se compromete a proteger los datos personales de sus proveedores y clientes y a utilizarlos únicamente para fines comerciales relacionados con la empresa</td>
    </tr>
    
    
    
    </table>
    <!-- *****************************seccion3******** -->
    <div  style="height:40px" ></div>
    <h4><a name="ref3"> .</a>Pedidos</h4>
    <table  border width="80%" height="120px" align="center">
    
    <tr>

<td>ID</td>
<td>Nombre del responsable</td>
<td>Suministros</td>
</tr>

<tr>
<td>103</td>
<td>Perez Rodriguez Juan</td>
<td>Placas</td>
</tr>
    
    
    </table>
    <!-- *****************************seccion4******** -->
    <div  style="height:40px" ></div>
    <h4><a name="ref4"> .</a>Documentacion complementaria</h4>
    <table  border width="80%" height="120px" align="center">
    
    <tr>

<td>ID</td>
<td>Nombre</td>
<td>Puesto</td>
</tr>

<tr>
<td>11112222</td>
<td>Gonzales Flores Esteban</td>
<td>Consejero</td>
</tr>
    
    </table>
    <!-- *****************************seccion5******** -->
    <div  style="height:40px" ></div>
    <h4><a name="ref5"> .</a>Facturas</h4>
    <table  border width="80%" height="120px" align="center">
    
    <tr>

<td>104</td>
<td>Fecha</td>
<td>Produco pedido</td>
</tr>

<tr>
<td>003</td>
<td>2022-10-10</td>
<td>Protector Pantalla</td>
</tr>

    
    
    </table>
    <!-- *****************************seccion6******** -->
    <div  style="height:40px" ></div>
    <h4><a name="ref6"> .</a>Recibos </h4>
    <table  border width="80%" height="120px" align="center">
    
    <tr>

  <td>ID</td>
  <td>Nombre responsable</td>
  <td>Tipo de vehiculo</td>
  </tr>

  <tr>
<td>106</td>
<td>Rosales Jeronimo Carlos</td>
<td>Camión</td>
</tr>
    
    
    </table>
    <!-- *****************************seccion7******** -->
    <div  style="height:40px" ></div>
    <h4><a name="ref7"> .</a>Correspondecia</h4>
    <table  border width="80%" height="120px" align="center">
    
    <tr>

<td>CFDI</td>
<td>Fecha de emisión</td>
<td>Concepto</td>
</tr>

<tr>
<td>107</td>
<td>2022-08-06</td>
<td>El expediente corresponde a la venta de servicios de consultoría a la empresa.</td>
</tr>
    
    
    </table>
    <!-- *****************************seccion8******** -->
    <div  style="height:40px" ></div>
    <h4><a name="ref8"> .</a>Procesos por area</h4>
    <table  border width="80%" height="120px" align="center">
    
    <tr>

<td>ID</td>
<td>Fecha de emisión</td>
<td>Descripción</td>
</tr>

<tr>
<td>118</td>
<td>2022-10-04</td>
<td>El cheque fue depositado en la cuenta bancaria de la empresa el mismo día de la emisión del recibo</td>
</tr>
    
    
    </table>
    <!-- *****************************seccion9******** -->
    <div  style="height:40px" ></div>
    <h4><a name="ref9"> .</a>Servicios</h4>
    <table  border width="80%" height="120px" align="center">
    
    <tr>

<td>ID</td>
<td>Fecha de emisión</td>
<td>Concepto</td>
</tr>

<tr>
<td>109</td>
<td>2022-04-07</td>
<td>Pago por componentes electronicos</td>
</tr>

    
    
    </table>
          
        <!-- *****************************seccion9******** -->
    <div  style="height:40px" ></div>
    <h4><a name="ref9"> .</a>Materias Primas</h4>
    <table  border width="80%" height="120px" align="center">
    
      <tr>
    
      <td>ID</td>
      <td>Nombre de la MP</td>
      <td>Cantidad</td>
      </tr>
    
      <tr>
    <td>12</td>
    <td>Monitor</td>
    <td>12</td>
    </tr>
    
    
    </table>
     

            </td>
          
            

        </tr>

        <tr style="height: 45px">

            <td width="10%" class="menu"> 
                
                <div class="dropdown">
                    <button class="dropbtn"><a href="#ref5" >Documentación complementaria de transporte</a></button>
                    <div class="dropdown-content">
                    </div>
                  </div>

            </td>

        </tr>
        
        <tr style="height: 45px">

            <td width="10%" class="menu"> 
                
                <div class="dropdown">
                    <button class="dropbtn"><a href="#ref6" > Facturas y facturas proforma </a></button>
                    <div class="dropdown-content">
                    </div>
                  </div>

            </td>

        </tr>

		<tr style="height: 45px">

            <td width="10%" class="menu"> 
                
                <div class="dropdown">
                    <button class="dropbtn"><a href="#ref7" >Recibos. Cheques y pagarés</a></button>
                    <div class="dropdown-content">
                    </div>
                  </div>

            </td>

        </tr>
        
      <tr style="height: 45px">

            <td width="10%" class="menu"> 
                
                <div class="dropdown">
                    <button class="dropbtn"><a href="#ref7" >Correspondencia</a></button>
                    <div class="dropdown-content">
                    </div>
                  </div>

            </td>

        </tr>

   
		<tr style="height: 45px">

            <td width="10%" class="menu"> 
                
                <div class="dropdown">
                    <button class="dropbtn"><a href="#ref8" >Procesos por área </a></button>
                    <div class="dropdown-content">
                    </div>
                  </div>

            </td>

        </tr>

        <tr style="height: 45px">

            <td width="10%" class="menu"> 
                
                <div class="dropdown">
                    <button class="dropbtn"><a href="#ref9" >Servicios </a></button>
                    <div class="dropdown-content">
                    </div>
                  </div>

            </td>

        </tr>

        <tr style="height: 45px">

            <td width="10%" class="menu"> 
                
                <div class="dropdown">
                    <button class="dropbtn"><a href="#ref10"> Materias Primas</a></button>
                    <div class="dropdown-content">
                    </div>
                  </div>

            </td>

        </tr>
        
          <tr>
            <td class="fondo">  </td>
        </tr>
   
        </table>

</body>
</html>
