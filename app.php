<?php

session_start();

require_once("../Database/App_functions.php");
require_once "../Database/preferences.php";
require_once "../Database/limit_share.php";


$ace = $_SESSION['login'];
if (isset($_POST["submit"])) {
for($i = 1;$i <= 5;$i++){
$obj = new preferences($_POST,$i);
$ob = new ShareLimit($_POST,$i);
if($ob->limit()){
 if($obj->insertion()) {
   echo "Success"."<br>";
}
}
else {
  echo "Time already selected"."<br>";
}
}
}


if (isset($_POST['logout'])) {
session_destroy();
header('Location: index.html');
}
?>

<html>
<head>
<script type="text/javascript" src = '../Validation/app.js'></script>
      <link href = "../Media/app.css" rel = "stylesheet">
</head>
<body >
<form  method = "POST" action = "">
<button class = "a" type = "submit"  name = "logout" >Logout</button>
    <table width= 1000 align="center" cellspacing="15" bgcolor="#E6E6FA" id = 'table'>
        <tr>
            <th># Day #</th>
            <th># Gender #</th>
            <th># Time #</th>
            <th># Source #</th>
            <th># Destination #</th>
            <th># No.of Persons #</th>
        </tr>

        <tr id = "day1" name = "day1" >
            <td align="center">Monday</td>

            <td align="center">
                Male :
                <input type="radio" name="gender1" id="male1" value = "male" /> Female :
                <input type="radio" name="gender1" id="female1" value = "female"/>
                <div id = "gender_error1" style = "color:red" class="error_msg"></div>
            </td>
                
            <td align="center">
                <select id="time1" name="time1" >
                    <option>*time*</option>
                    <?php
               $numbers = time_hours(6, 24);
               foreach ($numbers as $number) {
          echo "<option value = '$number'>$number</option>";
    }

               ?>
                </select>
            <div id = "time_error1" style = "color:red" class='error_msg'></div>
            </td>

            <td align="center">
                <select id="start1" name="start1">
                <option>*Source*</option>
                    <?php
               $query = start_place();
               while ($row = mysqli_fetch_array($query)) {         
        $id = $row['id'];
        $place = $row['place'];        
	echo "<option value = '$id'>$place</option>";
    }  
  
	       ?>
                </select>
<div id = "source_error1" style = "color:red" class='error_msg'></div>
            </td>

            <td align="center">
                <select id="end1" name="end1">
                <option>*Destiny*</option>
                    <?php
               $query = end_place();
               while ($row = mysqli_fetch_array($query)) {         
        $id = $row['id'];
        $place = $row['place'];        
	echo "<option value = '$id'>$place</option>";
    }  
               ?>
                </select>
<div id = "destiny_error1" style = "color:red" class='error_msg'></div>
            </td>

            <td align="center">
                <select id="capacity1" name="capacity1">
                 <option>*capacity*</option>
                    <?php
               $numbers = capacity(2,8);
               foreach ($numbers as $number) {              
        echo "<option value = '$number'>$number</option>";
    }
               ?>
                </select>
<div id = "capacity_error1" style = "color:red" class='error_msg'></div>
            </td>

        </tr>
        <tr id = 'row_B'>
            <td align="center">Tuesday</td>

            <td align="center">
                Male :
                <input type="radio" name="gender2" id="male2" value="male" /> Female :
                <input type="radio" name="gender2" id="female2" value="female" />
<div id = "gender_error2" style = "color:red" class='error_msg'></div>            
</td>

            <td align="center">
                <select id="time2" name="time2">
                    <option>*time*</option>
                    <?php
               $numbers = time_hours(6, 24);
               foreach ($numbers as $number) {
          echo "<option value = '$number'>$number</option>";
    }
               ?>
                </select>
<div id = "time_error2" style = "color:red" class='error_msg'></div>
            </td>

            <td align="center">
                <select id="start2" name="start2">
                    <option>*Source*</option>
                    <?php
               $query = start_place();
               while ($row = mysqli_fetch_array($query)) {         
        $id = $row['id'];
        $place = $row['place'];        
	echo "<option value = '$id'>$place</option>";
    }  
	       ?>
                </select>
<div id = "source_error2" style = "color:red" class='error_msg'></div>
            </td>

            <td align="center">
                <select id="end2" name="end2">
                    <option>*Destiny*</option>
                    <?php
               $query = end_place();
               while ($row = mysqli_fetch_array($query)) {         
        $id = $row['id'];
        $place = $row['place'];        
	echo "<option value = '$id'>$place</option>";
    }  
               ?>
                </select>
<div id = "destiny_error2" style = "color:red" class='error_msg'></div>
            </td>

            <td align="center">
                <select id="capacity2" name="capacity2">
                    <option>*capacity*</option>
                    <?php
               $numbers = capacity(2,8);
               foreach ($numbers as $number) {              
        echo "<option value = '$number'>$number</option>";
    }
               ?>
                </select>
<div id = "capacity_error2" style = "color:red" class='error_msg'></div>
            </td>

        </tr>
        <tr id = 'row_C'>
            <td align="center">Wednesday</td>

            <td align="center">
                Male :
                <input type="radio" name="gender3" id="male3" value="male" /> Female :
                <input type="radio" name="gender3" id="female3" value="female" />
<div id = "gender_error3" style = "color:red" class='error_msg'></div>
            </td>

            <td align="center">
                <select id="time3" name="time3">
                    <option>*time*</option>
                    <?php
               $numbers = time_hours(6, 24);
               foreach ($numbers as $number) {
          echo "<option value = '$number'>$number</option>";
    }
               ?>
                </select>
