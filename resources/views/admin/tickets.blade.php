@extends('layouts.admin')

@section('content')
  <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box box-warning">
            <div class="box-body">

              <div class="profile-content">
                <h1>Design Tickets</h1>
                	<form action="{{ url('/admin/tickets') }}" method="POST" enctype="multipart/form-data">
                		{{csrf_field()}}
                		Upload Design Ticket <br>
                		Kode Design = 	
                		<input type="text" name="name"><br>
                		Upload Design =
                		<input type="file" name="design">
                		<button type="submit">Kirim</button>
                	</form><br><br>
                    @if(count($tickets) > 0)
                    @php $n = 1; @endphp
                    <div class="table-responsive">
                    <table class="table table-striped table-bordered">
                      <thead>
                        <tr>
                          <th>No</th>
                          <th>Kode</th>
                          <th>Design</th>
                          <th>Action</th>
                        </tr>
                      </thead>
                      <tbody>
                      @foreach($tickets as $ticket)
                        <tr>
                          <td>{{ $n }}</td>
                          <td>{{ $ticket->name }}</td>
                          <td><img src="{{ url('ticket/'. $ticket->design) }}" style="height: 200px;"></td>
                          <td>
                            <form style="display: inline;" action="{{ url('/admin/notVerif/') }}" method="post">{{csrf_field()}}{{method_field('delete')}}<button type="button" class="btn btn-danger btn-xs"><span class="glyphicon glyphicon-trash"></span> Hapus</button></form>
                          </td>
                        </tr>
                        @php $n++; @endphp
                      @endforeach
                      </tbody>
                    </table>
                    </div>
                    @endif
              </div>
            </div>
          </div>
        </div>
      </div>
  </section>
@endsection

@section('scripts')
  <script>
    $(function () {
      $('table').DataTable()
    })
  </script>
@endsection

@section('css')
<style>
  /* Dropdown Button */
  .dropbtn {
      background-color: #5252bd;
      color: white;
      padding: 3px;
      font-size: 14px;
      border: none;
      border-radius: 5%;
      
  }

  /* The container <div> - needed to position the dropdown content */
  .dropdown {
      position: absolute;
      display: inline-block;
  }

  /* Dropdown Content (Hidden by Default) */
  .dropdown-content {
      display: none;
      position: absolute;
      background-color: #f1f1f1;
      min-width: 210px;
      box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
      z-index: 1;
      padding: 10px 10px; right: 0px;
  }

  /* Links inside the dropdown */
  .dropdown-content a {
      color: black;
      padding: 12px 16px;
      text-decoration: none;
      display: block;
  }

  /* Change color of dropdown links on hover */
  .dropdown-content a:hover {
      background-color: #ddd;
  }

  /* Show the dropdown menu on hover */
  .dropdown:hover .dropdown-content {
      display: block;
  }

  /* Change the background color of the dropdown button when the dropdown content is shown */
  .dropdown:hover .dropbtn {
      background-color: #9999e7;
  } 
</style>
@endsection