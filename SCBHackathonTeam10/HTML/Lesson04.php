<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lesson 04</title>
    <link rel="stylesheet" href="../CSS/lessons.css">
    <link rel="stylesheet" href="../CSS/lessonFormat.css">


    <?php
        require_once('../HTML/config.php');
    
        if($_SERVER['REQUEST_METHOD'] == "POST"){
            $prog=4;
            $sql = "UPDATE login set prog=$prog";
            $result = $conn->query($sql);
            header('Location: ../HTML/home.html');
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
            <img src="../Images/code.png" alt="" srcset="">
        </div>
        <div class="text">
            <p><b>&lt head &gt tag : </b>
                Head tag is the same as the human brain, which can keep or memorize things in mind
                This tag represents the document's header which can keep other HTML tags like &lt title &gt, &lt link
                &gt etc.
                <br>
                <b>&lt body &gt tag : </b> 
                Body tag works same as the human body, it contains the structure or design of how our page will look
                like?
                This tag represents the document's body which keeps other HTML tags like &lt h1 &gt, &lt div &gt, &lt p
                &gt etc.
                <br>
                <b> Tags used to structure text </b> 
                <br>
                <b>&lt h1 &gt......&lt h6 &gt : </b>
                This tag represents the heading.
                H1 to h6 tag works in decreasing order of font size. H1 is largest among all and h6 is smallest among
                all. <br>
                <b>&lt p &gt : </b>
                This tag represents a paragraph.

            </p>
        </div>
    </div>

    <!-- Buttons Start -->
    <div class="buttons">
        <a href="../HTML/Lesson03.html"><button id="start">Prev</button></a>
        <form action="" method="POST">
        <button type="submit" id="start">Completed</button></form>
        <a href="../HTML/Lessons.html"><button id="start">Next</button></a>
    </div>
    <!-- Buttons End -->
</body>

</html>