@extends("layouts.main")


@section("head")
<title>Home</title>
@endsection
@section("content")
<div class="fex">
<div class="flex w-screen">
    @include(' partial\headers')
</div>

    <div class="ml-20 mt-10 mr-20 flex flex-col gap-10 ">
        <h1 class="text-3xl">{{ $text->title }}</h1>
        <p>{{ $text->text }}</p>
        <div>
            <button class="border-black border-2 w-[150px] h-[40px]">learn more</button>
        </div>
        <div class="mt-5">
            <h1 class="text-3xl mb-5">Explore our services</h1>
            <div style="display: flex; flex-wrap: wrap; gap: 30px">
                @foreach ($boxes as $box)
                <div>
                    <div class="flex  justify-center items-center text-2xl text-white  border-2 w-[380px] h-[220px] {{ $box->box === 'box1' ? 'bg-blue-700' : '' }} {{ $box->box === 'box2' ? 'bg-red-600' : '' }} {{ $box->box === 'box3' ? 'bg-lime-500' : '' }} {{ $box->box === 'box4' ? 'bg-amber-600' : '' }} ">
                        {{ $box->box }}
                    </div>
                    <div class="w-[380px]">
                        <p class="text-l">{{ $box->text }}</p>
                    </div>
                </div>
                @endforeach
            </div>

        </div>
    </div>
</div>

</div>
@endsection