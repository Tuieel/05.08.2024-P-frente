<?php
include './funcao.php';
include "../Util.php";

verificar();
head();

$db = new db();
$db->conn();

if (!empty($_GET['id'])) {
    $db->destroy("pedido", $_GET['id']);
}

if (!empty($_POST)) {
    $dados = $db->search("pedido", $_POST);
} else {
    $dados = $db->all("pedido");
}
?>

<div class="col">

    <h3>Listagem de Pedidos</h3>

    <div class="container-fluid">
        <form class="d-flex" method="post">
            <div class="col-2 px-1">
                <select name="tipo" class="form-select me-4">
                    <option value="cliente">Cliente</option>
                    <option value="data">Data</option>
                    <option value="total">Total</option>
                </select>
            </div>
            <div class="col-4 px-1">
                <input class="form-control me-4" type="search" name="valor" placeholder="Pesquisar" aria-label="Search">
            </div>
            <div class="col-4">
                <button class="btn btn-outline-success" type="submit">Pesquisar</button>
                <a class="btn btn-outline-primary" href="./PedidoForm.php">Novo</a>
            </div>
        </form>
    </div>

    <table class="table table-striped table-hover">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Cliente</th>
                <th scope="col">Data</th>
                <th scope="col">Total</th>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach ($dados as $item) {
                echo "<tr>
                    <th scope='row'>$item->id</th>
                    <td>$item->cliente</td>
                    <td>$item->data</td>
                    <td>$item->total</td>
                    <td><a href='PedidoForm.php?id=$item->id'>Editar</a></td>
                    <td><a onclick='return confirm(\"Deseja Excluir?\")' href='PedidoList.php?id=$item->id'>Deletar</a></td>
                </tr>";
            }
            ?>
        </tbody>
    </table>
</div>

<?php
footer();
?>
