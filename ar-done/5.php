<?php
// Very simple PHP page that shows research sources only.
$sources = [
    "1.كتاب صحيح المسلم",
	"2.كتاب صحيح المسلم",
	"3.كتاب صحيح البخاري",
    "موقع موضوع",
    "موقع المرسال",
	"موقع الموسوعة العربية الشاملة"
];
$url = [
    "https://sounah.com/hadith/8478/",
    "https://hadithprophet.com/hadith-47299.html",
    "https://quranislam.github.io/hadith/bukhari15.html",
	"https://mawdoo3.com/%D8%AD%D9%82_%D8%A7%D9%84%D9%84%D9%87_%D9%88%D8%AD%D9%82_%D8%A7%D9%84%D8%B1%D8%B3%D9%88%D9%84",
	"https://www.almrsal.com/post/775627",
	"https://www.mosoah.com/people-and-society/religion-and-spirituality/%D8%AD%D9%82-%D8%A7%D9%84%D9%84%D9%87-%D9%88%D8%AD%D9%82-%D8%A7%D9%84%D8%B1%D8%B3%D9%88%D9%84/",
];
?>
<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>المصادر</title>
  <style>
    body { font-family: Arial, sans-serif; margin: 40px; }
    h1 { font-size: 22px; margin-bottom: 20px; }
    ul { line-height: 1.6; }
  </style>
</head>
<body>
	<a href="3.php">&#8592; الرجوع</a>
  <h1>المصادر</h1>
  <ul>
    <?php foreach ($sources as $number => $s): ?>
      <li><a href="<?= htmlspecialchars($url[$number]) ?>"><?= htmlspecialchars($s) ?></a></li>
    <?php endforeach; ?>
  </ul>
</body>
</html>
