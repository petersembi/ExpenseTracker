<x-layout>

    <div class="container mycontainer mt-5 mb-5 position-relative" >
          
        <div class="row mt-5 mb-5">

       
            @unless (count($expenses)==0)
                @foreach ($expenses as $expense)
                <x-card :expense="$expense" />  
                {{-- <x-card/>                   --}}
                @endforeach                
            @else
                <p style="margin-top: 130px;">No Expenses found</p>
            @endunless              
                    

        </div>

</x-layout>