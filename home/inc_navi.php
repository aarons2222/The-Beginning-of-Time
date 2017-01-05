<ul id="innerNav">
    <li><a href="index.php">HOME</a></li>
</ul>

<script id="script1">
    var item = new Array();
    item[0] = "shop";
    item[1] = "basket";
    var x;
    
    for(x in item) {
        document.getElementById("innerNav").innerHTML += "<li><a href=\"" + item[x] + ".php\">" + item[x].toUpperCase() + "</a></li>";
    }
    
    document.getElementById("script1").outerHTML = "";
</script>