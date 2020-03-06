<?php
/*****************************************/
/**			CONFIGURATIONS				**/


/** Chemin du logo  **/
$path_logo	=	'';

/** Nombre d'heures avant que la popup se ré-affiche **/
$nb_hours	=	4;

/** Liens visible vers les sites (doit être les mêmes que sur le deuxieme fichier) **/
$links		=	array(
	array(
		'nom'		=>	"Name1",
		'url'		=>	"page1.html",
		'txt_hover'	=>	"Your Text-hover here",
		'txt_bottom'=>	"Your message here"
	),
	array(
		'nom'		=>	"Name1",
		'url'		=>	"page1.html",
		'txt_hover'	=>	"Your Text-hover here",
		'txt_bottom'=>	"Your message here"
	),
	array(
		'nom'		=>	"Name1",
		'url'		=>	"page1.html",
		'txt_hover'	=>	"Your Text-hover here",
		'txt_bottom'=>	"Your message here"
	),
);

/*****************************************/
?>

<style>
	body {
		margin: 0px;
		padding: 0px;
	}
	
	#wrapper_machine-slot * {
		box-sizing: border-box;
		-o-box-sizing: border-box;
		-moz-box-sizing: border-box;
		-webkit-box-sizing: border-box;
	}
	
	#popup_machine-slot, #machine-slot {
		background: url('./popup/sprites.png') no-repeat;
	}
	
	#wrapper_machine-slot {
		position: fixed;
		display: block;
		
		top: 0;
		left: 0;
		
		width: 100%;
		height: 100%;
		
		background: rgba(0,0,0,0.3);
		opacity: 0;
		
		transition: opacity 600ms linear;
		-o-transition: opacity 600ms linear;
		-moz-transition: opacity 600ms linear;
		-webkit-transition: opacity 600ms linear;
		
		z-index: -1;
	}
	
	#wrapper_machine-slot.open {
		opacity: 1;
	}
	
	#popup_machine-slot {
		position: relative;
		display: block;
		
		top: 0px;
		left: 0px;
		
		width: 634px;
		height: 426px;
		
		margin: 0;
		padding: 0;
		
		background-position: 0 0;
		border: 2px solid #fff;
		border-radius: 5px;
		box-shadow: 0 0 10px 2px #333;
		
		z-index: 95;
	}
	
	#close_machine-slot {
		position: absolute;
		
		top: 0;
		right: 5px;
		
		color: #fff;
		font-size: 16px;
		font-weight: normal;
		font-family: "Arial";
		
		opacity: 0.6;
		
		cursor: pointer;
	}
	
	#logo-site_machine-slot {
		position: relative;
		display: block;
		
		width: 289px;
		min-height: 70px;
		
		margin: 20px auto;
		padding: 0;
				
		background-size: contain;
	}
	
	#machine-slot {
		position: relative;
		
		width: 462px;
		height: 224px;
	
		margin: 0 auto;
		padding: 30px 27px;
		
		background-position: 0 -430px ;
	}
	
	#machine-slot .casino-roll {
		position: relative;
		display: inline-block;
		
		margin: 0 6px;
		
		width: 120px;
		height: 160px;
		
		border: 1px solid #fff;
		background: linear-gradient(#6e6847 0%, #fdf8ca 20%, #fdf8ca 60%, #45401e 100%);
		
		cursor: pointer;
	}
	
	#machine-slot .casino-roll #casino1 {
		position: relative;
		display: block;
		
		width: 120px;
		height: 160px;
		
		background: url('./popup/sprites.png') no-repeat;
		background-position: -645px -320px;
		
		animation: rolls1 800ms 6s linear 1 forwards;
		-o-animation: rolls1 800ms 6s linear 1 forwards;
		-moz-animation: rolls1 800ms 6s linear 1 forwards;
		-webkit-animation: rolls1 800ms 6s linear 1 forwards;
	}
	
	#machine-slot .casino-roll #casino2 {
		position: relative;
		display: block;
		
		width: 120px;
		height: 160px;
		
		background: url('./popup/sprites.png') no-repeat;
		background-position: -776px -320px;
		
		animation: rolls2 1.2s 6s ease 1 forwards;
		-o-animation: rolls2 1.2s 6s ease 1 forwards;
		-moz-animation: rolls2 1.2s 6s ease 1 forwards;
		-webkit-animation: rolls2 1.2s 6s ease 1 forwards;
	}
	
	#machine-slot .casino-roll #casino3 {
		position: relative;
		display: block;
		
		width: 120px;
		height: 160px;
		
		background: url('./popup/sprites.png') no-repeat;
		background-position: -906px -320px;
		
		animation: rolls3 600ms 6s linear 2 forwards;
		-o-animation: rolls3 600ms 6s linear 2 forwards;
		-moz-animation: rolls3 600ms 6s linear 2 forwards;
		-webkit-animation: rolls3 600ms 6s linear 2 forwards;
	}
	
	#machine-slot .casino-roll > .hover {
		display: none;
		
		position: absolute;
		
		top: 0px;
		left: 0px;
		
		width: 100%;
		height: 100%;
		
		margin: 0;
		padding: 5px;
		
		background: rgba(32,32,32,0.9);
	}
		
	#machine-slot .casino-roll:hover {	
		border: 1px solid #ffe734;
	}
		
	#machine-slot .casino-roll:hover > .hover {
		display: block;
	}
	
	#machine-slot .casino-roll > .hover > .image {
		position: relative;
		display: block;
		
		width: 100px;
		height: 51px;
		
		margin: 5px auto 10px auto;
		padding: 0;
		
		background: url('./popup/sprites.png');
	}
	
	
	#machine-slot .casino-roll:nth-child(1) > .hover > .image {
		background-position: -523px -452px ;
	}
	
	
	#machine-slot .casino-roll:nth-child(2) > .hover > .image {
		background-position: -523px -514px ;
	}
	
	
	#machine-slot .casino-roll:nth-child(3) > .hover > .image {
		background-position: -526px -584px ;
	}
	
	#machine-slot .casino-roll > .hover > .text {
		font-family: Arial;
		font-size: 14px;
		color: #fff;
		font-weight: bold;
		text-align: center;
	}
	
	#machine-slot .casino-roll > .hover > button {
		position: absolute;
		display: block;
		
		left: 0px;
		bottom: 0px;
		
		width: 110px;
		
		margin: 4px;
		padding: 4px;
		
		color: #fff;
		font-family: Arial;
		font-size: 15px;
		
		transition: text-shadow 300ms ease;
		-o-transition: text-shadow 300ms ease;
		-moz-transition: text-shadow 300ms ease;
		-webkit-transition: text-shadow 300ms ease;
		
		border: none;
		background: #b5262c;
		
		cursor: pointer;
	}
	
	#machine-slot .casino-roll > .hover > button:hover {
		text-shadow: 0px 0px 7px #fff;
	}
	
	#texte_machine-slot {
		position: relative;
		display: block;
		
		width: 462px;
		height: 60px;
		
		margin: 10px auto;
		
		text-align: center;
		font-size: 16px;
		color: #000;
		font-family: Arial;
	}
	
	/** ANIMATION CASINO 1 **/
	@keyframes rolls1 {
		0% 		{ 	background-position-y: -320px; 	}
		100%	{ 	background-position-y: 0px; 	}
	}
	
	@-o-keyframes rolls1 {
		0% 		{ 	background-position: -645px -320px; 	}
		100%	{ 	background-position: -645px 0px; 	}
	}
	
	@-moz-keyframes rolls1 {
		0%	 	{ 	background-position: -645px -320px; 	}
		100%	{ 	background-position: -645px 0px; 	}
	}
	
	@-webkit-keyframes rolls1 {
		0%	 	{ 	background-position-y: -320px; 	}
		100%	{ 	background-position-y: 0px; 	}
	}
	
	/** ANIMATION CASINO 2 **/
	@keyframes rolls2 {
		0% 		{ 	background-position-y: -320px; 	}
		100%	{ 	background-position-y: -10px; 	}
	}
	
	@-o-keyframes rolls2 {
		0% 		{ 	background-position: -776px -320px; 	}
		100%	{ 	background-position: -776px -10px; 	}
	}
	
	@-moz-keyframes rolls2 {
		0%	 	{ 	background-position: -776px -320px; 	}
		100%	{ 	background-position: -776px -10px; 	}
	}
	
	@-webkit-keyframes rolls2 {
		0%	 	{ 	background-position-y: -320px; 	}
		100%	{ 	background-position-y: -10px; 	}
	}
	
	/** ANIMATION CASINO 3 **/
	@keyframes rolls3 {
		0% 		{ 	background-position-y: -320px; 	}
		100%	{ 	background-position-y: 0px; 	}
	}
	
	@-o-keyframes rolls3 {
		0% 		{ 	background-position: -906px -320px; 	}
		100%	{ 	background-position: -906px 0px; 	}
	}
	
	@-moz-keyframes rolls3 {
		0%	 	{ 	background-position: -906px -320px; 	}
		100%	{ 	background-position: -906px 0px; 	}
	}
	
	@-webkit-keyframes rolls3 {
		0%	 	{ 	background-position-y: -320px; 	}
		100%	{ 	background-position-y: 0px; 	}
	}
