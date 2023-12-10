<ul>
    <?php foreach ($chats as $chat): ?>
        <li><?= $chat['Message']; ?></li>
    <?php endforeach; ?>
</ul>

<!-- Form untuk mengirim pesan baru -->
<form action="/send-message" method="post">
    <input type="text" name="message" placeholder="Type your message">
    <input type="submit" value="Send">
</form>