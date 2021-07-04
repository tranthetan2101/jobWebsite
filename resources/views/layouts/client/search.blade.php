<form action="{{url('/search')}}" method="GET" class="search-bar">
    @csrf
    <input type="search" name="searchInput" pattern=".*\S.*" required class="searchInput">
    <button type="submit" class="search-btn"></button>
</form>