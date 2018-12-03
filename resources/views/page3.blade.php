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
            <nav-bar></nav-bar>
            
            <br>

            <!-- Main Body -->
            <div class="container" style="padding-bottom: 100px">
                <!-- Centers body -->
                <div class="row justify-content-center">
                    <!-- Keeps that scale action -->
                    <div class="col-md-12">
                        <div class="header-title">Creating a Great Looking Webpage</div>
                        <br>
                        VueJs is a framework that is easy to use, versitie, and makes visually appealing webpages.<br>
                        One of the key ways it makes developing web pages easy is it's intergration of HTML, Javascript and CSS all in one file.
                        The following is an example of how a Vue is layed out:
                        <br><br>
                        <b-card bg-variant="dark">
                            <p class="card-text">
<pre style="color: white">
&#x3C;template&#x3E;
    &#x3C;div&#x3E;
        HTML code goes here...
    &#x3C;/div&#x3E;
&#x3C;/template&#x3E;

&#x3C;script&#x3E;
    JavaScript code goes here...
&#x3C;/script&#x3E;

&#x3C;style&#x3E;
    CSS code goes here...
&#x3C;/style&#x3E;
</pre>
                            </p>
                        </b-card>
                        <br>
                        You can customize your website with classic HTML, Javascipt and CSS, but VueJs allows for additional functionality via components.
                        Vue components are resusable templates that can be called within Vue pages (think of it as a custom HTML tag):
                        one can create their own component and define it's inputs, ouputs, appearance and behavior.
                        Vue's bootstrap library offers you many pre-built options for you to customize your website.
                        <a href="https://bootstrap-vue.js.org/docs/components/alert">Bootstrap's official documentation</a> provides a list of all their components and examples for how to use them.
                        
                        <br><br><br>

                        <section>
                            <div class="header1">Presenting Text</div>
                            <br>
                            In this example we will be referenceing <a href="https://bootstrap-vue.js.org/docs/components/card">Vue Bootstrap cards</a>:<br>
                            Cards are visually appealing containers to hold text, images, buttons, etc... The cards header, footer, body and color all can be cusomized.
                            <br><br>
                            <div>
                                <b-card title="Example Card"
                                        img-src="https://upload.wikimedia.org/wikipedia/en/2/27/Bliss_%28Windows_XP%29.png"
                                        img-alt="Image"
                                        img-top
                                        tag="article"
                                        style="max-width: 20rem;"
                                        class="mb-2">
                                    <p class="card-text">
                                    Bliss is the name of the default computer wallpaper of Microsoft's Windows XP operating system. 
                                    </p>
                                    <b-button href="#" variant="primary">Example Button</b-button>
                                </b-card>
                                <br><br>
                                The following card was created using the following code placed inside the &#x3C;template&#x3E; tag:

                                <br><br>

                                <b-card bg-variant="dark">
                                <p class="card-text">
<pre style="color: white">
&#x3C;b-card title=&#x22;Example Card&#x22;
        img-src=&#x22;https://upload.wikimedia.org/wikipedia/en/2/27/Bliss_%28Windows_XP%29.png&#x22;
        img-alt=&#x22;Image&#x22;
        img-top
        tag=&#x22;article&#x22;
        style=&#x22;max-width: 20rem;&#x22;
        class=&#x22;mb-2&#x22;&#x3E;
    &#x3C;p class=&#x22;card-text&#x22;&#x3E;
    Bliss is the name of the default computer wallpaper of Microsoft&#x27;s Windows XP operating system. 
    &#x3C;/p&#x3E;
    &#x3C;b-button href=&#x22;#&#x22; variant=&#x22;primary&#x22;&#x3E;Example Button&#x3C;/b-button&#x3E;
&#x3C;/b-card&#x3E;
</pre>
                                    </p>
                                </b-card>
                                <br>
                                Notice the use of the &#x3C;b-card&#x3E; components, which look just like a regular HTML tag.
                                Customization is achieved through attributes within the tab.
                            </section>

                            <br><br><br>

                            <section>
                                <div class="header1">Presenting Images</div>
                                <br>
                                Another one of Vue's stengths is it's large and active community of creators; this allows us to download and install components from external sources.
                                <br>
                                In this example we will be showcasing a user created component that displays and arranges a set of images in a mossaic like fashion: <a href="https://www.npmjs.com/package/vue2-waterfall">https://www.npmjs.com/package/vue2-waterfall</a>
                                <br><br>
                                <Waterfall>
                                    <WaterfallItem><img src="https://images.pexels.com/photos/33109/fall-autumn-red-season.jpg?fit=crop&crop=entropy&w=3456&h=2304" width="200px" height="200px"></img></WaterfallItem>
                                    <WaterfallItem><img src="https://images.pexels.com/photos/33109/fall-autumn-red-season.jpg?fit=crop&crop=entropy&w=3456&h=2304" width="300px" height="300px"></img></WaterfallItem>
                                    <WaterfallItem><img src="https://images.pexels.com/photos/33109/fall-autumn-red-season.jpg?fit=crop&crop=entropy&w=3456&h=2304" width="200px" height="300px"></img></WaterfallItem>
                                    <WaterfallItem><img src="https://images.pexels.com/photos/33109/fall-autumn-red-season.jpg?fit=crop&crop=entropy&w=3456&h=2304" width="200px" height="200px"></img></WaterfallItem>
                                    <WaterfallItem><img src="https://images.pexels.com/photos/33109/fall-autumn-red-season.jpg?fit=crop&crop=entropy&w=3456&h=2304" width="150px" height="150px"></img></WaterfallItem>
                                </Waterfall>
                                <br><br>
                                <b-card bg-variant="dark">
                                <p class="card-text">
