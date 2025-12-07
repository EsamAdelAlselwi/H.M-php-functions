<?php
// دوال المصفوفات
$fruits = ["apple", "banana", "orange"];

echo "المصفوفة الأصلية:\n";
print_r($fruits);

// إضافة عنصر
array_push($fruits, "mango");

// حذف آخر عنصر
array_pop($fruits);

// حذف أول عنصر
array_shift($fruits);

// إضافة عنصر للبداية
array_unshift($fruits, "grape");

// دمج مصفوفتين
$nums1 = [1, 2, 3];
$nums2 = [4, 5, 6];
$merged = array_merge($nums1, $nums2);

// ترتيب
sort($merged);

// عدد العناصر
$count = count($merged);

// مجموع الأرقام
$sum = array_sum($merged);

echo "\nبعد التعديلات:\n";
print_r($fruits);

echo "\nمصفوفة مدموجة ومرتبة:\n";
print_r($merged);

echo "\nعدد العناصر: $count\n";
echo "مجموع العناصر: $sum\n";

// دوال النصوص
$text = "  Hello PHP World  ";

echo "\nالنص الأصلي: '$text'\n";

// إزالة المسافات
$trimmed = trim($text);

// طول النص
$length = strlen($trimmed);

// استبدال
$replaced = str_replace("PHP", "Laravel", $trimmed);

// تحويل لصغير
$lower = strtolower($trimmed);

// تحويل لكبير
$upper = strtoupper($trimmed);

// تقسيم
$split = explode(" ", $trimmed);

echo "\nبعد تطبيق الدوال النصية:\n";
echo "Trim: '$trimmed'\n";
echo "Length: $length\n";
echo "Replace: '$replaced'\n";
echo "Lower: '$lower'\n";
echo "Upper: '$upper'\n";

echo "\nExplode:\n";
print_r($split);
?>

