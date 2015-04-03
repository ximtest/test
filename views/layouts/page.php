<?php
/**
 * @var string $content
 */
?>
<html>
<head>
	<meta charset="utf-8">
	<title>Test</title>
	<link href="/public/css/common.css" rel="stylesheet" type="text/css">
	<script src="/public/js/common.js"></script>
</head>
<body>
<div class="container">
	<a href="/">Test</a>
	<?= $this->getTopicTree(); ?>
	<div><a href="/topic/add/">[ add topic ]</a></div>
	<?= $content; ?>
</div>
</body>