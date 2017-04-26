<?php
session_start();
include 'railway_db_config.php';

?>
<html>
<title>Railway reservation system</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="w3.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Allerta+Stencil">

<head>
<style>
#demo{
	float:right;
	margin-top:6cm;
	font-size:30px;
}
</style>
<script type="text/javascript">
    function ShowHideDiv(r1) {
        var textarea = document.getElementById("textarea");
        textarea.style.display = r1.checked ? "block" : "none";
    }
	function ShowHideDiv1(r2) {
        var textarea1 = document.getElementById("textarea1");
        textarea1.style.display = r2.checked ? "block" : "none";
    }
	function ShowHideDiv2(r3) {
        var textarea2 = document.getElementById("textarea2");
        textarea2.style.display = r3.checked ? "block" : "none";
    }
	function ShowHideDiv3(r4) {
        var textarea3 = document.getElementById("textarea3");
        textarea3.style.display = r4.checked ? "block" : "none";
    }
	function ShowHideDiv4(r5) {
        var textarea4 = document.getElementById("textarea4");
        textarea4.style.display = r5.checked ? "block" : "none";
    }
	function ShowHideDiv5(r6) {
        var textarea5 = document.getElementById("textarea5");
        textarea5.style.display = r6.checked ? "block" : "none";
    }
	function ShowHideDiv6(r7) {
        var textarea6 = document.getElementById("textarea6");
        textarea6.style.display = r7.checked ? "block" : "none";
    }
	function ShowHideDiv7(r8) {
        var textarea7 = document.getElementById("textarea7");
        textarea7.style.display = r8.checked ? "block" : "none";
    }
	function ShowHideDiv8(r9) {
        var textarea8 = document.getElementById("textarea8");
        textarea8.style.display = r9.checked ? "block" : "none";
    }
	function ShowHideDiv9(r10) {
        var textarea9 = document.getElementById("textarea9");
        textarea9.style.display = r10.checked ? "block" : "none";
    }
	function ShowHideDiv10(b1) {
        var textarea10 = document.getElementById("textarea10");
        textarea10.style.display = c1.checked ? "block" : "none";
    }
	function ShowHideDiv11(b2) {
        var textarea11 = document.getElementById("textarea11");
        textarea11.style.display = c2.checked ? "block" : "none";
    }
	function ShowHideDiv12(b3) {
        var textarea12 = document.getElementById("textarea12");
        textarea12.style.display = c3.checked ? "block" : "none";
    }
	function ShowHideDiv13(b4) {
        var textarea13 = document.getElementById("textarea13");
        textarea13.style.display = c4.checked ? "block" : "none";
    }
	function ShowHideDiv14(r11) {
        var textarea14 = document.getElementById("textarea14");
        textarea14.style.display = r11.checked ? "block" : "none";
    }
	function ShowHideDiv15(r12) {
        var textarea15 = document.getElementById("textarea15");
        textarea15.style.display = r12.checked ? "block" : "none";
    }
	function ShowHideDiv16(r13) {
        var textarea16 = document.getElementById("textarea16");
        textarea16.style.display = r13.checked ? "block" : "none";
    }
	function ShowHideDiv17(r14) {
        var textarea17 = document.getElementById("textarea17");
        textarea17.style.display = r14.checked ? "block" : "none";
    }
	function ShowHideDiv18(r15) {
        var textarea18 = document.getElementById("textarea18");
        textarea18.style.display = r15.checked ? "block" : "none";
    }
	function ShowHideDiv19(r16) {
        var textarea19 = document.getElementById("textarea19");
        textarea19.style.display = r16.checked ? "block" : "none";
    }
	function ShowHideDiv20(r17) {
        var textarea20 = document.getElementById("textarea20");
        textarea20.style.display = r17.checked ? "block" : "none";
    }
	function ShowHideDiv21(r18) {
        var textarea21 = document.getElementById("textarea21");
        textarea21.style.display = r18.checked ? "block" : "none";
    }
	function ShowHideDiv22(r19) {
        var textarea22 = document.getElementById("textarea22");
        textarea22.style.display = r19.checked ? "block" : "none";
    }
	function ShowHideDiv23(r20) {
        var textarea23 = document.getElementById("textarea23");
        textarea23.style.display = r20.checked ? "block" : "none";
    }
