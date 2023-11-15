<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('purchase') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <form id="frm"method="POST" action="{{ url('complate_purchase') }}">
                    @csrf

                    <!-- purchase -->
                    @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                    @endif
                    <div>
                        <x-input-label for="amount" :value="__('購入する金額を入力してください。')" />
                        <x-text-input required id="amount" class="block mt-1 w-full" type="number" name="amount" :value="old('amount')"/>
                        <x-input-error :messages="$errors->get('number')" class="mt-2" />
                    </div>

                    <div class="flex items-center justify-end mt-4">
                        <x-primary-button class="ml-3" id="check">
                            {{ __('購入する') }}
                        </x-primary-button>
                    </div>
                </form>
                <script>
                    window.onload = function(){
                        frm = document.getElementById('frm');
                        submit = document.getElementById('check');
                        amount = document.getElementById('amount');

                        submit.addEventListener('click', function(event) {
                            if(amount.value <= 0){
                                alert('1円以上から購入できます。入力を確認してください。');
                                event.stopPropagation();
                                event.preventDefault();
                            }
                        });

                    };
                </script>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
