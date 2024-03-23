<?php
session_start();
require $_SERVER['DOCUMENT_ROOT'] . '/inc/dbcon.php';

$ticketDept = $_POST['selectDepartment'];
$ticketProduct = $_POST['selectProduct'];
$ticketTitle = $_POST['ticketTitle'];
$ticketMessage = $_POST['ticketMessage'];
$ticketNo = 'KDS'.date('dmY').'-'.rand(0001, 9999);
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

if (isset($_POST['submit']) && $_POST['submit'] == 'submit') {
    if (isset($_POST['ticketFile'])) {
        $ticketReplyHasFile = true;
        $ticketFile = basename($_FILES['ticketFile']['name']);
        $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
        $ticketFileName = $ticketAccountId . '-' . date('dmYHis') . '-' . uniqid().$imageFileType;
        $target_dir = $_SERVER['DOCUMENT_ROOT'].'/tickets/uploads/';
        $target_file = $target_dir . $ticketFileName;
        $uploadOk = 1;

        $check = getimagesize($_FILES['ticketFile']['tmp_name']);
        if ($check !== false) {
            $uploadOk = 1;
        } else {
            $uploadOk = 0;
        }

        if (file_exists($target_file)) {
            $upload = 0;
        }

        if ($_FILES['ticketFile']['size'] > 524288) {
            $uploadOk = 0;
        }

        if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif") {
            $uploadOk = 0;
        }

        if ($uploadOk == 0) {
            $ticketReplyHasFile = false;
        } else {
            if (move_uploaded_file($_FILES['ticketFile']['tmp_name'], $target_file)) {
                $ticketFileSize = $_FILES['ticketFile']['size'];
                $ticketFileDownloadLink = $_CONFIG['supporturl'] . '/tickets/uploads/' . $ticketFileName;
                
                $sql = "INSERT INTO tickets (ticket_no, ticket_title, ticket_priority, ticket_dept, ticket_status, ticket_accountid, ticket_createdate, ticket_createtime, ticket_product, lastreplyimg, lastreplyname, lastreplydate, lastreplytime, lastreplymsg, lastreplyaccountid, ticketreples) 
                                     VALUES ('$ticketNo', '$ticketTitle', '$ticketPriority', '$ticketDept', '$ticketStatus', '$ticketAccountId', '$ticketCreateDate', '$ticketCreateTime', '$ticketProduct', '$lastReplyImg', '$lastReplyName', '$lastReplyDate', '$lastReplyTime', '$lastReplyMsg', '$lastReplyAccountId', '$ticketReplies')";
                $result = $dbcon->query($sql);
                if ($result) {
                    $sql = "INSERT INTO ticket_responses (ticket_no, accountid, profilepic, role, replydate, replytime, message, replyhasfile, filename, filesize, filedownloadlink)
                                                  VALUES ('$ticketNo', '$ticketAccountId', '$lastReplyImg', '$ticketRole', '$ticketReplyDate', '$ticketReplyTime', '$ticketMessage', '$ticketReplyHasFile', '$ticketFileName', '$ticketFileSize', '$ticketFileDownloadLink')";
                    $result = $dbcon->query($sql);
                    if ($result) {
                        header("location: " . $_CONFIG['ticketsurl'] . "/ticket.php?ticketno=" . $ticketNo);
                    } else {
                        header("location: " . $_CONFIG['ticketsurl'] . "/new-ticket.php?error=dbError");
                    }
                } else {
                    header("location: " . $_CONFIG['ticketsurl'] . "/new-ticket.php?error=dbError");
                }
            } else {
                $ticketReplyHasFile = false;

                $sql = "INSERT INTO tickets (ticket_no, ticket_title, ticket_priority, ticket_dept, ticket_status, ticket_accountid, ticket_createdate, ticket_createtime, ticket_product, lastreplyimg, lastreplyname, lastreplydate, lastreplytime, lastreplymsg, lastreplyaccountid, ticketreples) 
                                     VALUES ('$ticketNo', '$ticketTitle', '$ticketPriority', '$ticketDept', '$ticketStatus', '$ticketAccountId', '$ticketCreateDate', '$ticketCreateTime', '$ticketProduct', '$lastReplyImg', '$lastReplyName', '$lastReplyDate', '$lastReplyTime', '$lastReplyMsg', '$lastReplyAccountId', '$ticketReplies')";
                $result = $dbcon->query($sql);
                if ($result) {
                    $sql = "INSERT INTO ticket_responses (ticket_no, accountid, profilepic, role, replydate, replytime, message, replyhasfile)
                                                  VALUES ('$ticketNo', '$ticketAccountId', '$lastReplyImg', '$ticketRole', '$ticketReplyDate', '$ticketReplyTime', '$ticketMessage', '$ticketReplyHasFile')";
                    $result = $dbcon->query($sql);
                    if ($result) {
                        header("location: " . $_CONFIG['ticketsurl'] . "/ticket.php?ticketno=" . $ticketNo);
                    } else {
                        header("location: " . $_CONFIG['ticketsurl'] . "/new-ticket.php?error=dbError");
                    }
                } else {
                    header("location: " . $_CONFIG['ticketsurl'] . "/new-ticket.php?error=dbError");
                }
            }
        }

    } else {
        $ticketReplyHasFile = false;

        $sql = "INSERT INTO tickets (ticket_no, ticket_title, ticket_priority, ticket_dept, ticket_status, ticket_accountid, ticket_createdate, ticket_createtime, ticket_product, lastreplyimg, lastreplyname, lastreplydate, lastreplytime, lastreplymsg, lastreplyaccountid, ticketreples) 
                                     VALUES ('$ticketNo', '$ticketTitle', '$ticketPriority', '$ticketDept', '$ticketStatus', '$ticketAccountId', '$ticketCreateDate', '$ticketCreateTime', '$ticketProduct', '$lastReplyImg', '$lastReplyName', '$lastReplyDate', '$lastReplyTime', '$lastReplyMsg', '$lastReplyAccountId', '$ticketReplies')";
        $result = $dbcon->query($sql);
        if ($result) {
            $sql = "INSERT INTO ticket_responses (ticket_no, accountid, profilepic, role, replydate, replytime, message, replyhasfile)
                                                  VALUES ('$ticketNo', '$ticketAccountId', '$lastReplyImg', '$ticketRole', '$ticketReplyDate', '$ticketReplyTime', '$ticketMessage', '$ticketReplyHasFile')";
            $result = $dbcon->query($sql);
            if ($result) {
                header("location: " . $_CONFIG['ticketsurl'] . "/ticket.php?ticketno=" . $ticketNo);
            } else {
                header("location: " . $_CONFIG['ticketsurl'] . "/new-ticket.php?error=dbError");
            }
        } else {
            header("location: " . $_CONFIG['ticketsurl'] . "/new-ticket.php?error=dbError");
        }
    }
} else {
    header("location: " . $_CONFIG['ticketsurl'] . "/new-ticket.php?error=submitError");
}
?>