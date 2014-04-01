<?php
$this->Html->script('jquery-current', array('inline' => false));
$this->Html->script('ow_main', array('inline' => false));
$this->Html->css('vidwinstyles', null, array('inline' => false));

?>

<!--<video id="video_background" loop="loop" muted="muted" volume="0" > 
<source src="videos/bgloop.mp4" type="video/mp4"> 
Video not supported </video> -->

<button id="loadProjector" onclick="loadProjectorWindow()">Open Projector Window</button> |
<button id="closeProjector" onclick="closeProjector()">Close Projector Window</button> |
<button id="clearSlide" onclick="blackScreen()">Black Screen</button>
<br />

<div class='column'>
    <div id="service_menu">
        <p style="background-color: #A2D3A2">God of Wonders</p>
        <p>Glory Come Down</p>
    </div>
</div>

<div class='column'>
    <div id="vidPreviewContainer">
        <div id="preview_content_block">
        </div>
    </div>
    
    <div class="state_button">Go Live!</div>
    <div class="spacer"></div>
    <div class="state_button">Edit Slide</div>
    <div class="state_button">Add Slide</div>
    
    
</div>

<div class='column'>
    <div id="slides"></div>
</div>

<div class='column'>
    <div id="vidLiveContainer">
        <div id="live_content_block"></div>
    </div>
</div>