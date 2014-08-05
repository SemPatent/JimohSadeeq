<?php
/**
 * Created by PhpStorm.
 * User: Sadeeq
 * Date: 6/1/14
 * Time: 4:24 PM
 */

//session_start();
//if(!isset($_SESSION['username'])){
// header("location:welcome.php");
//}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN"
    "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">

<html lang="en" xml:lang="en">
<head>
    <title>LITTLE</title>
    <meta http-equiv="Content-Type" content="txt/html; charset=utf-8" />

    <link rel="stylesheet" type="text/css" href="files/styles.css?v=59969665">
    <script type="text/javascript" src="files/validateInput.js?v=7788444"></script>

</head>

<body>


<div id="head">
    <header>
        <h2 >ADD LITTLE TO THE DATABASE </h2>
        <ul class="list" style="margin-top: 50px; ">
            <li style=" font-size: 14px;"><a style="color: #3366FF" href="home.php"><b>HOME</b></a></li>
            <li style="float: right; font-size: 14px; "><a style="color: #3366FF" href="logout.php"><b><i>LOGOUT</i></b></a></li>
        </ul>
    </header>
</div>

<div >
    <h3 > PLEASE FILL IN THE NECESSARY FIELDS </h3>
</div>
<center>
    <table cellpadding='2' cellspacing='5px' border='5px' style= 'margin-top: 1.8em'>
        <tr><td bgcolor="blue" style='width: 800px'>
                <table cellpadding='0' cellspacing='5px' border='5px' width='100%'>
                    <tr>
                        <td bgcolor="blue" align=center style="padding:5px;padding-bottom:7px">
                            <b>
                                <font size=-1 color="white" face="verdana,arial">
                                    <b><h3>Complete All Fields </h3></b>
                                </font>
                    </tr>
                    <tr><td bgcolor=#eee style="padding:8px"><br>
                            <form method="post" action="addlittleaction.php" name="synonyms" target="_top" >

                                <table >
                                    <tr >
                                        <td style="padding:4px" ><font face="verdana,arial" size=2>Little </font></td>
                                        <td  ><input type="text" name="txtLittle" size="21"></td>

                                    </tr>
                                    <tr>
                                        <td style="padding:4px" ><font face="verdana,arial" size=2>Little syno 1 </font></td>
                                        <td style="size:160" ><input type="text" name="txtLittlesyno1" size="21" ></td>
                                    </tr>
                                    <tr>
                                        <td style="padding:4px" ><font face="verdana,arial" size=2>Little syno 2 </font></td>
                                        <td style="size:160" ><input type="text" name="txtLittlesyno2" size="21" ></td>
                                    </tr>
                                    <tr>
                                        <td style="padding:4px" ><font face="verdana,arial" size=2>Little syno 3 </font></td>
                                        <td style="size:160" ><input type="text" name="txtLittlesyno3" size="21" ></td>
                                    </tr>
                                    <tr>
                                        <td style="padding:4px" ><font face="verdana,arial" size=2>Little syno 4 </font></td>
                                        <td style="size:160" ><input type="text" name="txtLittlesyno4" size="21" ></td>
                                    </tr>
                                    <tr>
                                        <td style="padding:4px" ><font face="verdana,arial" size=2>Little syno 5 </font></td>
                                        <td style="size:160" ><input type="text" name="txtLittlesyno5" size="21" ></td>
                                    </tr>
                                    <tr>
                                        <td style="padding:4px" ><font face="verdana,arial" size=2>Little syno 6 </font></td>
                                        <td style="size:160" ><input type="text" name="txtLittlesyno6" size="21" ></td>
                                    </tr>
                                    <tr>
                                        <td style="padding:4px" ><font face="verdana,arial" size=2>Little syno 7 </font></td>
                                        <td style="size:160" ><input type="text" name="txtLittlesyno7" size="21" ></td>
                                    </tr>
                                    <tr>
                                        <td style="padding:4px" ><font face="verdana,arial" size=2>Little syno 8 </font></td>
                                        <td style="size:160" ><input type="text" name="txtLittlesyno8" size="21" ></td>
                                    </tr>
                                    <tr>
                                        <td style="padding:4px" ><font face="verdana,arial" size=2>Little syno 9 </font></td>
                                        <td style="size:160" ><input type="text" name="txtLittlesyno9" size="21" ></td>
                                    </tr>
                                    <tr>
                                        <td style="padding:4px" ><font face="verdana,arial" size=2>Little syno 10 </font></td>
                                        <td style="size:160" ><input type="text" name="txtLittlesyno10" size="21" ></td>
                                    </tr>
                                    <tr>
                                        <td style="padding:4px" ><font face="verdana,arial" size=2>Little syno 11 </font></td>
                                        <td style="size:160" ><input type="text" name="txtLittlesyno11" size="21" ></td>
                                    </tr>
                                    <tr>
                                        <td style="padding:4px" ><font face="verdana,arial" size=2>Little syno 12 </font></td>
                                        <td style="size:160" ><input type="text" name="txtLittlesyno12" size="21" ></td>
                                    </tr>
                                    <tr>
                                        <td style="padding:4px" ><font face="verdana,arial" size=2>Little syno 13 </font></td>
                                        <td style="size:160" ><input type="text" name="txtLittlesyno13" size="21" ></td>
                                    </tr>
                                    <tr>
                                        <td style="padding:4px" ><font face="verdana,arial" size=2>Little syno 14 </font></td>
                                        <td style="size:160" ><input type="text" name="txtLittlesyno14" size="21" ></td>
                                    </tr>
                                    <tr>
                                        <td style="padding:4px" ><font face="verdana,arial" size=2>Little syno 15 </font></td>
                                        <td style="size:160" ><input type="text" name="txtLittlesyno15" size="21" ></td>
                                    </tr>
                                    <tr>
                                        <td style="padding:4px" ><font face="verdana,arial" size=2>Little syno 16 </font></td>
                                        <td style="size:160" ><input type="text" name="txtLittlesyno16" size="21" ></td>
                                    </tr>
                                    <tr>
                                        <td style="padding:4px" ><font face="verdana,arial" size=2>Little syno 17 </font></td>
                                        <td style="size:160" ><input type="text" name="txtLittlesyno17" size="21" ></td>
                                    </tr>
                                    <tr>
                                        <td style="padding:4px" ><font face="verdana,arial" size=2>Little syno 18 </font></td>
                                        <td style="size:160" ><input type="text" name="txtLittlesyno18" size="21" ></td>
                                    </tr>
                                    <tr>
                                        <td style="padding:4px" ><font face="verdana,arial" size=2>Little syno 19 </font></td>
                                        <td style="size:160" ><input type="text" name="txtLittlesyno19" size="21" ></td>
                                    </tr>
                                    <tr>
                                        <td style="padding:4px" ><font face="verdana,arial" size=2>Little syno 20 </font></td>
                                        <td style="size:160" ><input type="text" name="txtLittlesyno20" size="21" ></td>
                                    </tr>
                                    <tr>
                                        <td style="padding:4px" ><font face="verdana,arial" size=2>Little syno 21 </font></td>
                                        <td style="size:160" ><input type="text" name="txtLittlesyno21" size="21" ></td>
                                    </tr>
                                    <tr>
                                        <td style="padding:4px" ><font face="verdana,arial" size=2>Little syno 22 </font></td>
                                        <td style="size:160" ><input type="text" name="txtLittlesyno22" size="21" ></td>
                                    </tr>
                                    <tr>
                                        <td style="padding:4px" ><font face="verdana,arial" size=2>Little syno 23 </font></td>
                                        <td style="size:160" ><input type="text" name="txtLittlesyno23" size="21" ></td>
                                    </tr>
                                    <tr>
                                        <td style="padding:4px" ><font face="verdana,arial" size=2>Little syno 24 </font></td>
                                        <td style="size:160" ><input type="text" name="txtLittlesyno24" size="21" ></td>
                                    </tr>
                                    <tr>
                                        <td style="padding:4px" ><font face="verdana,arial" size=2>Little syno 25 </font></td>
                                        <td style="size:160" ><input type="text" name="txtLittlesyno25" size="21" ></td>
                                    </tr>
                                    <tr >
                                        <td>&nbsp;</td>
                                        <td style="padding:4px"><input style="padding:4px" type="submit" value="Save">
                                            <input style="padding:4px" type="button" value="Cancel" name="btnCancel" onclick="javascript:location.href='managelittle.php'"></td>
                                    </tr>
                                    <tr>
                                        <td colspan=2>&nbsp;</td>
                                    </tr>

                                </table>

                            </form>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>
</center>


<ul id="foot">
    <li><a href="contactus.html">Contact Us</a></li> -
    <li><a href="faq.html">FAQ</a></li> -
    <li><a href="terms.html">Terms and Conditions</a></li>
</ul>
</body>
</html>

