<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Housing Card</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 0;
      background-color: #f0f0f0;
    }

    .card {
      display: flex;
      max-width: 600px;
      margin: 20px auto;
      background-color: #fff;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
      border-radius: 8px;
      overflow: hidden;
    }

    .card img {
      width: 40%;
      object-fit: cover;
      border-radius: 8px 0 0 8px;
    }

    .card-content {
      padding: 20px;
    }

    .title {
      font-size: 1.2em;
      font-weight: bold;
      margin-bottom: 10px;
    }

    .description {
      font-size: 0.9em;
      color: #666;
      margin-bottom: 15px;
    }

    .price {
      font-size: 1.2em;
      color: #3498db;
      font-weight: bold;
    }
    
  </style>
</head>
<body>

  <div class="card">
    <img src="Images/room_2.jpg" alt="Property Image">
    <div class="card-content">
      <div class="title">Beautiful Home for Sale</div>
      <div class="description">
        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla commodo elit eu augue tristique, vel fermentum nisl fermentum.
      </div>
      <div class="price">$500,000 </div>
      <button class="more_det_btn">More Details</button>
      <!-- Add more information or features as needed -->
    </div>
  </div>
  <div class="card">
    <img src="Images/boyz_room2.jpg" alt="Property Image">
    <div class="card-content">
      <div class="title">Beautiful Home for Sale</div>
      <div class="description">
        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla commodo elit eu augue tristique, vel fermentum nisl fermentum.
      </div>
      <div class="price">$500,000</div>
      <!-- Add more information or features as needed -->
    </div>
  </div>
  <div class="card">
    <img src="Images/room_2.jpg" alt="Property Image">
    <div class="card-content">
      <div class="title">Beautiful Home for Sale</div>
      <div class="description">
        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla commodo elit eu augue tristique, vel fermentum nisl fermentum.
      </div>
      <div class="price">$500,000</div>
      <!-- Add more information or features as needed -->
    </div>
  </div>
  <div class="card">
    <img src="Images/boyz_room2.jpg" alt="Property Image">
    <div class="card-content">
      <div class="title">Beautiful Home for Sale</div>
      <div class="description">
        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla commodo elit eu augue tristique, vel fermentum nisl fermentum.
      </div>
      <div class="price">$500,000</div>
      <!-- Add more information or features as needed -->
    </div>
  </div>

</body>
</html>
