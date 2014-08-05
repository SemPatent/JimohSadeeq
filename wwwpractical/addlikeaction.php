<?php

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



    $sql="INSERT INTO $tbl_name(Likes,Like_syno_1,Like_syno_2,Like_syno_3,Like_syno_4,Like_syno_5,Like_syno_6,Like_syno_7,Like_syno_8,Like_syno_9,Like_syno_10,Like_syno_11,Like_syno_12
,Like_syno_13,Like_syno_14,Like_syno_15,Like_syno_16,Like_syno_17,Like_syno_18,Like_syno_19,Like_syno_20,Like_syno_21,Like_syno_22,Like_syno_23,Like_syno_24
,Like_syno_25,Like_syno_26,Like_syno_27,Like_syno_28,Like_syno_29,Like_syno_30)
            VALUES('$Likes','$Likesyno1','$Likesyno2','$Likesyno3','$Likesyno4','$Likesyno5','$Likesyno6','$Likesyno7','$Likesyno8','$Likesyno9','$Likesyno10','$Likesyno11','$Likesyno12'
            ,'$Likesyno13','$Likesyno14','$Likesyno15','$Likesyno16','$Likesyno17','$Likesyno18','$Likesyno19','$Likesyno20','$Likesyno21','$Likesyno22','$Likesyno23','$Likesyno24'
            ,'$Likesyno25','$Likesyno26','$Likesyno27','$Likesyno28','$Likesyno29','$Likesyno30')";

    $result=mysql_query($sql);

    // if successfully insert data into database
    if($result){
        header("location:managelike.php");
    }
    else{
        die("ERROR EDITTING ACCOUNT:" .mysql_errno($conn) . ": " . mysql_error($conn) . "\n");
        echo "<a href='managelike.php'> <em> VIEW LIKE </em> </a>";
    }

    mysql_close($conn);

?>
