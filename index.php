<?php
    include_once("php/baseUrl.php"); 
    include_once("php/connection.php");

    //query pra pegar coisas do banco de dados
    $select = $conn->query("SELECT * FROM lista");
    
    
?> 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?=$baseUrl?>/css/style.css">
    <link rel="stylesheet" href="<?=$baseUrl?>/css/reset.css">
    <script src="<?=$baseUrl?>/js/script.js" defer></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <title>Lista de Tarefas</title>
</head>
<body>
    <div class="todo-container">
        <header>
            <h1>Lista de Tarefas</h1>
        </header>
        <form action="<?= $baseUrl ?>/php/insert.php" id="todo-form" method="POST">
            <p>Adicione sua tarefa:</p>
            <div class="form-control">
                <input type="text" name="task" id="todo-input" placeholder="O que você vai fazer?"/>
                <button type="submit" id="todo-btn">
                    <i class="fa-solid fa-plus"></i>
                </button>
            </div>
        </form>
        <form id="edit-form" class="hide">
            <p>Edite sua tarefa:</p>
            <div class="form-control">
                <input type="text" id="edit-input"/>
                <button type="submit" id="edit-btn">
                    <i class="fa-solid fa-check-double"></i>
                </button>
            </div>
            <button id="cancel-edit-btn">
                Cancelar
            </button>
        </form>
        <div class="toolbar">
            <div id="search">
                <h4>Pesquisar:</h4>
                <form action="">
                    <input type="text" id="search-input" placeholder="Buscar"/>
                    <button id="erase-button">
                        <i class="fa-solid fa-delete-left"></i>
                    </button>
                </form>
            </div>
            <div id="filter">
                <h4>Filtrar:</h4>
                <select id="filter-select">
                    <option value="all">Todos</option>
                    <option value="done">Feitas</option>
                    <option value="todo">A fazer</option>
                </select>
            </div>
        </div>
        <div id="todo-list">
            <div class="todo done">
                <h3>Estou fazendo algo</h3>
                <button class="finish-todo">
                    <i class="fa-solid fa-check"></i>
                </button>
                <button class="edit-todo">
                    <i class="fa-solid fa-pen"></i>
                </button>
                <button class="remove-todo">
                    <i class="fa-solid fa-xmark"></i>
                </button>
            </div>
            <div class="todo">
                <h3>Estudar</h3>
                <button class="finish-todo">
                    <i class="fa-solid fa-check"></i>
                </button>
                <button class="edit-todo">
                    <i class="fa-solid fa-pen"></i>
                </button>
                <button class="remove-todo">
                    <i class="fa-solid fa-xmark"></i>
                </button>
            </div>

            <?php if(isset($select)): ?>
                <?php foreach($select as $tarefa): ?>
                    <div class="todo pai-edit-h3">
                        <h3 class="edit-h3"><?= $tarefa['tarefa'] ?></h3>
                        <button class="finish-todo">
                            <i class="fa-solid fa-check"></i>
                        </button>
                        <button id="botaoEdit-<?= $select['id'] ?>" class="edit-todo" onclick=teste()>
                            <i class="fa-solid fa-pen"></i>
                        </button>
                        <button class="remove-todo">
                            <i class="fa-solid fa-xmark"></i>
                        </button>
                    </div>
                <?php endforeach; ?>
            <?php else: ?>
                <h1>nao tem nada aqui porra kk</h1>
            <?php endif; ?>
            
        </div>
    </div>
</body>
</html>