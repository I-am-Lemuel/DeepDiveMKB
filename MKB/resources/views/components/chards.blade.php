<div class="flex justify-evenly flex-wrap bg-gradient-to-r from-[#383677] to-[#091833] min-h-full w-full">
    @for ($i = 0; $i < 20; $i++)
        <div class="flex justify-center m-2">
            <div class="rounded-lg shadow-lg bg-[#0abdc6] max-w-sm">
                <a href="#!">
                    <img class="rounded-t-lg" src="https://mdbootstrap.com/img/new/standard/nature/184.jpg"
                        alt="" />
                </a>
                <div class="p-6">
                    <h5 class="text-[#ffffff] text-xl font-medium mb-2">Card title</h5>
                    <p class="text-[#ffffff] text-base mb-4">
                        Some quick example text to build on the card title and make up the bulk of the card's
                        content.
                    </p>
                    <button type="button"
                        class=" inline-block px-6 py-2.5 bg-[#EA00D9] text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out">Button</button>
                </div>
            </div>
        </div>
    @endfor
</div>
