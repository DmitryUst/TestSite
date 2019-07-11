<!DOCTYPE html>
<html lang="ru">
<head>
<?
$website_title="Test2";
include "/blocks/head.php";
?> 
</head>
<body>
    
  <div class="wrapper">
    <header>
      <?
      include "/blocks/header.php";
      ?>
    </header>
    <div class="menu-catalog">
      <?
      include "/blocks/menu-catalog.php";
      ?>
    </div>
    <div class="container-aside-main">
      <aside>
       <?
       include "/blocks/aside.php"
       ?>
      </aside>
      <main>
        <div class="mess">
          Такой страницы не существует<br>
          <img src="../images/error.jpg" alt="error">
        </div>
       
      </main>

    </div>
    <footer>
      <?
      include "/blocks/footer.php";
      ?> 
    </footer>
  </div>
    
    <link rel="stylesheet" href="assets/css/main.css?version=1">
    <link rel="stylesheet" href="assets/css/media.css?version=1">
    <link rel="stylesheet" href="assets/css/font-awesome.css">
    <script src="assets/js/app.js"></script>
</body>
</html>