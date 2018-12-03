<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>CPS 530 Project</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">
    </head>
    <body>
        <div id="app">
            <nav-bar></nav-bar>
            Welcome

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

            <br>
            <br>

            <image-loader src="https://images.pexels.com/photos/33109/fall-autumn-red-season.jpg?fit=crop&crop=entropy&w=3456&h=2304" width="864px" height="476px"></image-loader>

            <br>
            <br>

            <Waterfall>
                <WaterfallItem><image-loader src="https://images.pexels.com/photos/33109/fall-autumn-red-season.jpg?fit=crop&crop=entropy&w=3456&h=2304" width="400px" height="300px"></image-loader></WaterfallItem>
                <WaterfallItem><image-loader src="https://images.pexels.com/photos/33109/fall-autumn-red-season.jpg?fit=crop&crop=entropy&w=3456&h=2304" width="200px" height="200px"></image-loader></WaterfallItem>
                <WaterfallItem><image-loader src="https://images.pexels.com/photos/33109/fall-autumn-red-season.jpg?fit=crop&crop=entropy&w=3456&h=2304" width="500px" height="100px"></image-loader></WaterfallItem>
                <WaterfallItem>test</WaterfallItem>
            </Waterfall>
        </div>
        <script type="text/javascript" src="{{ mix('js/app.js') }}"></script>
    </body>
</html>