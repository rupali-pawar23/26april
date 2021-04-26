<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Cn_Default extends CI_Controller {

public function index() {
$count = 0;  
$num = 2;  
while ($count < 15 )  
{  
$div_count=0;  
for ( $i=1; $i<=$num; $i++)  
{  
if (($num%$i)==0)  
{  
$div_count++;  
}  
}  
if ($div_count<3)  
{  
echo $num." , ";  
$count=$count+1;  
}  
$num=$num+1;  

}    

for($i=0;$i<=5;$i++){  
for($k=5;$k>=$i;$k--){  
echo "  ";  
}  
for($j=1;$j<=$i;$j++){  
echo "*  ";  
}  
echo "<br>";  
}  
for($i=4;$i>=1;$i--){  
for($k=5;$k>=$i;$k--){  
echo "  ";  
}  
for($j=1;$j<=$i;$j++){  
echo "*  ";  
}  
echo "<br>";  
}   
$this->load->view('form1');
    }
public function check_primenumber() {
    if($_POST)  
{  
    $input=$_POST['textnum'];  
    for ($i = 2; $i <= $input-1; $i++) {  
      if ($input % $i == 0) {  
      $value= True;  
      }  
}  
if (isset($value) && $value) {  
     echo 'The Number '. $input . ' is not prime';  
}  else {  
   echo 'The Number '. $input . ' is prime';  
   }   
}
}

public function maxProduct() 
{ 
define ("FRUITS", json_encode(array ("10", "3", "5", "6", "20"))); 
$arr = json_decode (FRUITS); 
$n = '5'; 

// echo "<pre>";print_r($fruits);die();
    $INT_MIN = 0; 
      
    // if size is less than  
    // 3, no triplet exists 
    if ($n < 3) 
        return -1; 
  
    // will contain max product 
    $max_product = $INT_MIN; 
  
    for ($i = 0; $i < $n - 2; $i++) 
        for ($j = $i + 1; $j < $n - 1; $j++) 
            for ($k = $j + 1; $k < $n; $k++) 
                $max_product = max($max_product, 
                        $arr[$i] * $arr[$j] * $arr[$k]); 
  echo "<pre>";print_r($max_product);die();
    return $max_product; 
} 
}
