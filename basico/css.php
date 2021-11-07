<div class="titulo">Integração CSS</div>

<h1 center>
<?php
echo 'Hello';
// writing html inside php
echo '<small>';
echo ' World!';
echo '</small>';


?>
</h1>

<?="<div center azul>Another way to express yourself!</div>" ?>

<br>
<div center><button dobro><?="Cool!"?></button></div>

<style>
    button {
        padding: 5px 20px;
        background-color: blue;
        color: whitesmoke;
        font-weight: bold;
        border-radius: <?=2*10?>px;
    }

    [center] {
        display: flex;
        justify-content: center;
    }

    [azul] {
        color: blue;
    }

    [dobro] {
        font-size: 2rem;    
    }
</style>