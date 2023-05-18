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

    <table  width="100%" height="740px">

        <tr>

            <td align="center"> <a href=inicio_ceo.php><img src="huawei.png"  alt="Logo de huawei" class="imagen"/></a> </td>
            <td rowspan="7" class="atras" style="width:3%"> </td>
            <td colspan="2" class="ancho">  </td>
            <td class="usuario"> 
                <a href="perfil_usuario.php" target="_parent">
                <img src="usu.png" alt="usuario" class="personal"/>
                 </a>
                 <!-- adddddddddd -->
    <span><a href="salirSesion.php?email=<?php echo $email; ?>" style="color: #333; font-weight: bold;">Salir</a></span>

            
            </td>
            

        </tr>

        <tr style="height: 45px">

            <td width="10%" class="menu"> 
                
                <div class="dropdown">
                   <button class="dropbtn" onclick="document.location='Presentacion2.php'">Órganos de Gobierno</button>
                  </div>
            
            
            </td>
           
            <td colspan="3" class="fondo"> <font size="5"> SOCIOS </font> </td>
            
            
        </tr>

        
        <tr style="height: 45px">

            <td width="10%" class="menu"> 
                
                <div class="dropdown">
                   <button class="dropbtn" onclick="document.location='Presentacion3.php'">Administración</button>
                    <div class="dropdown-content">
                    </div>
                  </div>
            
            </td>
           
            <td colspan="3">  </td>
            

        </tr>

        <tr style="height: 45px">

            <td width="10%" class="menu"> 
                
                <div class="dropdown">
                    <button class="dropbtn" onclick="document.location='Presentacion4.php'">Producción y Ventas</button>
                    <div class="dropdown-content">
                    </div>
                  </div>
            
            </td>
           
            <td colspan="3" class="atras"> </td>
            

        </tr>

        
        <tr  style="height: 45px">

            <td width="10%" class="menu"> 
                
                <div class="dropdown">
                  <button class="dropbtn" onclick="document.location='Presentacion5.php'">Finanzas</button>
                    <div class="dropdown-content">
                    </div>
                  </div>
            
            </td>
            
            <td colspan="3" rowspan="3"> 

                <h2 style="text-align: center;"> Bienvenido </h2>

               
                <table width="90%" height="390px" align="center">

                    <tr>
                        <td > 
                            
                            <div class="gallery">
                                <a target="_blank" href="pres.jpg">
                                  <img src="pres.jpg" alt="Cinque Terre" width="600" height="400" style="border-radius: 10px"5>
                                </a>
                                <div class="desc">Some quick example text to build on the card tittle and make up the bulk of the card's content</div>
                              </div>
                        
                        </td>
                       
                       
                       
                        <td style="width:10%" rowspan="2"></td>
                        <td>

                            <div class="gallery">
                                <a target="_blank" href="presi.jpg">
                                  <img src="presi.jpg" alt="Cinque Terre" width="600" height="400" style="border-radius: 10px">
                                </a>
                                <div class="desc">Some quick example text to build on the card tittle and make up the bulk of the card's content</div>
                              </div>


                        </td>
                  


                </table>


            </td>
          
            

        </tr>

        <tr style="height: 45px">

            <td width="10%" class="menu"> 
                
                <div class="dropdown">
                  <button class="dropbtn" onclick="document.location='Presentacion6.php'">Informática</button>
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