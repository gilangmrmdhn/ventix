@extends('layouts.app')

@section('content')
<div class="media-container-row pt-5 " align-items-center>
  @foreach($events as $event)
  <div class="card p-3 col-12 col-md-6 col-lg-4">
    <div class="card-wrapper">
      <div class="card-img">
        <div class="mbr-overlay"></div>
          <div class="mbr-section-btn text-center">
            <a href="{{ url('/'.$event->id) }}" class="btn btn-primary display-4">Lihat Event</a>
          </div>
            <img src="{{ url('pamflet/'.$event->pamflet) }}" width="338" height="374" alt="Event 1">
          </div>
          <div class="card-box">
            <h4 class="card-title mbr-fonts-style display-7">{{ $event->name }}</h4>
            <p class="mbr-text mbr-fonts-style align-left display-7">
              {{ str_limit(strip_tags($event->desc), $limit = 200, $end = '...') }}
            </p>
          </div>
    </div>
  </div>
  @endforeach
</div>
@endsection