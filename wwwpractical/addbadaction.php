<?php
/**
 * Created by PhpStorm.
 * User: Sadeeq
 * Date: 5/24/14
 * Time: 5:56 PM
 */
$sqlhost="127.0.0.1"; // Host name
$sqlusername="root"; // Mysql username
$sqlpassword=""; // Mysql password
$db_name="test"; // Database name
$tbl_name="bad"; // Table name

$conn = mysql_connect("$sqlhost", "$sqlusername", "$sqlpassword");
if(! $conn )
{
    die("COULD NOT CONNECT TO DB:" .mysql_errno($conn) . ": " . mysql_error($conn) . "\n");
}

mysql_select_db("$db_name")or die("COULD NOT SELECT DB:" .mysql_errno($conn) . ": " . mysql_error($conn) . "\n");

// Get values from form
$Bad=$_POST["txtBad"];
$Badsyno1=$_POST["txtBadsyno1"];
$Badsyno2=$_POST["txtBadsyno2"];
$Badsyno3=$_POST["txtBadsyno3"];
$Badsyno4=$_POST["txtBadsyno4"];
$Badsyno5=$_POST["txtBadsyno5"];
$Badsyno6=$_POST["txtBadsyno6"];
$Badsyno7=$_POST["txtBadsyno7"];
$Badsyno8=$_POST["txtBadsyno8"];
$Badsyno9=$_POST["txtBadsyno9"];
$Badsyno10=$_POST["txtBadsyno10"];
$Badsyno11=$_POST["txtBadsyno11"];
$Badsyno12=$_POST["txtBadsyno12"];
$Badsyno13=$_POST["txtBadsyno13"];
$Badsyno14=$_POST["txtBadsyno14"];
$Badsyno15=$_POST["txtBadsyno15"];
$Badsyno16=$_POST["txtBadsyno16"];
$Badsyno17=$_POST["txtBadsyno17"];
$Badsyno18=$_POST["txtBadsyno18"];
$Badsyno19=$_POST["txtBadsyno19"];
$Badsyno20=$_POST["txtBadsyno20"];
$Badsyno21=$_POST["txtBadsyno21"];
$Badsyno22=$_POST["txtBadsyno22"];
$Badsyno23=$_POST["txtBadsyno23"];
$Badsyno24=$_POST["txtBadsyno24"];
$Badsyno25=$_POST["txtBadsyno25"];

$sql="INSERT INTO $tbl_name(Bad,Bad_syno_1,Bad_syno_2,Bad_syno_3,Bad_syno_4,Bad_syno_5,Bad_syno_6,Bad_syno_7,Bad_syno_8,Bad_syno_9
,Bad_syno_10,Bad_syno_11,Bad_syno_12,Bad_syno_13,Bad_syno_14,Bad_syno_15,Bad_syno_16,Bad_syno_17,Bad_syno_18,Bad_syno_19,Bad_syno_20
,Bad_syno_21,Bad_syno_22,Bad_syno_23,Bad_syno_24,Bad_syno_25)
            VALUES('$Bad','$Badsyno1','$Badsyno2','$Badsyno3','$Badsyno4','$Badsyno5','$Badsyno6','$Badsyno7','$Badsyno8'
            ,'$Badsyno9','$Badsyno10','$Badsyno11','$Badsyno12','$Badsyno13','$Badsyno14','$Badsyno15','$Badsyno16','$Badsyno17','$Badsyno18'
            ,'$Badsyno19','$Badsyno20','$Badsyno21','$Badsyno22','$Badsyno23','$Badsyno24','$Badsyno25')";

$result=mysql_query($sql);

// if successfully insert data into database
if($result){
    header("location:managebad.php");
}
else{
    die("ERROR EDITTING ACCOUNT:" .mysql_errno($conn) . ": " . mysql_error($conn) . "\n");
    echo "<a href='managebad.php'> <em> VIEW BAD </em> </a>";
}

mysql_close($conn);

?>
