<html>
  <head>
    <title>List of Posts</title>
  </head>
  <body>
   <h1>List of Blogs</h1>
    <?php foreach($blogs as $blog): ?>
        <h2><?= $blog['title'] ?></h2>
        <p><?= $blog['body'] ?></p>
    <?php endforeach;?>    
  </body>
</html>