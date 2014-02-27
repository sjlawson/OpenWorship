<!DOCTYPE html>
    
<html>

<head>
    <link rel="stylesheet" type="text/css" href="vidwinstyles.css" />
    
</head>
<body>

<script type="text/javascript">
    var myNewWindow;
    var currentSlide;
    
    function closeProjector() {
        myNewWindow.close();
    }
    
    function loadProjectorWindow() {
        this.myNewWindow = window.open();
        myNewWindow.document.body.style.backgroundColor="black";
        
        
                var csslink = document.createElement("link");
                    csslink.href = "http://workspace.com/OpenWorship/vidwinstyles.css";
                    csslink.type = "text/css";
                    csslink.rel = "stylesheet";
                    myNewWindow.document.getElementsByTagName("head")[0].appendChild(csslink);

                var videoElement = myNewWindow.document.createElement("video");
                videoElement.setAttribute("id","proj_video_background");
                videoElement.setAttribute("preload","auto");
            
                videoElement.setAttribute("autoplay","true");
                videoElement.setAttribute("loop","loop");
                videoElement.setAttribute("muted","muted");
                videoElement.setAttribute("volume","0");
                
                var vidSrc = myNewWindow.document.createElement("source");
                vidSrc.setAttribute("src","http://workspace.com/OpenWorship/videos/bgloop.mp4");
                vidSrc.setAttribute("type","video/mp4");
                
                videoElement.appendChild(vidSrc);
                
                var lyric_block = myNewWindow.document.createElement("div");
                lyric_block.setAttribute("id","proj_lyric_block");
                lyric_block.innerHTML = this.currentSlide;
                
                var vidContainer = myNewWindow.document.createElement("div");
                vidContainer.setAttribute("id","vidContainer");
                
                vidContainer.appendChild(lyric_block);
                
                
                vidContainer.appendChild(videoElement);
              myNewWindow.document.body.appendChild(vidContainer);
              // myNewWindow.document.body.appendChild(pElement);
              
        
    }
    
    function change_content(content_element) {
        var content = content_element.innerHTML;
        
        if(myNewWindow != null) {
            var lyricElement = myNewWindow.document.getElementById("proj_lyric_block");
            lyricElement.innerHTML = content;
        }
        var previewElement = document.getElementById("lyric_block");        
        previewElement.innerHTML = content;

        var slideChildren = document.getElementById("slides").childNodes;
        for (var i = 0; i < slideChildren.length; i++) {
          var childSlide = slideChildren[i];
          
          if(childSlide.nodeType == 1)
          childSlide.style.backgroundColor="white";
        }
        this.currentSlide = content;
        content_element.style.backgroundColor="#A2D3A2"
    }
    document.addEventListener("DOMContentLoaded", function() {
        currentSlide = document.getElementById("slides").children[0].innerHTML;
        document.getElementById("slides").children[0].style.backgroundColor = "#A2D3A2";
    });
</script>
<!--<video id="video_background" loop="loop" muted="muted" volume="0" > 
<source src="videos/bgloop.mp4" type="video/mp4"> 
Video not supported </video> -->

<button onclick="loadProjectorWindow()">Open Projector Window</button> |
<button onclick="closeProjector()">Close Projector Window</button>
<br />

<div id="service_menu">
    <p style="background-color: #A2D3A2">God of Wonders</p>
    <p>Glory Come Down</p>
</div>

<div id="slides">
<div class="slide_content" onclick="change_content(this)" >
    <p>Lord of all creation</p>
    <p>Of water, earth, and sky</p>
    <p>The heavens are your tabernacle</p>
    <p>Glory to the Lord on high</p>
</div>
    
<div class="slide_content" onclick="change_content(this)" >
    <p>God of wonders beyond <br />our galaxy,</p>
    <p>You are holy, holy.</p>
    <p>The universe reflects <br />your majesty,</p>
    <p>You are holy, holy.</p>
</div>

<div class="slide_content" onclick="change_content(this)" >
    <p>Lord of Heaven and Earth,</p>
    <p>Lord of Heaven and Earth</p>
</div>
<div class="slide_content" onclick="change_content(this)" >
    <p>Halleluja,</p>
    <p>To the Lord of Heaven and Earth</p>
</div>
</div>

<div id="vidPreviewContainer">
    <div id="lyric_block">
    <p>Lord of all creation</p>
    <p>Of water, earth, and sky</p>
    <p>The heavens are your tabernacle</p>
    <p>Glory to the Lord on high</p>
    </div>
</div>    

    
</body> 
    
</html>
