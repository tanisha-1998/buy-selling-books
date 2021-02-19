<?php
session_start();
if($_SERVER["REQUEST_METHOD"]=="POST")
{
    
    if (isset($_POST['add_to_cart'])) 
    {
        if (isset($_SESSION['cart'])) 
        {
           $myitems = array_column($_SESSION['cart'],'Item_Name');
           if (in_array($_POST['item_name'],$myitems)) {
               echo"<script>alert('item is already added');
               window.location.href='welcome.php';
               </script>";
           }
           $count = count($_SESSION['cart']);
           $_SESSION['cart'][$count]=array('Item_Name'=>$_POST['item_name'],'price'=>$_POST['price'],'quantity'=>1);
           print_r($_SESSION['cart']);
        }
        else 
        {
            $_SESSION['cart'][0]=array('Item_Name'=>$_POST['item_name'],'price'=>$_POST['price'],'quantity'=>1);
            print_r($_SESSION['cart']);
        }
    }
}

?>