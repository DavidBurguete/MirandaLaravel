<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Activity</title>
</head>

<body>
    <h1>Edit Activity</h1>

    <form method="POST" action="{{ route('activities.update', $activity->id) }}">
        @csrf
        @method('PUT')

        <label>Type:</label>
        <br>
        <select name="type">
            <option value="surf" {{ $activity->type == 'surf' ? 'selected' : '' }}>Surf</option>
            <option value="windsurf" {{ $activity->type == 'windsurf' ? 'selected' : '' }}>Windsurf</option>
            <option value="kayak" {{ $activity->type == 'kayak' ? 'selected' : '' }}>Kayak</option>
            <option value="atv" {{ $activity->type == 'atv' ? 'selected' : '' }}>ATV</option>
            <option value="hot air balloon" {{ $activity->type == 'hot air balloon' ? 'selected' : '' }}>Hot Air Balloon</option>
        </select>
        <br><br>

        <label for="date">Date:</label>
        <br>
        <input type="date" name="date" value="{{ $activity->date->format('Y-m-d') }}" required>
        <br><br>

        <label for="notes">Notes:</label>
        <br>
        <textarea name="notes" required>{{ $activity->notes }}</textarea>
        <br><br>

        Please, rate the activity (0, no satisfaction - 10, very satisfied)
        <br>
        <input type="number" name="satisfaction" min="0" max="10" value="{{ $activity->satisfaction }}">
        <br><br>

        <input type="hidden" name="user_id" value="{{ $activity->user_id }}">
        <input type="hidden" name="paid" value="0">
        Has been paid? <input type="checkbox" name="paid" value="1" {{ $activity->paid ? 'checked' : '' }}>
        <br><br>

        <button type="submit">Update</button>
    </form>

</body>

</html>
