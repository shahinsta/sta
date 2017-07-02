<form action="post_to_me" method="post">
    <input type="text" name="name" placeholder="Enter your Name" />
    <input type="hidden" name="_token" value="{{ csrf_token()}}" />
    <input type="submit"name="submit" />
</form>

