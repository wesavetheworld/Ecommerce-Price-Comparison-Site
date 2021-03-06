<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="de" lang="de">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />        <title>Bob</title>        <link href="/styles/reset.css" media="screen" rel="stylesheet" type="text/css" />
  <link href="/CMS/styles/datepicker.css" media="screen" rel="stylesheet" type="text/css" />
  <link href="/CMS/styles/styles.css" media="screen" rel="stylesheet" type="text/css" />
  <link href="/CMS/styles/dashboard.css" media="screen" rel="stylesheet" type="text/css" />        <script type="text/javascript" src="/js/jquery/jquery.js"></script>
  <script type="text/javascript" src="/js/sites/datepicker.js"></script>
  <script type="text/javascript" src="/js/sites/general.js"></script>
  <script type="text/javascript" src="/js/dashboard/Dashboard.js"></script>
  <script type="text/javascript" src="/js/dashboard/initDashboard.js"></script>                <script type="text/javascript">var NREUMQ=NREUMQ||[];NREUMQ.push(["mark","firstbyte",new Date().getTime()]);</script>
</head>
<body>

  <div id="header">

    <a href="/" id="logo">
      <img alt="" src="/CMS/img/logo.png" />
    </a>
    
    <div id="navContainer">
      <div id="navigation">
       <a class="item" href="/CMS/customer.php">
        <span class="label">Customers</span>
      </a>

      <span class="item">
        <span class="label">Catalog</span>
        <span class="subMenu">
          <a class="item active" href="/CMS/category.php">
            <span>Catalog</span>
          </a>
          <span class="container">
            <a class="item" href="/CMS/category.php">
              <span>Categories</span>
            </a>
            <a class="item" href="/CMS/productmodel.php">
              <span>Models</span>
            </a>
            <a class="item" href="/CMS/editorialreview.php">
              <span>Add Editorial Reviews</span>
            </a>
            <a class="item" href="/CMS/productvideo.php">
              <span>Add Videos For Products</span>
            </a>
            <a class="item" href="/CMS/productcomment.php">
              <span>Add Comments For Products</span>
            </a>
            <a class="item" href="/CMS/cleaninvalidimage.php">
              <span>Clean Invalid Image</span>
            </a>
            <a class="item" href="/CMS/createnonaccentname.php">
              <span>Create Non Accent Name</span>
            </a>
            <a class="item" href="/CMS/updatebrandproduct.php">
              <span>Update Brand Product</span>
            </a>
          </span>
        </span>
      </span>

      <span class="item">
        <span class="label">Crawler</span>
        <span class="subMenu">
          <a class="item active" href="/CMS/updateallprice.php">
            <span>Crawler</span>
          </a>
          <span class="container">
            <a class="item" href="/CMS/updateallprice.php">
              <span>All Price</span>
            </a>

            <?php
              $website_list = website_list();
              for ($i = 0; $i < sizeof($website_list); ++$i)
              {
                echo "<a class=\"item\" href=\"/CMS/updatesite.php?website=".$website_list[$i]."\">\n";
                echo "<span>".translate_website_vnese($website_list[$i])."</span>\n";
                echo "</a>\n";
              }
            ?>
          </span>
        </span>
      </span>

      <span class="item">
        <span class="label">Content</span>
        <span class="subMenu">
          <a class="item active" href="/CMS/slider.php">
            <span>Content</span>
          </a>
          <span class="container">
            <a class="item" href="/CMS/slider.php">
              <span>Slider</span>
            </a>
            <a class="item" href="/CMS/newProduct.php">
              <span>New Products</span>
            </a>
            <a class="item" href="/CMS/hotdeals.php">
              <span>Hot Deals</span>
            </a>
            <a class="item" href="/CMS/advertisement.php">
              <span>Advertisement</span>
            </a>
            <a class="item" href="/CMS/product.php">
              <span>Search Optimization</span>
            </a>
            <a class="item" href="/CMS/product.php">
              <span>Catalog Sorting</span>
            </a>
            <a class="item" href="/CMS/product.php">
              <span>Ratings & Reviews</span>
            </a>
            <a class="item" href="/CMS/product.php">
              <span>URL Manager</span>
            </a>
          </span>
        </span>
      </span>

      <a class="item" href="report.php">
        <span class="label">Report</span>
      </a>

      <a href="/CMS/logout.php" class="item ico icoLogout"><!-- &nbsp; -->
      </a>
    </div>
    <div id="iconTray">
      <a href="/CMS/homepage.php" class="item ico icoHome"><!-- &nbsp; -->
      </a>
    </div>
  </div>    
</div>