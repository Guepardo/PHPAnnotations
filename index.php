<?php
//Configurando a data e hora do servidor: 
date_default_timezone_set('America/Sao_Paulo');

//Criar um arquivo para definições mais tarde. 
define ('WWW_ROOT', dirname(__FILE__)); 
define ('DS', DIRECTORY_SEPARATOR); 
define ('PATH', WWW_ROOT.DS); 

require_once(PATH.'annotations.php'); 
require_once(PATH.'AnnotationFirewall.php'); 
require_once(PATH.'Teste.php'); 

//Entrar com o nome da classe e o nome da método que será pego a anotação. 
$reflection = new ReflectionAnnotatedMethod('Teste','soma'); // by class name
$annotation = $reflection->getAnnotation('AnnotationFirewall');
var_dump($annotation->visitante); // contains string "admin"
var_dump($annotation->vendedor); // contains integer "2"