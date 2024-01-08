<?php
if(isset($_POST['submit'])){
    header('location:read.php');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Read PDFs with PHP</title>
    <style>
        .container{
            height: 34rem;
            width:100%;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
        }

        .hero{
            margin-top: 10rem;
            padding-top: 70px;
        }

        button{
            height:50px;
            width:220px;
            background-color: crimson;
            border: 1px solid black;
            outline: none;
            color: white;
            font-size: 1.5rem;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="wrapper" >
            <h1 class="hero">Reading Pdfs Using PHP Script</h1>
        </div>
        <br><br><br><br>
        <div class="wrapper">
           <img src="image.jpg" class=" image" alt="" height="300px" width="200px"> 
        </div>
        <br><br><br>
        <div class="wrapper">
            <form method="POST">
                <button type="submit" name="submit" value="submit">Read PDF</button>
            </form>
        </div>
        <br><br>
        <div class="wrapper">
            <h3>Made with <span>PHP</span> by Favour Gabriel</h3>
        </div>
    </div>
</body>
</html>