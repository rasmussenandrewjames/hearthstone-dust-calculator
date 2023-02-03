<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Hearthstone Dust Calculator</title>
    <meta name="description" content="A simple Hearthstone dust calculator to easily calculate the amount of dust needed for a set of cards based on rarity.">
    <link rel="stylesheet" href="/css/styles.css">
    <link rel="icon" type="image/png" href="favicon.png">
  </head>
  <body>
    <div class="overlay"></div>
    <main>
      <div class="container">
        <h1>Hearthstone Dust Calculator</h1>
        <div id="addCardContainer">
          <h2>Card Type:</h2>
          <ul>
            <li>
              <span class="common"></span>
              <button type="button" name="addCard" id="common">Add</button>
            </li>
            <li>
              <span class="rare"></span>
              <button type="button" name="addCard" id="rare">Add</button>
            </li>
            <li>
              <span class="epic"></span>
              <button type="button" name="addCard" id="epic">Add</button>
            </li>
            <li>
              <span class="legendary"></span>
              <button type="button" name="addCard" id="legendary">Add</button>
            </li>
          </ul>
          <button type="button" id="reset">Reset</button>
        </div>
        <p id="totalDustCost"></p>
      </div>
    </main>
    <footer>
      <a href="https://github.com/rasmussenandrewjames/hearthstone-dust-calculator" target="_blank">GitHub</a>
    </footer>
    <script type="text/javascript" src="/js/main.js"></script>
  </body>
</html>
