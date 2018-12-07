<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Contribute</title>

    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link rel="stylesheet" href="<?php echo base_url('/assets/css/form-style.css') ?>">

    <!-- mobile specific metas
    ================================================== -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- CSS
  ================================================== -->
    <!--    <link rel="stylesheet" href="--><?php //echo base_url('/assets/css/base.css') ?><!--">-->
    <link rel="stylesheet" href="<?php echo base_url('/assets/css/vendor.css') ?>">
    <link rel="stylesheet" href="<?php echo base_url('/assets/css/main.css') ?>">

    <!-- script
    ================================================== -->
    <script src="<?php echo base_url('/assets/js/modernizr.js') ?>"></script>
    <script src="<?php echo base_url('/assets/js/pace.min.js') ?>"></script>

    <!-- favicons
     ================================================== -->
    <link rel="shortcut icon" href="<?php echo site_url('/assets/favicon.ico') ?>" type="image/x-icon">
    <link rel="icon" href="<?php echo site_url('/assets/favicon.ico') ?>" type="image/x-icon">
</head>
<body>

<!-- header
================================================== -->
<header class="short-header">

    <div class="gradient-block"></div>

    <div class="row header-content text-center">

        <div class="logo">
            <a href="<?php echo base_url('crud/index') ?>">WIKI</a>
        </div>

    </div>

</header> <!-- end header -->

<div class="container">
    <div class="row">
        <div class="col-12">
            <div class="form_main">
                <h4 class="heading">Edit <strong>Article</strong><span></span></h4>
                <div class="form">
                    <?php foreach($article as $a){ ?>
                        <form action="<?php echo base_url(). 'crud/edit_article'; ?>" method="post" id="contactFrm" name="contactFrm">
                            <input type="text" required="" placeholder="Please input your Name" value="<?php echo $a->author ?>" name="author" class="txt">
                            <input type="text" required="" placeholder="Please input Image URL" value="<?php echo $a->image ?>" name="image" class="txt">
                            <input type="text" required="" placeholder="Title" value="<?php echo $a->title ?>" name="title" class="txt">

                            <textarea placeholder="Your Article" name="article_text" type="text" class="txt_3"><?php echo $a->article_text ?></textarea>
                            <input type="submit" value="submit" name="submit" class="txt2">
                        </form>
                    <?php } ?>
                </div>
            </div>
        </div
    </div>
</div>

<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>

</body>
</html>