<?php
namespace Usuario\Factory;

use Usuario\Interfaces\UsuarioInterface;
use Usuario\Models\Professor;
use Usuario\Models\Administrador;
Use Usuario\Models\AdministradorSupremo;

class UsuarioFactory {
    public static function criar(string $perfil): UsuarioInterface {
        switch ($perfil) {
            case 'professor':
                return new Professor();
            case 'administrador':
                return new Administrador();
            case 'administrador_supremo':
                return new AdministradorSupremo();
            default:
                throw new \Exception('Perfil inválido');
        }
    }
}