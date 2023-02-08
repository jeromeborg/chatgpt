<!DOCTYPE html>
<html>
<head>
    <title>Writebot</title>
</head>
<body>
    <form method="POST" action="/writebot">
        @csrf
        <label for="prompt">Prompt:</label><br>
        <textarea name="prompt" rows="4" cols="50"></textarea><br>
        <input type="submit" value="Submit">
    </form> 
    <br>
    <div id="response">
        <code>
        @isset($response)
            {!! nl2br($response) !!}
        @endisset
        </code>
    </div>
</body>
</html>