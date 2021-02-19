<?php
date_default_timezone_set('Asia/Ho_Chi_Minh');
session_start();
error_reporting(0);
$BBlack="\033[1;30m";      
$BRed="\033[1;31m";
$BGreen="\033[1;32m";
$BYellow="\033[1;33m";
$BBlue="\033[1;34m";
$BPurple="\033[1;35m";
$BCyan="\033[1;36m";
$BWhite="\033[1;37m";
$Blue="\033[0;34m";
$res="\033[0m";
$red="\033[1;31m";
$xanh="\033[1;32m";
$cyan="\033[1;36m";
$yellow="\033[1;33m";
$turquoise="\033[1;34m";
$lime=$BGreen;
$white= "\033[1;37m";
@system('clear');
  $head[] = "Connection: keep-alive";
	$head[] = "Keep-Alive: 300";
	$head[] = "authority: m.facebook.com";
	$head[] = "ccept-Charset: ISO-8859-1,utf-8;q=0.7,*;q=0.7";
	$head[] = "accept-language: vi-VN,vi;q=0.9,fr-FR;q=0.8,fr;q=0.7,en-US;q=0.6,en;q=0.5";
	$head[] = "cache-control: max-age=0";
	$head[] = "upgrade-insecure-requests: 1";
	$head[] = "accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.9";
	$head[] = "sec-fetch-site: none";
	$head[] = "sec-fetch-mode: navigate";
	$head[] = "sec-fetch-user: ?1";
	$head[] = "sec-fetch-dest: document";
chay(18);
echo $Cyan."Truy cập https://khotoolauto.club để lấy key miễn phí nhé \n";
chay(18);
$sver= web('sever/sever2.php','');
if ($sver == 'lock'){echo "";
}else{ echo $BRed."  \n \nSEVER TẠM ĐÓNG !!! \n"; exit();}
echo " \033[1;33m[\033[1;35m🔑️\033[1;33m] \033[1;32mNhập API Key : ";
$keyy = trim(fgets(STDIN));
$n = web('api/apikey.php?key='.$keyy,'');
$useragent = json_decode($n)->{'useragent'};
$apikey= json_decode($n)->{'pass'};
if ($keyy != $apikey || empty($apikey)){echo $BRed."\n KEY SAI Vui lòng liên hệ zalo $BWhite 0334506791 $BRed để mua key \n ";
    exit();}
$time = json_decode($n)->{'time'};
$name = json_decode($n)->{'user'};
$unfl = json_decode($n)->{'unfl'};
@system('clear');
$ip =  web('api/checkip.php',$useragent);
$ip1 = str_replace('.','', $ip);
$checkip = web('api/ip.php?key='.$keyy.'&ip='.$ip1,$useragent);
echo "\n";
if ($checkip == '3'){
exit($BRed." PHÁT HIỆN IP LẠ VUI LÒNG LIÊN HỆ ADMIN ĐỂ MUA MỚI KEY ");
}else if ($checkip == '1'){
  echo $BYellow." Đã lưu địa chỉ IP ".$ip." Vào hệ thống Vui lòng không share tài khoản cho bất kì người nào \n";sleep(2);
}
@system('clear');
chay(18);
echo $BYellow."                      Tool Auto TDS + TTC ĐA LUỒNG V2\n                      Bản Quyền : ĐẠT TOOL FREE\n        $BPurple              Zalo : 0334506791\n                    $BCyan  YouTube: ĐẠT TOOL FREE \n                   ⭐ Hãy Nhập Chế Độ Để Vào Tool ⭐\n";
chay(18);
   echo $xanh."\033[1;37m~\033[1;31m[\033[1;32m✓\033[1;31m]$white =>$xanh  Nhập \033[1;31m[\033[1;32m1\033[1;31m]$BGreen AUTO TDS COOKIE \n";
   echo $xanh."\033[1;37m~\033[1;31m[\033[1;32m✓\033[1;31m]$white =>$xanh  Nhập \033[1;31m[\033[1;32m2\033[1;31m]$BGreen AUTO TDS TOKEN \n";
   echo $xanh."\033[1;37m~\033[1;31m[\033[1;32m✓\033[1;31m]$white =>$xanh  Nhập \033[1;31m[\033[1;32m3\033[1;31m]$BGreen AUTO TTC COOKIE \n";
   echo $xanh."\033[1;37m~\033[1;31m[\033[1;32m✓\033[1;31m]$white =>$xanh  Nhập \033[1;31m[\033[1;32m4\033[1;31m]$BGreen AUTO TTC TOKEN \n";
   echo $xanh."\033[1;37m~\033[1;31m[\033[1;32m✓\033[1;31m]$white =>$xanh  Nhập \033[1;31m[\033[1;32m5\033[1;31m]$BGreen AUTO TƯƠNG TÁC NUÔI CLONE \n";
   echo $xanh."\033[1;37m~\033[1;31m[\033[1;32m✓\033[1;31m]$white =>$xanh  Nhập \033[1;31m[\033[1;32m6\033[1;31m]$BGreen AUTO LỌC MAIL CỔ TỰ ĐỘNG \n";
   echo $xanh."\033[1;37m~\033[1;31m[\033[1;32m✓\033[1;31m]$white =>$xanh  Nhập \033[1;31m[\033[1;32m7\033[1;31m]$BGreen AUTO VIPIG.NET INSTAGRAM \n";
echo $xanh." Chọn chế độ auto: ";
$choncn = trim(fgets(STDIN));
if ($choncn == '1'){
@system('clear');
$listnv = [];
chay(7);
echo $BGreen." VERSION TDS.COM COOKIE\n";
chay(18);
if (file_exists("TKTDS.txt") == '1'){
  echo  "$BGreen Bạn có muốn đăng nhập vào tài khoản cũ bấn nút $BCyan enter $BGreen để tiếp tục, Bấm $BCyan no $BGreen để nhập lại tài khoản mới: $BYellow\3";
  $nhap =trim(fgets(STDIN));
if ($nhap == 'no'){
  $my = fopen("TKTDS.txt", "w+");
  echo "$BYellow Nhập Tài Khoản:$BGreen  ";
  $user = trim(fgets(STDIN));
  echo "\n$BYellow Nhập Mật Khẩu:$BGreen \5";
  $pass = trim(fgets(STDIN));
fwrite($my,json_encode(array('username'=> $user,'password'=> $pass)));
}
}else if(!file_exists("TKTDS.txt")){
  $my = fopen("TKTDS.txt", "w+");
  echo "$BYellow Nhập Tài Khoản:$BGreen  ";
  $user = trim(fgets(STDIN));
  echo "\n$BYellow Nhập Mật Khẩu:$BGreen \5";
  $pass = trim(fgets(STDIN));
fwrite($my,json_encode(array('username'=> $user,'password'=> $pass)));
}
$user = json_decode(file_get_contents("TKTDS.txt"))->{'username'};
$pass = json_decode(file_get_contents("TKTDS.txt"))->{'password'};
$source = getcookietds($user,$pass);
if ($source != 1 && $source != ''){
  echo '';
}else{
	exit($BRed."ĐĂNG NHẬP THẤT BẠI, SAI TÀI KHOẢN TRAODOISUB  !");
}
chay(18); $c = 0; $thu = 1;
$c=0;$thu=1;
echo $BGreen." Bạn muốn treo mấy acc facebook:  ";
$treo = trim(fgets(STDIN));
if(!is_numeric($treo)){$treo = 1;}
for($b=1;$b<($treo+ 1);$b++){
    echo $BGreen." Điền cookie thứ $BGreen".$thu." : $BWhite ";
    $cooki[$c]=trim(fgets(STDIN));
    $ch=curl_init();
    $cookie=$cooki[$c];
$access = cookie($cookie,$useragent,$head);
if ($access != false)
{
echo $BYellow." Tài khoản chính xác \n";$c++;
	            $thu++;
}else{echo $BRed." COOKIE SAI RỒI!! \n";$b--;}
}
@system('clear');
$cookie=$cooki[0];
$access_token = cookie($cookie,$useragent,$head);
if ($access_token != false)
{ $idfb = json_decode(file_get_contents('https://graph.facebook.com/me/?access_token='.$access_token))->{'id'};	
}
$h = datnicktds($user,$idfb);
chay(18);
echo " $BRed  [✓]..$BGreen ĐANG CHẠY AUTO TDS COOKIE \n"; usleep(100000);
echo " $BRed  [✓]..$BGreen facebook.com/vandatpipo \n"; usleep(100000);
echo " $BRed  [✓]..$BYellow Donate nhận tool mới nhất \n"; usleep(100000);
echo "  $BRed [✓]..$Blue MOMO: $BBlack 0334506791 $BGreen\n";
    usleep(100000);
echo " $BRed  [✓]..$BGreen Đang chạy tài khoản:  $BCyan$user\n"; usleep(100000);
echo " $BRed  [✓]..$BGreen Tên người mua Key:  $BCyan$name\n"; usleep(100000);
echo " $BRed  [✓]..$BGreen Key hết hạn sau:  $BCyan$time ngày\n"; usleep(100000);
echo "  $BRed [✓]..$BGreen Đang chạy đa luồng: $BBlack ".$treo."$BGreen tài khoản \n"; usleep(100000);
$xu = file_get_contents('https://traodoisub.com/scr/test3.php?user='.$user); usleep(100000);
echo "  $BRed [✓]..$BGreen Số xu hiện tại: [$BGreen$xu]\n"; usleep(100000);chay(18);
echo $lime."\033[1;37m~\033[1;31m[\033[1;32m✓\033[1;31m]$white =>$lime  Nhập \033[1;31m[\033[1;32m1\033[1;31m]$BGreen LIKE \n";
    echo $lime."\033[1;37m~\033[1;31m[\033[1;32m✓\033[1;31m]$white =>$lime  Nhập \033[1;31m[\033[1;32m2\033[1;31m]$BGreen COMMENTS \n";
    echo $lime."\033[1;37m~\033[1;31m[\033[1;32m✓\033[1;31m]$white =>$lime  Nhập \033[1;31m[\033[1;32m3\033[1;31m]$BGreen REACTION \n";
    echo $lime."\033[1;37m~\033[1;31m[\033[1;32m✓\033[1;31m]$white =>$lime  Nhập \033[1;31m[\033[1;32m4\033[1;31m]$BGreen FOLLOW \n";
    echo $lime."\033[1;37m~\033[1;31m[\033[1;32m✓\033[1;31m]$white =>$lime  Nhập \033[1;31m[\033[1;32m5\033[1;31m]$BGreen LIKE PAGE \n";
echo $BGreen." Ví dụ bạn muốn làm like follow thì điền 1+4 ";sleep(3); echo "\r"."                                                           "."\r";
echo $lime."\033[1;37m~\033[1;31m[\033[1;32m✓\033[1;31m]$white =>$lime  Vui Lòng Nhập chế độ : ";
$nhap = trim(fgets(STDIN));
if (strstr($nhap, '1')){array_push($listnv, 'like');}
if (strstr($nhap, '2')){array_push($listnv, 'cmt');}
if (strstr($nhap, '3')){array_push($listnv, 'cx');}
if (strstr($nhap, '4')){array_push($listnv, 'sub');}
if (strstr($nhap, '5')){array_push($listnv, 'page');} 
 if (count($listnv) == 0){exit($BRed."Vui lòng chọn ít nhất 1 loại NHIỆM VỤ!");}chay(18);
 echo $xanh."\033[1;37m~\033[1;31m[\033[1;32m✓\033[1;31m]$white =>$xanh  \033[1;31m[\033[1;32m✓\033[1;31m]$BGreen Nhập thời gian làm nhiệm vụ cmt, follow, like page : \5 $BWhite";
    $giaysub=trim(fgets(STDIN));
    echo $xanh."\033[1;37m~\033[1;31m[\033[1;32m✓\033[1;31m]$white =>$xanh  \033[1;31m[\033[1;32m✓\033[1;31m]$BGreen Nhập thời gian làm nhiệm vụ like, cảm xúc : \5 $BWhite";
    $giaylike=trim(fgets(STDIN));
if ($treo ==1){echo $xanh."\033[1;37m~\033[1;31m[\033[1;32m✓\033[1;31m]$white =>$xanh  \033[1;31m[\033[1;32m✓\033[1;31m]$BGreen Sau bao nhiệm vụ thì sẽ nghỉ ngơi : $BWhite \5";}else{
    echo $xanh."\033[1;37m~\033[1;31m[\033[1;32m✓\033[1;31m]$white =>$xanh  \033[1;31m[\033[1;32m✓\033[1;31m]$BGreen Sau bao nhiêu nhiệm vụ đổi nick :$BWhite \5";}
     $dung=trim(fgets(STDIN));  
     if (strlen($dung) <= 0){$dung = 10;}
if($treo == 1){echo $xanh."\033[1;37m~\033[1;31m[\033[1;32m✓\033[1;31m]$white =>$xanh  \033[1;31m[\033[1;32m✓\033[1;31m]$BGreen Dừng thời gian: $BWhite \5";
      $giay=trim(fgets(STDIN));}
 chay(18);
 echo $BGreen." Đang chạy ID ".$idfb."\n";
 $so= 0; $a = 1; $demdung = 0;
 while(true){
 echo $BGreen." Đang tải nhiệm vụ... ";
   $sonv = 0; $i = 0;
 if (in_array('like',$listnv)){
    $list0 = getnvtds('like',$user);sleep(4);
 if(is_array($list0)){
    if(count($list0) > 0){
    $listds['like'] = $list0;
    $sonv = $sonv + count($listds['like']);
    }else{$listds['like'] = null;}}
  }else{$listds['like'] = null;}
  if(in_array('sub',$listnv)){
    $list1 = getnvtds('follow',$user);sleep(4);
if(is_array($list1)){
    if(count($list1)>0){
    $listds['sub'] = $list1;
     $sonv = $sonv + count($listds['sub']);
    }else{$listds['sub'] = null;}}
  }else{$listds['sub'] = null;}
  if(in_array('cmt',$listnv)){
    $list2 = getnvtds('cmt',$user);
if(is_array($list2)){
    if(count($list2) > 0){
    $listds['cmt'] = $list2;
    $sonv = $sonv + count($listds['cmt']);
    sleep(2);
    }else{$listds['cmt'] = null;}}
  }else{$listds['cmt'] = null;}
  if(in_array('page',$listnv)){
 $list3 = getnvtds('likepage',$user);sleep(4);
 if(is_array($list3)){
    if(count($list3) > 0){
    $listds['page'] = $list3;
      $sonv = $sonv + count($listds['page']);
    }}
  }else{$listds['page'] = null;}
  if(in_array('cx',$listnv)){
    $list4 = getnvtds('camxuc',$user);sleep(4);
if(is_array($list4)){
    if (count($list4) > 0){
    $listds['cx'] = $list4;
     $sonv = $sonv + count($listds['cx']);
    }else{$listds['cx'] = null;}}
  }else{$listds['cx'] = null;}
  echo "\r";
while($sonv > 0){
   if ($listds['like'] and is_array($listds['like'])){$sonv--;
     $i++;if($demdung >= $dung){break;}
      $id = $listds['like'][array_rand($listds['like'],1)];
  $g = camxuc($cookie,$id,$useragent,'LIKE',$head);
if (strstr($g, 'Tài khoản')){ break;}
	$s = nhantientds('like',$id);
if ($s == 2){$xu = $xu + 200;$so++;$demdung++;
			echo echonhanxu(200,'LIKE',$id,$xu,$so);
			echo echodemgiay($giaylike);
					}else{
echo	$BRed."LIKE thất bại • ".$id."                     \r";
gettt($cookie,$useragent,$head);
	if(checklive($access_token) == '2'  ){
	  break;
	}
					}
      $listds['like'] = \array_diff($listds['like'],[$id]);
    }
  if ($listds['sub'] and is_array($listds['sub'])){$sonv--;
    $i++;if($demdung >= $dung){break;}
      $id = $listds['sub'][array_rand($listds['sub'],1)];
      $g = follow($cookie,$id,$useragent,$head);
      if (strstr($g, 'Tài khoản')){ break;}
      $s = nhantientds('sub',$id);
if ($s == 2){$xu = $xu + 600;$so++;$demdung++;
			echo echonhanxu(600,'FOLLOW',$id,$xu,$so);
			echo echodemgiay($giaysub);
					}else{
echo	$BRed."FOLLOW thất bại • ".$id."\r";
	if(checklive($access_token) == '2'  ){
	  break;
	}
					}
      $listds['sub'] = \array_diff($listds['sub'],[$id]);
    }
    if ($listds['cmt'] and is_array($listds['cmt'])){$sonv--;
      $i++;if($demdung >= $dung){break;}
      $ranar = array_rand($listds['cmt'],1);
      $key = $listds['cmt'][$ranar];
      $uid = $key->{'id'};
      $msg = $key->{'nd'};
      $g = cmt($access_token,$msg,$uid,$useragent,$head);
      if ($g->{'error'}->{'code'} == 368){
        break;
      }
       
      $s = nhantientds('cmt',$uid);
if ($s == 2){$xu = $xu + 600;$so++;$demdung++;
			echo echonhanxu(600,'CMT',$uid,$xu,$so);
			echo echodemgiay($giaysub);
					}else{
echo	$BRed."COMMENT thất bại • ".$uid."\r";
	if(checklive($access_token) == '2'  ){
	  break;
	}
					}
      unset($listds['cmt'][$ranar]);
    }
    if ($listds['page'] and is_array($listds['page'])){$sonv--;
      $i++;if($demdung >= $dung){break;}
      $id = $listds['page'][array_rand($listds['page'],1)];
     $g =	page($id,$cookie,$useragent,$head);
      if (strstr($g, 'Tài khoản')){ break;}
      $s = nhantientds('page',$id);
if ($s == 2){$xu = $xu + 600;$so++;$demdung++;
			echo echonhanxu(600,'PAGE',$id,$xu,$so);
			echo echodemgiay($giaysub);
					}else{
echo	$BRed."LIKE PAGE thất bại • ".$id."\r";
	if(checklive($access_token) == '2'   ){
	  break;
	}
					}
      $listds['page'] = \array_diff($listds['page'],[$id]);
    }
    if ($listds['cx'] and is_array($listds['cx'])){$sonv--;
      $i++;if($demdung >= $dung){break;}
      $ranar = array_rand($listds['cx'],1);
      $key = $listds['cx'][$ranar];
      $id = $key->{'id'};
      $type = $key->{'type'};
      $g =	camxuc($cookie,$id,$useragent,$type,$head);
 if (strstr($g, 'Tài khoản') ){ break;}
  
      $s = nhantiencxtds($type,$id);
	if ($s == 2){$xu = $xu + 400;$so++;$demdung++;
			echo echonhanxu(400,$type,$id,$xu,$so);
			echo echodemgiay($giaylike);
					}else{
echo	$BRed."THẢ CẢM XÚC thất bại • ".$id."\r";
	if(checklive($access_token) == '2'  ){
	  break;
	}
					}
      unset($listds['cx'][$ranar]);
    }
}
if($treo == '1' and $demdung == $dung){
  echo nghingoi($giay); $demdung = 0;
  gettt($cookie,$useragent,$head);
}
if (checklive($access_token) == '2' and $treo == 1){
  echo $BGreen." COOKIE ĐÃ BỊ DIE RỒI VUI LÒNG NHẬP COOKIE MỚI: ";
  $cookie= trim(fgets(STDIN));
  $access_token = cookie($cookie,$useragent,$head);
  $idfb = json_decode(file_get_contents('https://graph.facebook.com/me/?access_token='.$access_token))->{'id'};
  getcookietds($user,$pass);
if(isset($idfb)){
  $h = datnicktds($user,$idfb);
if($h != '1'){
  echo $BRed."WARNING:$BYellow IDFB ".$idfb."$BRed chưa được thêm vào cấu hình trao đổi sub vui lòng thêm vào rồi lại cho vào tool \n";exit;
}
}
}else if((checklive($access_token) == '2' or $dung == $demdung) and $treo >= '2'){$tat = 0;$demdung = 0;
$cookie =$cooki[$a];$a++;if($a>=$treo){$a=0;}
$access_token = cookie($cookie,$useragent,$head);
$idfb = checktoken($access_token,$useragent,$head)->{'id'};
if(isset($idfb)){
	   echo $BYellow."  Đang chạy nick:  ".$BCyan."  ".$idfb."\n";
$h = datnicktds($user,$idfb);
if($h != '1'){
  echo $BRed."WARNING:$BYellow IDFB ".$idfb."$BRed chưa được thêm vào cấu hình trao đổi sub vui lòng thêm vào rồi lại cho vào tool \n";exit;
}
}
}
}
 }