<div id = "time_error3" style = "color:red" class='error_msg'></div>
            </td>

            <td align="center">
                <select id="start3" name="start3">
                    <option>*Source*</option>
                    <?php
               $query = start_place();
               while ($row = mysqli_fetch_array($query)) {         
        $id = $row['id'];
        $place = $row['place'];        
	echo "<option value = '$id'>$place</option>";
    }  
	       ?>
                </select>
<div id = "source_error3" style = "color:red" class='error_msg'></div>
            </td>

            <td align="center">
                <select id="end3" name="end3">
                    <option>*Destiny*</option>
                    <?php
               $query = end_place();
               while ($row = mysqli_fetch_array($query)) {         
        $id = $row['id'];
        $place = $row['place'];        
	echo "<option value = '$id'>$place</option>";
    }  
               ?>
                </select>
<div id = "destiny_error3" style = "color:red" class='error_msg'></div>
            </td>

            <td align="center">
                <select id="capacity3" name="capacity3">
                    <option>*capacity*</option>
                    <?php
              $numbers = capacity(2,8);
               foreach ($numbers as $number) {              
        echo "<option value = '$number'>$number</option>";
    }
               ?>
                </select>
<div id = "capacity_error3" style = "color:red" class='error_msg'></div>
            </td>

        </tr>
        <tr id = 'row_D'>
            <td align="center">Thursday</td>

            <td align="center">
               Male :
                <input type="radio" name="gender4" id="male4" value="male" /> Female :
                <input type="radio" name="gender4" id="female4" value="female" />
<div id = "gender_error4" style = "color:red" class='error_msg'></div>
            </td>

            <td align="center">
                <select id="time4" name="time4">
                    <option>*time*</option>
                    <?php
               $numbers = time_hours(6, 24);
               foreach ($numbers as $number) {
          echo "<option value = '$number'>$number</option>";
    }
               ?>
                </select>
<div id = "time_error4" style = "color:red" class='error_msg'></div>
            </td>

            <td align="center">
                <select id="start4" name="start4">
                    <option>*Source*</option>
                    <?php
               $query = start_place();
               while ($row = mysqli_fetch_array($query)) {         
        $id = $row['id'];
        $place = $row['place'];        
	echo "<option value = '$id'>$place</option>";
    }  
	       ?>
                </select>
<div id = "source_error4" style = "color:red" class='error_msg'></div>
            </td>

            <td align="center">
                <select id="end4" name="end4">
                    <option>*Destiny*</option>
                    <?php
               $query = end_place();
               while ($row = mysqli_fetch_array($query)) {         
        $id = $row['id'];
        $place = $row['place'];        
	echo "<option value = '$id'>$place</option>";
    }  
               ?>
                </select>
<div id = "destiny_error4" style = "color:red" class='error_msg'></div>
            </td>

            <td align="center">
                <select id="capacity4" name="capacity4">
                    <option>*capacity*</option>
                    <?php
              $numbers = capacity(2,8);
               foreach ($numbers as $number) {              
        echo "<option value = '$number'>$number</option>";
    }
               ?>
                </select>
<div id = "capacity_error4" style = "color:red" class='error_msg'></div>
            </td>

        </tr>
        <tr id = 'row_E' ">
            <td align="center">Friday</td>

            <td align="center">
                Male :
                <input type="radio" name="gender5" id="male5" value="male" /> Female :
                <input type="radio" name="gender5" id="female5" value="female" />
<div id = "gender_error5" style = "color:red" class='error_msg'></div>
            </td>

            <td align="center">
                <select id="time5" name="time5">
                    <option>*time*</option>
                    <?php
              $numbers = time_hours(6, 24);
               foreach ($numbers as $number) {
          echo "<option value = '$number'>$number</option>";
    }
               ?>
                </select>
<div id = "time_error5" style = "color:red" class='error_msg'></div>
            </td>

            <td align="center">
                <select id="start5" name="start5">
                    <option>*Source*</option>
                    <?php
               $query = start_place();
               while ($row = mysqli_fetch_array($query)) {         
        $id = $row['id'];
        $place = $row['place'];        
	echo "<option value = '$id'>$place</option>";
    }  
	       ?>
                </select>
<div id = "source_error5" style = "color:red" class='error_msg'></div>
            </td>

            <td align="center">
                <select id="end5" name="end5">
                    <option>*Destiny*</option>
                    <?php
               $query = end_place();
               while ($row = mysqli_fetch_array($query)) {         
        $id = $row['id'];
        $place = $row['place'];        
	echo "<option value = '$id'>$place</option>";
    }  
               ?>
                </select>
<div id = "destiny_error5" style = "color:red" class='error_msg'></div>
            </td>

            <td align="center">
                <select id="capacity5" name="capacity5">
                    <option>*capacity*</option>
                    <?php
              $numbers = capacity(2,8);
               foreach ($numbers as $number) {              
        echo "<option value = '$number'>$number</option>";
    }

               ?>
                </select>
<div id = "capacity_error5" style = "color:red" class='error_msg'></div>
            </td>

        </tr>
        <tr><td></td><td></td><td></td><td></td><td></td>
           <td align="center"><input type = 'submit' name = "submit" onClick= "return iterate()" ></td>
        </tr>

    </table>
     
</form>
</body>
</html>

