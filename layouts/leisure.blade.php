<!DOCTYPE html>
<html>
    <head>
        {{ Theme::partial('seostuff') }} 
        {{ Theme::asset()->styles() }} 
        {{ Theme::partial('defaultcss') }} 
    </head>
    <body>
        {{ Theme::partial('header') }} 
        <div class="section_container">
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
        {{ Theme::partial('analytic') }} 
    </body>
</html>