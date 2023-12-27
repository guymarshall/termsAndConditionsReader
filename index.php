<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>URL Input and Textarea</title>
    <!-- Bootstrap CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* Adjusting height for textarea */
        .custom-textarea {
            height: 200px;
            resize: none; /* Prevent resizing */
        }
        /* Centered 'OR' text */
        .center-text {
            text-align: center;
            margin-bottom: 20px;
        }
    </style>
</head>
<body>
<div class="container mt-5">
    <form>
        <div class="row">
            <div class="col-md-5">
                <!-- URL Input -->
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text">URL</span>
                    </div>
                    <input type="text" class="form-control" id="urlInput" placeholder="Enter URL" aria-label="URL input">
                </div>
            </div>
			<div class="col-md-2">
				<p class="center-text">OR</p>
			</div>
            <div class="col-md-5">
                <!-- Textarea -->
                <div class="form-group">
                    <label for="exampleTextarea">Textarea</label>
                    <textarea class="form-control custom-textarea" id="exampleTextarea" rows="5"></textarea>
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

<!-- Bootstrap JS and dependencies -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<!-- Your custom JavaScript -->
<script>
    // Add JavaScript logic here if needed
    document.querySelector('form').addEventListener('submit', function(event) {
        event.preventDefault(); // Prevent the form from submitting (for demonstration purposes)
        const url = document.getElementById('urlInput').value;
        const text = document.getElementById('exampleTextarea').value;
        // Do something with the URL and text data (e.g., send it to a server, process it, etc.)
        console.log('URL:', url);
        console.log('Text:', text);
        // Additional logic can be added here to handle the form submission
    });
</script>
</body>
</html>
