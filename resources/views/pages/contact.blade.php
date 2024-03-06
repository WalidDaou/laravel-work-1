@extends("layouts.main")

@section("head")
<title>contact</title>
@endsection

@include(' partial.headers')


@section("content")


<div class="flex flex-col m-20">


    <h1 class="text-4xl mb-10">{{ __('text.contact_headers') }}  </h1>
    <div class="flex flex-row gap-20 ">

        <div class="border w-[350px] h-[100px] pl-4 pt-2">
            <p>{{$contact->phone}}</p>
            <p>{{$contact->email}}</p>
        </div>

        <div class="gap-4 flex flex-col">
            <h1 class="text-3xl">{{__('text.contact_label')}}</h1>

            <form action="{{ route('contact.submit') }}" method="POST">
                @csrf
                @include('components.info')
            </form>

            <script>
                var csrfToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content');
            </script>

        </div>

    </div>



    @endsection