<?php
flush();
ob_start();
##########
$token = "5077529883:AAFgBzMmABRHNnFeiV7r307HUqMC_wWDa8I";// حط توكنك
$𝐒𝐨𝐮𝐫𝐜𝐞𝐬 𝐃𝐞𝐦𝐨𝐧 = "5077529883:AAFgBzMmABRHNnFeiV7r307HUqMC_wWDa8I";// حط توكن الاشتراك الاجباري

$buy = "XSBOTS";// معرفك بدون @
$userbot ="FFF8BOT";// حط بوتك
$sudo = "1199347788";// ايديك 
$admin = "$sudo";// لاتغير شي
$idBot = "5077529883";// ايدي بوتك 
$admmm = $sudo;// لاتغير
$ADMIN = $sudo;// لاتغير
$Dev = array("$sudo","1199347788");// ايديك مكان 000
$Devd = "$sudo";// لاتغير 
$tbbots = FFF8bot;// معرف بوتك
 
$channel = "XSBOTS";// قنانك بدون @
$chinnl = "$channel";// لاتغير
$DevUser = "@$buy"; // 
$Devch = "@$buy"; //  
$Userbot = "$tbbots"; // 
//~~~~~~~~//
define('API_KEY',$token);
echo "setWebhook ~> <a href=\"https://api.telegram.org/bot".API_KEY."/setwebhook?url=".$_SERVER['SERVER_NAME']."".$_SERVER['SCRIPT_NAME']."\">https://api.telegram.org/bot".API_KEY."/setwebhook?url=".$_SERVER['SERVER_NAME']."".$_SERVER['SCRIPT_NAME']."</a>";
function bot($method,$datas=[]){
    $url = "https://api.telegram.org/bot".API_KEY."/".$method;
$ch = curl_init();
    curl_setopt($ch,CURLOPT_URL,$url);
    curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
    curl_setopt($ch,CURLOPT_POSTFIELDS,$datas);
    $res = curl_exec($ch);
    if(curl_error($ch)){
        var_dump(curl_error($ch));
    }else{
        return json_decode($res);
    }
}

$update = json_decode(file_get_contents('php://input'));
@$message = $update->message;
@$from_id = $message->from->id;
@$chat_id = $message->chat->id;
@$message_id = $message->message_id;
@$first_name = $message->from->first_name;
@$last_name = $message->from->last_name;
@$username = $message->from->username;
@$text= $message->text;
@$firstname = $update->callback_query->from->first_name;
@$usernames = $update->callback_query->from->username;
@$chatid = $update->callback_query->message->chat->id;
@$fromid = $update->callback_query->from->id;
@$membercall = $update->callback_query->id;
@$reply = $update->message->reply_to_message->forward_from->id;
/*===== dev ~ @m35f7 =====*/
@$data = $update->callback_query->data;
@$messageid = $update->callback_query->message->message_id;
@$tc = $update->message->chat->type;
@$gpname = $update->callback_query->message->chat->title;
@$namegroup = $update->message->chat->title;
/*===== dev ~ @m35f7 =====*/
@$newchatmemberid = $update->message->new_chat_member->id;
@$newchatmemberu = $update->message->new_chat_member->username;
@$rt = $update->message->reply_to_message;
@$replyid = $update->message->reply_to_message->message_id;
@$tedadmsg = $update->message->message_id;
@$edit = $update->edited_message->text;
@$re_id = $update->message->reply_to_message->from->id;
@$re_user = $update->message->reply_to_message->from->username;
@$re_name = $update->message->reply_to_message->from->first_name;
@$re_msgid = $update->message->reply_to_message->message_id;
@$re_chatid = $update->message->reply_to_message->chat->id;
@$message_edit_id = $update->edited_message->message_id;
@$chat_edit_id = $update->edited_message->chat->id;
@$edit_for_id = $update->edited_message->from->id;
@$edit_chatid = $update->callback_query->edited_message->chat->id;
@$caption = $update->message->caption;
/*===== dev ~ @m35f7 =====*/
@$statjson = json_decode(file_get_contents("https://api.telegram.org/bot$token/getChatMember?chat_id=$chat_id&user_id=".$from_id),true);
@$status = $statjson['result']['status'];
@$statjsonrt = json_decode(file_get_contents("https://api.telegram.org/bot$token/getChatMember?chat_id=$chat_id&user_id=".$re_id),true);
@$statusrt = $statjsonrt['result']['status'];
@$statjsonq = json_decode(file_get_contents("https://api.telegram.org/bot$token/getChatMember?chat_id=$chatid&user_id=".$fromid),true);
@$statusq = $statjsonq['result']['status'];
@$info = json_decode(file_get_contents("https://api.telegram.org/bot$token/getChatMember?chat_id=$chat_edit_id&user_id=".$edit_for_id),true);
@$you = $info['result']['status'];
@$forchannel = json_decode(file_get_contents("https://api.telegram.org/bot".$token."/getChatMember?chat_id=@".$channel."&user_id=".$from_id));
@$tch = $forchannel->result->status;
/*===== dev ~ @m35f7 =====*/
@$settings = json_decode(file_get_contents("data/$chat_id.json"),true);
@$settings2 = json_decode(file_get_contents("data/$chatid.json"),true);
@$editgetsettings = json_decode(file_get_contents("data/$chat_edit_id.json"),true);
@$user = json_decode(file_get_contents("data/user.json"),true);
@$filterget = $settings["filterlist"];

$mem = bot('getchatmemberscount',['chat_id'=>$chat_id])->result;
$cmg = file_get_contents("data/count/$chat_id.txt");
$cmssg = explode("\n",$cmg);
$cmsg = count($cmssg);

if ($tc == 'private'){  
@$user = json_decode(file_get_contents("data/user.json"),true);
if(!in_array($from_id, $user["userlist"])) {
$user["userlist"][]="$from_id";
$user = json_encode($user,true);
file_put_contents("data/user.json",$user);
}
}
elseif ($tc == 'group' | $tc == 'supergroup'){  
@$user = json_decode(file_get_contents("data/user.json"),true);
if(!in_array($chat_id, $user["grouplist"])) {
$user["grouplist"][]="$chat_id";
$user = json_encode($user,true);
file_put_contents("data/user.json",$user);
}
}
$re = $update->message->reply_to_message;
$re_id = $update->message->reply_to_message->from->id;

$grouplisturl = $user["grouplist"];
if ($tc == 'group' | $tc == 'supergroup'){
@$user = json_decode(file_get_contents("data/user.json"),true);
if(!in_array($chat_id, $user["grouplist"])) {
$user["grouplist"][]="$chat_id";
$user = json_encode($user,true);
file_put_contents("data/user.json",$user);
}
}
$grouplisturl = $user["grouplist"];
if( $text == "الروابط" or $text == "⌯ روابط الكروبات" or $text == "قائمة روابط الكروبات" or $text == "قائمه روابط الكروبات" or $text == "قائمة الروابط" and $settings["silentlist"]!== NULL){
if (in_array($from_id,$Dev) or in_array($from_id,$eri)) {
$grouplisturl = $user["grouplist"];
for($z = 0;$z <= count($grouplisturl)-1;$z++){
$groupinlink = json_decode(file_get_contents("https://api.telegram.org/bot".API_KEY."/exportChatInviteLink?chat_id=$grouplisturl[$z]"));
$grouplinkem = $groupinlink->result;
$result = $result."┇$z-$grouplinkem"."\n";
}
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"📋¦ قائمه الروابط/للكروبات :
┉ ┉ ┉ ┉ ┉ ┉ ┉ ┉ ┉
-$result",
]);
}
}
######
include "k.php";
###########
if( $text=="/start" &&  $tc == "private" or $text=="رجوع" &&  $tc == "private" ){
if(in_array($from_id,$Dev) or in_array($from_id,$developer)){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
⌯⁞ آهہ‌‏لآ عزيزي آلمـطـور !
⌯⁞ آنتهہ‌‏ آلمـطـور آلآسـآسـي هہ‌‏نآ 
────────────────
⌯⁞ CH ⋙ **[ᴛᴇᴀᴍ ɴɪᴢᴋ](https://t.me/XSB3S)** 💥
⌯⁞ CH ⋙ **[Ͳᴇᴀᴍ ʏᴇᴍᴇɴ](t.me/Tmsmix)** 🇾🇪
────────────
⌯⁞ تسـتطـيع‌‏ آلتحكم بكل آلآوآمـر آلمـمـوجودهہ‌‏ بآلكيبورد
⌯⁞ فقط آضـغط ع آلآمـر آلذي تريد تنفيذهہ‌‏",
'parse_mode'=>"markdown",
'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message->message_id,
'reply_markup'=>json_encode([
'keyboard'=>[
[['text'=>"⌯ روابط الكروبات"]],
[['text'=>"⌯ تحديث"],['text'=>"⌯ تحديث السورس"]],
[['text'=>"⌯ حظر مجموعه"]],
[['text'=>"⌯ تغير اسم البوت"],['text'=>"⌯ تغير كليشة مطور"]],
[['text'=>"⌯ قسم الاذاعة والاحصائيات"]],

[['text'=>"⌯ تفعيل التنبيه"],['text'=>"⌯ تعطيل التنبيه"]],
[['text'=>"⌯ قسم التواصل"]],
[['text'=>"⌯ تفعيل start"],['text'=>"⌯ تعطيل start"]],
[['text'=>"⌯ جلب start"]],
[['text'=>"⌯ اضف رد عام"],['text'=>"⌯ الردود العامة"]],
[['text'=>"⌯ مسح الردود العامة"],['text'=>"⌯ مسح رد عام"]],

[['text'=>"⌯ قسم الاشتراك الاجباري"]],

],
'resize_keyboard'=>true
])
]);
}
}
if( $text=="⌯ قسم التواصل"){
if(in_array($from_id,$Dev) or in_array($from_id,$eri)){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"✵ مرحبا ⋙ [$first_name](tg://user?id=$from_id)
⌯ انت الان في القسم العام بالتواصل
➖
",'parse_mode'=>"markdown",
'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message->message_id,
'reply_markup'=>json_encode([
'keyboard'=>[
[['text'=>"⌯ جلب التواصل"]],
[['text'=>"⌯ تعين رد التواصل"],['text'=>"⌯ حذف رد التواصل"]],
[['text'=>"⌯ تعطيل التواصل"],['text'=>"⌯ تفعيل التواصل"]],
[ ['text'=>"رجوع"] ],
],
'resize_keyboard'=>true
])
]);
}
}
if( $text=="⌯ قسم الاذاعة والاحصائيات"){
if(in_array($from_id,$Dev) or in_array($from_id,$eri)){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"✵ مرحبا ⋙ [$first_name](tg://user?id=$from_id)
⌯ انت الان في القسم الاحصائيات و الاذاعه",
'parse_mode'=>"markdown",
'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message->message_id,
'reply_markup'=>json_encode([
'keyboard'=>[
[['text'=>"⌯ الاحصائيات"]],
[['text'=>"⌯ اذاعه خاص بالتوجيه"]],
[['text'=>"⌯ اذاعه عام"],['text'=>"⌯ اذاعه خاص"]],
[['text'=>"⌯ اذاعه عام بالتوجيه"]],
[['text'=>"⌯ المجموعات"]],
[['text'=>"⌯ المشتركين"]],
[ ['text'=>"رجوع"]],
],
'resize_keyboard'=>true
])
]);
}
}
if($text=="⌯ قسم الاشتراك الاجباري"){
if(in_array($from_id,$Dev) or in_array($from_id,$eri)){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"✵ مرحبا ⋙ [$first_name](tg://user?id=$from_id)
⌯ انت الان في القسم الاشتراك الاجباري",
'parse_mode'=>'MarkDown',
'reply_to_message_id'=>$message_id, 
'reply_markup'=>json_encode([
'keyboard'=>[
[['text'=>"حذف قناة الاشتراك"],['text'=>"تعيين قناة الاشتراك"]],
[['text'=>"جلب قناة الاشتراك"]],
[['text'=>"⌯ تعطيل الاشتراك الاجباري"]],
[['text'=>"⌯ تفعيل الاشتراك الاجباري"]],
[ ['text'=>"رجوع"]],
],
'resize_keyboard'=>true
])]);}
}

$developers_info = file_get_contents("data/developers/developer.txt");
$developer = explode ("\n",$developers_info);
$developers_infos = file_get_contents("data/developers/developers.txt");
$developers = explode("\n",$developers_infos);
$list_developers ="";
$list_developers = $list_developers.""."$developers_infos ➖➖➖➖➖➖➖";
/*===== dev ~ @m35f7 =====*/
$nazarr_info = file_get_contents("data/nazar/$chat_id.txt");
$nazar  = explode("\n",$nazarr_info);
$nazarr_infos = file_get_contents("data/nazar/$chat_id/nazr.txt");
$nazarr = explode ("\n",$nazarr_infos);
/*===== dev ~ @m35f7 =====*/
$carloss_info = file_get_contents("data/carlos/$chat_id.txt");
$carlos  = explode("\n",$carloss_info);
$carloss_infos = file_get_contents("data/carlos/$chat_id/crlo.txt");
$carloss = explode ("\n",$carloss_infos);
/*===== dev ~ @m35f7 =====*/
$mangers_info = file_get_contents("data/manger/$chat_id.txt");
$manger  = explode("\n",$mangers_info);
$mangers_infos = file_get_contents("data/manger/$chat_id/mange.txt");
$mangers = explode ("\n",$mangers_infos);
/*===== dev ~ @m35f7 =====*/
$admin_users_info = file_get_contents("data/admin_user/$chat_id.txt");
$admin_user  = explode("\n",$admin_users_info);
$admin_users_infos = file_get_contents("data/admin_user/$chat_id/mange.txt");
$admin_users = explode ("\n",$admin_users_infos);
/*===== dev ~ @m35f7 =====*/
$mmyazs_info = file_get_contents("data/mmyaz/$chat_id.txt");
$mmyaz  = explode("\n",$mmyazs_info);
$mmyazs_infos = file_get_contents("data/mmyaz/$chat_id/mange.txt");
$mmyazs = explode ("\n",$mmyazs_infos);
/*===== dev ~ @m35f7 =====*/
mkdir("data");
mkdir("data/developers");
mkdir("data/nazar");
mkdir("data/nazar/$chat_id");
mkdir("data/carlos");
mkdir("data/carlos/$chat_id");
mkdir("data/manger");
mkdir("data/manger/$chat_id");
mkdir("data/admin_user");
mkdir("data/admin_user/$chat_id");
mkdir("data/mmyaz");
mkdir("data/mmyaz/$chat_id");
mkdir("statistics");
mkdir("SudoOrders");

$setch = file_get_contents("SudoOrders/setch.txt");
$setchannel = file_get_contents("SudoOrders/setchannel.txt");
if($text == "تفعيل" or $text == "حظر" or $text == "ايدي" or $text == "كتم" or $text == "تقيد" or $text == "الاوامر" or $text == "الاعدادات" or $text == "رتبتي" or $text == "كشف" or $text == "الرتبه" or $text == "رتبته" or $text == "اضف رد" or $text == "حذف رد" or $text == "تاك" or $text == "حذف امر" or $text == "اضف امر" or $text == "تاك للكل" or $text == "/start" or $text == "الاوامر" or $text == "م1" or $text == "م2" or $text == "م3" or $text == "م4" or $text == "م5" or $text == "اوامر التحشيش"){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) {if ($tc == 'group' | $tc == 'supergroup'){
$add = $settings["information"]["added"];
if ($add == true){
if($setchannel == "الاشتراك الاجباري مفعل"){
$join = file_get_contents("https://api.telegram.org/bot".$𝐒𝐨𝐮𝐫𝐜𝐞𝐬 𝐃𝐞𝐦𝐨𝐧."/getChatMember?chat_id=@$setch&user_id=".$from_id);
if($message && (strpos($join,'"status":"left"') or strpos($join,'"Bad Request: USER_ID_INVALID"') or strpos($join,'"status":"kicked"'))!== false){
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"*⌯ مرحبا بگ عزيزي ،
⌯ لا يمڪنـك استخدام البوت ،
⌯ عليك الإشتراگ في قناة البوت ،
⌯ القناة ~⪼ ❪ @$setch ❫️ ؛*
",'parse_mode'=>'markdown','reply_to_message_id'=>$message->message_id,
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"⌯ للاشتراك اضغط هنا",'url'=>"t.me/$setch"]],]])]);
 bot("sendmessage",[
      "chat_id"=>$Devd,
      "text"=>"⌯⁞  مرحبأ عزيزي المطور 
━━━━━━━━━━━━━
⌯⁞ اليك معلومات العضو قام بدخول قناة

⌯⁞ اسم العضو ~⪼ $first_name
⌯⁞ معرف العضو ~⪼ @$username
⌯⁞ ايدي العضو ~⪼ $from_id
━━━━━━━━━━━━━
⌯⁞ قناة الاشتراك الاجباري ~⪼ @$setch",
      ]);
      die('اا');
  }
bot('sendMessage',['chat_id'=>$chat_id, 'text'=>" ",'reply_to_message_id'=>$message->message_id,]);}}}}}

if(in_array($from_id,$eri)){
$info = "مطور السورس";
}
elseif(in_array($from_id,$developer) ){
$info = "مطور البوت";
}
elseif(in_array($from_id,$Dev) ){
$info = "مطور الاساسي";
}
elseif(in_array($from_id,$nazar) ){
$info = "منشئ اساسي";
}
elseif(in_array($from_id,$carlos) ){
$info = "منشئ";
}
elseif($status == "creator"){
$info = "المالك";
}
elseif($status == "administrator"){
$info = "المشرف";
}
elseif(in_array($from_id,$manger) ){
$info = "المدير";
}
elseif(in_array($from_id,$admin_user) ){
$info = "ادمن";
}
elseif(in_array($from_id,$mmyaz) ){
$info = "عضو مميز";
}elseif($status == "member" ){
$info = "عضو فقط";
}
if(!@$username){
$casss = "لايوجد يوزر";
}elseif(@$username){
$casss = "@$username";
}
if($text=="رتبتي" ){
bot('sendmessage',[
'chat_id'=>$chat_id, 
'text'=>"
⌯⁞ ايديك ↫ $from_id ،
⌯⁞ معرفك ↫ $casss ،
⌯⁞ رتبتك ↫ $info ،
",
'parse_mode'=>"html",
'reply_to_message_id'=>$message->message_id,
]);
}
/*===== dev ~ @m35f7 =====*/
$type = $update->message->chat->type;
$from_id = $message->from->id;
$chat_id = $message->chat->id;
$statjson = json_decode(file_get_contents("https://api.telegram.org/bot".$API_KEY."/getChatMember?chat_id=".$chat_id."&user_id=".$from_id),true);
$status = $statjson['result']['status'];
$BGBBB = json_decode(file_get_contents("BGBBB.json"),true);
if($text){
if($BGBBB[$chat_id][$text]){
$text = $BGBBB[$chat_id][$text] or $text;
}
}
if ($type == 'group' || $type == 'supergroup'){
if ( $status == 'creator' or in_array($from_id,$Dev) or in_array($from_id,$developer) or in_array($from_id,$carlos) or in_array($from_id,$nazar) or in_array($from_id,$eri)) {
if($text == "حذف امر"){
$aa ="⌯⁞ ارسل الامر القديم الان .";
bot("sendmessage",[
"chat_id"=>$chat_id,
"text"=>$aa,'parse_mode'=>"Markdown",
'reply_to_message_id'=>$message->message_id,
]);
$BGBBB["trued"][$chat_id][$from_id]="true";
file_put_contents("BGBBB.json",json_encode($BGBBB,true));
}
if($text != "حذف امر" and $BGBBB["trued"][$chat_id][$from_id]=="true"){
$BGBBB["trued"][$chat_id][$from_id]="true1";
file_put_contents("BGBBB.json",json_encode($BGBBB,true));
$aa ="⌯⁞ تم حذف الامر بنجاح .";
bot("sendmessage",[
"chat_id"=>$chat_id,
"text"=>$aa,'parse_mode'=>"Markdown",
'reply_to_message_id'=>$message->message_id,
]);
$key = array_search($BGBBB[$chat_id][$BGBBB[$chat_id][$text]],$BGBBB[$chat_id]["List"]);
unset($BGBBB[$chat_id]["List"][$key]);
$BGBBB[$chat_id]["List"] = array_values($BGBBB[$chat_id]["List"]);
unset($BGBBB[$chat_id][$BGBBB[$chat_id][$text]]);
unset($BGBBB[$chat_id][$text]);
unset($BGBBB["trued"][$chat_id][$from_id]);
unset($BGBBB["trued"][$chat_id]);
file_put_contents("BGBBB.json",json_encode($BGBBB,true));
}
if($text == "اضف امر"){
$aa ="⌯⁞ ارسل الامر القديم الان .";
bot("sendmessage",[
"chat_id"=>$chat_id,
"text"=>$aa,'parse_mode'=>"Markdown",
'reply_to_message_id'=>$message->message_id,
]);
$BGBBB["true"][$chat_id][$from_id]="true";
file_put_contents("BGBBB.json",json_encode($BGBBB,true));
}
if($text != "اضف امر" and $BGBBB["true"][$chat_id][$from_id]=="true"){
$BGBBB["true"][$chat_id][$from_id]="true1";
file_put_contents("BGBBB.json",json_encode($BGBBB,true));
$aa ="⌯⁞ ارسل الامر الجديد الان .";
bot("sendmessage",[
"chat_id"=>$chat_id,
"text"=>$aa,'parse_mode'=>"Markdown",
'reply_to_message_id'=>$message->message_id,
]);
$BGBBB["true"][$chat_id]["c"]=$text;
file_put_contents("BGBBB.json",json_encode($BGBBB,true));
}
$recv = $BGBBB["true"][$chat_id]["c"];
if($text != $BGBBB["true"][$chat_id]["c"] and $BGBBB["true"][$chat_id][$from_id]== "true1"){
$aa ="⌯⁞ تم حفظ الامر بنجاح .";
bot("sendmessage",[
"chat_id"=>$chat_id,
"text"=>$aa,'parse_mode'=>"Markdown",
'reply_to_message_id'=>$message->message_id,
]);
$BGBBB[$chat_id]["List"][]=$text;
$BGBBB[$chat_id][$recv] = $text;
$BGBBB[$chat_id][$text]= $BGBBB["true"][$chat_id]["c"];
unset($BGBBB["true"][$chat_id]);
file_put_contents("BGBBB.json",json_encode($BGBBB,true));
}
if($text == "مسح الاوامر المضافه"){
$aa ="⌯⁞ تم مسح الاوامر المضافه .";
bot("sendmessage",[
"chat_id"=>$chat_id,
"text"=>$aa,'parse_mode'=>"Markdown",
'reply_to_message_id'=>$message->message_id,
]);
for($j=0;$j<count($BGBBB[$chat_id]["List"]); $j++){
$deal = $BGBBB[$chat_id]["List"][$j];
$d = $BGBBB[$chat_id][$deal];
unset($BGBBB[$chat_id][$d]);
unset($BGBBB[$chat_id][$deal]);
}
unset($BGBBB[$chat_id]["List"]);
file_put_contents("BGBBB.json",json_encode($BGBBB,true));
}
if($text == "الاوامر المضافه" ){
if(!$BGBBB[$chat_id]["List"]){
$aa ="⌯⁞ لا يوجد اوامر مضافه";
bot("sendmessage",[
"chat_id"=>$chat_id,
"text"=>$aa,'parse_mode'=>"Markdown",
'reply_to_message_id'=>$message->message_id,
]);
}
}
if($text == "الاوامر المضافه"){
if($BGBBB[$chat_id]["List"]){
for($j=0;$j<count($BGBBB[$chat_id]["List"]); $j++){
$Eq = $BGBBB[$chat_id]["List"][$j];
$dr = $BGBBB[$chat_id][$Eq];
$msg = $msg. $j."- ".$Eq." ~ ( ".$dr." ) \n";
}
$j = "⌯⁞ قائمه الاوامر المضافه هي :  — — — — — — — — —
".$msg;
bot("sendmessage",[
"chat_id"=>$chat_id,
"text"=>$j,'parse_mode'=>"Markdown",
'reply_to_message_id'=>$message->message_id,
]);
}
}
}
}
/*===== dev ~ @m35f7 =====*/
if($re and $text == "رفع مطور" and $re_id !=$id_Bot and  in_array($from_id,$Dev) || in_array($from_id,$eri) and !in_array($re_id,$developer)){
file_put_contents("data/developers/developer.txt",$re_id ."\n " , FILE_APPEND);
file_put_contents("data/developers/developers.txt",'[@'.$re_user ."]". "\n " , FILE_APPEND);
bot('SendMessage',['chat_id'=>$chat_id,
'text'=>"
✵⁞ العضو ↫「 [$re_name](tg://user?id=$re_id) 」
⌯⁞ ايديه ↫ `$re_id` ، 
⌯⁞ تم ترقية ليصبح مطور
",'parse_mode'=>'markdown','reply_to_message_id'=>$message->message_id,'disable_web_page_preview'=>true,
]);
}
elseif($re and $text == "رفع مطور"  and $re_id !=$id_Bot and in_array($from_id,$Dev) and  in_array($from_id,$eri) and in_array($re_id,$developer)){
bot('SendMessage',['chat_id'=>$chat_id,
'text'=>"✵⁞ العضو ⋙「 [$re_name](tg://user?id=$re_id) 」 
⌯⁞ ايديه ↫ `$re_id`
⌯⁞ هوا بالفعل مطور
",'parse_mode'=>'markdown','reply_to_message_id'=>$message->message_id,'disable_web_page_preview'=>true,
]);
}
if(in_array($from_id,$Dev) || in_array($from_id,$eri)){
if($re and $text == "تنزيل مطور" and in_array($re_id,$developer)){
$re_id_info = file_get_contents("data/developers/$chat_id.txt");
$devr = file_get_contents("data/developers/$chat_id/developer.txt");
$devr1 = explode("             \n",$devr);
$str = str_replace($re_id,"",$re_id_info);
$str2 = str_replace("⌯ ❨ [" . "@". $re_user ."] ❩ " . "•" . " ❨ `". $re_id ."` ❩ ","",$devr1);
file_put_contents("data/developers/developer.txt",$str);
file_put_contents("data/developers/developers.txt",$str);
bot('SendMessage',['chat_id'=>$chat_id, 'text'=>"
✵⁞ العضو ⋙「 [$re_name](tg://user?id=$re_id) 」
⌯⁞ ايديه ↫ `$re_id` 
⌯⁞ تم تنزيله من قائمة المطورين
", 'parse_mode'=>'markdown','reply_to_message_id'=>$message->message_id,'disable_web_page_preview'=>true, ]); }}

if(in_array($from_id,$Dev)){
if($re and $text == "تنزيل مطور" and !in_array($re_id,$developer)){
bot('SendMessage',['chat_id'=>$chat_id, 'text'=>"
✵⁞ العضو ⋙「 [$re_name](tg://user?id=$re_id) 」
⌯⁞ ايديه ↫ `$re_id` 
⌯⁞ هو ليس مطور ليتم تنزيله
",'parse_mode'=>'markdown','reply_to_message_id'=>$message->message_id,'disable_web_page_preview'=>true, ]); } }

if($text == "مسح المطورين" and   in_array($from_id,$Dev)){
			file_put_contents("data/developers/developer.txt"," ");
			file_put_contents("data/developers/developers.txt"," ");
bot('SendMessage',['chat_id'=>$chat_id,
'text'=>"
✵⁞ عزيزي ⋙「 [$first_name](tg://user?id=$from_id) 」 
⌯⁞ تم مسح قائمة المطورين
",'parse_mode'=>'markdown','reply_to_message_id'=>$message->message_id,'disable_web_page_preview'=>true,
]);
}
if($text == "المطورين"  and   in_array($from_id,$Dev) and $developers_info != NULL and $developers_info != " "){
bot('SendMessage',['chat_id'=>$chat_id,
'text'=>"✵⁞ اليك قائمة ⋙ المطورين
$list_developers
",'parse_mode'=>'markdown','reply_to_message_id'=>$message->message_id,'disable_web_page_preview'=>true,
]);
}
if($text == "المطورين" and   in_array($from_id,$Dev) and $developers_info == NULL || $developers_info == " "){
bot('SendMessage',['chat_id'=>$chat_id,
'text'=>"
✵⁞ عزيزي ⋙「 [$first_name](tg://user?id=$from_id) 」 
⌯⁞ لايوجد مطور حالين
",'parse_mode'=>'markdown','reply_to_message_id'=>$message->message_id,'disable_web_page_preview'=>true,
]);
}

if($status == "creator" ||  in_array($from_id,$Dev) || in_array($from_id,$developer) || in_array($from_id,$eri)) {
if($re and $text == "رفع منشئ اساسي" || $text == "رفع المنشئ اساسي"  and !in_array($re_id,$manger)){
			file_put_contents("data/nazar/$chat_id.txt",$re_id . "\n" , FILE_APPEND);
			file_put_contents("data/nazar/$chat_id/nazr.txt" , " *𓆩* [" . "@". $re_user ."] *𓆪* " . "»" . " *𓆩* `". $re_id ."` *𓆪* ". "\n" , FILE_APPEND);
bot('SendMessage',[
'chat_id'=>$chat_id,
'text'=>"
✵⁞ بواسطه ⋙「 [$re_name](tg://user?id=$re_id) 」
⌯⁞ ايديه ↫ `$re_id` 
⌯⁞ تم ترقية ليصبح منشئ اساسي
"
,'parse_mode'=>'markdown',
'reply_to_message_id'=>$message->message_id,
'disable_web_page_preview'=>true,
]);
}
elseif($re and $text == "رفع منشئ اساسي" || $text == "رفع المنشئ اساسي" and in_array($re_id,$nazar)){
bot('SendMessage',['chat_id'=>$chat_id,
'text'=>"
✵⁞ العضو ⋙「 [$re_name](tg://user?id=$re_id) 」
⌯⁞ ايديه ↫ `$re_id` 
⌯⁞ هوا بالفعل منشئ اساسي
",
'parse_mode'=>'markdown','reply_to_message_id'=>$message->message_id,'disable_web_page_preview'=>true,
]);
}
if($text == "مسح المنشئين الاساسي" ){
file_put_contents("data/nazar/$chat_id.txt","");
file_put_contents("data/nazar/$chat_id.txt","");
file_put_contents("data/nazar/$chat_id/nazr.txt" ,"");
bot('SendMessage',['chat_id'=>$chat_id,
'text'=>"
✵⁞ بواسطة ⋙「 [$first_name](tg://user?id=$from_id) 」 
⌯⁞ تم مسح قائمة المنشئين الاساسي
",
'parse_mode'=>'markdown','reply_to_message_id'=>$message->message_id,'disable_web_page_preview'=>true,  
]);
}

if($re and $text == "تنزيل المنشئ اساسي" || $text == "تنزيل منشئ اساسي"  and in_array($re_id,$nazar)){
	$re_id_info = file_get_contents("data/nazar/$chat_id.txt");
	$mdrs = file_get_contents("data/nazar/$chat_id/nazr.txt");
	$mdrs1 = explode("             \n",$mdrs);
	$str = str_replace($re_id,"",$re_id_info);
	$str2 = str_replace(" *𓆩* [" . "@". $re_user ."] *𓆪* " . "»" . " *𓆩* `". $re_id ."` *𓆪* ","",$mdrs1);
	file_put_contents("data/nazar/$chat_id.txt",$str);
	file_put_contents("data/nazar/$chat_id/nazr.txt",$str2);
	bot('SendMessage',['chat_id'=>$chat_id,
    'text'=>"
✵⁞ العضو ⋙「 [$re_name](tg://user?id=$re_id) 」
⌯⁞ ايديه ↫ `$re_id` 
⌯⁞ تم تنزيله من قائمة المنشئين الاساسي
",
'parse_mode'=>'markdown','reply_to_message_id'=>$message->message_id,'disable_web_page_preview'=>true,
]);
}
if($re and $text == "تنزيل المنشئ اساسي" || $text == "تنزيل منشئ اساسي" || $text == "ت م ا" || $text == "تنما" and !in_array($re_id,$nazar)){
bot('SendMessage',['chat_id'=>$chat_id,
'text'=>"
✵⁞ العضو ⋙「 [$re_name](tg://user?id=$re_id) 」
⌯⁞ ايديه ↫ `$re_id` 
⌯⁞ هوا ليس منشئ اساسي ليتم تنزيله
",'parse_mode'=>'markdown','reply_to_message_id'=>$message->message_id,'disable_web_page_preview'=>true,
]);
}
if($text == "المنشئين الاساسي" || $text == "قائمه المنشئين الاساسي" and $nazarr_info != NULL and $nazarr_info != " "){
bot('SendMessage',['chat_id'=>$chat_id,
'text'=>"✵⁞ اليك قائمة ⋙ المشئين الاساسي
$nazarr_infos\n",'parse_mode'=>'markdown','reply_to_message_id'=>$message->message_id,'disable_web_page_preview'=>true,
]);
}
if($text == "المنشئين الاساسي" ||  $text == "قائمه المنشيئن الاساسي" and $nazarr_info == NULL || $nazarr_info == " " || $nazarr_info == ""){
bot('SendMessage',['chat_id'=>$chat_id,
'text'=>"
✵⁞ عزيزي ⋙「 [$first_name](tg://user?id=$from_id) 」 
⌯⁞ لايوجد اي منشئ اساسي
",'parse_mode'=>'markdown','reply_to_message_id'=>$message->message_id,'disable_web_page_preview'=>true,
]);
}
}

if($status == "creator" ||  in_array($from_id,$Dev) || in_array($from_id,$developer) || in_array($from_id,$eri) || in_array($from_id,$nazar)) {
if($re and $text == "رفع منشئ" || $text == "رفع المنشئ"  and !in_array($re_id,$manger)){
			file_put_contents("data/carlos/$chat_id.txt",$re_id . "\n" , FILE_APPEND);
			file_put_contents("data/carlos/$chat_id/crlo.txt" , " *𓆩* [" . "@". $re_user ."] *𓆪* " . "»" . " *𓆩* `". $re_id ."` *𓆪* ". "\n" , FILE_APPEND);
bot('SendMessage',[
'chat_id'=>$chat_id,
'text'=>"
✵⁞ العضو ⋙「 [$re_name](tg://user?id=$re_id) 」
⌯⁞ ايديه ↫ `$re_id` 
⌯⁞ تم ترقية ليصبح منشئ
",'parse_mode'=>'markdown',
'reply_to_message_id'=>$message->message_id,
'disable_web_page_preview'=>true,
]);
}
elseif($re and $text == "رفع منشئ" || $text == "رفع المنشئ" || $text == "رفع منشئ" || $text == "رفع المنشئ" and in_array($re_id,$carlos)){
bot('SendMessage',['chat_id'=>$chat_id,
'text'=>"
✵⁞ العضو ⋙「 [$re_name](tg://user?id=$re_id) 」
⌯⁞ ايديه ↫ `$re_id` 
⌯⁞ هوا بالفعل منشئ 
",
'parse_mode'=>'markdown','reply_to_message_id'=>$message->message_id,'disable_web_page_preview'=>true,
]);
}
if($text == "مسح المنشيئن" ){
file_put_contents("data/carlos/$chat_id.txt","");
file_put_contents("data/carlos/$chat_id.txt","");
file_put_contents("data/carlos/$chat_id/crlo.txt" ,"");
bot('SendMessage',['chat_id'=>$chat_id,
'text'=>"
✵⁞ عزيزي ⋙「 [$first_name](tg://user?id=$from_id) 」 
⌯⁞ تم مسح قائمة المنشئين
",
'parse_mode'=>'markdown','reply_to_message_id'=>$message->message_id,'disable_web_page_preview'=>true,  
]);
}

if($re and $text == "تنزيل المنشئ" || $text == "تنزيل منشئ"  and in_array($re_id,$carlos)){
	$re_id_info = file_get_contents("data/carlos/$chat_id.txt");
	$mdrs = file_get_contents("data/carlos/$chat_id/crlo.txt");
	$mdrs1 = explode("             \n",$mdrs);
	$str = str_replace($re_id,"",$re_id_info);
	$str2 = str_replace(" *𓆩* [" . "@". $re_user ."] *𓆪* " . "»" . " *𓆩* `". $re_id ."` *𓆪* ","",$mdrs1);
	file_put_contents("data/carlos/$chat_id.txt",$str);
	file_put_contents("data/carlos/$chat_id/crlo.txt",$str2);
	bot('SendMessage',['chat_id'=>$chat_id,
    'text'=>"
✵⁞ العضو ⋙「 [$re_name](tg://user?id=$re_id) 」
⌯⁞ ايديه ↫ `$re_id` 
⌯⁞ تم تنزيله من قائمة المنشئين
",'parse_mode'=>'markdown','reply_to_message_id'=>$message->message_id,'disable_web_page_preview'=>true,
]);
}
if($re and $text == "تنزيل المنشئ" || $text == "تنزيل منشئ" || $text == "ت م" || $text == "تنم" and !in_array($re_id,$carlos)){
bot('SendMessage',['chat_id'=>$chat_id,
'text'=>"
✵⁞ العضو ⋙「 [$re_name](tg://user?id=$re_id) 」
⌯⁞ ايديه ↫ `$re_id` 
⌯⁞ ليس منشئ ليتم تنزيله 
",'parse_mode'=>'markdown','reply_to_message_id'=>$message->message_id,'disable_web_page_preview'=>true,
]);
}
if($text == "المنشئين" || $text == "قائمه المنشئين" and $carloss_info != NULL and $carloss_info != " "){
bot('SendMessage',['chat_id'=>$chat_id,
'text'=>"✵⁞ اليك قائمة ⋙ المشئينن
$carloss_infos\n",'parse_mode'=>'markdown','reply_to_message_id'=>$message->message_id,'disable_web_page_preview'=>true,
]);
}
if($text == "المنشيئن" ||  $text == "قائمه المنشيئن" and $carloss_info == NULL || $carloss_info == " " || $carloss_info == ""){
bot('SendMessage',['chat_id'=>$chat_id,
'text'=>"✵⁞ عزيزي ⋙「 [$first_name](tg://user?id=$from_id) 」 
⌯⁞ لايوجد منشئ حاليأ
",'parse_mode'=>'markdown','reply_to_message_id'=>$message->message_id,'disable_web_page_preview'=>true,
]);
}
}

if($status == "creator" ||  in_array($from_id,$Dev) || in_array($from_id,$developer) || in_array($from_id,$carlos) || in_array($from_id,$eri)  || in_array($from_id,$nazar)) {
if($re and $text == "رفع مدير" || $text == "رفع المدير"  || $text == "ر مدير"  and !in_array($re_id,$manger)){
			file_put_contents("data/manger/$chat_id.txt",$re_id . "\n" , FILE_APPEND);
			file_put_contents("data/manger/$chat_id/mange.txt" , " *𓆩* [" . "@". $re_user ."] *𓆪* " . "»" . " *𓆩* `". $re_id ."` *𓆪* ". "\n" , FILE_APPEND);
bot('SendMessage',[
'chat_id'=>$chat_id,
'text'=>"
✵⁞ العضو ⋙「 [$re_name](tg://user?id=$re_id) 」
⌯⁞ ايديه ↫ `$re_id` 
⌯⁞ تم ترقية ليصبح مدير
",'parse_mode'=>'markdown',
'reply_to_message_id'=>$message->message_id,
'disable_web_page_preview'=>true,
]);
}
elseif($re and $text == "رفع مدير" || $text == "رفع المدير" and in_array($re_id,$manger)){
bot('SendMessage',['chat_id'=>$chat_id,
'text'=>"
✵⁞ العضو ⋙「 [$re_name](tg://user?id=$re_id) 」
⌯⁞ ايديه ↫ `$re_id` 
⌯⁞ هوا بالفعل مدير
",'parse_mode'=>'markdown','reply_to_message_id'=>$message->message_id,'disable_web_page_preview'=>true,
]);
}
if($text == "مسح المدراء" ){
file_put_contents("data/manger/$chat_id.txt","");
file_put_contents("data/manger/$chat_id.txt","");
file_put_contents("data/manger/$chat_id/mange.txt" ,"");
bot('SendMessage',['chat_id'=>$chat_id,
'text'=>"
✵⁞ بواسطة ⋙「 [$first_name](tg://user?id=$from_id) 」 
⌯⁞ تم مسح قائمة المدراء
",'parse_mode'=>'markdown','reply_to_message_id'=>$message->message_id,'disable_web_page_preview'=>true,  
]);
}

if($re and $text == "تنزيل المدير" || $text == "تنزيل مدير"  and in_array($re_id,$manger)){
	$re_id_info = file_get_contents("data/manger/$chat_id.txt");
	$mdrs = file_get_contents("data/manger/$chat_id/mange.txt");
	$mdrs1 = explode("             \n",$mdrs);
	$str = str_replace($re_id,"",$re_id_info);
	$str2 = str_replace(" *𓆩* [" . "@". $re_user ."] *𓆪* " . "»" . " *𓆩* `". $re_id ."` *𓆪* ","",$mdrs1);
	file_put_contents("data/manger/$chat_id.txt",$str);
	file_put_contents("data/manger/$chat_id/mange.txt",$str2);
	bot('SendMessage',['chat_id'=>$chat_id,
    'text'=>"
✵⁞ العضو ⋙「 [$re_name](tg://user?id=$re_id) 」
⌯⁞ ايديه ↫ `$re_id` 
⌯⁞ تم تنزيله من قائمة المدراء
",'parse_mode'=>'markdown','reply_to_message_id'=>$message->message_id,'disable_web_page_preview'=>true,
]);
}
if($re and $text == "تنزيل المدير" || $text == "تنزيل مدير" and !in_array($re_id,$manger)){
bot('SendMessage',['chat_id'=>$chat_id,
'text'=>"
✵⁞ العضو ⋙「 [$re_name](tg://user?id=$re_id) 」
⌯⁞ ايديه ↫ `$re_id` 
⌯⁞ ليس مدير ليتم تنزيله
",'parse_mode'=>'markdown','reply_to_message_id'=>$message->message_id,'disable_web_page_preview'=>true,
]);
}
if($text == "المدراء" || $text == "قائمه المدراء" and $mangers_info != NULL and $mangers_info != " "){
bot('SendMessage',['chat_id'=>$chat_id,
'text'=>"✵⁞ اليك قائمة ⋙ المدراء
$mangers_infos\n",'parse_mode'=>'markdown','reply_to_message_id'=>$message->message_id,'disable_web_page_preview'=>true,
]);
}
if($text == "المدراء" ||  $text == "قائمه المدراء" and $mangers_info == NULL || $mangers_info == " " || $mangers_info == ""){
bot('SendMessage',['chat_id'=>$chat_id,
'text'=>"
✵⁞ عزيزي ⋙「 [$first_name](tg://user?id=$from_id) 」 
⌯⁞ لايوجد اي مدراء حاليأ
",'parse_mode'=>'markdown','reply_to_message_id'=>$message->message_id,'disable_web_page_preview'=>true,
]);
}
}

if($status == "creator" ||  $status == "administrator" ||  in_array($from_id,$Dev) || in_array($from_id,$developer) || in_array($from_id,$carlos) || in_array($from_id,$eri) || in_array($from_id,$nazar)) {
if($re and $text == "رفع ادمن" || $text == "ر ادمن"  and !in_array($re_id,$admin_user)){
			file_put_contents("data/admin_user/$chat_id.txt",$re_id . "\n" , FILE_APPEND);
			file_put_contents("data/admin_user/$chat_id/mange.txt" , " *𓆩* [" . "@". $re_user ."] *𓆪* " . "»" . " *𓆩* `". $re_id ."` *𓆪* ". "\n" , FILE_APPEND);
bot('SendMessage',['chat_id'=>$chat_id,
'text'=>"
✵⁞ العضو ⋙「 [$re_name](tg://user?id=$re_id) 」
⌯⁞ ايديه ↫ `$re_id` 
⌯⁞ تم ترقية ليصبح ادمن
",'parse_mode'=>'markdown','reply_to_message_id'=>$message->message_id,'disable_web_page_preview'=>true,
]);
}
elseif($re and $text == "رفع ادمن" || $text == "رفع ادمن" || $text == "ر ادمن"  and in_array($re_id,$admin_user)){
bot('SendMessage',['chat_id'=>$chat_id,
'text'=>"
✵⁞ العضو ⋙「 [$re_name](tg://user?id=$re_id) 」
⌯⁞ ايديه ↫ `$re_id` 
⌯⁞ هوه بالفعل ادمن
",'parse_mode'=>'markdown','reply_to_message_id'=>$message->message_id,'disable_web_page_preview'=>true,
]);
}
if($text == "مسح الادمنية" ){
file_put_contents("data/admin_user/$chat_id.txt","");
file_put_contents("data/admin_user/$chat_id.txt","");
file_put_contents("data/admin_user/$chat_id/mange.txt" ,"");
bot('SendMessage',['chat_id'=>$chat_id,
'text'=>"
✵⁞ بواسطة ⋙「 [$first_name](tg://user?id=$from_id) 」 
⌯⁞ تم مسح قائمة الادمنيه
",
'parse_mode'=>'markdown','reply_to_message_id'=>$message->message_id,'disable_web_page_preview'=>true,  
]);
}

if($re and $text == "تنزيل ادمن" and in_array($re_id,$admin_user)){
	$re_id_info = file_get_contents("data/admin_user/$chat_id.txt");
	$admn = file_get_contents("data/admin_user/$chat_id/mange.txt");
	$admn1 = explode("             \n",$admn);
	$str = str_replace($re_id,"",$re_id_info);
	$str2 = str_replace(" *𓆩* [" . "@". $re_user ."] *𓆪* " . "»" . " *𓆩* `". $re_id ."` *𓆪* ","",$admn1);
	file_put_contents("data/admin_user/$chat_id.txt",$str);
	file_put_contents("data/admin_user/$chat_id/mange.txt",$str2);
	bot('SendMessage',['chat_id'=>$chat_id,
    'text'=>"
✵⁞ العضو ⋙「 [$re_name](tg://user?id=$re_id) 」
⌯⁞ ايديه ↫ `$re_id` 
⌯⁞ تم تنزيله من قائمة الادمنيه
",'parse_mode'=>'markdown','reply_to_message_id'=>$message->message_id,'disable_web_page_preview'=>true,
]);
}
if($re and $text == "تنزيل ادمن"  and !in_array($re_id,$admin_user)){
bot('SendMessage',['chat_id'=>$chat_id,
'text'=>"
✵⁞ العضو ⋙「 [$re_name](tg://user?id=$re_id) 」
⌯⁞ ايديه ↫ `$re_id` 
⌯⁞ هوه ليس ادمن ليتم تنزيله
",'parse_mode'=>'markdown','reply_to_message_id'=>$message->message_id,'disable_web_page_preview'=>true,
]);
}
if($text == "الادمنيه" || $text == "قائمه الادمنيه" and $admin_users_info != NULL and $admin_users_info != " "){
bot('SendMessage',['chat_id'=>$chat_id,
'text'=>"✵⁞ اليك قائمة ⋙ الادمنيه
$admin_users_infos\n",'parse_mode'=>'markdown','reply_to_message_id'=>$message->message_id,'disable_web_page_preview'=>true,
]);
}
if($text == "الادمنيه" ||  $text == "قائمه الادمنيه" and $admin_users_info == NULL || $admin_users_info == " " || $admin_users_info == ""){
bot('SendMessage',['chat_id'=>$chat_id,
'text'=>"
✵⁞ عزيزي ⋙「 [$first_name](tg://user?id=$from_id) 」 
⌯⁞ لايوجد اي ادمن حاليأ
",'parse_mode'=>'markdown','reply_to_message_id'=>$message->message_id,'disable_web_page_preview'=>true,
]);
}
}

if($status == "creator" ||  in_array($from_id,$Dev) || in_array($from_id,$developer) || in_array($from_id,$admin_user) || in_array($from_id,$manger) or in_array($from_id,$carlos) or in_array($from_id,$eri) || in_array($from_id,$nazar)) {
if($re and $text == "رفع مميز"  || $text == "رمميز"  and !in_array($re_id,$mmyaz)){
			file_put_contents("data/mmyaz/$chat_id.txt",$re_id . "\n" , FILE_APPEND);
			file_put_contents("data/mmyaz/$chat_id/mange.txt" , " *𓆩* [" . "@". $re_user ."] *𓆪* " . "»" . " *𓆩* `". $re_id ."` *𓆪* ". "\n" , FILE_APPEND);
bot('SendMessage',['chat_id'=>$chat_id,
'text'=>"
✵⁞ العضو ⋙「 [$re_name](tg://user?id=$re_id) 」
⌯⁞ ايديه ↫ `$re_id` 
⌯⁞ تم ترقيه ليصبح مميز
",'parse_mode'=>'markdown','reply_to_message_id'=>$message->message_id,'disable_web_page_preview'=>true,
]);
}
elseif($re and $text == "رفع مميز"  || $text == "رمميز"  and in_array($re_id,$mmyaz)){
bot('SendMessage',['chat_id'=>$chat_id,
'text'=>"
✵⁞ العضو ⋙「 [$re_name](tg://user?id=$re_id) 」 
⌯⁞ ايديه ↫ `$re_id`
⌯⁞ هوا بالفعل مميز 
",
'parse_mode'=>'markdown','reply_to_message_id'=>$message->message_id,'disable_web_page_preview'=>true,
]);
}
if($text == "مسح المميزين" ){
file_put_contents("data/mmyaz/$chat_id.txt","");
file_put_contents("data/mmyaz/$chat_id.txt","");
file_put_contents("data/mmyaz/$chat_id/mange.txt" ,"");
bot('SendMessage',['chat_id'=>$chat_id,
'text'=>"
✵⁞ بواسطة ⋙「 [$first_name](tg://user?id=$from_id) 」 
⌯⁞ تم مسح قائمة المميزين
",
'parse_mode'=>'markdown','reply_to_message_id'=>$message->message_id,'disable_web_page_preview'=>true,  
]);
}

if($re and $text == "تنزيل مميز"   and in_array($re_id,$mmyaz)){
	$re_id_info = file_get_contents("data/mmyaz/$chat_id.txt");
	$mdrs = file_get_contents("data/mmyaz/$chat_id/mange.txt");
	$mdrs1 = explode("             \n",$mdrs);
	$str = str_replace($re_id,"",$re_id_info);
	$str2 = str_replace(" *𓆩* [" . "@". $re_user ."] *𓆪* " . "»" . " *𓆩* `". $re_id ."` *𓆪* ","",$mdrs1);
	file_put_contents("data/mmyaz/$chat_id.txt",$str);
	file_put_contents("data/mmyaz/$chat_id/mange.txt",$str2);
	bot('SendMessage',['chat_id'=>$chat_id,
    'text'=>"
✵⁞ العضو ⋙「 [$re_name](tg://user?id=$re_id) 」
⌯⁞ ايديه ↫ `$re_id` 
⌯⁞ تم تنزيله من قائمة المميزين
",
'parse_mode'=>'markdown','reply_to_message_id'=>$message->message_id,'disable_web_page_preview'=>true,
]);
}
if($re and $text == "تنزيل مميز" and !in_array($re_id,$mmyaz)){
bot('SendMessage',['chat_id'=>$chat_id,
'text'=>"
✵⁞ العضو ⋙「 [$re_name](tg://user?id=$re_id) 」
⌯⁞ ايديه ↫ `$re_id` 
⌯⁞ هو ليس مميز ليتم تنزيله
",'parse_mode'=>'markdown','reply_to_message_id'=>$message->message_id,'disable_web_page_preview'=>true,
]);
}
if($text == "المميزين" || $text == "قائمه المميزين" and $mmyazs_info != NULL and $mmyazs_info != " "){
bot('SendMessage',['chat_id'=>$chat_id,
'text'=>"✵⁞ اليك قائمة ⋙ المميزين
$mmyazs_infos\n",'parse_mode'=>'markdown','reply_to_message_id'=>$message->message_id,'disable_web_page_preview'=>true,
]);
}
if($text == "المميزين" ||  $text == "قائمه المميزين" and $mmyazs_info == NULL || $mmyazs_info == " " || $mmyazs_info == ""){
bot('SendMessage',['chat_id'=>$chat_id,
'text'=>"
✵⁞ عزيزي ⋙「 [$first_name](tg://user?id=$from_id) 」 
⌯⁞ لايوجد اي مميز حاليأ
",'parse_mode'=>'markdown','reply_to_message_id'=>$message->message_id,'disable_web_page_preview'=>true,
]);
}
}

if($re and $text == "تنزيل الكل" || $text == "تنزيل من الكل" || $text == "تنزيله من الكل"){
if($status == "creator" ||in_array($from_id,$Dev) || in_array($from_id,$developer) || in_array($from_id,$nazar)){
$re_id_info = file_get_contents("data/manger/$chat_id.txt");
$mdrs = file_get_contents("data/manger/$chat_id/mange.txt");
$mdrs1 = explode(" \n",$mdrs);
$str = str_replace($re_id,"",$re_id_info);
$str2 = str_replace(" *𓆩* [" . "@". $re_user ."] *𓆪* " . "»" . " *𓆩* `". $re_id ."` *𓆪* ","",$mdrs1);
file_put_contents("data/manger/$chat_id.txt",$str);
file_put_contents("data/manger/$chat_id/mange.txt",$str2);
$re_id_info = file_get_contents("data/admin_user/$chat_id.txt");
$admn = file_get_contents("data/admin_user/$chat_id/mange.txt");
$admn1 = explode(" \n",$admn);
$str = str_replace($re_id,"",$re_id_info);
$str2 = str_replace(" *𓆩* [" . "@". $re_user ."] *𓆪* " . "»" . " *𓆩* `". $re_id ."` *𓆪* ","",$admn1);
file_put_contents("data/admin_user/$chat_id.txt",$str);
file_put_contents("data/admin_user/$chat_id/mange.txt",$str2);
$re_id_info = file_get_contents("data/mmyaz/$chat_id.txt");
$mdrs = file_get_contents("data/mmyaz/$chat_id/mange.txt");
$mdrs1 = explode(" \n",$mdrs);
$str = str_replace($re_id,"",$re_id_info);
$str2 = str_replace(" *𓆩* [" . "@". $re_user ."] *𓆪* " . "»" . " *𓆩* `". $re_id ."` *𓆪* ","",$mdrs1);
file_put_contents("data/mmyaz/$chat_id.txt",$str);
file_put_contents("data/mmyaz/$chat_id/mange.txt",$str2);
bot('restrictChatMember',[
'user_id'=>$re_id,
'chat_id'=>$chat_id,
'can_post_messages'=>true,
'can_add_web_page_previews'=>false,
'can_send_other_messages'=>true,
'can_send_media_messages'=>true,
]);
bot('SendMessage',['chat_id'=>$chat_id,
'text'=>"
✵⁞ العضو ⋙「 [$re_name](tg://user?id=$re_id) 」
⌯⁞ ايديه ↫ `$re_id` 
⌯⁞ تم تنزيله من كل الرتب
",'parse_mode'=>'markdown','reply_to_message_id'=>$message->message_id,'disable_web_page_preview'=>true,
]);
}
}

#tag
if ($settings["lock"]["tag"] == "مقفول"){
if (strstr($text ,"#") == true or strstr($caption,"#") == true) {
if ($tc == 'group' | $tc == 'supergroup'){
if ($status !=  creator  && $status !=  administrator  && !in_array($from_id,$Dev) && !in_array($from_id,$manger) && !in_array($from_id,$admin_user) && !in_array($from_id,$developer) && !in_array($from_id,$carlos) && !in_array($from_id,$eri) && !in_array($from_id,$nazar)){
bot('deletemessage',['chat_id'=>$chat_id,'message_id'=>$message_id]);}}}}
#link
if($settings["lock"]["link"] == "مقفول"){
if ($status !=  creator  && $status !=  administrator  && !in_array($from_id,$Dev) && !in_array($from_id,$manger) && !in_array($from_id,$admin_user) && !in_array($from_id,$developer) && !in_array($from_id,$carlos) && !in_array($from_id,$eri) && !in_array($from_id,$nazar)){
if (strstr($text,"t.me") == true or strstr($text,"telegram.me") == true or strstr($text,"https://") == true or strstr($text,"://") == true or strstr($text,"wWw.") == true or strstr($text,"WwW.") == true or strstr($text,"T.me/") == true or strstr($text,"WWW.") == true or strstr($caption,"t.me") == true or strstr($caption,"telegram.me")) {   
bot('deletemessage',['chat_id'=>$chat_id,'message_id'=>$message_id,]);}}}
#photo
if($settings["lock"]["photo"] == "مقفول"){
if ($status !=  creator  && $status !=  administrator  && !in_array($from_id,$Dev) && !in_array($from_id,$manger) && !in_array($from_id,$admin_user) && !in_array($from_id,$developer) && !in_array($from_id,$carlos) && !in_array($from_id,$eri) && !in_array($from_id,$nazar)){
if ($update->message->photo){  
bot('deletemessage',['chat_id'=>$chat_id,'message_id'=>$message_id]);}}}
# inline
$inline = json_decode(file_get_contents('php://input'),true);
if($settings["lock"]["inline"] == "مقفول"){
if ($status !=  creator  && $status !=  administrator  && !in_array($from_id,$Dev) && !in_array($from_id,$manger) && !in_array($from_id,$admin_user) && !in_array($from_id,$developer) && !in_array($from_id,$carlos) && !in_array($from_id,$eri) && !in_array($from_id,$nazar)){
if(isset($inline['message']['reply_markup']['inline_keyboard'][0][0]['text'])){
bot('deleteMessage',['chat_id'=>$message->chat->id,'message_id'=>$message->message_id]);}}}
#gif
if($settings["lock"]["gif"] == "مقفول"){
if ($status !=  creator  && $status !=  administrator  && !in_array($from_id,$Dev) && !in_array($from_id,$manger) && !in_array($from_id,$admin_user) && !in_array($from_id,$developer) && !in_array($from_id,$carlos) && !in_array($from_id,$eri) && !in_array($from_id,$nazar)){
if ($update->message->document){  
bot('deletemessage',['chat_id'=>$chat_id,'message_id'=>$message_id]);}}}
# document
if($settings["lock"]["document"] == "مقفول"){
if ($status !=  creator  && $status !=  administrator  && !in_array($from_id,$Dev) && !in_array($from_id,$manger) && !in_array($from_id,$admin_user) && !in_array($from_id,$developer) && !in_array($from_id,$carlos) && !in_array($from_id,$eri) && !in_array($from_id,$nazar)){
if ($update->message->document){  
bot('deletemessage',['chat_id'=>$chat_id,'message_id'=>$message_id]);}}}
# video
if($settings["lock"]["video"] == "مقفول"){
if ($status !=  creator  && $status !=  administrator  && !in_array($from_id,$Dev) && !in_array($from_id,$manger) && !in_array($from_id,$admin_user) && !in_array($from_id,$developer) && !in_array($from_id,$carlos) && !in_array($from_id,$eri) && !in_array($from_id,$nazar)){
if ($update->message->video){  
bot('deletemessage',['chat_id'=>$chat_id,'message_id'=>$message_id]);}}}
# ar
if ($settings["lock"]["ar"] == "مقفول"){
if (strstr($text,"") == true  or strstr($text,"") == true or strstr($text,"") == true  or  strstr($text,"") == true   or strstr($text,"") == true or  strstr($text,"") == true  or strstr($text,"") == true or strstr($text,"") == true  or  strstr($text,"") == true   or strstr($text,"") == true or strstr($text,"") == true  or strstr($text,"") == true or strstr($text,"") == true  or  strstr($text,"") == true   or strstr($text,"") == true or  strstr($text,"") == true  or strstr($text,"") == true or strstr($text,"") == true  or  strstr($text,"") == true   or strstr($text,"") == true or strstr($text,"") == true or strstr($text,"") == true  or  strstr($text,"") == true   or strstr($text,"") == true or  strstr($text,"") == true  or strstr($text,"") == true or strstr($text,"") == true  or  strstr($text,"") == true   or strstr($text,"") == true or strstr($text,"") == true  or strstr($text,"") == true or strstr($text,"") == true  or  strstr($text,"") == true   or strstr($text,"") == true or  strstr($text,"") == true  or strstr($text,"") == true ) {
if ($tc == 'group' | $tc == 'supergroup'){
if ($status !=  creator  && $status !=  administrator  && !in_array($from_id,$Dev) && !in_array($from_id,$manger) && !in_array($from_id,$admin_user) && !in_array($from_id,$developer) && !in_array($from_id,$carlos) && !in_array($from_id,$eri) && !in_array($from_id,$nazar)){
bot('deletemessage',['chat_id'=>$chat_id,'message_id'=>$message_id]);}}}}
# en
if ($settings["lock"]["en"] == "مقفول"){
if (strstr($text,"q") == true  or strstr($text,"w") == true or strstr($text,"e") == true  or  strstr($text,"r") == true   or strstr($text,"t") == true or  strstr($text,"y") == true  or strstr($text,"u") == true or strstr($text,"i") == true  or  strstr($text,"o") == true   or strstr($text,"p") == true or strstr($text,"a") == true  or strstr($text,"s") == true or strstr($text,"d") == true  or  strstr($text,"f") == true   or strstr($text,"g") == true or  strstr($text,"h") == true  or strstr($text,"j") == true or strstr($text,"k") == true  or  strstr($text,"l") == true   or strstr($text,"z") == true or strstr($text,"x") == true or strstr($text,"c") == true  or  strstr($text,"v") == true   or strstr($text,"b") == true or  strstr($text,"n") == true  or strstr($text,"m") == true or strstr($text,"Q") == true  or  strstr($text,"X") == true   or strstr($text,"C") == true or strstr($text,"F") == true  or strstr($text,"G") == true or strstr($text,"H") == true  or  strstr($text,"A") == true   or strstr($text,"L") == true or  strstr($text,"O") == true  or strstr($text,"P") == true ) {
if ($tc == 'group' | $tc == 'supergroup'){
if ($status !=  creator  && $status !=  administrator  && !in_array($from_id,$Dev) && !in_array($from_id,$manger) && !in_array($from_id,$admin_user) && !in_array($from_id,$developer) && !in_array($from_id,$carlos) && !in_array($from_id,$eri) && !in_array($from_id,$nazar)){
bot('deletemessage',['chat_id'=>$chat_id,'message_id'=>$message_id]);}}}}
# edit 
if($editgetsettings["lock"]["edit"] == "مقفول"){
if ( $you != 'creator' && $you != 'administrator' && $edit_for_id != $Dev && $edit_for_id != $manger && $edit_for_id != $admin_user && $edit_for_id != $vipmem && $edit_for_id != $developer){
if ($update->edited_message->text){  
bot('deletemessage',['chat_id'=>$chat_edit_id,'message_id'=>$message_edit_id]);}}}
# contact
if ($settings["lock"]["contact"] == "مقفول"){
if($update->message->contact){
if ($tc == 'group' | $tc == 'supergroup'){
if ($status !=  creator  && $status !=  administrator  && !in_array($from_id,$Dev) && !in_array($from_id,$manger) && !in_array($from_id,$admin_user) && !in_array($from_id,$developer) && !in_array($from_id,$carlos) && !in_array($from_id,$eri) && !in_array($from_id,$nazar)){
bot('deletemessage',['chat_id'=>$chat_id,'message_id'=>$message_id]);}}}}
# edit media
$edit_media  = $update->edited_message->message_id;
$edit_chat_id_media = $update->edited_message->chat->id;
$edit_medias  = $update->edited_message->text;
$video_media = $update->edited_message->video;
$voice_media = $update->edited_message->voice;
$photo_media = $update->edited_message->photo;
$document_media = $update->edited_message->document;
$audio_media = $update->edited_message->audio;
$location_media = $update->edited_message->location;
if ($editgetsettings["lock"]["editmd"] == "مقفول"){
if ( $you != 'creator' && $you != 'administrator' && $edit_for_id != $Dev && $edit_for_id != $manger && $edit_for_id != $admin_user && $edit_for_id != $developer && $edit_for_id != $carlos && $edit_for_id != $eri && $edit_for_id != $nazar){
if(edit_medias || $photo_media || $document_media || $video_media || $voice_media || $audio_media || $location_media || preg_match('/^(.*)([Hh]ttp|[Hh]ttps|t.me)(.*)|([Hh]ttp|[Hh]ttps|t.me)(.*)|(.*)([Hh]ttp|[Hh]ttps|t.me)|(.*)[Tt]elegram.me(.*)|[Tt]elegram.me(.*)|(.*)[Tt]elegram.me|(.*)[Tt].me(.*)|[Tt].me(.*)|(.*)[Tt].me/',$edit_medias) ){
bot('deleteMessage',['chat_id'=>$edit_chat_id_media,'message_id'=>$edit_media,]);}}}

// username 
if ($settings["lock"]["username"] == "مقفول"){
if (strstr($text ,"@") == true or  strstr($caption,"@") == true) {
if ($tc == 'group' | $tc == 'supergroup'){
if ($status !=  creator  && $status !=  administrator  && !in_array($from_id,$Dev) && !in_array($from_id,$manger) && !in_array($from_id,$admin_user) && !in_array($from_id,$developer) && !in_array($from_id,$carlos) && !in_array($from_id,$eri) && !in_array($from_id,$nazar)){
bot('deletemessage',[
'chat_id'=>$chat_id,
'message_id'=>$message_id
]);
}}}}
// audio
if ($settings["lock"]["audio"] == "مقفول"){
if($update->message->audio){
if ($tc == 'group' | $tc == 'supergroup'){
if ($status !=  creator  && $status !=  administrator  && !in_array($from_id,$Dev) && !in_array($from_id,$manger) && !in_array($from_id,$admin_user) && !in_array($from_id,$developer) && !in_array($from_id,$carlos) && !in_array($from_id,$eri) && !in_array($from_id,$nazar)){
bot('deletemessage',[
'chat_id'=>$chat_id,
'message_id'=>$message_id
]);
}}}}
// voice 
if ($settings["lock"]["voice"] == "مقفول"){
if($update->message->voice){
if ($tc == 'group' | $tc == 'supergroup'){
if ($status !=  creator  && $status !=  administrator  && !in_array($from_id,$Dev) && !in_array($from_id,$manger) && !in_array($from_id,$admin_user) && !in_array($from_id,$developer) && !in_array($from_id,$carlos) && !in_array($from_id,$eri) && !in_array($from_id,$nazar)){
bot('deletemessage',[
'chat_id'=>$chat_id,
'message_id'=>$message_id
]);
}}}}
if ($settings["lock"]["markdown"] == "مقفول"){
if($update->message->entities){
if ($tc == 'group' | $tc == 'supergroup'){
if ($status !=  creator  && $status !=  administrator  && !in_array($from_id,$Dev) && !in_array($from_id,$manger) && !in_array($from_id,$admin_user) && !in_array($from_id,$developer) && !in_array($from_id,$carlos) && !in_array($from_id,$eri) && !in_array($from_id,$nazar)){
bot('deletemessage',[
'chat_id'=>$chat_id,
'message_id'=>$message_id
]);
}}}}
if($settings["lock"]["bot"] == "مقفول"){
if ($message->new_chat_member->is_bot) {
$hardmodebot = $settings["information"]["hardmodebot"];
if($hardmodebot == "مقفول"){
bot('kickChatMember',[
'chat_id'=>$chat_id,
'user_id'=>$update->message->new_chat_member->id
]);
}
else
{
bot('kickChatMember',[
'chat_id'=>$chat_id,
'user_id'=>$update->message->new_chat_member->id
]);
bot('kickChatMember',[
'chat_id'=>$chat_id,
'user_id'=>$from_id
]);
}}}
// sticker is_sticker
if ($settings["lock"]["sticker"] == "مقفول"){
if($update->message->sticker){
if ($tc == 'group' | $tc == 'supergroup'){
if ($status !=  creator  && $status !=  administrator  && !in_array($from_id,$Dev) && !in_array($from_id,$manger) && !in_array($from_id,$admin_user) && !in_array($from_id,$developer) && !in_array($from_id,$carlos) && !in_array($from_id,$eri) && !in_array($from_id,$nazar)){
bot('deletemessage',[
'chat_id'=>$chat_id,
'message_id'=>$message_id
]);
}}}}
if ($settings["lock"]["is_sticker"] == "مقفول"){
if($update->message->sticker->is_sticker){
if ($tc == 'group' | $tc == 'supergroup'){
if ($status !=  creator  && $status !=  administrator  && !in_array($from_id,$Dev) && !in_array($from_id,$manger) && !in_array($from_id,$admin_user) && !in_array($from_id,$developer) && !in_array($from_id,$carlos) && !in_array($from_id,$eri) && !in_array($from_id,$nazar)){
bot('deletemessage',[
'chat_id'=>$chat_id,
'message_id'=>$message_id
]);
}}}}
// forward
if ($settings["lock"]["forward"] == "مقفول"){
if($update->message->forward_from | $update->message->forward_from_chat){
if ($tc == 'group' | $tc == 'supergroup'){
if ($status !=  creator  && $status !=  administrator  && !in_array($from_id,$Dev) && !in_array($from_id,$manger) && !in_array($from_id,$admin_user) && !in_array($from_id,$developer) && !in_array($from_id,$carlos) && !in_array($from_id,$eri) && !in_array($from_id,$nazar)){
bot('deletemessage',[
'chat_id'=>$chat_id,
'message_id'=>$message->message_id
]);
}}}}
// muteall
if ($settings["lock"]["mute_all"] == "مقفول"){
if($update->message){
if ($status !=  creator  && $status !=  administrator  && !in_array($from_id,$Dev) && !in_array($from_id,$manger) && !in_array($from_id,$admin_user) && !in_array($from_id,$developer) && !in_array($from_id,$carlos) && !in_array($from_id,$eri) && !in_array($from_id,$nazar)){
bot('deletemessage',[
'chat_id'=>$chat_id,
'message_id'=>$message->message_id
]);
}
}
}
// replay
if ($settings["lock"]["reply"] == "مقفول"){
if($update->message->reply_to_message){
if ($tc == 'group' | $tc == 'supergroup'){
if ($status !=  creator  && $status !=  administrator  && !in_array($from_id,$Dev) && !in_array($from_id,$manger) && !in_array($from_id,$admin_user) && !in_array($from_id,$developer) && !in_array($from_id,$carlos) && !in_array($from_id,$eri) && !in_array($from_id,$nazar)){
bot('deletemessage',[
 'chat_id'=>$chat_id,
 'message_id'=>$message->message_id
 ]);
 }
}
}
}
// tg
if ($settings["lock"]["tgservic"] == "مقفول"){
if($update->message->new_chat_member | $update->message->new_chat_photo | $update->message->new_chat_title | $update->message->left_chat_member | $update->message->pinned_message){
if ($tc == 'group' | $tc == 'supergroup'){
if ($status !=  creator  && $status !=  administrator  && !in_array($from_id,$Dev) && !in_array($from_id,$manger) && !in_array($from_id,$admin_user) && !in_array($from_id,$developer) && !in_array($from_id,$carlos) && !in_array($from_id,$eri) && !in_array($from_id,$nazar)){
 bot('deletemessage',[
 'chat_id'=>$chat_id,
 'message_id'=>$message->message_id
 ]);
 }
}
}
}
// text
if ($settings["lock"]["text"] == "مقفول"){
if($update->message->text){
if ($tc == 'group' | $tc == 'supergroup'){
if ($status !=  creator  && $status !=  administrator  && !in_array($from_id,$Dev) && !in_array($from_id,$manger) && !in_array($from_id,$admin_user) && !in_array($from_id,$developer) && !in_array($from_id,$carlos) && !in_array($from_id,$eri) && !in_array($from_id,$nazar)){
 bot('deletemessage',[
 'chat_id'=>$chat_id,
 'message_id'=>$message->message_id
 ]);
 }
}
}
}
// video note
if ($settings["lock"]["video_msg"] == "مقفول"){
if($update->message->video_note){
if ($tc == 'group' | $tc == 'supergroup'){
if ($status !=  creator  && $status !=  administrator  && !in_array($from_id,$Dev) && !in_array($from_id,$manger) && !in_array($from_id,$admin_user) && !in_array($from_id,$developer) && !in_array($from_id,$carlos) && !in_array($from_id,$eri) && !in_array($from_id,$nazar)){
 bot('deletemessage',[
 'chat_id'=>$chat_id,
 'message_id'=>$message->message_id
 ]);
 }
}
}
}



if($settings["information"]["add"] == "مقفول") {
if($newchatmemberid == true){
$add = $settings["addlist"]["$from_id"]["add"];
$addplus = $add +1;
$settings["addlist"]["{$from_id}"]["add"]="$addplus";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}

//game
if($settings["lock"]["game"] == "مقفول"){
if($update->message->game){
if ($tc == 'group' | $tc == 'supergroup'){
if ($status !=  creator  && $status !=  administrator  && !in_array($from_id,$Dev) && !in_array($from_id,$manger) && !in_array($from_id,$admin_user) && !in_array($from_id,$developer) && !in_array($from_id,$carlos) && !in_array($from_id,$eri) && !in_array($from_id,$nazar)){
bot('deletemessage',[
 'chat_id'=>$chat_id,
 'message_id'=>$message_id
 ]);
}
}
}
}
// location
if ($settings["lock"]["location"] == "مقفول"){
if($update->message->location){
if ($tc == 'group' | $tc == 'supergroup'){
if ($status !=  creator  && $status !=  administrator  && !in_array($from_id,$Dev) && !in_array($from_id,$manger) && !in_array($from_id,$admin_user) && !in_array($from_id,$developer) && !in_array($from_id,$carlos) && !in_array($from_id,$eri) && !in_array($from_id,$nazar)){
bot('deletemessage',[
 'chat_id'=>$chat_id,
 'message_id'=>$message_id
 ]);
}
}
}
}
function check_filter($str){
global $filterget;
foreach($filterget as $d){
if (mb_strpos($str, $d) !== false) {
return true;
}
}
}
//linkk
if($settings["lock"]["linkk"] == "مقفول"){
if ($status !=  creator  && $status !=  administrator  && !in_array($from_id,$Dev) && !in_array($from_id,$manger) && !in_array($from_id,$admin_user) && !in_array($from_id,$developer) && !in_array($from_id,$carlos) && !in_array($from_id,$eri) && !in_array($from_id,$nazar)){
if (strstr($text,"t.me") == true or strstr($text,"telegram.me") == true or strstr($text,"https://") == true or strstr($text,"://") == true or strstr($text,"wWw.") == true or strstr($text,"WwW.") == true or strstr($text,"T.me/") == true or strstr($text,"WWW.") == true or strstr($caption,"t.me") == true or strstr($caption,"telegram.me")) {   
bot('deletemessage',['chat_id'=>$chat_id,'message_id'=>$message_id,]);
bot('kickChatMember',['user_id'=>$from_id,'chat_id'=>$chat_id,]);
bot('sendmessage',['chat_id'=>$chat_id,'text'=>"⌯⁞ عزيزي - [$first_name](tg://user?id=$from_id)\n⌯⁞ ممنوع نشر الروابط هنا تم طردك",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,]);}}}
//linkw
if($settings["lock"]["linkw"] == "مقفول"){
if ($status !=  creator  && $status !=  administrator  && !in_array($from_id,$Dev) && !in_array($from_id,$manger) && !in_array($from_id,$admin_user) && !in_array($from_id,$developer) && !in_array($from_id,$carlos) && !in_array($from_id,$eri) && !in_array($from_id,$nazar)){
if (strstr($text,"t.me") == true or strstr($text,"telegram.me") == true or strstr($text,"https://") == true or strstr($text,"://") == true or strstr($text,"wWw.") == true or strstr($text,"WwW.") == true or strstr($text,"T.me/") == true or strstr($text,"WWW.") == true or strstr($text,"https://") == true or strstr($caption,"t.me") == true or strstr($caption,"telegram.me")) {   
bot('deletemessage',['chat_id'=>$chat_id,'message_id'=>$message_id,]);
bot('sendmessage',['chat_id'=>$chat_id,'text'=>"⌯⁞ عزيزي - [$first_name](tg://user?id=$from_id)\n⌯⁞ ممنوع نشر الروابط هنا ",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,]);}}}

if($text =="قفل الروابط" ){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer) or in_array($from_id,$carlos) or in_array($from_id,$eri) or in_array($from_id,$nazar)) {$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
✵⁞ بواسطه ⋙ [$first_name](tg://user?id=$from_id)
⌯⁞ تم قفـل الروابط بنجاح
⌯⁞ خاصية ⋙ المسح
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["link"]="مقفول";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"يجب تفعيل البوت في المجموعة قم بإرسال كلمة { • تفعيل • } لتفعيل البوت",
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
}
}
}
elseif($text =="فتح الروابط" or $text =="فتح روابط"){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer) or in_array($from_id,$carlos) or in_array($from_id,$eri) or in_array($from_id,$nazar)) {$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
✵⁞ بواسطه ⋙ [$first_name](tg://user?id=$from_id)
⌯⁞ تم فتح الروابط بنجاح
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["link"]="مفتوح";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"يجب تفعيل البوت في المجموعة قم بإرسال كلمة { • تفعيل • } لتفعيل البوت",
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
}
}
}
if($text =="قفل الروابط بالطرد" ){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer) or in_array($from_id,$carlos) or in_array($from_id,$eri) or in_array($from_id,$nazar)) {$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
✵⁞ بواسطه ⋙ [$first_name](tg://user?id=$from_id)
⌯⁞ تم قفـل الروابط بنجاح
⌯⁞ خاصية ⋙ الطرد
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["linkk"]="مقفول";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"يجب تفعيل البوت في المجموعة قم بإرسال كلمة { • تفعيل • } لتفعيل البوت",
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
}
}
}
elseif($text =="فتح الروابط بالطرد" or $text =="فتح روابط بالطرد"){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer) or in_array($from_id,$carlos) or in_array($from_id,$eri) or in_array($from_id,$nazar)) {$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
✵⁞ بواسطه ⋙ [$first_name](tg://user?id=$from_id)
⌯⁞ تم فتح الروابط بالطرد
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["linkk"]="مفتوح";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"يجب تفعيل البوت في المجموعة قم بإرسال كلمة { • تفعيل • } لتفعيل البوت",
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
}
}
}
if($text =="قفل الروابط بالتحذير" ){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer) or in_array($from_id,$carlos) or in_array($from_id,$eri) or in_array($from_id,$nazar)) {$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
✵⁞ بواسطه ⋙ [$first_name](tg://user?id=$from_id)
⌯⁞ تم قفـل الروابط بنجاح
⌯⁞ خاصية ⋙ التحذير
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["linkw"]="مقفول";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"يجب تفعيل البوت في المجموعة قم بإرسال كلمة { • تفعيل • } لتفعيل البوت",
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
}
}
}
elseif($text =="فتح الروابط بالتحذير" or $text =="فتح روابط بالتحذير"){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer) or in_array($from_id,$carlos) or in_array($from_id,$eri) or in_array($from_id,$nazar)) {$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
✵⁞ بواسطه ⋙ [$first_name](tg://user?id=$from_id)
⌯⁞ تم فتح الروابط بالتحذير
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["linkw"]="مفتوح";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"يجب تفعيل البوت في المجموعة قم بإرسال كلمة { • تفعيل • } لتفعيل البوت",
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
}
}
}
if($text =="قفل الانلاين" ){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer) or in_array($from_id,$carlos) or in_array($from_id,$eri) or in_array($from_id,$nazar)) {$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
✵⁞ بواسطه ⋙ [$first_name](tg://user?id=$from_id)
⌯⁞ تم قفـل الانلاين بنجاح
⌯⁞ خاصية ⋙ المسح
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["inline"]="مقفول";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"يجب تفعيل البوت في المجموعة قم بإرسال كلمة { • تفعيل • } لتفعيل البوت",
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
}
}
}
elseif($text =="فتح الانلاين" ){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer) or in_array($from_id,$carlos) or in_array($from_id,$eri) or in_array($from_id,$nazar)) {$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
✵⁞ بواسطه ⋙ [$first_name](tg://user?id=$from_id)
⌯⁞ تم فتح الانلاين بنجاح
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["inline"]="مفتوح";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"يجب تفعيل البوت في المجموعة قم بإرسال كلمة { • تفعيل • } لتفعيل البوت",
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
}
}
}
if($text =="قفل الانكليزيه" ){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer) or in_array($from_id,$carlos) or in_array($from_id,$eri) or in_array($from_id,$nazar)) {$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
✵⁞ بواسطه ⋙ [$first_name](tg://user?id=$from_id)
⌯⁞ تم قفـل الانكليزيه بنجاح
⌯⁞ خاصية ⋙ المسح
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["en"]="مقفول";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"يجب تفعيل البوت في المجموعة قم بإرسال كلمة { • تفعيل • } لتفعيل البوت",
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
}
}
}
elseif($text =="فتح الانكليزيه" ){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer) or in_array($from_id,$carlos) or in_array($from_id,$eri) or in_array($from_id,$nazar)) {$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
✵⁞ بواسطه ⋙ [$first_name](tg://user?id=$from_id)
⌯⁞ تم فتح الانكليزيه
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["en"]="مفتوح";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"يجب تفعيل البوت في المجموعة قم بإرسال كلمة { • تفعيل • } لتفعيل البوت",
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
}
}
}
// lock photo
elseif($text =="قفل الصور" or $text =="قفل صور"){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer) or in_array($from_id,$carlos) or in_array($from_id,$eri) or in_array($from_id,$nazar)) {$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
✵⁞ بواسطه ⋙ [$first_name](tg://user?id=$from_id)
⌯⁞ تم قفـل الصور بنجاح
⌯⁞ خاصية ⋙ المسح
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["photo"]="مقفول";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"يجب تفعيل البوت في المجموعة قم بإرسال كلمة { • تفعيل • } لتفعيل البوت",
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
}
}
}
elseif($text =="فتح الصور" or $text =="فتح صور"){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer) or in_array($from_id,$carlos) or in_array($from_id,$eri) or in_array($from_id,$nazar)) {$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
✵⁞ بواسطه ⋙ [$first_name](tg://user?id=$from_id)
⌯⁞ تم قتح الصور بنجاح
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
$settings["lock"]["photo"]="مفتوح";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"يجب تفعيل البوت في المجموعة قم بإرسال كلمة { • تفعيل • } لتفعيل البوت",
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
}
}
}
elseif($text =="قفل الملصقات المتحركة" or $text =="قفل الملصقات المتحركه"){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer) or in_array($from_id,$carlos) or in_array($from_id,$eri) or in_array($from_id,$nazar)) {$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
✵⁞ بواسطه ⋙ [$first_name](tg://user?id=$from_id)
⌯⁞ تم قفل الملصقات المتحركة
⌯⁞ خاصية ⋙ المسح
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["is_sticker"]="مقفول";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"يجب تفعيل البوت في المجموعة قم بإرسال كلمة { • تفعيل • } لتفعيل البوت",
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
}
}
}
elseif($text =="فتح الملصقات المتحركة" or $text =="فتح الملصقات المتحركه"){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer) or in_array($from_id,$carlos) or in_array($from_id,$eri) or in_array($from_id,$nazar)) {$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
✵⁞ بواسطه ⋙ [$first_name](tg://user?id=$from_id)
⌯⁞ تم فتح الملصقات المتحركه
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
$settings["lock"]["is_sticker"]="مفتوح";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"يجب تفعيل البوت في المجموعة قم بإرسال كلمة { • تفعيل • } لتفعيل البوت",
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
}
}
}
// gif
elseif($text =="قفل المتحركة" or $text =="قفل المتحركه"){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer) or in_array($from_id,$carlos) or in_array($from_id,$eri) or in_array($from_id,$nazar)) {$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
✵⁞ بواسطه ⋙ [$first_name](tg://user?id=$from_id)
⌯⁞ تم قفـل المتحركه بنجاح
⌯⁞ خاصية ⋙ المسح
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
$settings["lock"]["gif"]="مقفول";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>" يجب تفعيل البوت في المجموعة قم بإرسال كلمة { • تفعيل • } لتفعيل البوت ",
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
}
}
}
elseif($text =="فتح المتحركة" or $text =="فتح المتحركه"){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer) or in_array($from_id,$carlos) or in_array($from_id,$eri) or in_array($from_id,$nazar)) {$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
✵⁞ بواسطه ⋙ [$first_name](tg://user?id=$from_id)
⌯⁞ تم فتح المتحركه بنجاح
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["gif"]="مفتوح";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"يجب تفعيل البوت في المجموعة قم بإرسال كلمة { • تفعيل • } لتفعيل البوت",
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
}
}
}
elseif($text =="قفل الماركدوان" ){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer) or in_array($from_id,$carlos) or in_array($from_id,$eri) or in_array($from_id,$nazar)) {$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
✵⁞ بواسطه ⋙ [$first_name](tg://user?id=$from_id)
⌯⁞ تم قفـل الماركدوان بنجاح
⌯⁞ خاصية ⋙ المسح
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
$settings["lock"]["markdown"]="مقفول";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>" يجب تفعيل البوت في المجموعة قم بإرسال كلمة { • تفعيل • } لتفعيل البوت ",
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
}
}
}
elseif($text =="فتح الماركدوان" ){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer) or in_array($from_id,$carlos) or in_array($from_id,$eri) or in_array($from_id,$nazar)) {$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
✵⁞ بواسطه ⋙ [$first_name](tg://user?id=$from_id)
⌯⁞ تم فتح الماركدوان بنجاح
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["markdown"]="مفتوح";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"يجب تفعيل البوت في المجموعة قم بإرسال كلمة { • تفعيل • } لتفعيل البوت",
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
}
}
}
elseif($text =="قفل العربيه" ){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer) or in_array($from_id,$carlos) or in_array($from_id,$eri) or in_array($from_id,$nazar)) {$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
✵⁞ بواسطه ⋙ [$first_name](tg://user?id=$from_id)
⌯⁞ تم قفـل العربيه بنجاح
⌯⁞ خاصية ⋙ المسح
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
$settings["lock"]["ar"]="مقفول";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>" يجب تفعيل البوت في المجموعة قم بإرسال كلمة { • تفعيل • } لتفعيل البوت ",
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
}
}
}
elseif($text =="فتح العربيه" ){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer) or in_array($from_id,$carlos) or in_array($from_id,$eri) or in_array($from_id,$nazar)) {$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
✵⁞ بواسطه ⋙ [$first_name](tg://user?id=$from_id)
⌯⁞ تم فتح العربيه بنجاح
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["ar"]="مفتوح";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"يجب تفعيل البوت في المجموعة قم بإرسال كلمة { • تفعيل • } لتفعيل البوت",
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
}
}
}
// document
elseif($text =="قفل الملفات" or $text =="قفل ملفات،"){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer) or in_array($from_id,$carlos) or in_array($from_id,$eri) or in_array($from_id,$nazar)) {$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
✵⁞ بواسطه ⋙ [$first_name](tg://user?id=$from_id)
⌯⁞ تم قفـل الملفات بنجاح
⌯⁞ خاصية ⋙ المسح
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
$settings["lock"]["document"]="مقفول";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"يجب تفعيل البوت في المجموعة قم بإرسال كلمة { • تفعيل • } لتفعيل البوت",
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
}
}
}
elseif($text =="فتح الملفات" or $text =="فتح ملفات"){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer) or in_array($from_id,$carlos) or in_array($from_id,$eri) or in_array($from_id,$nazar)) {$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
✵⁞ بواسطه ⋙ [$first_name](tg://user?id=$from_id)
⌯⁞ تم فتح الملفات بنجاح
",
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
$settings["lock"]["document"]="مفتوح";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"يجب تفعيل البوت في المجموعة قم بإرسال كلمة { • تفعيل • } لتفعيل البوت",
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
}
}
}
// video
elseif($text =="قفل الفيديو" or $text =="قفل فيديو"){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer) or in_array($from_id,$carlos) or in_array($from_id,$eri) or in_array($from_id,$nazar)) {$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
✵⁞ بواسطه ⋙ [$first_name](tg://user?id=$from_id)
⌯⁞ تم قفـل الفيديو بنجاح
⌯⁞ خاصية ⋙ المسح
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
$settings["lock"]["video"]="مقفول";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"يجب تفعيل البوت في المجموعة قم بإرسال كلمة { • تفعيل • } لتفعيل البوت",
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
}
}
}
elseif($text =="فتح الفيديو" or $text =="فتح فيديو"){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer) or in_array($from_id,$carlos) or in_array($from_id,$eri) or in_array($from_id,$nazar)) {$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
✵⁞ بواسطه ⋙ [$first_name](tg://user?id=$from_id)
⌯⁞ تم قفـل الفيديو بنجاح
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
$settings["lock"]["video"]="مفتوح";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"يجب تفعيل البوت في المجموعة قم بإرسال كلمة { • تفعيل • } لتفعيل البوت",
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
}
}
}
// edit
elseif($text =="قفل التعديل" or $text =="قفل تعديل"){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer) or in_array($from_id,$carlos) or in_array($from_id,$eri) or in_array($from_id,$nazar)) {$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
✵⁞ بواسطه ⋙ [$first_name](tg://user?id=$from_id)
⌯⁞ تم قفـل التعديل بنجاح
⌯⁞ خاصية ⋙ المسح
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
$settings["lock"]["edit"]="مقفول";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"يجب تفعيل البوت في المجموعة قم بإرسال كلمة { • تفعيل • } لتفعيل البوت",
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
}
}
}
elseif($text =="فتح التعديل" or $text =="فتح تعديل"){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer) or in_array($from_id,$carlos) or in_array($from_id,$eri) or in_array($from_id,$nazar)) {$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
✵⁞ بواسطه ⋙ [$first_name](tg://user?id=$from_id)
⌯⁞ تم فتح التعديل بنجاح
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
$settings["lock"]["edit"]="مفتوح";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"يجب تفعيل البوت في المجموعة قم بإرسال كلمة { • تفعيل • } لتفعيل البوت",
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
}
}
}
// game
elseif($text =="قفل الالعاب" or $text =="قفل العاب"){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer) or in_array($from_id,$carlos) or in_array($from_id,$eri) or in_array($from_id,$nazar)) {$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
✵⁞ بواسطه ⋙ [$first_name](tg://user?id=$from_id)
⌯⁞ تم قفـل الالعاب بنجاح
⌯⁞ خاصية ⋙ المسح
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
$settings["lock"]["game"]="مقفول";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"يجب تفعيل البوت في المجموعة قم بإرسال كلمة { • تفعيل • } لتفعيل البوت",
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
}
}
}
elseif($text =="فتح الالعاب" or $text =="فتح العاب"){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer) or in_array($from_id,$carlos) or in_array($from_id,$eri) or in_array($from_id,$nazar)) {$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
✵⁞ بواسطه ⋙ [$first_name](tg://user?id=$from_id)
⌯⁞ تم فتح الالعاب بنجاح
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
 $settings["lock"]["game"]="مفتوح";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"يجب تفعيل البوت في المجموعة قم بإرسال كلمة { • تفعيل • } لتفعيل البوت",
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
}
}
}
// location
elseif($text =="قفل المواقع" or $text =="قفل الموقع"){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer) or in_array($from_id,$carlos) or in_array($from_id,$eri) or in_array($from_id,$nazar)) {$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
✵⁞ بواسطه ⋙ [$first_name](tg://user?id=$from_id)
⌯⁞ تم قفـل المواقع بنجاح
⌯⁞ خاصية ⋙ المسح
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
$settings["lock"]["location"]="مقفول";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"يجب تفعيل البوت في المجموعة قم بإرسال كلمة { • تفعيل • } لتفعيل البوت ",
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
}
}
}
elseif($text =="فتح المواقع" or $text =="فتح الموقع"){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer) or in_array($from_id,$carlos) or in_array($from_id,$eri) or in_array($from_id,$nazar)) {$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
✵⁞ بواسطه ⋙ [$first_name](tg://user?id=$from_id)
⌯⁞ تم فتح المواقع بنجاح
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
$settings["lock"]["location"]="مفتوح";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"يجب تفعيل البوت في المجموعة قم بإرسال كلمة { • تفعيل • } لتفعيل البوت",
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
}
}
}
// contact
elseif($text =="قفل الجهات" or $text =="قفل جهات"){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer) or in_array($from_id,$carlos) or in_array($from_id,$eri) or in_array($from_id,$nazar)) {$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
✵⁞ بواسطه ⋙ [$first_name](tg://user?id=$from_id)
⌯⁞ تم قفـل الجهات بنجاح
⌯⁞ خاصية ⋙ المسح
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
$settings["lock"]["contact"]="مقفول";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"يجب تفعيل البوت في المجموعة قم بإرسال كلمة { • تفعيل • } لتفعيل البوت",
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
}
}
}
elseif($text =="فتح الجهات" or $text =="فتح جهات"){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer) or in_array($from_id,$carlos) or in_array($from_id,$eri) or in_array($from_id,$nazar)) {$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
✵⁞ بواسطه ⋙ [$first_name](tg://user?id=$from_id)
⌯⁞ تم فتح الجهات بنجاح
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
$settings["lock"]["contact"]="مفتوح";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"يجب تفعيل البوت في المجموعة قم بإرسال كلمة { • تفعيل • } لتفعيل البوت",
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
}
}
}
elseif($text =="قفل تعديل الميديا" ){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer) or in_array($from_id,$carlos) or in_array($from_id,$eri) or in_array($from_id,$nazar)) {$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
✵⁞ بواسطه ⋙ [$first_name](tg://user?id=$from_id)
⌯⁞ تم قفـل تعديل الميديا بنجاح
⌯⁞ خاصية ⋙ المسح
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
$settings["lock"]["editmd"]="مقفول";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"يجب تفعيل البوت في المجموعة قم بإرسال كلمة { • تفعيل • } لتفعيل البوت",
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
}
}
}
elseif($text =="فتح تعديل الميديا" ){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer) or in_array($from_id,$carlos) or in_array($from_id,$eri) or in_array($from_id,$nazar)) {$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
✵⁞ بواسطه ⋙ [$first_name](tg://user?id=$from_id)
⌯⁞ تم فتح تعديل الميديا
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
$settings["lock"]["editmd"]="مفتوح";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"يجب تفعيل البوت في المجموعة قم بإرسال كلمة { • تفعيل • } لتفعيل البوت",
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
}
}
}
// tag
elseif($text =="قفل التاك" or $text =="قفل الهاش تاك"){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer) or in_array($from_id,$carlos) or in_array($from_id,$eri) or in_array($from_id,$nazar)) {$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
✵⁞ بواسطه ⋙ [$first_name](tg://user?id=$from_id)
⌯⁞ تم قفـل التاك بنجاح
⌯⁞ خاصية ⋙ المسح
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
$settings["lock"]["tag"]="مقفول";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"يجب تفعيل البوت في المجموعة قم بإرسال كلمة { • تفعيل • } لتفعيل البوت",
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
}
}
}
elseif($text =="فتح التاك" or $text =="فتح الهاش تاك"){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer) or in_array($from_id,$carlos) or in_array($from_id,$eri) or in_array($from_id,$nazar)) {$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
✵⁞ بواسطه ⋙ [$first_name](tg://user?id=$from_id)
⌯⁞ تم فتح التاك بنجاح
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
$settings["lock"]["tag"]="مفتوح";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"يجب تفعيل البوت في المجموعة قم بإرسال كلمة { • تفعيل • } لتفعيل البوت",
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
}
}
}
// username 
elseif($text =="قفل المعرفات" or $text =="قفل المعرف"){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer) or in_array($from_id,$carlos) or in_array($from_id,$eri) or in_array($from_id,$nazar)) {$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
✵⁞ بواسطه ⋙ [$first_name](tg://user?id=$from_id)
⌯⁞ تم قفـل المعرفات بنجاح
⌯⁞ خاصية ⋙ المسح
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
$settings["lock"]["username"]="مقفول";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"يجب تفعيل البوت في المجموعة قم بإرسال كلمة { • تفعيل • } لتفعيل البوت",
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
}
}
}
elseif($text =="فتح المعرفات" or $text =="فتح المعرف"){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer) or in_array($from_id,$carlos) or in_array($from_id,$eri) or in_array($from_id,$nazar)) {$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
✵⁞ بواسطه ⋙ [$first_name](tg://user?id=$from_id)
⌯⁞ تم فتح المعرفات بنجاح
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
$settings["lock"]["username"]="مفتوح";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"يجب تفعيل البوت في المجموعة قم بإرسال كلمة { • تفعيل • } لتفعيل البوت",
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
}
}
}
// audio
elseif($text =="قفل الصوت" or $text =="قفل الموسيقى"){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer) or in_array($from_id,$carlos) or in_array($from_id,$eri) or in_array($from_id,$nazar)) {$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
✵⁞ بواسطه ⋙ [$first_name](tg://user?id=$from_id)
⌯⁞ تم قفـل الصوت بنجاح
⌯⁞ خاصية ⋙ المسح
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
$settings["lock"]["audio"]="مقفول";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"يجب تفعيل البوت في المجموعة قم بإرسال كلمة { • تفعيل • } لتفعيل البوت",
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
}
}
}
elseif($text =="فتح الصوت" or $text =="فتح صوت"){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer) or in_array($from_id,$carlos) or in_array($from_id,$eri) or in_array($from_id,$nazar)) {$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
✵⁞ بواسطه ⋙ [$first_name](tg://user?id=$from_id)
⌯⁞ تم فتح الصوت بنجاح
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
$settings["lock"]["audio"]="مفتوح";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"يجب تفعيل البوت في المجموعة قم بإرسال كلمة { • تفعيل • } لتفعيل البوت",
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
}
}
}
elseif($text =="قفل الاشعارات" ){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer) or in_array($from_id,$carlos) or in_array($from_id,$eri) or in_array($from_id,$nazar)) {$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
✵⁞ بواسطه ⋙ [$first_name](tg://user?id=$from_id)
⌯⁞ تم قفـل الاشعارات بنجاح
⌯⁞ خاصية ⋙ المسح
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
$settings["lock"]["tgservic"]="مقفول";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"يجب تفعيل البوت في المجموعة قم بإرسال كلمة { • تفعيل • } لتفعيل البوت",
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
}
}
}
elseif($text =="فتح الاشعارات" ){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer) or in_array($from_id,$carlos) or in_array($from_id,$eri) or in_array($from_id,$nazar)) {$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
✵⁞ بواسطه ⋙ [$first_name](tg://user?id=$from_id)
⌯⁞ تم فتح الاشعارات بنجاح
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
$settings["lock"]["tgservic"]="مفتوح";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"يجب تفعيل البوت في المجموعة قم بإرسال كلمة { • تفعيل • } لتفعيل البوت",
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
}
}
}
// video note
elseif($text =="قفل بصمة الفيديو" ){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer) or in_array($from_id,$carlos) or in_array($from_id,$eri) or in_array($from_id,$nazar)) {$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
✵⁞ بواسطه ⋙ [$first_name](tg://user?id=$from_id)
⌯⁞ تم قفـل بصمة الفيديو بنجاح
⌯⁞ خاصية ⋙ المسح
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
$settings["lock"]["video_msg"]="مقفول";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"يجب تفعيل البوت في المجموعة قم بإرسال كلمة { • تفعيل • } لتفعيل البوت",
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
}
}
}
elseif($text =="فتح بصمة الفيديو" ){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer) or in_array($from_id,$carlos) or in_array($from_id,$eri) or in_array($from_id,$nazar)) {$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
✵⁞ بواسطه ⋙ [$first_name](tg://user?id=$from_id)
⌯⁞ تم فتح بصمة الفيديو بنجاح
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
$settings["lock"]["video_msg"]="مفتوح";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"يجب تفعيل البوت في المجموعة قم بإرسال كلمة { • تفعيل • } لتفعيل البوت",
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
}
}
}
// lock bots
elseif ($text== "قفل البوتات" or $text== "قفل بوتات" or $text== "قفل البوت") {
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer) or in_array($from_id,$carlos) or in_array($from_id,$eri) or in_array($from_id,$nazar)) {$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
✵⁞ بواسطه ⋙ [$first_name](tg://user?id=$from_id)
⌯⁞ تم قفـل البوتات بنجاح
⌯⁞ خاصية ⋙ المسح
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
$settings["lock"]["bot"]="مقفول";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"يجب تفعيل البوت في المجموعة قم بإرسال كلمة { • تفعيل • } لتفعيل البوت",
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
}
}
}
elseif ($text== "فتح البوتات" or $text== "فتح بوتات"or $text== "فتح البوت") {
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer) or in_array($from_id,$carlos) or in_array($from_id,$eri) or in_array($from_id,$nazar)) {$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
✵⁞ بواسطه ⋙ [$first_name](tg://user?id=$from_id)
⌯⁞ تم فتح البوتات بنجاح ",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
$settings["lock"]["bot"]="مفتوح";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"يجب تفعيل البوت في المجموعة قم بإرسال كلمة { • تفعيل • } لتفعيل البوت",
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
}
}
}
if($text =="قفل البصمات" ){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer) or in_array($from_id,$carlos) or in_array($from_id,$eri) or in_array($from_id,$nazar)) {$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
✵⁞ بواسطه ⋙ [$first_name](tg://user?id=$from_id)
⌯⁞ تم قفـل البصمات بنجاح
⌯⁞ خاصية ⋙ المسح
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
$settings["lock"]["voice"]="مقفول";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"يجب تفعيل البوت في المجموعة قم بإرسال كلمة { • تفعيل • } لتفعيل البوت",
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
}
}
}
elseif($text =="فتح البصمات" ){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer) or in_array($from_id,$carlos) or in_array($from_id,$eri) or in_array($from_id,$nazar)) {$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
✵⁞ بواسطه ⋙ [$first_name](tg://user?id=$from_id)
⌯⁞ تم فتح البصمات بنجاح
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
$settings["lock"]["voice"]="مفتوح";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"يجب تفعيل البوت في المجموعة قم بإرسال كلمة { • تفعيل • } لتفعيل البوت",
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
}
}
}
if($text =="قفل الاباحي" ){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer) or in_array($from_id,$carlos) or in_array($from_id,$eri) or in_array($from_id,$nazar)) {$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
✵⁞ بواسطه ⋙ [$first_name](tg://user?id=$from_id)
⌯⁞ تم قفـل الاباحي بنجاح
⌯⁞ خاصية ⋙ المسح
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
$settings["lock"]["xi"]="مقفول";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"يجب تفعيل البوت في المجموعة قم بإرسال كلمة { • تفعيل • } لتفعيل البوت",
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
}
}
}
elseif($text =="فتح الاباحي" ){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer) or in_array($from_id,$carlos) or in_array($from_id,$eri) or in_array($from_id,$nazar)) {$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
✵⁞ بواسطه ⋙ [$first_name](tg://user?id=$from_id)
⌯⁞ تم فتح الاباحي بنجاح
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
$settings["lock"]["xi"]="مفتوح";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"يجب تفعيل البوت في المجموعة قم بإرسال كلمة { • تفعيل • } لتفعيل البوت",
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
}
}
}
// sticker
elseif($text =="قفل الملصقات" ){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer) or in_array($from_id,$carlos) or in_array($from_id,$eri) or in_array($from_id,$nazar)) {$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
✵⁞ بواسطه ⋙ [$first_name](tg://user?id=$from_id)
⌯⁞ تم قفـل الملصقات بنجاح
⌯⁞ خاصية ⋙ المسح
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
$settings["lock"]["sticker"]="مقفول";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"يجب تفعيل البوت في المجموعة قم بإرسال كلمة { • تفعيل • } لتفعيل البوت",
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
}
}
}
elseif($text =="فتح الملصقات" ){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer) or in_array($from_id,$carlos) or in_array($from_id,$eri) or in_array($from_id,$nazar)) {$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
✵⁞ بواسطه ⋙ [$first_name](tg://user?id=$from_id)
⌯⁞ تم فتح الملصقات بنجاح
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
$settings["lock"]["sticker"]="مفتوح";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"يجب تفعيل البوت في المجموعة قم بإرسال كلمة { • تفعيل • } لتفعيل البوت",
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
}
}
}
// forward
elseif($text =="قفل التوجيه"){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer) or in_array($from_id,$carlos) or in_array($from_id,$eri) or in_array($from_id,$nazar)) {$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
✵⁞ بواسطه ⋙ [$first_name](tg://user?id=$from_id)
⌯⁞ تم قفـل التوجيه بنجاح
⌯⁞ خاصية ⋙ المسح
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
$settings["lock"]["forward"]="مقفول";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"يجب تفعيل البوت في المجموعة قم بإرسال كلمة { • تفعيل • } لتفعيل البوت",
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
}
}
}
elseif($text =="فتح التوجيه" ){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer) or in_array($from_id,$carlos) or in_array($from_id,$eri) or in_array($from_id,$nazar)) {$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
✵⁞ بواسطه ⋙ [$first_name](tg://user?id=$from_id)
⌯⁞ تم فتح التوجيه بنجاح
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
$settings["lock"]["forward"]="مفتوح";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"يجب تفعيل البوت في المجموعة قم بإرسال كلمة { • تفعيل • } لتفعيل البوت",
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
}
}
}
// fosh
elseif($text =="قفل السيئات" or $text =="قفل الممنوعات"){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer) or in_array($from_id,$carlos) or in_array($from_id,$eri) or in_array($from_id,$nazar)) {$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
✵⁞ بواسطه ⋙ [$first_name](tg://user?id=$from_id)
⌯⁞ تم قفـل السيئات بنجاح
⌯⁞ خاصية ⋙ المسح
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
$settings["lock"]["fosh"]="مقفول";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"يجب تفعيل البوت في المجموعة قم بإرسال كلمة { • تفعيل • } لتفعيل البوت",
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
}
}
}
elseif($text =="فتح السيئات" or $text =="فتح الممنوعات"){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer) or in_array($from_id,$carlos) or in_array($from_id,$eri) or in_array($from_id,$nazar)) {$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
✵⁞ بواسطه ⋙ [$first_name](tg://user?id=$from_id)
⌯⁞ تم فتح السيئات بنجاح
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
$settings["lock"]["fosh"]="مفتوح";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"يجب تفعيل البوت في المجموعة قم بإرسال كلمة { • تفعيل • } لتفعيل البوت",
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
}
}
}
elseif( $text =="قفل الكلايش"){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer) or in_array($from_id,$carlos) or in_array($from_id,$eri) or in_array($from_id,$nazar)) {$add = $settings["information"]["added"];
if ($add == true) {
$pluscharacter = $settings["information"]["pluscharacter"];
$downcharacter = $settings["information"]["downcharacter"];
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
✵⁞ بواسطه ⋙ [$first_name](tg://user?id=$from_id)
⌯⁞ تم قفـل الكلايش بنجاح
⌯⁞ خاصية ⋙ المسح
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
$settings["lock"]["lockcharacter"]="مقفول";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"يجب تفعيل البوت في المجموعة قم بإرسال كلمة { • تفعيل • } لتفعيل البوت",
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
}
}
}
elseif( $text =="فتح الكلايش"){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer) or in_array($from_id,$carlos) or in_array($from_id,$eri) or in_array($from_id,$nazar)) {$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
✵⁞ بواسطه ⋙ [$first_name](tg://user?id=$from_id)
⌯⁞ تم فتح الكلايش بنجاح
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
$settings["lock"]["lockcharacter"]="مفتوح";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"يجب تفعيل البوت في المجموعة قم بإرسال كلمة { • تفعيل • } لتفعيل البوت ",
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
}
}
}
if( $text =="قفل الدردشه"){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer) or in_array($from_id,$carlos) or in_array($from_id,$eri) or in_array($from_id,$nazar)) {$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
✵⁞ بواسطه ⋙ [$first_name](tg://user?id=$from_id)
⌯⁞ تم قفـل الدردشه بنجاح
⌯⁞ خاصية ⋙ المسح
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
$settings["lock"]["text"]="مقفول";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"يجب تفعيل البوت في المجموعة قم بإرسال كلمة { • تفعيل • } لتفعيل البوت",
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
}
}
}
elseif( $text =="فتح الدردشه"){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer) or in_array($from_id,$carlos) or in_array($from_id,$eri) or in_array($from_id,$nazar)) {$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
✵⁞ بواسطه ⋙ [$first_name](tg://user?id=$from_id)
⌯⁞ تم فتح الدردشه بنجاح
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
$settings["lock"]["text"]="مفتوح";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"يجب تفعيل البوت في المجموعة قم بإرسال كلمة { • تفعيل • } لتفعيل البوت",
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
}
}
}
elseif($text =="قفل تحويل الصيغ" or $text =="قفل الصيغ"){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer) or in_array($from_id,$carlos) or in_array($from_id,$nazar) or in_array($from_id,$eri)) {$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"*
✵⁞ تم قفل تحويل الصيغ  
⌯⁞ بواسطة ⋙ *[$first_name](tg://user?id=$from_id) 
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
$settings["lock"]["sigmidia"]="مقفول";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"يجب تفعيل البوت في المجموعة قم بإرسال كلمة { • تفعيل • } لتفعيل البوت",
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
}}}
elseif($text =="فتح تحويل الصيغ" or $text =="فتح الصيغ"){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer) or in_array($from_id,$carlos) or in_array($from_id,$nazar) or in_array($from_id,$eri)) {$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"*
✵⁞ تم فتح تحويل الصيغ  
⌯⁞ بواسطة⋙ * [$first_name](tg://user?id=$from_id) 
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
$settings["lock"]["sigmidia"]="مفتوح";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"يجب تفعيل البوت في المجموعة قم بإرسال كلمة { • تفعيل • } لتفعيل البوت",
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
}}}
elseif($text =="قفل تحميل الفديو" or $text =="قفل تحميل الميديا" or $text == "قفل التحميل"){
if($status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer) or in_array($from_id,$carlos) or in_array($from_id,$nazar) or in_array($from_id,$eri)) {$add = $settings["information"]["added"];
if($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"*
✵⁞ تم قفل تحميل الميديا  
✵⁞ بواسطة ⋙ * [$first_name](tg://user?id=$from_id) 
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
$settings["lock"]["downloadmid"]="مقفول";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"يجب تفعيل البوت في المجموعة قم بإرسال كلمة { • تفعيل • } لتفعيل البوت",
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
}}}
elseif($text =="فتح تحميل الفديو" or $text =="فتح تحميل الميديا" or $text == "فتح التحميل"){
if($status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer) or in_array($from_id,$carlos) or in_array($from_id,$nazar) or in_array($from_id,$eri)) {$add = $settings["information"]["added"];
if($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"*
✵⁞ تم فتح تحميل الميديا  
✵⁞ بواسطة ⋙ * [$first_name](tg://user?id=$from_id) 
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
$settings["lock"]["downloadmid"]="مفتوح";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"يجب تفعيل البوت في المجموعة قم بإرسال كلمة { • تفعيل • } لتفعيل البوت",
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
]);
}}}

elseif( $text =="تعطيل الايدي" or $text == "تعطيل الايدي بالصوره" or $text == "قفل الايدي بلصوره"){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer) or in_array($from_id,$nazar) or in_array($from_id,$carlos) or in_array($from_id,$eri)) {$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
✵⁞ بواسطه ⋙ [$first_name](tg://user?id=$from_id)
⌯⁞ تم تعطيل الايدي بالصوره
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
$settings["lock"]["iduser"]="مقفول";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"يجب تفعيل البوت في المجموعة قم بإرسال كلمة { • تفعيل • } لتفعيل البوت",
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
}
}
}
elseif($text =="تفعيل الايدي" or $text == "تفعيل الايدي بالصوره" or $text == "فتح الايدي بلصوره"){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer) or in_array($from_id,$nazar) or in_array($from_id,$carlos) or in_array($from_id,$eri)) {$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
✵⁞ بواسطه ⋙ [$first_name](tg://user?id=$from_id)
⌯⁞ تم تفعيل الايدي بالصوره
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
$settings["lock"]["iduser"]="مفتوح";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"يجب تفعيل البوت في المجموعة قم بإرسال كلمة { • تفعيل • } لتفعيل البوت",
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
}
}
}
elseif( $text =="تعطيل ردود البوت" or $text == "تعطيل ردود بوت"){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer) or in_array($from_id,$nazar) or in_array($from_id,$carlos) or in_array($from_id,$eri)) {$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
✵⁞ بواسطه ⋙ [$first_name](tg://user?id=$from_id)
⌯⁞ تم تعطيل ردود البوت
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
$settings["lock"]["rdona"]="مفتوح";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"يجب تفعيل البوت في المجموعة قم بإرسال كلمة { • تفعيل • } لتفعيل البوت",
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
}
}
}
elseif($text =="تفعيل ردود البوت" or $text == "تفعيل ردود بوت"){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer) or in_array($from_id,$nazar) or in_array($from_id,$carlos) or in_array($from_id,$eri)) {$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
✵⁞ بواسطه ⋙ [$first_name](tg://user?id=$from_id)
⌯⁞ تم تفعيل ردود البوت
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
$settings["lock"]["rdona"]="مقفول";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"يجب تفعيل البوت في المجموعة قم بإرسال كلمة { • تفعيل • } لتفعيل البوت",
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
}
}
}
elseif( $text =="تعطيل اطردني" or $text == "تعطيل امر اطردني"){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer) or in_array($from_id,$nazar) or in_array($from_id,$carlos) or in_array($from_id,$eri)) {$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
✵⁞ بواسطه ⋙ [$first_name](tg://user?id=$from_id)
⌯⁞ تم تعطيل الامر اطردني
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
$settings["lock"]["bannnnn"]="مفتوح";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"يجب تفعيل البوت في المجموعة قم بإرسال كلمة { • تفعيل • } لتفعيل البوت",
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
}
}
}
elseif($text =="تفعيل اطردني" or $text == "تفعيل امر اطردني"){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer) or in_array($from_id,$nazar) or in_array($from_id,$carlos) or in_array($from_id,$eri)) {$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
✵⁞ بواسطه ⋙ [$first_name](tg://user?id=$from_id)
⌯⁞ تم تفعيل الامر اطردني
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
$settings["lock"]["bannnnn"]="مقفول";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"يجب تفعيل البوت في المجموعة قم بإرسال كلمة { • تفعيل • } لتفعيل البوت",
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
}
}
}
elseif( $text =="تعطيل اوامر التحشيش" or $text == "تعطيل تحشيش"){
if($status == "creator" ||  $status == "administrator" ||  in_array($from_id,$Dev) || in_array($from_id,$developer) ||  in_array($from_id,$carlos) || in_array($from_id,$nazar) || in_array($from_id,$eri) || in_array($from_id,$manger)) {$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
✵⁞ بواسطه ⋙ [$first_name](tg://user?id=$from_id)
⌯⁞ تم تعطيل اوامر التحشيش
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
$settings["lock"]["jooki"]="مفتوح";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"يجب تفعيل البوت في المجموعة قم بإرسال كلمة { • تفعيل • } لتفعيل البوت",
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
}
}
}
elseif($text =="تفعيل اوامر التحشيش" or $text == "تفعيل تحشيش"){
if($status == "creator" ||  $status == "administrator" ||  in_array($from_id,$Dev) || in_array($from_id,$developer) ||  in_array($from_id,$carlos) || in_array($from_id,$nazar) || in_array($from_id,$eri) || in_array($from_id,$manger)) {$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
✵⁞ بواسطه ⋙ [$first_name](tg://user?id=$from_id)
⌯⁞ تم تفعيل اوامر التحشيش
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
$settings["lock"]["jooki"]="مقفول";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"يجب تفعيل البوت في المجموعة قم بإرسال كلمة { • تفعيل • } لتفعيل البوت",
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
}
}
}

elseif($rt && $text== "حذف"){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer) or in_array($from_id,$carlos) or in_array($from_id,$eri) or in_array($from_id,$nazar)) { bot('deletemessage',[
 'chat_id'=>$chat_id,
 'message_id'=>$re_msgid
 ]);
 bot('deletemessage',[
 'chat_id'=>$chat_id,
 'message_id'=>$message_id
 ]);
 }
}
// rmsg
elseif ( strpos($text, '/rmsg') !== false or strpos($text, 'تنظيف') !== false) {
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer) or in_array($from_id,$carlos) or in_array($from_id,$eri) or in_array($from_id,$nazar)) {$num = str_replace(['/rmsg ','تنظيف'],'',$text );
if ($num <= 500 && $num >= 1){
$add = $settings["information"]["added"];
if ($add == true) {
for($i=$message_id; $i>=$message_id-$num; $i--){
bot('deletemessage',[
 'chat_id' => $chat_id,
 'message_id' =>$i,
]);
}
bot('sendmessage',[
 'chat_id' => $chat_id,
 'text' =>"
✵⁞ بواسطه ⋙ [$first_name](tg://user?id=$from_id)
⌯⁞ تم حذف عدد من رسائل ⋙ *$num*
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_markup'=>$inlinebutton,
]);
}
else
{
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"⌯⁞ خطأ البوت لا يعمل بسبب عدم تفعيل البوت
⌯⁞ ارسل كلمة تفعيل لتفعيل البوت في المجموعة
",
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
}
}
else
{
bot('sendmessage',[
 'chat_id' => $chat_id,
 'text'=>"⌯⁞ يجب ان يكون العدد بين 1 إلى 500 ",
'reply_markup'=>$inlinebutton,
]);}}
}
//setname
elseif (strpos($text, 'ضع اسم') !== false) {
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer) or in_array($from_id,$nazar) or in_array($from_id,$carlos) or in_array($from_id,$eri)) {$newname= str_replace(['ضع اسم '],'',$text );
 bot('setChatTitle',[
 'chat_id'=>$chat_id,
 'title'=>$newname
]);
bot('sendmessage',[
 'chat_id'=>$chat_id,
 'text'=>"
✵⁞ بواسطه ⋙ [$first_name](tg://user?id=$from_id)
⌯⁞ تم وضع اسم للموجوعة بنجاح 
⌯⁞ *$text*
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
]);
 }
}

if ($text =="تفعيل القوانين" ){
if($status == "creator" ||  $status == "administrator" ||  in_array($from_id,$Dev) || in_array($from_id,$developer) || in_array($from_id,$carlos) || in_array($from_id,$eri) || in_array($from_id,$nazar)) {$add = $settings["information"]["added"];
if ($add == true) {	
	bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"
⌯⁞ تم تفعيل القوانين بنجاح
✵⁞ بواسطة ⋙ [$first_name](tg://user?id=$from_id)
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
  'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["bbhi"]="مقفول";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"عذرا عزيزي المجموعة ليس مفعلة",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
	}
}
}
elseif($text =="تعطيل القوانين" ){
if($status == "creator" ||  $status == "administrator" ||  in_array($from_id,$Dev) || in_array($from_id,$developer) || in_array($from_id,$carlos) || in_array($from_id,$eri) || in_array($from_id,$nazar)) {$add = $settings["information"]["added"];
if ($add == true) {
	bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"
⌯⁞ تم تعطيل القوانين بنجاح
✵⁞ بواسطة ⋙ [$first_name](tg://user?id=$from_id)
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
$settings["lock"]["bbhi"]="مفتوح";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"عذرا عزيزي المجموعة ليس مفعلة",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
	}
}
}

elseif ( $text== "تفعيل الرابط") {
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer) or in_array($from_id,$nazar) or in_array($from_id,$carlos) or in_array($from_id,$eri)) {$add = $settings["information"]["added"];
if ($add == true) {
$text = $settings["information"]["added"];
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
✵⁞ بواسطه ⋙ [$first_name](tg://user?id=$from_id)
⌯⁞ تم تفعيل رابط المجموعة بنجاح
⌯⁞ المجموعة ↫ $namegroup
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
$settings["information"]["cmd"]="مقفول";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"يجب تفعيل البوت في المجموعة قم بإرسال كلمة { • تفعيل • } لتفعيل البوت ",
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
}
}
}
elseif ( $text== "تعطيل الرابط") {
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer) or in_array($from_id,$nazar) or in_array($from_id,$carlos) or in_array($from_id,$eri)) {$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
✵⁞ بواسطه ⋙ [$first_name](tg://user?id=$from_id)
⌯⁞ تم تعطيل رابط المجموعة بنجاح
⌯⁞ اسم المجموعة ↫ $namegroup
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
$settings["information"]["cmd"]="مفتوح";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"يجب تفعيل البوت في المجموعة قم بإرسال كلمة { • تفعيل • } لتفعيل البوت ",
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
}
}
}
elseif( $text =="الرابط"){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) {if ($tc == 'group' | $tc == 'supergroup'){
$lockcmd = $settings["lock"]["cmd"];
if ($lockcmd == "مفتوح"){

$getlink = file_get_contents("https://api.telegram.org/bot".API_KEY."/exportChatInviteLink?chat_id=$chat_id");
$jsonlink = json_decode($getlink, true);
$getlinkde = $jsonlink['result'];
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"⌯⁞ G𝚁𝙾𝚄𝙿 𝙽𝙰𝙼 ࿊ ⋙ $namegroup :
⌯⁞ $getlinkde
",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
]);
}
}
}
else
{
$getlink = file_get_contents("https://api.telegram.org/bot".API_KEY."/exportChatInviteLink?chat_id=$chat_id");
$jsonlink = json_decode($getlink, true);
$getlinkde = $jsonlink['result'];
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"⌯⁞ 𝗚𝗥𝗢𝗨𝗣 𝗟𝗜𝗡𝗞 :- $namegroup :
⌯⁞ $getlinkde
",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
]);
}
}

 

 
if($text== "تفعيل مجاني") {
if ( $status == 'creator' or $status == 'administrator'){
$url = file_get_contents("https://api.telegram.org/bot".API_KEY."/getChatMembersCount?chat_id=$chat_id");
$getchat = json_decode($url, true);
$howmember = $getchat["result"];
$add = $settings["information"]["added"];
$dataadd = $settings["information"]["dataadded"];
if ($add == true) {
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"
✵⁞ بواسطة↫ [$first_name](tg://user?id=$from_id)
⌯⁞ تم تفعيل المجموعة بنجاح 
࿊⁞ G𝚁𝙾𝚄 ⋙ $namegroup
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
'reply_markup'=>json_encode([
 'inline_keyboard'=>[[
['text'=>"$chinnl",'url'=>"https://t.me/$chinnl"],['text'=>"$dataadd",'callback_data'=>"text"]
],]])]); 
}
else
{


if($howmember >=1){
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"
✵⁞ بواسطة↫ [$first_name](tg://user?id=$from_id)
⌯⁞ تم تفعيل المجموعة بنجاح 
࿊⁞ G𝚁𝙾𝚄 ⋙ $namegroup
",'reply_to_message_id'=>$message_id,
]); 
bot('sendmessage',[
'chat_id'=>$Dev[0],
'text'=>"تم تفعيل مجموعة جديدة
••━━━━━━━━━━━━━━•• 
⌯⁞ بواسطة الادمن↫ @$username
⌯⁞ اسم المجموعة↫ $namegroup
⌯⁞ ايدي المجموعة↫ $chat_id
⌯⁞ عدد اعضاء المجموعة↫ $mem
⌯⁞ الادمنية↫ $cmsg 
- $getlinkde
", 
]); 
$dateadd = date('Y-m-d', time());
$dateadd2 = isset($_GET['date']) ? $_GET['date'] : date('Y-m-d');
$next_date = date('Y-m-d', strtotime($dateadd2 ." +999 day"));
$settings = '{"lock": {
"text": "مفتوح",
"photo": "مفتوح",
"link": "مفتوح",
"tag": "مفتوح",
"username": "مفتوح",
"sticker": "مفتوح",
"video": "مفتوح",
"voice": "مفتوح",
"audio": "مفتوح",
"gif": "مفتوح",
"inline": "مفتوح",
"is_sticker": "مفتوح",
"bot": "مفتوح",
"forward": "مفتوح",
"document": "مفتوح",
"tgservic": "مفتوح",
"edit": "مفتوح",
"reply": "مفتوح",
"contact": "مفتوح",
"location": "مفتوح",
"game": "مفتوح",
"editmd": "مفتوح",
"cmd": "مفتوح",
"mute_all": "مفتوح",
"mute_all_time": "مفتوح",
"fosh": "مفتوح",
"lockauto": "مفتوح",
"lockcharacter": "مفتوح",
"video_msg": "مفتوح",
"sigmidia": "مفتوح",
"downloadmid": "مفتوح"
},
"information": {
"added": "true",
"welcome": "مفتوح",
"add": "مفتوح",
"rdodsg": "مقفول",
"markdown": "مفتوح",
"lockchannel": "مفتوح",
"hardmodebot": "مفتوح",
"hardmodewarn": "كتم العضو ♨️",
"charge": "999 يوم",
"setadd": "3",
"dataadded": "",
"en": "مفتوح",
"ar": "مفتوح",
"expire": "",
"textwelcome": "اهلا بك عزيزي",
"rules": "غير مسجل",
"msg": "",
"timelock": "00:00",
"timeunlock": "00:00",
"pluscharacter": "300",
"downcharacter": "0",
"$lockgame" : "مفتوح",
"setwarn": "3"
}
}';
$settings = json_decode($settings,true);
$settings["information"]["expire"]="$next_date";
$settings["information"]["dataadded"]="$dateadd";
$settings["information"]["msg_id"]="$message_id";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
$gpadd = fopen("data/group.txt",'a') or die("Unable to open file!");
fwrite($gpadd, "اسم المجموعة : [$namegroup] | ايدي المجموعة : [$chat_id]\n");
fclose($gpadd);
}
else
{

$kocke = file_get_contents("kocke.txt");
$sekk = file_get_contents("sekk.txt");
if ($add != true) {
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"📍 عدد الاعضاء قليل جدا
➖➖
⚒ليس لديك مايكفي م̷ـــِْن الاعضاء على. الاقل عضو واحد 
",
'reply_to_message_id'=>$message_id,
'reply_markup'=>json_encode([
 'inline_keyboard'=>[
 [
['text'=>"$chinnl",'url'=>"https://t.me/$chinnl"]
],]])]);}}}}
}





//add

elseif($text== "تفعيل") {
$kocke = file_get_contents("kocke.txt");
$sekk = file_get_contents("sekk.txt");
if ($status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$eri)  or in_array($from_id,$developer)){
if ($tc == 'group' | $tc == 'supergroup'){
$add = $settings["information"]["added"];
 $export = file_get_contents("https://api.telegram.org/bot".API_KEY."/exportChatInviteLink?chat_id=$chat_id");
$jsonlink = json_decode($export, true);
$getlinkde = $jsonlink['result'];
if ($add != true) {
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"✵⁞ بواسطة↫ [$first_name](tg://user?id=$from_id)
⌯⁞ تم تفعيل المجموعة بنجاح
ـ $namegroup
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
]);
bot('sendmessage',[
'chat_id'=>$Dev[0],
'text'=>"تم تفعيل مجموعة جديده

⌯⁞ بواسطة الادمن↫ @$username
⌯⁞ اسم المجموعة↫ $namegroup
⌯⁞ ايدي المجموعة↫ $chat_id
⌯⁞ عدد اعضاء المجموعة↫ $mem
⌯⁞ الادمنية↫ $cmsg
- $getlinkde
",'disable_web_page_preview'=>true,
]); 
$dateadd = date('Y-m-d', time());
$dateadd2 = isset($_GET['date']) ? $_GET['date'] : date('Y-m-d');
$next_date = date('Y-m-d', strtotime($dateadd2 ." +999 day"));
$settings = '{"lock": {
"text": "مفتوح",
"photo": "مفتوح",
"link": "مفتوح",
"tag": "مفتوح",
"username": "مفتوح",
"sticker": "مفتوح",
"video": "مفتوح",
"voice": "مفتوح",
"editmd": "مفتوح",
"audio": "مفتوح",
"iduser": "مقفول",
"gif": "مفتوح",
"is_sticker": "مفتوح",
"markdown": "مفتوح",
"bot": "مفتوح",
"inline": "مفتوح",
"forward": "مفتوح",
"document": "مفتوح",
"tgservic": "مفتوح",
"edit": "مفتوح",
"reply": "مفتوح",
"en": "مفتوح",
"ar": "مفتوح",
"contact": "مفتوح",
"rdodsg": "مقفول",
"location": "مفتوح",
"game": "مفتوح",
"cmd": "مفتوح",
"mute_all": "مفتوح",
"mute_all_time": "مفتوح",
"fosh": "مفتوح",
"lockauto": "مفتوح",
"lockcharacter": "مفتوح",
"video_msg": "مفتوح",
"sigmidia": "مفتوح",
"downloadmid": "مفتوح"
},
"information": {
"added": "true",
"welcome": "مفتوح",
"add": "مفتوح",
"lockchannel": "مفتوح",
"hardmodebot": "مفتوح",
"hardmodewarn": "كتم العضو ♨️",
"charge": "999 يوم",
"setadd": "3",
"dataadded": "",
"expire": "",
"msg": "",
"timelock": "00:00",
"timeunlock": "00:00",
"pluscharacter": "300",
"downcharacter": "0",
"textwelcome": "اهلا بك عزيزي",
"rules": "غير مسجل",
"setwarn": "3"
}
}';
$settings = json_decode($settings,true);
$settings["information"]["expire"]="$next_date";
$settings["information"]["dataadded"]="$dateadd";
$settings["information"]["msg_id"]="$message_id";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
$gpadd = fopen("data/group.txt",'a') or die("Unable to open file!");
fwrite($gpadd, "اسم المجموعة : [$namegroup] | ايدي المجموعة : [$chat_id]\n");
fclose($gpadd);
}
else
{
$dataadd = $settings["information"]["dataadded"];
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"✵⁞ بواسطة↫ [$first_name](tg://user?id=$from_id)
⌯⁞ تم تفعيل المجموعة بنجاح 
ـ $namegroup
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
]); }}}
}
if($text== 'غادر'){
if (in_array($from_id,$Dev) or in_array($from_id,$eri)  or in_array($from_id,$developer)){
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"✵⁞ بواسطه ⋙ [$first_name](tg://user?id=$from_id)
⌯⁞ تم مغادرة المجموعة بنجاح 
ـ $namegroup
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
]);
bot('LeaveChat',[
'chat_id'=>$chat_id,
]);
}
else
{
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"⌯⁞ عذرا الامر ليس لك عزيزي",
]);
}
}
elseif($text== 'تعطيل' ){
if (in_array($from_id,$Dev) or in_array($from_id,$eri)  or in_array($from_id,$developer)){
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"✵⁞ بواسطة↫[$first_name](tg://user?id=$from_id)
⌯⁞ تم تعطيل المجموعة بنجاح  
ـ $namegroup
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
]);
unlink("data/$chat_id.json");
}
}
elseif($text== "قفل الكل"or $text== "automatic" or $text== "قفل كل") {
if($status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer) or in_array($from_id,$eri) or in_array($from_id,$carlos) or in_array($from_id,$nazar)) {if ($tc == 'group' | $tc == 'supergroup'){
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"
⌯⁞ تم قفل الكل بنجاح  
⌯⁞ بواسطة↫ [$first_name](tg://user?id=$from_id) 
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
]);
$settings["lock"]["link"]="مقفول";
$settings["lock"]["username"]="مقفول";
$settings["lock"]["bot"]="مقفول";
$settings["lock"]["forward"]="مقفول";
$settings["lock"]["tgservices"]="مقفول";
$settings["lock"]["contact"]="مقفول";
$settings["lock"]["text"]="مقفول";
$settings["lock"]["is_sticker"]="مقفول";
$settings["lock"]["sticker"]="مقفول";
$settings["lock"]["gif"]="مقفول";
$settings["lock"]["voice"]="مقفول";
$settings["lock"]["fosh"]="مقفول";
$settings["lock"]["lockcharacter"]="مقفول";
$settings["lock"]["inline"]="مقفول";
$settings["lock"]["en"]="مقفول";
$settings["lock"]["photo"]="مقفول";
$settings["lock"]["markdown"]="مقفول";
$settings["lock"]["ar"]="مقفول";
$settings["lock"]["document"]="مقفول";
$settings["lock"]["video"]="مقفول";
$settings["lock"]["edit"]="مقفول";
$settings["lock"]["game"]="مقفول";
$settings["lock"]["location"]="مقفول";
$settings["lock"]["editmd"]="مقفول";
$settings["lock"]["tag"]="مقفول";
$settings["lock"]["audio"]="مقفول";
$settings["lock"]["iduser"]="مقفول";
$settings["lock"]["reply"]="مقفول";
$settings["lock"]["tgservic"]="مقفول";
$settings["lock"]["video_msg"]="مقفول";
$settings["lock"]["bot"]="مقفول";
$settings["lock"]["sigmidia"]="مقفول";
$settings["lock"]["downloadmid"]="مقفول";

$settings["lock"]["forwardr"]="مقفول";
$settings["lock"]["linkr"]="مقفول";
$settings["lock"]["linkw"]="مقفول";
$settings["lock"]["forwardw"]="مقفول";
$settings["lock"]["userw"]="مقفول";
$settings["lock"]["userr"]="مقفول";
$settings["lock"]["botk"]="مقفول";
$settings["lock"]["linkk"]="مقفول";
$settings["lock"]["forwardk"]="مقفول";
$settings["lock"]["userk"]="مقفول";

$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"⌯⁞ يجب تفعيل البوت في المجموعة
ℹ️ يمكنك تفعيل البوت في مجموعة مع امر تفعيل مجاني",
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
}}}}
elseif($text =="unmute all" or $text =="فتح الكل"){
if($status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer) or in_array($from_id,$eri) or in_array($from_id,$carlos) or in_array($from_id,$nazar)) {
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"*
⌯⁞ تم فتح الكل بنجاح 
⌯⁞ بواسطة⋙* [$first_name](tg://user?id=$from_id) 
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
$settings["lock"]["link"]="مفتوح";
$settings["lock"]["username"]="مفتوح";
$settings["lock"]["bot"]="مفتوح";
$settings["lock"]["forward"]="مفتوح";
$settings["lock"]["tgservices"]="مفتوح";
$settings["lock"]["contact"]="مفتوح";
$settings["lock"]["text"]="مفتوح";
$settings["lock"]["is_sticker"]="مفتوح";
$settings["lock"]["sticker"]="مفتوح";
$settings["lock"]["gif"]="مفتوح";
$settings["lock"]["voice"]="مفتوح";
$settings["lock"]["fosh"]="مفتوح";
$settings["lock"]["lockcharacter"]="مفتوح";
$settings["lock"]["inline"]="مفتوح";
$settings["lock"]["en"]="مفتوح";
$settings["lock"]["photo"]="مفتوح";
$settings["lock"]["markdown"]="مفتوح";
$settings["lock"]["ar"]="مفتوح";
$settings["lock"]["document"]="مفتوح";
$settings["lock"]["video"]="مفتوح";
$settings["lock"]["edit"]="مفتوح";
$settings["lock"]["game"]="مفتوح";
$settings["lock"]["location"]="مفتوح";
$settings["lock"]["editmd"]="مفتوح";
$settings["lock"]["tag"]="مفتوح";
$settings["lock"]["audio"]="مفتوح";
$settings["lock"]["iduser"]="مفتوح";
$settings["lock"]["reply"]="مفتوح";
$settings["lock"]["tgservic"]="مفتوح";
$settings["lock"]["video_msg"]="مفتوح";
$settings["lock"]["bot"]="مفتوح";
$settings["lock"]["sigmidia"]="مفتوح";
$settings["lock"]["downloadmid"]="مفتوح";

$settings["lock"]["forwardr"]="مفتوح";
$settings["lock"]["linkr"]="مفتوح";
$settings["lock"]["linkw"]="مفتوح";
$settings["lock"]["forwardw"]="مفتوح";
$settings["lock"]["userw"]="مفتوح";
$settings["lock"]["userr"]="مفتوح";
$settings["lock"]["botk"]="مفتوح";
$settings["lock"]["linkk"]="مفتوح";
$settings["lock"]["forwardk"]="مفتوح";
$settings["lock"]["userk"]="مفتوح";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"يجب تفعيل البوت في المجموعة قم بإرسال كلمة { • تفعيل • } لتفعيل البوت",
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
]);
}}}

if( $text =="الاعدادات"){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) {
$locklink = $settings["lock"]["link"];
$markdown = $settings["lock"]["markdown"];
$editmd = $settings["lock"]["editmd"];
$lockusername = $settings["lock"]["username"];
$locktag = $settings["lock"]["tag"];
$rdodsg = $settings["lock"]["rdodsg"];
$ar = $settings["lock"]["ar"];
$inline = $settings["lock"]["inline"];
$en = $settings["lock"]["en"];
$is_sticker = $settings["lock"]["is_sticker"]; 
$lockedit = $settings["lock"]["edit"];
$lockfosh = $settings["lock"]["fosh"];
$lockbots = $settings["lock"]["bot"];
$lockforward = $settings["lock"]["forward"];
$locktg = $settings["lock"]["tgservic"];
$lockreply = $settings["lock"]["reply"];
$lockcmd = $settings["lock"]["cmd"];
$lockdocument = $settings["lock"]["document"];
$lockgif = $settings["lock"]["gif"];
$iduser = $settings["lock"]["iduser"];
$lockvideo_note = $settings["lock"]["video_msg"];
$locklocation = $settings["lock"]["location"];
$lockphoto = $settings["lock"]["photo"];
$lockcontact = $settings["lock"]["contact"];
$lockaudio = $settings["lock"]["audio"];
$lockvoice = $settings["lock"]["voice"];
$locksticker = $settings["lock"]["sticker"];
$lockgame = $settings["lock"]["game"];
$lockvideo = $settings["lock"]["video"];
$locktext = $settings["lock"]["text"];

$mute_all = $settings["lock"]["mute_all"];
$welcome = $settings["information"]["welcome"];
$add = $settings["information"]["add"];
$setwarn = $settings["information"]["setwarn"];
$charge = $settings["information"]["charge"];
$lockauto = $settings["lock"]["lockauto"];
$lockcharacter = $settings["lock"]["lockcharacter"];
$startlock = $settings["information"]["timelock"];
$endlock = $settings["information"]["timeunlock"];
$startlockcharacter = $settings["information"]["pluscharacter"];
$endlockcharacter = $settings["information"]["downcharacter"];
$sigchange = $settings["lock"]["downloadmid"];
$Middown = $settings["lock"]["downloadmid"];
$text = str_replace("| فعال |","","✵⁞ اعدادات المجموعة : 
–––––––––––––––
✵⁞ التاك » { $locktag }
✵⁞ العربية » { $ar }
✵⁞ الاتجليزية » { $en }
✵⁞ المعرفات » { $lockusername }
✵⁞ التعديل » { $lockedit }
✵⁞ الروابط » { $locklink }
✵⁞ المتحركه » { $lockgif }
✵⁞ الصور » { $lockphoto }
✵⁞ الايدي » { $iduser }
✵⁞ الموسيقى » { $lockaudio }
✵⁞ البصمات » { $lockvoice }

✵⁞ الكلايش » { $lockcharacter }
✵⁞ الالعاب » { $lockgame }
✵⁞ التوجيه » { $lockforward }
✵⁞ الانلاين » { $inline }
✵⁞ السيئات » { $lockfosh }
✵⁞ الكلايش » { $lockcharacter }
✵⁞ الرد » { $lockreply }
✵⁞ الاشعارات » { $locktg }
✵⁞ بصمة الفيديو » { $lockvideo_note }
✵⁞ الموقع » { $locklocation }

✵⁞ الملفات » { $lockdocument }
✵⁞ الجهات » { $lockcontact }
✵⁞ الماركدوان » { $markdown }
✵⁞ تعديل الميديا { $locklink }
✵⁞ الملصقات » { $locksticker }
✵⁞ الدردشة » { $locktext }
✵⁞ البوتات » { $lockbots }
✵⁞ الردود » { $rdodsg }
 
✵⁞ تحويل الصيغ » { $sigchange }
✵⁞ تحميل الميديا » { $Middown }
✵⁞ الملصقات المتحركة » { $is_sticker }
ـ────────────
✶ للاستفسار↫ ❪ @$buy ❫
");
$text2 = str_replace("| غير مفعل |","","$text");
bot('sendmessage',[ 
 'chat_id'=>$chat_id,
 'text'=>"$text2",
'reply_to_message_id'=>$message_id,
'reply_markup'=>json_encode([
 'inline_keyboard'=>[[
['text'=>"$chinnl",'url'=>"https://t.me/$chinnl"]
],]])]); 
}}
if (strpos($text, "ضع ترحيب") !== false) {
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)  or in_array($from_id,$eri) or in_array($from_id,$carlos) or in_array($from_id,$nazar)) {
$add = $settings["information"]["added"];
if ($add == true) {
$we = str_replace(['ضع ترحيب'],'',$text );
$plus = mb_strlen("$we");
if($plus < 1000){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
✵⁞ بواسطه ⋙ [$first_name](tg://user?id=$from_id)
⌯⁞ تم وضع الترحيب بنجاح
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
$settings["information"]["textwelcome"]="$we";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"⌯⁞ ارسلت رسالة تحتوي على 1000 حرف لٱ يمكنك ارسال اكثر م̷ـــِْن 1000 حرف
",'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
}
}
else
{
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"يجب تفعيل البوت في المجموعة قم بإرسال كلمة { • تفعيل • } لتفعيل البوت ",
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
}
}
}
elseif ($text == "الترحيب") {
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)  or in_array($from_id,$eri) or in_array($from_id,$carlos) or in_array($from_id,$nazar)) {$add = $settings["information"]["added"];
if ($add == true) {
$text = $settings["information"]["textwelcome"];
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
$text
",'reply_to_message_id'=>$message_id,'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
]);
$settings["information"]["welcome"]="مفتوح";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}

}
}
// welcome enbale and disable
elseif ( $text== "تفعيل الترحيب") {
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)  or in_array($from_id,$eri) or in_array($from_id,$carlos) or in_array($from_id,$nazar)) {$add = $settings["information"]["added"];
if ($add == true) {
$text = $settings["information"]["textwelcome"];
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
✵⁞ بواسطه ⋙ [$first_name](tg://user?id=$from_id)
⌯⁞ تم تفعيل الترحيب بنجاح
⌯⁞ اسم المجموعة ⋙ 
ـ $namegroup
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
$settings["information"]["welcome"]="مقفول";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"يجب تفعيل البوت في المجموعة قم بإرسال كلمة { • تفعيل • } لتفعيل البوت ",
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
}
}
}
elseif ( $text== "تعطيل الترحيب") {
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) {$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
✵⁞ بواسطه ⋙ [$first_name](tg://user?id=$from_id)
⌯⁞ تم تعطيل الترحيب بنجاح
⌯⁞ اسم المجموعه ⋙ 
ـ $namegroup
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
$settings["information"]["welcome"]="مفتوح";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"يجب تفعيل البوت في المجموعة قم بإرسال كلمة { • تفعيل • } لتفعيل البوت ",
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
}
}
}
if ($text =="تفعيل الطرد" ){
if($status == "creator" ||  $status == "administrator" ||  in_array($from_id,$Dev) || in_array($from_id,$developer)|| in_array($from_id,$carlos) || in_array($from_id,$eri)) {$add = $settings["information"]["added"];
if ($add == true) {	
	bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"
✵⁞ بواسطه ⋙ [$first_name](tg://user?id=$from_id)
⌯⁞ تم تفعيل الطرد بنجاح
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
  'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["katei"]="مقفول";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"عذرا عزيزي المجموعة ليس مفعلة",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
	}
}
}
elseif($text =="تعطيل الطرد" ){
if($status == "creator" ||  $status == "administrator" ||  in_array($from_id,$Dev) || in_array($from_id,$developer)|| in_array($from_id,$carlos) || in_array($from_id,$eri)) {$add = $settings["information"]["added"];
if ($add == true) {
	bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"
✵⁞ بواسطه ⋙ [$first_name](tg://user?id=$from_id)
⌯⁞ تم تعطيل الطرد بنجاح
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
$settings["lock"]["katei"]="مفتوح";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"عذرا عزيزي المجموعة ليس مفعلة",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);}}
}

elseif (strpos($text, "/banall ") !== false or strpos($text, "حظر عام") !== false) {
if (in_array($from_id,$Dev)) {
$text = str_replace(['/banall ','حظر عام '],'',$text );
$stat = file_get_contents("https://api.telegram.org/bot$token/getChatMember?chat_id=$text&user_id=".$text);
$statjson = json_decode($stat, true);
$name = $statjson['result']['user']['first_name'];
$username = $statjson['result']['user']['username'];
$id = $statjson['result']['user']['id'];
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
✵⁞ العضو ⋙「 [$re_name](tg://user?id=$re_id) 」
⌯⁞ ايديه ↫ `$re_id` 
⌯⁞ تم حظره من كل المجموعات
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
 'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
$user["banlist"][]="$text";
$user = json_encode($user,true);
file_put_contents("data/user.json",$user);
}
}
elseif (strpos($text, "/unbanall ") !== false or strpos($text, "الغاء الحظر العام ") !== false) {
if (in_array($from_id,$Dev)) {
$text = str_replace(['/unbanall ','الغاء الحظر العام '],'',$text );
$stat = file_get_contents("https://api.telegram.org/bot$token/getChatMember?chat_id=$text&user_id=".$text);
$statjson = json_decode($stat, true);
$name = $statjson['result']['user']['first_name'];
$username = $statjson['result']['user']['username'];
$id = $statjson['result']['user']['id'];
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
✵⁞ العضو ⋙「 [$re_name](tg://user?id=$re_id) 」
⌯⁞ ايديه ↫ `$re_id` 
⌯⁞ تم الغاء حظره من كل المجموعات
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
 'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
$key = array_search($text,$user["banlist"]);
unset($user["banlist"][$key]);
$user["banlist"] = array_values($user["banlist"]); 
$user = json_encode($user,true);
file_put_contents("data/user.json",$user);
}
}
elseif( $text== "المحظورين عام") {
if ( in_array($from_id,$Dev)) {
$silent = $user["banlist"];
for($z = 0;$z <= count($silent)-1;$z++){
$result = $result.$silent[$z]."\n";
}
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"
✵⁞ اليك قائمة ⋙ المحظورين عام
$result",
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
}
}

$re_user = $update->message->reply_to_message->from->username;
$statjsonrt = json_decode(file_get_contents("https://api.telegram.org/bot$token/getChatMember?chat_id=$chat_id&user_id=".$re_id),true);
@$statusrt = $statjsonrt['result']['status'];
$re = $update->message->reply_to_message;
if(in_array($re_id,$eri)){
$infor = "مطور السورس";
}
elseif(in_array($re_id,$nazar) ){
$infor = "منشئ اساسي";
}
elseif(in_array($re_id,$carlos) ){
$infor = "المنشئ";
}
elseif(in_array($re_id,$Dev) ){
$infor = "مطور اساسي";
}
elseif(in_array($re_id,$developer) ){
$infor = "مطور البوت";
}
elseif($statusrt == "creator"){
$infor = "المالك";
}
elseif($statusrt == "administrator"){
$infor = "المشرف";
}
elseif(in_array($re_id,$manger) ){
$infor = "المدير";
}
elseif(in_array($re_id,$admin_user) ){
$infor = "الادمن";
}
elseif(in_array($re_id,$mmyaz) ){
$infor = "عضو مميز";
}elseif($statusrt !== "creator" || $statusrt !== "administrator" || $statusrt !== "member" || !in_array($re_id,$admin_user) || !in_array($re_id,$mmyaz) || !in_array($re_id,$manger) || !in_array($re_id,$developer) ){
$infor = "فقط عضو";
}elseif($statusrt == "member" ){
$infor = "فقط عضو";
}
 
if($rt && $text == "كشف" or $rt && $text == "ايديه"){
bot('sendMessage', [
'chat_id'=>$chat_id,
'text'=>"*⌯ اسمك ↫ *[$re_name](tg://user?id=$re_id) ؛* 
⌯ ايديك ↫ *`$re_id` ؛* 
⌯ موقعك ↫ $infor ؛
⌯ معرفك↫ @$re_user ؛

⌯ نوع الكشف بالـرد ࿊\n ؛ـ┉  ┉  ┉  ┉  ┉  ┉  ┉  ┉
✶ للاستفسار↫ ❪ @$buy ❫ *
",'parse_mode'=>"markdown",
'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
]);
}

if ($rt && $text == "طرد" ){
if($settings["lock"]["katei"] == "مقفول"){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer) or in_array($from_id,$carlos)) {
if ( $statusrt != 'creator' && $statusrt != 'administrator' && !in_array($re_id,$Dev) && !in_array($re_id,$manger) && !in_array($re_id,$admin_user) && !in_array($re_id,$vipmem) && !in_array($re_id,$developer) && !in_array($re_id,$carlos)) {
bot('KickChatMember',['chat_id'=>$chat_id,'user_id'=>$re_id]);
bot('sendmessage',['chat_id'=>$chat_id,'text'=>"
✵⁞ العضو ⋙「 [$re_name](tg://user?id=$re_id) 」
⌯⁞ ايديه ↫ `$re_id` 
⌯⁞ تم طرده من المجموعة
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,]);} 
else{bot('sendmessage',['chat_id'=>$chat_id,'text'=>"✵⁞ عذرا لا تستطيع طرد ⋙ ( $infor )",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,'reply_markup'=>$inlinebutton,]);}}}}

$s = json_decode(file_get_contents("http://api.telegram.org/bot".API_KEY."/getChat?chat_id=$from_id"));
$sn =$s->result->first_name;
$su =$s->result->username;
$replace = json_decode(file_get_contents("replace.json"),true);
$user = $replace[$from_id]["user"];
$name = $replace[$from_id]["name"];
if($message and $su != $user and $user != null and $user != ""){
bot('sendMessage', [
'chat_id' =>$chat_id,
'text' =>"*⌯ ها غيرت معرفك مو كان :* @$user ",'parse_mode' =>"markdown", 'reply_to_message_id'=>$message->message_id, 
]);
} 
if($message and ! in_array($su,$user)){
$replace[$from_id]["user"] = "$su";
file_put_contents("replace.json",json_encode($replace));
}

if($message and $sn != $name and $name != null and $name != ""){
bot('sendMessage', [
'chat_id' =>$chat_id,
'text' =>"*⌯ ها غيرت اسمك مو كان :* $name ",'parse_mode' =>"markdown", 'reply_to_message_id'=>$message->message_id, 
]);
} 
if($message and ! in_array($sn,$name)){
$replace[$from_id]["name"] = "$sn";
file_put_contents("replace.json",json_encode($replace));
}
 $result=json_decode(file_get_contents("https://api.telegram.org/bot".API_KEY."/getUserProfilePhotos?user_id=$from_id"),true);
$count=$result["result"]["total_count"]; 
$pr = str_replace("صورتي ", "", $text);
if($text=="صورتي $pr" && $pr <= $count){
$result=json_decode(file_get_contents("https://api.telegram.org/bot".API_KEY."/getUserProfilePhotos?user_id=$from_id"),true);
$file_id=$result["result"]["photos"][$pr-1][0]["file_id"];
$count=$result["result"]["total_count"];var_dump(
  
bot('sendphoto',[
'chat_id'=>$chat_id,
'photo'=>"$file_id",
'caption' =>"⌯⁞ هذه هي الصوره رقم $pr
⌯⁞ عدد صورك $count", 'reply_to_message_id'=>$message->message_id, 
]));
}elseif($text == "صورتي $pr" && $pr > $count){
bot('sendMessage',[
'chat_id' =>$chat_id,
'text' =>"⌯⁞ عذرا انت تمتلك $count صورة فقط",'reply_to_message_id'=>$message->message_id, 
]);
}

$date = date('h:i:s'); $d = date('A');
$aa =preg_replace('/AM/', 'ص', $d);$aa =preg_replace('/PM/', 'م', $d);
date_default_timezone_set('Asia/Baghdad');
$times = date('h:i:s');
$year = date('Y');
$month = date('n');
$day = date('j');
$time = time() + (979 * 11 + 1 + 30);
$blod1 = "http://api.telegram.org/bot".$API_KEY."/getChatMembersCount?chat_id=$chat_id";
$blod2 = file_get_contents($blod1);
$blod3 = json_decode($blod2);
$blod4 = $blod3->result;
$title = $message->chat->title;

if($text == "الساعة" or $text == "الزمن" or $text == "الساعه" or $text == "الوقت"){
bot ('sendMessage',['chat_id'=>$chat_id,'text'=>"
✵⁞ الساعة ⋙ $times $aa
✵⁞ التاريخ ⋙ ".date("Y")."/".date("n")."/".date("d")."
ـ┉  ┉  ┉  ┉  ┉  ┉  ┉  
✶ للاستفسار↫ ❪ @$buy ❫
",'parse_mode'=>'MarkDown', 'disable_web_page_preview'=>true, 'reply_to_message_id'=>$message->message_id,]);}

$rt = $update->message->reply_to_message;
$re_id = $update->message->reply_to_message->from->id;
$from_id = $message->from->id;
$token = "";
if($rt and $text == "لقبه"){
$a = json_decode(file_get_contents("https://api.telegram.org/bot$API_KEY/getChatMember?chat_id=$chat_id&user_id=$re_id"));
$b = $a->result->custom_title;
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"✵⁞ لقبه ↫ $b",
'reply_to_message_id'=>$message->message_id,
]);
}

if($text == "لقبي"){
$a = json_decode(file_get_contents("https://api.telegram.org/bot$API_KEY/getChatMember?chat_id=$chat_id&user_id=$from_id"));
$b = $a->result->custom_title;
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"✵⁞ قبك ↫ $b",
'reply_to_message_id'=>$message->message_id,
]);
}

$saiko = file_get_contents("saikoo.txt");
if($text=="ضع قوانين"){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer) or in_array($from_id,$nazar) or in_array($from_id,$carlos) or in_array($from_id,$eri)) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
⌯⁞ اهلا بك عزيزي
⌯⁞ الان قم بارسال القوانين
",
'reply_to_message_id'=>$message->message_id,
'parse_mode'=>"MarkDown",
]);
file_put_contents("saikoo.txt","saiko");
}
}
if($text and $saiko =="saiko"){
	if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer) or in_array($from_id,$nazar) or in_array($from_id,$carlos) or in_array($from_id,$eri)) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
⌯⁞ اهلا بك عزيزي
⌯⁞ تم حفظ القوانين بنجاح
⌯⁞ الان قم بارسال القوانين لعرض القوانين
",
'reply_to_message_id'=>$message->message_id,
'parse_mode'=>"MarkDown",
]);
file_put_contents("ssaiko.txt","$text");
unlink("saikoo.txt");
}
}
$ameer = file_get_contents("ssaiko.txt");
if($text=="القوانين"){
if($settings["lock"]["bbhi"] == "مقفول"){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
$ameer
",
'reply_to_message_id'=>$message->message_id,
'parse_mode'=>"MarkDown",
]);
}
}
if($text=="القوانين"){
if($settings["lock"]["bbhi"] == "مفتوح"){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"⌯⁞ عذرا عزيزي عليك تفعيل القوانين
⌯⁞ للتفعيل ارسل ↫ تفعيل القوانين
",'reply_to_message_id'=>$message->message_id,
'parse_mode'=>"MarkDown",
]);
}
}
if($text=="مسح القوانين"){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer) or in_array($from_id,$nazar) or in_array($from_id,$carlos) or in_array($from_id,$eri)) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"⌯⁞ تم مسح القوانين بنجاح
",'reply_to_message_id'=>$message->message_id,
'parse_mode'=>"MarkDown",
]);
file_put_contents("ssaiko.txt","");
}
}
$ameer = file_get_contents("ssaiko.txt");
if($text=="القوانين" and $ameer == null){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"⌯⁞ عزيزي لايوجد قوانين
",
'reply_to_message_id'=>$message->message_id,
'parse_mode'=>"MarkDown",
]);
}

if(strpos($text, 'ضع وصف')!== false){
if($status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)){
$newdec= str_replace('ضع وصف','',$text);
bot('setChatDescription',[
'chat_id'=>$chat_id,
'description'=>$newdec
]);
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"*⌯⁞ تم وضع الوصف  
⌯⁞ بواسطة* [$first_name](tg://user?id=$from_id)
",'parse_mode'=>'MarkDown',
]);}
}

$MSg_Id = $message->message_id;
$FN_MSg = $message->from->first_name;
$UM_MSg = $message->from->username;
$Id_MSg = $message->from->id;
if(!$UM_MSg){
$MsG = "⌯⁞ الاسم : $FN_MSg
⌯⁞ الايدي : $Id_MSg
⌯⁞ قام بنشر صورة اباحية : ☞︎︎︎
";
}elseif($UM_MSg){
$MsG = "⌯⁞ الاسم : $FN_MSg
⌯⁞ المعرف : @".$UM_MSg."
⌯⁞ قام بنشر صورة اباحية : ☞︎
";
}
if($message->photo){
$file = $message->photo[count($message->photo)-1]->file_id;
$get = bot('getfile',['file_id'=>$file]);
$patch = $get->result->file_path;
$url = "https://api.telegram.org/file/bot".API_KEY."/$patch"; 
$Api = json_decode(file_get_contents("https://forhassan.ml/my_ip/ImageInfo.php?url=".$url),true);
if($Api['ok']["Info"] == "Indecent"){
bot('deleteMessage',[
'chat_id'=>$chat_id,
'message_id'=>$MSg_Id,
]);
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>$MsG,
]);}
}

elseif( $rt && $text == "حظر"){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) {
if ( $statusrt != 'creator' && $statusrt != 'administrator' && !in_array($re_id,$Dev) && !in_array($re_id,$manger) && !in_array($re_id,$admin_user) && !in_array($re_id,$mmyaz) && !in_array($re_id,$developer)) {
	bot('KickChatMember',[
    'chat_id'=>$chat_id,
    'user_id'=>$re_id
      ]);
bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"
✵⁞ العضو ⋙「 [$re_name](tg://user?id=$re_id) 」
⌯⁞ ايديه ↫ `$re_id` 
⌯⁞ تم حظره من المجموعة بنجاح
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
	 'reply_markup'=>$inlinebutton,
   ]);
   } 
else	
{
	bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"✵⁞ عذرا لا تستطيع حظر ⋙ ( $infor )",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
   }
}
 }
 elseif( $rt && $text == "الغاء الحظر"){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) {
if ( $statusrt != 'creator' && $statusrt != 'administrator' && !in_array($re_id,$Dev)) {
	bot('unbanChatMember',[
    'chat_id'=>$chat_id,
    'user_id'=>$re_id
      ]);
bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"
✵⁞ العضو ⋙「 [$re_name](tg://user?id=$re_id) 」
⌯⁞ ايديه ↫ `$re_id` 
⌯⁞ تم الغاء حظره من المجموعة
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
	 'reply_markup'=>$inlinebutton,
   ]);
   } 
else	
{
	bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"✵⁞ عذرا لا تستطيع الغاء حظر ⋙ ( $infor )",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
   }
}
 }
  
$user = $update->message->from->username;
$s = file_get_contents("https://api.telegram.org/bot$API_KEY/getChatMember?chat_id=$chat_id&user_id=".$bot_id);
$ss = json_decode($s, true);
$bot = $ss['result']['status'];

mkdir("banduser");
$get_Busers = file_get_contents("banduser/$chat_id.txt");
$get_Buser = explode("\n",$get_Busers);
$kick = explode(" " ,$text);
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) {
if($kick[0] == "ححظر" || $kick[0] == "حظر" and isset($kick[1])){
$text = str_replace(['حظر','ححظر'],'',$text);
$stat = file_get_contents("https://api.telegram.org/bot
$token/getChatMember?chat_id=$text&user_id=".$text);
$statjson = json_decode($stat, true);
$name = $statjson['result']['user']['first_name'];
$username = $statjson['result']['user']['username'];
$id = $statjson['result']['user']['id'];

if($text != $sudo && $text != $buyy && !in_array($text,$Dev) and !in_array($text,$manger) and !in_array($text,$developer) and !in_array($text,$mmyaz) and !in_array($text,$admin_user) and !in_array($text,$Dev)){
if(strpos($text ,"@") !== false and !in_array($text,$get_Buser)){
file_put_contents("banduser/$chat_id.txt","\n" . $text ."\n" , FILE_APPEND);}
if($stat !== false and !in_array("@$username",$get_Buser)){
file_put_contents("banduser/$chat_id.txt","\n" . "@$username" ."\n" , FILE_APPEND);}

bot('KickChatMember',[
'chat_id'=>$chat_id,
'user_id'=>$id
  ]);
 bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"✵⁞ العضو ⋙「 [$re_name](tg://user?id=$re_id) 」 
⌯⁞ ايديه ↫ `$re_id`
⌯⁞ تم حظره من المجموعه
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
	 'reply_markup'=>$inlinebutton,
   ]);
   } 
else	
{
	bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"✵⁞ عذرا لا تستطيع حظر ⋙ ( $infor )",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
   }
}
 }
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) {
if($kick[0] == "الغاء" and $kick[1] == "حظر" and isset($kick[2])){
$text = str_replace('الغاء حظر ','',$text);

$stat = file_get_contents("https://api.telegram.org/bot$API_KEY/getChatMember?chat_id=$text&user_id=".$text);
$statjson = json_decode($stat, true);
$name = $statjson['result']['user']['first_name'];
$username = $statjson['result']['user']['username'];
$id = $statjson['result']['user']['id'];

if($stat != false and in_array("@$username",$get_Buser)){
$str2 = str_replace("@$username",'',$get_Busers);
$ex2 = explode("\n",$str2);
file_put_contents("banduser/$chat_id.txt",$ex2);}

if(strpos($text ,"@") !== false and in_array($text,$get_Buser)){
$str = str_replace("$text",'',$get_Busers);
$ex = explode("\n",$str);
file_put_contents("banduser/$chat_id.txt",$ex);}

bot('promoteChatMember',[
        'chat_id'=>$chat_id,
        'user_id'=>$id,
        'can_send_messages'=>true,
  ]);
bot('sendmessage', [
 'chat_id' => $chat_id,
 'text'=>"✵⁞ العضو ⋙「 [$re_name](tg://user?id=$re_id) 」 
⌯⁞ ايديه ↫ `$re_id`
⌯⁞ تم الغاء حظره من المجموعه
",'parse_mode'=>"MARKDOWN",
'reply_to_message_id'=>$message_id,
'disable_web_page_preview'=>true,
   ]);
}
if($text == "مسح المحظورين"){
file_put_contents("banduser/$chat_id.txt","");
bot("SendMessage",[
'chat_id'=>$chat_id,
'text'=>"✵⁞ بواسطة ⋙ [$first_name](tg://user?id=$from_id)
⌯⁞ تم مسح قائمة المحظورين
",'parse_mode'=>"MARKDOWN",
'reply_to_message_id'=>$message_id,
'disable_web_page_preview'=>true,
]);
}
}
if($text == "المحظورين" and $get_Busers != NULL || $get_Busers != ""){
bot("SendMessage",[
'chat_id'=>$chat_id,
'text'=>"✵⁞ بواسطة ⋙ [$first_name](tg://user?id=$from_id)
⌯⁞ تم عرض قائمة المحظورين
ـ┉  ┉  ┉  ┉  ┉  ┉  ┉  ┉
[$get_Busers]",
'parse_mode'=>"MARKDOWN",
'reply_to_message_id'=>$message_id,
'disable_web_page_preview'=>true,
]);
}
if($text == "المحظورين" and $get_Busers == NULL || $get_Busers == ""){
bot("SendMessage",[
'chat_id'=>$chat_id,
'text'=>"✵⁞ عزيزي ⋙ [$first_name](tg://user?id=$from_id)
⌯⁞ لايوجد اي محظور حاليأ
",'parse_mode'=>"MARKDOWN",
'reply_to_message_id'=>$message_id,
'disable_web_page_preview'=>true,
]);
}

if( $text =="قائمة المنع"){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) {$filter = $settings["filterlist"];
for($z = 0;$z <= count($filter)-1;$z++){
$result = $result.$filter[$z]."\n";
}
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
✵⁞ عزيزي ⋙ [$first_name](tg://user?id=$from_id)
⌯⁞ اليك قائمة الممنوعات
ـ┉  ┉  ┉  ┉  ┉  ┉  ┉  ┉
$result
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
         'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
}
}
elseif (strpos($text , "فلتر ") !== false or strpos($text , "منع") !== false) {
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) {$add = $settings["information"]["added"];
if ($add == true) {
$text1 = str_replace(['فلتر ','منع'],'',$text);
bot('sendmessage',[
            'chat_id'=>$chat_id,
            'text'=>"
✵⁞ بواسطة ⋙ [$first_name](tg://user?id=$from_id)
⌯⁞ تم منع كلمة *$text1* بنجاح
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
         'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
@$settings = json_decode(file_get_contents("data/$chat_id.json"),true);
$settings["filterlist"][]="$text1";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"⌯⁞ لم يتم تفعيل البوت في مجموعتك",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
}
}
}
elseif ( strpos($text  , "الغاء فلتر") !== false) {
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) {$text1 = str_replace(['الغاء فلترة'],'',$text );
bot('sendmessage',[
            'chat_id'=>$chat_id,
            'text'=>"
✵⁞ بواسطة ⋙ [$first_name](tg://user?id=$from_id)
⌯⁞ تم الغاء منع كلمة *$text1* بنجاح
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
         'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
@$settings = json_decode(file_get_contents("data/$chat_id.json"),true);
$key = array_search($text1,$settings["filterlist"]);
unset($settings["filterlist"][$key]);
$settings["filterlist"] = array_values($settings["filterlist"]); 
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
elseif( $text =="مسح قائمة المنع"){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) {$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
✵⁞ بواسطة ⋙ [$first_name](tg://user?id=$from_id)
⌯⁞ تم مسح قائمة الممنوعات بنجاح
",'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
@$settings = json_decode(file_get_contents("data/$chat_id.json"),true);
unset($settings["filterlist"]);
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"يجب تفعيل البوت في المجموعة قم بإرسال كلمة { • تفعيل • } لتفعيل البوت",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);}}
}
 
$sttings = json_decode(file_get_contents("media.json"),1);
$media = $sttings["media"][$chat_id];
$ameer = $sttings["ameer"][$chat_id];
if($sttings["media"][$chat_id]==null){
$sttings["media"][$chat_id]=0;
file_put_contents("media.json",json_encode($sttings));
}
$oo = $message->message_id;
if ($message->sticker){
file_put_contents("media.json");
$sttings['ameer'][$chat_id][] = "$oo";
$sttings["media"][$chat_id]+=1;
file_put_contents("media.json",json_encode($sttings));
}
if ($message->photo){
file_put_contents("media.json");
$sttings['ameer'][$chat_id][] = "$oo";
$sttings["media"][$chat_id]+=1;
file_put_contents("media.json",json_encode($sttings));
}
if ($message->video){
file_put_contents("media.json");
$sttings['ameer'][$chat_id][] = "$oo";
$sttings["media"][$chat_id]+=1;
file_put_contents("media.json",json_encode($sttings));
}
if ($message->video_note){
file_put_contents("media.json");
$sttings['ameer'][$chat_id][] = "$oo";
$sttings["media"][$chat_id]+=1;
file_put_contents("media.json",json_encode($sttings));
}
if ($message->animation){
file_put_contents("media.json");
$sttings['ameer'][$chat_id][] = "$oo";
$sttings["media"][$chat_id]+=1;
file_put_contents("media.json",json_encode($sttings));
}
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) {
if($text == "عدد الميديا"){
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"⌯⁞ عدد الميديا ⋙ $media
",'parse_mode'=>"Markdown",
'reply_to_message_id'=>$message->message_id,
]);
exit();
}
}
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer) or in_array($from_id,$nazar) or in_array($from_id,$carlos) or in_array($from_id,$eri)) {
if($text == "مسح الميديا"){
if($media == "0"){
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"⌯⁞ عدد الميديا ⋙ $media
",'parse_mode'=>"Markdown",
'reply_to_message_id'=>$message->message_id,
]);
exit();
}
}
}
date_default_timezone_set("Asia/Baghdad");
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer) or in_array($from_id,$nazar) or in_array($from_id,$carlos) or in_array($from_id,$eri)) {
if($text == "مسح الميديا"){
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"⌯⁞ جار مسح الميديا انتظر قليلا....
",'parse_mode'=>"Markdown",
'reply_to_message_id'=>$message->message_id,
]);
for($i=0;$i<=$sttings["media"][$chat_id];$i++){
bot('deleteMessage',[
'chat_id'=>$chat_id,
'message_id'=>"$ameer[$i]",
]);
}
$date = $message->date;
$gettime = time();
$sppedtime = $gettime - $date;
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"✵⁞ بواسطة ⋙ [$first_name](tg://user?id=$from_id)
⌯⁞  تم مسح الميديا ⋙ $media بنجاح
",'parse_mode'=>"Markdown",
'reply_to_message_id'=>$message->message_id,
]);
unset($sttings['media'][$chat_id]);
unset($sttings['ameer'][$chat_id]);
file_put_contents("media.json",json_encode($sttings));
exit();
}
}

elseif($text =="تفعيل ردود المطور" or $text == "تفعيل ردود مطور"){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) {$add = $settings["information"]["added"];
if ($add == true){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
✵⁞ بواسطة ⋙ [$first_name](tg://user?id=$from_id)
⌯⁞  تم تفعيل ردود المطور بنجاح
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["rdodsg"]="مقفول";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"يجب تفعيل البوت في المجموعة قم بإرسال كلمة { • تفعيل • } لتفعيل البوت",
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
]);
}
}
}
elseif($text =="تعطيل ردود المطور" or $text == "تعطيل ردود مطور"){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) {$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
✵⁞ بواسطة ⋙ [$first_name](tg://user?id=$from_id)
⌯⁞  تم تعطيل ردود المطور بنجاح
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
$settings["lock"]["rdodsg"]="مفتوح";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"يجب تفعيل البوت في المجموعة قم بإرسال كلمة { • تفعيل • } لتفعيل البوت",
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
}
}
}

$id = file_get_contents('id.txt');
if($id == "✓"){
$namw = $message->new_chat_member->first_name;
$nam = $message->new_chat_member->last_name;
$idw = $message->new_chat_member->id;
$usw = $message->new_chat_member->username;
$Datauser = $update->callback_query->from->username;
$Dataid = $update->callback_query->from->id;
$chat_id2 = $update->callback_query->message->chat->id;
mkdir("Ali");
mkdir("Ali/$chat_id");
$get = file_get_contents("Ali/$chat_id2/$Dataid.txt");
if($message->new_chat_member){
bot('restrictChatMember',[
'chat_id'=>$chat_id,
'user_id'=>$idw,
]);
 bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"
*⌯⁞ العضو ⋙ *[@$usw]*
⌯⁞  الايدي ⋙ *[$idw](tg://user?id=$idw)*
⌯⁞ تم تقييدك بواسطة البوت اضغط على زر انا لست روبوت*
",'parse_mode'=>"MarkDown",
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[["text"=>"⌯⁞ انا لست روبوت","callback_data"=>"unban-$idw"]],
]
])
]);
file_put_contents("Ali/$chat_id/$from_id.txt",$idw);
}
$Ali = explode('-', $data);
if($data == "unban-$Ali[1]" and $get == $Dataid){
bot('promoteChatMember',[
'chat_id'=>$chat_id2,
'user_id'=>$Ali[1],
'can_send_messages'=>true,
]);
bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$update->callback_query->message->message_id,
'text'=>"⌯⁞ تم الغاء تقييدك بنجاح 
⌯⁞ انت لست روبوت بالفعل...",
'parse_mode'=>"MarkDown",
]);
unlink("Ali/$chat_id2/$Dataid.txt");
}}
elseif( $text =="فتح التحقق"){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer) or in_array($from_id,$carlos) or in_array($from_id,$nazar) or in_array($from_id,$eri)) {$add = $settings["information"]["added"];
if ($add == true) {
 bot('sendmessage',[
 'chat_id'=>$chat_id,
 'text'=>"✵⁞ بواسطة ⋙ [$first_name](tg://user?id=$from_id)
⌯⁞  تم فتح التحقق بنجاح
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
file_put_contents('id.txt',✓);
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
bot('sendmessage',[
 'chat_id'=>$chat_id,
 'text'=>"يجب تفعيل البوت في المجموعة قم بإرسال كلمة { • تفعيل • } لتفعيل البوت",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
 }
}
}
if( $text =="قفل التحقق"){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer) or in_array($from_id,$carlos) or in_array($from_id,$nazar) or in_array($from_id,$eri)) {$add = $settings["information"]["added"];
if ($add == true) {
 bot('sendmessage',[
 'chat_id'=>$chat_id,
 'text'=>"✵⁞ بواسطة ⋙ [$first_name](tg://user?id=$from_id)
⌯⁞  تم قفل التحقق بنجاح
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
 file_put_contents('id.txt',✘);
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
bot('sendmessage',[
 'chat_id'=>$chat_id,
 'text'=>"يجب تفعيل البوت في المجموعة قم بإرسال كلمة { • تفعيل • } لتفعيل البوت",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);}}
}

$token = API_KEY;
$mustafa = json_decode(file_get_contents("data/$chat_id.json"),true);
$cei = $update->edited_message->chat->id;
$cfi = $update->edited_message->from->id;
$stn = json_decode(file_get_contents("https://api.telegram.org/bot$API_KEY/getChatMember?chat_id=$chat_id&user_id=".$from_id),true);
$runk = $stn['result']['status'];
$result = json_decode(file_get_contents("https://api.telegram.org/bot$API_KEY/getChatMember?chat_id=$cei&user_id=".$cfi),true);
$result_admin = $result['result']['status'];
mkdir("data");
if($mustafa == null ){
$mustafa = '{"lock": {"put": "مفتوح"}}';
$mustafa = json_decode($mustafa,true);
file_put_contents("data/$chat_id.json",$mustafa);
}
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer) or in_array($from_id,$carlos) or in_array($from_id,$nazar) or in_array($from_id,$eri)) {
if ($text == "قفل الدخول" ) {
bot('sendMessage',[
     'chat_id'=>$chat_id,
     'text'=>"✵⁞ بواسطة ⋙ [$first_name](tg://user?id=$from_id)
⌯⁞  تم قفل الدخول بنجاح
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
]);
$mustafa["lock"]["put"]="مقفول️";
file_put_contents("data/$chat_id.json",json_encode($mustafa,true));
}
}
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer) or in_array($from_id,$carlos) or in_array($from_id,$nazar) or in_array($from_id,$eri)) {
if ($text == "فتح الدخول"  ) {
bot('sendMessage',[
     'chat_id'=>$chat_id,
     'text'=>"✵⁞ بواسطة ⋙ [$first_name](tg://user?id=$from_id)
⌯⁞  تم فتح الدخول بنجاح
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
]);
$mustafa["lock"]["put"]="مفتوح";
file_put_contents("data/$chat_id.json",json_encode($mustafa,true));
}
}
if($mustafa["lock"]["put"] == "مقفول️"){
if($update->message->new_chat_member){
 bot('kickChatMember',[
'chat_id'=>$chat_id,
'user_id'=>$update->message->new_chat_member->id
]);
}
}

$set = file_get_contents("SudoOrders/set.txt");
$setch = file_get_contents("SudoOrders/setch.txt");
if(in_array($from_id,$Dev)){
if ($text == "تغيير الاشتراك الاجباري" or $text == "تعيين الاشتراك الاجباري" or $text == "تغيير قناة الاشتراك" or $text == "تعيين قناة الاشتراك"){
file_put_contents("SudoOrders/set.txt","setch");
bot("sendMessage",["chat_id"=>$chat_id,"text"=>"
*⌯⁞ قم بأرسال معرف القناة بدون @*\n",'parse_mode'=>"MARKDOWN",'reply_to_message_id'=>$message_id,]);}
if($text && $set =="setch" and in_array($from_id,$Dev)){
file_put_contents("SudoOrders/setch.txt",$text); 
file_put_contents("SudoOrders/set.txt","");
bot("sendmessage",["chat_id"=>$chat_id,"text"=>"
⌯⁞ تم حفظ معرف القناة بنجاح\n قم برفعي ادمن في القناة\n ثم ارسل تفعيل الاشتراك الاجباري",'parse_mode'=>"MARKDOWN",'reply_to_message_id'=>$message_id,]);}}

if(in_array($from_id,$Dev)){
if($text == "مسح قناة الاشتراك" or $text == "حذف قناة الاشتراك"){
file_put_contents("SudoOrders/setch.txt","");
bot("sendMessage",["chat_id"=>$chat_id,"text"=>"⌯⁞ تم حذف قناة الاشتراك الاجباري",'parse_mode'=>"MARKDOWN",'reply_to_message_id'=>$message_id,]);}

if($text == "جلب قناة الاشتراك" or $text == "قناة الاشتراك" or $text == "الاشتراك الاجباري" or $text == "قناة الاشتراك الاجباري"){
bot("sendMessage",["chat_id"=>$chat_id,"text"=>"⌯⁞ مرحبا بك اليك قناة الاشتراك - @$setch",'parse_mode'=>"MARKDOWN",'reply_to_message_id'=>$message_id,]);}
}

mkdir("data");
mkdir("data/addrd");
$opption = file_get_contents("data/addrd/$chat_id/opption.txt");
$get_from_id = file_get_contents("data/addrd/$chat_id/from_id.txt");
$get_rd = file_get_contents("data/addrd/$chat_id/getrd.txt");
$opption_ = file_get_contents("data/addrd/opption.txt");
$get_from_id1_ = file_get_contents("data/addrd/from_id.txt");
$I_get_rd = file_get_contents("data/addrd/getrd.txt");
$get_from_id_1 = explode("\n",$get_from_id1_);
$get_from_id_ = explode("\n",$get_from_id);
if($status == "creator" || $status == "administrator" || in_array($from_id,$Dev) || in_array($from_id,$useradmin) || in_array($from_id,$getCCmember) ) {
if($text == "اضف رد"){
mkdir("data/addrd/$chat_id");
mkdir("data/addrd/$chat_id/media");
mkdir("data/addrd/$chat_id/media/sticker");
mkdir("data/addrd/$chat_id/media/video");
mkdir("data/addrd/$chat_id/media/videonote");
mkdir("data/addrd/$chat_id/media/document");
mkdir("data/addrd/$chat_id/media/photo");
mkdir("data/addrd/$chat_id/media/audio");
mkdir("data/addrd/$chat_id/media/contact");
file_put_contents("data/addrd/$chat_id/from_id.txt",$from_id);
file_put_contents("data/addrd/$chat_id/opption.txt","GG1ZZ");
bot("SendMessage",[
"chat_id"=>$chat_id,
"text"=>"
✵⁞ العضو ⋙ [$first_name](tg://user?id=$from_id)  
⌯⁞ حسننا , الان ارسل كلمه الرد ✓
",'parse_mode'=>"MARKDOWN",
 'reply_to_message_id'=>$message->message_id, 
 ]);
 }
 if($text and in_array($from_id,$get_from_id_) and $opption == "GG1ZZ"){
 file_put_contents("data/addrd/$chat_id/opption.txt","IBADLZ");
file_put_contents("data/addrd/$chat_id/mod.txt",$text);
file_put_contents("data/addrd/$chat_id/media/media.txt",$text);
file_put_contents("data/addrd/$chat_id/getrd.txt", "- ". $text . "\n" , FILE_APPEND);
 bot("SendMessage",[
 "chat_id"=>$chat_id,
 "text"=>"✵⁞ جيد , يمكنك الان ارسال جواب الرد 
⌯⁞ نص,صوره,فيديو,متحركه,بصمه,اغنيه ✓
",'parse_mode'=>"MARKDOWN",
 'reply_to_message_id'=>$message->message_id, 
 ]);
 }
 if($message and in_array($from_id,$get_from_id_) and $opption == "IBADLZ"){
file_put_contents("data/addrd/$chat_id/opption.txt","");
$IB_3ADLZ = file_get_contents("data/addrd/$chat_id/mod.txt");
$IB_4ADLZ = file_get_contents("data/addrd/$chat_id/media/media.txt");

$IB_2ADLZ = fopen("data/addrd/$chat_id/mod.txt", "a") or die("Unable to open file!"); 
fwrite($IB_2ADLZ, "$IB_3ADLZ\n");
fclose($IB_2ADLZ);

$IB_5ADLZ = fopen("data/addrd/$chat_id/media/media.txt", "a") or die("Unable to open file!"); 
fwrite($IB_5ADLZ, "$IB_4ADLZ\n");
fclose($IB_5ADLZ);

file_put_contents("data/addrd/$chat_id/$IB_3ADLZ.txt",$text);
file_put_contents("data/addrd/$chat_id/mod.txt","");
file_put_contents("data/addrd/$chat_id/media/media.txt","");
file_put_contents("data/addrd/$chat_id/media/$IB_4ADLZ.txt",$message->voice->file_id);
file_put_contents("data/addrd/$chat_id/media/sticker/$IB_4ADLZ.txt",$message->sticker->file_id );
file_put_contents("data/addrd/$chat_id/media/document/$IB_4ADLZ.txt",$message->document->file_id);
file_put_contents("data/addrd/$chat_id/media/videonote/$IB_4ADLZ.txt",$message->video_note->file_id);
file_put_contents("data/addrd/$chat_id/media/contact/$IB_4ADLZ.txt",$message->contact->phone_number);
file_put_contents("data/addrd/$chat_id/media/video/$IB_4ADLZ.txt",$message->video->file_id);
file_put_contents("data/addrd/$chat_id/media/photo/$IB_4ADLZ.txt",$message->photo[0]->file_id);
file_put_contents("data/addrd/$chat_id/media/audio/$IB_4ADLZ.txt",$message->audio->file_id );
 bot("SendMessage",[
 "chat_id"=>$chat_id,
 "text"=>"✵⁞ العضو ⋙ [$first_name](tg://user?id=$from_id)  
⌯⁞ تم اضافة الرد بنجاح  ✓
",'parse_mode'=>"markdown",
 'reply_to_message_id'=>$message->message_id, 
 ]);
 }
 
 if($text == "مسح رد"){
 file_put_contents("data/addrd/$chat_id/from_id.txt",$from_id);
 file_put_contents("data/addrd/$chat_id/opption.txt","delete");
 bot("SendMessage",[
 "chat_id"=>$chat_id,
 "text"=>"✵⁞ حسننا عزيزي ⋙ [$first_name](tg://user?id=$from_id)
⌯⁞ الان ارسل الرد ليتم مسحه من المجموعة",
 'parse_mode'=>"markdown",
 'reply_to_message_id'=>$message->message_id, 
 ]);
 }
 
 if(file_exists("data/addrd/$chat_id/$text.txt") and in_array($from_id,$get_from_id_) and $opption == "delete"){
 $str = str_replace("- $text","",$get_rd);
file_put_contents("data/addrd/$chat_id/getrd.txt",$str);
file_put_contents("data/addrd/$chat_id/from_id.txt","");
file_put_contents("data/addrd/$chat_id/opption.txt","");
 unlink("data/addrd/$chat_id/$text.txt");
unlink("data/addrd/$chat_id/media/$text.txt");
unlink("data/addrd/$chat_id/media/sticker/$text.txt");
unlink("data/addrd/$chat_id/media/video/$text.txt");
unlink("data/addrd/$chat_id/media/videonote/$text.txt");
unlink("data/addrd/$chat_id/media/document/$text.txt");
unlink("data/addrd/$chat_id/media/photo/$text.txt");
unlink("data/addrd/$chat_id/media/audio/$text.txt");
unlink("data/addrd/$chat_id/media/contact/$text.txt");
 bot("SendMessage",[
 "chat_id"=>$chat_id,
 "text"=>"✵⁞ حسننا عزيزي ⋙ [$first_name](tg://user?id=$from_id)
⌯⁞ تم مسح الرد بنجاح 
",'parse_mode'=>"markdown",
 'reply_to_message_id'=>$message->message_id, 
 ]);
 }
elseif(!file_exists("data/addrd/$chat_id/$text.txt") and in_array($from_id,$get_from_id_) and $opption == "delete"){
file_put_contents("data/addrd/$chat_id/from_id.txt","");
 file_put_contents("data/addrd/$chat_id/opption.txt","");
 bot("SendMessage",[
 "chat_id"=>$chat_id,
 "text"=>"✵⁞ هذا الرد ليس مضاف في قائمة الردود ",
 'parse_mode'=>"markdown",
 'reply_to_message_id'=>$message->message_id, 
 ]);
 }

if($text == "مسح الردود"){
$links = __DIR__ . "/data/addrd/$chat_id";
$media = __DIR__ . "/data/addrd/$chat_id/media";
$media_contact = __DIR__ . "/data/addrd/$chat_id/media/contact";
$media_document = __DIR__ . "/data/addrd/$chat_id/media/document";
$media_video = __DIR__ . "/data/addrd/$chat_id/media/video";
$media_videonote = __DIR__ . "/data/addrd/$chat_id/media/videonote";
$media_photo = __DIR__ . "/data/addrd/$chat_id/media/photo";
$media_sticker = __DIR__ . "/data/addrd/$chat_id/media/sticker";
$media_audio = __DIR__ . "/data/addrd/$chat_id/media/audio";
$files = scandir($links);
$files_media = scandir($media);
$files_media_contact = scandir($media_contact);
$files_media_document = scandir($media_document);
$files_media_video = scandir($media_video);
$files_media_videonote = scandir($media_videonote);
$files_media_photo = scandir($media_photo);
$files_media_sticker = scandir($media_sticker);
$files_media_audio = scandir($media_audio);

foreach ($files as $file) {
if(is_file($links . "/" . $file)){
unlink ($links . "/" .$file);
}
}
foreach ($files_media as $filemedia) {
if(is_file($media . "/" . $filemedia)){
unlink ($media . "/" .$filemedia);
}
}
foreach ($files_media_contact as $file_media_contact) {
if(is_file($media_contact . "/" . $file_media_contact)){
unlink ($media_contact . "/" .$file_media_contact);
}
}
foreach ($files_media_document as $file_media_document) {
if(is_file($media_document . "/" . $file_media_document)){
unlink ($media_document . "/" .$file_media_document);
}
}
foreach ($files_media_video as $file_media_video) {
if(is_file($media_video . "/" . $file_media_video)){
unlink ($media_video . "/" .$file_media_video);
}
}
foreach ($files_media_videonote as $file_media_videonote) {
if(is_file($media_videonote . "/" . $file_media_videonote)){
unlink ($media_videonote . "/" .$file_media_videonote);
}
}
foreach ($files_media_photo as $file_media_photo) {
if(is_file($media_photo . "/" . $file_media_photo)){
unlink ($media_photo . "/" .$file_media_photo);
}
}
foreach ($files_media_sticker as $file_media_sticker) {
if(is_file($media_sticker . "/" . $file_media_sticker)){
unlink ($media_sticker . "/" . $file_media_sticker);
}
}
foreach ($files_media_audio as $file_media_audio) {
if(is_file($media_audio . "/" . $file_media_audio)){
unlink ($media_audio . "/" . $file_media_audio);
}
}
bot("SendMessage",[
'chat_id'=>$chat_id,
'text'=>"✵⁞ عزيزي ⋙ [$first_name](tg://user?id=$from_id)  
⌯⁞ تم مسح كل الردود ✓
",'parse_mode'=>"markdown",
'reply_to_message_id'=>$message->message_id,
]);
file_put_contents("data/addrd/$chat_id/getrd.txt", "");
}

if($text == "الردود" and $get_rd != NULL and $get_rd != "" and $get_rd != " " and $get_rd != "\n\n" and $get_rd != "\n" and $get_rd != "\n\n\n" and $get_rd != "\n\n\n\n" and $get_rd != "\n\n\n\n\n" and $get_rd != "\n\n\n\n\n\n"){
bot("SendMessage",[
'chat_id'=>$chat_id,
'text'=>"✵⁞ الردود المضافة في المجموعة
$get_rd

➖
",'parse_mode'=>"markdown",
'reply_to_message_id'=>$message->message_id,
]);
}
if($text == "الردود" and $get_rd == NULL || $get_rd == "" || $get_rd == " " || $get_rd == "\n\n" || $get_rd == "\n" || $get_rd == "\n\n\n" || $get_rd == "\n\n\n\n" || $get_rd == "\n\n\n\n\n" || $get_rd == "\n\n\n\n\n\n"){
bot("SendMessage",[
'chat_id'=>$chat_id,
'text'=>"⌯⁞ لا يوجد ردود مضافة حاليا ❕",
'parse_mode'=>"markdown",
'reply_to_message_id'=>$message->message_id,
]);
}
}
if(in_array($from_id,$Dev) or in_array($from_id,$developer)){
if ($text == "⌯ اضف رد عام" and in_array($from_id,$Dev)){
mkdir("data/addrd/media");
mkdir("data/addrd/$chat_id/media");
mkdir("data/addrd/media/sticker");
mkdir("data/addrd/media/video");
mkdir("data/addrd/media/videonote");
mkdir("data/addrd/media/document");
mkdir("data/addrd/media/photo");
mkdir("data/addrd/media/audio");
mkdir("data/addrd/media/contact");
 file_put_contents("data/addrd/from_id.txt",$from_id);
 file_put_contents("data/addrd/opption.txt","I_GG1ZZ");
 bot("SendMessage",[
 "chat_id"=>$chat_id,
 "text"=>"
✵⁞ العضو ⋙ [$first_name](tg://user?id=$from_id)  
⌯⁞ حسننا , الان ارسل كلمه الرد ✓
",'parse_mode'=>"MARKDOWN",
 'reply_to_message_id'=>$message->message_id, 
 ]);
 }
 if($text and in_array($from_id,$get_from_id_1) and $opption_ == "I_GG1ZZ"){
 file_put_contents("data/addrd/opption.txt","I_BADLZ");
 file_put_contents("data/addrd/mod.txt",$text);
 file_put_contents("data/addrd/media/media.txt",$text);
 file_put_contents("data/addrd/getrd.txt", "- ". $text . "\n" , FILE_APPEND);
 bot("SendMessage",[
 "chat_id"=>$chat_id,
 "text"=>"
✵⁞ جيد , يمكنك الان ارسال جواب الرد 
⌯⁞ نص,صوره,فيديو,متحركه,بصمه,اغنيه ✓
",'parse_mode'=>"MARKDOWN",
 'reply_to_message_id'=>$message->message_id, 
 ]);
 }
$message = $update->message;
if($message and in_array($from_id,$get_from_id_1) and $opption_ == "I_BADLZ"){
file_put_contents("data/addrd/opption.txt","");
$IB_3ADLZ = file_get_contents("data/addrd/mod.txt");
$IB_4ADLZ = file_get_contents("data/addrd/media/media.txt");
$IB_2ADLZ = fopen("data/addrd/mod.txt", "a") or die("Unable to open file!"); 
fwrite($IB_2ADLZ, "$IB_3ADLZ\n");
fclose($IB_2ADLZ);
$IB_5ADLZ = fopen("data/addrd/media/media.txt", "a") or die("Unable to open file!"); 
fwrite($IB_5ADLZ, "$IB_4ADLZ\n");
fclose($IB_5ADLZ);
file_put_contents("data/addrd/$IB_3ADLZ.txt",$text);
file_put_contents("data/addrd/mod.txt","");
file_put_contents("data/addrd/media/media.txt","");
file_put_contents("data/addrd/media/$IB_4ADLZ.txt",$message->voice->file_id);
file_put_contents("data/addrd/media/sticker/$IB_4ADLZ.txt",$message->sticker->file_id );
file_put_contents("data/addrd/media/document/$IB_4ADLZ.txt",$message->document->file_id);
file_put_contents("data/addrd/media/videonote/$IB_4ADLZ.txt",$message->video_note->file_id);
file_put_contents("data/addrd/media/contact/$IB_4ADLZ.txt",$message->contact->phone_number);
file_put_contents("data/addrd/media/video/$IB_4ADLZ.txt",$message->video->file_id);
file_put_contents("data/addrd/media/photo/$IB_4ADLZ.txt",$message->photo[0]->file_id);
file_put_contents("data/addrd/media/audio/$IB_4ADLZ.txt",$message->audio->file_id );
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"⌯⁞ تم اضافة الرد بنجاح ✓
",
'reply_to_message_id'=>$message->message_id, 
]);
}
if(in_array($from_id,$Dev) or in_array($from_id,$developer)){
 if ($text == "⌯ مسح رد عام" and in_array($from_id,$Dev)){
 file_put_contents("data/addrd/from_id.txt",$from_id);
 file_put_contents("data/addrd/opption.txt","I_delete");
 bot("SendMessage",[
 "chat_id"=>$chat_id,
 "text"=>"✵⁞ حسننا عزيزي ⋙ [$first_name](tg://user?id=$from_id)
⌯⁞ الان ارسل الرد ليتم مسحه من المجموعات
",'parse_mode'=>"markdown",
'reply_to_message_id'=>$message->message_id, 
]);
}
}
if(file_exists("data/addrd/$text.txt") and in_array($from_id,$get_from_id_1) and $opption_ == "I_delete"){
$str = str_replace("- $text","",$I_get_rd);
file_put_contents("data/addrd/getrd.txt",$str);
file_put_contents("data/addrd/from_id.txt","");
file_put_contents("data/addrd/opption.txt","");
unlink("data/addrd/$text.txt");
unlink("data/addrd/media/$text.txt");
unlink("data/addrd/media/sticker/$text.txt");
unlink("data/addrd/media/video/$text.txt");
unlink("data/addrd/media/videonote/$text.txt");
unlink("data/addrd/media/document/$text.txt");
unlink("data/addrd/media/photo/$text.txt");
unlink("data/addrd/media/audio/$text.txt");
unlink("data/addrd/media/contact/$text.txt");
 bot("SendMessage",[
 "chat_id"=>$chat_id,
 "text"=>"($text)
✵⁞ حسننا عزيزي ⋙ [$first_name](tg://user?id=$from_id)
⌯⁞ تم مسح الرد بنجاح",
 'parse_mode'=>"markdown",
 'reply_to_message_id'=>$message->message_id, 
 ]);
 }
elseif(!file_exists("data/addrd/$text.txt") and in_array($from_id,$get_from_id_1) and $opption_ == "I_delete"){
file_put_contents("data/addrd/from_id.txt","");
 file_put_contents("data/addrd/opption.txt","");
 bot("SendMessage",[
 "chat_id"=>$chat_id,
 "text"=>"✵⁞ لا يوجد ردود مضافه حاليا ",
 'parse_mode'=>"markdown",
 'reply_to_message_id'=>$message->message_id, 
 ]);
 }
 
if(in_array($from_id,$Dev) or in_array($from_id,$developer)){
 if($text == "⌯ مسح الردود العامة" || $text == "مسح الردود العامة"){
$links = __DIR__ . "/data/addrd";
$media = __DIR__ . "/data/addrd/media";
$media_contact = __DIR__ . "/data/addrd/media/contact";
$media_document = __DIR__ . "/data/addrd/media/document";
$media_video = __DIR__ . "/data/addrd/media/video";
$media_videonote = __DIR__ . "/data/addrd/media/videonote";
$media_photo = __DIR__ . "/data/addrd/media/photo";
$media_sticker = __DIR__ . "/data/addrd/media/sticker";
$media_audio = __DIR__ . "/data/addrd/media/audio";
$files = scandir($links);
$files_media = scandir($media);
$files_media_contact = scandir($media_contact);
$files_media_document = scandir($media_document);
$files_media_video = scandir($media_video);
$files_media_videonote = scandir($media_videonote);
$files_media_photo = scandir($media_photo);
$files_media_sticker = scandir($media_sticker);
$files_media_audio = scandir($media_audio);
foreach ($files as $file) {
if(is_file($links . "/" . $file)){
unlink ($links . "/" .$file);
}
}
foreach ($files_media as $filemedia) {
if(is_file($media . "/" . $filemedia)){
unlink ($media . "/" .$filemedia);
}
}
foreach ($files_media_contact as $file_media_contact) {
if(is_file($media_contact . "/" . $file_media_contact)){
unlink ($media_contact . "/" .$file_media_contact);
}
}
foreach ($files_media_document as $file_media_document) {
if(is_file($media_document . "/" . $file_media_document)){
unlink ($media_document . "/" .$file_media_document);
}
}
foreach ($files_media_video as $file_media_video) {
if(is_file($media_video . "/" . $file_media_video)){
unlink ($media_video . "/" .$file_media_video);
}
}
foreach ($files_media_videonote as $file_media_videonote) {
if(is_file($media_videonote . "/" . $file_media_videonote)){
unlink ($media_videonote . "/" .$file_media_videonote);
}
}
foreach ($files_media_photo as $file_media_photo) {
if(is_file($media_photo . "/" . $file_media_photo)){
unlink ($media_photo . "/" .$file_media_photo);
}
}
foreach ($files_media_sticker as $file_media_sticker) {
if(is_file($media_sticker . "/" . $file_media_sticker)){
unlink ($media_sticker . "/" . $file_media_sticker);
}
}
foreach ($files_media_audio as $file_media_audio) {
if(is_file($media_audio . "/" . $file_media_audio)){
unlink ($media_audio . "/" . $file_media_audio);
}
}
bot("SendMessage",[
'chat_id'=>$chat_id,
'text'=>"
✵⁞ عزيزي ⋙ [$first_name](tg://user?id=$from_id)  
⌯⁞ تم مسح كل الردود  ✓",
'parse_mode'=>"markdown",
'reply_to_message_id'=>$message->message_id,
]);
file_put_contents("data/addrd/getrd.txt", "");
}
}

if(in_array($from_id,$Dev) or in_array($from_id,$developer)){
if ($text == "الردود العامة 📂" and $I_get_rd != NULL and $I_get_rd != "" and $I_get_rd != " " and $I_get_rd != "\n\n" and $I_get_rd != "\n" and $I_get_rd != "\n\n\n" and $I_get_rd != "\n\n\n\n" and $I_get_rd != "\n\n\n\n\n" and $I_get_rd != "\n\n\n\n\n\n"){
bot("SendMessage",[
'chat_id'=>$chat_id,
'text'=>"✵⁞ الردود العامه المضافه في البوت

$I_get_rd

➖➖➖",
'parse_mode'=>"markdown",
'reply_to_message_id'=>$message->message_id,
]);
}
}

if(in_array($from_id,$Dev) or in_array($from_id,$developer)){
if ($text == "⌯ الردود العامة" and $I_get_rd == NULL || $I_get_rd == "" || $I_get_rd == " " || $I_get_rd == "\n\n" || $I_get_rd == "\n" || $I_get_rd == "\n\n\n" || $I_get_rd == "\n\n\n\n" || $I_get_rd == "\n\n\n\n\n" || $I_get_rd == "\n\n\n\n\n\n"){
bot("SendMessage",[
'chat_id'=>$chat_id,
'text'=>"✵⁞ لا يوجد ردود مضافه حاليا ❕*",
'parse_mode'=>"markdown",
'reply_to_message_id'=>$message->message_id,
]);
}
}
}
 //♥
 if($settings["lock"]["rdodsg"] == "مقفول"){
 if($message->text and file_exists("data/addrd/$chat_id/$text.txt")) {
    $MoStaFa = file_get_contents("data/addrd/$chat_id/$text.txt");
   bot('SendMessage',[
    'chat_id'=>$chat_id,
    'text'=>$MoStaFa,
    'parse_mode'=>"html",
    'disable_web_page_preview'=>true,
    'reply_to_message_id'=>$message->message_id,
 ]);
 }}
  if($settings["lock"]["rdodsg"] == "مقفول"){
 if($message->text and file_exists("data/addrd/$chat_id/media/$text.txt")) {
  $MoStaFa = file_get_contents("data/addrd/$chat_id/media/$text.txt");
   bot('Sendvoice',[
    'chat_id'=>$chat_id,
    'voice'=>$MoStaFa,
    'reply_to_message_id'=>$message->message_id,
 ]);
 }}
  if($settings["lock"]["rdodsg"] == "مقفول"){
 if($message->text and file_exists("data/addrd/$chat_id/media/audio/$text.txt")) {
  $MoStaFa = file_get_contents("data/addrd/$chat_id/media/audio/$text.txt");
 bot('SendAudio',[
    'chat_id'=>$chat_id,
    'audio'=>$MoStaFa,
    'reply_to_message_id'=>$message->message_id,
 ]);
 }}
  if($settings["lock"]["rdodsg"] == "مقفول"){
 if($message->text and file_exists("data/addrd/$chat_id/media/sticker/$text.txt")) {
  $MoStaFa = file_get_contents("data/addrd/$chat_id/media/sticker/$text.txt");
 bot('sendsticker',[
'chat_id'=>$chat_id,
'sticker'=>$MoStaFa,
'reply_to_message_id'=>$message->message_id,
]);
}}
 if($settings["lock"]["rdodsg"] == "مقفول"){
if($message->text and file_exists("data/addrd/$chat_id/media/video/$text.txt")) {
  $MoStaFa = file_get_contents("data/addrd/$chat_id/media/video/$text.txt");
bot('Sendvideo',[
'chat_id'=>$chat_id,
'video'=>$MoStaFa,
'caption'=>$message->caption,
'reply_to_message_id'=>$message->message_id,
]);
}}
 if($settings["lock"]["rdodsg"] == "مقفول"){
if($message->text and file_exists("data/addrd/$chat_id/media/photo/$text.txt")) {
  $MoStaFa = file_get_contents("data/addrd/$chat_id/media/photo/$text.txt");
bot('Sendphoto',[
'chat_id'=>$chat_id,
'photo'=>$MoStaFa,
'caption'=>$message->caption,
'reply_to_message_id'=>$message->message_id,
]);
}}
 if($settings["lock"]["rdodsg"] == "مقفول"){
if($message->text and file_exists("data/addrd/$chat_id/media/videonote/$text.txt")) {
  $MoStaFa = file_get_contents("data/addrd/$chat_id/media/videonote/$text.txt");
 bot('Sendvideonote',[
'chat_id'=>$chat_id,
'video_note'=>$MoStaFa,
'reply_to_message_id'=>$message->message_id,
]);
}}
 if($settings["lock"]["rdodsg"] == "مقفول"){
if($message->text and file_exists("data/addrd/$chat_id/media/document/$text.txt")) {
  $MoStaFa = file_get_contents("data/addrd/$chat_id/media/document/$text.txt");
 bot('SendDocument',[
'chat_id'=>$chat_id,
'document'=>$MoStaFa,
'reply_to_message_id'=>$message->message_id,
]);
}}
 if($settings["lock"]["rdodsg"] == "مقفول"){
if($message->text and file_exists("data/addrd/$chat_id/media/contact/$text.txt")) {
 $MoStaFa = file_get_contents("data/addrd/$chat_id/media/contact/$text.txt");
bot('SendContact',[
'chat_id'=>$chat_id,
'phone_number'=>$MoStaFa,
'first_name'=>$message->from->first_name,
'last_name'=>$message->from->last_name,
'reply_to_message_id'=>$message->message_id,
]);
 }
}

$kdeveloper = file_get_contents("kdevelopers.txt");
$kdevelopers = file_get_contents("kdeveloper.txt");
if ($text == "⌯ تغير كليشة مطور" and in_array($from_id,$Dev)){
file_put_contents("kdevelopers.txt","namdev");
bot("sendMessage",[
"chat_id"=>$chat_id,
"text"=>"✵⁞ حسننا عزيزي المطور،
✵⁞ الان ارسل كليشة المطور
√",'parse_mode'=>"MARKDOWN",
 'reply_to_message_id'=>$message_id
,]);}
if($text && $kdeveloper =="namdev" and in_array($from_id,$Dev)){
file_put_contents("kdeveloper.txt",$text); 
file_put_contents("kdevelopers.txt","");
bot("sendmessage",[
"chat_id"=>$chat_id,
"text" => "✵⁞ حسننا عزيزي المطور،
✵⁞ تم حفظ  كليشة المطور الخاصه فيك
 -",'parse_mode'=>"MARKDOWN",
 'reply_to_message_id'=>$message_id
,]);}
if($text == "المطور" ){
if ($tc == 'group' | $tc == 'supergroup'){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"$kdevelopers",
'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
 'reply_to_message_id'=>$message_id,
]);}}

if($text =="⌯ تعطيل الاشتراك الاجباري"){
if (in_array($from_id,$Dev)){
bot('sendmessage',['chat_id'=>$chat_id,'text'=>"✵⁞ تم تعطيل الاشتراك الاجباري",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,]);
file_put_contents("SudoOrders/setchannel.txt","الاشتراك الاجباري معطل");}}

if($text =="⌯ تفعيل الاشتراك الاجباري"){
if (in_array($from_id,$Dev)){
bot('sendmessage',['chat_id'=>$chat_id,'text'=>"✵⁞ تم تفعيل الاشتراك الاجباري",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,]);
file_put_contents("SudoOrders/setchannel.txt","الاشتراك الاجباري مفعل");}}

if($text == "العاب"){ 
$lockgamess = $settings["lock"]["gamess"];
if($settings["lock"]["game"] == "مفتوح"){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
 ✵⁞ اهلا بك في قائمة الالعاب للبوت 
ـ┉  ┉  ┉  ┉  ┉  ┉  ┉  ┉
✵⁞ هناك 19 العاب تستطيع اللعب بها،
✵⁞ لتفعيل الالعاب او تعطيلها ارسل،
✵⁞ تفعيل  • تعطيل •  الالعاب،
ـ➖➖➖➖➖➖➖
✶ للاستفسار↫ ❪ @$buy ❫
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>"ᴄᴀʀʟᴏѕ ᴛᴇᴀᴍ",'url'=>'https://t.me/QO8_Q']],
[['text'=>  "لعبة فلابي بيرد 🐥"  ,'url'=>'https://t.me/awesomebot?game=FlappyBird'],['text'=>"تحداني فالرياضيات 🔢",'url'=>'https://t.me/gamebot?game=MathBattle']],
[['text'=>"تحداني في ❌⭕️",'url'=>'t.me/Xo_motazbot?start3836619']],
[['text'=>"سباق الدراجات 🏍",'url'=>'https://t.me/gamee?game=MotoFX'],['text'=>"سباق سيارات 🏎",'url'=>'https://t.me/gamee?game=F1Racer']],
[['text'=>"متشابه 👾",'url'=>'https://t.me/gamee?game=DiamondRows']],
[['text'=>"كرة قدم ⚽",'url'=>'https://t.me/gamee?game=FootballStar'],['text'=>"دومنا🥇",'url'=>'https://vipgames.com/play/?affiliateId=wpDom/#/games/domino/lobby']],
[['text'=>"❕ليدو",'url'=>'https://vipgames.com/play/?affiliateId=wpVG#/games/ludo/lobby']],
[['text'=>"ورق🤹‍♂",'url'=>'https://t.me/gamee?game=Hexonix'],['text'=>"Hexonix❌",'url'=>'https://t.me/gamee?game=Hexonix']],
[['text'=>"MotoFx🏍️",'url'=>'https://t.me/gamee?game=MotoFx']],
[['text'=>"لعبة 2048 🎰",'url'=>'https://t.me/awesomebot?game=g2048'],['text'=>"Squares🏁",'url'=>'https://t.me/gamee?game=Squares']],
[['text'=>"Atomic 1▶️",'url'=>'https://t.me/gamee?game=AtomicDrop1']],
[['text'=>"Corsairs",'url'=>'https://t.me/gamebot?game=Corsairs'],['text'=>"LumberJack",'url'=>'https://t.me/gamebot?game=LumberJack']],
[['text'=>"LittlePlane",'url'=>'https://t.me/gamee?game=LittlePlane'],['text'=>"RollerDisco",'url'=>'https://t.me/gamee?game=RollerDisco']],
]
])
]);
}
}
if($text == "الالعاب" || $text == "قائمه الالعاب"){
$lockgamess = $settings["lock"]["gamess"];
if($settings["lock"]["game"] == "مفتوح"){
bot("SendMessage",[
'chat_id'=>$chat_id,
'text'=>"
✵⁞ اهلا بك في قائمة الالعاب للبوت
ـ┉  ┉  ┉  ┉  ┉  ┉  ┉  ┉
✵⁞ هناك 10 العاب تستطيع اللعب بها،
✵⁞ لتفعيل الالعاب او تعطيلها ارسل،
✵⁞ تفعيل  • تعطيل •  الالعاب،
┉  ┉  ┉  ┉  ┉  ┉  ┉  ┉
✵⁞  الاسرع  اسـرع واحد 
✵⁞  معاني  معاني السمايلات
✵⁞  ترتيب  ترتيب الكلمات 
✵⁞  رياضيات  لعبة احصاء
✵⁞  الاسئله  اسئله عامه 
✵⁞ امثله  لعبه امثله قديمه 
✵⁞   المختلف  تشابه واختلاف 
✵⁞  سمايلات  لعبة سمايلات
✵⁞   تخمين  لعبة تخمين ارقام
✵⁞  العكس  لعبة عكس الكلمات

ـ➖➖➖➖➖➖➖
✶ للاستفسار↫❪ @$buy ❫
",'reply_to_message_id'=>$message->message_id,
]);
}
}
$game = json_decode(file_get_contents('game.json'),true);
$from_user = $message->from->username;
$from_name = $message->from->first_name;
$get_game = file_get_contents("game.txt");
$game1 = explode("\n",$get_game);
$gg1zz = array('اســرع واحد يرتب » { ل ، س ، ا ، ق ، ت ، ب ،ا } «','اســرع واحد يرتب » { ر ، و ، ح ، س } «','اســرع واحد يرتب » { ن ، ف ، ه ، ق } «','اســرع واحد يرتب » { و ، ن ، ي ، ا ، ف } «','اســرع واحد يرتب » { ن ، و ، ه ، ب ، ز } «','اســرع واحد يرتب » { ر ، ك ، و ، س ، ت ، ن ، ا ، ي } «','اســرع واحد يرتب » { ا ، ن ، م ، ل ، ي } «','اســرع واحد يرتب » { و ، ه ، ق ، ه } «','اســرع واحد يرتب » { ف ، ي ، س ، ه ، ن } «','اســرع واحد يرتب » { ج ، ا ، د ، ج ، ه } «','اســرع واحد يرتب » { س ، م ، ر ، د ، ه } «','اســرع واحد يرتب » { ا ، ن ، ا ، و ، ل } «','اســرع واحد يرتب » { ه ، غ ، ف ، ر ، } «','اســرع واحد يرتب » { ج ، ه ، ث ، ل ، ا } «','اســرع واحد يرتب » { خ ، م ، ب ، ط } «');
$get_iBadlz = array_rand($gg1zz, 1);
$fast = array('• اسرع واحد يرسل » { كارلوس }','• اسرع واحد يرسل » { تايكر }','• اسرع واحد يرسل » { رمضان }','• اسرع واحد يرسل » { ارنب }','• اسرع واحد يرسل » { Nazar }','• اسرع واحد يرسل » { حمود }','• اسرع واحد يرسل » { تيم كارلوس }','• اسرع واحد يرسل » { مهند }','• اسرع واحد يرسل » { سورس كارلوس }','• اسرع واحد يرسل » { ءبوايهاب }','• اسرع واحد يرسل » { الاحواز }','• اسرع واحد يرسل » { الاحوازي }','• اسرع واحد يرسل » { العراق }','• اسرع واحد يرسل » { سعوديه }');
$faster = array_rand($fast, 1);
$mthal = array('• اكمل المثل التالي ؛👇
• { لكل حالة مقاله ولكل .... برع } •','• اكمل المثل التالي ؛👇
• { عادت .... الى عادتها القديمه } •','• اكمل الحكمة التاليه ؛👇
• { من .... العلى سهر الليالي } •','• اكمل المثل التالي ؛👇
• { مخرب .... الف عمار } •','• اكمل المثل التالي ؛👇
• { من .... لقي } •','• اكمل المثل التالي ؛👇
• { ادخلها من ..... واخرجها من الثانيه } •','• اكمل المثل التالي ؛👇
• { ادق من خيط .... } •','• اكمل المثل التالي ؛👇
• { اذا التقت .... هانت الحقوق } •','•اكمل المثل التالي ؛👇
• { كل .... فيه خير } •',' • اكمل الجمله التالي ؛👇
• { كما تدين .... } •',' • اكمل الجمله التالي ؛👇
• { الصميل خرج من .... } •',' • اكمل المثل التالي ؛👇
• { اللي مايعرف .... يشويه } •',' • اكمل المثل التالي ؛👇
• { الهربات كثير و ..... وحده } •',' • اكمل المثل التالي ؛👇
• { القبيلي .... نفسه } •'
);
$qui1 = array('•| سؤال :/ ماهو اسرع المخلوقات البحريه على الاطلاق؟!','•| سؤال :/ ماهي اقوى انواع الحجارة؟!','•| سؤال :/ ماهي السورة التي ذكر فيها بالعوض؟!','•| سؤال :/ ماهي اول عمله اسلاميه؟!','•| سؤال :/ ماهو الحيوان الذي اذا قطعت احدى اذرعته نمت مره اخرى؟!','•| سؤال :/ ماهو اسرع الحيوان الذي يصاب بالحصبه كالانسان؟!','•| سؤال :/ ماهو العنصر الذي اذا وجد في الحليب اصبح الحليب غذاء كامل؟!','•| سؤال :/ من هو مؤسس علم الجبر؟!','•| سؤال :/ من هو اقوى الحيوانات ذاكرة؟!');
$qui2 = array_rand($qui1,1);
$ope1 = array('
• ماعكس هاذه الكلمه •{ جاوع }•','• ماعكس هاذه الكلمه •{ فارغ }•','• ماعكس هاذه الكلمه •{ سمين }•','• ماعكس هاذه الكلمه •{ بخيل }•','
• ماعكس هاذه الكلمه •{ شجاع }•','
• ماعكس هاذه الكلمه •{ الخوف }•','
• ماعكس هاذه الكلمه •{ عاقل }•','
• ماعكس هاذه الكلمه •{ كن }•','
• ماعكس هاذه الكلمه •{ الذهاب }•','
• ماعكس هاذه الكلمه •{ العودة }•','
• ماعكس هاذه الكلمه •{ مطفئه }•','
• ماعكس هاذه الكلمه •{ الليل }•','
• ماعكس هاذه الكلمه •{ مضلم }•','
• ماعكس هاذه الكلمه •{ حالي }•'
);
$ope2 = array_rand($ope1 ,1);
$mog1 = array('
• ارسل المختلف من الايموجي 👇
{ 😫😫😫😫😩😫😫😫 }','
• ارسل المختلف من الايموجي ??
{ ✌️✌️🤘✌️✌️✌️✌️✌️ }','
• ارسل المختلف من الايموجي 👇
{ ??‍♂🧝‍♂🧝‍♂🧝‍♂🧝‍♀🧝‍♂🧝‍♂🧝‍♂ }','
• ارسل المختلف من الايموجي 👇
{ 😰😰😰😰😥😰😰😰 }','
• ارسل المختلف من الايموجي 👇
{ 💏💏💏👩‍❤️‍💋‍👩💏💏💏💏 }','
• ارسل المختلف من الايموجي 👇
{ 👨‍👦👨‍👧👨‍👦👨‍??👨‍👦👨‍👦👨‍??👨‍👦 }','
• ارسل المختلف من الايموجي 👇
{ ❤️❤️❤️❤️🧡❤️❤️❤️️ }','
• ارسل المختلف من الايموجي 👇
{ 💗💗💗💗💗💗💓💗 }');
$mog2 = array_rand($mog1, 1);
$meen1 = array('
• مامعنى هاذه الكلمه •{ فحط }•','• مامعنى هاذه الكلمه •{ ذهب }•','• مامعنى هاذه الكلمه •{ عاد }•','
• مامعنى هاذه الكلمه •{ يلفظ }•','
• مامعنى هاذه الكلمه •{ خروج }•','
• مامعنى هاذه الكلمه •{ يراعي }•','
• مامعنى هاذه الكلمه •{ ينتظر }•','
• مامعنى هاذه الكلمه •{ مؤمن }•','
• مامعنى هاذه الكلمه •{ مسلم }•','
• مامعنى هاذه الكلمه •{ بيت }•','
• مامعنى هاذه الكلمه •{ محافظة }•','
• مامعنى هاذه الكلمه •{ دولة }•');
$ras = array('113+133-2=??','876+11-9=??','197×2-190=??','44-15+15=??','13+12-13-1+4=??','900000+2-900000=??','5322+1-1=??','21+25-13=??','909+75-5=??','44-1+11=??','532+256=??','6321+4667-10000=??');
$rass = array_rand($ras, 1);
$meen2 = array_rand($meen1, 1);
mkdir("game/$chat_id");
$level = file_get_contents("game/$chat_id/game.txt");
$mthals = array_rand($mthal, 1);
if(in_array($chat_id,$game1) and $text == '244' or $text == '878'or $text == '204'or $text == '44'or $text == '15'or $text == '2' or$text == '5322' or $text == '33' or $text == '979' or $text == '34' or $text == '788' or $text == '988'){
if($level == "gamere"){
$game['game'][$chat_id][$from_id] = ($game['game'][$chat_id][$from_id]+1);
file_put_contents('game.json', json_encode($game));
file_put_contents("game/$chat_id/game.txt","");
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"*⌯⁞ مبروك لقد ربحت نقطه
⌯⁞ اصبح لديك ⋙ { ".$game['game'][$chat_id][$from_id]." } نقطه ??️*",
'parse_mode'=>"MARKDOWN",'reply_to_message_id'=>$message->message_id]);
file_put_contents("game.txt","MMoHaMMeD");
}}
if($text =="امثله" or $text =="امثلة"){
file_put_contents("game/$chat_id/game.txt","gamem");
$lockgamess = $settings["lock"]["gamess"];
if($settings["lock"]["game"] == "مفتوح"){
file_put_contents("game.txt",$chat_id);
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>$mthal[$mthals],
'reply_to_message_id'=>$message->message_id]);
}}
if($text =="رياضيات" or $text =="الرياضيات"){
file_put_contents("game/$chat_id/game.txt","gamere");
$lockgamess = $settings["lock"]["gamess"];
if($settings["lock"]["game"] == "مفتوح"){
file_put_contents("game.txt",$chat_id);
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>$ras[$rass],
'reply_to_message_id'=>$message->message_id]);
}}
if($text =="كلمات" or $text =="الاسرع"){
file_put_contents("game/$chat_id/game.txt","gamew");
$lockgamess = $settings["lock"]["gamess"];
if($settings["lock"]["game"] == "مفتوح"){
file_put_contents("game.txt",$chat_id);
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>$fast[$faster],
'reply_to_message_id'=>$message->message_id]);
}}
if($text =="معاني" or $text =="المعاني"){
file_put_contents("game/$chat_id/game.txt","gamees");
$lockgamess = $settings["lock"]["gamess"];
if($settings["lock"]["game"] == "مفتوح"){
file_put_contents("game.txt",$chat_id);
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>$meen1[$meen2],
'reply_to_message_id'=>$message->message_id]);
}}
if($text =="اسئله" or $text =="الاسئله" or $text == "الاسئلة"){
file_put_contents("game/$chat_id/game.txt","gameq");
$lockgamess = $settings["lock"]["gamess"];
if($settings["lock"]["game"] == "مفتوح"){
file_put_contents("game.txt",$chat_id);
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>$qui1[$qui2],
'reply_to_message_id'=>$message->message_id]);
}}
if($text =="المختلف" or $text =="مختلف"){
file_put_contents("game/$chat_id/game.txt","gamed");
$lockgamess = $settings["lock"]["gamess"];
if($settings["lock"]["game"] == "مفتوح"){
file_put_contents("game.txt",$chat_id);
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>$mog1[$mog2],
'reply_to_message_id'=>$message->message_id]);
}}
if($text =="العكس" or $text =="عكس"){
file_put_contents("game/$chat_id/game.txt","gameo");
$lockgamess = $settings["lock"]["gamess"];
if($settings["lock"]["game"] == "مفتوح"){
file_put_contents("game.txt",$chat_id);
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>$ope1[$ope2],
'reply_to_message_id'=>$message->message_id]);
}}
if($text =="الترتيب" or $text =="ترتيب"){
file_put_contents("game/$chat_id/game.txt","gamet");
$lockgamess = $settings["lock"]["gamess"];
if($settings["lock"]["game"] == "مفتوح"){
file_put_contents("game.txt",$chat_id);
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>$gg1zz[$get_iBadlz],
'reply_to_message_id'=>$message->message_id]);
}}
if(in_array($chat_id,$game1) and $text == 'سحور' or $text == 'سياره'or $text == 'استقبال' or $text == 'قنفه'or $text == 'ايفون' or $text == 'بزونه' or $text == 'مطبخ' or $text == 'كرستيانو' or $text == 'دجاجه' or $text == 'مدرسه' or $text == 'الوان' or $text == 'غرفه' or $text == 'ثلاجه' or $text == 'قهوه' or $text == 'سفينه' or $text == 'اليمن'){
if($level == "gamet"){
$game['game'][$chat_id][$from_id] = ($game['game'][$chat_id][$from_id]+1);
file_put_contents('game.json', json_encode($game));
file_put_contents("game/$chat_id/game.txt","");
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"*⌯⁞ مبروك لقد ربحت نقطه
⌯⁞ اصبح لديك ⋙ { ".$game['game'][$chat_id][$from_id]." } نقطه*",
'parse_mode'=>"MARKDOWN",'reply_to_message_id'=>$message->message_id]);
file_put_contents("game.txt","MMoHaMMeD");
unlink("game");
}}
if(in_array($chat_id,$game1) and $text == "🧝‍♀" or $text == "👩‍❤️‍💋‍👩" or $text == "😩" or $text == "🧡" or $text == " ‍‍‍👨‍👦" or $text == '💓'or $text == '🤘' or $text == '👨' or $text == '😥'){
if($level == "gamed"){
$game['game'][$chat_id][$from_id] = ($game['game'][$chat_id][$from_id]+1);
file_put_contents('game.json', json_encode($game));
file_put_contents("gamess.txt","");
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"*⌯⁞ مبروك لقد ربحت نقطه
⌯⁞ اصبح لديك ⋙ { ".$game['game'][$chat_id][$from_id]." } نقطه*",
'parse_mode'=>"MARKDOWN",'reply_to_message_id'=>$message->message_id]);
file_put_contents("game.txt","MMoHaMMeD");
unlink("game");
}}
if(in_array($chat_id,$game1) and $text == 'ينطق' or $text == 'مغادره'or $text == 'منزل'or $text == 'ينتظر'or $text == 'يراعي'or $text == 'مؤمن' or$text == 'مسلم' or $text == 'دولة' or $text == 'دوله' or $text == 'مدينه' or $text == 'مدينة' or $text == "هرب" or $text == "رجع" or $text == "راح"){
if($level == "gamees"){
$game['game'][$chat_id][$from_id] = ($game['game'][$chat_id][$from_id]+1);
file_put_contents('game.json', json_encode($game));
file_put_contents("gamess.txt","");
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"*⌯⁞ مبروك لقد ربحت نقطه
⌯⁞ اصبح لديك ⋙ { ".$game['game'][$chat_id][$from_id]." } نقطه *",
'parse_mode'=>"MARKDOWN",'reply_to_message_id'=>$message->message_id]);
file_put_contents("game.txt","MMoHaMMeD");
unlink("game");
}}
if(in_array($chat_id,$game1) and $text == 'شابع' or $text == 'ممتلئ'or $text == 'مليان'or $text == 'نحيف'or $text == 'سخي'or $text == 'خائف' or$text == 'الشجاعه' or $text == 'مجنون' or $text == 'لاتكن' or $text == 'الاياب' or $text == 'الإياب' or $text == 'الرجوع' or $text == 'منيره' or $text == 'النهار' or $text == 'منير' or $text == 'مضيئ' or $text == "مالح" or $text == "حامض"){
if($level == "gameo"){
$game['game'][$chat_id][$from_id] = ($game['game'][$chat_id][$from_id]+1);
file_put_contents('game.json', json_encode($game));
file_put_contents("gamess.txt","");
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"*⌯⁞ مبروك لقد ربحت نقطه
⌯⁞ اصبح لديك ⋙ { ".$game['game'][$chat_id][$from_id]." } نقطه*
",'parse_mode'=>"MARKDOWN",'reply_to_message_id'=>$message->message_id]);
file_put_contents("game.txt","MMoHaMMeD");
unlink("game");
}}
if(in_array($chat_id,$game1) and $text == 'شقي' or $text == 'دقه'or $text == 'دقة'or $text == 'حليمه'or $text == 'حليمة'or $text == 'طلب' or$text == 'غلب' or $text == 'الوجوه' or $text == 'الوجوة' or $text == 'الاوجه' or $text == 'الاوجة' or $text == 'اذن' or $text == 'أذن' or $text == 'الابره' or $text == 'الابرة' or $text == "تاخير" or $text == "تدان" or $text == "الجنه" or $text == "الجنة" or $text == "الصقر" or $text == "الودافه" or $text == "قاتل"){
if($level == "gamem"){
$game['game'][$chat_id][$from_id] = ($game['game'][$chat_id][$from_id]+1);
file_put_contents('game.json', json_encode($game));
file_put_contents("game/$chat_id/game.txt","");
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"*⌯⁞ مبروك لقد ربحت نقطه
⌯⁞ اصبح لديك ⋙ { ".$game['game'][$chat_id][$from_id]." } نقطه*
",'parse_mode'=>"MARKDOWN",'reply_to_message_id'=>$message->message_id]);
file_put_contents("game.txt","MMoHaMMeD");
unlink("game");
}}
if(in_array($chat_id,$game1) and $text == 'نجم البحر' or $text == 'الخوارزمي'or $text == 'سمك التونه'or $text == 'سمك التونة'or $text == 'الالماس'or $text == 'البقره' or$text == 'البقرة' or $text == 'الدينار الذهبي' or $text == 'القرد' or $text == 'الحديد' or $text == 'الجمل' or $text == 'الدينار'){
if($level == "gameq"){
$game['game'][$chat_id][$from_id] = ($game['game'][$chat_id][$from_id]+1);
file_put_contents('game.json', json_encode($game));
file_put_contents("game/$chat_id/game.txt","");
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"*⌯⁞ مبروك لقد ربحت نقطه
⌯⁞ اصبح لديك ⋙ { ".$game['game'][$chat_id][$from_id]." } نقطه*
",'parse_mode'=>"MARKDOWN",'reply_to_message_id'=>$message->message_id]);
file_put_contents("game.txt","MMoHaMMeD");
}}
if(in_array($chat_id,$game1) and $text == 'كارلوس' or $text == 'مهند'or $text == 'العراق'or $text == 'سعوديه'or $text == 'ارنب'or $text == 'Nazar' or$text == 'الاحواز' or $text == 'رمضان' or $text == 'تيم كارلوس' or $text == 'تايكر' or $text == 'حمود' or $text == 'سورس كارلوس' or $text == 'ءبوايهاب' or $text == 'الاحوازي'){
if($level == "gamew"){
$game['game'][$chat_id][$from_id] = ($game['game'][$chat_id][$from_id]+1);
file_put_contents('game.json', json_encode($game));
file_put_contents("game/$chat_id/game.txt","");
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"*⌯⁞ مبروك لقد ربحت نقطه
⌯⁞ اصبح لديك ⋙ { ".$game['game'][$chat_id][$from_id]." } نقطه*
",'parse_mode'=>"MARKDOWN",'reply_to_message_id'=>$message->message_id]);
file_put_contents("game.txt","MMoHaMMeD");
unlink("game");
}}
$iBadlz_smile = array('🍏','🍎','843578','9755','25677','578866','14589','🍐','🍊','🍋','🍌','🍉','🍇','🍓','??','🍒','🍑','🍍','🥥','🥝','🍅','🍆','🥑','🥦','??','🌶','🌽','🥕','🥔','🍠','🥐','🍞','🥖','🥨','🧀','🥚','🍳','🥞','🥓','🥩','🍗','🍖','🌭','🍔','🍟','🍕','🥪','🥙','🍼','☕️','🍵','🥤','🍶','🍺','🍻','🏀','⚽️','🏈','⚾️','🎾','🏐','🏉','🎱','🏓','🏸','🥅','🎰','🎮','🎳','🎯','🎲','🎻','🎸','🎺','🥁','🎹','🎼','🎧','🎤','🎬','🎨','🎭','🎪','🎟','🎫','🎗','🏵','🎖','🏆','🥌','🛷','🚕','7643','93289','3457','95439','378865','24568','9976','289','2288','2854','🚗','🚙','🚌','🚎','🏎','🚓','🚑','🚚','🚛','🚜','🇸🇦','⚔','🛡','🔮','🌡','💣','⚒','📍','📓','📗','📂','📅','📪','📫','📬','📭','⏰','📺','🎚','☎️','🔗');
$MOD = array_rand($iBadlz_smile,1);
if($text =="سمايلات" || $text =="سمايل"){
file_put_contents("game/$chat_id/game.txt","games");
$lockgamess = $settings["lock"]["gamess"];
if($settings["lock"]["game"] == "مفتوح"){
file_put_contents("game.txt",$chat_id);bot('sendMessage',['chat_id'=>$chat_id,'text'=>"اسرع واحد يدز هذهہٓ ›› `$iBadlz_smile[$MOD]`",'parse_mode'=>"MARKDOWN",'reply_to_message_id'=>$message->message_id]);}}
if(in_array($text,$iBadlz_smile) and in_array($chat_id,$game1) and $level == "games"){file_put_contents("gamess.txt","");$game['game'][$chat_id][$from_id] = ($game['game'][$chat_id][$from_id]+1);file_put_contents('game.json', json_encode($game));
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"*⌯⁞ مبروك لقد ربحت نقطه
⌯⁞ اصبح لديك ⋙ { ".$game['game'][$chat_id][$from_id]." } نقطه*
",'parse_mode'=>"MARKDOWN",'reply_to_message_id'=>$message->message_id]);
file_put_contents("game.txt","MMoHaMMeD");
unlink("game");
}
if (strpos($text, 'بيع نقاطي') !== false or strpos($text, 'بيع نقودي') !== false){
if($game['game'][$chat_id][$from_id] >= 1 and $game['game'][$chat_id][$from_id] != null){
$num= str_replace(['بيع نقودي','بيع نقاطي'],'',$text);
if ($num <= 300 && $num >= 1){ 
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"⌯⁞ تم خصم ~ { $num } من مجوهراتك 
⌯⁞ وتم زيادة تفاعلك في المجموعة",
'parse_mode'=>"MARKDOWN",
'reply_to_message_id'=>$message->message_id, ]);
$msgs = json_decode(file_get_contents('msgs.json'),true);
$update = json_decode(file_get_contents('php://input'));
$msgs['msgs'][$chat_id][$from_id] = ($msgs['msgs'][$chat_id][$from_id]+$num*5);
file_put_contents('msgs.json', json_encode($msgs));
$game['game'][$chat_id][$from_id] = ($game['game'][$chat_id][$from_id]-$num);file_put_contents('game.json', json_encode($game));
}
}
}
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)){
if ($rt && strpos($text, 'اضف رسائل') !== false){
$num= str_replace('اضف رسائل','',$text);
if ($num <= 300000000 && $num >= 1){ 
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"⌯⁞ تم اضافة له {$num} من الرسائل
",
'parse_mode'=>"MARKDOWN",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message->message_id,
]);
$msgs = json_decode(file_get_contents('msgs.json'),true);
$update = json_decode(file_get_contents('php://input'));
$msgs['msgs'][$chat_id][$re_id] = ($msgs['msgs'][$chat_id][$re_id]+$num);
file_put_contents('msgs.json', json_encode($msgs));
}
}
}
if($text == "نقاطي" and $game['game'][$chat_id][$from_id]!== NULL || $game['game'][$chat_id][$from_id]!== 0){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"⌯⁞ عزيزي - [$first_name](tg://user?id=$from_id)
⌯⁞ نقودك هي ⋙ .".$game['game'][$chat_id][$from_id].".
",'parse_mode'=>"MARKDOWN",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message->message_id,
]);
}
if($message and $tc == "supergroup"){
$msgs = json_decode(file_get_contents('msgs.json'),true);
$update = json_decode(file_get_contents('php://input'));
$msgs['msgs'][$chat_id][$from_id] = ($msgs['msgs'][$chat_id][$from_id]+1);
file_put_contents('msgs.json', json_encode($msgs));
}
if($text == "msg" or $text == "رسائلي"){bot('sendmessage',['chat_id'=>$chat_id,'text'=>"*💬 ❉ رسائلك »{ ".$msgs['msgs'][$chat_id][$from_id]." } ➺*",'parse_mode'=>"MARKDOWN",'reply_to_message_id'=>$message->message_id,]);}
if($text == "مسح رسايلي" or $text == "مسح رسائلي"){
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"✵⁞ تم مسح جميع رسائلك",
'parse_mode'=>"MARKDOWN",
'reply_to_message_id'=>$message->message_id, ]);
$msgs = json_decode(file_get_contents('msgs.json'),true);
$update = json_decode(file_get_contents('php://input'));
$msgs['msgs'][$chat_id][$from_id] = ($msgs['msgs'][$chat_id][$from_id]=0);
file_put_contents('msgs.json', json_encode($msgs));
$game['game'][$chat_id][$from_id] = ($game['game'][$chat_id][$from_id]-20);file_put_contents('game.json', json_encode($game));
}
$chatid = $update->edited_message->chat->id;
$fromid = $update->edited_message->from->id;
$edit = json_decode(file_get_contents('edit.json'),true);
$editMessage = $update->edited_message;
if($editMessage){
$edit['edit'][$chatid][$fromid] = ($edit['edit'][$chatid][$fromid]+1);
file_put_contents('edit.json', json_encode($edit));
}
if($edit['edit'][$chat_id][$from_id] == null){
$editt = 0;
}else{
$editt = $edit['edit'][$chat_id][$from_id];
}
if($text == 'سحكاتي'){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>'✵⁞ سحكاتك : '.$editt,
]);
}
if($msgs['msgs'][$chat_id][$from_id] > 8000){
$rate = array("100%",);
$rate1 = array_rand($rate,1);
}elseif($msgs['msgs'][$chat_id][$from_id] > 7000){
$rate = array("97%","90%","99%",);
$rate1 = array_rand($rate,1);
}elseif($msgs['msgs'][$chat_id][$from_id] > 6000){
$rate = array("83%","80%","87%",);
$rate1 = array_rand($rate,1);
}elseif($msgs['msgs'][$chat_id][$from_id] > 3000){
$rate = array("77%","70%",);
$rate1 = array_rand($rate,1);
}elseif($msgs['msgs'][$chat_id][$from_id] > 500){
$rate = array('69%','56%',);
$rate1 = array_rand($rate,1);
}elseif($msgs['msgs'][$chat_id][$from_id] > 200){
$rate = array("40%","43%","39%",);
$rate1 = array_rand($rate,1);
}elseif($msgs['msgs'][$chat_id][$from_id] > 100){
$rate = array("36%","29%",);
$rate1 = array_rand($rate,1);
}elseif($msgs['msgs'][$chat_id][$from_id] > 1){
$rate = array('18%','20%','6%',);
$rate1 = array_rand($rate,1);
}
if($msgs['msgs'][$chat_id][$from_id] > 8000){
$active = array("حارك الكروب ",);
$abstfal = array_rand($active,1);
}elseif($msgs['msgs'][$chat_id][$from_id] > 7000){
$active = array("معلك لربك ",);
$abstfal = array_rand($active,1);
}elseif($msgs['msgs'][$chat_id][$from_id] > 6000){
$active = array("جهنم حبي ","نار وشرار ",);
$abstfal = array_rand($active,1);
}elseif($msgs['msgs'][$chat_id][$from_id] > 3000){
$active = array("خوش متفاعل ","اسطورة التفاعل ","الله مال تفاعل ","نايس التفاعل ","قمه التفاعل ",);
$abstfal = array_rand($active,1);
}elseif($msgs['msgs'][$chat_id][$from_id] > 500){
$active = array('متوسط ','متفاعل ',);
$abstfal = array_rand($active,1);
}elseif($msgs['msgs'][$chat_id][$from_id] > 1){
$active = array('ضعيف ',);
$abstfal = array_rand($active,1);
}
$new = json_decode(file_get_contents('new.json'),true);
if($message->new_chat_member){
$new['new'][$chat_id][$from_id] = ($new['new'][$chat_id][$from_id]+1);
file_put_contents('new.json', json_encode($new));
}

if($new['new'][$chat_id][$from_id] == null){
$new = 0;
}else{
$new = $new['new'][$chat_id][$from_id];
}
if($text == 'جهاتي'){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"✵⁞ عدد جهاتك المضافه هنا ~ $new
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
]);
}
if(in_array($from_id,$eri)){
$info = "مطور السورس";
}
elseif(in_array($from_id,$developer) ){
$info = "مطور البوت";
}
elseif(in_array($from_id,$Dev) ){
$info = "مطور الاساسي";
}
elseif(in_array($from_id,$nazar) ){
$info = "منشئ اساسي";
}
elseif(in_array($from_id,$carlos) ){
$info = "منشئ";
}
elseif($status == "creator"){
$info = "المالك";
}
elseif($status == "administrator"){
$info = "المشرف";
}
elseif(in_array($from_id,$manger) ){
$info = "المدير";
}
elseif(in_array($from_id,$admin_user) ){
$info = "ادمن";
}
elseif(in_array($from_id,$mmyaz) ){
$info = "عضو مميز";
}elseif($status == "member" ){
$info = "عضو فقط";
}
if(!$username){
$casss = "لايوجد يوزر";
}elseif($username){
$casss = "$username";
}

if(!$username){
$usr = "لا يوجد معرف";
}elseif($username){
$usr = "@$username";
}
$usr = "@$username";

$armofom = $settings["information"]["textaddid"];
$idchange = file_get_contents("ok.txt");
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)){
if($text == "تعيين الايدي" or $text == "تعين الايدي"){
file_put_contents("ok.txt",$chat_id);
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"✵⁞ ارسل الان النص
✵⁞ اضغط للنسخ
✵⁞  يمكنك اضافه :
- لعرض المعرف > `{المعرف}`
- لعرض الرسائل > `{الرسائل}`
- لعرض الصور > `{الصور}`
- لعرض الايدي > `{الايدي}`
- لعرض الرتبه > `{الرتبه}`
- لعرض مجوهرات > `{المجوهرات}`
- لعرض جهات > `{جهاتي}`
- لعرض تفاعل > `{تفاعل}`
- لعرض نسبة تفاعل > `{نسبة تفاعل}`
- لعرض سحكات > `{سحكاتي}`
┉  ┉  ┉  ┉  ┉  ┉  ┉  ┉
✵⁞ قناة كلايش الايدي : [@$chinnl]",'parse_mode'=>"MARKDOWN",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message->message_id,
]);
}
}
if($text and $idchange == $chat_id){
if ($status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$developer)){
file_put_contents("ok.txt","none");
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"✵⁞ تم تعين الايدي
",'parse_mode'=>"MARKDOWN",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message->message_id,
]);
$settings["information"]["textaddid"]="$text";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
elseif($text == "حذف الايدي" or $text == "مسح الايدي"){
if ($status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$developer)){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"*⌯⁞ بواسطة ⋙* [$first_name](tg://user?id=$from_id) 
*⌯⁞ تم حذف الايدي بنجاح*
",'parse_mode'=>"MARKDOWN",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message->message_id,
]);
$settings["information"]["textaddid"]="";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
$armofom = $settings["information"]["textaddid"];
if($text=="ايدي" or $text=="ايديي" or $text=="ا"){
$iduser = $settings["lock"]["iduser"];
$armofom = $settings["information"]["textaddid"];
if($armofom !== null){
if($iduser == "مفتوح"){
$result = json_decode(file_get_contents("https://api.telegram.org/bot".API_KEY."/getUserProfilePhotos?user_id=$from_id"),true);
$file_id = $result["result"]["photos"][0][0]["file_id"];
$count = $result["result"]["total_count"];
$a = str_replace('{الاسم}',"$first_name",$armofom);
$a = str_replace('{الايدي}',$from_id,$a);
$a = str_replace('{المعرف}',$usr,$a);
$a = str_replace('{الرتبه}',$info,$a);
$a = str_replace('{المجوهرات}',$game['game'][$chat_id][$from_id],$a);
$a = str_replace('{الرسائل}',$msgs['msgs'][$chat_id][$from_id],$a);
$a = str_replace('{الصور}',$count,$a);
$a = str_replace('{سحكاتي}',$editt,$a);
$a = str_replace('{جهاتي}',$new,$a);
$a = str_replace('{تفاعل}',$active[$abstfal],$a);
$a = str_replace('{نسبة تفاعل}',$rate[$rate1],$a);
$g = $a;
var_dump(
bot('sendphoto',[
'chat_id'=>$chat_id,
'photo'=>"$file_id",
'caption'=>"$g",
'reply_to_message_id'=>$message->message_id,
]));}}
}
$armofom = $settings["information"]["textaddid"];
if($text == "ايدي" or $text=="ايديي" or $text=="ا"){
$armofom = $settings["information"]["textaddid"];
if($armofom !== null){
if($iduser !== "مفتوح"){
$result = json_decode(file_get_contents("https://api.telegram.org/bot".API_KEY."/getUserProfilePhotos?user_id=$from_id"),true);
$file_id = $result["result"]["photos"][0][0]["file_id"];
$count = $result["result"]["total_count"];
$g = array_rand($a,1);
$a = str_replace('{الاسم}',"$first_name",$armofom);
$a = str_replace('{الايدي}',$from_id,$a);
$a = str_replace('{المعرف}',$usr,$a);
$a = str_replace('{الرتبه}',$info,$a);
$a = str_replace('{المجوهرات}',$game['game'][$chat_id][$from_id],$a);
$a = str_replace('{الرسائل}',$msgs['msgs'][$chat_id][$from_id],$a);
$a = str_replace('{الصور}',$count,$a);
$a = str_replace('{سحكاتي}',$editt,$a);
$a = str_replace('{جهاتي}',$new,$a);
$a = str_replace('{تفاعل}',$active[$abstfal],$a);
$a = str_replace('{نسبة تفاعل}',$rate[$rate1],$a);
$g = $a;
bot("sendmessage",[
"chat_id"=>$chat_id,
"text"=>"$g",
'reply_to_message_id'=>$message->message_id,
]);}}
}
$armofom = $settings["information"]["textaddid"];
if($text=="ايدي" or $text=="ايديي" or $text=="ا"){
$iduser = $settings["lock"]["iduser"];
$armofom = $settings["information"]["textaddid"];
$result = json_decode(file_get_contents("https://api.telegram.org/bot".API_KEY."/getUserProfilePhotos?user_id=$from_id"),true);
$file_id = $result["result"]["photos"][0][0]["file_id"];
$count = $result["result"]["total_count"];
if($armofom == null){
if($iduser == "مفتوح"){
$result=json_decode(file_get_contents("https://api.telegram.org/bot".API_KEY."/getUserProfilePhotos?user_id=$from_id"),true);
$file_id=$result["result"]["photos"][0][0]["file_id"];
$count=$result["result"]["total_count"];
var_dump(
bot('sendphoto',[
'chat_id'=>$chat_id,
'photo'=>"$file_id",
'caption'=>"⌯ اسمك ⋙ $name •
⌯ ايديك ⋙ $from_id •
⌯ معرفك ⋙ $usr •
⌯ موقعك ⋙ $info •
⌯ رسائلك ⋙ ".$msgs['msgs'][$chat_id][$from_id]." •
➖
",'reply_to_message_id'=>$message->message_id,
]));}}
}
$armofom = $settings["information"]["textaddid"];
if($text == "ايدي" or $text=="ايديي" or $text=="ا"){
$armofom = $settings["information"]["textaddid"];
$result = json_decode(file_get_contents("https://api.telegram.org/bot".API_KEY."/getUserProfilePhotos?user_id=$from_id"),true);
$file_id = $result["result"]["photos"][0][0]["file_id"];
$count = $result["result"]["total_count"];
if($armofom == null){
if($iduser !== "مفتوح"){
$result=json_decode(file_get_contents("https://api.telegram.org/bot".API_KEY."/getUserProfilePhotos?user_id=$from_id"),true);
$file_id=$result["result"]["photos"][0][0]["file_id"];
$count=$result["result"]["total_count"];
bot("sendmessage",[
"chat_id"=>$chat_id,
"text"=>"⌯ اسمك ⋙ $name •
⌯ ايديك ⋙ $from_id •
⌯ معرفك ⋙ $usr •
⌯ موقعك ⋙ $info •
⌯ رسائلك ⋙ ".$msgs['msgs'][$chat_id][$from_id]." •
➖
",'reply_to_message_id'=>$message->message_id,
]);}}
}
if($text == "اليمن"){
if($settings["lock"]["rdona"] == "مقفول"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"يروح اليمن بلد مبرمجي فدوه لترابه",
'reply_to_message_id'=>$message->message_id, 
]);
}
}
if($text == "فدوه"){
if($settings["lock"]["rdona"] == "مقفول"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"الك/ج يروحي🥰❤",
'reply_to_message_id'=>$message->message_id, 
]);
}
}
if($text == "احبك"){
if($settings["lock"]["rdona"] == "مقفول"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"مندون زحف يروحي عيب والله😶😂",
'reply_to_message_id'=>$message->message_id, 
]);
}
}
if($text == "@$buy"){
if($settings["lock"]["rdona"] == "مقفول"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"⌯⁞ هذا معرف مطوري نورت
",'reply_to_message_id'=>$message->message_id, 
]);
}
}
if($text == "علي محمد"){
if($settings["lock"]["rdona"] == "مقفول"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"فديته المبرمج الراقي ⌯",
'reply_to_message_id'=>$message->message_id, 
]);
}
}
if($text == "احبك"){
if($settings["lock"]["rdona"] == "مقفول"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>" عن جد والله مايكن حب مصالح ⌯",
'reply_to_message_id'=>$message->message_id, 
]);
}
}
if($text == "احوازي"){
if($settings["lock"]["rdona"] == "مقفول"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"ونعم هله ب فخر العرب",
'reply_to_message_id'=>$message->message_id, 
]);
}
}
if($text == "يمني"){
if($settings["lock"]["rdona"] == "مقفول"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"⌯ونعم حبي ⌯",
'reply_to_message_id'=>$message->message_id, 
]);
}
}
if($text == "باي"){
if($settings["lock"]["rdona"] == "مقفول"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"وين حبي ⌯",
'reply_to_message_id'=>$message->message_id, 
]);
}
}
if($text == "السلام عليكم"){
if($settings["lock"]["rdona"] == "مقفول"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"وعليكم السلام ورحمة الله و بركاتة ⌯",
'reply_to_message_id'=>$message->message_id, 
]);
}
}
if($text == "سلام"){
if($settings["lock"]["rdona"] == "مقفول"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"وعليكم السلام ورحمة الله و بركاتة ⌯",
'reply_to_message_id'=>$message->message_id, 
]);
}
}
if($text == "هلاو"){
if($settings["lock"]["rdona"] == "مقفول"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"هلاوات حياتي",
'reply_to_message_id'=>$message->message_id, 
]);
}
}
if($text == "نورت"){
if($settings["lock"]["rdona"] == "مقفول"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"نورك يروحي",
'reply_to_message_id'=>$message->message_id, 
]);
}
}
if($text == "تمام"){
if($settings["lock"]["rdona"] == "مقفول"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"دووووم يارب",
'reply_to_message_id'=>$message->message_id, 
]);
}
}
if($text == "هلوو"){
if($settings["lock"]["rdona"] == "مقفول"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"هلا حياتي🥰❤",
'reply_to_message_id'=>$message->message_id, 
]);
}
}
if($text == "هلو"){
if($settings["lock"]["rdona"] == "مقفول"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"هلوات حياتي🥰❤",
'reply_to_message_id'=>$message->message_id, 
]);
}
}

if($text == "رابط حذف" or $text == "رابط الحذف" or $text == "اريد احذف الحساب" or $text == "ححذف"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>" *
⌯⁞  رابط حذف التليجرام 🌿
⌯⁞  *[اضغط هنا ثم تحذف حسابك](https://telegram.org/deactivate)*
⌯⁞  #تنبيه :- لن تتمكن من اعادة الحساب بعد الحذف فريق النيزك يتمني لك التوفيق 
────────────
⌯⁞ link ⋙ https://telegram.org/deactivate 
*",'parse_mode'=>"MARKDOWN",
'reply_to_message_id'=>$message->message_id, 
]);
}

$message_idd = $update->message->message_id;
if($text == "ترقية وزير"  || $text == "رفع وزير" and $from_id == $sudo || in_array($from_id,$Dev)){
if($settings["lock"]["jooki"] == "مقفول"){
bot('SendMessage',['chat_id'=>$chat_id,
'text'=>"
✵ العضو ⋙ [$re_name](tg://user?id=$re_id)
⌯⁞ ايديه ↫ `$re_id`
⌯ تم رفعه وزير في المجموعة
",'parse_mode'=>'markdown','reply_to_message_id'=>$message->message_id,'disable_web_page_preview'=>true,
]);
}
}
$message_idd = $update->message->message_id;
if($text == "حذف وزير"  || $text == "تنزيل وزير" and $from_id == $sudo || in_array($from_id,$Dev)){
if($settings["lock"]["jooki"] == "مقفول"){
bot('SendMessage',['chat_id'=>$chat_id,
'text'=>"
✵ العضو ⋙ [$re_name](tg://user?id=$re_id)
⌯⁞ ايديه ↫ `$re_id`
⌯ تم تنزيله من وزاره المجموعة بنجاح
",'parse_mode'=>'markdown','reply_to_message_id'=>$message->message_id,'disable_web_page_preview'=>true,
]);
}
}
##########
$message_idd = $update->message->message_id;
if($text == "رفع مطي"  || $text == "ارتقاء مطي" and $from_id == $sudo || in_array($from_id,$Dev)){
if($settings["lock"]["jooki"] == "مقفول"){
bot('SendMessage',['chat_id'=>$chat_id,
'text'=>"
✵ العضو ⋙ [$re_name](tg://user?id=$re_id)
⌯⁞ ايديه ↫ `$re_id`
⌯ تم رفعه مطي يجي ياخذ عربانه
",'parse_mode'=>'markdown','reply_to_message_id'=>$message->message_id,'disable_web_page_preview'=>true,
]);
}
}
$message_idd = $update->message->message_id;
if($text == "تنزيل مطي"  || $text == "حذف مطي" and $from_id == $sudo || in_array($from_id,$Dev)){
if($settings["lock"]["jooki"] == "مقفول"){
bot('SendMessage',['chat_id'=>$chat_id,
'text'=>"
✵ العضو ⋙ [$re_name](tg://user?id=$re_id)
⌯⁞ ايديه ↫ `$re_id`
⌯ تم تنزيله من مطايه ليصبح ادمي
",'parse_mode'=>'markdown','reply_to_message_id'=>$message->message_id,'disable_web_page_preview'=>true,
]);
}
}
$message_idd = $update->message->message_id;
if($text == "رفع حمار"  || $text == "ارتقاء حمار" and $from_id == $sudo || in_array($from_id,$Dev)){
if($settings["lock"]["jooki"] == "مقفول"){
bot('SendMessage',['chat_id'=>$chat_id,
'text'=>"
✵ العضو ⋙ [$re_name](tg://user?id=$re_id)
⌯⁞ ايديه ↫ `$re_id`
⌯ تم رفعه حمار في المجموعة لنحرافة
",'parse_mode'=>'markdown','reply_to_message_id'=>$message->message_id,'disable_web_page_preview'=>true,
]);
}
}
$message_idd = $update->message->message_id;
if($text == "تنزيل حمار"  || $text == "حذف حمار" and $from_id == $sudo || in_array($from_id,$Dev)){
if($settings["lock"]["jooki"] == "مقفول"){
bot('SendMessage',['chat_id'=>$chat_id,
'text'=>"
✵ العضو ⋙ [$re_name](tg://user?id=$re_id)
⌯⁞ ايديه ↫ `$re_id`
⌯ تم تنزيله من قائمة الاحمرة ليصبح بشر 
",'parse_mode'=>'markdown','reply_to_message_id'=>$message->message_id,'disable_web_page_preview'=>true,
]);
}
}
$message_idd = $update->message->message_id;
if($text == "رفع كلب"  || $text == "ارتقاء كلب" and $from_id == $sudo || in_array($from_id,$Dev)){
if($settings["lock"]["jooki"] == "مقفول"){
bot('SendMessage',['chat_id'=>$chat_id,
'text'=>"
✵⁞ العضو ⋙ [$re_name](tg://user?id=$re_id)
⌯⁞ ايديه ↫ `$re_id`
⌯⁞ تم رفعه ليصبح كلب ناطق
",'parse_mode'=>'markdown','reply_to_message_id'=>$message->message_id,'disable_web_page_preview'=>true,
]);
}}
$message_idd = $update->message->message_id;
if($text == "تنزيل كلب"  || $text == "حذف كلب" and $from_id == $sudo || in_array($from_id,$Dev)){
if($settings["lock"]["jooki"] == "مقفول"){
bot('SendMessage',['chat_id'=>$chat_id,
'text'=>"
✵⁞ العضو ⋙ [$re_name](tg://user?id=$re_id)
⌯⁞ ايديه ↫ `$re_id`
⌯⁞ تم تنزيله من قائمة الككلاب 
",'parse_mode'=>'markdown','reply_to_message_id'=>$message->message_id,'disable_web_page_preview'=>true,
]);
}
}
$message_idd = $update->message->message_id;
if($text == "رفع طلي"  || $text == "ارتقاء طلي" and $from_id == $sudo || in_array($from_id,$Dev)){
if($settings["lock"]["jooki"] == "مقفول"){
bot('SendMessage',['chat_id'=>$chat_id,
'text'=>"
✵⁞ العضو ⋙ [$re_name](tg://user?id=$re_id)
⌯⁞ ايديه ↫ `$re_id`
⌯⁞ تم رفعه ليصبح طلي ليصبح عيد
",'parse_mode'=>'markdown','reply_to_message_id'=>$message->message_id,'disable_web_page_preview'=>true,
]);
}
}
$message_idd = $update->message->message_id;
if($text == "تنزيل مطي"  || $text == "حذف مطي" and $from_id == $sudo || in_array($from_id,$Dev)){
if($settings["lock"]["jooki"] == "مقفول"){
bot('SendMessage',['chat_id'=>$chat_id,
'text'=>"
✵⁞ العضو ⋙ [$re_name](tg://user?id=$re_id)
⌯⁞ ايديه ↫ `$re_id`
⌯⁞ تم تنزيله من الطليان بس خلص العلف
",'parse_mode'=>'markdown','reply_to_message_id'=>$message->message_id,'disable_web_page_preview'=>true,
]);
}
}
$message_idd = $update->message->message_id;
if($text == "رفع ثور"  || $text == "ارتقاء اثول" and $from_id == $sudo || in_array($from_id,$Dev)){
if($settings["lock"]["jooki"] == "مقفول"){
bot('SendMessage',['chat_id'=>$chat_id,
'text'=>"
✵⁞ العضو ⋙ [$re_name](tg://user?id=$re_id)
⌯⁞ ايديه ↫ `$re_id`
⌯⁞ تم رفعه ليصبح ثور حراث
",'parse_mode'=>'markdown','reply_to_message_id'=>$message->message_id,'disable_web_page_preview'=>true,
]);
}
}
$message_idd = $update->message->message_id;
if($text == "تنزيل اثول"  || $text == "حذف اثول" and $from_id == $sudo || in_array($from_id,$Dev)){
if($settings["lock"]["jooki"] == "مقفول"){
bot('SendMessage',['chat_id'=>$chat_id,
'text'=>"
✵⁞ العضو ↫ [$re_name](tg://user?id=$re_id)
⌯⁞ ايديه ↫ `$re_id`
⌯⁞ تم تنزيله من ثور حارث ليصبح شاطر
",'parse_mode'=>'markdown','reply_to_message_id'=>$message->message_id,'disable_web_page_preview'=>true,
]);
}
}
$message_idd = $update->message->message_id;
if($text == "رفع ملك"  || $text == "ارتقاء ملك" and $from_id == $sudo || in_array($from_id,$Dev)){
if($settings["lock"]["jooki"] == "مقفول"){
bot('SendMessage',['chat_id'=>$chat_id,
'text'=>"
✵⁞ العضو ⋙ [$re_name](tg://user?id=$re_id)
⌯⁞ ايديه ↫ `$re_id`
⌯⁞  تم رفعه ليصبح ملك تاج ع راس
",'parse_mode'=>'markdown','reply_to_message_id'=>$message->message_id,'disable_web_page_preview'=>true,
]);
}
}
$message_idd = $update->message->message_id;
if($text == "تنزيل ملك"  || $text == "حذف ملك" and $from_id == $sudo || in_array($from_id,$Dev)){
if($settings["lock"]["jooki"] == "مقفول"){
bot('SendMessage',['chat_id'=>$chat_id,
'text'=>"
✵⁞ العضو ⋙ [$re_name](tg://user?id=$re_id)
⌯⁞ ايديه ↫ `$re_id`
⌯⁞  تم تنزيله من الملوكيه طاح حضه
",'parse_mode'=>'markdown','reply_to_message_id'=>$message->message_id,'disable_web_page_preview'=>true,
]);
}
}

$message_idd = $update->message->message_id;
if($text == "رفع زوجتي"  || $text == "ارتقاء زوجتي" and $from_id == $sudo || in_array($from_id,$Dev)){
if($settings["lock"]["jooki"] == "مقفول"){
bot('SendMessage',['chat_id'=>$chat_id,
'text'=>"
✵⁞ العضو ⋙ [$re_name](tg://user?id=$re_id)
⌯⁞ ايديه ↫ `$re_id`
⌯⁞  تم رفعه ليصبح زوجتك مبروك
",'parse_mode'=>'markdown','reply_to_message_id'=>$message->message_id,'disable_web_page_preview'=>true,
]);
}
}
$message_idd = $update->message->message_id;
if($text == "تنزيل زوجتي"  || $text == "حذف زوجتي" and $from_id == $sudo || in_array($from_id,$Dev)){
if($settings["lock"]["jooki"] == "مقفول"){
bot('SendMessage',['chat_id'=>$chat_id,
'text'=>"
✵⁞ العضو ⋙ [$re_name](tg://user?id=$re_id)
⌯⁞ ايديه ↫ `$re_id`
⌯⁞  تم تنزيل زوجتك بعد متفيدك
",'parse_mode'=>'markdown','reply_to_message_id'=>$message->message_id,'disable_web_page_preview'=>true,
]);
}
}

#Developer~> @PTPTPI
#Channel~> @QQQ_YQ

$message_idd = $update->message->message_id;
if($text == "رفع زوجي"  || $text == "ارتقاء زوجي" and $from_id == $sudo || in_array($from_id,$Dev)){
if($settings["lock"]["jooki"] == "مقفول"){
bot('SendMessage',['chat_id'=>$chat_id,
'text'=>"
✵⁞ العضو ⋙ [$re_name](tg://user?id=$re_id)
⌯⁞ ايديه ↫ `$re_id`
⌯⁞  تم رفعه ليصبح زوج جا ستحيتي
",'parse_mode'=>'markdown','reply_to_message_id'=>$message->message_id,'disable_web_page_preview'=>true,
]);
}
}
$message_idd = $update->message->message_id;
if($text == "تنزيل زوجي"  || $text == "حذف زوجي" and $from_id == $sudo || in_array($from_id,$Dev)){
if($settings["lock"]["jooki"] == "مقفول"){
bot('SendMessage',['chat_id'=>$chat_id,
'text'=>"
✵⁞ العضو ⋙ [$re_name](tg://user?id=$re_id)
⌯⁞ ايديه ↫ `$re_id`
⌯⁞  تم تنزيله هابعد ميفيدج
",'parse_mode'=>'markdown','reply_to_message_id'=>$message->message_id,'disable_web_page_preview'=>true,
]);
}
}

$message_idd = $update->message->message_id;
if($text == "رفع زاحف"  || $text == "ارتقاء زاحف" and $from_id == $sudo || in_array($from_id,$Dev)){
if($settings["lock"]["jooki"] == "مقفول"){
bot('SendMessage',['chat_id'=>$chat_id,
'text'=>"
✵⁞ العضو ⋙ [$re_name](tg://user?id=$re_id)
⌯⁞ ايديه ↫ `$re_id`
⌯⁞  تم رفعه ليصبح زاحف اطردو
",'parse_mode'=>'markdown','reply_to_message_id'=>$message->message_id,'disable_web_page_preview'=>true,
]);
}
}
$message_idd = $update->message->message_id;
if($text == "تنزيل زاحف"  || $text == "حذف زاحف" and $from_id == $sudo || in_array($from_id,$Dev)){
if($settings["lock"]["jooki"] == "مقفول"){
bot('SendMessage',['chat_id'=>$chat_id,
'text'=>"
✵⁞ العضو ⋙ [$re_name](tg://user?id=$re_id)
⌯⁞ ايديه ↫ `$re_id`
⌯⁞  تم تنزيله من قائمة الزحف هو ماخله بنت
",'parse_mode'=>'markdown','reply_to_message_id'=>$message->message_id,'disable_web_page_preview'=>true,
]);
}
}

if(strpos($text,"شنو رئيك ب")!== false){
$lockcmd = $settings["lock"]["jooki"];
if ($lockcmd == "مقفول") {
$armof = array("🤬لك هذا فيطي😂","لك كمر 🙃🙃هذا","احبه 😍😋","اكرهه","يكبسل هذا😂😃",);
$b = array_rand($armof,1);
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"$armof[$b]",
'reply_to_message_id'=>$message->message_id,
]);
}
}

if ( $rt && $text =="تثبيت"){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer) or in_array($from_id,$carlos) or in_array($from_id,$nazar) or in_array($from_id,$eri)) { bot('pinChatMessage',[
    'chat_id'=>$chat_id,
    'message_id'=>$replyid
      ]);
bot('sendmessage',[
 'chat_id'=>$chat_id,
 'text'=>"
⌯⁞  تم تثبيت الرسالة بنجاح
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
 }
}
elseif(  $text =="الغاء التثبيت"){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer) or in_array($from_id,$carlos) or in_array($from_id,$nazar) or in_array($from_id,$eri)) { bot('unpinChatMessage',[
    'chat_id'=>$chat_id,
    'message_id'=>$replyid
      ]);
bot('sendmessage',[
 'chat_id'=>$chat_id,
 'text'=>"
⌯⁞ تم الغاء تثبيت الرسالة بنجاح
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
 }
}

if ($text =="تفعيل البحث" ){
if($status == "creator" ||  $status == "administrator" ||  in_array($from_id,$Dev) || in_array($from_id,$developer) || in_array($from_id,$carlos) || in_array($from_id,$eri) || in_array($from_id,$nazar)) {$add = $settings["information"]["added"];
if ($add == true) {	
	bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"
✵⁞ بواسطة ⋙ [$first_name](tg://user?id=$from_id)
⌯⁞  تم تفعيل البحث بنجاح
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
  'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["serhi"]="مقفول";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"عذرا عزيزي المجموعة ليس مفعلة",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
	}
}
}
elseif($text =="تعطيل البحث" ){
if($status == "creator" ||  $status == "administrator" ||  in_array($from_id,$Dev) || in_array($from_id,$developer)|| in_array($from_id,$carlos) || in_array($from_id,$eri) || in_array($from_id,$nazar)) {$add = $settings["information"]["added"];
if ($add == true) {
	bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"
✵⁞ بواسطة ⋙ [$first_name](tg://user?id=$from_id)
⌯⁞  تم تعطيل البحث بنجاح
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
$settings["lock"]["serhi"]="مفتوح";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"عذرا عزيزي المجموعة ليس مفعلة",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
	}
}
}
elseif( $text =="تفعيل اغاني" or $text == "تفعيل الاغاني"){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer) or in_array($from_id,$carlos) or in_array($from_id,$nazar) or in_array($from_id,$eri)) {$add = $settings["information"]["added"];
if ($add == true) {	
	bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"
✵⁞ بواسطة ⋙ [$first_name](tg://user?id=$from_id)
⌯⁞  تم تفعيل الاغاني بنجاح
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
  'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["ahbgii"]="مقفول";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"عذرا عزيزي المجموعة ليس مفعلة",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
	}
}
}
if ( $text =="تعطيل الاغاني" or $text == "تعطيل اغاني"){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer) or in_array($from_id,$carlos) or in_array($from_id,$nazar) or in_array($from_id,$eri)) {$add = $settings["information"]["added"];
if ($add == true) {
	bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"
✵⁞ بواسطة ⋙ [$first_name](tg://user?id=$from_id)
⌯⁞  تم تعطيل الاغاني بنجاح
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
$settings["lock"]["ahbgii"]="مفتوح";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"عذرا عزيزي المجموعة ليس مفعلة",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
	}
}
}
elseif($text =="تفعيل الالعاب" ){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer) or in_array($from_id,$carlos) or in_array($from_id,$nazar) or in_array($from_id,$eri)) {$add = $settings["information"]["added"];
if ($add == true) {	
	bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"
✵⁞ بواسطة ⋙ [$first_name](tg://user?id=$from_id)
⌯⁞  تم تفعيل الالعاب بنجاح
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
  'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["game"]="مفتوح";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"عذرا عزيزي المجموعة ليس مفعلة",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
	}
}
}
if ($text =="تعطيل الالعاب" ){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer) or in_array($from_id,$carlos) or in_array($from_id,$nazar) or in_array($from_id,$eri)) {$add = $settings["information"]["added"];
if ($add == true) {
	bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"
✵⁞ بواسطة ⋙ [$first_name](tg://user?id=$from_id)
⌯⁞  تم تعطيل الالعاب بنجاح
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
$settings["lock"]["game"]="مقفول";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"عذرا عزيزي المجموعة ليس مفعلة",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
	}
}
}

$m ="* ⌯⁞ هناك {5} اوامر لعرضها
┉  ┉  ┉  ┉  ┉  ┉  ┉  ┉
⌯⁞ م1 ~⪼ لعرض اوامر الحمايه
⌯⁞ م2 ~⪼ لعرض اوامر الادمنيه
⌯⁞ م3 ~⪼ لعرض اوامر المدراء
⌯⁞ م4 ~⪼ لعرض اوامر المنشئين
⌯⁞ م5 ~⪼ لعرض اوامر المطورين

ـ┉  ┉  ┉  ┉  ┉  ┉  ┉  ┉
✶ للاستفسار↫ ❪ @$buy ❫*";
$m1 = "*⌯⁞ اوامر حمايه المجموعة
┉  ┉  ┉  ┉  ┉  ┉  ┉  ┉
⌯⁞ قفل/فتح + الاوامر الادناه 
⌯⁞ قفل/فتح + الامر بالتقيد • بالطرد • بالكتم
┉  ┉  ┉  ┉  ┉  ┉  ┉  ┉
⌯⁞ الروابط
⌯⁞ المعرف
⌯⁞ التاك
⌯⁞ التعديل
⌯⁞ المتحركه
⌯⁞ الملفات
⌯⁞ الصور

⌯⁞ الملصقات
⌯⁞ الفيديو
⌯⁞ الانلاين
⌯⁞ الدردشه
⌯⁞ التوجيه
⌯⁞ الصوت
⌯⁞ الجهات
⌯⁞ الاشعارات

⌯⁞ الماركداون
⌯⁞ البوتات
⌯⁞ التكرار
⌯⁞ الكلايش
ـ┉  ┉  ┉  ┉  ┉  ┉  ┉  ┉
✶ للاستفسار↫ ❪ @$buy ❫*";
$m2="*✵⁞ اوامر الادمنيه
┉  ┉  ┉  ┉  ┉  ┉  ┉  ┉
✵⁞ رفع/تنزيل مميز
✵⁞ تاك للكل
✵⁞ المجموعه
✵⁞ كتم
✵⁞ حظر
✵⁞ طرد
✵⁞ منع
✵⁞ تقيد
✵⁞ الغاء حظر
✵⁞ الغاء كتم
✵⁞ الغاء تقيد
✵⁞ الغاء منع
✵⁞ المحظورين
✵⁞ المكتومين
✵⁞ المقيدين
✵⁞ المميزين
✵⁞ قائمه المنع

✵⁞ تثبيت
✵⁞ الغاء تثبيت
✵⁞  الغاء قائمة التثبيت
✵⁞ الاعدادات

✵⁞ الرابط
✵⁞ القوانين

✵⁞ لعرض الاغاني ~ غ1 الي غ15
✵⁞ الترحيب
✵┇تفعيل/تعطيل الترحيب
✵⁞ ايدي
✵⁞ جهاتي
✵⁞ سحكاتي
✵⁞ رسائلي
✵⁞ كشف البوت
┉  ┉  ┉  ┉  ┉  ┉  ┉  ┉
✵⁞ ضع + الاوامر الادناه
┉  ┉  ┉  ┉  ┉  ┉  ┉  ┉
✵⁞ اسم
✵⁞ صوره
✵⁞ ترحيب
✵⁞ قوانين
┉  ┉  ┉  ┉  ┉  ┉  ┉  ┉
✵⁞ مسح + الاوامر الادناه
┉  ┉  ┉  ┉  ┉  ┉  ┉  ┉
✵⁞ قائمه المنع
✵⁞ المحظورين
✵⁞ المميزين
✵⁞ المنشئين
✵⁞ الادمنيه
✵⁞ المدراء
ـ┉  ┉  ┉  ┉  ┉  ┉  ┉  ┉
✶ للاستفسار↫ ❪ @$buy ❫*";
$m3="*✵⁞  اوامر المدراء
┉  ┉  ┉  ┉  ┉  ┉  ┉  ┉
✵⁞ رفع/تنزيل ادمن
✵⁞ فك تقيد
✵⁞ تنزيل الكل

✵⁞ تفعيل/تعطيل تفال
✵⁞ تفعيل/تعطيل هينه
✵⁞ تفعيل/تعطيل اغاني
✵⁞ تفعيل/تعطيل الايدي بالصوره
✵⁞ تفعيل/تعطيل الايدي
✵⁞ تفعيل/تعطيل ردود المطور
✵⁞ تفعيل/تعطيل اللعبه/الالعاب
✵⁞ تفعيل/تعطيل الردود
✵⁞ تفعيل/تعطيل اطردني
✵⁞ تفعيل/تعطيل الرفع
✵⁞ تفعيل/تعطيل الطرد
✵⁞ تفعيل/تعطيل الرابط
✵⁞ تفعيل/تعطيل اوامر التحشيش

✵⁞ التحشيش
✵⁞ تعين الايدي
✵⁞ حذف الايدي

✵⁞ رفع الادمنيه
✵⁞ اضف/حذف رد
✵⁞ الادمنيه
✵⁞ الردود

✵⁞ تنظيف + عدد
✵⁞ مسح الادمنيه
✵⁞ مسح الردود
ـ┉  ┉  ┉  ┉  ┉  ┉  ┉  ┉
✶ للاستفسار↫ ❪ @$buy ❫*";
$m4="*✵⁞ اوامر المنشئين الاساسين 
┉  ┉  ┉  ┉  ┉  ┉  ┉  ┉
✵⁞ رفع/تنزيل منشئ
✵⁞ المنشئين
✵⁞ مسح المنشئين

✵⁞ اوامر المنشئين
┉  ┉  ┉  ┉  ┉  ┉  ┉  ┉
✵⁞ رفع/تنزيل مدير
✵⁞ المدراء
✵⁞ مسح المدراء
✵⁞ تعين/حذف الايدي
✵⁞ اضف/حذف امر
✵⁞ الاوامر المضافه
✵⁞ حذف/مسح الاوامر المضافه
✵⁞ اضف رسائل + العدد بالرد
ـ┉  ┉  ┉  ┉  ┉  ┉  ┉  ┉
✶ للاستفسار↫ ❪ @$buy ❫*";
$m5="*
✵⁞ اوامر المطور الاساسي  
┉  ┉  ┉  ┉  ┉  ┉  ┉  ┉
✵⁞ حظر عام
✵⁞ الغاء العام
✵⁞ مسح قائمه العام
✵⁞ تغير اسم البوت
✵⁞ اضف /حذف مطور 
✵⁞ المطورين
✵⁞ مسح المطورين
✵⁞ اضف/حذف رد للكل 
✵⁞ مسح ردود المطور
✵⁞ ردود المطور  
┉  ┉  ┉  ┉  ┉  ┉  ┉  ┉
✵⁞ تفعيل /تعطيل

✵⁞ رفع/تنزيل منشئ اساسي
✵⁞ رفع منشئ 
✵⁞ مسح المنشئين الاساسين
✵⁞ المنشئين الاساسين 
✵⁞ غادر 
✵⁞ غادر + الايدي
✵⁞ اذاعه 
✵⁞ اذاعه بالتوجيه
✵⁞ اذاعه خاص 
✵⁞ الاحصائيات 
ـ┉  ┉  ┉  ┉  ┉  ┉  ┉  ┉
✶ للاستفسار↫ ❪ @$buy ❫*";
$m6="*
✵⁞ اوامر التحشيش
┉  ┉  ┉  ┉  ┉  ┉  ┉  ┉
✵⁞ تفعيل + تعطيل اوامر التحشيش
┉  ┉  ┉  ┉  ┉  ┉  ┉  ┉
✵⁞ رفع/تنزيل ملك
✵⁞ رفع/تنزيل وزير
✵⁞ رفع/تنزيل طلي
✵⁞ رفع/تنزيل مطي
✵⁞ رفع/تنزيل حمار
✵⁞ رفع/تنزيل زاحف
✵⁞ رفع/تنزيل زوجي
✵⁞ رفع/تنزيل زوجتي
✵⁞ شنو رئيك ب + بالرد
ـ┉  ┉  ┉  ┉  ┉  ┉  ┉  ┉
✶ للاستفسار↫ ❪ @$buy ❫
*";
$time = date('h:i A');
date_default_timezone_set('Asia/Baghdad');
if($text =="الاوامر" or $text =="مساعدة" or $text =="مساعده"){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) {if ($tc == 'group' | $tc == 'supergroup'){
$add = $settings["information"]["added"];
if ($add == true){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"$m"
,'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>'م1','callback_data'=>'1'],['text'=>'م2','callback_data'=>'2']],
[['text'=>'م3','callback_data'=>'3'],['text'=>'م4','callback_data'=>'4']],
[['text'=>'م5' ,'callback_data'=>'5']],
[['text'=>'اوامر التحشيش' ,'callback_data'=>'6']],
[['text'=>"ᯓ مطور البـوت",'url'=>"t.me/$buy"]],
[['text'=>". $time ." ,'callback_data'=>'00']],
]])
]); 
}
else
{
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"⌯⁞ لم يتم تفعيل البوت في المجموعة ! م̷ـــِْن فضلك قم بتفغيل البوت بإرسال
ℹ️ `تفعيل ` البوت يتم تفعيله بشكل مجاني ",
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
]);}}}}
elseif($text =="م1"){
if( $statusd == 'creator' or $statusd == 'administrator' or in_array($from_id2,$Dev) or in_array($from_id2,$manger) or in_array($from_id2,$admin_user) or in_array($from_id2,$developer) or in_array($from_id2,$eri) or in_array($from_id2,$carlos) or in_array($from_id2,$nazar)) {if ($tc == 'group' | $tc == 'supergroup'){
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"$m1
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
]);
}
else
{
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"⌯⁞ لم يتم تفعيل البوت في المجموعة ! ",'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
]);}}}}
elseif($text =="م2"){
if( $statusd == 'creator' or $statusd == 'administrator' or in_array($from_id2,$Dev) or in_array($from_id2,$manger) or in_array($from_id2,$admin_user) or in_array($from_id2,$developer) or in_array($from_id2,$eri) or in_array($from_id2,$carlos) or in_array($from_id2,$nazar)) {if ($tc == 'group' | $tc == 'supergroup'){
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"$m2",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
]);
}
else
{
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"⌯⁞ لم يتم تفعيل البوت في المجموعة !",
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
]);}}}}
elseif($text =="م3"){
if($status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) {if ($tc == 'group' | $tc == 'supergroup'){
$add = $settings["information"]["added"];
if($add == true){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"$m3",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
]);
}
else
{
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"⌯⁞ لم يتم تفعيل البوت في المجموعة !",
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);}}}}
elseif($text =="م4"){
if( $statusd == 'creator' or $statusd == 'administrator' or in_array($from_id2,$Dev) or in_array($from_id2,$manger) or in_array($from_id2,$admin_user) or in_array($from_id2,$developer) or in_array($from_id2,$eri) or in_array($from_id2,$carlos) or in_array($from_id2,$nazar)) {if ($tc == 'group' | $tc == 'supergroup'){
$add = $settings["information"]["added"];
if ($add == true){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"$m4",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
]);
}
else
{
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"⌯⁞ لم يتم تفعيل البوت في المجموعة !",
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
]);
}}}}
elseif($text == "م5"){
if(in_array($from_id,$Dev) or in_array($from_id,$developer) or in_array($from_id,$eri)){
$add = $settings["information"]["added"];
if($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"$m5",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
]);
}
}
else
{
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"⌯ هذا الامر ليس لك عزيزي »",
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
]);
}}
$chat_id2 = $update->callback_query->message->chat->id;
$message_id2 = $update->callback_query->message->message_id;
$from_id2 = $update->callback_query->from->id;
$statjsond = json_decode(file_get_contents("https://api.telegram.org/bot$token/getChatMember?chat_id=$chat_id2&user_id=$from_id2"),true);
$statusd = $statjsond['result']['status'];

if($data == "1" ){
if( $statusd == 'creator' or $statusd == 'administrator' or in_array($from_id2,$Dev) or in_array($from_id2,$manger) or in_array($from_id2,$admin_user) or in_array($from_id2,$developer) or in_array($from_id2,$eri) or in_array($from_id2,$carlos) or in_array($from_id2,$nazar)) {
bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"$m1",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>". $time ." ,'callback_data'=>'00']],
[['text'=>'🔙' ,'callback_data'=>"home"]],
]])
]); 
}
else
{
bot('answerCallbackQuery',[ 
'callback_query_id'=>$update->callback_query->id, 
'text'=>"⌯ هذا الامر ليس لك", 
'show_alert'=>true 
 ]); 
} 
}
if($data == "2" ){
if( $statusd == 'creator' or $statusd == 'administrator' or in_array($from_id2,$Dev) or in_array($from_id2,$manger) or in_array($from_id2,$admin_user) or in_array($from_id2,$developer) or in_array($from_id2,$eri) or in_array($from_id2,$carlos) or in_array($from_id2,$nazar)) {
$statjsond = json_decode(file_get_contents("https://api.telegram.org/bot$token/getChatMember?chat_id=$chat_id2&user_id=".$from_id2),1);
$statusd = $statjsond['result']['status'];
bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"$m2",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>". $time ." ,'callback_data'=>'00']],
[['text'=>'🔙' ,'callback_data'=>"home"]],
]])
]); 
}
else
{
bot('answerCallbackQuery',[ 
'callback_query_id'=>$update->callback_query->id, 
'text'=>"⌯ هذا الامر ليس لك", 
'show_alert'=>true 
 ]); 
} 
}
if($data == "6" ){
if( $statusd == 'creator' or $statusd == 'administrator' or in_array($from_id2,$Dev) or in_array($from_id2,$manger) or in_array($from_id2,$admin_user) or in_array($from_id2,$developer) or in_array($from_id2,$eri) or in_array($from_id2,$carlos) or in_array($from_id2,$nazar)) {
$statjsond = json_decode(file_get_contents("https://api.telegram.org/bot$token/getChatMember?chat_id=$chat_id2&user_id=".$from_id2),1);
$statusd = $statjsond['result']['status'];
bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"$m6",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>". $time ." ,'callback_data'=>'00']],
[['text'=>'🔙' ,'callback_data'=>"home"]],
]])
]); 
}
else
{
bot('answerCallbackQuery',[ 
'callback_query_id'=>$update->callback_query->id, 
'text'=>"⌯ هذا الامر ليس لك", 
'show_alert'=>true 
 ]); 
} 
}
if($data == "3" ){
if( $statusd == 'creator' or $statusd == 'administrator' or in_array($from_id2,$Dev) or in_array($from_id2,$manger) or in_array($from_id2,$admin_user) or in_array($from_id2,$developer) or in_array($from_id2,$eri) or in_array($from_id2,$carlos) or in_array($from_id2,$nazar)) {
$statjsond = json_decode(file_get_contents("https://api.telegram.org/bot$token/getChatMember?chat_id=$chat_id2&user_id=".$from_id2),1);
$statusd = $statjsond['result']['status'];
bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"$m3",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>". $time ." ,'callback_data'=>'00']],
[['text'=>'🔙' ,'callback_data'=>"home"]],
]])
]); 
}
else
{
bot('answerCallbackQuery',[ 
'callback_query_id'=>$update->callback_query->id, 
'text'=>"⌯ هذا الامر ليس لك", 
'show_alert'=>true 
 ]); 
} 
}
if($data == "4" ){
if( $statusd == 'creator' or $statusd == 'administrator' or in_array($from_id2,$Dev) or in_array($from_id2,$manger) or in_array($from_id2,$admin_user) or in_array($from_id2,$developer) or in_array($from_id2,$eri) or in_array($from_id2,$carlos) or in_array($from_id2,$nazar)) {
$statjsond = json_decode(file_get_contents("https://api.telegram.org/bot$token/getChatMember?chat_id=$chat_id2&user_id=".$from_id2),1);
$statusd = $statjsond['result']['status'];
bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"$m4",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>". $time ." ,'callback_data'=>'00']],
[['text'=>'🔙' ,'callback_data'=>"home"]],
]])
]); 
}
else
{
bot('answerCallbackQuery',[ 
'callback_query_id'=>$update->callback_query->id, 
'text'=>"⌯ هذا الامر ليس لك", 
'show_alert'=>true 
 ]); 
} 
}
if($data == "5" ){
if(in_array($from_id2,$Dev) or in_array($from_id2,$developer) or in_array($from_id2,$eri)) {
$statjsond = json_decode(file_get_contents("https://api.telegram.org/bot$token/getChatMember?chat_id=$chat_id2&user_id=".$from_id2),1);
$statusd = $statjsond['result']['status'];
bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"$m5",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>". $time ." ,'callback_data'=>'00']],
[['text'=>'🔙' ,'callback_data'=>"home"]],
]])
]); 
}
else
{
bot('answerCallbackQuery',[ 
'callback_query_id'=>$update->callback_query->id, 
'text'=>"⚠️ هذا الامر ليس لك", 
'show_alert'=>true 
 ]); 
} 
}
if($data == "home" ){
if( $statusd == 'creator' or $statusd == 'administrator' or in_array($from_id2,$Dev) or in_array($from_id2,$manger) or in_array($from_id2,$admin_user) or in_array($from_id2,$developer) or in_array($from_id2,$eri) or in_array($from_id2,$carlos) or in_array($from_id2,$nazar)) {
bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"$m"
,'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>'م1','callback_data'=>'1'],['text'=>'م2','callback_data'=>'2']],
[['text'=>'م3','callback_data'=>'3'],['text'=>'م4','callback_data'=>'4']],
[['text'=>'م5' ,'callback_data'=>'5']],
[['text'=>'اوامر التحشيش' ,'callback_data'=>'6']],
[['text'=>"👨‍💻| مطور البـوت",'url'=>"t.me/$buy"]],
[['text'=>". $time ." ,'callback_data'=>'00']],
]])
]); 
}
else
{
bot('answerCallbackQuery',[ 
'callback_query_id'=>$update->callback_query->id, 
'text'=>"⚠️ هذا الامر ليس لك", 
'show_alert'=>true 
 ]); 
} 
}

if($text =="اوامر التحشيش" or $text =="التحشيش" or $text =="اوامر تحشيش"){ 
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer) or in_array($from_id,$carlos) or in_array($from_id,$nazar) or in_array($from_id,$eri)) {	if ($tc == 'group' | $tc == 'supergroup'){  
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',['chat_id'=>$chat_id,'text'=>"✵⁞ اوامر التحشيش
✵⁞ تفعيل + تعطيل اوامر التحشيش
┉  ┉  ┉  ┉  ┉  ┉  ┉  ┉
✵⁞ رفع/تنزيل ملك
✵⁞ رفع/تنزيل وزير
✵⁞ رفع/تنزيل طلي
✵⁞ رفع/تنزيل مطي
✵⁞ رفع/تنزيل حمار
✵⁞ رفع/تنزيل زاحف
✵⁞ رفع/تنزيل زوجي
✵⁞ رفع/تنزيل زوجتي
✵⁞ شنو رئيك ب + بالرد
ـ┉  ┉  ┉  ┉  ┉  ┉  ┉  ┉
✶ للاستفسار↫ ❪ @$buy ❫
",'parse_mode'=>"MARKDOWN",'reply_to_message_id'=>$message_id,]);}
else{bot('sendmessage',['chat_id'=>$chat_id,'text'=>"✵ قم بتفيل البوت اولا
",'reply_to_message_id'=>$message_id,'reply_markup'=>$inlinebutton,]);}}}}

if(preg_match('/^(بحث) (.*)/s', $text, $stor)){
if($settings["lock"]["serhi"] == "مقفول"){
$rs = 'https://play.google.com/store/search?q='.urlencode($stor[2]);
$rs1 = 'http://www.mobogenie.com/search.html?q='.urlencode($stor[2]);
$rs2 = 'http://www.mobomarket.net/search?keyword='.urlencode($stor[2]);
$rs3 = "http://www.apkmirror.com/?s=".urlencode($stor[2])."&post_type=app_release&searchtype=apk";
$rs4 = 'http://www.appsodo.com/search_'.urlencode($stor[2])."_1";
$rs5 = 'https://es.aptoide.com/search?query='.urlencode($stor[2])."&type=apps";
$rs6 = 'http://html5.oms.apps.opera.com/en_in/catalog.php?search='.urlencode($stor[2]);
$rs7 = 'https://www.androiddrawer.com/search-results/?q='.urlencode($stor[2]);
bot('sendChatAction', [
'chat_id'=>$chat_id,
'action'=>'typing',]);
sleep(1);
bot('sendMessage',[
'chat_id'=>$chat_id,
'parse_mode'=>'markdown',
'disable_web_page_preview'=>true,
'text'=>"✵⁞  اهلا عزيزي ⋙ [$first_name](tg://user?id=$from_id)
✵⁞ اليك نتائج البحث ( $text )
",'reply_to_message_id'=>$message->message_id,
'disable_web_page_preview'=> true ,
 'parse_mode'=>"Markdown",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
       [['text'=>"Googli Play Market", 'url'=>"$rs"]],
       [['text'=>"Mobogenie Market", 'url'=>"$rs1"]],  
       [['text'=>"Mobo Market", 'url'=>"$rs2"]],
          [['text'=>"Apkmirror Market", 'url'=>"$rs3"]],
       [['text'=>"Appsodo Market", 'url'=>"$rs4"]],
       [['text'=>"Appoide Market", 'url'=>"$rs5"]],  
       [['text'=>"Opera Market", 'url'=>"$rs6"]],
          [['text'=>"Androide Dwar Market", 'url'=>"$rs7"]],
 ]])]);}
 }
 
$setnamebot = file_get_contents("setname.txt");
$namebot = file_get_contents("namebot.txt");
if($text=="/start" and $starttext == null){
$st1 = file_get_contents("startlock.txt");
if($st1 == "✔"){
if($tc == "private"){
if( !in_array($from_id,$Dev) && !in_array($from_id,$eri)){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"*⌯ مرحبا انا بوت اسمي ⋙ $namebot ✶
⌯ وضيفتي حماية المجموعات من السبام والتفليش ...
⌯ لتفعيل البوت اضفني الى مجموعاتك قم برفعي مشرفا ثم ارسل تفعيل 

⌯ معرف المطور ⋙ @$buy 🌿👨‍🔧
➖*",'parse_mode'=>'MarkDown', 'disable_web_page_preview'=>true,
  'reply_to_message_id'=>$message->message_id,
  'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"- اضغط هنا للاضافة الى مجموعتك .",'url'=>"https://telegram.me/$tbbots?startgroup=start"]],
[['text'=>"- تابع قناة المطور ؛ 🌿.",'url'=>"https://t.me/$channel"]],
[["text"=>"ـ المطـور 🙇‍♂",'url'=>"t.me/$buy"]],
]])
]);
}}}}
$starttext = file_get_contents("starttxt.txt");
if($text=="/start" and $starttext != null){
if($tc == "private"){
$st1 = file_get_contents("startlock.txt");
if($st1 == "✔"){
if( !in_array($from_id,$Dev) && !in_array($from_id,$eri)){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
$starttext
",
'parse_mode'=>'MarkDown', 'disable_web_page_preview'=>true,
  'reply_to_message_id'=>$message->message_id,
  'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"Source Channel",'url'=>"t.me/$channel"]],
]])
]);
}}}}
$startt = file_get_contents("start.txt");
$starttext = file_get_contents("starttxt.txt");
if($text=="⌯ جلب start" and $starttext == null){
if($tc == "private"){
if( in_array($from_id,$Dev) or in_array($from_id,$eri)){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"*
✵ رسالة stsrt الدخول الحالية

⌯ مرحبا انا بوت اسمي ⋙ $namebot ✶
⌯ وضيفتي حماية المجموعات من السبام والتفليش ...
⌯ لتفعيل البوت اضفني الى مجموعاتك قم برفعي مشرفا ثم ارسل تفعيل 

⌯ معرف المطور ⋙ @$buy 🌿👨‍🔧
➖*
",'parse_mode'=>'MarkDown', 'disable_web_page_preview'=>true,
  'reply_to_message_id'=>$message->message_id,
]);
}}}
$starttext = file_get_contents("starttxt.txt");
if($text=="⌯ جلب start" and $starttext != null){
if($tc == "private"){
if(in_array($from_id,$Dev) or in_array($from_id,$eri)){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
• { `رسالة الستارت الحالية` } •

$starttext
",'parse_mode'=>'MarkDown', 'disable_web_page_preview'=>true,
  'reply_to_message_id'=>$message->message_id,
  ]);
  }
  }} 
if($text =="⌯ تعطيل start"){
if (in_array($from_id,$Dev) or in_array($from_id,$eri)){
	bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"✵ تم تعطيل start الدخول بنجاح
⌯ بواسطة ⋙ [$info](tg://user?id=$from_id)
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
  'reply_to_message_id'=>$message_id,
 ]);
file_put_contents("startlock.txt","✖");
}
}
if($text =="⌯ تفعيل start"){
if (in_array($from_id,$Dev) or in_array($from_id,$eri)){
	bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"✵ تم تفعيل start الدخول بنجاح
⌯ بواسطة ⋙ [$info](tg://user?id=$from_id)
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
  'reply_to_message_id'=>$message_id,
 ]);
file_put_contents("startlock.txt","✔");
}
}

if($text =="⌯ تعطيل التواصل" ){
if (in_array($from_id,$Dev) or in_array($from_id,$eri)){
	bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"✵ تم تعطيل التواصل بنجاح
⌯ بواسطة ⋙ [$info](tg://user?id=$from_id)
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
  'reply_to_message_id'=>$message_id,
 ]);
file_put_contents("openst.txt","✖");
}}
if($text =="⌯ تفعيل التواصل"){
if (in_array($from_id,$Dev) or in_array($from_id,$eri)){
	bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"✵ تم تفعيل التواصل بنجاح
⌯ بواسطة ⋙ [$info](tg://user?id=$from_id)
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
  'reply_to_message_id'=>$message_id,
 ]);
file_put_contents("openst.txt","✔");
}
}
$Twassl = file_get_contents("twassl.txt");
$Twasl = file_get_contents("twasl.txt");
$locktwas = file_get_contents("openst.txt");
if($text != "/start" and $Twasl == null and !in_array($from_id,$Dev)){
if($locktwas == "✔"){
if($tc == 'private'){
    bot('forwardMessage',[
        'chat_id'=>$Dev[0],
        'from_chat_id'=>$chat_id,
  'message_id'=>$update->message->message_id,
'text'=>$text,
    ]);
    bot('sendmessage',[
       'chat_id'=>$chat_id,
        'text'=>"✵ تم ارسال رسالتك لـ المطور ✓
⌯ معرف المطور ⋙ @$buy
⌯ [للمزيد اضغط هنا](t.me/$channel)
➖
",'parse_mode'=>"markdown",
'disable_web_page_preview'=>true,
  'reply_to_message_id'=>$message->message_id,
        'reply_markup'=>json_encode([
          'inline_keyboard'=>[  
               ]])]);}}
}
$Twassl = file_get_contents("twassl.txt");
$Twasl = file_get_contents("twasl.txt");
$locktwas = file_get_contents("openst.txt");
if($text != "/start" and $Twasl != null and !in_array($from_id,$Dev)){
if($locktwas == "✔"){
if($tc == 'private'){
    bot('forwardMessage',[
        'chat_id'=>$Dev[0],
        'from_chat_id'=>$chat_id,
  'message_id'=>$update->message->message_id,
'text'=>$text,
    ]);
    bot('sendmessage',[
       'chat_id'=>$chat_id,
        'text'=>"
$Twasl",
'parse_mode'=>"markdown",
'disable_web_page_preview'=>true,
  'reply_to_message_id'=>$message->message_id,
        'reply_markup'=>json_encode([
          'inline_keyboard'=>[  
                [['text'=>'$chinnl','url'=>'https://t.me/$channel']],
               ]])]);}}}

if($message->reply_to_message->forward_from->id and in_array($from_id,$Dev)){
    bot('sendMessage',[ 
'chat_id'=>$message->reply_to_message->forward_from->id,
        'text'=>$text,
    ]);
    bot('sendmessage',[
       'chat_id'=>$Dev[0],
        'text'=>"⌯ تم ارسال رسالتك بنجاح",
]);}
$twasl = file_get_contents("twasl.txt");
if($text=="⌯ جلب التواصل" and $twasl == null){
if($tc == "private"){
if (in_array($from_id,$Dev) or in_array($from_id,$eri)){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
• { `رد التواصل الحالي` } •

✵ تم ارسال رسالتك لـ المطور ✓
⌯ معرف المطور ⋙ @$buy
⌯ [للمزيد اضغط هنا](t.me/$channel)
➖
",'parse_mode'=>"markdown",
'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message->message_id,
        'reply_markup'=>json_encode([
          'inline_keyboard'=>[  
               ]])]);}}}

$twasl = file_get_contents("twasl.txt");
if($text=="⌯ جلب رد التواصل" and $twasl != null){
if($tc == "private"){
if (in_array($from_id,$Dev) or in_array($from_id,$eri)){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
• { `رد التواصل الجديد` } •

$twasl
",'parse_mode'=>'MarkDown', 'disable_web_page_preview'=>true,
  'reply_to_message_id'=>$message->message_id,
 'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"$chinnl",'url'=>"t.me/$channel"]],
]])
]);
}}}
$Twassl = file_get_contents("twassl.txt");
$Twasl = file_get_contents("twasl.txt");
if ($text == "⌯ تعين رد التواصل" or $text == "تعيين رد التواصل" and in_array($from_id,$Dev)){
file_put_contents("twassl.txt","nam");
bot("sendMessage",[
"chat_id"=>$chat_id,
"text"=>"⌯ قم بارسال الرد الان عزيزي
",'parse_mode'=>"MARKDOWN",
 'reply_to_message_id'=>$message_id
,]);}
if ($text == "⌯ حذف رد التواصل" or $text == "حذف رد التواصل" and in_array($from_id,$Dev)){
file_put_contents("twasl.txt","");
bot("sendMessage",[
"chat_id"=>$chat_id,
"text"=>"✵ تم حذف رد التواصل بنجاح
",'parse_mode'=>"MARKDOWN",
 'reply_to_message_id'=>$message_id
,]);}
if($text && $Twassl =="nam" and in_array($from_id,$Dev)){
file_put_contents("twasl.txt",$text); 
file_put_contents("twassl.txt","");
bot("sendmessage",[
"chat_id"=>$chat_id,
"text" => "⌯ تم تعيين رد التواصل بنجاح
✵ $text
 ",'parse_mode'=>"MARKDOWN",
 'reply_to_message_id'=>$message_id
,]);}
 
 $setnamebot = file_get_contents("setname.txt");
$namebot = file_get_contents("namebot.txt");
if ($text == "⌯ تغير اسم البوت" and in_array($from_id,$Dev)){
file_put_contents("setname.txt","nam");
bot("sendMessage",[
"chat_id"=>$chat_id,
"text"=>"✵ قم بأرسال اسم البوت الان ",'parse_mode'=>"MARKDOWN",
 'reply_to_message_id'=>$message_id
,]);}
if($text && $setnamebot =="nam" and in_array($from_id,$Dev)){
file_put_contents("namebot.txt",$text); 
file_put_contents("setname.txt","");
bot("sendmessage",[
"chat_id"=>$chat_id,
"text" =>"✵ تم تغير اسم البوت بنجاح
⌯ اسمي الان ⋙ $text
",'parse_mode'=>"MARKDOWN",
 'reply_to_message_id'=>$message_id
,]);}
$botproxre = array("*⌯ شو ارجع لحركاتي لقديمة اسمي $namebot *",
"*⌯ راح نموت وانت بعدك تصيح بوت*",
"*⌯ مو بوت ناديني $namebot*",
"*⌯ هلا عمري اسمي$namebot*",
"*⌯ اسمي انا $namebot*");
 $reproxbot = array_rand($botproxre, 1);
if($text == "بوت" || $text == "البوت شنو اسمه" || $text == "شسمه البوت" || $text == "البوت شسمه" || $text == "اسم البوت" and $namebot == NULL){
if ($tc == 'group' | $tc == 'supergroup'){
bot('sendMessage',['chat_id'=>$chat_id, 'text'=>"$botproxre[$reproxbot]",'parse_mode'=>"MARKDOWN",'reply_to_message_id'=>$message_id,]);}}
$botre = array("*⌯ شو بدك والازعاج لاتلح*",
"*⌯ اي ياعيون البوت اسمعك*",
"*⌯ عيب ماتعرف $namebot*",
"*⌯ شغال لاتقلق اشوف حركاتك*");
$rebot = array_rand($botre, 1);
if($text == "بوت" || $text == "البوت شنو اسمه" || $text == "شسمه البوت" || $text == "البوت شسمه" || $text == "اسم البوت" and $namebot != NULL){
if ($tc == 'group' | $tc == 'supergroup'){
bot('sendMessage',['chat_id'=>$chat_id, 'text'=>"$botre[$rebot]",'parse_mode'=>"MARKDOWN",'reply_to_message_id'=>$message_id,]);}}
$namere = array("*⌯ خبصت الدنيا كل شوي بوت*",
"*⌯ اقراء اسمي كارلوس*",
"*⌯ انت ازعجتني ياولد*",
"*⌯ اذكر ربك ولا تستكثر*");
$rename = array_rand($namere, 1);
if($text == "$namebot" and $namebot != NULL){
if ($tc == 'group' | $tc == 'supergroup'){
bot('sendMessage',['chat_id'=>$chat_id, 'text'=>$namere[$rename],'parse_mode'=>"MARKDOWN",'reply_to_message_id'=>$message_id,]);}}
$proxre = array("*⌯ حياتي اتفضل معاك كارلوس*",
"*⌯ هلا عمري امرني انا كارلوس*",
"*⌯ كول حياتي شرايد كساع و صحت بسمي*",
"*⌯ لاإله إلا الله وحده لاشريك له*");
$reprox = array_rand($proxre, 1);
if($text == "كارلوس" and $namebot == NULL){
if ($tc == 'group' | $tc == 'supergroup'){
bot('sendMessage',['chat_id'=>$chat_id, 'text'=>$proxre[$reprox],'parse_mode'=>"MARKDOWN",'reply_to_message_id'=>$message_id,]);}}
////////////////////////////////////////////////
$step1 = json_decode(file_get_contents("https://api.telegram.org/bot".API_KEY."/getChatMember?chat_id=$chat_id&user_id=$idBot"),true);
$step3 = $step1['result']['can_change_info'];
$step4 =  $step1['result']['can_delete_messages'];
$step5 = $step1['result']['can_restrict_members'];
$step6 = $step1['result']['can_invite_users'];
$step7 = $step1['result']['can_pin_messages'];
$step8 = $step1['result']['can_promote_members'];

if($step3 == 1){
$check3 = '✅';
}elseif($step3 != 1){
$check3 = '❌';
}if($step4 == 1){
$check4 = '✅';
}elseif($step4 != 1){
$check4 = '❌';
}if($step5 == 1){
$check5 = '✅';
}elseif($step5 != 1){
$check5 = '❌';
}if($step6 == 1){
$check6 = '✅';
}elseif($step6 != 1){
$check6 = '❌';
}if($step7 == 1){
$check7 = '✅';
}elseif($step7 != 1){
$check7 = '❌';
}if($step8 == 1){
$check8 = '✅';
}elseif($step8 != 1){
$check8 = '❌';
}

if($text == 'كشف البوت' ){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer) or in_array($from_id,$nazar) or in_array($from_id,$carlos) or in_array($from_id,$eri)) {
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"*⌯⁞ اهلا بك عزيزي 🙋🏽‍♂
⌯⁞ هذه صلاحيات البوت ادناه !
⌯⁞ علامة ❪✓❫ مفتوحة ❪✖️❫ مقفولة↯
ـ┉  ┉  ┉  ┉  ┉  ┉  ┉  ┉
⌯⁞ تغيير معلومات المجموعة:-❪ $check3 ❫
⌯⁞ دعوة الاعضاء الجديدة :-❪ $check6 ❫
⌯⁞ تثبيت رسائل الاعضاء :-❪ $check7 ❫
⌯⁞ حظر تقيد الاعضاء:-❪ $check5 ❫
⌯⁞ اضافة مشرفين:-❪ $check8 ❫
⌯⁞ حذف الرسائل:-❪ $check4 ❫
ـ┉  ┉  ┉  ┉  ┉  ┉  ┉  ┉
✶ للاستفسار↫ ❪ @$buy ❫*
",'parse_mode'=>"markdown",
'reply_to_message_id'=>$message->message_id,
]);}}
elseif($rt && $text =="رفع مشرف"){
if ( $status == 'creator' or in_array($from_id,$Dev)) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"✵ العضو ⋙ [$re_name](tg://user?id=$re_id)
⌯ تم ترقية ليصبح مشرف  
",'parse_mode'=>"markdown",
'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
 bot('promoteChatMember',[
 'chat_id'=>$chat_id,
  'user_id'=>$re_id,
 'can_change_info'=>True,
  'can_delete_messages'=>True,
  'can_invite_users'=>True,
  'can_restrict_members'=>True,
  'can_pin_messages'=>True,
  'can_promote_members'=>false
]);
	}
}
elseif($rt && $text =="تنزيل مشرف"){
if ( $status == 'creator' or in_array($from_id,$Dev)) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"✵ العضو ⋙ [$re_name](tg://user?id=$re_id)
⌯ تم تنزيله من قائمة المشرفين
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
 bot('restrictChatMember',[
   'user_id'=>$re_id,   
   'chat_id'=>$chat_id,
   'can_post_messages'=>true,
   'can_add_web_page_previews'=>false,
   'can_send_other_messages'=>true,
   'can_send_media_messages'=>true,
         ]);}}

$silent = $settings["silentlist"];
if($rt && $text == "كتم" or $rt && $text == "اكتم" or $rt && $text == "قيد" or $rt && $text == "تقييد" or $rt && $text == "تقيد" and !in_array($re_id,$silent)){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer) or in_array($from_id,$carlos) or in_array($from_id,$nazar) or in_array($from_id,$eri)) {
if ( $statusrt != 'creator' && $statusrt != 'administrator' && !in_array($re_id,$Dev) && !in_array($re_id,$manger) && !in_array($re_id,$admin_user) && !in_array($re_id,$mmyaz) && !in_array($re_id,$developer) && !in_array($re_id,$carlos) && !in_array($re_id,$nazar) && !in_array($re_id,$eri)) {
$add = $settings["information"]["added"];
if ($add == true){
bot('restrictChatMember',[
'user_id'=>$re_id,
'chat_id'=>$chat_id,
'can_post_messages'=>false,
]);
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"✵العضو ⋙ [$re_name](tg://user?id=$re_id)
⌯⁞ ايديه ↫ `$re_id`
⌯ تم كتمه/تقييده من المجموعة
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$re_msgid,
]);
$settings["silentlist"][]="$re_id";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
bot('sendmessage',[
 'chat_id'=>$chat_id,
 'text'=>"✵ قم بتفيل البوت اولا",
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
 }
}
else
{
bot('sendmessage',[
 'chat_id'=>$chat_id,
 'text'=>"✵ لايمكنني تقييد الادمنية او المدراء اواو المميزين",
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
}
}
}
elseif (strpos($text, "كتم لمدة") !== false && $rt or strpos($text, "تقييد لمدة ") !== false && $rt) {
if(!in_array($re_id,$silent)){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer) or in_array($from_id,$carlos) or in_array($from_id,$nazar) or in_array($from_id,$eri)) {
if ( $statusrt != 'creator' && $statusrt != 'administrator' && !in_array($re_id,$Dev) && !in_array($re_id,$manger) && !in_array($re_id,$admin_user) && !in_array($re_id,$mmyaz) && !in_array($re_id,$developer) && !in_array($re_id,$carlos) && !in_array($re_id,$nazar) && !in_array($re_id,$eri)) {
$add = $settings["information"]["added"];
$we = str_replace(['كتم لمدة ',' تقييد لمدة'],'',$text );
if ($we <= 1000 && $we >= 1){
if ($add == true) {
$weplus = $we + 0;
 bot('sendmessage',[
 'chat_id'=>$chat_id,
'text'=>"✵ العضو ⋙ [$re_name](tg://user?id=$re_id)
⌯⁞ ايديه ↫ `$re_id`
⌯ تم كتمه لمدة $we دقيقه
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
bot('restrictChatMember',[
'user_id'=>$re_id,
'chat_id'=>$chat_id,
'can_post_messages'=>false,
'until_date'=>time()+$weplus*60,
]);
$settings["silentlist"][]="$re_id";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
else
{
bot('sendmessage',[
 'chat_id'=>$chat_id,
 'text'=>"✵ قم بتفيل البوت اولا",
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
}
}
else
{
bot('sendmessage',[
 'chat_id'=>$chat_id,
 'text'=>"✵ خطا
➖➖➖➖➖➖
✵ يجب اختيار عدد بين 1 الى 1000
",'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
}
}
else
{
bot('sendmessage',[
'chat_id' => $chat_id,
'text'=>"✵ لايمكنني تقييد الادمنية او المدراء او المطورين او المميزين",
'reply_markup'=>$inlinebutton,
]);
}
}
}
$idp == file_get_contents("data/$chat_id/bans.txt");
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer) or in_array($from_id,$carlos) or in_array($from_id,$nazar) or in_array($from_id,$eri)) {
if($rt and $text == "الغاء الكتم" or $rt and $text == "الغاء كتم" or $rt and $text == "الغاء تقيد" or $rt and $text == "الغاء تقييد" or $rt and $text == "الغاء التقييد"){
bot('restrictChatMember',[
'user_id'=>$re_id,
'chat_id'=>$chat_id,
'can_post_messages'=>true,
'can_add_web_page_previews'=>false,
'can_send_other_messages'=>true,
'can_send_media_messages'=>true,
]);
bot('sendmessage',[
 'chat_id'=>$chat_id,
'text'=>"✵ العضو » [$re_name](tg://user?id=$re_id)
⌯⁞ ايديه ↫ `$re_id`
✵ تم الغاء كتمه/تقييده بنجاح
⌯ بواسطة ⋙「 [$first_name](tg://user?id=$from_id) 」
",'parse_mode'=>"markdown",
'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
]);
$key = array_search($re_id,$settings["silentlist"]);
unset($settings["silentlist"][$key]);
$settings["silentlist"] = array_values($settings["silentlist"]); 
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
} 
}
$silent = $settings["silentlist"];
if( $text == "المكتومين" or $text == "المقيدين" or $text == "قائمة المقيدين" or $text == "قائمه المقيدين" or $text == "قائمة المكتومين" and $settings["silentlist"]!== NULL){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer) or in_array($from_id,$carlos) or in_array($from_id,$nazar) or in_array($from_id,$eri)) {
$silent = $settings["silentlist"];
for($z = 0;$z <= count($silent)-1;$z++){
$Apimktom = json_decode(file_get_contents("http://api.telegram.org/bot".API_KEY."/getChat?chat_id=$silent[$z]"));
$Usermktom =$Apimktom->result->username;
$result = $result."┇$z- @$Usermktom"."\n";
}
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"✵ قائمه المكتومين/ المقيدين :
┉ ┉ ┉ ┉ ┉ ┉ ┉ ┉ ┉
⌯ $result",
 ]);
}
}
if( $text == "مسح المكتومين" or $text == "مسح المكاتيم" or $text == "مسح المقيدين" or $text == "مسح المقيديين"){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer) or in_array($from_id,$carlos) or in_array($from_id,$nazar) or in_array($from_id,$eri)) {
$add = $settings["information"]["added"];
if ($add == true){
$silent = $settings["silentlist"];
for($z = 0;$z <= count($silent)-1;$z++){
 bot('restrictChatMember',[
'user_id'=>$silent[$z],
'chat_id'=>$chat_id,
'can_post_messages'=>true,
'can_add_web_page_previews'=>false,
'can_send_other_messages'=>true,
'can_send_media_messages'=>true,
]);}
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"✵ تم مسح سلة المكتومين/المقيدين
⌯ بواسطة ⋙「 [$first_name](tg://user?id=$from_id) 」
",'parse_mode'=>"markdown",
'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
unset($settings["silentlist"]);
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
bot('sendmessage',[
 'chat_id'=>$chat_id,
 'text'=>"✵ قم بتفيل البوت اولا",
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
}
}
}

$update     = json_decode(file_get_contents('php://input'));
$message = $update->message;
$message_id = $update->message->message_id;
$text           = $message->text;
$chat_id     = $message->chat->id;
$user          = $update->message->from->username;
$sudo         = $sudo; // ايديك.
$bot_id       = $idBot; // ايدي بوتك .
$from_id     = $message->from->id;
$first_name = $message->from->first_name;
$type       = $update->message->chat->type;

mkdir("Fri3nd_s");

$message_id = $message->message_id;
$gp_get = file_get_contents("Fri3nd_s/groups.txt");
$groups = explode("\n", $gp_get);
$GG1ZZ = file_get_contents("Fri3nd_s/iBadlz.txt");
$pirvate = explode("\n",file_get_contents("Fri3nd_s/pirvate.txt"));
$forward = $update->message->forward_from;
$MOhaMMed = count($pirvate)-1;
$MoHaMMedd = count($groups)-1;

if($text == "اذاعه بالتوجيه" || $text == "⌯ اذاعه عام بالتوجيه" || $text == "اذاعه للكل بالتوجيه" || $text =="🖇¦ اذاعه عام توجيه"){
if(in_array($from_id,$Dev) or in_array($from_id,$developer)){
    file_put_contents("Fri3nd_s/iBadlz.txt","iBadlz");
    bot('sendmessage',[
    'chat_id'=>$chat_id,
    'text'=>"*✵⁞ اهلا عزيزي الـمطور ، 
⌯⁞ قم بتوجيه رسالتك الان ...
*",'parse_mode'=>"MARKDOWN",
 'reply_to_message_id'=>$message->message_id
  ]);
  }}
if($message and $GG1ZZ == "iBadlz"){
if(in_array($from_id,$Dev) or in_array($from_id,$developer)){
  for($i=0;$i<count($groups);$i++){
bot('ForwardMessage',[
 'chat_id'=>$groups[$i],
 'from_chat_id'=>$chat_id,
 'message_id'=>$message_id,
 ]);
}
for($i=0;$i<count($pirvate);$i++){
bot('forwardMessage',[
 'chat_id'=>$pirvate[$i],
 'from_chat_id'=>$chat_id,
 'message_id'=>$message->message_id,
 ]);
 unlink("Fri3nd_s/iBadlz.txt");
} 
bot('sendMessage',[
          'chat_id'=>$chat_id,
          'text'=>"*✵⁞ اهلا عزيزي الـمطور ، 
 ⌯⁞ تم ارسال رسالتك الى ⋙ $MOhaMMed عضوا
و ⋙ $MoHaMMedd مجموعة*
",'parse_mode'=>"MARKDOWN",
'reply_to_message_id'=>$message->message_id
   ]);
}}
if($text and $type == "private" and !in_array($from_id, $pirvate)){
file_put_contents("Fri3nd_s/pirvate.txt", "$from_id\n",FILE_APPEND);
}
if($text and $type == "supergroup" and !in_array($chat_id, $groups)) {
file_put_contents("Fri3nd_s/groups.txt", "$chat_id\n",FILE_APPEND);
}

if($text == "اذاعه خاص" || $text =="⌯ اذاعه خاص"){
if(in_array($from_id,$Dev) or in_array($from_id,$developer)){
    file_put_contents("Fri3nd_s/iBadlz.txt","JJ119");
    bot('sendmessage',[
    'chat_id'=>$chat_id,
    'text'=>"*✵⁞ اهلا عزيزي الـمطور ، قم بأرسال رسالتك
⌯⁞ ملاحظةهہ : يمكنك استعمال الماركداون ،! *",
'parse_mode'=>"MarkDown",
    'reply_to_message_id'=>$message->message_id
  ]);
  }}
if($message and $GG1ZZ == "JJ119"){
if(in_array($from_id,$Dev) or in_array($from_id,$developer)){
    for ($i=0; $i<count($pirvate); $i++) { 
        bot('sendMessage',[
          'chat_id'=>$pirvate[$i],
          'text'=>"$text",
'parse_mode'=>"MarkDown",
'disable_web_page_preview'=>true,
]);
 file_put_contents("Fri3nd_s/iBadlz.txt","MMoHaMMeD");
} 
$MOhaMMed = count($pirvate)-1;
bot('sendMessage',[
          'chat_id'=>$chat_id,
          'text'=>"*✵⁞ اهلا عزيزي الـمطور ، 
 ⌯⁞ تم ارسال رسالتك الى $MOhaMMed عضوا ،*",
    'parse_mode'=>"MARKDOWN",
    'reply_to_message_id'=>$message->message_id
          ]);
}}
if ($text == "اذاعه للكل" || $text == "اذاعه عام" || $text == "اذاعه"  ||$text == "⌯ اذاعه عام" || $text =="📤¦ اذاعه عام"){
if(in_array($from_id,$Dev) or in_array($from_id,$developer)){
    file_put_contents("Fri3nd_s/iBadlz.txt","LE_C4_KR");
    bot('sendmessage',[
    'chat_id'=>$chat_id,
    'text'=>"*✵⁞ اهلا عزيزي الـمطور ، قم بأرسال رسالتك
⌯⁞ ملاحظةهہ : يمكنك استعمال الماركداون ، *",
'parse_mode'=>"MARKDOWN",
    'reply_to_message_id'=>$message->message_id
  ]);
  }}
if($message and $GG1ZZ == "LE_C4_KR"){
if(in_array($from_id,$Dev) or in_array($from_id,$developer)){
    for ($i=0; $i<count($groups); $i++) { 
        bot('sendMessage',[
          'chat_id'=>$groups[$i],
          'text'=>"$text",
'parse_mode'=>"MarkDown",
'disable_web_page_preview'=>true,

]);
} 
for ($i=0; $i<count($pirvate); $i++) { 
        bot('sendMessage',[
          'chat_id'=>$pirvate[$i],
          'text'=>"$text",
'parse_mode'=>"MarkDown",
'disable_web_page_preview'=>true,
]);
 unlink("Fri3nd_s/iBadlz.txt");
} 
bot('sendMessage',[
          'chat_id'=>$chat_id,
          'text'=>"*
✵⁞ اهلا عزيزي الـمطور ، 
 ⌯⁞ تم ارسال رسالتك الى ⋙ $MOhaMMed عضوا
و ⋙ $MoHaMMedd مجموعة*
",'parse_mode'=>"MarkDown",'reply_to_message_id'=>$message->message_id
          ]);}}

if($text == "اذاعه خاص بالتوجيه" || $text == "⌯ اذاعه خاص بالتوجيه"){
if(in_array($from_id,$Dev) or in_array($from_id,$developer)){
    file_put_contents("Fri3nd_s/iBadlz.txt","od_1j");
    bot('sendmessage',[
    'chat_id'=>$chat_id,
    'text'=>"*✵⁞ اهلا عزيزي الـمطور ، قم بتوجيه رسالةه*
",'parse_mode'=>"MARKDOWN",'reply_to_message_id'=>$message->message_id
  ]);}}
if($message and $GG1ZZ == "od_1j"){
if(in_array($from_id,$Dev) or in_array($from_id,$developer)){
for($i=0;$i<count($pirvate);$i++){
bot('forwardMessage',[
 'chat_id'=>$pirvate[$i],
 'from_chat_id'=>$chat_id,
 'message_id'=>$message->message_id,
 ]);
 unlink("Fri3nd_s/iBadlz.txt");
} 
$MOhaMMed = count($pirvate)-1;
bot('sendMessage',[
          'chat_id'=>$chat_id,
          'text'=>"*✵⁞ اهلا عزيزي الـمطور ، 
 ⌯⁞ تم ارسال رسالتك الى ⋙ $MOhaMMed عضوا
و ⋙ $MoHaMMedd مجموعة*
",'parse_mode'=>"MARKDOWN",'reply_to_message_id'=>$message->message_id
   ]);}}
if(in_array($from_id,$Dev) or in_array($from_id,$developer)){
if($text == "⌯ الاحصائيات" or $text == "الاحصائيات"){
$c = count($groups);
$MOhaMMed = count($pirvate)-1;
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"✵ احصائيات البوت 

⌯ عدد المجموعات المفعلة ⋙ $c
⌯ عدد المشتركين ⋙ $MOhaMMed
",'parse_mode'=>"MARKDOWN",
'reply_to_message_id'=>$message->message_id,
]);
}}
if(in_array($from_id,$Dev) or in_array($from_id,$developer)){
if($text == "⌯ المشتركين" or $text == "المشتركين"){
$c = count($groups);
$MOhaMMed = count($pirvate)-1;
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"✵ احصائيات المشتركين

⌯ عدد المشتركين ~ $MOhaMMed
",'parse_mode'=>"MARKDOWN",
'reply_to_message_id'=>$message->message_id,
]);
}}
if(in_array($from_id,$Dev) or in_array($from_id,$developer)){
if($text == "⌯ المجموعات" or $text == "المجموعات"){
$c = count($groups);
$MOhaMMed = count($pirvate)-1;
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"✵ احصائيات المجموعات

⌯ عدد المجموعات ~ $c
",'parse_mode'=>"MARKDOWN",
'reply_to_message_id'=>$message->message_id,
]);
}}

elseif($text =="⌯⁞ حظر مجموعه" ){
if ($tc == "private") {
if (in_array($from_id,$Dev) or in_array($from_id,$developer)) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>" ⌯⁞ حسننا عزيزي المطور،
⌯⁞ الان ارسل غادر + ايدي المجموعة
",'reply_to_message_id'=>$message_id,
 ]);}}
}
elseif(strpos($text  , "غادر" ) !== false or strpos($text  , "/left " ) !== false) {
$text = str_replace(['/left ','غادر'],'',$text );
if ($tc == "private") {
if (in_array($from_id,$Dev) or in_array($from_id,$developer)) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
⌯⁞ تم حظر المجموعه بنجاح 
ايدي المجموعه: $text
",]);
bot('LeaveChat',[
  'chat_id'=>$text,
]);unlink("data/$text.json");}}}
####
if($status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$developer) or in_array($from_id,$carlos) or in_array($from_id,$nazar) or in_array($from_id,$eri)){
if($rt and $text == "ضع صوره" or $text == "ضع صورة" and $re_msd->photo){
 $file = "https://api.telegram.org/file/bot".API_KEY."/".bot('getfile',['file_id'=>$re_msd->photo[1]->file_id])->result->file_path; file_put_contents("$chat_id.jpg",file_get_contents($file));
bot('setChatPhoto',[
'chat_id'=>$chat_id,
'photo'=>new CURLFile("$chat_id.jpg"),
]);
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"*⌯⁞ تم تعيين صورة المجموعة  
⌯⁞ بواسطة ⋙* [$first_name](tg://user?id=$from_id) 
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
unlink("$chat_id.jpg");
}}
if($status != 'creator' or $status != 'administrator' and !in_array($from_id,$Dev) and !in_array($from_id,$developer) and !in_array($from_id,$carlos) and !in_array($from_id,$nazar) and !in_array($from_id,$eri)){
if($rt and $text == "ضع صوره" or $text == "ضع صورة" and $re_msd->photo){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"*⌯⁞ هذا الامر ليس لك  
⌯⁞ عزيزي* [$first_name](tg://user?id=$from_id) 
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
}}

if($text == "محيبس"){
$lockgamess = $settings["lock"]["gamess"];
if($settings["lock"]["game"] == "مفتوح"){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"👊1،👊2،👊3،👊4،👊5
اختار وجرب حظك 💬💢",
]);
}
$b = array("✅صح","❌خطاء","❌خطاء","❌خطاء","❌خطاء","❌خطاء","❌خطاء");
$c = array_rand($b,1);
$armof = array("الحمد لله","سبحان الله","استغفر الله");
$adi = array_rand($armof,1);
if($text == "1" or $text == "2" or $text == "3" or $text == "4" or $text == "5"){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"*
✵ جوابك - $b[$c]
⌯ $armof[$adi]*
",'parse_mode'=>"markdown",
'reply_to_message_id'=>$message->message_id,
]);
}
}
####
if($text == "غ1"){
if($settings["lock"]["ahbgii"] == "مقفول"){
bot( sendaudio ,[
 chat_id =>$chat_id, 
 audio =>"https://t.me/QQ7_W/238",
 reply_to_message_id =>$message->message_id, 
]);
}
}
if($text == "غ2"){
if($settings["lock"]["ahbgii"] == "مقفول"){
bot( sendaudio ,[
 chat_id =>$chat_id, 
 audio =>"https://t.me/QQ7_W/243",
 reply_to_message_id =>$message->message_id, 
]);
}
}
if($text == "غ3"){
if($settings["lock"]["ahbgii"] == "مقفول"){
bot( sendaudio ,[
 chat_id =>$chat_id, 
 audio =>"https://t.me/QQ7_W/242",
 reply_to_message_id =>$message->message_id, 
]);
}
}
if($text == "غ4"){
if($settings["lock"]["ahbgii"] == "مقفول"){
bot( sendaudio ,[
 chat_id =>$chat_id, 
 audio =>"https://t.me/QQ7_W/241",
 reply_to_message_id =>$message->message_id, 
]);
}
}
if($text == "غ5"){
if($settings["lock"]["ahbgii"] == "مقفول"){
bot( sendaudio ,[
 chat_id =>$chat_id, 
 audio =>"https://t.me/QQ7_W/240",
 reply_to_message_id =>$message->message_id, 
]);
}
}
if($text == "غ6"){
if($settings["lock"]["ahbgii"] == "مقفول"){
bot( sendaudio ,[
 chat_id =>$chat_id, 
 audio =>"https://t.me/QQ7_W/239",
 reply_to_message_id =>$message->message_id, 
]);
}
}
if($text == "غ7"){
if($settings["lock"]["ahbgii"] == "مقفول"){
bot( sendaudio ,[
 chat_id =>$chat_id, 
 audio =>"https://t.me/QQ7_W/237",
 reply_to_message_id =>$message->message_id, 
]);
}
}
if($text == "غ8"){
if($settings["lock"]["ahbgii"] == "مقفول"){
bot( sendaudio ,[
 chat_id =>$chat_id, 
 audio =>"https://t.me/QQ7_W/236",
 reply_to_message_id =>$message->message_id, 
]);
}
}
if($text == "غ9"){
if($settings["lock"]["ahbgii"] == "مقفول"){
bot( sendaudio ,[
 chat_id =>$chat_id, 
 audio =>"https://t.me/QQ7_W/235",
 reply_to_message_id =>$message->message_id, 
]);
}
}
if($text == "غ10"){
if($settings["lock"]["ahbgii"] == "مقفول"){
bot( sendaudio ,[
 chat_id =>$chat_id, 
 audio =>"https://t.me/QQ7_W/234",
 reply_to_message_id =>$message->message_id, 
]);
}
}
if($text == "غ11"){
if($settings["lock"]["ahbgii"] == "مقفول"){
bot( sendaudio ,[
 chat_id =>$chat_id, 
 audio =>"https://t.me/QQQ_YQ/377",
 reply_to_message_id =>$message->message_id, 
]);
}
}
if($text == "غ12"){
if($settings["lock"]["ahbgii"] == "مقفول"){
bot( sendaudio ,[
 chat_id =>$chat_id, 
 audio =>"https://t.me/QQQ_YQ/374",
 reply_to_message_id =>$message->message_id, 
]);
}
}
if($text == "غ13"){
if($settings["lock"]["ahbgii"] == "مقفول"){
bot( sendaudio ,[
 chat_id =>$chat_id, 
 audio =>"https://t.me/QQQ_YQ/373",
 reply_to_message_id =>$message->message_id, 
]);
}
}
if($text == "غ14"){
if($settings["lock"]["ahbgii"] == "مقفول"){
bot( sendaudio ,[
 chat_id =>$chat_id, 
 audio =>"https://t.me/QQQ_YQ/370",
 reply_to_message_id =>$message->message_id, 
]);
}
}
if($text == "غ15"){
if($settings["lock"]["ahngii"] == "مقفول"){
bot( sendaudio ,[
 chat_id =>$chat_id, 
 audio =>"https://t.me/QQQ_YQ/368",
 reply_to_message_id =>$message->message_id, 
]);
}
}
#┉ ┉ ┉ ┉ ┉ ┉ ┉ ┉ ┉
$re = $update->message->reply_to_message;
$me = $message->reply_to_message;  
$mem = $me->message_id; 
$AEHAB = str_replace("كله ","$AEHAB",$text); 
if($re){
if($text == "كله $AEHAB"){ 
bot('sendMessage',[ 
'chat_id'=>$chat_id, 
'text'=>"اكلك $AEHAB", 
'reply_to_message_id'=>$mem, 
]); 
} 
}
#┉ ┉ ┉ ┉ ┉ ┉ ┉ ┉ ┉
$taag = $settings["tagusermy"];
if($message and !in_array($from_id,$taag)){
$settings["tagusermy"][]="$from_id";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
if($text == "تاك" or $text == "تاك الكل" or $text == "تاك للكل"){
$taag = $settings["tagusermy"];
for($z = 0;$z <= count($taag)-1;$z++){
$Apitag = json_decode(file_get_contents("http://api.telegram.org/bot".API_KEY."/getChat?chat_id=$taag[$z]"));
@$Usertag = $Apitag->result->username;
$first_natg = $Apitag->result->first_name;
$idtg =$Apitag->result->id;
if(!$Usertag){
$Usertag = "$idtg";
}elseif($Usertag){
$Usertag = "@$Usertag";
}
$tagmy = $tagmy."$z - { $Usertag }."."\n";
}
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"✵ قائمة الاعضاء 

⌯ $tagmy
",'reply_to_message_id'=>$re_msgid,
 ]);
}
#┉ ┉ ┉ ┉ ┉ ┉ ┉ ┉ ┉
if($text =="مغادرة" or $text =="اطردني"){
	$lockgamess = $settings["lock"]["bannnnn"];
if($settings["lock"]["bannnnn"] == "مفتوح"){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"تفضل اتسرسح منا",
]);
bot('kickChatMember',[
'chat_id'=>$chat_id,
'user_id'=>$from_id
]);
}}
##########
if ($text =="تفعيل تفال" ){
if($status == "creator" ||  $status == "administrator" ||  in_array($from_id,$Dev) || in_array($from_id,$developer) || in_array($from_id,$carlos) || in_array($from_id,$eri) || in_array($from_id,$nazar)) {$add = $settings["information"]["added"];
if ($add == true) { 
 bot('sendmessage',[
 'chat_id'=>$chat_id,
 'text'=>"✵ تم تفعيل امر تفال بنجاح
⌯ بواسطة ⋙「 [$first_name](tg://user?id=$from_id) 」
",'parse_mode'=>"markdown",
'disable_web_page_preview'=>true,
  'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["kiiio"]="مقفول";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
bot('sendmessage',[
 'chat_id'=>$chat_id,
 'text'=>"✵ قم بتفيل البوت اولا",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
 }
}
}
elseif($text =="تعطيل تفال"){
if($status == "creator" ||  $status == "administrator" ||  in_array($from_id,$Dev) || in_array($from_id,$developer) || in_array($from_id,$carlos) || in_array($from_id,$eri) || in_array($from_id,$nazar)) {$add = $settings["information"]["added"];
if ($add == true) {
 bot('sendmessage',[
 'chat_id'=>$chat_id,
 'text'=>"✶ تم تعطيل امر تفال بنجاح 
⌯ بواسطة ⋙「 [$first_name](tg://user?id=$from_id) 」
",'parse_mode'=>"markdown",
'disable_web_page_preview'=>true,
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
$settings["lock"]["kiiio"]="مفتوح";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
bot('sendmessage',[
 'chat_id'=>$chat_id,
 'text'=>"✵ قم بتفيل البوت اولا ",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);}}}
$carlos = array("خشوف وجهه يستاهل تفله","دي لك يخره شوف وجهك حرامت اذب تفلتي عليه😈👋🏿","دمشي لاتفل بخشمك🥱👏🏿","لك ياحيوان حترم لا اهينك اتفل بعينك😟🤘🏿","انته شايف وجهكك ب امرايه☹️🤘🏿");
$tiger = array_rand($carlos, 1);
if($replyid and !in_array($re_id,$Dev)){
if($text == "اتفل عليه" or $text == "شيله تفله" or $text == "تفله" or $text == "خخ تف" or $text == "بعد تفله" or $text == "ضل تفله" or $text == "تفف" or $text == "تتف"){
if($settings["lock"]["kiiio"] == "مقفول"){
bot('sendMessage',[ 'chat_id'=>$chat_id, 'text'=>"حاضر ستادي هسه شبعه تفال😻🤘🏿", 'reply_to_message_id'=>$message->message_id, ]);
bot('sendMessage',[ 'chat_id'=>$chat_id, 'text'=>"$carlos[$tiger]",'parse_mode'=>"MARKDOWN", 'reply_to_message_id'=>$message->reply_to_message->message_id ]); } }}

if($replyid and in_array($re_id,$Dev)){
if($text == "اتفل عليه" or $text == "شيله تفله" or $text == "تفله" or $text == "خخ تف" or $text == "بعد تفله" or $text == "ضل تفله" or $text == "تفف" or $text == "تتف"){
if($settings["lock"]["kiiio"] == "مقفول"){
bot('sendMessage',[ 'chat_id'=>$chat_id, 'text'=>"دي لك تريد اتفل عله تاج راسك وراسي🥱🤫",'parse_mode'=>"Markdown",
'reply_to_message_id'=>$message->message_id, ]); } }}

if($replyid and in_array($re_id,$eri)){
if($text == "اتفل عليه" or $text == "شيله تفله" or $text == "تفله" or $text == "خخ تف" or $text == "بعد تفله" or $text == "ضل تفله" or $text == "تفف" or $text == "تتف"){
if($settings["lock"]["kiiio"] == "مقفول"){
bot('sendMessage',[ 'chat_id'=>$chat_id, 'text'=>"لك ياجبان هاذ مبرمج السورس شلون اتفل عليه نته متستحي😶❌",'parse_mode'=>"Markdown",
'reply_to_message_id'=>$message->message_id, ]); } }}

if($text == "اتفل عليه" or $text == "شيله تفله" or $text == "تفله" or $text == "خخ تف" or $text == "بعد تفله" or $text == "ضل تفله" or $text == "تفف" or $text == "تتف"){
if($settings["lock"]["kiiio"] == "مفتوح"){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
✶ عزيزي ⋙ [$first_name](tg://user?id=$from_id)
⌯ امر تفال معطل من قبل الادارة
",
'parse_mode'=>"Markdown",
'reply_to_message_id'=>$message->message_id,
]);
}
}
if ($text =="تفعيل هينه" ){
if($status == "creator" ||  $status == "administrator" ||  in_array($from_id,$Dev) || in_array($from_id,$developer) || in_array($from_id,$carlos) || in_array($from_id,$eri) || in_array($from_id,$nazar)) {$add = $settings["information"]["added"];
if ($add == true) { 
 bot('sendmessage',[
 'chat_id'=>$chat_id,
 'text'=>"✶ تم تفعيل امر هينة بنجاح
⌯ بواسطة ⋙「 [$first_name](tg://user?id=$from_id) 」
",'parse_mode'=>"markdown",
'disable_web_page_preview'=>true,
  'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["iiirrt"]="مقفول";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
bot('sendmessage',[
 'chat_id'=>$chat_id,
 'text'=>"✵ قم بتفيل البوت اولا ",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
 }
}
}
elseif($text =="تعطيل هينه" ){
if($status == "creator" ||  $status == "administrator" ||  in_array($from_id,$Dev) || in_array($from_id,$developer) || in_array($from_id,$carlos) || in_array($from_id,$eri) || in_array($from_id,$nazar)) {$add = $settings["information"]["added"];
if ($add == true) {
 bot('sendmessage',[
 'chat_id'=>$chat_id,
 'text'=>"✶ تم تعطيل امر هينة بنجاح
⌯ بواسطة ⋙「 [$first_name](tg://user?id=$from_id) 」
",'parse_mode'=>"markdown",
'disable_web_page_preview'=>true,
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
$settings["lock"]["iiirrt"]="مفتوح";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
bot('sendmessage',[
 'chat_id'=>$chat_id,
 'text'=>"✵ قم بتفيل البوت اولا ",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
 }
}
}
$henare = array("لكك جرجف احترم اسيادكك لا اكتلكك وازربب على كبركك،💩🖐🏿","هشش فاشل لتضل تمسلت لا اخربط تضاريس وجهك جنه ابط عبده، 😖👌🏿","دمشي لك ينبوع الفشل مو زين ملفيك ونحجي وياك هي منبوذ 😏🖕🏿","ها الغليض التفس ابو راس المربع متعلملك جم حجايه وجاي تطكطكهن علينه دبطل😒🔪","حبيبي راح احاول احترمكك هالمره بلكي تبطل حيونه، 🤔🔪");
$rehena = array_rand($henare, 1);
if($replyid and !in_array($re_id,$Dev)){
if($text == "هينه" or $text == "بعد هينه" or $text == "هينه بعد" or $text == "هينها" or $text == "هينهه" or $text == "رزله" or $text == "رزلها" or $text == "رزلهه"){
if($settings["lock"]["iiirrt"] == "مقفول"){
bot('sendMessage',[ 'chat_id'=>$chat_id, 'text'=>"صارر ستاذيي 🏃🏻‍♂️♥️", 'reply_to_message_id'=>$message->message_id, ]);
bot('sendMessage',[ 'chat_id'=>$chat_id, 'text'=>"$henare[$rehena]",'parse_mode'=>"MARKDOWN", 'reply_to_message_id'=>$message->reply_to_message->message_id ]); } }}

if($replyid and in_array($re_id,$Dev)){
if($text == "هينه" or $text == "بعد هينه" or $text == "هينه بعد" or $text == "هينها" or $text == "هينهه" or $text == "رزله" or $text == "رزلها" or $text == "رزلهه"){
if($settings["lock"]["iiirrt"] == "مقفول"){
bot('sendMessage',[ 'chat_id'=>$chat_id, 'text'=>"دي لكك تريد اهينن تاج راسكك؟😏🖕🏿",'parse_mode'=>"MARKDOWN",'reply_to_message_id'=>$message->message_id,'disable_web_page_preview'=>true,]); } }}

if($replyid and in_array($re_id,$eri)){
if($text == "هينه" or $text == "بعد هينه" or $text == "هينه بعد" or $text == "هينها" or $text == "هينهه" or $text == "رزله" or $text == "رزلها" or $text == "رزلهه"){
if($settings["lock"]["iiirrt"] == "مقفول"){
bot('sendMessage',[ 'chat_id'=>$chat_id, 'text'=>"دي لكك تريد اهينن تاج راسكك؟😏🖕🏿
هاذ مبرمج لسورس شلون اهينه",'parse_mode'=>"MARKDOWN",'reply_to_message_id'=>$message->message_id,'disable_web_page_preview'=>true,]); } }}

if($text == "هينه" or $text == "بعد هينه" or $text == "هينه بعد" or $text == "هينها" or $text == "هينهه" or $text == "رزله" or $text == "رزلها" or $text == "رزلهه"){
if($settings["lock"]["iiirrt"] == "مفتوح"){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"✶ تم تعطيل الامر هينة مسبقا 
⌯ بواسطة ⋙「 [$first_name](tg://user?id=$from_id) 」
",'parse_mode'=>"Markdown",
'reply_to_message_id'=>$message->message_id,
]);
}
}

$all = str_replace("#all ", "",$text) ;
$x = 0;
$tags = 0;
$get = file_get_contents("$chat_id.txt");
$getx = explode("\n", $get);
if($message and  ! in_array ($from_id, $getx)){
file_put_contents("$chat_id.txt","$from_id\n", FILE_APPEND);
} 
if($text == "#all $all"){  
for($i=0;$i<count($getx);$i++){
if ($x == 5 or $x == $tags or $i == 0 ){
$tags = $x + 5;
$t = "#all $all\n";
}
$datainfo = json_decode(file_get_contents("http://api.telegram.org/bot".API_KEY."/getChat?chat_id=$getx[$i]"));
$names =$datainfo->result->first_name;
$ids =$datainfo->result->id;
$x = $x + 1;
$t = $t.", [".$names."](tg://user?id=".$ids.")";
if ($x == 5 or $x == $tags or $i == 0){
bot('sendMessage', [
'chat_id' =>$chat_id,
'text'=>$t,
'parse_mode' =>"markdown", 
'disable_web_page_preview'=>true,
]);
}
}
}

$admin = "$ADMIN";
$sting = file_get_contents("sting.txt");
$band = file_get_contents("band.txt");
$start0 = file_get_contents("start1.txt") ;
$yhya5 = file_get_contents("yhya2.txt");
$knat1 = file_get_contents("knat1.txt");
$yhya0 = file_get_contents("yhya0.txt");
$yhya1= file_get_contents("yhya1.txt");
$yhya6 = file_get_contents("yhya3.txt");
$forward = $update->message->forward_from;
$MOhaMMed = count($pirvate)-1;
$MoHaMMedd = count($groups)-1;
$update = json_decode(file_get_contents('php://input'));
$message = $update->message;
$name = $message->from->first_name;
$username = $message->from->username;
$chat_id = $message->chat->id;
$text = $message->text;
$from_id = $message->from->id;
date_default_timezone_set('Asia/Riyadh');
$date = date('h:i:s'); $d = date('A');
$aa =preg_replace('/AM/', 'ص', $d);$aa =preg_replace('/PM/', 'م', $d);
$message_id =  $update->callback_query->message->message_id;
$yhya = file_get_contents("yhya.txt");
$yhya2 = explode("\n",file_get_contents("yhya4.txt"));
$yhya3 = count($yhya2);
if ($message && !in_array($from_id, $yhya2)) {
    file_put_contents("yhya4.txt", $from_id."\n",FILE_APPEND);
    $yhya3 = count($yhya3);
  }
if($text =="⌯ تفعيل التنبيه" and $from_id == $ADMIN) {
bot("sendMessage",[
"chat_id"=>$chat_id,
"text"=>"⌯⁞ تم تفعيل التنبيه بنجاح ✔️
",
'reply_to_message_id'=>$message_id,
  'reply_markup'=>json_encode([
'keyboard'=>[
[
], 
], 
'resize_keyboard'=>true
]) 
]);
file_put_contents("yhya2.txt","yhya");
} 
if($text =="/start" and $yhya5 == "yhya" and $from_id != $ADMIN) {
 bot("sendMessage",[
"chat_id"=>$admin,
"text"=>"*✵⁞  أهلاً بك عزيزي المطور
✵⁞   انت المطور الاساسي للبوت. 
✵⁞   هناك عضو قام بدخول بوتك
━━━━━━━━━━━━━
✵⁞  الاسم :  ◄﴿ $name  ﴾
✵⁞  المعرف : ◄﴿ @$user ﴾ 
✵⁞  الايدي : ◄﴿ $from_id  ﴾
✵⁞  عدد المشترڪين ◄﴿ $MOhaMMed }-
✵⁞  عدد المجموعات المفعله ◄﴿ $MoHaMMedd }-
━━━━━━━━━━━━━
✵⁞  وقت الدخول $date $aa
*" 
]);} 
if($text =="⌯ تعطيل التنبيه" and $from_id == $ADMIN) {
 bot("sendMessage",[
"chat_id"=>$chat_id,
"text"=>"
⌯⁞ تم تعطيل ❎ التنبيه بنجاح ✔️
",
'reply_to_message_id'=>$message_id,
  'reply_markup'=>json_encode([
'keyboard'=>[
[
], 
], 
'resize_keyboard'=>true
]) 
]);
unlink("yhya2.txt");
}

if (!is_dir('co')){
mkdir('co');
}
$re_msd = $update->message->reply_to_message;
if($rt and $text == "تحويل" and $re_msd->photo and $settings["lock"]["sigmidia"]=="مفتوح"){
$file = "https://api.telegram.org/file/bot".API_KEY."/".bot('getfile',['file_id'=>$re_msd->photo[1]->file_id])->result->file_path;
file_put_contents("co/$chat_id.png",file_get_contents($file));
bot('sendsticker',[
'chat_id'=>$chat_id,
'sticker'=>new CURLFile("co/$chat_id.png"),
]);
unlink("co/$chat_id.png");
}
if ($rt and $text == "تحويل" and $re_msd->photo and $settings["lock"]["sigmidia"]=="مفتوح"){
$file = "https://api.telegram.org/file/bot".API_KEY."/".bot('getfile',['file_id'=>$re_msd->photo[1]->file_id])->result->file_path;
file_put_contents("co/$chat_id.png",file_get_contents($file));
bot('senddocument',[
'chat_id'=>$chat_id,
'document'=>new CURLFile("co/$chat_id.png"),
]);
unlink("co/$chat_id.png");
}
if($rt and $text == "تحويل" and $re_msd->sticker and $settings["lock"]["sigmidia"]=="مفتوح"){
$file = "https://api.telegram.org/file/bot".API_KEY."/".bot('getfile',['file_id'=>$re_msd->sticker->file_id])->result->file_path;
file_put_contents("co/$chat_id.png",file_get_contents($file));
bot('senddocument',[
'chat_id'=>$chat_id,
'document'=>new CURLFile("co/$chat_id.png"),
'caption'=>" 🔘 𝐨𝐤 𝐝𝐨𝐧𝐞 𝐜𝐡𝐚𝐧𝐠𝐞
📮 $bi",
]);unlink("co/$chat_id.png");}
if ($rt and $text == "تحويل" and $re_msd->video and $settings["lock"]["sigmidia"]=="مفتوح"){
$file = "https://api.telegram.org/file/bot".API_KEY."/".bot('getfile',['file_id'=>$re_msd->video->file_id])->result->file_path;
file_put_contents("co/$chat_id.ogg",file_get_contents($file));
bot('sendvoice',[
'chat_id'=>$chat_id,
'voice'=>new CURLFile("co/$chat_id.ogg"),
'caption'=>" 🔘 𝐨𝐤 𝐝𝐨𝐧𝐞 𝐜𝐡𝐚𝐧𝐠𝐞
📮 $bi",
]);unlink("co/$chat_id.ogg");}
if ($rt and $text == "تحويل" and $re_msd->voice and $settings["lock"]["sigmidia"]=="مفتوح"){
$file = "https://api.telegram.org/file/bot".API_KEY."/".bot('getfile',['file_id'=>$re_msd->voice->file_id])->result->file_path;
file_put_contents("co/$chat_id.mp3",file_get_contents($file));
bot('sendaudio',[
'chat_id'=>$chat_id,
'audio'=>new CURLFile("co/$chat_id.mp3"),
'caption'=>" 🔘 𝐨𝐤 𝐝𝐨𝐧𝐞 𝐜𝐡𝐚𝐧𝐠𝐞
📮 $bi",
]);
unlink("co/$chat_id.mp3");
}
if ($rt and $text == "تحويل" and $re_msd->audio and $settings["lock"]["sigmidia"]=="مفتوح"){
$file = "https://api.telegram.org/file/bot".API_KEY."/".bot('getfile',['file_id'=>$re_msd->audio->file_id])->result->file_path;
file_put_contents("co/$chat_id.ogg",file_get_contents($file));
bot('sendvoice',[
'chat_id'=>$chat_id,
'voice'=>new CURLFile("co/$chat_id.ogg"),
'caption'=>" 🔘 𝐨𝐤 𝐝𝐨𝐧𝐞 𝐜𝐡𝐚𝐧𝐠𝐞
📮 $bi",
]);
unlink("co/$chat_id.ogg");
}
if(strpos($text, 'حمل ') !== false and $settings["lock"]["downloadmid"]=="مفتوح"){
$num= str_replace('حمل ','',$text);
bot('sendvideo',[
'chat_id'=>$chat_id,
'video'=>"$num",
'caption'=>"
✵⁞ 𝐨𝐤 𝐝𝐨𝐧𝐞 𝐜𝐡𝐚𝐧𝐠𝐞
✵⁞ $chinnl",
]);
}
$num= str_replace('تحميل ','',$text);
if ($text =="تحميل $num" and $settings["lock"]["downloadmid"]=="مفتوح"){
$num= str_replace('تحميل ','',$text);
$abc = file_get_contents("https://harmof.ml/Youtuop/Youtapi.php?search=".urlencode($num));
$bdee = json_decode($abc, true);
$keyboard["inline_keyboard"]=[];
for($i=1;$i<=10;$i++){
$titl = $bdee['results'][$i]['url'];
$name = $bdee['results'][$i]['title'];
$view = $bdee['results'][$i]['view'];
$nam = explode(' ',$name); 
$f = str_replace("https://youtu.be/","",$titl);
$keyboard["inline_keyboard"][] = [['text'=>"$nam[0] $nam[1] $nam[2] $nam[3] $nam[4]",'callback_data'=>"$f"]];
}
$reply_markup = json_encode($keyboard); 
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"✵⁞ نتائج بحث اليوتيوب ل ~ #$num ☆
┉ ┉ ┉ ┉ ┉ ┉ ┉ ┉ 
",
'parse_mode'=>"html",
"reply_markup"=>$reply_markup
]);
}
$chatid = $update->callback_query->message->chat->id;
if($data !="1" and $data !="2" and $data !="3" and $data !="4" and $data !="5" and $data !="6" and $data !="home" and $data !="00"){
bot('deleteMessage',[
'chat_id'=>$update->callback_query->message->chat->id,
'message_id'=>$update->callback_query->message->message_id,
]);
$chatid = $update->callback_query->message->chat->id;
$K=json_decode(file_get_contents("https://harmof.ml/Api/youta9i.php?vid=http://www.youtube.com/watch?v=".$data), true); 
$VUrlUrl=$K['url'];
$file = $VUrlUrl;
file_put_contents("yotsbot.ogg",file_get_contents($file));
bot('sendVoice',[
'chat_id'=>$chatid,
'voice'=>new CURLFile("yotsbot.ogg"),
]);
unlink("yotsbot.ogg");
}
$chatid = $update->callback_query->message->chat->id;
$re_msd = $update->message->reply_to_message;
if ($rt and $text == "حمل" and $re_msd->text and $settings["lock"]["downloadmid"]=="مفتوح"){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"🗣┇𝐥𝐨𝐚𝐝𝐢𝐧𝐠 𝐩𝐥𝐞𝐚𝐬𝐞 𝐰𝐡𝐚𝐭𝐞 .",
'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
]);
$K=json_decode(file_get_contents("https://youtube-downloader3.herokuapp.com/video_info.php?url=$re_msd->text"), true); 
$V=$K['links'][0]['url'];
 $file = $V;
file_put_contents("ᴄᴀʀʟᴏѕ.ogg",file_get_contents($file));
bot('sendaudio',[
'chat_id'=>$chat_id,
'audio'=>new CURLFile("ᴄᴀʀʟᴏѕ.ogg"),
'caption'=>"* 
✵⁞ Ch : @$chinnl *",
'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
]);
unlink("ᴄᴀʀʟᴏѕ.ogg");
unlink($v);
}
elseif($rt and $text == "حمل" and $re_msd->text and $settings["lock"]["downloadmid"]=="مقفول"){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"*✵⁞ تحميل الميديا مقفول ،*",
'parse_mode'=>"markdown",'disable_web_page_preview'=>true,

]);
}

if($text == "الغاء قائمة التثبيت" ){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer) or in_array($from_id,$carlos) or in_array($from_id,$nazar) or in_array($from_id,$eri)) { 
bot('unpinAllChatMessages',[
'chat_id'=>$chat_id,
]);
bot('sendmessage',[
 'chat_id'=>$chat_id,
'text'=>"✶ تم الغاء جميع التثبيتات
⌯ بواسطة ⋙「 [$first_name](tg://user?id=$from_id) 」
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
 }
}
######### الزخرفة

if ($text =="تفعيل الزخرفة" ){
if($status == "creator" ||  $status == "administrator" ||  in_array($from_id,$Dev) || in_array($from_id,$developer) || in_array($from_id,$carlos) || in_array($from_id,$eri) || in_array($from_id,$nazar)) {$add = $settings["information"]["added"];
if ($add == true) { 
 bot('sendmessage',[
 'chat_id'=>$chat_id,
 'text'=>"
✵⁞ بواسطة ⋙ [$first_name](tg://user?id=$from_id)
⌯⁞  تم تفعيل الزخرفة
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
  'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["zkh"]="مقفول";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
bot('sendmessage',[
 'chat_id'=>$chat_id,
 'text'=>"عذرا عزيزي المجموعة ليس مفعلة",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
 }
}
}
elseif($text =="تعطيل الزخرفة" ){
if($status == "creator" ||  $status == "administrator" ||  in_array($from_id,$Dev) || in_array($from_id,$developer)|| in_array($from_id,$carlos) || in_array($from_id,$eri) || in_array($from_id,$nazar)) {$add = $settings["information"]["added"];
if ($add == true) {
 bot('sendmessage',[
 'chat_id'=>$chat_id,
 'text'=>"
✵⁞ بواسطة ⋙ [$first_name](tg://user?id=$from_id)
⌯⁞  تم تعطيل الزخرفة
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
$settings["lock"]["zkh"]="مفتوح";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
bot('sendmessage',[
 'chat_id'=>$chat_id,
 'text'=>"عذرا عزيزي المجموعة ليس مفعلة",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
 }
}
}

$𝐒𝐨𝐮𝐫𝐜𝐞𝐬 𝐃𝐞𝐦𝐨𝐧 = file_get_contents("𝐒𝐨𝐮𝐫𝐜𝐞𝐬 𝐃𝐞𝐦𝐨𝐧.txt");
if($settings["lock"]["zkh"] == "مقفول"){
if ($text == "زخرفه" or $text == "زخرفة" or $text == "زخرف"){
file_put_contents("𝐒𝐨𝐮𝐫𝐜𝐞𝐬 𝐃𝐞𝐦𝐨𝐧.txt","nam");
bot("sendMessage",[
 'chat_id'=>$chat_id,
"text"=>"⌯ قم بارسال النص الان
",'parse_mode'=>"MARKDOWN",
 'reply_to_message_id'=>$message_id
,]);
}
if($text and $𝐒𝐨𝐮𝐫𝐜𝐞𝐬 𝐃𝐞𝐦𝐨𝐧 =="nam" ){
file_put_contents("𝐒𝐨𝐮𝐫𝐜𝐞𝐬 𝐃𝐞𝐦𝐨𝐧.txt","");
$k = file_get_contents("https://ali-apii.ml/api/zhrfa_nizk.php?text=".$text);
bot('sendMessage',[
 'chat_id'=>$chat_id,
'text'=>"$k ـ────────────
⌯ تمت الزخرفة بنجاح لـ ⋙ $text ؛
⌯ اضغط فوق اي نوع زخرفة للنسخ اعلاه ؛ 
",'parse_mode'=>"MARKDOWN",
 'reply_to_message_id'=>$message_id
,]);}}
#########
if($text == "السورس" or $text == "سورس" or $text == "يا سورس" and in_array($from_id, $Dev)){
bot("sendmessage",['chat_id'=>$chat_id,'text'=>"Welcome To Source NIZK
    
🦁┇[Nizk Team](https://t.me/XSBOTS)
┉ ┉ ┉ ┉ ┉ ┉ ┉ ┉ ┉
📬┇ [Source Channel](https://t.me/XSBOTS)
    
📊┇ [Source Install](https://t.me/XSB3S)
    
🆔┇ [Changing ID Channel](https://t.me/XSBOTS)
    
📋┇ [TEAM Source](https://t.me/XSBOTS)
┉ ┉ ┉ ┉ ┉ ┉ ┉ ┉ 
📮┇ [ConnectDeV](https://t.me/XSBOTS)

",'parse_mode'=>"Markdown",
'disable_web_page_preview'=> true ,
'reply_to_message_id'=>$message_id,
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"- تنصيب سورس",'url'=>"https://telegram.me/FFF8BOT?start"]],
[["text"=>"ـ مطور السورس",'url'=>"t.me/$buy"]],
]
]) 
]); 
}
##########
if ($text == "⌯ تحديث" and in_array($from_id,$Dev)){
bot ('sendMessage',['chat_id'=>$chat_id,'text'=>"✵⁞ تم التحديث",'parse_mode'=>'MarkDown', 'disable_web_page_preview'=>true, 'reply_to_message_id'=>$message->message_id,]);}
if ($text == "⌯ تحديث السورس" and in_array($from_id,$Dev)){
 $ver = phpversion();  
bot ('sendMessage',['chat_id'=>$chat_id,'text'=>"✵⁞ تم تحديث البوت 
✵⁞ لديك اخر اصدار للسورس 
✵⁞ الاصدار ← <code>$ver</code>v", 'parse_mode'=>"HTML",'reply_to_message_id'=>$message_id,]);}
echo "source bloodi";