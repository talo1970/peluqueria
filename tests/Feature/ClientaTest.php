<?php

    use App\Models\Clientas;

test('example', function () {
    $response = $this->get('/');

    $response->assertStatus(200);
});

    test('tiene un número de documento', function () {
        $clienta = Clientas::factory()->create(['numero_documento' => '21652610']);

        expect($clienta->numero_documento)->toBe('21652610');
    });