if($choncn == '2'){
  @system('clear');
$listnv = [];
chay(7);
echo $BGreen." VERSION TDS.COM TOKEN\n";
chay(18);

if (file_exists("TKTDS.txt") == '1'){
  echo  "$BGreen Bạn có muốn đăng nhập vào tài khoản cũ bấn nút $BCyan enter $BGreen để tiếp tục, Bấm $BCyan no $BGreen để nhập lại tài khoản mới: $BYellow\3";
  $nhap =trim(fgets(STDIN));
if ($nhap == 'no'){
  $my = fopen("TKTDS.txt", "w+");
  echo "$BYellow Nhập Tài Khoản:$BGreen  ";
  $user = trim(fgets(STDIN));
  echo "\n$BYellow Nhập Mật Khẩu:$BGreen \5";
  $pass = trim(fgets(STDIN));
fwrite($my,json_encode(array('username'=> $user,'password'=> $pass)));
}
}else if(!file_exists("TKTDS.txt")){
  $my = fopen("TKTDS.txt", "w+");
  echo "$BYellow Nhập Tài Khoản:$BGreen  ";
  $user = trim(fgets(STDIN));
  echo "\n$BYellow Nhập Mật Khẩu:$BGreen \5";
  $pass = trim(fgets(STDIN));
fwrite($my,json_encode(array('username'=> $user,'password'=> $pass)));
}
$user = json_decode(file_get_contents("TKTDS.txt"))->{'username'};
$pass = json_decode(file_get_contents("TKTDS.txt"))->{'password'};
$source = getcookietds($user,$pass);
if ($source != 1 && $source != ''){
  echo '';
}else{
	exit($BRed."ĐĂNG NHẬP THẤT BẠI, SAI TÀI KHOẢN TRAODOISUB  !");
}
chay(18);
$c = 0; $thu = 1;
echo $BGreen." Bạn muốn treo mấy acc facebook:  ";
$treo = trim(fgets(STDIN));
if(!is_numeric($treo)){$treo = 1;}
for($b=1;$b<($treo + 1);$b++){
    echo $BBlue." Điền token thứ $BGreen".$thu." : $BWhite ";
    $cooki[$c]=trim(fgets(STDIN));
    $access_token=$cooki[$c];
$access = checktoken($access_token,$useragent,$head);
if($access->{'id'}){
echo $BYellow." Tài khoản chính xác \n"; $c++;$thu++;}else{echo $BRed." TOKEN SAI RỒI!! \n";$b--;}
}
@system('clear');
$access_token = $cooki[0];
$idfb = checktoken($access_token,$useragent,$head)->{'id'};
$h = datnicktds($user,$idfb);
chay(18);
echo " $BRed  [✓]..$BGreen ĐANG CHẠY AUTO TDS TOKEN \n"; usleep(100000);
echo " $BRed  [✓]..$BGreen facebook.com/vandatpipo \n"; usleep(100000);
echo " $BRed  [✓]..$BYellow Donate nhận tool mới nhất \n"; usleep(100000);
echo "  $BRed [✓]..$Blue MOMO: $BBlack 0334506791 $BGreen\n";
    usleep(100000);
echo " $BRed  [✓]..$BGreen Đang chạy tài khoản:  $BCyan$user\n"; usleep(100000);
echo " $BRed  [✓]..$BGreen Tên người mua Key:  $BCyan$name\n"; usleep(100000);
echo " $BRed  [✓]..$BGreen Key hết hạn sau:  $BCyan$time ngày\n"; usleep(100000);
echo "  $BRed [✓]..$BGreen Đang chạy đa luồng: $BBlack ".$treo."$BGreen tài khoản \n"; usleep(100000);
$xu = file_get_contents('https://traodoisub.com/scr/test3.php?user='.$user); usleep(100000);
echo "  $BRed [✓]..$BGreen Số xu hiện tại: [$BGreen$xu]\n"; usleep(100000);chay(18);
echo $lime."\033[1;37m~\033[1;31m[\033[1;32m✓\033[1;31m]$white =>$lime  Nhập \033[1;31m[\033[1;32m1\033[1;31m]$BGreen LIKE \n";
    echo $lime."\033[1;37m~\033[1;31m[\033[1;32m✓\033[1;31m]$white =>$lime  Nhập \033[1;31m[\033[1;32m2\033[1;31m]$BGreen COMMENTS \n";
    echo $lime."\033[1;37m~\033[1;31m[\033[1;32m✓\033[1;31m]$white =>$lime  Nhập \033[1;31m[\033[1;32m3\033[1;31m]$BGreen FOLLOW \n";
echo $BGreen." Ví dụ bạn muốn làm like follow thì điền 1+3 ";sleep(3); echo "\r"."                                                           "."\r";
echo $lime."\033[1;37m~\033[1;31m[\033[1;32m✓\033[1;31m]$white =>$lime  Vui Lòng Nhập chế độ : ";
$nhap = trim(fgets(STDIN));
if (strstr($nhap, '1')){array_push($listnv, 'like');}
if (strstr($nhap, '2')){array_push($listnv, 'cmt');}
if (strstr($nhap, '3')){array_push($listnv, 'sub');}
 if (count($listnv) == 0){exit($BRed."Vui lòng chọn ít nhất 1 loại NHIỆM VỤ!");}chay(18);
 echo $xanh."\033[1;37m~\033[1;31m[\033[1;32m✓\033[1;31m]$white =>$xanh  \033[1;31m[\033[1;32m✓\033[1;31m]$BGreen Nhập thời gian làm nhiệm vụ cmt, follow, like page : \5 $BWhite";
    $giaysub=trim(fgets(STDIN));
    echo $xanh."\033[1;37m~\033[1;31m[\033[1;32m✓\033[1;31m]$white =>$xanh  \033[1;31m[\033[1;32m✓\033[1;31m]$BGreen Nhập thời gian làm nhiệm vụ like, cảm xúc : \5 $BWhite";
    $giaylike=trim(fgets(STDIN));
if ($treo ==1){echo $xanh."\033[1;37m~\033[1;31m[\033[1;32m✓\033[1;31m]$white =>$xanh  \033[1;31m[\033[1;32m✓\033[1;31m]$BGreen Sau bao nhiệm vụ thì sẽ nghỉ ngơi : $BWhite \5";}else{
    echo $xanh."\033[1;37m~\033[1;31m[\033[1;32m✓\033[1;31m]$white =>$xanh  \033[1;31m[\033[1;32m✓\033[1;31m]$BGreen Sau bao nhiêu nhiệm vụ đổi nick :$BWhite \5";}
     $dung=trim(fgets(STDIN));    if (strlen($dung) <= 0){$dung = 10;}
if($treo == 1){echo $xanh."\033[1;37m~\033[1;31m[\033[1;32m✓\033[1;31m]$white =>$xanh  \033[1;31m[\033[1;32m✓\033[1;31m]$BGreen Dừng thời gian: $BWhite \5";
      $giay=trim(fgets(STDIN));}
      chay(18);
 echo $BGreen." Đang chạy ID ".$idfb."\n";
 $so= 0; $a = 1; $demdung = 0;
 while(true){
 echo $BGreen." Đang tải nhiệm vụ... ";
   $sonv = 0; $i = 0;
 if (in_array('like',$listnv)){
    $list0 = getnvtds('like',$user);sleep(4);
if(is_array($list0)){
    if(count($list0) > 0){
    $listds['like'] = $list0;
    $sonv = $sonv + count($listds['like']);
    }else{$listds['like'] = null;}}
  }else{$listds['like'] = null;}
  if(in_array('sub',$listnv)){
    $list1 = getnvtds('follow',$user);sleep(4);
if(is_array($list1)){
    if(count($list1) > 0){
    $listds['sub'] = $list1;
     $sonv = $sonv + count($listds['sub']);
    }else{$listds['sub'] = null;}}
  }else{$listds['sub'] = null;}
  if(in_array('cmt',$listnv)){
    $list2 = getnvtds('cmt',$user);sleep(4);
if(is_array($list2)){
    if(count($list2) > 0){
    $listds['cmt'] = $list2;
    $sonv = $sonv + count($listds['cmt']);
    }else{$listds['cmt'] = null;}}
  }else{$listds['cmt'] = null;}
  echo "\r";
while($sonv > 0 ){
   if ($listds['like'] and is_array($listds['like'])){$sonv--;
     $i++;if($demdung >= $dung){break;}
      $id = $listds['like'][array_rand($listds['like'],1)];
      $g = liketoken($access_token,$id,$useragent,$head);
       if($g->{'error'}->{'code'} == 368){
   break;
 }
	$s = nhantientds('like',$id);
					if ($s == 2){$xu = $xu + 200;$so++;$demdung++;
			echo echonhanxu(200,'LIKE',$id,$xu,$so);
			echo echodemgiay($giaylike);
					}else{
echo	$BRed."LIKE thất bại • ".$id."\r";
	if(checklive($access_token) == '2'  ){
	  break;
	}
					}
      $listds['like'] = \array_diff($listds['like'],[$id]);
    }
  if ($listds['sub'] and is_array($listds['sub'])){$sonv--;
    $i++;if($demdung >= $dung){break;}
      $id = $listds['sub'][array_rand($listds['sub'],1)];
      $g = followtoken($access_token,$id,$useragent,$head);
 if($g->{'error'}->{'code'} == 368){
   break;
 }
      $s = nhantientds('sub',$id);
if ($s == 2){$xu = $xu + 600;$so++;$demdung++;
			echo echonhanxu(600,'FOLLOW',$id,$xu,$so);
			echo echodemgiay($giaysub);
					}else{
echo	$BRed."FOLLOW thất bại • ".$id."\r";
	if(checklive($access_token) == '2'  ){
	  break;
	}
					}
      $listds['sub'] = \array_diff($listds['sub'],[$id]);
    }
    if ($listds['cmt'] and is_array($listds['cmt'])){$sonv--;
      $i++;if($demdung >= $dung){break;}
      $ranar = array_rand($listds['cmt'],1);
      $key = $listds['cmt'][$ranar];
      $uid = $key->{'id'};
      $msg = $key->{'nd'};
      $g = cmt($access_token,$msg,$uid,$useragent,$head);
      if ($g->{'error'}->{'code'} == 368){
        break;
      }
      $s = nhantientds('cmt',$uid);
if ($s == 2){$xu = $xu + 600;$so++;$demdung++;
			echo echonhanxu(600,'CMT',$uid,$xu,$so);
			echo echodemgiay($giaysub);
					}else{
echo	$BRed."COMMENT thất bại • ".$uid."\r";
	if(checklive($access_token) == '2'  ){
	  break;
	}
					}
      unset($listds['cmt'][$ranar]);
    }
  
}
if($treo == 1 and $demdung >= $dung){
  echo nghingoi($giay); $demdung = 0;
}
if ((checklive($access_token) == '2' or ($g->{'error'}->{'code'} == 368 and !strstr($g->{'error'}->{'message'},'không có vấn đề gì cả'))) and $treo == 1){
  echo $BRed.$g->{'error'}->{'message'}." : ";
  $access_token = trim(fgets(STDIN));
  $idfb = json_decode(file_get_contents('https://graph.facebook.com/me/?access_token='.$access_token))->{'id'};
  getcookietds($user,$pass);
if(isset($idfb)){
  $h = datnicktds($user,$idfb);
if($h != '1'){
  echo $BRed."WARNING:$BYellow IDFB ".$idfb."$BRed chưa được thêm vào cấu hình trao đổi sub vui lòng thêm vào rồi lại cho vào tool \n";exit;
}
}
}else if((checklive($access_token) == '2' or $dung == $demdung or $g->{'error'}->{'code'} == 368) and $treo >= 2){$tat = 0; $demdung = 0;
  $access_token = $cooki[$a];$a++;if($a>=$treo){$a=0;}
 $idfb = checktoken($access_token,$useragent,$head)->{'id'};
	   echo $BYellow."  Đang chạy nick:  ".$BCyan."  ".$idfb."\n";
if(isset($idfb)){
  getcookietds($user,$pass);
$h = datnicktds($user,$idfb);
if($h != '1'){
  echo $BRed."WARNING:$BYellow IDFB ".$idfb."$BRed chưa được thêm vào cấu hình trao đổi sub vui lòng thêm vào rồi lại cho vào tool \n";exit;
}
}
}
  
}
 }
