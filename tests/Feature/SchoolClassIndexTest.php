<?php

it('shows the school class index page', function () {
    $this->get('/classes')
        ->assertOk()
        ->assertSee('Daftar Kelas');
});
