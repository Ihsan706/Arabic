<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
  <meta charset="UTF-8">
  <title>اختيار</title>
  <style>
    body {
      margin: 0;
      font-family: "Tahoma", sans-serif;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
      background: linear-gradient(135deg, #1a1a1a, #444);
    }

    .container {
      background: rgba(255, 255, 255, 0.1);
      border-radius: 20px;
      padding: 30px;
      text-align: center;
      box-shadow: 0 8px 20px rgba(0, 0, 0, 0.5);
      width: 650px;
    }

    .container h1 {
      margin-bottom: 25px;
      color: #fff;
      font-size: 28px;
      letter-spacing: 2px;
    }

    .options {
      display: grid;
      grid-template-columns: repeat(2, 1fr);
      gap: 20px;
      justify-items: center;
    }

    .option {
      background: #222;
      border-radius: 15px;
      padding: 15px;
      width: 200px;
      cursor: pointer;
      transition: transform 0.4s ease, box-shadow 0.4s ease, opacity 0.4s ease;
      color: #fff;
    }

    .option img {
      width: 100%;
      height: 120px;
      border-radius: 10px;
      object-fit: cover;
      margin-bottom: 10px;
    }

    .option p {
      margin: 0;
      font-size: 16px;
    }

    .option:hover {
      transform: translateY(-10px) scale(1.05);
      box-shadow: 0 8px 20px rgba(0, 255, 200, 0.6);
    }

    .selected {
      box-shadow: 0 0 25px rgba(0, 255, 150, 0.9) !important;
      transform: scale(1.05);
      border: 2px solid #00ffcc;
    }

    .dimmed {
      opacity: 0.4;
      pointer-events: none;
    }
  </style>
</head>
<body>
  <div class="container">
    <h1>اختار</h1>
    <div class="options">
      <div class="option" onclick='window.open("4.php", "_self");'>
        <img src="oip.webp" alt="لنص نسخة الكتروني">
        <p>النص نسخة الكترونية</p>
      </div>
      <div class="option" onclick='window.open("5.php", "_self");'>
        <img src="q.jpg" alt="المراجع">
        <p>المراجع</p>
      </div>
      <div class="option" onclick='window.open("6.php", "_self");'>
        <img src="OIP.jpg" alt="البحث مصور">
        <p>البحث مصور</p>
      </div>
      <div class="option" onclick='window.open("5.php", "_self");'>
        <img src="R.png" alt="تنزيل البحث">
        <p>تنزيل البحث</p>
      </div>
    </div>
  </div>

  <script>
	/*
  //onclick="selectOption(this)" //<-- this was the used code for the eleamint
    function selectOption(selected) {
      const options = document.querySelectorAll('.option');
      options.forEach(opt => {
        if (opt === selected) {
          opt.classList.add('selected');
        } else {
          opt.classList.add('dimmed');
        }
      });
    }
	*/
  </script>
</body>
</html>
