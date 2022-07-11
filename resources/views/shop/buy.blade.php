<?php
use Illuminate\Support\Facades\Storage;
?>
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Buy') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <div class="item">
                        <img src="storage/app/public/images/gopiano_1.jpeg">Roland Go
                        <span class="price">3$</span>
                        <button> Add to cart</button>
                    </div>
                    <div class="item">
                        <img src="storage/app/public/images/yamaha-clp-735-b.jpeg">Yamaha clp
                        <span class="price">15$</span>
                        <button> Add to cart</button>

                    </div>
                    <div class="item">
                        Casio px
                        <span class="price">10$</span>
                        <button> Add to cart</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
