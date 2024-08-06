<?php
error_reporting(0);
header('Content-Type: text/json;charset=UTF-8',true,200);
$id = $_GET["id"];
$ids = array(
"dsxw"=>"4gtv-4gtv152",//东森新闻台
"dsxw2"=>"4gtv-4gtv152",//东森新闻台
"hsxw"=>"4gtv-4gtv052",//华视新闻
"hshd"=>"4gtv-4gtv041",//华视
"hshd2"=>"4gtv-4gtv041",//华视
"msxw"=>"litv-ftv13",//民视新闻台
"msxw2"=>"litv-ftv13",//民视新闻台
"tvbsxw"=>"4gtv-4gtv072",//TVBS新闻
"tvbsxw2"=>"4gtv-4gtv072",//TVBS新闻
"tvbs"=>"4gtv-4gtv073",//TVBS
"tvbs2"=>"4gtv-4gtv073",//TVBS
"dscjxw"=>"4gtv-4gtv153",//东森财经新闻台
"dscjxw2"=>"4gtv-4gtv153",//东森财经新闻台
"zsxw"=>"4gtv-4gtv074",//中视新闻
"ztxw"=>"4gtv-4gtv009",//中天新闻台
"ztxw2"=>"4gtv-4gtv009",//中天新闻台
"hyxw"=>"litv-longturn14",//寰宇新闻台
"msly"=>"litv-ftv07",//民视旅游台
"yzly"=>"litv-longturn17",//亚洲旅游台
"snhrjs"=>"4gtv-4gtv013",//视纳华仁纪实频道
"jtdy"=>"4gtv-4gtv061",//靖天电影台
"lhdy"=>"litv-longturn03",//龙华电影台
"ymswdy"=>"4gtv-4gtv011",//影迷数位电影台
"amc"=>"4gtv-4gtv017",//AMC最爱电影
"kjds"=>"4gtv-4gtv043",//客家电视台
"tvbsjc"=>"4gtv-4gtv067",//tvbs精采台
"tvbshl"=>"4gtv-4gtv068",//tvbs欢乐台
"lhkt"=>"litv-longturn01",//龙华卡通
"lhdy"=>"litv-longturn03",//龙华电影
"lhxj"=>"litv-longturn18",//龙华戏剧
"bsyd1"=>"litv-longturn07",//博斯运动1
"bsyd2"=>"litv-longturn08",//博斯运动2
"yzly"=>"litv-longturn17",//亚洲旅游台
"ms"=>"4gtv-4gtv002",//民视
"ms2"=>"4gtv-4gtv002",//民视
"bdzh"=>"4gtv-4gtv039",//八大综艺台
"zglgtx"=>"4gtv-4gtv006",//猪哥亮歌厅秀
"ztmsly"=>"4gtv-live123",//中天美食旅游
"ztzh"=>"4gtv-live033",//中天综合台
);
$keys = array(
"dsxw"=>"avc1_2000000=3-mp4a_138000_zho=6",//东森新闻台
"dsxw2"=>"avc1_2000000=1-mp4a_138000_zho=6",//东森新闻台
"hsxw"=>"avc1_3000000=3-mp4a_133000_zho=2",//华视新闻
"hshd"=>"avc1_3000000=3-mp4a_133000_zho=6",//华视
"hshd2"=>"avc1_3000000=1-mp4a_133000_zho=6",//华视
"msxw"=>"avc1_2000000=3-mp4a_122000_zho=7",//民视新闻台
"msxw2"=>"avc1_2000000=1-mp4a_122000_zho=7",//民视新闻台
"tvbsxw"=>"avc1_3000000=3-mp4a_130000_zho=2",//TVBS新闻
"tvbsxw2"=>"avc1_3000000=1-mp4a_130000_zho=2",//TVBS新闻
"tvbs"=>"avc1_3000000=3-mp4a_130000_zho=2",//TVBS
"tvbs2"=>"avc1_3000000=1-mp4a_130000_zho=2",//TVBS
"dscjxw"=>"avc1_2000000=3-mp4a_129000=6",//东森财经新闻台
"dscjxw2"=>"avc1_2000000=1-mp4a_129000=6",//东森财经新闻台
"zsxw"=>"avc1_3000000=3-mp4a_116000_zho=2",//中视新闻
"ztxw"=>"avc1_3000000=8-mp4a_136000_zho=7",//中天新闻台
"ztxw2"=>"avc1_3000000=2-mp4a_136000_zho=7",//中天新闻台
"hyxw"=>"avc1_2000000=3-mp4a_166000_zho=6",//寰宇新闻台
"msly"=>"avc1_2000000=3-mp4a_134000_zho=7",//民视旅游台
"yzly"=>"avc1_2936000=4-mp4a_128000=2",//亚洲旅游台
"snhrjs"=>"avc1_2000000=3-mp4a_122000_zho=2",//视纳华仁纪实频道
"jtdy"=>"avc1_2000000=1-mp4a_132000_zho=7",//靖天电影台
"lhdy"=>"avc1_2936000=4-mp4a_127000=2",//龙华电影台
"ymswdy"=>"avc1_2000000=1-mp4a_136000=6",//影迷数位电影台
"amc"=>"avc1_2000000=1-mp4a_139000_zho=6",//AMC最爱电影
"kjds"=>"avc1_2000000=1-mp4a_138000_zho=6",//客家电视台
"tvbsjc"=>"avc1_2000000=1-mp4a_138000_zho=8",//tvbs精采台
"tvbshl"=>"avc1_2000000=1-mp4a_138000_zho=7",//tvbs欢乐台
"lhkt"=>"avc1_2936000=4-mp4a_127000=2",//龙华卡通
"lhdy"=>"avc1_2000000=5-mp4a_138000_zho=2",//龙华电影
"lhxj"=>"avc1_2000000=5-mp4a_138000_zho=2",//龙华戏剧
"bsyd1"=>"avc1_2000000=5-mp4a_138000_zho=2",//博斯运动1
"bsyd2"=>"avc1_2000000=5-mp4a_138000_zho=2",//博斯运动2
"yzly"=>"avc1_2000000=5-mp4a_138000_zho=2",//亚洲旅游台
"ms"=>"avc1_2000000=3-mp4a_138000_zho=10",//民视
"ms2"=>"avc1_2000000=1-mp4a_138000_zho=10",//民视
"bdzh"=>"avc1_2000000=1-mp4a_136000=6",//八大综艺台
"zglgtx"=>"avc1_2000000=1-mp4a_136000=6",//猪哥亮歌厅秀
"ztmsly"=>"avc1_2000000=1-mp4a_136000=6",//中天美食旅游
"ztzh"=>"avc1_3000000=8-mp4a_136000_zho=7",//中天综合台

);
$time = time();
$seq = intval(explode(".",strval(($time - 1420070500) / 4))[0]);
$begin_ts = $seq * 4;
$tss = 12;//切多少个ts
$current = "#EXTM3U"."\r\n";
$current.="#EXT-X-VERSION:3"."\r\n";
$current.="#EXT-X-TARGETDURATION:4"."\r\n";
$current.="#EXT-X-MEDIA-SEQUENCE:".strval($seq)."\r\n";
for($i=0;$i<$tss;$i++){
$current.="#EXTINF:4,"."\r\n";
$current.="https://litvpc-hichannel.cdn.hinet.net/live/pool/{$ids[$id]}/litv-pc/{$ids[$id]}-{$keys[$id]}-begin=".strval($begin_ts)."0000000-dur=40000000-seq=".strval($seq).".ts"."\r\n";
$begin_ts = $begin_ts + 4;
$seq_m3u8 = $seq + 1;
}
print_r($current);
?>