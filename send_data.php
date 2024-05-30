<?php

// بيانات XML المراد إرسالها
$xmlData = <<<XML
<bookstore>
    <book>
        <title>Sample Book</title>
        <author>John Doe</author>
        <year>2022</year>
        <price>10.99</price>
    </book>
</bookstore>
XML;

// عنوان URL لملف PHP الذي يستقبل البيانات
$url = 'http://localhost/receive_data.php'; // تأكد من تعديل العنوان إلى المسار الصحيح

// إعداد الطلب
$ch = curl_init($url);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, $xmlData);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

// إرسال الطلب والحصول على الرد
$response = curl_exec($ch);

// التحقق من وجود أخطاء
if (curl_errno($ch)) {
    echo 'Error:' . curl_error($ch);
} else {
    echo 'Response:' . $response;
}
// إغلاق الجلسة
curl_close($ch);
?>
