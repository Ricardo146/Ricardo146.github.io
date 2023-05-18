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

    <table  width="100%" height="940px">

        <tr style="height:90px">
 
            <td align="center"> <a href="Inicio_ceo.php"><img src="huawei.png"  alt="Logo de huawei" class="imagen"/></a> </td>
            <td rowspan="7" class="atras" style="width:3%"> </td>
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
                    <button class="dropbtn"><a href="#ref1" >ISP</a></button>
                  </div>
            
            
            </td>
           
            <td colspan="3" class="fondo"> <font size="5"> INFORMÁTICA </font> </td>
            
            
        </tr>

        
        <tr style="height: 45px">

            <td width="10%" class="menu"> 
                
                <div class="dropdown">
                    <button class="dropbtn"><a href="#ref2" >Hardware</a></button>
                    <div class="dropdown-content">
                    </div>
                  </div>
            
            </td>
           
            <td colspan="3">  </td>
            

        </tr>

        <tr style="height: 45px">

            <td width="10%" class="menu"> 
                
                <div class="dropdown">
                    <button class="dropbtn"><a href="#ref3" >Software</a></button>
                    <div class="dropdown-content">
                    </div>
                  </div>
            
            </td>
           
            <td colspan="3" class="atras"> 

            </td>

        </tr>

        




        <tr  style="height: 45px">

            <td width="10%" class="menu"> 
                
                <div class="dropdown">
                    <button class="dropbtn"><a href="#ref4" >Investigación y Desarrollo</a></button>
                    <div class="dropdown-content">
                    </div>
                  </div>
            
            </td>
            
            <td colspan="3" rowspan="3"> 
               
            <table  border width="80%" height="120px" align="center">
    
      <tr style="height:40px">
    
      <td>Id Capital de la fundación</td>
      <td>Socio</td>
      <td>Capital aportado</td>
      </tr>
      
    </table>
    
    <div  style="height:40px" ></div>
    <!-- *****************************seccion2******** -->
    
    <h4><a name="ref1"> .</a>ISP</h4>
    <table  border width="80%" height="120px" align="center">
    
      <tr>
    
      <td>ID</td>
      <td>Servicio ISP</td>
      <td>Cantidad Megabits por segundo</td>
      </tr>
    
      <tr>
    <td>7569</td>
    <td>Acceso totalmente óptico y las redes de portadores convergentes proporcionan a los proveedores de servicios de Internet (ISP)</td>
    <td>1000</td>
    </tr>
    
    
    </table>
    <!-- *****************************seccion3******** -->
    <div  style="height:40px" ></div>
    <h4><a name="ref2"> .</a>Hardware</h4>
    <table  border width="80%" height="120px" align="center">
    
      <tr>
    
      <td>ID</td>
      <td>Fecha</td>
      <td>Descripcion</td>
      </tr>
    
      <tr>
    <td>7570</td>
    <td>2023-04-16</td>
    <td>Conmutadores de RED</td>
    </tr>
    
    
    </table>
    <!-- *****************************seccion4******** -->
    <div  style="height:40px" ></div>
    <h4><a name="ref3"> .</a>Software</h4>
    <table  border width="80%" height="120px" align="center">
    
      <tr>
    
      <td>ID</td>
      <td>Fecha</td>
      <td>Software de seguridad</td>
      </tr>
    
      <tr>
    <td>4548</td>
    <td>2023-04-16</td>
    <td>Conciencia situacional de seguridad y defensa APT</td>
    </tr>
    
    
    </table>
    <!-- *****************************seccion5******** -->
    <div  style="height:40px" ></div>
    <h4><a name="ref4"> .</a>Investigacion y desarrollo</h4>
    <table  border width="80%" height="120px" align="center">
    
      <tr>
    
      <td>ID</td>
      <td>Titulo</td>
      <td>Descricion</td>
      </tr>
    
      <tr>
    <td>7852</td>
    <td>Industria con inversión paciente en comunicaciones y computación</td>
    <td>En el campo de la optimización de redes, creamos un modelo de política de precios de red (NPP) consciente de la topología y un método de optimización dispersa autoadaptable para resolver problemas relacionados con los flujos en redes</td>
    </tr>
    
    
    </table>
    <!-- *****************************seccion6******** -->
    <div  style="height:40px" ></div>
    <h4><a name="ref5"> .</a>Equipo de computo</h4>
    <table  border width="80%" height="120px" align="center">
    
      <tr>
    
      <td>ID</td>
      <td>Tarjeta Madre</td>
      <td>Procesador</td>
      </tr>
    
      <tr>
    <td>7541</td>
    <td>AMD A320, Motherboard ASUS Prime A320M-K</td>
    <td>AMD RyzenTM 5 4600G</td>
    </tr>
    
    
    </table>
   

            </td>
          
        </tr>

        <tr style="height: 45px">

            <td width="10%" class="menu"> 
                
                <div class="dropdown">
                    <button class="dropbtn"><a href="#ref5" >Equipo de Cómputo</a></button>
                    <div class="dropdown-content">
                    </div>
                  </div>

            </td>

        </tr>

        <tr>

            <td rowspan="2" class="fondo">  </td>

        </tr>

   
        </table>

</body>
</html>