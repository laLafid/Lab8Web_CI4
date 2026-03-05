<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title><?= $title; ?></title>
    <link rel="stylesheet" href="<?= base_url('style.css'); ?>">

</head>

<body>
    <div id="container">
        <header>
            <h1>Layout Sederhana</h1>
        </header>
        <nav>
            <?php $current_page = uri_string(); ?>

            <a href="<?=base_url('admin/artikel'); ?>" class="<?=($current_page=='admin/artikel') ? 'active' : ''; ?>">Dashboard</a>
            <a href="<?=base_url('admin/artikel/add'); ?>" class="<?=($current_page=='admin/artikel/add') ? 'active' : ''; ?>">Tambah</a>
            
        </nav>
        <section id="wrapper">
            <section id="main">