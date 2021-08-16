<aside class="main-sidebar sidebar-dark-primary elevation-4" style="min-height: 917px;">
    <!-- Brand Logo -->
    <a href="/" class="brand-link">
        <span class="brand-text font-weight-light"><?php echo e(trans('panel.site_title')); ?></span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user (optional) -->

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
               <li class="nav-item">
                   <a href="/" class="nav-link <?php echo e(request()->is('admin') ? 'active' : ''); ?>">
                       <i class="fas fa-tachometer-alt"></i>
                       <p>
                           <span>Dashboard</span>
                       </p>
                   </a>
               </li>
               <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('product_access')): ?>
               <li class="nav-item">
                    <a href="<?php echo e(route("admin.products.index")); ?>" class="nav-link <?php echo e(request()->is('admin/products') || request()->is('admin/products/*') ? 'active': ''); ?>">
                         <i class="fas fa-cubes"></i>
                         <p>
                              <span><?php echo e(trans('cruds.product.title')); ?></span>
                         </p>
                    </a>
               </li>
               <?php endif; ?>

               <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('category_access')): ?>
               <li class="nav-item">
                    <a href="<?php echo e(route("admin.categories.index")); ?>" class="nav-link <?php echo e(request()->is('admin/categories') || request()->is('admin/categories/*') ? 'active': ''); ?>">
                         <i class="fas fa-list"></i>
                         <p>
                              <span><?php echo e(trans('cruds.category.title')); ?></span>
                         </p>
                    </a>
               </li>
               <?php endif; ?>
               <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('store_access')): ?>
              <li class="nav-item">
                  <a href="<?php echo e(route("admin.stores.index")); ?>" class="nav-link <?php echo e(request()->is('admin/stores') || request()->is('admin/stores/*') ? 'active' : ''); ?>">
                     <i class="fas fa-store"></i>
                     <p>
                          <span><?php echo e(trans('cruds.store.title')); ?></span>
                     </p>
                  </a>
              </li>
               <?php endif; ?>
               <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('expense_category_access')): ?>
               <li class="nav-item">
                    <a href="<?php echo e(route('admin.expenseCategories.index')); ?>" class="nav-link <?php echo e(request()->is('admin/expenseCategory') || request()->is('admin/expenseCategory/*') ? 'active': ''); ?>">
                         <i class="fas fa-money-check"></i>
                         <p>
                              <span><?php echo e(trans('cruds.expenseCategory.title')); ?></span>
                         </p>
                    </a>
               </li>
               <?php endif; ?>
               <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('expense_access')): ?>
               <li class="nav-item">
                    <a href="<?php echo e(route('admin.expenses.index')); ?>" class="nav-link <?php echo e(request()->is('admin/expenses') || request()->is('admin/expenses/*') ? 'active': ''); ?>">
                         <i class="fas fa-money-bill-alt"></i>
                         <p>
                              <span><?php echo e(trans('cruds.expense.title')); ?></span>
                         </p>
                    </a>
               </li>
               <?php endif; ?>
               <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('income_category_access')): ?>
               <li class="nav-item">
                    <a href="<?php echo e(route('admin.incomeCategories.index')); ?>" class="nav-link <?php echo e(request()->is('admin/incomeCategories') || request()->is('admin/incomeCategories/*') ? 'active': ''); ?>">
                         <i class="fas fa-file-invoice-dollar"></i>
                         <p>
                              <span><?php echo e(trans('cruds.incomeCategory.title')); ?></span>
                         </p>
                    </a>
               </li>
               <?php endif; ?>
               <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('income_access')): ?>
               <li class="nav-item">
                    <a href="<?php echo e(route('admin.incomes.index')); ?>" class="nav-link <?php echo e(request()->is('admin/incomes') || request()->is('admin/incomes/*') ? 'active': ''); ?>">
                         <i class="fas fa-money-bill-alt"></i>
                         <p>
                              <span><?php echo e(trans('cruds.income.title')); ?></span>
                         </p>
                    </a>
               </li>
               <?php endif; ?>
               <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('sale_access')): ?>
               <li class="nav-item">
                    <a href="<?php echo e(route('admin.sales.index')); ?>" class="nav-link <?php echo e(request()->is('admin/sales') || request()->is('admin/sales/*') ? 'active': ''); ?>">
                         <i class="fas fa-shopping-cart"></i>
                         <p>
                              <span><?php echo e(trans('cruds.sale.title')); ?></span>
                         </p>
                    </a>
               </li>
               <?php endif; ?>
               <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('target_access')): ?>
               <li class="nav-item">
                    <a href="<?php echo e(route('admin.dailytargets.index')); ?>" class="nav-link <?php echo e(request()->is('admin/dailytargets') || request()->is('admin/sales/*') ? 'active': ''); ?>">
                         <i class="fas fa-map-pin"></i>
                         <p>
                              <span><?php echo e(trans('cruds.target.title')); ?></span>
                         </p>
                    </a>
               </li>
               <?php endif; ?>

               <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('hrm_access')): ?>
               <li class="nav-item has-treeview <?php echo e(request()->is('admin/gender*') ? 'menu-open' : ''); ?> <?php echo e(request()->is('admin/department*') ? 'menu-open' : ''); ?> <?php echo e(request()->is('admin/jobtitle*') ? 'menu-open' : ''); ?>">
                   <a class="nav-link nav-dropdown-toggle" href="#">
                        <i class="fas fa-user-graduate"></i>
                       <p>
                          <span><?php echo e(trans('cruds.hrm.title')); ?></span>
                          <i class="right fa fa-fw fa-angle-left"></i>
                       </p>
                   </a>
                   <ul class="nav nav-treeview">
                       <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('gender_access')): ?>
                          <li class="nav-item">
                               <a href="<?php echo e(route("admin.genders.index")); ?>" class="nav-link <?php echo e(request()->is('admin/genders') || request()->is('admin/genders/*') ? 'active' : ''); ?>">
                                   <i class="fas fa-venus-mars"></i>
                                   <p>
                                       <span><?php echo e(trans('cruds.gender.title')); ?></span>
                                   </p>
                               </a>
                          </li>
                       <?php endif; ?>
                       <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('department_access')): ?>
                          <li class="nav-item">
                               <a href="<?php echo e(route("admin.departments.index")); ?>" class="nav-link <?php echo e(request()->is('admin/departments') || request()->is('admin/departments/*') ? 'active' : ''); ?>">
                                   <i class="fas fa-building"></i>
                                   <p>
                                       <span><?php echo e(trans('cruds.department.title')); ?></span>
                                   </p>
                               </a>
                          </li>
                       <?php endif; ?>
                       <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('jobtitle_access')): ?>
                          <li class="nav-item">
                               <a href="<?php echo e(route("admin.jobtitles.index")); ?>" class="nav-link <?php echo e(request()->is('admin/jobtitle') || request()->is('admin/jobtitle/*') ? 'active' : ''); ?>">
                                   <i class="fas fa-briefcase"></i>
                                   <p>
                                       <span><?php echo e(trans('cruds.jobtitle.title')); ?></span>
                                   </p>
                               </a>
                          </li>
                       <?php endif; ?>
                       <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('employee_access')): ?>
                       <li class="nav-item">
                            <a href="<?php echo e(route("admin.employees.index")); ?>" class="nav-link <?php echo e(request()->is('admin/employee') || request()->is('admin/employee/*') ? 'active' : ''); ?>">
                               <i class="fas fa-user-clock"></i>
                               <p>
                                    <span><?php echo e(trans('cruds.employee.title')); ?></span>
                               </p>
                            </a>
                       </li>
                       <?php endif; ?>
                   </ul>
               </li>
               <?php endif; ?>
               <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('report_access')): ?>
               <li class="nav-item has-treeview <?php echo e(request()->is('admin/report*') ? 'menu-open' : ''); ?>">
                   <a class="nav-link nav-dropdown-toggle" href="#">
                       <i class="fas fa-chart-line"></i>
                       <p>
                          <span><?php echo e(trans('cruds.report.title')); ?></span>
                          <i class="right fa fa-fw fa-angle-left"></i>
                       </p>
                   </a>
                   <ul class="nav nav-treeview">
                          <li class="nav-item">
                               <a href="#" class="nav-link <?php echo e(request()->is('admin/report/customer') ? 'active' : ''); ?>">
                                   <i class="fas fa-user-friends"></i>
                                   <p>
                                       <span><?php echo e(trans('cruds.report.customer.title')); ?></span>
                                   </p>
                               </a>
                          </li>
                          <li class="nav-item">
                               <a href="#" class="nav-link <?php echo e(request()->is('admin/report/sale')  ? 'active' : ''); ?>">
                                   <i class="fas fa-piggy-bank"></i>
                                   <p>
                                       <span><?php echo e(trans('cruds.report.sale.title')); ?></span>
                                   </p>
                               </a>
                          </li>
                          <li class="nav-item">
                               <a href="#" class="nav-link <?php echo e(request()->is('admin/report/target') ? 'active' : ''); ?>">
                                  <i class="fas fa-chart-bar"></i>
                                  <p>
                                       <span><?php echo e(trans('cruds.report.target.title')); ?></span>
                                  </p>
                               </a>
                          </li>
                   </ul>
               </li>
               <?php endif; ?>
               <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('user_management_access')): ?>
                    <li class="nav-item has-treeview <?php echo e(request()->is('admin/permissions*') ? 'menu-open' : ''); ?> <?php echo e(request()->is('admin/roles*') ? 'menu-open' : ''); ?> <?php echo e(request()->is('admin/users*') ? 'menu-open' : ''); ?>">
                        <a class="nav-link nav-dropdown-toggle" href="#">
                            <i class="fa-fw fas fa-users">

                            </i>
                            <p>
                                <span><?php echo e(trans('cruds.userManagement.title')); ?></span>
                                <i class="right fa fa-fw fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('permission_access')): ?>
                                <li class="nav-item">
                                    <a href="<?php echo e(route("admin.permissions.index")); ?>" class="nav-link <?php echo e(request()->is('admin/permissions') || request()->is('admin/permissions/*') ? 'active' : ''); ?>">
                                        <i class="fa-fw fas fa-unlock-alt">

                                        </i>
                                        <p>
                                            <span><?php echo e(trans('cruds.permission.title')); ?></span>
                                        </p>
                                    </a>
                                </li>
                            <?php endif; ?>
                            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('role_access')): ?>
                                <li class="nav-item">
                                    <a href="<?php echo e(route("admin.roles.index")); ?>" class="nav-link <?php echo e(request()->is('admin/roles') || request()->is('admin/roles/*') ? 'active' : ''); ?>">
                                        <i class="fa-fw fas fa-briefcase">

                                        </i>
                                        <p>
                                            <span><?php echo e(trans('cruds.role.title')); ?></span>
                                        </p>
                                    </a>
                                </li>
                            <?php endif; ?>
                            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('user_access')): ?>
                                <li class="nav-item">
                                    <a href="<?php echo e(route("admin.users.index")); ?>" class="nav-link <?php echo e(request()->is('admin/users') || request()->is('admin/users/*') ? 'active' : ''); ?>">
                                        <i class="fa-fw fas fa-user">

                                        </i>
                                        <p>
                                            <span><?php echo e(trans('cruds.user.title')); ?></span>
                                        </p>
                                    </a>
                                </li>
                            <?php endif; ?>
                        </ul>
                    </li>
                <?php endif; ?>


                <li class="nav-item">
                    <a href="#" class="nav-link" onclick="event.preventDefault(); document.getElementById('logoutform').submit();">
                        <p>
                            <i class="fas fa-fw fa-sign-out-alt">

                            </i>
                            <span><?php echo e(trans('global.logout')); ?></span>
                        </p>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
<?php /**PATH /Users/macbook/Programming/sith/laramission/resources/views/partials/menu.blade.php ENDPATH**/ ?>