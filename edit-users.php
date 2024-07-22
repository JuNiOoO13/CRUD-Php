<link rel="stylesheet" href="styles/style.css">
<style>
    .registerContainer{
        background-color: rgba(255,255,255,0.1);
        width: 30rem;
        height: 30rem;
        border: 1px solid var(--focus-color);
        border-radius:30px ;
        
    }
    form{
        height: 100%;
    }
    form ul{
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        gap:20px;
        height: 100%;

    }
    form li{
        width: 70%;
    }
    form input{
        width: 100%;
        padding: 15px;
        color:var(--main-color);
        
    }
</style>

<?php 
    include_once("config.php");
    $id = $_REQUEST['Id'];
    $sql = "SELECT * FROM Users WHERE Id = {$id}";
    $res = $conn->query($sql);
    $user = $res->fetch_all()[0];


?>

<div class="registerContainer">
    <form action="?page=userService" method="POST">
        <input type="hidden" name="action" value="update">
        <input type="hidden" name="Id" value=<?php echo $user[0] ?>>
        <ul>
            <li>
                <input type="text" name="UserName" placeholder="Nome" value=<?php echo $user[1] ?> >
            </li>
            <li>
                <input type="email" name="Email" placeholder="Email" value=<?php echo $user[2] ?>>
            </li>
            <li>
                <input type="password" name="Password" placeholder="Senha" value=<?php echo $user[3] ?> >
            </li>
            <li>
                <input type="submit" >
            </li>
        </ul>
    </form>
</div>