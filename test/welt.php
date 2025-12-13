<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
  </head>
  <body>

    <?php 
         $bevoelkerung = (float)str_replace(',','.',$_POST["txtAnfang"]);
         $prozent = (float)str_replace(',','.',$_POST["txtProzent"]);
         $jahr = 0;

                while ($bevoelkerung < 10) {
                  
                  
                  echo $jahr . ".Jahr: ";
                  echo $bevoelkerung . "<br>";
                  $bevoelkerung = $bevoelkerung * (100 + $prozent) / 100;
                  $jahr++;
                }
              ?>
           
          <form
      action="http://localhost/Udemy_PHP/test/welt.php"
      method="POST"
    >
      Bevölkerung in Mrd.:
      <input type="text" name="txtAnfang"  />
      Wachstum in Prozent:
      <input type="text" name="txtProzent"/>
      <input type="submit" name="cmdBerechnen" value="Berechnen" />
    </form>
  </body>
</html>