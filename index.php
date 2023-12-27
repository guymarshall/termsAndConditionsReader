<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>URL Input and Textarea</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
<div class="container mt-5">
    <form>
        <div class="row">
            <div class="col-md-5">
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text">URL</span>
                    </div>
                    <input type="text" class="form-control" id="urlInput" placeholder="Enter URL" aria-label="URL input">
                </div>
            </div>
			<div class="col-md-2">
				<p style="text-align: center; margin-bottom: 20px;">OR</p>
			</div>
            <div class="col-md-5">
                <div class="form-group">
                    <label for="exampleTextarea">Textarea</label>
                    <textarea class="form-control" style="height: 200px; resize: none;" id="exampleTextarea" rows="5"></textarea>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
    </form>
</div>
<script>
    document.querySelector('form').addEventListener('submit', (event) => {
        event.preventDefault();
        const url = document.getElementById('urlInput').value;
        const text = document.getElementById('exampleTextarea').value;
        console.log('URL:', url);
        console.log('Text:', text);
    });
</script>
</body>
</html>
