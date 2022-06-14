<?php

// definie para ficar ativo até o browser ser fechado
ini_set('session.cookie_lifetime', 0); 

// 0 de probabilidade
ini_set('session.gc_probability', 0);

// 1 de divisão
ini_set('session.gc_divisor',1); 

// Logo o gc_maxlifetime vai ser checado 0% das vezes. 
// (0 / 1 = 0%) ou seja, gc_probability / gc_divisor

// ativo até o browser ser fechado
// ini_set('session.gc_maxlifetime', 0);

// SOMENTE APÓS as configurações, abre a nova seção
// session_start(); 
