@extends('layouts.app')

@section('content')
<div class="flex flex-col lg:flex-row gap-6 h-full">
    <div class="flex-1">
        <div class="grid grid-cols-2 md:grid-cols-3 xl:grid-cols-4 gap-4">
            @for ($i = 1; $i <= 8; $i++)
            <div class="bg-white p-4 rounded-xl shadow-sm border border-gray-200 cursor-pointer hover:border-indigo-500 transition group">
                <div class="h-32 bg-gray-100 rounded-lg mb-3 flex items-center justify-center text-gray-400 group-hover:text-indigo-400">
                    <i class="fa-solid fa-image text-3xl"></i>
                </div>
                <h4 class="font-bold text-sm">Product Item {{ $i }}</h4>
                <p class="text-indigo-600 font-bold">$12.50</p>
            </div>
            @endfor
        </div>
    </div>

    <div class="w-full lg:w-96 bg-white rounded-xl shadow-lg border border-gray-200 flex flex-col overflow-hidden">
        <div class="p-4 bg-gray-50 border-b font-bold text-gray-700 flex justify-between">
            <span>Current Order</span>
            <i class="fa-solid fa-trash text-red-400 cursor-pointer"></i>
        </div>
        <div class="flex-1 p-4 space-y-4 overflow-y-auto">
            <div class="flex justify-between text-sm">
                <div>
                    <p class="font-bold">Wireless Mouse</p>
                    <p class="text-gray-400 text-xs">x 1</p>
                </div>
                <p class="font-semibold">$25.00</p>
            </div>
            </div>
        <div class="p-4 bg-gray-50 border-t space-y-2">
            <div class="flex justify-between text-gray-600">
                <span>Subtotal</span>
                <span>$25.00</span>
            </div>
            <div class="flex justify-between text-xl font-bold text-gray-900 border-t pt-2">
                <span>Total</span>
                <span>$25.00</span>
            </div>
            <button class="w-full bg-indigo-600 text-white py-4 rounded-xl font-bold mt-4 shadow-lg hover:bg-indigo-700 transition">
                COMPLETE PAYMENT
            </button>
        </div>
    </div>
</div>
@endsection