<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Insert User</title>
</head>
<body>
    <form method="post" action="<?php echo base_url();?>index.php/users/insert_user_db">
    <table border="0" padding="5">
        <tr>
            <th width="200" align="right" scope="row">Enter your name:</th>
            <td width="200"><input type="text" name="name" size="20"/></td>
        </tr>
        <tr>
            <th align="right" scope="row">Enter your email</th>
            <td><input type="text" name="email" size="20" /></td>
        </tr>
        <tr>
            <th align="right" scope="row">Enter your Mobile</th>
            <td><input type="text" name="mobile" size="20" /></td>
        </tr>
        <tr>
            <th align="right" scope="row">Enter Your Address</th>
            <td><textarea name="address" rows="5" cols="20"></textarea></td>
        </tr>
        <tr>
            <th align="right" scope="row">&nbsp;</th>
                <td><input type="submit" name="submit" value="Send" /></td>
        </tr>
    </table>
    </form>
</body>
</html>