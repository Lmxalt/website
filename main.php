<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title> PHP Practice </title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
 <div class="n">
	<div class="header">     
		<div class="inner_header">
            <div class="logo">   
             
                <img src="img/l.png" alt="php">   
        
            </div>
 

            <nav class="navig">
            <li><span><a href="">Главная</a></span></li>
            <li><span><a href="">Обо Мне</a></span></li>
            <li><span><a href="">Контакты</a></span></li>
            <li><span><a href="https://github.com/">Github</a></span></li>
            </nav> 

        </div>
        

	</div>

    <div class="main">
        <div class="cont_main">
         
            <div class="welcome"> <h1>   <?php  echo $p  ?> </h1> 
            </div>
           
            <div class="data">

                    <div class="myImg"> <?php  echo '<img src="img/qphp.jpg">'; ?>
                    </div>

                <div class="fullname">
                        <p> Меня зовут 
                        <?php echo $name, '<br>'; 
                            echo 'Город', ' ', $city; ?>                                      
                        </p> 
          
                        <p> Мне <?php  echo $age;?> лет </p>
                </div>
            </div>
        
    

           <div class="knowledge">
                                   
                    <?php  include 'knowledge.inc.php'; ?>
                    <?php   echo $a, ' ', $b, ' ', $c, $d; ?> <br>
                                                      
                    <?php
                        $a = 30;
                        $b = 20;
                        $d = 10;
                        $c = ($a + $b)/$d;
                        echo $c; 
                    ?> <br>    

                    <?php 
                    echo $e;
                    ?> 
               
            </div>
        </div>
    </div>
   
    <div class="footer">
        <h2>Мы изучили основы PHP!</h2>
    </div>
</div>
</body>
</html>
