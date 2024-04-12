<?php
namespace Usuario\Models;

use Usuario\Abstract\AbstractUsuario;

class Administrador extends AbstractUsuario {
  public function autenticar(string $login, string $senha): bool {

    return true;
  }

  public function autorizar(): array {
    return ['gerenciar_usuarios', 'gerenciar_cursos'];
  }
}