<?php
session_start();

if (!isset($_GET['cpf'])) {
    http_response_code(400);
    echo json_encode(['erro' => 'CPF não informado']);
    exit;
}

$cpf = urlencode($_GET['cpf']);
$url = "https://apela.tech?user=ab34229f-cd38-4621-97a9-6c1c7cbd354b&cpf={$cpf}";
$response = file_get_contents($url);
$data = json_decode($response, true);

if (isset($data['status']) && $data['status'] === 200) {
    $_SESSION['nome'] = $data['nome'];
    $_SESSION['cpf'] = $data['cpf'];
    $_SESSION['nascimento'] = $data['nascimento'];
    $_SESSION['sexo'] = $data['sexo'];
    $_SESSION['mae'] = $data['mae'];
}

header('Content-Type: application/json');
echo json_encode($data);
