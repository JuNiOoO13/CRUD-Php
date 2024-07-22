<link rel="stylesheet" href="styles/style.css">
<style>

    .tableContainer{
        display:flex; 
        flex-direction:column;
        gap:10px;
    }
    .addBtn{
        margin-left:auto;
        background-color: var(--focus-color);
        color:var(--secondary-color);
        padding: 10px;
        border-radius: 10px;
        cursor: pointer;
        text-decoration: none;
    }
    table{
        border:1px solid var(--focus-color);
        overflow: hidden;
        border-radius: ;
    }
        table tr:first-child{
            background-color: var(--focus2-color);
        }

            table th, table td{
                padding: 10px 20px;
            }

            table button{   
                background-color: var(--color);
                padding:5px;
                border-radius: 5px;
                cursor: pointer;

            }
</style>

<?php 
    include_once("config.php");
    $sql = "SELECT * FROM Users";
    $res = $conn->query($sql);
    $hasRows = $res->num_rows > 0;
?>

<div class="tableContainer">
    <a class="addBtn" href="?page=newUser">Add</a>
    <table>
        <tr>
            <th>#</th>
            <th>Nome</th>
            <th>Email</th>
            <th>Senha</th>
            <th></th>
            <th></th>
        </tr>
            <?php 
                if ($hasRows) {
                    while ($row = $res->fetch_assoc()) {
                        echo "<tr>";
                        echo "<td>{$row['Id']}</td>";
                        echo "<td>{$row['UserName']}</td>";
                        echo "<td>{$row['Email']}</td>";
                        echo "<td>{$row['Senha']}</td>";
                        echo "<td>
                        <button onclick=\"if(confirm('Deseja Excluir ? ')){ location.href = '?page=userService&Id={$row['Id']}&action=delete'}\" style='--color:red'>Deletar</button>
                            </td>";
                        echo "<td>
                        <button onclick=\"location.href = '?page=editUser&Id={$row['Id']}'\" style='--color:green'>Editar</button>
                            </td>";
                        echo "</tr>";
                    }
                }
            ?>
        
    </table>
</div>