if($choncn == 3){
  @system('clear');
$listnv = [];
chay(7);
echo $BGreen." VERSION TTC.COM COOKIE\n";
chay(18);
if (file_exists("TKTTC.txt") == '1'){
  echo  "$BGreen Bạn có muốn đăng nhập vào tài khoản cũ bấn nút $BCyan enter $BGreen để tiếp tục, Bấm $BCyan no $BGreen để nhập lại tài khoản mới: $BYellow\3";
  $nhap =trim(fgets(STDIN));
if ($nhap == 'no'){
  $my = fopen("TKTTC.txt", "w+");
  echo "$BYellow Nhập Tài Khoản:$BGreen  ";
  $user = trim(fgets(STDIN));
  echo "\n$BYellow Nhập Mật Khẩu:$BGreen \5";
  $pass = trim(fgets(STDIN));
fwrite($my,json_encode(array('username'=> $user,'password'=> $pass)));
}
}else if(!file_exists("TKTTC.txt")){
  $my = fopen("TKTTC.txt", "w+");
  echo "$BYellow Nhập Tài Khoản:$BGreen  ";
  $user = trim(fgets(STDIN));
  echo "\n$BYellow Nhập Mật Khẩu:$BGreen \5";
  $pass = trim(fgets(STDIN));
fwrite($my,json_encode(array('username'=> $user,'password'=> $pass)));
}
$user = json_decode(file_get_contents("TKTTC.txt"))->{'username'};
$pass = json_decode(file_get_contents("TKTTC.txt"))->{'password'};
chay(18);
$source = getcookiettc($user,$pass,$useragent);
if (strlen($source) < 10 ){
}else{
	exit($BRed."ĐĂNG NHẬP THẤT BẠI, SAI TÀI KHOẢN TƯƠNG TÁC CHÉO !");
}
$c=0;$thu=1;
echo $BGreen." Bạn muốn treo mấy acc facebook:  ";
$treo = trim(fgets(STDIN));
if(!is_numeric($treo)){$treo = 1;}
for($b=1;$b<($treo+ 1);$b++){
    echo $BGreen." Điền cookie thứ $BGreen".$thu." : $BWhite ";
    $cooki[$c]=trim(fgets(STDIN));
    $ch=curl_init();
    $cookie=$cooki[$c];
$access = cookie($cookie,$useragent,$head);
if ($access != false)
{
echo $BYellow." Tài khoản chính xác \n";$c++;
	            $thu++;
}else{echo $BRed." COOKIE SAI RỒI!! \n";$b--;}
}
$cookie=$cooki[0];
$access_token = cookie($cookie,$useragent,$head);
$idfb = checktoken($access_token,$useragent,$head)->{'id'};
@system('clear');
chay(18);
echo " $BRed  [✓]..$BGreen ĐANG CHẠY AUTO TTC COOKIE \n"; usleep(100000);
echo " $BRed  [✓]..$BGreen facebook.com/vandatpipo \n"; usleep(100000);
echo " $BRed  [✓]..$BYellow Donate nhận tool mới nhất \n"; usleep(100000);
echo "  $BRed [✓]..$Blue MOMO: $BBlack 0334506791 $BGreen\n"; usleep(100000);
echo " $BRed  [✓]..$BGreen Tên người mua Key:  $BCyan$name\n"; usleep(100000);
echo " $BRed  [✓]..$BGreen Key hết hạn sau:  $BCyan$time ngày\n"; usleep(100000);
echo " $BRed  [✓]..$BGreen Đang chạy tài khoản:  $BCyan$user\n"; usleep(100000);
$xu = getxuttc($useragent);
echo " $BRed  [✓]..$BGreen Số xu :  $BCyan$xu\n"; usleep(100000);
echo "  $BRed [✓]..$BGreen Đang chạy đa luồng: $BBlack ".$treo."$BGreen tài khoản \n"; usleep(100000);
chay(18);
    echo $lime."\033[1;37m~\033[1;31m[\033[1;32m✓\033[1;31m]$white =>$lime  Nhập \033[1;31m[\033[1;32m1\033[1;31m]$BGreen LIKE \n";
    echo $lime."\033[1;37m~\033[1;31m[\033[1;32m✓\033[1;31m]$white =>$lime  Nhập \033[1;31m[\033[1;32m2\033[1;31m]$BGreen COMMENTS \n";
    echo $lime."\033[1;37m~\033[1;31m[\033[1;32m✓\033[1;31m]$white =>$lime  Nhập \033[1;31m[\033[1;32m3\033[1;31m]$BGreen REACTION \n";
    echo $lime."\033[1;37m~\033[1;31m[\033[1;32m✓\033[1;31m]$white =>$lime  Nhập \033[1;31m[\033[1;32m4\033[1;31m]$BGreen FOLLOW \n";
    echo $lime."\033[1;37m~\033[1;31m[\033[1;32m✓\033[1;31m]$white =>$lime  Nhập \033[1;31m[\033[1;32m5\033[1;31m]$BGreen LIKE PAGE \n";
echo $BGreen." Ví dụ bạn muốn làm like follow thì điền 1+4 ";sleep(3); echo "\r"."                                                            "."\r";
echo $lime."\033[1;37m~\033[1;31m[\033[1;32m✓\033[1;31m]$white =>$lime  Vui Lòng Nhập chế độ: ";
$nhap = trim(fgets(STDIN));
 if (strstr($nhap, '1')){array_push($listnv, 'like');}
if (strstr($nhap, '2')){array_push($listnv, 'cmt');}
if (strstr($nhap, '3')){array_push($listnv, 'cx');}
if (strstr($nhap, '4')){array_push($listnv, 'sub');}
if (strstr($nhap, '5')){array_push($listnv, 'page');}
 if (count($listnv) == 0){exit($BRed."Vui lòng chọn ít nhất 1 loại NHIỆM VỤ!");}
chay(18);
echo $lime."\033[1;37m~\033[1;31m[\033[1;32m✓\033[1;31m]$white =>$lime  \033[1;31m[\033[1;32m✓\033[1;31m]$BGreen Nhập thời gian làm nhiệm vụ cmt, follow, like page : \5 $BWhite";
    $giaysub=trim(fgets(STDIN));
    echo $lime."\033[1;37m~\033[1;31m[\033[1;32m✓\033[1;31m]$white =>$lime  \033[1;31m[\033[1;32m✓\033[1;31m]$BGreen Nhập thời gian làm nhiệm vụ like, cảm xúc : \5 $BWhite";
    $giaylike=trim(fgets(STDIN));
if ($treo ==1){echo $lime."\033[1;37m~\033[1;31m[\033[1;32m✓\033[1;31m]$white =>$lime  \033[1;31m[\033[1;32m✓\033[1;31m]$BGreen Sau bao nhiệm vụ thì sẽ nghỉ ngơi : $BWhite \5";}else{
    echo $lime."\033[1;37m~\033[1;31m[\033[1;32m✓\033[1;31m]$white =>$lime  \033[1;31m[\033[1;32m✓\033[1;31m]$BGreen Sau bao nhiêu nhiệm vụ đổi nick :$BWhite \5";}
     $dung=trim(fgets(STDIN));    if (strlen($dung) <= 0){$dung = 10;}
if($treo == 1){echo $lime."\033[1;37m~\033[1;31m[\033[1;32m✓\033[1;31m]$white =>$lime  \033[1;31m[\033[1;32m✓\033[1;31m]$BGreen Dừng thời gian: $BWhite \5";
      $giay=trim(fgets(STDIN));}
chay(18);
$h = datnick($idfb,$useragent);
if($h != 1){
  echo " VÀO WEB ĐẶT CẤU HÌNH RỒI VÀO TOOL ĐỢI 30 GIÂY NHÉ \n"; sleep(30);
  $h = datnick($idfb,$useragent);
}echo $BGreen." Đang chạy id ".$idfb."\n";
$a = 1; $so = 0; 
while(true){
   echo $BGreen." Đang tải nhiệm vụ... ";
   $sonv = 0; $i = 0;
 if (in_array('like',$listnv)){
   getcookiettc($user,$pass,$useragent);
    $list0 = getnv('',$useragent);
if(is_array($list0)){
    if(count($list0) > 0){
    $listds['like'] = $list0;
    $sonv = $sonv + count($listds['like']);
    }else{$listds['like'] = null;}}
  }else{$listds['like'] = null;}
  if(in_array('sub',$listnv)){
    getcookiettc($user,$pass,$useragent);
    $list1 = getnv('/subcheo',$useragent);
if(is_array($list1)){
    if(count($list1)>0){
    $listds['sub'] = $list1;
     $sonv = $sonv + count($listds['sub']);
    }else{$listds['sub'] = null;}}
  }else{$listds['sub'] = null;}
  if(in_array('cmt',$listnv)){
    getcookiettc($user,$pass,$useragent);
    $list2 = getnv('/cmtcheo',$useragent);
if(is_array($list2)){
    if(count($list2) > 0){
    $listds['cmt'] = $list2;
    $sonv = $sonv + count($listds['cmt']);
    }else{$listds['cmt'] = null;}}
  }else{$listds['cmt'] = null;}
  if(in_array('page',$listnv)){
    getcookiettc($user,$pass,$useragent);
    $list3 = getnv('/likepagecheo',$useragent);
if(is_array($list3)){
    if(count($list3) > 0){
    $listds['page'] = $list3;
      $sonv = $sonv + count($listds['page']);
    }else{$listds['page'] = null;}}
  }else{$listds['page'] = null;}
  if(in_array('cx',$listnv)){
    getcookiettc($user,$pass,$useragent);
    $list4 = getnv('/camxuccheo',$useragent);
if(is_array($list4)){
    if (count($list4) > 0){
    $listds['cx'] = $list4;
     $sonv = $sonv + count($listds['cx']);
    }else{$listds['cx'] = null;}}
  }else{$listds['cx'] = null;}
  echo "\r";$demdung = 0; $m = 0;
while($sonv > 0){
  $m++;
   if ($listds['like'] and is_array($listds['like'])){$sonv--;
     $i++;if($demdung >= $dung){break;}
     $ranar = array_rand($listds['like'],1);
      $key = $listds['like'][$ranar];
      $id = $key->{'idpost'};
      $g = camxuc($cookie,$id,$useragent,'LIKE',$head);
if (strstr($g, 'Tài khoản')){ break;}
	$s = nhantien('',$id,$useragent);
if (isset($s)){$xu = $xu + 400;$so++;$demdung++;
			echo echonhanxu(400,'LIKE',$id,$xu,$so);
			echo echodemgiay($giaylike);
					}else{
echo	$BRed."LIKE thất bại • ".$id."\r";
gettt($cookie,$useragent,$head);
	if(checklive($access_token) == '2'  ){
	  break;
	}
					}
      unset($listds['like'][$ranar]);
    }
  if ($listds['sub'] and is_array($listds['sub'])){$sonv--;
    $i++;if($demdung >= $dung){break;}
    $ranar = array_rand($listds['sub'],1);
      $key = $listds['sub'][$ranar];
      $id = $key->{'idpost'};
      $g = follow($cookie,$id,$useragent,$head);
      if (strstr($g, 'Tài khoản')){ break;}
       
      $s = nhantien('/subcheo',$id,$useragent);
if (isset($s)){$xu = $xu + 600;$so++;$demdung++;
			echo echonhanxu(600,'FOLLOW',$id,$xu,$so);
			echo echodemgiay($giaysub);
					}else{
echo	$BRed."FOLLOW thất bại • ".$id."\r";
	if(checklive($access_token) == '2'  ){
	  break;
	}
					}
      unset($listds['sub'][$ranar]);
    }
    if ($listds['cmt'] and is_array($listds['cmt'])){$sonv--;
      $i++;if($demdung >= $dung){break;}
      $ranar = array_rand($listds['cmt'],1);
      $key = $listds['cmt'][$ranar];
      $uid = $key->{'idpost'};
      $msg = json_decode($key->{'nd'})[1];
      $g = cmt($access_token,$msg,$uid,$useragent,$head);
      if ($g->{'error'}->{'code'} == 368){
        break;
      }
      $s = nhantien('/cmtcheo',$uid,$useragent);
       
if (isset($s)){$xu = $xu + 600;$so++;$demdung++;
			echo echonhanxu(600,'CMT',$uid,$xu,$so);
			echo echodemgiay($giaysub);
					}else{
echo	$BRed."COMMENT thất bại • ".$uid."\r";
	if(checklive($access_token) == '2'  ){
	  break;
	}
					}
      unset($listds['cmt'][$ranar]);
    }
    if ($listds['page'] and is_array($listds['page'])){$sonv--;
      $i++;if($demdung >= $dung){break;}
      $ranar =array_rand($listds['page'],1);
      $id = $listds['page'][$ranar]->{'idpost'};
     $g =	page($id,$cookie,$useragent,$head);
      if (strstr($g, 'Tài khoản')){ break;}
      $s = nhantien('/likepagecheo',$id,$useragent);
       
if (isset($s)){$xu = $xu + 600;$so++;$demdung++;
			echo echonhanxu(600,'PAGE',$id,$xu,$so);
			echo echodemgiay($giaysub);
					}else{
echo	$BRed."LIKE PAGE thất bại • ".$id."\r";
	if(checklive($access_token) == '2' or $demdung = $dung){
	  break;
	}
					}
      unset($listds['page'][$ranar]);
    }
    if ($listds['cx'] and is_array($listds['cx'])){$sonv--;
      $i++;if($demdung >= $dung){break;}
      $ranar = array_rand($listds['cx'],1);
      $key = $listds['cx'][$ranar];
      $id = $key->{'idpost'};
      $type = $key->{'loaicx'};
      $g =	camxuc($cookie,$id,$useragent,$type,$head);
          if (strstr($g, 'Tài khoản')){ break;}
      $s = nhantiencx($id,$type,$useragent);
       
if (isset($s)){$xu = $xu + 400;$so++;$demdung++;
			echo echonhanxu(400,$type,$id,$xu,$so);
			echo echodemgiay($giaylike);
					}else{
echo	$BRed."THẢ CẢM XÚC thất bại • ".$id."\r";
	if(checklive($access_token) == '2' or $demdung = $dung){
	  break;
	}
					}
      unset($listds['cx'][$ranar]);
    }
  if($m >= 5){
    gettt($cookie,$useragent,$head);
    getcookiettc($user,$pass,$useragent);
  }
}
if($treo == '1' and $demdung == $dung){
  echo nghingoi($giay); $demdung = 0; $demdung = 0;
  gettt($cookie,$useragent,$head);
  getcookiettc($user,$pass,$useragent);
}
if (checklive($access_token) == '2' and $treo == 1){
  echo $BGreen." COOKIE ĐÃ BỊ DIE RỒI VUI LÒNG NHẬP COOKIE MỚI: ";
  $cookie= trim(fgets(STDIN));
$access_token = cookie($cookie,$useragent,$head);
$idfb = $idfb = checktoken($access_token,$useragent,$head)->{'id'};
if(isset($idfb)){
$h = datnick($idfb,$useragent);
if($h != '1'){
  echo $BRed."WARNING:$BYellow IDFB ".$idfb."$BRed chưa được thêm vào cấu hình trao đổi sub vui lòng thêm vào rồi lại cho vào tool \n";exit;
}
}
}else if((checklive($access_token) == 2 or $dung == $demdung) and $treo >= 2){$tat = 0;
  $cookie = $cooki[$a];$a++;if($a>=$treo){$a=0;} $demdung = 0;
$access_token = cookie($cookie,$useragent,$head);
$idfb = checktoken($access_token,$useragent,$head)->{'id'};
if(isset($idfb)){
	   echo $BYellow."  Đang chạy nick:  ".$BCyan."  ".$idfb."\n";
$h = datnick($idfb,$useragent);
if($h != '1'){
  echo $BRed."WARNING:$BYellow IDFB ".$idfb."$BRed chưa được thêm vào cấu hình trao đổi sub vui lòng thêm vào rồi lại cho vào tool \n";exit;
}
}
}
}
}
if($choncn == '4'){
  @system('clear');
$listnv = [];
chay(7);
echo $BGreen." VERSION TTC.COM TOKEN\n";
chay(18);
if (file_exists("TKTTC.txt") == '1'){
  echo  "$BGreen Bạn có muốn đăng nhập vào tài khoản cũ bấn nút $BCyan enter $BGreen để tiếp tục, Bấm $BCyan no $BGreen để nhập lại tài khoản mới: $BYellow\3";
  $nhap =trim(fgets(STDIN));
if ($nhap == 'no'){
  $my = fopen("TKTTC.txt", "w+");
  echo "$BYellow Nhập Tài Khoản:$BGreen  ";
  $user = trim(fgets(STDIN));
  echo "\n$BYellow Nhập Mật Khẩu:$BGreen \5";
  $pass = trim(fgets(STDIN));
fwrite($my,json_encode(array('username'=> $user,'password'=> $pass)));
}
}else if(!file_exists("TKTTC.txt")){
  $my = fopen("TKTTC.txt", "w+");
  echo "$BYellow Nhập Tài Khoản:$BGreen  ";
  $user = trim(fgets(STDIN));
  echo "\n$BYellow Nhập Mật Khẩu:$BGreen \5";
  $pass = trim(fgets(STDIN));
fwrite($my,json_encode(array('username'=> $user,'password'=> $pass)));
}
$user = json_decode(file_get_contents("TKTTC.txt"))->{'username'};
$pass = json_decode(file_get_contents("TKTTC.txt"))->{'password'};
chay(18);
$c=0;$thu=1;
echo $BGreen." Bạn muốn treo mấy acc facebook:  ";
$treo = trim(fgets(STDIN));
if(!is_numeric($treo)){$treo = 1;}
for($b=1;$b<($treo+ 1);$b++){
    echo $BGreen." Điền token thứ $BGreen".$thu." : $BWhite ";
    $cooki[$c]=trim(fgets(STDIN));
    $ch=curl_init();
    $access_token=$cooki[$c];
  if(json_decode(file_get_contents('https://graph.facebook.com/me/?access_token='.$access_token))->{'id'})
{echo $BYellow." Tài khoản chính xác \n";
	             $c++;$thu++;
}else{echo $BRed." TOKEN SAI RỒI!! \n";$b--;}
}
$access_token = $cooki[0];
$source = getcookiettc($user,$pass,$useragent);
$sou= strlen($source);
if ($sou < 10 ){
}else{
	exit($BRed."ĐĂNG NHẬP THẤT BẠI, SAI TÀI KHOẢN TƯƠNG TÁC CHÉO !");
}

        if(json_decode(file_get_contents('https://graph.facebook.com/me/?access_token='.$access_token))->{'id'})
{
	            $idfb = json_decode(file_get_contents('https://graph.facebook.com/me/?access_token='.$access_token))->{'id'};	
	            
}else{echo $BRed." Token thứ 1 đã bị die r nha !!";exit();}
@system('clear');
chay(18);
echo " $BRed  [✓]..$BGreen ĐANG CHẠY AUTO TTC TOKEN \n"; usleep(100000);
echo " $BRed  [✓]..$BGreen facebook.com/vandatpipo \n"; usleep(100000);
echo " $BRed  [✓]..$BYellow Donate nhận tool mới nhất \n"; usleep(100000);
echo "  $BRed [✓]..$Blue MOMO: $BBlack 0334506791 $BGreen\n"; usleep(100000);
echo " $BRed  [✓]..$BGreen Tên người mua Key:  $BCyan$name\n"; usleep(100000);
echo " $BRed  [✓]..$BGreen Key hết hạn sau:  $BCyan$time ngày\n"; usleep(100000);
echo " $BRed  [✓]..$BGreen Đang chạy tài khoản:  $BCyan$user\n"; usleep(100000);
$xu = getxuttc($useragent);
echo " $BRed  [✓]..$BGreen Số Xu:  $BCyan$xu\n"; usleep(100000);
echo "  $BRed [✓]..$BGreen Đang chạy đa luồng: $BBlack ".$treo."$BGreen tài khoản \n"; usleep(100000);
chay(18);
    echo $lime."\033[1;37m~\033[1;31m[\033[1;32m✓\033[1;31m]$white =>$lime  Nhập \033[1;31m[\033[1;32m1\033[1;31m]$BGreen LIKE \n";
    echo $lime."\033[1;37m~\033[1;31m[\033[1;32m✓\033[1;31m]$white =>$lime  Nhập \033[1;31m[\033[1;32m2\033[1;31m]$BGreen COMMENTS \n";
    echo $lime."\033[1;37m~\033[1;31m[\033[1;32m✓\033[1;31m]$white =>$lime  Nhập \033[1;31m[\033[1;32m3\033[1;31m]$BGreen FOLLOW \n";
echo $BGreen." Ví dụ bạn muốn làm like follow thì điền 1+3 ";sleep(3); echo "\r"."                                                       "."\r";
echo $lime."\033[1;37m~\033[1;31m[\033[1;32m✓\033[1;31m]$white =>$lime  Vui Lòng Nhập chế độ: ";
$nhap = trim(fgets(STDIN));
 if (strstr($nhap, '1')){array_push($listnv, 'like');}
if (strstr($nhap, '2')){array_push($listnv, 'cmt');}
if (strstr($nhap, '3')){array_push($listnv, 'sub');}
 if (count($listnv) == 0){exit($BRed."Vui lòng chọn ít nhất 1 loại NHIỆM VỤ!");}
chay(18);
echo $lime."\033[1;37m~\033[1;31m[\033[1;32m✓\033[1;31m]$white =>$lime  \033[1;31m[\033[1;32m✓\033[1;31m]$BGreen Nhập thời gian làm nhiệm vụ cmt, follow, like page : \5 $BWhite";
    $giaysub=trim(fgets(STDIN));
    echo $lime."\033[1;37m~\033[1;31m[\033[1;32m✓\033[1;31m]$white =>$lime  \033[1;31m[\033[1;32m✓\033[1;31m]$BGreen Nhập thời gian làm nhiệm vụ like, cảm xúc : \5 $BWhite";
    $giaylike=trim(fgets(STDIN));
if ($treo ==1){echo $lime."\033[1;37m~\033[1;31m[\033[1;32m✓\033[1;31m]$white =>$lime  \033[1;31m[\033[1;32m✓\033[1;31m]$BGreen Sau bao nhiệm vụ thì sẽ nghỉ ngơi : $BWhite \5";}else{
    echo $lime."\033[1;37m~\033[1;31m[\033[1;32m✓\033[1;31m]$white =>$lime  \033[1;31m[\033[1;32m✓\033[1;31m]$BGreen Sau bao nhiêu nhiệm vụ đổi nick :$BWhite \5";}
     $dung=trim(fgets(STDIN));    if (strlen($dung) <= 0){$dung = 10;}
if($treo == 1){echo $lime."\033[1;37m~\033[1;31m[\033[1;32m✓\033[1;31m]$white =>$lime  \033[1;31m[\033[1;32m✓\033[1;31m]$BGreen Dừng thời gian: $BWhite \5";
      $giay=trim(fgets(STDIN));}
chay(18);
$h = datnick($idfb,$useragent);
$xu = 0; $so = 0; $a = 0;
if($h != 1){
  echo " VÀO WEB ĐẶT CẤU HÌNH RỒI VÀO TOOL ĐỢI 30 GIÂY NHÉ \n"; sleep(30);
  $h = datnick($idfb,$useragent);
}echo $BGreen." Đang chạy id ".$idfb."\n";
while(true){
   echo $BGreen." Đang tải nhiệm vụ... ";
   $sonv = 0;
 if (in_array('like',$listnv)){
   getcookiettc($user,$pass,$useragent);
    $list0 = getnv('',$useragent);
if(is_array($list0)){
    if(count($list0) > 0){
    $listds['like'] = $list0;
    $sonv = $sonv + count($listds['like']);
    }else{$listds['like'] = null;}}
  }else{$listds['like'] = null;}
  if(in_array('sub',$listnv)){
    getcookiettc($user,$pass,$useragent);
    $list1 = getnv('/subcheo',$useragent);
if(is_array($list1)){
    if(count($list1) > 0 ){
    $listds['sub'] = $list1;
     $sonv = $sonv + count($listds['sub']);
    }else{$listds['sub'] = null;}}
  }else{$listds['sub'] = null;}
  if(in_array('cmt',$listnv)){
    getcookiettc($user,$pass,$useragent);
    $list2 = getnv('/cmtcheo',$useragent);
if(is_array($list2)){
    if(count($list2) > 0){
    $listds['cmt'] = $list2;
    $sonv = $sonv + count($listds['cmt']);
    }else{$listds['cmt'] = null;}}
  }else{$listds['cmt'] = null;}
  echo "\r";$demdung = 0; $i = 0;
while($sonv > 0){
   if ($listds['like'] and is_array($listds['like'])){$sonv--;
     $i++;if($demdung >= $dung){break;}
     $ranar = array_rand($listds['like'],1);
      $key = $listds['like'][$ranar];
      $id = $key->{'idpost'};
      $g = liketoken($access_token,$id,$useragent,$head);
if ($g->{'error'}->{'code'} == 368){
         break;
       }
	$s = nhantien('',$id,$useragent);
if (isset($s)){$xu = $xu + 400;$so++;$demdung++;
			echo echonhanxu(400,'LIKE',$id,$xu,$so);
			echo echodemgiay($giaylike);
					}else{
echo	$BRed."LIKE thất bại • ".$id."\r";
	if(checklive($access_token) == '2'  ){
	  break;
	}
					}
      unset($listds['like'][$ranar]);
    }
  if ($listds['sub'] and is_array($listds['sub'])){$sonv--;
    $i++;if($demdung >= $dung){break;}
    $ranar = array_rand($listds['sub'],1);
      $key = $listds['sub'][$ranar];
      $id = $key->{'idpost'};
      $g = followtoken($access_token,$id,$useragent,$head);
   if($g->{'error'}->{'code'} == 368){
     break;
   }
      $s = nhantien('/subcheo',$id,$useragent);
if (isset($s)){$xu = $xu + 600;$so++;$demdung++;
			echo echonhanxu(600,'FOLLOW',$id,$xu,$so);
			echo echodemgiay($giaysub);
					}else{
echo	$BRed."FOLLOW thất bại • ".$id."\r";
	if(checklive($access_token) == '2'  ){
	  break;
	}
					}
      unset($listds['sub'][$ranar]);
    }
    if ($listds['cmt'] and is_array($listds['cmt'])){$sonv--;
      $i++;if($demdung >= $dung){break;}
      $ranar = array_rand($listds['cmt'],1);
      $key = $listds['cmt'][$ranar];
      $uid = $key->{'idpost'};
      $msg = json_decode($key->{'nd'})[1];
      $g = cmt($access_token,$msg,$uid,$useragent,$head);
      if ($g->{'error'}->{'code'} == 368){
        break;
      }
      $s = nhantien('/cmtcheo',$uid,$useragent);
if (isset($s)){$xu = $xu + 600;$so++;$demdung++;
			echo echonhanxu(600,'CMT',$uid,$xu,$so);
			echo echodemgiay($giaysub);
					}else{
echo	$BRed."COMMENT thất bại • ".$uid."\r";
	if(checklive($access_token) == '2'  ){
	  break;
	}
					}
      unset($listds['cmt'][$ranar]);
    }
  
}
if($treo == '1' and $demdung == $dung){
  echo nghingoi($giay); $demdung = 0; $demdung = 0;
  getcookiettc($user,$pass,$useragent);
}
if ((checklive($access_token) == '2' or ($g->{'error'}->{'code'} == 368 and !strstr($g->{'error'}->{'message'},'không có vấn đề gì cả'))) and $treo == 1){
  echo $BGreen." TOKEN ĐÃ BỊ DIE RỒI VUI LÒNG NHẬP COOKIE MỚI: ";
  $access_token= trim(fgets(STDIN));
 $idfb = checktoken($access_token,$useragent,$head)->{'id'};
if(isset($idfb)){
$h = datnick($idfb,$useragent);
if($h != '1'){
  echo $BRed."WARNING:$BYellow IDFB ".$idfb."$BRed chưa được thêm vào cấu hình trao đổi sub vui lòng thêm vào rồi lại cho vào tool \n";exit;
}
}
}else if((checklive($access_token) == 2 or $dung == $demdung) and $treo >= 2){$tat = 0;
  $access_token = $cooki[$a];$a++;if($a>=$treo){$a=0;} $demdung = 0;
  $access_token = str_replace(' ','',$access_token);
$idfb = checktoken($access_token,$useragent,$head)->{'id'};
$idfb = json_decode(file_get_contents('https://graph.facebook.com/me/?access_token='.$access_token))->{'id'};
if(isset($idfb)){
	   echo $BYellow."  Đang chạy nick:  ".$BCyan."  ".$idfb."\n";
$h = datnick($idfb,$useragent);
if($h != '1'){
  echo $BRed."WARNING:$BYellow IDFB ".$idfb."$BRed chưa được thêm vào cấu hình trao đổi sub vui lòng thêm vào rồi lại cho vào tool \n";exit;
}
}
}
}
}
if ($choncn == 5){
  @system('clear');
while(true){
@system('clear');
echo "\n\n\n Điền cookie tài khoản thực hiện:$BYellow ";
$cookie=trim(fgets(STDIN));
$access_token = cookie($cookie,$useragent,$head);
if($access_token != false){
break;
}else{ echo $BRed." COOKIE SAI RỒI!!! \n";}
}
while(true){ 
 @system('clear');
 unset($so);
 unset($nguoi); unset($so1); unset($dem);
  echo $BGreen."\033[1;37m~\033[1;31m[\033[1;32m✓\033[1;31m]$white =>$lime  [".$BYellow."1".$white."]".$Blue." AUTO TƯƠNG TÁC VỚI BẠN BÈ \n";
echo $BGreen."\033[1;37m~\033[1;31m[\033[1;32m✓\033[1;31m]$white =>$lime  [".$BYellow."2".$white."]".$Blue." AUTO XOÁ BẠN BÈ KHÔNG TƯƠNG TÁC\n";
echo $BGreen."\033[1;37m~\033[1;31m[\033[1;32m✓\033[1;31m]$white =>$lime  [".$BYellow."3".$white."]".$Blue." AUTO THÊM BẠN BÈ CÓ BẠN CHUNG XÁC NHẬN BẠN BÈ \n";
echo $BGreen."\033[1;37m~\033[1;31m[\033[1;32m✓\033[1;31m]$white =>$lime  [".$BYellow."4".$white."]".$Blue." AUTO BÃO LIKE CẢM XÚC WALL BẠN BÈ \n";
echo $BGreen."\033[1;37m~\033[1;31m[\033[1;32m✓\033[1;31m]$white =>$lime  [".$BYellow."5".$white."]".$Blue." AUTO UNLIKE PAGE UNFOLLOW USER \n";
chay(18);
echo "\033[1;37m~\033[1;31m[\033[1;32m✓\033[1;31m]$white =>$lime  Nhập nhiệm vụ cần làm: ";
$nhap =trim(fgets(STDIN));
while($nhap == '1'){
@system('clear');
date_default_timezone_set('Asia/Ho_Chi_Minh');
echo $Blue."\033[1;37m~\033[1;31m[\033[1;32m✓\033[1;31m]$white =>$lime  Thời gian nghỉ giữa mỗi nhiệm vụ: $BGreen";
$giay = trim(fgets(STDIN));
echo "\033[1;37m~\033[1;31m[\033[1;32m✓\033[1;31m]$white =>$lime  Bạn muốn bật chế độ Comments bài viết của người khác [Y/N]: $BWhite";
$cmt = trim(fgets(STDIN));
if($cmt == 'Y' or$cmt == 'y'){
echo $BYellow."Chú ý các bạn nhớ thêm nội dung cần cmt vào file 'noidung.txt' để thực hiện ngăn cách bằng dấu '|' \n";
if(!file_exists("noidung.txt")){
  fopen("noidung.txt","x+");
}
echo "\033[1;37m~\033[1;31m[\033[1;32m✓\033[1;31m]$white =>$lime  Sau bao nhiêu lần tương tác thì cmt một lần: $BWhite";
$dem = trim(fgets(STDIN));}
@system('clear');
chay(18);
$type =[];
echo " $BRed  [✓]..$BGreen ĐANG CHẠY AUTO NUÔI CLONE\n"; usleep(100000);
echo " $BRed  [✓]..$BGreen facebook.com/vandatpipo \n"; usleep(100000);
echo " $BRed  [✓]..$BYellow Donate nhận tool mới nhất \n"; usleep(100000);
echo "  $BRed [✓]..$Blue MOMO: $BBlack 0334506791 $BGreen\n"; usleep(100000);
echo " $BRed  [✓]..$BGreen Tên người mua Key:  $BCyan$name\n"; usleep(100000);
echo " $BRed  [✓]..$BGreen Key hết hạn sau:  $BCyan$time ngày\n"; usleep(100000);
chay(18);
    echo $lime."\033[1;37m~\033[1;31m[\033[1;32m✓\033[1;31m]$white =>$lime  Nhập \033[1;31m[\033[1;32m1\033[1;31m]$BGreen THƯƠNG THƯƠNG \n";
    echo $lime."\033[1;37m~\033[1;31m[\033[1;32m✓\033[1;31m]$white =>$lime  Nhập \033[1;31m[\033[1;32m2\033[1;31m]$BGreen LIKE \n";
    echo $lime."\033[1;37m~\033[1;31m[\033[1;32m✓\033[1;31m]$white =>$lime  Nhập \033[1;31m[\033[1;32m3\033[1;31m]$BGreen HAHA \n";
    echo $lime."\033[1;37m~\033[1;31m[\033[1;32m✓\033[1;31m]$white =>$lime  Nhập \033[1;31m[\033[1;32m4\033[1;31m]$BGreen PHẪN NỘ \n";
    echo $lime."\033[1;37m~\033[1;31m[\033[1;32m✓\033[1;31m]$white =>$lime  Nhập \033[1;31m[\033[1;32m5\033[1;31m]$BGreen WOW \n";
    echo $lime."\033[1;37m~\033[1;31m[\033[1;32m✓\033[1;31m]$white =>$lime  Nhập \033[1;31m[\033[1;32m6\033[1;31m]$BGreen BUỒN \n";
    echo $lime."\033[1;37m~\033[1;31m[\033[1;32m✓\033[1;31m]$white =>$lime  Nhập \033[1;31m[\033[1;32m7\033[1;31m]$BGreen YÊU THÍCH \n";
    echo $BGreen." Ví dụ bạn muốn làm like haha thì điền 2+3 ";sleep(3); echo "\r"."                                                            "."\r";
    echo $lime."\033[1;37m~\033[1;31m[\033[1;32m✓\033[1;31m]$white =>$lime  Vui Lòng Nhập chế độ: ";
$nhap = trim(fgets(STDIN));
if (strstr($nhap ,'1')){array_push($type,'THUONG');}
if (strstr($nhap ,'2')){array_push($type, 'LIKE');}
if (strstr($nhap ,'3')){array_push($type,'HAHA');}
if (strstr($nhap ,'4')){array_push($type, 'ANGRY');}
if (strstr($nhap ,'5')){array_push($type, 'WOW');}
if (strstr($nhap ,'6')){array_push($type, 'SAD');}
if (strstr($nhap ,'7')){array_push($type, 'LOVE');}
 if (count($type) == 0){exit($BRed."Vui lòng chọn ít nhất 1 loại NHIỆM VỤ!");}
$so = 0;$ran = rand(10,20);$i = 0;
while(true){
$list = gettt($cookie,$useragent,$head);
foreach ($list as $link){
  $so++;$time = date('H:i:s');
if($loai == 'LIKE' || $loai == 'PAGE' || $loai == 'HAHA' || $loai == 'LOVE' ){$kc = ' ';}else if($loai == 'SAD' || $loai == 'WOW'  || $loai == 'CMT'){$kc = '  ';}else{$kc = '';}
  $id = explode('&origin_uri',explode("?ft_id=",$link)[1])[0];
  $loai = $type[array_rand($type,1)];
if(strlen($id) > 1){
camxuc($cookie,$link,$useragent,$loai,$head);
echo "\033[1;33m[$so]"; usleep(30000); echo " \033[1;31m Tương Tác "; usleep(30000); echo "● \033[1;33m"; usleep(30000); echo "[$loai] "; usleep(30000); echo "\033[1;31m"; usleep(30000); echo "●\033[1;35m "; usleep(30000); echo "[$time] \033[1;31m"; usleep(30000); echo "●"; usleep(30000); echo " \033[1;32m$id \033[1;31m"; usleep(30000); echo "●\033[1;33m"; usleep(30000); echo "\033[1;36m Success"; usleep(30000); echo "● "; usleep(30000); echo "\033[1;36m Full \n";  
echodemgiay($giay);$i++;
}
if ($dem > 0 and $i >= $dem and strlen($id) > 1){
  $noidung = file_get_contents("noidung.txt");
  $msge = explode('|',$noidung);
  $msg = $msge[array_rand($msge,1)];
  $g = cmt($access_token,$msg,$id,$useragent,$head); $i = 0;
  if ($g->{'error'}){echo $BRed.$g->{'error'}->{'message'}."\n";}else{
    echo "\033[1;33m[$so]"; usleep(30000); echo " \033[1;31m Tương Tác "; usleep(30000); echo "● \033[1;33m"; usleep(30000); echo "[CMT]   "; usleep(30000); echo "\033[1;31m"; usleep(30000); echo "●\033[1;35m "; usleep(30000); echo "[$time] \033[1;31m"; usleep(30000); echo "●"; usleep(30000); echo " \033[1;32m$id \033[1;31m"; usleep(30000); echo "●\033[1;33m"; usleep(30000); echo "\033[1;36m Success"; usleep(30000); echo "● "; usleep(30000); echo "\033[1;36m Full\033[0;34m \n";
echo "          \033[1;37m|\033[1;36m$msg\033[1;37m|          \n";
    echodemgiay($giay);
  }
} // Vòng lặp for
}
}
}
while($nhap == '2'){
@system('clear');
$banbe =[];
$listbv = getbaiviet($cookie,$access_token,$useragent,'me',$head)->{'data'};
$listbb = getbanbe($access_token,$useragent,$head)->{'data'};
foreach ($listbb as $idbb){
$idbb = $idbb->{'id'};
array_push($banbe,$idbb); 
}
while(true){
echo $BYellow." Đang thực hiện đếm số lượng tương tác của bạn bè \n";
foreach ($listbv as $key => $list){
 $id = $list->{'id'};if (strstr($id,'_')){$idbv = explode('_',$id)[1];}
$like = demlike($cookie,$access_token,$idbv,$useragent,$head)->{'data'};
if(!empty($like)){
foreach ($like as $key2=> $likes){
 $id = $likes->{'id'}; $name = $likes->{'name'};
 if(in_array($id,$banbe) == true){$so++;
 $banbe = \array_diff($banbe, [$id]);
 echo $BYellow."[".$BCyan.$so.$BYellow."]".$BGreen." Bạn của bạn là ".$BYellow.$name.$BGreen." đã like tương tác với bạn ".$BWhite.$idbv."\n";
 }
}}
}
echo " Còn lại ".count($banbe)." chưa tương tác lần nào với bạn \n";
echo $Blue."\033[1;37m~\033[1;31m[\033[1;32m✓\033[1;31m]$white =>$lime Bạn muốn xoá ban nhiêu người: ".$BYellow;
$xoa = trim(fgets(STDIN));
echo $Blue."\033[1;37m~\033[1;31m[\033[1;32m✓\033[1;31m]$white =>$lime Nhập time delay giữa mỗi người: $BYellow";
$giay = trim(fgets(STDIN)); $so1 = 0;
foreach ($banbe as $id=>$key){
$uid = $key;
$g = xoabanbe($cookie,$uid,$useragent,$head);
$so1++;
echo  $BYellow."[".$BCyan.$so1.$BYellow."]".$BGreen." ĐÃ xoá ".$BCyan.$uid.$BGreen." ra khỏi danh sách bạn bè của bạn \n";
echo nghingoi($giay);
if ($so1 >= $xoa){
  echo " Đã xoá thành công số bạn bè cần xoá \n";
  break;sleep(5);
}
} unset($so);break;
}break;
  
}
while($nhap == '3'){
@system('clear');
echo "\033[1;37m~\033[1;31m[\033[1;32m✓\033[1;31m]$white =>$lime  \033[1;37m[\033[1;31m1\033[1;37m] \033[1;32m  Tự động thêm bạn bè có bạn chung \n";
echo "\033[1;37m~\033[1;31m[\033[1;32m✓\033[1;31m]$white =>$lime  \033[1;37m[\033[1;31m2\033[1;37m] \033[1;32m  Tự động chấp nhận lời mời kết bạn \n";
echo "\033[1;37m~\033[1;31m[\033[1;32m✓\033[1;31m]$white =>$lime  \033[1;37m[\033[1;31m3\033[1;37m] \033[1;32m  Tự động xoá lời mời kết bạn \n";
echo "\033[1;37m~\033[1;31m[\033[1;32m✓\033[1;31m]$white =>$lime  \033[1;37m[\033[1;31m4\033[1;37m] \033[1;32m  Thoát \n";
echo "\033[1;37m~\033[1;31m[\033[1;32m✓\033[1;31m]$white =>$lime  Nhập nhiệm vụ cần làm: $BYellow";
$chon1=trim(fgets(STDIN));
if($chon1 == '4'){break;}
if($chon1 == '1'){
echo $Blue."\033[1;37m~\033[1;31m[\033[1;32m✓\033[1;31m]$white =>$lime  Nhập số lượng người bạn muốn gửi lời mời: $BYellow";
$cangui=trim(fgets(STDIN));
echo $Blue."\033[1;37m~\033[1;31m[\033[1;32m✓\033[1;31m]$white =>$lime  Thời gian nghỉ giữa mỗi lần: $BYellow";
$giay = trim(fgets(STDIN));
while($ii < $cangui){$ii++;$so++;
$n = thembanbe($cookie,$url,$useragent,$head);
echo $BYellow."[".$BCyan.$so.$BYellow."]$BGreen Đã gửi lời mời kết bạn cho ".$BYellow.$n."\n";
echo nghingoi($giay);
$dung++;
}
unset($so);break;}
while($chon1 == '2'){
echo $Blue."\033[1;37m~\033[1;31m[\033[1;32m✓\033[1;31m]$white =>$lime  Nhập số lượng bạn bè cần chấp nhận: ";
$cancn=trim(fgets(STDIN));
echo $Blue."\033[1;37m~\033[1;31m[\033[1;32m✓\033[1;31m]$white =>$lime  Thời gian nghỉ giữa mỗi lần: $BGreen"; $so = 0;
$giay = trim(fgets(STDIN));
while($cancn > 1){
$list = addbanbe($cookie,$useragent,$head,'confirm');
  foreach ($list as $link){$so++;
chaylinkfb($cookie,$link,$useragent,$head);
    $uid = explode("&redir",explode("confirm=",$link)[1])[0];$time = date('H:i:s');
    echo "\033[1;33m[$so]"; usleep(30000); echo " \033[1;31m Chấp nhận lời mời "; usleep(30000); echo "● \033[1;33m"; usleep(30000); echo "[CONFIRM] "; usleep(30000); echo "\033[1;31m"; usleep(30000); echo "●\033[1;35m "; usleep(30000); echo "[$time] \033[1;31m"; usleep(30000); echo "●"; usleep(30000); echo " \033[1;32m$uid \033[1;31m"; usleep(30000); echo "●\033[1;33m"; usleep(30000); echo "\033[1;36m Success"; usleep(30000); echo "● "; usleep(30000); echo "\033[1;36m Full \n";
    echo echodemgiay($giay);
    $cancn--;if($cancn < 1){break;}
  }
}
unset($so);break;}
while($chon1 == '3'){
  
echo $Blue."\033[1;37m~\033[1;31m[\033[1;32m✓\033[1;31m]$white =>$lime  Nhập số lượng bạn bè cần chấp nhận: ";
$cancn=trim(fgets(STDIN));
echo $Blue."\033[1;37m~\033[1;31m[\033[1;32m✓\033[1;31m]$white =>$lime  Thời gian nghỉ giữa mỗi lần: $BGreen"; $so = 0;
$giay = trim(fgets(STDIN));
while($cancn > 1){
$list = addbanbe($cookie,$useragent,$head,'delete');
  foreach ($list as $link){$so++;
chaylinkfb($cookie,$link,$useragent,$head);
    $uid = explode("&redir",explode("delete=",$link)[1])[0];$time = date('H:i:s');
    echo "\033[1;33m[$so]"; usleep(30000); echo " \033[1;31m Chấp nhận lời mời "; usleep(30000); echo "● \033[1;33m"; usleep(30000); echo "[DELETE] "; usleep(30000); echo "\033[1;31m"; usleep(30000); echo "●\033[1;35m "; usleep(30000); echo "[$time] \033[1;31m"; usleep(30000); echo "●"; usleep(30000); echo " \033[1;32m$uid \033[1;31m"; usleep(30000); echo "●\033[1;33m"; usleep(30000); echo "\033[1;31m Success"; usleep(30000); echo "● "; usleep(30000); echo "\033[1;36m Full \n";
    echo echodemgiay($giay);
    $cancn--;if($cancn < 1){break;}
  }
}
unset($so);break;
}
}
while($nhap == '4'){
echo $BGreen."\033[1;37m~\033[1;31m[\033[1;32m✓\033[1;31m]$white =>$lime  Nhập ID bạn bè cần bão: $BYellow";
$idfb =trim(fgets(STDIN));
@system('clear');
chay(18);
    echo $lime."\033[1;37m~\033[1;31m[\033[1;32m✓\033[1;31m]$white =>$lime  Nhập \033[1;31m[\033[1;32m1\033[1;31m]$BGreen LIKE \n";
    echo $lime."\033[1;37m~\033[1;31m[\033[1;32m✓\033[1;31m]$white =>$lime  Nhập \033[1;31m[\033[1;32m2\033[1;31m]$BGreen HAHA \n";
    echo $lime."\033[1;37m~\033[1;31m[\033[1;32m✓\033[1;31m]$white =>$lime  Nhập \033[1;31m[\033[1;32m3\033[1;31m]$BGreen PHẪN NỘ \n";
    echo $lime."\033[1;37m~\033[1;31m[\033[1;32m✓\033[1;31m]$white =>$lime  Nhập \033[1;31m[\033[1;32m4\033[1;31m]$BGreen WOW \n";
    echo $lime."\033[1;37m~\033[1;31m[\033[1;32m✓\033[1;31m]$white =>$lime  Nhập \033[1;31m[\033[1;32m5\033[1;31m]$BGreen BUỒN \n";
    echo $lime."\033[1;37m~\033[1;31m[\033[1;32m✓\033[1;31m]$white =>$lime  Nhập \033[1;31m[\033[1;32m6\033[1;31m]$BGreen YÊU THÍCH \n";
    echo $lime."\033[1;37m~\033[1;31m[\033[1;32m✓\033[1;31m]$white =>$lime  Nhập \033[1;31m[\033[1;32m7\033[1;31m]$BGreen THƯƠNG THƯƠNG \n";
    echo $BGreen." Ví dụ bạn muốn làm like haha thì điền 2+3 ";sleep(3); echo "\r"."                                                            "."\r";
    echo $lime."\033[1;37m~\033[1;31m[\033[1;32m✓\033[1;31m]$white =>$lime  Vui Lòng Nhập chế độ: ";
$nhap = trim(fgets(STDIN));
$camxuc =[];
if (strstr($nhap ,'1')){array_push($camxuc, 'LIKE');}
if (strstr($nhap ,'2')){array_push($camxuc,'HAHA');}
if (strstr($nhap ,'3')){array_push($camxuc, 'SAD');}
if (strstr($nhap ,'4')){array_push($camxuc, 'WOW');}
if (strstr($nhap ,'5')){array_push($camxuc, 'ANGRY');}
if (strstr($nhap ,'6')){array_push($camxuc, 'LOVE');}
if (strstr($nhap ,'7')){array_push($camxuc, 'THUONG');}
 if (count($camxuc) == 0){exit($BRed."Vui lòng chọn ít nhất 1 loại NHIỆM VỤ!");}
chay(18);
$list = getbaiviet($cookie,$access_token,$useragent,$idfb,$head)->{'data'};
$name = json_decode(file_get_contents("https://graph.facebook.com/".$idfb."?access_token=".$access_token))->{'name'};
foreach ($list as $id=>$key ){
$id = $key->{'id'};if (strstr($id,'_')){$idbv = explode('_',$id)[1];}
$rand = $camxuc[array_rand($camxuc,1)];
$g = camxuc($cookie,$id,$useragent,$rand,$head);
if(!empty($g)){
  $so++;echo "\033[1;33m[$so]"; usleep(30000); echo " \033[1;31m"; usleep(30000); echo "● \033[1;33m "; usleep(30000); echo "[$rand] "; usleep(30000); echo "\033[1;31m"; usleep(30000); echo "●\033[1;35m $name"; usleep(30000); echo " \033[1;31m"; usleep(30000); echo "●"; usleep(30000); echo " \033[1;32m$id \033[1;31m"; usleep(30000); echo "●\033[1;33m"; usleep(30000); echo " \033[1;31m"; usleep(30000); echo "● "; usleep(30000); echo "\033[1;36m \n";  
  echo echodemgiay(rand(5,20));
}
}
unset($so); break;}
while($nhap == '5'){
@system('clear');
$listbb = getbanbe($access_token,$useragent,$head)->{'data'};

if (count($listbb) <= $unfl ){
  echo $BRed." Để bảo vệ cộng đồng trao đổi sub chéo thật uy tín tool chỉ chấp nhận cho phép unfollow bỏ like page đổi với tài khoản thật trên $unfl bạn bè hoặc vui lòng liên hệ zalo $BWhite 0334506791 để mở khoá chức năng này";sleep(6);break;}
  
echo "\033[1;37m~\033[1;31m[\033[1;32m✓\033[1;31m]$white =>$lime  Nhập số người, page cần xoá: ";
$nguoi =trim(fgets(STDIN));
$likepage = xemlikepage($cookie,$access_token,$useragent,$head)->{'data'};
if(empty($likepage)){
echo $BWhite." Bạn chưa like page nào cả \n"; sleep(5);
}else{
 echo $BGreen." Số page hiện đang theo dõi là: ".count($likepage)." trang \n";
foreach ($likepage as $id ){
$uid = $id->{'id'}; $name = $id->{'name'};
bolikepage($cookie,$uid,$useragent,$head);$so++;
echo $BYellow."[".$BCyan.$so.$BYellow."]$BGreen Đã bỏ like page thành công  ".$BYellow.$name."\n";
echo echodemgiay(rand(5,20));
if ($so >= $nguoi){break;}
}
}

if ($nguoi == $so){unset($so);break;}
$follow = getidunfl($cookie,$idfb,$useragent,$head);
while($follow != '1' and $so <= $nguoi ){
foreach ($follow as $id){
$so++; $ran = rand(5,15);
$name = huyfollow($cookie,$id,$useragent,$head);
echo $BYellow."[".$BCyan.$so.$BYellow."]$BGreen Đã bỏ follow thành công  ".$BYellow.$name."\n";
echo $BGreen." Đang chờ time random tránh block ";
sleep($ran);echo "\r";
if ($nguoi >= $so){break;}
}
$follow = getidunfl($cookie,$idfb,$useragent,$head);
if ($nguoi <= $so or $follow == '1' ){break;}
} echo $BYellow." Đã unfollow hết người mà bạn cài đặt \n "; sleep(5);
break;
} 
}
}
if ($choncn == '6'){
  @system('clear');
  echo " $BRed  [✓]..$BGreen ĐANG CHẠY AUTO LỌC MAIL CỔ \n"; usleep(100000);
echo " $BRed  [✓]..$BGreen facebook.com/vandatpipo \n"; usleep(100000);
echo " $BRed  [✓]..$BYellow Donate nhận tool mới nhất \n"; usleep(100000);
echo "  $BRed [✓]..$Blue MOMO: $BBlack 0334506791 $BGreen\n"; usleep(100000);
echo " $BRed  [✓]..$BGreen Tên người mua Key:  $BCyan$name\n"; usleep(100000);
echo " $BRed  [✓]..$BGreen Key hết hạn sau:  $BCyan$time ngày\n"; usleep(100000);
chay(18);
$listagent = json_decode(file_get_contents("https://khotoolauto.club/api/list.php"));
  	echo $BWhite." ----NHẬP ĐẦU MAIL BẠN MUỐN CHECK: ";
	$daumail = trim(fgets(STDIN));
	echo " Đuôi mail bạn muốn check: \n";
	echo $xanh."\033[1;37m~\033[1;31m[\033[1;32m✓\033[1;31m]$white =>$xanh  Nhập \033[1;31m[\033[1;32m1\033[1;31m]$BGreen  Hotmail.com\n";
	echo $xanh."\033[1;37m~\033[1;31m[\033[1;32m✓\033[1;31m]$white =>$xanh  Nhập \033[1;31m[\033[1;32m2\033[1;31m]$BGreen  outlook.com\n";
	echo $xanh."\033[1;37m~\033[1;31m[\033[1;32m✓\033[1;31m]$white =>$xanh  Nhập \033[1;31m[\033[1;32m3\033[1;31m]$BGreen  Khác thêm @ trước nha\n";
	echo $BRed." Lưu Ý Hệ Thống Hiến Tại Chỉ quét hotmail, outlook.com, outlook.com.vn \n";
	echo $lime."\033[1;37m~\033[1;31m[\033[1;32m✓\033[1;31m]$white =>$lime  Vui Lòng Nhập chế độ: ";
	$nhap= trim(fgets(STDIN));
	if ($nhap == '1'){
	  $duoimail = "@hotmail.com";
	}else if($nhap == '2'){
	  $duoimail = "@outlook.com";
	}else{
	  echo $BGreen." -----Nhập đuôi mail mà bạn muốn: ";
	  $duoimail = trim(fgets(STDIN));
	}
	echo $BGreen." ------Sau bao nhiêu mail thì dùng lại: ";
	$dung = trim(fgets(STDIN));
	$file = fopen("mail.txt","a+");
	echo $BGreen." -----Hãy kiểm tra file mail.txt để xem kết quả nhé \n";
$headhot = geturl($useragent);
	$i = 0; $somail = 0; $ran = 0;
	while($i <= $dung){
	  $ran++;
	 $useragent = $listagent[array_rand($listagent,1)];
	 $email = $daumail.$i.$duoimail;$i++;
$code = checkmail($useragent,$email,$head);
if($code == 400){
  echo nhanmail('Chưa đăng kí ',$email,$somail,$i);
}else if($code == 401){
  $json = checkmaillive($headhot,$email);
$headhot[4] = "canary: ".$json["apiCanary"]; 
$headhot[6] = "tcxt: ".$json["telemetryContext"];
if ($json["isAvailable"]){
  $somail++;
  echo nhanmail('Check Thành Công Mail Đã Đăng Kí FaceBook Nhưng Chưa Đăng Ký Mail  ',$email,$somail,$i);
 fwrite($file,$email."\n");
}else{
  echo nhanmail('Đã đăng ký Facebook và mail ',$email,$somail,$i);
}
}
if($ran == '15'){
  $ran = 0;
  $listagent = json_decode(file_get_contents("https://khotoolauto.club/api/list.php"));
}
	}
}
if($choncn == '7'){
  @system('clear');
$listnv = [];
chay(7);
echo $BGreen." VERSION VIPIG.NET COOKIE\n";
chay(18);
if (file_exists("IG.txt") == '1'){
  echo  "$BGreen Bạn có muốn đăng nhập vào tài khoản cũ bấn nút $BCyan enter $BGreen để tiếp tục, Bấm $BCyan no $BGreen để nhập lại tài khoản mới: $BYellow\3";
  $nhap =trim(fgets(STDIN));
if ($nhap == 'no'){
  $my = fopen("IG.txt", "w+");
  echo "$BYellow Nhập Tài Khoản:$BGreen  ";
  $user = trim(fgets(STDIN));
  echo "\n$BYellow Nhập Mật Khẩu:$BGreen \5";
  $pass = trim(fgets(STDIN));
fwrite($my,json_encode(array('username'=> $user,'password'=> $pass)));
}
}else if(!file_exists("IG.txt")){
  $my = fopen("IG.txt", "w+");
  echo "$BYellow Nhập Tài Khoản:$BGreen  ";
  $user = trim(fgets(STDIN));
  echo "\n$BYellow Nhập Mật Khẩu:$BGreen \5";
  $pass = trim(fgets(STDIN));
fwrite($my,json_encode(array('username'=> $user,'password'=> $pass)));
}
$user = json_decode(file_get_contents("IG.txt"))->{'username'};
$pass = json_decode(file_get_contents("IG.txt"))->{'password'};
$source = getcookieig($user,$pass,$useragent);
if ($source == '2'){
  echo '';
}else{
	exit($BRed."ĐĂNG NHẬP THẤT BẠI, SAI TÀI KHOẢN VIPIG  !");
}
chay(18);
$c = 0; $thu = 1;
echo $BGreen." Bạn muốn treo mấy acc instagram:  ";
$treo = trim(fgets(STDIN));
if(!is_numeric($treo)){$treo = 1;}
for($b=1;$b<($treo + 1);$b++){
    echo $BBlue." Điền cookie thứ $BGreen".$thu." : $BWhite ";
    $cooki[$c]=trim(fgets(STDIN));
    $info = laythongtin($cooki[$c],$useragent);
if($info[1]){
  $uidif[$c] = $info[1];
  $header[$c] = $info[0];
echo $BYellow." Tài khoản chính xác \n"; $c++;$thu++;
}else{echo $BRed." COOKIE SAI RỒI!! \n";$b--;}
}
@system('clear');
$cookie = $cooki[0];
$head = $header[0];
$idig = $uidif[0];
$h = datnickig($idig,$useragent);
chay(18);
echo " $BRed  [✓]..$BGreen ĐANG CHẠY AUTO INSTAGRAM \n"; usleep(100000);
echo " $BRed  [✓]..$BGreen facebook.com/vandatpipo \n"; usleep(100000);
echo " $BRed  [✓]..$BYellow Donate nhận tool mới nhất \n"; usleep(100000);
echo "  $BRed [✓]..$Blue MOMO: $BBlack 0334506791 $BGreen\n";
    usleep(100000);
echo " $BRed  [✓]..$BGreen Đang chạy tài khoản:  $BCyan$user\n"; usleep(100000);
echo " $BRed  [✓]..$BGreen Tên người mua Key:  $BCyan$name\n"; usleep(100000);
echo " $BRed  [✓]..$BGreen Key hết hạn sau:  $BCyan$time ngày\n"; usleep(100000);
echo "  $BRed [✓]..$BGreen Đang chạy đa luồng: $BBlack ".$treo."$BGreen tài khoản \n"; usleep(100000);
$xu = getxuig($useragent); usleep(100000);
echo "  $BRed [✓]..$BGreen Số xu hiện tại: [$BGreen$xu]\n"; usleep(100000);chay(18);
echo $lime."\033[1;37m~\033[1;31m[\033[1;32m✓\033[1;31m]$white =>$lime  Nhập \033[1;31m[\033[1;32m1\033[1;31m]$BGreen LIKE \n";
    echo $lime."\033[1;37m~\033[1;31m[\033[1;32m✓\033[1;31m]$white =>$lime  Nhập \033[1;31m[\033[1;32m2\033[1;31m]$BGreen COMMENTS \n";
    echo $lime."\033[1;37m~\033[1;31m[\033[1;32m✓\033[1;31m]$white =>$lime  Nhập \033[1;31m[\033[1;32m3\033[1;31m]$BGreen FOLLOW \n";
echo $BGreen." Ví dụ bạn muốn làm like follow thì điền 1+3 ";sleep(3); echo "\r"."                                                           "."\r";
echo $lime."\033[1;37m~\033[1;31m[\033[1;32m✓\033[1;31m]$white =>$lime  Vui Lòng Nhập chế độ : ";
$nhap = trim(fgets(STDIN));
if (strstr($nhap, '1')){array_push($listnv, 'like');}
if (strstr($nhap, '2')){array_push($listnv, 'cmt');}
if (strstr($nhap, '3')){array_push($listnv, 'sub');}
 if (count($listnv) == 0){exit($BRed."Vui lòng chọn ít nhất 1 loại NHIỆM VỤ!");}chay(18);
 echo $xanh."\033[1;37m~\033[1;31m[\033[1;32m✓\033[1;31m]$white =>$xanh  \033[1;31m[\033[1;32m✓\033[1;31m]$BGreen Nhập thời gian làm nhiệm vụ cmt, follow : \5 $BWhite";
    $giaysub=trim(fgets(STDIN));
    echo $xanh."\033[1;37m~\033[1;31m[\033[1;32m✓\033[1;31m]$white =>$xanh  \033[1;31m[\033[1;32m✓\033[1;31m]$BGreen Nhập thời gian làm nhiệm vụ like : \5 $BWhite";
    $giaylike=trim(fgets(STDIN));
if ($treo ==1){echo $xanh."\033[1;37m~\033[1;31m[\033[1;32m✓\033[1;31m]$white =>$xanh  \033[1;31m[\033[1;32m✓\033[1;31m]$BGreen Sau bao nhiệm vụ thì sẽ nghỉ ngơi : $BWhite \5";}else{
    echo $xanh."\033[1;37m~\033[1;31m[\033[1;32m✓\033[1;31m]$white =>$xanh  \033[1;31m[\033[1;32m✓\033[1;31m]$BGreen Sau bao nhiêu nhiệm vụ đổi nick :$BWhite \5";}
     $dung=trim(fgets(STDIN));    if (strlen($dung) <= 0){$dung = 10;}
if($treo == 1){echo $xanh."\033[1;37m~\033[1;31m[\033[1;32m✓\033[1;31m]$white =>$xanh  \033[1;31m[\033[1;32m✓\033[1;31m]$BGreen Dừng thời gian: $BWhite \5";
      $giay=trim(fgets(STDIN));}
      chay(18);
 $so = 0; $a = 0;
if($h != 1){
  echo " VÀO WEB ĐẶT CẤU HÌNH RỒI VÀO TOOL ĐỢI 30 GIÂY NHÉ \n"; sleep(30);
  $h = datnickig($idig,$useragent);
}  
 echo $BGreen." Đang chạy ID ".$idig."\n";
 while(true){
   echo $BGreen." Đang tải nhiệm vụ... ";
   $sonv = 0;
   if (in_array('like',$listnv)){
   getcookieig($user,$pass,$useragent);
    $list0 = getnvig('',$useragent);
if(is_array($list0)){
    if(count($list0) > 1){
    $listds['like'] = $list0;
    $sonv = $sonv + count($listds['like']);
    }else{$listds['like'] = null;}}
  }else{$listds['like'] = null;}
  if(in_array('sub',$listnv)){
    $list1 = getnvig('/subcheo',$useragent);
if(is_array($list1)){
    if(count($list1) > 1 ){
    $listds['sub'] = $list1;
     $sonv = $sonv + count($listds['sub']);
    }else{$listds['sub'] = null;}}
  }else{$listds['sub'] = null;}
  if(in_array('cmt',$listnv)){
    $list2 = getnvig('/cmtcheo',$useragent);
if(is_array($list2)){
    if(count($list2) > 1){
    $listds['cmt'] = $list2;
    $sonv = $sonv + count($listds['cmt']);
    }else{$listds['cmt'] = null;}}
  }else{$listds['cmt'] = null;}
  echo "\r";$demdung = 0; $i = 0;
while($sonv > 0){
  if ($listds['like'] and is_array($listds['like'])){$sonv--;
     $i++;if($demdung >= $dung){break;}
     $ranar = array_rand($listds['like'],1);
      $key = $listds['like'][$ranar];
      $link = $key->{'link'};
      $uid = $key->{'idpost'};
      $id = layidlikesub($cookie,'like',$link,$useragent,$head);
$like = http_build_query(array('id'=> $uid));
$g = lamnhiemvu($cookie,$id,$useragent,$head);
	$s = nhantienig('',$like,$useragent);
if ($s == '2'){$xu = $xu + 200;$so++;$demdung++;
			echo echonhanxu(200,'TIM',$uid,$xu,$so);
			echo echodemgiay($giaylike);
					}else{
echo	$BRed."THẢ TIM IG thất bại • ".$uid."\r";
	if($g == '0' or $g == '1'  ){
	  break;
	}
					}
      unset($listds['like'][$ranar]);
    }
if ($listds['sub'] and is_array($listds['sub'])){$sonv--;
    $i++;if($demdung >= $dung){break;}
    $ranar = array_rand($listds['sub'],1);
      $key = $listds['sub'][$ranar];
      $uid = $key->{'soID'};
      $tid = $key->{'idpost'};
$link = 'https://www.instagram.com/web/friendships/'.$uid.'/follow/';
$g = lamnhiemvu($cookie,$link,$useragent,$head);
   if($g == '0' or $g == '1' ){
     break;
   }
$sub = http_build_query(array('id'=>$uid,'tid'=>$tid));
      $s = nhantienig('/subcheo',$sub,$useragent);
if (isset($s)){$xu = $xu + 600;$so++;$demdung++;
			echo echonhanxu(600,'FOLLOW',$uid,$xu,$so);
			echo echodemgiay($giaysub);
					}else{
echo	$BRed."FOLLOW thất bại • ".$uid."\r";
					}
      unset($listds['sub'][$ranar]);
    }
     if ($listds['cmt'] and is_array($listds['cmt'])){$sonv--;
      $i++;if($demdung >= $dung){break;}
      $ranar = array_rand($listds['cmt'],1);
    $link = $key->{'link'};
    $uid = $key->{'idpost'};
    $id = layidlikesub($cookie,'cmt',$link,$useragent,$head);
$msg = json_decode($key->{'nd'})[1];
$g = cmtig($cookie,$id,$msg,$useragent,$head);
 if ($g == '0' or $g == '1' ){
        break;}
$cmt = http_build_query(array('id'=> $uid));
$s = nhantienig('/cmtcheo',$cmt,$useragent);
if ($s == '2'){$xu = $xu + 600;$so++;$demdung++;
			echo echonhanxu(600,'CMT',$uid,$xu,$so);
			echo echodemgiay($giaysub);
					}else{
echo	$BRed."COMMENT thất bại • ".$uid."\r";
					}
      unset($listds['cmt'][$ranar]);
    }
}
if($treo == '1' and $demdung == $dung){
  echo nghingoi($giay); $demdung = 0; $demdung = 0;
  getcookieig($user,$pass,$useragent);
}
if(($g == '0' or $g == '1') and $treo == 1){
  echo $BGreen." COOKIE ĐÃ BỊ DIE RỒI VUI LÒNG NHẬP COOKIE MỚI: ";
$cookie = trim(fgets(STDIN));
$info = laythongtin($cookie,$useragent);
$head = $info[0];
$idig = $info[1];
if(isset($idig)){
getcookieig($user,$pass,$useragent);
$h = datnickig($idig,$useragent);
if($h != '1'){
  echo $BRed."WARNING:$BYellow IDFB ".$idig."$BRed chưa được thêm vào cấu hình trao đổi sub vui lòng thêm vào rồi lại cho vào tool \n";exit;
}
}
}else if(($g == '0' or $g == '1' or $dung <= $demdung) and $treo >= 2){
  $tat = 0;
  $cookie = $cooki[$a];
  $a++;if($a>=$treo){$a=0;} $demdung = 0;
$info = laythongtin($cookie,$useragent);
$head = $info[0];
$idig = $info[1];
if(isset($idig)){
	   echo $BYellow."  Đang chạy nick:  ".$BCyan."  ".$idig."\n";
$h = datnickig($idig,$useragent);
if($h != '1'){
  echo $BRed."WARNING:$BYellow IDFB ".$idig."$BRed chưa được thêm vào cấu hình trao đổi sub vui lòng thêm vào rồi lại cho vào tool \n";exit;
}
}
}
}
}
function chay($so){
  for($v=0;$v<= $so;$v++){
    echo "\033[1;31m"."- ";usleep(20000);echo "\033[1;37m"."- ";usleep(20000);
} echo "\n";
}
function echonhanxu($xu,$loai,$id,$soxu,$so){
  $time = date('H:i:s');
  if(strlen($id) >= 12){
    $id = substr($id,0,12);
  }
if(strlen($loai) == 3){$kc = '   ';}else if(strlen($loai) == 4){$kc = '  ';}else if(strlen($loai) == 5){$kc = ' ';}else{$kc = '';}
echo "\033[1;33m[$so]"; usleep(30000); echo " \033[1;31m"; usleep(30000); echo "● \033[1;33m"; usleep(30000); echo "[$loai]$kc "; usleep(30000); echo "\033[1;31m"; usleep(30000); echo "●\033[1;35m "; usleep(30000); echo "[$time] \033[1;31m"; usleep(30000); echo "●"; usleep(30000); echo " \033[1;32m$id \033[1;31m"; usleep(30000); echo "●\033[1;33m"; usleep(30000); echo " $xu \033[1;31m"; usleep(30000); echo "● "; usleep(30000); echo "\033[1;36m$soxu \n";  
}
function echodemgiay($giay){
  $hinh = "Runing time";
  for ($b = $giay;$b > 0;$b--){
  echo " \033[1;33m$hinh \033[1;30m➤          "." $b \r";usleep(100000);
  echo " \033[1;34m$hinh  \033[1;31m➤         "." $b \r";usleep(100000);
  echo " \033[1;35m$hinh   \033[1;32m➤        "." $b \r";usleep(100000);
  echo " \033[1;36m$hinh    \033[1;33m➤       "." $b \r";usleep(100000);
  echo " \033[1;37m$hinh     \033[1;34m➤      "." $b \r";usleep(100000);
  echo " \033[1;33m$hinh      \033[1;35m➤     "." $b \r";usleep(100000);
  echo " \033[1;34m$hinh       \033[1;36m➤    "." $b \r";usleep(100000);
  echo " \033[1;35m$hinh        \033[1;37m➤   "." $b \r";usleep(100000);
  echo " \033[1;36m$hinh         \033[1;33m➤  "." $b \r";usleep(100000);
  echo " \033[1;37m$hinh          \033[1;34m➤ "." $b \r";usleep(100000);
  }
}
function checklive($token){
 $m = json_decode(file_get_contents('https://graph.facebook.com/me/?access_token='.$token),true);
 if($m['id']){
   return '1';
 }else{ 
   return '2';
 }
}
function nghingoi($giay){
   for($v = 0;$v <= $giay;$v++){
   echo "\033[1;32mĐang nghỉ ngơi dưỡng sức \033[1;36m".($giay -$v)."\033[1;35m giây \033[1;37m--> ";sleep(1); echo "         \r";
  }
}
function nhantiencxtds($loai,$id){
	$ch=curl_init();
	curl_setopt($ch, CURLOPT_URL, 'https://traodoisub.com/scr/nhantiencx.php');
	curl_setopt($ch, CURLOPT_USERAGENT, "Mozilla/5.0 (Linux; Android 11; Pixel 2 XL) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/87.0.4280.141 Mobile Safari/537.36");
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	$tdsxu=array('id' => $id, 'loaicx' => $loai);
	curl_setopt($ch, CURLOPT_POST,count($tdsxu));
	curl_setopt($ch, CURLOPT_POSTFIELDS,$tdsxu);
	curl_setopt($ch, CURLOPT_COOKIEFILE, "TDS.txt");
	$xu=curl_exec($ch);
	curl_close($ch);
	return $xu;
}
function nhantientds($loai,$id){
	$ch=curl_init();
	curl_setopt($ch, CURLOPT_URL, 'https://traodoisub.com/scr/nhantien'.$loai.'.php');
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt($ch, CURLOPT_USERAGENT,"Mozilla/5.0 (Linux; Android 11; Pixel 2 XL) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/85.0.4183.127 Mobile Safari/537.36");
	$tdsxu=array('id' => $id);
	curl_setopt($ch, CURLOPT_POST,count($tdsxu));
	curl_setopt($ch, CURLOPT_POSTFIELDS,$tdsxu);
	curl_setopt($ch, CURLOPT_COOKIEFILE, "TDS.txt");
	$xu=curl_exec($ch);
	curl_close($ch);
	return $xu;
}
function getcookietds($user,$pass){
$ch=curl_init();
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_URL, 'https://traodoisub.com/scr/login.php');
curl_setopt($ch, CURLOPT_USERAGENT,"Mozilla/5.0 (Linux; Android 11; Pixel 2 XL) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/85.0.4183.127 Mobile Safari/537.36");
curl_setopt($ch, CURLOPT_COOKIEJAR, "TDS.txt");
$login =array('username' => $user,'password' => $pass,'submit' => ' ĐĂNG NHẬP');
curl_setopt($ch, CURLOPT_POST,count($login));
curl_setopt($ch, CURLOPT_POSTFIELDS,$login);
$source = curl_exec($ch);
curl_close($ch);
return $source;
}
function datnicktds($user,$idfb){
	$ch=curl_init();
	curl_setopt($ch,CURLOPT_SSL_VERIFYPEER,false);
	curl_setopt($ch, CURLOPT_URL, 'https://traodoisub.com/scr/api_dat.php?user='.$user.'&idfb='.$idfb);
	curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);
  curl_setopt($ch, CURLOPT_USERAGENT, "Mozilla/5.0 (Linux; Android 11; Pixel 2 XL) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/85.0.4183.127 Mobile Safari/537.36");
    $h = curl_exec($ch);
