<?php


namespace App\classes;


class Money
{
    public function viewBranchInfo($id){
        echo "Branch Code=".$_SESSION['id'];
        $link = mysqli_connect('localhost','root','','money');
        $sql = "SELECT * FROM mtransfer WHERE  brcode = $id";
        if($result = mysqli_query($link,$sql)){
            return $result;
        } else {
            die('Query Problem'.mysqli_error($link));
        }
    }



}