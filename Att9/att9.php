
        <?php
        require_once "Controle/Usuario.php";
        require_once "Models/Produto.php";

        use Att9\Controle\Usuario;
        use Att9\Models\Produto;

        $usuario = new Usuario();
        $produto = new Produto();

        echo "<div class='resultado'>";
        $usuario->exibirInfo();
        $produto->exibirInfo();
        echo "</div>";
    ?>








