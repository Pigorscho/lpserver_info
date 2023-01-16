<?php


?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="author" content="Sini">
    <meta name="description" content="descriptio">

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
        <li><a href="/index.html">go back to Homepage</a> </li>
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
                <td> Meters </td>
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
                <td> Drive in Fairway </td>
                <th> {y} </th>
                <th> {y} </th>
                <th> {y} </th>
                <th> {y} </th>
                <th> {y} </th>
                <th> {y} </th>
                <th> {y} </th>
                <th> {y} </th>
                <th> {y} </th>
                <th> {y} </th>
                <th> {y} </th>
                <th> {y} </th>
                <th> {y} </th>
                <th> {y} </th>
                <th> {y} </th>
                <th> {y} </th>
                <th> {y} </th>
                <th> {y} </th>
            </tr>
            <tr>
                <td> Green in Regulation </td>
                <th> {z} </th>
                <th> {z} </th>
                <th> {z} </th>
                <th> {z} </th>
                <th> {z} </th>
                <th> {z} </th>
                <th> {z} </th>
                <th> {z} </th>
                <th> {z} </th>
                <th> {z} </th>
                <th> {z} </th>
                <th> {z} </th>
                <th> {z} </th>
                <th> {z} </th>
                <th> {z} </th>
                <th> {z} </th>
                <th> {z} </th>
                <th> {z} </th>
            </tr>
            <tr>
                <td> Putts (total) </td>
                <th> {p_t} </th>
                <th> {p_t} </th>
                <th> {p_t} </th>
                <th> {p_t} </th>
                <th> {p_t} </th>
                <th> {p_t} </th>
                <th> {p_t} </th>
                <th> {p_t} </th>
                <th> {p_t} </th>
                <th> {p_t} </th>
                <th> {p_t} </th>
                <th> {p_t} </th>
                <th> {p_t} </th>
                <th> {p_t} </th>
                <th> {p_t} </th>
                <th> {p_t} </th>
                <th> {p_t} </th>
                <th> {p_t} </th>
            </tr>
            <tr>
                <td> Putt Analyse </td>
                <th> {p_a} </th>
                <th> {p_a} </th>
                <th> {p_a} </th>
                <th> {p_a} </th>
                <th> {p_a} </th>
                <th> {p_a} </th>
                <th> {p_a} </th>
                <th> {p_a} </th>
                <th> {p_a} </th>
                <th> {p_a} </th>
                <th> {p_a} </th>
                <th> {p_a} </th>
                <th> {p_a} </th>
                <th> {p_a} </th>
                <th> {p_a} </th>
                <th> {p_a} </th>
                <th> {p_a} </th>
                <th> {p_a} </th>
            </tr>
        </table>
    </form>
</div>
</body>
</html>
