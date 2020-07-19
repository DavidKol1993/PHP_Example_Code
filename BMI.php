<html>
 <center> 
 
            <h1>  Body Mass Index</h1>
 
                            <h3>Bitte w&auml;hlen sie Ihrer Gr&ouml;sse und Gewicht aus <br>
                                Wir erechnen ihr Body Mass Index . Alle angaben sind nat&uuml;lich ohne Gewehr!</h3>

<form action="<?php $_PHPSELF ?>" method="POST">
       <table border =0>
                <tr><td>Ihr Gewicht:</td><td> <input type="text" name="Gewicht" Size="5"></td></tr>
                <tr><td>Ihre Gr&ouml;sse:</td><td><input type="text" name="Grosse" Size="5"></td></tr>
                <tr><td>Ihr Geschlecht:</td><td> <input type="radio" name="Geschlecht" value="M"> M&auml;nnlich </td></tr>
                <tr><td></td><td> <input type="radio" name="Geschlecht" value="W"> Weiblich</td></tr>
                <tr><td><input type="submit" name="submit" value ="Abschicken"></td><td><input type="reset" name="reset" value ="Abbrechen"></td></tr>
       </table>
 </form>

  </center>
</html>





<?php 

If(isset($_POST['submit'])){
     $Gewicht=$_POST['Gewicht'];
     $Grosse=$_POST['Grosse']      ;
     $Geschlecht=$_POST['Geschlecht'];
     $BMI = round(($Gewicht / (($Grosse/100)*($Grosse/100))),2);
     
     If($Geschlecht=="M"){
                     echo"<center>Sie sind ein Mann</center>";
                  echo"<center>Ihr BMI <b>$BMI</b></center>";
                  if ($BMI < 16) {
echo "<center>Sei haben<b>Starkes Untergewicht</b></center>";

}
else if($BMI>16 && $BMI<=16.9)   {
   echo "<center>Sei haben<b>m&auml;ssiges Untergewicht</b></center>";

}
else if($BMI>17 && $BMI<=16.9)    {
   echo "<center>Sei haben<b>Leichtes Untergewicht</b></center>";

}
else if($BMI>18 && $BMI <=24.9)    {
   echo "<center>Sei haben<b>Normalgewicht</b></center>";

}else if($BMI>25 && $BMI <=29.9)    {
   echo "<center>Sei haben<b>&Uuml;bergewicht</b></center>";

}  else if($BMI>30 && $BMI <=34.9)    {
   echo "<center>Sei haben<b> Adipositas Grad I</b></center>";

}   else if($BMI>35 && $BMI <=39.9)    {
   echo "<center>Sei haben<b> Adipositas Grad II</b></center>";

}    else if($BMI>40)    {
   echo "<center>Sei haben<b> Adipositas Grad III</b></center>";

}
     
     }else if ($Geschlecht=="W"){
     
      echo"<center>Sie sind eine Frau</center>";
         echo"<center>Ihr BMI <b>$BMI</b></center>";
         
         if ($BMI < 15) {
echo "<center>Sei haben<b>Starkes Untergewicht</b></center>";

}
else if($BMI>15 && $BMI<=15.9)   {
   echo "<center>Sei haben<b>m&auml;ssiges Untergewicht</b></center>";

}
else if($BMI>16 && $BMI<=17.4)    {
   echo "<center>Sei haben<b>Leichtes Untergewicht</b></center>";

}
else if($BMI>17.5 && $BMI <=23.9)    {
   echo "<center>Sei haben<b>Normalgewicht</b></center>";

}else if($BMI>24 && $BMI <=28.9)    {
   echo "<center>Sei haben<b>&Uuml;bergewicht</b></center>";

}  else if($BMI>29 && $BMI <=33.9)    {
   echo "<center>Sei haben<b> Adipositas Grad I</b></center>";

}   else if($BMI>34 && $BMI <=38.9) {
   echo "<center>Sei haben<b> Adipositas Grad II</b></center>";

}    else if($BMI>39)  {
   echo "<center>Sei haben<b> Adipositas Grad III</b></center>";

}
         
         
         
         
         
     }else {
                      echo"<center>Keine g&uuml;tige Eingabe</center> <br>";
    
     
     }
      
}

?>



