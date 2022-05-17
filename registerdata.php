<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    *{
    margin:0;
    padding:0;
    box-sizing: border-box;
    text-decoration: none;
}
.container{
    background-color:rgba(231, 25, 25, 0.959);
}
.container h1{
    font-family:'Pattaya', sans-serif;
    text-align:center;
    color:white;
    padding:22px 20px;
}
.container h3{
    font-family:'Pattaya', sans-serif;
    text-align:center;
    color:white;
    margin-top:5px;
}
.gohome{
    width:80%;
    margin:auto;
    margin-left:44%;
    margin-top:8%;
}
.gohome button{
    display: inline-block;
    background:rgba(231, 25, 25, 0.959);
    color: white;
    font-size: 25px;
    padding: 9px 28px;
    margin-top: 9px;
    border-radius: 7px;
    transition: all 0.3s ease;
    border:3px solid rgba(231, 25, 25, 0.959);
    cursor: pointer;
}
.gohome button:hover{
    color: blue;
    background: none;
}

</style>
<body>
    <div class="container">

    
    <?php
$fname=$_POST['fname'];
$password=$_POST['password'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$birthday=$_POST['birthday'];
$age=$_POST['age'];
$gender=$_POST['gender'];


//database connection

$conn= new mysqli('localhost' , 'root' , '' , 'data');
if($conn->connect_error){
    die('Connection Failed : ' .$conn->connect_error);
}else{
    $stmt= $conn->prepare("insert into register(fname, password, email, phone, birthday, age, gender)
    values(?, ?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("sssiiis" , $fname ,$password, $email, $phone, $birthday, $age, $gender);
    $stmt->execute();
    echo "<h1> Your registration is successfully done...</h1>";
    $stmt->close();
    $conn->close();
}
?>
</div>
<div class="gohome">
    <button>Go Back</button>
</div>
<script>

    let gohome=document.querySelector('button');
    gohome.addEventListener('click' , function(){
        window.history.back();
    });
</script>
</body>
</html>