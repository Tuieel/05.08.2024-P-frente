<?php
include './funcao.php';
include "../Util.php";

verificar();
head();

$db = new db();
$db->conn();

if (!empty($_POST['id'])) {
    $db->update("cardapio", [
        'preco' => $_POST['preco'],
        'estoque' => $_POST['estoque'],
        'descricao' => $_POST['descricao'],
        'id' => $_POST['id'],
    ]);
    header('location: CardapioList.php');
    
} else if (!empty($_POST)) {
    $db->insert("cardapio", [
        'preco' => $_POST['preco'],
        'estoque' => $_POST['estoque'],
        'descricao' => $_POST['descricao'],
    ]);
    header('location: CardapioList.php');
}

if (!empty($_GET['id'])) {
    $data = $db->find("cardapio", $_GET['id']);
}

?>
<div class="col">

    <form action="CardapioForm.php" method="POST">
        <h3>Formulário Cardápio</h3>

        <div class="mb-3">
            <input type="hidden" name="id" value="<?php echo !empty($data->id) ? $data->id : "" ?>">

            <label for="preco" class="form-label">Preço</label>
            <input type="text" class="form-control" name="preco" value="<?php echo !empty($data->preco) ? $data->preco : "" ?>" placeholder="Preço">
        </div>

        <div class="mb-3">
            <label for="estoque" class="form-label">Estoque</label>
            <input type="text" class="form-control" name="estoque" value="<?php echo !empty($data->estoque) ? $data->estoque : "" ?>" placeholder="Estoque">
        </div>

        <div class="mb-3">
            <label for="descricao" class="form-label">Descrição</label>
            <input type="text" class="form-control" name="descricao" value="<?php echo !empty($data->descricao) ? $data->descricao : "" ?>" placeholder="Descrição">
        </div>

        <button type="submit" class="btn btn-success">Salvar</button>
        <a class="btn btn-primary" href="./CardapioList.php">Voltar</a>
    </form>
</div>

<?php
footer();
?>
