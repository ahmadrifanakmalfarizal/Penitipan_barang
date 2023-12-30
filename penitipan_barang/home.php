<?php include 'header2.php'?>
<!DOCTYPE html>
<html lang="id">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>TrusTee</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
  <style>
    @import url('https://fonts.googleapis.com/css2?family=Sriracha&display=swap');

    body {
      margin: 0;
      box-sizing: border-box;
      font-family: 'Arial', sans-serif;
      line-height: 1.6;
      color: #333;
      background-color: #f5f5f5;
    }

    /* Global Styles */
    a {
      text-decoration: none;
    }

    /* Header Styles */
    .header {
      display: flex;
      justify-content: space-between;
      align-items: center;
      background-color: #333;
      padding: 20px 80px;
      box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.1);
      position: fixed;
      width: 100%;
      top: 0;
      z-index: 1000;
    }

    .header .logo {
      font-size: 36px;
      font-family: 'Sriracha', cursive;
      color: #ffc107;
      font-weight: bold;
      letter-spacing: 2px;
    }

    .nav-items {
      display: flex;
      justify-content: space-around;
      align-items: center;
    }

    .nav-items a {
      color: #fff;
      padding: 15px 20px;
      font-weight: bold;
      letter-spacing: 1px;
      transition: color 0.3s;
    }

    .nav-items a:hover {
      color: #5edaf0;
    }

    /* Main Section Styles */
    .intro {
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
      width: 100%;
      height: 600px;
      background: linear-gradient(to bottom, rgba(0, 0, 0, 0.7) 0%, rgba(0, 0, 0, 0.7) 100%), url("https://www.vinculumgroup.com/wp-content/uploads/2021/06/direct-to-consumer-vs-traditional-retail-can-you-have-it-all-2.jpg");
      background-size: cover;
      background-position: center;
      background-repeat: no-repeat;
      color: #fff;
      padding: 50px 20px;
      text-align: center;
    }

    .intro h1 {
      font-family: 'Sriracha', cursive;
      font-size: 48px;
      font-weight: bold;
      margin: 0;
      letter-spacing: 2px;
      color: #ffc107;
    }

    .intro p {
      font-size: 18px;
      margin: 20px 0;
      max-width: 600px;
      line-height: 1.5;
      color: #fff;
    }

    .intro button {
      background-color: #ffc107;
      color: #333;
      padding: 15px 25px;
      border: none;
      border-radius: 5px;
      font-size: 20px;
      font-weight: bold;
      cursor: pointer;
      box-shadow: 0px 0px 20px rgba(255, 255, 255, 0.4);
      transition: background-color 0.3s;
    }

    .intro button:hover {
      background-color: #ffdb58;
    }

    .services {
      display: flex;
      justify-content: space-around;
      align-items: center;
      background-color: #fff;
      padding: 40px 80px;
      margin-top: 100px;
    }

    .service {
      text-align: center;
      padding: 30px;
      transition: transform 0.3s, box-shadow 0.3s;
      border-radius: 10px;
      box-shadow: 0px 0px 20px rgba(0, 0, 0, 0.1);
    }

    .service:hover {
      transform: scale(1.05);
    }

    .service i {
      font-size: 60px;
      color: #ffc107;
      border-radius: 50%;
      border: 2px solid #ffc107;
      padding: 25px;
      margin-bottom: 20px;
    }

    .service-heading {
      font-size: 24px;
      color: #333;
      text-transform: uppercase;
      margin: 10px 0;
      font-weight: bold;
      letter-spacing: 1px;
    }

    .service-text {
      font-size: 16px;
      color: #585858;
      margin: 10px 0;
      line-height: 1.5;
    }

    .about-service {
      display: flex;
      justify-content: space-around;
      align-items: center;
      padding: 40px 80px;
      border-top: 2px solid #eeeeee;
    }

    .about-service img {
      width: 100%;
      max-width: 600px;
      height: auto;
      border-radius: 10px;
      box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
    }

    .about-service-text {
      max-width: 600px;
      text-align: left;
      margin-right: 40px;
    }

    .about-service-text h2 {
      font-family: 'Sriracha', cursive;
      font-size: 36px;
      color: #333;
      text-transform: uppercase;
      margin: 0;
      font-weight: bold;
      letter-spacing: 2px;
      color: #333;
    }

    .about-service-text p {
      font-size: 16px;
      color: #585858;
      margin: 20px 0;
      line-height: 1.5;
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

    .bottom-links {
      display: flex;
      justify-content: space-around;
      align-items: center;
      padding: 40px 0;
    }

    .links {
      text-align: center;
    }

    .links span {
      font-size: 20px;
      text-transform: uppercase;
      margin-bottom: 10px;
      display: block;
      font-weight: bold;
      letter-spacing: 1px;
    }

    .links a {
      color: #a1a1a1;
      padding: 10px 20px;
      transition: color 0.3s;
      letter-spacing: 1px;
    }

    .links a:hover {
      color: #fff;
    }

    /* Responsive Styles */
    @media screen and (max-width: 768px) {
      .header {
        padding: 20px;
      }

      .intro {
        padding: 100px 20px;
      }

      .services,
      .about-service,
      .footer {
        padding: 40px 20px;
      }

      .about-service img {
        margin-top: 20px;
      }

      .about-service-text {
        margin-right: 0;
      }
    }
  </style>
</head>

<body>
  <main>
    <div class="intro">
      <h1>Mitra Penyimpanan Terpercaya Anda</h1>
      <p>Kami menyediakan solusi penyimpanan yang aman dan handal untuk barang berharga Anda.</p>
      <button>Pelajari Lebih Lanjut</button>
    </div>
    <div class="services">
      <div class="service">
        <i class="fas fa-box"></i>
        <p class="service-heading">Unit Penyimpanan</p>
        <p class="service-text">Jelajahi berbagai unit penyimpanan kami yang disesuaikan dengan kebutuhan Anda.</p>
      </div>
      <div class="service">
        <i class="fas fa-lock"></i>
        <p class="service-heading">Fasilitas Aman</p>
        <p class="service-text">Fasilitas kami yang modern memastikan keamanan maksimal untuk barang Anda.</p>
      </div>
      <div class="service">
        <i class="fas fa-shield-alt"></i>
        <p class="service-heading">Layanan Terpercaya</p>
        <p class="service-text">Anda bisa mengandalkan kami untuk layanan penyimpanan yang dapat diandalkan dengan komitmen pada keunggulan.</p>
      </div>
    </div>
    <div class="about-service">
      <div class="about-service-text">
        <h2>Tentang Layanan Kami</h2>
        <p>Kami berdedikasi untuk menyediakan solusi penyimpanan terbaik, menjamin keamanan dan keamanan barang Anda. Fasilitas modern kami dan tim berpengalaman membuat kami menjadi mitra penyimpanan terpercaya Anda.</p>
      </div>
      <img src="https://st4.depositphotos.com/1192060/41154/i/380/depositphotos_411546782-stock-photo-happy-woman-holding-cardboxes.jpg" alt="layanan penyimpanan">
    </div>
  </main>

</body>
</html>
<?php include 'footer.php'?>