</style>

<div id="wrapper_machine-slot">
	<div id="popup_machine-slot">
		<span id="close_machine-slot" onclick="remove_popup();">x</span>
		<div id="logo-site_machine-slot"></div>
		
		<div id="machine-slot">
			<div class="casino-roll">
				<span id="casino1"></span>
				<span class="hover" data="<?= $links[0]['txt_bottom']; ?>" url="<?= $links[0]['url']; ?>">
					<div class="image"></div>
					<div class="text"><?= $links[0]['txt_hover']; ?></div>
					<button onclick="return false;">Click Here</button>
				</span>
			</div>
			<div class="casino-roll">
				<span id="casino2"></span>
				<span class="hover" data="<?= $links[1]['txt_bottom']; ?>" url="<?= $links[1]['url']; ?>">
					<div class="image"></div>
					<div class="text"><?= $links[1]['txt_hover']; ?></div>
					<button onclick="return false;">Click Here</button>
				</span>
			</div>
			<div class="casino-roll">
				<span id="casino3"></span>
				<span class="hover" data="<?= $links[2]['txt_bottom']; ?>" url="<?= $links[2]['url']; ?>">
					<div class="image"></div>
					<div class="text"><?= $links[2]['txt_hover']; ?></div>
					<button onclick="return false;">Click Here</button>
				</span>
			</div>
		</div>
		
		<div id="texte_machine-slot">
		</div>
	</div>
