<div x-data="{ type: 'all' }" class="flex flex-col h-full overflow-hidden transition-all">
    <header class="sticky top-0 z-10 w-full px-3 py-2 bg-white">
        <div class="flex items-center justify-between pb-2 border-b">
            <div class="items-center gap-2 file">
                <h5 class="font-extrabold text-2x1">Chats </h5>
            </div>

            <button>
                <svg class="w-7 h-7" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                    viewBox="0 0 16 16">
                    <path
                        d="M6 10.5a.5.5 0 0 1 .5-.5h3a.5.5 0 0 1 0 1h-3a.5.5 0 0 1-.5-.5zm-2-3a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5zm-2-3a.5.5 0 0 1 .5-.5h11a.5.5 0 0 1 0 1h-11a.5.5 0 0 1-.5-.5z" />
                </svg>
            </button>
        </div>

        <div class="flex items-center gap-3 p-2 overflow-x-scroll bg-white">
            <button @click="type='all'" :class="{ 'bg-blue-100 border-0 text-black': type == 'all' }"
                class="inline-flex justify-center items-center rounded-full gap-x-1 text-xs font-medium px-3 lg:px-5 py-1  lg:py-2.5 border ">
                All
            </button>
            <button @click="type='deleted'" :class="{ 'bg-blue-100 border-0 text-black': type == 'deleted' }"
                class="inline-flex justify-center items-center rounded-full gap-x-1 text-xs font-medium px-3 lg:px-5 py-1  lg:py-2.5 border ">
                Deleted
            </button>

        </div>

    </header>

    <main>

    </main>
</div>
