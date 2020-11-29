<?php

# الملف من كتابة دليمي #
# @YYYhYY تواصل تلي #
# @KTK_K قنواتي #





ob_start();
define('API_KEY','توكنك اخي');
echo file_get_contents("https://api.telegram.org/bot".API_KEY."/setwebhook?url=".$_SERVER['SERVER_NAME']."".$_SERVER['SCRIPT_NAME']);
function bot($method,$MROAN19s=[]){
$url = "https://api.telegram.org/bot".API_KEY."/".$method;
$ch = curl_init();
curl_setopt($ch,CURLOPT_URL,$url); curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
curl_setopt($ch,CURLOPT_POSTFIELDS,$MROAN19s);
$res = curl_exec($ch);
if(curl_error($ch)){
var_dump(curl_error($ch));
}else{return json_decode($res);}}

$update = json_decode(file_get_contents('php://input'));
$message = $update->message;
$message = $update->message;
$username = $message->from->username;
$message_id2 = $update->callback_query->message->message_id;
$text = $message->text;
$chat_id2 = $update->callback_query->message->chat->id;
$Name = $update->callback_query->from->first_name;
$message_id = $update->callback_query->message->message_id;
$data = $update->callback_query->data;
$message = $update->message;
$from_id = $message->from->id;
$chat_id = $message->chat->id;
$text = $message->text;
$useree = $update->callback_query->message->chat->id;
$username = $message->from->username;
$fn = $message->from->first_name;
$user_id = $message->from->id;
$admin = "000"; 
date_default_timezone_set('Asia/Baghdad');
$today = date("l");
$nmonth = date("m");
$times = date("h:i");
$year = date("Y");
$n=date("n");


 
$chat_id2 = $update->callback_query->message->chat->id;
$message_id2 = $update->callback_query->message->message_id;
$data = $update->callback_query->data;
$id = $message->from->id;
$text = $message->text;
$chat_id = $message->chat->id;
$user = $message->from->username;
$name = $message->from->first_name;
$sajad = file_get_contents("rembo.txt");
$ch = file_get_contents("ch.txt");
$tn = file_get_contents("tnb.txt");
$ban = file_get_contents("ban.txt");
$banu = file_get_contents("banu.txt");
$exb = explode("\n",$ban);
$rembo ="123456789"; #ايديك حب
$m = explode("\n",file_get_contents("member.txt"));
$m1 = count($m)-1;
$bbn = count($exb)-1;
if($message and !in_array($id, $m)){
file_put_contents("member.txt", $id."\n",FILE_APPEND);
 }
 $chid = file_get_contents("chid.txt");
 $chlink = file_get_contents("linkch.txt");
 $Spe = file_get_contents("https://api.telegram.org/bot".API_KEY."/getChatMember?chat_id=$chid&user_id=".$id);
if($message && (strpos($Spe,'"status":"left"') or strpos($Spe,'"Bad Request: USER_ID_INVALID"') or strpos($Spe,'"status":"kicked"'))!== false){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
عذرا عزيزي اشترك بقناة البوت الاولى اولا❎

$chlink

ثم ارسل /start
",
'disable_web_page_preview'=>true,
]);return false;}


$j = file_get_contents("https://api.telegram.org/bot".API_KEY."/getChatMember?chat_id=$ch&user_id=".$id);
if($message && (strpos($j,'"status":"left"') or strpos($j,'"Bad Request: USER_ID_INVALID"') or strpos($j,'"status":"kicked"'))!== false){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
عذرا عزيزي اشترك بقناة البوت  اولا .

$ch

ثم ارسل /start .
",
]);return false;}


