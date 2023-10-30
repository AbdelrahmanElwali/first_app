<form action="{{ route('example.store') }}" method="post">
    @csrf
    <input type="text" placeholder="Name" name="name" />
    <br><hr>
    <textarea name="content" placeholder="content"></textarea>
    <input type="text" placeholder="Name" name="amount" value="0.00"/>
    <input type="submit" value="Create" />
</form>
