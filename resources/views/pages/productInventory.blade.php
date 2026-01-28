@extends('layouts.app')

@section('content')
<div class="max-w-7xl mx-auto space-y-6">
    <div class="flex flex-col md:flex-row md:items-center justify-between gap-4">
        <div>
            <h1 class="text-2xl font-extrabold text-slate-900 tracking-tight">Inventory Management</h1>
            <p class="text-slate-500 text-sm">Monitor stock levels, pricing, and product health across all branches.</p>
        </div>
        <div class="flex items-center gap-3">
            <button class="flex items-center justify-center gap-2 px-4 py-2 bg-white border border-slate-200 rounded-lg text-slate-700 font-semibold hover:bg-slate-50 transition-all shadow-sm">
                <i class="fa-solid fa-file-export text-slate-400"></i> Export
            </button>
            <button class="flex items-center justify-center gap-2 px-4 py-2 bg-indigo-600 rounded-lg text-white font-semibold hover:bg-indigo-700 transition-all shadow-md shadow-indigo-200">
                <i class="fa-solid fa-plus text-indigo-100"></i> New Product
            </button>
        </div>
    </div>

    <div class="bg-white p-4 rounded-xl border border-slate-200 shadow-sm flex flex-wrap items-center gap-4">
        <div class="relative flex-1 min-w-[300px]">
            <i class="fa-solid fa-magnifying-glass absolute left-3 top-1/2 -translate-y-1/2 text-slate-400"></i>
            <input type="text" placeholder="Search by SKU, Name or Category..." class="w-full pl-10 pr-4 py-2 bg-slate-50 border border-slate-200 rounded-lg focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 outline-none transition-all">
        </div>
        <select class="px-4 py-2 bg-slate-50 border border-slate-200 rounded-lg text-slate-600 outline-none hover:border-slate-300 transition-all">
            <option>All Categories</option>
            <option>Electronics</option>
            <option>Warehouse A</option>
        </select>
        <button class="p-2 text-slate-400 hover:text-slate-600"><i class="fa-solid fa-filter"></i></button>
    </div>

    <div class="bg-white rounded-xl border border-slate-200 shadow-sm overflow-hidden">
        <table class="w-full text-left border-collapse">
            <thead>
                <tr class="bg-slate-50 border-b border-slate-200">
                    <th class="px-6 py-4 text-xs uppercase tracking-wider font-bold text-slate-500">Product Info</th>
                    <th class="px-6 py-4 text-xs uppercase tracking-wider font-bold text-slate-500">Category</th>
                    <th class="px-6 py-4 text-xs uppercase tracking-wider font-bold text-slate-500">Stock Status</th>
                    <th class="px-6 py-4 text-xs uppercase tracking-wider font-bold text-slate-500">Unit Price</th>
                    <th class="px-6 py-4 text-right text-xs uppercase tracking-wider font-bold text-slate-500">Actions</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-slate-100">
                <tr class="hover:bg-slate-50/50 transition-colors group">
                    <td class="px-6 py-4">
                        <div class="flex items-center gap-3">
                            <div class="w-10 h-10 rounded-lg bg-slate-100 flex items-center justify-center text-slate-400">
                                <i class="fa-solid fa-box-archive"></i>
                            </div>
                            <div>
                                <div class="font-bold text-slate-900">Apple MacBook Pro M3</div>
                                <div class="text-xs text-slate-400 font-mono">SKU: LAP-00124</div>
                            </div>
                        </div>
                    </td>
                    <td class="px-6 py-4 text-sm text-slate-600">Electronics</td>
                    <td class="px-6 py-4">
                        <div class="flex flex-col gap-1">
                            <div class="flex items-center gap-2">
                                <span class="h-2 w-2 rounded-full bg-emerald-500"></span>
                                <span class="text-sm font-bold text-slate-700">84 Units</span>
                            </div>
                            <div class="w-24 bg-slate-100 h-1 rounded-full overflow-hidden">
                                <div class="bg-emerald-500 h-full" style="width: 80%"></div>
                            </div>
                        </div>
                    </td>
                    <td class="px-6 py-4">
                        <div class="text-sm font-bold text-slate-900">$1,299.00</div>
                        <div class="text-[10px] text-slate-400 font-bold uppercase tracking-tighter">Tax: $12.00</div>
                    </td>
                    <td class="px-6 py-4 text-right">
                        <div class="flex justify-end gap-2">
                            <button class="p-2 text-slate-400 hover:text-indigo-600 hover:bg-indigo-50 rounded-lg transition-all"><i class="fa-solid fa-pen-to-square"></i></button>
                            <button class="p-2 text-slate-400 hover:text-red-600 hover:bg-red-50 rounded-lg transition-all"><i class="fa-solid fa-trash"></i></button>
                        </div>
                    </td>
                </tr>

                <tr class="hover:bg-slate-50/50 transition-colors group">
                    <td class="px-6 py-4 font-medium">
                        <div class="flex items-center gap-3">
                            <div class="w-10 h-10 rounded-lg bg-orange-50 flex items-center justify-center text-orange-400">
                                <i class="fa-solid fa-bolt"></i>
                            </div>
                            <div>
                                <div class="font-bold text-slate-900">Logitech MX Master 3S</div>
                                <div class="text-xs text-slate-400 font-mono">SKU: MOU-8822</div>
                            </div>
                        </div>
                    </td>
                    <td class="px-6 py-4 text-sm text-slate-600">Peripherals</td>
                    <td class="px-6 py-4">
                        <div class="flex flex-col gap-1 text-orange-600 font-bold">
                             <span class="text-xs bg-orange-100 px-2 py-0.5 rounded w-fit tracking-tighter">LOW STOCK</span>
                             <span class="text-sm">3 Units left</span>
                        </div>
                    </td>
                    <td class="px-6 py-4 font-bold text-slate-900">$99.00</td>
                    <td class="px-6 py-4 text-right">
                        <button class="px-3 py-1 text-xs font-bold border border-orange-200 text-orange-600 rounded-md hover:bg-orange-600 hover:text-white transition-all">Restock</button>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
@endsection