if($text =="/start"and $tn =="on"and $id !=$rembo){
bot('sendmessage',[
'chat_id'=>$rembo,
'text'=>
"
دخل شخص للبوت🆕
👨‍💼¦ اسمه » ️ [$name](tg://user?id=$id)
🔱¦ معرفه »  ️[@$user](tg://user?id=$id)
💳¦ ايديه » ️ [$id](tg://user?id=$id)
",
'parse_mode'=>"MarkDown",
]);
}

/*

كتابتي دليمي

*/
if($text =='/start' and $id ==$rembo){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>" • Welcome dear to your fishing bot, just control the buttons ⚡️
 
~ By : @YYYhYY 🏴",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"Login", 'callback_data'=>'shs'],['text'=>"Get users", 'callback_data'=>'get']],
[['text'=>"On tool", 'callback_data'=>'pro']],
[['text'=>"sleep", 'callback_data'=>'sleep'],['text'=>"off tool", 'callback_data'=>'hoom']],
[['text'=>"admin", 'callback_data'=>'back']],
]
])
]);
}
/*

كتابتي دليمي
*/
if($data =='back'){
bot('editmessagetext',[
'chat_id'=>$chat_id2,
'message_id'=>$update->callback_query->message->message_id,
'text'=>"اهلا بڪ عزيزي اليڪ اوامرڪ⚡📮",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>".•المشترڪين ",'callback_data'=>"m1"]],
[['text'=>"•اذاعهہ‏‏ رسـآله📮",'callback_data'=>"send"],['text'=>"•توجہيه رسالهہ‏‏‏‏🔄",'callback_data'=>"forward"]],
[['text'=>"قسم الاشتراك الاجباري🌞",'callback_data'=>"channel"]], 
[['text'=>"•تفعيل التنبيه✔️",'callback_data'=>"ons"],['text'=>"•تعطيل التنبيه❎",'callback_data'=>"ofs"]],
[['text'=>"•تفعيل التواصل😻️",'callback_data'=>"ontw"],['text'=>"•تعطيل التواصل😽",'callback_data'=>"oftw"]],
[['text'=>"فتح البوت✅",'callback_data'=>"obot"],['text'=>"ايقاف البوت❌",'callback_data'=>"ofbot"]],
[['text'=>"حظر عضو✅",'callback_data'=>"ban"],['text'=>"الغاء حظر عضو❌",'callback_data'=>"unban"]],
[['text'=>"المحظورين🌛",'callback_data'=>"thba"],['text'=>"حذف المحظورين🌜",'callback_data'=>"deba"]],
]
])
]);
unlink("rembo.txt");
}

if($data =="thba"){
bot('editmessagetext',[
'chat_id'=>$chat_id2, 
'message_id'=>$update->callback_query->message->message_id,
'text'=>"🌞المحظورين من البوت
«ـــ♡ـــ»
$banu
", 
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"عودة🔙",'callback_data'=>"back"]],
]
])
]);
}

if($data =="deba"){
bot('editmessagetext',[
'chat_id'=>$chat_id2, 
'message_id'=>$update->callback_query->message->message_id,
'text'=>"تم حذف المحظورين بنجاح✅",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"عودة🔙",'callback_data'=>"back"]],
]
])
]);
unlink("banu.txt");
unlink("ban.txt");
}
/*

كتابتي دليمي
*/
if($data =="channel"){
bot('editmessagetext',[
'chat_id'=>$chat_id2, 
'message_id'=>$update->callback_query->message->message_id,
'text'=>"اهلا بك عزيزي المطور في قسم الاشتراك الاجباري🌝🤩", 
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"وضع اشترك قناة خاصة💗",'callback_data'=>"chse"]],[['text'=>"🌷حذف اشتراك قناة خاصة",'callback_data'=>"ches"]],
[['text'=>"•وضع اشتراك عامة💢",'callback_data'=>"ach"],['text'=>"•حذف اشتراك عامة🔱",'callback_data'=>"dch"]],
[['text'=>"العودة🔙",'callback_data'=>"back"]],
]
])
]);
}

