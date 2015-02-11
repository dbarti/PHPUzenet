<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
        
    <body>
        <h1>Üzenet</h1>
        <form method="post" action="uzenet.php">
            Név: <br>
            <input type="text" name="name">
            <br>               
            Telefon: <br>
            <input type="text" name="phone">
            <br>
            E-mail: <br>
            <input type="text" name="email">
            <br>
            Üzenet: <br>
            <textarea name="message" rows="4" cols="50">
                
            </textarea>

            <br>
            <br>
            <input type="submit" value="Küldés">
                   </form>
    </body>
</html>