return json_decode($h);
}
function getnvtds($loai,$user){
	$ch = curl_init();
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($ch,CURLOPT_URL,'https://traodoisub.com/scr/api_job.php?chucnang='.$loai.'&user='.$user);
curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);
curl_setopt($ch, CURLOPT_USERAGENT, "Mozilla/5.0 (Linux; Android 11; Pixel 2 XL) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/85.0.4183.127 Mobile Safari/537.36");
$list = curl_exec($ch);
curl_close($ch);
return  json_decode($list);
}
function web($key,$useragent){
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'https://khotoolauto.club/'.$key);
curl_setopt($ch, CURLOPT_USERAGENT, $useragent);
curl_setopt($ch, CURLOPT_RETURNTRANSFER,true);
return curl_exec($ch);
}
function cookie($cookie,$useragent,$head){
$ch = curl_init();
  curl_setopt($ch, CURLOPT_URL, 'https://m.facebook.com/composer/ocelot/async_loader/?publisher=feed');
curl_setopt($ch, CURLOPT_USERAGENT,$useragent );
curl_setopt($ch, CURLOPT_ENCODING, '');
curl_setopt($ch, CURLOPT_COOKIE, $cookie);
curl_setopt($ch, CURLOPT_HTTPHEADER, $head);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
 
 
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);
curl_setopt($ch, CURLOPT_HTTPHEADER, array('Expect:'));
$access = curl_exec($ch);
curl_close($ch);
if (explode('\",\"useLocalFilePreview',explode('accessToken\":\"', $access)[1])[0])
{
        return explode('\",\"useLocalFilePreview',explode('accessToken\":\"', $access)[1])[0];
}else{
  return false;
}
}
function followtoken($access_token,$id,$useragent,$head){
	$ch=curl_init();
	curl_setopt($ch, CURLOPT_URL, 'https://graph.facebook.com/'.$id.'/subscribers');
	curl_setopt($ch, CURLOPT_USERAGENT, $useragent);
	curl_setopt($ch, CURLOPT_ENCODING, '');
	curl_setopt($ch, CURLOPT_HTTPHEADER, $head);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	 
	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
	 
	 
	curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);
	curl_setopt($ch, CURLOPT_HTTPHEADER, array('Expect:'));
	$data = array('access_token' => $access_token);
	curl_setopt($ch, CURLOPT_POST,count($data));
	curl_setopt($ch, CURLOPT_POSTFIELDS,$data);
	$access = curl_exec($ch);
	curl_close($ch);
	return json_decode($access);
}
function liketoken($access_token,$id,$useragent,$head){
	$ch=curl_init();
	curl_setopt($ch, CURLOPT_URL, 'https://graph.facebook.com/'.$id.'/likes');
	curl_setopt($ch, CURLOPT_USERAGENT, $useragent);
	curl_setopt($ch, CURLOPT_ENCODING, '');
	curl_setopt($ch, CURLOPT_HTTPHEADER, $head);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	 
	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
	 
	 
	curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);
	curl_setopt($ch, CURLOPT_HTTPHEADER, array('Expect:'));
	$data = array('access_token' => $access_token);
	curl_setopt($ch, CURLOPT_POST,count($data));
	curl_setopt($ch, CURLOPT_POSTFIELDS,$data);
	$access = curl_exec($ch);
	curl_close($ch);
	return json_decode($access);
}
function cmt($access_token,$msg,$id,$useragent,$head){
	$ch=curl_init();
	curl_setopt($ch, CURLOPT_URL, 'https://graph.facebook.com/'.$id.'/comments');
	curl_setopt($ch, CURLOPT_USERAGENT, $useragent);
	curl_setopt($ch, CURLOPT_ENCODING, '');
	curl_setopt($ch, CURLOPT_HTTPHEADER, $head);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	 
	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
	 
	 
	curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);
	curl_setopt($ch, CURLOPT_HTTPHEADER, array('Expect:'));
	$data = array('message' => $msg,'access_token' => $access_token);
	curl_setopt($ch, CURLOPT_POST,count($data));
	curl_setopt($ch, CURLOPT_POSTFIELDS,$data);
	$access = curl_exec($ch);
	curl_close($ch);
	return json_decode($access);
}
function gethome($cookie,$useragent,$head){
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL,'https://mbasic.facebook.com/home.php');
curl_setopt($ch, CURLOPT_TIMEOUT,60);
curl_setopt($ch, CURLOPT_RETURNTRANSFER,1);
curl_setopt($ch, CURLOPT_CONNECTTIMEOUT,60);
curl_setopt($ch, CURLOPT_USERAGENT,$useragent);
curl_setopt($ch, CURLOPT_COOKIE,$cookie);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER,TRUE);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST,TRUE);
curl_setopt($ch, CURLOPT_HTTPHEADER,$head);
curl_setopt($ch, CURLOPT_ENCODING,'');
return  curl_exec($ch);
curl_close($ch);
}
function gettiephome($cookie,$linktiep,$useragent,$head){
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL,$linktiep);
curl_setopt($ch, CURLOPT_TIMEOUT,60);
curl_setopt($ch, CURLOPT_RETURNTRANSFER,1);
curl_setopt($ch, CURLOPT_CONNECTTIMEOUT,60);
curl_setopt($ch, CURLOPT_USERAGENT,$useragent);
curl_setopt($ch, CURLOPT_COOKIE,$cookie);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER,TRUE);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST,TRUE);
curl_setopt($ch, CURLOPT_HTTPHEADER,$head);
curl_setopt($ch, CURLOPT_ENCODING,'');
return  curl_exec($ch);
curl_close($ch);
}
function thembanbe($cookie,$url,$useragent,$head){
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL,'https://mbasic.facebook.com/friends/center/mbasic/?fb_ref=tn&sr=1&ref_component=mbasic_home_header&ref_page=MFriendsCenterMBasicController');
curl_setopt($ch, CURLOPT_TIMEOUT,60);
curl_setopt($ch, CURLOPT_RETURNTRANSFER,1);
curl_setopt($ch, CURLOPT_CONNECTTIMEOUT,60);
curl_setopt($ch, CURLOPT_USERAGENT,$useragent);
curl_setopt($ch, CURLOPT_COOKIE,$cookie);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER,TRUE);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST,TRUE);
curl_setopt($ch, CURLOPT_HTTPHEADER,$head);
curl_setopt($ch, CURLOPT_ENCODING,'');
$list = curl_exec($ch);
$link = explode('" class="',explode('/a/mobile/friends/add_friend.php?',$list)[1])[0];
$link2 = 'https://mbasic.facebook.com/a/mobile/friends/add_friend.php?'.str_replace('&amp;','&',$link);
curl_setopt($ch, CURLOPT_URL, $link2);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_exec($ch);
curl_close($ch);
return explode('&hf',explode('id=',$link2)[1])[0];
}
function camxuc($cookie,$id,$useragent,$type,$head){
	$ch = curl_init();
if(!strstr($id,'facebook')){
	if(strpos($id,'_')){
		$uid = explode('_',$id, 2);
		$id2 = 'story.php?story_fbid='.$uid[1].'&id='.$uid[0];
	}else{
		$id2 = $id;
	}
	curl_setopt($ch, CURLOPT_URL, 'https://mbasic.facebook.com/'.$id2);
	curl_setopt($ch, CURLOPT_USERAGENT, $useragent);
	curl_setopt($ch, CURLOPT_ENCODING, '');
	curl_setopt($ch, CURLOPT_COOKIE, $cookie);
	curl_setopt($ch, CURLOPT_HTTPHEADER, $head);
	curl_setopt($ch, CURLOPT_HEADER,true );
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
	 
	 
	curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);
	curl_setopt($ch, CURLOPT_HTTPHEADER, array('Expect
	:'));
	$page = curl_exec($ch);
if (preg_match('~Location: (.*)~i', $page, $match)) {
   $location = trim($match[1]); 
if(strstr($location,'https://m.facebook.com')){
$link = 'https://mbasic.facebook.com'.explode('facebook.com',$location)[1];
curl_setopt($ch, CURLOPT_URL,$link);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
$page = curl_exec($ch);
curl_close($ch);
}
}
	if ($id2 != $id && explode('&amp;origin_uri=',explode('amp;ft_id=',$page,2)[1],2)[0]){
		$get = explode('&amp;origin_uri=',explode('amp;ft_id=',$page,2)[1],2)[0];
	}else{
		$get = $id2;
	}
	$link = 'https://mbasic.facebook.com/reactions/picker/?is_permalink=1&ft_id='.$get;
}else{
  $link = $id;
}
$ch = curl_init();
  curl_setopt($ch, CURLOPT_URL, $link);
  curl_setopt($ch, CURLOPT_USERAGENT, $useragent);
	curl_setopt($ch, CURLOPT_ENCODING, '');
	curl_setopt($ch, CURLOPT_COOKIE, $cookie);
	curl_setopt($ch, CURLOPT_HTTPHEADER, $head);
	curl_setopt($ch, CURLOPT_HEADER,true );
	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
	 
	 
	curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);
	curl_setopt($ch, CURLOPT_HTTPHEADER, array('Expect
	:'));
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	$cx = curl_exec($ch);
	$haha = explode('<a href="',$cx);
	if ($type == 'LIKE'){
	  $haha2 = explode('" style="display:block"',$haha[1])[0];
	}else if ($type == 'LOVE'){
		$haha2 = explode('" style="display:block"',$haha[2])[0];
	}else if ($type == 'WOW'){
		$haha2 = explode('" style="display:block"',$haha[5])[0];
	}else if ($type == 'HAHA'){
		$haha2 = explode('" style="display:block"',$haha[4])[0];
	}else if ($type == 'SAD'){
		$haha2 = explode('" style="display:block"',$haha[6])[0];
	}else if ($type == 'ANGRY'){
		$haha2 = explode('" style="display:block"',$haha[7])[0];
	}else if ($type == 'THUONG'){
	  $haha2 = explode('" style="display:block"',$haha[3])[0];
	}
	$link2 = html_entity_decode($haha2);	
	curl_setopt($ch, CURLOPT_URL, 'https://mbasic.facebook.com'.$link2);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
$m =	curl_exec($ch);
return $m;
	curl_close($ch);
}
function page($id,$cookie,$useragent,$head){
	$ch = curl_init();
	curl_setopt($ch, CURLOPT_URL, 'https://mbasic.facebook.com/'.$id);
	curl_setopt($ch, CURLOPT_USERAGENT, $useragent);
	curl_setopt($ch, CURLOPT_ENCODING, '');
	curl_setopt($ch, CURLOPT_COOKIE, $cookie);
	curl_setopt($ch, CURLOPT_HTTPHEADER, $head);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
	 
	 
	curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);
	curl_setopt($ch, CURLOPT_HTTPHEADER, array('Expect
	:'));
	$page = curl_exec($ch);
	if (explode('&amp;refid=',explode('pageSuggestionsOnLiking=1&amp;gfid=',$page)[1])[0]){
		$get = explode('&amp;refid=',explode('pageSuggestionsOnLiking=1&amp;gfid=',$page)[1])[0];
		$link = 'https://mbasic.facebook.com/a/profile.php?fan&id='.$id.'&origin=page_profile&pageSuggestionsOnLiking=1&gfid='.$get.'&refid=17';
		curl_setopt($ch, CURLOPT_URL, $link);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		curl_exec($ch);
	}
	curl_close($ch);
}
function gettt($cookie,$useragent,$head){
	$ch = curl_init();
	curl_setopt($ch, CURLOPT_URL, 'https://mbasic.facebook.com/home.php');
	curl_setopt($ch, CURLOPT_USERAGENT, $useragent);
	curl_setopt($ch, CURLOPT_ENCODING, '');
	curl_setopt($ch, CURLOPT_COOKIE, $cookie);
	curl_setopt($ch, CURLOPT_HTTPHEADER, $head);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
	 
	 
	curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);
$data = curl_exec($ch);
$haha = explode('<a href="/reactions/picker/?',$data);
$row =[];$i = 1;
$count = count($haha);
while ($count > 0){
  $count--;
$link = explode('">Bày tỏ cảm xúc</a><',$haha[$i])[0];$i++;
$row[] = 'https://mbasic.facebook.com/reactions/picker/?'.html_entity_decode($link);
}
return $row;
}
function huyfollow($cookie,$id,$useragent,$head){
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'https://mbasic.facebook.com/'.$id);
	curl_setopt($ch, CURLOPT_USERAGENT, $useragent);
	curl_setopt($ch, CURLOPT_ENCODING, '');
	curl_setopt($ch, CURLOPT_COOKIE, $cookie);
	curl_setopt($ch, CURLOPT_HTTPHEADER, $head);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
	 
	 
	curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);
$n = curl_exec($ch);
$lin = explode('">Bỏ theo dõi',explode('/a/subscriptions/remove?', $n)[1])[0];
$link = str_replace('&amp;', '&', $lin);
curl_setopt($ch, CURLOPT_URL, "https://mbasic.facebook.com/a/subscriptions/remove?".$link);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
$n =	curl_exec($ch);
curl_close($ch);
return explode('</title><meta',explode('head><title>',$n)[1])[0];
}
function getidunfl($cookie,$idfb,$useragent,$head){
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'https://mbasic.facebook.com/timeline/app_collection/?'.http_build_query(array( 'collection_token'=> $idfb.':2356318349:33', '_rdr'=> '')));
	curl_setopt($ch, CURLOPT_USERAGENT, $useragent);
	curl_setopt($ch, CURLOPT_ENCODING, '');
	curl_setopt($ch, CURLOPT_COOKIE, $cookie);
	curl_setopt($ch, CURLOPT_HTTPHEADER, $head);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
	 
	 
	curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);