if($data =="ontw"){
bot('editmessagetext',[
'chat_id'=>$chat_id2, 
'message_id'=>$update->callback_query->message->message_id,
'text'=>"تم تفعيل التواصل✅", 
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"عودة🔙",'callback_data'=>"back"]],
]
])
]);
file_put_contents("twasl.txt","on");
}
$otw = file_get_contents("twasl.txt");
if($data =="oftw"){
bot('editmessagetext',[
'chat_id'=>$chat_id2, 
'message_id'=>$update->callback_query->message->message_id,
'text'=>"تم تعطيل التواصل بنجاح✅",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"عودة🔙",'callback_data'=>"back"]],
]
])
]);
unlink("twasl.txt");
}
if($otw =="on"){
if($text and $text !="/start"){
if($message  and $id != $rembo ){
bot('forwardMessage', [
'chat_id'=>$rembo,
'from_chat_id'=>$id,
'message_id'=>$message->message_id
]);
}}}
if($otw =="on"){
if($message and $id == $rembo){
bot('sendMessage',[
'chat_id'=>$message->reply_to_message->forward_from->id,
'text'=>$text,
]);
}}
if($data =="ban"){
bot('editmessagetext',[
'chat_id'=>$chat_id2, 
'message_id'=>$update->callback_query->message->message_id,
'text'=>"حسنا عزيزي ارسل ايدي العضو لاحظره🤩", 
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"الغاء الامر❎",'callback_data'=>"back"]],
]
])
]);
file_put_contents("rembo.txt","ban");
}
$uio = json_decode(file_get_contents("https://api.telegram.org/bot".API_KEY."/getchat?chat_id=".$text))->result->username;

if($text and $sajad =="ban" and $id ==$rembo){
file_put_contents("ban.txt",$text."\n",FILE_APPEND);
file_put_contents("banu.txt","@".$uio."\n",FILE_APPEND);
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"تم حظر العضور بنجاح✅",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"العودة🔙",'callback_data'=>"back"]],
]
])
]);
bot('SendMessage',[
'chat_id'=>$text,
'text'=>"تم حظرك من قبل المطور لايمكنك استخدام البوت😒",
]);
}

if($data =="unban"){
bot('editmessagetext',[
'chat_id'=>$chat_id2, 
'message_id'=>$update->callback_query->message->message_id,
'text'=>"حسنا عزيزي ارسل ايدي العضو لالغاء حظره🔱", 
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"الغاء الامر❎",'callback_data'=>"back"]],
]
])
]);
file_put_contents("rembo.txt","unban");
}
if($text and $sajad =="unban" and $id ==$rembo){
$bn = str_replace($text."\n",'',$ban);
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"تم الغاء حظر العضور بنجاح✅",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"العودة🔙",'callback_data'=>"back"]],
]
])
]);
file_put_contents("ban.txt",$bn);
unlink("rembo.txt");
bot('SendMessage',[
'chat_id'=>$text,
'text'=>"تم الغاء حظرك من البوت🤩",
]);
}
if($data =="ofbot"){
bot('editmessagetext',[
'chat_id'=>$chat_id2, 
'message_id'=>$update->callback_query->message->message_id,
'text'=>"تم اغلاق البوت✅", 
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"عودة🔙",'callback_data'=>"back"]],
]
])
]);
file_put_contents("bot.txt","off");
}
$obot = file_get_contents("bot.txt");
if($data =="obot"){
bot('editmessagetext',[
'chat_id'=>$chat_id2, 
'message_id'=>$update->callback_query->message->message_id,
'text'=>"تم فتح البوت بنجاح✅",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"عودة🔙",'callback_data'=>"back"]],
]
])
]);
unlink("bot.txt");
}
if($data =="send"){
bot('editmessagetext',[
'chat_id'=>$chat_id2, 
'message_id'=>$update->callback_query->message->message_id,
'text'=>"حسنا عزيزي ارسل رسالتك📮", 
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"الغاء الامر❎",'callback_data'=>"back"]],
]
])
]);
file_put_contents("rembo.txt","send");
} 
if($text and $sajad == "send" and $id == $rembo){
bot("sendmessage",[
"chat_id"=>$chat_id,
"text"=>'-تم النشر بنجاح✔️',
 'reply_markup'=>json_encode([ 
      'inline_keyboard'=>[
[['text'=>'العوده🔙' ,'callback_data'=>"back"]],
]])
]);
for($i=0;$i<count($m); $i++){
bot('sendMessage', [
'chat_id'=>$m[$i],
'text'=>$text
]);
unlink("rembo.txt");
}
}
/*

كتابتي دليمي
*/
if($data =="forward"){
bot('editmessagetext',[
'chat_id'=>$chat_id2, 
'message_id'=>$update->callback_query->message->message_id,
'text'=>"حسنا عزيزي قم بتوجيه الرسالة✅", 
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"الغاء الامر❎",'callback_data'=>"back"]],
]
])
]);
file_put_contents("rembo.txt","forward");
} 
if($text and $sajad == "forward" and $id == $rembo){
bot("sendmessage",[
"chat_id"=>$chat_id,
"text"=>'تم التوجيه بنجاح🔰',
 'reply_markup'=>json_encode([ 
      'inline_keyboard'=>[
[['text'=>'العوده🔙' ,'callback_data'=>"back"]],
]])
]);
for($i=0;$i<count($m); $i++){
bot('forwardMessage', [
'chat_id'=>$m[$i],
'from_chat_id'=>$id,
'message_id'=>$message->message_id
]);
unlink("rembo.txt");
}
}
/*

كتابتي دليمي
*/
if($data =="chse"){
bot('editmessagetext',[
'chat_id'=>$chat_id2, 
'message_id'=>$update->callback_query->message->message_id,
'text'=>"حسنا عزيزي ارسل رابط قناتك الخاصة⚡
", 
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"الغاء الامر❎",'callback_data'=>"back"]],
]
])
]);
file_put_contents("rembo.txt","linkch");
} 
if($text and $sajad =="linkch" and $id ==$rembo ){
bot('sendmessage',[
'chat_id'=>$chat_id, 
'text'=>"حسنا عزيزي ارسل الان ايدي القناة 🌜", 
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"العودة🔙",'callback_data'=>"back"]],
]
])
]); 
file_put_contents("linkch.txt","$text");
file_put_contents("rembo.txt","chid");
} 
 
