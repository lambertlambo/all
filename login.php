<?php 
session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <title>Login Form</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            margin: 0;
            padding: 0;
        }

        .container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 360px;
            position: absolute;
            background: black;
            margin-left: 30rem;
            width: 490px;
            overflow: hidden;
            border-radius: 10px;
            margin-top: 200px;
    
        }
        .container::before{
    position: absolute;
    content: '';
    background-image: conic-gradient(transparent,pink,transparent,blue,pink,transparent,yellow);
    width: 700px;
    height: 700px;
    animation: animate 2s linear infinite;
}
.container::after{
    position: absolute;
    content: '';
    background-image: conic-gradient(transparent,yellow,transparent,transparent,blue);
    width: 700px;
    height: 700px;
    animation: animate 2s linear infinite;
}
@keyframes animate {
    0%{
        transform: rotate(0deg);
    }
    100%{
        transform: rotate(360deg);
    }
    
}
.container form{
    z-index: 1;
inset: 9px;
}
        .login-form {
            background-color: black;
            padding: 40px;
            border-radius: 4px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
            max-width: 400px;
            width: 100%;
        }

        .login-form h2 {
            text-align: center;
            margin-bottom: 30px;
            color:blue;
        }

        .login-form input[type="text"],
        .login-form input[type="password"] {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            margin-bottom: 20px;
            box-sizing: border-box;
        }

        .login-form input[type="submit"] {
            width: 100%;
            padding: 10px;
            border: none;
            background-color: #4caf50;
            color: #fff;
            margin-top:3px;
            cursor: pointer;
            border-radius: 4px;
        }

        .login-form input[type="submit"]:hover {
            background-color: #45a049;
        }
        button{
            width: 100%;
            padding: 10px;
            border: none;
            background-color: #4caf50;
            color: #fff;
            margin-top:3px;
            cursor: pointer;
            border-radius: 4px;
        }

        button:hover {
            background-color: #45a049;
        }

        @media (max-width: 768px) {
            .login-form {
                margin: 0 20px;
            }
        }
    
    </style>
</head>
<body>
    <div class="container">
        <form class="login-form" method="POST">
            <h2>Login</h2>
            <input type="text" name="username" placeholder="Username" autocomplete="no" required>
            <input type="password" name="password" placeholder="Password" required>
            <input type="submit"  name="submit" value="Login">
          <button onclick="verify()">signup</button>
        </form>
    </div>
    <script>
function verify(){
    window.location.href='signup.php'
}
        </script>
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
$username=$_POST['username'];
$password = $_POST['password'];
 
$sql = "SELECT * FROM tri WHERE username='$username' AND passwordd='$password'";
// if(mysqli_query($conn,$sql)){
//     echo "<script>
//     alert('login successful');
//    window.location.href='indexx.php';
//    </script>";
// }
// else{

//     echo "<script>
//     alert('incorrect details');
//     window.location.href='login.php';
//     </script>";
// }
// }
// 
    $run = mysqli_query($conn, $sql);

if(mysqli_num_rows($run)>0) {
    $_SESSION['username'] = $username;
    echo "
        <script>
            window.alert('You are logged in!!');
            window.location.href = 'indexx.php';
        </script>
    ";
} else {
    echo "
        <script>
            window.alert('Incorrect Password and Username!');

        </script>
    ";
}
}
?>
</body>
</html>