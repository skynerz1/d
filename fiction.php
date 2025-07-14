<?php

#تغير حقوق تدل علامه فشلك 
####@JJJ22J @SEROBOTS ####

$update = json_decode(file_get_contents('php://input'));
$message = $update->message;
$id = $message->from->id;
$chat_id = $message->chat->id;
$text = $message->text;
$user = $message->from->username;
$name = $message->from->first_name;
$message_id2 = $update->callback_query->message->message_id;
$chat_id2 = $update->callback_query->message->chat->id;
$from_id = $message->from->id;
$nammee = $update->callback_query->from->first_name;
$bot_tele1 = file_get_contents('userstart.json');
$sting = file_get_contents("sting.txt");
$start = file_get_contents("start.txt") ;
$onstart = file_get_contents("onstart.txt");
$setengss = file_get_contents("setengss.txt");
$setengssj = file_get_contents("setengss.txt");
$hadehday = file_get_contents("hadehday.txt");
$hadehdayj = file_get_contents("hadehday.txt");
$sss = file_get_contents('sss.txt');
$bott = bot('getme',['bot'])->result->username;
$alm = file_get_contents('alm.txt');
$ccoinj = file_get_contents("ccoin.txt");
$admin = 1965941065; #ايديك
$ccoin = file_get_contents("ccoin.txt");
$$codejj = file_get_contents("codejj.json");
$salesnem = file_get_contents("salesnem.json");
$cccoin = $ccoin;
$sudo = $admin;
$stinggggj = json_decode(file_get_contents("stinggggj.json"),true);
$stingggg = json_decode(file_get_contents("stingggg.json"),true);
$band = array($stingggg['stingggg']['band']);
$stingggi = json_decode(file_get_contents("stingggi.json"),true);
$admins = array($admin,$stingggi['stingggi']['admins']);
$type = $update->message->chat->type;
$u = json_decode(file_get_contents('member.json'),true);
if(!in_array($chat_id, $u) and $type == "private") {
      $u[] = "$chat_id";
      file_put_contents('member.json',json_encode($u));
  }
if(isset($update->callback_query)){
  $chat_id = $update->callback_query->message->chat->id;
$from_id = $chat_id;
  $message_id = $update->callback_query->message->message_id;
  $data     = $update->callback_query->data;
  $message = $update->message;
 $user = $update->callback_query->from->username;
$sales = json_decode(file_get_contents('sales.json'),true);

$name = $message->from->first_name;
$id=$update->callback_query->from->id;
} 
function save($array){
    file_put_contents('sales.json', json_encode($array));
}
//---------1----


$msharkty = $sales['msh'][$from_id]['modest'];
   $hd = $sales['mrktc'][$from_id]['hd'];
   $th = $sales['mrktc'][$from_id]['th'];
   $mrkt = $sales[$chat_id]['markt'];
   
   $modir = $admin; 
$homse = explode("\n", $bot_tele1);
$name = $update->message->from->first_name;
$id = $message->from->id;

   $mycoin = $sales[$chat_id]['backlect'];
   
   if($msharkty==null){
   	$msharkty = 0;
   }
   
   if($hd==null){
   	$hd = 0;
   }
   
   if($th==null){
   	$th = 0;
   }
   
   if($mrkt==null){
   	$mrkt = 0;
   }
   
   if($mycoin==null){
   	$mycoin = 0;
   }
   
   if($setengssj == null){
   	$setengssj = 1;
   }
   
   if($hadehdayj == null){
   	$hadehdayj = 5;
   }
   
   $hdiatet = $setting["mtgr"]["hdia"];
$thoiltet = $setting["mtgr"]["thoil"];
$kmia = $setting["mtgr"]["kmia"];
if($hdiatet == "✅"){
	$hdiatext = "الهدية اليومية 🎁";
	}
	
	if($thoiltet == "✅"){
	$thoiltext = "تحويل النقاط";
	}
	
	if($alm == null){
	$alm = "لايوجد";
	}
	
	if($kmia == "✅"){
	$kmiatext = "الكميه ➰";
	}
	
	
$admin = 1965941065; #ايديك
   
  $setting = json_decode(file_get_contents("setting.json"),true);
if (!file_exists("setting.json")) {
#	$put = [];
$setting["mtgr"]["hdia"]="✅";
$setting["mtgr"]["thoil"]="✅";
$setting["mtgr"]["kmia"]="✅";
file_put_contents("setting.json", json_encode($setting));
}
$thoill =$setting["mtgr"]["thoil"];
$hdia=$setting["mtgr"]["hdia"];
$kmia=$setting["mtgr"]["kmia"];
$modekm=$setting["mtgr"]["kmia"];

$Devv = $admin;
$token = API_KEY;

   
$getmosh1 = file_get_contents("getmosh1.txt");
$getmoshh1 = explode("\n",$getmosh1);
$getmosh = file_get_contents("getmosh.txt");
$getmoshh = explode("\n",$getmosh);
$channels = file_get_contents("channels.txt");
$channel = file_get_contents("channel.txt");
$setcoin1 = file_get_contents("setcoin1.txt");
date_default_timezone_set('Asia/Jordan');
$time = date('h:i a');
$me = bot('getme',['bot'])->result->username;
$sales = json_decode(file_get_contents('sales.json'),1);

