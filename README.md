# Naiades
## Búsqueda laboral
### Ejercicios

#### Modalidad
Para resolver estos ejercicios vas a necesitar tener una cuenta en GitHub.

Si estás viendo esto, es porque ya la tenés y te dimos acceso de solo lectura a este repositorio privado.

Ahora tenés que hacer un *fork* de este repo. Desde tu máquina, cloná ese repo (tu *fork*) para trabajar ahí.

Cuando resuelvas los ejercicios, es importante que **no hagas un _pull request_**, así mantenemos tu código en tu repo y no lo pueden ver los demás candidatos.

Subí (*push*) los ejercicios resueltos a tu repo y danos acceso de lectura (`Settings > Manage Access`) para el usuario `lucianoamor`, así podemos corregirlos.

#### Contexto
La idea es simular un pequeño sistema que guarde en una base de datos algunos campos básicos de usuarios.

Consta de una vista y un formulario de carga.

En este repo vas a encontrar un archivo `sql`. Con eso vas a poder crear una base de datos en tu `localhost` para poder hacer el ejercicio.

#### Aclaraciones
La vista debe cargarse a través de ajax.

El formulario debe enviarse a través de ajax.

Se puede usar jQuery (está en el repo) para el javascript, pero no otras librerías.

No se pueden agregar librerías al repositorio.

El código PHP no debe usar funciones, clases o frameworks externos.

Se valorarán todas las explicaciones y justificaciones que se incluyan como comentarios en el código.

#### Requerimientos
1. Agregar a la tabla **`usuarios`** los campos `id`, `apellido` y `fecha`. Usar los tipos de columna y demás características según el criterio que mejor te parezca. Incluir un archivo con el código `sql` necesario para replicar el cambio.

2. Modificar el código `html` necesario en **`vista.php`** para incluir las nuevas columnas.

3. Agregar el código `javascript` necesario en **`vista.php`** para completar el `tbody` con los datos cargados en la base de datos. Debe usarse una llamada ajax al archivo: **`ax/vista.php`**. La respuesta debe ser en `json`.

4. Modificar el código `html` necesario en **`formulario.php`** para agregar un `input` para `apellido`.

5. Agregar el código `javascript` necesario en **`formulario.php`** para enviarlo. Se deben guardar también las otras columnas de la tabla (todas). Debe usarse una llamada ajax al archivo: **`ax/formulario.php`**. La respuesta debe ser en `json`, y en caso de éxito debe llevar a **`vista.php`**.
