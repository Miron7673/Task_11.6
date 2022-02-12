<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title><?=$title?></title>
        <link rel="stylesheet" type="text/css" href="css/style.css">
    </head>

    <body>

        <header>
            <div class="header">
                <?php include 'logo.inc.php' ?>   
                <?php include 'menu.inc.php' ?>
            </div>
        </header>

        <main>
            <div class="about_me">
         
                <h1>Приветствую Вас на моей страничке!</h1>
                
                <div class="data">
                    
                    <div class="myImg">
                      <img src="./img/photo.jpg">                   
                    </div>
      
                    <div class="fullname">
                        <p> Меня зовут 
                            <?php echo "$name $surname <br>"?>
                        </p> 
                        <p>О себе:<br> 
                            <?=$about?>                                      
                        </p>                
                    </div>
                
                </div>
      
                <div class="knowledge">
                    <?php include 'knowledge.inc.php'; ?>
                </div>
      
                <!-- <div class="article">
                    <p class="text">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. 
                        Recusandae asperiores ducimus dolore explicabo. Animi est amet quibusdam molestias! 
                        Minus laudantium sapiente dignissimos possimus natus cumque delectus sed, accusantium totam quia?
                    </p>
                </div> -->
            </div>
        </main>

        <footer>
            <?php include 'footer.inc.php' ?>
        </footer>

    </body>

</html>