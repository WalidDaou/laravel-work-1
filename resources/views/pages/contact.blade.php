@extends("layouts.main")

@section("head")
<title>contact</title>
@endsection

@include(' partial\headers')


@section("content")


<div class="flex flex-col m-20">


    <h1 class="text-4xl mb-10">Contact Us </h1>
    <div class="flex flex-row gap-20 ">

        <div class="border w-[350px] h-[100px] pl-4 pt-2">
            <p>{{$contacts->address}}</p>
            <p>{{$contacts->number}}</p>
            <p>{{$contacts->info}}</p>
        </div>

        <div class="gap-4 flex flex-col">
            <h1>Get in touch </h1>

            <form action="{{ route('contact.submit') }}" method="POST">
                @csrf
                <div class="flex flex-row gap-5">

                
                    <div class="flex flex-col">
                        <label for="first_name">First Name</label>
                        <input   class=" border  py-2 pl-4 pr-3" placeholder="First name" id="first_name"  type="text" name="first_name">
                    </div>
                    <div class="flex flex-col" >
                        <label for="last_name">Last Name</label>
                        <input   class=" border  py-2 pl-4 pr-3"  placeholder="Last name" id="last_name" type="text" name="last_name">
                    </div>
                </div>
                <div class="flex flex-col mt-4 mb-4" >
                    <label for="message">Message</label>
                    <input  class=" border justify-items-start pl-4 pr-3 h-[100px]" id="message "  placeholder="Message" type="text" name="message">
                </div>

                <button type="submit" class="w-[100px] border border-black">Submit</button>
        </div>
        </form>

    </div>

</div>



@endsection