if($data == "forall"){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"• ارسال عدد النقاط المراد ارسالها الى الجميع .",
]);
$sales['mode'] = 'forall';
  save($sales);
  exit;
}
//»»»»»»»»»»»»»»»»»» 

if($text and $sales['mode']  == "forall"){
	$cut = explode("\n",file_get_contents("stats/users.txt"));
	bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"
• تم ارسال *$text* نقطة الى جميع مستخدمين المتجر الخاص بك .

- يمكنك ارسال اذاعة اليهم لكي تخبرهم انك قمت باضافه *$text* نقطة الى حساباتهم .
",
'parse_mode'=>"MARKDOWN",
'disable_web_page_preview'=>true,
]);
for ($i=0; $i < count($cut); $i++) { 
$sales[$cut[$i]]['backlect'] += $text;
$sales['mode'] = null;
save($sales);
}
}

$cut = explode("\n",file_get_contents("stats/users.txt"));
if($data == "delall"){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"• ارسال عدد النقاط المراد خصمها من الجميع .",
]);
$sales['mode'] = 'delall';
  save($sales);
  exit;
}
//»»»»»»»»»»»»»»»»»» 

if($text and $sales['mode']  == "delall"){
	$cut = explode("\n",file_get_contents("stats/users.txt"));
	bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"
• تم خصم *$text* نقاط من جميع مستخدمين المتجر الخاص بك .
",
'parse_mode'=>"MARKDOWN",
'disable_web_page_preview'=>true,
]);

for ($i=0; $i < count($cut); $i++) { 
	$sales[$cut[$i]]['backlect'] -= $text;
	$sales['mode'] = null;
  
save($sales);
}
}

if($data == "delto0"){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"• تم تصفير نقاط الجميع بنجاح .",
]);
for ($i=0; $i < count($cut); $i++) { 
$sales[$cut[$i]]['backlect'] = 0;
$sales['mode'] = null;
save($sales);
}
}

if($data == "sendcoin"){
if( $chat_id == $admin){
  bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
   'text'=>"• ارسال الان ايدي الشخص .",
]);
  $sales['mode'] = 'chat';
  save($sales);
  exit;
  }
 }
   if($text != '/start' and $text != null and $sales['mode'] == 'chat'){
   if( $chat_id == $admin){
  bot('sendMessage',[
   'chat_id'=>$chat_id,
 'text'=> "
• ارسال عدد النقاط المراد ارسالها 
",
 ]);
   $sales['mode'] = 'poi';
   $sales['idd'] = $text;
  save($sales);
  exit;
}
}
 if($text != '/start' and $text != null and $sales['mode'] == 'poi'){
 if( $chat_id == $admin){
  bot('sendMessage',[
   'chat_id'=>$chat_id,
 'text'=>"
• تم ارسال ($text) الي حساب `".$sales['idd']."`
تم إضافة $text نقطة إلى حساب ".$sales['idd']." بنجاح ",
 'reply_to_message_id'=>$message_id, 
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[["text"=>"رجوع ،🔙.","callback_data"=>"back"]],
]])
]);   
  bot('sendmessage',[
   'chat_id'=>$sales['idd'],
  'text'=>"
• تم اضافه ($text) نقاط الى حسابك .
",
  ]);
  $sales['mode'] = null;
  $sales[$sales['idd']]['backlect'] += $text;
  $sales['idd'] = null;
  save($sales);
  exit;
}
}
if($data == "takecoin"){
 if( $chat_id == $admin){
  bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
   'text'=>"أرسل أيدي الشخص الذي تريد خصم النقاط منه",
]);
  $sales['mode'] = 'chat1';
  save($sales);
  exit;
  }
 }
   if($text != '/start' and $text != null and $sales['mode'] == 'chat1'){
    if( $chat_id == $admin){
  bot('sendMessage',[
   'chat_id'=>$chat_id,
 'text'=> "أرسل الكمية التي تريد خصمها",
 ]);
   $sales['mode'] = 'poi1';
   $sales['idd'] = $text;
  save($sales);
  exit;
}
}
 if($text != '/start' and $text != null and $sales['mode'] == 'poi1'){
  if( $chat_id == $admin){
  bot('sendMessage',[
   'chat_id'=>$chat_id,
 'text'=>"
 • تم خصم ($text) نقاط من `".$sales['idd']."`
 
",
 'reply_to_message_id'=>$message_id, 
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[["text"=>"رجوع ،🔙.","callback_data"=>"back"]],
]])
]);   
  bot('sendmessage',[
   'chat_id'=>$sales['idd'],
  'text'=>"
  تم خصم ( $text ) من نقاطك .
  ",
  ]);
  $sales['mode'] = null;
  $sales[$sales['idd']]['backlect'] -= $text;
  $sales['idd'] = null;
  save($sales);
  exit;
}
}


