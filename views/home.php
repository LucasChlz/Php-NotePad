<?php
    $Note = new Note;
    $allNotes = $Note->listNotes(true,false,"","");

    $Note->deleteNote();
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
                <li><a href="<?= URL_PATH; ?>/createNote">Create Note</a></li>
            </ul>
            <div class="clear"></div>
        </div><!--container-->
    </nav>
</header>

<section class="all-notes">
    <div class="container">
        <?php foreach($allNotes as $key => $value){ ?>
            <div class="note-single">
                <a href="<?= URL_PATH; ?>/noteSingle?id=<?= $value['id']; ?>"><h2><?= $value['title']; ?></h2></a>
                <p><?= str_replace('-','/',$value['date']) ?></p>
                <div class="btn delete"><a href="<?= URL_PATH; ?>?delete=<?= $value['id']; ?>">Delete</a></div>
                <div class="btn edit"><a href="<?= URL_PATH; ?>/editNote?id=<?= $value['id']; ?>">Edit</a></div>
                <div class="clear"></div><!--clear-->
                <hr>
            </div>
        <?php } ?>
    </div><!--container-->
</section><!--all-notes-->
</body>
</html>