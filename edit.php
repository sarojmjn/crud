<!DOCTYPE html>
<html>
    <head>
        <title>Edit - Student</title>
    </head>
    <body>
        <table align="center" cellpadding="0" width="800" border="0">
            <tr>
                <td>
                    <h1 align="center">Edit Student</h1>
                    <?php
                    $id = $_GET['id'];
                    $link = mysql_connect("localhost", "root", "") or die("Cannot Connect to the database!");
                    mysql_select_db("students", $link) or die("Cannot select the database!");
                    $query = "SELECT * FROM student WHERE id='" . $id . "'";
                    $resource = mysql_query($query, $link) or die("An unexpected error occured while <b>editing</b> the record, Please try again!");
                    $result = mysql_fetch_array($resource);
                    ?>
                    <form id="edit" name="form1" method="post" action="edit-process.php">
                        <table align="center" width="291" border="0">
                            <tr>
                                <td width="129"><strong>Name of Student:</strong></td>
                                <td width="152">
                                    <input type="hidden" name="id" value="<?php echo $result[0] ?>"  />
                                    <label>
                                        <input name="name" type="text" id="textfield" value="<?php echo $result[1] ?>" />
                                    </label></td>
                            </tr>
                            <tr>
                                <td><strong>Roll #:</strong></td>
                                <td><input name="rollno" type="text" id="textfield2" value="<?php echo $result[2] ?>" /></td>
                            </tr>
                            <tr>
                                <td><strong>Registration #:</strong></td>
                                <td><input type="text" name="reg" id="textfield3" value="<?php echo $result[3] ?>" /></td>
                            </tr>
                            <tr>
                                <td><strong>Department Name</strong>:</td>
                                <td><input type="text" name="dept" id="textfield4" value="<?php echo $result[4] ?>" /></td>
                            </tr>
                        </table>
                        <p align="center">
                            <label>
                                <input type="submit" name="button" id="button" value="Edit" />
                            </label>
                        </p>
                    </form>
                </td>
            </tr>
        </table>
    </body>
</html>