</script>
<script>
// Set the date we're counting down to
var countDownDate = new Date("May 19, 2017 15:37:25").getTime();

// Update the count down every 1 second
var x = setInterval(function() {

    // Get todays date and time
    var now = new Date().getTime();
    
    // Find the distance between now an the count down date
    var distance = countDownDate - now;
    
    // Time calculations for days, hours, minutes and seconds
    var days = Math.floor(distance / (1000 * 60 * 60 * 24));
    var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
    var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
    var seconds = Math.floor((distance % (1000 * 60)) / 1000);
    
    // Output the result in an element with id="demo"
    document.getElementById("demo").innerHTML = days + "d " + hours + "h "
    + minutes + "m " + seconds + "s ";
    
    // If the count down is over, write some text 
    if (distance < 0) {
        clearInterval(x);
        document.getElementById("demo").innerHTML = "EXPIRED";
    }
}, 1000);
</script>
</head>

<body background="background.jpg"  style="  background-position: center;
    background-size: cover;">
<style>
.w3-allerta {
  font-family: "Allerta Stencil", Sans-serif;
}
</style>
<div class="w3-container">

<header class="w3-container w3-card-2 w3-bar w3-center w3-allerta w3-xxxlarge" style="padding:20px 12px;position:fixed;top:0;overflow:auto; background-color:#000033;height:150px">


  
 
<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
  <td align="center" valign="top">
  <table width="970" border="0" cellspacing="0" cellpadding="0">
  <tr>
	<td width="90" height="130" align="center" ><img src="images.png" height="90px" width="90px" vspace="4" alt="Rail Logo"/></td>
		   <td width="718" align="center" valign="center">
			<p align="center"><b><FONT color="white" size="6">RAILWAY RESERVATION SYSTEM</font>
                </b>
				</td>
				
	</tr>
</table>
</table>
</header>
<div class="w3-top">
  <div class="w3-bar  " style="margin-top:150px;background-color:#00284d">
 </span></font><FONT color="white" size=2px>
			<font size ="2" face="Arial"><marquee scrolldelay= 170><img src="new.gif" alt"">Please help Indian railways and government of India in moving towards a digitized and cashless economy. Eradicate black money.|<img src="new.gif" alt"">Aadhar Card Verification For senior citizen Passengers.</marquee></font>


</FONT>

  </div>
</div>

</div>



<div class="w3-row">
<div class="w3-col w3-container " style="width:20%;margin-top:175px;"><div class="w3-sidebar w3-bar-block w3-card-2  "  style="margin-bottom:40px;background-color:  #000033">
<h3 class="w3-bar-item  " style="background-color:#004d4d;" ><FONT color="white" size="5"><b>ADMIN PROFILE</b></h3></FONT><FONT color="white" >
<p><i class="fa fa-briefcase fa-fw w3-margin-right w3-large w3-text-white"></i>NAME</p>
<p><i class="fa fa-envelope fa-fw w3-margin-right w3-large  w3-text-white"></i>ex@mail.com</p>
          
<p><form method="post"> 		  
<button type="submit" id="button4" value="Submit" name="att" class=" w3-button w3-teal w3-round-xxlarge">REFRESH</button></form></p>

<p><form method="post" action="logout.php"> 		  
<button type="submit" id="button4" value="Submit" name="logout" class=" w3-button w3-teal w3-round-xxlarge">LOGOUT</button></form></p>

</FONT>
</FONT>
</div></div>

<?php 

