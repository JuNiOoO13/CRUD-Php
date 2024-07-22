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

<div class="registerContainer">
    <form action="?page=userService" method="POST">
        <input type="hidden" name="action" value="create">
        <ul>
            <li>
                <input type="text" name="UserName" placeholder="Nome">
            </li>
            <li>
                <input type="email" name="Email" placeholder="Email">
            </li>
            <li>
                <input type="password" name="Password" placeholder="Senha">
            </li>
            <li>
                <input type="submit" >
            </li>
        </ul>
    </form>
</div>