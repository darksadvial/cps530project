<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>CPS 530 Project - Page 1</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">
    </head>
    <body>
        <div id="app">
            <!-- Navigation bar component. -->
            <nav-bar></nav-bar>

            <br>

            Page 1

            <br>
            <br>

            <br>
            <br>

            <!-- Made a component called card-container found in CardContainer.vue -->
            <card-container title="Put Whatever you want here">
                Test!
                <br>
                <br>
                <!-- Example of a button and dropdown. -->
                <b-btn v-b-toggle.code1 variant="primary">Show Code</b-btn>
                <b-collapse id="code1" class="mt-2">
                    <b-card>CODE HERE</b-card>
                </b-collapse>
            </card-contrainer>
        </div>
        <script type="text/javascript" src="{{ mix('js/app.js') }}"></script>
    </body>

    <style>
    </style>
</html>
