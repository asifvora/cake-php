<?php
if (!isset($params['escape']) || $params['escape'] !== false) {
    $message = h($message);
}
?>

<div  style="float: right;" class="message error" onclick="this.classList.add('hidden');"><?= $message ?></div>
