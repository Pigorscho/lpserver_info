<?php


?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="author" content="Pigo">
    <meta name="description" content="description">


</head>
logged in as <?php echo $_SERVER['PHP_AUTH_USER'] ?>


<body>
<nav>
    <ul>
        <li><a href="/golfstatistic/golfstat_projekt/scorecard_draft.php">start new round</a></li>
        <li><a href="">check analytics</a></li>
        <li><a href="/index.html">go back to Homepage</a></li>

    </ul>
</nav>
<br>
<br>
<div id="content">
    <div id="scorecard_container">

        <a href="/golfstatistic/golfstat_projekt/scorecard_draft.php">
            <div>
                <iframe src="/golfstatistic/golfstat_projekt/scorecard_draft_preview.php" width="600px" height="600px"
                        align="center"
                        scrolling="no"></iframe>
            </div>
        </a>
    </div>
    <div id="new_round_btn">
        <form action="golfstat_projekt/scorecard_draft.php">
            <input type="submit" value="go to blank scorecard">
        </form>
    </div>
    <a href="/golfstatistic/golfstat_projekt/golfstat_analysis.php">
        <div class="analyse_container">
            <iframe src="/golfstatistic/golfstat_projekt/golfstat_analysis_preview.php" width="600px" height="600px"
                    align="center"
                    scrolling="yes"></iframe>
        </div>
    </a>
</div>
</body>
</html>
