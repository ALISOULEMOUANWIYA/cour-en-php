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
        <Button id="Button1" onclick="variables = setTimeout(mafonction, 3000)">Demarer</Button>
        <Button id="Button2" onclick="clearTimeout(variables)">areter</Button>
        <script>
            function mafonction(){
                alert("je suis un boite d'alerte ");
            }
        </script>
    </body>
</html>