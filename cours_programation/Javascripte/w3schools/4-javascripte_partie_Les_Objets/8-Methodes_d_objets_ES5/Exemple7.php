<!doctype html>
<html>     
    <body>
        <h2> Object.defineProperty ()</h2>
        <p id="demo">0</p>
        <p id="demo1"></p>
        <p id="demo3"></p>
        <script>
            'use strict';
            // definition d'un objet
                var obj = {
                    conteur : 0
                };
            Object.defineProperty(obj,"reset",{
                get : function(){
                    this.conteur = 0;
                }
            });
            Object.defineProperty(obj,"increment",{
                get : function(){
                    this.conteur++;
                }
            });
            Object.defineProperty(obj,"decrement",{
                get : function(){
                    this.conteur--;
                }
            });
            Object.defineProperty(obj,"add",{
                set : function(value){
                    this.conteur += value;
                }
            });
            Object.defineProperty(obj,"subtract",{
                set : function(i){
                    this.conteur -= i;
                }
            });
            obj.reset;
            obj.add = 5;
            obj.subtract = 1;
            obj.increment;
            obj.decrement;
            document.getElementById("demo").innerHTML = obj.conteur;// affichera 4
        </script>
    </body>    
</html>