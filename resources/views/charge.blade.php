<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('charge') }}<br>
            {{ __("(現在 charge 機能はメンテナンス中のため利用できません。)") }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                <center><font size="5"><b>超peypey祭り</b></font></center>
                <p>・特点1</p>
                {{"　　　　"}}{{ __("1億円以上チャージすると期間限定でspctf{xxx} をプレゼント！") }}
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
