<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <title>CI CRUD</title>
    
    <script type="text/javascript">

function show_confirm(act,gotoid)
{
if(act=="edit")
var r=confirm("Do you really want to edit?");
else
var r=confirm("Do you really want to delete?");
if (r==true)
{
window.location="<?php echo base_url();?>index.php/users/"+act+"/"+gotoid;
}
}

</script>
</head>
<body>
    <h1>CRUD Using Codeigniter</h1>
    <table width="600" border="1" cellpadding="8">
    <tr>
    <th scope="col">ID</th>
    <th scope="col"> User Name</th>
    <th scope="col">Email</th>
    <th scope="col">Address</th>
    <th scope="col">Mobile</th>
    <th scope="col" colspan="2">Action</th>

    </tr>
    <?php foreach ($user_list as $u_key){ ?>
    <td> <?php echo $u_key->id; ?></td>
    <td> <?php echo $u_key->name; ?></td>
    <td> <?php echo $u_key->email; ?></td>
    <td> <?php echo $u_key->address; ?></td>
    <td> <?php echo $u_key->mobile; ?></td>
    <td width="60" align="left"><a href="#" onClick="show_confirm('edit',<?php echo $u_key->id;?>)">Edit</a></td>
    
    <td width="40" align="left" ><a href="#" onClick="show_confirm('delete',<?php echo $u_key->id;?>)">Delete </a></td>
    </tr>
    <?php }?>
    <tr>
    <td colspan="7" align="right"> <a href="<?php echo "http://" . $_SERVER['SERVER_NAME'] .":90". $_SERVER['REQUEST_URI']."/add_form" ?>">Insert New User</a></td>

    </tr>
    </table>
</body>
</html>