$n = curl_exec($ch);
$lin = explode('collection',explode('/timeline/app_collection/more/?collection_token', $n)[1])[0];
$link = str_replace('&amp;','&',$lin);
curl_setopt($ch, CURLOPT_URL, 'https://mbasic.facebook.com/timeline/app_collection/more/?collection_token'.$link.'collection');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
$m = curl_exec($ch);
curl_close($ch);
$liss = [];
$n = explode('\">\u003Cspan',explode('href=\"\/',$m)[1])[0];
if ($n == ''){$bb = '1'; $liss = '1';}else{$bb = '2';}
while($bb == '2'){$i++;
$uid = explode('\">\u003Cspan',explode('href=\"\/',$m)[($i)])[0];
if (strlen($uid) < 100){
array_push($liss, $uid);}
if ($uid == ''){break;}
}
return $liss;
}
function bolikepage($cookie,$id,$useragent,$head){
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'https://mbasic.facebook.com/'.$id);
	curl_setopt($ch, CURLOPT_USERAGENT, $useragent);
	curl_setopt($ch, CURLOPT_ENCODING, '');
	curl_setopt($ch, CURLOPT_COOKIE, $cookie);
	curl_setopt($ch, CURLOPT_HTTPHEADER, $head);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	 
	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
	 
	 
	curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);
