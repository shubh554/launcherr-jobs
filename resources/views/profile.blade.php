@extends('layout')
@section('content')
<main class="page-content">
  
    <!--breadcrumb-->
    <!-- <div class="page-breadcrumb d-none d-sm-flex align-items-center">
      <div class="breadcrumb-title pe-3 text-white">Profile</div>
      <div class="ps-3">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb mb-0 p-0">
            <li class="breadcrumb-item"><a href="../Index.html"><i class="bx bx-home-alt text-white"></i></a>
            </li>
            <li class="breadcrumb-item active text-white" aria-current="page">User Profile</li>
          </ol>
        </nav>
      </div>
    </div> -->
    <!--end breadcrumb-->
  
    <!-- <div class="profile-cover bg-dark"></div> -->
  
    <div class="row">
      <div class="col-12 col-lg-12">
        <div class="card shadow-sm border-0">
          <div class="card-body">
            <h5 class="mb-0">My Account</h5>
            <hr>
            <div class="card shadow-none border">
              <div class="card-header">
                <h6 class="mb-0">USER INFORMATION</h6>
              </div>
              <div class="card-body">
                <form class="row g-3">
                  <div class="col-6">
                    <label class="form-label">Name</label>
                    <input type="text" class="form-control" value="{{$user['name']}}" disabled>
                  </div>
                  <div class="col-6">
                    <label class="form-label">Email address</label>
                    <input type="text" class="form-control" value="{{$user['email']}}" disabled>
                  </div>
                </form>
              </div>
            </div>
            <div class="card shadow-none border">
              <div class="card-header">
                <h6 class="mb-0">CONTACT INFORMATION</h6>
              </div>
              <div class="card-body">
                @if($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                @if(session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                @endif
                <form class="row g-3" method="POST" action="updateProfile">
                @csrf
                  <div class="col-12">
                    <label class="form-label">Address</label>
                    <input type="text" class="form-control" value="{{$employerProfile->address ?? null}}" name="address">
                  </div>
                  <div class="col-6">
                    <label class="form-label">City</label>
                    <input type="text" class="form-control" value="{{$employerProfile->city ?? null}}" name="city">
                  </div>
                  <div class="col-6">
                    <label class="form-label">State</label>
                    <input type="text" class="form-control" value="{{$employerProfile->state ?? null}}" name="state">
                  </div>
                  <div class="col-6">
                    <label class="form-label">Country</label>
                    <input type="text" class="form-control" value="{{$employerProfile->country ?? null}}" name="country">
                  </div>
                  <div class="col-6">
                    <label class="form-label">Company Name</label>
                    <input type="text" class="form-control" value="{{$employerProfile->company_name ?? null}}" name="company_name">
                  </div>
                  <div class="col-6">
                    <label class="form-label">Company Website</label>
                    <input type="text" class="form-control" value="{{$employerProfile->company_website ?? null}}" name="company_website">
                    </div>
                  <div class="col-12">
                    <label class="form-label">About Me</label>
                    <textarea class="form-control" rows="4" cols="4" placeholder="Describe yourself..." name="about">{{$employerProfile->about ?? null}}</textarea>
                  </div>
                  <div class="text-start">
                    <button type="submit" class="btn btn-primary px-4">Save Changes</button>
                  </div>
                </form>
              </div>
            </div>
           
          </div>
        </div>
      </div>
    </div><!--end row-->
  
  </main>
@endsection