<?php 

// create constant
  define('NAME', 'Brannon');

  $name = 'Yoshi';
  $age = 30;
  $name = 'Mario';

  $stringOne = 'my email is ';
  $stringTwo = 'mario123@bdubs.net';

  // echo $stringOne . $stringTwo;

  // echo 'Hey, my name is ' . $name;
  // echo "Hey, my name is $name";

  // echo "I say \"waaaa\"";

  // echo $name[0];
  // echo strlen($name);
  // echo strtoupper($name);
  // echo strtolower($name);
  // echo str_replace('M', 'W', $name);

  // $radius = 25;
  // $pi = 3.14;
  // basic operators - *, /, +, -, **
  // echo $pi * $radius**2;

  // increment and decrememnt
  // echo $radius++;
  // echo $radius;

  // shorthand operators
  // $age += 10;
  // $age *= 2;

  // echo floor($pi);
  // echo ceil($pi);
  // echo pi();

  // ARRAYS
  // indexed arrays
  // $peopleOne = ['mario', 'peach', 'toad'];
  // echo $peopleOne[0];
  // $peopleTwo = array('ken', 'chun-li');
  // echo $peopleTwo[1];

  // $ages = [1,2,3,4];
  // $ages[] = 5;
  // array_push($ages, 6);
  // print_r($ages);
  // echo count($ages);
  // $peopleThree = array_merge($peopleOne, $peopleTwo);
  // print_r($peopleThree);

  // associative arrays
  // these are key/value pairs

  // $ninjasOne = ['brannon' => 'black', 'mario'=>'orange', 'luigi'=>'brown'];
  // echo $ninjasOne['mario'];
  // $ninjasTwo = array('bowser'=>'green', 'peach'=>'yellow');
  // $ninjasTwo['toad'] = 'pink';
  // print_r($ninjasTwo);

  //multidimensional arrays
  // $blogs = [
  //   ['mario party', 'mario', 'lorem', 30],
  //   ['mario kart cheats', 'toad', 'lorem', 25],
  //   ['zelda chests', 'link', 'lorem', 50]
  // ];
  // print_r($blogs[1][1]);
  // $blogs = [
  //   ['title'=>'mario party', 'author'=>'mario', 'content'=>'lorem', 'likes'=>30],
  //   ['title'=>'mario kart cheats', 'author'=>'toad', 'content'=>'lorem', 'likes'=>25],
  //   ['title'=>'zelda chests', 'author'=>'link', 'content'=>'lorem', 'likes'=>50]
  // ];
  // $blogs[] = ['title'=>'castle party', 'author'=>'peach', 'content'=>'lorem', 'likes'=>122];
  // echo $blogs[2]['author'];
  // print_r($blogs);
  // $popped = array_pop($blogs);
  // print_r($popped);

  // LOOPS
    // $ninjas = ['mario', 'luigi', 'toad'];

    // for($i = 0; $i < count($ninjas); $i++ ){
    //   echo $ninjas[$i] . '<br />';
    // }
    // foreach($ninjas as $ninja) {
    //   echo $ninja . '<br />';
    // }

  
  // conditional statements

      // $price = 20;

      // if ($price < 20) {
      //   echo 'the condition is met';
      // } elseif ($price < 30) {
      //   echo 'elseif condition met';
      // } else {
      //   echo 'the condition is NOT met';
      // }

  // functions
      // function sayHello($name = 'buddy') {
      //   echo "hello, $name";
      // }

      // sayHello('mario');
      // sayHello();

      function formatProduct($product){
        // echo "{$product['name']} costs \${$product['price']} to buy";
        return "{$product['name']} costs \${$product['price']} to buy";
      }

      // formatProduct(['name'=>'gold star', 'price'=>20]);
      $formatted = formatProduct(['name'=>'gold star', 'price'=>20]);

      echo $formatted;
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP Tuts</title>
</head>
<body>
  <h1>User Profile Pages</h1>

  <div><?php echo $name; ?></div>
  <div><?php echo $age; ?></div>
  <div><?php echo NAME; ?></div>
</body>
</html>
