<?php
/**
 * Created by PhpStorm.
 * User: Sadeeq
 * Date: 5/24/14
 * Time: 11:05 AM
 */
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

$sql="INSERT INTO $tbl_name(Big,Big_syno_1,Big_syno_2,Big_syno_3,Big_syno_4,Big_syno_5,Big_syno_6,Big_syno_7,Big_syno_8,Big_syno_9,Big_syno_10,
Big_syno_11,Big_syno_12,Big_syno_13,Big_syno_14,Big_syno_15,Big_syno_16,Big_syno_17,Big_syno_18,Big_syno_19,Big_syno_20
,Big_syno_21,Big_syno_22,Big_syno_23,Big_syno_24,Big_syno_25,Big_syno_26,Big_syno_27,Big_syno_28,Big_syno_29,Big_syno_30)
            VALUES('$Big','$Bigsyno1','$Bigsyno2','$Bigsyno3','$Bigsyno4','$Bigsyno5','$Bigsyno6','$Bigsyno7','$Bigsyno8','$Bigsyno9'
            ,'$Bigsyno10','$Bigsyno11','$Bigsyno12','$Bigsyno13','$Bigsyno14','$Bigsyno15','$Bigsyno16','$Bigsyno17','$Bigsyno18'
            ,'$Bigsyno19','$Bigsyno20','$Bigsyno21','$Bigsyno22','$Bigsyno23','$Bigsyno24','$Bigsyno25','$Bigsyno26','$Bigsyno27','$Bigsyno28'
            ,'$Bigsyno29','$Bigsyno30')";

$result=mysql_query($sql);

// if successfully insert data into database
if($result){
    header("location:managebig.php");
}
else{
    die("ERROR EDITTING ACCOUNT:" .mysql_errno($conn) . ": " . mysql_error($conn) . "\n");
    echo "<a href='managebig.php'> <em> VIEW BIG </em> </a>";
}

mysql_close($conn);

?>
