<html>
<head>
<title><?php echo $_GET['t'] ?> bookmarklet</title>
<link type="text/css" rel="stylesheet" media="all" href="arabtechies.css" />
</head>
<style>
body {
	text-align: center;
}
.bubble {
	width: auto;
	margin-top: 20px;
	padding: 20px;
	background-image: url(arr2.gif);
	background-repeat: no-repeat;
	background-position: top center;
}
.bubble cite {
	margin-top: 20px;
	padding: 10px;
	background-color: white;
}
h1 {
	margin-bottom: 20px;
}
.bookmarklet {
	color: grey;
	text-decoration: none;
	border:solid 1px;
	border-color:ThreeDHighlight ThreeDShadow ThreeDShadow ThreeDHighlight;
	padding:10px;
	background-color:ThreeDFace;
}
.bookmarklet:hover {
	color: inherit;
	text-decoration: inherit;
}
</style>
<body>
<h1><?php print stripslashes($_GET['t']) ?> bookmarklet</h1>
<a class="bookmarklet" href="javascript:document.loadscript=function(u){var%20es=['body','frameset','head'];try{var%20s=document.createElement('script');s.setAttribute('src',u);for%20(var%20i=0;i<es.length;i++)%20{var%20e=document.getElementsByTagName(es[i])[0];if(e){e.appendChild(s);break;}}}catch(e){alert('This%20doesn\'t%20work%20here.');}void(0);};<?php print stripslashes($_GET['j']) ?>" /><?php print stripslashes($_GET['t']) ?></a>
<p class="bubble"><cite><?php print stripslashes($_GET['d']) ?></cite></p>
</body>
</html>
