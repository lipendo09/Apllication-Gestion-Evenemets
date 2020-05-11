<?php

if($_POST)
{
    if(isset($_POST['submit']) AND $_POST['submit']=='Login')
    {
         $username =$_POST['username'];
         $password =$_POST['password'];
    }
   
    try
    {
        include 'models/Login.php';
        $Login=new Login($username, $password);
       
        if ($Login->getData() == TRUE
        {
            session_start();
            $_SESSION['username']=$username;
            header('Location: index.php');
        }
    }
    catch (Exception $excep)
    {
        echo $excep->getMessage();
    }
     
}

?>