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
            color:black;
        }
        .button1{
            border: 1px solid black;
            background-color:rgb(238, 238, 238);
            margin: 10px;
            padding:2px;
        }
    </style>
</head>
<body>
<h2>ROLE</h2>
    <?php
    include("../config/config.php");
    include("header.php");
    $message=''; 
    if(isset($_SESSION['status']) && $_SESSION['status']!=''){
        $message='<p>'.$_SESSION['status'].'</p>';
        unset($_SESSION['status']);
        }
    $roleHtml='';
    $result=$conn->query("select * from role");
    if($result->num_rows>0)
    {
        $count=1;
        while($row=$result->fetch_assoc()){
     $id=$row['id'];
        $roleHtml .= '
        <tr>
            <td>'.$count.'</td>
            <td>'.$row['name'].'</td>
            <td>'.$row['description'].'</td>
            <td><a button class="button1" href="role_manage.php?id='.$id.'">Edit</button></a>
            <button>Delete</button>
            </td>
        </tr>';
        $count++;
    }
    //print_r($_GET);
    
}
    ?>
        
    <?php echo $message?>
    <table border="1 solid" width="1000" >
        <tr>

            <th>SNO.</th>
            <th>TITLE</th>
            <TH>description</th>
            <th>action</th>
        </tr>
      
        <?php echo $roleHtml ?>
     </table>
            <a button class="button" href="role_manage.php">Add new role</button></a>
    
</body>
</html>
