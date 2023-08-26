@extends('front.master')
@section('content')
<!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha.5/css/bootstrap.css"> -->
  
<style>
    .container-custome {
    margin: 0 60px;
}
.seven h1 {
text-align: center;
    font-size:30px; font-weight:300; color:#222; letter-spacing:1px;
    text-transform: uppercase;

    display: grid;
    grid-template-columns: 1fr max-content 1fr;
    grid-template-rows: 27px 0;
    grid-gap: 20px;
    align-items: center;
}

.seven h1:after,.seven h1:before {
    content: " ";
    display: block;
    border-bottom: 1px solid #c50000;
    border-top: 1px solid #c50000;
    height: 5px;
  background-color:#f8f8f8;
}
.ftco-section {
    padding: 60px 0;
    position: relative;
    width: 100%;
}
div.dataTables_wrapper div.dataTables_filter input {
    margin-left: 0.5em;
    display: inline-block;
    width: 100%;
    border-radius: 141px;
    height: 50px;
}
label {
    display: block;
    margin-bottom: 0.5rem;
}
.hero-wrap.hero-wrap-2 .slider-text {
    height: 270px;
}

.hero-wrap.hero-wrap-2 {
    height: 300px;
    position: relative;
    background-size: cover;
    background-repeat: no-repeat;
    background-position: center center;
}
/* Style for the search input */
.dataTables_filter input {
  /* border: none; */
  /* padding: 8px; */
  /* border-radius: 20px; */
  /* width: 100%; */
  /* background-color: transparent; */
  background-repeat: no-repeat;
  /* background-size: 18px; */
  background-position: 10px center;
  /* padding-left: 36px; */
  /* box-shadow: none; */
}
.dataTables_filter label {
    font-size: 0px;
}


/* On focus style for the search input */
.dataTables_filter input:focus {
  outline: none;
  box-shadow: 0 0 3px rgba(0, 0, 0, 0.2);
}

