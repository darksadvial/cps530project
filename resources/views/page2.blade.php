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

            <div class="container" style="padding-bottom: 100px">
                <!-- Centers body -->
                <div class="row justify-content-center">
                    <!-- Keeps that scale action -->
                    <div class="col-md-12">
                        <div class="header-title">Setting up VueJs and Laravel</div>
                        <br>
                        The following is a short step by step tutorial/guide demonstrating how to install and setup VueJs and Laravel powered website.
                        <br>
                        This tutorial will be done on windows machine.
                        
                        <br><br>

                        <section>
                            <div class="header1">Required Software</div>
                            <span>Click text for more information:</span>
                            <br>
                        
                            <a v-b-toggle.collapse-soft-1 href="#/" style="text-decoration: none; color: black"><b-badge>></b-badge> GitBash</a>
                            <b-collapse id="collapse-soft-1" class="mt-2">
                                <b-card bg-variant="dark" text-variant="white">
                                    <p class="card-text">Download Link: <a href="https://git-scm.com/downloads">https://git-scm.com/downloads</a></p>
                                </b-card>
                            </b-collapse>

                            <br>

                            <a v-b-toggle.collapse-soft-2 href="#/" style="text-decoration: none; color: black"><b-badge>></b-badge> PHP</a>
                            <b-collapse id="collapse-soft-2" class="mt-2">
                                <b-card bg-variant="dark" text-variant="white">
                                    <p class="card-text">
                                        Download Link: <a href="https://windows.php.net/download#php-7.2">https://windows.php.net/download#php-7.2</a><br><br>
                                        <strong>Installation Notes</strong><br>
                                        Extract zip into a folder where you wish to install it eg. C:\<br>
                                        Add C:\php to the system environment path.<br>
                                        You should be able to run php -v in git bash or windows cmd to see if it works.
                                    </p>
                                </b-card>
                            </b-collapse>

                            <br>

                            <a v-b-toggle.collapse-soft-3 href="#/" style="text-decoration: none; color: black"><b-badge>></b-badge> Composer</a>
                            <b-collapse id="collapse-soft-3" class="mt-2">
                                <b-card bg-variant="dark" text-variant="white">
                                    <p class="card-text">
                                        Download Link: <a href="https://getcomposer.org/download/">https://getcomposer.org/download/</a><br><br>
                                        <strong>Installation Notes</strong><br>
                                        Should be able to run composer in git or cmd.
                                    </p>
                                </b-card>
                            </b-collapse>
                            
                            <br>

                            <a v-b-toggle.collapse-soft-4 href="#/" style="text-decoration: none; color: black"><b-badge>></b-badge> NPM Node.js</a>
                            <b-collapse id="collapse-soft-4" class="mt-2">
                                <b-card bg-variant="dark" text-variant="white">
                                    <p class="card-text">
                                        Download Link: <a href="https://www.npmjs.com/get-npm">https://www.npmjs.com/get-npm</a><br><br>
                                        <strong>Installation Notes</strong><br>
                                        Should be able to run npm in git or cmd.
                                    </p>
                                </b-card>
                            </b-collapse>
                        </section>

                        <br><br>

                        <section>
                            <div class="header1">Installing Laravel</div>
                            <br>
                            Open GitBash and navigate to the folder you wish to start your project in.
                            <br>
                            <br>
                            Run commands:
                            <br><br>
                            <b-card bg-variant="dark" text-variant="white">
                                <p class="card-text">composer create-project --prefer-dist laravel/laravel yourProjectName</p>
                            </b-card>
                            <br>
                            The following creates a folder under your chosen project name and initial laravel files.
                        </section>

                        <br><br>

                        <section>
                            <div class="header1">Installing VueJs</div>
                            <br>
                            Go into the project folder:
                            <br><br>
                            <b-card bg-variant="dark" text-variant="white">
                                <p class="card-text">cd yourProjectName</p>
                            </b-card>
                            <br><br>
                            Install all dependencies:
                            <br><br>
                            <b-card bg-variant="dark" text-variant="white">
                                <p class="card-text">npm install</p>
                            </b-card>
                            <br>
                            This process should take around 5 minutes.
                        </section>

                        <br><Br>

                        <section>
                            <div class="header1">Developing Your Website Locally</div>
                            <br>
                            To locally deply the server, run the following command while inside the project folder:
                            <br><br>
                            <b-card bg-variant="dark" text-variant="white">
                                <p class="card-text">php artisan serve</p>
                            </b-card>
                            <br><Br>
                            The website requires compiling everytime you make a change in the code, open another GitBash windows directing it to the project folder and run the following command:
                            <br><br>
                            <b-card bg-variant="dark" text-variant="white">
                                <p class="card-text">npm run watch</p>
                            </b-card>
                            <br><br>
                            Keep both GitBash windows open while developing to view changes on your website.
                            <br>
                            To access your website, open your desired browser and navagate to the url:
                            <br><br>
                            <b-card bg-variant="dark" text-variant="white">
                                <p class="card-text"><a href="localhost:8000/" style="color: white">localhost:8000/</a></p>
                            </b-card>
                        </section>
                    </div>
                </div>
            </div>
        </div>
        <script type="text/javascript" src="{{ mix('js/app.js') }}"></script>
    </body>
</html>
