<h1>Task # {id}</h1>
<form role="form" action="/mtce/submit" method="post">
    {ftask}
    {fpriority}
    {zsubmit}

    <a href="/mtce/cancel"><input type="button" value="Cancel the current edit"/></a>
    <a href="/mtce/delete"><input type="button" value="Delete this todo item"/></a>

</form>
