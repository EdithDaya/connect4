<?php 
session_start();
?>
<!DOCTYPE html>
<html>
<head>
  <title>Connect 4 Video Game</title>
<a href="signout.php"> CLICK HERE TO SIGNOUT </a>
</head>

<body>
<link rel="stylesheet" type="text/css" href="gamestyle.css">
<h1>
DIA DE LOS MUERTOS CONNECT 4
<img src="imageskull2.jpeg" alt="skull"width="200" height="200"</h2>
</h1>
<h2> LETS PLAY <?php echo $_SESSION['username']; ?> 

  <br>


<form>
  <div class="frame">
    <div class="square">
      <!--two classes-->
      <div class="gamegrid  column">
        <input type="radio" name="space11" tabindex="-1" required>
        <input type="radio" name="space11" tabindex="-1" required>
        <div class="disc"></div>

        <input type="radio" name="space12" tabindex="-1" required>
        <input type="radio" name="space12" tabindex="-1" required>
        <div class="disc"></div>
        <input type="radio" name="space13" tabindex="-1" required>
        <input type="radio" name="space13" tabindex="-1" required>
        <div class="disc"></div>
        <input type="radio" name="space14" tabindex="-1" required>
        <input type="radio" name="space14" tabindex="-1" required>
        <div class="disc"></div>
        <input type="radio" name="space15" tabindex="-1" required>
        <input type="radio" name="space15" tabindex="-1" required>
        <div class="disc"></div>
        <input type="radio" name="space16" tabindex="-1" required>
        <input type="radio" name="space16" tabindex="-1" required>
        <div class="disc"></div>

        <!--Column 1 -->
        <div class="column">
          <input type="radio" name="space21" tabindex="-1" required>
          <input type="radio" name="space21" tabindex="-1" required>
          <div class="disc"></div>

          <input type="radio" name="space22" tabindex="-1" required>
          <input type="radio" name="space22" tabindex="-1" required>
          <div class="disc"></div>

          <input type="radio" name="space23" tabindex="-1" required>
          <input type="radio" name="space23" tabindex="-1" required>
          <div class="disc"></div>

          <input type="radio" name="space24" tabindex="-1" required>
          <input type="radio" name="space24" tabindex="-1" required>
          <div class="disc"></div>

          <input type="radio" name="space25" tabindex="-1" required>
          <input type="radio" name="space25" tabindex="-1" required>
          <div class="disc"></div>
          <input type="radio" name="space
          26" tabindex="-1" required>
          <input type="radio" name="space26" tabindex="-1" required>
          <div class="disc"></div>

          <!--Column 2 -->
          <div class="column">
            <input type="radio" name="space31" tabindex="-1" required>
            <input type="radio" name="space31" tabindex="-1" required>
            <div class="disc"></div>
            <input type="radio" name="space32" tabindex="-1" required>
            <input type="radio" name="space32" tabindex="-1" required>
            <div class="disc"></div>
            <input type="radio" name="space33" tabindex="-1" required>
            <input type="radio" name="space33" tabindex="-1" required>
            <div class="disc"></div>
            <input type="radio" name="space34" tabindex="-1" required>
            <input type="radio" name="space34" tabindex="-1" required>
            <div class="disc"></div>
            <input type="radio" name="space35" tabindex="-1" required>
            <input type="radio" name="space35" tabindex="-1" required>
            <div class="disc"></div>
            <input type="radio" name="space36" tabindex="-1" required>
            <input type="radio" name="space36" tabindex="-1" required>
            <div class="disc"></div>

            <!--Column 3 -->
            <div class="column">
              <input type="radio" name="space41" tabindex="-1" required>
              <input type="radio" name="space41" tabindex="-1" required>
              <div class="disc"></div>
              <input type="radio" name="space42" tabindex="-1" required>
              <input type="radio" name="space42" tabindex="-1" required>
              <div class="disc"></div>
              <input type="radio" name="space43" tabindex="-1" required>
              <input type="radio" name="space43" tabindex="-1" required>
              <div class="disc"></div>
              <input type="radio" name="space44" tabindex="-1" required>
              <input type="radio" name="space44" tabindex="-1" required>
              <div class="disc"></div>
              <input type="radio" name="space45" tabindex="-1" required>
              <input type="radio" name="space45" tabindex="-1" required>
              <div class="disc"></div>
              <input type="radio" name="space46" tabindex="-1" required>
              <input type="radio" name="space46" tabindex="-1" required>
              <div class="disc"></div>

              <!--Column 4 -->
              <div class="column">
                <input type="radio" name="space51" tabindex="-1" required>
                <input type="radio" name="space51" tabindex="-1" required>
                <div class="disc"></div>
                <input type="radio" name="space52" tabindex="-1" required>
                <input type="radio" name="space52" tabindex="-1" required>
                <div class="disc"></div>
                <input type="radio" name="space53" tabindex="-1" required>
                <input type="radio" name="space53" tabindex="-1" required>
                <div class="disc"></div>
                <input type="radio" name="space54" tabindex="-1" required>
                <input type="radio" name="space54" tabindex="-1" required>
                <div class="disc"></div>
                <input type="radio" name="space55" tabindex="-1" required>
                <input type="radio" name="space55" tabindex="-1" required>
                <div class="disc"></div>
                <input type="radio" name="space56" tabindex="-1" required>
                <input type="radio" name="space56" tabindex="-1" required>
                <div class="disc"></div>

                <!--Column 5 -->
                <div class="column">
                  <input type="radio" name="space61" tabindex="-1" required>
                  <input type="radio" name="space61" tabindex="-1" required>
                  <div class="disc"></div>
                  <input type="radio" name="space62" tabindex="-1" required>
                  <input type="radio" name="space62" tabindex="-1" required>
                  <div class="disc"></div>
                  <input type="radio" name="space63" tabindex="-1" required>
                  <input type="radio" name="space63" tabindex="-1" required>
                  <div class="disc"></div>
                  <input type="radio" name="space64" tabindex="-1" required>
                  <input type="radio" name="space64" tabindex="-1" required>
                  <div class="disc"></div>
                  <input type="radio" name="space65" tabindex="-1" required>
                  <input type="radio" name="space65" tabindex="-1" required>
                  <div class="disc"></div>
                  <input type="radio" name="space66" tabindex="-1" required>
                  <input type="radio" name="space66" tabindex="-1" required>
                  <div class="disc"></div>

                  <!--Column 6 -->
                  <div class="column">
                    <input type="radio" name="space71" tabindex="-1" required>
                    <input type="radio" name="space71" tabindex="-1" required>
                    <div class="disc"></div>
                    <input type="radio" name="space72" tabindex="-1" required>
                    <input type="radio" name="space72" tabindex="-1" required>
                    <div class="disc"></div>
                    <input type="radio" name="space73" tabindex="-1" required>
                    <input type="radio" name="space73" tabindex="-1" required>
                    <div class="disc"></div>
                    <input type="radio" name="space74" tabindex="-1" required>
                    <input type="radio" name="space74" tabindex="-1" required>
                    <div class="disc"></div>
                    <input type="radio" name="space75" tabindex="-1" required>
                    <input type="radio" name="space75" tabindex="-1" required>
                    <div class="disc"></div>
                    <input type="radio" name="space76" tabindex="-1" required>
                    <input type="radio" name="space76" tabindex="-1" required>
                    <div class="disc"></div>

                    <!--Column 7 -->
                    <div class="column"></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="front"></div>
  </div>
  <button type="reset">New Game</button>
</form>


</body>
</html>