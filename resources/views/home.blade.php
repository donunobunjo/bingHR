@extends('layout.main')
@section('sidebar')
@parent
<!-- Includes parent sidebar -->

<p>About us page sidebar</p>
@stop
@section('content')
<!-- <h1>This is about us content page.</h1> -->
<div>
    <div>
    <button style="display:inline;float: right;margin-right =40" type="button" class="btn btn-secondary"
        data-toggle="modal" data-target="#exampleModal">Add User</button>
    </div>
    <br>
    <br>
    <h2 style="display:inline;">List Users</h2>
    
    <form style="display:inline;float: right;margin-right =40">
      <input type="text" placeholder="Search.." name="search">
      <button type="submit"><i class="fa fa-search"></i></button>
    </form>
    <!-- <button style="display:inline;float: right;margin-right =40" type="button" class="btn btn-secondary"
        data-toggle="modal" data-target="#exampleModal">Add User</button> -->
</div>
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true"
    data-keyboard="false" data-backdrop="static">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Add User</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="form-row">
                        <div class="form-group col-md-12">
                            <label for="employeeID">Employee ID *</label>
                            <input type="text" class="form-control" id="employeeID" placeholder="EM10101" require>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="firstName">First Name *</label>
                            <input type="text" class="form-control" id="firstName" placeholder="John" require>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="lastName">Last Name *</label>
                            <input type="text" class="form-control" id="lastName" placeholder="Doe" require>
                        </div>
                        <div class="form-group col-md-4">
                            <label for="lastName">Email ID *</label>
                            <input type="email" class="form-control" id="lastName" placeholder="Doe" require>
                        </div>
                        <div class="form-group col-md-4">
                            <label for="lastName">Mobile No *</label>
                            <input type="tel" class="form-control" id="lastName" placeholder="Doe" require>
                        </div>
                        <div class="form-group col-md-4">
                            <label for="lastName">Role type *</label>
                            <!-- <input type ="text" class="form-control" id="lastName" placeholder="Doe"> -->
                            <select class="form-control" id="sel1">
                                <option>Employee</option>
                                <option>Admin</option>
                                <option>Super Admi</option>
                                <option>HR Admin</option>
                            </select>
                        </div>
                    </div>



                    <table class="table">
                        <thead class="thead-light">
                            <tr>
                                <th scope="col">Module Permission</th>
                                <th scope="col">Read</th>
                                <th scope="col">Write</th>
                                <th scope="col">Delete</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">Super Admin</th>
                                <td><input type="checkbox"></td>
                                <td><input type="checkbox"></td>
                                <td><input type="checkbox"></td>
                            </tr>
                            <tr>
                                <th scope="row">Admin</th>
                                <td><input type="checkbox"></td>
                                <td><input type="checkbox"></td>
                                <td><input type="checkbox"></td>
                            </tr>
                            <tr>
                                <th scope="row">Employee</th>
                                <td><input type="checkbox"></td>
                                <td><input type="checkbox"></td>
                                <td><input type="checkbox"></td>
                            </tr>
                            <tr>
                                <th scope="row">HR Admin</th>
                                <td><input type="checkbox"></td>
                                <td><input type="checkbox"></td>
                                <td><input type="checkbox"></td>
                            </tr>
                        </tbody>
                    </table>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Add User</button>
            </div>
        </div>
    </div>
</div>
<table class="table">
    <thead class="thead-light">
        <tr>
            <th scope="col">Name</th>
            <th scope="col"></th>
            <th scope="col">Created Date</th>
            <th scope="col">Role</th>
            <th scope="col">Action</th>

        </tr>
    </thead>
    <tbody>
        <tr>
            <th scope="row">1</th>
            <td>Mark</td>
            <td>Otto</td>
            <td>lalalalal</td>
            <td><i class="fa fa-edit"></i><i class="fa fa-trash"></i></td>
        </tr>
        <tr>
            <th scope="row">2</th>
            <td>Jacob</td>
            <td>Thornton</td>
            <td>@fat</td>
            <td>@mdo</td>
        </tr>
        <tr>
            <th scope="row">3</th>
            <td>Larry</td>
            <td>the Bird</td>
            <td>@twitter</td>
            <td>@mdo</td>
        </tr>
    </tbody>
</table>
@stop
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
    integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
    crossorigin="anonymous"></script>
<!-- Popper.JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"
    integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ"
    crossorigin="anonymous"></script>
<!-- Bootstrap JS -->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"
    integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm"
    crossorigin="anonymous"></script>

<script type="text/javascript">
    $(document).ready(function () {
        $('#sidebarCollapse').on('click', function () {
            $('#sidebar').toggleClass('active');
        });
    });
</script>
</body>

</html>