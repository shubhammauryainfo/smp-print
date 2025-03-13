@extends('_layouts.main')
@section('title', 'About - SMP')
@section('body')

<div class="btn-group-vertical" role="group" aria-label="">
    <button type="button" class="btn btn-secondary">First One</button>
    <button type="button" class="btn btn-secondary">Second One</button>
    <div class="btn-group" role="group">
        <button
            id="dropdownId"
            type="button"
            class="btn btn-secondary dropdown-toggle"
            data-bs-toggle="dropdown"
            aria-haspopup="true"
            aria-expanded="false"
        >
            More
        </button>
        <div class="dropdown-menu" aria-labelledby="dropdownId">
            <a class="dropdown-item" href="#">First Dropdown</a>
            <a class="dropdown-item" href="#">Second Dropdown</a>
        </div>
    </div>
</div>


  

@endsection
