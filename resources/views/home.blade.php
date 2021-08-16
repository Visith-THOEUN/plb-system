@extends('layouts.admin')
@section('content')
<div class="content">
    <div class="row">
         <!-- Today Sale -->
         <div class="col">
              <div class="small-box bg-success">
                    <div class="inner">
                         <h3>{{ $sale }}</h3>
                         <p>Today sales</p>
                    </div>
                    <div class="icon">
                         <i class="fas fa-shopping-cart"></i>
                    </div>
                    <a href="{{ route('admin.sales.index' )}}" class="small-box-footer">
                         Go to Sales <i class="fas fa-arrow-circle-right"></i>
                    </a>
              </div>
        </div>
         <!-- Products -->
         <div class="col">
              <div class="small-box bg-info">
                    <div class="inner">
                         <h3>{{ $product }}</h3>
                         <p>Kind of Product</p>
                    </div>
                    <div class="icon">
                         <i class="fas fa-cubes"></i>
                    </div>
                    <a href="{{ route('admin.products.index') }}" class="small-box-footer">
                         Go to Products <i class="fas fa-arrow-circle-right"></i>
                    </a>
              </div>
         </div>
         <!-- Number of users -->
         @can('user_access')
         <div class="col">
              <div class="small-box bg-primary">
                    <div class="inner">
                         <h3>{{ $user }}</h3>
                         <p>Users</p>
                    </div>
                    <div class="icon">
                         <i class="fas fa-users"></i>
                    </div>
                    <a href="{{ route('admin.users.index') }}" class="small-box-footer">
                         Go to Users <i class="fas fa-arrow-circle-right"></i>
                    </a>
              </div>
        </div>
        @endcan
         <!-- Store -->
         <div class="col">
              <div class="small-box bg-danger">
                    <div class="inner">
                         <h3>{{ $store }}</h3>
                         <p>Stores</p>
                    </div>
                    <div class="icon">
                         <i class="fas fa-store"></i>
                    </div>
                    <a href="{{ route('admin.stores.index' )}}" class="small-box-footer">
                         Go to Stores <i class="fas fa-arrow-circle-right"></i>
                    </a>
              </div>
         </div>
    </div>
     <!-- Chart.JS
     <div class="mt-5">
         <canvas id="myChart" width="400" height="150"></canvas>
     </div>
     <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
     <script defer>
          var ctx = document.getElementById('myChart').getContext('2d');
          let dates = <?php echo json_encode($sale_date); ?>;
          let datas = <?php echo json_encode($sale_data); ?>;
          var myChart = new Chart(ctx, {
              type: 'bar',
              data: {
                  labels: dates.reverse(),
                  datasets: [{
                      label: 'Sale in last 15 days',
                      data: datas.reverse(),
                      backgroundColor: [
                          'rgba(54, 162, 235, 0.2)',
                          'rgba(54, 162, 0, 0.2)',
                      ],
                      borderColor: [
                          'rgba(54, 162, 235, 1)',
                          'rgba(54, 162, 0, 1)',
                      ],
                      borderWidth: 1
                  }]
              },
              options: {
                  scales: {
                      y: {
                          beginAtZero: true,
                          ticks: {
                               stepSize: 1
                          },
                      }
                  }
              }
          });
     </script>
     -->
</div>
@endsection
@section('scripts')
@endsection
