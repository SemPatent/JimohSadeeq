<?php

    $sqlhost="127.0.0.1"; // Host name
    $sqlusername="root"; // Mysql username
    $sqlpassword=""; // Mysql password
    $db_name="test"; // Database name
    $tbl_name="happy"; // Table name

    $conn = mysql_connect("$sqlhost", "$sqlusername", "$sqlpassword");
    if(! $conn )
    {
        die("COULD NOT CONNECT TO DB:" .mysql_errno($conn) . ": " . mysql_error($conn) . "\n");
    }

    mysql_select_db("$db_name")or die("COULD NOT SELECT DB:" .mysql_errno($conn) . ": " . mysql_error($conn) . "\n");

    // Get values from form
    $Happy=$_POST["txtHappy"];
    $Happysyno1=$_POST["txtHappysyno1"];
    $Happysyno2=$_POST["txtHappysyno2"];
    $Happysyno3=$_POST["txtHappysyno3"];
    $Happysyno4=$_POST["txtHappysyno4"];
    $Happysyno5=$_POST["txtHappysyno5"];
    $Happysyno6=$_POST["txtHappysyno6"];
    $Happysyno7=$_POST["txtHappysyno7"];
    $Happysyno8=$_POST["txtHappysyno8"];
    $Happysyno9=$_POST["txtHappysyno9"];
    $Happysyno10=$_POST["txtHappysyno10"];
    $Happysyno11=$_POST["txtHappysyno11"];
    $Happysyno12=$_POST["txtHappysyno12"];
    $Happysyno13=$_POST["txtHappysyno13"];
    $Happysyno14=$_POST["txtHappysyno14"];
    $Happysyno15=$_POST["txtHappysyno15"];
    $Happysyno16=$_POST["txtHappysyno16"];
    $Happysyno17=$_POST["txtHappysyno17"];
    $Happysyno18=$_POST["txtHappysyno18"];
    $Happysyno19=$_POST["txtHappysyno19"];
    $Happysyno20=$_POST["txtHappysyno20"];
    $Happysyno21=$_POST["txtHappysyno21"];
    $Happysyno22=$_POST["txtHappysyno22"];
    $Happysyno23=$_POST["txtHappysyno23"];
    $Happysyno24=$_POST["txtHappysyno24"];
    $Happysyno25=$_POST["txtHappysyno25"];
    $Happysyno26=$_POST["txtHappysyno26"];
    $Happysyno27=$_POST["txtHappysyno27"];
    $Happysyno28=$_POST["txtHappysyno28"];
    $Happysyno29=$_POST["txtHappysyno29"];
    $Happysyno30=$_POST["txtHappysyno30"];


    $sql="INSERT INTO $tbl_name(Happy,Happy_syno_1,Happy_syno_2,Happy_syno_3,Happy_syno_4,Happy_syno_5,Happy_syno_6,Happy_syno_7,Happy_syno_8
,Happy_syno_9,Happy_syno_10,Happy_syno_11,Happy_syno_12,Happy_syno_13,Happy_syno_14,Happy_syno_15,Happy_syno_16,Happy_syno_17,Happy_syno_18
,Happy_syno_19,Happy_syno_20,Happy_syno_21,Happy_syno_22,Happy_syno_23,Happy_syno_24,Happy_syno_25,Happy_syno_26,Happy_syno_27,Happy_syno_28
,Happy_syno_29,Happy_syno_30)
            VALUES('$Happy','$Happysyno1','$Happysyno2','$Happysyno3','$Happysyno4','$Happysyno5','$Happysyno6','$Happysyno7','$Happysyno8'
            ,'$Happysyno9','$Happysyno10','$Happysyno11','$Happysyno12','$Happysyno13','$Happysyno14','$Happysyno15','$Happysyno16','$Happysyno17'
            ,'$Happysyno18','$Happysyno19','$Happysyno20','$Happysyno21','$Happysyno22','$Happysyno23','$Happysyno24','$Happysyno25','$Happysyno26'
            ,'$Happysyno27','$Happysyno28','$Happysyno29','$Happysyno30')";

    $result=mysql_query($sql);

    // if successfully insert data into database
    if($result){
        header("location:managehappy.php");
    }
    else{
        die("ERROR EDITTING ACCOUNT:" .mysql_errno($conn) . ": " . mysql_error($conn) . "\n");
        echo "<a href='managehappy.php'> <em> VIEW HAPPY </em> </a>";
    }

    mysql_close($conn);

?>
