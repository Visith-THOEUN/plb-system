<?php

Route::redirect('/', '/login');
Route::redirect('/home', '/admin');
Auth::routes(['register' => false]);

Route::group(['prefix' => 'admin', 'as' => 'admin.', 'namespace' => 'Admin', 'middleware' => ['auth']], function () {
    Route::get('/', 'HomeController@index')->name('home');
    // Permissions
    Route::delete('permissions/destroy', 'PermissionsController@massDestroy')->name('permissions.massDestroy');
    Route::resource('permissions', 'PermissionsController');

    // Roles
    Route::delete('roles/destroy', 'RolesController@massDestroy')->name('roles.massDestroy');
    Route::resource('roles', 'RolesController');

    // Users
    Route::delete('users/destroy', 'UsersController@massDestroy')->name('users.massDestroy');
    Route::resource('users', 'UsersController');

    // Stores
    Route::delete('store/destroy', 'StoreController@massDestroy')->name('stores.massDestroy');
    Route::resource('stores', 'StoreController');

    // Category
    Route::delete('category/destroy', 'CategoryController@massDestroy')->name('categories.massDestroy');
    Route::resource('categories', 'CategoryController');

    // Product
    Route::delete('product/destroy', 'ProductController@massDestroy')->name('products.massDestroy');
    Route::resource('products', 'ProductController');

    // Expense Category
    Route::delete('expenseCategory/destroy', 'ExpenseCategoryController@massDestroy')->name('expenseCategories.massDestroy');
    Route::resource('expenseCategories', 'ExpenseCategoryController');

    // Expense
    Route::delete('expense/destroy', 'ExpenseController@massDestroy')->name('expenses.massDestroy');
    Route::resource('expenses', 'ExpenseController');

    // Income Category
    Route::delete('incomeCategory/destroy', 'IncomeCategoryController@massDestroy')->name('incomeCategories.massDestroy');
    Route::resource('incomeCategories', 'IncomeCategoryController');

    // Income
    Route::delete('income/destroy', 'IncomeController@massDestroy')->name('incomes.massDestroy');
    Route::resource('incomes', 'Incomecontroller');

    // Sale
    Route::delete('sale/destroy', 'SaleController@massDestroy')->name('sales.massDestroy');
    Route::resource('sales', 'SaleController');

    // Daily Target
    Route::resource('dailytargets', 'DailyTargetController');

    // Gender
    Route::delete('gender/destroy', 'GenderController@massDestroy')->name('genders.massDestroy');
    Route::resource('genders', 'GenderController');

    // Department
    Route::delete('departments/destroy', 'DepartmentController@massDestroy')->name('departments.massDestroy');
    Route::resource('departments', 'DepartmentController');

    // Job Title
    Route::delete('jobtitles/destroy', 'JobTitleController@massDestroy')->name('jobtitles.massDestroy');
    Route::resource('jobtitles', 'JobTitleController');

    // Employee
    Route::delete('employees/destroy', 'EmployeeController@massDestroy')->name('employees.massDestroy');
    Route::resource('employees', 'EmployeeController');


});

// URL::forceScheme('https');
