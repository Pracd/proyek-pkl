@extends('layouts.app')

@section('title', 'Home Page')

@section('content')
    <div class="container mx-auto p-6">
        <!-- Hero Section -->
        <div class="bg-blue-500 text-white rounded-lg p-8 text-center">
            <h1 class="text-3xl font-bold">Welcome to Our Website!</h1>
            <p class="mt-4">We provide the best services for your needs.</p>
            <a href="#services"
                class="inline-block mt-6 bg-white text-blue-500 font-semibold py-2 px-4 rounded-md hover:bg-blue-100">Learn
                More</a>
        </div>

        <!-- Services Section -->
        <div id="services" class="mt-12 grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
            <div class="bg-white shadow-lg rounded-lg overflow-hidden">
                <img src="https://via.placeholder.com/300" alt="Service 1" class="w-full h-48 object-cover">
                <div class="p-4">
                    <h2 class="text-xl font-bold">Service 1</h2>
                    <p class="mt-2 text-gray-600">Description of service 1. Lorem ipsum dolor sit amet, consectetur
                        adipiscing elit.</p>
                    <a href="#"
                        class="mt-4 inline-block bg-blue-500 text-white py-2 px-4 rounded-md hover:bg-blue-600">Learn
                        More</a>
                </div>
            </div>
            <div class="bg-white shadow-lg rounded-lg overflow-hidden">
                <img src="https://via.placeholder.com/300" alt="Service 2" class="w-full h-48 object-cover">
                <div class="p-4">
                    <h2 class="text-xl font-bold">Service 2</h2>
                    <p class="mt-2 text-gray-600">Description of service 2. Lorem ipsum dolor sit amet, consectetur
                        adipiscing elit.</p>
                    <a href="#"
                        class="mt-4 inline-block bg-blue-500 text-white py-2 px-4 rounded-md hover:bg-blue-600">Learn
                        More</a>
                </div>
            </div>
            <div class="bg-white shadow-lg rounded-lg overflow-hidden">
                <img src="https://via.placeholder.com/300" alt="Service 3" class="w-full h-48 object-cover">
                <div class="p-4">
                    <h2 class="text-xl font-bold">Service 3</h2>
                    <p class="mt-2 text-gray-600">Description of service 3. Lorem ipsum dolor sit amet, consectetur
                        adipiscing elit.</p>
                    <a href="#"
                        class="mt-4 inline-block bg-blue-500 text-white py-2 px-4 rounded-md hover:bg-blue-600">Learn
                        More</a>
                </div>
            </div>
        </div>
    </div>
@endsection
