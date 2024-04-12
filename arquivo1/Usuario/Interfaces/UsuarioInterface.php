<?php

namespace Usuario\Interfaces;

interface UsuarioInterface {
    public function autenticar(string $login, string $senha): bool;
    public function autorizar(): array;
}