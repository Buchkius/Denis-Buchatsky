<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        $variable_bool = true;
        $variable_num = 3;
        $variable_float = 0.51;
        $variable_string = "buchkius";
        echo $variable_bool;
        echo '<br>';
        echo $variable_num;
        echo '<br>';
        echo $variable_float;
        echo '<br>';
        echo $variable_string;
        echo '<br>';
        echo $variable_string . ' umni4';
        echo '<br>';
        ?>
        
        <?php
        echo '<img src="fat.jpg">';
        echo '<br>  ';
        ?>
        
        <?php
        echo '\\';
        echo '<br>';
        
        ?>
        <?php
        $text = 'mam rad svuj zivot';
        echo($text);
        echo '<br>';
        ?>
        
        <?php 
        $variable_bool2 = true;
        $variable_num2 = 5;
        $variable_float2 = 0.15;
        $variable_string2 = 'bu4andepala';
        printf($variable_string2);
        echo '<br>';
        print_r($variable_num2);
        echo '<br>';
        print_r($variable_float2);
        echo '<br>';
        print_r($variable_bool2);
        echo '<br>';
        ?>
        
        <?php
        $a = 4;
        $b = 2;
        var_dump($a+$b); 
        
        var_dump($a-$b);
        
        var_dump($a/$b);
        
        var_dump($a*$b);
        ?>
        <?php
        $a = 6;
        $b = 7;
        var_dump($a++);
        
        var_dump($a--);
        
        var_dump($a+=$b);
        
        var_dump($a-=$b);
        
        var_dump($a/=$b);
        
        var_dump($a*=$b);
        ?>
        
        <?php 
        $a = 5;
        $b = 1;
        var_dump($a==$b);
        var_dump($a!=$b);
        var_dump($a>$b);
        var_dump($a<$b);
        ?>
        
        <?php
        $a = 9;
        $b = 3;
        var_dump($a||$b);
        var_dump($a&&$b);
        var_dump(!$a);
        ?>
        <?php 
        $denisBuchatsky1 = 1 ;
        $denisBuchatsky2 = 1 ;
        if ($denisBuchatsky1 == $denisBuchatsky2){
        echo 'denis';
        }
        else {
            echo 'buchatstky';
        }
        ?>
        <br>
        <?php
        $denis = 2;
        $buchatsky = 3;
        if($denis <3){
            if ($buchatsky ==3){
            echo 'buchatsky';
            }
        }       
        ?>
        <br>
       <?php
       switch ($denisBuchatsky1*5){
           case 1:
               echo '1';
                break;
           case 2:
               echo '2';
               break;
            case 3:
               echo '3';
                break;
             case 4:
               echo '4';
                break;
             case 5:
               echo '5';
                break;
             case 6:
               echo '6';
                break;
       
               
       }
       ?>
        <br>
        <?php
           $produkt=array(
                    "hrozny" => array(
                                "barva" => array(
                                    "cervene",
                                    "fialove",
                                    ),
                                "cena" => array(
                                    60,
                                    80,
                                    ),
                                "zeme_puvodu" => array(
                                    "z spanelska",
                                    "z cili",
                                    ),
                                "velikost" => array(
                                    "velke",
                                    "male",
                                    ),
                                "seminko" => array(
                                  "bezseminkove",
                                  "seminkove",
                                  ),
                              ),

);
echo "Hrozny: " . $produkt['hrozny']['barva'][0] . ", " . $produkt['hrozny']['cena'][1] . "Kc , " . $produkt['hrozny']['zeme_puvodu'][0] . ", " . $produkt['hrozny']['velikost'][0] . ", " . $produkt['hrozny']['seminko'][1];
echo '<br>';
echo '<br>';

           $produkt=array(
                    "auto" => array(
                                "firma" => array(
                                    "Porsche",
                                    ),
                                "cena" => array(
                                    1800000,
                                    2400000,
                                    ),
                                "barva" => array(
                                    "zluta",
                                    "cerna",
                                    ),
                                "model" => array(
                                    "911",
                                    "718",
                                    ),
                                "druh" => array(
                                  "nedostupny",
                                  "dostupny",
                                    ),
                              ),

);

