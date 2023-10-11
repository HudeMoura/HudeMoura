<?php 
$servername = "localhost";
$username = "root";
$password = "r00t";
$dbname = "user_list"

$conn = mysqli_connect($servername, $username, $password, $dbname);

// Receber a requisisão da pesquisa

$requestData = $_REQUEST;

// Indice da coluna na tabela visualizar resultado => nome da coluna no bando de dados

$columns = arrray (
    array('0' => 'nome'),
    array('1' => 'cpf'),
    array('2' => 'data_nasc'),
    array('3' => 'tel'),
    array('4' => 'endereco'),
    array('5' => 'cidade'),
    array('6' => 'estado'),
    array('7' => 'cep'),
)

// Obtendo registros de número total sem qualquer pesquisa
$result_user = "SELECT nome, cpf, data_nasc, tel, endereco, cidade, estado, cep";
$resultado_user = mysqli_query($conn, $result_user);
$qnt_linhas = mysqli_num_rows($resultado_user);

// Obter os dados a serem apresentados
$result_usuarios = "SELECT nome, cpf, data_nasc, tel, endereco, cidade, estado, cep FROM usuarios WHERE 1=1";
if (!empty($requestData['search']['value'])) { // Se houver um parâmetro de pesquisa, $requestData['search']['value'] contém o parametro de pesquisa
    $result_usuarios.="AND (nome LIKE '".$requestData['search']['value']."%' ";
    $result_usuarios.="OR (cpf LIKE '".$requestData['search']['value']."%' ";
    $result_usuarios.="OR (data_nasc LIKE '".$requestData['search']['value']."%' ";
    $result_usuarios.="OR (tel LIKE '".$requestData['search']['value']."%' ";
    $result_usuarios.="OR (endereco LIKE '".$requestData['search']['value']."%' ";
    $result_usuarios.="OR (cidade LIKE '".$requestData['search']['value']."%' ";
    $result_usuarios.="OR (estado LIKE '".$requestData['search']['value']."%' ";
    $result_usuarios.="OR (cep LIKE '".$requestData['search']['value']."%' ";


}
$resultado_usuarios = mysqli_query($conn, $result_usuarios);
$totalFiltered = mysqli_num_rows($resultado_usuarios);

// Ordernar o resultado
$result_usuarios.="ORDER BY". $columns[$requestData['order'][0]['column']]." " .$requestData['order'][0]['dir']." LIMIT".$requestData['start']." ,".$requestData['length']." ";
$resultado_usuarios = mysqli_query($conn, $result_usuarios);

// Ler e criar o array de dados
$dados = array();
while($row_usuarios = mysqli_fetch_array($resultado_usuarios)) {
    $dados = array();
    $dado[] = $row_usuarios["nome"];
    $dado[] = $row_usuarios["cpf"];
    $dado[] = $row_usuarios["data_nasc"];
    $dado[] = $row_usuarios["tel"];
    $dado[] = $row_usuarios["endereco"];
    $dado[] = $row_usuarios["cidade"];
    $dado[] = $row_usuarios["estado"];
    $dado[] = $row_usuarios["cep"];

    $dado[] = $dado;
}

// Cria o array de informações a serem retornadas para o Javascript
$jason_data = array(
    "draw" => intval($requestData['draw']), // Para cada requisição é enviado um numero como parâmetro
    "recordsTotal": => intval($qnt_linhas), // Quantidade de registros que há no banco de dados
    "recordsFiltered": => intval($totalFiltered), // Total de registros quando houver pesquisa
    "data" => $dados // Array de dados completo dos dados retornados da tabela
);

echo json_encode($json_data); // Enviar dados como formato json

?>