if($data == 'shh'){
 if( $chat_id == $admin){
  bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"
- ارسل معرف القناة ألان لطفا !
",
      'reply_markup'=>json_encode([
     'inline_keyboard'=>[
      [['text'=>'• مسح القناة وتطعطيل النشر •','callback_data'=>'delandoff']]
        [['text'=>'• رجوع •','callback_data'=>'back']]
      ]
    ])
  ]);
file_put_contents("sss.txt","ok");
 }
}

if($data == 'delandoff'){
 if( $chat_id == $admin){
  bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"
تم المسح بنجاح •
",
      'reply_markup'=>json_encode([
     'inline_keyboard'=>[
      [['text'=>'• مسح القناة وتطعطيل النشر •','callback_data'=>'delandoff']]
        [['text'=>'• رجوع •','callback_data'=>'back']]
      ]
    ])
  ]);
file_put_contents("sss.txt",null);
 }
}
if($text and $sss == "ok"){
 if( $chat_id == $admin){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"• تم التعين بنجاح",
      'reply_markup'=>json_encode([
     'inline_keyboard'=>[
        [['text'=>'• رجوع •','callback_data'=>'back']]
      ]
    ])
  ]);
file_put_contents("sss.txt","$text");
 }
}
 if($data == 'alm'){
  if( $chat_id == $admin){
  bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"• ارسال معرف حسابك او بوت تواصل الخاص بك 📬",
      'reply_markup'=>json_encode([
     'inline_keyboard'=>[
        [['text'=>'• رجوع •','callback_data'=>'back']]
      ]
    ])
  ]);
file_put_contents("alm.txt","ok");
 }
}
if($text and $alm == "ok"){
 if( $chat_id == $admin){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"تم الحفظ ✅",
      'reply_markup'=>json_encode([
     'inline_keyboard'=>[
        [['text'=>'• رجوع •','callback_data'=>'back']]
      ]
    ])
  ]);
file_put_contents("alm.txt","$text");
 }
}
  if($data == 'setengss'){
   if( $chat_id == $admin){
  bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"• ارسل عدد النقاط التي يحصل عليها المستخدم من مشاركة الرابط الخاص به .",
      'reply_markup'=>json_encode([
     'inline_keyboard'=>[
        [['text'=>'• رجوع •','callback_data'=>'back']]
      ]
    ])
  ]);
file_put_contents("setengss.txt","ok");
 }
}
if($text and $setengss == "ok"){
 if( $chat_id == $admin){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"• تم الحفظ بنجاح . ",
      'reply_markup'=>json_encode([
     'inline_keyboard'=>[
        [['text'=>'• رجوع •','callback_data'=>'back']]
      ]
    ])
  ]);
unlink('setengss.txt');
file_put_contents("setengss.txt","$text");
 }
}
  if($data == 'hadehday'){
   if( $chat_id == $admin){
  bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"• ارسل عدد النقاط التي بحصل عليها الشخص 📬",
      'reply_markup'=>json_encode([
     'inline_keyboard'=>[
        [['text'=>'• رجوع •','callback_data'=>'back']]
      ]
    ])
  ]);
file_put_contents("hadehday.txt","ok");
  }
 }
if($text and $hadehday == "ok"){
 if( $chat_id == $admin){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"• تم تعين *$text* . ",
      'reply_markup'=>json_encode([
     'inline_keyboard'=>[
        [['text'=>'• رجوع •','callback_data'=>'back']]
      ]
    ])
  ]);
unlink('hadehday.txt');
file_put_contents("hadehday.txt","$text");
 }
}
 
if($text== '/start'){
if( $chat_id == $admin){
 bot('sendMessage',[
   'chat_id'=>$chat_id,
'text'=>"- مرحباً عزيزي المطور $name 🔥. 

- حساب التواصل : $alm
- عدد النقاط الدخول : stinggggj

- يمكن للعضو ارسال /id لارسال الايدي الخاص به

",
'parse_mode'=>"MARKDOWN",
'disable_web_page_preview'=>true,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>"تعين حساب التواصل مع المطور",'callback_data'=>"alm"],['text'=>'تعيين عدد نقاط الدخول ','callback_data'=>"setengss"]],
[['text'=>'اضف سلعه','callback_data'=>'add'],['text'=>' حذف سلعة','callback_data'=>'del']],
[['text'=>"ارسال نقاط للكل ",'callback_data'=>"forall"],['text'=>'خصم نقاط للكل','callback_data'=>"delall"]],
[['text'=>'صنع رابط هديه ','callback_data'=>"offerfree"]],
[['text'=>' إرسال نقاط','callback_data'=>"sendcoin"],['text'=>'خصم نقاط','callback_data'=>"takecoin"]],
[['text'=>"الهديه اليوميه : $hdia",'callback_data'=>"hdiamode"],['text'=>'تعيين عدد الهديه','callback_data'=>"hadehday"]],
[['text'=>'تعين عموله التحويل','callback_data'=>"ccoin"],['text'=>"تحويل النقاط : $thoill ",'callback_data'=>"modethoil"]], 
[['text'=>'تعين قناة الاثباتات','callback_data'=>"shh"]],
[['text'=>"كميه السلع المتوفره : $kmia",'callback_data'=>"kmia"]],
[['text'=>'مسح نقاط الجميع','callback_data'=>"delto0"]],
]])
]);   
$stingggi['stingggi']['stingggi'] = null;
$stingggi['stingggi']['id'] = null;
 file_put_contents("stingggi.json",json_encode($stingggi));
