<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>视频 - Admin</title>
    <meta name="renderer" content="webkit">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link href="https://vjs.zencdn.net/7.4.1/video-js.css" rel="stylesheet">
</head>

<body>
<img src="http://clusterctl.xyz/video/product/20200409/43vTAoc7/360/43vTAoc7.jpg" alt="" class="">
<video id="video-active" width="360" controls autoplay>
    <source src="http://clusterctl.xyz/video/product/20200409/43vTAoc7/360/43vTAoc7.mp4" type="video/mp4">
</video>
<video id="myvideo" width="360" class="video-js vjs-default-skin vjs-big-play-centered" controls preload="auto" data-setup='{}' >
    <source id="source" src="http://clusterctl.xyz/video/product/20200409/43vTAoc7/360/mmm.m3u8" type="application/x-mpegURL">
</video>

</body>
</html>

<script src='https://vjs.zencdn.net/7.4.1/video.js'></script>
<!--<script src="https://cdnjs.cloudflare.com/ajax/libs/videojs-contrib-hls/5.15.0/videojs-contrib-hls.min.js" type="text/javascript"></script>-->
<script>
    // videojs 简单使用
    var myVideo = videojs('myvideo', {
        bigPlayButton: true,
        textTrackDisplay: false,
        posterImage: false,
        errorDisplay: false,
    });
    myVideo.play();
</script>