<?php

use App\Models\User;
use Spatie\Permission\Models\Role;

test('admin/medicine pages exists and returns data', function () {
    // create user
    $admin = User::factory()->create(['email' => 'admin@admin.com']);
    Role::create(['name' => 'admin']);
    $admin->assignRole('admin');
    $this->actingAs($admin);
    $response = $this->get('/admin/medicines');
    $response->assertStatus(200);
});

test('non admin user gets 403 error', function () {
    $user = User::factory()->create(['email' => 'admin@admin.com']);
    $this->actingAs($user);
    $response = $this->get('/admin/medicines');
    $response->assertStatus(403);
});
