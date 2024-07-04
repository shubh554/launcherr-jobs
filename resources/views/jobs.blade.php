@extends('layout')
@section('content')
<main class="page-content">
  <!--breadcrumb-->
  <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
    <div class="breadcrumb-title pe-3">Postings</div>
    <div class="ps-3">
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb mb-0 p-0">
          <li class="breadcrumb-item"><a href="../home.html"><i class="bx bx-home-alt"></i></a>
          </li>
          <li class="breadcrumb-item active" aria-current="page">Job Postings</li>
        </ol>
      </nav>
    </div>

  </div>
  <!--end breadcrumb-->
  @if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
  @endif
  <div class="card">
    <div class="card-body">
      <div class="d-flex align-items-center">
        <h5 class="mb-0">Applications</h5>
        <form class="ms-auto position-relative ">
          <div class="position-absolute top-50 translate-middle-y search-icon px-3"><i class="bi bi-search"></i>
          </div>
          <input class="form-control ps-5" type="text" placeholder="search">
        </form>
        <button type="button" class="btn btn-primary px-5 ms-2" data-bs-toggle="modal"
          data-bs-target="#exampleModal"><i class="bi bi-plus"></i></button>

        <!-- Modal Job Posting -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
          aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Add New Job</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                <form action="addJobs" method="POST">
                  @csrf
                  <input class="form-control form-control-lg mb-3" type="text"
                    placeholder="Job Title" name="title" aria-label=".form-control-lg example">
                    <textarea class="form-control form-control-lg mb-3" type="text" name="description">Job Description</textarea>
                    <input class="form-control form-control-lg mb-3"
                    type="number" placeholder="Job Duration in hours" name="duration" aria-label=".form-control-lg example">
                    <select class="form-select mb-3" aria-label="Default select example" name="location">
                      @foreach($cities as $c) 
                      <option value="{{$c}}">{{$c}}</option>
                      @endforeach
                    </select>
                    <button type="submit" class="btn btn-primary">Add</button>
                </form>
              </div>

              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
              
              </div>
            </div>
          </div>
        </div>

        <!-- Modal end job posting -->
      </div>
      <div class="table-responsive mt-3">
        <table class="table align-middle">
          <thead class="table-secondary">
            <tr>
              <th>Title</th>
              <th>Description</th>
              <th>Job-duration</th>
              <th>Status</th>
              <th>Actions</th>
            </tr>
          </thead>
          <tbody>
           @foreach($list as $job)
            <tr>
              <td>{{$job->title}}</td>
              <td>{{$job->description}}</td>
              <td>{{$job->duration}}</td>
              <td>
                  @if($job->active == 1)
                  <span class="badge bg-success"  onclick="toggleActive({{$job->id}},0)">Active</span>
                  @else
                  <span class="badge bg-danger"  onclick="toggleActive({{$job->id}},1)">Inactive</span>
                  @endif
              </td>
              <td>
                <div class="table-actions d-flex align-items-center gap-3 fs-6">
                
            
                    <a href="javascript:;" class="text-warning" data-bs-toggle="tooltip" data-bs-placement="bottom"
                      title="Edit" onclick="edit({{$job->id}},'{{$job->title}}','{{$job->description}}',{{$job->duration}})"><i class="bi bi-pencil-fill"  data-bs-toggle="modal"
            data-bs-target="#edit1"></i></a>
           </div>
              </td>
            </tr>
           @endforeach
         </tbody>
        </table>
      </div>
    </div>
  </div>
</main>
<script>
  function toggleActive(id,active)
  {
    
$.ajax({
    url: `toggleActive/${id}/${active}`,
    type: "GET", 
    success: function(data) {
     
        location.reload();
    },
    error: function(xhr, status, error) {
      
        console.log("Error:", status, error);
    }
});
  }

  function edit(id,title,description,duration)
  {
    document.getElementById('jobId').value = id;
    document.getElementById('jobTitle').value = title;
    document.getElementById('jobDescription').value = description;
    document.getElementById('jobDuration').value = duration;
  }
</script>
<!-- View Modals -->

