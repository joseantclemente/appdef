<?php 
session_start();
$correcto=0;
//$suministros=array();
$consulta="";
$x=0;
for($i=0;$i<count($_SESSION['SUMINISTROS']);$i++)
   				{
					
					
						//array_push($suministros,$_SESSION['SUMINISTROS'][$i]);
						
						if ($x==0)
						{
							$consulta="id_suministro=".$_SESSION['SUMINISTROS'][$i];
							}
						else
						{
							$consulta=$consulta." or id_suministro=".$_SESSION['SUMINISTROS'][$i];
							}
						
						$x++;
						
						
					
    				if ($_SESSION['SUMINISTROS'][$i]==$_GET['id'])
					{
						$correcto=1;
						//array_push($suministros,$_SESSION['SUMINISTROS'][$i]);
						
						
						}
				
					
   				}

if ($correcto==0)
{
	header('Location: login.php');
	}

?>
<!doctype html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Controller Energético</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<link rel="shortcut icon" type="image/x-icon" href="images/favicon.ico" />
	
	<link rel="stylesheet" type="text/css" href="styles/style.css" media="screen, print"/>
	
	<script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
	<script src="http://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
    
 	<script type="text/javascript" src="js/js.js"></script>
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>    
</head>



<body>
<?php include_once("/analyticstracking.php") ?>
    
    
	<header class="gen">
    	<div>
            <div class="sup">
                <div class="fleft"><span aria-hidden="true" class="icon-uniE609"></span></div>
                <div class="fleft"><p class="tcenter">Suministro: <span id="suministro">Almería</span></p></div>
                <div class="fright"><a href="seleccion.php?id=2"><span aria-hidden="true" class="icon-search"></span></a></div>
            </div>
            
            <nav id="navegador">
                <ul>
                    <li><a href="#"><span aria-hidden="true" class="icon-screen"></span></a></li>
                    <li><a href="#"><span aria-hidden="true" class="icon-gauge"></span></a></li>
                    <li><a href="#"><span aria-hidden="true" class="icon-uniE600"></span></a></li>
                </ul>
            </nav>
		</div>
   
	</header>
    
    
    
    <div class="container">
    	<h1 class="raleway fleft">Selección de Suministro</h1>
        
        <ul class="ulsumin fleft">
        	<li>
            	<a href="#">
                    <div class="fleft infosum">
                        <p>Puerta del Mar</p>
                        <p>ES 0081 2222 3125 9125 LM</p>
                        <p>Alarmas (<span>0</span>)</p>
                    </div>
                    <div class="fright"><span aria-hidden="true" class="icon-arrow-right"></span></div>
                </a>
            </li>
            <li>
            	<a href="#">
                    <div class="fleft infosum">
                        <p>Almería</p>
                        <p>ES 0002 0000 5410 3256 PW</p>
                        <p class="alarma">Alarmas (<span>2</span>)</p>
                    </div>
                    <div class="fright"><span aria-hidden="true" class="icon-arrow-right"></span></div>
                </a>
            </li>
            <li>
            	<a href="#">
                    <div class="fleft infosum">
                        <p>Mercat SL</p>
                        <p>ES 0081 2222 3125 9125 LM</p>
                        <p >Alarmas (<span>0</span>)</p>
                    </div>
                    <div class="fright"><span aria-hidden="true" class="icon-arrow-right"></span></div>
                </a>
            </li>
            <li>
            	<a href="#">
                    <div class="fleft infosum">
                        <p>Sumsum</p>
                        <p>ES 0002 0000 5410 3256 PW</p>
                        <p class="alarma">Alarmas (<span>1</span>)</p>
                    </div>
                    <div class="fright"><span aria-hidden="true" class="icon-arrow-right"></span></div>
                </a>
            </li>
            <li>
            	<a href="#">
                    <div class="fleft infosum">
                        <p>Puerta del Mar</p>
                        <p>ES 0081 2222 3125 9125 LM</p>
                        <p>Alarmas (<span>0</span>)</p>
                    </div>
                    <div class="fright"><span aria-hidden="true" class="icon-arrow-right"></span></div>
                </a>
            </li>
            <li>
            	<a href="#">
                    <div class="fleft infosum">
                        <p>Almería</p>
                        <p>ES 0002 0000 5410 3256 PW</p>
                        <p class="alarma">Alarmas (<span>2</span>)</p>
                    </div>
                    <div class="fright"><span aria-hidden="true" class="icon-arrow-right"></span></div>
                </a>
            </li>
            <li>
            	<a href="#">
                    <div class="fleft infosum">
                        <p>Mercat SL</p>
                        <p>ES 0081 2222 3125 9125 LM</p>
                        <p >Alarmas (<span>0</span>)</p>
                    </div>
                    <div class="fright"><span aria-hidden="true" class="icon-arrow-right"></span></div>
                </a>
            </li>
            <li>
            	<a href="#">
                    <div class="fleft infosum">
                        <p>Sumsum</p>
                        <p>ES 0002 0000 5410 3256 PW</p>
                        <p class="alarma">Alarmas (<span>1</span>)</p>
                    </div>
                    <div class="fright"><span aria-hidden="true" class="icon-arrow-right"></span></div>
                </a>
            </li>
            <li>
            	<a href="#">
                    <div class="fleft infosum">
                        <p>Puerta del Mar</p>
                        <p>ES 0081 2222 3125 9125 LM</p>
                        <p>Alarmas (<span>0</span>)</p>
                    </div>
                    <div class="fright"><span aria-hidden="true" class="icon-arrow-right"></span></div>
                </a>
            </li>
            <li>
            	<a href="#">
                    <div class="fleft infosum">
                        <p>Almería</p>
                        <p>ES 0002 0000 5410 3256 PW</p>
                        <p class="alarma">Alarmas (<span>2</span>)</p>
                    </div>
                    <div class="fright"><span aria-hidden="true" class="icon-arrow-right"></span></div>
                </a>
            </li>
            <li>
            	<a href="#">
                    <div class="fleft infosum">
                        <p>Mercat SL</p>
                        <p>ES 0081 2222 3125 9125 LM</p>
                        <p >Alarmas (<span>0</span>)</p>
                    </div>
                    <div class="fright"><span aria-hidden="true" class="icon-arrow-right"></span></div>
                </a>
            </li>
            <li>
            	<a href="#">
                    <div class="fleft infosum">
                        <p>Sumsum</p>
                        <p>ES 0002 0000 5410 3256 PW</p>
                        <p class="alarma">Alarmas (<span>1</span>)</p>
                    </div>
                    <div class="fright"><span aria-hidden="true" class="icon-arrow-right"></span></div>
                </a>
            </li>
        </ul>
    </div>
    
    
    
    
    
	<?php
        $usuario=$_POST['usuario'];
        $pass=$_POST['contra'];
        $dbname="Tiemporeal";
        $uid="sa";
        $serverName = "192.168.5.40\SQLEXPRESS";
        $pwd="Power%01";
        $constante=0;
        $connectionInfo = array("UID" => $uid, "PWD" => $pwd, "Database"=>"$dbname");
        $conn = sqlsrv_connect( $serverName, $connectionInfo);
        if($conn) {
            $sqlsum = "Select * from suministros where ".$consulta;
            $rssum = sqlsrv_query( $conn, $sqlsum);
            
            while( $rowsum = sqlsrv_fetch_array( $rssum, SQLSRV_FETCH_ASSOC) ){
                $tarifa=$rowsum["Tarifa"];
            }
    ?>

	
		
		<article id="usercontent">
			<section class="sectionsum">				
				<?php             
                   /* if ($_SESSION['demo']==0)
                    {
                        $sql = "Select * from suministros where ".$consulta;
                        
                        $rs = sqlsrv_query( $conn, $sql);
                        echo "<ul id='idcontract'>";
                        while( $row = sqlsrv_fetch_array( $rs, SQLSRV_FETCH_ASSOC) )
                        {
                            echo "<a href='index.php?id=".$row['id_suministro']."'><li class=''>";
                            echo "<p>".utf8_encode($row['alias'])."</p>";
                            echo "<p>".$row['cups']."</p>";
                            echo "</li></a>";
                        }
                    }
                    echo "</ul>";*/
                } //fin de if($conn)
                
                
                if ($_SESSION['demo']==1)
                {
                ?>					
                   <!-- <ul id="idcontract">
                        <a href="index.php?id=2"><li class="">
                            <p>Suministro 1</p>
                            <p>CUPS: ES 4527 8710 9620 0011 PC</p>
                        </li></a>
                        <a href="index.php?id=3"><li class="">
                            <p>Suministro 2</p>
                            <p>CUPS: ES 0081 2605 4682 1670 EM</p>
                        </li></a>
                        <a href="index.php?id=4"><li class="">
                            <p>Suministro 3</p>
                            <p>CUPS: ES 0001 1274 3548 4430 DR</p>
                        </li></a>
                        <a class="gen" href="contadorgeneracion.php?id=7"><li class="">
                            <p>Generación</p>
                            <p>CUPS: ES 0023 0692 1911 2001 PD</p>
                        </li></a>
                    </ul>-->
                <?php } ?>
			</section>
			 <!--end marginuser-->
		</article> <!--end usercontent-->


	<script>window.onload = setActive;</script>
</body>
</html>