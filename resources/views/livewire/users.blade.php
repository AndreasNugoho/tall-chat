<div class="max-w-6xl mx-auto my-16">

    <h5 class="py-3 text-5xl font-bold text-center">Users</h5>



    <div class="grid gap-3 p-2 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 ">

        @foreach ($users as $key => $user)
            {{-- child --}}
            <div class="w-full p-5 bg-white border border-gray-200 rounded-lg shadow">
                {{-- <br> --}}
                <div class="flex flex-col items-center pb-3">

                    <img src="https://source.unsplash.com/200x200?face-{{ $key }}" alt="image"
                        class="w-24 h-24 mb-2 rounded-full shadow-lg 5">

                    <h5 class="mb-1 text-xl font-medium text-gray-900 ">
                        {{ $user->name }}
                    </h5>
                    <span class="text-sm text-gray-500">{{ $user->email }} </span>

                    <div class="flex mt-5 space-x-3 md:mt-6">

                        <x-secondary-button>
                            Add Friend
                        </x-secondary-button>

                        <x-primary-button wire:click="message({{ $user->id }})">
                            Message
                        </x-primary-button>

                    </div>

                </div>
                {{-- <br> --}}


            </div>
        @endforeach
    </div>




</div>
