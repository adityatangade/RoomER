<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Responsive Profile Page</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f0f0f0;
        }

        .profile-container {
            max-width: 600px;
            margin: 20px auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .profile-image {
            width: 100%;
            max-width: 200px;
            border-radius: 50%;
            margin: 0 auto 20px;
            display: block;
        }

        .profile-info {
            text-align: center;
        }

        .tag-name,
        .username,
        .occupation {
            margin-bottom: 10px;
        }

        @media (min-width: 768px) {
            .profile-container {
                max-width: 800px;
            }
        }
    </style>
</head>

<body>
    <div class="profile-container">
        <img class="profile-image" src="profile-image.jpg" alt="Profile Image">
        <div class="profile-info">
            <h2 class="tag-name">Tag Name</h2>
            <p class="username">Username</p>
            <p class="occupation">Occupation</p>
        </div>
    </div>

    <script>
        // You can add JavaScript functionality here if needed
    </script>
</body>

</html>