$n = curl_exec($ch);
$lin = explode('" class="',explode('/a/profile.php?unfan', $n)[1])[0];
$link = html_entity_decode($lin);
curl_setopt($ch, CURLOPT_URL, "https://mbasic.facebook.com/a/profile.php?unfan".$link);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
 $n =	curl_exec($ch);
 curl_close($ch);
return explode('</title><meta',explode('head><title>',$n)[1])[0];
}
function xacnhanbanbe($cookie,$id,$useragent,$head){
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'https://mbasic.facebook.com/'.$id);
	curl_setopt($ch, CURLOPT_USERAGENT, $useragent);
	curl_setopt($ch, CURLOPT_ENCODING, '');
	curl_setopt($ch, CURLOPT_COOKIE, $cookie);
	curl_setopt($ch, CURLOPT_HTTPHEADER, $head);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	 
	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
	 
	 
	curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);
$n = curl_exec($ch);
$lin = explode('" class="',explode('/a/mobile/friends/profile_add_friend.php?', $n)[1])[0];
$link = html_entity_decode($lin);
curl_setopt($ch, CURLOPT_URL, "https://mbasic.facebook.com/a/mobile/friends/profile_add_friend.php?".$link);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
 $n =	curl_exec($ch);
 curl_close($ch);
return explode('</title><meta',explode('head><title>',$n)[1])[0];
}
function xemlikepage($cookie,$access_token,$useragent,$head){
	$ch=curl_init();
	curl_setopt($ch, CURLOPT_URL, 'https://graph.facebook.com/me/likes?access_token='.$access_token.'&limit=5000&fields=name,id');
	curl_setopt($ch, CURLOPT_USERAGENT, $useragent);
	curl_setopt($ch, CURLOPT_ENCODING, '');
	curl_setopt($ch, CURLOPT_COOKIE, $cookie);
	curl_setopt($ch, CURLOPT_HTTPHEADER, $head);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	 
	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
	 
	 
	curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);
	$access = curl_exec($ch);
	curl_close($ch);
	return json_decode($access);
}
function follow($cookie,$id,$useragent,$head){
	$ch = curl_init();
	curl_setopt($ch, CURLOPT_URL, 'https://mbasic.facebook.com/'.$id);
	curl_setopt($ch, CURLOPT_USERAGENT, $useragent);
	curl_setopt($ch, CURLOPT_ENCODING, '');
	curl_setopt($ch, CURLOPT_COOKIE, $cookie);
	curl_setopt($ch, CURLOPT_HTTPHEADER, $head);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	 
	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
	 
	 
	curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);
