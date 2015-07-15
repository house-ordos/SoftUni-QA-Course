<form method="post">
    <input type="text" name="money" />
    <input type="submit" value="send" />
</form>

<?php
$db = new mysqli("localhost", "root", "", "qa_user_input");

if (isset($_POST['money'])) {
    $money = (int)$_POST['money'];
    $db->query("UPDATE bank SET money = money + $money WHERE id = 1");
}

$result = $db->query("SELECT money FROM bank WHERE id = 1");
echo "<br/>money in the bank : <b>" . $result->fetch_row()[0] . "</b>";

