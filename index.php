<?php
include ('config.php');
include ('funcoes.php');
/* */ /*coméntario de bloco*/
// "// comentario de linha"
// "#" coméntario de linha
//início - declaração de variáveis

echo parcelar(1.27,12)*127.74; // 10% em 4 parcelas

// $nome = "Kauã";
// $data_nasc = date('2003/12/24');
// echo($nome." - ".$data_nasc);
// echo('<br>');
// $hoje = date("d/M/Y H:i:s");
// echo($hoje);
// echo('<br>');
// /*
// $date = date_create('2000-01-01', timezone_open('America/Sao_Paulo'));
// echo date_format($date, 'Y-m-d H:i:sP') . "\n";
// echo('<br>');
// date_timezone_set($date, timezone_open('Pacific/Chatham'));
// echo date_format($date, 'Y-m-d H:i:sP') . "\n";
// */
// $valor = 78.98;
// $idade = 10;
// $teste = true;
// final - declaração de variáveis

//estruturas de decisão

//estruturas de repetição

// declaração e uso de matrizes
// $alunos = array();
// $alunos[0] = "Maria";
// $alunos[1] = "João";
// $nota= array(9,8,7,4);
// print_r($nota);
// echo("<br>");
// $pontos = array('José'=>'11', 'Lucas'=>'5', 'Jean'=>'9');
// print_r($pontos);
// echo("<br>");

// // estrutura de decisão
// if($idade>=30){// se verdadeiro então

//     echo("Teste retornou verdadeiro");

// }

// $a = 1; $b = 15;

// if($a > $b){

//     echo("O Valor '$a' é a maior '$b'");



// }elseif($a < $b){

//     echo("O Valor '$a' é menor que '$b'");



// }

// else{

//     echo("O Valor '$a' é a igual '$b'");

// }
// echo("<br>");
// $n = 9;
// //estruturas de repetição
// // usada quando não conheço o limite
// while ($a < 11) {// tabuada de um número
//     echo($n. ' x '.$a." = ".($a*$n)."<br>");
//     $a = $a +1;
// }
// echo("<br>");
// for ($i=1; $i < 11; $i++) {
//     echo($n.' x '.$i." = ".($i*$n)."<br>");
// echo("<br>");
// $nota= array(9,8,7,4);

// }for ($i=0; $i < 4; $i++) {
//     echo($nota)[$i];
//     echo("<br>");
// }

// declaração e uso de matrizes
$pessoas = array(
    '98H47O'=>(['Well', 'Professor']), 
    '25P45F'=>(['Paloma', 'Linda']), 
    '85U41R'=>(['Ellen', 'Fofa']), 
    '63D23A'=>(['Helen', 'Maravilha'])
);

if (isset($_POST['enviar'])){  // se o usuário clicar no botão
    $id_frm = $_POST['id'];
    $nome_frm = $_POST['nome'];
    $descri_frm = $_POST['descricao'];
    $pessoas += [$id_frm => ([$nome_frm, $descr_frm])];
}
?>
<!DOCTYPE html>
<html lang="pt-BR">
    <head>

        <link rel="stylesheet" href="css/style.css">
    </head>
    <body>
        <form action="aula4.php" method="post">
            <button type="submit">Parcelamento</button>
            <br>
            <hr>
        </form>
        <form action="# " method="get">
            <label for="id">
                Id
                <Input type="text" name="id" placeholder="Entre com o id" required>
            </label><br>
            <label for="nome">
                Nome
                <input type="text" name="nome" placeholder= "Digite o nome"required>
            </label><br>
            <label for="descricao">
                Descrição
                <input type="text" name="descricao" placeholder="Digite uma descrição">
            </label><br>
            <button type="submit" name="enviar" id="btn-enviar">Enviar</button>
        </form>
        <table class="tabelinha">
            <th>Id</th>
            <th>Nome</th>
            <th>Descrição</th>
            <tr>
                <td>10Y96B</td>
                <td>Nathalia</td>
                <td>Fofinha</td>
            </tr>
            <?php foreach ($pessoas as $id => $nome) {?>
                <tr>
                    <td><?php echo($id);?></td>
                    <td><?php echo($nome[0]);?></td>
                    <td><?php echo($nome[1]);?></td>
                </tr>
            <?php } ?>    
        </table>
    </body>    
</html>