$sales['mode'] = null;
  save($sales);
 }
}

if($data== 'back'){
if( $chat_id == $admin){
 bot('sendMessage',[
   'chat_id'=>$chat_id,
'text'=>"- مرحباً عزيزي المطور $name 🔥. 

- حساب التواصل : $alm
- عدد النقاط الدخول : stinggggj

- يمكن للعضو ارسال /id لارسال الايدي الخاص به

",
'parse_mode'=>"MARKDOWN",
'disable_web_page_preview'=>true,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>"تعين حساب التواصل مع المطور",'callback_data'=>"alm"],['text'=>'تعيين عدد نقاط الدخول ','callback_data'=>"setengss"]],
[['text'=>'اضف سلعه','callback_data'=>'add'],['text'=>' حذف سلعة','callback_data'=>'del']],
[['text'=>"ارسال نقاط للكل ",'callback_data'=>"forall"],['text'=>'خصم نقاط للكل','callback_data'=>"delall"]],
[['text'=>'صنع رابط هديه ','callback_data'=>"offerfree"]],
[['text'=>' إرسال نقاط','callback_data'=>"sendcoin"],['text'=>'خصم نقاط','callback_data'=>"takecoin"]],
[['text'=>"الهديه اليوميه : $hdia",'callback_data'=>"hdiamode"],['text'=>'تعيين عدد الهديه','callback_data'=>"hadehday"]],
[['text'=>'تعين عموله التحويل','callback_data'=>"ccoin"],['text'=>"تحويل النقاط : $thoill ",'callback_data'=>"modethoil"]], 
[['text'=>'تعين قناة الاثباتات','callback_data'=>"shh"]],
[['text'=>"كميه السلع المتوفره : $kmia",'callback_data'=>"kmia"]],
[['text'=>'مسح نقاط الجميع','callback_data'=>"delto0"]],
]])
]);   
$stingggi['stingggi']['stingggi'] = null;
$stingggi['stingggi']['id'] = null;
 file_put_contents("stingggi.json",json_encode($stingggi));
$sales['mode'] = null;
  save($sales);
 }
}

$thoill =$setting["mtgr"]["thoil"];

 

if($data == 'ccoin'){
 if( $chat_id == $admin){
  bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"• ارسل عدد النقاط التي تخصم عند التحويل 📬 ",
      'reply_markup'=>json_encode([
     'inline_keyboard'=>[
        [['text'=>'• رجوع •','callback_data'=>'back']]
      ]
    ])
  ]);
file_put_contents("ccoin.txt","ok");
 }
}
if($text and $ccoin == "ok"){
 if( $chat_id == $admin){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"• تم تعين *$text* .",
      'reply_markup'=>json_encode([
     'inline_keyboard'=>[
        [['text'=>'• رجوع •','callback_data'=>'back']]
      ]
    ])
  ]);
