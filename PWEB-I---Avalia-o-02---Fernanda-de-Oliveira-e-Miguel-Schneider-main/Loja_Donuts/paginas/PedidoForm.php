<?php
include './funcao.php';
include "../Util.php";

verificar();
head();

$db = new db();
$db->conn();

if (!empty($_POST['id'])) {
    $db->update("pedido", [
        'cliente' => $_POST['cliente'],
        'data' => $_POST['data'],
        'total' => $_POST['total'],
        'id' => $_POST['id'],
    ]);
    header('location: PedidoList.php');
    
} else if (!empty($_POST)) {
    $db->insert("pedido", [
        'cliente' => $_POST['cliente'],
        'data' => $_POST['data'],
        'total' => $_POST['total'],
    ]);
    header('location: PedidoList.php');
}

if (!empty($_GET['id'])) {
    $data = $db->find("pedido", $_GET['id']);
}

?>

<div class="col">

    <form action="PedidoForm.php" method="POST">
        <h3>Formulário de Pedido</h3>

        <div class="mb-3">
            <input type="hidden" name="id" value="<?php echo !empty($data->id) ? $data->id : "" ?>">

            <label for="cliente" class="form-label">Cliente</label>
            <input type="text" class="form-control" name="cliente" value="<?php echo !empty($data->cliente) ? $data->cliente : "" ?>" placeholder="Nome do Cliente">
        </div>

        <div class="mb-3">
            <label for="data" class="form-label">Data</label>
            <input type="date" class="form-control" name="data" value="<?php echo !empty($data->data) ? $data->data : "" ?>" placeholder="Data do Pedido">
        </div>

        <div class="mb-3">
            <label for="total" class="form-label">Total</label>
            <input type="number" step="0.01" class="form-control" name="total" value="<?php echo !empty($data->total) ? $data->total : "" ?>" placeholder="Valor Total">
        </div>

        <button type="submit" class="btn btn-success">Salvar</button>
        <a class="btn btn-primary" href="./PedidoList.php">Voltar</a>
    </form>
</div>

<?php
footer();
?>
