<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Banking System</title>
    <style>
        *{
            padding: 0;
            margin: 0;
        }
        body{
            background-image: linear-gradient(to right, rgba(109, 179, 242, .6), rgba(242, 242, 242, .6)), url('./bank.jpg');
background-size: cover;
background-repeat: repeat, no-repeat;
            color: darkblue;
            font-family: arial;
        }
        .main{
            margin:10%;
            margin-left: 8rem;
            text-align: center;
            font-weight: bolder;
            font-size: larger;
        }
        button{
            margin-top: 2%;
            padding: 2%;
            border-radius: 30px;
            background-color: #4222e1;
            color: white;
            font-weight: bold;
            font-size: x-large;
            cursor: pointer;
        }
        button:hover{
            background-color: #664ce8;
        }
        </style>
</head>
<body>
    <div class="main">
    <h1>
        Welcome to our <br>Basic Banking System
</h1>
<a href="./customer.php"><button>View All Customers</button></a>
    </div>
    </body>
</html>
