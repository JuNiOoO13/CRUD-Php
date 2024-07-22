<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projeto</title>
    <link rel="stylesheet" href="styles/style.css">
    <style>
        main{
            display: flex;
            justify-content: center;
            align-items: center;
            margin-top: 6rem;
        }

        .btnEffect{
            overflow: hidden;     
            position: relative;     
        }
        .btnEffect::after{
            content: "";
            position: absolute;
            bottom: -1px;
            left: 0;
            width: 100%;
            height: 2px;
            background-color: var(--secondary-color);
            transform: translateX(-101%);
            transition: transform .4s ease;
        }
        .btnEffect:hover::after{
            transform: translateX(0);
        }

        .mainNavBar{
            width: 100%;
            border-bottom: 1px solid red;
            height: 4rem;
            background-color: var(--main-color);
            display: flex;
            position: fixed;
            top:0;
            left:0;
            z-index: 9999;
            justify-content: flex-end;
            align-items: center;
            box-shadow: 0px 0px 10px var(--focus-color);
        }
            .mainNavBar nav{
                margin-right: 5%;
            }
                .mainNavBar nav a{
                    text-decoration: none;
                    color: var(--focus-color);
                    
                }
                
    </style>
</head>
<body>
    
    <header>
        <div class="mainNavBar">
            <nav>
                <ul>
                    <li class="btnEffect">
                        <a href="?page=listUsers">
                            <h2>Usuarios</h2>
                        </a>
                        
                    </li>
                </ul>
                
            </nav>
        </div>
        
    </header>
    <main>
        <?php
            switch (@$_REQUEST["page"]) {
                case 'listUsers':
                    include('list-users.php');
                break;
                case 'newUser':
                    include('new-users.php');
                break;

                case 'editUser':
                    include('edit-users.php');
                break;
                case 'userService':
                    include('users-services.php');
                break;
            }

        ?>
    </main>
    

</body>
</html>