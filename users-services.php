
<?php
    include_once("config.php");
    switch ($_REQUEST['action']) {
        case 'create':
            $userName = $_POST['UserName'];
            $password = $_POST['Password'];
            $email = mysqli_real_escape_string($conn,$_POST['Email']);
            $sql = "INSERT INTO Users (UserName,Senha, Email) VALUES ('{$userName}','{$password}','{$email}')";
            $result = $conn->query($sql);
            if($result == true){
                echo '<script> alert("Inserido com sucesso"); </script>';
                echo '<script> location.href = "?page=listUsers" </script>';
            }
        break;
        case 'update':
            $id = mysqli_real_escape_string($conn,$_REQUEST['Id']);
            $userName = mysqli_real_escape_string($conn,$_POST['UserName']);
            $password =  mysqli_real_escape_string($conn,$_POST['Password']);
            $email = mysqli_real_escape_string($conn,$_POST['Email']);
            $sql = "UPDATE Users SET UserName = '{$userName}', Email = '{$email}', Senha = '{$password}'  WHERE Id = {$_POST['Id']}";
            $res = $conn->query($sql);
            if($res == true){
                echo '<script> alert("Atualizado com sucesso"); </script>';
                echo '<script> location.href = "?page=listUsers" </script>';
            }
        break;

        case 'delete':
            $id = mysqli_real_escape_string($conn,$_REQUEST['Id']);
            $sql = "DELETE FROM Users WHERE Id = {$id}";
            $res = $conn->query($sql);
            if($res == true){
                echo '<script> alert("Deletado com sucesso"); </script>';
                echo '<script> location.href = "?page=listUsers" </script>';
            }
        break;
    }