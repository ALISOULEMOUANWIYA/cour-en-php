<! DOCTYPE html>
<html>
    <style>
#myDIV {
  background-color: #211f1f;
  border: 1px solid;
  padding: 50px;
  color: white;
  font-size: 20px;
}
</style>
    <body>
        <h2> JavaScript  </h2>
        <div id = "myDIV">
            <p id = "demo1"></p>
        </div>
        <Button id="Button1" onclick="clearInterval(temps)">Arreter</Button>
        <script>
           var temps = setInterval(mafonction, 1000);
           function mafonction(){
                var duree = new Date();
                document.getElementById("demo1").innerHTML=
                duree.toLocaleTimeString();
            }
        </script>
    </body>
</html>