<pre style="color: white">
&#x3C;Waterfall&#x3E;
    &#x3C;WaterfallItem&#x3E;&#x3C;img src=&#x22;https://images.pexels.com/photos/33109/fall-autumn-red-season.jpg?fit=crop&#x26;crop=entropy&#x26;w=3456&#x26;h=2304&#x22; width=&#x22;200px&#x22; height=&#x22;200px&#x22;&#x3E;&#x3C;/img&#x3E;&#x3C;/WaterfallItem&#x3E;
    &#x3C;WaterfallItem&#x3E;&#x3C;img src=&#x22;https://images.pexels.com/photos/33109/fall-autumn-red-season.jpg?fit=crop&#x26;crop=entropy&#x26;w=3456&#x26;h=2304&#x22; width=&#x22;300px&#x22; height=&#x22;300px&#x22;&#x3E;&#x3C;/img&#x3E;&#x3C;/WaterfallItem&#x3E;
    &#x3C;WaterfallItem&#x3E;&#x3C;img src=&#x22;https://images.pexels.com/photos/33109/fall-autumn-red-season.jpg?fit=crop&#x26;crop=entropy&#x26;w=3456&#x26;h=2304&#x22; width=&#x22;200px&#x22; height=&#x22;300px&#x22;&#x3E;&#x3C;/img&#x3E;&#x3C;/WaterfallItem&#x3E;
    &#x3C;WaterfallItem&#x3E;&#x3C;img src=&#x22;https://images.pexels.com/photos/33109/fall-autumn-red-season.jpg?fit=crop&#x26;crop=entropy&#x26;w=3456&#x26;h=2304&#x22; width=&#x22;200px&#x22; height=&#x22;200px&#x22;&#x3E;&#x3C;/img&#x3E;&#x3C;/WaterfallItem&#x3E;
    &#x3C;WaterfallItem&#x3E;&#x3C;img src=&#x22;https://images.pexels.com/photos/33109/fall-autumn-red-season.jpg?fit=crop&#x26;crop=entropy&#x26;w=3456&#x26;h=2304&#x22; width=&#x22;150px&#x22; height=&#x22;150px&#x22;&#x3E;&#x3C;/img&#x3E;&#x3C;/WaterfallItem&#x3E;
&#x3C;/Waterfall&#x3E;

</pre>
                                    </p>
                                </b-card>
                                <br>
                                Due to component's ability to simplify complex code into simple tags we are able to achieve with only a few lines of code what would require many times more if using classic HTML and CSS.
                            </section>
                            
                            <br><br><br>

                            <section>
                                <div class="header1">Presenting Screens Within a Page</div>
                                <br>
                                We can also display separate screen without leaving the current page with the use of Modalds.
                                <br><br>
                                <div>
                                    <b-btn v-b-modal.modal1>Click Me!</b-btn>
                                    <b-modal id="modal1" title="Example Model">
                                        <p class="my-4">Place any text you want here.</p>
                                    </b-modal>
                                </div>
                                <br>
                                And like the other examples, it is done with very few lines of code:
                                <br><br>
                                <b-card bg-variant="dark">
                                    <p class="card-text">
<pre style="color: white">
&lt;div&gt;
    &lt;b-btn v-b-modal.modal1&gt;Click Me!&lt;/b-btn&gt;
    &lt;b-modal id="modal1" title="Example Model"&gt;
        &lt;p class="my-4"&gt;Place any text you want here.&lt;/p&gt;
    &lt;/b-modal&gt;
&lt;/div&gt;
</pre>
                                    </p>
                                </b-card>
                            </section>

                            <br>

                            The following are just a few examples of the limitless cusomizability that VueJS offers.
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script type="text/javascript" src="{{ mix('js/app.js') }}"></script>
    </body>
</html>
