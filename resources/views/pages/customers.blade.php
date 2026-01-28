@extends('layouts.app')

@section('content')
<div class="max-w-7xl mx-auto">
    <div class="flex justify-between items-center mb-6">
        <h2 class="text-2xl font-bold text-gray-800">Customer Directory</h2>
        <div class="space-x-2">
            <button class="bg-white border border-gray-300 px-4 py-2 rounded-lg text-sm font-semibold hover:bg-gray-50 transition">Export CSV</button>
            <button class="bg-indigo-600 text-white px-4 py-2 rounded-lg text-sm font-semibold hover:bg-indigo-700 transition">Add Customer</button>
        </div>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
        <div class="bg-white p-6 rounded-xl shadow-sm border border-gray-200">
            <div class="flex items-center space-x-4 mb-4">
                <div class="w-12 h-12 bg-indigo-100 text-indigo-600 rounded-full flex items-center justify-center font-bold">SJ</div>
                <div>
                    <h3 class="font-bold text-gray-900">Sarah Jenkins</h3>
                    <p class="text-gray-400 text-xs leading-none">sarah@email.com</p>
                </div>
            </div>
            <div class="border-t pt-4 flex justify-between">
                <div>
                    <p class="text-[10px] text-gray-400 uppercase font-bold">Total Spent</p>
                    <p class="font-bold text-gray-800">$1,420</p>
                </div>
                <div>
                    <p class="text-[10px] text-gray-400 uppercase font-bold">Orders</p>
                    <p class="font-bold text-gray-800">24</p>
                </div>
            </div>
        </div>
        
        <div class="bg-white p-6 rounded-xl shadow-sm border border-gray-200">
            <div class="flex items-center space-x-4 mb-4">
                <div class="w-12 h-12 bg-emerald-100 text-emerald-600 rounded-full flex items-center justify-center font-bold">MD</div>
                <div>
                    <h3 class="font-bold text-gray-900">Mike Donahue</h3>
                    <p class="text-gray-400 text-xs leading-none">mike.d@provider.com</p>
                </div>
            </div>
            <div class="border-t pt-4 flex justify-between text-sm">
                <button class="text-indigo-600 font-semibold hover:underline">View History</button>
                <button class="text-gray-400"><i class="fa-solid fa-ellipsis-vertical"></i></button>
            </div>
        </div>
    </div>
</div>
@endsection