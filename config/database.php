<?php

// Nome do host da base de dados
define( 'HOSTNAME', 'mysql.mariadacasa.art.br' );

// Nome do DB
define( 'DB_NAME', 'mariadacasa01' );

// Usuário do DB
define( 'DB_USER', 'mariadacasa01' );

// Senha do DB
define( 'DB_PASSWORD', 'abcd102030' );

// Nome do DB e HOSTNAME juntos...
define( 'HOSTNAME_DBNAME', 'mysql:host='.HOSTNAME.';dbname='.DB_NAME.'' );
