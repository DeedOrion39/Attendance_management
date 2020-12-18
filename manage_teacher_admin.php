<!DOCTYPE html>
<html lang-"en-US">
    <head>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <style>
            #vesit_full{
                font-size: 30px; 
                vertical-align:20px;
            }
            .tab{
                display:inline-block;
                margin-left:300px;
            }
            li{
                float:left;
            }
            li a{
                display:block;
                color:blue;
                text-align: center;
                padding:16px;
                text-decoration: none;
            }
            li a:hover{
                background-color: orange;
            }
            #Profile{
                display:block;
                padding:3px;
                background-color:#F9D815;
                border:2px solid black;
                height:40px;
                width: 40px;
            }
            .nav{
                list-style-type:none;
                margin:0;
                padding:0;
                overflow:hidden;
                background-color:#F9D815;
            }
            .nav input[type=text] {
                padding: 6px;
                margin-top: 8px;
                font-size: 17px;
                border: 1px solid black;
            }

            .nav .search-container button {
                float: right;
                padding: 6px 10px;
                margin-top: 8px;
                margin-right: 16px;
                background: #ddd;
                font-size: 17px;
                border:1px solid black;
                cursor: pointer;
            }

            .nav .search-container button:hover {
                background: #ccc;
            }

            .rows{
                margin-top:30px;
                margin-left:780px;
                margin-right:10px;
                font-size:25px;

            }

            .switch{
                margin-top:70px;
                margin-left:10px;
                margin-right:10px;
                border:1px solid black;
                height:80px;
                width:200px;
                font-size:30px;
                cursor: pointer;
            }

        </style>
    </head>
    
    <body>
        <img src="VesitLogo.png" alt="Vesit Logo" height="60" width="80">
        <span id="vesit_full"><span class="tab"></span> Vivekanad Education Society's Institute of Technology</span>
        <ul class="nav">
            <li><a href="file:///D:/Academics/SE%20Project/HTML/homepage_admin.html">HOME</a></li>
            <li><a href="file:///D:/Academics/SE%20Project/HTML/manage_teacher_admin.html">MANAGE TEACHER</a></li>
            <li style="float:right"><img src="profilepic.jpg" id="Profile" ></li>
            <li style="float:right">
                <div class="search-container">
                    <form>
                        <input type="text" placeholder="Search.." name="search">
                        <button type="submit"><i class="fa fa-search"></i></button>
                    </form>
                </div>
            </li>
        </ul>
        <form method = "POST">
			<div class="rows">
				<label>Teacher Id  :</label>
				<input readonly style="margin-left:65px; height:22px;" name="Teacher_Id"  placeholder="" required="Please fill this">
			</div>
			<div class="rows">
				<label>Full Name  :</label>
				<input style="margin-left:65px; height:22px" name="Full_Name" placeholder="" required="please fill this">
			</div>
            <div class="rows">
				<label >Mobile Number  :</label>
				<input style="margin-left:10px; height:22px" name="Mobile_Number" placeholder="" required="Please fill this">
			</div>
            <div class="rows">
				<label>Subject  :</label>
                
                <select class="drpdwn" style="margin-left:96px;margin-right:100px;margin-top:-30px; height:28px;width:178px;diplay:inline-block;" name="Subject" id="Subject" required="Please fill this" size=1 >
                    <option disabled selected>Select Subject</option>
                    <option value="AM">AM</option>
                    <option value="DSGT">DSGT</option>
                    <option value="DS">DS</option>
                    <option value="DLCOA">DLCOA</option>
                    <option value="CG">CG</option>
                    <option value="OOPM">OOPM</option>
                </select>
                
			</div>
            <div class="rows">
				<label>Class  :</label>
                
                <select class="drpdwn" style="margin-left:115px;margin-right:100px; height:28px;width:178px;diplay:inline-block;" name="Class" id="Division" required="Please fill this" size=1 >
                    <option disabled selected>Select Class</option>
                    <option value="D7A">D7A</option>
                    <option value="D7B">D7B</option>
                    <option value="D7C">D7C</option>
                </select>
                
			</div>
            <div class="rows">
				<label for="Email">Email  :</label>
				<input style="margin-left:111px; height:22px" type="Email" name="VES_Mail" id="email" placeholder="name.surname@ves.ac.in" required="Please fill this">
			</div>
            <div class="rows">
				<label>Password  :</label>
				<input style="margin-left:75px; height:22px" type="Password" name="Password" placeholder="password" required="please fill this">
			</div>
		
        <center>
		
        <input class="switch" name="submit" type="submit" value="ADD">
		<input class="switch" name="edit" type="submit" value="EDIT">
            <input class="switch" name="delete" type="submit" value="DELETE">
        </center>
		</form>
    </body>
	<?php
    include 'connection.php';
    $teacher_Id = $_POST['Teacher_Id'];
    $mail = $_POST['VES_Mail'];
    $pass = $_POST['Password'];
    $fname = $_POST['Full_Name'];
    $mob = $_POST['Mobile_Number'];
    $class = $_POST['Class'];
	$subject= $_POST['Subject'];
    if(isset($_POST['submit']))
    { 
    $query= "insert into teacherdata (teacher_id,fullname,mob_no,subject,class,email,password) values('$teacher_Id','$fname','$mob','$subject','$class','$mail','$pass')";
    $ros=mysqli_query($con,$query);
    if($ros)
    { 
        echo "<script> alert('data was inserted');</script>";
    }
    else
    {
        echo "<script> alert('data was  not inserted id is already taken');</script>";
    }
    }
        
    
    if(isset($_POST['edit']))
    { 
    $query= "update teacherdata set fullname='$fname',mob_no='$mob',subject='$subject',class='$class',email='$mail',password='$pass' where teacher_id='$teacher_Id' ";
    $ros=mysqli_query($con,$query);
    if($ros)
    {
        echo "<script> alert('data was edited');</script>";
    }
    else
    {
        echo "<script> alert('student ID not found');</script>";
    }
    }
       
    if(isset($_POST['delete']))
    {
    $query= "DELETE FROM teacherdata WHERE teacher_Id='$teacher_Id';";
    $ros=mysqli_query($con,$query);
    if($ros)
    {
        echo "<script> alert('data was deleted');</script>";
    }
    else
    {
        echo "<script> alert('Student ID not found');</script>";
    }
    }
    ?>
</html>