echo "Auto: " . $produkt['auto']['firma'][0] . ", " . $produkt['auto']['cena'][1] . ", " . $produkt['auto']['barva'][0] . ", " . $produkt['auto']['model'][0] . ", " . $produkt['auto']['druh'][1];
echo '<br>';
echo '<br>';

           $produkt=array(
                    "auto" => array(
                                "firma" => array(
                                    "Porsche",
                                    ),
                                "cena" => array(
                                    1800000,
                                    2400000,
                                    ),
                                "barva" => array(
                                    "zluta",
                                    "cerna",
                                    ),
                                "model" => array(
                                    "911",
                                    "718",
                                    ),
                                "druh" => array(
                                  "nedostupny",
                                  "dostupny",
                                    ),
                              ),
);
           
echo "Auto: " . $produkt['auto']['firma'][0] . ", " . $produkt['auto']['cena'][0] . ", " . $produkt['auto']['barva'][1] . ", " . $produkt['auto']['model'][1] . ", " . $produkt['auto']['druh'][0];
echo '<br>';
echo '<br>';

            $produkt=array(
                    "sluchatka" => array(
                                "typ" => array(
                                    "bezdratova",
                                    "herni",
                                    ),
                                "cena" => array(
                                    4790,
                                    4490,
                                    ),
                                "model" => array(
                                    "Cloud Revolver S",
                                    "AirPods 2019",
                                    ),
                                "firma" => array(
                                    "HyperX",
                                    "Apple",
                                    ),
                                "hodnoceni" => array(
                                  "5",
                                  "4.5",
                                  ),
                              ),

);
 
echo "Sluchatka: " . $produkt['sluchatka']['typ'][0] . ", " . $produkt['sluchatka']['cena'][0] . ", " . $produkt['sluchatka']['model'][1] . ", " . $produkt['sluchatka']['firma'][1] . ", " . $produkt['sluchatka']['hodnoceni'][0];
echo '<br>';
echo '<br>';

            $produkt=array(
                    "sluchatka" => array(
                                "typ" => array(
                                    "bezdratova",
                                    "herni",
                                    ),
                                "cena" => array(
                                    4790,
                                    4490,
                                    ),
                                "model" => array(
                                    "Cloud Revolver S",
                                    "AirPods 2019",
                                    ),
                                "firma" => array(
                                    "HyperX",
                                    "Apple",
                                    ),
                                "hodnoceni" => array(
                                  "5",
                                  "4.5",
                                  ),
                              ),

);
 
echo "Sluchatka: " . $produkt['sluchatka']['typ'][1] . ", " . $produkt['sluchatka']['cena'][1] . ", " . $produkt['sluchatka']['model'][0] . ", " . $produkt['sluchatka']['firma'][0] . ", " . $produkt['sluchatka']['hodnoceni'][1];
echo '<br>';
echo '<br>';

           $produkt=array(
                    "konzole" => array(
                                "firma" => array(
                                    "Nintendo",
                                    "Microsoft",
                                    "Sony",
                                    ),
                                "cena" => array(
                                    8990,
                                    5290,
                                    9990,
                                    ),
                                "model" => array(
                                    "Nintendo Switch - Grey Joy-Con",
                                    "Xbox One S ",
                                    "Playstation 4 Pro",
                                    ),
                                "pamet" => array(
                                    "32 GB +slot pro pametove karty",
                                    "1 TB",
                                    "1 TB",
                                    ),
                                "hodnoceni" => array(
                                  "4.8",
                                  "4.7",
                                  "4.9",
                                  ),
                              ),

);
 