$n = curl_exec($ch);
$lin = explode('" class="',explode('a/subscribe.php?', $n)[1])[0];
$link = str_replace('&amp;', '&', $lin);

curl_setopt($ch, CURLOPT_URL, "https://mbasic.facebook.com/a/subscribe.php?".$link);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
 $n =	curl_exec($ch);
 curl_close($ch);
return explode('</title><meta',explode('head><title>',$n)[1])[0];
}
function addbanbe($cookie,$useragent,$head,$loai){
	$ch=curl_init();
	curl_setopt($ch, CURLOPT_URL, "https://mbasic.facebook.com/friends/center/requests/#friends_center_main");
	curl_setopt($ch, CURLOPT_USERAGENT, $useragent);
	curl_setopt($ch, CURLOPT_ENCODING, '');
	curl_setopt($ch, CURLOPT_COOKIE, $cookie);
	curl_setopt($ch, CURLOPT_HTTPHEADER, $head);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
	 
	 
	curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);
	$access = curl_exec($ch);
	curl_close($ch);
	$data = explode('<a href="/a/notifications.php?'.$loai.'=',$access);
	$i = 1;
	$count = count($data);
	while($count > 1){
	  $count--; 
	$link = explode('" class="',$data[$i])[0];
	$i++;
	$row[] = "https://mbasic.facebook.com//a/notifications.php?$loai=".html_entity_decode($link);
	}
