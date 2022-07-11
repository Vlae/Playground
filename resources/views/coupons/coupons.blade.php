<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Coupons') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                        <table>
                            @foreach($coupons as $coupon)
                                <th>
                                    <th style="width:150px">{{ $coupon->code }}</th>
                                    <th style="width:150px">{{ $coupon->type }}</th>
                                    <th style="width:150px">{{ $coupon->availableTo }}</th>
                                    <th style="width:150px">{{ $coupon->sum }}</th>
                                    <th style="width:150px">{{ $coupon->used ? 'used' : 'available' }}</th>
                               </tr>
                            @endforeach
                        </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
