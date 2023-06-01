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
        <h2>GET Requests</h2>

        <div id = "myDIV">
            <p id = "demo1"></p>
        </div>
        <Button id="Button1" onclick="starDOc()">button</Button>
        <script>
            document.getElementById("Button1").addEventListener("click", starDOc);
           function starDOc(){
             var xhttp = new XMLHttpRequest();
               xhttp.onreadystatechange = function(){
                   if(this.readyState == 4 && this.status == 200){
                       document.getElementById("demo1").innerHTML = this.responseText;
                   }
               };
               xhttp.open("GET", "ajax_info.txt", true);
               xhttp.send();
           }
        </script>
    </body>
</html>