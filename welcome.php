<!DOCTYPE html>
<html>
<head>
	<title>Welcome Page</title>
</head>
<style>
body{background-color:rgb(157, 205, 255);
}

.card{
    float:left;
    margin-top: 100px;
    border-spacing: 15px;
    
 }

.box{
    vertical-align: top;
    height:200px;
    width:250px;
    padding: 5px;
    font-size:20px;
    text-align:center;
    background-color: rgb(0, 205, 0);
}

a:link {
  color: blue;
  background-color: rgb(0, 205, 0);
  text-decoration: none;
  display:inline block;
}



a:hover {
  color: red;
  background-color: rgb(0, 205, 0);
  text-decoration: underline;
}

a:active {
  color: yellow;
  background-color: rgb(0, 205, 0);
  text-decoration: underline;
}
</style>
<body>
<div style="background-color:Yellow;margin-top:-10px; margin:10px;color:purple; font-size:300%;"><img src="VesitLogo.png" style="float:left; height:100px; width:100px;">
<p style=" padding:25px;margin-left:400px;">
Vivekanad Education Society's Institute of Technology</p></div>
<marquee style=" color:RED; font-size:200%">Welcome  To VESIT  Attendence Manager</marquee>
<hr>

<center>
        <table>
            <tr class="card">
                <td class="box">
                    <a href="admin_login.php"><img src="Admin.jpg"; height=200px; width=200px;>
                    <p style="font-size:200%;">Admin Login</p></a> 
                </td>
                <td class="box">
                    <a href="teacher_login.php"><img src="teacher.png"; height=200px; width=200px;>
                    <p style="font-size:200%;">Teacher Login</p></a>
                </td>
            </tr>
        </table>
</center>
</body>

</html>
