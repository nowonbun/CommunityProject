<html>
<head>
<title>Framework</title>
<link rel="stylesheet" type="text/css" href="./css/common.css">
</head>
<body>
{foreach from=$test->getData() item=item}
    <li>{$item}</li>
{/foreach}
<div id="scriptTest"></div>
<script src="//code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
<script src="./js/common.js"></script>
</body>
</html>