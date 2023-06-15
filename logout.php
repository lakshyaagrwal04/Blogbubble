<?php include("session.php");
unset($_SESSION['user']);
unset($un);

setcookie('token','', time() - (86400 * 1), "/");
?>
<script>
window.location="index.php";
</script>