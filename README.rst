=======
Administrador Simple de Pizzeria
=======

Descripción breve del proyecto.

Instalación
============

1. Clona el repositorio:

   .. code-block:: sh

      git clone https://tu-repositorio.git


Uso
=====

Rol: Administrador
Gestión de Menú:

Añadir, editar o eliminar productos del menú de la pizzería.
Configurar detalles como nombre, descripción, precio, etc.
Gestión de Personal:

Asignar roles (Chef, Camarero) a los empleados.
Crear, editar o eliminar cuentas de empleados.
Visualización de Estadísticas:

Acceso a estadísticas de ventas, popularidad de productos, etc.


Rol: Cliente
Explorar Menú:

Visualizar el menú de la pizzería con detalles de productos.
Historial de Pedidos:
Ver el historial de pedidos anteriores.
Estado actual de los pedidos en curso.


Rol: Chef
Visualización de Pedidos:

Acceso a una interfaz que muestra los pedidos realizados.
Detalle de cada pedido, incluyendo productos y cantidades.
Actualizar Estado de Pedidos:

Marcar pedidos como "En preparación" y "Listo para servir".

Rol: Camarero
Tomar Pedidos:

Interfaz para realizar pedidos en nombre de los clientes.
Agregar productos al carrito y confirmar pedidos.
Actualizar Estado de Pedidos:
Cambiar el estado de los pedidos a "Entregado" una vez servidos.

Estructura del Proyecto
=========================

Describe la estructura de archivos y carpetas en tu proyecto.

.. code-block:: plaintext

   /mi_proyecto
       ├── app/
       │   ├── controllers/
       │   ├── models/
       │   └── views/
       ├── tests/
       ├── config/
       ├── README.rst
       └── requirements.txt

Contribuciones
================

Si deseas contribuir al proyecto, sigue estos pasos:

1. Haz un fork del repositorio.
2. Crea una rama para tu nueva función: `git checkout -b nueva-funcion`.
3. Haz tus cambios y realiza commits: `git commit -m 'Añadir nueva función'`.
4. Hacer push a la rama: `git push origin nueva-funcion`.
5. Abre un Pull Request en GitHub.
