<?php

if(isset($_POST['submit']))
   {
      if($_POST['choice']=='add')
      {
         if($_POST['alphaid']=='employee')
         {
           header("Location:page2.php");
         }

        if($_POST['alphaid']=='bus')
         {
         	header("Location:page4.php");
         }
          if($_POST['alphaid']=='passenger')
         {
         	
         }
    } 


       if($_POST['choice']=='delete')
       {
        if($_POST['alphaid']=='employee')
         {
          
         }

         if($_POST['alphaid']=='bus')
         {
          header("Location:page5.php");
         }

       }

      	/*else if (!empty($_POST['update_details']))
      	{

      	}*/

    
     }

    
     ?>