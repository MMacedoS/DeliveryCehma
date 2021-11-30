<script   src="https://code.jquery.com/jquery-3.1.1.min.js"   integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8="   crossorigin="anonymous"></script>
<p id="demo"></p>
<script>
$( document ).ready(function() {
  // Handler for .ready() called.
        update();
});
function update(){
setInterval(
    function() {

$.ajax({
    url: "http://localhost/deliverycehma/Home/hora",
    success: function(n){
  document.getElementById("demo").innerHTML = n;
    segundoAtual(parseInt(n))
    }
});

    },

1000);
}

  

</script>