file_put_contents("ccoin.txt","$text");
 }
}
			
							
if($data == "modethoil" && $chat_id == $sudo){
$setting = json_decode(file_get_contents("setting.json"),true);
$join=$setting["mtgr"]["thoil"];
if($join=="✅"){
$setting["mtgr"]["thoil"]="❌";
bot('EditMessageText',[
	'chat_id'=>$chat_id, 
	'message_id'=>$message_id,
'text'=>"- مرحباً عزيزي المطور $name 🔥. 

- حساب التواصل : $alm
- عدد النقاط الدخول : stinggggj

- يمكن للعضو ارسال /id لارسال الايدي الخاص به

",
'parse_mode'=>"MARKDOWN",
'disable_web_page_preview'=>true,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>"تعين حساب التواصل مع المطور",'callback_data'=>"alm"],['text'=>'تعيين عدد نقاط الدخول ','callback_data'=>"setengss"]],
[['text'=>'اضف سلعه','callback_data'=>'add'],['text'=>' حذف سلعة','callback_data'=>'del']],
[['text'=>"ارسال نقاط للكل ",'callback_data'=>"forall"],['text'=>'خصم نقاط للكل','callback_data'=>"delall"]],
[['text'=>'صنع رابط هديه ','callback_data'=>"offerfree"]],
[['text'=>' إرسال نقاط','callback_data'=>"sendcoin"],['text'=>'خصم نقاط','callback_data'=>"takecoin"]],
[['text'=>"الهديه اليوميه : $hdia",'callback_data'=>"hdiamode"],['text'=>'تعيين عدد الهديه','callback_data'=>"hadehday"]],
[['text'=>'تعين عموله التحويل','callback_data'=>"ccoin"],['text'=>'تحويل النقاط : ❌ ','callback_data'=>"modethoil"]],
[['text'=>'تعين قناة الاثباتات','callback_data'=>"shh"]],
[['text'=>"كميه السلع المتوفره : $kmia",'callback_data'=>"kmia"]],
[['text'=>'مسح نقاط الجميع','callback_data'=>"delto0"]],
]])
]);   
}
if($join=="❌"){
$setting["mtgr"]["thoil"]="✅";
bot('EditMessageText',[
	'chat_id'=>$chat_id, 
	'message_id'=>$message_id,
'text'=>"- مرحباً عزيزي المطور $name 🔥. 

- حساب التواصل : $alm
- عدد النقاط الدخول : stinggggj

- يمكن للعضو ارسال /id لارسال الايدي الخاص به

",
'parse_mode'=>"MARKDOWN",
'disable_web_page_preview'=>true,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>"تعين حساب التواصل مع المطور",'callback_data'=>"alm"],['text'=>'تعيين عدد نقاط الدخول ','callback_data'=>"setengss"]],
[['text'=>'اضف سلعه','callback_data'=>'add'],['text'=>' حذف سلعة','callback_data'=>'del']],
[['text'=>"ارسال نقاط للكل ",'callback_data'=>"forall"],['text'=>'خصم نقاط للكل','callback_data'=>"delall"]],
[['text'=>'صنع رابط هديه ','callback_data'=>"offerfree"]],
[['text'=>' إرسال نقاط','callback_data'=>"sendcoin"],['text'=>'خصم نقاط','callback_data'=>"takecoin"]],
[['text'=>"الهديه اليوميه : $hdia",'callback_data'=>"hdiamode"],['text'=>'تعيين عدد الهديه','callback_data'=>"hadehday"]],
[['text'=>'تعين عموله التحويل','callback_data'=>"ccoin"],['text'=>'تحويل النقاط : ✅ ','callback_data'=>"modethoil"]],
[['text'=>'تعين قناة الاثباتات','callback_data'=>"shh"]],
[['text'=>"كميه السلع المتوفره : $kmia",'callback_data'=>"kmia"]],
[['text'=>'مسح نقاط الجميع','callback_data'=>"delto0"]],
]])
]);   
}
file_put_contents("setting.json", json_encode($setting));
sendsero($chat_id,$message_id);
} 




if($data == "hdiamode" && $chat_id == $sudo){
$setting = json_decode(file_get_contents("setting.json"),true);
$join=$setting["mtgr"]["hdia"];
if($join=="✅"){
$setting["mtgr"]["hdia"]="❌";
bot('EditMessageText',[
	'chat_id'=>$chat_id, 
	'message_id'=>$message_id,
'text'=>"- مرحباً عزيزي المطور $name 🔥. 

- حساب التواصل : $alm
- عدد النقاط الدخول : stinggggj

- يمكن للعضو ارسال /id لارسال الايدي الخاص به

",
'parse_mode'=>"MARKDOWN",
'disable_web_page_preview'=>true,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>"تعين حساب التواصل مع المطور",'callback_data'=>"alm"],['text'=>'تعيين عدد نقاط الدخول ','callback_data'=>"setengss"]],
[['text'=>'اضف سلعه','callback_data'=>'add'],['text'=>' حذف سلعة','callback_data'=>'del']],
[['text'=>"ارسال نقاط للكل ",'callback_data'=>"forall"],['text'=>'خصم نقاط للكل','callback_data'=>"delall"]],
[['text'=>'صنع رابط هديه ','callback_data'=>"offerfree"]],
[['text'=>' إرسال نقاط','callback_data'=>"sendcoin"],['text'=>'خصم نقاط','callback_data'=>"takecoin"]],
[['text'=>"الهديه اليوميه : ❌",'callback_data'=>"hdiamode"],['text'=>'تعيين عدد الهديه','callback_data'=>"hadehday"]],
[['text'=>'تعين عموله التحويل','callback_data'=>"ccoin"],['text'=>"تحويل النقاط : $thoill ",'callback_data'=>"modethoil"]], 
[['text'=>'تعين قناة الاثباتات','callback_data'=>"shh"]],
[['text'=>"كميه السلع المتوفره : $kmia",'callback_data'=>"kmia"]],
[['text'=>'مسح نقاط الجميع','callback_data'=>"delto0"]],
]])
]);   
}
if($join=="❌"){
$setting["mtgr"]["hdia"]="✅";
bot('EditMessageText',[
	'chat_id'=>$chat_id, 
	'message_id'=>$message_id,
'text'=>"
- مرحباً عزيزي المطور $name 🔥. 

- حساب التواصل : $alm
- عدد النقاط الدخول : stinggggj

- يمكن للعضو ارسال /id لارسال الايدي الخاص به
",
'parse_mode'=>"MARKDOWN",
'disable_web_page_preview'=>true,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>"تعين حساب التواصل مع المطور",'callback_data'=>"alm"],['text'=>'تعيين عدد نقاط الدخول ','callback_data'=>"setengss"]],
[['text'=>'اضف سلعه','callback_data'=>'add'],['text'=>' حذف سلعة','callback_data'=>'del']],
[['text'=>"ارسال نقاط للكل ",'callback_data'=>"forall"],['text'=>'خصم نقاط للكل','callback_data'=>"delall"]],
[['text'=>'صنع رابط هديه ','callback_data'=>"offerfree"]],
[['text'=>' إرسال نقاط','callback_data'=>"sendcoin"],['text'=>'خصم نقاط','callback_data'=>"takecoin"]],
[['text'=>"الهديه اليوميه : ✅",'callback_data'=>"hdiamode"],['text'=>'تعيين عدد الهديه','callback_data'=>"hadehday"]],
[['text'=>'تعين عموله التحويل','callback_data'=>"ccoin"],['text'=>"تحويل النقاط : $thoill ",'callback_data'=>"modethoil"]], 
[['text'=>'تعين قناة الاثباتات','callback_data'=>"shh"]],
[['text'=>"كميه السلع المتوفره : $kmia",'callback_data'=>"kmia"]],
[['text'=>'مسح نقاط الجميع','callback_data'=>"delto0"]],
]])
]);   
}
file_put_contents("setting.json", json_encode($setting));
sendsero($chat_id,$message_id);
}


