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
    $id=$_GET['search'];
    $stu="select * from studentdata where student_id={$id};";
    $result=mysqli_query($con,$stu);
    $data=mysqli_fetch_array($result);
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
            <?php
            if(isset($data))
            {?>
            <div class="rows">
                <label>Student Id  :</label>
                <input readonly style="margin-left:38px;margin-right:100px; height:22px;" name="Student_Id" placeholder="" required="Please fill this" value="<?php echo $data["student_id"];?>">
                <label for="Email">Email  :</label>
                <input style="margin-left:111px;margin-right:100px; height:22px;" type="Email" name="VES_Mail" id="email" placeholder="name.surname@ves.ac.in" required="Please fill this" value="<?php echo $data["email"];?>">
            </div>
            <div class="rows">
                <label >Roll Number  :</label>
                <input style="margin-left:10px;margin-right:100px; height:22px;" name="Roll_Number" placeholder="" required="Please fill this" value="<?php echo $data["roll_no"];?>">
                <label>Password  :</label>
                <input style="margin-left:76px;margin-right:100px; height:22px;" type="Password" name="Password" placeholder="password" required="please fill this" value="<?php echo $data["password"];?>" >
            </div>
            <div class="rows">
                <label>Full Name  :</label>
                <input style="margin-left:36px;margin-right:100px; height:22px;" name="Full_Name" placeholder="" required="please fill this" value="<?php echo $data["full_name"];?>">
                <label >Mobile Number  :</label>
                <input style="margin-left:10px;margin-right:100px; height:22px;" name="Mobile_Number" placeholder="" required="Please fill this" value="<?php echo $data["Mobile_no"];?>">
            </div>
        
            <div class="rows" style="overflow-x: auto;">
                <span >
                <label>Branch  :</label>
                <select class="drpdwn" style="margin-left:70px;margin-right:100px; height:28px;width:178px;display:inline-block;" name="Branch" id="Branch" required="Please fill this" size=1 value="<?php echo $data["branch"];?>">
                    <option disabled selected>Select Branch</option>
                    <option value="CMPN" <?php if($data["branch"]=="CMPN"):?>selected="selected"<?php endif; ?>>CMPN</option>
                    <option value="INFT" <?php if($data["branch"]=="INFT"):?>selected="selected"<?php endif; ?>>INFT</option>
                    <option value="EXTC" <?php if($data["branch"]=="EXTC"):?>selected="selected"<?php endif; ?>>EXTC</option>
                    <option value="ETRX" <?php if($data["branch"]=="ETRX"):?>selected="selected"<?php endif; ?>>ETRX</option>
                    <option value="INST" <?php if($data["branch"]=="INST"):?>selected="selected"<?php endif; ?>>INST</option>
                </select>
                </span>
                <span >
                <label>Class  :</label>
                <select class="drpdwn" style="margin-left:115px;margin-right:100px; height:28px;width:178px;display:inline-block; " name="Class"  required="Please fill this" size=1 >
                    <option disabled selected>Select Class</option>
                    <option value="D7A" <?php if($data["class"]=="D7A"):?>selected="selected"<?php endif; ?>>D7A</option>
                    <option value="D7B" <?php if($data["class"]=="D7B"):?>selected="selected"<?php endif; ?>>D7B</option>
                    <option value="D7C" <?php if($data["class"]=="D7C"):?>selected="selected"<?php endif; ?>>D7C</option>
                </select>
                </span>
            </div>
          
            <div class="rows" style="overflow-x: auto;">
                <span>
                <label>Year  :</label>
                <select class="drpdwn" style="margin-left:95px;margin-right:100px; height:28px;width:178px; display:inline-block;" name="Year"  required="Please fill this" size=1 >
                    <option disabled selected>Select Year</option>
                    <option value="FE" <?php if($data["year"]=="FE"):?>selected="selected"<?php endif; ?>>FE</option>
                    <option value="SE" <?php if($data["year"]=="SE"):?>selected="selected"<?php endif; ?>>SE</option>
                    <option value="TE" <?php if($data["year"]=="TE"):?>selected="selected"<?php endif; ?>>TE</option>
                    <option value="BE" <?php if($data["year"]=="BE"):?>selected="selected"<?php endif; ?>>BE</option>
                </select>
                </span>
                <span >
                <label >Gender  :</label>
                <select class="drpdwn" style="margin-left:98px;margin-right:100px;height:28px;width:178px;display:inline-block; " name="Gender"  required="Please fill this" size=1 >
                    <option disabled selected>Select gender</option>
                    <option value="Male" <?php if($data["gender"]=="Ma"):?>selected="selected"<?php endif; ?>>Male</option>
                    <option value="Female" <?php if($data["gender"]=="Fe"):?>selected="selected"<?php endif; ?>>Female</option>
                    <option value="Other" <?php if($data["gender"]=="Ot"):?>selected="selected"<?php endif; ?>>Other</option>
                </select>
                </span>
            </div>
            
            <div class="rows">
                <label>Semester  :</label>
                <select class="drpdwn" style="margin-left:50px;margin-right:100px; height:28px;width:178px;" name="Sem"  required="Please fill this" size=1 >
                    <option disabled selected>Select Semester</option>
                    <option value="I" <?php if($data["semester"]=="I"):?>selected="selected"<?php endif; ?>>I</option>
                    <option value="II" <?php if($data["semester"]=="II"):?>selected="selected"<?php endif; ?>>II</option>
                    <option value="III" <?php if($data["semester"]=="III"):?>selected="selected"<?php endif; ?>>III</option>
                    <option value="IV" <?php if($data["semester"]=="IV"):?>selected="selected"<?php endif; ?>>IV</option>
                    <option value="V" <?php if($data["semester"]=="V"):?>selected="selected"<?php endif; ?>>V</option>
 					<option value="VI" <?php if($data["semester"]=="VI"):?>selected="selected"<?php endif; ?>>VI</option>
                    <option value="VII" <?php if($data["semester"]=="VII"):?>selected="selected"<?php endif; ?>>VII</option>
                    <option value="VIII" <?php if($data["semester"]=="VIII"):?>selected="selected"<?php endif; ?>>VIII</option>     

                </select>
                
                <label >Date of Birth  :</label>
                <input type="date" style="margin-left:40px;margin-right:100px;height:26px;width:172px;display:inline-block; " name="DOB" placeholder="DD-MM-YYYY" required="Please fill this" value="<?php echo $data["DOB"];?>">
            </div>
            
            <div class="rows" >
                <label >Address  :</label>
                <textarea style="margin-left:50px;margin-right:100px; " name="Address" rows="5" cols="90" placeholder="" required="Please fill this" ><?php echo $data["address"];?></textarea>
            </div>
        
    	<div>
        <center>
            
            <input class="switch" name="edit" type="submit" value="EDIT">
           <input class="switch" name="delete" type="submit" value="DELETE">

        </center>
    	</div>
    <?php }?>
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
    if(isset($_POST['edit']))
    { 
    $query= "UPDATE studentdata SET roll_no= '$roll_no',full_name= '$fname', branch= '$branch',year='$year',semester= '$sem',email= '$mail',password='$pass', Mobile_no = '$mob',class= '$class',gender='$gender',DOB= '$dob',address='$address' WHERE student_id= $student_id";
    $ros=mysqli_query($con,$query);
    if($ros)
    {   header('location: http://localhost/project/manage_student_homepage.php');
        echo "<script> alert('data was edited');</script>";
        ob_enf_fluch();
    }
    else
    {   header('location: http://localhost/project/manage_student_homepage.php');
        echo "<script> alert('student ID not found');</script>";
        ob_enf_fluch();
    }
    }
    if(isset($_POST['delete']))
    {
    $query= "DELETE FROM studentdata WHERE student_id=$student_id";
    $ros=mysqli_query($con,$query);
    if($ros)
    {   mysqli_close($con);
        header('location: http://localhost/project/manage_student_homepage.php');
        echo "<script> alert('data was deleted');</script>";
        ob_enf_fluch();
        
    }
    else
    {   header('location: http://localhost/project/manage_student_homepage.php');
        echo "<script> alert('Student ID not found');</script>";
        ob_enf_fluch();
    }
    }
    ?>
   
?>