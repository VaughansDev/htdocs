
<div class="kd-box bg-white">
    <div class="container">
        <ul class="kd-links text-center">
            <li <?php if ($active == 'support') { echo 'class="active"'; } ?>><a href="<?php echo $_CONFIG['supporturl']; ?>">Support Home</a></li>
            <li <?php if ($active == 'docs') { echo 'class="active"'; } ?>><a href="<?php echo $_CONFIG['docsurl']; ?>">Documentation</a></li>
            <li <?php if ($active == 'knowledgebase') { echo 'class="active"'; } ?>><a href="<?php echo $_CONFIG['knowledgbaseurl']; ?>">Knowledge Base</a></li>
            <li <?php if ($active == 'forums') { echo 'class="active"'; } ?>><a href="<?php echo $_CONFIG['forumsurl']; ?>">Forums</a></li>
            <li <?php if ($active == 'tickets') { echo 'class="active"'; } ?>><a href="<?php echo $_CONFIG['ticketsurl']; ?>">My Ticket</a></li>
        </ul>
    </div>
</div>
