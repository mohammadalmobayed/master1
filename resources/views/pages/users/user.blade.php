@extends('pages.layouts.master')

@include('pages.layouts.head')
@section('user')
Mohammad
@endsection



    @section('content')
<body>
    
      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
            <div class="row">
                <div class="col-lg-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <h2  style="display: inline-block" class="card-title">System users</h2>
                            <button style="margin-left:900px"  class="btn btn-danger show-alert-delete-box" type="submit" ><a href="{{route('user.create')}}">Add </a></button>
                    <div class="table-responsive pt-3">
                        <table class="table table-dark">
                            <thead>
                                <tr>
                                    <th>
                                        #
                            </th>
                            <th>
                            Job ID
                            </th>
                            <th>
                            Name
                            </th>
                            <th>
                                Email
                            </th>
                            <th>
                                Phone No 
                            </th>
                            <th>
                                Job title 
                            </th>
                            <th>
                                User role 
                            </th>
                            <th>
                                Action
                            </th>
                        </tr>
                        </thead>
                        <tbody>
                            @foreach ($user as $user)
                                
                            <tr>
                                <td>
                                    {{$user->id}}
                                </td>
                            <td>
                               {{$user->job_id}}
                            </td>
                            <td>
                                {{$user->name}}
                            </td>
                            <td>
                                {{$user->email}}
                            </td>
                            <td>
                                {{$user->phone}}
                            </td>
                            <td>
                                {{$user->job_title}}
                            </td>
                            <td>
                                {{$user->role}}
                            </td>
                            <td>
                                <form action="{{route('user.edit',$user->id)}}" method="POST">
                                    @csrf
                                    {{-- @method('DELETE')   --}}
                                    <div class="p-0  border border-0">
                                        <button type="submit" class="btn btn-danger show-alert-delete-box">Del</button> 
                                    </form>
                                    
                                <a href="{{route('user.edit',$user->id)}}"><button type="submit" class="btn btn-primary">Edit</button></a>
                                
                                    
                            </td>
                            
                        </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
                </div>
            </div>
            
        </div>
        <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
</div>
  <!-- container-scroller -->

  

@endsection