
<?php 
#تغير حقوق تدل علامه فشلك 
####@JJJ22J @SEROBOTS ####
ob_start();
$token = "6345801560:AAGKlm_mh_CK-OCaU9PE4DexJq2FUMC1CM8"; 
define("API_KEY",$token);
echo file_get_contents("https://api.telegram.org/bot" . API_KEY . "/setwebhook?url=" . $_SERVER['SERVER_NAME'] . "" . $_SERVER['SCRIPT_NAME']);
function bot($method,$datas=[]){
$HHMHHH = http_build_query($datas);
$url = "https://api.telegram.org/bot".API_KEY."/".$method."?$HHMHHH";
$HHMHHH = file_get_contents($url);
return json_decode($HHMHHH);
}

include("fiction.php");


 if(preg_match('/\/(start)(.*)/', $text)){
 $ex = explode(' ', $text);
if($chat_id == $ex[1]){
bot('sendMessage',[
     'chat_id'=>$chat_id,
     'text'=>"",]);
     exit;}}
 if(preg_match('/\/(start)(.*)/', $text )){
  $ex = explode(' ', $text);
$okl = bot('getchat',['chat_id'=>$ex[1]])->result->type;
  if(isset($ex[1])){
   if(!in_array($chat_id, $sales[$chat_id]['id'])){
   	if($okl == "private"){
    $sales[$chat_id]['baageel']=$ex[1];
    $sales[$chat_id]['c'] = 'Ok';
    }
    $sales[$chat_id]['id'][] = $chat_id;
    save($sales);
   }
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
	
	if($kmia == "✅"){
	$kmiatext = "الكميه ➰";
	}





	
if(preg_match("/\/(start)/",$text ) and !in_array($chat_id,$homse)){
	$ex = explode(' ', $text);
  if(isset($ex[1])){
	file_put_contents('userstart.json', "\n" . $chat_id . "\n",FILE_APPEND);    
    
  
    $sales[$sales[$chat_id]['baageel']]['backlect'] += $setengssj;
    $sales[$sales[$chat_id]['baageel']]['modest'] += 1;
    $sales['msh'][$from_id]['modest'] += 1;
    $after = $mycoin + $setengssj;
    save($sales);
    bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"
• قمت بالدخول الى الرابط الدعوه الخاص بصديقك وحصل على *$setengssj* نقطه ✨
", 
'disable_web_page_preview'=>true,
'parse_mode'=>"markdown",
  ]);
    bot('sendMessage',[
     'chat_id'=>$ex[1] ,
     'text'=>"
• قام : [$name](tg://user?id=$from_id) بالدخول الى الرابط الخاص وحصلت على  *$setengssj* نقطه ✨
• عدد نقاطك : $coinafter
",
'disable_web_page_preview'=>true,
'parse_mode'=>"markdown",
    ]);
    $sales[$chat_id]['baageel']=0;
    $sales[$chat_id]['id'][] = $chat_id;
    save($sales);
   }
   }
  if($sales[$chat_id]['collect'] == null){
   $sales[$chat_id]['collect'] = 0;
   save($sales);
  }
  $mycoin = $sales[$chat_id]['backlect'];
  bot('sendmessage',[
   'chat_id'=>$chat_id,
   'text'=>"
• اهلأ بك عزيزي ([$name](tg://user?id=$from_id)) 👋🏼 .

• البوت مخصص لشراء العروض المقدمه في البوت عن طريق تجميع النقاط ، 💵 .

• قم بأختيار القسم الذي تريده من الكيبورد 👇🏽.

", 
'disable_web_page_preview'=>true,
'parse_mode'=>"markdown",
   'reply_markup'=>json_encode([
    'inline_keyboard'=>[
    [['text'=>'العروض التي يقدمها البوت ✨','callback_data'=>'sales']],
     [['text'=>"عدد نقاطك : $mycoin",'callback_data'=>'nis'],['text'=>'تجميع النقاط','callback_data'=>'ra1']],
     [['text'=>'معلومات حسابك','callback_data'=>'about'],['text'=>"$thoiltext",'callback_data'=>'refccoin']],
     [['text'=>"$hdiatext",'callback_data'=>'kk']],
   ] 
   ])
  ]);
 }

  if($data == 'back'){
  if($sales[$chat_id]['backlect'] == null){
   $sales[$chat_id]['backlect'] = 0;
   
   save($sales);
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
	 
	if($kmia == "✅"){
	$kmiatext = "الكميه ➰";
	}
   
   
   
  
  bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"
• اهلأ بك عزيزي مجددا . 

• البوت مخصص لشراء العروض المقدمه في البوت عن طريق تجميع النقاط ، 💵 .

• قم بأختيار القسم الذي تريده من الكيبورد 👇🏽.

",
    'parse_mode'=>"MarkDown",
   'reply_markup'=>json_encode([
    'inline_keyboard'=>[
     [['text'=>'العروض التي يقدمها البوت ✨','callback_data'=>'sales']],
     [['text'=>"عدد نقاطك : $mycoin",'callback_data'=>'nis'],['text'=>'تجميع النقاط','callback_data'=>'ra1']],
     [['text'=>'معلومات حسابك','callback_data'=>'about'],['text'=>"$thoiltext",'callback_data'=>'refccoin']],
     [['text'=>"$hdiatext",'callback_data'=>'kk']],
   ] 
   ])
  ]);
 }
 
 if($data == "nis") {
 bot('answercallbackquery',[
        'callback_query_id'=>$update->callback_query->id,
'text'=>"
عدد نقاطك : $mycoin
",
 'show_alert'=>true,
]); 
}
$me = bot('getme',['bot'])->result->username;
$d = date('D');
$day = explode("\n",file_get_contents($d.".txt"));
$fakyou = file_get_contents("fakyou.txt");
$dayurl = explode("\n",file_get_contents($d."url.txt"));
if($d == "Sat"){
unlink("Fri.txt");
}
if($d == "Sun"){
unlink("Sat.txt");
}
if($d == "Mon"){
unlink("Sun.txt");
}
if($d == "Tue"){
unlink("Mon.txt");
}
if($d == "Wed"){
unlink("The.txt");
}
if($d == "Thu"){
unlink("Wed.txt");
}
if($d == "Fri"){
unlink("Thu.txt");
}
if($update->callback_query){
$data = $update->callback_query->data;
$chat_id = $update->callback_query->message->chat->id;
$title = $update->callback_query->message->chat->title;
$message_id = $update->callback_query->message->message_id;
$name = $update->callback_query->message->chat->first_name;
$user = $update->callback_query->message->chat->username;
$from_id = $update->callback_query->from->id;
}

if($data == "offerfree"){
           bot('EditMessageText',[
        'chat_id'=>$chat_id,
        'message_id'=>$message_id,
    'text'=>"
• ارسال عدد النقاط المراد وضعها في الهدية .
      ",'reply_markup'=>json_encode([
    'inline_keyboard'=>[
    [['text'=>'• رجوع •','callback_data'=>"c"]],
    ]])
     ]);
   file_put_contents("fakyou.txt","offerfree");
           }
           if(is_numeric($text) and $fakyou == "offerfree"){
            $cod = substr(str_shuffle('abcdefghijklmnopqrstuvwxyz12345689807'),1,10);
            bot('sendmessage',[
      'chat_id'=>$chat_id,
      "text"=>"
      • تم صنع رابط هدية بقيمة *$text*

• الرابط : https://t.me/$me?start=gift=$cod

الرابط بدون مدة ؛ 🚫
      ",
      'disable_web_page_preview'=>true,
'parse_mode'=>"markdown",
      'reply_markup'=>json_encode([
    'inline_keyboard'=>[
     [['text'=>'• رجوع •','callback_data'=>"c"]],
     ]])
     ]);
     file_put_contents($cod.".txt",$cod."\n".$text);
     file_put_contents($d.'.txt',$cod."\n",FILE_APPEND);
     unlink("fakyou.txt");
            }
            if(preg_match("/^\/(start)(.*)/s",$text)){

$ex1 = explode(' ',$text);
 $ex = explode('=',$ex1[1]);
if($ex[0] == "gift"){
$cood = explode("\n",file_get_contents($ex[1].".txt"));
$coin = $cood[1];
 if(in_array($ex[1],$day)){
 if(is_file($ex[1].'.txt')){
 	$my_coin = $sales[$chat_id]['backlect'];
 	$coinby2 = $my_coin + $coin;
  bot('sendmessage',[
   'chat_id'=>$admin,
   'text'=>"
   • تم اضافة $coin نقاط الي حساب $from_id ✅
• بواسطه رابط الهدية الخاص بك :
 https://t.me/$me?start=$ex[1]

   ",'parse_mode'=>"MarkDown"]);
    bot('sendmessage',[
   'chat_id'=>$chat_id,
   'text'=>"
   • تم اضافة *$coin* نقاط الي حسابك ✅
• بواسطه رابط الهدية من قبل مدير البوت 

• اصبحت نقاطك : $coinby2

   
   ",'reply_to_message_id'=>$message_id
]);
unlink($ex[1].'.txt');
$sales[$from_id]['backlect'] += $coin;
save($sales);
sleep(1);
  }else{
   bot('sendmessage',[
   'chat_id'=>$chat_id,
   'text'=>"
- الرابط غير صحيح او انتهت مدة الرابط !
   ",'reply_to_message_id'=>$message_id,]);
   }
  }else{
   bot('sendmessage',[
   'chat_id'=>$chat_id,
   'text'=>"
- الرابط غير صحيح او انتهت مدة الرابط !
   ",'reply_to_message_id'=>$message_id,]);
   }
 }
}
     
 if($data == "refccoin"){
  bot('EditMessageText',[
        'chat_id'=>$chat_id,
        'message_id'=>$message_id,
        'text'=>"
• بمكنك تحويل عدد من النقاط الى شخص اخر من هنا  🌐

- فقط ارسل الايدي وتحتها عدد النقاط 
مثال :
`1390519416
60`

- عموله التحويل : *$ccoin*


        " ,  
'disable_web_page_preview'=>true,
'parse_mode'=>"markdown",
    'reply_markup'=>json_encode([
    'inline_keyboard'=>[
    [['text'=>"• رجوع •","callback_data"=>"back"]],
    ]])
    ]);
  }
 $addcoin = explode("\n",$text);
  $getchat = bot('getchat',['chat_id'=>$addcoin[0]])->ok;
  if($addcoin[0] and $addcoin[1]){
   $b = str_replace('-','',$addcoin[1]);
if(!preg_match("/(-)/", $addcoin[1]) and is_numeric($addcoin[1])){
   if($getchat == "true"){
    $ccoin = $addcoin[1] + $cccoin;
    if($sales[$chat_id]['backlect'] >= $ccoin){
     $sales[$chat_id]['backlect'] -= $ccoin;
     $sales['mrktc'][$from_id]['th'] += 1;
     $sales[$addcoin[0]]['backlect'] += $addcoin[1];
     save($sales);
     bot('sendmessage',[
 'chat_id'=>$chat_id, 
 'text' =>"
• تم خصم ".$addcoin[1]." مـن نقاطك

تم تحويل النقاط الي : ".$addcoin[0]."

💸 ¦ نقاطك الان ".$sales[$chat_id]['backlect']." نقطة 
 ",
'disable_web_page_preview'=>true,
'parse_mode'=>"markdown",
'reply_markup'=>json_encode([
    'inline_keyboard'=>[
    [['text'=>"• رجوع •","callback_data"=>"back"]],
    ]]),'reply_to_message_id'=>$message_id,
]);
 bot('sendmessage',[
 'chat_id'=>$addcoin[0], 
 'text' =>"
• تم اضافة ".$addcoin[1]." نقاط الي حسابك ✅
• بواسطه : $from_id

• اصبحت نقاطك : *".$sales[$addcoin[0]]['backlect']."*
",
'disable_web_page_preview'=>true,
'parse_mode'=>"markdown",
]);
     }else{
      bot('sendmessage',[
 'chat_id'=>$chat_id, 
 'text' =>"• ليس لديك هذه القدر من النقاط 🚫!
 ",'reply_markup'=>json_encode([
    'inline_keyboard'=>[
    [['text'=>"• رجوع •","callback_data"=>"back"]],
    ]]),'reply_to_message_id'=>$message_id,
]);
      }
    }else{
     bot('sendmessage',[
 'chat_id'=>$chat_id, 
 'text' =>"الشخص قام بحضر البوع او ليس موجود بالبوت
 ",'reply_markup'=>json_encode([
    'inline_keyboard'=>[
    [['text'=>"• رجوع •","callback_data"=>"back"]],
    ]]),'reply_to_message_id'=>$message_id,
]);
     }
   }else{
    bot('sendmessage',[
 'chat_id'=>$chat_id, 
 'text' =>"
 $error404
 ",'reply_markup'=>json_encode([
    'inline_keyboard'=>[
    [['text'=>"• رجوع •","callback_data"=>"back"]],
    ]]),'reply_to_message_id'=>$message_id,
]);
bot('sendmessage',[
 'chat_id'=>$admin, 
 'text' =>"$error4040
 هناك شخص حاول استخدلم كلج ولكن خصمت منه 5 نقاط
 ",'parse_mode'=>"MarkDown",
]);
$sales[$chat_id]['backlect'] -= 5;
save($sales);

    }
   }
   
   
   
