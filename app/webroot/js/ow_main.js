 var myNewWindow;
    var currentSlide;
    var lyricElement;
    var previewElement;
    
    function closeProjector() {
        myNewWindow.close();
    }
    
    function initProjectorWindow() {
        var NewWindow = window.open("about:blank", '_blank','width=800,height=600');
        alert("Preparing window, press okay to continue");
        return NewWindow;
    }
    
    function loadProjectorWindow() {
        myNewWindow = initProjectorWindow();
            
        myNewWindow.document.body.style.backgroundColor="black";
        
        
                var csslink = document.createElement("link");
                    csslink.href = "http://workspace.com/OpenWorship/videos/vidwinstyles.css";
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
                        
                lyricElement = myNewWindow.document.getElementById("proj_lyric_block");
                
    }
    
    function loadLiveSlides(id) {
        
        var slideData;
        $.get("SongSlides/loaddata?id="+id, function( data ) {
            slideData = $.parseJSON(data);
            var slideArr = slideData.content.split("<hr />");
            var slideContent = "";
            for(var slide in slideArr) {
                slideContent += "<div class='slide_content'>";
                slideContent += slideArr[slide] != undefined ? slideArr[slide] : "";
                slideContent += "</div>";
            }
            
                $( "#slides" ).html( slideContent );
                $('.slide_content').click(function() { change_content(this); });
              });
        
         var loadedSlides = $("#slides").children();
         
         //currentSlide = loadedSlides[0];
         // alert(document.getElementById("slides").childNodes[0]);
        document.getElementById("slides").children[0].style.backgroundColor = "#A2D3A2";
        
    }
    
    function change_content(content_element) {
        var content = (content_element != undefined ) ? content_element.innerHTML : "";
        
        if(myNewWindow != null) {
          //  lyricElement = myNewWindow.document.getElementById("proj_lyric_block");
            lyricElement.innerHTML = content;
        }
        //previewElement = document.getElementById("lyric_block");        
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
    
    function clearSlide() {
        if(myNewWindow != undefined) {
           lyricElement.innerHTML = "";
           previewElement.innerHTML = "";
        }
    }
    
    $(document).ready(function() {
        previewElement = document.getElementById("lyric_block"); 
        loadLiveSlides(1);
        // currentSlide = document.getElementById("slides").children[0].innerHTML;
        // document.getElementById("slides").children[0].style.backgroundColor = "#A2D3A2";
    });