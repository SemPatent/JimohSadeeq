<?php
//session_start();
//if(!isset($_SESSION['username'])){
// header("location:welcome.php");
//}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN"
	"http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">

<html lang="en" xml:lang="en">
<head>
	<title>CONTENT</title>
	<meta http-equiv="Content-Type" content="txt/html; charset=utf-8" />

    <link rel="stylesheet" type="text/css" href="files/styles.css?v=59969665">
    <script type="text/javascript" src="files/validateInput.js?v=7788444"></script>

</head>

<body>


	<div id="head">
         <header>
           <h2 >ADD CONTENT TO THE DATABASE </h2>
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
                            <form method="post" action="addcontentaction.php" name="content" target="_top" >

                                    <table >
                                        <tr >
                                            <td style="padding:4px" ><font face="verdana,arial" size=2>content </font></td>
                                            <td  ><input type="text" name="txtcontent" size="21"></td>

                                        </tr>
                                        <tr>
                                            <td style="padding:4px" ><font face="verdana,arial" size=2> content syno 1 </font></td>
                                            <td style="size:160" ><input type="text" name="txtcontentsyno1" size="21" ></td>
                                        </tr>
                                        <tr>
                                            <td style="padding:4px" ><font face="verdana,arial" size=2>content syno 2 </font></td>
                                            <td style="size:160" ><input type="text" name="txtcontentsyno2" size="21" ></td>
                                        </tr>
                                        <tr>
                                            <td style="padding:4px" ><font face="verdana,arial" size=2>content syno 3</font></td>
                                            <td><input type="text" name="txtcontentsyno3" size="21" value=""></td>
                                        </tr>
                                        <tr>
                                            <td style="padding:4px" ><font face="verdana,arial" size=2>content syno 4</font></td>
                                            <td><input type="text" name="txtcontentsyno4" size="21"></td>
                                        </tr>
                                        <tr>
                                            <td style="padding:4px" ><font face="verdana,arial" size=2>content syno 5</font></td>
                                            <td><input type="text" name="txtcontentsyno5" size="21"></td>
                                        </tr>

                                        <tr >
                                            <td style="padding:4px" ><font face="verdana,arial" size=2>content syno 6 </font></td>
                                            <td  ><input type="text" name="txtcontentsyno6" size="21"></td>

                                        </tr>
                                        <tr>
                                            <td style="padding:4px" ><font face="verdana,arial" size=2> content syno 7 </font></td>
                                            <td style="size:160" ><input type="text" name="txtcontentsyno7" size="21" ></td>
                                        </tr>
                                        <tr>
                                            <td style="padding:4px" ><font face="verdana,arial" size=2>content syno 8 </font></td>
                                            <td style="size:160" ><input type="text" name="txtcontentsyno8" size="21" ></td>
                                        </tr>
                                        <tr>
                                            <td style="padding:4px" ><font face="verdana,arial" size=2>content syno 9</font></td>
                                            <td><input type="text" name="txtcontentsyno9" size="21" value=""></td>
                                        </tr>
                                        <tr>
                                            <td style="padding:4px" ><font face="verdana,arial" size=2>content syno 10</font></td>
                                            <td><input type="text" name="txtcontentsyno10" size="21"></td>
                                        </tr>
                                        <tr>
                                            <td style="padding:4px" ><font face="verdana,arial" size=2>content syno 11</font></td>
                                            <td><input type="text" name="txtcontentsyno11" size="21"></td>
                                        </tr>

                                        <tr >
                                            <td style="padding:4px" ><font face="verdana,arial" size=2>content syno 12 </font></td>
                                            <td  ><input type="text" name="txtcontentsyno12" size="21"></td>

                                        </tr>
                                        <tr>
                                            <td style="padding:4px" ><font face="verdana,arial" size=2> content syno 13 </font></td>
                                            <td style="size:160" ><input type="text" name="txtcontentsyno13" size="21" ></td>
                                        </tr>
                                        <tr>
                                            <td style="padding:4px" ><font face="verdana,arial" size=2>content syno 14 </font></td>
                                            <td style="size:160" ><input type="text" name="txtcontentsyno14" size="21" ></td>
                                        </tr>
                                        <tr>
                                            <td style="padding:4px" ><font face="verdana,arial" size=2>content syno 15</font></td>
                                            <td><input type="text" name="txtcontentsyno15" size="21" value=""></td>
                                        </tr>
                                        <tr>
                                            <td style="padding:4px" ><font face="verdana,arial" size=2>content syno 16</font></td>
                                            <td><input type="text" name="txtcontentsyno16" size="21"></td>
                                        </tr>
                                        <tr>
                                            <td style="padding:4px" ><font face="verdana,arial" size=2>content syno 17</font></td>
                                            <td><input type="text" name="txtcontentsyno17" size="21"></td>
                                        </tr>

                                        <tr >
                                            <td style="padding:4px" ><font face="verdana,arial" size=2>content syno 18 </font></td>
                                            <td  ><input type="text" name="txtcontentsyno18" size="21"></td>

                                        </tr>
                                        <tr>
                                            <td style="padding:4px" ><font face="verdana,arial" size=2> content syno 19 </font></td>
                                            <td style="size:160" ><input type="text" name="txtcontentsyno19" size="21" ></td>
                                        </tr>
                                        <tr>
                                            <td style="padding:4px" ><font face="verdana,arial" size=2>content syno 20 </font></td>
                                            <td style="size:160" ><input type="text" name="txtcontentsyno20" size="21" ></td>
                                        </tr>
                                        <tr>
                                            <td style="padding:4px" ><font face="verdana,arial" size=2>content syno 21</font></td>
                                            <td><input type="text" name="txtcontentsyno21" size="21" value=""></td>
                                        </tr>
                                        <tr>
                                            <td style="padding:4px" ><font face="verdana,arial" size=2>content syno 22</font></td>
                                            <td><input type="text" name="txtcontentsyno22" size="21"></td>
                                        </tr>
                                        <tr>
                                            <td style="padding:4px" ><font face="verdana,arial" size=2>content syno 23</font></td>
                                            <td><input type="text" name="txtcontentsyno23" size="21"></td>
                                        </tr>

                                        <tr >
                                            <td style="padding:4px" ><font face="verdana,arial" size=2>content syno 24 </font></td>
                                            <td  ><input type="text" name="txtcontentsyno24" size="21"></td>

                                        </tr>
                                        <tr>
                                            <td style="padding:4px" ><font face="verdana,arial" size=2> content syno 25 </font></td>
                                            <td style="size:160" ><input type="text" name="txtcontentsyno25" size="21" ></td>
                                        </tr>


                                        <tr >
                                            <td>&nbsp;</td>
                                            <td style="padding:4px"><input style="padding:4px" type="submit" value="Save">
                                            <input style="padding:4px" type="button" value="Cancel" name="btnCancel" onclick="javascript:location.href='managecontent.php'"></td>
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

