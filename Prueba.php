<?php

 include('conexion/config.php');

 session_start();
 if (isset($_SESSION['emailUser']) != "") {
     $nameUser      = $_SESSION['nameUser'];
     $emailUser     = $_SESSION['emailUser'];
     $email         = $_SESSION['emailUser'];}





  $sql = "SELECT * FROM Personal_Administracion";
    $ejecuta_sentencia = mysqli_query($con,$sql);
        if(!$ejecuta_sentencia){
            echo'hay un error en la sentencia de sql: '.$sql;
        }else{
            //Paso 4 es traer los resultados como un array para imprirlos en pantalla
      $lista_Personal_Administracion = mysqli_fetch_array($ejecuta_sentencia);
        }

        $sql = "SELECT * FROM Capital_Fundacion";
        $ejecuta_sentencia = mysqli_query($con,$sql);
            if(!$ejecuta_sentencia){
                echo'hay un error en la sentencia de sql: '.$sql;
            }else{
                //Paso 4 es traer los resultados como un array para imprirlos en pantalla
          $lista_Capital_Fundacion = mysqli_fetch_array($ejecuta_sentencia);
            }

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

    <table width="100%" height="1200px">

        <tr style="height:90px">

            <td align="center"> <a href=inicio_ceo.php><img src="huawei.png"  alt="Logo de huawei" class="imagen"/></a> </td>
            <td rowspan="11" class="atras" style="width:3%"> </td>
            <td colspan="2" class="ancho">  </td>
            <td class="usuario"> 
                <a  href="perfil_usuario.php" target="_parent">
                <img src="usu.png" alt="usuario" class="personal"/>
                 </a>
                 <!-- adddddd -->
    <span><a href="salirSesion.php?email=<?php echo $email; ?>" style="color: #333; font-weight: bold;">Salir</a></span>

            
            </td>
            

        </tr>

        <tr style="height: 45px">

            <td width="10%" class="menu"> 
                
                <div class="dropdown">
                    <button class="dropbtn"> <a href="#ref1" >EEscritura Única Notarial </a> </button>
                  </div>
            
            
            </td>
           
            <td colspan="3" class="fondo"> <font size="5"> ÓRGANOS DE GOBIERNO </font> </td>
            
            
        </tr>

        
        <tr style="height: 45px">

            <td width="10%" class="menu"> 
                
                <div class="dropdown">
                    <button class="dropbtn"><a href="#ref2" >Escrituras notariales </a></button>
                    <div class="dropdown-content">
                    </div>
                  </div>
            
            </td>
           
            <td colspan="3">  </td>
            

        </tr>

        <tr style="height: 45px">

            <td width="10%" class="menu"> 
                
                <div class="dropdown">
                    <button class="dropbtn"><a href="#ref3" >Actas</a></button>
                    <div class="dropdown-content">
                    </div>
                  </div>
            
            </td>
           
            <td colspan="3" class="atras"> </td>
            

        </tr>

        
        <tr  style="height: 45px">

            <td width="10%" class="menu"> 
                
                <div class="dropdown">
                    <button class="dropbtn"><a href="#ref4" >Consejo de Administración</a></button>
                    <div class="dropdown-content">
                    </div>
                  </div>
            
            </td>
            
            <td colspan="3" rowspan="7"> 

<!-- *****************************seccion1******** -->
               
            <h4><a name="ref1"> .</a> Formato escritura</h4>
                
            <table  border width="80%" height="120px" align="center">

<tr >

<td>Puesto de Administración</td>
<td>Nombre del personal de Administración</td>
    </tr>
    


    

    <table  border width="80%" height="120px" align="center">

  <tr style="height:40px">

  <td>Id Capital de la fundación</td>
  <td>Socio</td>
  <td>Capital aportado</td>
  </tr>
  
</table>

<div  style="height:40px" ></div>
<!-- *****************************seccion2******** -->

<h4><a name="ref2"> .</a>Titulo</h4>
<table  border width="80%" height="120px" align="center">

  <tr>

  <td>1</td>
  <td>1</td>
  <td>1</td>
  </tr>

  <tr>
<td>1</td>
<td>1</td>
<td>1</td>
</tr>


