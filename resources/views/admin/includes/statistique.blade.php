
<div class="row">
    
    <div class="col-12 col-sm-6 col-md-3">
      <a href="{{ url('admin/passagers') }}" class="info-box">
        <span class="info-box-icon bg-info elevation-1">
        <i class="nav-icon fas fa-book"></i>
        </span>

        <div class="info-box-content">
          <span class="info-box-text text-dark">
              Passagers
          </span>
          <span class="info-box-number text-dark">
              {{ App\Models\User::where('role', 'passager')->count() }}
          </span>
        </div>
        <!-- /.info-box-content -->
      </a>
      <!-- /.info-box -->
    </div>
    <div class="col-12 col-sm-6 col-md-3">
      <a href="{{ url('admin/conducteurs') }}" class="info-box">
        <span class="info-box-icon bg-info elevation-1">
        <i class="nav-icon fas fa-book"></i>
        </span>

        <div class="info-box-content">
          <span class="info-box-text text-dark">
              Conducteurs
          </span>
          <span class="info-box-number text-dark">
              {{ App\Models\User::where('role', 'conducteur')->count() }}
          </span>
        </div>
        <!-- /.info-box-content -->
      </a>
      <!-- /.info-box -->
    </div>
    <div class="col-12 col-sm-6 col-md-3">
      <a href="{{ url('admin/trajets') }}" class="info-box">
        <span class="info-box-icon bg-info elevation-1">
          <i class="nav-icon fas fa-book"></i>
        </span>

        <div class="info-box-content">
          <span class="info-box-text text-dark">
              Trajets
          </span>
          <span class="info-box-number text-dark">
              {{ App\Models\Trajet::count() }}
          </span>
        </div>
        <!-- /.info-box-content -->
      </a>
      <!-- /.info-box -->
    </div>
  <!-- /.col -->
</div>