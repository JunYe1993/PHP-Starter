<html>
<head>
    <script>
        function sendState(box1, box2){
            box2.checked = box1.checked;
        }
    </script>
</head>
<body bgcolor="#ccccff">
 
<form>
    <input type="checkbox" id="a" checked>
    <input type="button" value="按我傳送選取狀態" onClick="sendState(this.form.a, this.form.b)">
    <input type="checkbox" id="b">
</form>

 
</body></html>