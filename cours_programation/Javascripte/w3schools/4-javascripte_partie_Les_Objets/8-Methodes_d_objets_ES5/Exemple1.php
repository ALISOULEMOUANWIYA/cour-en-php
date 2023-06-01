<!doctype html>
<html>     
    <body>
        <script>
            'user strict';
            // Ajout ou modification d'une propriété d'objet
            Object.defineProperty(object, property, descriptor);

            // Ajout ou modification de nombreuses propriétés d'objet
            Object.defineProperties(object, descriptors);

            // Accéder aux propriétés
            Object.getOwnPropertyDescriptor(object, property);

            // Renvoie toutes les propriétés sous forme de tableau
            Object.getOwnPropertyNames (object)

            // Renvoie les propriétés énumérables sous forme de tableau
            Object.keys (object)

            // Accéder au prototype
            Object.getPrototypeOf (object)

            // Empêche l'ajout de propriétés à un objet
            Object.preventExtensions (objet)
            // Renvoie true si des propriétés peuvent être ajoutées à un objet
            Object.isExtensible (object)

            // Empêche les modifications des propriétés des objets (pas des valeurs)
            Object.seal (objet)
            // Renvoie vrai si l'objet est scellé
            Object.isSealed (object)

            // Empêche toute modification d'un objet
            Object.freeze (objet)
            // Renvoie vrai si l'objet est gelé
            Object.isFrozen (object)
        </script>
    </body>    
</html>