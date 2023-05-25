<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup</title>
    <style>
        input[type=date]{
            width: 180px;
        }
        form{
            margin-left:370px;
            margin-top:200px;
            border:2px solid black;
            width:240px;
        }
        form:active{
            width: 260px;
            background-color: aqua;
        }
        label{
            margin-left:30px;
        }
        label:hover{
            color: black;
            font-family: cursive;
            font-weight: bold;
        }
        input:hover{
            background-color: black;
            font-weight: bold;
            font-style: italic;
            font-family: cursive;
        }
        input:active{
            color: red;
        }
        input{
            margin-left:30px;
            font-weight: bold;
            font-style: italic;
            font-family: cursive;
            color:rgb(28, 167, 51);
        }
        input[type=submit]{
            text-transform: uppercase;
            margin-top: 3px;
            margin-left: 150px;
        }
        span::after{
            content: "";
            animation-name: one;
            animation-duration: 10s;
            animation-iteration-count: infinite;
        }
        @keyframes one {
            0%{
                content: "Create account";
                margin-left: 50px;
                color:burlywood;
            }
            20%{
                margin-left: -10px;
                color: slateblue;
            }
            60%{
color: red;
                content:"LOGIN";
                margin-left: 90px;
            }
            100%{
                color:blue;
       font-size: 30px;
            }
        }
        span{
            margin-left: 30px;
            transition: 2s step-end;
        }
        @media (max-width: 768px) {
            form {
                margin: 0 20px;
            }
        }
    </style>
</head>
<body>
    <div class="all">
<form action="" method="POST">
    <div class="all">
        <div>
            <span></span>
        </div>
    <label for="Firstname">Firstname:</label> <br>
    <input type="text" name="Firstname" id="Firstname" placeholder="Firstname" autocomplete="no" required><br>
            <label for="Secondname">Secondname:</label>
            <input type="text" name="Secondname" id="secondname" placeholder="Secondname" autocomplete="no" required> <br>
            <label for="username">Username:</label>
            <input type="text" name="Username" id="username" placeholder="Username" autocomplete="no" required><br>
            <label for="DOB">Birthday:</label>
            <input type="date" name="Date" id="date"><br>
            <label for="email">Email:</label>
            <input type="email" name="Email" id="Email" placeholder="Email" autocomplete="no" required><br>
            <label for="password">password:</label>
            <input type="password" name="Password" id="Password" placeholder="Password" required><br>
            <input type="submit" name="submit" id="submit">
</div>
</form>
    </div>
    <?php
     $used2='654';
    $used='lambo';
    $useda ="01921";
    $used1="ert12";
    $host='localhost';
    $username='root';
    $used3=$used.$used1.$useda.$used2;
    $database='tri';
    $a = "connected";
    $conn=mysqli_connect($host,$username,$used3,$database);
    if(!$conn){
        // echo "failed to connect";
    }else{
        // echo $a;
    }
    ?>
    <?php
    if(isset($_POST['submit'])){
$Firstname = $_POST['Firstname'];
$Secondname = $_POST['Secondname'];
$Username =$_POST['Username'];
$Date = $_POST['Date'];
$Email=$_POST['Email'];
$Password = $_POST['Password'];
$sql = "INSERT INTO tri(firstname,secondname,username,birthday,email,passwordd) VALUES ('$Firstname','$Secondname','$Username','$Date','$Email','$Password')";
if(mysqli_query($conn,$sql)){
    echo"
    <script>
   alert('you have signed up');
    window.location.href='login.php'
    </script>
    ";
}
else{
    echo"
    <script>
  alert('failed to sign up');
    window.location.href='login.php';
    
    </script>
    ";
}
 } ?>
</body>
</html>