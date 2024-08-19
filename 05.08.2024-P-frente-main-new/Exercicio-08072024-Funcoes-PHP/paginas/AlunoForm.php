<?php
  include "./aula03_funcao.php";
  include "../db.class.php";

  head();

  $db = new db();
  $db->conn();
  //var_dump($_POST)

  if(!empty($_POST['id'])){
    //    var_dump($_POST);
  //      exit;
          $db->update([
          'nome'=>$_POST['nome'],
          'telefone'=>$_POST['telefone'],
          'cpf'=>$_POST['cpf'],
          'id'=>$_POST['id'],
          ]);
          header('location: AlunoList.php');
   }else if(!empty($_POST)){
    //    var_dump($_POST);
  //      exit;
          $db->insert([
          'nome'=>$_POST['nome'],
          'telefone'=>$_POST['telefone'],
          'cpf'=>$_POST['cpf'],
          ]);
          header('location: AlunoList.php');
   }
  
      if(!empty($_GET['id'])){
        $data = $db->find($_GET['id']);
       // var_dump($data);
       // exit;
      }

?>
<div class="col">

<form action="AlunoForm.php" method="post">
 <h3>Formulário Aluno<h3>
    <div class="mb-3">


    <input type="hidden"
      name="id"
      value="<?php echo !empty($data->id) ? $data->id : "" ?>">


      <label for="nome" class="form-label">Nome</label>
      <input type="text" class="form-control" name="nome" require
      value="<?php echo !empty($data->nome) ? $data->nome : "" ?>"
      placeholder="Nome">

    </div>

    <div class="mb-3">
      <label for="email" class="form-label">CPF</label>
      <input type="text" class="form-control" name="cpf"
      value="<?php echo !empty($data->cpf) ? $data->cpf : "" ?>"
      placeholder="432.432.445.33">
    </div>

    <div class="mb-3">
      <label for="telefone" class="form-label">Telefone</label>
      <input type="text" class="form-control" name="telefone"
      value="<?php echo !empty($data->telefone) ? $data->telefone : "" ?>"
      placeholder="(49) 5444-2322">
    </div>

    <button type="submit" class="btn btn-success">Salvar</button>
    <a class ="btn btn-primary" href="./AlunoList.php">Voltar</a>
    </form>
</div>

<?php
 footer();
?>