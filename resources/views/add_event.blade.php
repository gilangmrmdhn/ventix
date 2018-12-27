@extends('layouts.app')

@section('content')
    <div class="row justify-content-center">
        <div class="title col-12 col-lg-8">
            <h2 class="mbr-section-title align-center pb-3 mbr-fonts-style display-2">
                Tambahkan Event
            </h2>
            <h3 class="mbr-section-subtitle align-center mbr-light pb-3 mbr-fonts-style display-5">
                
            </h3>
        </div>
    </div>
</div>
<div class="container">
    <div class="row justify-content-center">
        <div class="media-container-column col-lg-8" data-form-type="formoid">
                <div data-form-alert="" hidden="">
                    Thanks for filling out the form!
                </div>

                <form class="mbr-form" id="addEvent" action="{{ url('add-event') }}" method="post" data-form-title="Event Form" enctype="multipart/form-data">
                	{{ csrf_field() }}
                	<input type="hidden" name="email" data-form-email="true">
                    <div class="row row-sm-offset">
                        <div class="col-md-4 multi-horizontal" data-for="name">
                            <div class="form-group">
                                <label class="form-control-label mbr-fonts-style display-7" for="name-form1-7">Nama : </label>
                                <input type="text" class="form-control" name="author" data-form-field="Name" required="" id="name-form1-7">
                            </div>
                        </div>
                        <div class="col-md-4 multi-horizontal" data-for="email">
                            <div class="form-group">
                                <label class="form-control-label mbr-fonts-style display-7" for="email-form1-7">Email : </label>
                                <input type="email" class="form-control" name="email" data-form-field="Email" required="" id="email-form1-7">
                            </div>
                        </div>
                        <div class="col-md-4 multi-horizontal" data-for="phone">
                            <div class="form-group">
                                <label class="form-control-label mbr-fonts-style display-7" for="phone-form1-7">Phone : </label>
                                <input type="text" class="form-control" name="hp" data-form-field="Phone" id="phone-form1-7">
                            </div>
                        </div>
                    
	                    <div class="col-md-12 multi-horizontal" data-for="name">
	                        <div class="form-group">
	                            <label class="form-control-label mbr-fonts-style display-7" for="name-form1-7">Event Name</label>
	                            <input type="text" class="form-control" name="name" data-form-field="Name" required="" id="name-form1-7">
	                        </div>
	                    </div>
                        <div class="col-md-12 multi-horizontal" data-for="name">
                            <div class="form-group">
                                <label class="form-control-label mbr-fonts-style display-7" for="name-form1-7">Price Ticket</label>
                                <input type="text" class="form-control" name="price" data-form-field="Name" required="" id="name-form1-7">
                            </div>
                        </div>
	               	</div>
	                <div class="form-group" data-for="message">
	                    <label class="form-control-label mbr-fonts-style display-7" for="message-form1-7">Description Event</label>
	                    <textarea class="form-control" name="desc" rows="7" data-form-field="Message" id="message-form1-7"></textarea>
	                </div>
	                <div class="form-group" data-for="message">
	                    <label class="form-control-label mbr-fonts-style display-7" for="message-form1-7">Date Event</label><br>
	                    <input type="text" name="date" data-form-field="Message" id="message-form1-7" placeholder="dd/mm/yyyy">
	                </div>

	                <div class="form-group" data-for="message">
	                    <label class="form-control-label mbr-fonts-style display-7" for="message-form1-7">Upload Pamflet</label><br>
	                    <input type="file" name="pamflet">
	                </div>

	                <div class="form-group" data-for="message">
	                    <label class="form-control-label mbr-fonts-style display-7" for="message-form1-7">Upload Design Ticket</label><br>
	                    <input type="file" name="ticket"> 
	                    <button class="btn btn-rounded-bor" style="border-radius: 0px;padding-bottom: 10px;" data-toggle="modal" data-target="#designTicket" form="fake"> Lihat Design Premium ?</button>
	                </div>

	                <div id="designTicket" class="modal modal-md fade" style="margin-top: 5%;">
					    <div class="modal-dialog">
					        <div class="modal-content" style="border: none !important;">
					            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 bhoechie-tab-container">
									<div class="row">
                                        <input type="hidden" id="ticket_id" name="ticket_id" form="addEvent">
                                        @foreach($tickets as $key => $ticket)
                                        <div class="card p-3 col-12 col-md-6 col-lg-4">
                                            <div class="card-wrapper">
                                                <div class="card-img">
                                                    <div class="mbr-overlay"></div>
                                                    <img src="{{ url('ticket/'. $ticket->design) }}" style="height: 200px;">
                                                    <div class="card-box">
                                                        <h4 class="card-title mbr-fonts-style display-7">
                                                            Kode Design = {{ $ticket->name }}
                                                        </h4>
                                                        <p class="mbr-text mbr-fonts-style display-7">
                                                            
                                                        </p>
                                                    </div>
                                                    <div class="mbr-section-btn text-center">
                                                        <button class="btn btn-primary display-4" id="buyIt{{$key}}" data-dismiss="modal">
                                                            Buy it
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        @endforeach
                                    </div>
					            </div>
					        </div>
					    </div>
					</div>
					
                    <span class="input-group-btn">
                        <button type="submit" class="btn btn-primary btn-form display-4">Send Request</button>
                    </span>
                </form>
        </div>
    </div>
</div>
@endsection

@section('script')
<script type="text/javascript">
    @foreach($tickets as $key => $ticket)
        $('#buyIt{{$key}}').click(function(){
           $('#ticket_id').val({{ $ticket->id }});
        });
    @endforeach
</script>
@endsection