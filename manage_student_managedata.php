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

            .req_id{
                font-size:25px;
            }

            #all{
                display:none;
            }

            .rows{
                margin-top:30px;
                margin-left:100px;
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
            <li><a href="homepage_admin.html">HOME</a></li>
            <li><a href="manage_student_homepage.html">MANAGE STUDENT</a></li>
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
        <script>
        function show() {
        var x = document.getElementById("all");
        if (x.style.display == "none") {
        x.style.display = "block";
        } else {
        x.style.display = "none";
        }
        }
        </script>
        <form method="GET" action="exp3.php">
            <br><br>
            <center>
            <div  class="req_id">
            <label for="student_id">Student ID:</label>
            <input type="number" id="student_id" style="margin-left:38px;margin-right:100px; height:22px;" placeholder="enter student id" required="Please fill this" name="search">
            <input style="margin-left:-2%; height:25px;width:80px;font-size:15px;" type="submit" name="subid" value="SUBMIT" onclick="show()">
            </div>
        <div id="all">
			<div class="rows">
				<label>Student Id  :</label>
				<input style="margin-left:38px;margin-right:100px; height:22px;" name="Student Id" placeholder="" required="Please fill this">
				<label for="Email">Email  :</label>
				<input style="margin-left:111px;margin-right:100px; height:22px;" type="Email" name="VES Mail" id="email" placeholder="name.surname@ves.ac.in" required="Please fill this">
			</div>
            <div class="rows">
				<label >Roll Number  :</label>
				<input style="margin-left:10px;margin-right:100px; height:22px;" name="Roll Number" placeholder="" required="Please fill this">
				<label>Password  :</label>
				<input style="margin-left:76px;margin-right:100px; height:22px;" type="Password" name="Password" placeholder="password" required="please fill this">
			</div>
            <div class="rows">
				<label>Full Name  :</label>
				<input style="margin-left:36px;margin-right:100px; height:22px;" name="Full Name" placeholder="" required="please fill this">
				<label >Mobile Number  :</label>
				<input style="margin-left:10px;margin-right:100px; height:22px;" name="Mobile Number" placeholder="" required="Please fill this">
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
            
            <div  class="rows" >
                <label style="margin-top:-30px;">Address  :</label>
                <textarea style="margin-left:60px;margin-right:100px; " name="Address" rows="5" cols="90" placeholder="" required="Please fill this"></textarea>
            </div>
      
        <button class="switch" onclick="">UPDATE</button>
        <button class="switch" onclick="">DELETE</button>
        </div>
        </center>
        </form>
    </body>
    <?php
    include 'connection.php';
    if(isset($_POST['subid']));  
    {$id=$_POST['search'];
    $stu="select * from teacherdata where teacher_id={$id};";
    $result=mysqli_query($con,$stu);
    $data=mysqli_fetch_array($result);
    }
    if(!isset($data))
    {
        echo "<script> alert('TEACHER ID not found');</script>";
        header("Refresh:0;url=manage_teacher_homepage.php");
    }
    ?>
</html>
	