if (isset($_POST['att']))
{

	$sql="DELETE FROM `seat1` WHERE 1";
	$res=mysqli_query($conn,$sql);
	

$od=date("Y/m/d");
	$sql="SELECT * FROM `seat` WHERE 1";
	$res=mysqli_query($conn,$sql);
$flag=0;

while($row=mysqli_fetch_array($res))
	{
	$tn=$row['tno'];
	$s2="SELECT * FROM `train details` WHERE trainno='$tn' ";
	$r=mysqli_query($conn,$s2);
	$r1=mysqli_fetch_array($r);
	$in=$r1['inter'];
	$in1=unserialize($in);
	$sz=sizeof($in1);
	$a1=$row['1A'];
	$b1=$row['2A']; 
	$c1=$row['3A'];
	$d1=$row['SL'];
	$a=array();
	$b=array();
	$c=array();
	$d=array();
	

for($y=0;$y<$sz;$y++)
{$a[]=$a1;
	$b[]=$b1;
	$c[]=$c1;; 
$d[]=$d1;
}
$a2=serialize($a); 
$b2=serialize($b); 
$c2=serialize($c);
 $d2=serialize($d);
 $in2=serialize($in1);
 
 
	for($j=0;$j<30;$j++)
	{
		$date=date('Y-m-d',strtotime($od."+".$j."day"));
		$s1="INSERT INTO `seat1`(`date`, `train_no`, `1A`, `2A`, `3A`, `SL`, `inter`) VALUES ('$date','$tn','$a2','$b2','$c2','$d2','$in')";
	$r9=mysqli_query($conn,$s1);}
}
	

}


 ?>
<p id="demo"></p>
<div class="w3-col w3-container  w3-allerta" style="height:400px;width:40%;margin-top:180px;margin-bottom:30px;">
<fieldset class=" w3-panel w3-topbar w3-bottombar w3-leftbar w3-rightbar w3-border-indigo w3-pale-indigo w3-round-xlarge" style="height:380px;margin-right:40px;margin-left:40px">




<div class="w3-container">
  <h2>SERVICES</h2>
  <p>
  <button onclick="document.getElementById('id01').style.display='block'" class="w3-button w3-block w3-grey">Add Boggies</button>

  <div id="id01" class="w3-modal">
    <div class="w3-modal-content w3-card-4">
      <header class="w3-container w3-teal"> 
        <span onclick="document.getElementById('id01').style.display='none'" 
        class="w3-button w3-display-topright">&times;</span>
        <h2>Add Boggies</h2>
      </header>
      <div class="w3-container">
<form method="post">
        <label><b>Train name </b></label>
          <input class="w3-input w3-border w3-margin-bottom" type="text" placeholder="Train name" name="tname" required>
		  <label><b>Train Number::</b></label>
         <?php  $sql= "SELECT * FROM `train details` WHERE 1";
									  $res=mysqli_query($conn,$sql);
 echo "<td> <select name='tno'  class='select_field' required>";
										while($row=mysqli_fetch_array($res))
                                       { echo "<option   >".$row['trainno']. "</option>";
									   }
                
echo "</select></label></br></br>";

		 ?>
		  

		 		  <label><b>Travel Class:</b></label>
		  </br>
		  <input type="checkbox" name="b1[]" value="1A" id="c1" onclick="ShowHideDiv10(this)">1A &nbsp <div id="textarea10" style="display: none"> No of seats:<input type="text" id="txt51" /></div>
		  <input type="checkbox" name="b1[]" value="2A" id="c2" onclick="ShowHideDiv11(this)">2A &nbsp <div id="textarea11" style="display: none"> No of seats:<input type="text" id="txt52" /></div>
		  <input type="checkbox" name="b1[]" value="3A" id="c3" onclick="ShowHideDiv12(this)">3A &nbsp <div id="textarea12" style="display: none"> No of seats:<input type="text" id="txt53" /></div>
		  <input type="checkbox" name="b1[]" value="SL" id="c4" onclick="ShowHideDiv13(this)">SL &nbsp <div id="textarea13" style="display: none"> No of seats:<input type="text" id="txt54" /></div>
		   </br>
		  
		  
<button type="submit" id="button4" value="Submit" name="addb" class=" w3-button w3-teal w3-round-xxlarge">SUBMIT</button>
</form>
      </div>
	  
 <?php
	  if (isset($_POST['addb']))
	  { 
	  $tname = $_POST['tname'];
	  $tno= $_POST['tno'];
	   echo "tno";
	  $A=$_POST['text51'];
	 $B=$_POST['text52'];
 	$C=$_POST['text53'];
	 $D=$_POST['text54'];

	   $sql="INSERT INTO seat (tno, tname, 1A,2A,3A,SL)  VALUES  ('$tno','$tname','$A','$B','$C','$D')" ;
       $query=mysqli_query($conn,$sql);
	   if(!$query)
echo "error";
	  }
	  
	  ?>

      <footer class="w3-container w3-teal">
       
      </footer>
    </div>
  </div>
