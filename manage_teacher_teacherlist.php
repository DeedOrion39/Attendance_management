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
                margin-left: 7px;
                margin-right: 7px;
                float:left;
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

            .Firstline button{
                height:30px;
                width:150px;
                font-size:20px;
                margin-bottom:10px;
                cursor: pointer;
            }

            .drpdwn{
                height:30px;
                width:160px;
                font-size:20px;
                cursor: pointer;
            }

            table{
                width:100%;
                margin-top:1%;
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
    <?php 
    include 'connection.php';
    $teach="select * from teacherdata;";
    $result=mysqli_query($con,$teach);
    ?>
    <body>
        <img src="VesitLogo.png" alt="Vesit Logo" height="60" width="80">
        <span id="vesit_full"><span class="tab"></span> Vivekanad Education Society's Institute of Technology</span>
        <ul class="nav">
            <li><a href="homepage_admin.php">HOME</a></li>
            <li><a href="manage_teacher_homepage.php">MANAGE TEACHER</a></li>
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
        <center>
        <table  border="1px">
            <tr>
                <th>Teacher Id</th>
                <th>Full Name</th>
                <th>Mobile Number</th>
                <th>Subject</th>
                <th>Class</th>
                <th>Email</th>
            </tr>
            <?php foreach ($result as $var)
            { ?>
            <tr>
                <td><?php echo $var["teacher_id"];?></td>
                <td><?php echo $var["fullname"];?></td>
                <td><?php echo $var["mob_no"];?></td>
                <td><?php echo $var["subject"];?></td>
                <td><?php echo $var["class"];?></td>
                <td><?php echo $var["email"];?></td>
            </tr>
        <?php }?>
        </table>
        </center>
        </body>
</html>
 
