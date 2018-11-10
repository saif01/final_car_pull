<?php include('include/header.php'); ?>
<!doctype html>
<html>
<head>
<title>JavaScript String fontcolor() Method</title>
<style>
#alertoverlay{display: none;
    opacity: .8;
    position: fixed;
    top: 0px;
    left: 0px;
    background: #FFF;
    width: 100%;}

#alertbox{display: none;
    position: fixed;
    background: #000;
    border:7px dotted #12f200;
    border-radius:10px; 
    font-size:20px;}

#alertbox > div > #alertboxhead{background:#222; padding:10px;color:#FFF;}
#alertbox > div > #alertboxbody{ background:#111; padding:40px;color:red; } 
#alertbox > div > #alertboxfoot{ background: #111; padding:10px; text-align:right; }
</style><!-- remove padding for normal text alert -->

<script>
function CustomAlert(){
    this.on = function(alert){
        var winW = window.innerWidth;
        var winH = window.innerHeight;

        alertoverlay.style.display = "block";
        alertoverlay.style.height = window.innerHeight+"px";
        alertbox.style.left = (window.innerWidth/3.5)+"pt";
        alertbox.style.right = (window.innerWidth/3.5)+"pt"; // remove this if you don't want to have your alertbox to have a standard size but after you remove modify this line : alertbox.style.left=(window.inner.Width/4);
    alertbox.style.top = (window.innerHeight/10)+"pt";
        alertbox.style.display = "block";
        document.getElementById('alertboxhead').innerHTML = "This is Warning....";
        document.getElementById('alertboxbody').innerHTML = alert;
        document.getElementById('alertboxfoot').innerHTML = '<button onclick="Alert.off()">OK</button>';
    }
    this.off = function(){
        document.getElementById('alertbox').style.display = "none";
        document.getElementById('alertoverlay').style.display = "none";
    }
}
var Alert = new CustomAlert();
</script>



</head>
<body bgcolor="">
<div id="alertoverlay"></div>
<div id="alertbox">
  <div>
    <div id="alertboxhead"></div>
    <div id="alertboxbody"></div>
    <div id="alertboxfoot"></div>
  </div>
</div>

<?php
$v=2;
 if($v==1){
	echo "eeeeeeeeeee";

}else{?>
	<script>Alert.on("Hello World!");</script>


<?php }?>



<?php include('include/footer.php'); ?> 