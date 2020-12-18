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

        <form method="GET" action="exp3.php">
            <br><br><br><br><br><br><br>
            <center>
            <label for="student_id">Student ID:</label>
            <input type="number" id="student_id" style="margin-left:38px;margin-right:100px; height:22px;" placeholder="enter student id" required="Please fill this" name="search"><input type="submit" name="subid" value="submit">

        </center>
        </form>
    </body>
</html>
	