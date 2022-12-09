<div id="snap" class="h-screen bg-[#091833] flex justify-center items-center flex-col">
    <h2 class="p-11">
        <span class="text-[#ffffff] text-4xl font-bold">Bounty's</span>
    </h2>

    <div class="grid grid-cols-1 gap-3 md:grid-cols-2 lg:grid-cols-3 bg-[#091833] overflow-auto  p-4 container">
        @for ($i = 0; $i < 6; $i++)
            <div class="z-10 hover:brightness-110 relative h-96 w-full card rounded-md border-b-2 border-[#EA00D9] hover:border-[#0ABDC6]">
                <div class="background w-full h-full z-0 absolute ">
                    <img src="https://mdbootstrap.com/img/new/standard/nature/184.jpg" alt=""
                        class="w-full h-full ">
                </div>
                <div class="first z-0 absolute h-full w-full justify-between ">
                    <p class="place-self-start">something</p>
                    <h2 class="place-self-center font-bold text-3xl md:text-4xl lg:text-5xl">title</h2>
                    <p class="place-self-end">something</p>
                    <p class="flex-grow overflow-hidden">Lorem ipsum dolor sit amet
                        consectetur adipisicing elit. Molestiae recusandae et, esse est voluptas alias dolores
                        consequuntur facilis nihil, ad optio non consequatur architecto tempora qui corporis molestias
                        numquam amet!</p>
                </div>
            </div>
        @endfor
    </div>
</div>
{{-- <script>
    document.querySelectorAll(".card").forEach(function(element) {

        element.addEventListener('mouseover', changeDefOver);
        element.addEventListener('mouseout', changeDefOut);

        function changeDefOver(e) {
            e.target.querySelector('.background').target.classList.add('blur-md');
            e.target.querySelector('.first').classList.add('hidden');
            e.target.querySelector('.second').classList.remove('hidden');

        }

        function changeDefOut(e) {
            e.target.querySelector('.background').classList.remove('blur-md');
            e.target.querySelector('.first').classList.remove('hidden');
            e.target.querySelector('.second').classList.add('hidden');
        }

        function changeBackgroundOver(e) {

        }

        function changeFirstOver(e) {

        }

        function changeSecondOver(e) {

        }

        function changeBackgroundOut(e) {

        }

        function changeFirstOut(e) {

        }

        function changeSecondOut(e) {

        }
    });
</script>
