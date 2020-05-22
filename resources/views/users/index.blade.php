@extends('layouts.app', ['activePage' => 'user', 'titlePage' => __('User')])

@section('content')
 <div class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
          <div class="card">
            <div class="card-header card-header-primary">
              <h4 class="card-title ">Kelola Data User</h4>
            </div>
            <div class="card-body">
                              <div class="row">
                <div class="col-12 text-right">
                  <a href="#" class="btn btn-sm btn-primary">Add user</a>
                </div>
              </div>
              <div class="table-responsive">
                <table class="table">
                  <thead class=" text-primary">
                    <tr>
                      <th>Name</th>
                      <th>Email</th>
                      <th>Password</th>
                      <th>Level</th>
                      <th class="text-right">
                        Actions
                      </th>
                    </tr>
                  </thead>
                                    <tbody>
                    <tr>
                        <td>
                          admin
                        </td>
                        <td>
                          admin@admin.com
                        </td>
                        <td>
                          12345678
                        </td>
                        <td>
                          1
                        </td>
                        <td class="td-actions text-right">
                        <a rel="tooltip" class="btn btn-success btn-link" href="#" data-original-title="" title="">
                              <i class="material-icons">edit</i>
                              <div class="ripple-container"></div>
                            </a>
                         </td>
                         </tr>
                        <tr>
                         <td>
                          amalia
                        </td>
                        <td>
                          amalia@web.com
                        </td>
                        <td>
                          12345678
                        </td>
                        <td>
                          1
                        </td>
                        <td class="td-actions text-right">
                        <a rel="tooltip" class="btn btn-success btn-link" href="#" data-original-title="" title="">
                              <i class="material-icons">edit</i>
                              <div class="ripple-container"></div>
                            </a>
                         </td>
                         </tr>
                        <tr>
                         <td>
                          elza
                        </td>
                        <td>
                          elza@web.com
                        </td>
                        <td>
                          12345678
                        </td>
                        <td>
                          2
                        </td>
                        <td class="td-actions text-right">
                        <a rel="tooltip" class="btn btn-success btn-link" href="#" data-original-title="" title="">
                              <i class="material-icons">edit</i>
                              <div class="ripple-container"></div>
                            </a>
                         </td>
                         </tr>
                        <tr>
                         <td>
                          may
                        </td>
                        <td>
                          may@web.com
                        </td>
                        <td>
                          12345678
                        </td>
                        <td>
                          2
                        </td>
                        <td class="td-actions text-right">
                        <a rel="tooltip" class="btn btn-success btn-link" href="#" data-original-title="" title="">
                              <i class="material-icons">edit</i>
                              <div class="ripple-container"></div>
                            </a>
                         </td>
                      </tr>
                  </tbody>
                </table>
              </div>
            </div>
@endsection
