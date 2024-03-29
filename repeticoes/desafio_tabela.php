<div class="titulo">Desafio Tabela #01</div>

<?php
$matrix = [
    ['01', '02', '03', '04', '05'],
    ['06', '07', '08', '09', '10'],
    ['11', '12', '13', '14', '15'],
    ['16', '17', '18', '19', '20']
];

foreach($matrix as $line){
    foreach($line as $value) {
        echo "$value ";
    }
    echo '<br>';
}

?>

<table>
    <?php
        foreach($matrix as $line) {
            echo '<tr>';
            foreach($line as $value) {
                echo "<td>$value</td>";
            }
            echo "</tr>";
        }
    ?>
</table>

<table>
    <?php
        foreach($matrix as $index => $line) {
            $row_style = $index % 2 == 0 ? 
                'background-color: lightblue;' : ''; 
            echo "<tr style='{$row_style}'>";
            foreach($line as $value) {
                echo "<td>$value</td>";
            }
            echo "</tr>";
        }
    ?>
</table>



<style>
    table {
        border: 1px solid #444;
        border-collapse: collapse;
        margin: 20px 0px;
    }

    table tr {
        border: 1px solid #444;
    }

    table td {
        padding: 10px 20px;
    }
    
</style>
