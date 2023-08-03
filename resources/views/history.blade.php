<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('history') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <h1>購入履歴 直近20件を表示</h1>
                    <br>
                    <table class="table table-striped">
                    <thead>
                        <tr>
                        <th>購入額</th>
                        <th>所持金</th>
                        <th>購入日</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($amount_data as $a_data)
                        <tr>
                        <td>{{ $a_data->purchase_amount }}円</td>
                        <td>{{ $a_data->current_amount }}円</td>
                        <td>{{ $a_data->created_at }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
