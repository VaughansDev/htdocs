<?php
require $_SERVER['DOCUMENT_ROOT'] . '/inc/dbcon.php';
$ticketid = $_GET['tid'];
$sql = "SELECT * FROM tickets WHERE ticket_id = '$ticketid'";
$result = $dbcon->query($sql);
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) { ?>
        <li>
            <div class="d-flex item">
                <span>Ticket #:</span> <span class="content"><?php echo $row['ticket_id']; ?></span>
            </div>
        </li>
        <li>
            <div class="d-flex item">
                <span>Priority:</span> <span class="content"><?php echo $row['ticket_priority']; ?></span>
            </div>
        </li>
        <li>
            <div class="d-flex item">
                <span>Ticket Status:</span> <span class="content"><?php echo $row['ticket_status']; ?></span>
            </div>
        </li>
        <li>
            <div class="d-flex item">
                <span>Create on:</span> <span class="content"><?php echo $row['ticket_createdate']; ?></span>
            </div>
        </li>
        <li>
            <div class="d-flex item">
                <span>Create Time:</span> <span class="content"><?php echo $row['ticket_createtime']; ?></span>
            </div>
        </li>
    <?php }
} else { ?>
    <script>
        window.location.href = "<?php echo $_CONFIG['domain']; ?>/support/my-tickets.php";
    </script>
<?php }
?>