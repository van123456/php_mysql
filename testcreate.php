<?php
$servername = "localhost";
$username = "root";
$password = "123456";
// �������ݿ�
// ��������
$conn = new mysqli($servername, $username, $password);
// �������
if ($conn->connect_error) {
    die("����ʧ��: " . $conn->connect_error);
}

// �������ݿ�
$sql = "CREATE DATABASE myDB";
if ($conn->query($sql) === TRUE) {
    echo "���ݿⴴ���ɹ�";
} else {
    echo "Error creating database: " . $conn->error;
}

$conn->close();
?>
