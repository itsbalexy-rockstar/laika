### LAIKA MASCOTAS

#### Hola, mi nombre es Brayan!
####### Acá te muestro el proyecto que realicé de maquetación con la página web de la empresa Laika Mascotas, en ella aporté con las siguientes tecnologías:

**Laravel**

_Utilicé la versión de Laravel 9.13.0 junto con PHP 8.16 para crear el servicio de bases de datos con MYSQL que me sirviera para consumir desde las tarjetas de compra en el carrito, con esto empecé creando las tablas de datos mysql con el comando `php artisan serve make:model **Nombre del modelo** -mfc --api` utilizando las banderas -m de model, -f de factories y -resource, donde posterior a ello se realiza las distintas configuraciones tanto en el modelo de la tabla, como en los controladores para la obtención de la data. Además hay que recalcar que utilicé [Faker](https://github.com/fzaninotto/Faker), la librería para generar datos falsos que utilicé para poder simular la data en los card, por último realicé la migración de las tablas utilizado el comando `php artisan migrate:fresh --seed`_

**Vue y Bootstrap**

_Para el lado del frontend estuve utilizando Vue como framework y bootstrap como ayuda en la maquetación de la web, uno a uno iba construyendo los componentes de cada sección_

**Font Awesome Icons**

_Aunque se usaron algunas imágenes como recursos estáticos para consumirlos como iconos, la principal fuente que me brindó iconos fue [Font awesome](https://fontawesome.com/icons/)_

**Axios**

_Se utilizó axios para el consumo de los datos de la api de laravel_

**Github**

_Por último se utilizó el recurso más importante, donde se almacenaban los cambios que se le realizaban a la web, estos cambios decidí hacerlos en ramas separadas por cualquier eventualidad que se pudiera presentar poder utilizar comandos de Git para recuperar la información y no tocar la rama `main`_
