<section class="container mx-auto pt-5 justify-center z-0 w-full top-12">
    <div class="mx-auto w-full">
        <h1 class="mx-auto text-3xl py-4 border-b mb-5 bg-pink-50 rounded-lg text-center w-auto font-semibold">TIK</h1>


        <div class="flex flex-wrap bg-pink-50 rounded-lg shadow relative w-full px-3 py-3">
            @foreach ($pakets as $paket)
            {{-- <button wire:click="modal({{$paket->id}})"
                class="flex text-whitefocus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm p-3 px-3 py-3 text-center h-96 w-auto"
                type="button" data-modal-toggle="default-modal"> --}}
                <a href="{{route('paket-detail',$paket->id)}}" class="elipsis">
                <div
                    class="flex flex-wrap shadow rounded mr-2 ml-2 mb-2 hover:scale-110 transition duration-300 ease-in-out">
                    <div class="w-full p-1 md:p-2">
                        <img alt="paket" class="block object-cover object-center rounded-lg " style="height: 200px"
                            {{-- src="{{ asset('storage/' . $paket->paket) }}"> --}} src="{{ asset('storage/'.$paket->gambar) }}">
                    </div>

                </div>
                </a>
                <script src="https://unpkg.com/flowbite@1.4.4/dist/flowbite.js"></script>
            {{-- </button> --}}
            @endforeach
        </div>
    </div>
</section>