<x-layout>
    @if (session('Sented'))
    <div class="alert alert-success">
        {{ session('Sented') }}
    </div>
    @endif

    {{-- HEADER --}}
    <div class="container-fluid text-white vh-100 d-flex align-items-center bg_moon  ">
        <div class="row">
            <div class="col-12">
                <h1>Lorem Ipsum</h1>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
            </div>
            <div class="col-12 text-center">
                <a href="#explore-section ">
                    <i class="bi bi-chevron-down  scrollArrow"></i>
                </a>
            </div>
        </div>
    </div>
    
    {{-- FIRST SECTION --}}
    <div class="container-fluid vh_custom bg-black pt-5">
        <div class="row text-center justify-content-center text-white">
            <div class="col-2 num_box">
                <p class="fs-5">Lorem</p>
                <p class="fs-3">100</p>
            </div>
            <div class="col-2 num_box">
                <p class="fs-5">Lorem</p>
                <p class="fs-3">100</p>
            </div>
            <div class="col-2 num_box">
                <p class="fs-5">Lorem</p>
                <p class="fs-3">100</p>
            </div>
            <div class="col-2 num_box">
                <p class="fs-5">Lorem</p>
                <p class="fs-3">100</p>
            </div>
        </div>
    </div>
    
    
    
    
    
</x-layout>