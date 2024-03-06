@extends("layouts.main")


@section("head")
<title>Home</title>
@endsection
@section("content")
@include(' partial.headers')
<div class="fex">
    <div class="flex w-screen">
    </div>

    <div class="ml-20 mt-10 mr-20 flex flex-col gap-10 ">
        @include('components.paragraphe', ['paragraph' => $paragraph])
        <div>
            <button class="border-black border-2 w-[150px] h-[40px]">{{__('text.button_label')}}</button>
        </div>
        <div class="mt-5">
            <h1 class="text-3xl mb-5">{{__('text.explore_title')}}</h1>
            <div style="display: flex; gap: 30px ">
                @foreach ($services as $box)
                @include('components.boxes')
                @endforeach
            </div>
            <div class="h-[200px]"></div>

        </div>
    </div>
</div>

</div>
@endsection