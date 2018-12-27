@extends('layouts.app')

@section('content')
<h2 class="mbr-section-title align-center pb-3 mbr-fonts-style display-2">Event Details</h2>

<div class="media-container-row mt-5 pt-3">
    <div class="mbr-figure" style="width: 30%;" width="338" height="374">
        <img src="{{ url('pamflet/'.$event->pamflet) }}" alt="event 1">
    </div>
        <div class="tab-content" style="margin-left: 20px;">
            <div id="tab1" class="tab-pane in active" role="tabpanel">
                <div class="row">
                    <div class="col-md-12">
                        <p class="mbr-text py-5 mbr-fonts-style display-7">
			            <div class="detail-top__text">
			            <div class="bx-event-text__body"> {{ $event->name }} </div>
			            <div class="bx-event-text__body">  {{ $event->date }} </div>
			            <div class="bx-event-text__body"> {{ $event->desc }} </div>
			            <div class="bx-event-text__body"> {{ $event->price }} </div>
                        </p>
                    </div>
                  </div>
                </div>
            </div>
            <div class="tabs-container">
                <ul class="nav nav-tabs" role="tablist">
                    <li class="nav-item"><a class="nav-link mbr-fonts-style active show display-7" role="tab" data-toggle="modal" data-target="#designTicket" href="#tabs4-h_tab1" aria-selected="true"><span class="mbri-touch mbr-iconfont mbr-iconfont-btn"></span>&nbsp; Beli Tiket</a></li>
                </ul>
            </div>

            <div id="designTicket" class="modal modal-md fade" style="margin-top: 5%;max-width: 500px; margin-left: 30vw;">
					    <div class="modal-dialog">
					        <div class="modal-content" style="border: none !important;">
					            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 bhoechie-tab-container">
									<div class="row" style="margin: 40px;">
                                       <h2><b>Untuk Booking Ticket</b></h2><br>
                                       <h3>Dan Untuk Melakukan Transfer</h3>
                                       <h3>Silahkan Hubungi +6289615266856</h3>
                                    </div>
					            </div>
					        </div>
					    </div>
					</div>
                    
            </div>
          </div>
       </div>
            
	</div>	
@endsection