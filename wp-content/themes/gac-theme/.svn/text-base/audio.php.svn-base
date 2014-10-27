<audio id="song" controls style="width: 100%;" ontimeupdate="updateTime()" preload="auto">
	<source src="<?php the_field( 'mp3_audio' ); ?>" type="audio/mpeg">
	<embed height="50" width="100" src="<?php the_field( 'mp3_audio' ); ?>">
</audio>
<div class="bkplayer">
	<!-- Div that switches rather or not to play or pause the song based off of song state -->
	<div class="songPlayPauseD"><div id="songPlayPause" onclick="playPause('song')"></div></div>
	<!-- Song Slider tracks progress on song time change, if you click it sets the distance into the song
	based on the percentage of where was clicked -->
	<div class="thesongsliderdiv"><div id="songSlider" onclick="setSongPosition(this,event)"><div id="trackProgress"></div></div></div>
	<!-- Div that updates with current song time while playing -->
	<div id="songTime">0:00 / 0:00</div>
	<!-- Volume Meter sets the new volume on click.  The Volume Status div is embedded inside so it can grow
	within bounds to simulate percentage feel -->
	<div class="thevolumesliderdiv"><div id="volumeMeter" onclick="setNewVolume(this,event)"><div id="volumeStatus"></div></div></div>
</div>