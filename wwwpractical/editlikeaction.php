<?php
/**
 * Created by PhpStorm.
 * User: Sadeeq
 * Date: 6/1/14
 * Time: 4:43 PM
 */
$id = $_GET['id'];

$sqlhost="127.0.0.1"; // Host name
$sqlusername="root"; // Mysql username
$sqlpassword=""; // Mysql password
$db_name="test"; // Database name
$tbl_name="like_s"; // Table name

$conn = mysql_connect("$sqlhost", "$sqlusername", "$sqlpassword");
if(! $conn )
{
    die("COULD NOT CONNECT TO DB:" .mysql_errno($conn) . ": " . mysql_error($conn) . "\n");
}

mysql_select_db("$db_name")or die("COULD NOT SELECT DB:" .mysql_errno($conn) . ": " . mysql_error($conn) . "\n");

// Get values from form
$Likes=$_POST["txtLikes"];
$Likesyno1=$_POST["txtLikesyno1"];
$Likesyno2=$_POST["txtLikesyno2"];
$Likesyno3=$_POST["txtLikesyno3"];
$Likesyno4=$_POST["txtLikesyno4"];
$Likesyno5=$_POST["txtLikesyno5"];
$Likesyno6=$_POST["txtLikesyno6"];
$Likesyno7=$_POST["txtLikesyno7"];
$Likesyno8=$_POST["txtLikesyno8"];
$Likesyno9=$_POST["txtLikesyno9"];
$Likesyno10=$_POST["txtLikesyno10"];
$Likesyno11=$_POST["txtLikesyno11"];
$Likesyno12=$_POST["txtLikesyno12"];
$Likesyno13=$_POST["txtLikesyno13"];
$Likesyno14=$_POST["txtLikesyno14"];
$Likesyno15=$_POST["txtLikesyno15"];
$Likesyno16=$_POST["txtLikesyno16"];
$Likesyno17=$_POST["txtLikesyno17"];
$Likesyno18=$_POST["txtLikesyno18"];
$Likesyno19=$_POST["txtLikesyno19"];
$Likesyno20=$_POST["txtLikesyno20"];
$Likesyno21=$_POST["txtLikesyno21"];
$Likesyno22=$_POST["txtLikesyno22"];
$Likesyno23=$_POST["txtLikesyno23"];
$Likesyno24=$_POST["txtLikesyno24"];
$Likesyno25=$_POST["txtLikesyno25"];
$Likesyno26=$_POST["txtLikesyno26"];
$Likesyno27=$_POST["txtLikesyno27"];
$Likesyno28=$_POST["txtLikesyno28"];
$Likesyno29=$_POST["txtLikesyno29"];
$Likesyno30=$_POST["txtLikesyno30"];

$sql = "UPDATE $tbl_name SET Likes = '$Likes',Like_syno_1='$Likesyno1',Like_syno_2='$Likesyno2',Like_syno_3='$Likesyno3',Like_syno_4='$Likesyno4',Like_syno_5='$Likesyno5'
 ,Like_syno_6='$Likesyno6',Like_syno_7='$Likesyno7',Like_syno_8='$Likesyno8',Like_syno_9='$Likesyno9',Like_syno_10='$Likesyno10',Like_syno_11='$Likesyno11',Like_syno_12='$Likesyno12'
  ,Like_syno_13='$Likesyno13',Like_syno_14='$Likesyno14',Like_syno_15='$Likesyno15',Like_syno_16='$Likesyno16',Like_syno_17='$Likesyno17',Like_syno_18='$Likesyno18',Like_syno_19='$Likesyno19'
   ,Like_syno_20='$Likesyno20',Like_syno_21='$Likesyno21',Like_syno_22='$Likesyno22',Like_syno_23='$Likesyno23',Like_syno_24='$Likesyno24',Like_syno_25='$Likesyno25',Like_syno_26='$Likesyno26'
    ,Like_syno_27='$Likesyno27',Like_syno_28='$Likesyno28',Like_syno_29='$Likesyno29',Like_syno_30='$Likesyno30' WHERE Likes='$id'";

$result=mysql_query($sql);

// if successfully insert data into database, go to login page.
if($result){
    header("location:managelike.php");
}
else{
    die("ERROR EDITTING LIKE:" .mysql_errno($conn) . ": " . mysql_error($conn) . "\n");
    echo "<a href='managelike.php'> <em> GO TO LIKE </em> </a>";
}

mysql_close($conn);
?>
