<?php
require 'include/connect.php';
// On écrit notre requête
$sql = 'SELECT * FROM `books` INNER JOIN `author` ON books.id_author = author.id';

// On prépare la requête
$query = $db->prepare($sql);

// On exécute la requête
$query->execute();

// On stocke le résultat dans un tableau associatif
$result = $query->fetchAll(PDO::FETCH_ASSOC);


?>

<table>
    <thead>
        <th>ID</th>
        <th>TITLE</th>
        <th>SYNOPSIS</th>
        <th>AUTHORS</th>
    </thead>
    <tbody>
        <?php
        foreach($result as $item){
          ?>
            <tr>
                <td><?php echo $item['id'] ?></td>
                <td><?php echo $item['title'] ?></td>
                <td><?php echo $item['synopsis'] ?></td>
                <td><?php echo $item['name'] ?></td>
                <td><a href="edit.php?id=<?= $item['id'] ?>">Edit</a>  <a href="delete.php?id=<?= $item['id'] ?>">Delete 🚮</a></td>
            </tr>
            <?php
        }
        ?>
    </tbody>
  </table>
  <a href="add.php">Add a new book</a>