if($data == "about"){
bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"
*• مرحبا بك في معلومات حسابك في بوت المتجر 🌀*

- عدد نقاط حسابك : *$mycoin*

- عدد عمليات التحويل التي قمت بها : *$th*
- عدد الهدايا اليومية التي جمعتها : *$hd*
- عدد السلع التي شتريتها : *$mrkt*
- عدد مشاركاتك لرابط الدعوة : *$msharkty*

",
'disable_web_page_preview'=>true,
'parse_mode'=>"markdown",
'reply_markup'=>json_encode([
    'inline_keyboard'=>[
[['text'=>"رابط الدعوه",'callback_data'=>"ra1"]],
[['text'=>' • رجوع • ','callback_data'=>'back']]    
    ] 
   ])
  ]);
 }
 
 if($data == 'ra1'){
  bot('editMessageText',[
    'chat_id'=>$chat_id,
    'message_id'=>$message_id,
    'text'=>"
*انسخ الرابط ثم قم بمشاركته مع اصدقائك 📥 .*

• كل شخص يقوم بالدخول ستحصل على : $setengssj نقطه

*- بإمكانك عمل اعلان خاص برابط الدعوة الخاص بك *

~ رابط الدعوة : https://t.me/$me?start=$chat_id

*• مشاركتك للرابط : $msharkty 🌀*
",
'disable_web_page_preview'=>true,
'parse_mode'=>"markdown",
'reply_markup'=>json_encode([
    'inline_keyboard'=>[
[['text'=>"انشاء إعلان",'callback_data'=>"SK"]],
[['text'=>"• رجوع •",'callback_data'=>"back"]],
    ] 
   ])
  ]);
 }
 if($data == "SK"){
bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"*
افضل بوت متجر سلع في التليكرام 😉🌸
اسعار رخصيه جدا 👍🏻
*

https://t.me/$bott?start=$chat_id
",
'parse_mode'=>"MarkDown",
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>"دخول للبوت",'url'=>"https://t.me/$bott?start=$chat_id"]],
]
])
]);
} 
elseif($data == 'sales' and $sales['sales'] == null){
	bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"*
- لا يوجد اي عروض الان ✨
*

",
'parse_mode'=>"MarkDown",
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>"رجوع",'callback_data'=>"back"]],
]
])
]);
}
 elseif($data == 'sales' and $sales['sales'] !== null){
$kmia = $setting["mtgr"]["kmia"];
	if($kmia == "✅"){
	$kmiatext = "الكميه ➰";
	}
 
  $reply_markup = [];
  $reply_markup['inline_keyboard'][] = [['text'=>"$kmiatext",'callback_data'=>'s'],['text'=>'السعر 💵','callback_data'=>'s'],['text'=>'الاسم ℹ','callback_data'=>'s']];
  foreach($sales['sales'] as $code => $sale){
  if($ex[1]==$sales["sales"][$code]["type"])	{
    $ap=$sales["sales"][$code]["apps"];
    
    
   
   
 $a= $sales["sales"][$code]["numbers"];
  if($a == 'end'){
  $a="♾️";
  }else{
  $a=" - $a";
  }
  
  
   $reply_markup['inline_keyboard'][] = [['text'=>"$a",'callback_data'=>$code],['text'=>$sale['price'],'callback_data'=>$code],['text'=>$sale['name'],'callback_data'=>$code]];
  }}
if($sales[$chat_id]['backlect'] == null){
   $sales[$chat_id]['backlect'] = 0;
   save($sales);
  }
$reply_markup['inline_keyboard'][] = [['text'=>'بحث عن سلعه','callback_data'=>'search']];
$reply_markup['inline_keyboard'][] = [['text'=>'• رجوع •','callback_data'=>'back']];
  $reply_markup = json_encode($reply_markup);
  bot('editMessageText',[	

   'chat_id'=>$chat_id,
   'message_id'=>$message_id,
   'text'=>'- العروض التي يقدمها البوت ، 🔥
   ',
   'reply_markup'=>($reply_markup)
  ]);
  $sales[$chat_id]['mode'] = null;
   save($sales);
   exit;
 } elseif($data == 'yes'){
  $price = $sales['sales'][$sales[$chat_id]['mode']]['price'];
$name = $sales['sales'][$sales[$chat_id]['mode']]['name'];
$file=$sales['sales'][$sales[$chat_id]['mode']]['file'];
$file2=$sales['sales'][$sales[$chat_id]['mode']]['file2'];
$mah = $sales[$chat_id]['numbercount'];
  bot('sendmessage',[
  "chat_id"=>$chat_id,
    "text"=>"
- تم خصم $price من نقاطك

*- السلعة الخاصة بك هيه :*
",
'parse_mode'=>"MarkDown",
  ]);
  if($file2=="text"){
  	bot("sendmessage",[
  "chat_id"=>$chat_id,
  "$file2"=>$file
  ]);
    bot('sendmessage',[
  "chat_id"=>$chat_id,
    "text"=>"
    انتضر قليلا ؛ ™
    ",
    'parse_mode'=>"MarkDown",
  "message_id"=>$message_id
  ]);
  }else{	
bot("send$file2",[
  "chat_id"=>$chat_id,
  "$file2"=>$file,
  'parse_mode'=>"MarkDown",
  ]);
bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"    انتضر قليلا ؛ ™
	",
	'parse_mode'=>"MarkDown",
  	]);
 } 
