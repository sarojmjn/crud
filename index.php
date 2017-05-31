<!DOCTYPE html>
<html>
    <head>
        <title>List - Student</title>
    </head>
    <body>
        <table align="center" cellpadding="0" width="800" border="0">
            <tr>
                <td>
                    <h1>Student List</h1>
                    <p><a href="create.php">Create A New Student</a></p>
                    <p>
                        <?php
                        $link = mysql_connect("localhost", "root", "");
                        if(!$link)
                            echo("Cannot Connect to the database!");

                        mysql_select_db("students", $link) or die("Cannot select the database!");
                        $query = "SELECT * FROM student";
                        $resource = mysql_query($query, $link);
                        echo "<table align=\"center\" border=\"0\" width=\"70%\">
                                <tr>
								 <td><b>SN</b></td> 
                                    <td><b>Name</b></td> 
                                    <td><b>Roll No.</b></td>
                                    <td><b>Reg No.</b></td>
                                    <td><b>Deparment</b></td>
                                    <td><b>Action</b></td>
                                </tr> ";
                        while ($result = mysql_fetch_array($resource)) {
                            echo "<tr><td>" . $result[0] . "</td><td>" . $result[1] . "</td><td>" . $result[2] . "</td><td>" . $result[3] . "</td><td>" . $result[4] . "</td><td> <a href=\"edit.php?id=$result[0]\">Edit</a> / <a href=\"delete.php?id=$result[0]\">Delete</a></td></tr>";
                        }
                        echo "</table>";
                        ?>

                    </p>
            </tr>
        </table>
    </body>
</html>