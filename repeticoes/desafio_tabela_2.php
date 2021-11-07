<div class="titulo">Desafio Tabela #02</div>

<form action="#" method="post">
    <div>
        <label for="linhas">Linhas</label>
        <input type="number" value=<?= $_POST['linhas'] ?? 10 ?>
            name="linhas" id="linhas">
    </div>
    <div>
        <label for="colunas">Colunas</label>
        <input type="number" value=<?= $_POST['colunas'] ?? 10 ?>
            name="colunas" id="colunas">
    </div>
    <button>Gerar Tabela</button>
</form>

<table>
    <?php
    $n_lines = intval( ($_POST['linhas'] ?? 10) );
    $n_columns = intval( ($_POST['colunas'] ?? 10) );

    $value = 1;
    for ($i = 0; $i < $n_lines; $i++){
        echo "<tr>";
        for ($j=0; $j < $n_columns; $j++){
            echo "<td>{$value}</td>";
            $value++;
        };
        echo "</tr>";

    };

    ?>
</table>

<style>
    form * {
        font-size: 1.8rem;
    }
    
    form > div {
        margin-bottom: 10px;
    }

    table {
        border: 1px solid #444;
        border-collapse: collapse;
        margin: 20px 0px;
    }

    table tr {
        border: 1px solid #444;
    }

    table td {
        padding: 10px;
        text-align: center;
        border: 1px solid black;
    }
</style>