$dayy_s = array("Sat","Sun","Mon","Tue","Wed","Thu","Fri");
 $dayy_s1 = array("السبت","الأحد","الإثنين","الثلاثاء","الأربعاء","الخميس","الجمعة");
$dayy_s2 = date('D');
$dayy = str_replace($dayy_s, $dayy_s1, $dayy_s2);
date_default_timezone_set('Asia/Jordan');
$time = date('h:i a');
$year = date('Y');
$month = date('n');
$day = date('j');
    $userbot = "{$getMe->username}";
    $userb = strtoupper($userbot);
    	bot('sendmessage',[
	'chat_id'=>$sss,
	'text'=>"
- تم تسـ📦ـليم طلب جديد ✅
- من ماركت : [@$bott] 🤍

🏷 ¦ السلعة :- *$name* 📱
💰 ¦ السعر :- *$price*
📆 ¦ التاريخ :- *$dayy - $year/$month/$day*

- معلومات المُشتري 👤 :-
🏷 ¦ الاسم :- [$nammee](tg://user?id=$chat_id)
🆔 ¦ الأيدي :- $chat_id", 
'parse_mode'=>"MarkDown",
	'reply_markup'=>json_encode([
                   'inline_keyboard'=>[
				[
['text'=>"بوت الماركت",'url'=>"https://t.me/$bott?start"]
   ],
   
                     ]
               ])
  	]);
  bot('sendmessage',[
   'chat_id'=>$admin,
   'text'=>"
- اسم شخص : [$name](tg://openmessage?user_id=$chat_id) 
- ايدي الشخص : `$chat_id`
* - قام بشراء $name بسعر $price *

*- تم تسليم السلعة تلقائيا*
",
'parse_mode'=>"MarkDown",
  ]);
  $sales[$chat_id]['markt'] += 1;
  $sales[$chat_id]['backlect'] -= $price;
  if($sales['sales'][$sales[$chat_id]['mode']]['numbers'] != 'end'){
  if($sales['sales'][$sales[$chat_id]['mode']]['numbers'] == 0 or $sales['sales'][$sales[$chat_id]['mode']]['numbers'] == 1){
  	unset($sales['sales'][$sales[$chat_id]['mode']]);
  }else{
  	$sales['sales'][$sales[$chat_id]['mode']]['numbers'] -=1;
  }
  }$sales[$chat_id]['mode'] = null;
  save($sales);
  exit;
 } else {
   if($data == 's') { exit; }
   $price = $sales['sales'][$data]['price'];
   $name = $sales['sales'][$data]['name'];
   $caption = $sales['sales'][$data]['caption'];
   if($caltion == null){
   	$caption = "لايوجد وصف";
   }
   if($price != null){
    if($price <= $sales[$chat_id]['backlect']){
     bot('sendphoto',[
      'chat_id'=>$chat_id,
      'photo'=>$sales['sales'][$data]['photo'],
      'caption'=>"
      
      • اسم السلعة : $name
• وصف السلعة : $caption

• سعر السلعة الحالي : $price
• حاله توفر السلعة : عند طلب 

طريقة التسليم : تلقائي ✨

- انت متأكد من شراء ؟


",
   'reply_markup'=>json_encode([
     'inline_keyboard'=>[
        [['text'=>'نعم ، 🔥','callback_data'=>"yes"],['text'=>'لا 🚫','callback_data'=>"sales"]],
       ] 
      ])
     ]);
     $sales[$chat_id]['mode'] = $data;
     save($sales);
     exit;
    } else {
     bot('answercallbackquery',[
      'callback_query_id' => $update->callback_query->id,
'text'=>"نقاطك غير كافية لشراء هذا السلعة 🚫
      • اسم السلعة : $name
• وصف السلعة : $caption

• سعر السلعة الحالي : $price
• حاله توفر السلعة : عند طلب

طريقة التسليم : تلقائي ✨


",
      'show_alert'=>true
     ]);
    }
   }
 }
if($data=="search"){
bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"*
• اكتب اسم السعة المراد البحث عنها  🌐
*
",
'parse_mode' => "MarkDown",
'reply_markup'=>json_encode([
    'inline_keyboard'=>[
[['text'=>" رجوع  🔙",'callback_data'=>"sales"]],
    ] 
   ])
  ]);
  $sales[$chat_id]["mode"]="search";
  save($sales);
  exit;
}
if($sales[$chat_id]["mode"]=="search"){
bot('editmessagetext',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"
انتضر قليلا ؛ 🔄
",
  ]);
  
  $reply_markup = [];
  $reply_markup['inline_keyboard'][] = [['text'=>'الكمية ♾️','callback_data'=>'s'],['text'=>'السعر 💰','callback_data'=>'s'],['text'=>'إسم السلعة 🏷️','callback_data'=>'s']];
  foreach($sales['sales'] as $code => $sale){
  if(preg_match("/$text/",$sale["name"])||preg_match("/$text/",$name)){
  $co=$sales["sales"][$code]["country"];
  $ap=$sales["sales"][$code]["apps"];
  $a= $sales["sales"][$code]["numbers"];
  if($a == 'end'){
  $a="♾️";
  }
   $reply_markup['inline_keyboard'][] = [['text'=>"$a",'callback_data'=>$code],['text'=>$sale['price'],'callback_data'=>$code],['text'=>$sale['name'],'callback_data'=>$code]];
  }}
