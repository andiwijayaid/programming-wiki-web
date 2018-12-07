<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>

    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link rel="stylesheet" href="<?php echo base_url('/assets/css/form-style.css') ?>">
</head>
<body>

<div class="container">
    <div class="row">
        <div class="col-12">
            <div class="form_main">
                <h4 class="heading">New <strong>Article</strong><span></span></h4>
                <div class="form">
                    <form action="<?php echo base_url(). 'crud/add_article'; ?>" method="post" id="contactFrm" name="contactFrm">
                        <input type="text" required="" placeholder="Please input your Name" value="" name="author" class="txt">
                        <input type="text" required="" placeholder="Please input Image URL" value="" name="image" class="txt">
                        <input type="text" required="" placeholder="Title" value="" name="title" class="txt">

                        <textarea placeholder="Your Article" name="article_text" type="text" class="txt_3"></textarea>
                        <input type="submit" value="submit" name="submit" class="txt2">
                    </form>
                </div>
            </div>
        </div
    </div>
</div>

<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>

</body>
</html>