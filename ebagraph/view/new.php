<?php
	// 読み込み

?>
<html>
<head>
<title>新規投稿</title>
<link href="view/style.css" rel="stylesheet" type="text/css">
</head>
<body>
<form action="new.php" method="post">
カテゴリ:
<select name="category">
    <option value="office" selected>Office</option> 　 
    <option value="break">PC故障</option> 
    <option value="alladin">ALLADiN</option> 
    <option value="chatwork">チャットワーク</option> 
    <option value="becky">Becky!</option> 
    <option value="mailing_list">メーリングリスト</option> 
    <option value="jmotto">j-motto</option> 
</select>

<p>
相談内容：<textarea name="body" rows="4" cols="40"></textarea>
</p>
<p>
<input type="submit" value="送信">
</p>
</form>

</body>
</html>
