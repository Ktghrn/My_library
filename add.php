<?php
require 'include/connect.php';

// On écrit notre requête
$sql = 'SELECT id, name  FROM `author`';

// On prépare la requête
$query = $db->prepare($sql);

// On exécute la requête
$query->execute();

// On stocke le résultat dans un tableau associatif
$result = $query->fetchAll(PDO::FETCH_ASSOC);
?>
<form method="post">
    <label for="text">TITLE</label>
    <input type="text" name="title" placeholder="Insert a title">
    <label for="text">SYNOPSIS</label>
    <input type="text" name="sysnopsis" placeholder="Insert a synopsis" >
    <label for="text">AUTHOR</label>
    <select name="author_list" id="author_list" ">
      <?php
        foreach ($result as $author) { ?>
            <option value=<?= $author['id'] ?>><?= $author['name'] ?></option>
        <?php }
      ?>
    </select>
    <button><a href="submit.php" style="text-decoration:none; color: black;">SUBMIT</a></button>
</form>
