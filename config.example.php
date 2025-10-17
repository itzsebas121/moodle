<?php
$CFG = new stdClass();
$CFG->dbtype    = 'mysqli';
$CFG->dblibrary = 'native';
$CFG->dbhost    = 'TU_SERVIDOR_DB';
$CFG->dbname    = 'TU_BASE_DE_DATOS';
$CFG->dbuser    = 'TU_USUARIO_DB';
$CFG->dbpass    = 'TU_PASSWORD_DB';
$CFG->prefix    = 'mdl_';
$CFG->wwwroot   = 'http://TU_DOMINIO';
$CFG->dataroot  = '/ruta/a/moodledata';
$CFG->admin     = 'admin';
$CFG->directorypermissions = 02777;

require_once(__DIR__ . '/lib/setup.php');
