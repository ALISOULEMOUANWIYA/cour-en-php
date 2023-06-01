<!doctype html>
<html>    
    <body>
        <h2>Que peut faire javaScipt </h2>
        
        <p> JavaScript peut modifier les valeurs des attributs HTML. </p>

        <p> Dans ce cas, JavaScript modifie la valeur de l'attribut src (source) d'une image. </p>
        
        <button onclick="document.getElementById('MonImage').src='pic_bulboff.gif'">
            ON
        </button>
        <img id="MonImage" src="pic_bulboff.gif" style="whidth:100px">
        
        <button onclick="document.getElementById('MonImage').src='pic_bulbon.gif'">
            OFF
        </button>
    </body>    
</html>