<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Make a bookmarklet</title>
<link rel="stylesheet" href="../barred.css" type="text/css" />
<style type="text/css">
textarea:focus {
  background: inherit;
}
</style>
</head>
<body>
<div id="entete"><h1>Make a bookmarklet</h1></div>
<form action="http://bookmarklet.alixsys.com" method="get">
  <label>Label<input name="t" type="text" /></label>
  <label>Code<textarea name="j" rows="24" cols="80">
document.loadscript("");
  </textarea></label>
  <label>Description<input name="d" type="text" size="50"/></label>
  <button type="submit">Make a bookmarklet</button>
</form>
</body> 
</html>
