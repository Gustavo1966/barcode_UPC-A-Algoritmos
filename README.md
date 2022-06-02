# Algoritmos para Generar Codigo de Barras UPC-A / EAN8-13
Un par de algoritmos en el archivo generador.php para obtener los 12 digitos, y poder generar el codigo de barras tipo UPC-A /EAN8-13
El archivo generar.php, contiene el formulario para introducir los valores y generar Código UPC / EAN8-13, que luego podra ser usado para crear el codigo de barras como tal. 

Un código de barras UPC es el segundo tipo de código de barras de venta minorista más común. El código consta de 12 números y codifica un código de país, código de empresa y código de producto. Los códigos de barras UPC se utilizan ampliamente en Estados Unidos, Canadá, Europa, Australia, Nueva Zelanda y otros países para el seguimiento de artículos comerciales en tiendas.

El código UPC (siglas de “Universal Product Code”) es un código de barras diseñado especialmente para identificar de manera inequívoca productos y consiste en un número único de 12 dígitos que se representan por barras de diferentes anchos y separación entre ellas para ser legibles por un scanner.

Para el uso correcto, verificación y generar el código de barras se necesita lo siguiente: 

# PHP Barcode Generator 
https://github.com/picqer/php-barcode-generator/

# Instalación

Instalar por medio de composer:

composer require picqer/php-barcode-generator

Si necesita generar imagenes PNG o JPG, también necesitará la libreria GD o Imagick instalados en su sistema.

Todas las instrucciones de su uso en: https://github.com/picqer/php-barcode-generator/
