<!--Nattapat Chotisen 6410685116-->
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php echo "Welcome to my website!"; ?></title>
</head>
<body>
<!--HTML COMMENT-->
    <?php if (False): ?>
    Hello!<br>
    <?php else: ?>
    False<br>
    <?php endif; ?>

    <?php
    //control statements
     if (1 > 2 && 1 > 0 ) {
         echo "True<br>\n";
         echo "Line2<br>\n";
         if (True)
             echo "True2";
     }elseif (3 != 4) {
         echo "3 != 4<br>\n";
     }

     $i = 10;
     switch ($i){
         case 0:
             echo "$i<br>\n";
             break;
         case 1:
             echo "$i<br>\n";
             break;
         case 2:
             echo "$i<br>\n";
             break;
         default:
             echo "default<br>\n";
     }

     $i = 1;
     while ($i <= 5) {
         echo $i ++;
         echo " \n";
     }
     echo "<br>\n";

     $i = 0;
     do {
         echo ++$i . " ";
     } while ($i <= 5);
     echo "<br>\n";

     for ($i = 1; $i <= 5; $i++){
         if ($i == 3)
             continue;
         echo $i . " ";
     }
    echo "<br>\n";

    $a = 1;
    $a += 1;
    $b = 1 + $a++;
    echo $a . "<br>\n";
    echo $b . "<br>\n";
    ++$a;
    $a++;
    --$a;
    $a--;

    $name = 'Somsak';
    $surname = 'Rakthai';
    $name .= ' ';
    $name .= $surname;
    echo $name . "<br>\n";

    $a5['fruit']['red'] = 'apple';
    $a5['fruit']['yellow'] = 'banana';
    $a5['flower']['red'] = 'rose';
    $a5['flower']['yellow'] = 'sunflower';
    echo  '<pre>';
    var_dump($a5);
    print_r($a5);
    echo '</pre>';

    $a4 = [
        'id' => '6310xxxxxx',
        'name' => 'Somsak',
        'Surname' => 'Rakthai'
    ];
    echo $a4['id'] .' '. $a4['name'] .' '. $a4['Surname'] . "<br>\n";

    echo  '<pre>';
    var_dump($a4);
    print_r($a4);
    echo '</pre>';

    $a3 = [1, 2, 3];
    echo  $a3[0] + $a3[2] . "<br>\n";

    $a2[] = 1;
    $a2[] = 2;
    echo $a2[0] + $a2[1] . "<br>\n";

    $a1 = array('red', 'green', 'blue');
    $a1[3] = 'yellow';
    $a1[] ='black';
    echo  "$a1[0], $a1[1], $a1[2], $a1[3], $a1[4],<br>\n";

    $var1 = 1;
    $var2 = 'Text';
    $var_3 = 1.5;
    $Var_3 =2.5;
    echo "\$var1 = $var1<br>\n";
    echo '$var1<br>\n';
    // comment 1
    # comment 2
    /*
        comment 3 line 1
        comment 3 line 2
    */
    echo "this is my first php script.<br>\n";
    echo "Hello World!";
?>

</body>
</html>
