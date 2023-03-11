<?php declare(strict_types=1);

namespace App\Enums;

use BenSampo\Enum\Enum;

class ErrorMessages extends Enum
{
    const USER_ALREADY_EXIST = 'Пользователь с данным именем уже зарегистрирован';
}
