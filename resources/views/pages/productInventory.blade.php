@extends('layouts.app')

@section('content')
<div class="max-w-7xl mx-auto">
    <div class="flex justify-between items-center mb-6">
        <h2 class="text-2xl font-bold text-gray-800">Product Inventory</h2>
        <button class="bg-indigo-600 hover:bg-indigo-700 text-white px-4 py-2 rounded-lg transition flex items-center">
            <i class="fa-solid fa-plus mr-2"></i> Add New Product
        </button>
    </div>

    <div class="bg-white rounded-xl shadow-sm border border-gray-200 overflow-hidden">
        <div class="p-4 border-b border-gray-100 bg-gray-50 flex gap-4">
            <input type="text" placeholder="Search products..." class="flex-1 border border-gray-300 rounded-md px-4 py-2 focus:ring-2 focus:ring-indigo-500 outline-none">
            <select class="border border-gray-300 rounded-md px-4 py-2 outline-none">
                <option>All Categories</option>
                <option>Electronics</option>
                <option>Grocery</option>
            </select>
        </div>
        <table class="w-full text-left">
            <thead class="bg-gray-50 text-gray-500 text-xs uppercase font-semibold">
                <tr>
                    <th class="px-6 py-4">Product Name</th>
                    <th class="px-6 py-4">SKU</th>
                    <th class="px-6 py-4">Stock</th>
                    <th class="px-6 py-4">Price</th>
                    <th class="px-6 py-4">Status</th>
                    <th class="px-6 py-4">Actions</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-gray-100">
                <tr>
                    <td class="px-6 py-4 font-medium">Wireless Mouse M1</td>
                    <td class="px-6 py-4 text-gray-500 text-sm">WM-00123</td>
                    <td class="px-6 py-4">4