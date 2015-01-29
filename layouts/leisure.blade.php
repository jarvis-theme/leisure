<!DOCTYPE html>
<html>
    <head>
        <title>{{ Theme::place('title') }}</title>
        <meta charset="utf-8">
        {{ Theme::partial('seostuff') }}
        {{ Theme::partial('defaultcss') }}
        <!--Google Webfont -->
        <link href='http://fonts.googleapis.com/css?family=Istok+Web' rel='stylesheet' type='text/css'>
        {{ Theme::asset()->styles() }}        
    </head>
    <body>
        {{ Theme::partial('header') }}
        <div class="section_container">
            <!--Mid Section Starts-->
            <section>
                {{ Theme::partial('slider') }}
                <div class="container">
                    {{ Theme::place('content') }}
                </div>
                {{ Theme::partial('subscribe') }}
            </section>
        </div>
        {{ Theme::partial('footer') }}
        {{ Theme::partial('defaultjs') }}
        {{ Theme::asset()->scripts() }}
        {{ Theme::asset()->container('footer')->scripts() }}
        {{ Theme::partial('analytic') }}
    </body>
</html>