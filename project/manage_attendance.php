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
            .nav{
                list-style-type:none;
                margin:0;
                padding:0;
                overflow:hidden;
                background-color:#F9D815;
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

            .nav input {
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

            .Firstline{
                margin-top: 10px;
                margin-left: 5px;
                margin-right: 5px;
                float:left;
            }

            .Firstline button{
                height:30px;
                width:150px;
                font-size:20px;
                margin-bottom:10px;
                cursor: pointer;
            }
            .Firstline_date{
                margin-top: 7px;
                margin-left: 5px;
                margin-right: 5px;
                float:left;
                height:30px;
                width:170px;
                font-size:24px;
                margin-bottom:10px;
            }
            .drpdwn{
                height:30px;
                width:150px;
                font-size:20px;
                cursor: pointer;
            }

            table{
                width:92%;
                float:left;
            }

            table,th,td{
                border:1px solid black;
                border-collapse:collapse;
                text-align:center;
                padding:15px;
                font-size:23px;
            }
            
            td{
                padding:7px;
            }

            .mybutton{
                background-color:lightgreen;
                height:30px;
                width:120px;
                font-size:20px;
                font-weight: bold;
                cursor: pointer;
            }
          
            .lastbutton{
                height:50px;    
                width:140px;
                float:right;
                font-size:20px;
                position:absolute;
                right:10px;
                bottom:10px;
                cursor: pointer;
            }
        </style>
    </head>
    <body>
        <img src="VesitLogo.png" alt="Vesit Logo" height="60" width="80">
        <span id="vesit_full"><span class="tab"></span> Vivekanad Education Society's Institute of Technology</span>
        <ul class="nav">
            <li><a onclick="goBack()">HOME</a></li>
            <li><a href="record_attendance.php">RECORD ATTENDANCE</a></li>
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
        <form method="GET" >
        <div class="Firstline">
           
                <select class="drpdwn"  id="Division" autofocus="autofocus" required="required" size=1 name="Class" >
                    <option  disabled selected>Select Class</option>
                    <option  value="D7A">D7A</option>
                    <option  value="D7B">D7B</option>
                    <option  value="D7C">D7C</option>
                </select>
            
        </div>
        <div class="Firstline">
            
                <select class="drpdwn" name="subjects" id="Subject"  required="required" size=1 >
                    <option disabled selected>Select Subject</option>
                    <option  value="AM">AM</option>
                    <option  value="DSGT">DSGT</option>
                    <option  value="DS">DS</option>
                    <option  value="DLCOA">DLCOA</option>
                    <option  value="CG">CG</option>
                    <option  value="OOPM">OOPM</option>
                </select>
            
        </div>
        <div class="Firstline">
            <input type="date" style=" height:30px;width:180px;font-size:20px;" id="date" name="date">
            <button type="submit" class="data_button" style="height:30px;width:150px;font-size:20px;" name ="gets" >GET DATA</button>
        </div>
        </form>
        <form method="POST">
        <?php 
        include 'connection.php';
         if(isset($_GET['Class'])&&isset($_GET['subjects'])&&isset($_GET['date']))
                {
                  $class=$_GET['Class']; $subject=$_GET['subjects'];$date=$_GET['date'];
                              
               
            $selectquery="select distinct attendence.student_id,roll_no,full_name,status,note from attendence,studentdata where attendence.student_id=studentdata.student_id AND subject = '$subject' AND class = '$class' AND date='$date' order by roll_no;";

            $query=mysqli_query($con,$selectquery);
            }
            ?>
        <br><br><br>    
        <div>
        <table  border="1px">
            <tr>
                <th>Student Id</th>
                <th>Roll Number</th>
                <th>Full Name</th>
                <th>Status</th>
                <th>Note</th>
            </tr>
         <?php 
            
            if(isset($query))    
            { $cquery="";
            $i=0;
                foreach($query as $values)
            {
                echo "<tr>
                <td>{$values['student_id']}</td>
                <td>{$values['roll_no']}</td>
                <td>{$values['full_name']}</td>";
                if($values['status']=='P')
                {
                echo "<td><input required=\"\" type=\"button\" class=\"mybutton\" name=\"stat_$i\" onclick=\"myFunction($i)\" value=\"Present\"></td>";
                }
                else
                {
                    echo "<td><input required=\"\" type=\"button\" style=\"background-color:red\" class=\"mybutton\" name=\"stat_$i\" onclick=\"myFunction($i)\" value=\"Absent\"></td>";
                }
                if($values['note']=="")
                {echo "<td><input name=\"nota_$i\" style=\"margin-left:40px;margin-right:100px; height:22px; width:250px;\" type=\"text\"  placeholder=\"enter note if any within 30 words\"></td>
                    </tr>";
                }
                else
                {
                   echo "<td><input name=\"nota_$i\" style=\"margin-left:40px;margin-right:100px; height:22px; width:250px;\" type=\"text\"  placeholder=\"enter note if any within 30 words\" value=".$values['note']."></td>
                    </tr>"; 
                }
                
                $i++;
            }}
            
            ?>
        </table>
        </div>
        <input class="lastbutton" type="submit" onclick="chng()" name="SUBMIT" value="SUBMIT">
        </form>   
        </body>
</html>

    <?php      
            if(isset($_POST['SUBMIT']))
            {$i=0; $cquery="";
            $selectquery="select student_id, roll_no,full_name from studentdata where class ='$class' order by roll_no";

            $query=mysqli_query($con,$selectquery);
            foreach($query as $values)
            {   
              
            $status=$_POST["stat_$i"];
            $index=$_POST["nota_$i"];
            $cquery=$cquery."update attendence set status='$status',note='$index' where student_id='".$values['student_id']."' AND subject='$subject' AND  date='$date';";
            
             
                $i++;
            }
            $ros=mysqli_multi_query($con,$cquery);
            if($ros)
            {
              echo"<script>alert('Data was successfully updated');</script>";
               header("Location:http://localhost//project/manage_attendance.php");
               ob_enf_fluch();
            }
            else
            {
                 echo "<script>alert('Data was not updated');</script>";
                 header("Location:http://localhost//project/manage_attendance.php");
                 ob_enf_fluch();
            }  
            }    
        ?>
        <script>
        function goBack() {
        window.history.back();
        }
 
        function myFunction(index) {
           var x = document.getElementsByClassName("mybutton");
        if (x[index].value === "Present") 
        {
            x[index].value = "Absent";
            x[index].style.backgroundColor = "red";
        } 
        else {
            x[index].value = "Present";
            x[index].style.backgroundColor = "lightgreen";
            
        }
        }
        function chng()
        { var i;
            var x = document.getElementsByClassName("mybutton");
            for(i=0;i<x.length;i++)
            {
                x[i].type='text';
            }
        }
        
    </script> 