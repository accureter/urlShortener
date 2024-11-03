<div class="flex justify-center flex-wrap flex-col h-screen">
    <div class="w-full">
        <h1 class="text-center font-bold text-6xl text-indigo-700">Shorten your URL!</h1>
    </div>
    <div class="w-full text-center flex justify-center my-3">
        <div role="alert" class="alert md:w-1/4 text-white alert-success">
            <span>Your current visits on {{ $url->getShortenUrl() }} is {{ $visits }}</span>
        </div>
    </div>
</div>
