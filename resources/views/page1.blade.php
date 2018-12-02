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
            <div>
                <b-btn v-b-toggle.collapse1 variant="primary">Toggle Collapse</b-btn>
                <b-collapse id="collapse1" class="mt-2">
                    <b-card>
                    <p class="card-text">Collapse contents Here</p>
                    <b-btn v-b-toggle.collapse1_inner size="sm">Toggle Inner Collapse</b-btn>
                    <b-collapse id=collapse1_inner class="mt-2">
                        <b-card>Hello!</b-card>
                    </b-collapse>
                    </b-card>
                </b-collapse>
            </div>
        </div>
        <script type="text/javascript" src="{{ mix('js/app.js') }}"></script>
    </body>
</html>
