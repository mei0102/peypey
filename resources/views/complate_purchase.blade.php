<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('購入完了') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                購入が完了しました。<br><br>
                購入金額<br>
                <?php
                    if($c > 100000000){
                        header('Location: https://touri0102.net/peypey/public/home');
                        exit();
                    }
                ?>
                {{ $amount }}円
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
