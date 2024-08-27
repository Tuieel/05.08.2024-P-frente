<?php
    include "./funcao.php";
    include "../Util.php";
    verificar();

    head();
?>
    <h3>Loja de Donuts</h3>
    <?php
        echo "<p>Seja bem-vindo usuário <b>".$_SESSION['cpf']."</b> <a href='LoginForm.php'>Sair</a></p>";
    ?>
    <br><br><br>
    <nav>
        <ul>
            <li><a href="./CardapioList.php">Cardápio</a></li>
            <li><a href="./ContatoList.php">Contatos</a></li>
            <li><a href="./PedidoList.php">Pedidos</a></li>
            <li><a href="./UsuarioList.php">Usuários</a></li>
        </ul>
    </nav>
<?php
    footer();
?>
