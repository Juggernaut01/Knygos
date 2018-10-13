

<html>
<head>
<title>Javascript Login Form Validation</title>
<!-- Include CSS File Here -->
<link rel="stylesheet" href="https://bootswatch.com/4/cerulean/bootstrap.min.css"/>
<!-- Include JS File Here -->
<script src="includes/js/homePage.js"></script>
</head>
<body>
<div class="container">
<div class="main">
<h2>Javascript Login Form Validation</h2>
<form id="form_id" method="post" name="myform">
<label>User Name :</label>
<input type="text" name="username" id="username"/>
<label>Password :</label>

<input type="password" name="password" id="password"
onkeyup="showSuggestion(this.value)"/>
<input type="button" value="Login" id="submit" onclick=""/>
<script type="text/javascript">
function showSuggestion(str){

  if(str.length != 0){
    document.getElementById('output').innerHTML = 'yra';



}

  }

</script>
</form>

<p>
<span id="output" style="font-weight:bold">






</span>

</p>
