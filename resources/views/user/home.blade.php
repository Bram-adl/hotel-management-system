@extends('user.layouts.app')

@section('header')
<div class="header-div">
    <div class="header-text">
        <h1>Harris - Hotel & Resort</h1>
        <p>One of many places which you have to get the wonderful joy and delightful experiences. Bring your loved ones and let us serve you with stunning experiences.</p>
        <a href="#" class="btn btn-primary btn--header">Book Now</a>
    </div>
    <div class="header-form">
        <form action="#" class="form form--header">
            <h2 class="form-title">Check Available Rooms</h2>
            <div class="form-group">
                <label for="check_in">Check In</label>
                <input type="date" name="check_in" id="check_in" class="form-control">
            </div>
            <div class="form-group">
                <label for="check_out">Check Out</label>
                <input type="date" name="check_out" id="check_out" class="form-control">
            </div>
            <div class="form-group">
                <label for="guests">Guests</label>
                <input type="number" name="guests" id="guests" class="form-control" placeholder="0">
            </div>
            <div class="form-group">
                <label for="rooms">Rooms</label>
                <input type="number" name="rooms" id="rooms" class="form-control" placeholder="0">
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn--form">Check Rooms</button>
            </div>
        </form>
    </div>
</div>
@endsection

@section('content')
<div class="section section--about">
    <div class="title">
        <h2>We are 5 stars hotel and resort ranked in Indonesia</h2>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Inventore eaque unde voluptas, veniam ipsa error natus architecto exercitationem quaerat laudantium voluptatem impedit rem possimus minima.</p>
        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Laudantium officiis nisi officia at earum? Cumque fuga, omnis dolore alias odio reiciendis tempora tenetur itaque placeat.</p>
        <a href="#" class="btn btn--link">Read More</a>
    </div>
    <div class="images">
        <div class="image">
            <img src="https://images.unsplash.com/photo-1582610116397-edb318620f90?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=1950&q=80">
        </div>
        <div class="image">
            <img src="https://images.unsplash.com/photo-1587726419503-e4ca65918c10?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=975&q=80">
        </div>
    </div>
</div>

<div class="section section--rooms">
    <div class="card card--room">
        <div class="card-header">
            <h3>Grand Hill Double Room</h3>
        </div>
        <div class="card-body">
            <div class="price">
                <p>Price</p>
                <p>$ 167.88 <span>/pernight</span></p>
            </div>
            <div class="type">
                <p>Type</p>
                <p>Double Room</p>
            </div>
            <div class="size">
                <p>Size</p>
                <p>48 m<sup>2</sup></p>
            </div>
            <div class="capacity">
                <p>Capacity</p>
                <p>Maximum 2 person(s)</p>
            </div>
            <div class="bed-type">
                <p>Bed Type</p>
                <p>Two Single Beds</p>
            </div>
        </div>
        <div class="card-footer">
            <a href="#" class="btn btn--link">Read More</a>
        </div>
    </div>
    <div class="card card--room">
        <div class="card-header">
            <h3>Grand Hill Double Room</h3>
        </div>
        <div class="card-body">
            <div class="price">
                <p>Price</p>
                <p>$ 167.88 <span>/pernight</span></p>
            </div>
            <div class="type">
                <p>Type</p>
                <p>Double Room</p>
            </div>
            <div class="size">
                <p>Size</p>
                <p>48 m<sup>2</sup></p>
            </div>
            <div class="capacity">
                <p>Capacity</p>
                <p>Maximum 2 person(s)</p>
            </div>
            <div class="bed-type">
                <p>Bed Type</p>
                <p>Two Single Beds</p>
            </div>
        </div>
        <div class="card-footer">
            <a href="#" class="btn btn--link">Read More</a>
        </div>
    </div>
    <div class="card card--room">
        <div class="card-header">
            <h3>Grand Hill Double Room</h3>
        </div>
        <div class="card-body">
            <div class="price">
                <p>Price</p>
                <p>$ 167.88 <span>/pernight</span></p>
            </div>
            <div class="type">
                <p>Type</p>
                <p>Double Room</p>
            </div>
            <div class="size">
                <p>Size</p>
                <p>48 m<sup>2</sup></p>
            </div>
            <div class="capacity">
                <p>Capacity</p>
                <p>Maximum 2 person(s)</p>
            </div>
            <div class="bed-type">
                <p>Bed Type</p>
                <p>Two Single Beds</p>
            </div>
        </div>
        <div class="card-footer">
            <a href="#" class="btn btn--link">Read More</a>
        </div>
    </div>
    <div class="card card--room">
        <div class="card-header">
            <h3>Grand Hill Double Room</h3>
        </div>
        <div class="card-body">
            <div class="price">
                <p>Price</p>
                <p>$ 167.88 <span>/pernight</span></p>
            </div>
            <div class="type">
                <p>Type</p>
                <p>Double Room</p>
            </div>
            <div class="size">
                <p>Size</p>
                <p>48 m<sup>2</sup></p>
            </div>
            <div class="capacity">
                <p>Capacity</p>
                <p>Maximum 2 person(s)</p>
            </div>
            <div class="bed-type">
                <p>Bed Type</p>
                <p>Two Single Beds</p>
            </div>
        </div>
        <div class="card-footer">
            <a href="#" class="btn btn--link">Read More</a>
        </div>
    </div>
</div>

<div class="section section--headlines">
    <div class="headlines">
        <h2>Reserve your room now</h2>
        <a href="#" class="btn btn--headlines">Book Now</a>
    </div>
</div>
@endsection

@push('scripts')
<script>
    const hamburger = document.querySelector('.hamburger')
    const hamburgerLink = document.querySelector('.hamburger-link')
    const hamburgerClose = document.querySelector('.hamburger-close')

    hamburger.addEventListener('click', () => {
        hamburgerLink.classList.add('show')
    })
    hamburgerClose.addEventListener('click', () => {
        hamburgerLink.classList.remove('show')
    })
</script>
@endpush