</div>

<script>
	//setCookie("timer-popup_machine-slot", "", -1);
	// Evenement sur l'ouverture de la popup
	// Test si déjà ouverte au cours des 4 dernieres heures, si non on ouvre
	if ( getCookie("timer-popup_machine-slot") == null ) {		
			setTimeout(function() {
				
				document.getElementById('wrapper_machine-slot').style.zIndex	=	99;
				
				// Lancement du fondu 200ms après
				setTimeout(function() {
				    document.getElementById('wrapper_machine-slot').className		=	'open';
				    // Centrage de la popup
				    var popup	=	document.getElementById('popup_machine-slot');
				    
				    popup.style.top		=	((window.innerHeight-popup.offsetHeight)/2)+'px';
				    popup.style.left	=	((window.innerWidth-popup.offsetWidth)/2)+'px';
				    
				    window.onresize 	=	function() {
				    		popup.style.top		=	((window.innerHeight-popup.offsetHeight)/2)+'px';
				    		popup.style.left	=	((window.innerWidth-popup.offsetWidth)/2)+'px';
				    }
				    // Fin Centrage de la popup
				    
				    // Dépôt du cookie d'utlisation : 4 = 4 heures
				    setCookie("timer-popup_machine-slot", "used", <?= $nb_hours; ?>);
				}, 500);
				
			}, 4200);
	} else {
		document.getElementById('wrapper_machine-slot').parentNode.removeChild( document.getElementById('wrapper_machine-slot') );
	}
	// Fin de l'event sur l'ouverture de la popup
	
	
	
	// Mise en place des évènements sur les hovers des cases de la machine à sous pour afficher le texte en bas.
	var hovers	=	document.getElementsByClassName('hover');
	for (var i=0; i<hovers.length; i++) {
		
		// Event sur le :hover
		hovers[i].addEventListener('mouseover', function() {
			var hover 	=	this;
			var texte	=	hover.getAttribute('data');
			var div_txt	=	document.getElementById('texte_machine-slot');

			div_txt.appendChild( document.createTextNode(texte) );
			
			hover.addEventListener('mouseout', function mouse_out() {
				hover.removeEventListener('mouseout', mouse_out);
				div_txt.innerHTML	=	"";
			}, false);
		}, false);
		
		// Event au clic
		hovers[i].addEventListener('click', function() {
			var hover 	=	this;
			var url		=	hover.getAttribute('url');
			ajax('popup/url_encrypt_popup.php', { 'go' : url }, false, true, function(response) {
					window.location.href	=	response;
			});
		}, false);
		
	}
	// Fin events hover des cases
	
	
	
	// Close popup au clic sur la croix
	function remove_popup() {
			var wrapper	=	document.getElementById('wrapper_machine-slot');
			wrapper.parentNode.removeChild(wrapper);
	}
	// Fin du close sur la popup
	
	
	// Fonctions de gestion des cookies
	function setCookie(cname,cvalue,hours) {
		var d = new Date();
		d.setTime(d.getTime()+(hours*60*60*1000));
		var expires = "expires="+d.toGMTString();
		document.cookie = cname + "=" + cvalue + "; " + expires;
	}
	
	function getCookie(cname){
		var name = cname + "=";
		var ca = document.cookie.split(';');
		for(var i=0; i<ca.length; i++) {
			var c = ca[i].trim();
			if (c.indexOf(name)==0)
				return c.substring(name.length,c.length);
		}
		return null;
	}
	// Fin sur les fonctions de gestion de cookies
	
	// Fonction ajax
	var xmlhttp = null;
	function ajax(url, data, json, async, callback) {
	
			//var div_load	=	document.getElementById('loader');
			//if (div_load != null && div_load.innerHTML == "") {
			//		div_load.innerHTML	=	'<img alt="" src="'+URL_HOST+'images/little_loader.gif" />';
			//}
	
	        if (data == null)
	                data = {};
	        if (json == null)
	                json = false;
	        if (async == null)
	                async = true;
	                
	         if (xmlhttp != null)
	         	xmlhttp.abort();
	 
	        // RÃ©cupÃ©ration de l'objet XMLHttpRequest
	        if (window.XMLHttpRequest)
	                xmlhttp=new XMLHttpRequest();
	        else
	                xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
	        if (data.length == 0) {
	                xmlhttp.open('GET', url, async);
	                xmlhttp.send();
	        } else {
	                xmlhttp.open('POST', url, async);
	                xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
	                xmlhttp.send(getPostQuery(data));
	        }
	        xmlhttp.onreadystatechange = function() {
	                if (xmlhttp.readyState == 4 && xmlhttp.status == 200 && callback != null) {
	                		//if (div_load != null)
			                //		div_load.innerHTML	=	'';
	                	
	                        if (json)
	                                callback(jsonDecode(xmlhttp.responseText));
	                        else
	                                callback(xmlhttp.responseText);
	                }
	        }
	}
	
	// DÃ©codage d'une chaine en json
	function jsonDecode(chain) {
	        return eval('('+chain+')');
	}
	
	var query;
	// RÃ©cupÃ©ration des donnÃ©es en post et insertion dans un header http
	function getPostQuery(data) {
	        query = [];
	        for (var key in data) {
	                query.push(key+'='+encodeURIComponent(data[key]));
	        }
	        return query.join('&');
	}
	// Fin fonction ajax
</script>