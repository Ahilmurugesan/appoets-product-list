@extends('layouts/master')

@section('title', 'Shop')

@section('content')
    <div class="custom-infinite-scroll">

        <div class="list-view">
            <!-- E-commerce Products Starts -->
            @foreach($products as $product)
                <div class="card ecommerce-card" style="margin-bottom: 15px">
                <div class="item-img text-center">
                    <a href='#'>
                        @if(isset($product->images[0]))
                        <img class="img-fluid card-img-top" src="{{asset('storage/'.$product->images[0]->path)}}" alt="img-placeholder" />
                        @else
                            <img class="img-fluid card-img-top" src="#" alt="No Image Found" />
                        @endif
                    </a>
                </div>
                <div class="card-body">
                    <div class="item-wrapper" style="margin-top: 20px;">
                        <div>
                            <h6 class="item-price">&#x20B9 {{ $product->price }}</h6>
                        </div>
                    </div>
                    <h6 class="item-name">
                        <a class="text-body" href="#">{{ ucwords($product->name) }}</a>
                    </h6>
                    <p class="card-text item-description" style="margin-top: 20px;">
                        {{ $product->description }}
                    </p>
                </div>
                <div class="item-options text-center">
                    <a href="javascript:void(0)" class="btn btn-light btn-wishlist">
                        <i data-feather="heart"></i>
                        <span>Wishlist</span>
                    </a>
                    <a href="javascript:void(0)" class="btn btn-primary btn-cart">
                        <i data-feather="shopping-cart"></i>
                        <span class="add-to-cart">Add to cart</span>
                    </a>
                </div>
            </div>
            @endforeach
            <!-- E-commerce Products Ends -->
        </div>
        {{ $products->links() }} <p>Note:Pagination is shown to check page is loading correct or not</p>
    </div>
@endsection

@push('scripts')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jscroll/2.4.1/jquery.jscroll.min.js"></script>
    <script type="text/javascript">
        $('ul.pagination').hide();
        $(function() {
            $('.custom-infinite-scroll').jscroll({
                autoTrigger: true,
                padding: 0,
                nextSelector: '.pagination li.active + li a',
                contentSelector: 'div.custom-infinite-scroll',
                callback: function() {
                    //$('.jscroll-added ul.pagination').hide();
                }
            });
        });
    </script>
@endpush