return $row;
}
function chaylinkfb($cookie,$link,$useragent,$head){
  $ch=curl_init();
	curl_setopt($ch, CURLOPT_URL, $link);
	curl_setopt($ch, CURLOPT_USERAGENT, $useragent);
	curl_setopt($ch, CURLOPT_ENCODING, '');
	curl_setopt($ch, CURLOPT_COOKIE, $cookie);
	curl_setopt($ch, CURLOPT_HTTPHEADER, $head);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
	 
	 
	curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);
	$access = curl_exec($ch);
	curl_close($ch);
	if (strlen($access) > 1000){
	  return '1';
	}else{ return '2'; }
}
function getbaiviet($cookie,$access_token,$useragent,$idfb,$head){
	$ch=curl_init();
	curl_setopt($ch, CURLOPT_URL, 'https://graph.facebook.com/'.$idfb.'/posts?limit=1000&fields=id,name&access_token='.$access_token);
	curl_setopt($ch, CURLOPT_USERAGENT, $useragent);
	curl_setopt($ch, CURLOPT_ENCODING, '');
	curl_setopt($ch, CURLOPT_COOKIE, $cookie);
	curl_setopt($ch, CURLOPT_HTTPHEADER, $head);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
	curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);
	$access = curl_exec($ch);
	curl_close($ch);
	return json_decode($access);
}
function demlike($cookie,$access_token,$idpost,$useragent,$head){
	$ch=curl_init();
	curl_setopt($ch, CURLOPT_URL, 'https://graph.facebook.com/v1.0/'.$idpost.'/likes?access_token='.$access_token.'&pretty=1&limit=5000');
	curl_setopt($ch, CURLOPT_USERAGENT, $useragent);
	curl_setopt($ch, CURLOPT_ENCODING, '');
	curl_setopt($ch, CURLOPT_COOKIE, $cookie);
	curl_setopt($ch, CURLOPT_HTTPHEADER, $head);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
	curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);
	$access = curl_exec($ch);
	curl_close($ch);
	return json_decode($access);
}
function getbanbe($access_token,$useragent,$head){
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL,'https://graph.facebook.com/me/friends/?access_token='.$access_token);
curl_setopt($ch, CURLOPT_TIMEOUT,60);
curl_setopt($ch, CURLOPT_RETURNTRANSFER,1);
curl_setopt($ch, CURLOPT_CONNECTTIMEOUT,60);
curl_setopt($ch, CURLOPT_USERAGENT,$useragent);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER,TRUE);
curl_setopt($ch, CURLOPT_HTTPHEADER,$head);
curl_setopt($ch, CURLOPT_ENCODING,'');
return json_decode(curl_exec($ch));
curl_close($ch);
}
function xoabanbe($cookie,$id,$useragent,$head){
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL,'https://mbasic.facebook.com/profile.php?id='.$id);
curl_setopt($ch, CURLOPT_TIMEOUT,60);
curl_setopt($ch, CURLOPT_RETURNTRANSFER,1);
curl_setopt($ch, CURLOPT_CONNECTTIMEOUT,60);
curl_setopt($ch, CURLOPT_USERAGENT,$useragent);
curl_setopt($ch, CURLOPT_COOKIE,$cookie);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER,TRUE);
curl_setopt($ch, CURLOPT_HTTPHEADER,$head);
curl_setopt($ch, CURLOPT_ENCODING,'');
$list = curl_exec($ch);
$data1 = explode('" autocomplete=',explode('name="fb_dtsg" value="',$list)[1])[0];
$data2= explode('" autocomplete=',explode('name="jazoest" value="',$list)[1])[0];
$data = http_build_query(array('fb_dtsg'=>$data1,'jazoest'=>$data2,'friend_id'=>$id ,'unref'=>'profile_gear','confirm'=>'Xác nhận'));
$head[] = 'content-length: '.strlen($data);
$head[] = 'refer: https://mbasic.facebook.com/removefriend.php?friend_id='.$id.'&unref=profile_gear&refid=17';
curl_setopt($ch, CURLOPT_URL, 'https://mbasic.facebook.com/a/removefriend.php');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
$h = curl_exec($ch);
curl_close($ch);
}
function checktoken($access_token,$useragent,$head){
 $ch = curl_init();
curl_setopt($ch, CURLOPT_URL,"https://graph.facebook.com/me/?access_token=".$access_token);
curl_setopt($ch, CURLOPT_USERAGENT, $useragent);
curl_setopt($ch, CURLOPT_RETURNTRANSFER,1);
curl_setopt($ch, CURLOPT_HTTPHEADER,$head);
$token = curl_exec($ch);
curl_close($ch);
return json_decode($token);
}
function getnv($loai,$useragent){
 $ch=curl_init();
 curl_setopt($ch, CURLOPT_URL,'https://tuongtaccheo.com/kiemtien'.$loai.'/getpost.php');
 $head[]='Host: tuongtaccheo.com';
 $head[]='accept: application/json, text/javascript, *'.'/'.'*; q=0.01';
 $head[]='x-requested-with: XMLHttpRequest';
 curl_setopt($ch, CURLOPT_USERAGENT, $useragent);
 curl_setopt($ch,CURLOPT_FOLLOWLOCATION, TRUE);
 curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);
 curl_setopt($ch,CURLOPT_POST,1);
 curl_setopt($ch,CURLOPT_HTTPGET, true);
 curl_setopt($ch,CURLOPT_SSL_VERIFYPEER, 0);
 curl_setopt($ch,CURLOPT_HTTPHEADER, $head);
 curl_setopt($ch,CURLOPT_ENCODING, TRUE);
 curl_setopt($ch,CURLOPT_COOKIEFILE, "TTC.txt");
 return json_decode(curl_exec($ch));
 curl_close($ch);
}
function getcookiettc($user,$pass,$useragent){
  $ch=curl_init();
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_URL, 'https://tuongtaccheo.com/login.php');
curl_setopt($ch, CURLOPT_COOKIEJAR, "TTC.txt");
curl_setopt($ch, CURLOPT_USERAGENT,$useragent);
$login = array('username' => $user,'password' => $pass,'submit' => ' ĐĂNG NHẬP');
curl_setopt($ch, CURLOPT_POST,count($login));
curl_setopt($ch, CURLOPT_POSTFIELDS,$login);
return curl_exec($ch);
curl_close($ch);
}
function nhantien($loai,$id,$useragent){
  $ch= curl_init();
  curl_setopt($ch, CURLOPT_URL, 'https://tuongtaccheo.com/kiemtien'.$loai.'/nhantien.php');
  $data = http_build_query(array('id'=> $id));
  $head[]='Host: tuongtaccheo.com';
  $head[]='content-length: '.strlen($data);
  $head[]='x-requested-with: XMLHttpRequest';
  $head[]='content-type: application/x-www-form-urlencoded; charset=UTF-8';
  $head[]='origin: https://tuongtaccheo.com';
  $head[]='cookie: TawkConnectionTime=0';
  curl_setopt($ch, CURLOPT_USERAGENT, $useragent);
  curl_setopt($ch,CURLOPT_FOLLOWLOCATION,TRUE);
  curl_setopt($ch,CURLOPT_RETURNTRANSFER, 1);
  curl_setopt($ch,CURLOPT_POST, 1);
  curl_setopt($ch,CURLOPT_POSTFIELDS,$data);
  curl_setopt($ch,CURLOPT_SSL_VERIFYPEER,0);
  curl_setopt($ch,CURLOPT_HTTPHEADER, $head);
  curl_setopt($ch,CURLOPT_ENCODING, TRUE);
  curl_setopt($ch,CURLOPT_COOKIEFILE,"TTC.txt");
  return json_decode(curl_exec($ch))->{'mess'};
  curl_close($ch);
}
function nhantiencx($id,$type,$useragent){
  $ch= curl_init();
  $dat= http_build_query(array('id'=> $id , 'loaicx'=> $type));
  curl_setopt($ch, CURLOPT_URL, 'https://tuongtaccheo.com/kiemtien/camxuccheo/nhantien.php');
  $head[]='Host: tuongtaccheo.com';
  $head[]='content-length: '.strlen($dat);
  $head[]='x-requested-with: XMLHttpRequest';
  $head[]='content-type: application/x-www-form-urlencoded; charset=UTF-8';
  $head[]='origin: https://tuongtaccheo.com';
  $head[]='cookie: TawkConnectionTime=0';
  curl_setopt($ch, CURLOPT_USERAGENT, $useragent);
  curl_setopt($ch,CURLOPT_FOLLOWLOCATION,TRUE);
  curl_setopt($ch,CURLOPT_RETURNTRANSFER, 1);
  curl_setopt($ch,CURLOPT_POST, 2);
  curl_setopt($ch,CURLOPT_POSTFIELDS,$dat);
  curl_setopt($ch,CURLOPT_SSL_VERIFYPEER,0);
  curl_setopt($ch,CURLOPT_HTTPHEADER, $head);
  curl_setopt($ch,CURLOPT_ENCODING, TRUE);
  curl_setopt($ch,CURLOPT_COOKIEFILE,"TTC.txt");
  return json_decode(curl_exec($ch));
  curl_close($ch);
}
function datnick($idfb,$useragent){
$dat=http_build_query(array('iddat[]'=> $idfb, 'loai'=>'fb'));
$ch=curl_init();
	curl_setopt($ch, CURLOPT_URL,'https://tuongtaccheo.com/cauhinh/datnick.php');
	$head[]='Host: tuongtaccheo.com';
	$head[]='content-length: '.strlen($dat);
	$head[]='accept: */*';
	$head[]='x-requested-with: XMLHttpRequest';
	$head[]='content-type: application/x-www-form-urlencoded; charset=UTF-8';
	$head[]='cookie: TawkConnectionTime=0';
  curl_setopt($ch, CURLOPT_USERAGENT, $useragent);
	curl_setopt($ch,CURLOPT_FOLLOWLOCATION,TRUE);
  curl_setopt($ch,CURLOPT_RETURNTRANSFER, 1);
  curl_setopt($ch,CURLOPT_POST, 1);
  curl_setopt($ch,CURLOPT_POSTFIELDS,$dat);
  curl_setopt($ch,CURLOPT_SSL_VERIFYPEER,0);
  curl_setopt($ch,CURLOPT_HTTPHEADER, $head);
  curl_setopt($ch,CURLOPT_ENCODING, TRUE);
  curl_setopt($ch,CURLOPT_COOKIEFILE,"TTC.txt");
	return curl_exec($ch);
	curl_close($ch);
}
function getxuttc($useragent){
   $ch= curl_init();
  curl_setopt($ch, CURLOPT_URL, "https://tuongtaccheo.com/home.php");
  $head[]='Host: tuongtaccheo.com';
  $head[]='x-requested-with: XMLHttpRequest';
  $head[]='content-type: application/x-www-form-urlencoded; charset=UTF-8';
  $head[]='origin: https://tuongtaccheo.com';
  $head[]='cookie: TawkConnectionTime=0';
  curl_setopt($ch, CURLOPT_USERAGENT, $useragent);
  curl_setopt($ch,CURLOPT_RETURNTRANSFER, 1);
  curl_setopt($ch,CURLOPT_HTTPHEADER, $head);
  curl_setopt($ch,CURLOPT_ENCODING, TRUE);
  curl_setopt($ch,CURLOPT_COOKIEFILE,"TTC.txt");
  $data = curl_exec($ch);
  curl_close($ch);
preg_match('#id="soduchinh">(.+?)<#is', $data, $sd);
return $sd["1"];
}
function checkmail($useragent,$email,$head){
    $ch = curl_init();
  curl_setopt_array($ch, array(
  CURLOPT_URL=> "https://b-graph.facebook.com/auth/login?email=$email&password=vandatpiko29&access_token=6628568379|c1e620fa708a1d5696fb991c1bde5662&method=post",
  CURLOPT_USERAGENT=> $useragent,
  CURLOPT_HTTPHEADER=> $head,
  CURLOPT_RETURNTRANSFER => 1,
  CURLOPT_ENCODING=> TRUE
  ));
 return  json_decode(curl_exec($ch),true)["error"]['code'];
}
function nhanmail($loai,$mail,$somail,$so){
  $time = date('H:i:s');
echo "\033[1;33m[$so]"; usleep(30000); echo " \033[1;31m"; usleep(30000); echo "● \033[1;33m"; usleep(30000); echo "\033[1;31m"; usleep(30000); echo "●\033[1;35m "; usleep(30000); echo "[$time] \033[1;31m"; usleep(30000); echo "●"; usleep(30000); echo " \033[1;32m$mail \033[1;31m"; usleep(30000); echo "●\033[1;33m"; usleep(30000); echo " $loai \033[1;31m"; usleep(30000); echo "● "; usleep(30000); echo "\033[1;36m$somail \n";  
}
function layidlikesub($cookie,$loai,$link,$useragent,$head){
  $ch = curl_init();
    curl_setopt_array($ch, array(
    CURLOPT_URL=> $link,
    CURLOPT_USERAGENT =>$useragent,
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_COOKIE => $cookie,
    CURLOPT_HTTPHEADER => $head,
    CURLOPT_FOLLOWLOCATION => true,
    CURLOPT_CUSTOMREQUEST => "GET",
    CURLOPT_ENCODING => '',
    CURLOPT_HEADER => true));
    $data = curl_exec($ch);
 $num = explode('" />',explode('content="instagram://media?id=',$data)[1])[0];
if($loai == 'like'){
 return 'https://www.instagram.com/web/likes/'.$num.'/like/';
}else{
  return 'https://www.instagram.com/web/comments/'.$num.'/add/';
}
}
function laythongtin($cookie,$useragent){
  $ch = curl_init();
$head[] = "Host: www.instagram.com";
$head[] = "referer: https://www.instagram.com";
$head[] = "accept: */*";
$head[] = "content-type: application/x-www-form-urlencoded";
$head[] = "accept-language: vi-VN,vi;q=0.9,fr-FR;q=0.8,fr;q=0.7,en-US;q=0.6,en;q=0.5";
  curl_setopt_array($ch, array(
    CURLOPT_URL=> 'https://www.instagram.com/',
    CURLOPT_USERAGENT =>$useragent,
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_COOKIE => $cookie,
    CURLOPT_HTTPHEADER => $head,
    CURLOPT_FOLLOWLOCATION => true,
    CURLOPT_CUSTOMREQUEST => "GET",
    CURLOPT_ENCODING => '',
    CURLOPT_HEADER => true));
    $data = curl_exec($ch);
$xinta = explode('","',explode('"rollout_hash":"',$data)[1])[0];
$cookie = explode(';',explode('csrftoken=',$data)[1])[0];
$uid = explode('","is_joined_recently',explode('"id":"',$data)[1])[0];
$head[] = "x-csrftoken: $cookie";
$head[] = "x-ig-app-id: 1217981644879628";
$head[] = "x-instagram-ajax: $xinta";
return array($head,$uid);
}
function lamnhiemvu($cookie,$link,$useragent,$head){
  $ch = curl_init();
     curl_setopt($ch, CURLOPT_URL, $link);
	curl_setopt($ch, CURLOPT_USERAGENT, $useragent);
	curl_setopt($ch, CURLOPT_CUSTOMREQUEST,"POST");
	curl_setopt($ch, CURLOPT_ENCODING, '');
	curl_setopt($ch, CURLOPT_COOKIE, $cookie);
	curl_setopt($ch, CURLOPT_HTTPHEADER, $head);
	curl_setopt($ch, CURLOPT_HEADER, false);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
	curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);
$resut = json_decode(curl_exec($ch),true);
if (is_null($resut)){
  return '0';
}else if(strstr($resut['feedback_message'],'Chúng tôi hạn chế một số hoạt động để bảo vệ cộng đồng.')){
  return '1';
}else if($resut['status'] == 'ok'){
  return '2';
}
curl_close($ch);
}
function cmtig($cookie,$link,$msg,$useragent,$head){
  $ch = curl_init();
  $file = array('comment_text' => $msg,'replied_to_comment_id'=> '');
  curl_setopt($ch, CURLOPT_URL, $link);
	curl_setopt($ch, CURLOPT_USERAGENT, $useragent);
	curl_setopt($ch, CURLOPT_CUSTOMREQUEST,"POST");
	curl_setopt($ch, CURLOPT_ENCODING, '');
	curl_setopt($ch, CURLOPT_COOKIE, $cookie);
	curl_setopt($ch, CURLOPT_HTTPHEADER, $head);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt($ch, CURLOPT_POST, count($file));
	curl_setopt($ch, CURLOPT_POSTFIELDS,http_build_query($file));
	curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);
$resut = json_decode(curl_exec($ch),true);
if (is_null($resut)){
  return '0';
}else if(strstr($resut['feedback_message'],'Chúng tôi hạn chế một số hoạt động để bảo vệ cộng đồng.')){
  return '1';
}else if($resut['status'] == 'ok'){
  return '2';
}
curl_close($ch);
}
function getcookieig($user,$pass,$useragent){
$ch=curl_init();
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_URL, 'https://vipig.net/login.php');
curl_setopt($ch, CURLOPT_COOKIEJAR, "IST.txt");
curl_setopt($ch, CURLOPT_USERAGENT,$useragent);
$login = array('username' => $user,'password' => $pass,'submit' => ' ĐĂNG NHẬP');
curl_setopt($ch, CURLOPT_POST,count($login));
curl_setopt($ch, CURLOPT_POSTFIELDS,$login);
$data = curl_exec($ch);
if(strlen($data) > 20){
  return false;
}else{
  return '2';
}
curl_close($ch);
}
function getnvig($loai,$useragent){
 $ch=curl_init();
 curl_setopt($ch, CURLOPT_URL,'https://vipig.net/kiemtien'.$loai.'/getpost.php');
 $head[]='Host: vipig.net';
 $head[]='accept: application/json, text/javascript, *'.'/'.'*; q=0.01';
 $head[]='x-requested-with: XMLHttpRequest';
 curl_setopt($ch, CURLOPT_USERAGENT, $useragent);
 curl_setopt($ch,CURLOPT_FOLLOWLOCATION, TRUE);
 curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);
 curl_setopt($ch,CURLOPT_POST,1);
 curl_setopt($ch,CURLOPT_HTTPGET, true);
 curl_setopt($ch,CURLOPT_SSL_VERIFYPEER, 0);
 curl_setopt($ch,CURLOPT_HTTPHEADER, $head);
 curl_setopt($ch,CURLOPT_ENCODING, TRUE);
 curl_setopt($ch,CURLOPT_COOKIEFILE, "IST.txt");
 return json_decode(curl_exec($ch));
 curl_close($ch);
}
function nhantienig($loai,$id,$useragent){
  $ch= curl_init();
  curl_setopt($ch, CURLOPT_URL, 'https://vipig.net/kiemtien'.$loai.'/nhantien.php');
  $data = $id;
  $head[]='Host: vipig.net';
  $head[]='content-length: '.strlen($data);
  $head[]='x-requested-with: XMLHttpRequest';
  $head[]='content-type: application/x-www-form-urlencoded; charset=UTF-8';
  $head[]='origin: https://vipig.net';
  $head[]='cookie: TawkConnectionTime=0';
  curl_setopt($ch, CURLOPT_USERAGENT, $useragent);
  curl_setopt($ch,CURLOPT_FOLLOWLOCATION,TRUE);
  curl_setopt($ch,CURLOPT_RETURNTRANSFER, 1);
  curl_setopt($ch,CURLOPT_POST, 1);
  curl_setopt($ch,CURLOPT_POSTFIELDS,$data);
  curl_setopt($ch,CURLOPT_SSL_VERIFYPEER,0);
  curl_setopt($ch,CURLOPT_HTTPHEADER, $head);
  curl_setopt($ch,CURLOPT_ENCODING, TRUE);
  curl_setopt($ch,CURLOPT_COOKIEFILE,"IST.txt");
  if(json_decode(curl_exec($ch))->{'mess'}){
    return '2';
  }
  curl_close($ch);
}
function datnickig($idfb,$useragent){
$dat=http_build_query(array('iddat[]'=> $idfb));
$ch=curl_init();
	curl_setopt($ch, CURLOPT_URL,'https://vipig.net/cauhinh/datnick.php');
	$head[]='Host: vipig.net';
	$head[]='content-length: '.strlen($dat);
	$head[]='accept: */*';
	$head[]='x-requested-with: XMLHttpRequest';
	$head[]='content-type: application/x-www-form-urlencoded; charset=UTF-8';
	$head[]='cookie: TawkConnectionTime=0';
  curl_setopt($ch, CURLOPT_USERAGENT, $useragent);
	curl_setopt($ch,CURLOPT_FOLLOWLOCATION,TRUE);
  curl_setopt($ch,CURLOPT_RETURNTRANSFER, 1);
  curl_setopt($ch,CURLOPT_POST, 1);
  curl_setopt($ch,CURLOPT_POSTFIELDS,$dat);
  curl_setopt($ch,CURLOPT_HTTPHEADER, $head);
  curl_setopt($ch,CURLOPT_ENCODING, TRUE);
  curl_setopt($ch,CURLOPT_COOKIEFILE,"IST.txt");
	return curl_exec($ch);
	curl_close($ch);
}
function getxuig($useragent){
   $ch= curl_init();
  curl_setopt($ch, CURLOPT_URL, "https://vipig.net/home.php");
  $head[]='Host: vipig.net';
  $head[]='x-requested-with: XMLHttpRequest';
  $head[]='content-type: application/x-www-form-urlencoded; charset=UTF-8';
  $head[]='origin: https://tuongtaccheo.com';
  $head[]='cookie: TawkConnectionTime=0';
  curl_setopt($ch, CURLOPT_USERAGENT, $useragent);
  curl_setopt($ch,CURLOPT_RETURNTRANSFER, 1);
  curl_setopt($ch,CURLOPT_HTTPHEADER, $head);
  curl_setopt($ch,CURLOPT_ENCODING, TRUE);
  curl_setopt($ch,CURLOPT_COOKIEFILE,"IST.txt");
  $data = curl_exec($ch);
  curl_close($ch);
preg_match('#id="soduchinh">(.+?)<#is', $data, $sd);
return $sd["1"];
}
function geturl($useragent){
  $ch = curl_init();
  $headhot = ["Host: signup.live.com",
           "accept: text/html,application/xhtml+xml,application/xml;q=0,9,image/webp,image/apng,*/*;q=0.8"
           ,
           "user-agent: ".$useragent];
  curl_setopt_array($ch, [
    CURLOPT_URL=> "https://signup.live.com/signup",
    CURLOPT_RETURNTRANSFER=>TRUE,
    CURLOPT_COOKIEJAR=>"cookie.txt",
    CURLOPT_FOLLOWLOCATION=>TRUE,
    CURLOPT_HEADER=>TRUE,
    CURLOPT_HTTPHEADER=> $headhot,
    ]);
$resut = curl_exec($ch);
unset($headhot);
$headhot[] = "Host: signup.live.com";
$headhot[] = "x-ms-apiversion: 2";
$headhot[] = "accept: application/json";
$headhot[] = "uaid: ".explode('","',explode('"uaid":"',$resut)[1])[0];
$canary = explode('","',explode('"apiCanary":"',$resut)[1])[0];
$headhot[] = "canary: ".json_decode('["'.$canary.'"]')[0];
$headhot[] = "hpgid: ".(explode(',"',explode('"hpgid":',$resut)[1])[0]);
$chuoi = (explode('"},',explode('"tcxt":"',$resut)[1])[0]);
$headhot[] = "tcxt: ".json_decode('["'.$chuoi.'"]')[0];
$headhot[] = "uiflvr: 1001";
$headhot[] = "scid: 100118";
$headhot[] = "referer: https://signup.live.com/";
$headhot[] = "x-ms-apitransport: xhr";
$url = curl_getinfo($ch)['url'];
return $headhot;
}
function checkmaillive($headhot,$mail){
  $ch = curl_init();
  $uaid = str_replace('uaid: ','',$headhot[3]);
  $hpgid = str_replace('hpgid: ','',$headhot[5]);
$data = '{"signInName":"'.$mail.'","uaid":"'.$uaid.'","includeSuggestions":true,"uiflvr":1001,"scid":100118,"hpgid":'.$hpgid.'}';
$headhot[] = "content-length: ".strlen($data);
  curl_setopt_array($ch, [
    CURLOPT_URL=> "https://signup.live.com/API/CheckAvailableSigninNames?lic=1",
    CURLOPT_RETURNTRANSFER=>TRUE,
    CURLOPT_FOLLOWLOCATION=>TRUE,
    CURLOPT_CUSTOMREQUEST=>"POST",
    CURLOPT_POST=> 5,
    CURLOPT_POSTFIELDS=> $data,
    CURLOPT_HTTPHEADER=> $headhot,
    CURLOPT_COOKIEFILE=>"cookie.txt"
    ]);
return json_decode(curl_exec($ch),true);
}

?>