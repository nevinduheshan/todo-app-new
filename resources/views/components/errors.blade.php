
@if ($errors->any())
<ul>
    @foreach ($errors->all() as $error)
        <div class="text-red-600 pb-3"> {{ $error }}</div>
    @endforeach
</ul>
@endif
