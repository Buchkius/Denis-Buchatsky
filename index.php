<?PHP echo 2*7;?>
<br><br><br>
    <?PHP echo date ('H:i:s')?><br>
<br><br>
    <?PHP echo "PRIVET"?><br><br>
<?PHP 
$Jmeno ='Denis';
echo $Jmeno; 
$jmeno='Buchatsky';
echo $jmeno;?>
    <br><br><br>
<?PHP 
$cislo1 = 9;
$cislo2 = 2;
echo$cislo1 ?>
    <br><br>
    <?PHP
    $a = 9 ;
    $b = 3 ;
    echo$a+$b; 
    ?>
    <br><br>
<?PHP 
$a = 1 ;
$b = 7 ;
echo $a-$b; ?>
    <br><br>
    <?PHP 
    $a = 96;
    $b = 123;
    echo $a/$b; ?>
    <br><br>
    <?PHP 
    $a = 2;
    $b = 8;
      echo $a*$b;?>
    <br><br>
  
    <?PHP
    $a = 7 ;
    $a++;
    echo$a; 
    ?> 
    <br><br>
    <?PHP
    $a = 5 ;
    $a--;
    echo$a; 
    ?>  
    <br><br>
     <?PHP 
    $a = 13;
    $b = 3;
    echo $a+=$b; ?>
 <br><br>
     <?PHP 
    $a = 13;
    $b = 3;
    echo $a-=$b; ?>
 <br><br>
     <?PHP 
    $a = 13;
    $b = 3;
    echo $a*=$b; ?>
 <br><br>
     <?PHP 
    $a = 13;
    $b = 3;
    echo $a/=$b; ?>
 <br><br>
     <?PHP 
    $a = 13;
    $b = 3;
    echo $a==$b; ?>
 <br>
     <?PHP 
    $a = 13;
    $b = 3;
    echo $a!=$b; ?>
 <br><br>
     <?PHP 
    $a = 13;
    $b = 3;
    echo $a>$b; ?>
 <br><br>
     <?PHP 
    $a = 13;
    $b = 3;
    echo $a<$b; ?>
 <br><br>
 <?PHP 
    $a = 16;
    $b = 3;
    echo $a||$b; ?>
<br><br>
 <?PHP 
    $a = 4;
    $b = 4;
    echo $a && $b; ?>
<br><br><br>
<?PHP
$jmeno ="martin";

$jmena = array('martin','jan','franta','petr');

var_dump($jmena);
?>
<br><br><br>
<?PHP
$produkt=array ('nazev'=> 'notebook', 'typ'=> 'hp', 'váha'=> 3, 'množství'=> 5);
var_dump($produkt);
?>



<br>
<?PHP
$jmena = "alEna,peTra, vlastA, hAna";
$jmena = str_replace(" ",",", $jmena);
var_dump($jmena);
$jmena= str_replace(",,", ",", $jmena);
$jmena= str_replace(",", " ", $jmena);
$jmena= strtolower($jmena);
var_dump($jmena);
$jmena= ucwords($jmena);
var_dump($jmena);
$jmena = str_replace(" ",",", $jmena);
$jmena = str_replace(",",", ", $jmena);
var_dump($jmena);
var_dump($jmena);
$jmena= strchr($jmena, $produkt);
var_dump($jmena);
$jmena= strlen($jmena);
var_dump($jmena);
$jmena= strrchr($jmena, $produkt);
var_dump($jmena);


?>
<?PHP
echo currency(2000.376, "€" , 1);

/**
 * @todo Pocita cenu
 * @param float $price
 * @param string $currency
 * @param int $precision
 * @return string
 */
function currency($price, $currency = "euro", $precision = 2) {

$price = round($price,$precision);
$price = number_format($price,$precision)." ,-".$currency;


return $price;
}


?>

<br><br>
<?PHP
$jmena2 = "dobrý den";
$jmena2 = ucfirst($jmena2);
var_dump($jmena2);
$jmena = addslashes($jmena2);
var_dump($jmena2);
$jmena2 = explode(" ", $jmena2);
var_dump($jmena2);

?>
<br><br><br><br><br><br>



<?PHP

$věta = "oko oko kokot";
$vulgarní = "kokot";

function isValid($věta, $vulgarní) {
    foreach ($vulgarní as $slovo) {
        if (strpos($věta, $slovo) !== FALSE) {
            return FALSE;
        } else {
            return $věta;
        }
    }
}

var_dump(isValid($věta, [$vulgarní]));
?>
<br><br>



<table border="1">
<?PHP

function tabulka() {
   for($řádek=1; $řádek<= 10; $řádek++)
      {
       echo"<tr>";
      for($sloupec=1; $sloupec<=10; $sloupec++)
         {
        echo "<td>";
        echo "$řádek $sloupec";
        echo "</td>";
         }
         echo "</tr>";
        }
         }
tabulka()
?>
</table>