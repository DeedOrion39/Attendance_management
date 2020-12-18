<?php ob_start(); ?>
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
                margin-left:500px;
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
    <?php
    include 'connection.php';
    $stu="select max(student_id) as number from studentdata;";
    $res=mysqli_query($con,$stu);
    $row=mysqli_fetch_array($res);
    ?>
    <body>
        <img src="VesitLogo.png" alt="Vesit Logo" height="60" width="80">
        <span id="vesit_full"><span class="tab"></span> Vivekanad Education Society's Institute of Technology</span>
        <ul class="nav">
           <li><a href="homepage_admin.php">HOME</a></li>
            <li><a href="manage_student_homepage.php">MANAGE STUDENT</a></li>
            <li style="float:right"><img src="profilepic.jpg" id="Profile" ></li>
            <li style="float:right">
                <div class="search-container">
                    <form >
                        <input type="text" placeholder="Search.." name="search">
                        <button type="submit"><i class="fa fa-search"></i></button>
                    </form>
                </div>
            </li>
        </ul>
        <form method="POST">
            <div class="rows">
                <label>Student Id  :</label>
                <input readonly style="margin-left:38px;margin-right:100px; height:22px;" name="Student_Id" placeholder="" required="Please fill this" value="<?php echo $row['number']+1;?>">
                <label for="Email">Email  :</label>
                <input style="margin-left:111px;margin-right:100px; height:22px;" type="Email" name="VES_Mail" id="email" placeholder="name.surname@ves.ac.in" required="Please fill this">
            </div>
            <div class="rows">
                <label >Roll Number  :</label>
                <input style="margin-left:10px;margin-right:100px; height:22px;" name="Roll_Number" placeholder="" required="Please fill this">
                <label>Password  :</label>
                <input style="margin-left:76px;margin-right:100px; height:22px;" type="Password" name="Password" placeholder="password" required="please fill this">
            </div>
            <div class="rows">
                <label>Full Name  :</label>
                <input style="margin-left:36px;margin-right:100px; height:22px;" name="Full_Name" placeholder="" required="please fill this">
                <label >Mobile Number  :</label>
                <input style="margin-left:10px;margin-right:100px; height:22px;" name="Mobile_Number" placeholder="" required="Please fill this">
            </div>
        
            <div class="rows" style="overflow-x: auto;">
                <span >
                <label>Branch  :</label>
                <select class="drpdwn" style="margin-left:70px;margin-right:100px; height:28px;width:178px;display:inline-block;" name="Branch" id="Branch" required="Please fill this" size=1 >
                    <option disabled selected>Select Branch</option>
                    <option value="CMPN">CMPN</option>
                    <option value="INFT">INFT</option>
                    <option value="EXTC">EXTC</option>
                    <option value="ETRX">ETRX</option>
                    <option value="INST">INST</option>
                </select>
                </span>
                <span >
                <label>Class  :</label>
                <select class="drpdwn" style="margin-left:115px;margin-right:100px; height:28px;width:178px;display:inline-block; " name="Class"  required="Please fill this" size=1 >
                    <option disabled selected>Select Class</option>
                    <option value="D7A">D7A</option>
                    <option value="D7B">D7B</option>
                    <option value="D7C">D7C</option>
                </select>
                </span>
            </div>
          
            <div class="rows" style="overflow-x: auto;">
                <span>
                <label>Year  :</label>
                <select class="drpdwn" style="margin-left:95px;margin-right:100px; height:28px;width:178px; display:inline-block;" name="Year"  required="Please fill this" size=1 >
                    <option disabled selected>Select Year</option>
                    <option value="FE">FE</option>
                    <option value="SE">SE</option>
                    <option value="TE">TE</option>
                    <option value="BE">BE</option>
                </select>
                </span>
                <span >
                <label >Gender  :</label>
                <select class="drpdwn" style="margin-left:98px;margin-right:100px;height:28px;width:178px;display:inline-block; " name="Gender"  required="Please fill this" size=1 >
                    <option disabled selected>Select gender</option>
                    <option value="Male">Male</option>
                    <option value="Female">Female</option>
                    <option value="Other">Other</option>
                </select>
                </span>
            </div>
            
            <div class="rows">
                <label>Semester  :</label>
                <select class="drpdwn" style="margin-left:50px;margin-right:100px; height:28px;width:178px;" name="Sem"  required="Please fill this" size=1 >
                    <option disabled selected>Select Semester</option>
                    <option value="I">I</option>
                    <option value="II">II</option>
                    <option value="III">III</option>
                    <option value="IV">IV</option>
                    <option value="V">V</option>
 					<option value="VI">VI</option>
                    <option value="VII">VII</option>
                    <option value="VII">VIII</option>     

                </select>
                
                <label >Date of Birth  :</label>
                <input type="date" style="margin-left:40px;margin-right:100px;height:26px;width:172px;display:inline-block; " name="DOB" placeholder="DD-MM-YYYY" required="Please fill this">
            </div>
            
            <div class="rows" >
                <label >Address  :</label>
                <textarea style="margin-left:50px;margin-right:100px; " name="Address" rows="5" cols="90" placeholder="" required="Please fill this"></textarea>
            </div>
        
    	<div>
        <center>
            <input class="switch" name="submit" type="submit" value="ADD">
            

        </center>
    	</div>
    	</form>
       
    </body>
</html>
	<?php
    if(isset($_POST['Student_Id']))
    {$student_id = $_POST['Student_Id'];
    $mail = $_POST['VES_Mail'];
    $roll_no =$_POST['Roll_Number'];
    $pass = $_POST['Password'];
    $fname = $_POST['Full_Name'];
    $mob = $_POST['Mobile_Number'];
    $branch = $_POST['Branch'];
    $class = $_POST['Class'];
    $year = $_POST['Year'];
    $gender = $_POST['Gender'];
    $sem = $_POST['Sem'];
    $dob = $_POST['DOB'];
    $address = $_POST['Address'];
}
    if(isset($_POST['submit']))
    { 
    $query= "INSERT INTO studentdata(student_id, roll_no, full_name, branch, year, semester,email, password, Mobile_no, class, gender, DOB, address) VALUES ('$student_id','$roll_no','$fname','$branch','$year','$sem','$mail','$pass','$mob','$class','$gender','$dob','$address')";
    $ros=mysqli_query($con,$query);
    if($ros)
    { 
        
         header('location: http://localhost/project/manage_student_homepage.php');
        echo "<script> alert('data was inserted');</script>";
        ob_enf_fluch();
    }
    else
    {
        
         header('location: http://localhost/project/manage_student_homepage.php');
       echo "<script> alert('data was  not inserted id is already taken');</script>";
        ob_enf_fluch();
    }
    }
        
    ?>
    
    


<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <title></title>
</head>
<body>

</body>
</html>