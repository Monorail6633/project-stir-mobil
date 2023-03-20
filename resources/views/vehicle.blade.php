@extends('app')

@section('content')
<section class="text-gray-600 body-font">
  <div class="container px-5 py-24 mx-auto">
    <div class="flex flex-col text-center w-full mb-20">
      <h1 class="sm:text-3xl text-2xl font-medium title-font mb-4 text-gray-900">Cars!</h1>
      <p class="lg:w-2/3 mx-auto leading-relaxed text-base">Pick the car that suit your needs or whichever you want to drive over the course.</p>
    </div>
    <div class="flex flex-wrap -m-4">
      <div class="lg:w-1/3 sm:w-1/2 p-4">
        <div class="flex relative">
          <img alt="gallery" class="absolute inset-0 w-full h-full object-cover object-center" src="https://i.imgur.com/gE2FLeR.png">
          <div class="px-8 py-10 relative z-10 w-full border-4 border-gray-200 bg-white opacity-0 hover:opacity-100">
            <h2 class="tracking-widest text-sm title-font font-medium text-black-500 mb-1">Mazda6</h2>
            <h1 class="title-font text-lg font-medium text-gray-900 mb-3">automatic or manual</h1>
          </div>
        </div>
      </div>
      <div class="lg:w-1/3 sm:w-1/2 p-4">
        <div class="flex relative">
          <img alt="gallery" class="absolute inset-0 w-full h-full object-cover object-center" src="https://i.imgur.com/R2YMYvp.png">
          <div class="px-8 py-10 relative z-10 w-full border-4 border-gray-200 bg-white opacity-0 hover:opacity-100">
            <h2 class="tracking-widest text-sm title-font font-medium text-black-500 mb-1">Toyota RAV4</h2>
            <h1 class="title-font text-lg font-medium text-gray-900 mb-3">automatic</h1>
          </div>
        </div>
      </div>
      <div class="lg:w-1/3 sm:w-1/2 p-4">
        <div class="flex relative">
          <img alt="gallery" class="absolute inset-0 w-full h-full object-cover object-center" src="https://i.imgur.com/pTOWQOz.png">
          <div class="px-8 py-10 relative z-10 w-full border-4 border-gray-200 bg-white opacity-0 hover:opacity-100">
            <h2 class="tracking-widest text-sm title-font font-medium text-black-500 mb-1">Hyundai Sonata</h2>
            <h1 class="title-font text-lg font-medium text-gray-900 mb-3">automatic or manual</h1>
          </div>
        </div>
      </div>
      <div class="lg:w-1/3 sm:w-1/2 p-4">
        <div class="flex relative">
          <img alt="gallery" class="absolute inset-0 w-full h-full object-cover object-center" src="https://i.imgur.com/6YjlpxT.png">
          <div class="px-8 py-10 relative z-10 w-full border-4 border-gray-200 bg-white opacity-0 hover:opacity-100">
            <h2 class="tracking-widest text-sm title-font font-medium text-black-500 mb-1">Honda Civic</h2>
            <h1 class="title-font text-lg font-medium text-gray-900 mb-3">automatic or manual</h1>
          </div>
        </div>
      </div>
      <div class="lg:w-1/3 sm:w-1/2 p-4">
        <div class="flex relative">
          <img alt="gallery" class="absolute inset-0 w-full h-full object-cover object-center" src="https://i.imgur.com/DZEQbOH.png">
          <div class="px-8 py-10 relative z-10 w-full border-4 border-gray-200 bg-white opacity-0 hover:opacity-100">
            <h2 class="tracking-widest text-sm title-font font-medium text-black-500 mb-1">Kia Sorento</h2>
            <h1 class="title-font text-lg font-medium text-gray-900 mb-3">automatic</h1>
          </div>
        </div>
      </div>
      <div class="lg:w-1/3 sm:w-1/2 p-4">
        <div class="flex relative">
          <img alt="gallery" class="absolute inset-0 w-full h-full object-cover object-center" src="https://i.imgur.com/H2v553F.png">
          <div class="px-8 py-10 relative z-10 w-full border-4 border-gray-200 bg-white opacity-0 hover:opacity-100">
            <h2 class="tracking-widest text-sm title-font font-medium text-black-500 mb-1">Nissan Altima</h2>
            <h1 class="title-font text-lg font-medium text-gray-900 mb-3">automatic or manual</h1>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
@endsection