if($sales[$chat_id]['backlect'] == null){
   $sales[$chat_id]['backlect'] = 0;
   save($sales);
  }
$reply_markup['inline_keyboard'][] = [['text'=>'بحث عن سلعه','callback_data'=>'search']];
$reply_markup['inline_keyboard'][] = [['text'=>'• رجوع •','callback_data'=>'back']];
  $reply_markup = json_encode($reply_markup);
  bot('sendmessage',[
   'chat_id'=>$chat_id,
   'message_id'=>$message_id,
   'text'=>'
*• جميع السلع التي باسم :* $text ،
*- اضغط على السلعة لعرض محتواها*
',
   'reply_markup'=>($reply_markup)
  ]);
  $sales[$chat_id]["mode"]="";
  save($sales);
  exit;
}
$ary = array($admin);
$id = $message->chat->id;
$admins = in_array($id,$ary);
$data = $update->callback_query->data;
$from_id = $message->from->id;
$chat_id = $message->chat->id;
$chat_id2 = $update->callback_query->message->chat->id;
$cut = explode("\n",file_get_contents("stats/users.txt"));
$users = count($cut)-0;
$mode = file_get_contents("stats/bc.txt");
#Start code 

if ($update && !in_array($id, $cut)) {
    mkdir('stats');
    file_put_contents("stats/users.txt", $id."\n",FILE_APPEND);
  }

    

