<?php

    $id = $_GET['id'];

    $sqlhost="127.0.0.1"; // Host name
    $sqlusername="root"; // Mysql username
    $sqlpassword=""; // Mysql password
    $db_name="test"; // Database name
    $tbl_name="big"; // Table name

    $conn = mysql_connect("$sqlhost", "$sqlusername", "$sqlpassword");
    if(! $conn )
    {
        die("COULD NOT CONNECT TO DB:" .mysql_errno($conn) . ": " . mysql_error($conn) . "\n");
    }

    mysql_select_db("$db_name")or die("COULD NOT SELECT DB:" .mysql_errno($conn) . ": " . mysql_error($conn) . "\n");

    // Get values from form
$Big=$_POST["txtBig"];
$Bigsyno1=$_POST["txtBigsyno1"];
$Bigsyno2=$_POST["txtBigsyno2"];
$Bigsyno3=$_POST["txtBigsyno3"];
$Bigsyno4=$_POST["txtBigsyno4"];
$Bigsyno5=$_POST["txtBigsyno5"];
$Bigsyno6=$_POST["txtBigsyno6"];
$Bigsyno7=$_POST["txtBigsyno7"];
$Bigsyno8=$_POST["txtBigsyno8"];
$Bigsyno9=$_POST["txtBigsyno9"];
$Bigsyno10=$_POST["txtBigsyno10"];
$Bigsyno11=$_POST["txtBigsyno11"];
$Bigsyno12=$_POST["txtBigsyno12"];
$Bigsyno13=$_POST["txtBigsyno13"];
$Bigsyno14=$_POST["txtBigsyno14"];
$Bigsyno15=$_POST["txtBigsyno15"];
$Bigsyno16=$_POST["txtBigsyno16"];
$Bigsyno17=$_POST["txtBigsyno17"];
$Bigsyno18=$_POST["txtBigsyno18"];
$Bigsyno19=$_POST["txtBigsyno19"];
$Bigsyno20=$_POST["txtBigsyno20"];
$Bigsyno21=$_POST["txtBigsyno21"];
$Bigsyno22=$_POST["txtBigsyno22"];
$Bigsyno23=$_POST["txtBigsyno23"];
$Bigsyno24=$_POST["txtBigsyno24"];
$Bigsyno25=$_POST["txtBigsyno25"];
$Bigsyno26=$_POST["txtBigsyno26"];
$Bigsyno27=$_POST["txtBigsyno27"];
$Bigsyno28=$_POST["txtBigsyno28"];
$Bigsyno29=$_POST["txtBigsyno29"];
$Bigsyno30=$_POST["txtBigsyno30"];

    $sql = "UPDATE $tbl_name SET Big = '$Big', Big_syno_1='$Bigsyno1', Big_syno_2='$Bigsyno2', Big_syno_3='$Bigsyno3', Big_syno_4='$Bigsyno4', Big_syno_5='$Bigsyno5'
 , Big_syno_6='$Bigsyno6', Big_syno_7='$Bigsyno7', Big_syno_8='$Bigsyno8', Big_syno_9='$Bigsyno9', Big_syno_10='$Bigsyno10', Big_syno_11='$Bigsyno11', Big_syno_12='$Bigsyno12'
  , Big_syno_13='$Bigsyno13', Big_syno_14='$Bigsyno14', Big_syno_15='$Bigsyno15', Big_syno_16='$Bigsyno16', Big_syno_17='$Bigsyno17', Big_syno_18='$Bigsyno18', Big_syno_19='$Bigsyno19'
   , Big_syno_20='$Bigsyno20' , Big_syno_21='$Bigsyno21', Big_syno_22='$Bigsyno22', Big_syno_23='$Bigsyno23', Big_syno_24='$Bigsyno24', Big_syno_25='$Bigsyno25', Big_syno_26='$Bigsyno26'
     , Big_syno_26='$Bigsyno26', Big_syno_27='$Bigsyno27', Big_syno_28='$Bigsyno28', Big_syno_29='$Bigsyno29', Big_syno_30='$Bigsyno30' WHERE Big='$id'";

    $result=mysql_query($sql);

    // if successfully insert data into database, go to login page.
    if($result){
        header("location:managebig.php");
    }
    else{
        die("ERROR EDITTING BIG:" .mysql_errno($conn) . ": " . mysql_error($conn) . "\n");
        echo "<a href='managebig.php'> <em> GO TO BIG </em> </a>";
    }

    mysql_close($conn);
?>
