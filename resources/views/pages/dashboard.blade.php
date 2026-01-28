@extends('layouts.app')

@section('content')
<div class="max-w-7xl mx-auto">
    <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-8">
        <div class="bg-white p-6 rounded-xl shadow-sm border border-gray-200">
            <h3 class="text-gray-400 text-sm font-bold uppercase tracking-wider">Today's Revenue</h3>
            <p class="text-3xl font-bold text-gray-900 mt-2">$4,250.00</p>
            <div class="mt-4 flex items-center text-green-500 text-sm">
                <i class="fa-solid fa-arrow-up mr-1"></i> 8.2% vs yesterday
            </div>
        </div>

        <div class="bg-white p-6 rounded-xl shadow-sm border border-gray-200">
            <h3 class="text-gray-400 text-sm font-bold uppercase tracking-wider">Stock Alerts</h3>
            <p class="text-3xl font-bold text-red-600 mt-2">12 Items</p>
            <div class="mt-4 flex items-center text-gray-500 text-sm">
                Requires immediate restock
            </div>
        </div>

        <div class="bg-white p-6 rounded-xl shadow-sm border border-gray-200">
            <h3 class="text-gray-400 text-sm font-bold uppercase tracking-wider">Total Orders</h3>
            <p class="text-3xl font-bold text-gray-900 mt-2">84</p>
            <div class="mt-4 flex items-center text-indigo-500 text-sm underline cursor-pointer">
                View all transactions
            </div>
        </div>
    </div>

    <div class="bg-white rounded-xl shadow-sm border border-gray-200 overflow-hidden">
        <div class="px-6 py-4 border-b border-gray-100 flex justify-between items-center">
            <h2 class="font-bold text-gray-800">Recent Transactions</h2>
            <button class="text-indigo-600 text-sm font-semibold hover:text-indigo-800 transition">Download Report</button>
        </div>
        <div class="overflow-x-auto">
            <table class="w-full text-left">
                <thead class="bg-gray-50 text-gray-500 text-xs uppercase font-semibold">
                    <tr>
                        <th class="px-6 py-4">Transaction ID</th>
                        <th class="px-6 py-4">Customer</th>
                        <th class="px-6 py-4">Amount</th>
                        <th class="px-6 py-4">Status</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-100">
                    <tr>
                        <td class="px-6 py-4 font-medium text-gray-900">#TRX-9940</td>
                        <td class="px-6 py-4 text-gray-600">Walking Customer</td>
                        <td class="px-6 py-4 font-bold">$120.50</td>
                        <td class="px-6 py-4">
                            <span class="px-2 py-1 bg-green-100 text-green-700 rounded-full text-[10px] font-bold uppercase">Paid</span>
                        </td>
                    </tr>
                    <tr>
                        <td class="px-6 py-4 font-medium text-gray-900">#TRX-9939</td>
                        <td class="px-6 py-4 text-gray-600">Sarah Jenkins</td>
                        <td class="px-6 py-4 font-bold">$45.00</td>
                        <td class="px-6 py-4">
                            <span class="px-2 py-1 bg-yellow-100 text-yellow-700 rounded-full text-[10px] font-bold uppercase">Pending</span>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection