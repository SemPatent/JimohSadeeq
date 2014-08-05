<?php
/**
 * Created by PhpStorm.
 * User: Sadeeq
 * Date: 6/1/14
 * Time: 4:30 PM
 */
$sqlhost="127.0.0.1"; // Host name
$sqlusername="root"; // Mysql username
$sqlpassword=""; // Mysql password
$db_name="test"; // Database name
$tbl_name="little"; // Table name

$conn = mysql_connect("$sqlhost", "$sqlusername", "$sqlpassword");
if(! $conn )
{
    die("COULD NOT CONNECT TO DB:" .mysql_errno($conn) . ": " . mysql_error($conn) . "\n");
}

mysql_select_db("$db_name")or die("COULD NOT SELECT DB:" .mysql_errno($conn) . ": " . mysql_error($conn) . "\n");

// Get values from form
$Little=$_POST["txtLittle"];
$Littlesyno1=$_POST["txtLittlesyno1"];
$Littlesyno2=$_POST["txtLittlesyno2"];
$Littlesyno3=$_POST["txtLittlesyno3"];
$Littlesyno4=$_POST["txtLittlesyno4"];
$Littlesyno5=$_POST["txtLittlesyno5"];
$Littlesyno6=$_POST["txtLittlesyno6"];
$Littlesyno7=$_POST["txtLittlesyno7"];
$Littlesyno8=$_POST["txtLittlesyno8"];
$Littlesyno9=$_POST["txtLittlesyno9"];
$Littlesyno10=$_POST["txtLittlesyno10"];
$Littlesyno11=$_POST["txtLittlesyno11"];
$Littlesyno12=$_POST["txtLittlesyno12"];
$Littlesyno13=$_POST["txtLittlesyno13"];
$Littlesyno14=$_POST["txtLittlesyno14"];
$Littlesyno15=$_POST["txtLittlesyno15"];
$Littlesyno16=$_POST["txtLittlesyno16"];
$Littlesyno17=$_POST["txtLittlesyno17"];
$Littlesyno18=$_POST["txtLittlesyno18"];
$Littlesyno19=$_POST["txtLittlesyno19"];
$Littlesyno20=$_POST["txtLittlesyno20"];
$Littlesyno21=$_POST["txtLittlesyno21"];
$Littlesyno22=$_POST["txtLittlesyno22"];
$Littlesyno23=$_POST["txtLittlesyno23"];
$Littlesyno24=$_POST["txtLittlesyno24"];
$Littlesyno25=$_POST["txtLittlesyno25"];

$sql="INSERT INTO $tbl_name(Little,Little_syno_1,Little_syno_2,Little_syno_3,Little_syno_4,Little_syno_5,Little_syno_6
,Little_syno_7,Little_syno_8,Little_syno_9,Little_syno_10,Little_syno_11,Little_syno_12,Little_syno_13,Little_syno_14,Little_syno_15
,Little_syno_16,Little_syno_17,Little_syno_18,Little_syno_19,Little_syno_20,Little_syno_21,Little_syno_22,Little_syno_23,Little_syno_24,Little_syno_25)
            VALUES('$Little','$Littlesyno1','$Littlesyno2','$Littlesyno3','$Littlesyno4','$Littlesyno5','$Littlesyno6','$Littlesyno7'
            ,'$Littlesyno8','$Littlesyno9','$Littlesyno10','$Littlesyno11','$Littlesyno12','$Littlesyno13','$Littlesyno14','$Littlesyno15'
            ,'$Littlesyno16','$Littlesyno17','$Littlesyno18','$Littlesyno19','$Littlesyno20','$Littlesyno21','$Littlesyno22'
            ,'$Littlesyno23','$Littlesyno24','$Littlesyno25')";

$result=mysql_query($sql);

// if successfully insert data into database
if($result){
    header("location:managelittle.php");
}
else{
    die("ERROR EDITTING ACCOUNT:" .mysql_errno($conn) . ": " . mysql_error($conn) . "\n");
    echo "<a href='managelittle.php'> <em> VIEW LITTLE </em> </a>";
}

mysql_close($conn);

?>
