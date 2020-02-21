<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>BOOK Management</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="theme-color" content="#03a6f3">
    <?= $this->Html->css('bootstrap.min.css'); ?>
    <link href="https://fonts.googleapis.com/css?family=Montserrat:200,300,400,500,600,700,800,900" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <?= $this->Html->css('owl.carousel.min.css'); ?>
    <?= $this->Html->css('styles.css'); ?>
</head>

<body>
<?= $this->element('header'); ?>
<?= $this->fetch('content'); ?>
<?= $this->element('footer'); ?>
<?= $this->Html->script('jquery.min.js'); ?>
<?= $this->Html->script('bootstrap.min.js'); ?>
<?= $this->Html->script('owl.carousel.min.js'); ?>
<?= $this->Html->script('custom.js'); ?>
</body>

</html>
