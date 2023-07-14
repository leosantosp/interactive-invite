<?php
// Receber a string JSON enviada pelo formulário
$presence = $_POST['confirmPresence'];

// Analisar a string JSON em um objeto PHP
$data = json_decode($presence);

// Obter os dados do usuário
$fullname = $data->fullname;
$phone = $data->phone;

// Inserir o usuário na tabela "user"
$db = new PDO('mysql:host=localhost;dbname=nome_do_banco', 'usuario', 'senha');
$query = $db->prepare('INSERT INTO user (fullname, phone) VALUES (:fullname, :phone)');
$query->bindParam(':fullname', $fullname);
$query->bindParam(':phone', $phone);
$query->execute();

// Obter o ID gerado para o usuário inserido
$userID = $db->lastInsertId();

// Inserir os acompanhantes na tabela "escorts"
$query = $db->prepare('INSERT INTO escorts (user_id, escort_type, escort_amount) VALUES (:user_id, :escort_type, :escort_amount)');
foreach ($data->escorts as $escort) {
  $escortType = $escort->type;
  $escortAmount = $escort->amount;

  $query->bindParam(':user_id', $userID);
  $query->bindParam(':escort_type', $escortType);
  $query->bindParam(':escort_amount', $escortAmount);
  $query->execute();
}

// Responder com uma mensagem de sucesso ou redirecionar para outra página
echo 'Dados inseridos com sucesso!';
?>