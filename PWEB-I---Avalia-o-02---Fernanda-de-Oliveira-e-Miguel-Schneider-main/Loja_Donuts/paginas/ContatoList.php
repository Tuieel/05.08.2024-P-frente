<?php
include './funcao.php';
include "../Util.php";

verificar();
head();

$db = new db();
$db->conn();

if (!empty($_GET['id'])) {
    $db->destroy("contatos", $_GET['id']);
}

if (!empty($_POST)) {
    $dados = $db->search("contatos", $_POST);
} else {
    $dados = $db->all("contatos");
}
?>

<div class="col">

    <h3>Listagem de Contatos</h3>

    <div class="container-fluid">
        <form class="d-flex" method="post">
            <div class="col-2 px-1">
                <select name="tipo" class="form-select me-4">
                    <option value="nome">Nome</option>
                    <option value="email">Email</option>
                    <option value="mensagem">Mensagem</option>
                </select>
            </div>
            <div class="col-4 px-1">
                <input class="form-control me-4" type="search" name="valor" placeholder="Pesquisar" aria-label="Search">
            </div>
            <div class="col-4">
                <button class="btn btn-outline-success" type="submit">Pesquisar</button>
                <a class="btn btn-outline-primary" href="./ContatoForm.php">Novo</a>
            </div>
        </form>
    </div>

    <table class="table table-striped table-hover">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nome</th>
                <th scope="col">Email</th>
                <th scope="col">Mensagem</th>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach ($dados as $item) {
                echo "<tr>
                    <th scope='row'>$item->id</th>
                    <td>$item->nome</td>
                    <td>$item->email</td>
                    <td>$item->mensagem</td>
                    <td><a href='ContatoForm.php?id=$item->id'>Editar</a></td>
                    <td><a onclick='return confirm(\"Deseja Excluir?\")' href='ContatoList.php?id=$item->id'>Deletar</a></td>
                </tr>";
            }
            ?>
        </tbody>
    </table>
</div>

<?php
footer();
?>
