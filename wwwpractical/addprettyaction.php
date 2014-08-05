<?php

    $sqlhost="127.0.0.1"; // Host name
    $sqlusername="root"; // Mysql username
    $sqlpassword=""; // Mysql password
    $db_name="test"; // Database name
    $tbl_name="pretty"; // Table name

    $conn = mysql_connect("$sqlhost", "$sqlusername", "$sqlpassword");
    if(! $conn )
    {
        die("COULD NOT CONNECT TO DB:" .mysql_errno($conn) . ": " . mysql_error($conn) . "\n");
    }

    mysql_select_db("$db_name")or die("COULD NOT SELECT DB:" .mysql_errno($conn) . ": " . mysql_error($conn) . "\n");

    // Get values from form
    $Pretty=$_POST["txtPretty"];
    $Prettysyno1=$_POST["txtPrettysyno1"];
    $Prettysyno2=$_POST["txtPrettysyno2"];
    $Prettysyno3=$_POST["txtPrettysyno3"];
    $Prettysyno4=$_POST["txtPrettysyno4"];
    $Prettysyno5=$_POST["txtPrettysyno5"];
    $Prettysyno6=$_POST["txtPrettysyno6"];
    $Prettysyno7=$_POST["txtPrettysyno7"];
    $Prettysyno8=$_POST["txtPrettysyno8"];
    $Prettysyno9=$_POST["txtPrettysyno9"];
    $Prettysyno10=$_POST["txtPrettysyno10"];
    $Prettysyno11=$_POST["txtPrettysyno11"];
    $Prettysyno12=$_POST["txtPrettysyno12"];
    $Prettysyno13=$_POST["txtPrettysyno13"];
    $Prettysyno14=$_POST["txtPrettysyno14"];
    $Prettysyno15=$_POST["txtPrettysyno15"];
    $Prettysyno16=$_POST["txtPrettysyno16"];
    $Prettysyno17=$_POST["txtPrettysyno17"];
    $Prettysyno18=$_POST["txtPrettysyno18"];
    $Prettysyno19=$_POST["txtPrettysyno19"];
    $Prettysyno20=$_POST["txtPrettysyno20"];
    $Prettysyno21=$_POST["txtPrettysyno21"];
    $Prettysyno22=$_POST["txtPrettysyno22"];
    $Prettysyno23=$_POST["txtPrettysyno23"];
    $Prettysyno24=$_POST["txtPrettysyno24"];


    $sql="INSERT INTO $tbl_name(Pretty,Pretty_syno_1,Pretty_syno_2,Pretty_syno_3,Pretty_syno_4,Pretty_syno_5,Pretty_syno_6,Pretty_syno_7,Pretty_syno_8,Pretty_syno_9,Pretty_syno_10,Pretty_syno_11,Pretty_syno_12
,Pretty_syno_13,Pretty_syno_14,Pretty_syno_15,Pretty_syno_16,Pretty_syno_17,Pretty_syno_18,Pretty_syno_19,Pretty_syno_20,Pretty_syno_21,Pretty_syno_22,Pretty_syno_23,Pretty_syno_24)
            VALUES('$Pretty','$Prettysyno1','$Prettysyno2','$Prettysyno3','$Prettysyno4','$Prettysyno5','$Prettysyno6','$Prettysyno7','$Prettysyno8','$Prettysyno9','$Prettysyno10','$Prettysyno11','$Prettysyno12'
            ,'$Prettysyno13','$Prettysyno14','$Prettysyno15','$Prettysyno16','$Prettysyno17','$Prettysyno18','$Prettysyno19','$Prettysyno20','$Prettysyno21','$Prettysyno22','$Prettysyno23','$Prettysyno24')";

    $result=mysql_query($sql);

    // if successfully insert data into database
    if($result){
        header("location:managepretty.php");
    }
    else{
        die("ERROR EDITTING ACCOUNT:" .mysql_errno($conn) . ": " . mysql_error($conn) . "\n");
        echo "<a href='managepretty.php'> <em> VIEW PRETTY </em> </a>";
    }

    mysql_close($conn);

?>
