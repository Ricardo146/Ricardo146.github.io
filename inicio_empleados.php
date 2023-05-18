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

            <td align="center"> <a href="inicio_empleados.php"><img src="huawei.png"  alt="Logo de huawei" class="imagen"/></a> </td>
            <td rowspan="12" class="atras" style="width:3%"> </td>
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
                
               
            
            
            </td>
           
            <td colspan="3" class="fondo"> <font size="5"> Bienvenido a Huawei </font> </td>
            
            
        </tr>

        
       
        <tr  style="height: 45px">

            <td width="10%" class="menu"> 
                
                <div class="dropdown">
                    <button class="dropbtn"><a href="#ref4" >Formato del personal</a></button>
                    <div class="dropdown-content">
                    </div>
                  </div>
            
            </td>
            
            <td colspan="3" rowspan="8"> 
               
  

        
    
    
        
    
        
    <!-- *****************************seccion4******** -->
    <h4><a name="ref4"> .</a>Formato del personal </h4>
    <table  border width="80%" height="120px" align="center">
    
      <tr>
    
      <td>ID</td>
      <td>Nombre</td>
      <td>Curp</td>
      </tr>
    
      <tr>
    <td>112</td>
    <td>Juan Lopez Perez</td>
    <td>JN0345GHDFZRBA0</td>
    </tr>
    
    
    </table>
    <!-- *****************************seccion5******** -->
    <div  style="height:40px" ></div>
    <h4><a name="ref5"> .</a>Documentacion de seguridad e higiene</h4>
    <table  border width="80%" height="120px" align="center">
    
      <tr>
    
      <td>PROTOCOLO</td>
      <td>QUIEN REALIZO</td>
      <td>ENCARGADO</td>
      </tr>
    
      <tr>
    <td>002</td>
    <td>MARCO ANTONIO JUAREZ</td>
    <td>ROSA HERNANDEZ</td>
    </tr>
    
    
    </table>
    <!-- *****************************seccion6******** -->
    <div  style="height:40px" ></div>
    <h4><a name="ref6"> .</a>Documento de servicios medicos de la empresa </h4>
    <table  border width="80%" height="120px" align="center">
    
      <tr>
    
      <td>Area</td>
      <td>No de consultorio</td>
      <td>Medico</td>
      </tr>
    
      <tr>
    <td>Administracion</td>
    <td>2</td>
    <td>Rosa Lopez Chavez</td>
    </tr>
    
    
    </table>
    
    <!-- *****************************seccion9******** -->
    <div  style="height:40px" ></div>
    <h4><a name="ref9"> .</a>Certificaciones</h4>
    <table  border width="80%" height="120px" align="center">
    
      <tr>
    
      <td>No certificacion</td>
      <td>Tipo</td>
      <td>fecha</td>
      </tr>
    
      <tr>
    <td>ISO :2007:1</td>
    <td>Seguridad de informacion</td>
    <td>2021</td>
    </tr>
    
    
    </table>
          
      
            </td>
          
            

        </tr>

        <tr style="height: 45px">

            <td width="10%" class="menu"> 
                
                <div class="dropdown">
                    <button class="dropbtn"><a href="#ref5" >Documentación de seguridad e higiene laboral</a></button>
                    <div class="dropdown-content">
                    </div>
                  </div>

            </td>

        </tr>
        
        <tr style="height: 45px">

            <td width="10%" class="menu"> 
                
                <div class="dropdown">
                    <button class="dropbtn"><a href="#ref6" >Documentación de los servicios médicos de empresa</a></button>
                    <div class="dropdown-content">
                    </div>
                  </div>

            </td>

        </tr>

		
      

   
		<tr style="height: 45px">

            <td width="10%" class="menu"> 
                
                <div class="dropdown">
                    <button class="dropbtn"><a href="#ref6" >Certificaciones</a></button>
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
