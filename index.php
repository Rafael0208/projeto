< html >

< cabeça >
< title > Exemplo PHP </ title >
</ cabeça >
< corpo >

<?php
ini_set(" display_errors ", 1 );
header( 'Tipo de conteúdo: text/html; charset=iso-8859-1' );



echo  'Versão atual do PHP: ' . phpversão() . '<br>' ;

$ nomedoservidor = " 54.234.153.24 ";
$ usuário = " raiz ";
$ senha = " Senha123 ";
$ banco de dados = " meubanco ";

// Cria conexão


$ link = new mysqli( $ servername , $ username , $ password , $ database );

/* verifica a conexão */
if (mysqli_connect_errno()) {
    printf(" Falha na conexão: %s \n", mysqli_connect_error());
    saída();
}

$ valor_rand1 = rand( 1 , 999 );
$ valor_rand2 = strtoupper(substr(bin2hex(random_bytes( 4 )), 1 ));
$ host_name = gethostname();


$ query = " INSERT INTO dados (AlunoID, Nome, Sobrenome, Endereco, Cidade, Host) VALUES (' $ valor_rand1 ' , ' $ valor_rand2 ', ' $ valor_rand2 ', ' $ valor_rand2 ', ' $ valor_rand2 ',' $ host_name ') ";


if ( $ link -> consulta ( $ consulta ) === TRUE ) {
  echo " Novo registro criado com sucesso ";
} senão {
  echo " Erro: " . $ link -> erro ;
}

?>
</ corpo >
</ html >
