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
    </body>
</html>
