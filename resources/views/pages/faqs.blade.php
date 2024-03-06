@extends("layouts.main")

@section("head")
<title>Faqs</title>
@endsection

@include(' partial.headers')


@section("content")


<div class="flex flex-col mt-10 ml-20 mr-20">

    <p class="text-4xl mb-10">{{__('text.faqs_headers')}}</p>


    <div class="flex flex-col gap-5">

        @foreach ($faqs as $faqs)
        <div class="flex flex-col gap-4 border p-5 ">

            <div>
                {{ $faqs->title }}
            </div>
            <div>
                <p class="text-sm">{{ $faqs->text }}</p>
            </div>
        </div>

        @endforeach

    </div>

</div>






@endsection