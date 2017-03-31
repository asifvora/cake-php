<?php

if (!isset($params['escape']) || $params['escape'] !== false) {
    $message = h($message);
}
?>

<div id="message_success" style="float: right;" class="message success" onclick="this.classList.add ( 'hidden' )"><?= $message ?></div>
  