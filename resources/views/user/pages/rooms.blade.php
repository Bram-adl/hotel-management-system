@extends('user.layouts.app')

@section('header')
<div class="header-section">
    <h2>Our Rooms</h2>
</div>
@endsection

@section('content')
<section class="section section--rooms">
    @foreach ($rooms as $key=>$room)
    <div class="card card--room" data-aos="zoom-in" data-aos-duration="1200" data-aos-offset="250" data-aos-delay="{{ $key * 50 }}" style="background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('/img/uploads/rooms/{{ $room->photo }}') center center/cover">
        <div class="card-header">
            <h3>{{ $room->name }}</h3>
        </div>
        <div class="card-body">
            <div class="price">
                <p>Price</p>
                <p>$ {{ $room->price }} <span>/pernight</span></p>
            </div>
            <div class="type">
                <p>Type</p>
                <p>{{ $room->type }}</p>
            </div>
            <div class="size">
                <p>Size</p>
                <p>{{ $room->size }} m<sup>2</sup></p>
            </div>
            <div class="capacity">
                <p>Capacity</p>
                <p>Maximum {{ $room->capacity }} person(s)</p>
            </div>
            <div class="bed-type">
                <p>Bed Type</p>
                <p>{{ $room->bed_type }}</p>
            </div>
        </div>
        <div class="card-footer">
            <a href="/room/{{ $room->id }}" class="btn btn--link">Read More</a>
        </div>
    </div>
    @endforeach
</section>

<div id="pagination">
    {{ $rooms->links() }}
</div>
@endsection

@push('scripts')
<script>
    // Active Links
    document.querySelector('[data-link="/our-rooms"]').classList.add('active')
</script>
@endpush