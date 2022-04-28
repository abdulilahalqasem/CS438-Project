<!DOCTYPE html>
<html>
    <head>
        <title>The Game LeaderBoard</title>
    </head>

    <body>
        <h2>LeaderBoard</h2>
        <table boarder =1>
            <tr>
                <td>Ranking</td>
                <td>UserName</td>
                <td>HighestScore</td>
            </tr>
            <?php
                include "Logining in/server.php";

                $ranking = 1;
                $result = mysqli_query($db, "SELECT username, HighestScore FROM users ORDER BY HighestScore DESC");
                //Fetch Rows from the SQL query 
                if (mysqli_num_rows($result)) {
                    while ($row = mysqli_fetch_array($result)) {
                        echo "<tr>
                        <td>{$ranking}</td>
                        <td>{$row['username']}</td>
                        <td>{$row['HighestScore']}</td>
                        </tr>";
                        $ranking++;
                    }
                }
            ?>
        </table>
    </body>
</html>