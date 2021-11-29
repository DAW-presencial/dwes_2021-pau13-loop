
# EXAMEN - Pau Llinàs Amat

> Se recomienda la instalación de la extensión de vsCode ***BetterComments*** para la lectura del código, comentarios resaltados según contexto.

3. El mayor entero positivo represnetable en PHP se consigue mediante la función: 
```PHP_INT_MAX (int)
```
El número que nos devuelve está función es el número entero positivo más grande admitido en PHP. Aunque debemos recordar que no será el mismo número en un sistema de 32 bits o 64 bits.
- 32bits = int(9223372036854775807)
- 64bits = int(9223372036854775807)

4. Como podemos ver en el código realizado. La propiedad **será añadida** en la instancia de la clase, en el caso de que le intentemos asignar una propiedad inexistente a la instancia de la clase. Pero la propiedad **no será añadiad** ni en la la clase de la cual instanciamos, en instancias anteriores o posteriores de la clase, ***únicamente*** se añadira en la instancia de la cual accedemos a una propiedad no definida.  
Por si acaso, recordaré que la propiedad al no ser añadida a la clase tampoco se creará en ninguna instancia posterior que se realize sobre dicha clase.

5. En el ejercicio 5 hemos hecho pruebas con cada una de las posibilidades de visibilidad (public, protected y private):

- **Public**: Desde una subclase se puede acceder a todos los métodos mágicos o propiedades de la clase padre de la cual hereda.
- **Protected**: Desde una subclase se puede acceder a todos los métodos mágicos o propiedades de la clase padre de la cual hereda, como en el caso anterior.
- **Private**: Desde una subclase ***NO*** se puede acceder a ninguno de los métodos o propiedades de la clase padre de la cual hereda, no hay visibilidad.

6. Respuesta en el directorio 6, como el número de la pregunta. Incluye un archivo que corresponde a un fomrulario de dos campos donde subiremos dos archivo y nos informará de los archivos subidos y sus características. 