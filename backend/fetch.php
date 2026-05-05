<?php
include 'db.php';

$income = mysqli_fetch_assoc(mysqli_query($conn,
"SELECT SUM(amount) as total FROM transactions WHERE type='income'"))['total'];

$expense = mysqli_fetch_assoc(mysqli_query($conn,
"SELECT SUM(amount) as total FROM transactions WHERE type='expense'"))['total'];

echo json_encode([
  "income" => $income ? $income : 0,
  "expense" => $expense ? $expense : 0
]);
?>