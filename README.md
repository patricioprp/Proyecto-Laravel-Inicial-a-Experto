# Proyecto-Laravel-Inicial-a-Experto
Vamos a desarrollar un apunte con las principales y mas utiles instruccion del curso Laravel de pincipiantes a experto de Aprendible

## Las rutas
_Con estas lineas podemos pasar una variable por get y en caso de que no se lo envie, se le asigna un valor por defecto(invitado), tambien validamos que 
lo que se envie en la variable sea solo texto, mayusculas y/o minusculas(representa un nombre) y no permite que existan numeros ayudandonos con una expresion regular.
Al parametro lo hacemos opcional agregando al final '?'_
![alt tag](https://github.com/patricioprp/Proyecto-Laravel-Inicial-a-Experto/blob/main/public/capturas/rutas.png)

Supongamos que tenemos muchos lugares en el proyecto donde se hace referencia a la misma url (contacto),imaginemos que nos piden cambiar contacto a contactanos, deberiamos ir a cada una de las lineasy cambi arlas una por una, lo que seria muy engorroso.
## Rutas sin nombre
![alt tag](https://github.com/patricioprp/Proyecto-Laravel-Inicial-a-Experto/blob/main/public/capturas/rutasSinNombre.png)

## Rutas con nombre
La solucion es nombrar a cada una de estas rutas, luego cada vez que se cambie la url no se alterara el resto del codigo.
![alt tag](https://github.com/patricioprp/Proyecto-Laravel-Inicial-a-Experto/blob/main/public/capturas/rutaConNombre.png)

##Inyeccion de dependencias en la vista
![alt tag](https://github.com/patricioprp/Proyecto-Laravel-Inicial-a-Experto/blob/main/public/capturas/inyeccion.png)
Podemos ver que en la linea 11 mostramos la variable sin la expresion de blade, con php nativo, vemos que a la variable la engloba una funcion "e" lo que hace es invocar a la funcion nativa de php "htmlentities($name)" para protegernos de XXS Cross Site Scripting o inyeccion de codigo malicioso, evitando que s ejecuten script causando comportamientos no deseados, sin embargo a veces damos el permiso al usuario de ingresar codigo html, css o js a traves de un formulario, como el siguiente ejemplo:

Vamos a simular el ingreso de un texto con codigo html por un usuario en la variable _$hmtl_
![alt tag](https://github.com/patricioprp/Proyecto-Laravel-Inicial-a-Experto/blob/main/public/capturas/rutasInyeccion.png)

y en la vista vamos a imprimir la variable de dos formas

![alt tag](https://github.com/patricioprp/Proyecto-Laravel-Inicial-a-Experto/blob/main/public/capturas/bladeInyeccion.png)
El resultado sera
![alt tag](https://github.com/patricioprp/Proyecto-Laravel-Inicial-a-Experto/blob/main/public/capturas/pantalla.png)
Los signos de admiracion sirven para alertarnos de que el codigo no esta siendo escapado y puede ser peligroso.


Ahora vamos a ver un ejemplo donde inyecctamos js
![alt tag](https://github.com/patricioprp/Proyecto-Laravel-Inicial-a-Experto/blob/main/public/capturas/script.png)
Resultado en pantalla con {!!Script!!}
![alt tag](https://github.com/patricioprp/Proyecto-Laravel-Inicial-a-Experto/blob/main/public/capturas/resultadoScript.png)

Este script ya esta cambiando el comportamiento de nuestra apliacion, es facil saber lo peligroso que seria por ejemplo inyecctar codigo sql por ejemplo.
## Comenzando 🚀

_Estas instrucciones te permitirán obtener una copia del proyecto en funcionamiento en tu máquina local para propósitos de desarrollo y pruebas._

Mira **Deployment** para conocer como desplegar el proyecto.


### Pre-requisitos 📋

_Que cosas necesitas para instalar el software y como instalarlas_

```
Da un ejemplo
```

### Instalación 🔧

_Una serie de ejemplos paso a paso que te dice lo que debes ejecutar para tener un entorno de desarrollo ejecutandose_

_Dí cómo será ese paso_

```
Da un ejemplo
```

_Y repite_

```
hasta finalizar
```

_Finaliza con un ejemplo de cómo obtener datos del sistema o como usarlos para una pequeña demo_

## Ejecutando las pruebas ⚙️

_Explica como ejecutar las pruebas automatizadas para este sistema_

### Analice las pruebas end-to-end 🔩

_Explica que verifican estas pruebas y por qué_

```
Da un ejemplo
```

### Y las pruebas de estilo de codificación ⌨️

_Explica que verifican estas pruebas y por qué_

```
Da un ejemplo
```

## Despliegue 📦

_Agrega notas adicionales sobre como hacer deploy_

## Construido con 🛠️

_Menciona las herramientas que utilizaste para crear tu proyecto_

* [Dropwizard](http://www.dropwizard.io/1.0.2/docs/) - El framework web usado
* [Maven](https://maven.apache.org/) - Manejador de dependencias
* [ROME](https://rometools.github.io/rome/) - Usado para generar RSS

## Contribuyendo 🖇️

Por favor lee el [CONTRIBUTING.md](https://gist.github.com/villanuevand/xxxxxx) para detalles de nuestro código de conducta, y el proceso para enviarnos pull requests.

## Wiki 📖

Puedes encontrar mucho más de cómo utilizar este proyecto en nuestra [Wiki](https://github.com/tu/proyecto/wiki)

## Versionado 📌

Usamos [SemVer](http://semver.org/) para el versionado. Para todas las versiones disponibles, mira los [tags en este repositorio](https://github.com/tu/proyecto/tags).

## Autores ✒️

_Menciona a todos aquellos que ayudaron a levantar el proyecto desde sus inicios_

* **Andrés Villanueva** - *Trabajo Inicial* - [villanuevand](https://github.com/villanuevand)
* **Fulanito Detal** - *Documentación* - [fulanitodetal](#fulanito-de-tal)

También puedes mirar la lista de todos los [contribuyentes](https://github.com/your/project/contributors) quíenes han participado en este proyecto. 

## Licencia 📄

Este proyecto está bajo la Licencia (Tu Licencia) - mira el archivo [LICENSE.md](LICENSE.md) para detalles

## Expresiones de Gratitud 🎁

* Comenta a otros sobre este proyecto 📢
* Invita una cerveza 🍺 o un café ☕ a alguien del equipo. 
* Da las gracias públicamente 🤓.
* etc.


