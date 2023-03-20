@extends('app')

@section('content')
<section class="text-gray-600 body-font">
  <div class="container px-5 py-24 mx-auto">
    <div class="flex flex-col text-center w-full mb-20">
      <h1 class="sm:text-4xl text-3xl font-medium title-font mb-2 text-gray-900">Course Pricing</h1>
      <p class="lg:w-2/3 mx-auto leading-relaxed text-base">Get the best for your buck</p>
    </div>
    <div class="lg:w-2/3 w-full mx-auto overflow-auto">
      <table class="table-auto w-full text-left whitespace-no-wrap">
        <thead>
          <tr>
            <th class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100 rounded-tl rounded-bl">Course</th>
            <th class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100">Amount of Couses</th>
            <th class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100">Features</th>
            <th class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100">Price</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td class="px-4 py-3">Beginner</td>
            <td class="px-4 py-3">4/Month</td>
            <td class="px-4 py-3">nothing</td>
            <td class="px-4 py-3 text-lg text-gray-900">$50</td>
            </td>
          </tr>
          <tr>
            <td class="border-t-2 border-gray-200 px-4 py-3">Intermediate</td>
            <td class="border-t-2 border-gray-200 px-4 py-3">6/Month</td>
            <td class="border-t-2 border-gray-200 px-4 py-3">Trainer of choice*</td>
            <td class="border-t-2 border-gray-200 px-4 py-3 text-lg text-gray-900">$60</td>
            </td>
          </tr>
          <tr>
            <td class="border-t-2 border-gray-200 px-4 py-3">Pro</td>
            <td class="border-t-2 border-gray-200 px-4 py-3">10/Month</td>
            <td class="border-t-2 border-gray-200 px-4 py-3">Trainer of choice* and Car of choice*</td>
            <td class="border-t-2 border-gray-200 px-4 py-3 text-lg text-gray-900">$100</td>
            </td>
          </tr>
          <tr>
            <td class="border-t-2 border-b-2 border-gray-200 px-4 py-3">Exclusive</td>
            <td class="border-t-2 border-b-2 border-gray-200 px-4 py-3">Any day you want**</td>
            <td class="border-t-2 border-b-2 border-gray-200 px-4 py-3">Trainer of choice* and Car of choice*</td>
            <td class="border-t-2 border-b-2 border-gray-200 px-4 py-3 text-lg text-gray-900">$200</td>
            </td>
          </tr>
        </tbody>
      </table>
    </div>
    <div class="flex pl-4 mt-4 lg:w-2/3 w-full mx-auto">
      <a class="text-gray-900 inline-flex items-center md:mb-2 lg:mb-0"> *When available **Except holidays
          <path d="M5 12h14M12 5l7 7-7 7"></path>
        </svg>
      </a>
    </div>
  </div>
</section>
@endsection