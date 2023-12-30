<?php include 'header2.php'?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Beautiful Landscapes Gallery</title>
  <style>
    body {
      font-family: 'Arial', sans-serif;
      margin: 0;
      padding: 0;
      background-color: #f5f5f5;
    }

    h1 {
      text-align: center;
      margin-top: 70px;
      color: #333;
    }

    .gallery-container {
      display: flex;
      flex-wrap: wrap;
      justify-content: center;
    }

    .gallery {
      margin: 10px;
      overflow: hidden;
      border: 1px solid #ddd; /* Soften the border color */
      border-radius: 8px;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
      transition: transform 0.3s;
      background-color: #fff;
    }

    .gallery:hover {
      transform: scale(1.05);
      box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2); /* Enhance the box shadow on hover */
    }

    .gallery img {
      width: 100%;
      height: auto;
      border-bottom: 1px solid #ddd; /* Soften the border color */
    }

    .desc {
      padding: 15px;
      text-align: center;
      background-color: #f9f9f9;
      border-top: 1px solid #ddd; /* Soften the border color */
    }

    .footer {
      display: flex;
      justify-content: space-between;
      align-items: center;
      background-color: #333;
      padding: 10px 20px;
      color: #fff;
      margin-top: 100px;
    }

    .footer .copy {
      font-size: 18px;
      letter-spacing: 1px;
    }

  </style>
</head>

<body>

  <h1>Beautiful Landscapes Gallery</h1>

  <div class="gallery-container">
    <div class="gallery">
      <a target="_blank" href="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSXMWHqQIXdTIHKVyd_dDSHgICkh_tmYi2m2w&usqp=CAU">
        <img src="https://d23xypyp2dkdqm.cloudfront.net/wp-content/uploads/2022/01/31034059/woman-hand-accepting-delivery-boxes-from-deliveryman-1-1024x683.jpg">
      </a>
      <div class="desc">Smart couriers send goods to customers</div>
    </div>

    <div class="gallery">
      <a target="_blank" href="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTot4f1o4UG2kE6pUdZRRFmOd42jvYrn0yGFg&usqp=CAU">
        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT413wC7jxbwI4zLOda2Lu8dxZmUdVVvHTkoEqwYYhJ25YmGqVcpgCGaki0f30UGBbF7Lg&usqp=CAU">
      </a>
      <div class="desc">Smart couriers send goods to customers</div>
    </div>

    <div class="gallery">
      <a target="_blank" href="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSUIVMzcGgLXyPmEgqWAbcPDOMQJmWJxQYvXQ&usqp=CAU">
        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSJg2Xwd92smsMgFRijUHs9yaIDWkBtRkI28vtbvD4jj5DC1xxP7OzqAoeAWUfP2qzcU5k&usqp=CAU">
      </a>
      <div class="desc">Smart couriers send goods to customers</div>
    </div>

    <div class="gallery">
      <a target="_blank" href="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSkZHu-1404RrydnewIciOkLE3l1IcBYfhOEA&usqp=CAU">
        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQkyQC3_6IUjULIy7Wuy5DbA4LbxTvmUCXGcA&usqp=CAU" alt="Mountains">
      </a>
      <div class="desc">Smart couriers send goods to customers</div>
    </div>
  </div>

</body>

</html>
<?php include 'footer.php'?>