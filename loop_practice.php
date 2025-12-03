
<?php
$group = ['عمار','سلوان','رنا','هاني','منة'];
$html = "<!doctype html><html lang='ar'><head><meta charset='utf-8'><title>Loop 3</title></head><body style='direction:rtl;font-family:Verdana;padding:18px'>";
foreach($group as $member){
    $html .= "<p>مرحبًا {$member}، نتمنى لك حظًا سعيدًا في الامتحان!</p>";
}
$html .= "<p>";
for($i=1;$i<=10;$i++){
    if($i % 2 == 0) $html .= "<span style='background:#eef;padding:3px 6px;border-radius:4px;margin:2px;'>$i</span>";
    else $html .= "<span style='margin:2px;'>$i</span>";
}
$html .= "</p></body></html>";
echo $html;
