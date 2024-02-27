<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    .row {
  background: #f8f9fa;
  margin-top: 30px;
  padding: 20px 0;
}

.col {
  border: solid 1px #6c757d;
}

.nav-block {
  height: 200px;
  background: #555;
  color: #fff;
  line-height: 200px;
}

.fixed-sidebar {
  position: -webkit-sticky;
  position: -moz-sticky;
  position: -ms-sticky;
  position: -o-sticky;
  position: sticky;
  height: 300px;
  padding: 30px 0;
  background: #555;
  color: #fff;
  top: 10px;
  bottom: auto;
}

.blog-entry-content {
  padding: 0 20px;
}

</style>
<body>
    

<!-- 
  Bootstrap docs: https://getbootstrap.com/docs
-->
<section>
  <div class="nav-block text-center">
    Something
  </div>
  <div class="container">
    <div class="row">
      <div class="clearfix"></div>
      <div class="col-md-4 fixed-sidebar">
        <ul>
          <li>Menu Item 1</li>
          <li>Menu Item 2</li>
          <li>Menu Item 3</li>
          <li>Menu Item 4</li>
        </ul>
      </div>
      <div class="col-md-8 blog-entry-content">
        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
          It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with
          desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
          It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with
          desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
      </div>
      <div class="clearfix"></div>
    </div>
  </div>
  <!--Other sections in the page-->
  <div class="nav-block text-center">
    Something
  </div>
</section>



</body>
</html>