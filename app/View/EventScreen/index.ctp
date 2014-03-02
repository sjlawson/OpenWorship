<?php
$this->Html->script('jquery-current', array('inline' => false));
$this->Html->script('ow_main', array('inline' => false));
$this->Html->css('vidwinstyles', null, array('inline' => false));

?>

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

