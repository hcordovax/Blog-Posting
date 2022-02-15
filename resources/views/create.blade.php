
    <x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    @if(isset($post))
                    <form action="{{ url('/post/update/' . $post->id) }}" method="POST">
                    @csrf
                    
                    <textarea name="subject" id="subject" cols="30" rows="10">{{$post->subject}}</textarea>
                    <button type="submit">Update</button>
                    </form>
                    @else
                        <form action="{{ url('/post') }}" method="POST">
                        @csrf
                        {!! Form::hidden('user_id', Auth::user()->id) !!}
                        <textarea name="subject" id="subject" cols="30" rows="10"></textarea>
                        <button type="submit">post</button>
                        </form>
                    @endif
                   
                </div>
            </div>
        </div>
    </div>
</x-app-layout>