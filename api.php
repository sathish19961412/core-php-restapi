<?php
header("Content-Type: application/json");
include 'server.php';

$method = $_SERVER['REQUEST_METHOD'];
$input = json_decode(file_get_contents('php://input'), true);

switch ($method) {
    case 'GET':
        handleGet($pdo);
        break;
    case 'POST':
        handlePost($pdo, $input);
        break;
    case 'PUT':
        handlePut($pdo, $input);
        break;
    case 'DELETE':
        handleDelete($pdo, $input);
        break;
    default:
        echo json_encode(['message' => 'Invalid request method']);
        break;
}

function handleGet($pdo) {
    $sql = "SELECT * FROM enquire";
    $stmt = $pdo->prepare($sql);
    $stmt->execute();
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    echo json_encode($result);
}

function handlePost($pdo, $input) {
    $sql = "INSERT INTO enquire (name,phone,email,type,buy,enquire,requirement) VALUES (:name, :phone, :email, :type, :buy, :enquire, :requirement)";
    $stmt = $pdo->prepare($sql);
    $stmt->execute(['name' => $input['name'], 'phone' => $input['phone'], 'email' => $input['email'], 'type' => $input['type'], 'buy' => $input['buy'], 'enquire' => $input['enquire'], 'requirement' => $input['requirement']]);
    echo json_encode(['message' => 'User created successfully']);
}

function handlePut($pdo, $input) {
    $sql = "UPDATE enquire SET name = :name,phone = :phone,email = :email,type = :type,buy = :buy,enquire = :enquire,requirement = :requirement WHERE id = :id";
    $stmt = $pdo->prepare($sql);
    $stmt->execute(['name' => $input['name'], 'phone' => $input['phone'], 'email' => $input['email'], 'type' => $input['type'], 'buy' => $input['buy'], 'enquire' => $input['enquire'], 'requirement' => $input['requirement'], 'id' => $input['id']]);
    echo json_encode(['message' => 'User updated successfully']);
}

function handleDelete($pdo, $input) {
    $sql = "DELETE FROM enquire WHERE id = :id";
    $stmt = $pdo->prepare($sql);
    $stmt->execute(['id' => $input['id']]);
    echo json_encode(['message' => 'User deleted successfully']);
}
?>