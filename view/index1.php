<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title></title>
</head>
<body>

<div class="area">
    <div class="top"></div>
    <div class="corpo"></div>
</div>
  
</body>
</html>

<script   src="https://code.jquery.com/jquery-3.1.1.min.js"   integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8="   crossorigin="anonymous"></script>



<script>
$( document ).ready(function() {
  // Handler for .ready() called.
        update();
});
function update(){
setInterval(
    function() {

$.ajax({
    url: "<?=ROTA_GERAL?>/Home/hora",
    success: function(n){
  
      // document.getElementById("demo").innerHTML = n[];
      console.log(n);
    
    }
});

    },

10000);
}

  

</script>