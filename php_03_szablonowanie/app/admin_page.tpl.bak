<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tic-Tac-Toe</title>
    <?php
    require_once dirname(__FILE__).'/../config.php';
    include _ROOT_PATH.'/app/security/check.php';
    ?>
    <style>
        .board {
            display: grid;
            grid-template-columns: repeat(3, 100px);
            grid-template-rows: repeat(3, 100px);
            gap: 5px;
            margin: 20px;
        }
        .cell {
            width: 100px;
            height: 100px;
            display: flex;
            justify-content: center;
            align-items: center;
            font-size: 2rem;
            background-color: lightgray;
            cursor: pointer;
        }
        .cell:hover {
            background-color: lightblue;
        }
    </style>
</head>
<body>


    <div class="board">
        <div class="cell" data-cell></div>
        <div class="cell" data-cell></div>
        <div class="cell" data-cell></div>
        <div class="cell" data-cell></div>
        <div class="cell" data-cell></div>
        <div class="cell" data-cell></div>
        <div class="cell" data-cell></div>
        <div class="cell" data-cell></div>
        <div class="cell" data-cell></div>
    </div>
    <h2 id="winnerMessage"></h2>

    <script src="admin_script.js"></script>
</body>
</html>