$chlink = file_get_contents("linkch.txt");
$chid = file_get_contents("chid.txt");
if($text and $sajad =="chid" and $id ==$rembo ){
bot('sendmessage',[
'chat_id'=>$chat_id, 
'text'=>"تم اضافة القناة اشتراك اجباري 🌝 ارفع البوت ادمن في القناة", 
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"العودة🔙",'callback_data'=>"back"]],
]
])
]); 
file_put_contents("chid.txt","$text");
unlink("rembo. txt");
} 

if($data =="ches"){
bot('editmessagetext',[
'chat_id'=>$chat_id2, 
'message_id'=>$update->callback_query->message->message_id,
'text'=>"🔰تم حذف القناة بنجاح", 
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"العودة🔙",'callback_data'=>"back"]],
]
])
]); 
unlink("chid.txt");
unlink("linkch.txt");
} 
/*

كتابتي دليمي
*/

if($data =="ach"){
bot('editmessagetext',[
'chat_id'=>$chat_id2, 
'message_id'=>$update->callback_query->message->message_id,
'text'=>"حسنا عزيزي ارسل معرف قناتك 📮
مثل @SR_JO
", 
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"الغاء الامر❎",'callback_data'=>"back"]],
]
])
]);
file_put_contents("rembo.txt","ch");
} 
if($text and $sajad =="ch" and $id ==$rembo ){
bot('sendmessage',[
'chat_id'=>$chat_id, 
'text'=>"تم وضع اشتراك اجباري😁", 
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"العودة🔙",'callback_data'=>"back"]],
]
])
]); 
file_put_contents("ch.txt","$text");
unlink("rembo.txt");
} 
if($data == "m1"){ 
    bot('answercallbackquery',[
        'callback_query_id'=>$update->callback_query->id,
        'text'=>"
 • عدد المشتركين هو » $m1 « •
• عدد المحظورين هو » $bbn « •
        ",
        'show_alert'=>true,
]);
}
if($data =="dch"){
bot('editmessagetext',[
'chat_id'=>$chat_id2, 
'message_id'=>$update->callback_query->message->message_id,
'text'=>"🔰تم حذف القناة بنجاح", 
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"العودة🔙",'callback_data'=>"back"]],
]
])
]); 
unlink("ch.txt");
} 
if($data =="ons"){
bot('editmessagetext',[
'chat_id'=>$chat_id2, 
'message_id'=>$update->callback_query->message->message_id,
'text'=>"
تم تفعيل التنبيه بنجاح✅
", 
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"العودة🔙",'callback_data'=>"back"]],
]
])
]);
file_put_contents("tnb.txt","on");
} 

