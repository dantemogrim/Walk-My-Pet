@if ($errors->any())
<p class="bg-pink-100 p-3 rounded-md shadow-md w-1/2 ml-6">
    <u class="text-xl m-3 p-3 ml-6 text-pink-500">{{ $errors->first() }}</u>
</p>
@endif
