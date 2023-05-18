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
                 </a>
                     <!-- adddddd -->
    <span><a href="salirSesion.php?email=<?php echo $email; ?>" style="color: #333; font-weight: bold;">Salir</a></span>

            
            </td>
            

        </tr>

        <tr style="height: 45px">

            <td width="10%" class="menu"> 
                
                <div class="dropdown">
                    <button class="dropbtn"><a href="#ref1" >Libro Diario </a> </button>
                  </div>
            
            
            </td>
           
            <td colspan="3" class="fondo"> <font size="5"> FINANZAS </font> </td>
            
            
        </tr>

        
        <tr style="height: 45px">

            <td width="10%" class="menu"> 
                
                <div class="dropdown">
                    <button class="dropbtn"><a href="#ref2" >Libro Mayor </a></button>
                    <div class="dropdown-content">
                    </div>
                  </div>
            
            </td>
           
            <td colspan="3">  </td>
            

        </tr>

        <tr style="height: 45px">

            <td width="10%" class="menu"> 
                
                <div class="dropdown">
                    <button class="dropbtn"><a href="#ref2" >Inventarios y balances</a></button>
                    <div class="dropdown-content">
                    </div>
                  </div>
            
            </td>
           
            <td colspan="3" class="atras"> </td>
            

        </tr>

        
        <tr  style="height: 45px">

            <td width="10%" class="menu"> 
                
                <div class="dropdown">
                    <button class="dropbtn"><a href="#ref3" >Cuentas anuales</a></button>
                    <div class="dropdown-content">
                    </div>
                  </div>
            
            </td>
            
            <td colspan="3" rowspan="9"> 


           <h4><a name="ref1"> .</a> <a href="#ref4" >Libro diario</a></h4>
                
                <table  border width="80%" height="120px" align="center">
    
    <tr style="height:40px">

                <td>Id del Libro</td>
                <td>Fecha</td>
                <td>Numero de Cuenta</td>
                    </tr>

                <tr style="height:250px">

                <td>500</td>
                <td>2023-03-13</td>
                <td>1000</td>
                    </tr>   
        
    
    
        
    
        <table  border width="80%" height="120px" align="center">
    
        <tr style="height:40px">

<td>Nombre de la Cuenta</td>
<td>Numero de Referencia</td>
<td>Debe</td>
    </tr>

<tr style="height:250px">

<td>Caja</td>
<td>1</td>
<td>102.32</td>
    </tr>
      
    </table>
    
    <div  style="height:40px" ></div>
    <!-- *****************************seccion2******** -->
    
    <h4><a name="ref2"> .</a>Libro mayor</h4>
    <table  border width="80%" height="120px" align="center">
    
      <tr>
    
      <td>No pag</td>
      <td>Decripcon</td>
      </tr>
    
      <tr>
    <td>12</td>
    <td>Salida de cheque</td>
    </tr>
    
    
    </table>
    <!-- *****************************seccion3******** -->
    <div  style="height:40px" ></div>
    <h4><a name="ref3"> .</a>Inventarios y balances</h4>
    <table  border width="80%" height="120px" align="center">
    
      <tr>
    
      <td>ID</td>
      <td>Descripcion</td>
      <td> Cantidad</td>
      </tr>
    
      <tr>
    <td>13</td>
    <td>Computafora de escritorio</td>
    <td>14</td>
    </tr>
    
    
    </table>
    <!-- *****************************seccion4******** -->
    <div  style="height:40px" ></div>
    <h4><a name="ref4"> .</a>Cuentas anuales</h4>
    <table  border width="80%" height="120px" align="center">
    
      <tr>
    
      <td>ID</td>
      <td>No de cuenta</td>
      <td>monto</td>
      </tr>
    
      <tr>
    <td>1</td>
    <td>1234533223</td>
    <td>1700</td>
    </tr>
    
    
    </table>
    <!-- *****************************seccion5******** -->
    <div  style="height:40px" ></div>
    <h4><a name="ref5"> .</a>Libro de registro de entrada y salida</h4>
    <table  border width="80%" height="120px" align="center">
    
    <tr>
    
    <td>item</td>
    <td>Nombre</td>
    <td>hora</td>
    </tr>
  
    <tr>
  <td>1</td>
  <td>Zarco Pamela</td>
  <td>7:00</td>
  </tr>
    
    </table>
    <!-- *****************************seccion6******** -->
    <div  style="height:40px" ></div>
    <h4><a name="ref6"> .</a>Libro de control económico </h4>
    <table  border width="80%" height="120px" align="center">
    
      <tr>
    
      <td>Tipo de cuenta</td>
      <td>Monto</td>
      </tr>
    
      <tr>
    <td>Credito</td>
    <td>100000</td>
    </tr>
    
    
    </table>
    <!-- *****************************seccion7******** -->
    <div  style="height:40px" ></div>
    <h4><a name="ref7"> .</a>Libro de compras y ventas </h4>
    <table  border width="80%" height="120px" align="center">
    
      <tr>
    
      <td>iTEM </td>
      <td>Precio</td>
      <td>Cantidad</td>
      </tr>
    
      <tr>
    <td>1</td>
    <td>12</td>
    <td>120</td>
    </tr>
    
    
    </table>
    <!-- *****************************seccion8******** -->
    <div  style="height:40px" ></div>
    <h4><a name="ref8"> .</a>Libro de facturas emitidas y recibidas</h4>
    <table  border width="80%" height="120px" align="center">
    
      <tr>
    
      <td>No. factura</td>
      <td>Monto</td>
      </tr>
    
      <tr>
    <td>112</td>
    <td>12333</td>
    </tr>
    
    
    </table>
    <!-- *****************************seccion9******** -->
    <div  style="height:40px" ></div>
    <h4><a name="ref9"> .</a>Libro de Caja</h4>
    <table  border width="80%" height="120px" align="center">
    
  <tr>