</div>
       </p>   
		    
		  <div class="w3-container">
 
  <p>
  <button onclick="document.getElementById('id02').style.display='block'" class="w3-button w3-block w3-teal">Add Trains</button>

  <div id="id02" class="w3-modal">
    <div class="w3-modal-content w3-card-4">
      <header class="w3-container w3-teal"> 
        <span onclick="document.getElementById('id02').style.display='none'" 
        class="w3-button w3-display-topright">&times;</span>
       <h2>Add Trains</h2>
      </header>
      <div class="w3-container">
	  <form method="post">
        <label><b>Train Name: </b></label></td>
		
          <input class="w3-input w3-border w3-margin-bottom" type="text" placeholder="Train Name" name="trainname" required>
		  <label><b>Train Number: </b></label></td>
		<?php  $sql= "SELECT * FROM `train details` WHERE 1";
									  $res=mysqli_query($conn,$sql);
 echo "<td> <select name='tno'  class='select_field' required>";
										while($row=mysqli_fetch_array($res))
                                       { echo "<option   >".$row['trainno']. "</option>";
									   }
                
echo "</select></label></br></br>";
?>
		  <td width="80%"><label><b>Source Station: </b></label></td>
		  </br>
		  <tr>
		  <td>
                   <list> <select name="Boardingstation"  class="select_field">
                    <ol><li>  <option value="ROU" selected="selected">ROU</option></li>
                     <li> <option value="JSG">JSG</option></li>
                      <li><option value="SBP">SBP</option></li>
                     <li> <option value="BRG">BRG</option></li>
                      <li><option value="BLG">BLG</option></li>
                      <li> <option value="TIG">TIG</option> </li>
                      <li> <option value="KSG">KSG</option> </li>
			 <li> <option value="RGD">RGD</option> </li>
			 <li> <option value="LKM">LKM</option> </li>
			 <li> <option value="KRP">KRP</option> </li>
</ol>
</list>
                    </select>
                  </label></td>
          </tr>
		  </br>
		  </br>
		  <label><b>Destination Station: </b></label>
		 </br>
		 
		 <tr width="50%">
		  <td>
                   <list> <select name="deststation"  class="select_field">
                   <ol><li>  <option value="ROU" name="r1" >ROU</option></li>
                     <li> <option value="JSG" name="r2">JSG</option></li>
                      <li><option value="SBP" name="r3">SBP</option></li>
                     <li> <option value="BRG" name="r4">BRG</option></li>
                      <li><option value="BLG" name="r5">BLG</option></li>
                      <li> <option value="TIG" name="r6">TIG</option> </li>
                      <li> <option value="KSG" name="r7">KSG</option> </li>
			 <li> <option value="RGD" name="r8">RGD</option> </li>
			 <li> <option value="LKM" name="r9">LKM</option> </li>
			 <li> <option value="KRP" name="r10">KRP</option> </li>
