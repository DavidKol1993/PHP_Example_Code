<html>
 <center> 
 
            <h1>  Ma&szlig;einheit Umwandler</h1>
 
                            <h3>Bitte w&auml;hlen sie Ihrer Ma&szlig;einheit  aus <br>
                                Wir erechnen die Ma&szlig;einheit f&uuml;r sie um . Alle angaben sind nat&uuml;lich ohne Gewehr!</h3>

<form action="<?php $_PHPSELF ?>" method="POST">
       <table border =0>
                <tr><td>Ma&szlig;einheit</td><td> <input type="text" size="5" name="EinheitEingabe"></td></tr>
                <tr><td>Einheit:</td><td> <input type="radio" name="Einheit" value="CM"> Centimeter zu Inches </td></tr>
                <tr><td></td><td> <input type="radio" name="Einheit" value="INC"> Inches zu Centimeter</td></tr>
                <tr><td></td><td> <input type="radio" name="Einheit" value="KG"> Kilogramm zu Pfund </td></tr>
                <tr><td></td><td> <input type="radio" name="Einheit" value="LBS"> Pfund zu Killogramm</td></tr>   
                 <tr><td></td><td> <input type="radio" name="Einheit" value="CEL"> Celcius zu Fahrenheit </td></tr>
                <tr><td></td><td> <input type="radio" name="Einheit" value="FAR"> Fahrenheit zu Celcius</td></tr>
                <tr><td><input type="submit" name="submit" value ="Abschicken"></td><td><input type="reset" name="reset" value ="Abbrechen"></td></tr>
       </table>
 </form>

  </center>
</html>




<?php

If(isset($_POST['submit'])){ 

       $Einheit=$_POST['Einheit'];
       $Eingabe=$_POST['EinheitEingabe'];
       
       echo "<center>Sei haben $Eingabe  eingegeben</center>";
       
       if ($Einheit=='CM'){
            $ErsteEinheit=$Eingabe*2.54;
            echo"<center>Es sind $ErsteEinheit Inches</center>";
       }
       else if($Einheit=='INC'){
         $ZweiteEinheit=$Eingabe/2.54;
         echo" <center>Es sind $ZweiteEinheit Centimeter</center>";
       }
       else if($Einheit=='KG'){
         $DritteEinheit=$Eingabe*2.20462;
         echo"<center>Es sind $DritteEinheit Pfund</center>";
       }
       else if($Einheit=='LBS'){
                 $VierteEinheit=$Eingabe/2.20462;
                 echo" <center>Es sind $VierteEinheit Kilogramm</center>";
       }
       else if($Einheit=='CEL'){
             $FunfteEinheit=($Eingabe*(9/5))+32;
             echo"<center>Es sind $FunfteEinheit Grad Fahrenheit</center>";
       }
       else if($Einheit=='FAR'){
                      $SechsteEinheit=($Eingabe-32)*(5/9);
                      echo"<center> Es sind $SechsteEinheit Grad Celcius</center>";
       }
       else{
           echo"Keine Eingabe";
       }




}

?>