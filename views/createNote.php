<?php
$Note = new Note;
if(isset($_POST['create_note']))
{
    $title = $_POST['title'];
    $message = $_POST['message'];

    $Note->createNote($title,$message);
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
            </ul>
            <div class="clear"></div>
        </div>
    </nav>
</header>
    
<section class="note-create">
    <div class="container">
        <form method="POST">
            <h2>Create your note</h2>
            <label for="title">Title</label>
            <input type="text" name="title" placeholder="title...">

            <label for="message">message</label>
            <textarea name="message" placeholder="your message..."></textarea>

            <input type="submit" name="create_note" value="Create">
        </form>
    </div><!--container-->
</section><!--note-create-->
</body>
</html>