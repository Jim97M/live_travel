<div>
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Appointment</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Dashboard </a></li>
                        <li class="breadcrumb-item active">Appointment</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>


    <!-- Main content -->
    <div class="content">
        <div class="container-fluid">
            <!-- @if(session()->has('message'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
              <strong><i class="fa fa-check-circle mr-1"></i> {{session('message')}}</strong> 
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
            </div>
            @endif -->
            <div class="col-lg-12">
                    <div class="d-flex justify-content-end mb-2">
                        <a href="{{route('admin.appointments.create')}}">
                          <button class="btn btn-primary">
                            <i class="fa fa-plus-circle mr-1"></i> Add New Appointment
                          </button>
                        </a>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Client Name</th>
                                        <th scope="col">Date</th>
                                        <th scope="col">Time</th>
                                        <th scope="col">Status</th>
                                        <th scope="col">Options</th>
                                    </tr>
                                </thead>
                                <tbody>
                     
                                    <tr>
                                        <th scope="row">1</th>
                                        <td>Client Name</td>
                                        <td>Date</td>
                                        <td>Time</td>
                                        <td>Status</td>
                                        <td>

                                            <a href="">
                                                <i class="fa fa-edit mr-2"></i>
                                            </a>

                                            <a href="">
                                                <i class="fa fa-trash text-danger"></i>
                                            </a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="card-footer d-flex justify-content-end">
           
                        </div>
                    </div>
                </div>
                <!-- /.col-md-6 -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
    <div class="modal fade" id="confirmationModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" wire:ignore.self aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="model-header"> <h4>Delete User</h4></div>
                <div class="modal-body"> <h5>Are You Sure You Want To Delete User?</h5> </div>
                <div class="modal-footer"> 
                <button type="button" class="btn btn-secondary" data-dismiss="modal"> <i class="fa fa-times mr-1"></i> Cancel</button>
                        <button type="submit" wire:click.prevent="deleteUser" class="btn btn-danger"> <i class="fa fa-trash mr-1">Delete</i> 
                </div>
            </div>
        </div>
    </div>
</div>