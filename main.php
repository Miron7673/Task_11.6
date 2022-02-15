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
                <div class="mainblock">
                    <?php include 'logo.inc.php' ?>
                </div>
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
                            <?php echo "$name $surname. <br>" ?>
                        </p> 
                        <p>О себе:</p>
                            <ul>
                                <li>дата рождения - <?=$birthday?>;</li>
                                <li>место рождения - <?=$birthplace?>;</li>
                                <li>место проживания - <?=$address?>;</li>
                                <li>дети - <?=$children?>;</li>
                                <li>образование - <?=$education?>;</li>
                                <li>место работы и должность - <?=$employment?>;</li>
                                <li>увлечения - <?=$hobby?>.</li>
                            </ul>                                     
                    </div>
                
                </div>
      
                <div class="knowledge">
                    <div class="emptyBlock"></div>
                    <?php include 'knowledge.inc.php'; ?>
                </div>
            </div>
        </main>

        <footer>
            <?php include 'footer.inc.php' ?>
        </footer>

    </body>

</html>
