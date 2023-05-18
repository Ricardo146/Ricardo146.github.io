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

        body{
            background-image: url("presi.jpg");
            background-repeat: no-repeat;
            background-attachment: fixed; 
            background-size: 100% 100%;
        }

        

        .fondo{
            position: relative;
            top: 130px;
            margin: auto;
            width: 600px;
            padding: 5%;
            background-color: white;
            border-radius:50px;
            
        }

        .imagen{
            width:250px;
            height:260px;
        }

        .bordes{
            border-style: groove;
            border-color: #DBDBDB;
            border-radius: 4px;
            width: 70%;
            padding: 4px;
        }

         </style>


    </head>
    <body onload="page_load">

        <div  class="fondo">          
            <table width="100%">      

                <tr>
                    <td rowspan="6" style="width:48%"> <img src="usu.png" alt="Empresa Huawei" class="imagen"> </td>
                </tr>
                <tr>
                    <td>

                        <label for="username">Informacion del usuario:</label><br>

                    </td>

                </tr>

                <tr>
                    
                    <td>

                        <label for="username">Empleado:</label><br>
                        <p> <strong><?php echo $nameUser; ?></strong></p>

                    </td>
                </tr>

                <tr>
                  
                    <td>

                        <label for="username">Correo electrónico:</label><br>
                        <p><strong><?php echo $email; ?></strong></p>


                    </td>
                </tr>
                <tr>
                  
                  <td>

                  <span><a href="salirSesion.php?email=<?php echo $email; ?>" style="color: #333; font-weight: bold; background-color:aqua;">Cerrar Sesion</a></span>



                  </td>
              </tr>
              
                <tr>
                  
                </tr>

                <tr>

                </tr>

                </table>
           

        </div>    
       

    </body>
    </html>