<?php


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="author" content="Pigo">
    <meta name="description" content="description">

</head>
logged in as <?php echo $_SERVER['PHP_AUTH_USER'] ?>
<style>
    table, th, td {
        border: 1px solid black;
    }
</style>
<body>
<nav>
    <ul>
        <li><a href="/golfstatistic/golf-stats_menu.php">go back to Statistic Menu</a> </li>

    </ul>
</nav>
<h1>
    Golf Statistic
</h1>
<h2>
    Please enter your stats
</h2>
<div id="table">
    <form method="post">
        <table style="width: 100%">
            <tr>
                <th> Hole </th>
                <th>   1   </th>
                <th>   2   </th>
                <th>   3   </th>
                <th>   4   </th>
                <th>   5   </th>
                <th>   6   </th>
                <th>   7   </th>
                <th>   8   </th>
                <th>   9   </th>
                <th>10</th>
                <th> 11 </th>
                <th> 12 </th>
                <th> 13 </th>
                <th> 14 </th>
                <th> 15 </th>
                <th> 16 </th>
                <th> 17 </th>
                <th> 18 </th>
            </tr>

            <tr>
                <th> Meters </th>
                <th> {x} </th>
                <th> {x} </th>
                <th> {x} </th>
                <th> {x} </th>
                <th> {x} </th>
                <th> {x} </th>
                <th> {x} </th>
                <th> {x} </th>
                <th> {x} </th>
                <th> {x} </th>
                <th> {x} </th>
                <th> {x} </th>
                <th> {x} </th>
                <th> {x} </th>
                <th> {x} </th>
                <th> {x} </th>
                <th> {x} </th>
                <th> {x} </th>

            </tr>

            <tr>
                <th> Shots </th>
                <th contenteditable="true"></th>
                <th contenteditable="true"></th>
                <th contenteditable="true"></th>
                <th contenteditable="true"></th>
                <th contenteditable="true"></th>
                <th contenteditable="true"></th>
                <th contenteditable="true"></th>
                <th contenteditable="true"></th>
                <th contenteditable="true"></th>
                <th contenteditable="true"></th>
                <th contenteditable="true"></th>
                <th contenteditable="true"></th>
                <th contenteditable="true"></th>
                <th contenteditable="true"></th>
                <th contenteditable="true"></th>
                <th contenteditable="true"></th>
                <th contenteditable="true"></th>
                <th contenteditable="true"></th>
            </tr>


            <tr>
                <th> Drive in Fairway </th>
                <th contenteditable="true"></th>
                <th contenteditable="true"></th>
                <th contenteditable="true"></th>
                <th contenteditable="true"></th>
                <th contenteditable="true"></th>
                <th contenteditable="true"></th>
                <th contenteditable="true"></th>
                <th contenteditable="true"></th>
                <th contenteditable="true"></th>
                <th contenteditable="true"></th>
                <th contenteditable="true"></th>
                <th contenteditable="true"></th>
                <th contenteditable="true"></th>
                <th contenteditable="true"></th>
                <th contenteditable="true"></th>
                <th contenteditable="true"></th>
                <th contenteditable="true"></th>
                <th contenteditable="true"></th>
            </tr>
            <tr>
                <th> Green in Regulation </th>
                <th contenteditable="true"></th>
                <th contenteditable="true"></th>
                <th contenteditable="true"></th>
                <th contenteditable="true"></th>
                <th contenteditable="true"></th>
                <th contenteditable="true"></th>
                <th contenteditable="true"></th>
                <th contenteditable="true"></th>
                <th contenteditable="true"></th>
                <th contenteditable="true"></th>
                <th contenteditable="true"></th>
                <th contenteditable="true"></th>
                <th contenteditable="true"></th>
                <th contenteditable="true"></th>
                <th contenteditable="true"></th>
                <th contenteditable="true"></th>
                <th contenteditable="true"></th>
                <th contenteditable="true"></th>

            </tr>
            <tr>
                <th> Putts (total) </th>
                <th contenteditable="true"></th>
                <th contenteditable="true"></th>
                <th contenteditable="true"></th>
                <th contenteditable="true"></th>
                <th contenteditable="true"></th>
                <th contenteditable="true"></th>
                <th contenteditable="true"></th>
                <th contenteditable="true"></th>
                <th contenteditable="true"></th>
                <th contenteditable="true"></th>
                <th contenteditable="true"></th>
                <th contenteditable="true"></th>
                <th contenteditable="true"></th>
                <th contenteditable="true"></th>
                <th contenteditable="true"></th>
                <th contenteditable="true"></th>
                <th contenteditable="true"></th>
                <th contenteditable="true"></th>
            </tr>
            <tr>
                <th> Putt Analyse </th>
                <th contenteditable="true"></th>
                <th contenteditable="true"></th>
                <th contenteditable="true"></th>
                <th contenteditable="true"></th>
                <th contenteditable="true"></th>
                <th contenteditable="true"></th>
                <th contenteditable="true"></th>
                <th contenteditable="true"></th>
                <th contenteditable="true"></th>
                <th contenteditable="true"></th>
                <th contenteditable="true"></th>
                <th contenteditable="true"></th>
                <th contenteditable="true"></th>
                <th contenteditable="true"></th>
                <th contenteditable="true"></th>
                <th contenteditable="true"></th>
                <th contenteditable="true"></th>
                <th contenteditable="true"></th>
            </tr>
        </table>
    </form>
</div>
</body>
</html>

