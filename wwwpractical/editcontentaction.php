<?php

    $id = $_GET['id'];

    $sqlhost="127.0.0.1"; // Host name
    $sqlusername="root"; // Mysql username
    $sqlpassword=""; // Mysql password
    $db_name="test"; // Database name
    $tbl_name="content_s"; // Table name

    $conn = mysql_connect("$sqlhost", "$sqlusername", "$sqlpassword");
    if(! $conn )
    {
        die("COULD NOT CONNECT TO DB:" .mysql_errno($conn) . ": " . mysql_error($conn) . "\n");
    }

    mysql_select_db("$db_name")or die("COULD NOT SELECT DB:" .mysql_errno($conn) . ": " . mysql_error($conn) . "\n");

    // Get values from form
$content=$_POST["txtcontent"];
$contentsyno1=$_POST["txtcontentsyno1"];
$contentsyno2=$_POST["txtcontentsyno2"];
$contentsyno3=$_POST["txtcontentsyno3"];
$contentsyno4=$_POST["txtcontentsyno4"];
$contentsyno5=$_POST["txtcontentsyno5"];
$contentsyno6=$_POST["txtcontentsyno6"];
$contentsyno7=$_POST["txtcontentsyno7"];
$contentsyno8=$_POST["txtcontentsyno8"];
$contentsyno9=$_POST["txtcontentsyno9"];
$contentsyno10=$_POST["txtcontentsyno10"];
$contentsyno11=$_POST["txtcontentsyno11"];
$contentsyno12=$_POST["txtcontentsyno12"];
$contentsyno13=$_POST["txtcontentsyno13"];
$contentsyno14=$_POST["txtcontentsyno14"];
$contentsyno15=$_POST["txtcontentsyno15"];
$contentsyno16=$_POST["txtcontentsyno16"];
$contentsyno17=$_POST["txtcontentsyno17"];
$contentsyno18=$_POST["txtcontentsyno18"];
$contentsyno19=$_POST["txtcontentsyno19"];
$contentsyno20=$_POST["txtcontentsyno20"];
$contentsyno21=$_POST["txtcontentsyno21"];
$contentsyno22=$_POST["txtcontentsyno22"];
$contentsyno23=$_POST["txtcontentsyno23"];
$contentsyno24=$_POST["txtcontentsyno24"];
$contentsyno25=$_POST["txtcontentsyno25"];


    $sql = "UPDATE $tbl_name SET content = '$content',content_syno_1='$contentsyno1',content_syno_2='$contentsyno2',content_syno_3='$contentsyno3',content_syno_4='$contentsyno4',content_syno_5='$contentsyno5'
 ,content_syno_6='$contentsyno6',content_syno_7='$contentsyno7',content_syno_8='$contentsyno8',content_syno_9='$contentsyno9',content_syno_10='$contentsyno10',content_syno_11='$contentsyno11',content_syno_12='$contentsyno12'
  ,content_syno_13='$contentsyno13',content_syno_14='$contentsyno14',content_syno_15='$contentsyno15',content_syno_16='$contentsyno16',content_syno_17='$contentsyno17',content_syno_18='$contentsyno18',content_syno_19='$contentsyno19'
   ,content_syno_20='$contentsyno20',content_syno_21='$contentsyno21',content_syno_22='$contentsyno22',content_syno_23='$contentsyno23',content_syno_24='$contentsyno24',content_syno_25='$contentsyno25' WHERE content='$id'";

    $result=mysql_query($sql);

    // if successfully insert data into database, go to login page.
    if($result){
        header("location:managecontent.php");
    }
    else{
        die("ERROR EDITTING CONTENT:" .mysql_errno($conn) . ": " . mysql_error($conn) . "\n");
        echo "<a href='managecontent.php'> <em> GO TO CONTENT</em> </a>";
    }

    mysql_close($conn);
?>
