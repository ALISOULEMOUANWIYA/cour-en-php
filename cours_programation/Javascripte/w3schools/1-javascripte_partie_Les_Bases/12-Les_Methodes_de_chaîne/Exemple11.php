<!doctype html>
<html>     
    <body>
        <h2> JavaScript String.trim () </h2>

        <p> IE 8 ne prend pas en charge String.trim (). Pour couper une corde, vous pouvez utiliser un polyfill. </p>
        
        <p id="demo1"></p>
        <script>
            if(!String.prototype.trim){
                String.prototype.trim = function(){
                    return(this.replace(/^[\s\uFEFF\xA0]+|[\s\uFEFF\xA0]+$/g, ''))
                }
            }
         var txt = "      ALI Soule Mouanwiya    ";
         var textes = txt.trim();
         document.getElementById("demo1").innerHTML = textes; 
        </script>
    </body>    
</html>