</ol>
</list>
                    </select>
                  </label></td>
          </tr>
          </br>
		  </br>

		
		  <label><b>Intermediate Station:</b></label>
		  </br>
		  <input type="checkbox" name="interst[]" value="ROU" id="r11" onclick="ShowHideDiv14(this)">ROU &nbsp <div name="text1" id="textarea14" style="display: none"> Arrival time:<input name="text1" type="text" id="txt1" /></div>
		  <input type="checkbox" name="interst[]" value="JSG" id="r12" onclick="ShowHideDiv15(this)">JSG &nbsp <div name="text2" id="textarea15" style="display: none"> Arrival time:<input name="text2" type="text" id="txt2" /></div>
		  <input type="checkbox" name="interst[]" value="SBP" id="r13" onclick="ShowHideDiv16(this)">SBP &nbsp <div name="text3" id="textarea16" style="display: none"> Arrival time:<input name="text3" type="text" id="txt3" /></div>
		  <input type="checkbox" name="interst[]" value="BRG" id="r14" onclick="ShowHideDiv17(this)">BRG &nbsp <div name="text4" id="textarea17" style="display: none"> Arrival time:<input name="text4" type="text" id="txt4" /></div>
		  <input type="checkbox" name="interst[]" value="BLG" id="r15" onclick="ShowHideDiv18(this)">BLG &nbsp <div name="text5" id="textarea18" style="display: none"> Arrival time:<input name="text5" type="text" id="txt5" /></div>
		  <input type="checkbox" name="interst[]" value="TLG" id="r16" onclick="ShowHideDiv19(this)">TLG &nbsp <div name="text6" id="textarea19" style="display: none"> Arrival time:<input name="text6" type="text" id="txt6" /></div>
		  <input type="checkbox" name="interst[]" value="KSG" id="r17" onclick="ShowHideDiv20(this)">KSG &nbsp <div name="text7" id="textarea20" style="display: none"> Arrival time:<input name="text7" type="text" id="txt7" /></div>
		  <input type="checkbox" name="interst[]" value="RGD" id="r18" onclick="ShowHideDiv21(this)">RGD &nbsp <div name="text8" id="textarea21" style="display: none"> Arrival time:<input name="text8" type="text" id="txt8" /></div>
		  <input type="checkbox" name="interst[]" value="LKM" id="r19" onclick="ShowHideDiv22(this)">LKM &nbsp <div name="text9" id="textarea22" style="display: none"> Arrival time:<input name="text9" type="text" id="txt9" /></div>
		  <input type="checkbox" name="interst[]" value="KRP" id="r20" onclick="ShowHideDiv23(this)">KRP &nbsp <div name="text10" id="textarea23" style="display: none"> Arrival time:<input name="text10" type="text" id="txt10" /></div></br>
		  <label><b>Days of travelling:</b></label>
		  </br>
		  <input type="checkbox" name="d1[]" value="Sun">Sun</br>
		  <input type="checkbox" name="d1[]" value="Mon">Mon</br>
		  <input type="checkbox" name="d1[]" value="Tue">Tue</br>
		  <input type="checkbox" name="d1[]" value="Wed">Wed</br>
		  <input type="checkbox" name="d1[]" value="Thu">Thu</br>
		  <input type="checkbox" name="d1[]" value="Fri">Fri</br>
		  <input type="checkbox" name="d1[]" value="Sat">Sat</br>
		  </br>
		   <label><b>Travel Class:</b></label>
		  </br>
		  <input type="checkbox" name="b1[]" value="1A">1A</br>
		  <input type="checkbox" name="b1[]" value="2A">2A</br>
		  <input type="checkbox" name="b1[]" value="3A">3A</br>
		  <input type="checkbox" name="b1[]" value="SL">SL</br>
		   </br>
		  <button type="submit" id="button2" value="Submit" name="addt" class=" w3-button w3-teal w3-round-xxlarge">SUBMIT</button>
		</form>  
      </div>
	  <?php
	  if (isset($_POST['addt']))
	  { 
	  $tname = $_POST['trainname'];
	  $tno= $_POST['tno'];
	  $source = $_POST['Boardingstation'];
      $destn = $_POST['deststation'];
	  echo $destn;
	  $inter=$_POST['interst'];
	  $inter1 = serialize($inter); 
	  $days=$_POST['d1'];
	  $days = serialize($days); 
	  $class=$_POST['c1'];
	  $class = serialize($class); 
	  $t1=  $_POST['text1'];
	 $t2=  $_POST['text2'];
	 $t3=  $_POST['text3'];
	 $t4=  $_POST['text4'];
	 $t5=  $_POST['text5'];
	 $t6=  $_POST['text6'];
	 $t7=  $_POST['text7'];
	 $t8=  $_POST['text8'];
	 $t9=  $_POST['text9'];
	 $t10=  $_POST['text10'];
	 $at = array($t1 ,$t2,$t3,$t4,$t5,$t6,$t7,$t8,$t9,$t10);
	   $at1 = serialize($at); 
	   //echo $inter1;
	   //echo $destn;
	   $sql1="INSERT INTO `fare`(`train_no`, `1A`, `2A`, `3A`, `SL`) VALUES ('$tno','0','0','0','0')";
	   $sql="INSERT INTO `train details`(`trainno`, `train name`, `source`, `destination`, `inter`, `arrival`, `days`, `class`) VALUES ('$tno','$tname','$source','$destn','$inter1','$at1','$days','$class')";
       $query=mysqli_query($conn,$sql);
	         $query1=mysqli_query($conn,$sql1);
	   if(!$query)
echo "error";
	  }
	  
	  ?>
	
      <footer class="w3-container w3-teal">
       
      </footer>
    </div>
  </div>
