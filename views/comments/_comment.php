<?php
/**
 * @var models\CommentModel $comment
 */
?>
<div><?= $comment->getDate() ?></div>
<div><?= $comment->name ?> <a href="/comment/delete/<?= $comment->id ?>/">[ delete ]</a></div>
<div><?= $comment->text ?></div>