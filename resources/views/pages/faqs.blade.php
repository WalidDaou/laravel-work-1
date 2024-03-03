@extends("layouts.main")

@section("head")
<title>Faqs</title>
@endsection

@include(' partial\headers')


@section("content")

<p>FAQs</p>


  
@foreach ($FAQs as $faqs)
        <div>

            <div class="">
                {{ $faqs->title }}</div>
                <div class="w-[150px]">
                    <p class="text-sm">{{ $faqs->text }}</p>
                </div>
            </div>
            
            @endforeach
        







@endsection
