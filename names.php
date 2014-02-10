<?php
	
	$contributor = "
		Geeta Talwar,
		D. Jones,
		Heri Sim,
		Mind_remnant,
		George Mack,
		Maxim Logtenberg,
		Michael Noll-Hussong,
		Gabotronics,
		Prabhakar Saravan Kumar,
		Daniel Chow,
		America Interactive.com,
		Jon Landem,
		Nadim Smair,
		Jeffrey Putney,
		Jared eglinski,
		Black Hawk Down,
		Bauer Brauner Enterprise,
		Peter Houghton,
		Peter Gajar,
		Rajkumar Raval,
		Anonymous,
		David A. Cruz,
		Joel Parker Henderson,
		Aurora Thornhill";

	$contrib_array = explode(",", $contributor);

	sort($contrib_array);

	$ttl_contribs = count($contrib_array);

	for ($i=0; $i < $ttl_contribs; $i++) { 
		echo "<li>" . $contrib_array[$i] . "</li>";
	}

?>