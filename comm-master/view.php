<html>
<script>
var newImage = new Image();

window.onload = function() {
    var image = document.getElementById("img");

    function updateImage() {
        image.src = image.src.split("?")[0] + "?" + new Date().getTime();
    }

    setInterval(updateImage, 1000);
}

function updateImage() {
    if(newImage.complete) {
           newImage.src = document.getElementById("img").src;
           var temp = newImage.src;
           document.getElementById("img").src = newImage.src;
           newImage = new Image();
           newImage.src = temp+"?" + new Date().getTime();

}
setTimeout(updateImage, 100); //probably too fast
};
</script>
<body>
<?php

echo '<img id="img" src="'.$_GET["filename"].'" style="position:absolute;top:0;left:0;height:100%;width:100%"/>';
?>
</body>
</html>