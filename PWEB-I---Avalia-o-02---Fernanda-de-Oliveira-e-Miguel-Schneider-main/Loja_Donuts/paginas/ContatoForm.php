<?php
include './funcao.php';
include "../Util.php";

verificar();
head();

$db = new db();
$db->conn();

if (!empty($_POST['id'])) {
    $db->update("contatos", [
        'nome' => $_POST['nome'],
        'email' => $_POST['email'],
        'mensagem' => $_POST['mensagem'],
        'id' => $_POST['id'],
    ]);
    header('location: ContatoList.php');
    
} else if (!empty($_POST)) {
    $db->insert("contatos", [
        'nome' => $_POST['nome'],
        'email' => $_POST['email'],
        'mensagem' => $_POST['mensagem'],
    ]);
    header('location: ContatoList.php');
}

if (!empty($_GET['id'])) {
    $data = $db->find("contatos", $_GET['id']);
}

?>

<div class="col">

    <form action="ContatoForm.php" method="POST">
        <h3>Formulário Contato</h3>

        <div class="mb-3">
            <input type="hidden" name="id" value="<?php echo !empty($data->id) ? $data->id : "" ?>">

            <label for="nome" class="form-label">Nome</label>
            <input type="text" class="form-control" name="nome" value="<?php echo !empty($data->nome) ? $data->nome : "" ?>" placeholder="Nome">
        </div>

        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" name="email" value="<?php echo !empty($data->email) ? $data->email : "" ?>" placeholder="Email">
        </div>

        <div class="mb-3">
            <label for="mensagem" class="form-label">Mensagem</label>
            <textarea class="form-control" name="mensagem" placeholder="Mensagem"><?php echo !empty($data->mensagem) ? $data->mensagem : "" ?></textarea>
        </div>

        <button type="submit" class="btn btn-success">Salvar</button>
        <a class="btn btn-primary" href="./ContatoList.php">Voltar</a>
    </form>
</div>

<?php
footer();
?>