#35
if($data == "kmia" && $chat_id == $sudo){
$setting = json_decode(file_get_contents("setting.json"),true);
$join=$setting["mtgr"]["kmia"];
if($join=="✅"){
$setting["mtgr"]["kmia"]="❌";
bot('EditMessageText',[
	'chat_id'=>$chat_id, 
	'message_id'=>$message_id,
'text'=>"
- مرحباً عزيزي المطور $name 🔥. 

- حساب التواصل : $alm
- عدد النقاط الدخول : stinggggj

- يمكن للعضو ارسال /id لارسال الايدي الخاص به

",
'parse_mode'=>"MARKDOWN",
'disable_web_page_preview'=>true,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>"تعين حساب التواصل مع المطور",'callback_data'=>"alm"],['text'=>'تعيين عدد نقاط الدخول ','callback_data'=>"setengss"]],
[['text'=>'اضف سلعه','callback_data'=>'add'],['text'=>' حذف سلعة','callback_data'=>'del']],
[['text'=>"ارسال نقاط للكل ",'callback_data'=>"forall"],['text'=>'خصم نقاط للكل','callback_data'=>"delall"]],
[['text'=>'صنع رابط هديه ','callback_data'=>"offerfree"]],
[['text'=>' إرسال نقاط','callback_data'=>"sendcoin"],['text'=>'خصم نقاط','callback_data'=>"takecoin"]],
[['text'=>"الهديه اليوميه : $hdia",'callback_data'=>"hdiamode"],['text'=>'تعيين عدد الهديه','callback_data'=>"hadehday"]],
[['text'=>'تعين عموله التحويل','callback_data'=>"ccoin"],['text'=>"تحويل النقاط : $thoill ",'callback_data'=>"modethoil"]],
[['text'=>'تعين قناة الاثباتات','callback_data'=>"shh"]],
[['text'=>'كميه السلع المتوفره : ❌','callback_data'=>"kmia"]],
[['text'=>'مسح نقاط الجميع','callback_data'=>"delto0"]],
]])
]);   
}
if($join=="❌"){
$setting["mtgr"]["kmia"]="✅";
bot('EditMessageText',[
	'chat_id'=>$chat_id, 
	'message_id'=>$message_id,
'text'=>"- مرحباً عزيزي المطور $name 🔥. 

- حساب التواصل : $alm
- عدد النقاط الدخول : stinggggj

- يمكن للعضو ارسال /id لارسال الايدي الخاص به

",
'parse_mode'=>"MARKDOWN",
'disable_web_page_preview'=>true,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>"تعين حساب التواصل مع المطور",'callback_data'=>"alm"],['text'=>'تعيين عدد نقاط الدخول ','callback_data'=>"setengss"]],
[['text'=>'اضف سلعه','callback_data'=>'add'],['text'=>' حذف سلعة','callback_data'=>'del']],
[['text'=>"ارسال نقاط للكل ",'callback_data'=>"forall"],['text'=>'خصم نقاط للكل','callback_data'=>"delall"]],
[['text'=>'صنع رابط هديه ','callback_data'=>"offerfree"]],
[['text'=>' إرسال نقاط','callback_data'=>"sendcoin"],['text'=>'خصم نقاط','callback_data'=>"takecoin"]],
[['text'=>"الهديه اليوميه : $hdia",'callback_data'=>"hdiamode"],['text'=>'تعيين عدد الهديه','callback_data'=>"hadehday"]],
[['text'=>'تعين عموله التحويل','callback_data'=>"ccoin"],['text'=>"تحويل النقاط : $thoill ",'callback_data'=>"modethoil"]],
[['text'=>'تعين قناة الاثباتات','callback_data'=>"shh"]],
[['text'=>'كميه السلع المتوفره : ✅','callback_data'=>"kmia"]],
[['text'=>'مسح نقاط الجميع','callback_data'=>"delto0"]],
]])
]);   
}
file_put_contents("setting.json", json_encode($setting));
sendsero($chat_id,$message_id);
} 


