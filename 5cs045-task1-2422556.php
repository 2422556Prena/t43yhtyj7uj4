<?php
include("db.php");
$sql = "SELECT book_title, author, genre, price, publish_date FROM books ORDER BY book_title";
$result = $mysqli->query($sql);
?>
<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Books - 5CS045 Task 1</title>
<style>
  body { font-family: Arial; padding: 20px; }
  table { border-collapse: collapse; width: 100%; max-width: 900px; }
  th, td { border: 1px solid #ccc; padding: 8px; }
  th { background: #eee; }
</style>
</head>
<body>
<h1>Books</h1>
<table>
<tr><th>Title</th><th>Author</th><th>Genre</th><th>Price (£)</th><th>Publish Date</th></tr>
<?php while($row = $result->fetch_assoc()): ?>
<tr>
  <td><?=htmlspecialchars($row['book_title'])?></td>
  <td><?=htmlspecialchars($row['author'])?></td>
  <td><?=htmlspecialchars($row['genre'])?></td>
  <td><?=number_format($row['price'],2)?></td>
  <td><?=date("d/m/Y", strtotime($row['publish_date']))?></td>
</tr>
<?php endwhile; ?>
</table>
</body>
</html>
