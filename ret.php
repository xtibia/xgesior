<?PHP
$host = "localhost"; /* HOST */
$user = "root"; /* USER */
$passwd = ""; /* PASSWORD */
$db = ""; /* DB */
##############################################################
#                         CONFIGURAÇÕES
##############################################################
$retorno_token = ''; // Token gerado pelo PagSeguro

if (empty($_POST['Referencia'])) { header("Location http://pagseguro.com.br");  }

list($accname, $world) = explode('-', $_POST['Referencia']);
if ($world=='sv') {
	$retorno_host = "$host"; // Local da base de dados MySql
	$retorno_database = "$db"; // Nome da base de dados MySql
	$retorno_usuario = "$user"; // Usuario com acesso a base de dados MySql
	$retorno_senha = "$passwd";  // Senha de acesso a base de dados MySql
}

###############################################################
#              NÃO ALTERE DESTA LINHA PARA BAIXOs#

$lnk = mysql_connect("$host", "$user", "$passwd") or die ('Nao foi possível conectar ao MySql: ' . mysql_error());
mysql_select_db("$db", $lnk) or die ('Nao foi possível ao banco de dados selecionado no MySql: ' . mysql_error());	

// Validando dados no PagSeguro

$PagSeguro = 'Comando=validar';
$PagSeguro .= '&Token=' . $retorno_token; 
$Cabecalho = "Retorno PagSeguro";

foreach ($_POST as $key => $value)
{
 $value = urlencode(stripslashes($value));
 $PagSeguro .= "&$key=$value";
}

if (function_exists('curl_exec'))
{
 $curl = true;
}
elseif ( (PHP_VERSION >= 4.3) && ($fp = @fsockopen ('ssl://pagseguro.uol.com.br', 443, $errno, $errstr, 30)) )
{
 $fsocket = true;
}
elseif ($fp = @fsockopen('pagseguro.uol.com.br', 80, $errno, $errstr, 30))
{
 $fsocket = true;
}

if ($curl == true)
{
 $ch = curl_init();

 curl_setopt($ch, CURLOPT_URL, 'https://pagseguro.uol.com.br/Security/NPI/Default.aspx');
 curl_setopt($ch, CURLOPT_POST, true);
 curl_setopt($ch, CURLOPT_POSTFIELDS, $PagSeguro);
 curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
 curl_setopt($ch, CURLOPT_HEADER, false);
 curl_setopt($ch, CURLOPT_TIMEOUT, 30);
 curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);

  curl_setopt($ch, CURLOPT_URL, 'https://pagseguro.uol.com.br/Security/NPI/Default.aspx');
  $resp = curl_exec($ch);

 curl_close($ch);
 $confirma = (strcmp ($resp, "VERIFICADO") == 0);
}
elseif ($fsocket == true)
{
 $Cabecalho  = "POST /Security/NPI/Default.aspx HTTP/1.0\r\n";
 $Cabecalho .= "Content-Type: application/x-www-form-urlencoded\r\n";
 $Cabecalho .= "Content-Length: " . strlen($PagSeguro) . "\r\n\r\n";

 if ($fp || $errno>0)
 {
    fputs ($fp, $Cabecalho . $PagSeguro);
    $confirma = false;
    $resp = '';
    while (!feof($fp))
    {
       $res = @fgets ($fp, 1024);
       $resp .= $res;
       if (strcmp ($res, "VERIFICADO") == 0)
       {
          $confirma=true;
          break;
       }
    }
    fclose ($fp);
 }
 else
 {
    echo "$errstr ($errno)<br />\n";
 }
}


if ($confirma) {
## Recebendo Dados ##
$TransacaoID = $_POST['TransacaoID'];
$VendedorEmail  = $_POST['VendedorEmail'];
$Referencia = $_POST['Referencia'];
$TipoFrete = $_POST['TipoFrete'];
$ValorFrete = $_POST['ValorFrete'];
$Extras = $_POST['Extras'];
$Anotacao = $_POST['Anotacao'];
$TipoPagamento = $_POST['TipoPagamento'];
$StatusTransacao = $_POST['StatusTransacao'];
$CliNome = $_POST['CliNome'];
$CliEmail = $_POST['CliEmail'];
$CliEndereco = $_POST['CliEndereco'];
$CliNumero = $_POST['CliNumero'];
$CliComplemento = $_POST['CliComplemento'];
$CliBairro = $_POST['CliBairro'];
$CliCidade = $_POST['CliCidade'];
$CliEstado = $_POST['CliEstado'];
$CliCEP = $_POST['CliCEP'];
$CliTelefone = $_POST['CliTelefone'];
$NumItens = $_POST['ProdValor_1'];
$ProdQuantidade_x = $POST['ProdQuantidade_1'];
 
# GRAVA OS DADOS NO BANCO DE DADOS #
mysql_query("INSERT into pagsegurotransacoes SET
	TransacaoID='$TransacaoID',
	VendedorEmail='$VendedorEmail',
	Referencia='$Referencia',
	TipoFrete='$TipoFrete',
	ValorFrete='$ValorFrete',
	Extras='$Extras',
	Anotacao='$accname',
	TipoPagamento='$TipoPagamento',
	StatusTransacao='$StatusTransacao',
	CliNome='$CliNome',
	CliEmail='$CliEmail',
	CliEndereco='$CliEndereco',
	CliNumero='$CliNumero',
	CliComplemento='$CliComplemento',
	CliBairro='$CliBairro',
	CliCidade='$CliCidade',
	CliEstado='$CliEstado',
	CliCEP='$CliCEP',
	CliTelefone='$CliTelefone',
	NumItens='$NumItens',
	Data=now(),
ProdQuantidade_x='$ProdQuantidade_x';");

if ($StatusTransacao == "Aprovado") {
mysql_query("UPDATE accounts SET premium_points = premium_points + '$NumItens' WHERE name = '".htmlspecialchars($accname)."'");
mysql_query("UPDATE pagsegurotransacoes SET StatusTransacao = 'Entregue' WHERE CONVERT( `pagsegurotransacoes`.`TransacaoID` USING utf8 ) = '$TransacaoID' AND CONVERT( `pagsegurotransacoes`.`StatusTransacao` USING utf8 ) = 'Aprovado' LIMIT 1 ;");
mysql_query('OPTIMIZE TABLE  `pagsegurotransacoes`');
}
}
?>