#56
if($text == "/id"){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
$chat_id
",
 'parse_mode'=>"MARKDOWN",
'reply_to_message_id'=>$message_id,
]);
}




 if($data == 'add'){
  bot('editMessageText',[
    'chat_id'=>$chat_id,
    'message_id'=>$message_id,
    'text'=>'• قم بأرسال اسم السلعة 📬',
    'reply_markup'=>json_encode([
     'inline_keyboard'=>[
      [['text'=>'• رجوع •','callback_data'=>'stengbott']]
      ]
    ])
  ]);
  $sales['mode'] = 'add';
  save($sales);
  exit;
 }
 if($text != '/start' and $text != null and $sales['mode'] == 'add'){
  if( $chat_id == $admin){
  bot('sendMessage',[
   'chat_id'=>$chat_id,
   'text'=>'تم الحفظ ✅.
~ الان ارسل عدد النقاط ( السعر ) المطلوبة للشراء ، 💸 رقم فقط
',
  ]);
  $sales['n'] = $text;
  $sales['mode'] = 'addm';
  save($sales);
  exit;
 }
 }
 if($text != '/start' and $text != null and $sales['mode'] == 'addm'){
  if( $chat_id == $admin){
  bot('sendMessage',[
   'chat_id'=>$chat_id,
   'text'=>"
• تم الحفظ السلعة ✅.
ℹ️┇الاسم : $sales[n]
??┇السعر : $text
🅱 | ارسل صورة للسلعه تستطيع ان تضع في الصوره وصف !
",
         "parse_mode"=>"markdown"
  ]);
  $sales['p'] = $text;
  $sales['mode'] = "photo";
  
  save($sales);
  exit;
 }
 }if($text != '/start' and $message->photo != null and $sales['mode'] == 'photo'){
  if( $chat_id == $admin){
  $code = substr(str_shuffle('abcdefghijklmnopqrstuvwxyz12345689807'),1,35);
  bot('sendMessage',[
   'chat_id'=>$chat_id,
   'text'=>"تم حفظ الصورة✅
   
   • تم الحفظ السلعة ✅.
ℹ️┇الاسم : $sales[n]
💵┇السعر : $sales[p]
⛓┇كود السلعة : $code

- لتفعيل التسليم التلقائي ؛ ✅
ارسل ( ملف او نص او صوره او فيديو )
",
         "parse_mode"=>"markdown"
  ]);
  $dayy_s = array("Sat","Sun","Mon","Tue","Wed","Thu","Fri");
 $dayy_s1 = array("السبت","الأحد","الإثنين","الثلاثاء","الأربعاء","الخميس","الجمعة");
$dayy_s2 = date('D');
$dayy = str_replace($dayy_s, $dayy_s1, $dayy_s2);
date_default_timezone_set('Asia/Jordan');
$time = date('h:i a');
$year = date('Y');
$month = date('n');
$day = date('j');
  bot('sendMessage',[
   'chat_id'=>$sss,
   'text'=>"
- تم اضافة سلعة جديدة ✅
- من ماركت : [@$bott] 🤍

🏷 ¦ السلعة :- *$sales[n]* 📱
💰 ¦ السعر :- *$sales[p]*
📆 ¦ التاريخ :- *$dayy - $year/$month/$day*
",
'parse_mode'=>"MarkDown",
	'reply_markup'=>json_encode([
                   'inline_keyboard'=>[
[['text'=>"بوت الماركت 🤖",'url'=>"https://t.me/$bott?start"] ] ] ])
  ]);
  file_put_contents('codejj.json', "\n" . $code ."\n",FILE_APPEND);    
  file_put_contents('salesnem.json', "\n" . $sales[n] . "\n",FILE_APPEND);    
  $sales['sales'][$code]['name'] = $sales['n'];
  $sales['sales'][$code]['price'] = $sales['p'];
  $sales['sales'][$code]['photo'] = $message->photo[0]->file_id;
  $sales['sales'][$code]['caption'] = $message->caption;
  $sales['p'] = null;
  $sales['n'] = null;
  $sales['mode'] = "file";
  $sales["baageel"]=$code;
  save($sales);
  exit;
 }
 }
 
 if($text != '/start'  and $sales['mode'] == 'file'){
  if( $chat_id == $admin){
 if($message->document){
  $file_id=$message->document->file_id;
 $ty="document";
}elseif($message->video){
 $file_id=$message->video->file_id;
 $ty="video";
 }elseif($message->text){
 $file_id=$text;
 $ty="text";
}elseif($message->photo){
 $file_id=$message->photo[0]->file_id;
 $ty="photo";
 }
 $sales['sales'][$sales["baageel"]]['file']=$file_id;
 $sales['sales'][$sales["baageel"]]['file2']=$ty;
 $sales['sales'][$sales["baageel"]]['numbers']='end';
  bot('sendMessage',[
   'chat_id'=>$chat_id,
   'text'=>'- تم حفظ التسليم التلقائي 

ارسل عدد مرات بيع السلعة

اذا تريد بيع السلعه للجميع اضغط على غير محدود ♻️',
    'reply_markup'=>json_encode([
     'inline_keyboard'=>[
      [['text'=>'- غير محدود ♻️','callback_data'=>'stengbotttt']]
      ]
    ])
  ]);
  $sales['mode'] = "Numbers";
  save($sales);
  exit;
 }
}
if(is_numeric($text) and $sales['mode'] == 'Numbers'){
	if( $chat_id == $admin){
		 $sales['sales'][$sales["baageel"]]['numbers']= $text;
  bot('sendMessage',[
   'chat_id'=>$chat_id,
   'text'=>'
- تم حفظ عدد مرات بيع السلعة
وتم اضافة السلعه بنجاح ✅
',
    'reply_markup'=>json_encode([
     'inline_keyboard'=>[
      [['text'=>'- • رجوع •','callback_data'=>'stengbott']]
      ]
    ])
  ]);
  $sales['mode'] = "type";
  save($sales);
  exit;
	}
	}
