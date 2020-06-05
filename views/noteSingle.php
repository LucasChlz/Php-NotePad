<?php
    $Note = new Note;
    $noteSingle = $Note->listNotes(false,false,"WHERE id = ?");
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
        </div><!--container-->
    </nav>
</header>

<section class="all-notes">
    <div class="container">
      <div class="note-single">
          <h2>Title: <?= $noteSingle['title']; ?></h2>
          <hr>
          <h1>Note</h1>
          <hr>
          <div><?= $noteSingle['note']; ?></div>
      </div>
    </div><!--container-->
</section><!--all-notes-->
</body>
</html>