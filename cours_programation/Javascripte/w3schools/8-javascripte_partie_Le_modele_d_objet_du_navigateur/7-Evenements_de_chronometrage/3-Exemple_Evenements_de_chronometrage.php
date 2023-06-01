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
            document.getElementById("Button1").addEventListener("click", timeTextes);
           function timeTextes(){
               setTimeout(mafonction1, 2000)
               setTimeout(mafonction2, 4000)
               setTimeout(mafonction3, 6000)
           }
           function mafonction1(){
                document.getElementById("demo1").innerHTML = "2 secondes"
            }
           function mafonction2(){
               document.getElementById("demo1").innerHTML = "4 secondes"
            }
           function mafonction3(){
                document.getElementById("demo1").innerHTML = "6 secondes"
            }
        </script>
    </body>
</html>