<!DOCTYPE html>
<html>
    <head>
        <title>Create - Student</title>
    </head>

    <body>
        <table align="center" cellpadding="0" width="800" border="0">
            <tr>
                <td>
                    <h1>Student details form</h1>
                    <form id="create" name="create" method="post" action="create-process.php">
                        <table align="center" width="291" border="0">
                            <tr>
                                <td width="129"><strong>Name of Student:</strong></td>
                                <td width="152"><label>
                                        <input type="text" name="name" id="textfield" />
                                    </label></td>
                            </tr>
                            <tr>
                                <td><strong>Roll #:</strong></td>
                                <td><input type="text" name="rollno" id="textfield2" /></td>
                            </tr>
                            <tr>
                                <td><strong>Registration #:</strong></td>
                                <td><input type="text" name="regno" id="textfield3" /></td>
                            </tr>
                            <tr>
                                <td><strong>Department Name</strong>:</td>
                                <td><input type="text" name="dept" id="textfield4" /></td>
                            </tr>
                        </table>
                        <p align="center">
                            <label>
                                <input type="submit" name="button" id="button" value="Submit" />
                            </label>
                        </p>
                    </form>
            </tr>
        </table>
    </body>
</html>