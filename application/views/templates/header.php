<html>
<head>
  <title>CIBLOG</title>
  <link rel="stylesheet" href="https://bootswatch.com/4/litera/bootstrap.min.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/style.css">
  <script src="//cdn.ckeditor.com/4.11.3/standard/ckeditor.js"></script>
</head>
<body>
  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
      <a class="navbar-brand" href="<?php echo base_url(); ?>">ciBlog</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      

      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item ">
            <a class="nav-link" href="<?php echo base_url(); ?>">Home
              <!-- <span class="sr-only">(current)</span> -->
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo base_url(); ?>about">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo base_url(); ?>posts">Blog</a>
          </li>
        </ul>

        <ul class="navbar-nav navbar-left ">
          <li class="nav-item">
              <a class="nav-link" href="<?php echo base_url(); ?>posts/create">Create Post</a>
          </li>
        </ul>


      </div>
    </div>
  </nav>
<div class="container">   