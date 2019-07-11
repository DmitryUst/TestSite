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
        <div class="slaid-banner">
          <div class="slaid"> 
            <div id="slider" class="slider_wrap">
		          <img src="images/girl.png" alt="girl"/>
		          <img src="images/girl2.png" alt="girl"/>
		          <img src="images/girl3.png" alt="girl"/>
	          </div>
          </div>
          <div class="banner">   
            <img src="images/banner 1.png" alt="banner 1">
            <img src="images/banner 2.png" alt="banner 1">
            <img src="images/banner 3.png" alt="banner 1">
          </div>
        </div>
        <div class="sale">
          <span>вот это скидки!</span> 
            <div>-50%</div>
          <a href="development">подробнее тут <i class="fa fa-caret-right" aria-hidden="true"></i></a>
        </div>
        <div class="banner2">
            <img src="images/banner 4.png" alt="banner 1">
            <img src="images/banner 5.png" alt="banner 1">
            <img src="images/banner 6.png" alt="banner 1">
        </div>
        <div class="top-sales">
            <div class="top-sales-sticker">Лидеры продаж</div>
            <img src="images/product.png" alt="product">
            <img src="images/product.png" alt="product">
            <img src="images/product.png" alt="product">
        </div>
        <div class="top-sales">
            <div class="top-sales-sticker">Лучшие бренды</div>
            <img src="images/product.png" alt="product">
            <img src="images/product.png" alt="product">
            <img src="images/product.png" alt="product">
        </div>
        <div class="new-products">
          <p>НОВИНКИ ЭТОЙ НЕДЕЛИ</p>
          <div class="catalog-new-products">
              <div>
                <img src="images/product.png" alt="product">
                <div class="specifications">
                  <h3>Hummer</h3>
                  <div>Хорошие, отличные и просто замечательные резиновые сапоги</div>
                  <span>599р</span>
                </div>
              </div>
              <div>
                <img src="images/product.png" alt="product">
                <div class="specifications">
                  <h3>Hummer</h3>
                  <div>Хорошие, отличные и просто замечательные резиновые сапоги</div>
                  <span>599р</span>
                </div>
              </div>
              <div>
                  <img src="images/product.png" alt="product">
                  <div class="specifications">
                    <h3>Hummer</h3>
                    <div>Хорошие, отличные и просто замечательные резиновые сапоги</div>
                    <span>599р</span>
                  </div>
              </div>
              <div>
                  <img src="images/product.png" alt="product">
                  <div class="specifications">
                    <h3>Hummer</h3>
                    <div>Хорошие, отличные и просто замечательные резиновые сапоги</div>
                    <span>599р</span>
                  </div>
              </div>
              <div>
                  <img src="images/product.png" alt="product">
                  <div class="specifications">
                    <h3>Hummer</h3>
                    <div>Хорошие, отличные и просто замечательные резиновые сапоги</div>
                    <span>599р</span>
                  </div>
              </div>
              <div>
                  <img src="images/product.png" alt="product">
                  <div class="specifications">
                    <h3>Hummer</h3>
                    <div>Хорошие, отличные и просто замечательные резиновые сапоги</div>
                    <span>599р</span>
                  </div>
              </div>
              
          </div>
        
        </div>
      </main>

    </div>
    <footer>
      <?
      include "/blocks/footer.php";
      ?> 
    </footer>
  </div>
    
    <link rel="stylesheet" href="assets/css/main.css?version=2">
    <link rel="stylesheet" href="assets/css/media.css?version=2">
    <link rel="stylesheet" href="assets/css/font-awesome.css">
    <script src="assets/js/app.js"></script>
</body>
</html>