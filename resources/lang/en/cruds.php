<?php

return [
    'userManagement'          => [
        'title'          => 'User management',
        'title_singular' => 'User management',
    ],
    'permission'              => [
        'title'          => 'Permissions',
        'title_singular' => 'Permission',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => '',
            'title'             => 'Title',
            'title_helper'      => '',
            'created_at'        => 'Created at',
            'created_at_helper' => '',
            'updated_at'        => 'Updated at',
            'updated_at_helper' => '',
            'deleted_at'        => 'Deleted at',
            'deleted_at_helper' => '',
        ],
    ],
    'role'                    => [
        'title'          => 'Roles',
        'title_singular' => 'Role',
        'fields'         => [
            'id'                 => 'ID',
            'id_helper'          => '',
            'title'              => 'Title',
            'title_helper'       => '',
            'permissions'        => 'Permissions',
            'permissions_helper' => '',
            'created_at'         => 'Created at',
            'created_at_helper'  => '',
            'updated_at'         => 'Updated at',
            'updated_at_helper'  => '',
            'deleted_at'         => 'Deleted at',
            'deleted_at_helper'  => '',
        ],
    ],
    'user'                    => [
        'title'          => 'Users',
        'title_singular' => 'User',
        'fields'         => [
            'id'                       => 'ID',
            'id_helper'                => '',
            'name'                     => 'Name',
            'name_helper'              => '',
            'email'                    => 'Email',
            'email_helper'             => '',
            'email_verified_at'        => 'Email verified at',
            'email_verified_at_helper' => '',
            'password'                 => 'Password',
            'password_helper'          => '',
            'roles'                    => 'Roles',
            'roles_helper'             => '',
            'remember_token'           => 'Remember Token',
            'remember_token_helper'    => '',
            'created_at'               => 'Created at',
            'created_at_helper'        => '',
            'updated_at'               => 'Updated at',
            'updated_at_helper'        => '',
            'deleted_at'               => 'Deleted at',
            'deleted_at_helper'        => '',
        ],
    ],
    'store'                   => [
         'title'              => 'Stores',
         'title_singular'     => 'Store',
         'fields'             => [
              'id'            => 'ID',
              'id_helper'     => '',
              'name'          => 'Name',
              'name_helper'   => '',
              'address'       => 'Address',
              'address_helper'=> '',
         ],
    ],
    'category'                => [
         'title'              => 'Categories',
         'title_singular'     => 'Category',
         'fields'             => [
              'id'            => 'ID',
              'id_helper'     => '',
              'name'          => 'Name',
              'name_helper'   => '',
         ],
    ],
    'product'                 => [
         'title'              => 'Products',
         'title_singular'     => 'Product',
         'fields'             => [
               'id'           => 'ID',
               'id_helper'    => '',
               'sku'          => 'SKU',
               'sku_helper'   => '',
               'name'         => 'Name',
               'name_helper'  => '',
               'price'        => 'Price',
               'price_helper' => 'The price is in USD',
               'quantity'     => 'Quantity',
               'quantity_helper'   => '',
               'category'     => 'Product Category',
               'category_helper'   => '',
               'store'        => 'Store',
               'store_helper' => '',
         ],
    ],
    'expenseCategory'         => [
         'title'              => 'Expense Categories',
         'title_singular'     => 'Expense Category',
         'fields'             => [
              'id'            => 'ID',
              'id_helper'     => '',
              'name'          => 'Name',
              'name_helper'   => '',
         ],
    ],
    'expense'                 => [
         'title'              => 'Expenses',
         'title_singular'     => 'Expense',
         'fields'             => [
              'id'            => 'ID',
              'id_helper'     => '',
              'amount'        => 'Amount',
              'amount_helper' => 'Amount is in USD',
              'category'      => 'Expense Category',
              'category_helper'    => '',
              'remark'        => 'Remark',
              'remark_helper' => ''
         ]
    ],
    'incomeCategory'          => [
         'title'              => 'Income Categories',
         'title_singular'     => 'Income Category',
         'fields'             => [
              'id'            => 'ID',
              'id_helper'     => '',
              'name'          => 'Name',
              'name_helper'   => '',
         ]
    ],
    'income'                  => [
         'title'              => 'Incomes',
         'title_singular'     => 'Income',
         'fields'             => [
              'id'            => 'ID',
              'id_helper'     => '',
              'amount'        => 'Amount',
              'amount_helper' => 'Amount is in USD',
              'category'      => 'Income Category',
              'category_helper'    => '',
              'remark'        => 'Remark',
              'remark_helper' => '',
         ],
    ],
    'sale'                    => [
         'title'              => 'Sales',
         'title_singular'     => 'Sale',
         'fields'             => [
              'id'            => 'ID',
              'id_helper'     => '',
              'name'          => 'Customer Name',
              'name_helper'   => '',
              'phone'         => 'Customer Phone',
              'phone_helper'  => '',
              'discount'      => 'Discount',
              'discount_helper'    => '',
              'price'         => 'Price',
              'price_helper'  => '',
              'total'         => 'Total',
              'total_helper'  => '',
              'product'       => 'Product',
              'product_helper'     => '',
              'store'         => 'Store',
              'store_helper'  => '',
              'quantity'      => 'Quantity',
              'quantity_helper'    => '',
              'rate'          => 'Rate',
              'rate_helper'   => '',
              'amount'        => 'Amount',
              'amount_helper' => '',
         ],
    ],
    'target'                  => [
         'title'              => 'Targets',
         'title_singular'     => 'Target',
         'fields'             => [

         ],
    ],
    'hrm'                     => [
          'title'             => 'Human Resources',
          'title_singular'    => 'Human Resource',
          'fields'            => [

          ],
    ],
    'gender'                  => [
         'title'              => 'Genders',
         'title_singular'     => 'Gender',
         'fields'             => [
              'id'            => 'ID',
              'id_helper'     => '',
              'name'          => 'Name',
              'name_helper'   => ''
         ],
    ],
    'department'              => [
         'title'              => 'Departments',
         'title_singular'     => 'Department',
         'fields'             => [
              'id'            => 'ID',
              'id_helper'     => '',
              'name'          => 'Name',
              'name_helper'   => '',
         ],
    ],
    'jobtitle'               => [
         'title'              => 'Job titles',
         'title_singular'     => 'Job title',
         'fields'             => [
              'id'            => 'ID',
              'id_helper'     => '',
              'name'          => 'Name',
              'name_helper'   => '',
         ],
    ],
    'employee'                => [
         'title'              => 'Employees',
         'title_singular'     => 'Employee',
         'fields'             => [
              'id'            => 'ID',
              'id_helper'     => '',
              'name'          => 'Name',
              'name_helper'   => '',
              'gender'        => 'Gender',
              'gender_helper' => '',
              'department'    => 'Department',
              'department_helper'  => '',
              'jobtitle'      => 'Job title',
              'jobtitle_helper'    => '',
              'salary'        => 'Salary',
              'salary_helper' => '',
              'dob'           => 'DOB',
              'dob_helper'    => '',
              'join_date'     => 'Join Date',
              'join_date_helper'   => '',
              'leave_date'    => 'Leave Date',
              'leave_date_helper'  => '',
         ],
    ],
    'report'                  => [
         'title'              => 'Reports',
         'title_singular'     => 'Report',
         'fields'             => [

         ],
         'customer'           => [
              'title'         => 'Customers',
              'title_singular'     => 'Customer',
         ],
         'sale'               => [
              'title'         => 'Daily Sales',
              'title_singular'     => 'Daily Sale'
         ],
         'target'             => [
              'title'         => 'Sale Compare Budgets',
              'title_singular'     => 'Sale Compare Budget'
         ]
    ],
];
