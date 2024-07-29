<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Top Performers</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f8f9fa;
            padding: 20px;
        }
        .container {
            max-width: 600px;
            margin: auto;
            background-color: #ffffff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
        }
        h2 {
            text-align: center;
            color: #007BFF;
            margin-bottom: 20px;
        }
        .form-group img {
            display: none;
            margin-top: 10px;
            max-width: 100px; /* Adjusted size */
            height: auto;
            border-radius: 5px;
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
        }
        .btn {
            display: block;
            width: 100%;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Top Performers in Sports Events</h2>
        <form>
            <div class="form-group">
                <label for="photo">Upload Photo:</label>
                <input type="file" id="photo" class="form-control-file" required>
                <img id="preview" class="preview-image" src="#" alt="Preview">
            </div>
            <div class="form-group">
                <label for="sport">Sports Name:</label>
                <input type="text" id="sport" class="form-control" placeholder="Enter sports name" required>
            </div>
            <div class="form-group">
                <label for="description">Description:</label>
                <textarea id="description" class="form-control" rows="4" placeholder="Enter description" required></textarea>
            </div>
            <button type="button" onclick="saveData()" class="btn btn-primary">Save</button>
        </form>
    </div>

    <script>
        function previewImage(event) {
            var reader = new FileReader();
            reader.onload = function(){
                var preview = document.getElementById('preview');
                preview.style.display = 'block';
                preview.src = reader.result;
            };
            reader.readAsDataURL(event.target.files[0]);
        }

        function saveData() {
            var sportName = document.getElementById('sport').value;
            var description = document.getElementById('description').value;
            var previewImageSrc = document.getElementById('preview').src;

            if (!sportName || !description || previewImageSrc === "#") {
                alert('Please fill in all fields and upload an image.');
                return;
            }

            // Create an object to hold the performer data
            var performer = {
                title: sportName,
                description: description,
                image: previewImageSrc
            };

            // Get existing performers or initialize an empty array
            var performers = JSON.parse(localStorage.getItem('topPerformers')) || [];

            // Add the new performer to the array
            performers.push(performer);

            // Save updated performers array back to localStorage
            localStorage.setItem('topPerformers', JSON.stringify(performers));

            // Clear input fields and preview after saving
            document.getElementById('sport').value = '';
            document.getElementById('description').value = '';
            document.getElementById('preview').style.display = 'none';
            document.getElementById('photo').value = '';

            alert('Data saved successfully!');

            // Redirect to the topperformer_delete.php page
            window.location.href = 'topperformer_delete.php';
        }

        document.getElementById('photo').addEventListener('change', previewImage);
    </script>

    <!-- Bootstrap JS and dependencies -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
