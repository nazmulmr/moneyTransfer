<?php


namespace App\classes;


class Admin
{
    public function adminLoginCheck(){
        extract($_POST);
        //$md5password = md5($password);
        $link = mysqli_connect('localhost','root','','money');
        //  $sql = "SELECT * FROM users WHERE id = '$id' && password = '$md5password'";
        // $id ='1001';
        $sql = "SELECT * FROM users WHERE id = '$id' and password='$password'";
        if($result = mysqli_query($link,$sql)){
            $user = mysqli_fetch_assoc($result);
            if($user){
                echo "LoginCheck";
                session_start();
                $_SESSION['id'] = $user['id'];
                //    $_SESSION['name'] = $user['name'];
                header('location:transfer.php');
            } else { echo "sss";
                header('location:login.php');
            }
        } else {
            die('Query Problem'.mysqli_error($link));
        }
    }

    public function logout(){
        unset($_SESSION['brcode']);
        unset($_SESSION['name']);

        header('Location:index.php');
    }
}