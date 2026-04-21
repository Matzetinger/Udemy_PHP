
<form action="" method="post">
  <label for="date">Dein Datum</label>
  <input
    type="datetime-local"
     name="date"
     id="date"
     value = "<?php echo $userDate ?>"
  >
  <button type="submit">Calculate</button>
</form>