if($data =="ofs"){
bot('editmessagetext',[
'chat_id'=>$chat_id2, 
'message_id'=>$update->callback_query->message->message_id,
'text'=>"
تم تعطيل التنبيه بنجاح✅
", 
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"العودة🔙",'callback_data'=>"back"]],
]
])
]);
unlink("tnb.txt");
} 

if($message and in_array($id, $exb)){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"انت محظور من قبل المطور لايمكنك استخدام البوت📛",
]);return false;}

if($message and $obot =="off" and $id !=$rembo){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
البوت مغلق لفترة تابع قناة البوت لمعرفة متى يفتح البوت📛
$ch
",
]);return false;}




if($text ==  '/start' ){
bot('sendMessage',[
 'chat_id'=>$chat_id,
 'text'=>" 
• Welcome - By : @YYYhYY ⚠️
",
'reply_to_message_id'=>$message->message_id,
'disable_web_page_preview'=> true ,
 'parse_mode'=>"Markdown",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"Sajad Ali",'url'=>'T.me/yyyhyy']],
]
])]);}

if($data=="hom"){
bot('editMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>"
 • Welcome dear to your fishing bot, just control the buttons ⚡️
 
~ By : @YYYhYY 🏴
",
'reply_to_message_id'=>$message->message_id,
'disable_web_page_preview'=> true ,
 'parse_mode'=>"Markdown",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"Login", 'callback_data'=>'shs'],['text'=>"Get users", 'callback_data'=>'get']],
[['text'=>"On tool", 'callback_data'=>'pro']],
[['text'=>"sleep", 'callback_data'=>'sleep'],['text'=>"off tool", 'callback_data'=>'hoom']],
]
])]);}



  • Hi sajad New Email ⚠️  
•━•━•━•━•━•━•━•━•━•━•
- ❖ UserName : $user
- ❖ Email : $email
- ❖ Followers : $followers
- ❖ Following : $following
- ❖ Post : $posts
•━•━•━•━•━•━•━•━•━•━• 
 • || @YYYhYY & @o4abot || • ⁦


if($data=="get"){
bot('editMessageText',[
 'chat_id'=>$chat_id2,
 'message_id'=>$message_id,
 'text'=>"
 Users collection page. 
 - Users : many
 - For Account : 🚫user:pass🚫
",
'disable_web_page_preview'=> true ,
 'parse_mode'=>"Markdown",
 'reply_markup'=>json_encode([
 'inline_keyboard'=>[
[['text'=>'From Search','callback_data'=>'sc']],
[['text'=>'From Hashtag','callback_data'=>'ks']],
[['text'=>'For Accounts : u🚫p','callback_data'=>'thded']],
[['text'=>"Main Page",'callback_data'=>'hom']],]])]);}



if($data=="sv"){
bot('sendMessage',[
 'chat_id'=>$chat_id2,
 'message_id'=>$message_id,
 'text'=>"
ok save Hashtag 
",
'disable_web_page_preview'=> true ,
 'parse_mode'=>"Markdown",
 'reply_markup'=>json_encode([
 'inline_keyboard'=>[
[['text'=>"Main Page",'callback_data'=>'hom']],]])]);}


if($data=="ks"){
bot('editMessageText',[
 'chat_id'=>$chat_id2,
 'message_id'=>$message_id,
 'text'=>"
send my Hashtag your ↓
 #girls 
 Hashtag one 1 !!!
send ok save
",
'disable_web_page_preview'=> true ,
 'parse_mode'=>"Markdown",
 'reply_markup'=>json_encode([
 'inline_keyboard'=>[
[['text'=>"Save",'callback_data'=>'sv']],
[['text'=>"Main Page",'callback_data'=>'hom']],]])]);}



