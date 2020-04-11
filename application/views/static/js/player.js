

function initPlayers () {
    // dp
    window.dp = new DPlayer({
        container: document.getElementById('dplayer'),
        preload: 'none',
        autoplay: false,
        theme: '#FADFA3',
        loop: true,
        screenshot: true,
        hotkey: true,
        logo: 'https://i.loli.net/2019/06/06/5cf8c5d94521136430.png',
        volume: 0.2,
        mutex: true,
        video: {
           quality: [{
                 name: 'HD',
                 url: 'https://api.dogecloud.com/player/get.mp4?vcode=5ac682e6f8231991&userId=17&ext=.mp4',
                 type: 'normal'
             }, {
                 name: 'SD',
                 url: 'https://api.dogecloud.com/player/get.mp4?vcode=5ac682e6f8231991&userId=17&ext=.mp4',
                 type: 'normal'
             }],
             defaultQuality: 1,
             pic: 'https://i.loli.net/2019/06/06/5cf8c5d9c57b510947.png'
        },
         highlight: [
        {
            time: 20,
            text: '这是第 20 秒',
        },
        {
            time: 120,
            text: '这是 2 分钟',
        },
		],
    });
}

var adtime=false;
var daojishi;

function lxfEndtime(){
  $t=$('#t').html();
  if($t!=0){
    $('#t').html($t-1);
	if( $t <= 4){
		$('.close').show();
	}
    daojishi=setTimeout("lxfEndtime()",1000);
  }else{    
    $('#player_adimg').hide();
	$('#dplayer').show();
    $('#t').html(6);
	adtime = false;
    clearTimeout(daojishi);
	window.dp.play();
  }
};

function displayAd(){
	$('#t').html(10);//重置广告等待时间
	clearTimeout(daojishi)
	$('#pause_adimg').hide();
	$('.close').click(function(){
	adtime=false;
    $('#player_adimg').hide();
	$('#pause_adimg').hide();
	$('#dplayer').show();
    $('#t').html(10);
	window.dp.play();
    clearTimeout(daojishi);});
  
	if ( $("#player_adimg").length > 0) {
			adtime = true;
			$('#player_adimg').show();
			$('#dplayer').hide();
			$('.close').hide();
			$('.ad_time').animate({width:110,height:29},'fast');
			lxfEndtime();
	}else{
		window.dp.play();
	}
}


function initPlayList(){
	var episodeInfo;
	$("#EpisodesList li").each(function(index,obj) {
		episodeInfo = $(obj).text().split(',');
		if($("#playlist #js"+episodeInfo[0]).text()){ //此集已存在
			//console.log(episodeInfo[0]+'此集已存在')
			$("#playlist #js"+episodeInfo[0]).attr({
				"data-url":$("#playlist #js"+episodeInfo[0]).attr("data-url")+"|"+episodeInfo[1]+','+episodeInfo[2],
			});
		}else{ //创建此集
			//console.log(episodeInfo[0]+'创建此集')
			var node = document.createElement("li");
			node.innerHTML='<a data-num="'+episodeInfo[0]+'" href="javascript:;" class="btn-play-source am-btn am-btn-default lipbtn" title="" data-url="'+episodeInfo[1]+','+episodeInfo[2]+'" onclick="bofang(this)" id="js'+episodeInfo[0]+'">第'+episodeInfo[0]+'集</a>';
			console.log(node.innerHTML)
			$("#playlist").append(node);
		}
	});
	
	juji = location.href;
	num = juji.indexOf("#");
	juji = num>0?juji.substr(num + 1):1;
	if($("#playlist #js"+juji).text()){
		console.log($("#playlist #js"+juji).text());
		$("#playlist #js"+juji).click();
	}else{
		$("#playlist #js1").click();
	}
}

function bofang(obj){
	$("#playlist li").find('a').removeClass("jkbtn1");
	$(obj).addClass("jkbtn1");
	$(".jjpos").text($(obj).text());
	Codes = $(obj).attr("data-url").split('|');  //所有码率
	var Moives = {}; 
	var Moive_info;
	Moive_DefaultCode=$.cookie('Moive_DefaultCode')||'1080P';
	Moive_DefaultVolume=$.cookie('Moive_DefaultVolume')||0.5;
	Moive_defaultQuality=0;
	for(var i = 0; i < Codes.length; i++){
		Movice_Code = Codes[i].split(",");
		Moive_info = {'name':Movice_Code[0], 'url':Movice_Code[1],'type':'normal'}; 
		Moives[i]= Moive_info;
		if(Moive_DefaultCode==Movice_Code[0]){
			Moive_defaultQuality = i;
		}
	}

	
	if(window.dp)
		window.dp.destroy();
	//重新初始化播放器
	window.dp = new DPlayer({
        container: document.getElementById('dplayer'),
        preload: 'none',
        autoplay: false,
        theme: '#FADFA3',
        loop: false,
        screenshot: true,
        hotkey: true,
        logo: 'https://i.loli.net/2019/06/06/5cf8c5d94521136430.png',
        volume: Moive_DefaultVolume,
        mutex: true,
        video: {
			quality: Moives,
            defaultQuality: Moive_defaultQuality,
            pic: $("#EpisodesList").attr("data-img")||'https://i.loli.net/2019/06/06/5cf8c5d9c57b510947.png'
        },
    });

	window.dp.on('quality_end', function() {//记录用户最后一次的分辨率
		$.cookie("Moive_DefaultCode", window.dp.quality.name, {expires: 365});
		//console.log('记住用户默认码率'+$.cookie('Moive_DefaultCode'));
	});
	
	window.dp.on('volumechange', function() {//记录用户最后一次的音量
		$.cookie("Moive_DefaultVolume", window.dp.volume(), {expires: 365});
	});
	window.dp.on('ended', function() {
		//console.log('自动播放下一集');
		setTimeout('$(".jkbtn1.btn-play-source").parent().next().find(".btn-play-source").click();',2000);
	});
	
	window.dp.on('pause',function() {
			//console.log('暂停一下');
			$('#pause_adimg').show();
	});
	
	window.dp.on('play',function() {
		console.log('开始播放'+window.dp.video.src);
		if(adtime){
		//	console.log('想的美,广告还没放完呢');
			$('#pause_adimg').hide();
			$('#player_adimg').show();
			$('#dplayer').hide();
		}else{
			$('#pause_adimg').hide();
			$('#player_adimg').hide();
			$('#dplayer').show();
		}
	});
	//console.log($(obj).data("num"));
	window.history.pushState(null,null,'#'+$(obj).data("num"))
	displayAd();
}

//上一集
 $("#btn-prev").click(function() {
	if($(".jkbtn1.btn-play-source").parent().prev().find(".btn-play-source"))
		$(".jkbtn1.btn-play-source").parent().prev().find(".btn-play-source").click();
});
// 下一集
$("#btn-next").click(function() {
	if($(".jkbtn1.btn-play-source").parent().next().find(".btn-play-source"))
		$(".jkbtn1.btn-play-source").parent().next().find(".btn-play-source").click();
});


initPlayList();
//initPlayers();