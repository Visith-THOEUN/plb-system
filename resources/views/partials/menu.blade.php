<aside class="main-sidebar sidebar-dark-primary elevation-4" style="min-height: 917px;">
    <!-- Brand Logo -->
    <a href="/" class="brand-link">
        <span class="brand-text font-weight-light">{{ trans('panel.site_title') }}</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user (optional) -->

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
               <li class="nav-item">
                   <a href="/" class="nav-link {{ request()->is('admin') ? 'active' : '' }}">
                       <i class="fas fa-tachometer-alt"></i>
                       <p>
                           <span>Dashboard</span>
                       </p>
                   </a>
               </li>
               @can('product_access')
               <li class="nav-item">
                    <a href="{{ route("admin.products.index") }}" class="nav-link {{ request()->is('admin/products') || request()->is('admin/products/*') ? 'active': '' }}">
                         <i class="fas fa-cubes"></i>
                         <p>
                              <span>{{ trans('cruds.product.title')}}</span>
                         </p>
                    </a>
               </li>
               @endcan

               @can('category_access')
               <li class="nav-item">
                    <a href="{{ route("admin.categories.index") }}" class="nav-link {{ request()->is('admin/categories') || request()->is('admin/categories/*') ? 'active': '' }}">
                         <i class="fas fa-list"></i>
                         <p>
                              <span>{{ trans('cruds.category.title')}}</span>
                         </p>
                    </a>
               </li>
               @endcan
               @can('store_access')
              <li class="nav-item">
                  <a href="{{ route("admin.stores.index") }}" class="nav-link {{ request()->is('admin/stores') || request()->is('admin/stores/*') ? 'active' : '' }}">
                     <i class="fas fa-store"></i>
                     <p>
                          <span>{{ trans('cruds.store.title') }}</span>
                     </p>
                  </a>
              </li>
               @endcan
               @can('expense_category_access')
               <li class="nav-item">
                    <a href="{{ route('admin.expenseCategories.index')}}" class="nav-link {{ request()->is('admin/expenseCategory') || request()->is('admin/expenseCategory/*') ? 'active': ''}}">
                         <i class="fas fa-money-check"></i>
                         <p>
                              <span>{{ trans('cruds.expenseCategory.title')}}</span>
                         </p>
                    </a>
               </li>
               @endcan
               @can('expense_access')
               <li class="nav-item">
                    <a href="{{ route('admin.expenses.index') }}" class="nav-link {{ request()->is('admin/expenses') || request()->is('admin/expenses/*') ? 'active': ''}}">
                         <i class="fas fa-money-bill-alt"></i>
                         <p>
                              <span>{{ trans('cruds.expense.title') }}</span>
                         </p>
                    </a>
               </li>
               @endcan
               @can('income_category_access')
               <li class="nav-item">
                    <a href="{{ route('admin.incomeCategories.index') }}" class="nav-link {{ request()->is('admin/incomeCategories') || request()->is('admin/incomeCategories/*') ? 'active': ''}}">
                         <i class="fas fa-file-invoice-dollar"></i>
                         <p>
                              <span>{{ trans('cruds.incomeCategory.title')}}</span>
                         </p>
                    </a>
               </li>
               @endcan
               @can('income_access')
               <li class="nav-item">
                    <a href="{{ route('admin.incomes.index')}}" class="nav-link {{ request()->is('admin/incomes') || request()->is('admin/incomes/*') ? 'active': '' }}">
                         <i class="fas fa-money-bill-alt"></i>
                         <p>
                              <span>{{ trans('cruds.income.title') }}</span>
                         </p>
                    </a>
               </li>
               @endcan
               @can('sale_access')
               <li class="nav-item">
                    <a href="{{ route('admin.sales.index') }}" class="nav-link {{ request()->is('admin/sales') || request()->is('admin/sales/*') ? 'active': '' }}">
                         <i class="fas fa-shopping-cart"></i>
                         <p>
                              <span>{{ trans('cruds.sale.title')}}</span>
                         </p>
                    </a>
               </li>
               @endcan
               @can('target_access')
               <li class="nav-item">
                    <a href="{{ route('admin.dailytargets.index') }}" class="nav-link {{ request()->is('admin/dailytargets') || request()->is('admin/sales/*') ? 'active': '' }}">
                         <i class="fas fa-map-pin"></i>
                         <p>
                              <span>{{ trans('cruds.target.title')}}</span>
                         </p>
                    </a>
               </li>
               @endcan

               @can('hrm_access')
               <li class="nav-item has-treeview {{ request()->is('admin/gender*') ? 'menu-open' : '' }} {{ request()->is('admin/department*') ? 'menu-open' : '' }} {{ request()->is('admin/jobtitle*') ? 'menu-open' : '' }}">
                   <a class="nav-link nav-dropdown-toggle" href="#">
                        <i class="fas fa-user-graduate"></i>
                       <p>
                          <span>{{ trans('cruds.hrm.title') }}</span>
                          <i class="right fa fa-fw fa-angle-left"></i>
                       </p>
                   </a>
                   <ul class="nav nav-treeview">
                       @can('gender_access')
                          <li class="nav-item">
                               <a href="{{ route("admin.genders.index") }}" class="nav-link {{ request()->is('admin/genders') || request()->is('admin/genders/*') ? 'active' : '' }}">
                                   <i class="fas fa-venus-mars"></i>
                                   <p>
                                       <span>{{ trans('cruds.gender.title') }}</span>
                                   </p>
                               </a>
                          </li>
                       @endcan
                       @can('department_access')
                          <li class="nav-item">
                               <a href="{{ route("admin.departments.index") }}" class="nav-link {{ request()->is('admin/departments') || request()->is('admin/departments/*') ? 'active' : '' }}">
                                   <i class="fas fa-building"></i>
                                   <p>
                                       <span>{{ trans('cruds.department.title') }}</span>
                                   </p>
                               </a>
                          </li>
                       @endcan
                       @can('jobtitle_access')
                          <li class="nav-item">
                               <a href="{{ route("admin.jobtitles.index") }}" class="nav-link {{ request()->is('admin/jobtitle') || request()->is('admin/jobtitle/*') ? 'active' : '' }}">
                                   <i class="fas fa-briefcase"></i>
                                   <p>
                                       <span>{{ trans('cruds.jobtitle.title') }}</span>
                                   </p>
                               </a>
                          </li>
                       @endcan
                       @can('employee_access')
                       <li class="nav-item">
                            <a href="{{ route("admin.employees.index") }}" class="nav-link {{ request()->is('admin/employee') || request()->is('admin/employee/*') ? 'active' : '' }}">
                               <i class="fas fa-user-clock"></i>
                               <p>
                                    <span>{{ trans('cruds.employee.title') }}</span>
                               </p>
                            </a>
                       </li>
                       @endcan
                   </ul>
               </li>
               @endcan
               @can('report_access')
               <li class="nav-item has-treeview {{ request()->is('admin/report*') ? 'menu-open' : '' }}">
                   <a class="nav-link nav-dropdown-toggle" href="#">
                       <i class="fas fa-chart-line"></i>
                       <p>
                          <span>{{ trans('cruds.report.title') }}</span>
                          <i class="right fa fa-fw fa-angle-left"></i>
                       </p>
                   </a>
                   <ul class="nav nav-treeview">
                          <li class="nav-item">
                               <a href="#" class="nav-link {{ request()->is('admin/report/customer') ? 'active' : '' }}">
                                   <i class="fas fa-user-friends"></i>
                                   <p>
                                       <span>{{ trans('cruds.report.customer.title') }}</span>
                                   </p>
                               </a>
                          </li>
                          <li class="nav-item">
                               <a href="#" class="nav-link {{ request()->is('admin/report/sale')  ? 'active' : '' }}">
                                   <i class="fas fa-piggy-bank"></i>
                                   <p>
                                       <span>{{ trans('cruds.report.sale.title') }}</span>
                                   </p>
                               </a>
                          </li>
                          <li class="nav-item">
                               <a href="#" class="nav-link {{ request()->is('admin/report/target') ? 'active' : '' }}">
                                  <i class="fas fa-chart-bar"></i>
                                  <p>
                                       <span>{{ trans('cruds.report.target.title') }}</span>
                                  </p>
                               </a>
                          </li>
                   </ul>
               </li>
               @endcan
               @can('user_management_access')
                    <li class="nav-item has-treeview {{ request()->is('admin/permissions*') ? 'menu-open' : '' }} {{ request()->is('admin/roles*') ? 'menu-open' : '' }} {{ request()->is('admin/users*') ? 'menu-open' : '' }}">
                        <a class="nav-link nav-dropdown-toggle" href="#">
                            <i class="fa-fw fas fa-users">

                            </i>
                            <p>
                                <span>{{ trans('cruds.userManagement.title') }}</span>
                                <i class="right fa fa-fw fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            @can('permission_access')
                                <li class="nav-item">
                                    <a href="{{ route("admin.permissions.index") }}" class="nav-link {{ request()->is('admin/permissions') || request()->is('admin/permissions/*') ? 'active' : '' }}">
                                        <i class="fa-fw fas fa-unlock-alt">

                                        </i>
                                        <p>
                                            <span>{{ trans('cruds.permission.title') }}</span>
                                        </p>
                                    </a>
                                </li>
                            @endcan
                            @can('role_access')
                                <li class="nav-item">
                                    <a href="{{ route("admin.roles.index") }}" class="nav-link {{ request()->is('admin/roles') || request()->is('admin/roles/*') ? 'active' : '' }}">
                                        <i class="fa-fw fas fa-briefcase">

                                        </i>
                                        <p>
                                            <span>{{ trans('cruds.role.title') }}</span>
                                        </p>
                                    </a>
                                </li>
                            @endcan
                            @can('user_access')
                                <li class="nav-item">
                                    <a href="{{ route("admin.users.index") }}" class="nav-link {{ request()->is('admin/users') || request()->is('admin/users/*') ? 'active' : '' }}">
                                        <i class="fa-fw fas fa-user">

                                        </i>
                                        <p>
                                            <span>{{ trans('cruds.user.title') }}</span>
                                        </p>
                                    </a>
                                </li>
                            @endcan
                        </ul>
                    </li>
                @endcan


                <li class="nav-item">
                    <a href="#" class="nav-link" onclick="event.preventDefault(); document.getElementById('logoutform').submit();">
                        <p>
                            <i class="fas fa-fw fa-sign-out-alt">

                            </i>
                            <span>{{ trans('global.logout') }}</span>
                        </p>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