<td>ID</td>
<td>Periodo Inicial</td>
<td>Total</td>
</tr>

<tr>
<td>7888</td>
<td>2021-01-01</td>
<td>3150</td>
</tr>
    
    
    </table>
          
        <!-- *****************************seccion9******** -->
    <div  style="height:40px" ></div>
    <h4><a name="ref9"> .</a>Registro de remuneraciones</h4>
    <table  border width="80%" height="120px" align="center">
    
    <tr>

<td>ID</td>
<td>Fecha de emisión</td>
<td>Descripción</td>
</tr>

<tr>
<td>458</td>
<td>2022-10-04</td>
<td>Solicitud de Componentes Electronicos</td>
</tr>
    
    
    </table>
        <!-- *****************************seccion10******** -->
        <div  style="height:40px" ></div>
    <h4><a name="ref10"> .</a>Estudios de calidad e informes de implantación</h4>
    <table  border width="80%" height="120px" align="center">
    
    <tr>

  <td>ID</td>
  <td>Categoria</td>
  <td>Importe Total</td>
  </tr>

  <tr>
<td>15489</td>
<td>Electronico</td>
<td>469000</td>
</tr>
    
    
    </table>
     <!-- *****************************seccion11******** -->
     <div  style="height:40px" ></div>
    <h4><a name="ref11"> .</a>Manuales y procedimentos</h4>
    <table  border width="80%" height="120px" align="center">
    
    <tr style="height:40px">
    
    <td>ID</td>
    <td>Fecha</td>
    <td>Concepto</td>
    </tr>
    <tr>
      <td>234</td>
      <td>2023-03-13</td>
      <td>Mercaderia</td>
    </tr>
    
    </table>

            </td>
          
            

        </tr>

        <tr style="height: 45px">

            <td width="10%" class="menu"> 
                
                <div class="dropdown">
                    <button class="dropbtn"><a href="#ref5" >Libro de control económico</a></button>
                    <div class="dropdown-content">
                    </div>
                  </div>

            </td>

        </tr>
        
        <tr style="height: 45px">

            <td width="10%" class="menu"> 
                
                <div class="dropdown">
                    <button class="dropbtn"><a href="#ref6" >Libro de compras y ventas  </a> </button>
                    <div class="dropdown-content">
                    </div>
                  </div>

            </td>

        </tr>

		<tr style="height: 45px">

            <td width="10%" class="menu"> 
                
                <div class="dropdown">
                    <button class="dropbtn"><a href="#ref7" >Libro de facturas emitidas y recibidas</a></button>
                    <div class="dropdown-content">
                    </div>
                  </div>

            </td>

        </tr>
        
      <tr style="height: 45px">

            <td width="10%" class="menu"> 
                
                <div class="dropdown">
                    <button class="dropbtn"><a href="#ref8" >Libro de Caja</a></button>
                    <div class="dropdown-content">
                    </div>
                  </div>

            </td>

        </tr>

   
		<tr style="height: 45px">

            <td width="10%" class="menu"> 
                
                <div class="dropdown">
                    <button class="dropbtn"><a href="#ref9" >Registro de remuneraciones</a></button>
                    <div class="dropdown-content">
                    </div>
                  </div>

            </td>

        </tr>

        <tr style="height: 45px">

            <td width="10%" class="menu"> 
                
                <div class="dropdown">
                    <button class="dropbtn"><a href="#ref10" >Estudios de calidad e informes de implantación</a></button>
                    <div class="dropdown-content">
                    </div>
                  </div>

            </td>

        </tr>

        <tr style="height: 45px">

            <td width="10%" class="menu"> 
                
                <div class="dropdown">
                    <button class="dropbtn"><a href="#ref11" >Manuales y Procedimientos de control de calidad</a></button>
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
