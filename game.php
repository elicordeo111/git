<!DOCTYPE html>
<html>
<head>
  <title>A Simple Mini Game</title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>
<body>
  <div id="game">
    <div id="ball"></div>
    <div id="paddle"></div>
  </div>
  <script>
    // Create the ball and paddle elements.
    var ball = document.getElementById("ball");
    var paddle = document.getElementById("paddle");

    // Set the initial position of the ball and paddle.
    ball.style.left = "50px";
    ball.style.top = "50px";
    paddle.style.left = "200px";
    paddle.style.top = "200px";

    // Create a function to move the ball.
    function moveBall() {
      // Move the ball to the left or right.
      ball.style.left = ball.style.left + 5 + "px";

      // If the ball hits the left or right edge of the screen, reverse its direction.
      if (ball.style.left < 0 || ball.style.left > window.innerWidth) {
        ball.style.left = ball.style.left - 5 + "px"; 
      }
    }

    // Create a function to move the paddle.
    function movePaddle(event) {
      // Get the x-coordinate of the mouse cursor.
      var mouseX = event.clientX;

      // Move the paddle to the x-coordinate of the mouse cursor.
      paddle.style.left = mouseX - paddle.offsetWidth / 2 + "px";
    }

    // Bind the moveBall and movePaddle functions to the appropriate events.
    window.addEventListener("mousemove", movePaddle);
    setInterval(moveBall, 100);
  </script>

  <style>
    body {
  background-color: #ffffff;
  margin: 0;
  padding: 0;
}

#game {
  width: 400px;
  height: 400px;
  border: 1px solid #000000;
  margin: 100px auto;
}

#ball {
  width: 20px;
  height: 20px;
  background-color: #ff0000;
  border-radius: 50%;
  position: absolute;
}

#paddle {
  width: 100px;
  height: 20px;
  background-color: #0000ff;
  border-radius: 5px;
  position: absolute;
}

  </style>
</body>
</html>
