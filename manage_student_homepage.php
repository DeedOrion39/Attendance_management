<!DOCTYPE html>
<html lang-"en-US">
    <head>
        <title>Manage Student</title>
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

            .card{
                float:left;
                margin-top: 100px;
                border-spacing: 15px;
            }

            .box{
                vertical-align: top;
                height:150px;
                width:150px;
                padding: 5px;
                font-size:20px;
                text-align:center;
                border: 2px solid black;
            }

            .box button{
                height:30px;
                width:100px;
                border:1px solid black;
                cursor: pointer;
            }

            .box button:hover{
                background: #ccc;
            }

        </style>
    </head>
    <body>
        <img src="VesitLogo.png" alt="Vesit Logo" height="60" width="80">
        <span id="vesit_full"><span class="tab"></span> Vivekanad Education Society's Institute of Technology</span>
        <ul class="nav">
            <li><a href="homepage_admin.php">HOME</a></li>
            <li><a href="manage_student_homepage.php">MANAGE STUDENT</a></li>
            <li style="float:right;"><img src="profilepic.jpg" id="Profile" ></li>
            <li style="float:right;">
                <div class="search-container">
                    <form>
                        <input type="text" placeholder="Search.." name="search">
                        <button type="submit"><i class="fa fa-search"></i></button>
                    </form>
                </div>
            </li>
        </ul>
        <center>
        <table>
            <tr class="card">
                <td class="box">
                    NEW DATA
                    <br>
                    <button style="margin-top: 90px;" onclick="document.location='exp.php'">ADD</button>
                </td>
                <td class="box">
                    MANAGE DATA
                    <br>
                    <button style="margin-top: 90px;" onclick="document.location='exp2.php'">MANAGE</button>
                </td>
                <td class="box">
                    STUDENT LIST
                    <br>
                    <button style="margin-top: 90px;" onclick="document.location='manage_student_studentlist.php'">VIEW</button>
                </td>
            </tr>
        </table>
        </center>
    </body>
</html>
