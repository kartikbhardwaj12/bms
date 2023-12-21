<?php
include("../config/config.php");
include("header.php");

//add
//$title='';
//$description='';
//if(isset($_GET['id']) && $_GET['id']>0){
    //edit
    //$result = $conn->query("select * from role where id=".$_GET['id']);
    //if($result->num_rows>0){
       // $row = $result->fetch_assoc();
       // $title=$row['name'];
        //$description=$row['description'];
   // }
//}
$id='';
$title='';
$description='';
if(isset($_GET['id']) && $_GET['id']>0){
    $id=$_GET['id'];
    $result= $conn->query ("select name,description from role where id=".$id);
    if($result->num_rows>0){
         $row = $result->fetch_assoc();
         $title=$row['name'];
         $description=$row['description'];
    }
}
?>

<h2>Role Manage</h2>
<form method="post" action="callback/role.php" enctype="multipart/form-data">
TITLE<input type="text" name="title" value="<?php echo $title;?>"  required><br><hr>
DESCRIPTION<textarea name="description"><?php echo $description?></textarea><br><hr>
<input type="submit">
</form>
<?php
include("footer.php");
?>