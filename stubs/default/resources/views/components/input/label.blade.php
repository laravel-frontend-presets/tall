@props(['for'])
<label for="{{$for}}" {{$attributes->merge(['class'=>'font-medium text-gray-700 text-sm leading-5'])}}>
{{$slot}}
</label>