echo "Konzole: " . $produkt['konzole']['firma'][0] . ", " . $produkt['konzole']['cena'][0] . ", " . $produkt['konzole']['model'][0] . ", " . $produkt['konzole']['pamet'][0] . ", " . $produkt['konzole']['hodnoceni'][0];
echo '<br>';
echo '<br>';

           $produkt=array(
                    "konzole" => array(
                                "firma" => array(
                                    "Nintendo",
                                    "Microsoft",
                                    "Sony",
                                    ),
                                "cena" => array(
                                    8990,
                                    5290,
                                    9990,
                                    ),
                                "model" => array(
                                    "Nintendo Switch - Grey Joy-Con",
                                    "Xbox One S ",
                                    "Playstation 4 Pro",
                                    ),
                                "pamet" => array(
                                    "32 GB +slot pro pametove karty",
                                    "1 TB",
                                    "1 TB",
                                    ),
                                "hodnoceni" => array(
                                  "4.8",
                                  "4.7",
                                  "4.9",
                                  ),
                              ),

);
 
echo "Konzole: " . $produkt['konzole']['firma'][1] . ", " . $produkt['konzole']['cena'][1] . ", " . $produkt['konzole']['model'][1] . ", " . $produkt['konzole']['pamet'][1] . ", " . $produkt['konzole']['hodnoceni'][1];
echo '<br>';
echo '<br>';

           $produkt=array(
                    "konzole" => array(
                                "firma" => array(
                                    "Nintendo",
                                    "Microsoft",
                                    "Sony",
                                    ),
                                "cena" => array(
                                    8990,
                                    5290,
                                    9990,
                                    ),
                                "model" => array(
                                    "Nintendo Switch - Grey Joy-Con",
                                    "Xbox One S ",
                                    "Playstation 4 Pro",
                                    ),
                                "pamet" => array(
                                    "32 GB +slot pro pametove karty",
                                    "1 TB",
                                    "1 TB",
                                    ),
                                "hodnoceni" => array(
                                  "4.8",
                                  "4.7",
                                  "4.9",
                                  ),
                              ),

);
 
echo "Konzole: " . $produkt['konzole']['firma'][2] . ", " . $produkt['konzole']['cena'][2] . ", " . $produkt['konzole']['model'][2] . ", " . $produkt['konzole']['pamet'][2] . ", " . $produkt['konzole']['hodnoceni'][2];
echo '<br>';
echo '<br>';
           
            $produkt=array(
                    "procesory" => array(
                                "firma" => array(
                                    "AMD",
                                    "Intel",                                    
                                    ),
                                "cena" => array(
                                    4890,
                                    10699,
                                    ),
                                "model" => array(
                                    "RYZEN 5 3600",
                                    "Xbox One S ",
                                    ),
                                "jadra,vlakna" => array(
                                    "6 jader,12 vlaken",
                                    "8 jader,8 vlaken",
                                    ),
                                "hodnoceni" => array(
                                  "4.9",
                                  "4.8",
                                  ),
                              ),
);

echo "Procesory: " . $produkt['procesory']['firma'][0] . ", " . $produkt['procesory']['cena'][0] . ", " . $produkt['procesory']['model'][0] . ", " . $produkt['procesory']['jadra,vlakna'][0] . ", " . $produkt['procesory']['hodnoceni'][0];
echo '<br>';
echo '<br>';
           
            $produkt=array(
                    "procesory" => array(
                                "firma" => array(
                                    "AMD",
                                    "Intel",                                    
                                    ),
                                "cena" => array(
                                    4890,
                                    10699,
                                    ),
                                "model" => array(
                                    "RYZEN 5 3600",
                                    "Xbox One S ",
                                    ),
                                "jadra,vlakna" => array(
                                    "6 jader,12 vlaken",
                                    "8 jader,8 vlaken",
                                    ),
                                "hodnoceni" => array(
                                  "4.9",
                                  "4.8",
                                  ),
                              ),
);

echo "Procesory: " . $produkt['procesory']['firma'][1] . ", " . $produkt['procesory']['cena'][1] . ", " . $produkt['procesory']['model'][1] . ", " . $produkt['procesory']['jadra,vlakna'][1] . ", " . $produkt['procesory']['hodnoceni'][1];
echo '<br>'; 
        ?>

    </body>
</html>
      