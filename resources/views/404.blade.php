<html>
  <title>Compromís - Error 404</title>
  <head>
    <meta charset="UTF-8">
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
      }

      body {
        margin: 0;
      }

      h1 {
        font-size: 8rem;
        color: var(--primary);
        margin: 1rem 0;
      }

      p {
        color: var(--body-color);
        font-size: 2.25rem;
        margin: 1rem 0;
      }

      .container {
        display: grid;
        grid-template-columns: .75fr 1fr;
        font-family: Compromis, sans-serif;
        margin: 0 auto;
        max-width: 1200px;
        align-content: center;
        justify-content: center;
        height: 100vh;
        gap: 2rem;
        padding: 0 2rem;
      }

      svg {
        justify-self: center;
        width: 290px;
        height: auto;
      }

      .st1 {
        fill: var(--gray);
        opacity: 0.4;
      }

      .error-number {
        color: var(--gray);
        font-size: 2.25rem;
      }

      a.apple-link {
        display: block;
        position: relative;
        margin-top: 1.25rem;
        font-size: 1.5rem;
        font-weight: 700;
        color: var(--primary);
        text-decoration: none;
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
          padding: 0 2rem;
        }

        h1 {
          font-size: 5rem;
        }

        p,
        .error-number {
          font-size: 1.5rem;
        }

        svg {
          justify-self: start;
          width: 200px;
        }
      }
    </style>
  </head>

  <body>
    <div class="container">
      <svg x="0px" y="0px" viewBox="0 0 462 312.1" xml:space="preserve">
        <g class="st0">
          <path class="st1" d="M25.3,312.1L0,279.8c65.8-54.5,140.1-82.6,231-82.6c90.9,0,165.2,28.1,231,82.6l-25.3,32.4
            c-65.2-46.4-118.6-67.8-205.8-67.8S90.5,265.7,25.3,312.1" />
          <path class="st1"
            d="M121.6,0h72.3v69.1h-66.6c-41.7,0-69-10.2-86.7-50.4l27.8-16c12.5,25.6,27.8,31.6,53.2,31.6V0z" />
          <rect x="292.2" y="0" class="st1" width="72.3" height="69.1" />
        </g>
      </svg>
      <div>
        <div class="error-number">Error 404</div>
        <h1>Ups...</h1>
        <p>Sembla que la pàgina que busques ja no està.</p>
        <a class="apple-link" href="https://www.compromis.net"><span>Torna a la pàgina principal</span></a>
      </div>
    </div>
  </body>
</html>
