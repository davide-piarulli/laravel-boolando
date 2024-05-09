@extends('layout.main')

@section('content')
    <section class="container ">
        <div class="row d-flex">

            <div href="#" class="card">
                {{-- <img :src="getImagePath(product.frontImage)" :alt="product.frontImage" class="fir-image" /> --}}
                {{-- <img :src="getImagePath(product.backImage)" :alt="product.backImage" class="sec-image" /> --}}
                <span class="heart">&hearts;</span>
                <div class="badges">
                    <span class="badge disc">-50%</span>
                    <span class="badge sost">Sostenibilità</span>
                </div>
                <div class="info">
                    {{-- <span class="brand">{{ product.brand }}</span> --}}
                    {{-- <h4 class="prod-title">{{ product . name }}</h4> --}}
                    {{-- <span class="prod-disc-price">14.99 €</span> --}}
                    {{-- <span class="prod-price">{{ product . price }} €</span> --}}
                </div>
            </div>

        </div>
    </section>
@endsection
