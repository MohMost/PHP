```php
<?php

//echo--------------------------------------------------------------------------------------

echo 'hello ' . '<br />';

//constants----------------------------------------------------------------------------------

define('GENDER', 'FEMALE '); //can't be overwriten

//varienants---------------------------------------------------------------------------------

$name= 'gorge '; // can be overwriten
$age= 30 ;
$name= 'bruh ';
$nickname= 'abdulay ';

//echoing a variable and a constante---------------------------------------------------------

echo 'hello ';
echo $name ;
echo $nickname ;
echo $age ;
echo GENDER ;

//strings------------------------------------------------------------------------------------

$stringOne= 'and my email is ' ;
$stringTwo= 'mohmost123@gmail.com ' ;

//concatination------------------------------------------------------------------------------

echo 'hey; my name is ' . $name ; 
echo $stringOne . $stringTwo ;

//Numbers-------------------------------------------------------------------------------------

$x=11;
$y=13.4;
// basic operators : (*, /, +, -, ^)

//Increment & decrement operators-------------------------------------------------------------

echo ++$x ;
echo $x-- ;

//Shorthand operations------------------------------------------------------------------------

$age = 20;
$age += 10; // age becomes 30
$age -= 5; // age becomes 25
$age *= 2; // age becomes 50
echo $age ;

//Number functions----------------------------------------------------------------------------

echo floor($y); //makes 'y' 13
echo ceil($y); //makes 'y' 14
echo pi(); //makes 'pi' 3.1415926535898

//Some fonctions------------------------------------------------------------------------------

echo $name[0];
echo strlen($name)  ; //stands for string length
echo strtoupper($name) ; //stands for string to upper case
echo strtolower(GENDER) ;

//Arrays---------------------------------------------------------------------------------------

// 1-indexed arrays :

$peopleOne = ['azzdine', 'sefian', 'yanmist'];
//or :

$peopleOne = array ('azzdine', 'sefian', 'yanmist');
echo $peopleOne [1] ;
echo $peopleOne [0] ;
$ages = [22, 21, 23] ;
print_r ($ages) ;
//change an element :

$peopleOne[2] = 'adam' ;
print_r ($peopleOne) ;
//add an element :

$peopleOne[] = 'mohprout' ;
print_r ($peopleOne) ;
//or:

array_push ($ages, 25) ;
print_r ($ages) ;

//mergin arrays---------------------------------------------------------------------------------------

$merging = array_merge ($peopleOne ,$ages) ;
print_r ($merging) ;

// 2-associative arrays (key=> value)-----------------------------------------------------------------

$gamers = ['hcen'=>'dualist', 'nabil'=>'fps', 'mohprout'=>'hunter'] ;
print_r ($gamers) ;
echo $gamers ['nabil'] ;

// 3-Multidimensional Arrays--------------------------------------------------------------------------
$grades=[
     ['subject'=>'math','teacher'=>'mani','note'=>19],
     ['subject'=>'physique','teacher'=>'asma','note'=>17],
     ['subject'=>'french','teacher'=>'slimani','note'=>20],
     ['subject'=>'info','teacher'=>'shark','note'=>3],
     ['subject'=>'science','teacher'=>'boubarak','note'=>10],
     ['subject'=>'desin','teacher'=>'sghir','note'=>15]
];

$blogs=[
     ['title'=>'how to eat banana ?', 'author'=>'mamado', 'content'=>'lorem', 'likes'=>66],
     ['title'=>'is axel a cheater in chess ?', 'author'=>'hermes', 'content'=>'lorem', 'likes'=>300],
     ['title'=>'whats even the point ?', 'author'=>'mohmost', 'content'=>'lorem', 'likes'=>1]
];
print_r($blogs[2]['author']);//this will print mohmost
echo count ($grades[2]);

//adding associative array----------------------------------------------------------------------------

$blogs[] = ['title'=>'who added me here ?', 'author'=>'azzedin', 'content'=>'lorem', 'likes'=>3];
print_r ($blogs);
$newblog= array_pop($blogs);
print_r ($newblog);

//Loops----------------------------------------------------------------------------------------------

//for loop :

for($i=0 ; $i< count($peopleOne); $i++){
     echo $peopleOne[$i] . '<br />';
}
//foreauch loop:
foreach ($blogs as $blog){
     echo $blog ['title'] . '-' . $blog['likes'] ;
     echo '<br />' ;
}

//while loop:

$i=0;

while ($i<count($blogs)){
     echo $blogs[$i]['likes'];
     echo '<br />' ;
     $i++;
}
//embed loops in html-------------------------------------------------------------------------------- 
?>
<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Document</title>
</head>
<body>
     <h1>Blogs</h1>
     <ul>
         <?php foreach($blogs as $blog){ ?>
          <h2><?php echo $blog['title'];?></h2>
          <p><?php echo $blog['likes'];?></p>
          <?php } ?> 
     </ul>
     
</body>
</html>
<?php
//Booleans & Comparisons--------------------------------------------------------------------------------
echo true; // "1"
echo false; //"empty"
echo 3 == '3';
echo 3 === '3' ;
//conditions--------------------------------------------------------------------------------------------
foreach ($blogs as $blog){
     if ($blog['likes'] <300 && $blog['likes']>1){
          echo $blog['author'] . '<br/>';
     }
}     

foreach ($blogs as $blog){
     if ($blog['likes'] >300 || $blog['likes']< 66){
          echo $blog['author'] . '<br/>';
     }
}
//in html-----------------------------------------------------------------------------------------------
?>
<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Document</title>
     
</head>
<body>
     <?php foreach($grades as $grade){ ?>
          <?php if ($grade >10) {?>
          <li> <?php echo $grade['subject']; ?></li>
          <?php } ?>
     <?php } ?>
</body>
</html>
<?php
//break and continue-----------------------------------------------------------------------------------
foreach ($grades as $grade){
     if($grade['subject']==='science'){
          break;
     }
     if($grade['note'] < 17){
          continue;
     }
     echo $grade['subject'] . '</br>';
}
//functions--------------------------------------------------------------------------------------------
function sayFuckU($name = 'bro', $nickname ='dah') {
     echo "fuck you $name $nickname" . '</br>';

}
sayFuckU('nabil','salfis') ;

function fTwo2($product){
     echo "{$product['name']} is a big {$product['adjective']} </br>" ;
}

fTwo2(['name'=>'salfis','adjective'=>'abrustiss']);

function fThree3($product){
     return "{$product['name']} pue {$product['adjective']} ";
}
$valeurSur=fThree3(['name'=>'le s', 'adjective'=>'la merde']);
echo $valeurSur;

?>
```