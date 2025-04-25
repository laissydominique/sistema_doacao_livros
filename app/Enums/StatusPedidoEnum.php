<?php

enum StatusPedido: int {
    case ABERTO = 1;
    case AUTORIZADO = 2;
    case NEGADO = 3;
}