/* Set the background image directly on the search input */
.dataTables_filter input {
    background-image: url("https://upload.wikimedia.org/wikipedia/commons/5/55/Magnifying_glass_icon.svg");
    background-size: 18px;
    background-position: right 20px center; /* Position the image on the right */
    padding: 0px 20px; /* Adjust this value to make space for the icon */
}
div.dataTables_wrapper div.dataTables_length select {
    padding: 0 15px;
    width: 100px;
    height: 50px;
    display: inline-block;
    border-radius: 100px;
}
.page-item.active .page-link {
    z-index: 3;
    color: #fff;
    background-color: #007bff;
    border-color: #007bff;
    background: #4986fc;
    background: #ce4be8;
    background: -moz-linear-gradient(-45deg, #ce4be8 0%, #207ce5 100%);
    background: -webkit-gradient(left top, right bottom, color-stop(0%, #ce4be8), color-stop(100%, #207ce5));
    background: -webkit-linear-gradient(-45deg, #ce4be8 0%, #207ce5 100%);
    background: -o-linear-gradient(-45deg, #ce4be8 0%, #207ce5 100%);
    background: -ms-linear-gradient(-45deg, #ce4be8 0%, #207ce5 100%);
    background: -webkit-linear-gradient(315deg, #ce4be8 0%, #207ce5 100%);
    background: -o-linear-gradient(315deg, #ce4be8 0%, #207ce5 100%);
    background: linear-gradient(135deg, #ce4be8 0%, #207ce5 100%);
    filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#ce4be8', endColorstr='#207ce5', GradientType=1 );
    color: #fff;
    border: 1px solid transparent;
}
.page-link , .page-item:first-child .page-link , .page-item:last-child .page-link{
    position: relative;
    display: block;
    padding: 0.5rem 0.75rem;
    margin-left: -1px;
    line-height: 1.25;
    color: #007bff;
    background-color: #fff;
    border: 1px solid #dee2e6;
    color: #000000;
    text-align: center;
    display: inline-block;
    width: 40px;
    height: 40px;
    line-height: 25px;
    border-radius: 50%;
    border: 1px solid #e6e6e6;
    margin: 0px 3px;
}
  
#example th {
    height: 50px;
    vertical-align: inherit !important;
    color: #566ce6;
}

label.form-label {
    font-weight: 500;
    color: #000;
}
.modal-dialog .form-group {
    position: relative;
    margin-bottom: 30px;
}
.modal-dialog .form-group  label{
  position: absolute;
    top: -12px;
    left: 0;
    font-weight: 500;
    font-size: 14px;
    color: rgba(0, 0, 0, 0.8);
    margin-bottom: 0;
    background: #fff;
    margin-left: 30px;
    padding: 0 4px;
}
.modal-dialog .form-group  input{
  height: 52px;
    background: #fff;
    color: #000000;
    font-size: 16px;
    border-radius: 40px;
    -webkit-box-shadow: none;
    box-shadow: none;
    border: 1px solid rgba(0, 0, 0, 0.4);
    padding-left: 20px;
    padding-right: 20px;
}
</style>
<section class="hero-wrap hero-wrap-2" style="background-image: url('images/bg_2.jpg');">
		<div class="overlay"></div>
		<div class="container">
			<div class="row no-gutters slider-text align-items-end justify-content-center">
				<div class="col-md-9 ftco-animate pb-5 text-center">
					<p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home <i class="fa fa-chevron-right"></i></a></span> <span>Course Lists <i class="fa fa-chevron-right"></i></span></p>
					<h1 class="mb-0 bread">Course Lists</h1>
				</div>
			</div>
		</div>
	</section>

	<section class="ftco-section bg-light">
        
		<div class="container-custome">
            <div class="seven">
            <h1>List of universities in Canada And Courses</h1>
            </div>
			<div class="row"> 
			<table id="example" class="table  dt-responsive nowrap" cellspacing="0" width="100%">
                <thead>
                    <tr>
                        <th>Sr.No</th>
                        <th>Institution Name</th>
                        <th>Program Of Study</th>
                        <th>Program Length</th>
                        <th>Duration Of Term</th>
                        <th>Academic Level Area Of Study</th>
                        <th>Contact</th>
                        <th>Program Type</th>
                        <th>Apply</th>
                    </tr>
                </thead> 
            </table> 
        </div>
			</div>  
    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title text-center font-weight-bold" id="exampleModalLabel"> Thinking of Studying at Top Universities in Canada? Get Free Expert Advice!</h5>
          </div>
          <form method="post" action="{{route('inquery.store')}}"> 
            @csrf
            <div class="modal-body ">
              <input type="hidden" name="institution_name_e">
              <input type="hidden" name="program_of_study_e">
              <input type="hidden" name="program_length_e">
              <input type="hidden" name="duration_of_term_e">
              <input type="hidden" name="academic_level_area_of_study_e">
              <input type="hidden" name="contact">
              <input type="hidden" name="program_type_e">

                <div class="row">
                  <div class="col-lg-12"> 
                    <div class="form-group">
                      <label for="name" class="form-label">Name</label>
                      <input type="text" required placeholder="Enter Your Name" class="form-control" name="name" id="name" >
                    </div>
                  </div>
                  <div class="col-lg-12">
                    <div class="form-group">
                      <label for="email" class="form-label">Email</label>
                      <input type="email" required placeholder="Enter Your Email" class="form-control" name="email" id="email" >
                    </div>
                  </div>
                  <div class="col-lg-6">
                    <div class="form-group">
                      <label for="number" class="form-label">Mobile Number</label>
                      <input type="text" required placeholder="Enter Your Mobile Number" class="form-control" name="number" id="number" >
                    </div>
                  </div>
                  <div class="col-lg-6">
                    <div class="form-group">
                      <label for="state" class="form-label">State</label>
                      <input type="text" required placeholder="Enter Your State" class="form-control" name="state" id="state" >
                    </div>
                  </div>
                </div>
            </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Save</button>
          </div>
          </form>
        </div>
      </div>
    </div>
		</section>
		
@endsection
@section('script')
<script> 

$(document).ready(function() {
  $('#example').DataTable({
    processing: true,
    serverSide: true,
    ajax: function(data, callback, settings) {
      const apiUrl = 'https://open.canada.ca/data/en/api/action/datastore_search';
      const params = {
        resource_id: 'bf37257a-6538-4995-93ef-c90b9308cd37',
        limit: data.length, // Limit based on current page size
      };

      $.ajax({
        url: apiUrl,
        type: 'GET',
        data: params,
        dataType: 'json',
        success: function(response) {
          callback({
            draw: data.draw,
            recordsTotal: response.result.total,
            recordsFiltered: response.result.total,
            data: response.result.records
          });
        },
        error: function(xhr, status, error) {
          console.error('Request failed with status:', status);
        }
      });
    },
    language: {
      search: "_INPUT_",
      searchPlaceholder: "Search...",
      paginate: {
        next: '>',
        previous: '<'
      }
    },
    columns: [
        { data: '_id' },
        { data: 'institution_name_e' },
        { data: 'program_of_study_e' },
        { data: 'program_length_e' },
        { data: 'duration_of_term_e' },
        { data: 'academic_level_area_of_study_e' },
        { data: 'contact' },
        { data: 'program_type_e' },
        {
        data: null,
        render: function(data, type, row) {
          return '<button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal" data-row=\'' + JSON.stringify(row) + '\'>Apply</button>';
        }
      }
    ],
    order: [[1, 'asc']]
  });

  $('#exampleModal').on('show.bs.modal', function(event) {
    const button = $(event.relatedTarget);
    const rowData = button.data('row');
    const modalBody = $(this).find('.modal-body');
    
    // Customize the modal content based on rowData 
    $('[name="institution_name_e"]').val(rowData.institution_name_e);
    $('[name="program_of_study_e"]').val(rowData.program_of_study_e);
    $('[name="program_length_e"]').val(rowData.program_length_e);
    $('[name="duration_of_term_e"]').val(rowData.duration_of_term_e);
    $('[name="academic_level_area_of_study_e"]').val(rowData.academic_level_area_of_study_e);
    $('[name="contact"]').val(rowData.contact);
    $('[name="program_type_e"]').val(rowData.program_type_e);

  });

});

@if((session()->has('applyed')))
      $(document).ready(function(){
          toastr.success("{{session()->get('applyed')}}")
       });
@endif 







		</script>
@endsection
