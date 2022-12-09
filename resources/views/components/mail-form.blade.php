<div id="snap" class="h-screen bg-[#020d20] flex justify-center items-center flex-col"">
    <h2 class="p-5">
        <span class="text-[#ffffff] text-4xl font-bold">Contact Us</span>
    </h2>
    <span>If you want your bounty on our page contact us now</span>
    <div class="mt-4 bg-[#091833] p-3 shadow-2xl border-b-2 border-[#EA00D9]">
        <form action="{{ route('send.email') }}" method="POST" autocomplete="off">
            @csrf
            <div class="flex flex-row flex-wrap justify-center">
                <div class="flex flex-col p-4">
                    <div class="flex justify-center flex-col space-y-6">
                        <div class="flex flex-col">
                            <input type="text" name="name" id="name" placeholder="Name"
                                class="border-2 border-[#0ABDC6] bg-transparent p-4 rounded-lg">
                        </div>
                        <div class="flex flex-col">
                            <input type="text" name="company" id="company" placeholder="Company"
                                class="border-2 border-[#0ABDC6] bg-transparent p-4 rounded-lg">
                        </div>
                        <div class="flex flex-col">
                            <input type="email" name="email" id="email" placeholder="Email"
                                class="border-2 border-[#0ABDC6] bg-transparent p-4 rounded-lg">
                        </div>
                        <div class="flex flex-col">
                            <input type="text" name="price" id="price" placeholder="price"
                                class="border-2 border-[#0ABDC6] bg-transparent p-4 rounded-lg">
                        </div>
                    </div>
                </div>
                <div class="p-4">
                    <div class="flex flex-col mt-0">
                        <textarea name="message" id="message" cols="20" rows="8" placeholder="Email Message"
                            class="border-2 border-[#0ABDC6] bg-transparent p-4 rounded-lg resize-none"></textarea>
                    </div>
                    <div class="flex flex-col">
                        <button type="submit"
                            class="bg-[#0ABDC6] text-white font-bold p-4 mt-7 rounded-lg hover:bg-[#0ABDC6] hover:shadow-2xl">Send
                            Message</button>
                    </div>
                </div>
        </form>
    </div>
</div>
