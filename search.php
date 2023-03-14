<?php 
$item=['html','css','js','php'];

if(isset($_GET['search']))
{
    if (in_array($_GET['search'],$item)) {
        echo 'success';
    }
    else{
    echo 'error';
}
}
//////////////////////////
echo '<br>';
//if(isset($_GET['search']))

foreach ($item as $value) {
   if ($_GET['search']==$value) {
   $is_exist=true;
   break;
   }else{
    $is_exist=false;
   }
}
 if ($is_exist) {
        echo 'exist';
    }
    else{
    echo 'not found';
}
?>

