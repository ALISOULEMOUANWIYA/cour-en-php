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
        <Button id="Button1">button</Button>
        <script>
            document.getElementById("Button1").addEventListener("click", STRARtime);
           function STRARtime(){
             var duree = new Date();
             var heures = duree.getHours();
             var minutes = duree.getMinutes();
             var secondes = duree.getSeconds();
             minutes = controllers(minutes);
             secondes = controllers(secondes);
             document.getElementById("demo1").innerHTML=
             heures+":"+minutes+":"+secondes
               var temps = setTimeout(STRARtime, 500);
           }
           function controllers(control){
                if(control < 10){
                    control = "0"+control;
                }
               return(control);
            }
        </script>
    </body>
</html>