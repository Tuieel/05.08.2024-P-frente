<!DOCTYPE>
<html>
 <head>
  <title>Exemplo 1</title>
  </head>
  <body>
  <?php
    $var = 'Web';
    $numday = '2';
    $idade = 19;
    $name ="Miguel Schneider";
    $ano_atual = 2024;
    $ano_nasc = 2005;
    $ano_nasc_ant = $ano_atual - $ano_nasc;
    echo "Olá Mundo!"."<br>"; 
    echo "Estou aprendendo PHP"."<br>";
    echo "Olá, você está navegando na $var há exatamanetemente $numday dia(s)!";
    echo "Eu tenho $idade anos e meu nome é $name"."<br>";

    if ($idade >= 18){
      echo $name. " Você é maior de idade!"."<br>";
    }else{
    echo $nome. "Você é menor de idade!"."<br>";
    }

    echo "Eu nasci em $ano_nasc e estou no ano de $ano_atual, desse modo, minha idade atual é $ano_nasc_ant"."<br>";

     $n = 0;
    echo "<br>"."Laço utilizando WHILE crescente:"."<br>"; 
     while ($n <= 10){

     echo "$n ";
     $n++;
     }

    echo "<br>"."Laço utilizando FOR crescente:"."<br>";
     for ($n = 0; $n <= 10; $n++) {
    echo "$n ";
     }

     echo "<br>"."Laço utilizando DO WHILE crescente:"."<br>";
     $num = 0;
     do {
     echo "$num ";
     $num++;
     } while ($num != 10);

     $n = 10;
    echo "<br>"."Laço utilizando WHILE decrescente:"."<br>"; 
     while ($n >= 0){
     echo "$n ";
     $n--;
     }

    $hoje = date('d/m/Y');
    echo "<br>".$hoje;
  
    ?>
  </body>
</html>
