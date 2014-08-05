<?php
/**
 * Created by PhpStorm.
 * User: Sadeeq
 * Date: 5/24/14
 * Time: 11:24 AM
 */
$id = $_GET['id'];

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

$sql = "UPDATE $tbl_name SET Happy = '$Happy',Happy_syno_1='$Happysyno1',Happy_syno_2='$Happysyno2',Happy_syno_3='$Happysyno3',Happy_syno_4='$Happysyno4',Happy_syno_5='$Happysyno5'
 ,Happy_syno_6='$Happysyno6',Happy_syno_7='$Happysyno7',Happy_syno_8='$Happysyno8',Happy_syno_9='$Happysyno9',Happy_syno_10='$Happysyno10',Happy_syno_11='$Happysyno11',Happy_syno_12='$Happysyno12'
  ,Happy_syno_13='$Happysyno13',Happy_syno_14='$Happysyno14',Happy_syno_15='$Happysyno15',Happy_syno_16='$Happysyno16',Happy_syno_17='$Happysyno17',Happy_syno_18='$Happysyno18',Happy_syno_19='$Happysyno19'
   ,Happy_syno_20='$Happysyno20',Happy_syno_21='$Happysyno21',Happy_syno_22='$Happysyno22',Happy_syno_23='$Happysyno23',Happy_syno_24='$Happysyno24',Happy_syno_25='$Happysyno25',Happy_syno_26='$Happysyno26'
    ,Happy_syno_27='$Happysyno27',Happy_syno_28='$Happysyno28',Happy_syno_29='$Happysyno29',Happy_syno_30='$Happysyno30' WHERE Happy='$id'";

$result=mysql_query($sql);

// if successfully insert data into database, go to login page.
if($result){
    header("location:managehappy.php");
}
else{
    die("ERROR EDITTING HAPPY:" .mysql_errno($conn) . ": " . mysql_error($conn) . "\n");
    echo "<a href='managehappy.php'> <em> GO TO HAPPY </em> </a>";
}

mysql_close($conn);
?>
