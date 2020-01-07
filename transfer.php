<?php
session_start();
if($_SESSION['id'] == NULL){
    header('Location:index.php');
}
require_once 'vendor/autoload.php';
use App\classes\Admin;
use App\classes\Money;
$login = new Admin();
$money = new Money();
//$result = $student->viewStudentInfo($_SESSION['brcode']);
$result = $money->viewBranchInfo($_SESSION['id']);

if(isset($_GET['logout'])){
    $login->logout();
}
?>


<html lang="en">
<head>
    <title>Hr Data</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <script src="https://code.jquery.com/ui/1.10.4/jquery-ui.js" xmlns:background-color="http://www.w3.org/1999/xhtml"
            xmlns:background-color="http://www.w3.org/1999/xhtml" xmlns:background-color="http://www.w3.org/1999/xhtml"
            xmlns:background-color="http://www.w3.org/1999/xhtml" xmlns:background-color="http://www.w3.org/1999/xhtml"></script>

</head>
<body >
<?php /*include_once('includes/header.php');*/?><!--
--><?php /*include_once('includes/sidebar.php');*/?>
<nav class="navbar navbar-inverse">
    <div class="container-fluid">
        <div class="navbar-header">
            <a class="navbar-brand" href="#"></a>
        </div>
        <ul class="nav navbar-nav">
            <li class="active"><a href=""><?php echo "branch code=".$_SESSION['id']; ?></a></li>
        </ul>
        <button class="btn btn-danger navbar-btn"><a href="salary.php" style="color:black"   >   Basic & PF </a></button>
        <button class="btn btn-danger navbar-btn"><a href="view.php" style="color:black"   >   View </a></button>
        <button class="btn btn-danger navbar-btn"><a href="?logout=true" style="color:red"   >   Logout </a></button>
    </div>
</nav>

<div class="container">
    <div>
        <form action="" method="post" enctype="multipart/form-data">
            <table class="table" id="myTable" border="1" bgcolor="#f0ffff">
                <thead>
                <tr class="success">
                    <th>T</th>
                    <th>শাখার কোড ও প্রাপক শাখার নাম
                        খা      </th>
                    <th>  সোনালী ব্যাংকের শাখার নাম </th>
                    <th> হিসাব নং</th>
                    <th>টাকার পরিমাণ</th>
                </tr>
                </thead>
                <tbody>
                <?php while($student = mysqli_fetch_assoc($result)) { ?>
                <tr>
                    <td><a href="edit.php?sr=<?php echo $money['id'];?>">Edit</a>
                        <!-- <a href="?status=delete&&id=<?php  /*echo $student['brcode'];*/ ?>" onclick="return confirm('Are you sure to delete this data?')">Delete</a>-->
                        <!--          <a href="info.php?sr=<?php /*echo $student['sr'];*/?>">Info</a>-->
                    </td>


                <tr class="danger" style="font-weight: bold;">
                    <td> <INPUT type="checkbox" name="chk[]"/></td>
                    <td>    <?php echo $money['brname'] ?>  </td>
                    <td><?php echo $money['mtbank'] ?></td>
                    <td> <?php echo $money['psbaccno'] ?></td>
                    <td><input type="text" name="mtamount"  ></td>
                </tr>



                </tbody>
                <?php } ?>

            </table>
            <input type="submit" style="margin: 0 auto;display: block; width:200px; " name="btn"  value="Save">
        </form>
    </div>

</div>

</body>

