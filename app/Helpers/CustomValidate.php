<?php

namespace App\Helpers;

use Illuminate\Validation\ValidationException;

trait CustomValidate
{

public function validatePassword(string $password): string
{


    // Validações usando expressões regulares
    $lowercase = preg_match('/[a-z]/', $password);
    $uppercase = preg_match('/[A-Z]/', $password);
    $number = preg_match('/[0-9]/', $password);
    $specialchar = preg_match('/[^\w]/', $password); // Caractere não alfanumérico

    // Validação da letra minúscula
    if (!$lowercase) {

        throw ValidationException::withMessages([
            'password' => 'Necessário ter pelo menos uma letra minúscula.',
        ]);
    }

    // EXTRAS (Opcional): Adicione as outras validações
    if (!$uppercase) {
        throw ValidationException::withMessages([
           'password' => 'Necessário pelo menos uma letra maiúscula.',
        ]);
    }

    if (!$number) {
        throw ValidationException::withMessages([
            'password' => 'Necessário pelo menos um número',
        ]);
    }

    if (!$specialchar) {
        throw ValidationException::withMessages([
            'password'=> 'Necessário pelo menos um caractere especial',
        ]);
    }

    // Se todas as validações passaremS
    return $password;
}

}
