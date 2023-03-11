@extends('pages.layouts.master')
@section('content')
<div class="main-panel">
  <div class="content-wrapper">
      <div class="row">
      <div class="col-lg-12 grid-margin stretch-card">
          <div class="card">
          <div class="card-body">
              <h2 class="card-title">All Dorms</h2>
              
              <div class="table-responsive pt-3">
                  <table class="table table-dark">
                  <thead>
                  <tr>
                     
                      <th>
                      Dorm name
                      </th>
                      <th>
                      Number of buildings
                      </th>
                      <th>
                       Total rooms
                      </th>
                      <th>
                       Occupied rooms
                      </th>
                      <th>
                       Vacant rooms
                      </th>
                      <th>
                      Dorms supervisor
                      </th>
                     
                  </tr>
                  </thead>
                  <tbody>
                  <tr>
                     
                      <td>
                         Dorm A
                      </td>
                      <td>
                         1
                      </td>
                      <td>
                         50
                      </td>
                      <td>
                         45
                      </td>
                      <td>
                          5
                      </td>
                      <td>
                         Mohammad mahmoud
                      </td>
                      
                  </tr>
                  <tr>
                     
                      <td>
                          Dorm B
                      </td>
                      <td>
                          1
                      </td>
                      <td>
                         50
                      </td>
                      <td>
                        48
                      </td>
                      <td>
                         2
                      </td>
                      <td>
                       Mary don
                      </td>
                     
                  </tr>
                  <tr>
                     
                      <td>
                          Dorm Al-Hidab
                      </td>
                      <td>
                         3
                      </td>
                      <td>
                          115
                      </td>
                      <td>
                          100
                      </td>
                      <td>
                          15
                      </td>
                      <td>
                         John Adams
                      </td>
                     
                  </tr>
                 
                  </tbody>
              </table>
              </div>
          </div>
          </div>
      </div>
      
</div>
<!-- main-panel ends -->
@endsection