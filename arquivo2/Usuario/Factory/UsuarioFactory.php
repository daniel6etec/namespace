<?php
namespace Usuario\Factory;

use Usuario\Abstract\AbstractUsuario;
use Usuario\Models\Professor;
use Usuario\Models\Administrador;
use Usuario\Models\AdministradorSupremo;


class UsuarioFactory {
    public static function criar(string $perfil): AbstractUsuario {
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