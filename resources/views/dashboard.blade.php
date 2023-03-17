<x-master-layout>
    @section('title') Dashboard @endsection
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row pt-3">

          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            {{-- @php
              $countbuku = \App\Models\User::count("id");
            @endphp --}}
              <div class="small-box bg-success">
                <div class="inner">
                  <h3>s</h3>
                  <p>Staff</p>
                </div>
                <div class="icon">
                  <i class="ion ion-briefcase"></i>
                </div>

              </div>
          </div>

          <!-- ./col -->

          {{-- //here to add --}}
          <!-- ./col -->

        </div>
        <!-- /.row -->
        <!-- Main row -->
        <div class="row">
          <!-- Left col -->
          <section class="col-lg-12 connectedSortable">
            <!-- Custom tabs (Charts with tabs)-->
            <!-- TO DO List -->
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">
                  <i class="ion ion-clipboard mr-1"></i>
                  User Profile
                </h3>
              </div>
              <div class="card-body">
                @livewire('profile.update-profile-information-form')
              </div>
            </div>
            <!-- /.card -->
          </section>
          <!-- /.Left col -->
          <!-- right col (We are only adding the ID to make the widgets sortable)-->
          <section class="col-lg-12 connectedSortable">
          </section>
          <!-- right col -->
        </div>
        <!-- /.row (main row) -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </x-master-layout>
