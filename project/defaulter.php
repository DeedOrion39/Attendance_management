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

            .Firstline{
                margin-top: 10px;
                margin-left: 5px;
                margin-right: 5px;
                margin-bottom:10px;
                float:left;
            }

            .Firstline button{
                height:30px;
                width:150px;
                font-size:20px;
                margin-bottom:10px;
                cursor: pointer;
            }

            .drpdwn{
                height:30px;
                width:150px;
                font-size:20px;
                cursor: pointer;
            }

            .table1{
                margin-top:-30px;
                width:14%;
            }

            table{
                width:85%;
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
                height:90px;    
                width:245px;
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
            <li><a href="defaulter.php">DEFAULTER LIST</a></li>
            <li style="float:right"><img src="profilepic.jpg" id="Profile" ></li>
            <li style="float:right">
                <div class="search-container">
                    <form action="/action_page.php">
                        <input type="text" placeholder="Search.." name="search">
                        <button type="submit"><i class="fa fa-search"></i></button>
                    </form>
                </div>
            </li>
        </ul>
        <script>
        function goBack() {
        window.history.back();
        }
        function exportData(){
        /* Get the HTML data using Element by Id */
        var table = document.getElementById("tblList");
 
        /* Declaring array variable */
        var rows =[];
 
         //iterate through rows of table
        for(var i=0,row; row = table.rows[i];i++){
            //rows would be accessed using the "row" variable assigned in the for loop
            //Get each cell value/column from the row
            column1 = row.cells[0].innerText;
            column2 = row.cells[1].innerText;
            column3 = row.cells[2].innerText;
            column4 = row.cells[3].innerText;
            column5 = row.cells[4].innerText;
 
        /* add a new records in the array */
            rows.push(
                [
                    column1,
                    column2,
                    column3,
                    column4,
                    column5
                ]
            );
 
            }
            csvContent = "data:text/csv;charset=utf-8,";
             /* add the column delimiter as comma(,) and each row splitted by new line character (\n) */
            rows.forEach(function(rowArray){
                row = rowArray.join(",");
                csvContent += row + "\r\n";
            });
 
            /* create a hidden <a> DOM node and set its download attribute */
            var encodedUri = encodeURI(csvContent);
            var link = document.createElement("a");
            link.setAttribute("href", encodedUri);
            link.setAttribute("download", "Defaulter_List.csv");
            document.body.appendChild(link);
             /* download the data file named "Stock_Price_Report.csv" */
            link.click();
        }
       
        </script>

        <div class="Firstline">
            <form method = "GET">
                <select class="drpdwn" name="Class" id="Division" autofocus="autofocus" required="required" size=1 >
                    <option disabled selected>Select Class</option>
                    <option value="D7A">D7A</option>
                    <option value="D7B">D7B</option>
                    <option value="D7C">D7C</option>
                </select>
            
        </div>
        <div class="Firstline">
            
                <select class="drpdwn" name="subject" id="subject" required="required" size=1 >
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
            <button type="submit" class="data_button" style="height:30px;width:150px;font-size:20px;" name ="gets" >GET DATA</button>
        </div>
		</form>
		 <table id="tblList">
		<tr>
		<th>Student Id</th>
		<th>Roll no</th>
		<th>Student Name</th>
		<th>Email id</th>
		<th>Attendance Percentage</th>
		</tr>
		<?php
		include 'connection.php';
		
		if(isset($_GET['gets']))
		{	$emails="";
            $class=$_GET['Class'];
            $subject=$_GET['subject'];
			$stid_query="select * from studentdata where class='$class' ";
			$stu_id=mysqli_query($con,$stid_query);
			foreach($stu_id as $id)
			{
				$present="select count(student_id) as present from attendence where student_id=".$id['student_id']." && status='P' && subject='".$subject."'";
				$countp=mysqli_fetch_array(mysqli_query($con,$present),MYSQLI_NUM);
				$total="select count(student_id) as total from attendence where student_id=".$id['student_id']." && subject='".$subject."' ";
				$countt=mysqli_fetch_array(mysqli_query($con,$total),MYSQLI_NUM);

                if($countt[0]!=0)
				{$per=$countp[0]/$countt[0]*100;
				if($per<75)
				{
					?>
					<tr>
						<td><?php echo$id['student_id']; ?></td>
						<td><?php echo$id['roll_no']; ?></td>
						<td><?php echo$id['full_name']; ?></td>
						<td><?php echo$id['email'];$emails=$emails.$id['email'].","; ?></td>
						<td><?php echo round($per,2);?></td>
						
					</tr>  					
					<?php
				}
                }
			}
		}
		?>
		</table>


  
<table class="table1" style="float:right;">
    <tr>
        <th>NOTICE</th>
    </tr>
    <tr>
        <td>Minimum attendance required is 75%</td>
    </tr>
</table>
<a style="text-decoration:none;color:black;" href="mailto:<?php echo$emails;?>?subject=Warning%20regarding%20attendance%20shortfall.&body=This%20mail%20is%20written%20to%20you%20in%20order%20to%20warn%20you%20that%20your%20attendance%20does%20not%20meet%20the%20standard%20requirements%20of%20attendance%20for%20college.%0D%0A%0D%0AYour%20attendance%20record%20for%20<?php echo $subject;?>%20classes%20is%20below%20the%20standard%20requirement%20of%20college%20for%20qualifying%20to%20sit%20in%20exams%20is%2075%25.%0D%0A%0D%0AThe%20college%20would%20like%20to%20notify%20you%20that%20if%20you%20are%20not%20able%20to%20improve%20your%20attendance%20record%20for%20future%20academic%20sessions%20then%20you%20would%20not%20qualify%20to%20sit%20in%20upcoming%20examination."><button style="right:10px;bottom:120px;" class="lastbutton" onclick="gen_mail()">GENERATE MAIL</button></a>  
<a style="text-decoration:none;color:black;" download><button class="lastbutton" onclick="exportData()">GENERATE DEFAULTER'S LIST</button></a>
</body>
</html>
