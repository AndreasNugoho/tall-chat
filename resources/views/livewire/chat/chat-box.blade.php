<div class="w-full overflow-hidden">
    <div class="flex flex-col h-full overflow-y-scroll order-r dark:border-gray-700 grow">

        {{-- header --}}

        <header
            class="w-full  sticky inset-x-0 flex pb-[5px] pt-[5px] top-0 z-10 bg-white dark:bg-gray-800  border-b dark:border-gray-600">

            <div class="flex items-center w-full gap-2 px-2 lg:px-4 md:gap-5 ">

                <a href="#" class=" shrink-0 lg:hidden dark:text-white" id="chatReturn">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5L8.25 12l7.5-7.5" />
                    </svg>
                </a>

                {{-- avatar --}}

                <div class="shrink-0">
                    <x-avatar class="h-9 w-9 lg:w-11 lg:h-11 " />
                </div>

                <h6 class="font-bold truncate"> {{ fake()->name() }} </h6>

            </div>

        </header>

        {{-- body --}}

        <main
            class="flex flex-col   gap-3   p-2.5  overflow-y-auto flex-grow  overscroll-contain overflow-x-hidden w-full my-auto ">

            <div @class(['max-w-[85%] md:max-w-[78%] flex w-auto gap-2 relative mt-2'])>

                {{-- avatar --}}

                <div @class(['shrink-0'])>
                    <x-avatar src="https://source.unsplash.com/1600x900/?face" />
                </div>

                {{-- message body --}}

                <div @class([
                    'flex  flex-wrap text-[15px] rounded-xl p-2.5 flex flex-col text-black bg-[#f6f6f8fb]',
                    'rounded-bl-none rounded-bl-none border dark:border-gray-700/60 dark:text-gray-200  border-gray-200/40 dark:bg-gray-700/80 ' => false, // Message Does not Belong to auth
                    'rounded-br-none bg-blue-500/80 dark:bg-blue-700/50 text-white' => true, //Message belongs to auth
                ])>

                    <p class="text-sm tracking-wide truncate whitespace-normal md:text-base lg:tracking-normal"> Lorem
                        ipsum dolor sit amet consectetur adipisicing elit. Dolore quam asperiores rerum ab alias,
                        doloribus pariatur exercitationem facilis voluptatum quis atque laudantium quae iusto
                        voluptatibus rem explicabo maiores excepturi aut! exercitationem facilis voluptatum quis atque
                        laudantium quae iusto voluptatibus rem explicabo maiores excepturi aut! exercitationem facilis
                        voluptatum quis atque laudantium quae iusto voluptatibus rem explicabo maiores excepturi aut!
                    </p>

                    <div class="flex gap-2 ml-auto">
                        <p @class([
                            'direct_chat_timestamp  text-xs ',
                            'text-gray-500 ' => false, // Message Does not Belong to auth
                            'text-white' => true, //Message belongs to auth
                        ])> 5:25 am</p>

                        <div class="status">

                            {{-- centang dua --}}
                            <span @class(['text-gray-500  double_tick '])>
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                    fill="currentColor" class="bi bi-check2-all" viewBox="0 0 16 16">
                                    <path
                                        d="M12.354 4.354a.5.5 0 0 0-.708-.708L5 10.293 1.854 7.146a.5.5 0 1 0-.708.708l3.5 3.5a.5.5 0 0 0 .708 0l7-7zm-4.208 7-.896-.897.707-.707.543.543 6.646-6.647a.5.5 0 0 1 .708.708l-7 7a.5.5 0 0 1-.708 0z" />
                                    <path d="m5.354 7.146.896.897-.707.707-.897-.896a.5.5 0 1 1 .708-.708z" />
                                </svg>
                            </span>

                            {{-- centang satu --}}

                            {{-- <span @class('text-white-500')>
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-check2" viewBox="0 0 16 16">
                                <path
                                    d="M13.854 3.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L6.5 10.293l6.646-6.647a.5.5 0 0 1 .708 0z" />
                            </svg>
                        </span> --}}



                        </div>
                    </div>

                </div>

            </div>

        </main>

        {{-- footer --}}

        <footer class="inset-x-0 z-10 bg-white shrink-0 dark:bg-inherit">
            <div class="p-2 border-t dark:border-gray-600">
                <form method="POST" autocapitalize="off">
                    @csrf
                    <input type="hidden" autocomplete="false" style="display: none">
                    <div class="grid grid-cols-12">
                        <input autocomplete="off" wire:model.defer='body' id="sendMessage" autofocus type="text"
                            name="message" placeholder="Write your message here ..." maxlength="1700"
                            class="col-span-10 bg-gray-100 border-0 rounded-lg dark:bg-gray-900 outline-0 focus:border-0 focus:ring-0 hover:ring-0 dark:text-gray-300 focus:outline-none " />

                        <button type="submit" class="col-span-2 rounded">Send</button>

                    </div>
                </form>
                @error('body')
                    <p> {{ $message }} </p>
                @enderror
            </div>
        </footer>

    </div>
</div>