<div class="modal fade" id="view1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">View</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="">
          <input class="form-control form-control-lg mb-3" type="text" placeholder="Job Title"
            aria-label=".form-control-lg example" readonly value="Title">
          <input class="form-control form-control-lg mb-3" type="text" placeholder="Job Description"
            aria-label=".form-control-lg example" readonly value="Description">
          <input class="form-control form-control-lg mb-3" type="text" placeholder="Job Duration"
            aria-label=".form-control-lg example" readonly value="Duration">

        </form>
      </div>

      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<div class="modal fade" id="view2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">View</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="">
          <input class="form-control form-control-lg mb-3" type="text" placeholder="Job Title"
            aria-label=".form-control-lg example" readonly value="Title">
          <input class="form-control form-control-lg mb-3" type="text" placeholder="Job Description"
            aria-label=".form-control-lg example" readonly value="Description">
          <input class="form-control form-control-lg mb-3" type="text" placeholder="Job Duration"
            aria-label=".form-control-lg example" readonly value="Duration">

        </form>
      </div>

      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<div class="modal fade" id="view3" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">View</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="">
          <input class="form-control form-control-lg mb-3" type="text" placeholder="Job Title"
            aria-label=".form-control-lg example" readonly value="Title">
          <input class="form-control form-control-lg mb-3" type="text" placeholder="Job Description"
            aria-label=".form-control-lg example" readonly value="Description">
          <input class="form-control form-control-lg mb-3" type="text" placeholder="Job Duration"
            aria-label=".form-control-lg example" readonly value="Duration">

        </form>
      </div>

      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<div class="modal fade" id="view4" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">View</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="">
          <input class="form-control form-control-lg mb-3" type="text" placeholder="Job Title"
            aria-label=".form-control-lg example" readonly value="Title">
          <input class="form-control form-control-lg mb-3" type="text" placeholder="Job Description"
            aria-label=".form-control-lg example" readonly value="Description">
          <input class="form-control form-control-lg mb-3" type="text" placeholder="Job Duration"
            aria-label=".form-control-lg example" readonly value="Duration">

        </form>
      </div>

      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<div class="modal fade" id="view5" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">View</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="">
          <input class="form-control form-control-lg mb-3" type="text" placeholder="Job Title"
            aria-label=".form-control-lg example" readonly value="Title">
          <input class="form-control form-control-lg mb-3" type="text" placeholder="Job Description"
            aria-label=".form-control-lg example" readonly value="Description">
          <input class="form-control form-control-lg mb-3" type="text" placeholder="Job Duration"
            aria-label=".form-control-lg example" readonly value="Duration">

        </form>
      </div>

      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<div class="modal fade" id="view6" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">View</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="">
          <input class="form-control form-control-lg mb-3" type="text" placeholder="Job Title"
            aria-label=".form-control-lg example" readonly value="Title">
          <input class="form-control form-control-lg mb-3" type="text" placeholder="Job Description"
            aria-label=".form-control-lg example" readonly value="Description">
          <input class="form-control form-control-lg mb-3" type="text" placeholder="Job Duration"
            aria-label=".form-control-lg example" readonly value="Duration">

        </form>
      </div>

      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

<!-- Edit Modals -->
<div class="modal fade" id="edit1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Edit Job</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="editJob" method="POST">
          @csrf
          <input type="text" id="jobId" hidden name="id"/>
          <input class="form-control form-control-lg mb-3" type="text" placeholder="Job Title"
            aria-label=".form-control-lg example" id="jobTitle" name="title"/>
            <textarea class="form-control form-control-lg mb-3" placeholder="Job Description"
            aria-label=".form-control-lg example" id="jobDescription" name="description"></textarea>
          <input class="form-control form-control-lg mb-3" type="text" placeholder="Job Duration"
            aria-label=".form-control-lg example" id="jobDuration" name="duration"/>
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
      </div>

      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        
      </div>
    </div>
  </div>
</div>
<div class="modal fade" id="edit2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Edit</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="">
          <input class="form-control form-control-lg mb-3" type="text" placeholder="Job Title"
            aria-label=".form-control-lg example">
          <input class="form-control form-control-lg mb-3" type="text" placeholder="Job Description"
            aria-label=".form-control-lg example" >
          <input class="form-control form-control-lg mb-3" type="text" placeholder="Job Duration"
            aria-label=".form-control-lg example" >

        </form>
      </div>

      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Update</button>
      </div>
    </div>
  </div>
</div>
<div class="modal fade" id="edit3" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Edit</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="">
          <input class="form-control form-control-lg mb-3" type="text" placeholder="Job Title"
            aria-label=".form-control-lg example">
          <input class="form-control form-control-lg mb-3" type="text" placeholder="Job Description"
            aria-label=".form-control-lg example" >
          <input class="form-control form-control-lg mb-3" type="text" placeholder="Job Duration"
            aria-label=".form-control-lg example">

        </form>
      </div>

      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Update</button>
      </div>
    </div>
  </div>
</div>
<div class="modal fade" id="edit4" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Edit</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="">
          <input class="form-control form-control-lg mb-3" type="text" placeholder="Job Title"
            aria-label=".form-control-lg example">
          <input class="form-control form-control-lg mb-3" type="text" placeholder="Job Description"
            aria-label=".form-control-lg example" >
          <input class="form-control form-control-lg mb-3" type="text" placeholder="Job Duration"
            aria-label=".form-control-lg example">

        </form>
      </div>

      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Update</button>
      </div>
    </div>
  </div>
</div>
<div class="modal fade" id="edit5" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Edit</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="">
          <input class="form-control form-control-lg mb-3" type="text" placeholder="Job Title"
            aria-label=".form-control-lg example" >
          <input class="form-control form-control-lg mb-3" type="text" placeholder="Job Description"
            aria-label=".form-control-lg example" >
          <input class="form-control form-control-lg mb-3" type="text" placeholder="Job Duration"
            aria-label=".form-control-lg example">

        </form>
      </div>

      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary" >Update</button>
      </div>
    </div>
  </div>
</div>
<div class="modal fade" id="edit6" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Edit</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="">
          <input class="form-control form-control-lg mb-3" type="text" placeholder="Job Title"
            aria-label=".form-control-lg example" >
          <input class="form-control form-control-lg mb-3" type="text" placeholder="Job Description"
            aria-label=".form-control-lg example" >
          <input class="form-control form-control-lg mb-3" type="text" placeholder="Job Duration"
            aria-label=".form-control-lg example" >

        </form>
      </div>

      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Update</button>
      </div>
    </div>
  </div>
</div>
@endsection