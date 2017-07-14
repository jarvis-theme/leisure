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
                {{ Theme::place('content') }} 
                {{ Theme::partial('subscribe') }} 
            </section>
        </div>
        {{ Theme::partial('footer') }} 
        {{ Theme::partial('defaultjs') }} 
        {{ Theme::partial('analytic') }} 
    </body>
</html>