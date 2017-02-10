<?php
if(isset($_POST['submit'])) {
  echo '<br>' . htmlspecialchars($_POST['naam']) . '<br>';
  echo htmlspecialchars($_POST['kleur']);
}
?>
