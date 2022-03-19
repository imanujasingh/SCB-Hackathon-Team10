<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lesson 02</title>
    <link rel="stylesheet" href="../CSS/lessons.css">
    <link rel="stylesheet" href="../CSS/lessonFormat.css">



    <?php
        require_once('../HTML/config.php');
    
        if($_SERVER['REQUEST_METHOD'] == "POST"){
            $prog=2;
            $sql = "UPDATE login set prog=$prog";
            $result = $conn->query($sql);
            header('Location: ../HTML/Lesson03.php');
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
            <img src="../Images/html.jpg" alt="" srcset="">
        </div>
        <div class="text">
            <p>Let’s start the first lesson of this series. <br>
                As its name suggests, HTML is a Markup Language which means you use HTML to simply "mark-up" a text
                document with tags that tell a Web browser how to structure it to display.
                It makes use of various tags to format the content. These tags are enclosed within angle braces Tag
                Name. Except for few tags, most of the tags have their corresponding closing tags. For example,
                <?html?> has its closing tag "/html" and "body" tag has its closing tag "/body" tag etc.
            </p>
        </div>
    </div>

    <!-- Buttons Start -->
    <div class="buttons">
        <button id="start"><a href="../HTML/Lesson01.html">Prev</a></button>
        <form action="" method="POST">
        <button type="submit" id="start">Completed</button></form>
        <button id="start"><a href="../HTML/Lesson03.html">Next</a></button>
    </div>
    <!-- Buttons End -->
</body>

</html>