if($text == '/start' and !in_array($chat_id,$homse) ){
file_put_contents('userstart.json', "\n" . $chat_id . "\n",FILE_APPEND);    
bot('sendMessage',[
'chat_id'=>$modir,
'text'=>"• تم دخول شخص جديد الي البوت الخاص بك 👾
                 • ┉ • ┉ • ┉ • ┉ • ┉ •
• معلومات العضو الجديد .

• الاسم :  [$name](tg://user?id=$chat_id) 
• المعرف : [@$user] 
• الايدي :  $id
                 • ┉ • ┉ • ┉ • ┉ • ┉ •
• عدد الاعضاء الكلي : $users
",'disable_web_page_preview'=>true,
'parse_mode'=>"MarkDown",
]); 
}
$d = date('D');
$day = explode("\n",file_get_contents($d.'.txt'));
if($d == "Sat"){
unlink("Fri.txt");
}
if($d == "Sun"){
unlink("Sat.txt");
}
if($d == "Mon"){
unlink("Sun.txt");
}
if($d == "Tue"){
unlink("Mon.txt");
}
if($d == "Wed"){
unlink("The.txt");
}
if($d == "Thu"){
unlink("Wedtxt");
}
if($d == "Fri"){
unlink("Thu.txt");
}
$from_id = $update->callback_query->from->id;
  if($data == "kk"){ 
  if(!in_array($from_id,$day)){
  	bot('EditMessageText',[
        'chat_id'=>$chat_id2,
        'message_id'=>$update->callback_query->message->message_id,
        'text'=>"
• لقد حصلت على $hadehdayj نقاط هدية يومية 🎁
    ",
    'reply_to_message_id'=>$message->message_id,
    'parse_mode'=>"MarkDown",
    'disable_web_page_preview'=>true,
    'reply_markup'=>json_encode([
    'inline_keyboard'=>[
    [['text'=>' • رجوع • ','callback_data'=>'back']]    
            ]
        ])
        ]);
$sales[$from_id]['backlect'] += $hadehdayj;
$sales['mrktc'][$from_id]['hd'] += 1;
save($sales);
file_put_contents($d.'.txt',$from_id."\n",FILE_APPEND);

}else{
	bot('EditMessageText',[
        'chat_id'=>$chat_id2,
        'message_id'=>$update->callback_query->message->message_id,
        'text'=>"
• لقد حصلت على الهدية مسبقا , انتظر يوم واعد المحاولة !
    ",
    'reply_to_message_id'=>$message->message_id,
    'parse_mode'=>"MarkDown",
    'disable_web_page_preview'=>true,
    'reply_markup'=>json_encode([
    'inline_keyboard'=>[
    [['text'=>' • رجوع • ','callback_data'=>'back']]    
            ]
        ])
        ]);
}
}



?>
