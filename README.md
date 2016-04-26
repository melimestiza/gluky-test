# gluky-prueba
Prueba técnica para Gluky  - Melissa Arbeláez López

* Se utlizó la función hook_enable() para crear un vocabulario llamado Categoría
para que se pueda crear una estructura tipo árbol.

* Se crearon 3 tipos de entidades, una llamada flete que permite ingresar y editar 
y otra llamada programas_prod que permite ingresar los productos.
Estos das entidades se direccionaron para que aparecieran bajo el menú de Productos

* La sección Productos, se creó como una entidad la cual invoca la taxonomia de categoría,
esto a través de las funciones de las taxonomias como: taxonomy_vocabulary_machine_name_load()
taxonomy_get_tree(), las entidades de fletes y programas se accedieron usando la función
entity_load().

* Para la validación del sku se usó el EntityFieldQuery() para acceder a los datos sin 
tener que hacer una consulta a la BD.

* el Menú de Productos y su vista se creó a través de renderizar los elementos de la entidad
a través drupal_render() y se añadió un pequeño markup para mostrar el sku.

* La vista de la interna del producto se hizo con el hook_theme() para poder customizarla a través de un .tpl
y poder darle fluidez y poder acceder a todos los datos de la entidad.







********************************
By Melissa Arbeláez López