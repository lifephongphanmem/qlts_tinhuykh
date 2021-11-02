<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Demo jQuery</title>
    <script src="http://jqueryjs.googlecode.com/files/jquery-1.3.1.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function(){
        });
        function loadAjax(id){
            $.ajax({
                url: 'test.php',
                    type: 'POST',
                    data: "id=" +
                    id,
                    dataType: "html",
                    success: function(data) {
                        window.location.assign("test.php");
                }
            });
        }
        function showResult(data){
            window.location.assign("test.php");
        }
    </script>
    <style type="text/css">
        #result {
            background:#f1f1f1;
            border:3px solid #ccc;
            padding:5px;
            margin:10px;
        }
    </style>
</head>
<body>
<?php
echo $_POST['id'];
?>
<a class="ajax" href="#" onclick="loadAjax('1');">Click me load ajax 1</a>
<a class="ajax" href="#" onclick="loadAjax('2');">Click me load ajax 2</a>
<a class="ajax" href="#" onclick="loadAjax('3');">Click me load ajax 3</a>
<a class="ajax" href="#" onclick="loadAjax('4');">Click me load ajax 4</a>
<a class="ajax" href="#" onclick="loadAjax('5');">Click me load ajax 5</a>
<div id="result">
</div>
</body>
</html>