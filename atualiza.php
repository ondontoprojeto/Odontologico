
<?php

include 'conexao.php';

							$cpf = $array['cpf'];
                            $rg = $array['rg'];
                            $nome = $array['nome'];
                            $orcamento = $array['orcamento'];
							$telefone = $array['telefone'];
                            $celular = $array['celular'];
                            $email = $array['email'];
                            $cep = $array['cep'];
                            $endereco = $array['endereco'];
                            $complemento = $array['complemento'];
                            $bairro = $array['bairro'];
							$nascimento = $array['nascimento'];
                            $inicio_tratamento = $array['inicio_tratamento'];
                            $cidade = $array['cidade'];
                            $uf= $array['uf'];
                            $situacaoficha = $array['situacaoficha'];
                            $doencabase = $array['doencabase'];
                            $alergia = $array['alergia'];
                            $medicamentos = $array['medicamentos'];
                            $cirurgia = $array['cirurgia'];
                            $internacoes = $array['internacoes'];
                            $pa = $array['pa'];
                            $queixaprinc = $array['queixaprinc'];


$sql = "UPDATE `pessoa` 
SET 
`cpf`= '$cpf',
`rg`= '$rg',
`nome`='$nome',
`orcamento`= '$orcamento',
`telefone`='$telefone',
`celular`='$celular',
`email`='$email',
`cep`='$cep',
`endereco`='$endereco',
`complemento`= '$complemento',
`bairro`='$bairro',
`nascimento`='$nascimento',
`cidade`='$cidade',
`uf`='$uf',
`situacaoficha`= '$situacaoficha',
`doencabase`='$doencabase',
`alergia`='$alergia',
`medicamentos`='$medicamentos',
`cirurgia`='$cirurgia',
`internacoes`='$internacoes',
`pa`='$pa',
`queixaprinc`='$queixaprinc' 
WHERE 1 id_pessoa = $id";

$atualiza = mysqli_query($conexao, $sql);

?>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">	
<div class="container" style="width:400px">
<center>
    <h3>Atualizado com Sucesso!</h3>
    <div style="margin-top: 10px">
    <a href="listar_pessoa.php" class="btn btn-sm btn-warning" style="color:#fff">Voltar</a>
    </div>    
</center>
</div>
?>