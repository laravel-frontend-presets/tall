@props(['error'])
<div class="mt-1 rounded-md shadow-sm">
    <input {{$attributes->merge(['type'=>'text','class'=>'appearance-none block w-full px-3 py-2 border border-gray-300 rounded-md placeholder-gray-400 focus:outline-none focus:ring-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5'.($error?' border-red-300 text-red-900 placeholder-red-300 focus:border-red-300 focus:ring-red':'')])}} />
</div>
@if($error)
    <p class="mt-2 text-sm text-red-600">{{ $error }}</p>
@endif