</div>
</p>

<div class="w3-container">
 
  <p>
  <button onclick="document.getElementById('id03').style.display='block'" class="w3-button w3-block w3-grey">Update Fare Amount</button>

  <div id="id03" class="w3-modal">
    <div class="w3-modal-content w3-card-4">
      <header class="w3-container w3-teal"> 
        <span onclick="document.getElementById('id03').style.display='none'" 
        class="w3-button w3-display-topright">&times;</span>
       <h2>Revised Fare</h2>
      </header>
      <div class="w3-container">
	  <form method="post">
        </br><label><b>Train Number:
		<?php  $sql= "SELECT * FROM `train details` WHERE 1";
									  $res=mysqli_query($conn,$sql);
 echo "<td> <select name='tno'  class='select_field' required>";
										while($row=mysqli_fetch_array($res))
                                       { echo "<option   >".$row['trainno']. "</option>";
									   }
                
echo "</select></label></br></br>";

echo"<label><b>Travel Class:</b></label> </br></br>
		  <input type='text' name='b1'   placeholder='newfare per km'>1A</br>
		   <input type='text' name='b2'  placeholder='newfare per km'>2A</br>
		   <input type='text' name='b3'  placeholder='newfare per km'>3A</br>
		   <input type='text' name='b4'  placeholder='newfare per km'>SL</br>";
		 ?> 
		</b></label></br></br>
          
		 <button type="submit"  alt="Register" id="button2" value="Submit" name="fare" class=" w3-button w3-teal w3-round-xxlarge">SUBMIT</button>
    </form> <?php if (isset($_POST['fare']))
{$tno = $_POST['tno'];
echo "<script language='javascript'> alert('$tno')</script>";
$a= $_POST['b1'];
$b= $_POST['b2'];
$c= $_POST['b3'];
$d= $_POST['b4'];
$sql1="SELECT * FROM `fare` WHERE 1";
$q=mysqli_query($conn,$sql1);

$sql="UPDATE `fare` SET `1A`='$a',`2A`='$b',`3A`='$c',`SL`='$d' WHERE train_no='$tno'";
$query=mysqli_query($conn,$sql);
echo "<script language='javascript'> alert('Succesfully updated. Login Now');
window.location.href='admin.php'</script>"; }

?> </div>
      <footer class="w3-container w3-teal">
       
      </footer>
    </div>
  </div>
</div>

</p>

<div class="w3-container">
 <p>
  <button onclick="document.getElementById('id04').style.display='block'" class="w3-button w3-block w3-teal">Update Train Time Table</button>

  <div id="id04" class="w3-modal">
    <div class="w3-modal-content w3-card-4">
      <header class="w3-container w3-teal"> 
        <span onclick="document.getElementById('id04').style.display='none'" 
        class="w3-button w3-display-topright">&times;</span>
       <h2>Update train schedule</h2>
      </header>
      <div class="w3-container">
        <form method="post">
        <label><b>Train Name: </b></label></td>
		
          <input class="w3-input w3-border w3-margin-bottom" type="text" placeholder="Train Name" name="trainname" required>
		  <label><b>Train Number: </b></label></td>
	       <?php  $sql= "SELECT * FROM `train details` WHERE 1";
									  $res=mysqli_query($conn,$sql);
 echo "<td> <select name='tno'  class='select_field' required>";
										while($row=mysqli_fetch_array($res))
                                       { echo "<option   >".$row['trainno']. "</option>";
									   }
echo "</select></label></br></br>";
		 ?>
		  <td width="80%"><label><b>Source Station: </b></label></td>
		  </br>
		  <tr>
		  <td>
                   <list> <select name="Boardingstation"  class="select_field">
                    <ol><li>  <option value="ROU" selected="selected">ROU</option></li>
                     <li> <option value="JSG">JSG</option></li>
                      <li><option value="SBP">SBP</option></li>
                     <li> <option value="BRG">BRG</option></li>
                      <li><option value="BLG">BLG</option></li>
                      <li> <option value="TIG">TIG</option> </li>
                      <li> <option value="KSG">KSG</option> </li>
			 <li> <option value="RGD">RGD</option> </li>
			 <li> <option value="LKM">LKM</option> </li>
			 <li> <option value="KRP">KRP</option> </li>
</ol>
</list>
                    </select>
                  </label></td>
          </tr>
		  </br>
		  </br>
		  <label><b>Destination Station: </b></label>
		 </br>
		 
		 <tr width="50%">
		  <td>
                   <list> <select name="deststation"  class="select_field">
                   <ol><li>  <option value="ROU" name="r1" >ROU</option></li>
                     <li> <option value="JSG" name="r2">JSG</option></li>
                      <li><option value="SBP" name="r3">SBP</option></li>
                     <li> <option value="BRG" name="r4">BRG</option></li>
                      <li><option value="BLG" name="r5">BLG</option></li>
                      <li> <option value="TIG" name="r6">TIG</option> </li>
                      <li> <option value="KSG" name="r7">KSG</option> </li>
			 <li> <option value="RGD" name="r8">RGD</option> </li>
			 <li> <option value="LKM" name="r9">LKM</option> </li>
			 <li> <option value="KRP" name="r10">KRP</option> </li>
</ol>
</list>
                    </select>
                  </label></td>
          </tr>
          </br>
		  </br>

		
		   <label><b>Intermediate Station:</b></label>
		  </br>
		  <input type="checkbox" name="interst[]" value="ROU" id="r1" onclick="ShowHideDiv(this)">ROU &nbsp <div name="text1" id="textarea" style="display: none"> Arrival time:<input name="text1" type="text" id="txt1" /></div>
		  <input type="checkbox" name="interst[]" value="JSG" id="r2" onclick="ShowHideDiv1(this)">JSG &nbsp <div name="text2" id="textarea1" style="display: none"> Arrival time:<input name="text2" type="text" id="txt2" /></div>
		  <input type="checkbox" name="interst[]" value="SBP" id="r3" onclick="ShowHideDiv2(this)">SBP &nbsp <div name="text3" id="textarea2" style="display: none"> Arrival time:<input name="text3" type="text" id="txt3" /></div>
		  <input type="checkbox" name="interst[]" value="BRG" id="r4" onclick="ShowHideDiv3(this)">BRG &nbsp <div name="text4" id="textarea3" style="display: none"> Arrival time:<input name="text4" type="text" id="txt4" /></div>
		  <input type="checkbox" name="interst[]" value="BLG" id="r5" onclick="ShowHideDiv4(this)">BLG &nbsp <div name="text5" id="textarea4" style="display: none"> Arrival time:<input name="text5" type="text" id="txt5" /></div>
		  <input type="checkbox" name="interst[]" value="TLG" id="r6" onclick="ShowHideDiv5(this)">TLG &nbsp <div name="text6" id="textarea5" style="display: none"> Arrival time:<input name="text6" type="text" id="txt6" /></div>
		  <input type="checkbox" name="interst[]" value="KSG" id="r7" onclick="ShowHideDiv6(this)">KSG &nbsp <div name="text7" id="textarea6" style="display: none"> Arrival time:<input name="text7" type="text" id="txt7" /></div>
		  <input type="checkbox" name="interst[]" value="RGD" id="r8" onclick="ShowHideDiv7(this)">RGD &nbsp <div name="text8" id="textarea7" style="display: none"> Arrival time:<input name="text8" type="text" id="txt8" /></div>
		  <input type="checkbox" name="interst[]" value="LKM" id="r9" onclick="ShowHideDiv8(this)">LKM &nbsp <div name="text9" id="textarea8" style="display: none"> Arrival time:<input name="text9" type="text" id="txt9" /></div>
		  <input type="checkbox" name="interst[]" value="KRP" id="r10" onclick="ShowHideDiv9(this)">KRP &nbsp <div name="text10" id="textarea9" style="display: none"> Arrival time:<input name="text10" type="text" id="txt10" /></div></br>
		  <label><b>Days of travelling:</b></label>
		  </br>
		  <input type="checkbox" name="d1[]" value="Sun">Sun</br>
		  <input type="checkbox" name="d1[]" value="Mon">Mon</br>
		  <input type="checkbox" name="d1[]" value="Tue">Tue</br>
		  <input type="checkbox" name="d1[]" value="Wed">Wed</br>
		  <input type="checkbox" name="d1[]" value="Thu">Thu</br>
		  <input type="checkbox" name="d1[]" value="Fri">Fri</br>
		  <input type="checkbox" name="d1[]" value="Sat">Sat</br>
		  </br>
		  <button type="submit" id="button2" value="Submit" name="upt" class=" w3-button w3-teal w3-round-xxlarge">SUBMIT</button>
		</form>

  <?php
	  if (isset($_POST['upt']))
	  { 
	  $tname = $_POST['trainname'];
	  $tno= $_POST['tno'];
	    $days=$_POST['d1'];
	  $days = serialize($days); 

	  $t1=  $_POST['text1'];
	 $t2=  $_POST['text2'];
	 $t3=  $_POST['text3'];
	 $t4=  $_POST['text4'];
	 $t5=  $_POST['text5'];
	 $t6=  $_POST['text6'];
	 $t7=  $_POST['text7'];
	 $t8=  $_POST['text8'];
	 $t9=  $_POST['text9'];
	 $t10=  $_POST['text10'];

	 $at = array($t1 ,$t2,$t3,$t4,$t5,$t6,$t7,$t8,$t9,$t10);
	   $at1 = serialize($at); 
	   
	   $sql="update `train details` set `train no'= '$tno' , 'arrival'='$at1','days'='$days' where train no='$tno' ";
       $query=mysqli_query($conn,$sql);
	   if(!$query)
echo "error";
	  }
	  
	  ?>

<div data-role="footer" data-position="fixed">
<footer class="w3-container ">
<table>

<tr>
        <td align="center" valign="bottom">
		<table width="1500" border="0" cellspacing="0" cellpadding="0">
          <tr>
                   
            <td width="100%" align="left" valign="bottom" class="" style="background-color:#2473C7"><table width="100%" border="0" cellspacing="1" cellpadding="0">
                <tr>                  <td align="center" valign="bottom" class="main_footer_upper">
					<a href="home.html"  style="text-decoration: none">
					<font color="#FFFFFF">Home </font> </a> 
					<font color="#FFFFFF">|</font> 
					 
					<a href="know_Station_Code.html" onclick="resetButton()" style="text-decoration: none">
					<font color="#FFFFFF">Trains between  Stations</font></a> 
					<font color="#FFFFFF">|</font> 
					<a href="booking_Location.html" onclick="resetButton()" style="text-decoration: none">
					<font color="#FFFFFF">Booking Locations</font></a> 
					<font color="#FFFFFF">|</font> 
					
					<a href="faq.html"  onclick="resetButton()" style="text-decoration: none">
					<font color="#FFFFFF">FAQ</font></a> <font color="#FFFFFF">|</font> 
					 
					<a href="feedback.html" target="_blank" onclick="resetButton()" style="text-decoration: none">
					<font color="#FFFFFF">Feedback</font></a></td>
                </tr>
                <tr>
                  <td align="center" valign="top" class="copy_footer" style="padding-top:3px;"><span class="main_footer_copy"><a href="copyright.html"  onclick="resetButton()">
					<font color="#FFFFFF">Disclaimer</font></a></span><br />
                    <font color="#FFFFFF">Best viewed at 1024 x 768 resolution with Internet Explorer 5.0 or Mozila Firefox 3.5 and higher</font></td>
                </tr>
				</table>
	</tr>
</table>
</footer>
</div>
</div>
</div>

</body>

</html>