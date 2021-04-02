<form action="{{ route('insertNews') }}" method="post">
    @csrf
    <input type="submit" value="submit">
</form>