<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create activity</title>
</head>

<body>
    <h1>New Activity</h1>
    <form method="POST" action="{{ route('activities.store') }}">
        @csrf
        <label>Type:</label>
        <br>
        <select name="type">
            <option value="surf">Surf</option>
            <option value="windsurf">Windsurf</option>
            <option value="kayak">Kayak</option>
            <option value="atv">ATV</option>
            <option value="hot air balloon">Hot Air Balloon</option>
        </select>
        <br>
        <br>
        <label for="date">Date:</label>
        <br>
        <input type="date" name="date" required>
        <br>
        <br>
        <label for="notes">Notes:</label>
        <br>
        <textarea name="notes" required></textarea>
        <br>
        <br>
        Please, rate the activity (0, no satisfaction - 10, very satisfied)
        <br>
        <input type="number" name="satisfaction" min="0" max="10">
        <br>
        <br>
        <input type="hidden" name="user_id" value="1">
        Has been paid? <input type="checkbox" name="paid" value="1">
        <br>
        <br>
        <button type="submit">Save</button>
    </form>

</body>

</html>