if($data=="shs"){
bot('editMessageText',[
 'chat_id'=>$chat_id2,
 'message_id'=>$message_id,
 'text'=>"
Send Account My 

user _ password

save send !!
",
'disable_web_page_preview'=> true ,
 'parse_mode'=>"Markdown",
 'reply_markup'=>json_encode([
 'inline_keyboard'=>[
[['text'=>"Save",'callback_data'=>'bmw']],
[['text'=>"Main Page",'callback_data'=>'hom']],]])]);}


if($data=="bmw"){
bot('sendMessage',[
 'chat_id'=>$chat_id2,
 'message_id'=>$message_id,
 'text'=>"
Secuns save account !!

my false stop
",
'disable_web_page_preview'=> true ,
 'parse_mode'=>"Markdown",
 'reply_markup'=>json_encode([
 'inline_keyboard'=>[
[['text'=>"Main Page",'callback_data'=>'hom']],]])]);}


if($data=="pro"){
bot('editMessageText',[
 'chat_id'=>$chat_id2,
 'message_id'=>$message_id,
 'text'=>"
start checking !!
",
'disable_web_page_preview'=> true ,
 'parse_mode'=>"Markdown",
 'reply_markup'=>json_encode([
 'inline_keyboard'=>[
[['text'=>"Main Page",'callback_data'=>'hom']],]])]);}


if($data=="hoom"){
bot('editMessageText',[
 'chat_id'=>$chat_id2,
 'message_id'=>$message_id,
 'text'=>"
 stop checking !!
",
'disable_web_page_preview'=> true ,
 'parse_mode'=>"Markdown",
 'reply_markup'=>json_encode([
 'inline_keyboard'=>[
[['text'=>"Main Page",'callback_data'=>'hom']],]])]);}


if($data=="sc"){
bot('editMessageText',[
 'chat_id'=>$chat_id2,
 'message_id'=>$message_id,
 'text'=>"
send my your ↓
 hi sajad ali my change instagram users photo im name love no robot
send ok save
",
'disable_web_page_preview'=> true ,
 'parse_mode'=>"Markdown",
 'reply_markup'=>json_encode([
 'inline_keyboard'=>[
[['text'=>"Start",'callback_data'=>'nk']],
[['text'=>"Main Page",'callback_data'=>'hom']],]])]);}



if($data=="nk"){
bot('sendMessage',[
 'chat_id'=>$chat_id2,
 'message_id'=>$message_id,
 'text'=>"
start exploring !!
",
'disable_web_page_preview'=> true ,
 'parse_mode'=>"Markdown",
 'reply_markup'=>json_encode([
 'inline_keyboard'=>[
[['text'=>"Main Page",'callback_data'=>'hom']],]])]);}



if($data=="sleep"){
bot('editMessageText',[
 'chat_id'=>$chat_id2,
 'message_id'=>$message_id,
 'text'=>"
send my sleep your ↓
• 1 - 2 - 3 - 4 - 5 - 6 - 7 - 8 - 9 - 10 •
send ok save
",
'disable_web_page_preview'=> true ,
 'parse_mode'=>"Markdown",
 'reply_markup'=>json_encode([
 'inline_keyboard'=>[
[['text'=>"Save",'callback_data'=>'slp']],
[['text'=>"Main Page",'callback_data'=>'hom']],]])]);}


if($data=="slp"){
bot('sendMessage',[
 'chat_id'=>$chat_id2,
 'message_id'=>$message_id,
 'text'=>"
ok save sleep → add
",
'disable_web_page_preview'=> true ,
 'parse_mode'=>"Markdown",
 'reply_markup'=>json_encode([
 'inline_keyboard'=>[
[['text'=>"Main Page",'callback_data'=>'hom']],]])]);}



#تخمط حقوق امرع دينك#