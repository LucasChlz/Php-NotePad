<?php
$Note = new Note;
$noteSingle = $Note->listNotes(false,false,"WHERE id = ?");
if(isset($_POST['edit_note']))
{
    $title = $_POST['title'];
    $message = $_POST['message'];

    $Note->editNote($title,$message);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="<?= URL_PATH; ?>/style/style.css" />
  <title>Create Note</title>
</head>
<body>
<header>
    <nav>
        <div class="container">
            <div class="title">NotePad</div>
            <ul>
              <li><a href="<?= URL_PATH; ?>">Home</a></li>
              <li><a href="<?= URL_PATH; ?>/createNote">Create Note</a></li>
            </ul>
            <div class="clear"></div>
        </div>
    </nav>
</header>
    
<section class="note-create">
    <div class="container">
        <form method="POST">
            <h2>Edit your note</h2>
            <label for="title">Title</label>
            <input type="text" name="title" value="<?= $noteSingle['title']; ?>">

            <label for="message">message</label>
            <textarea name="message"><?= $noteSingle['note']; ?></textarea>

            <input type="submit" name="edit_note" value="Edit">
        </form>
    </div><!--container-->
</section><!--note-create-->
</body>
</html>