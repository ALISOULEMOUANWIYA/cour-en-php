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
            <p id = "demo2"></p>
            <p id = "demo3"></p>
            <p id = "demo4"></p>
            <p id = "demo5"></p>
            <p id = "demo6"></p>
            <p id = "demo7"></p>
            <p id = "demo8"></p>
            <p id = "demo9"></p>
            <p id = "demo10"></p>
        </div>
<script>
/*
  
*/
document.getElementById("myDIV").addEventListener("mousedown", mafonction);
function mafonction(){
    document.getElementById("demo1").innerHTML="cookiesEnabled is "+navigator.cookieEnabled;
    document.getElementById("demo2").innerHTML="navigator.appName is "+navigator.appName;
    document.getElementById("demo3").innerHTML="navigator.appCodeName is "+navigator.appCodeName;
    document.getElementById("demo4").innerHTML="navigator.appVersion is "+navigator.appVersion;
    document.getElementById("demo5").innerHTML="navigator.userAgent is "+navigator.userAgent;
    document.getElementById("demo6").innerHTML="navigator.platform is "+navigator.platform;
    document.getElementById("demo7").innerHTML="navigator.language is "+navigator.language;
    document.getElementById("demo8").innerHTML="navigator.onLine is "+navigator.onLine;
    document.getElementById("demo9").innerHTML="navigator.javaEnabled is "+navigator.javaEnabled;
}
/*

*/
</script>
    </body>
</html>