<?php
$fullname= $item['first_name'] . $item['last_name'];
$username= '@' . str_replace('', '_', strtolower($fullname));
$user_id = $item['user_id'];
$message = $item['message'];
$date = $item['created_on'];
?>
<div class="message">
    <div class="avatar">
        <img src="https://picsum.photos/id/<?= $user_id; ?>/100/100">
    </div>
    <div class="content">
        <div class="info"><a href="#"><?= $user_id; ?></a> &bull;  <?= $username ?> &bull; <?= $item['created_on']; ?></div>
        <div class="tweet"><?= $message; ?></div>
    </div>
</div>