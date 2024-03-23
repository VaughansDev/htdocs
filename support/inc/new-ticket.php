<?php
require $_SERVER['DOCUMENT_ROOT'] . '/inc/dbcon.php';

$ticketDept = $_POST['selectDepartment'];
$ticketProduct = $_POST['selectProduct'];
$ticketTitle = $_POST['ticketTitle'];
$ticketMessage = $_POST['ticketMessage'];
$ticketNo = rand(0001, 9999);
$ticketPriority = 'MEDIUM';
$ticketStatus = 'PENDING';
$ticketAccountId = $_SESSION['accountid'];
$ticketCreateTime = date('g:i a');
$ticketCreateDate = date('j M Y');
$ticketReplies = 1;
$lastReplyImg = $_SESSION['profilepic'];
$lastReplyName = $_SESSION['username'];
$lastReplyDate = $ticketCreateDate;
$lastReplyTime = $ticketCreateTime;
$lastReplyMsg = substr($_POST['ticketMessage'], 0, 97).'...';
$lastReplyAccountId = $_SESSION['accountid'];
$ticketRole = $_SESSION['auth'];

?>