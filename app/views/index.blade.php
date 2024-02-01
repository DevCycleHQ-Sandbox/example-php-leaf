<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="icon" href="{{ assets('img/favicon.svg') }}">
    <link rel="stylesheet" href="{{ assets('css/styles.css') }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DevCycle PHP Example</title>

</head>

<body>
    <div class="App">
      <div class="App-header">
        <p>Demo Application</p>
        <img
          height="46"
          src="{{ assets('img/devcycle-togglebot-full-colour.svg') }}"
          alt="DevCycle"
        />
      </div>

      <div class="App-wrapper">

        @include('togglebot')
        @include('description')

      </div>

      <p>Reload the page to view changes.</p>

      <a
        class="App-link"
        href="https://docs.devcycle.com/sdk/server-side-sdks/php/"
        target="_blank"
        rel="noopener noreferrer"
      >
        DevCycle PHP SDK Docs
      </a>
    </div>
  </body>

</html>
