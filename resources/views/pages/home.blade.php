@extends("layouts.main")


@section("head")
<title>Home</title>
@endsection
@include(' partial\headers')
@section("content")
<div class="fex">

    <div  class="ml-20 mt-5 mr-20 flex flex-col gap-10">
        <h1 class="text-2xl">{{ $text["title"] }}</h1>
        <p>{{ $text["text"] }}</p>
        <div >
            <button class="border-black border-2">learn more</button>
        </div>
        <div class="mt-5">
        <h1 class="text-2xl">Explore our services</h1>
        <div style="display: flex; flex-direction: row; gap: 10px">
       
        @foreach ($boxes as $box)
        <div>

            <div class="border-black border-2 w-[150px] h-[150px]">
                {{ $box['box'] }}</div>
                <div class="w-[150px]">
                    <p class="text-sm">{{ $box['text'] }}</p>
                </div>
            </div>
            @endforeach
        
        </div>
 
    </div>
    </div>
    </div>
    
</div>
@endsection