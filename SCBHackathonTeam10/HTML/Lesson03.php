<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lesson 03</title>
    <link rel="stylesheet" href="../CSS/lessons.css">
    <link rel="stylesheet" href="../CSS/lessonFormat.css">

    <?php
        require_once('../HTML/config.php');
    
        if($_SERVER['REQUEST_METHOD'] == "POST"){
            $prog=3;
            $sql = "UPDATE login set prog=$prog";
            $result = $conn->query($sql);
            header('Location: ../HTML/Lesson04.php');
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
            <img style="height: 350px;" src="../Images/body.jpeg" alt="" srcset="">
        </div>
        <div class="text">
            <p>
                &lt !DOCTYPE html &gt <br>
                &lt html &gt <br>
                &lt head &gt
                    &lt title &gtThis is document title&lt /title &gt
                &lt /head &gt <br>
                &lt body &gt <br>
                    &lt h1 &gtThis is a heading&lt /h1 &gt
                    &lt p &gtDocument content goes here.....&lt /p &gt <br>
                &lt /body &gt <br>
                &lt /html &gt
            </p>
            <p>No no no! Do not get worried by seeing this code. We will simplify it with a real-world example.
                Suppose this code snippet is a human body as it has a head and body.
                In the next lesson, we will learn more about the individual tags of this snippet.
            </p>
        </div>
    </div>

    <!-- Buttons Start -->
    <div class="buttons">
        <a href="../HTML/Lesson02.html"><button id="start">Prev</button></a>
        <form action="" method="POST">
        <button type="submit" id="start">Completed</button></form>
        <a href="../HTML/Lesson04.html"><button id="start">Next</button></a>
    </div>
    <!-- Buttons End -->
</body>

</html>