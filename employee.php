<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        h2{
            text-align:center;
        }
        table{
            border-collapse: collapse;
            margin: auto;
            margin-top: 50px;
            position: relative;
        }
        .button{
            padding: 10px;
            margin: 10px;
            border: 1px solid black;
            border-radius: 5px;
            color: white;
            font-weight: 700;
            background-color: green;
            position: absolute;
            right: 10%;
        }
        a{
           text-decoration:none;
        }
    </style>
</head>
<body>
    <h2>EMPLOYEE</h2>
    <?php
    include("../config/config.php");
    include("header.php");
    $message=''; 
    if(isset($_SESSION['status']) && $_SESSION['status']!=''){
        $message='<p>'.$_SESSION['status'].'</p>';
        unset($_SESSION['status']);
        }
    $employeeHtml='';
    $result=$conn->query("select * from employee");
    if($result->num_rows>0)
    {
        while($row=$result->fetch_assoc()){
     $id=$row['id'];
        $employeeHtml .= '
        <tr>
            <td>'.$row['id'].'</td>
            <td>'.$row['name'].'</td>
            <td>'.$row['email-id'].'</td>
            <td>'.$row['description'].'</td>
            <td><a button class="button1" href="role_manage.php?id='.$id.'">Edit</button></a>
            <button>Delete</button>
            </td>
        </tr>';
    }
    print_r($_GET);
    
}
    ?>
        
    <?php echo $message?>
    <table border="1 solid" width="1000" >
        <tr>
            <th>role_name</th>
            <th>description</th>
            <th>action</th>
        </tr>
        <tr>
           <td>admin</td>
            <td>.</td>
            <td><button>edit</button><button>delete</button></td>
        </tr>
        <tr>
            <td>user</td>
            <td>.</td>
            <td><button>edit</button><button>delete</button></td>
        </tr>
    </table>
            <a button class="button" href="employee_manage.php">Manage Employee</button></a>
    
</body>
</html>