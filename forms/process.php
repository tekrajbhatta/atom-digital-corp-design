

<?php

    if(isset($_POST['btn-send']))
    {

         $UserName = $_POST['name'];
         $Email = $_POST['email'];
         $Subject = $_POST['subject'];
         $Msg = $_POST['message'];

         if(empty($UserName) || empty($Email) || empty($Subject) || empty($Msg))
         {

            header('location:index.php?error');
         }
         else{

            $to = "info@atomdigitalcorp.com";

            if(mail($to, $Subject, $Msg, $Email))

            {

                header("location:index.php?sucess");

            }
            
         }

    }
    else{

        header("location:index.php");
    }

?>