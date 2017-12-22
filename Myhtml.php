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
    <br><br>
</form>

<form action="upload.php" method="post" enctype="multipart/form-data">
    Select image to upload:
    <input type="file" name="fileToUpload" id="fileToUpload">
    <input type="submit" value="Upload Image" name="submit">
</form>
 
</body></html>