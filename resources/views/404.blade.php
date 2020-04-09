<html>
  <title>Compromís - Error 404</title>
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <style>
      @font-face {
        font-family: "Compromis";
        src:
          url("https://compromis.net/wp-content/themes/Compromis/fonts/Manrope-ExtraBold.woff2") format("woff2"),
          url("https://compromis.net/wp-content/themes/Compromis/fonts/Manrope-ExtraBold.ttf") format("ttf");
        font-weight: bold;
        font-style: normal;
      }

      @font-face {
        font-family: "Compromis";
        src:
          url("https://compromis.net/wp-content/themes/Compromis/fonts/Manrope-Medium.woff2") format("woff2"),
          url("https://compromis.net/wp-content/themes/Compromis/fonts/Manrope-Medium.ttf") format("ttf");
        font-weight: normal;
        font-style: normal;
      }

      :root {
        --body-color: #353949;
        --gray: #979aa4;
        --primary: #ff6720;
        --gradient-start: #d23517;
        --gradient-end: #f39128;
      }

      body {
        font-family: Compromis, sans-serif;
        margin: 0;
      }

      h1 {
        font-size: 8rem;
        margin: 0;
        letter-spacing: -0.04em;
        color: var(--primary);
        background: linear-gradient(45deg, var(--gradient-start), var(--gradient-end));
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        width: fit-content;
      }

      p {
        color: var(--body-color);
        font-size: 2.25rem;
        margin: 1rem 0;
        line-height: 1.25;
        letter-spacing: -0.03em;
      }

      .container {
        display: grid;
        grid-template-columns: 1fr 1.5fr;
        min-height: 100vh;
      }

      .careta {
        display: flex;
        justify-content: center;
        align-content: center;
        background: linear-gradient(45deg, var(--gradient-start), var(--gradient-end));
        padding: 3rem;
      }

      .error-content {
        display: flex;
        flex-direction: column;
        justify-content: center;
        padding: 4rem;
      }

      svg {
        justify-self: center;
        width: 100%;
        max-width: 20vw;
        height: auto;
      }

      .careta-path {
        fill: white;
      }

      .error-number {
        color: var(--gray);
        font-size: 2.25rem;
        letter-spacing: -0.03em;
      }

      a.apple-link {
        display: block;
        position: relative;
        margin-top: 1.25rem;
        font-size: 1.5rem;
        font-weight: 700;
        color: var(--primary);
        background: linear-gradient(45deg, var(--gradient-start), var(--gradient-end));
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        width: fit-content;
        text-decoration: none;
        letter-spacing: -0.03em;
      }

      a.apple-link span {
        transition: 0.25s ease-in-out;
        border-bottom: 2px solid transparent;
      }

      a.apple-link:hover {
        text-decoration: none;
        color: var(--primary);
      }

      a.apple-link:hover span {
        border-color: var(--primary);
      }

      a.apple-link::before {
        content: "< ";
      }

      @media (max-width: 800px) {
        .container {
          grid-template-columns: 1fr;
        }

        .error-content {
          padding: 2rem;
        }

        h1 {
          font-size: 5rem;
        }

        p,
        .error-number {
          font-size: 1.5rem;
        }

        a.apple-link {
          font-size: 1rem;
        }

        svg {
          justify-self: center;
          width: 200px;
        }
      }
    </style>
  </head>

  <body>
    <div class="container">
      <div class="careta">
        <svg x="0px" y="0px" viewBox="0 0 462 312.1" xml:space="preserve">
          <g class="st0">
            <path class="careta-path" d="M25.3,312.1L0,279.8c65.8-54.5,140.1-82.6,231-82.6c90.9,0,165.2,28.1,231,82.6l-25.3,32.4
              c-65.2-46.4-118.6-67.8-205.8-67.8S90.5,265.7,25.3,312.1" />
            <path class="careta-path"
              d="M121.6,0h72.3v69.1h-66.6c-41.7,0-69-10.2-86.7-50.4l27.8-16c12.5,25.6,27.8,31.6,53.2,31.6V0z" />
            <rect x="292.2" y="0" class="careta-path" width="72.3" height="69.1" />
          </g>
        </svg>
      </div>
      <div class="error-content">
        <div class="error-number">Error 404</div>
        <h1>Ups...</h1>
        <p>Sembla que la pàgina que busques ja no existeix.</p>
        <a class="apple-link" href="/"><span>Torna a la pàgina principal</span></a>
      </div>
    </div>
  </body>
</html>
