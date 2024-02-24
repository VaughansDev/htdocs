<?php
require $_SERVER['DOCUMENT_ROOT'] . '/inc/dbcon.php';
$ticketid = $_GET['tid'];
$sql = "SELECT * FROM ticket_responses WHERE ticket_id = '$ticketid'";
$result = $dbcon->query($sql);
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) { ?>
        <li>
            <div class="comment-item">
                <div class="reply-img">
                    <img src="<?php echo $row['profilepic']; ?>" alt="">
                </div>
                <div class="reply-details">
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="name">
                            <h6><?php echo $row['firstname'].' '.$row['lastname']; ?></h6>
                            <span><?php echo $row['role']; ?></span>
                        </div>
                        <div class="name">
                            <span><?php echo $row['replydate'].' - '.$row['replytime']; ?></span>
                        </div>
                    </div>
                    <p>
                        <?php echo $row['message']; ?>
                    </p>
                </div>
            </div>
        </li>
    <?php }
} else { ?>
    <script>
        window.location.href = "<?php echo $_CONFIG['domain']; ?>/support/my-tickets.php";
    </script>
<?php }
?>