<?php
return [
    'welcome'       =>  'Bienvenido al proceso de instalación CHI-Blog',
    'first_step'    =>  'Para comenzar, ingrese la información básica',
    'env_file'      =>  'Archivo de configuración',
    'env_not_found' =>  'Archivo de configuración .env.example no se ha encontrado',
    'warning_key'   =>  '<i class="fa fa-exclamation-circle"></i>
                            <strong>Recuerda</strong> al terminar de instalar <stron>CHI</stron>Blog debes:
                            <br><br>
                            <ul>
                                <li>
                                    Ejecutar en la consola: <small>php artisan key:generate</small>
                                </li>
                                <li>Reiniciar el servidor</li>
                            </ul>
                         <br>
                         De no hacerlo, recibirás el error <i>No supported encrypter found</i>',
    'prev'          =>  'Retroceder',
    'next'          =>  'Siguiente',
    'db_config'     =>  'Validación de la base de datos',
    'db_error'      =>  'Error al conectarse a la base de datos, por favor configurala correctamente',
    'db_success'    =>  'Base de datos configurada correctamente',
    'congrats'      =>  'Felicitaciones!',
    'installed'     =>  'Has completado la instalación de forma exitosa, ya puedes comenzar a agregar contenido a tu blog'
];