<?php 

$con = mysql_connect("localhost","jfolio_juser","j2013","jfolio_j680") or die(mysql_error());
        mysql_select_db("jfolio_j680") or die(mysql_error());
        if($con)
        {
            echo "connected";
        }
                  
?>




