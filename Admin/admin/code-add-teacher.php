<?php
session_start();
include("./includes/config.php");

if(isset($_POST['delete_teacher']))
{
    $teacher_id = $_POST['delete_teacher'];

    try {

        $query = "DELETE FROM accounts WHERE id=:teacher_id";
        $statement = $conn->prepare($query);
        $data = [
            ':teacher_id' => $teacher_id
        ];
        $query_execute = $statement->execute($data);

        if($query_execute)
        {
            $_SESSION['message'] = "Deleted Successfully";
            header('Location: teacher.php');
            exit(0);
        }
        else
        {
            $_SESSION['message'] = "Not Deleted";
            header('Location: tecaher.php');
            exit(0);
        }

    } catch(PDOException $e){
        echo $e->getMessage();
    }
}



    if(isset($_POST['update_teacher_btn'])){
          $teacher_id = $_POST['teacher_id'];
          $type = $_POST['type'];
          $email = $_POST['email'];
          $password = $_POST['password'];
          try{

            $query = "UPDATE accounts SET type=:type, email:=email, password:=password WHERE id:=teacher_id LIMIT 1";
            $statement = $conn->prepare($query);

            $data = [
                ':type' =>$type,
                ':email' =>$email,
                ':password' =>$password,
                ':teacher_id' =>$teacher_id
            ];
            $query_execute = $statement->execute($data);
            if($query_execute)
            {
                $_SESSION['message'] = "Update Successfully";
                header('Location: teacher.php');
                exit(0);
            }
            else{
                $_SESSION['message'] = "Not Update";
                header('Location: teacher.php');
                exit(0);
            }

          }
          catch(PDOException $e){
            echo $e->getMessage();
          }
    }

    if(isset($_POST['save_teacher_btn']))
    {
        // $IDGiaSu = $_POST['IDGiaSu'];
        // $fullname = $_POST['fullname'];
        // $gender = $_POST['gender'];
        // $phone = $_POST['phone'];
        // $address = $_POST['address'];
        // $password = $_POST['password'];
        // $idmajors = $_POST['idmajors'];
        // $namemajors= $_POST['namemajors'];
        // $idlevel = $_POST['idlevel'];
        // $namelevel = $_POST['namelevel'];
        // $id = $_POST['id'];
        $type = $_POST['type'];
        $email = $_POST['email'];
        $password = $_POST['password'];

        $query = "INSERT INTO accounts (type, email, password) VALUES (:type, :email, :password)";
        $query_run = $conn->prepare($query);
        $data = [
            // ':IDGiaSu'=>$IDGiaSu,
            // ':fullname'=>$fullname,
            // ':gender'=>$gender,
            // ':phone'=>$phone,
            // ':address'=>$address,
            // ':password'=>$password,
            // ':idmajors'=>$idmajors,
            // ':namemajors'=>$namemajors,
            // ':idlevel'=>$idlevel,
            // ':namelevel'=>$namelevel,
            // ':id'=>$id,
            ':type'=>$type,
            ':email'=>$email,
            ':password'=>$password,
        ];
        $query_execute = $query_run->execute($data);
        if($query_execute)
        {
            $_SESSION['message'] = "Insterted Successfully";
            header('Location: teacher.php');
            exit(0);
        }
        else{
            $_SESSION['message'] = "Not Insterted";
            header('Location: teacher.php');
            exit(0);
        }
    }
?>