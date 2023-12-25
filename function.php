<?php


                                //FUNCTION WITH ARGUMENTS..........

// function ahsan($firstname,$lastname)
// {

//     echo"My name is $firstname $lastname <br>";
//     print $firstname.' '.$lastname;
// }

// ahsan("Ahsan Al","Bashar");


                            //FUNCTION WITH DEFAULT ARGUMENT
                    

// function jun($name='ahsan',$age=27)
// {

//     echo "$name $age";

// }
// jun('jun al ahsan');


                            //FUNCTION RETURN VALUE

                        //     function ahsanjun($firstname,$lastname)
                        //     {
                        //         return $firstname.' '.$lastname;
                        //     }

                        //   echo  ahsanjun('Ahsan','Jun');



                                //RETURN TYPE DECLARATION

                            
// function ahsan(int $x,int $y)
// {

//     return $x+$y;
// }

// print ahsan(60,30);

                            //FUNCTION WITH REFERENCE VALUE(&$JUN)

// function ahsan(&$jun)
// {
//     $jun+=5;
// }

// $ahsan=20;

// ahsan($ahsan);

// echo $ahsan;



// CALCULATOR

// function calculator($method="sum",int $x,int $y):float{


//     if($method=="sum")
//     return $x+$y;
//     elseif($method=="sub")
//     return $x-$y;
//     elseif($method=="mul")
//     return $x*$y;
//     elseif($method=="div")
//     return $x/$y;

//     else
//     return null;

// }

// print calculator("div",27,25);


function ahsan($firstname='Jun',$secondname='al ahsan')
{

    echo $firstname.' '.$secondname;

}


ahsan();

?>