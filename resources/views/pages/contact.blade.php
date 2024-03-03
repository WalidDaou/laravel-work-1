@extends("layouts.main")

@section("head")
<title>contact</title>
@endsection

@include(' partial\headers')


@section("content")




<h1>Contact Us </h1>
<div class="flex flex-row gap-20 ml-20">

    <div>
        <p>{{$contacts->address}}</p>
        <p>{{$contacts->number}}</p>
        <p>{{$contacts->info}}</p>
    </div>

    <div>
        <h1>Get in touch </h1>

        <form action="{{ route('contact.submit') }}" method="POST">
            @csrf
            <div>

                <div>
                    <label for="first_name">First Name</label>
                    <input id="first_name" class="border-black border-2" type="text" name="first_name">
                </div>
                <div>
                    <label for="last_name">Last Name</label>
                    <input id="last_name" class="border-black border-2" type="text" name="last_name">
                </div>
            </div>
            <div>
                <label for="message">Message</label>
                <input id="message" class="border-black border-2" type="text" name="message">
            </div>

            <button type="submit">Submit</button>
        </form>

    </div>

</div>



@endsection