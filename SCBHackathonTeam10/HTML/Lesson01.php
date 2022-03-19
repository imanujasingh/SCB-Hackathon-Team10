<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lesson 01</title>
    <link rel="stylesheet" href="../CSS/lessons.css">
    <link rel="stylesheet" href="../CSS/lessonFormat.css">



    <?php
        require_once('../HTML/config.php');
    
        if($_SERVER['REQUEST_METHOD'] == "POST"){
            $prog=1;
            $sql = "UPDATE login set prog=$prog";
            $result = $conn->query($sql);
            header('Location: ../HTML/Lesson02.php');
        }
    ?>
</head>

<body>
    <div class="topnav" id="myTopnav">
        <a href="../HTML/home.html" class="navItem">Courses<span class="tip1 tip">Go to the subjects list</span></a>
        <a href="../HTML/dashboard.php" class="navItem">Dashboard<span class="tip2 tip">Hey, let's track your
                progress</span></a>
        <a href="../HTML/Lessons.html" class="navItem">Tutorials</a>
        <a href="javascript:void(0);" class="icon" onclick="myFunction()">
            <i class="fa fa-bars"></i>
        </a>
    </div>
    <div class="main">
        <div class="image">
            <img src="../Images/history.jpg" alt="" srcset="">
        </div>
        <div class="text">
            <p>So champion, let us start with the quite boring part, the history of HTML.
                HTML stands for HyperText Markup Language, the most widely used Web language to develop web pages. HTML
                was created by Berners-Lee in late 1991 but "HTML 2.0" was the first standard HTML specification, which
                was published in 1995.
                HTML 4.01 was a major version of HTML and it was published in late 1999. Though HTML 4.01 version is
                widely used currently we are having the HTML-5 version which is an extension to HTML 4.01, and this
                version was published in 2012.
                <br>HTML is super easy to learn - You will enjoy it!
            </p>
        </div>
    </div>

    <!-- Buttons Start -->
    <div class="buttons">
        <button id="start"><a href="../HTML/Lessons.html">Prev</a></button>
        <form action="" method="POST">
        <button type="submit" id="start">Completed</button></form>
        <button id="start"><a href="../HTML/Lesson02.html">Next</a></button>
    </div>
    <!-- Buttons End -->
</body>

</html>