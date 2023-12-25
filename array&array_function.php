<?php

/* 

1.Index Array
2.Asscociative Array
3.Multidimensional Array


*/

//Index Array


// $ahsan=array('jun','baby','relatives');


// print $ahsan[1];



// $ahsan=array("Ahsan Al Bashar","age","26");

// $length=count($ahsan);

// for($index=0;$index<$length;$index++)

// {
// echo "$index = $ahsan[$index] <br>";

// }

//Associative Array




// $ahsan=array("name"=>"Ahsan Al Bashar","age"=>"26","status"=>"married");

// foreach ($ahsan as $key => $value) {
    
// echo "$key=$value <br>";

// }

//MultiDimensional Array

// $companies=array(
//     array("samsung","falg1","s23"),
//     array("Oneplus","falg2","9R"),
//     array("Xiaomi","falg3","12 Pro")
  
// );

// for($row=0;$row<count($companies);$row++)
// {

//     echo "<p> $row <p>" ;
//     echo "<ul>";
//     for($col=0;$col<3;$col++){

//         echo "<li>".$companies[$row][$col]."</li>";
//     }

//     echo "</ul>";
// }






/*                          ............SORTING ARRAY...........

sort=Ascending order.
rsort= Descending Order.
asort=Ascending Associative Array With Value.
ksort=Ascending Associative Array With Key.
arsort=Descending Associative Array With Value.
krsort=Descending Associative Array With Key.

*/

$ahsan=array("jun","age","status","birth","yes");

// rsort($ahsan);

// for($index=0;$index<count($ahsan);$index++)
// echo "$index => $ahsan[$index] <br>";

// $ahsanjun=["name"=>"ahsan","age"=>"ten","class"=>"bsc"];
echo is_array($ahsan);
// krsort($ahsan);

// foreach ($ahsan as $key => $value) {
//     echo "$key => $value <br>";
// }


?>