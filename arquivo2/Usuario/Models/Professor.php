<?php
namespace Usuario\Models;

use Usuario\Abstract\AbstractUsuario;

class Professor extends AbstractUsuario {
    public function autenticar(string $login, string $senha): bool {
  
      return true;
    }
  
    public function autorizar(): array {
      return ['acessar_materiais', 'gerenciar_notas'];
    }
  }