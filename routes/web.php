<?php

use Illuminate\Support\Facades\Route;

// Security
Route::view('/register', 'frontend.security.register', ["title" => 'Agribridge - Register'])->name('register');
Route::view('/login', 'frontend.security.login', ["title" => 'Agribridge - Login'])->name('login');

// Organizition
Route::view('/organizition-detail', 'frontend.organizition.organization_detail', ["title" => 'Agribridge - Organization Detail'])->name("get_organization");
Route::view('/organizition-list', 'frontend.organizition.organization_list', ["title" => 'Agribridge - Organization List'])->name("get_organization_list");

// Farmer
Route::view('/edit-farmer', 'frontend.farmer.edit_farmer', ["title" => 'Agribridge - Farmer Edit User'])->name("edit_farmer");
Route::view('/view-farmer-detail', 'frontend.farmer.view_farmer_details', ["title" => 'Agribridge - Farmer Detail'])->name("view_farmer_detail");

// User
Route::view('/userprofile', 'frontend.security.user_edit', ["title" => 'Agribridge - User Profile'])->name("userprofile");