</table>
<!-- *****************************seccion3******** -->
<div  style="height:40px" ></div>
<h4><a name="ref3"> .</a>Actas</h4>
<table  border width="80%" height="120px" align="center">

  <tr>

  <td>1</td>
  <td>1</td>
  <td>1</td>
  </tr>

  <tr>
<td>1</td>
<td>1</td>
<td>1</td>
</tr>


</table>
<!-- *****************************seccion4******** -->
<div  style="height:40px" ></div>
<h4><a name="ref4"> .</a>Consejo de administracion</h4>
<table  border width="80%" height="120px" align="center">

  <tr>

  <td>1</td>
  <td>1</td>
  <td>1</td>
  </tr>

  <tr>
<td>1</td>
<td>1</td>
<td>1</td>
</tr>


</table>
<!-- *****************************seccion5******** -->
<div  style="height:40px" ></div>
<h4><a name="ref5"> .</a>Estructura organizacional</h4>
<table  border width="80%" height="120px" align="center">

  <tr>

  <td>1</td>
  <td>1</td>
  <td>1</td>
  </tr>

  <tr>
<td>1</td>
<td>1</td>
<td>1</td>
</tr>


</table>
<!-- *****************************seccion6******** -->
<div  style="height:40px" ></div>
<h4><a name="ref6"> .</a>Socios</h4>
<table  border width="80%" height="120px" align="center">

  <tr>

  <td>1</td>
  <td>1</td>
  <td>1</td>
  </tr>

  <tr>
<td>1</td>
<td>1</td>
<td>1</td>
</tr>


</table>
<!-- *****************************seccion7******** -->
<div  style="height:40px" ></div>
<h4><a name="ref7"> .</a>Gerente</h4>
<table  border width="80%" height="120px" align="center">

  <tr>

  <td>1</td>
  <td>1</td>
  <td>1</td>
  </tr>

  <tr>
<td>1</td>
<td>1</td>
<td>1</td>
</tr>


</table>
<!-- *****************************seccion8******** -->
<div  style="height:40px" ></div>
<h4><a name="ref8"> .</a>Representante legal</h4>
<table  border width="80%" height="120px" align="center">

  <tr>

  <td>1</td>
  <td>1</td>
  <td>1</td>
  </tr>

  <tr>
<td>1</td>
<td>1</td>
<td>1</td>
</tr>


</table>
<!-- *****************************seccion9******** -->
<div  style="height:40px" ></div>
<h4><a name="ref9"> .</a>Consejo</h4>
<table  border width="80%" height="120px" align="center">

  <tr>

  <td>1</td>
  <td>1</td>
  <td>1</td>
  </tr>

  <tr>
<td>1</td>
<td>1</td>
<td>1</td>
</tr>


</table>





        </tr>






        <tr style="height: 45px">

            <td width="10%" class="menu"> 
                
                <div class="dropdown">
                    <button class="dropbtn"><a href="#ref5" >Estructura organizacional</a></button>
                    <div class="dropdown-content">
                    </div>
                  </div>

            </td>

        </tr>
        
        <tr style="height: 45px">

            <td width="10%" class="menu"> 
                
                <div class="dropdown">
                    <button class="dropbtn"><a href="#ref6" >Socios</a></button>
                    <div class="dropdown-content">
                    </div>
                  </div>

            </td>

        </tr>

		<tr style="height: 45px">

            <td width="10%" class="menu"> 
                
                <div class="dropdown">
                    <button class="dropbtn"><a href="#ref7" >Director/Gerente</a></button>
                    <div class="dropdown-content">
                    </div>
                  </div>

            </td>

        </tr>
        
      <tr style="height: 45px">

            <td width="10%" class="menu"> 
                
                <div class="dropdown">
                    <button class="dropbtn"><a href="#ref8" >Representante legal</a></button>
                    <div class="dropdown-content">
                    </div>
                  </div>

            </td>

        </tr>

   
		<tr style="height: 45px">

            <td width="10%" class="menu"> 
                
                <div class="dropdown">
                    <button class="dropbtn"><a href="#ref9" >Consejo</a></button>
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


