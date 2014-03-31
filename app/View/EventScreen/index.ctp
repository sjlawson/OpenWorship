<?php
$this->Html->script('jquery-current', array('inline' => false));
$this->Html->script('ow_main', array('inline' => false));
$this->Html->css('vidwinstyles', null, array('inline' => false));

?>

<!--<video id="video_background" loop="loop" muted="muted" volume="0" > 
<source src="videos/bgloop.mp4" type="video/mp4"> 
Video not supported </video> -->

<button onclick="loadProjectorWindow()">Open Projector Window</button> |
<button onclick="closeProjector()">Close Projector Window</button> |
<button onclick="clearSlide()">Black Screen</button>
<br />

<div id="service_menu">
    <p style="background-color: #A2D3A2">God of Wonders</p>
    <p>Glory Come Down</p>
</div>



<div id="vidPreviewContainer">
    <div id="lyric_block">
    </div>
</div>    
    <script type="text/javascript">

    </script>
<div id="slides">



</div>