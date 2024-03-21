<?php
$pattern = '/[a-z]/';
$text = 'This is a Sample Text.';
if (preg_match($pattern, $text)) {
   echo "Huruf kecil ditemukan!<br>";
} 
else {
   echo "Tidak ada huruf kecil!<br>";
}
$pattern = '/[0-9]+/';
$text = 'There are 123 apples.';
if (preg_match($pattern, $text, $matches)) {
   echo "Cocokkan: " . $matches[0] . "<br>";
} 
else {
   echo "Tidak ada yang cocok!<br>";
}
$pattern = '/apple/';
$replacement = 'banana';
$text = 'I like apple pie.';
$new_text = preg_replace($pattern, $replacement, $text);
$pattern = '/go*d/';
$text = 'god is good';
if (preg_match($pattern, $text, $matches)) {
   echo "Cocokkan: " . $matches[0] . "<br>";
} 
else {
   echo "Tidak ada yang cocok!<br>";
}
?>
<!DOCTYPE html>
<html>
<head>
   <title>Contoh Regex</title>
   <style>
       body {
           font-family: Arial, sans-serif;
           padding: 20px;
       }
       h1, h2 {
           color: #333;
       }
       pre {
           background-color: #f0f0f0;
           padding: 10px;
           border-radius: 5px;
       }
   </style>
</head>
<body>
   <h1>Contoh Regex</h1>
   <pre>
<?php
$pattern = '/[a-z]/';
$text = 'This is a Sample Text.';
if (preg_match($pattern, $text)) {
   echo "Huruf kecil ditemukan!<br>";
} 
else {
   echo "Tidak ada huruf kecil!<br>";
}

$pattern = '/[0-9]+/';
$text = 'There are 123 apples.';
if (preg_match($pattern, $text, $matches)) {
   echo "Cocokkan: " . $matches[0] . "<br>";
} 
else {
   echo "Tidak ada yang cocok!<br>";
}
?>
   </pre>
   <h2>Contoh Penggantian Teks dengan preg_replace</h2>
   <p>Teks asli: "I like apple pie."</p>
   <p>Teks baru setelah penggantian: "<?php echo $new_text; ?>"</p>
   <h2>Contoh Pencocokan Regex dengan Quantifier</h2>
   <p>Teks: "god is good"</p>
   <p>Pola: "/go*d/"</p>
   <?php
   $pattern = '/go*d/';
   $text = 'god is good';
   if (preg_match($pattern, $text, $matches)) {
       echo "<p>Cocokkan: " . $matches[0] . "</p>";
   } 
   else {
       echo "<p>Tidak ada yang cocok!</p>";
   }
   ?>
</body>
</html>