if($data == "stengbotttt"){
 if( $chat_id == $admin){
bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"*
- تم حفظ السلعه
عدد التسليم => غير محدود ♻️
*
",
'parse_mode'=>"MARKDOWN",
'disable_web_page_preview'=>true,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[["text"=>"رجوع ،🔙.","callback_data"=>"c"]],
]])
]);   
}
}
 if($data == 'del'){
 	$reply_markup = [];
  $reply_markup['inline_keyboard'][] = [['text'=>'اسم السلعة 🎟️','callback_data'=>'s'],['text'=>'حذف 🗑️','callback_data'=>'s']];
  foreach($sales['sales'] as $code => $sale){
   $reply_markup['inline_keyboard'][] = [['text'=>$sale['name'],'callback_data'=>"s"],['text'=>'🗑️','callback_data'=>'del×'.$code]];
  }
  $reply_markup['inline_keyboard'][] = [['text'=>'• رجوع •','callback_data'=>'stengbott']];
$json = json_encode($reply_markup);
  bot('editMessageText',[
    'chat_id'=>$chat_id,
    'message_id'=>$message_id,
    'text'=>'اختر السلعة المراد حذفها',
    'reply_markup'=>$json
  ]);
  exit;
 }
 $ex = explode('×',$data);
 if($ex[0] == "del"){
 	if($sales['sales'][$ex[1]] != null){
 	unset($sales['sales'][$ex[1]]);
  $sales['mode'] = null;
  save($sales);
$sales = json_decode(file_get_contents('sales.json'),true);
  $reply_markup = [];
  $reply_markup['inline_keyboard'][] = [['text'=>'اسم السلعة 🎟️','callback_data'=>'s'],['text'=>'🗑️','callback_data'=>'s']];
  foreach($sales['sales'] as $code => $sale){
   $reply_markup['inline_keyboard'][] = [['text'=>$sale['name'],'callback_data'=>"s"],['text'=>'🗑️','callback_data'=>'del×'.$code]];
  }
  $reply_markup['inline_keyboard'][] = [['text'=>'• رجوع •','callback_data'=>'stengbott']];
$json = json_encode($reply_markup);
  bot('editMessageText',[
    'chat_id'=>$chat_id,
    'message_id'=>$message_id,
    'text'=>'

اختر السلعة المراد حذفها الذي تريد حذفها 

',
    'reply_markup'=>$json
  ]);
 }else{
 	$reply_markup = [];
  $reply_markup['inline_keyboard'][] = [['text'=>'اسم السلعة 🎟️','callback_data'=>'s'],['text'=>' 🗑️','callback_data'=>'s']];
  foreach($sales['sales'] as $code => $sale){
   $reply_markup['inline_keyboard'][] = [['text'=>$sale['name'],'callback_data'=>"s"],['text'=>'🗑️','callback_data'=>'del×'.$code]];
  }
  $reply_markup['inline_keyboard'][] = [['text'=>'• رجوع •','callback_data'=>'stengbott']];
$json = json_encode($reply_markup);
  bot('editMessageText',[
    'chat_id'=>$chat_id,
    'message_id'=>$message_id,
    'text'=>'السلعة غير موجودة يمكنك المحاولة مجددا',
    'reply_markup'=>$json
  ]);
 }
 }
 if($text != '/start' and $text != null and $sales['mode'] == 'del'){
  if( $chat_id == $admin){
  if($sales['sales'][$text] != null){
   bot('sendMessage',[
   'chat_id'=>$chat_id,
   'text'=>"",
   ]);
  unlink('codejj.json',$text);
  unset($sales['sales'][$text]);
  $sales['mode'] = null;
  save($sales);
  exit;
  } else {
   bot('sendMessage',[
    'chat_id'=>$chat_id,
    'text'=>'كود غير صالخ'
   ]);
  }
exit;
}
}
 #---------------
		if(in_array($chat_id,$stingggg['stingggg']['band'])){
	if($message){
	bot('sendmessage',[
      'chat_id'=>$chat_id,
      "text"=>"

      ",'reply_to_message_id'=>$message_id,
]);
	}
	if($data){
		bot('EditMessageText',[
        'chat_id'=>$chat_id,
        'message_id'=>$message_id,
        'text'=>"

        ",
]);
		}
		return false;
}
