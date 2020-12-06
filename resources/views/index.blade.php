@extends('layouts.app')

@section('content')
    <!-- Slideshow -->
    <div class="container-fluid pt-5 d-flex slideshow">
        <button class="m-auto px-4 py-3"> < </button>
        <div class="container d-flex justify-content-center p-0">
            <img src="https://via.placeholder.com/1000x500" alt="">
        </div>
        <button class="m-auto px-4 py-3"> > </button>
    </div>
    <div class="container-fluid">
        <div class="container">
            <div class="row mb-5 pt-5">
                <h2 class="mb-3">Wat leveren wij?</h2>
                <div class="row">
                    <a href="" class="col border-right d-block">
                        <img src="https://via.placeholder.com/350x200" alt="">
                        <h3 class="my-3">Lorem</h3>
                        <p>Lorem ipsum, dolor sit amet, consectetur adipisicing elit. Animi odio itaque quae nemo harum, illo doloribus iusto eius, similique inventore non dolore obcaecati, expedita aliquam nihil sed architecto, sit quibusdam.</p>
                    </a>
                    <a href="" class="col d-block">
                        <img src="https://via.placeholder.com/350x200" alt="">
                        <h3 class="my-3">Lorem</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Alias in tempore consequatur illum magnam unde sit numquam necessitatibus! </p>
                    </a>
                    <a href="" class="col border-left d-block">
                        <img src="https://via.placeholder.com/350x200" alt="">
                        <h3 class="my-3">Lorem</h3>
                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Accusamus accusantium officia adipisci. Perferendis quod voluptate perspiciatis, aliquid dolore accusamus quidem beatae</p>
                    </a>
                </div>
            </div>
            <div class="row my-5">
                <div href="" class="col-6 pl-0 d-block">
                    <img src="https://via.placeholder.com/570x200" alt="">
                    <h3 class="my-3">Over ons</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iste odit ducimus dolores totam perferendis fugit ab itaque unde, ea at, illum. Iure sunt fugit ipsam accusamus quod similique possimus voluptates?</p>
                    <div class="d-flex justify-content-end">
                        <a class="btn btn-primary" href="">Meer over 24/7BHV</a>
                    </div>
                </div>
            </div>
            <div class="row mt-5">
                <h2 class="mb-3">Blog</h2>
                <div class="row">
                    <a href="" class="col d-flex border-right">
                        <img src="https://via.placeholder.com/150x400" alt="">
                        <div class="ml-2">
                            <h3>Lorem</h3>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing, elit. Atque ut fugit in nam? Esse sint voluptatem reiciendis omnis quas laboriosam repellendus deserunt, tenetur nam, nobis iusto distinctio rem aliquam doloribus.</p>
                        </div>
                    </a>
                    <a href="" class="col d-flex">
                        <img src="https://via.placeholder.com/150x400" alt="">
                        <div class="ml-2">
                            <h3>Lorem</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                consequat.</p>
                        </div>
                    </a>
                    <a href="" class="col d-flex border-left">
                        <img src="https://via.placeholder.com/150x400" alt="">
                        <div class="ml-2">
                            <h3>Lorem</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                consequat. </p>
                        </div>
                    </a>
                </div>
                <div class="row my-5 mx-auto">
                    <a class="btn btn-success border mx-auto" href="{{ route('blog.index') }}">Bekijk alle posts</a>
                </div>
            </div>
        </div>
    </div>
@endsection
