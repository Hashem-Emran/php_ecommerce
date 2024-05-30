<?php
// استقبال البيانات المرسلة
$xmlData = file_get_contents('php://input');

// التحقق من وجود بيانات
if ($xmlData) {
    // تحويل البيانات XML إلى مصفوفة أو كائن قابل للتحليل
    $xmlObject = simplexml_load_string($xmlData);

    // معالجة البيانات حسب الحاجة
    $title = (string) $xmlObject->book->title;
    $author = (string) $xmlObject->book->author;
    $year = (int) $xmlObject->book->year;
    $price = (float) $xmlObject->book->price;

    // عرض البيانات أو تحويلها إلى JSON أو استخدامها بأي طريقة أخرى
    echo "Book Title: $title\n";
    echo "Author: $author\n";
    echo "Year: $year\n";
    echo "Price: $price\n";
} else {
    echo "No XML data received";
}
?>
