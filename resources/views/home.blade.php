<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('home') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <?php  
                    foreach ($amount_data as $a_data) {
                        $c_amount = $amount_data[0]->current_amount; // 必要な値を取り出す
                        $a = (int)$c_amount;
                        if($a > 100000000){
                            foreach ($flag as $f){
                                echo "おめでとう！！！これで君も億万長者！！！<br>".$f->flagdayo. "<br><br>";
                            }
                        }
                        echo "現在の残高:".$a_data->current_amount."円<br>";
                        echo "最終購入日時:" . $a_data->created_at;
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
