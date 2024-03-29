<h1>Sua lista de objetos cadastrados:</h1>


<?php


// Verifica se a lista de objetos existe e não está vazia
if (isset($lista_objetos) && !empty($lista_objetos)) {
    // Itera sobre a lista de objetos
    foreach ($lista_objetos as $objeto) {

?>
</tr>

<?php

    }
} else {

    // Exibe uma mensagem informativa
    echo "<p>Você ainda não cadastrou nenhum objeto.</p>";

}

?>

</table>

</body>
</html>



