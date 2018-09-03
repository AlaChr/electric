
<!DOCTYPE html>

<html>
    <head>
        <title>TODO supply a title</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>      
        <form name="forma" action="<?php ROOT.'/models/Price.php'?>" method="post">
            Title: <br><input name="title" type="text"><br>
            Comment: <br><input name="comment" type="text"><br>
            Price: <br><input name="price" type="text"><br>
            <input name="submit" type="submit" value="Добавить запись"> 
        </form>
    </body>
    
</html>
   


