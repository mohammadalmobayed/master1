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
                    <h2 class="card-title">Add user</h2>
                    
                    
                    <form class="form-group mx-sm-3 mb-2" action="{{route('userr.store')}}" method="POST" enctype="multipart/form-data">
                        @csrf
        
                        <label> Name</label>
                        <input type="text" class="form-control py-2 mb-3" name="name"  placeholder="Enter User Name">
                        <label>Job Id </label>
                        <input type="text" class="form-control py-2 mb-3" name="job_id"  placeholder="Enter Job Id">
                        <label>Job Title </label>
                        <input type="text" class="form-control py-2 mb-3" name="job_title"  placeholder="Enter Job Title">
                        <label >Email</label>
                        <input type="email" class="form-control py-2 mb-3" name="email" placeholder="Enter User E-mail">
                        <label >Phone Number</label>
                        <input type="text" class="form-control py-2 mb-3" name="phone" placeholder="Enter User Phone Number">
                        <label >Password</label>
                        <input type="password" class="form-control py-2 mb-3" name="password" placeholder="Enter User Password">
                        <label>Status</label>
                        <select name="role" id="role"   class="form-control py-2 mb-3">
                            <option value="user" disabled>USER TYPE</option>
                            <option value="user">User</option>
                            <option value="Admin">admin</option>
                        </select>
                        <label >User Image</label><br>
                        <input type="file"  class="form-control py-2 mb-3" name="User_Image">
                        <button type="submit" class="btn btn-primary">Save</button>
                    </form>
                            
                        </tr>

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