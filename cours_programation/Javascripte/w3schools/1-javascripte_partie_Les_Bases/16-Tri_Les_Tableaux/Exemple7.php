<!doctype html>
<html>     
    <body>
        <h2> Les Tableaux </h2>

        
        <button onclick="rangerDate()">
        ranger par date</button>
        <p id="demo1"></p>
        <p id="demo2"></p>
        <p id="demo3"></p>
        <p id="demo4"></p>
        <p id="demo5"></p>
        <script>
            var voiture = [
                {type:"Forde", year:2001},
                {type:"Mercedesse", year:2018},
                {type:"Telsa", year:2017},
                {type:"Ferrari", year:2019},
                {type:"Audi", year:2013},
                {type:"Lamborguini", year:2015},
                {type:"BMW", year:2010}
            ];
            display();
            function rangerDate(){
                voiture.sort(function(a, b){
                   return(a.year - b.year); 
                });
                display();
            }
           function display(){
              document.getElementById("demo1").innerHTML=
              voiture[0].type+" "+voiture[0].year+"<br>"+
              voiture[1].type+" "+voiture[1].year+"<br>"+
              voiture[2].type+" "+voiture[2].year+"<br>"+
              voiture[3].type+" "+voiture[3].year+"<br>"+
              voiture[4].type+" "+voiture[4].year+"<br>"+
              voiture[5].type+" "+voiture[5].year+"<br>"+
              voiture[6].type+" "+voiture[6].year
           } 
           
        </script>
    </body>    
</html>