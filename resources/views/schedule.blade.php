@extends('app')

@section('content')
<section class="text-gray-600 body-font">
  <div class="container px-5 py-24 mx-auto">
    <div class="flex flex-col text-center w-full mb-20">
      <h1 class="sm:text-4xl text-3xl font-medium title-font mb-2 text-gray-900">Schedule</h1>
      <p class="lg:w-2/3 mx-auto leading-relaxed text-base">Pick the best time to drive</p>
    </div>
    <div class="flex pl-4 mt-4 lg:w-2/3 w-full mx-auto">
      <a class="text-gray-900 inline-flex items-center md:mb-2 lg:mb-0"> Moday - Friday
          <path d="M5 12h14M12 5l7 7-7 7"></path>
        </svg>
      </a>
    </div>
    <div class="lg:w-2/3 w-full mx-auto overflow-auto">
      <table class="table-auto w-full text-left whitespace-no-wrap">
        <thead>
          <tr>
            <th class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100 rounded-tl rounded-bl">Time of Day</th>
            <th class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100">Time</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td class="px-4 py-3">Morning</td>
            <td class="px-4 py-3">9:00 AM - 12:00 PM</td>
            </td>
          </tr>
          <tr>
            <td class="border-t-2 border-gray-200 px-4 py-3">Afternoon</td>
            <td class="border-t-2 border-gray-200 px-4 py-3">1:00 PM - 4:00 PM</td>
            </td>
          </tr>
          <tr>
            <td class="border-t-2 border-gray-200 px-4 py-3">Evening</td>
            <td class="border-t-2 border-gray-200 px-4 py-3">5:00 PM - 8:00 PM</td>
            </td> 
        </tbody>
      </table>
    </div>
    <div class="flex pl-4 mt-4 lg:w-2/3 w-full mx-auto">
      <a class="text-gray-900 inline-flex items-center md:mb-2 lg:mb-0"> Saturday - Sunday
          <path d="M5 12h14M12 5l7 7-7 7"></path>
        </svg>
      </a>
    </div>
    <div class="lg:w-2/3 w-full mx-auto overflow-auto">
      <table class="table-auto w-full text-left whitespace-no-wrap">
        <thead>
          <tr>
            <th class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100 rounded-tl rounded-bl">Time of day</th>
            <th class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100">Time</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td class="px-4 py-3">Morning</td>
            <td class="px-4 py-3"> 9:00 AM - 12:00 PM</td>
            </td>
          </tr>
          <tr>
            <td class="border-t-2 border-gray-200 px-4 py-3">Afternoon</td>
            <td class="border-t-2 border-gray-200 px-4 py-3">1:00 PM - 4:00 PM</td>
            </td>
          </tr>
        </tbody>
      </table>
    </div>
</section>
@endsection